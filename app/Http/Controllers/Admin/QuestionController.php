<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use App\Services\QuestionService;
use App\Http\Controllers\Controller;
use App\Http\Requests\QuestionRequest;

class QuestionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.faqs');
    }

    public function getAll(QuestionService $questionService)
    {
        $questions = $questionService->all();
        return DataTables::of($questions)
        ->addColumn('id', function ($question) {
            return $question->id;
        })
        ->addColumn('title', function ($question) {
            return $question->title;
        })
        ->addColumn('action', function($question){
            $editRoute = route('faqs.edit', $question->id);
            $destroyRoute = route('faqs.destroy', $question->id);
            return view('admin.windows.action_button', get_defined_vars())->render();
        })
        ->rawColumns(['action'])
        ->make(true);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $html = view('admin.windows.question')->render();
        return Response()->json(['code' => 200, 'data' => ['html' => $html], 'message' => 'Success']);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(QuestionRequest $request, QuestionService $questionService)
    {
        $question = $questionService->create($request->validated());

        if ($question) {
            return Response()->json(['code' => 200, 'data' => ['question' => $question], 'message' => 'Added Successfully']);
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
    public function edit(string $id, QuestionService $questionService)
    {
        $question = $questionService->findById($id);
        $html = view('admin.windows.question', get_defined_vars())->render();
        return Response()->json(['code' => 200, 'data' => ['html' => $html], 'message' => 'Success']);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(QuestionRequest $request, string $id, QuestionService $questionService)
    {
        if ($questionService->update($id, $request->validated())) {
            return Response()->json(['code' => 200, 'message' => 'Updated Successfully']);
        } else {
            return Response()->json(['code' => 400, 'message' =>  'Cant update this item']);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id, QuestionService $questionService)
    {
        $questionService->delete($id);
        return Response()->json(['code' => 200, 'message' => 'Deleted Successfully']);
    }
}
