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
            return '<button type="button" class="btn btn-primary editButton" data-bs-toggle="modal" data-bs-target="#createModal" model-route="'.route('faqs.edit', $question->id).'" model-title=" "> <i class="fa fa-pencil"></i> </button>
            <button type="button" class="btn btn-danger deleteButton"  delete-route="'.route('faqs.destroy', $question->id).'"> <i class="fa fa-trash-o"></i> </button>';
        })
        ->rawColumns(['action'])
        ->make(true);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $html = '<form class="row from-submit-global g-3 " method="post" action="'.route('faqs.store').'" " enctype="multipart/form-data"> '.csrf_field(). '
            <div class="col-12">
                <label for="TextInput" class="form-label">Question</label>
                <input type="text" name="title" class="form-control" data-validation="required">
            </div>
            <div class="col-12">
                <label for="TextInput" class="form-label">Answer</font></font></label>
                <textarea class="form-control" rows="5" name="answer"></textarea>
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
        $html = '<form class="row from-submit-global g-3 " method="post" action="'.route('faqs.update', $question->id).'" " enctype="multipart/form-data"> '.csrf_field(). '' .method_field('put').'
            <div class="col-12">
                <label for="TextInput" class="form-label">Question</label>
                <input type="text" name="title" value="'.$question->title.'" class="form-control" data-validation="required">
            </div>
            <div class="col-12">
                <label for="TextInput" class="form-label">Answer</font></font></label>
                <textarea class="form-control" rows="5" name="answer">'.$question->answer.'</textarea>
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
