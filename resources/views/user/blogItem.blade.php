@extends('user.layout.master')

@section('title' , 'Blogs')

@section('content')
<!-- main container -->
<main style="margin: 0px;">
    <!-- page header -->
    <div class="page_header container d-flex align-items-center">
        <h6>
            <a href="{{route('home')}}">Home</a>
            <i class="fa-regular fa-angle-right"></i>
           {{$blog->title}}
        </h6>
    </div>
    <!-- blogs section -->
    <section class="blog_details__section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-12">
                    <div class="blog_content">
                        <h3> {{$blog->title}}</h3>
                        <p>
                            {{$blog->description}}
                        </p>
                        <div class="share_blog">
                            <h6>Share Blog:</h6>
                            <ul class="social_share">
                                <li>
                                    <a href="#">
                                        <i class="fa-brands fa-facebook-f"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa-brands fa-instagram"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa-brands fa-twitter"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa-brands fa-linkedin-in"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-12 mb-lg-0 mb-4">
                    <div class="blog_img">
                        <img src="{{asset($blog->image)}}" alt="blog">
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection