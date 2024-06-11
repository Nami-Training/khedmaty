@extends('user.layout.master')

@section('title' , 'Product')

@section('content')
<main style="margin: 0px;">
    <!-- page header -->
    <div class="page_header container d-flex align-items-center">
        <h6>
            <a href="{{route('home')}}">Home</a>
            <i class="fa-regular fa-angle-right"></i>
            {{$product->name}}
        </h6>
    </div>

    <!-- products_details section -->
    <section class="products_details__section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-12 mb-lg-0 mb-5">
                    <div class="product_img">
                        <img src="{{asset($product->images[0]->image)}}" alt="product-image">
                        <div class="store_banner container mt-5">
                            <!-- add class active on action -->
                            <button class="save add_store_to_wishlist @if ($product->store->wishlist && Auth::guard('web')->check())
                                    active
                                @endif" data-id="{{$product->store->id}}" onclick="toggleActiveSavedClass(this)">
                                <i class="fa-sharp fa-regular fa-bookmark"></i>
                            </button>
                            <div class="store_brand">
                                <img src="{{asset($product->store->image)}}" alt="store" style="width: 100px;height: 100px;">
                            </div>
                            <div class="store_info">
                                <h3>{{$product->store->name}}</h3>
                                <button class="rate" data-bs-toggle="modal" data-bs-target="#rateModel">
                                    <h6>rates ( 1 )</h6>
                                    <ul>
                                        <li><i class="fa-sharp fa-solid fa-star "></i></li>

                                        <li><i class="fa-sharp fa-solid fa-star "></i></li>

                                        <li><i class="fa-sharp fa-solid fa-star "></i></li>

                                        <li><i class="fa-sharp fa-solid fa-star "></i></li>

                                        <li><i class="fa-sharp fa-solid fa-star "></i></li>

                                    </ul>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-12">
                    <div class="product_info">
                        <div class="pro_label">

                            <h5 class="pe-5">{{$product->name}}</h5>
                            <p>Piece Number : <span class="num">{{$product->code}}</span> </p>
                            <p>Manufacture :
                                <span class="status">
                                    @if ($product->type)
                                    Original
                                    @else
                                    imitation
                                    @endif
                                    <i class="fa-sharp fa-solid fa-badge-check"></i>
                                </span>
                            </p>
                            <h5>PRICE:
                                <span class="price">
                                    <strong>{{$product->price}} SAR</strong>
                                </span>
                            </h5>
                            <div class="addToCart">
                                {{-- <div class="count quantity">
                                    <button id="amount_minus" onclick="change('{{$product->code}}','minus')">
                                        <i class="fa-sharp fa-solid fa-minus"></i>
                                    </button>
                                    <input id="qty-input-{{$product->code}}" type="number" placeholder="0"
                                        data-product-quantity="1" data-product-id="{{$product->id}}"
                                        data-id="{{$product->id}}" value="0">
                                    <button id="amount_plus" onclick="change('{{$product->code}}','plus')">
                                        <i class="fa-sharp fa-solid fa-plus"></i>
                                    </button>
                                </div> --}}
                                <button class="add_to_cart" id="add_to_cart{{$product->price}}" data-quantity="1"
                                    data-product-id="{{$product->id}}">
                                    <i class="fa-regular fa-cart-shopping-fast"></i>Add To Cart
                                </button>
                            </div>
                            <p>Compatible with :</p>
                            <!-- table -->
                            <div class="table m-0">
                                <div class="table_header">
                                    <div class="cell">
                                        <h6>brand</h6>
                                    </div>
                                    <div class="cell">
                                        <h6>car</h6>
                                    </div>
                                    <div class="cell">
                                        <h6>model</h6>
                                    </div>
                                </div>
                                <?php $i=0; ?>
                                @foreach ($product->brands as $brand)
                                <div class="table_row">
                                    <div class="cell">
                                        <h6>{{$brand->name}}</h6>
                                    </div>
                                    <div class="cell">
                                        <h6>{{$product->cars[$i]->name}}</h6>
                                    </div>
                                    <div class="cell">
                                        <h6>{{$product->manufactures[$i++]->year}}</h6>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="description">
                            <!-- text area -->
                            <p>{{$product->description}}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- similar producst -->
        <div class="container mt-4">
            <h3 class="semilar_pros">similar products</h3>
            <div class="rendered_products">
                @foreach ($products as $productItem)
                <div class="product_crad">
                    <div class="product_image">
                        <img src="{{asset($productItem->images[0]->image)}}" alt="product">
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
                        <h5 class="pro_name" title="Pair of Toyota Aurion Black Cover Headlights 2009-2011">
                            <a href="{{route('Products.show', $productItem->id)}}">{{$productItem->name}}</a>
                        </h5>
                        <p class="pro_number">NO: {{$productItem->code}}</p>
                        <p class="trader">{{$productItem->store->name}} </p>
                        <div class="price_buy">

                            <h6>{{$productItem->price}} SAR</h6>

                            <button class="add_to_cart" id="add_to_cart1" data-product-quantity="1" data-quantity="1"
                                data-product-id="1">
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
                @endforeach
            </div>
        </div>
    </section>
</main>
@endsection

@push('js')
<script>




</script>
@endpush