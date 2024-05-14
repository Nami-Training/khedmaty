@isset($client)
    <form class="row from-submit-global g-3 " method="post" action="{{route('clients.update', $client->id)}}" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="col-6">
            <label for="TextInput" class="form-label">Name</label>
            <input type="text" name="name" class="form-control" value="{{$client->name}}" data-validation="required">
        </div>
        <div class="col-6">
            <label for="TextInput" class="form-label">Email</label>
            <input type="email" name="email" class="form-control" value="{{$client->email}}" data-validation="required">
        </div>
        <div class="col-6">
            <label for="TextInput" class="form-label">Country Code</label>
            <select name="country_code" class="form-control" data-validation="required">
                <option value="">Choose </option>
                    <option value="20+" @selected($client->country_code == '20+')>20+</option>
                    <option value="966+" @selected($client->country_code == '966+')>966+</option>
            </select>
        </div>
        <div class="col-6">
            <label for="TextInput" class="form-label">Phone</label>
            <input type="text" name="phone" class="form-control" value="{{$client->phone}}" data-validation="required">
        </div>
        <div class="col-6">
            <label for="TextInput" class="form-label">Password</label>
            <input type="text" name="password" class="form-control" value="{{$client->password}}" data-validation="required">
        </div>
        <div class="col-6">
            <label for="TextInput" class="form-label">Address</label>
            <input type="text" name="address" class="form-control" value="{{$client->address}}" data-validation="required">
        </div>
        <div class="col-6">
            <label for="TextInput" class="form-label">Image</label>
            <input type="file" name="image" data-default-file="{{asset($client->image)}}" class="dropify">
        </div>
        <div class="col-12 modal-footer">
            <button class="btn btn-primary" type="submit">Save</button>
            <button class="btn btn-outline-secondary" type="button" data-bs-dismiss="modal">Colse</button>
        </div>
    </form>
@else
    <form class="row from-submit-global g-3 " method="post" action="{{route('clients.store')}}" enctype="multipart/form-data">
        @csrf
        <div class="col-6">
            <label for="TextInput" class="form-label">Name</label>
            <input type="text" name="name" class="form-control" data-validation="required">
        </div>
        <div class="col-6">
            <label for="TextInput" class="form-label">Email</label>
            <input type="email" name="email" class="form-control" data-validation="required">
        </div>
        <div class="col-6">
            <label for="TextInput" class="form-label">Country Code</label>
            <select name="country_code" class="form-control" data-validation="required">
                <option value="">Choose </option>
                    <option value="20+">20+</option>
                    <option value="966+">966+</option>
            </select>
        </div>
        <div class="col-6">
            <label for="TextInput" class="form-label">Phone</label>
            <input type="text" name="phone" class="form-control" data-validation="required">
        </div>
        <div class="col-6">
            <label for="TextInput" class="form-label">Password</label>
            <input type="text" name="password" class="form-control" data-validation="required">
        </div>
        <div class="col-6">
            <label for="TextInput" class="form-label">Address</label>
            <input type="text" name="address" class="form-control" data-validation="required">
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