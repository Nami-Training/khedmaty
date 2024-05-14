<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use App\Http\Controllers\Controller;
use App\Http\Requests\TestimonialRequest;
use App\Services\TestimonialService;

class TestimonialController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.testimonials');
    }

    public function getAll(TestimonialService $testimonialService)
    {
        $testimonials = $testimonialService->all();
        return DataTables::of($testimonials)
        ->addColumn('id', function ($testimonial) {
            return $testimonial->id;
        })
        ->addColumn('name', function ($testimonial) {
            return $testimonial->name;
        })
        ->addColumn('image', function ($testimonial) {
            return '<img src="' .asset($testimonial->image) . '" width="70" height="50">';
        })
        ->addColumn('action', function($testimonial){
            $editRoute = route('testimonials.edit', $testimonial->id);
            $destroyRoute = route('testimonials.destroy', $testimonial->id);
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
        $html = view('admin.windows.testimonial')->render();
        return Response()->json(['code' => 200, 'data' => ['html' => $html], 'message' => 'Success']);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(TestimonialRequest $request, TestimonialService $testimonialService)
    {
        $testimonial = $testimonialService->createTestimonial($request->validated(), $request->image);

        if ($testimonial) {
            return Response()->json(['code' => 200, 'data' => ['testimonial' => $testimonial], 'message' => 'Added Successfully']);
        } else {
            return Response()->json(['code' => 400, 'message' =>  'Cant Add this item']);
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
    public function edit(string $id, TestimonialService $testimonialService)
    {
        $testimonial = $testimonialService->findById($id);
        $html = view('admin.windows.testimonial', get_defined_vars())->render();
        return Response()->json(['code' => 200, 'data' => ['html' => $html], 'message' => 'Success']);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id, TestimonialService $testimonialService)
    {
        if ($testimonialService->updateTestimonial($id,$request)) {
            return Response()->json(['code' => 200, 'message' => 'Updated Successfully']);
        } else {
            return Response()->json(['code' => 400, 'message' =>  'Cant update this item']);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id, TestimonialService $testimonialService)
    {
        $testimonialService->delete($id);
        return Response()->json(['code' => 200, 'message' => 'Deleted Successfully']);
    }
}
