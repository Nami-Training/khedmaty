@extends('user.layout.master')

@section('title' , 'Register')

@section('content')
<main style="margin: 0px;">
    <!-- page header -->
    <div class="page_header container d-flex align-items-center">
        <h6>
            <a href="{{route('home')}}">Home</a>
            <i class="fa-regular fa-angle-right"></i>
            Profile
        </h6>
    </div>

    <!-- profile section -->
    <section class="profile_section">
        <div class="container">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <div class="row">
                <div class="col-12">
                    <form action="{{route('registerAuth')}}" method="post" enctype="multipart/form-data" class="has-validation-callback">
                        @csrf
                        <div class="input-field image-change-wrapper">
                            <div class="img-wrap">
                                <img id="uploadedImage" src="{{asset('assets/img/user.png')}}" alt="user">
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
                        <div class="form-group">
                            <!-- field set -->
                            <div class="input_field">
                                <label for="name">
                                    Name
                                </label>
                                <input type="text" id="name" name="name" placeholder="Your name ...">
                            </div>
                            <div class="input_field">
                                <label for="phone">
                                    Phone
                                </label>
                                <input type="text" id="phone" name="phone" placeholder="Your Phone ...">
                            </div>
                        </div>
                        <div class="form-group">
                            <!-- field set -->
                            <div class="input_field">
                                <label for="email">
                                    Email
                                </label>
                                <input type="email" id="email" name="email" placeholder="Your email ...">
                            </div>
                            <div class="input_field">
                                <label for="password">
                                    Password
                                </label>
                                <input type="password" id="password" name="password" placeholder="Your password ...">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-check form-switch mt-3">
                                <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault" name="type">
                                <label class="form-check-label" for="flexSwitchCheckDefault">Store</label>
                              </div>
                        </div>
                        <!-- field set -->
                        <button type="submit">
                            Create
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection

@push('js')
    <script>

        let inputImg = document.getElementById("img-upload");
        let uploadedImage = document.getElementById("uploadedImage");
        inputImg.addEventListener("change", () => {
            console.log(inputImg);
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