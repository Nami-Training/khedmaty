@extends('user.layout.master')

@section('title' , 'Departments')

@section('content')
<main>
    <!-- page header -->
    <div class="page_header container d-flex align-items-center">
        <h6>
            <a href="{{route('home')}}">Home</a>
            <i class="fa-regular fa-angle-right"></i>
            Product Types
        </h6>
    </div>
    <!-- categories section -->
    <section class="categories-section">
        <div class="container">
            <div class="row">
                @foreach ($departments as $department)
                    <div class="col-lg-3 col-6 p-2">
                        <a href="{{route('shop-department.show', $department->id)}}" class="store_card store_page">
                            <div class="logo">
                                <img src="{{$department->image}}"
                                    alt="partener">
                            </div>
                            <h6>{{$department->name}}</h6>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

</main>
@endsection