@isset($question)
    <form class="row from-submit-global g-3 " method="post" action="{{route('faqs.update', $question->id)}}" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="col-12">
            <label for="TextInput" class="form-label">Question</label>
            <input type="text" name="title" value="{{$question->title}}" class="form-control" data-validation="required">
        </div>
        <div class="col-12">
            <label for="TextInput" class="form-label">Answer</label>
            <textarea class="form-control" rows="5" name="answer">{{$question->answer}}</textarea>
        </div>
        <div class="col-12 modal-footer">
            <button class="btn btn-primary" type="submit">Save</button>
            <button class="btn btn-outline-secondary" type="button" data-bs-dismiss="modal">Colse</button>
        </div>
    </form>
@else
    <form class="row from-submit-global g-3 " method="post" action="{{route('faqs.store')}}" enctype="multipart/form-data">
        @csrf
        <div class="col-12">
            <label for="TextInput" class="form-label">Question</label>
            <input type="text" name="title" class="form-control" data-validation="required">
        </div>
        <div class="col-12">
            <label for="TextInput" class="form-label">Answer</label>
            <textarea class="form-control" rows="5" name="answer"></textarea>
        </div>
        <div class="col-12 modal-footer">
            <button class="btn btn-primary" type="submit">Save</button>
            <button class="btn btn-outline-secondary" type="button" data-bs-dismiss="modal">Colse</button>
        </div>
    </form>
@endisset