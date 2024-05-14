@isset($blog)
    <form class="row from-submit-global g-3 " method="post" action="{{route('blogs.update', $blog->id)}}" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="col-12">
            <label for="TextInput" class="form-label">Blog</label>
            <input type="text" name="title" value="{{$blog->title}}" class="form-control" data-validation="required">
        </div>
        <div class="col-6">
            <label for="TextInput" class="form-label">Description</label>
            <textarea class="form-control" rows="8" name="description">{{$blog->description}}</textarea>
        </div>
        <div class="col-6">
            <label for="TextInput" class="form-label">Image  </label>
            <input type="file" data-default-file="{{asset($blog->image)}}"  name="image" class="dropify">
        </div>
        <div class="col-12 modal-footer">
            <button class="btn btn-primary" type="submit">Save</button>
            <button class="btn btn-outline-secondary" type="button" data-bs-dismiss="modal">Colse</button>
        </div>
    </form>
@else
    <form class="row from-submit-global g-3 " method="post" action="{{route('blogs.store')}}" enctype="multipart/form-data">
        @csrf
        <div class="col-12">
            <label for="TextInput" class="form-label">Blog</label>
            <input type="text" name="title" class="form-control" data-validation="required">
        </div>
        <div class="col-6">
            <label for="TextInput" class="form-label">Description</label>
            <textarea class="form-control" rows="8" name="description"></textarea>
        </div>
        <div class="col-6">
            <label for="TextInput" class="form-label">Image  </label>
            <input type="file" name="image" class="dropify">
        </div>
        <div class="col-12 modal-footer">
            <button class="btn btn-primary" type="submit">Save</button>
            <button class="btn btn-outline-secondary" type="button" data-bs-dismiss="modal">Colse</button>
        </div>
    </form>
@endisset