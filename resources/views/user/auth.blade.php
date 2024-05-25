@extends('user.layout.master')

@section('title' , 'Login')

@section('content')
<main>
    <!-- page header -->
    <div class="page_header container d-flex align-items-center">
        <h6>
            <a href="{{route('home')}}">Home</a>
            <i class="fa-regular fa-angle-right"></i>
            login
        </h6>
    </div>
    <!-- auth-login section -->
    <section class="auth">
        <div class="container">
            <h2 class="auth-head">login</h2>
            <p class="auth-subhead">Welcome! Enter your registered data to complete the login process</p>
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            @if (Session::has('error'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>{{session::get('error')}}</strong>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
            <div class="row justify-content-center">
                <div class="col-lg-8 col-12">
                    <form action="{{route('loginAuth')}}" method="post">
                        @csrf
                        <div class="banner mb-3">
                            <img src="{{asset('assets/img/saudia.png')}}" alt="saudia">
                            <h6>Kingdom of Saudi Arabia</h6>
                        </div>
                        <!-- field set -->
                        <div class="input_field">
                            <label for="email">
                                <i class="fa-light fa-envelope"></i>
                                Email
                            </label>
                            <input type="email" id="email" name="email" required>
                        </div>
                        <div class="input_field">
                            <label for="password">
                                <i class="fa-light fa-lock"></i>
                                Password
                            </label>
                            <input type="password" id="password" name="password" required>
                        </div>
                        <div class="d-flex gap-3">
                            <button class="login mt-3" type="submit" name="submit" value="client">
                                login
                            </button>
                            <button class="login mt-3" type="submit" name="submit" value="store">
                                login as store
                            </button>
                        </div>
                        <div class="mt-3">
                            <p class="auth-subhead">Don't have account?
                                <a href="{{route('authSignUp')}}">Register Now</a>
                            </p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

</main>