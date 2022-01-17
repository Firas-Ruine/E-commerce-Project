@extends('layouts.front')

@section('title', $products->name)

@section('content')
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
          <form action=" {{url('/add-rating')}} " method="post">
            @csrf
            <input type="hidden" name="product_id" value=" {{$products->id}} ">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Rate {{$products->name}}</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <div class="rating-css">
                <div class="star-icon">
                    @if ($user_rating)
                      @for($i=1 ; $i<=$user_rating->stars_rated ; $i++)
                      <input type="radio" value="{{$i}}" name="product_rating" checked id="{{$i}}">
                    <label for="{{$i}}" class="fa fa-star"></label>
                      @endfor
                      @for($j = $user_rating->stars_rated+1 ; $j<=5 ; $j++)
                      <input type="radio" value="{{$j}}" name="product_rating" id="{{$j}}">
                    <label for="{{$j}}" class="fa fa-star"></label>
                      @endfor

                    @else
                    <input type="radio" value="1" name="product_rating" checked id="rating1">
                    <label for="rating1" class="fa fa-star"></label>
                    <input type="radio" value="2" name="product_rating" id="rating2">
                    <label for="rating2" class="fa fa-star"></label>
                    <input type="radio" value="3" name="product_rating" id="rating3">
                    <label for="rating3" class="fa fa-star"></label>
                    <input type="radio" value="4" name="product_rating" id="rating4">
                    <label for="rating4" class="fa fa-star"></label>
                    <input type="radio" value="5" name="product_rating" id="rating5">
                    <label for="rating5" class="fa fa-star"></label>
                    @endif
                </div>
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
      </div>
    </div>
  </div>

    <div class="py-3 m-4 shadow-sm bg-light border-top text-white">
        <div class="container">
            <h6 class="mb-0">
                <a href=" {{url('category')}} ">Collections</a>  |
                 <a href=" {{url('category/'.$products->category->slug)}} ">  {{$products->category->name}} </a> |
                 <a href=" {{url('category/'.$products->category->slug.'/'.$products->slug)}} "> {{$products->name}} </a>

                </h6>
        </div>
    </div>
</div>
<div class="container">
    <div class="product_data">
        <div class="">
            <div class="row">
                <div class="col-md-4 border-right">
                   <img src=" {{asset('assets/uploads/products/'.$products->image)}}" class="w-100" alt="">
                </div>
                <div class="col-md-8">
                    <h2 class="mb-0">
                        {{$products->name}}
                        @if($products->trending == '1')
                        <label style="font-size : 16px;" class="float-end badge bg-danger trending-tag">Trending </label>
                        @endif
                    </h2>
                    <hr>
                    <label class="me-3" style="color:red; font-size:25px;" ><s>{{$products->original_price}}Dt</s></label>
                    <label class="fw-bold" style="color:green;font-size:25px;">{{$products->selling_price}}Dt</label>
                          <br> <br>
                        @php
                         $rate_num = number_format($rating_value)
                        @endphp
                    <div class="rating">
                        <b>({{$rating_value}})</b> &nbsp;
                        @for($i=1 ; $i<=$rate_num ; $i++)
                       <i class="fa fa-star fa-lg checked"></i>
                       @endfor
                       @for($j=$rate_num+1 ; $j<=5 ; $j++)
                       <i class="fa fa-star fa-lg"></i>
                       @endfor
                       <span>
                        &nbsp;
                           @if($ratings->count() > 0)
                          <b>{{$ratings->count()}} Ratings</b>&nbsp; &nbsp; &nbsp;
                           <button type="button" class="btn btn-link" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            Rate this Product
                          </button>
                           @else
                               No Ratings &nbsp; &nbsp; &nbsp;
                               <button type="button" class="btn btn-link" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                Rate this Product
                              </button>
                        @endif
                        </span>

                     </div>

                    <p class="mt-3">
                        {!! $products->small_description !!}
                    </p>
                    <hr>
                    @if($products->qty >0)
                       <label class="badge bg-success">In stock</label>
                    @else
                       <label class="badge bg-danger">Out of stock</label>
                    @endif

                    <div class="row mt-2">
                        <div class="col-md-3">
                            <input type="hidden" value=" {{$products->id}} " class="prod_id">
                            <label for="Quantity">Quantity :</label>
                            <div class="input-group text-center mb-3">
                                <button class="input-group-text decrement-btn">-</button>
                                <input type="text" name="quantity" value="1" class="form-control qty-input text-center">
                                <button class="input-group-text increment-btn">+</button>
                            </div>
                        </div>
                       <div class="col-md-9">
                           <br/>
                           @if($products->qty >0)
                           <button type="button" class="btn btn-primary me-3 AddToCartBtn float-start">Add to cart <i class="fa fa-shopping-cart"></i></button>
                           <button type="button" class="btn btn-secondary me-3 AddToWishlist float-start">Add to wishlist <i class="fa fa-heart"></i></button>

                        @else
                            <button type="button" class="btn btn-secondary me-3 AddToWishlist  float-start">Add to wishlist <i class="fa fa-heart"></i></button>
                        @endif


                       </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <hr>
                <h3>Description</h3>
                <p class="mt-3">
                    {!! $products->description !!}
                </p>

            </div>





        </div>
    </div>

</div>

@endsection



