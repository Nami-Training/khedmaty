@extends('user.layout.master')

@section('title' , 'Stores')

@section('content')
<main style="margin: 0px;">
    <!-- page header -->
    <div class="page_header container d-flex align-items-center">
        <h6>
            <a href="{{route('home')}}">Home</a>
            <i class="fa-regular fa-angle-right"></i>
            Department
        </h6>
    </div>

    <!-- shop section -->
    <section class="shop_section">
        <div class="container">
            <div class="row">
                <!-- responsive open filter -->
                <div class="small-filter-header">
                    <h6>Search results</h6>
                    <button class="openfilter">
                        <i class="fa-light fa-sliders"></i>
                    </button>
                </div>
                <!-- filter menu -->

                <aside class="col-lg-3 pt-3 pe-lg-3 pe-0 side-menu">
                    <div class="filter-wrap">
                        <div class="colse">
                            <i class="fa-light fa-xmark"></i>
                        </div>
                        {{-- <form method="get" action="{{route('shop-department.filter')}}"> --}}
                        <form id="filter-submit-global-deparment">
                            <div class="accordion" id="filterAccordion">
                                 <!-- brand level -->
                                 <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingTwo">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseTwo"
                                            aria-expanded="false" aria-controls="collapseTwo">
                                            Brand
                                        </button>
                                    </h2>
                                    <div id="collapseTwo" class="accordion-collapse collapse"
                                        aria-labelledby="headingTwo" data-bs-parent="#filterAccordion">
                                        <div class="accordion-body">
                                            <ul>
                                                @foreach ($brands as $brand)
                                                    <li>
                                                        <label for="brand_id_{{$brand->id}}" class="field_name">
                                                            <img src="{{asset($brand->image)}}"
                                                                alt="bumber">
                                                            <h6>{{$brand->name}}</h6>
                                                        </label>
                                                        <input type="checkbox" name="brand_id[]" value="{{$brand->id}}" class="brand_id"
                                                            id="brand_id_{{$brand->id}}">
                                                    </li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <!-- model level -->
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingThree">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseThree"
                                            aria-expanded="false" aria-controls="collapseThree">
                                            Model
                                        </button>
                                    </h2>
                                    <div id="collapseThree" class="accordion-collapse collapse"
                                        aria-labelledby="headingThree" data-bs-parent="#filterAccordion">
                                        <div class="accordion-body">
                                            <ul>
                                                @foreach ($cars as $car)
                                                    <li>
                                                        <label for="car_id_{{$car->id}}" class="field_name">
                                                            <h6>{{$car->name}}</h6>
                                                        </label>
                                                        <input type="checkbox" value="{{$car->id}}" name="car_id[]" id="car_id_{{$car->id}}">
                                                    </li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <!-- manufacturing year -->
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingFour">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseFour"
                                            aria-expanded="false" aria-controls="collapseFour">
                                            manufacturing year
                                        </button>
                                    </h2>
                                    <div id="collapseFour" class="accordion-collapse collapse"
                                        aria-labelledby="headingFour" data-bs-parent="#filterAccordion">
                                        <div class="accordion-body">
                                            <ul>
                                                @foreach ($manufactures as $manufacture)
                                                    <li>
                                                        <label for="year{{$manufacture->year}}" class="field_name">
                                                            <h6>{{$manufacture->year}}</h6>
                                                        </label>
                                                        <input value="{{$manufacture->year}}" type="checkbox" name="manufacture_year[]"
                                                            id="year{{$manufacture->year}}">
                                                    </li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <input type="hidden" id="department_id_search" name="department_id" value="{{$department->id}}">
                            </div>
                            <button type="submit" class="save_filter">
                                Confirm
                            </button>
                        </form>
                    </div>
                </aside>
                <!-- products Wrapper -->
                <div class="col-lg-9 col-12 p-2">
                    <div class="container p-0">
                        <div class="row">
                            <div class="col-12 p-lg-2 p-1">
                                <form action="" class="inner_search__form">
                                    <input type="hidden" name="department_id" id="department_id" value="{{$department->id}}">
                                    <input id="inner_search_form" type="text" name="name"
                                        placeholder="Search by name or code...?">
                                </form>
                            </div>
                        </div>
                        <div class="row products_div">
                            @foreach ($products as $product)
                                <div class="col-lg-4 col-6 p-lg-2 p-1">
                                    <div class="product_crad">
                                        <div class="product_image">
                                            <a href="{{route('Products.show', $product->id)}}">
                                                <img src="{{asset($product->images[0]->image)}}" alt="product">
                                            </a>
                                            <span>
                                                @if ($product->type)
                                                    Original
                                                @else
                                                    imitation
                                                @endif
                                            </span>
                                            @if (Auth::guard('web')->check())
                                                <button data-id="{{$product->id}}" id="add_to_wishlist{{$product->id}}" data-quantity="1" class="add_to_wishlist" onclick="toggleActiveClass(this)">
                                                    <i class="fa-sharp fa-light fa-heart"></i>
                                                </button>
                                            @endif
                                        </div>
                                        <div class="product_info">
                                            <h5 class="pro_name" title="{{$product->description}}">
                                                <a href="{{route('Products.show', $product->id)}}">
                                                    {{$product->description}}
                                                </a>
                                            </h5>
                                            <p class="pro_number">NO: {{$product->code}}</p>
                                            <p class="trader">{{$product->store->name}}</p>
                                            <div class="price_buy">

                                                <h6>{{$product->price}} SR</h6>

                                                <button class="add_to_cart" id="add_to_cart{{$product->price}}" data-quantity="1" data-product-id="{{$product->id}}">
                                                    <i class="fa-regular fa-cart-shopping-fast"></i>
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
            </div>
        </div>
    </section>
