<p>There are <span>{{Cart::count()}}</span> items in your shopping cart</p>
<div class="inner_cart">
    @if (Cart::count())
        @foreach ($carts as $cart)
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
