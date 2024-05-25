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
            Blogs and Articles
        </h6>
    </div>
    <!-- blogs section -->
    <section class="blogs_section">
        <div class="container">
            <div class="row">
                    @foreach ($blogs as $blog)
                        <div class="col-lg-4 col-md-6 col-12 p-lg-3 p-2">
                            <div class="blog">
                                <a href="{{route('Blogs.show', $blog->id)}}">
                                    <div class="blog_image">
                                        <img src="{{$blog->image}}"
                                            alt="blog">
                                    </div>
                                    <div class="date">
                                        <span class="day">26</span>
                                        <span class="month">November</span>
                                    </div>
                                </a>
                                <h4>
                                    <a href="{{route('Blogs.show', $blog->id)}}">
                                    {{$blog->title}}
                                    </a>
                                </h4>
                                <p>{{$blog->description}}</p>
                                <p> <a href="{{route('Blogs.show', $blog->id)}}">Read More <i
                                            class="fa-light fa-angle-left"></i></a></p>

                            </div>
                        </div>
                    @endforeach

                </div>
        </div>
    </section>
</main>
@endsection