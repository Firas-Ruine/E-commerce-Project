@extends('layouts.front')

@section('title')
   My Cart
@endsection

@section('content')
<div class="py-3 m-4 shadow-sm bg-light border-top">
<div class="container">
    <h6 class="mb-0">
        <a href=" {{url('/')}} ">Home</a>  |
         <a href=" {{url('cart')}} "> Cart </a>
         </h6>
</div>
</div>
<div class="container my-5">
    <div class="card shadow">
        @if ($cartitems->count()>0)
        <div class="card-body">
            @php
                $total=0;
            @endphp
            @foreach ($cartitems as $item)
          <div class="row product_data">
             <div class="col-md-2">
                <img src=" {{asset('assets/uploads/products/'.$item->products->image)}}" height="70px" width="80px" alt="Image here">
             </div>
                <div class="col-md-3 my-auto">
                    <h5> {{$item->products->name}} </h5>
                </div>
                <div class="col-md-2 my-auto">
                    <h5> {{$item->products->selling_price}} Dt </h5>
                </div>

                 <div class="col-md-3">
                     <input type="hidden" class="prod_id" value="{{$item->prod_id}}">
                @if ($item->products->qty >= $item->prod_qty)
                     <label for="Quantity">Quantity</label>
                     <div class="input-group text-center mb-3" style="width:130px;">
                        <button class="input-group-text ChangeQuantity decrement-btn">-</button>
                        <input type="text" name="quantity" value=" {{$item->prod_qty}} " class="form-control qty-input text-center">
                        <button class="input-group-text ChangeQuantity increment-btn">+</button>
                     </div>
                     @php
                     $total+=$item->products->selling_price * $item->prod_qty;
                 @endphp
                 @else
                        <label class="badge badge-pill bg-danger mt-3" style="font-size:16px; width:125px;">Out of stock</label>
                @endif
                 </div>
                 <div class="col-md-2 my-3">
                     <button class="btn btn-danger delete-cart-item"> <i class="fa fa-trash"></i> Remove</button>
                 </div>
            </div>
            @endforeach
        </div>
        <div class="card-footer">
            <h5> Total Price : {{ $total }} Dt
            <a href=" {{url('checkout')}} " class="btn btn-dark float-end">Proceed to checkout</a></h5>
        </div>
        @else
          <div class="card-body text-center">
              <h2>Your <i class="fa fa-shopping-cart"></i> is empty !</h2>
              <a href=" {{url('category')}} " class="btn btn-dark float-end"> Continue to shopping</a>
          </div>
        @endif
    </div>
</div>


@endsection
