@extends('user.layout.master')

@section('title' , 'Checkout')

@section('content')
<main style="margin: 0px;">
    <!-- page header -->
    <div class="page_header container d-flex align-items-center">
        <h6>
            <a href="{{route('home')}}">Home</a>
            <i class="fa-regular fa-angle-right"></i>
            shopping cart
        </h6>
    </div>
    <!-- checkout section -->
    <section class="checkout_section">
        <div class="container">
            <div class="row">
                @if (isset($products))
                    <div class="col-lg-6 col-12">
                        <div class="products">
                            @foreach ($products as $product)
                                <div class="product">
                                    <div class="pro_img">
                                        <img src="{{asset($product['image'])}}" alt="product">
                                    </div>
                                    <div class="info">
                                        <h6>{{$product['name']}}</h6>
                                        <div class="count_price">
                                            <p>quantity : <span>{{$product['qty']}}</span></p>
                                            <p>TOTAL : <span>{{$product['price']}}</span> SAR</p>
                                            <input type="hidden" name="store_id" value="{{$product['store_id']}}">
                                            <input type="hidden" name="product_list[{{$product['product_id']}}][amount]"
                                                value="{{$product['qty']}}">
                                            <input type="hidden" name="product_list[{{$product['product_id']}}][product_id]"
                                                value="{{$product['product_id']}}">
                                        </div>
                                    </div>
                                </div>
                            @endforeach

                        </div>
                    </div>
                    <div class="col-lg-6 col-12">
                        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="pills-charge-tab" data-bs-toggle="pill"
                                    data-bs-target="#pills-charge" type="button" role="tab" aria-controls="pills-charge"
                                    aria-selected="true">
                                    <i class="fa-light fa-truck-fast"></i> delivery
                                </button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill"
                                    data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile"
                                    aria-selected="false" tabindex="-1">
                                    <i class="fa-regular fa-store"></i>received from store
                                </button>
                            </li>
                        </ul>
                        <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="pills-charge" role="tabpanel"
                                aria-labelledby="pills-charge-tab">
                                <form action="{{route('shopping-cart.store')}}" method="post" class="checkout_form">
                                    @csrf
                                    <input type="hidden" name="type" value="delivery">

                                    <input type="hidden" name="store_id" value="43">
                                    @foreach ($products as $product)
                                    <input type="hidden" name="product_list[{{$product['product_id']}}][amount]"
                                        value="{{$product['qty']}}">
                                    <input type="hidden" name="product_list[{{$product['product_id']}}][product_id]"
                                        value="{{$product['product_id']}}">
                                    @endforeach
                                    <div class="input_filed">
                                        <label for="address">Address</label>
                                        <input type="text" name="address" id="address" placeholder="Write Your address here...">
                                    </div>
                                    <div class="input_filed">
                                        <div class="loc">
                                            <div class="icon">
                                                <i class="fa-solid fa-wallet"></i>
                                            </div>
                                            <div class="text">
                                                <p>Payment Method</p>
                                            </div>
                                        </div>
                                        <ul>
                                            <li>
                                                <label for="cach" class="field_name">
                                                    <h6>Cash</h6>
                                                </label>
                                                <input checked="" type="radio" value="cash" name="payment_method" id="cach">
                                            </li>
                                            <li>
                                                <label for="apple_pay" class="field_name">
                                                    <img src="{{asset('assets/img/method3.svg')}}" alt="">
                                                    <h6>Apple Pay</h6>
                                                </label>
                                                <input type="radio" value="apple_pay" name="payment_method" id="apple_pay">
                                            </li>
                                            <li>
                                                <label for="online" class="field_name">
                                                    <h6>online</h6>
                                                </label>
                                                <input type="radio" value="online" name="payment_method" id="online">
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="input_filed">
                                        <div class="loc">
                                            <div class="icon">
                                                <i class="fa-light fa-circle-exclamation"></i>
                                            </div>
                                            <div class="text">
                                                <p>Notes</p>
                                            </div>
                                        </div>
                                        <textarea name="notice" id="notice"
                                            placeholder="Write notes on the order..."></textarea>
                                    </div>
                                    <div class="cart_total">
                                        <p>TOTAL : <span>{{Cart::subtotal()}}</span> SAR</p>
                                        <button type="submit">PLACE ORDER</button>
                                    </div>
                                </form>
                            </div>
                            <div class="tab-pane fade" id="pills-profile" role="tabpanel"
                                aria-labelledby="pills-profile-tab">
                                <form action="{{route('shopping-cart.store')}}" method="post" class="checkout_form">
                                    @csrf
                                    <input type="hidden" name="type" value="pickup_from_store">

                                    <input type="hidden" name="store_id" value="43">
                                    @foreach ($products as $product)
                                    <input type="hidden" name="product_list[{{$product['product_id']}}][amount]"
                                        value="{{$product['qty']}}">
                                    <input type="hidden" name="product_list[{{$product['product_id']}}][product_id]"
                                        value="{{$product['product_id']}}">
                                    @endforeach
                                    <div class="input_filed">
                                        <div class="loc">
                                            <div class="icon">
                                                <i class="fa-solid fa-wallet"></i>
                                            </div>
                                            <div class="text">
                                                <p>Payment Method</p>
                                            </div>
                                        </div>
                                        <ul>
                                            <li>
                                                <label for="cach" class="field_name">
                                                    <h6>Cash</h6>
                                                </label>
                                                <input checked="" type="radio" value="cash" name="payment_method" id="cach">
                                            </li>
                                            <li>
                                                <label for="apple_pay" class="field_name">
                                                    <img src="{{asset('assets/img/method3.svg')}}" alt="">
                                                    <h6>Apple Pay</h6>
                                                </label>
                                                <input type="radio" value="apple_pay" name="payment_method" id="apple_pay">
                                            </li>
                                            <li>
                                                <label for="online" class="field_name">
                                                    <h6>online</h6>
                                                </label>
                                                <input type="radio" value="online" name="payment_method" id="online">
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="input_filed">
                                        <div class="loc">
                                            <div class="icon">
                                                <i class="fa-light fa-circle-exclamation"></i>
                                            </div>
                                            <div class="text">
                                                <p>Notes</p>
                                            </div>
                                        </div>
                                        <textarea name="notice" id="notice"
                                            placeholder="Write notes on the order..."></textarea>
                                    </div>
                                    <div class="cart_total">
                                        <p>TOTAL : <span>{{Cart::subtotal()}}</span> SAR</p>
                                        <button type="submit">PLACE ORDER</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </section>