</main>
@endsection

@push('js')
    {{-- <script>
        $(document).on('click','.add_to_wishlist',function(e) {
            e.preventDefault();
            var product_id = $(this).data('id');
            var product_qty = $(this).data('quantity');

            var token = "to0R7JdpvoofOtTy9J4Ob7MZ6yTVM1o94WDJxFAR";
            var path = "https://khidmty.com/ar/wishlist/store";

            $.ajax({
                url:path,
                type:"POST",
                dataType:"JSON",
                data:{
                    product_id:product_id,
                    product_qty:product_qty,
                    _token:token,
                },

                success:function(data) {

                    console.log(data);
                    if(data['status']) {
                        // $('body #header-ajax').html(data['header']);
                        Swal.fire({
                            icon: 'success',
                            title: 'Added Successfully',
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

            var token = "to0R7JdpvoofOtTy9J4Ob7MZ6yTVM1o94WDJxFAR";
            var path = "https://khidmty.com/ar/wishlist/addStoreToFavourites";

            $.ajax({
                url:path,
                type:"POST",
                dataType:"JSON",
                data:{
                    to_user_id:to_user_id,
                    _token:token,
                },

                success:function(data) {

                    console.log(data);
                    if(data['status']) {
                        // $('body #header-ajax').html(data['header']);
                        Swal.fire({
                            icon: 'success',
                            title: 'تم بنجاح',
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

        $(document).on('click','.move_to_cart',function(e) {
            e.preventDefault();
            var rowId = $(this).data('id');

            var token = "to0R7JdpvoofOtTy9J4Ob7MZ6yTVM1o94WDJxFAR";
            var path = "https://khidmty.com/ar/wishlist/move-to-cart";
            $.ajax({
                url:path,
                type:"POST",
                data:{
                    rowId:rowId,
                    _token:token,
                },
                beforeSend:function() {
                    $(this).html('<i class="fas fa-spinner fa-spin"></i> Moving to Cart...');
                },
                success:function(data) {
                    console.log(data);

                    if(data['status']) {
                        $('body #cart_counter').html(data['cart_count']);
                        $('body #wishlist_list').html(data['wishlist_list']);
                        $('body #header-ajax').html(data['header']);
                        // $('body #minicart').html(data['minicart']);

                        Swal.fire({
                            icon: 'success',
                            title: 'Good job!',
                            html: data['message'],
                        });
                    } else {
                        Swal.fire({
                            icon: 'warning',
                            title: 'Opps!',
                            html: data['message'],
                        });
                    }
                },
                error:function (err) {
                    Swal.fire({
                        icon: 'error',
                        title: 'Sorry!',
                        html: "Some Error",
                    });
                }
            });
        });

        $(document).on('click','.wishlist_delete',function(e) {
            e.preventDefault();
            var rowId = $(this).data('id');

            var token = "to0R7JdpvoofOtTy9J4Ob7MZ6yTVM1o94WDJxFAR";
            var path = "https://khidmty.com/ar/wishlist/delete";
            $.ajax({
                url:path,
                type:"POST",
                data:{
                    rowId:rowId,
                    _token:token,
                },
                success:function(data) {
                    console.log(data);

                    if(data['status']) {
                        $('body #cart_counter').html(data['cart_count']);
                        $('body #wishlist_list').html(data['wishlist_list']);
                        $('body #header-ajax').html(data['header']);
                        Swal.fire({
                            icon: 'success',
                            title: 'Good job!',
                            html: data['message'],
                        });
                    } else {
                        Swal.fire({
                            icon: 'warning',
                            title: 'Opps!',
                            html: data['message'],
                        });
                    }
                },
                error:function (err) {
                    Swal.fire({
                        icon: 'error',
                        title: 'Error!',
                        html: 'Some Error',
                    });
                }
            });
        });
    </script> --}}

    {{-- inner search --}}
    <script>
        $(document).ready(function () {
            $('#inner_search_form').keyup(function (event) {
                event.preventDefault();
                var name = $(this).val(); // Serialize the form data
                var department_id = $('#department_id').val(); // Serialize the form data

                $.ajax({
                    type: 'get',
                    url: "{{route('shop-department.search')}}",
                    data: {
                        'name': name,
                        'department_id': department_id
                    },
                    success: function (response) {
                        console.log(response);
                        $('.products_div').html('' + response.data['products']);
                    },
                    error: function (error) {
                        console.error(error);
                    }
                });
            });
        });
    </script>

    {{-- filter  --}}
    <script>

        $(document).ready(function () {
            $('#filter-submit-global-deparment').submit(function (event) {
                event.preventDefault();
                var formData = $(this).serialize(); // Serialize the form data
                $.ajax({
                    type: 'get',
                    url: "{{route('shop-department.filter')}}",
                    data: formData,
                    success: function (response) {
                        console.log(response);
                        $('.products_div').html('' + response.data['products']);
                    },
                    error: function (error) {
                        console.error(error);
                    }
                });
            });
        });

    </script>
@endpush