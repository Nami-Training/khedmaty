@extends('user.layout.master')

@section('title' , 'Privacy Policy')

@section('content')
<!-- main container -->
<main style="margin: 0px;">
    <!-- page header -->
    <div class="page_header container d-flex align-items-center">
        <h6>
            <a href="https://khidmty.com/en">Home</a>
            <i class="fa-regular fa-angle-right"></i>
            Privacy Policy
        </h6>
    </div>
    <!-- terms_conditions section -->
    <section class="terms">
        <div class="container">
            <h1>privacy policy</h1>
            <?php echo html_entity_decode(htmlentities($setting->privacy)); ?>
        </div>
    </section>
</main>
@endsection