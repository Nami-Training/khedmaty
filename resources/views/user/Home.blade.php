@extends('user.layout.master')

@section('title' , $setting->website_name)

@section('content')
     <!-- main container -->
     <main>
        <!-- hero section -->
        <section class="hero_section">
            <div class="hero_container">
                <div class="row">
                    <div class="col-lg-3 p-1" id="order2">
                        <div class="inner-section">
                            @foreach ($sliders as $slider)
                                @if ($slider->position == 'top_left')
                                    <div class="slide center">
                                        <img src="{{$slider->image}}" alt="" style="height:315px">
                                        <div class="layer">
                                            <h5>{{$slider->title}}</h5>
                                            <p>{{$slider->description}}</p>
                                        </div>
                                    </div>
                                    @break
                                @endif
                            @endforeach
                            @foreach ($sliders as $slider)
                                @if ($slider->position == 'bottom_left')
                                    <div class="slide center">
                                        <img src="{{$slider->image}}" alt="" style="height:315px">
                                        <div class="layer">
                                            <h5>{{$slider->title}}</h5>
                                            <p>{{$slider->description}}</p>
                                        </div>
                                    </div>
                                    @break
                                @endif
                            @endforeach
                        </div>
                    </div>
                    <div class="col-lg-6 p-1" id="order1">
                        <div class="inner-section slider">
                            <div class="swiper heroSwiper">
                                <div class="swiper-wrapper">
                                    @foreach ($sliders as $slider)
                                        @if ($slider->position == 'main')
                                            <div class="swiper-slide">
                                                <img src="{{$slider->image}}" alt="">
                                                <div class="layer">
                                                    <h4>{{$slider->title}}</h4>
                                                    <p>{{$slider->description}}</p>
                                                    <a href="shop.html">Shop Now</a>
                                                </div>
                                            </div>
                                        @endif
                                    @endforeach
                                </div>
                                <div class="swiper-pagination"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 p-1" id="order3">
                        <div class="inner-section">
                            @foreach ($sliders as $slider)
                                @if ($slider->position == 'right')
                                    <div class="slide center">
                                        <img src="{{$slider->image}}" alt="">
                                        <div class="layer">
                                            <h5>{{$slider->title}}</h5>
                                            <p>{{$slider->description}}</p>
                                        </div>
                                    </div>
                                    @break
                                @endif
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- services bars -->
        <section class="services_bar">
            <div class="swiper servicesBarSwiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="service_card__swiper">
                            <img src="assets/images/sb1.png" alt="">
                            <h6>مقاعد </h6>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="service_card__swiper">
                            <img src="assets/images/sb2.png" alt="">
                            <h6>عجلات و إطارات</h6>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="service_card__swiper">
                            <img src="assets/images/sb3.png" alt="">
                            <h6>تعليق الإطارات</h6>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="service_card__swiper">
                            <img src="assets/images/sb4.png" alt="">
                            <h6>المحرك</h6>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="service_card__swiper">
                            <img src="assets/images/sb5.png" alt="">
                            <h6>أنظمة عوادم</h6>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="service_card__swiper">
                            <img src="assets/images/sb6.png" alt="">
                            <h6>نظام نقل الحركة</h6>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="service_card__swiper">
                            <img src="assets/images/sb7.png" alt="">
                            <h6>لمبات وإضاءة</h6>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="service_card__swiper">
                            <img src="assets/images/sb8.png" alt="">
                            <h6>صدمات</h6>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="service_card__swiper">
                            <img src="assets/images/sb9.png" alt="">
                            <h6>بطاريات</h6>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="service_card__swiper">
                            <img src="assets/images/sb10.png" alt="">
                            <h6>أدوات صيانة</h6>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- popular categories -->
        <section class="popular_categories">
            <div class="container">
                <!-- popular categories row -->
                <div class="row">
                    <div class="col-12 d-flex justify-content-between align-items-center mb-2">
                        <h2 class="section_head">
                            Our Featured Store Categories
                        </h2>
                        <a href="{{route('allCategories')}}" class="shop_all">Show All
                            <i class="fa-regular fa-circle-arrow-right"></i>
                        </a>
                    </div>
                    @foreach ($storesCategories as $storeCategory)
                    <div class="col-lg-4 col-md-6 col-12 p-2">
                        <a href="https://khidmty.com/en/shop/1" class="category">
                            <div class="text">
                                <h6>{{$storeCategory->name}}</h6>
                                <ul>
                                    <li>{{$storeCategory->description}}</li>
                                </ul>
                            </div>
                            <div class="img">
                                <img src="{{$storeCategory->image}}" alt="">
                            </div>
                        </a>
                    </div>
                    @endforeach
                </div>
            </div>
        </section>
        <!-- advertisement section -->
        <section class="advertisement_section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-12 p-2">
                        <a href="#!" class="image">
                            <img src="{{asset('assets/img/add1.jpg')}}" alt="">
                            <div class="layer">
                                <h4>High-Quality Tires</h4>
                                <p>Shop for Tires</p>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-6 col-12 p-2">
                        <a href="#!" class="image">
                            <img src="{{asset('assets/img/add2.jpg')}}" alt="">
                            <div class="layer">
                                <h4>Advanced Lighting for Your Car</h4>
                                <p>Browse More</p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </section>
        <!-- stor section -->
        <section class="store_section">
            <div class="container">
                <!-- car parts store row -->
                <div class="row">
                    <!-- section_head -->
                    <div class="col-12 d-flex justify-content-between section_head">
                        <h3> قطع غيار السيارات</h3>
                        <a href="shop.html" class="shop_all">عرض الكل
                            <i class="fa-regular fa-circle-arrow-left"></i>
                        </a>
                    </div>
                    <!-- section_tabs -->
                    <div class="col-12 mb-3 p-2">
                        <div class="section_tabs">
                            <ul>
                                <li class="active">
                                    <img src="assets/images/bumper.png" alt="">
                                    <h6>الصدامات، الشبوك والواجهة</h6>
                                </li>
                                <li>
                                    <img src="assets/images/engine.png" alt="">
                                    <h6>المكائن، القيرات وملحقاتها</h6>
                                </li>
                                <li>
                                    <img src="assets/images/aids.png" alt="">
                                    <h6>المساعدات، المقصات وعمود التوازن</h6>
                                </li>
                                <li>
                                    <img src="assets/images/filters.png" alt="">
                                    <h6>البواجي، الفلاتر والسيور</h6>
                                </li>
                                <li>
                                    <img src="assets/images/disk.png" alt="">
                                    <h6>الفرامل والأقمشة</h6>
                                </li>
                                <li>
                                    <img src="assets/images/aircondition.png" alt="">
                                    <h6>نظام التكييف والتبريد</h6>
                                </li>
                                <li>
                                    <img src="assets/images/feul.png" alt="">
                                    <h6>نظام الوقود</h6>
                                </li>
                                <li>
                                    <img src="assets/images/shkman.png" alt="">
                                    <h6>الشكمان</h6>
                                </li>
                                <li>
                                    <img src="assets/images/fenders.png" alt="">
                                    <h6>الأبواب، الرفرف والكبوت</h6>
                                </li>
                                <li>
                                    <img src="assets/images/piston.png" alt="">
                                    <h6>العكس، الدفرنس والرمانات</h6>
                                </li>
                                <li>
                                    <img src="assets/images/dricson.png" alt="">
                                    <h6>الدركسون وملحقاته</h6>
                                </li>
                                <li>
                                    <img src="assets/images/Interioraccessories.png" alt="">
                                    <h6>الاكسسوارات الداخلية</h6>
                                </li>
                                <li>
                                    <img src="assets/images/tools.png" alt="">
                                    <h6>أدوات و معدات الصيانة</h6>
                                </li>
                                <li>
                                    <img src="assets/images/care.png" alt="">
                                    <h6>اكسسوارات العناية</h6>
                                </li>
                                <li>
                                    <img src="assets/images/lightining.png" alt="">
                                    <h6>الاضاءات و المصابيح</h6>
                                </li>
                                <li>
                                    <img src="assets/images/oils.png" alt="">
                                    <h6>الزيوت و السوائل</h6>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- rendered products -->
                    <div class="rendered_products">
                        <div class="product_crad">
                            <div class="product_image">
                                <img src="assets/images/pro1.jpg" alt="product">
                                <span>أوريون</span>
                                <button>
                                    <i class="fa-sharp fa-light fa-heart"></i>
                                </button>
                            </div>
                            <div class="product_info">
                                <h5 class="pro_name" title="طقم كشاف تويوتا أوريون غطاء أسود 2009-2011 قطعتين">
                                    <a href="product-details.html"> طقم كشاف تويوتا أوريون</a>
                                </h5>
                                <p class="pro_number">NO: 6287019946008</p>
                                <p class="trader">تاجر الرياض - 815</p>
                                <div class="price_buy">
                                    <h6>180 ريال</h6>
                                    <button>
                                        <i class="fa-regular fa-cart-shopping-fast"></i>
                                    </button>
                                </div>
                                <div class="rate_sale">
                                    <p>
                                        <span class="old_price">400 ريال</span>
                                        <span class="sale">خصم 49.07%</span>
                                    </p>
                                    <a href="#!">
                                        <b>5 <i class="fa-sharp fa-solid fa-star"></i></b> (6)
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="product_crad">
                            <div class="product_image">
                                <img src="assets/images/pro2.jpg" alt="product">
                                <span>أوريون</span>
                                <button>
                                    <i class="fa-sharp fa-light fa-heart"></i>
                                </button>
                            </div>
                            <div class="product_info">
                                <h5 class="pro_name" title="طقم كشاف تويوتا أوريون غطاء أسود 2009-2011 قطعتين">
                                    <a href="product-details.html"> طقم كشاف تويوتا أوريون</a>
                                </h5>
                                <p class="pro_number">NO: 6287019946008</p>
                                <p class="trader">تاجر الرياض - 815</p>
                                <div class="price_buy">
                                    <h6>180 ريال</h6>
                                    <button>
                                        <i class="fa-regular fa-cart-shopping-fast"></i>
                                    </button>
                                </div>
                                <div class="rate_sale">
                                    <p>
                                        <span class="old_price">400 ريال</span>
                                        <span class="sale">خصم 49.07%</span>
                                    </p>
                                    <a href="#!">
                                        <b>5 <i class="fa-sharp fa-solid fa-star"></i></b> (6)
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="product_crad">
                            <div class="product_image">
                                <img src="assets/images/pro3.jpg" alt="product">
                                <span>أوريون</span>
                                <button>
                                    <i class="fa-sharp fa-light fa-heart"></i>
                                </button>
                            </div>
                            <div class="product_info">
                                <h5 class="pro_name" title="طقم كشاف تويوتا أوريون غطاء أسود 2009-2011 قطعتين">
                                    <a href="product-details.html"> طقم كشاف تويوتا أوريون</a>
                                </h5>
                                <p class="pro_number">NO: 6287019946008</p>
                                <p class="trader">تاجر الرياض - 815</p>
                                <div class="price_buy">
                                    <h6>180 ريال</h6>
                                    <button>
                                        <i class="fa-regular fa-cart-shopping-fast"></i>
                                    </button>
                                </div>
                                <div class="rate_sale">
                                    <p>
                                        <span class="old_price">400 ريال</span>
                                        <span class="sale">خصم 49.07%</span>
                                    </p>
                                    <a href="#!">
                                        <b>5 <i class="fa-sharp fa-solid fa-star"></i></b> (6)
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="product_crad">
                            <div class="product_image">
                                <img src="assets/images/pro4.jpg" alt="product">
                                <span>أوريون</span>
                                <button>
                                    <i class="fa-sharp fa-light fa-heart"></i>
                                </button>
                            </div>
                            <div class="product_info">
                                <h5 class="pro_name" title="طقم كشاف تويوتا أوريون غطاء أسود 2009-2011 قطعتين">
                                    <a href="product-details.html"> طقم كشاف تويوتا أوريون</a>
                                </h5>
                                <p class="pro_number">NO: 6287019946008</p>
                                <p class="trader">تاجر الرياض - 815</p>
                                <div class="price_buy">
                                    <h6>180 ريال</h6>
                                    <button>
                                        <i class="fa-regular fa-cart-shopping-fast"></i>
                                    </button>
                                </div>
                                <div class="rate_sale">
                                    <p>
                                        <span class="old_price">400 ريال</span>
                                        <span class="sale">خصم 49.07%</span>
                                    </p>
                                    <a href="#!">
                                        <b>5 <i class="fa-sharp fa-solid fa-star"></i></b> (6)
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="product_crad">
                            <div class="product_image">
                                <img src="assets/images/pro1.jpg" alt="product">
                                <span>أوريون</span>
                                <button>
                                    <i class="fa-sharp fa-light fa-heart"></i>
                                </button>
                            </div>
                            <div class="product_info">
                                <h5 class="pro_name" title="طقم كشاف تويوتا أوريون غطاء أسود 2009-2011 قطعتين">
                                    <a href="product-details.html"> طقم كشاف تويوتا أوريون</a>
                                </h5>
                                <p class="pro_number">NO: 6287019946008</p>
                                <p class="trader">تاجر الرياض - 815</p>
                                <div class="price_buy">
                                    <h6>180 ريال</h6>
                                    <button>
                                        <i class="fa-regular fa-cart-shopping-fast"></i>
                                    </button>
                                </div>
                                <div class="rate_sale">
                                    <p>
                                        <span class="old_price">400 ريال</span>
                                        <span class="sale">خصم 49.07%</span>
                                    </p>
                                    <a href="#!">
                                        <b>5 <i class="fa-sharp fa-solid fa-star"></i></b> (6)
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="product_crad">
                            <div class="product_image">
                                <img src="assets/images/pro3.jpg" alt="product">
                                <span>أوريون</span>
                                <button>
                                    <i class="fa-sharp fa-light fa-heart"></i>
                                </button>
                            </div>
                            <div class="product_info">
                                <h5 class="pro_name" title="طقم كشاف تويوتا أوريون غطاء أسود 2009-2011 قطعتين">
                                    <a href="product-details.html"> طقم كشاف تويوتا أوريون</a>
                                </h5>
                                <p class="pro_number">NO: 6287019946008</p>
                                <p class="trader">تاجر الرياض - 815</p>
                                <div class="price_buy">
                                    <h6>180 ريال</h6>
                                    <button>
                                        <i class="fa-regular fa-cart-shopping-fast"></i>
                                    </button>
                                </div>
                                <div class="rate_sale">
                                    <p>
                                        <span class="old_price">400 ريال</span>
                                        <span class="sale">خصم 49.07%</span>
                                    </p>
                                    <a href="#!">
                                        <b>5 <i class="fa-sharp fa-solid fa-star"></i></b> (6)
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- stores -->
        <section class="stores">
            <div class="container">
                <div class="row">
                    <!-- section_head -->
                    <div class="col-12 d-flex justify-content-between section_head">
                        <h3>Top Stores</h3>
                        <a href="{{route('allStores')}}" class="shop_all">Show All
                            <i class="fa-regular fa-circle-arrow-right"></i>
                        </a>
                    </div>
                    <div class="stores_cards">
                        @foreach ($stores as $store)
                            <a href="shop.html" class="store_card">
                                <div class="logo">
                                    <img src="{{$store->image}}" alt="partener">
                                </div>
                                <h6>{{$store->name}}</h6>
                            </a>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>
        <!-- recent blogs -->
        <section class="recent_bolgs">
            <div class="container">
                <h2>Latest Developments and Innovative Ideas</h2>
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
        <section class="features">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-6 p-2">
                        <div class="feature">
                            <img src="assets/images/f1.svg" alt="">
                            <h5>Free shipping</h5>
                            <p>Free shipping to all regions on orders of more than 100 riyals</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-6 p-2">
                        <div class="feature">
                            <img src="assets/images/f2.svg" alt="">
                            <h5>7 days easy returns</h5>
                            <p>Any product fault within 07 days for immediate replacement.</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-6 p-2">
                        <div class="feature">
                            <img src="assets/images/f3.svg" alt="">
                            <h5>24-hour support.</h5>
                            <p>Our support team is always ready to serve you 7 days a week</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-6 p-2">
                        <div class="feature">
                            <img src="assets/images/f4.svg" alt="">
                            <h5>Payment is secure</h5>
                            <p>We guarantee 100% secure payment through online payment</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection