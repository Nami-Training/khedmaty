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
                        <div class="category">
                            <div class="text">
                                <h6>{{$storeCategory->name}}</h6>
                                <ul>
                                    <li>{{$storeCategory->description}}</li>
                                </ul>
                            </div>
                            <div class="img">
                                <img src="{{$storeCategory->image}}" alt="">
                            </div>
                        </div>
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
                        <h3>Spare Parts Of Cars</h3>
                        <a href="{{route('shop-department.index')}}" class="shop_all">Show all
                            <i class="fa-regular fa-circle-arrow-right"></i>
                        </a>
                    </div>
                    <!-- section_tabs -->
                    <div class="col-12 mb-3 p-2">
                        <div class="section_tabs">
                            <ul>
                                @foreach ($departments as $department)
                                    <li class="departmentsHome @if ($department->id == 1) active @endif" data-id="{{$department->id}}" onclick="toggleActiveClass(this)">
                                        <img src="{{asset($department->image)}}" alt="">
                                        <h6>{{$department->name}}</h6>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                    <!-- rendered products -->
                    <div class="rendered_products products_div">
                        @foreach ($deparmentProducts as $deparmentProduct)
                            <div class="col-lg-4 col-6 p-lg-2 p-1">
                                <div class="product_crad">
                                    <div class="product_image">
                                        <a href="{{route('Products.show', $deparmentProduct->id)}}">
                                            <img src="{{asset($deparmentProduct->images[0]->image)}}" alt="product">
                                        </a>
                                        <span>
                                            @if ($deparmentProduct->type)
                                                Original
                                            @else
                                                imitation
                                            @endif
                                        </span>
                                        @if (Auth::guard('web')->check())
                                            <button data-id="{{$deparmentProduct->id}}" id="add_to_wishlist{{$deparmentProduct->id}}" data-quantity="1" class="add_to_wishlist" onclick="toggleActiveClass(this)">
                                                <i class="fa-sharp fa-light fa-heart"></i>
                                            </button>
                                        @endif
                                    </div>
                                    <div class="product_info">
                                        <h5 class="pro_name" title="{{$deparmentProduct->description}}">
                                            <a href="{{route('Products.show', $deparmentProduct->id)}}">
                                                {{$deparmentProduct->description}}
                                            </a>
                                        </h5>
                                        <p class="pro_number">NO: {{$deparmentProduct->code}}</p>
                                        <p class="trader">{{$deparmentProduct->store->name}}</p>
                                        <div class="price_buy">

                                            <h6>{{$deparmentProduct->price}} SAR</h6>

                                            <button class="add_to_cart" id="add_to_cart{{$deparmentProduct->id}}" data-product-quantity="1"
                                                data-quantity="1" data-product-id="{{$deparmentProduct->id}}">
                                                <i class="fa-solid fa-cart-shopping"></i>
                                            </button>

                                        </div>
                                        <div class="rate_sale">
                                            <p>
                                            </p>
                                            <a href="#!">
                                                <b>0 <i class="fa-sharp fa-solid fa-star"></i></b> (0)
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
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
                        <a href="{{route('Stores.index')}}" class="shop_all">Show All
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

@push('js')
    <script>
        function toggleActiveClass(element) {
            element.classList.toggle('active');
        }

        function toggleActiveSavedClass(element) {
            element.classList.toggle('active');
        }


        let departmentsHomeArr = document.querySelectorAll(".departmentsHome");
        departmentsHomeArr.forEach(el=>{
            el.addEventListener("click",()=>{
                departmentsHomeArr.forEach(c=>{
                    c.classList.remove("active");
                })
                var department_id = el.getAttribute("data-id");
               var url = "{{route('getDepartmentItems')}}";
               url = url.replace(':id',department_id);
                $.ajax({
                    type: 'get',
                    url: url,
                    data: {'department_id': [department_id],'in_home':1},
                    success: function(response) {
                        console.log(response.prodcuts);
                        $('.products_div').html(''+response.prodcuts);
                    },
                    error: function(error) {
                        console.error(error);
                    }
                });

                el.classList.add("active")
            })
        })

    </script>
@endpush