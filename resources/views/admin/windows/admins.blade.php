@isset($admin)
<form class="row g-3 from-submit-update-global has-validation-callback" method="post" action="{{route('admins.update', $admin->id)}}"
    enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="col-4">
        <label for="TextInput" class="form-label">Name </label>
        <input type="text" name="name" class="form-control" value="{{$admin->name}}" data-validation="required">
    </div>
    <div class="col-4">
        <label for="TextInput" class="form-label">Phone </label>
        <input type="text" name="phone" class="form-control" value="{{$admin->phone}}" data-validation="required">
    </div>

    <div class="col-4">
        <label for="TextInput" class="form-label">Email</label>
        <input type="text" name="email" class="form-control" value="{{$admin->email}}" required>
    </div>
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h6 class="card-title mb-0">Permissions </h6>
                <ul class="nav nav-tabs tab-page-toolbar rounded d-inline-flex" role="tablist">
                    <li class="nav-item"><a class="nav-link border-0  active" data-bs-toggle="tab" href="#clients"
                            role="tab">Clients</a></li>
                    <li class="nav-item"><a class="nav-link border-0  " data-bs-toggle="tab" href="#settings"
                            role="tab">Site Settings</a></li>
                </ul>
            </div>
            <div class="card-body">
                <div class="tab-content">
                    <div class="tab-pane fade show active" id="clients" role="tabpanel">
                        <label class="mx-2"><input type="checkbox" class="all" value=""> All</label>
                        <label><input type="checkbox" name="permissions[]" value="clients_create" @checked($admin->permission->clients_create)> Add</label>
                        <label><input type="checkbox" name="permissions[]" value="clients_read" @checked($admin->permission->clients_read)> Read</label>
                        <label><input type="checkbox" name="permissions[]" value="clients_update" @checked($admin->permission->clients_update)> Edit</label>
                        <label><input type="checkbox" name="permissions[]" value="clients_delete" @checked($admin->permission->clients_delete)> Delete</label>
                    </div>
                    <div class="tab-pane fade show " id="settings" role="tabpanel">
                        <label class="mx-2"><input type="checkbox" class="all" value=""> All</label>
                        <label><input type="checkbox" name="permissions[]" value="settings_create" @checked($admin->permission->settings_create)> Add</label>
                        <label><input type="checkbox" name="permissions[]" value="settings_read" @checked($admin->permission->settings_read)> Read</label>
                        <label><input type="checkbox" name="permissions[]" value="settings_update" @checked($admin->permission->settings_update)> Edit</label>
                        <label><input type="checkbox" name="permissions[]" value="settings_delete" @checked($admin->permission->settings_delete)> Delete</label>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-12 modal-footer">
        <button class="btn btn-primary" type="submit">Update</button>
        <button class="btn btn-outline-secondary" type="button" data-bs-dismiss="modal">Close</button>
    </div>

</form>
@else
<form class="row g-3 from-submit-global has-validation-callback" method="post" action="{{route('admins.store')}}"
    enctype="multipart/form-data">
    @csrf
    <div class="col-6">
        <label for="TextInput" class="form-label">Name </label>
        <input type="text" name="name" class="form-control" data-validation="required">
    </div>
    <div class="col-6">
        <label for="TextInput" class="form-label">Phone </label>
        <input type="text" name="phone" class="form-control" data-validation="required">
    </div>

    <div class="col-6">
        <label for="TextInput" class="form-label">Email</label>
        <input type="text" name="email" class="form-control" required>
    </div>
    <div class="col-6">
        <label for="TextInput" class="form-label">Password</label>
        <input type="password" name="password" placeholder="" class="form-control" required>
    </div>

    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h6 class="card-title mb-0">Permissions </h6>
                <ul class="nav nav-tabs tab-page-toolbar rounded d-inline-flex" role="tablist">
                    <li class="nav-item"><a class="nav-link border-0  active" data-bs-toggle="tab" href="#clients"
                            role="tab">Clients</a></li>
                    <li class="nav-item"><a class="nav-link border-0  " data-bs-toggle="tab" href="#settings"
                            role="tab">Site Settings</a></li>
                </ul>
            </div>
            <div class="card-body">
                <div class="tab-content">
                    <div class="tab-pane fade show active" id="clients" role="tabpanel">
                        <label class="mx-2"><input type="checkbox" class="all" value=""> All</label>
                        <label><input type="checkbox" name="permissions[]" value="clients_create"> Add</label>
                        <label><input type="checkbox" name="permissions[]" value="clients_read"> Read</label>
                        <label><input type="checkbox" name="permissions[]" value="clients_update"> Edit</label>
                        <label><input type="checkbox" name="permissions[]" value="clients_delete"> Delete</label>
                    </div>
                    <div class="tab-pane fade show " id="settings" role="tabpanel">
                        <label class="mx-2"><input type="checkbox" class="all" value=""> All</label>
                        <label><input type="checkbox" name="permissions[]" value="settings_create"> Add</label>
                        <label><input type="checkbox" name="permissions[]" value="settings_read"> Read</label>
                        <label><input type="checkbox" name="permissions[]" value="settings_update"> Edit</label>
                        <label><input type="checkbox" name="permissions[]" value="settings_delete"> Delete</label>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-12 modal-footer">
        <button class="btn btn-primary" type="submit">Add</button>
        <button class="btn btn-outline-secondary" type="button" data-bs-dismiss="modal">Close</button>
    </div>

</form>
@endisset