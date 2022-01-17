@extends('layouts.front')

@section('title')
  Welcome to E-Shop
@endsection

@section('content')
@include('layouts.inc.slider')

    <div class="py-5">
        <div class="container">
            <div class="row">
                <h2>Featured Products</h2>
                <div class="owl-carousel featured-carousel owl-theme">
                    @foreach ($featured_products as $prod)
                    <div class="item">
                        <a href="  {{url('category/'.$prod->category->slug.'/'.$prod->slug)}} ">
                        <div class="card">
                            <img src=" {{asset('assets/uploads/products/'.$prod->image)}} " style="width:310px; height:250px;" alt="Product image">
                            <div class="card-body">
                                <h5>{{$prod->name}}</h5>
                                <span class="float-start" style="color: red; font-size:20px;"><s> <b> {{$prod->original_price}} Dt </b></s></span>
                                <span class="float-end" style="color: green; font-size:20px;"> <b> {{$prod->selling_price}} Dt</b></span>
                            </div>
                        </div>
                        </a>
                    </div>
                    @endforeach
                </div>

            </div>
        </div>
    </div>

    <div class="py-5">
        <div class="container">
            <div class="row">
                <h2>Trending Categories</h2>
                <div class="owl-carousel featured-carousel owl-theme">
                    @foreach ($trending as $trend)
                    <div class="item">
                        <a href="  {{url('view-category/'.$trend->slug)}} ">
                        <div class="card">
                            <img src=" {{asset('assets/uploads/category/'.$trend->image)}} " style="width:310px; height:250px;" alt="Product image">
                            <div class="card-body">
                                <h5>{{$trend->name}}</h5>
                                <p>
                                    {{$trend->description}}
                                </p>
                            </div>
                        </div>
                    </a>
                    </div>
                    @endforeach
                </div>

            </div>
        </div>
    </div>

@endsection

@section('scripts')
 <script>$('.featured-carousel').owlCarousel({
    loop:true,
    margin:10,
    autoHeight: true,
    nav:true,
    dots:false,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },
        1000:{
            items:4
        }
    }
})</script>
@endsection
