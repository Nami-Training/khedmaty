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
                        <li class="nav-item"><a class="nav-link border-0 active" data-bs-toggle="tab" href="#users"
                            role="tab">users</a></li>
                        @foreach ($permissions as $permission)
                            <li class="nav-item"><a class="nav-link border-0" data-bs-toggle="tab" href="#{{$permission}}"
                                role="tab">{{$permission}}</a></li>
                        @endforeach
                    </ul>
                </div>
                <div class="card-body">
                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="users" role="tabpanel">
                            <label class="mx-2"><input type="checkbox" class="all" value=""> All</label>
                            <label><input type="checkbox" name="permissions[users][]" value="create" @checked($admin->permission->users && $actions['users'][0])
                            > Add</label>
                            <label><input type="checkbox" name="permissions[users][]" value="read" @checked($admin->permission->users && $actions['users'][1])> Read</label>
                            <label><input type="checkbox" name="permissions[users][]" value="update" @checked($admin->permission->users && $actions['users'][2])> Edit</label>
                            <label><input type="checkbox" name="permissions[users][]" value="delete" @checked($admin->permission->users && $actions['users'][3])> Delete</label>
                        </div>
                        @foreach ($permissions as $permission)
                            <div class="tab-pane fade show" id="{{$permission}}" role="tabpanel">
                                <label class="mx-2"><input type="checkbox" class="all" value=""> All</label>
                                <label><input type="checkbox" name="permissions[{{$permission}}][]" value="create" @checked($admin->permission->$permission && $actions[$permission][0])> Add</label>
                                <label><input type="checkbox" name="permissions[{{$permission}}][]" value="read" @checked($admin->permission->$permission && $actions[$permission][1])> Read</label>
                                <label><input type="checkbox" name="permissions[{{$permission}}][]" value="update" @checked($admin->permission->$permission && $actions[$permission][2])> Edit</label>
                                <label><input type="checkbox" name="permissions[{{$permission}}][]" value="delete" @checked($admin->permission->$permission && $actions[$permission][3])> Delete</label>
                            </div>
                        @endforeach
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
                        <li class="nav-item"><a class="nav-link border-0 active" data-bs-toggle="tab" href="#users"
                            role="tab">users</a></li>
                        @foreach ($permissions as $permission)
                            <li class="nav-item"><a class="nav-link border-0" data-bs-toggle="tab" href="#{{$permission}}"
                                role="tab">{{$permission}}</a></li>
                        @endforeach
                    </ul>
                </div>
                <div class="card-body">
                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="users" role="tabpanel">
                            <label class="mx-2"><input type="checkbox" class="all" value=""> All</label>
                            <label><input type="checkbox" name="permissions[users][]" value="create"> Add</label>
                            <label><input type="checkbox" name="permissions[users][]" value="read"> Read</label>
                            <label><input type="checkbox" name="permissions[users][]" value="update"> Edit</label>
                            <label><input type="checkbox" name="permissions[users][]" value="delete"> Delete</label>
                        </div>
                        @foreach ($permissions as $permission)
                            <div class="tab-pane fade show" id="{{$permission}}" role="tabpanel">
                                <label class="mx-2"><input type="checkbox" class="all" value=""> All</label>
                                <label><input type="checkbox" name="permissions[{{$permission}}][]" value="create"> Add</label>
                                <label><input type="checkbox" name="permissions[{{$permission}}][]" value="read"> Read</label>
                                <label><input type="checkbox" name="permissions[{{$permission}}][]" value="update"> Edit</label>
                                <label><input type="checkbox" name="permissions[{{$permission}}][]" value="delete"> Delete</label>
                            </div>
                        @endforeach
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