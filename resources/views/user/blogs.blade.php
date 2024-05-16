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
                <div class="col-lg-4 col-md-6 col-12 p-lg-3 p-2">
                    <div class="blog">
                        <a href="https://khidmty.com/en/blogs/1">
                            <div class="blog_image">
                                <img src="https://khidmty.com/storage/images/admins/blogs/L7TArKz6Md1701004308.jpg"
                                    alt="blog">
                            </div>
                            <div class="date">
                                <span class="day">26</span>
                                <span class="month">November</span>
                            </div>
                        </a>
                        <h4>
                            <a href="https://khidmty.com/en/blogs/1">
                                Importance of Regular Car Maintenance
                            </a>
                        </h4>
                        <p>In this blog 🚗🛠️, we'll take you on an exciting tour into the world of car customization.
                            Discover how you can transform your car into a piece of....</p>
                        <p> <a href="https://khidmty.com/en/blogs/1">Read More <i
                                    class="fa-light fa-angle-left"></i></a></p>

                    </div>
                </div>

            </div>
        </div>
    </section>
</main>
@endsection