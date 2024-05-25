@extends('user.layout.master')

@section('title' , 'Profile')

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
                <div class="row">
                    <div class="col-lg-4 col-12 mb-lg-0 mb-4">
                        <div class="profile_side_bar">
                            <div class="user_img">
                                <div class="img">
                                    <img src="{{asset(Auth::user()->image)}}" alt="">
                                </div>
                            </div>
                            <div class="info">
                                <h6>{{Auth::user()->name}}</h6>
                                <span>{{Auth::user()->phone}}</span>
                            </div>
                            <ul class="links">
                                <li class=" active">
                                    <a href="{{route('myProfile')}}"><i class="fa-light fa-user-pen"></i> Edit
                                        Profile</a>
                                </li>
                                <li class="">
                                    <a href="https://khidmty.com/en/favourits"><i class="fa-sharp fa-light fa-heart"></i>
                                        Favorites </a>
                                </li>
                                <li class="">
                                    <a href="https://khidmty.com/en/orders"><i class="fa-sharp fa-regular fa-store"></i> My
                                        Orders</a>
                                </li>

                                <li>
                                    <a href="{{route('deleteAccount', Auth::user()->id)}}"><i class="fa-regular fa-user-xmark"></i>
                                        Delete Account</a>
                                </li>
                                <li>
                                    <a href="{{route('user.logout')}}"><i
                                            class="fa-sharp fa-regular fa-arrow-right-from-bracket"></i> Logout</a>

                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-8 col-12">
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <form action="{{route('UpdateProfile', Auth::user()->id)}}" method="post" enctype="multipart/form-data" class="has-validation-callback from-submit-global">
                            @csrf
                            <div class="input-field image-change-wrapper">
                                <div class="img-wrap">
                                    <img id="uploadedImage" src="{{asset(Auth::user()->image)}}" alt="user">
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
                                    <input type="text" id="name" name="name" placeholder="Your name ..." value="{{Auth::user()->name}}">
                                </div>
                                <div class="input_field">
                                    <label for="phone">
                                        Phone
                                    </label>
                                    <input type="text" id="phone" name="phone" placeholder="Your Phone ..." value="{{Auth::user()->phone}}">
                                </div>
                            </div>
                            <div class="form-group">
                                <!-- field set -->
                                <div class="input_field">
                                    <label for="email">
                                        Email
                                    </label>
                                    <input type="email" id="email" name="email" placeholder="Your email ..." value="{{Auth::user()->email}}">
                                </div>
                            </div>
                            <!-- field set -->
                            <button type="submit">
                                Update
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