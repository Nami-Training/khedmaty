<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Services\BlogService;
use Yajra\DataTables\DataTables;
use App\Http\Controllers\Controller;
use App\Http\Requests\BlogRequest;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.blogs');
    }

    public function getAll(BlogService $blogService)
    {
        $blogs = $blogService->all();
        return DataTables::of($blogs)
        ->addColumn('id', function ($blog) {
            return $blog->id;
        })
        ->addColumn('title', function ($blog) {
            return $blog->title;
        })
        ->addColumn('description', function ($blog) {
            return '<p style="width: 500px; overflow: hidden; text-overflow: ellipsis;">'.$blog->description.'</p>';
        })
        ->addColumn('image', function ($blog) {
            return '<img src="' .asset($blog->image) . '" width="70" height="50">';
        })
        ->addColumn('action', function($blog){
            $editRoute = route('blogs.edit', $blog->id);
            $destroyRoute = route('blogs.destroy', $blog->id);
            return view('admin.windows.action_button', get_defined_vars())->render();
        })
        ->rawColumns(['image', 'action', 'description'])
        ->make(true);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $html = view('admin.windows.blog')->render();
        return Response()->json(['code' => 200, 'data' => ['html' => $html], 'message' => 'Success']);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(BlogRequest $request, BlogService $blogService)
    {
        $blog = $blogService->createBlog($request->validated(), $request->image);

        if ($blog) {
            return Response()->json(['code' => 200, 'data' => ['blog' => $blog], 'message' => 'Added Successfully']);
        }
        return Response()->json(['code' => 400, 'message' =>  'Cant Add this item']);
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
    public function edit(string $id, BlogService $blogService)
    {
        $blog = $blogService->findById($id);
        $html = view('admin.windows.blog', get_defined_vars())->render();
        return Response()->json(['code' => 200, 'data' => ['html' => $html], 'message' => 'Success']);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id, BlogService $blogService)
    {
        if ($blogService->updateBlog($id,$request)) {
            return Response()->json(['code' => 200, 'message' => 'Updated Successfully']);
        } else {
            return Response()->json(['code' => 400, 'message' =>  'Cant update this item']);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id, BlogService $blogService)
    {
        $blogService->delete($id);
        return Response()->json(['code' => 200, 'message' => 'Deleted Successfully']);
    }
}
