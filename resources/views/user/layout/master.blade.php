<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
        content="Discover the world of cars at my service store - where quality meets diversity. Get the best parts and great accessories for your car today!">
    <title>@yield('title')</title>
    <link rel="icon" href="{{asset($setting->favicon)}}" type="image/x-icon">
    <!-- Required CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/main.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/style.scss')}}">
</head>

<body>
    <!-- header section -->
    <header>
        <!-- offers bar -->
        <div class="offers_bar">
            <div class="container justify-content-center">
                <div class="social ">
                    <ul class="justify-content-center">
                        <li>
                            <a href="#!"> <i class="fa-brands fa-facebook-f"></i> </a>
                        </li>
                        <li>
                            <a href="#!"> <i class="fa-brands fa-instagram"></i> </a>
                        </li>
                        <li>
                            <a href="#!"> <i class="fa-brands fa-twitter"></i> </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- nav bar -->
        <nav class="container">
            <div class="logo">
                <a href="{{route('home')}}">
                    <img src="{{asset($setting->logo_header)}}" alt="logo">
                </a>
            </div>
            <div class="navigation_links">
                <ul>
                    <li><a class="nav-link active" href="{{route('home')}}">Home</a></li>
                    <li><a class="nav-link" href="{{route('allStores')}}">Stores</a></li>
                    <li><a class="nav-link" href="{{route('aboutUs')}}">About US</a></li>
                    <li><a class="nav-link" href="{{route('Blogs.index')}}">Blogs</a></li>
                    <li><a class="nav-link" href="{{route('contactUsForm')}}">Contact US</a></li>
                </ul>
            </div>
            <div class="search">
                <div class="cart_open" id="toggleSmallCart">
                    <h6 class="cart_subtotal">
                       120.00 SAR </h6>
                    <i class="fa-light fa-bag-shopping"></i>
                    <span id="cart_counter_d">1</span>
                </div>

                @if (Auth::check())
                    <!-- logged in -->
                    <div class="dropdown">
                        <a class="account" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            <div class="user">
                                <img src="{{asset(Auth::user()->image)}}" alt="avatar">
                            </div>
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                            <li>
                                <a class="dropdown-item" href="{{route('myProfile')}}">My Profile</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="orders.html">My Orders</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="favourits.html">Favorites</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="{{route('user.logout')}}">Logout</a>
                            </li>
                        </ul>
                    </div>
                @else
                    <!-- not logged in -->
                    <a href="{{route('auth')}}">
                        <i class="fa-regular fa-user"></i>
                    </a>
                @endif


                <button data-bs-toggle="modal" data-bs-target="#searchModal">
                    <i class="fa-regular fa-magnifying-glass"></i>
                </button>
                <button class="toggler">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>
            </div>
        </nav>
        <!-- empty cart -->
        <!--  <div class="mini_cart empty">
            <p>هناك 0 عنصر في سلة التسوق الخاصة بك</p>
            <div class="inner_cart">
                <img src="assets/images/empty-cart.png" alt="empty-cart">
                <div class="subtotal">
                    <p> الإجمالى:</p>
                    <span>0,00 ريال</span>
                </div>
            </div>
            <div class="btns">
                <a href="shopping-cart.html">عربة التسوق</a>
                <a href="checkout.html">الدفع</a>
            </div>
        </div> -->
        <!-- filled -->
        <div class="mini_cart">
            <p>هناك <span>1</span> عنصر في سلة التسوق الخاصة بك</p>
            <div class="inner_cart">
                <div class="product">
                    <div class="img">
                        <img src="assets/images/pro1.jpg" alt="product">
                    </div>
                    <div class="info">
                        <h6>
                            <a href="product-details.html">طقم لمبات فيليبس ليد HB3/4</a>
                        </h6>
                        <p>السعر :<span>2500 ريال</span></p>
                        <div class="count_delete">
                            <p>الكمية : <span>X2</span></p>
                            <button>
                                <i class="fa-regular fa-trash-can-list"></i>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="product">
                    <div class="img">
                        <img src="assets/images/pro1.jpg" alt="product">
                    </div>
                    <div class="info">
                        <h6>
                            <a href="product-details.html">طقم لمبات فيليبس ليد HB3/4</a>
                        </h6>
                        <p>السعر :<span>2500 ريال</span></p>
                        <div class="count_delete">
                            <p>الكمية : <span>X2</span></p>
                            <button>
                                <i class="fa-regular fa-trash-can-list"></i>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="product">
                    <div class="img">
                        <img src="assets/images/pro1.jpg" alt="product">
                    </div>
                    <div class="info">
                        <h6>
                            <a href="product-details.html">طقم لمبات فيليبس ليد HB3/4</a>
                        </h6>
                        <p>السعر :<span>2500 ريال</span></p>
                        <div class="count_delete">
                            <p>الكمية : <span>X2</span></p>
                            <button>
                                <i class="fa-regular fa-trash-can-list"></i>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="subtotal">
                    <p> الإجمالى:</p>
                    <span>80,00 ريال</span>
                </div>
            </div>
            <div class="btns">
                <a href="shopping-cart.html">عربة التسوق</a>
                <a href="checkout.html">الدفع</a>
            </div>
        </div>
    </header>

    @yield('content')

    @include('user.layout.footer')

    <!-- search modal -->
    <div class="modal fade" id="searchModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="container p-0">
                        <form action="shop.html" class="row">
                            <div class="col-12">
                                <div class="input_search">
                                    <input type="text" placeholder="إبحث باسم القطعة او رقمها.......">
                                </div>
                            </div>
                            <div class="col-12 mb-4">
                                <div class="search_results_no">
                                    <p><span>12</span> نتيجة</p>
                                    <a href="shop.html"> عرض الكل <i class="fa-regular fa-arrow-left-long"></i></a>
                                </div>
                            </div>
                            <div class="col-lg-4 col-6 p-2">
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
                            </div>
                            <div class="col-lg-4 col-6 p-2">
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
                            </div>
                            <div class="col-lg-4 col-6 p-2">
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
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="{{asset('assets/vendor/toster/js/jquery.toast.js')}}"></script>
    <script src="{{asset('assets/js/bundle/sweetalert2.bundle.js')}}"></script>
    <script src="{{asset('assets/vendor/jquery_validator/form_validator/jquery.form-validator.min.js')}}"></script>
    <!-- JS -->
    <script src="{{asset('assets/js/main.js')}}"></script>
    <script src="{{asset('assets/js/app.js')}}"></script>

    @stack('js')
</body>

</html>

