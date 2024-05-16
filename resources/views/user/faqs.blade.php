@extends('user.layout.master')

@section('title' , 'FAQs')

@section('content')
<!-- main container -->
<main style="margin: 0px;">
    <!-- page header -->
    <div class="page_header container d-flex align-items-center">
        <h6>
            <a href="https://khidmty.com/en">Home</a>
            <i class="fa-regular fa-angle-right"></i>
            FAQs
        </h6>
    </div>
    <!-- faqs section -->
    <section class="faqs">
        <div class="container">
            <div class="row align-items-center justify-content-around">
                <div class="col-12 p-3 faqs-content">
                    <h3>   FAQs <i class="fa-sharp fa-solid fa-question"></i></h3>
                    <div class="accordion" id="accordionExample">
                                                    <div class="accordion-item">
                            <h2 class="accordion-header" id="heading1">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse1" aria-expanded="true" aria-controls="collapse1">
                                    What exactly is the "Khidmaty" project?
                                </button>
                            </h2>
                            <div id="collapse1" class="accordion-collapse collapse show" aria-labelledby="heading1" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p>
                                        The "Khidmaty" project is an online store offering high-quality car parts, car accessories, and top-notch car maintenance services. We aim to meet our customers' needs and ensure their satisfaction.
                                    </p>
                                </div>
                            </div>
                        </div>
                                                </div>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection