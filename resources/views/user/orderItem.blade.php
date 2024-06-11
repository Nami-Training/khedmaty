@extends('user.layout.master')

@section('title' , 'MyOrders')

@section('content')
    <main>
        <!-- page header -->
        <div class="page_header container d-flex align-items-center">
            <h6>
                <a href="{{route('home')}}">Home</a>
                <i class="fa-regular fa-angle-right"></i>
                Order Tracking
            </h6>
        </div>
        <section class="checkout_section">
            <div class="container">
                <div class="row">
                    <!-- order_recieved -->
                    @if ($order->status == 'new')
                        <!-- order_new -->
                        <div class="col-12 p-0">
                            <div class="order_status">
                                <div class="progress_state">
                                    <div class="icon">
                                        <i class="fa-sharp fa-solid fa-bag-shopping"></i>
                                    </div>
                                    <h6>
                                        new
                                    </h6>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" style="width: 20%" aria-valuenow="20"
                                        aria-valuemin="0" aria-valuemax="100"></div>
                                </div>

                            </div>
                        </div>
                    @elseif ($order->status == 'approved')
                        <!-- order approved -->
                        {{-- <div class="col-12 p-0">
                            <div class="order_status">
                                <div class="progress_state">
                                    <div class="icon">
                                        <i class="fa-sharp fa-solid fa-bag-shopping"></i>
                                    </div>
                                    <h6>
                                        تمت الموافقة
                                    </h6>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" style="width: 40%" aria-valuenow="40"
                                        aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div> --}}
                    @elseif ($order->status == 'Charging')
                        <!-- order Charging -->
                        <div class="col-12 p-0">
                            <div class="order_status">
                                <div class="progress_state">
                                    <div class="icon">
                                        <i class="fa-sharp fa-solid fa-circle-notch fa-spin"></i>
                                    </div>
                                    <h6>
                                        جاري الشحن
                                    </h6>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" style="width: 60%" aria-valuenow="60"
                                        aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                    @elseif ($order->status == 'charged')
                        <!-- order charged -->
                        <div class="col-12 p-0">
                            <div class="order_status">
                                <div class="progress_state">
                                    <div class="icon">
                                        <i class="fa-duotone fa-briefcase"></i>
                                    </div>
                                    <h6>
                                        تم الشحن
                                    </h6>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" style="width: 80%" aria-valuenow="80"
                                        aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                    @endif
                    <!-- order finished -->

                    <!-- ***************************** -->
                    <div class="col-lg-6 col-12 p-0">
                        <div class="products">
                            @foreach ($products as $product)
                                <div class="product">
                                    <div class="pro_img">
                                        <img src="{{asset($product['product']->images[0]->image)}}"
                                            alt="product">
                                    </div>
                                    <div class="info">
                                        <h6>{{$product['product']->name}}</h6>
                                        <div class="count_price">
                                            <p>quantity : <span>{{$product['qty']}}</span></p>
                                            <p>TOTAL : <span>{{$product['total']}}</span> SAR</p>
                                        </div>
                                    </div>
                                </div>
                            @endforeach

                        </div>
                    </div>
                    <div class="col-lg-6 col-12 ps-lg-3 p-0">
                        <div class="reciept">
                            <ul>
                                <li>
                                    <div class="icon">
                                        <i class="fa-light fa-map-pin"></i>
                                    </div>
                                    <div class="text">
                                        <span>delivery address</span>
                                        <span>{{$order->address}}</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <i class="fa-solid fa-wallet"></i>
                                    </div>
                                    <div class="text">
                                        <span>Payment Method</span>
                                        <span>{{$order->payment_method}}</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <i class="fa-light fa-circle-exclamation"></i>
                                    </div>
                                    <div class="text">
                                        <span>Notes</span>
                                        <span>{{$order->notes}}</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <i class="fa-light fa-calendar-days"></i>
                                    </div>
                                    <div class="text">
                                        <span>order date </span>
                                        <p><span>{{$order->order_date}}</span></p>
                                    </div>
                                </li>
                                <li>
                                    <p class="total">TOTAL : <span>{{$order->total}}</span> SAR</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </main>
@endsection