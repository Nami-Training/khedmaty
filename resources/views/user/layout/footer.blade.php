<!-- footer -->
<footer>
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6 col-12 p-2">
                <div class="about_company">
                    <a href="{{route('home')}}" class="logo">
                        <img src="{{asset($setting->logo_footer)}}" alt="logo">
                    </a>
                    <p><?php echo html_entity_decode(htmlentities($setting->about_app)); ?> </p>
                </div>
            </div>
            <div class="col-lg-2 col-6 p-2">
                <div class="footer_links">
                    <h4>About Our Company</h4>
                    <ul>
                        <li>
                            <a href="{{route('contactUsForm')}}">Contact Us</a>
                        </li>
                        <li>
                            <a href="{{route('Stores.index')}}">Stores</a>
                        </li>
                        <li>
                            <a href="{{route('Blogs.index')}}">Blogs</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-2 col-6 p-2">
                <div class="footer_links">
                    <h4>Important Links</h4>
                    <ul>
                        <li>
                            <a href="{{route('privacyPolicy')}}">privacy policy</a>
                        </li>
                        <li>
                            <a href="{{route('termsConditions')}}">Terms & Conditions</a>
                        </li>
                        <li>
                            <a href="{{route('faqs')}}">FAQs</a>
                        </li>
                        <li>
                            <a href="{{route('contactUsForm')}}">Help & Support</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-4 col-6  p-2">
                <div class="footer_links" id="lastOne">
                    <h4>Technical Support</h4>
                    <ul>
                        <li>
                            <i class="fa-sharp fa-solid fa-envelope"></i>
                            <a href="mailto:support@khedmaty.net">support@khedmaty.net</a>
                        </li>
                        <li>
                            <i class="fa-solid fa-phone"></i>
                            <a href="tel:+950012121252">9665942129640</a>
                        </li>
                    </ul>
                    <h4>Follow us</h4>
                    <ul class="social">
                        <li>
                            <a href="#">
                                <i class="fa-brands fa-facebook-f"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa-brands fa-instagram"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa-brands fa-twitter"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa-brands fa-linkedin-in"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-12">
                <div class="copy_pay">
                    <p>All rights reserved © 2024
                        <a href="{{route('home')}}">
                            {{$setting->website_name}}
                        </a>
                    </p>
                    <div class="payments">
                        <h6>Accept Payment With</h6>
                        <ul>
                            <li>
                                <img src="{{asset('assets/img/method1.svg')}}" alt="visa" />
                            </li>
                            <li>
                                <img src="{{asset('assets/img/method2.svg')}}" alt="paypal" />
                            </li>
                            <li>
                                <img src="{{asset('assets/img/method3.svg')}}" alt="applepay" />
                            </li>
                            <li>
                                <img src="{{asset('assets/img/method4.svg')}}" alt="mastercard" />
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>