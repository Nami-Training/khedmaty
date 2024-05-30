@extends('user.layout.master')

@section('title' , 'Stores')

@section('content')
<main style="margin: 0px;">
    <!-- page header -->
    <div class="page_header container d-flex align-items-center">
        <h6>
            <a href="{{route('home')}}">Home</a>
            <i class="fa-regular fa-angle-right"></i>
            Store
        </h6>
    </div>

    <!-- shop section -->
    <section class="shop_section">
        <div class="store_banner container">
            <!-- add class active on action -->
            <button class="save add_store_to_wishlist " data-id="1" onclick="toggleActiveSavedClass(this)">
                <i class="fa-sharp fa-regular fa-bookmark"></i>
            </button>
            <div class="store_brand">
                <img src="{{asset($store->image)}}" alt="store">
            </div>
            <div class="store_info">
                <h3>{{$store->name}}</h3>
                <p><i class="fa-light fa-map-pin"></i>{{$store->address}}</p>
                <button class="rate" data-bs-toggle="modal" data-bs-target="#rateModel">
                    <h6>Ratings( 1 )</h6>
                    <ul>
                        <li><i class="fa-sharp fa-solid fa-star"></i></li>

                        <li><i class="fa-sharp fa-solid fa-star "></i></li>

                        <li><i class="fa-sharp fa-solid fa-star "></i></li>

                        <li><i class="fa-sharp fa-solid fa-star "></i></li>

                        <li><i class="fa-sharp fa-solid fa-star "></i></li>

                    </ul>
                </button>
            </div>
        </div>
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
                        <form id="filter-submit-global" action="https://khidmty.com/ar/stores/1">
                            <div class="accordion" id="filterAccordion">
                                <!-- categories Level -->
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingOne">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapseOne" aria-expanded="true"
                                            aria-controls="collapseOne">
                                            القسم
                                        </button>
                                    </h2>
                                    <div id="collapseOne" class="accordion-collapse collapse show"
                                        aria-labelledby="headingOne" data-bs-parent="#filterAccordion">
                                        <div class="accordion-body">
                                            <ul>
                                                <li>
                                                    <label for="department_id_1" class="field_name">
                                                        <img src="https://khidmty.com/storage/images/admins/departments/Y5vmTdZLqY1708417286.png"
                                                            alt="bumber">
                                                        <h6>الصدامات، الشبوك والواجهة</h6>
                                                    </label>
                                                    <input type="checkbox" class="department_id" value="1"
                                                        name="department_id[]" id="department_id_1">
                                                </li>
                                                <li>
                                                    <label for="department_id_2" class="field_name">
                                                        <img src="https://khidmty.com/storage/images/admins/departments/DXWynsHTyl1703923826.jpeg"
                                                            alt="bumber">
                                                        <h6>المكائن، القيرات وملحقاتها</h6>
                                                    </label>
                                                    <input type="checkbox" class="department_id" value="2"
                                                        name="department_id[]" id="department_id_2">
                                                </li>
                                                <li>
                                                    <label for="department_id_3" class="field_name">
                                                        <img src="https://khidmty.com/storage/images/admins/departments/nDpBeiOJRj1701001977.png"
                                                            alt="bumber">
                                                        <h6>المساعدات، المقصات وعمود التوازن</h6>
                                                    </label>
                                                    <input type="checkbox" class="department_id" value="3"
                                                        name="department_id[]" id="department_id_3">
                                                </li>
                                                <li>
                                                    <label for="department_id_4" class="field_name">
                                                        <img src="https://khidmty.com/storage/images/admins/departments/bwYFtzhtxU1701002019.png"
                                                            alt="bumber">
                                                        <h6>البواجي، الفلاتر والسيور</h6>
                                                    </label>
                                                    <input type="checkbox" class="department_id" value="4"
                                                        name="department_id[]" id="department_id_4">
                                                </li>


                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <!-- brand level -->
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingTwo">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseTwo"
                                            aria-expanded="false" aria-controls="collapseTwo">
                                            الماركه
                                        </button>
                                    </h2>
                                    <div id="collapseTwo" class="accordion-collapse collapse"
                                        aria-labelledby="headingTwo" data-bs-parent="#filterAccordion">
                                        <div class="accordion-body">
                                            <ul>
                                                <li>
                                                    <label for="brand_id_1" class="field_name">
                                                        <img src="https://khidmty.com/storage/images/admins/brands/TC8zgpvn7n1701002436.png"
                                                            alt="bumber">
                                                        <h6>BMW</h6>
                                                    </label>
                                                    <input type="checkbox" name="brand_id[]" value="1" class="brand_id"
                                                        id="brand_id_1">
                                                </li>
                                                <li>
                                                    <label for="brand_id_2" class="field_name">
                                                        <img src="https://khidmty.com/storage/images/admins/brands/6INN0uaq3B1701002552.png"
                                                            alt="bumber">
                                                        <h6>Honda</h6>
                                                    </label>
                                                    <input type="checkbox" name="brand_id[]" value="2" class="brand_id"
                                                        id="brand_id_2">
                                                </li>
                                                <li>
                                                    <label for="brand_id_3" class="field_name">
                                                        <img src="https://khidmty.com/storage/images/admins/brands/xa0j1ejdhz1701002595.png"
                                                            alt="bumber">
                                                        <h6>Mazda</h6>
                                                    </label>
                                                    <input type="checkbox" name="brand_id[]" value="3" class="brand_id"
                                                        id="brand_id_3">
                                                </li>
                                                <li>
                                                    <label for="brand_id_4" class="field_name">
                                                        <img src="https://khidmty.com/storage/images/admins/brands/UNyFVkZuQL1701002626.png"
                                                            alt="bumber">
                                                        <h6>Toyota</h6>
                                                    </label>
                                                    <input type="checkbox" name="brand_id[]" value="4" class="brand_id"
                                                        id="brand_id_4">
                                                </li>
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
                                            الموديل
                                        </button>
                                    </h2>
                                    <div id="collapseThree" class="accordion-collapse collapse"
                                        aria-labelledby="headingThree" data-bs-parent="#filterAccordion">
                                        <div class="accordion-body">
                                            <ul>

                                                <li>
                                                    <label for="car_id_1" class="field_name">
                                                        <h6>سنتافي</h6>
                                                    </label>
                                                    <input type="checkbox" value="1" name="car_id[]" id="car_id_1">
                                                </li>
                                                <li>
                                                    <label for="car_id_2" class="field_name">
                                                        <h6>كرولا</h6>
                                                    </label>
                                                    <input type="checkbox" value="2" name="car_id[]" id="car_id_2">
                                                </li>
                                                <li>
                                                    <label for="car_id_3" class="field_name">
                                                        <h6>سيارة يارس</h6>
                                                    </label>
                                                    <input type="checkbox" value="3" name="car_id[]" id="car_id_3">
                                                </li>
                                                <li>
                                                    <label for="car_id_4" class="field_name">
                                                        <h6>كورز</h6>
                                                    </label>
                                                    <input type="checkbox" value="4" name="car_id[]" id="car_id_4">
                                                </li>
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
                                            سنة الصنع
                                        </button>
                                    </h2>
                                    <div id="collapseFour" class="accordion-collapse collapse"
                                        aria-labelledby="headingFour" data-bs-parent="#filterAccordion">
                                        <div class="accordion-body">
                                            <ul>
                                                <li>
                                                    <label for="year1908" class="field_name">
                                                        <h6>1908</h6>
                                                    </label>
                                                    <input value="1908" type="checkbox" name="manufacture_year[]"
                                                        id="year1908">
                                                </li>
                                                <li>
                                                    <label for="year1912" class="field_name">
                                                        <h6>1912</h6>
                                                    </label>
                                                    <input value="1912" type="checkbox" name="manufacture_year[]"
                                                        id="year1912">
                                                </li>
                                                <li>
                                                    <label for="year1914" class="field_name">
                                                        <h6>1914</h6>
                                                    </label>
                                                    <input value="1914" type="checkbox" name="manufacture_year[]"
                                                        id="year1914">
                                                </li>
                                                <li>
                                                    <label for="year2000" class="field_name">
                                                        <h6>2000</h6>
                                                    </label>
                                                    <input value="2000" type="checkbox" name="manufacture_year[]"
                                                        id="year2000">
                                                </li>
                                                <li>
                                                    <label for="year2003" class="field_name">
                                                        <h6>2003</h6>
                                                    </label>
                                                    <input value="2003" type="checkbox" name="manufacture_year[]"
                                                        id="year2003">
                                                </li>
                                                <li>
                                                    <label for="year2013" class="field_name">
                                                        <h6>2013</h6>
                                                    </label>
                                                    <input value="2013" type="checkbox" name="manufacture_year[]"
                                                        id="year2013">
                                                </li>
                                                <li>
                                                    <label for="year2019" class="field_name">
                                                        <h6>2019</h6>
                                                    </label>
                                                    <input value="2019" type="checkbox" name="manufacture_year[]"
                                                        id="year2019">
                                                </li>
                                                <li>
                                                    <label for="year2020" class="field_name">
                                                        <h6>2020</h6>
                                                    </label>
                                                    <input value="2020" type="checkbox" name="manufacture_year[]"
                                                        id="year2020">
                                                </li>


                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <input type="hidden" id="store_id_search" name="store_id" value="1">
                            </div>
                            <button type="submit" class="save_filter">
                                تأكيد
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
                                    <input id="inner_search_form" type="text" name="title"
                                        placeholder="ابحث بالاسم او الكود ... ؟">
                                </form>
                            </div>
                        </div>
                        <div class="row products_div">
                            <div class="col-lg-4 col-6 p-lg-2 p-1">
                                <div class="product_crad">
                                    <div class="product_image">
                                        <img src="https://khidmty.com/storage/images/admins/products/mNSAOyemKi1701002992.jpg"
                                            alt="product">
                                        <span>مقلد</span>
                                    </div>
                                    <div class="product_info">
                                        <h5 class="pro_name" title="طقم كشاف تويوتا أوريون غطاء أسود 2009-2011 قطعتين">
                                            <a href="https://khidmty.com/ar/products/1">طقم كشاف تويوتا أوريون
                                                غطاء...</a>
                                        </h5>
                                        <p class="pro_number">NO: 22792</p>
                                        <p class="trader">الوعلان للتجارة </p>
                                        <div class="price_buy">

                                            <h6>100 ريال</h6>

                                            <button class="add_to_cart" id="add_to_cart1" data-product-quantity="1"
                                                data-quantity="1" data-product-id="1">
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

                            <div class="col-lg-4 col-6 p-lg-2 p-1">
                                <div class="product_crad">
                                    <div class="product_image">
                                        <img src="https://khidmty.com/storage/images/admins/products/K20ShvuJwE1701003331.png"
                                            alt="product">
                                        <span>اصلي</span>
                                    </div>
                                    <div class="product_info">
                                        <h5 class="pro_name" title="دينمو مكينة">
                                            <a href="https://khidmty.com/ar/products/2">دينمو مكينة</a>
                                        </h5>
                                        <p class="pro_number">NO: 91384</p>
                                        <p class="trader">الوعلان للتجارة </p>
                                        <div class="price_buy">

                                            <h6>661 ريال</h6>

                                            <button class="add_to_cart" id="add_to_cart2" data-product-quantity="1"
                                                data-quantity="1" data-product-id="2">
                                                <i class="fa-regular fa-cart-shopping-fast"></i>
                                            </button>

                                        </div>
                                        <div class="rate_sale">

                                            <p>
                                            </p>

                                            <a href="#!">
                                                <b>2 <i class="fa-sharp fa-solid fa-star"></i></b> (1)
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4 col-6 p-lg-2 p-1">
                                <div class="product_crad">
                                    <div class="product_image">
                                        <img src="https://khidmty.com/storage/images/admins/products/sz2JmfMpJh1701003422.png"
                                            alt="product">
                                        <span>اصلي</span>
                                    </div>
                                    <div class="product_info">
                                        <h5 class="pro_name" title="فلتر هواء مكينة">
                                            <a href="https://khidmty.com/ar/products/3">فلتر هواء مكينة</a>
                                        </h5>
                                        <p class="pro_number">NO: 43078</p>
                                        <p class="trader">الوعلان للتجارة </p>
                                        <div class="price_buy">

                                            <h6>69 ريال</h6>

                                            <button class="add_to_cart" id="add_to_cart3" data-product-quantity="1"
                                                data-quantity="1" data-product-id="3">
                                                <i class="fa-regular fa-cart-shopping-fast"></i>
                                            </button>

                                        </div>
                                        <div class="rate_sale">

                                            <p>
                                            </p>

                                            <a href="#!">
                                                <b>2 <i class="fa-sharp fa-solid fa-star"></i></b> (1)
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection

@push('js')
    <script>
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
    </script>
@endpush