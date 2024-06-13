@extends('user.layout.master')

@section('title' , 'My Favourits')

@section('content')
<main>
    <!-- page header -->
    <div class="page_header container d-flex align-items-center">
        <h6>
            <a href="{{route('home')}}">Home</a>
            <i class="fa-regular fa-angle-right"></i>
            My Favourits
        </h6>
    </div>
    <section class="favourits">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-12 mb-lg-0 mb-4">
                    <div class="profile_side_bar">
                        <div class="user_img">
                            <div class="img">
                                <img src="{{asset(Auth::user()->image)}}" alt="">
                            </div>
                        </div>
                        <div class="info">
                            <h6>{{Auth::user()->name}}</h6>
                            <span>{{Auth::user()->phone}}</span>
                        </div>
                        <<ul class="links">
                            <li class="">
                                <a href="{{route('myProfile')}}"><i class="fa-light fa-user-pen"></i> Edit
                                    Profile</a>
                            </li>
                            <li class="active">
                                <a href="{{route('favourits.index')}}"><i class="fa-sharp fa-light fa-heart"></i>
                                    Favorites </a>
                            </li>
                            <li class="">
                                <a href="{{route('Orders.index')}}"><i class="fa-sharp fa-regular fa-store"></i> My
                                    Orders</a>
                            </li>

                            <li>
                                <a href="{{route('deleteAccount', Auth::user()->id)}}"><i class="fa-regular fa-user-xmark"></i>
                                    Delete Account</a>
                            </li>
                            <li>
                                <a href="{{route('user.logout')}}"><i
                                        class="fa-sharp fa-regular fa-arrow-right-from-bracket"></i> Logout</a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-8 col-12">
                    <ul class="nav saved_items_tabs nav-pills mb-3" id="pills-tab" role="tablist">
                        <!-- stores tab btn -->
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="pills-stores-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-stores" type="button" role="tab" aria-controls="pills-stores"
                                aria-selected="true">
                                Stores
                            </button>
                        </li>
                        <!-- products tab btn -->
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-products-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-products" type="button" role="tab" aria-controls="pills-products"
                                aria-selected="false" tabindex="-1">
                                Products
                            </button>
                        </li>
                    </ul>
                    <div class="tab-content" id="pills-tabContent">
                        <!-- stores tab -->
                        <div class="tab-pane fade show active" id="pills-stores" role="tabpanel"
                            aria-labelledby="pills-stores-tab">
                            <div class="row">
                                @foreach ($stores as $store)
                                    @if ($store->wishlist && Auth::guard('web')->user()->id == $store->wishlist->user_id)
                                        <div class="col-lg-4 col-6 p-2">
                                            <div class="store_card ">
                                                <div class="logo">
                                                    <img src="{{asset($store->image)}}"
                                                        alt="partener">
                                                </div>
                                                <h6>{{$store->name}}</h6>
                                                <p>
                                                    <i class="fa-light fa-map-pin"></i>
                                                    <span>{{$store->address}}</span>
                                                </p>
                                                <button class="save add_store_to_wishlist @if ($store->wishlist && Auth::guard('web')->check())
                                                    active
                                                @endif" data-id="{{$store->id}}" onclick="toggleActiveSavedClass(this)">
                                                    <i class="fa-sharp fa-regular fa-bookmark"></i>
                                                </button>
                                            </div>
                                        </div>
                                    @endif
                                @endforeach
                            </div>
                        </div>
                        <!-- product tab -->
                        <div class="tab-pane fade" id="pills-products" role="tabpanel"
                            aria-labelledby="pills-products-tab">
                            <div class="row">
                                @foreach ($products as $product)
                                    @if ($product->wishlist && Auth::guard('web')->user()->id == $product->wishlist->user_id)
                                        <div class="col-lg-4 col-6 p-lg-2 p-1">
                                            <div class="product_crad">
                                                <div class="product_image">
                                                    <img src="{{$product->images[0]->image}}"
                                                        alt="product">
                                                    <span>
                                                        @if ($product->type)
                                                            Original
                                                        @else
                                                            imitation
                                                        @endif
                                                    </span>
                                                    @if (Auth::guard('web')->check())
                                                        <button data-id="{{$product->id}}" id="add_to_wishlist{{$product->id}}" data-quantity="1" class="add_to_wishlist @if ($product->wishlist && Auth::guard('web')->check())
                                                            active
                                                        @endif" onclick="toggleActiveClass(this)">
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

                                                        <h6>{{$product->price}} SAR</h6>

                                                        <button class="add_to_cart" id="add_to_cart{{$product->id}}" data-product-quantity="1"
                                                            data-quantity="1" data-product-id="{{$product->id}}">
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
                                        @endif
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
</main>
@endsection