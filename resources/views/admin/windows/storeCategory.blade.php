@isset($storeCategory)
    <form class="row g-3 from-submit-global" method="post" action="{{route('storeCategoies.update', $storeCategory->id)}}" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="col-12">
            <label for="TextInput" class="form-label">Name</label>
            <input type="text" name="name" value="{{$storeCategory->name}}" class="form-control" data-validation="required">
        </div>
        <div class="col-6">
            <label for="TextInput" class="form-label">Description</label>
            <textarea class="form-control" rows="10" name="description">{{$storeCategory->description}}</textarea>
        </div>
        <div class="col-6">
            <label for="TextInput" class="form-label">Image</label>
            <input type="file" data-default-file="{{asset($storeCategory->image)}}"  name="image" class="dropify">
        </div>
        <div class="col-12 modal-footer">
            <button class="btn btn-primary" type="submit">Save</button>
            <button class="btn btn-outline-secondary" type="button" data-bs-dismiss="modal">Colse</button>
        </div>
    </form>
@else
    <form class="row g-3 from-submit-global" method="post" action="{{route('storeCategoies.store')}}" enctype="multipart/form-data">
        @csrf
        <div class="col-12">
            <label for="TextInput" class="form-label">Name</label>
            <input type="text" name="name" class="form-control" data-validation="required">
        </div>
        <div class="col-6">
            <label for="TextInput" class="form-label">Description</label>
            <textarea class="form-control" rows="10" name="description"></textarea>
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