@isset($slider)
    <form class="row g-3 from-submit-global" method="post" action="{{route('sliders.update', $slider->id)}}"
        enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="col-6">
            <label for="TextInput" class="form-label">Title</label>
            <input type="text" value="{{$slider->title}}" name="title" class="form-control" data-validation="required">
        </div>
        <div class="col-6">
            <label for="TextInput" class="form-label">Description</label>
            <textarea class="form-control" rows="2" name="description">{{$slider->description}}</textarea>
        </div>
        <div class="col-6">
            <label for="TextInput" class="form-label">Link </label>
            <input type="text" name="link" value="{{$slider->link}}" class="form-control" data-validation="required">
        </div>
        <div class="col-6">
            <label for="TextInput" class="form-label">Type</label>
            <select name="type" class="form-control" data-validation="required">
                <option value="">Choose </option>
                <option value="app" @selected($slider->type == "app") >App</option>
                <option value="web" @selected($slider->type == "web") >Web</option>
                <option value="all" @selected($slider->type == "all") >All</option>
            </select>
        </div>
        <div class="col-6">
            <label for="TextInput" class="form-label">Position </label>
            <select name="position" class="form-control" data-validation="required">
                <option value="">Choose </option>
                <option value="main" @selected( $slider->position == "main") >Main</option>
                <option value="top_left" @selected( $slider->position == "top_left") >Top Right </option>
                <option value="bottom_left" @selected( $slider->position == "bottom_left") >Bottom Right </option>
                <option value="right" @selected( $slider->position == "right") >Left </option>
            </select>
        </div>
        <div class="col-6">
            <label for="TextInput" class="form-label">Image </label>
            <input type="file" data-default-file="{{asset($slider->image)}}" name="image" class="dropify">
        </div>
        <div class="col-12 modal-footer">
            <button class="btn btn-primary" type="submit">Save</button>
            <button class="btn btn-outline-secondary" type="button" data-bs-dismiss="modal">Colse</button>
        </div>
    </form>
@else
    <form class="row g-3 from-submit-global" method="post" action="{{route('sliders.store')}}"
        enctype="multipart/form-data">
        @csrf
        <div class="col-6">
            <label for="TextInput" class="form-label">Title</label>
            <input type="text" name="title" class="form-control" data-validation="required">
        </div>
        <div class="col-6">
            <label for="TextInput" class="form-label">Description</label>
            <textarea class="form-control" rows="2" name="description"></textarea>
        </div>
        <div class="col-6">
            <label for="TextInput" class="form-label">Link </label>
            <input type="text" value="#" name="link" class="form-control" data-validation="required">
        </div>
        <div class="col-6">
            <label for="TextInput" class="form-label">Type</label>
            <select name="type" class="form-control" data-validation="required">
                <option value="">Choose </option>
                <option value="app">App</option>
                <option value="web">Web</option>
                <option value="all">All</option>
            </select>
        </div>
        <div class="col-6">
            <label for="TextInput" class="form-label">Postion </label>
            <select name="position" class="form-control" data-validation="required">
                <option value="">Choose </option>
                <option value="main">Main</option>
                <option value="top_left">Top Right </option>
                <option value="bottom_left">Bottom Right </option>
                <option value="right">Left </option>
            </select>
        </div>
        <div class="col-6">
            <label for="TextInput" class="form-label">Image </label>
            <input type="file" name="image" class="dropify">
        </div>
        <div class="col-12 modal-footer">
            <button class="btn btn-primary" type="submit">Save</button>
            <button class="btn btn-outline-secondary" type="button" data-bs-dismiss="modal">Colse</button>
        </div>
    </form>
@endisset