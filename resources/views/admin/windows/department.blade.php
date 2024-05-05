@isset($department)
    <form class="row g-3 from-submit-global" method="post" action="{{route('departments.update', $department->id)}}" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="col-12">
            <label for="TextInput" class="form-label">Name</label>
                <input type="text" name="name" class="form-control" data-validation="required" value="{{$department->name}}">
        </div>
        <div class="col-6">
            <label for="TextInput" class="form-label">Store Category</label>
            <select name="store_category" class="form-control" data-validation="required">
                <option value="">Choose </option>
                @foreach ($storesCategories as $storeCategory)
                    <option value="{{$storeCategory->id}}" @selected($department->store_category == $storeCategory->id)>{{$storeCategory->name}}</option>
                @endforeach
            </select>
        </div>
        <div class="col-6">
            <label for="TextInput" class="form-label">Image  </label>
            <input type="file" data-default-file="{{asset($department->image)}}"  name="image" class="dropify">
        </div>
        <div class="col-12 modal-footer">
            <button class="btn btn-primary" type="submit">Save</button>
            <button class="btn btn-outline-secondary" type="button" data-bs-dismiss="modal">Colse</button>
        </div>
    </form>
@else
    <form class="row g-3 from-submit-global" method="post" action="{{route('departments.store')}}" enctype="multipart/form-data">
        @csrf
        <div class="col-12">
            <label for="TextInput" class="form-label">Name</label>
                <input type="text" name="name" class="form-control" data-validation="required">
        </div>
        <div class="col-6">
            <label for="TextInput" class="form-label">Store Category</label>
            <select name="store_category" class="form-control" data-validation="required">
                <option value="">Choose </option>
                @foreach ($storesCategories as $storeCategory)
                    <option value="{{$storeCategory->id}}">{{$storeCategory->name}}</option>
                @endforeach
            </select>
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
