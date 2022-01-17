@extends('layouts.front')

@section('title')
   Wishlist
@endsection

@section('content')
<div class="py-3 m-4 shadow-sm bg-Light border-top">
<div class="container">
    <h6 class="mb-0">
        <a href=" {{url('/')}} ">Home</a>  |
         <a href=" {{url('wishlist')}} "> Wishlist </a>
         </h6>
</div>
</div>
<div class="container my-5">
    <div class="card shadow">
         <div class="card-body">
             @if($wishlist ->count() >0)
                @foreach ($wishlist as $item)
              <div class="row product_data">
                 <div class="col-md-2">
                    <img src=" {{asset('assets/uploads/products/'.$item->products->image)}}" height="70px" width="80px" alt="Image here">
                 </div>
                    <div class="col-md-2 my-auto">
                        <h5> {{$item->products->name}} </h5>
                    </div>
                    <div class="col-md-2 my-auto">
                        <h5> {{$item->products->selling_price}} Dt </h5>
                    </div>

                     <div class="col-md-2">
                         <input type="hidden" class="prod_id" value="{{$item->prod_id}}">
                    @if ($item->products->qty >= $item->prod_qty)
                    <label for="Quantity">Quantity</label>
                     <div class="input-group text-center mb-3" style="width:130px;">
                        <button class="input-group-text decrement-btn">-</button>
                        <input type="text" name="quantity" value="1" class="form-control qty-input text-center">
                        <button class="input-group-text increment-btn">+</button>
                     </div>

                     @else
                            <label class="badge badge-pill bg-danger mt-3" style="font-size:16px; width:125px;">Out of stock</label>
                    @endif
                     </div>
                     <div class="col-md-2 my-3">
                        <button class="btn btn-dark AddToCartBtn"> <i class="fa fa-shopping-cart"></i> Add To Cart</button>
                    </div>
                     <div class="col-md-2 my-3">
                         <button class="btn btn-danger remove-whishlist-item"> <i class="fa fa-trash"></i> Remove</button>
                     </div>
                </div>
                @endforeach
            </div>

             @else
                <h4 style="text-align: center;">There are no products in your wishlist</h4>
             @endif
         </div>
    </div>
</div>


@endsection
