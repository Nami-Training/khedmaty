<?php

namespace App\Http\Controllers;

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
    public function index(SliderService $sliderService)
    {
        $sliders = $sliderService->all();
        return view('admin.sliders', get_defined_vars());
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
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(SliderRequest $request, SliderService $sliderService)
    {
        $slider = $sliderService->createSlider($request->validated(), $request->image);

        if($slider){
            return Response()->json(['message' => 'Added Successfully'], 200);
        }else{
            return Response()->json(['message' => 'Cant Add this item'], 401);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
