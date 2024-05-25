@extends('user.layout.master')

@section('title' , 'Categories')

@section('content')
<!-- main container -->
<main style="margin: 0px;">
    <!-- page header -->
    <div class="page_header container d-flex align-items-center">
        <h6>
            <a href="{{route('home')}}">Home</a>
            <i class="fa-regular fa-angle-right"></i>
            All Store Categories
        </h6>
    </div>
    <section class="categories-section">
        <div class="container">
            <div class="row">
                @foreach ($storesCategories as $storeCategory)
                    <div class="col-lg-3 col-6 p-2">
                        <a href="https://khidmty.com/en/shop-department/1" class="store_card store_page">
                            <div class="logo">
                                <img src="{{$storeCategory->image}}"
                                    alt="partener">
                            </div>
                            <h6>{{$storeCategory->name}}</h6>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
</main>
@endsection