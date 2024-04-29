<?php

namespace App\Http\Controllers;

use App\DataTables\SlidersDataTable;
use App\Http\Requests\SliderRequest;
use App\Models\Slider;
use Illuminate\Http\Request;
use App\Services\SliderService;
use App\Http\Trait\FileHandling;

class SliderController extends Controller
{

    /**
     * Display a listing of the resource.
     */
    public function index(SlidersDataTable $dataTable)
    {
        return $dataTable->render('admin.sliders');
    }

    public function getAll(SliderService $sliderService)
    {
        $sliders = $sliderService->all();
        return Response()->json(['data' => $sliders], 200);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $html = '<form class="row g-3 from-submit-update-global" method="post" action="'.route('sliders.store').'" " enctype="multipart/form-data"> '.csrf_field(). '
            <div class="col-6">
                <label for="TextInput" class="form-label">Title</label>
                <input type="text" name="title" class="form-control" data-validation="required">
            </div>
                <div class="col-6">
                <label for="TextInput" class="form-label">Description</label>
                <textarea class="form-control" rows="2" name="description"></textarea>
            </div>
            <div class="col-6">
                <label for="TextInput" class="form-label">Link </label>
                <input type="text" name="link" class="form-control" data-validation="required">
            </div>
            <div class="col-6">
                <label for="TextInput" class="form-label">Type</label>
                <select name="type" class="form-control" data-validation="required">
                    <option value="">Choose </option>
                    <option value="app" >App</option>
                    <option value="web" >Web</option>
                    <option value="all" >All</option>
                </select>
            </div>
            <div class="col-6">
                <label for="TextInput" class="form-label">Postion  </label>
                <select name="position" class="form-control" data-validation="required">
                    <option value="">Choose </option>
                    <option value="main" >Main</option>
                    <option value="top_right"  >Top Right </option>
                    <option value="bottom_right" >Bottom Right </option>
                    <option value="left" >Left </option>
                </select>
            </div>
            <div class="col-6">
                <label for="TextInput" class="form-label">Image  </label>
                <input type="file"  name="image" class="dropify">
            </div>
            <div class="col-12 modal-footer">
                <button class="btn btn-primary" type="submit">Save</button>
                <button class="btn btn-outline-secondary" type="button" data-bs-dismiss="modal">Colse</button>
            </div>
        </form>"';
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
        $html = '<form class="row g-3 from-submit-update-global" method="post" action="'.route('sliders.update', $slider->id).'" " enctype="multipart/form-data"> '.csrf_field(). '' .method_field('put').'
            <div class="col-6">
                <label for="TextInput" class="form-label">Title</label>
                <input type="text" value="'.$slider->title.'" name="title" class="form-control" data-validation="required">
            </div>
                <div class="col-6">
                <label for="TextInput" class="form-label">Description</label>
                <textarea class="form-control" rows="2" name="description">'.$slider->description.'</textarea>
            </div>
            <div class="col-6">
                <label for="TextInput" class="form-label">Link </label>
                <input type="text" name="link" value="'.$slider->link.'" class="form-control" data-validation="required">
            </div>
            <div class="col-6">
                <label for="TextInput" class="form-label">Type</label>
                <select name="type" class="form-control" data-validation="required">
                    <option value="">Choose </option>
                    <option value="app" '.( $slider->type == "app" ? "selected" : "" ).' >App</option>
                    <option value="web" '.( $slider->type == "web" ? "selected" : "" ).' >Web</option>
                    <option value="all" '.( $slider->type == "all" ? "selected" : "" ).' >All</option>
                </select>
            </div>
            <div class="col-6">
                <label for="TextInput" class="form-label">Position  </label>
                <select name="position" class="form-control" data-validation="required">
                    <option value="">Choose </option>
                    <option value="main" '.( $slider->position == "main" ? "selected" : "" ).' >Main</option>
                    <option value="top_right" '.( $slider->position == "top_right" ? "selected" : "" ).' >Top Right </option>
                    <option value="bottom_right" '.( $slider->position == "bottom_right" ? "selected" : "" ).' >Bottom Right </option>
                    <option value="left" '.( $slider->position == "left" ? "selected" : "" ).' >Left </option>
                </select>
            </div>
            <div class="col-6">
                <label for="TextInput" class="form-label">Image  </label>
                <input type="file" data-default-file="'.asset($slider->image).'"  name="image" class="dropify">
            </div>
            <div class="col-12 modal-footer">
                <button class="btn btn-primary" type="submit">Save</button>
                <button class="btn btn-outline-secondary" type="button" data-bs-dismiss="modal">Colse</button>
            </div>
        </form>"';
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
        $sliderService->delete($id);
        return Response()->json(['code' => 200, 'message' => 'Deleted Successfully']);
    }
}
