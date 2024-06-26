<?php

namespace App\Http\Controllers\Admin;
use App\Models\Slider;
use Illuminate\Http\Request;
use App\Services\SliderService;
use App\Http\Trait\FileHandling;
use Yajra\DataTables\DataTables;
use App\Http\Controllers\Controller;
use App\Http\Requests\SliderRequest;


class SliderController extends Controller
{

    use FileHandling;
    /**
     * Display a listing of the resource.
     */

    public function index()
    {
        return view('admin.sliders');
    }

    public function getAll(SliderService $sliderService)
    {
        $sliders = $sliderService->all();
        return DataTables::of($sliders)
        ->addColumn('id', function ($slider) {
            return $slider->id;
        })
        ->addColumn('title', function ($slider) {
            return $slider->title;
        })
        ->addColumn('type', function ($slider) {
            return $slider->type;
        })
        ->addColumn('position', function ($slider) {
            return $slider->position;
        })
        ->addColumn('image', function ($slider) {
            return '<img src="' .asset($slider->image) . '" width="70" height="50">';
        })
        ->addColumn('action', function($slider){
            $editRoute = route('sliders.edit', $slider->id);
            $destroyRoute = route('sliders.destroy', $slider->id);
            return view('admin.windows.action_button', get_defined_vars())->render();
        })
        ->rawColumns(['image', 'action'])
        ->make(true);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $html = view('admin.windows.slider')->render();
        return Response()->json(['code' => 200, 'data' => ['html' => $html], 'message' => 'Success']);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(SliderRequest $request, SliderService $sliderService)
    {
        $slider = $sliderService->createSlider($request->validated(), $request->image);

        if ($slider) {
            return Response()->json(['code' => 200, 'data' => ['slider' => $slider], 'message' => 'Added Successfully']);
        } else {
            return Response()->json(['code' => 400, 'message' =>  'Cant Add this item']);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id, SliderService $sliderService)
    {
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id, SliderService $sliderService)
    {
        $slider = $sliderService->findById($id);
        $html = view('admin.windows.slider', get_defined_vars())->render();
        return Response()->json(['code' => 200, 'data' => ['html' => $html], 'message' => 'Success']);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id, SliderService $sliderService)
    {
        if ($sliderService->updateSlider($id,$request)) {
            return Response()->json(['code' => 200, 'message' => 'Updated Successfully']);
        } else {
            return Response()->json(['code' => 400, 'message' =>  'Cant update this item']);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id, SliderService $sliderService)
    {
        $slider = $sliderService->findById($id);
        $this->deleteFile($slider->image);
        $sliderService->delete($id);
        return Response()->json(['code' => 200, 'message' => 'Deleted Successfully']);
    }
}
