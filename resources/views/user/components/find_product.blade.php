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
@endforeach