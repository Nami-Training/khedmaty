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
                        <input type="hidden" name="product_list[20][product_id]" value="20">
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