</main>
@endsection

@push('js')
<script>
    $(document).ready(function() {
        $('.checkout_form').submit(function(e) {
            e.preventDefault();
            const formData = new FormData(this);
            const url = $(this).attr('action');
            $.ajax({
                url: url,
                method: 'POST',
                data: formData,
                processData: false,
                contentType: false,
                success: function (response) {
                    var payment_method = response.data.order.payment_method;
                    if(payment_method == "online"){
                        console.log(response);
                        return window.location.href = response.data.redirectUrl;
                    }else {
                        Swal.fire({
                            icon: 'success',
                            title: 'done successfully',
                            html: response.message,
                            showConfirmButton: false,
                            timer: 1500
                        })
                        return window.location.href = "{{route('home')}}";
                    }
                },
                error: function (xhr, status, error) {
                    let errors = xhr.responseJSON.data;
                    let response = xhr.responseJSON;
                    console.log(xhr.responseJSON);
                    let errorMessage = '';
                    if(xhr.responseJSON.code == 422){
                        return  Swal.fire({
                            icon: 'error',
                            title: response.message,
                            showConfirmButton: false,
                            timer: 2500
                        })
                    }
                    $.each(errors, function (key, value) {
                        errorMessage += value[0] + '<br>';
                    });
                    Swal.fire({
                        icon: 'error',
                        title: 'Validation Error',
                        html: errorMessage,
                    });
                }
            });
        });
    });
</script>
@endpush