@extends('user.layout.master')

@section('title' , 'Cart')

@section('content')
    <main>
        <!-- page header -->
        <div class="page_header container d-flex align-items-center">
            <h6>
                <a href="{{route('home')}}">Home</a>
                <i class="fa-regular fa-angle-right"></i>
                shopping cart
            </h6>
        </div>
        <!-- shopping_cart section -->
        <section class="shopping_cart">
            <div class="container">
                <div class="row justify-content-center" id="shopping_div">
                    @if (count($carts))
                    <!-- element -->
                        <div id="cartData">
                            @foreach ($carts as $cart)
                                <div class="col-12">
                                    <div class="item">
                                        <div class="item-info">
                                            <div class="img">
                                                <img src="{{asset($cart->options['image'])}}"
                                                    alt="product">
                                            </div>
                                            <div class="details">
                                                <h6>{{$cart->name}}</h6>
                                                <p> <i class="fa-regular fa-tags"></i> <span>{{$cart->price}}</span> SAR</p>
                                            </div>
                                        </div>
                                        <div class="price_count">
                                            <div class="count">
                                                <button onclick="change('{{$cart->rowId}}','minus')">
                                                    <i class="fa-sharp fa-solid fa-minus" id="amount_minus"></i>
                                                </button>
                                                <div class="count quantity">
                                                    <input type="number" class="qty-text" name="product_list[20][amount]"
                                                        data-id="{{$cart->rowId}}"
                                                        id="qty-input-{{$cart->rowId}}" step="1" min="1" max="99"
                                                        value="{{$cart->qty}}" placeholder="1">
                                                    <input type="hidden" name="product_list[{{$cart->id}}][product_id]" value="{{$cart->id}}">
                                                </div>
                                                <button onclick="change('{{$cart->rowId}}','plus')">
                                                    <i class="fa-sharp fa-solid fa-plus" id="amount_plus"></i>
                                                </button>
                                            </div>
                                            <div class="total">
                                                <p>TOTAL : <span>{{$cart->price * $cart->qty}}</span> SAR</p>
                                                <button class="cart_delete" data-id="{{$cart->rowId}}">
                                                    <i class="fa-regular fa-trash-can-list"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <div class="col-12">
                            <div class="cart_total">
                                <p>TOTAL : <span class="cart_subtotal"> {{Cart::subtotal()}} </span> SAR</p>
                                <a href="{{route('checkout.index')}}">Order Now</a>
                            </div>
                        </div>
                    @else
                        <img src="{{asset('assets/img/empty-cart.png')}}" alt="" style="width: 40%!important;">
                        <h1 class="empty_text">Your cart is empty <a href="{{route('Stores.index')}}">go shopping</a></h1>
                    @endif
                </div>
            </div>
        </section>


    </main>
@endsection