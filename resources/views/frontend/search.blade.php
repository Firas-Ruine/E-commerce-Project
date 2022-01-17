@extends('layouts.front')

@section('title')
Search
@endsection

@section('content')
<div class="py-3 m-4 shadow-sm bg-white border-top">
   <h5>Search Results</h5>
</div>
<div class="py-5">
        <div class="container">
            <div class="row">
                    @foreach ($data as $prod)
                    <div class="col-md-3 mb-3">
                        <div class="card">

                           <a href=" {{url('category/'.$prod->category->name.'/'.$prod->name)}} "> <img src=" {{asset('assets/uploads/products/'.$prod->image)}} " style="width:300px; height:250px;" alt="Product image">
                            <div class="card-body">
                                <h5>{{$prod->name}}</h5>
                                <span class="float-start" style="color:red; font-size:25px;"> <s> {{$prod->original_price}}</s></span>
                                <span class="float-end" style="color:green;font-size:25px;">{{$prod->selling_price}}</span>
                            </div>
                             
                        </div>
                    </a>
                    </div>
                    @endforeach
                </div>
        </div>
    </div>
@endsection
