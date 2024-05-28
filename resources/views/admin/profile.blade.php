@extends('admin.layout.master')

@section('title', 'profile')

@section('content')
    <div class="page-body px-xl-4 px-sm-2 px-0 py-lg-2 py-1 ">
        <div class="container-fluid">
            <div class="card mb-3">
                <div class="card-body" style="min-height: calc(100vh - 196px);">
                    <div class="wrapper">
                        <div class="page-body px-xl-4 px-sm-2 px-0 py-lg-2 py-1 mt-0 mt-lg-3">
                            <div class="container-fluid">
                                <div class="row g-3">
                                    <div class="col-xxl-3 col-lg-4 col-md-4">
                                        <div class="list-group list-group-custom sticky-top me-xl-4" style="top: 100px;">
                                            <a class="list-group-item list-group-item-action" href="#list-item-1">Profile</a>
                                            <a class="list-group-item list-group-item-action" href="#list-item-2">Change Password</a>
                                        </div>
                                    </div>
                                    <div class="col-xxl-8 col-lg-8 col-md-8">
                                        <div id="list-item-1" class="card fieldset border border-muted mt-0">
                                            <span class="fieldset-tile text-muted bg-body">Profile :</span>
                                            <div class="card">
                                                @if ($errors->any())
                                                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                                        <ul>
                                                            @foreach ($errors->all() as $error)
                                                            <li>
                                                                <strong>{{ $error }}</strong>
                                                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                                                    aria-label="Close"></button>
                                                            </li>
                                                            @endforeach
                                                        </ul>
                                                    </div>
                                                @endif
                                                <div class="card-body">
                                                    <form method="post" class="from-submit-update-global"
                                                        action="{{route('admin.updateProfile', $currentAdmin->id)}}"
                                                        enctype="multipart/form-data">
                                                        @csrf
                                                        <div class="input-field image-change-wrapper mb-3">
                                                            <div class="img-wrap">
                                                                <img id="uploadedImage" src="{{asset($currentAdmin->image)}}" alt="user">
                                                            </div>
                                                            <div class="d-flex w-100 pe-5 ps-5 justify-content-between align-items-center">
                                                                <label for="img">Profile Image</label>
                                                                <label class="upload">
                                                                    <div class="plus">
                                                                        <i class="fa-regular fa-plus"></i>
                                                                    </div>
                                                                    <input type="file" name="image" id="img-upload" accept="image/*">
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="row mb-3">
                                                            <label class="col-md-3 col-sm-4 col-form-label">Name *</label>
                                                            <div class="col-md-9 col-sm-8">
                                                                <input type="text" class="form-control form-control-lg"
                                                                    name="name" value="{{$currentAdmin->name}}">
                                                            </div>
                                                        </div>
                                                        <div class="row mb-3">
                                                            <label class="col-md-3 col-sm-4 col-form-label">Email *</label>
                                                            <div class="col-md-9 col-sm-8">
                                                                <input type="text" class="form-control form-control-lg"
                                                                    name="email" value="{{$currentAdmin->email}}">
                                                            </div>
                                                        </div>
                                                        <div class="row mb-3">
                                                            <label class="col-md-3 col-sm-4 col-form-label">Phone *</label>
                                                            <div class="col-md-9 col-sm-8">
                                                                <input type="text" class="form-control form-control-lg"
                                                                    name="phone" value="{{$currentAdmin->phone}}">
                                                            </div>
                                                        </div>
                                                        <div class="card-footer text-end">
                                                            <button class="btn btn-lg btn-light me-2"
                                                                type="reset">Cancel</button>
                                                            <button class="btn btn-lg btn-primary" type="submit">Update</button>
                                                        </div>

                                                    </form>
                                                </div>
                                            </div>
                                        </div>

                                        <div id="list-item-2" class="card fieldset border border-muted mt-5">
                                            <span class="fieldset-tile text-muted bg-body">Change Password </span>
                                            <form method="post" action="{{route('admin.changePassword', $currentAdmin->id)}}"
                                                class="from-submit-update-global p-lg-4 p-0" id="">
                                                @csrf
                                                <div class="card">
                                                    <div class="card-body">
                                                        <div class="row g-3">
                                                            <div class="col-12">
                                                                <div class="mb-3">
                                                                    <input type="password"
                                                                        class="form-control form-control-lg "
                                                                        name="current_password"
                                                                        placeholder="Current password" required>
                                                                </div>
                                                                <div class="mb-1">

                                                                    <div class="mb-2 ">
                                                                        <input type="password" name="password"
                                                                            placeholder="New password"
                                                                            class="form-control form-control-lg password-meter-input" required>
                                                                    </div>
                                                                    <div class="progress mb-1" style="height: 10px;">
                                                                        <div class="progress-bar-bar bg-primary-gradient"
                                                                            role="progressbar" style="width: 0%"
                                                                            aria-valuemin="0" aria-valuemax="100"></div>
                                                                    </div>
                                                                    <div class="text-muted small"
                                                                    >Use 8 or more characters with A combination of letters, numbers, and symbols.</div>
                                                                </div>
                                                                <div>
                                                                    <input type="password"
                                                                        class="form-control form-control-lg"
                                                                        name="password_confirmation"
                                                                        placeholder="Confirm password" required>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card-footer text-end">
                                                        <button class="btn btn-lg btn-light me-2"
                                                            type="reset">cancle</button>
                                                        <button class="btn btn-lg btn-primary" type="submit">Update</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
@endsection

@push('style')
    <style>
        .image-change-wrapper {
            width: 100%;
            border-radius: 8px;
            border: 1px solid #eee;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            padding: 16px 0;
        }

        .image-change-wrapper label {
            color: #000000;
            font-size: 14px;
        }

        .image-change-wrapper .img-wrap {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            border: 1px solid #eee;
            overflow: hidden;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .image-change-wrapper .img-wrap img {
            width: 100%;
            height: 100%;
            -o-object-fit: cover;
                object-fit: cover;
            -o-object-position: center;
            object-position: center;
        }
        .image-change-wrapper .upload input {
            display: none;
        }

        .image-change-wrapper .upload .plus {
            width: 30px;
            height: 30px;
            border-radius: 50%;
            background-color: #fc6240;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
        }

        .image-change-wrapper .upload .plus i {
            font-size: 14px;
            color: #ffffff;
        }

        .filepond-multiple {
            width: 100%;
        }
    </style>
@endpush

@push('js')
    <script>
        let inputImg = document.getElementById("img-upload");
        let uploadedImage = document.getElementById("uploadedImage");
        inputImg.addEventListener("change", () => {
            if (inputImg.files && inputImg.files[0]) {
                const reader = new FileReader();
                reader.onload = e => {
                    uploadedImage.src = e.target.result;
                };
                reader.readAsDataURL(inputImg.files[0]);
            }
        });
    </script>
@endpush