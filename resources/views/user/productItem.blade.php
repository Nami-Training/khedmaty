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
                            <img src="{{asset($product->images[0]->image)}}"
                                alt="product-image">
                            <div class="store_banner container">
                                <!-- add class active on action -->
                                <div class="store_brand">
                                    <img src="{{asset($product->store->image)}}"
                                        alt="store">
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

                                <h5 class="pe-5">Pair of Toyota Aurion Black Cover Headlights 2009-2011</h5>
                                <p>Piece Number : <span class="num">22792</span> </p>
                                <p>Manufacture :
                                    <span class="status">imitation
                                        <i class="fa-sharp fa-solid fa-badge-check"></i>
                                    </span>
                                </p>
                                <h5>PRICE:
                                    <span class="price">
                                        <strong>100 SAR</strong>
                                    </span>
                                </h5>
                                <div class="addToCart">
                                    <div class="count quantity">
                                        <button id="amount_minus"
                                            onclick="change('027c91341fd5cf4d2579b49c4b6a90da','minus')">
                                            <i class="fa-sharp fa-solid fa-minus"></i>
                                        </button>
                                        <input id="qty-input-027c91341fd5cf4d2579b49c4b6a90da" type="number" placeholder="0"
                                            data-product-quantity="1" data-product-id="1" data-id="1" value="1">
                                        <button id="amount_plus"
                                            onclick="change('027c91341fd5cf4d2579b49c4b6a90da','plus')">
                                            <i class="fa-sharp fa-solid fa-plus"></i>
                                        </button>
                                    </div>
                                    <button class="add_to_cart" id="add_to_cart1" data-quantity="1" data-product-id="1">
                                        <i class="fa-regular fa-cart-shopping-fast"></i>
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
                                    <div class="table_row">
                                        <div class="cell">
                                            <h6>BMW</h6>
                                        </div>
                                        <div class="cell">
                                            <h6>Santa Fe</h6>
                                        </div>
                                        <div class="cell">
                                            <h6>2000</h6>
                                        </div>
                                    </div>
                                    <div class="table_row">
                                        <div class="cell">
                                            <h6>Mazda</h6>
                                        </div>
                                        <div class="cell">
                                            <h6>Corolla</h6>
                                        </div>
                                        <div class="cell">
                                            <h6>2019</h6>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="description">
                                <!-- text area -->
                                <p>
                                </p>
                                <p>Providing sleek LED lighting that's easy to install. Emitting a cool white light with a
                                    color temperature of 6000 Kelvin. Longer lifespan compared to traditional halogen bulbs.
                                    Featuring a compact design that combines all components for easy installation. Designed
                                    for off-road use (HL [~HIR2]). Offers high-quality cool white light for improved
                                    visibility. Includes a dual cooling system for increased longevity and durability.
                                    Facilitates installation through an integrated control box. Overall, the Philips Ultinon
                                    Pro3022 LED bulbs are a modern and stylish upgrade for car headlights, delivering both
                                    performance and aesthetics. Designed to ensure maximum comfort and safety during
                                    driving.</p>
                                <p></p>
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
                                <img src="{{asset($productItem->images[0]->image)}}"
                                    alt="product">
                                <span>
                                    @if ($product->type)
                                        Original
                                    @else
                                        imitation
                                    @endif
                                </span>
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

@endpush