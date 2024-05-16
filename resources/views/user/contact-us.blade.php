@extends('user.layout.master')

@section('title' , 'Conatct US')

@section('content')
    <!-- main container -->
    <main style="margin: 0px;">
        <!-- page header -->
        <div class="page_header container d-flex align-items-center">
            <h6>
                <a href="{{route('home')}}">Home</a>
                <i class="fa-regular fa-angle-right"></i>
                Contact Us
            </h6>
        </div>

        <!-- contact-us section -->
        <section class="contact-us">
            <div class="container">
                <!-- contact info row -->
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-12 p-3">
                        <div class="info">
                            <div class="icon">
                                <img src="{{asset('assets/img/location.svg')}}" alt="location">
                            </div>
                            <p>{{$setting->location}}</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-12 p-3">
                        <div class="info">
                            <div class="icon">
                                <img src="{{asset('assets/img/phone.svg')}}" alt="phone">
                            </div>
                            <a href="tel:{{$setting->phone}}">
                                {{$setting->phone}}
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-12 p-3">
                        <div class="info">
                            <div class="icon">
                                <img src="{{asset('assets/img/email.svg')}}" alt="email">
                            </div>
                            <a href="mailto:{{$setting->email}}">
                                    {{$setting->email}}
                              </a>
                        </div>
                    </div>
                </div>
                <!-- form row -->
                <div class="row">
                    <div class="col-12 p-3">
                        <form action="{{route('contactUs')}}" method="post" id="form_contact">
                            @csrf
                            <div class="form-group">
                                <!-- field-set -->
                                <div class="inputfield">
                                    <label for="name" class="">Full name</label>
                                    <input type="text" id="name" name="name">
                                    <span class="highlight"></span>
                                </div>
                                <!-- field-set -->
                                <div class="inputfield">
                                    <label for="email" class="">Email</label>
                                    <input type="email" id="email" name="email">
                                    <span class="highlight"></span>
                                </div>
                            </div>
                            <div class="form-group">
                                <!-- field-set -->
                                <div class="inputfield">
                                    <label for="phone" class="">Phone</label>
                                    <input type="tel" id="phone" name="phone">
                                    <span class="highlight "></span>
                                </div>
                                <!-- field-set -->
                                <div class="inputfield">
                                    <label for="subject" class="">Subject</label>
                                    <input type="text" id="subject" name="subject">
                                    <span class="highlight"></span>
                                </div>
                            </div>
                            <div class="form-group">
                                <!-- field-set -->
                                <div class="inputfield"><grammarly-extension data-grammarly-shadow-root="true" style="position: absolute; top: 0px; left: 0px; pointer-events: none;" class="dnXmp"></grammarly-extension><grammarly-extension data-grammarly-shadow-root="true" style="position: absolute; top: 0px; left: 0px; pointer-events: none;" class="dnXmp"></grammarly-extension>
                                    <label for="message" class="message-label">Message</label>
                                    <textarea name="messages" id="messages" spellcheck="false"></textarea>
                                    <span class="highlight"></span>
                                </div>
                            </div>
                            <button type="submit">send</button>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection