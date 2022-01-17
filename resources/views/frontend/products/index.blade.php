@extends('layouts.front')

@section('title')
{{$category->name}}
@endsection

@section('content')
<div class="py-3 m-4 shadow-sm bg-light border-top">
    <div class="container">
        <h6 class="mb-0">Collections | {{$category->name}} </h6>
    </div>
</div>
<div class="py-5">
        <div class="container">
            <div class="row">
                <h2>{{$category->name}}</h2>
                    @foreach ($products as $prod)
                    <div class="col-md-3 mb-3">
                        <a href=" {{url('category/'.$category->slug.'/'.$prod->slug)}} ">
                        <div class="card">

                            <img src=" {{asset('assets/uploads/products/'.$prod->image)}} " style="width:300px; height:250px;" alt="Product image">
                            <div class="card-body">
                                <h5>{{$prod->name}}</h5>
                                <span class="float-start" style="color: red; font-size:20px;" ><s> <b> {{$prod->original_price}} Dt</b></s></span>
                                <span class="float-end" style="color: green; font-size:20px;"> <b> {{$prod->selling_price}} Dt</b></span>
                            </div>

                        </div>
                    </a>
                    </div>
                    @endforeach
                </div>
        </div>
    </div>
@endsection
