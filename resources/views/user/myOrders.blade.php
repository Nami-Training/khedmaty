@extends('user.layout.master')

@section('title' , 'MyOrders')

@section('content')
    <main>
        <!-- page header -->
        <div class="page_header container d-flex align-items-center">
            <h6>
                <a href="{{route('home')}}">Home</a>
                <i class="fa-regular fa-angle-right"></i>
                My Orders
            </h6>
        </div>
        <!-- orders_section -->
        <div class="orders_section">
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
                            <ul class="links">
                                <li class="">
                                    <a href="{{route('myProfile')}}"><i class="fa-light fa-user-pen"></i> Edit
                                        Profile</a>
                                </li>
                                <li class="">
                                    <a href="{{route('favourits.index')}}"><i class="fa-sharp fa-light fa-heart"></i>
                                        Favorites </a>
                                </li>
                                <li class="active">
                                    <a href="{{route('orders.index')}}"><i class="fa-sharp fa-regular fa-store"></i> My
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
                            <!-- currentOrders tab btn -->
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="pills-currentOrders-tab" data-bs-toggle="pill"
                                    data-bs-target="#pills-currentOrders" type="button" role="tab"
                                    aria-controls="pills-currentOrders" aria-selected="true">
                                    current
                                </button>
                            </li>
                            <!-- previousOrders tab btn -->
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="pills-previousOrders-tab" data-bs-toggle="pill"
                                    data-bs-target="#pills-previousOrders" type="button" role="tab"
                                    aria-controls="pills-previousOrders" aria-selected="false" tabindex="-1">
                                    previous
                                </button>
                            </li>
                        </ul>
                        <div class="tab-content" id="pills-tabContent">
                            <!-- currentOrders tab -->
                            <div class="tab-pane fade show active" id="pills-currentOrders" role="tabpanel"
                                aria-labelledby="pills-currentOrders-tab">
                                <div class="row">
                                    @foreach ($orders as $order)
                                        <div class="col-lg-6 col-md-6 col-12 p-2">
                                            <div class="order_card">
                                                <div class="title">
                                                    <p>#{{$order->title}}</p>
                                                    <a href="{{route('orders.show', $order->id)}}">details</a>
                                                </div>
                                                <div class="time">
                                                    <p>
                                                        <i class="fa-light fa-calendar-lines"></i>
                                                        <span>{{explode(' ',$order->order_date)[0]}}</span>
                                                    </p>
                                                    <p>
                                                        <i class="fa-regular fa-clock"></i>
                                                        <span>{{explode(' ',$order->order_date)[1]}}</span>
                                                    </p>
                                                </div>
                                                <div class="location">
                                                    <p>
                                                        <i class="fa-light fa-map-pin"></i>
                                                        <span>{{$order->address}}</span>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                            <!-- previous orders tab -->
                            <div class="tab-pane fade" id="pills-previousOrders" role="tabpanel"
                                aria-labelledby="pills-previousOrders-tab">
                                <div class="row">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection