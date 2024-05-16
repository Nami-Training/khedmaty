@extends('user.layout.master')

@section('title' , 'About US')

@section('content')
<!-- main container -->
<main style="margin: 0px;">
    <!-- page header -->
    <div class="page_header container d-flex align-items-center">
        <h6>
            <a href="{{route('home')}}">Home</a>
            <i class="fa-regular fa-angle-right"></i>
            About US
        </h6>
    </div>
    <!-- about us section -->
    <section class="about-us">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-12">
                    <div class="aboutus_contect">
                        <div class="aboutt">
                            <h1>Welcome you in {{$setting->website_name}}</h1>
                            <p class="about_us__text">
                                <?php echo html_entity_decode(htmlentities($setting->about_app)); ?>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-12">
                    <div class="image">
                        <img src="{{$setting->aboutus_image}}" alt="about">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- testimonials -->
    <section class="testimonials">
        <div class="container">
            <h2>client opinions</h2>
            <div
                class="swiper testimonilasSwiper swiper-initialized swiper-horizontal swiper-pointer-events swiper-backface-hidden">
                <div class="swiper-wrapper" id="swiper-wrapper-2f36c7d4b42e3ff5" aria-live="off"
                    style="transform: translate3d(0px, 0px, 0px);">
                    <div class="swiper-slide swiper-slide-duplicate swiper-slide-active swiper-slide-duplicate-next"
                        data-swiper-slide-index="0" role="group" aria-label="1 / 1"
                        style="width: 292px; margin-right: 30px;">
                        <div class="review">
                            <p>
                                لقد كنت عميلاً وفياً لشركة خدمتى لسنوات، ولا يمكنني توصية كافية! قطع الغيار
                                عالية
                                الجودة والخدمة الاستثنائية قد ساعدتني في توفير الوقت والمال. إنهم يهتمون حقًا
                                بعملائهم
                            </p>
                        </div>
                        <div class="review-owner">
                            <div class="img">
                                <img src=" https://khidmty.com/storage/images/admins/testimonials/LWNe8wsmUa1701004224.png"
                                    alt="reviewer">
                            </div>
                            <div class="name">
                                <h5> محمد</h5>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide swiper-slide-duplicate-active swiper-slide-next swiper-slide-duplicate-prev"
                        data-swiper-slide-index="0" role="group" aria-label="1 / 1"
                        style="width: 292px; margin-right: 30px;">
                        <div class="review">
                            <p>
                                لقد كنت عميلاً وفياً لشركة خدمتى لسنوات، ولا يمكنني توصية كافية! قطع الغيار
                                عالية
                                الجودة والخدمة الاستثنائية قد ساعدتني في توفير الوقت والمال. إنهم يهتمون حقًا
                                بعملائهم
                            </p>
                        </div>
                        <div class="review-owner">
                            <div class="img">
                                <img src=" https://khidmty.com/storage/images/admins/testimonials/LWNe8wsmUa1701004224.png"
                                    alt="reviewer">
                            </div>
                            <div class="name">
                                <h5> محمد</h5>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide swiper-slide-duplicate swiper-slide-prev swiper-slide-duplicate-next"
                        data-swiper-slide-index="0" role="group" aria-label="1 / 1"
                        style="width: 292px; margin-right: 30px;">
                        <div class="review">
                            <p>
                                لقد كنت عميلاً وفياً لشركة خدمتى لسنوات، ولا يمكنني توصية كافية! قطع الغيار
                                عالية
                                الجودة والخدمة الاستثنائية قد ساعدتني في توفير الوقت والمال. إنهم يهتمون حقًا
                                بعملائهم
                            </p>
                        </div>
                        <div class="review-owner">
                            <div class="img">
                                <img src=" https://khidmty.com/storage/images/admins/testimonials/LWNe8wsmUa1701004224.png"
                                    alt="reviewer">
                            </div>
                            <div class="name">
                                <h5> محمد</h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div
                    class="testimonialsSwiperPagination swiper-pagination-clickable swiper-pagination-bullets swiper-pagination-horizontal swiper-pagination-lock">
                    <span class="swiper-pagination-bullet swiper-pagination-bullet-active" tabindex="0" role="button"
                        aria-label="Go to slide 1" aria-current="true"></span></div>
                <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
            </div>
        </div>
    </section>
    <!-- downloadApp-section -->
    <section class="downloadApp">
        <div class="container">
            <h2>A great experience with the app</h2>
            <p>
                Do you want to enjoy an enhanced experience on the go? Download our app now to access exclusive services
                and offers.
            </p>
            <div class="btns">
                <a href="#">
                    <img src="https://khidmty.com/web/assets/images/app-store.svg" alt="app-store">
                </a>
                <a href="#">
                    <img src="https://khidmty.com/web/assets/images/google-play.svg" alt="google-play">
                </a>
            </div>
        </div>
    </section>
    <!-- features -->
    <section class="features">
        <div class="container">
            <div class="row">

            </div>
        </div>
    </section>
</main>
@endsection