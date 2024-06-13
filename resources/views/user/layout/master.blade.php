<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description"
        content="Discover the world of cars at my service store - where quality meets diversity. Get the best parts and great accessories for your car today!">
    <title>@yield('title')</title>
    <link rel="icon" href="{{asset($setting->favicon)}}" type="image/x-icon">
    <!-- Required CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/main.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/style.scss')}}">

    <style>
        .product_crad .product_image button.active i{
            font-weight: 600;
        }
    </style>

    {{--
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" /> --}}

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
                    <li><a class="nav-link" href="{{route('Stores.index')}}">Stores</a></li>
                    <li><a class="nav-link" href="{{route('aboutUs')}}">About US</a></li>
                    <li><a class="nav-link" href="{{route('Blogs.index')}}">Blogs</a></li>
                    <li><a class="nav-link" href="{{route('contactUsForm')}}">Contact US</a></li>
                </ul>
            </div>
            <div class="search">
                <div class="cart_open" id="toggleSmallCart">
                    <h6 class="cart_subtotal">
                        {{Cart::subtotal()}} SAR </h6>
                    <i class="fa-light fa-bag-shopping"></i>
                    <span id="cart_counter_d">{{Cart::count()}}</span>
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
                            <a class="dropdown-item" href="{{route('Orders.index')}}">My Orders</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="{{route('favourits.index')}}">Favorites</a>
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
                    <i class="fa-solid fa-magnifying-glass"></i>
                </button>
                <button class="toggler">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>
            </div>
        </nav>

        <div id="minicart" class="mini_cart">
            <p>There are <span>{{Cart::count()}}</span> items in your shopping cart</p>
            <div class="inner_cart">
                @if (Cart::count())
                    @foreach (Cart::content() as $cart)
                        <div class="product">
                            <div class="img">
                                <img src="{{asset($cart->options['image'])}}" alt="product">
                            </div>
                            <div class="info">
                                <h6>
                                    <a href="product-details.html">{{$cart->name}}</a>
                                </h6>
                                <p>Prcie :<span>{{$cart->price}}</span> SR</p>
                                <div class="count_delete">
                                    <p>quantity : <span>{{$cart->qty}}</span></p>
                                    <button class="cart_delete" data-id="{{$cart->rowId}}">
                                        <i class="fa-regular fa-trash-can-list"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @else
                    <img src="{{asset('assets/img/empty-cart.png')}}" alt="empty-cart">
                @endif
                <div class="subtotal">
                    <p> Total:</p>
                    <span>{{Cart::subtotal()}} SR</span>
                </div>
            </div>
            <div class="btns">
                <a href="{{route('cart.index')}}">Shopping Cart</a>
                <a href="{{route('checkout.index')}}">Paying</a>
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

    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        function change(rowId,type) {
            // let amount_minus = document.getElementById('amount_minus'+rowId);
            let amount = document.getElementById('qty-input-'+rowId);
            // let amount_plus = document.getElementById('amount_plus'+rowId);
            var productQuantity = document.getElementById('qty-input-'+rowId).value;
            if(type == 'plus'){
                amount.value++;
                // var spinner = $(this),input=spinner.closest("div.quantity").find('input[type="number"]');
                productQuantity =  document.getElementById('qty-input-'+rowId).value;

                update_cart(rowId,productQuantity);

            }else{
                if (amount.value > 0) {
                    amount.value--;
                    productQuantity =  document.getElementById('qty-input-'+rowId).value;

                    update_cart(rowId,productQuantity);
                }
            }


        }

        $(document).on('click','.add_to_cart',function(e) {
            e.preventDefault();
            var product_id = $(this).data('product-id');
            var product_qty = $(this).data('quantity');

            var path = "{{route('cart.store')}}";

            $.ajax({
                url:path,
                type:"POST",
                dataType:"JSON",
                data:{
                    product_id:product_id,
                    product_qty:product_qty,
                },
                // beforeSend:function() {
                //     $('#add_to_cart'+product_id).html('<i class="fas fa-spinner fa-spin"></i>  Add to cart');
                // },
                // complete:function() {
                //     $('#add_to_cart'+product_id).html('<i class="fa fa-shopping-cart"></i> Add to cart');
                // },
                success:function(data) {
                    console.log(data['cart']['minicart']);
                    if(data['code'] == 200) {
                        // $('body #header-ajax').html(data['header']);
                        // $('body #footer-ajax').html(data['footer']);
                        $('.cvtoal').html(data['cart']['total']);
                        $('#minicart').html(data['cart']['minicart']);
                        $('#cart_counter_d').html(data['cart']['cart_count']);
                        $('.cart_subtotal').html(data['cart']['total']);
                        $('#cartData').html(data['cart']['cartData']);
                        Swal.fire({
                            icon: 'success',
                            title: 'done successfully',
                            html: data['message'],
                            showConfirmButton: false,
                            timer: 1500
                        })
                    }
                },
                error:function (err) {
                    console.log(err);
                }
            });
        });

        $(document).on('click','.cart_delete',function(e) {
            e.preventDefault();
            var cart_id = $(this).data('id');
            var path = "{{route('cart.cart_delete')}}";
            $.ajax({
                url:path,
                type:"POST",
                dataType:"JSON",
                data:{
                    cart_id:cart_id,
                },
                success:function(data) {
                    console.log(data);
                    if(data['code'] == 200) {
                        // $('#shopping_div').html(data['shopping_div']);
                        $('.cvtoal').html(data['cart']['total']);
                        $('#minicart').html(data['cart']['minicart']);
                        $('#cart_counter_d').html(data['cart']['cart_count']);
                        $('.cart_subtotal').html(data['cart']['total']);
                        $('#cartData').html(data['cart']['cartData']);
                        Swal.fire({
                            icon: 'success',
                            title: 'Good job!',
                            html: data['message'],
                        });
                    }
                },
                error:function (err) {
                    console.log(err);
                }
            });
        });
    </script>
    {{-- Wishlist script --}}
    <script>
        function toggleActiveClass(element) {
            element.classList.toggle('active');
        }

        function toggleActiveSavedClass(element) {
            element.classList.toggle('active');
        }

        $(document).on('click','.add_to_wishlist',function(e) {
            e.preventDefault();
            var product_id = $(this).data('id');

            var path = "{{route('wishlist.add_product')}}";

            $.ajax({
                url:path,
                type:"POST",
                dataType:"JSON",
                data:{
                    product_id:product_id,
                },

                success:function(data) {

                    console.log(data);
                    if(data['code'] == 200) {
                        // $('body #header-ajax').html(data['header']);
                        Swal.fire({
                            icon: 'success',
                            title: 'done successfully',
                            html: data['message'],
                            showConfirmButton: false,
                            timer: 1500
                        })
                    } else if(data['present']) {

                        Swal.fire({
                            icon: 'warning',
                            title: 'Opps!',
                            html: data['message'],
                        });
                    } else {
                        Swal.fire({
                            icon: 'error',
                            title: 'Sorry!',
                            html: "You can't add the product",
                        });
                    }
                },
                error:function (err) {
                    console.log(err);
                }
            });
        });

        $(document).on('click','.add_store_to_wishlist',function(e) {
            e.preventDefault();
            var to_user_id = $(this).data('id');

            var path = "{{route('wishlist.add_store')}}";

            $.ajax({
                url:path,
                type:"POST",
                dataType:"JSON",
                data:{
                    to_user_id:to_user_id,
                },

                success:function(data) {

                    console.log(data);
                    if(data['code'] == 200) {
                        // $('body #header-ajax').html(data['header']);
                        Swal.fire({
                            icon: 'success',
                            title: 'done successfully',
                            html: data['message'],
                            showConfirmButton: false,
                            timer: 1500
                        })
                    } else if(data['present']) {

                        Swal.fire({
                            icon: 'warning',
                            title: 'Opps!',
                            html: data['message'],
                        });
                    } else {
                        Swal.fire({
                            icon: 'error',
                            title: 'Sorry!',
                            html: "You can't add the product",
                        });
                    }
                },
                error:function (err) {
                    console.log(err);
                }
            });
        });

    </script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Get all elements with the class 'my-input'
            var inputs = document.getElementsByClassName('qty-text');

            // Attach an 'input' event listener to each element
            for (var i = 0; i < inputs.length; i++) {

                inputs[i].addEventListener('change', handleInputChange);
            }
        });

        // Function to handle input changes
        function handleInputChange(event) {
            alert('sss');
            // Access the value of the input element
            var inputValue = event.target.value;

            // Do something with the input value
            console.log('Input value changed to:', inputValue);
            // You can perform other actions or logic here based on the input value
        }

        let qtyTextArr = document.querySelectorAll(".ss");
        qtyTextArr.forEach(el=>{
            el.addEventListener("change",()=>{
            alert('vv')

            })
        });

        $(document).on('key change','.qty-text',function() {
            var id = $(this).data('id');
            var spinner = $(this),input=spinner.closest("div.quantity").find('input[type="number"]');
            var productQuantity = $('#update-cart-'+id).data('product-quantity');
            update_cart(id,productQuantity);
        });

        $(document).on('change','.qty-text',function() {
            var id = $(this).data('id');
            var spinner = $(this),input=spinner.closest("div.quantity").find('input[type="number"]');
            var productQuantity = $('#update-cart-'+id).data('product-quantity');
            update_cart(id,productQuantity);
        });

        function update_cart(id,productQuantity) {
            var rowId=id;
            var product_qty=$('#qty-input-'+id).val();
            var path="{{route('cart.update_cart')}}";

            $.ajax({
                url:path,
                type:"POST",
                data:{
                    product_qty:product_qty,
                    rowId:rowId,
                    productQuantity:productQuantity,
                },
                success:function(data) {
                    console.log(data);

                    if(data['code'] == 200) {
                        $('#minicart').html(data['cart']['minicart']);
                        $('#cart_counter_d').html(data['cart']['cart_count']);
                        $('.cart_subtotal').html(data['cart']['total']);
                        $('#cartData').html(data['cart']['cartData']);
                        $('.cvtoal').html(data['cart']['total']);
                        // Swal.fire({
                        //     icon: 'success',
                        //     title: 'Good job!',
                        //     html: data['message'],
                        // });
                    }
                    else {
                        Swal.fire({
                            icon: 'error',
                            title: 'Sorry!',
                            html: data['message'],
                        });
                    }
                },
            });
        }
    </script>
    @stack('js')
</body>

</html>