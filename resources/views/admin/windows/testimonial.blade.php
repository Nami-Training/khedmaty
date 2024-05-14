@isset($testimonial)
    <form class="row from-submit-global g-3 " method="post" action="{{route('testimonials.update', $testimonial->id)}}" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="col-12">
            <label for="TextInput" class="form-label">Name</label>
            <input type="text" name="name" value="{{$testimonial->name}}" class="form-control" data-validation="required">
        </div>
        <div class="col-6">
            <label for="TextInput" class="form-label">Comment</label>
            <textarea class="form-control" rows="8" name="comment">{{$testimonial->comment}}</textarea>
        </div>
        <div class="col-6">
            <label for="TextInput" class="form-label">Image  </label>
            <input type="file" data-default-file="{{asset($testimonial->image)}}"  name="image" class="dropify">
        </div>
        <div class="col-12 modal-footer">
            <button class="btn btn-primary" type="submit">Save</button>
            <button class="btn btn-outline-secondary" type="button" data-bs-dismiss="modal">Colse</button>
        </div>
    </form>
@else
    <form class="row from-submit-global g-3 " method="post" action="{{route('testimonials.store')}}" enctype="multipart/form-data">
        @csrf
        <div class="col-12">
            <label for="TextInput" class="form-label">Name</label>
            <input type="text" name="name" class="form-control" data-validation="required">
        </div>
        <div class="col-6">
            <label for="TextInput" class="form-label">Comment</label>
            <textarea class="form-control" rows="8" name="comment"></textarea>
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