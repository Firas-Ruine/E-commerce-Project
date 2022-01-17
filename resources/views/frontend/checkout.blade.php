@extends('layouts.front')

@section('title')
 Checkout
@endsection

@section('content')
<div class="py-3 m-4 shadow-sm bg-light border-top">
    <div class="container">
        <h6 class="mb-0">
            <a href=" {{url('/')}} ">Home</a>  |
             <a href=" {{url('checkout')}} "> Checkout </a>
             </h6>
    </div>
    </div>
   <div class="container mt-3">
       <form action=" {{url('place-order')}} " method="POST">
      {{ csrf_field() }}
       <div class="row">
           <div class="col-md-7">
               <div class="card">
                   <div class="card-body">
                       <h6>
                           Basic details
                       </h6>
                       <hr>
                       <div class="row checkout-form">
                           <div class="col-md-6">
                               <label for="">First Name :</label>
                            <input type="text" name="fname" value=" {{Auth::user()->name}} " class="form-control" placeholder="Enter First Name">
                           </div>
                           <div class="col-md-6">
                            <label for="">Last Name :</label>
                         <input type="text" name="lname" value=" {{Auth::user()->lname}} " class="form-control" placeholder="Enter Last Name">
                        </div>
                        <div class="col-md-6 mt-3">
                            <label for="">Email :</label>
                         <input type="text" name="email" value=" {{Auth::user()->email}} " class="form-control" placeholder="Enter Email">
                        </div>
                        <div class="col-md-6 mt-3">
                            <label for="">Phone Number :</label>
                         <input type="text" name="phone" value=" {{Auth::user()->phone}} " class="form-control" placeholder="Enter Phone Number">
                        </div>
                        <div class="col-md-6 mt-3">
                            <label for="">Adresse 1 :</label>
                         <input type="text" name="address1" value=" {{Auth::user()->address1}} " class="form-control" placeholder="Enter Adresse 1">
                        </div>
                        <div class="col-md-6 mt-3">
                            <label for="">Adresse 2 :</label>
                         <input type="text" name="address2"value=" {{Auth::user()->address2}} " class="form-control" placeholder="Enter Adresse 2">
                        </div>
                        <div class="col-md-6 mt-3">
                            <label for="">City :</label>
                         <input type="text" name="city" value=" {{Auth::user()->city}} " class="form-control" placeholder="Enter City">
                        </div>
                        <div class="col-md-6 mt-3">
                            <label for="">State :</label>
                         <input type="text" name="state" value=" {{Auth::user()->state}} " class="form-control" placeholder="Enter State">
                        </div>
                        <div class="col-md-6 mt-3">
                            <label for="">Country :</label>
                         <input type="text" name="country" value=" {{Auth::user()->country}} " class="form-control" placeholder="Enter Country">
                        </div>
                        <div class="col-md-6 mt-3">
                            <label for="">Pin Code :</label>
                         <input type="text" name="pincode" value=" {{Auth::user()->pincode}} " class="form-control" placeholder="Enter PinCode">
                        </div>
                    </div>


                   </div>
               </div>
           </div>
           <div class="col-md-5">
               <div class="card">
                   @if($cartitems->count()>0)
                   <div class="card-body">
                       <h6>Order Details</h6>
                       <hr>
                       <table class="table table-striped table-bordered">
                           <thead>
                               <tr>
                                   <th>Name</th>
                                   <th>Quantity</th>
                                   <th>Price</th>
                               </tr>
                           </thead>
                           <tbody>
                                @foreach ($cartitems as $item)
                                <tr>
                                    <td>{{$item->products->name}}</td>
                                    <td> {{$item->prod_qty}} </td>
                                    <td>{{$item->products->selling_price}}</td>
                            </tr>
                                @endforeach

                           </tbody>
                       </table>
                        <hr>
                          <button type="submit" class="btn btn-dark float-end w-100">Place Order</button>
                   </div>
                   @else
                   <div class="card-body text-center">
                    <h4 style="color: red;">Your <i class="fa fa-shopping-cart"></i> is empty !</h4>
                </div>
                   @endif
               </div>

           </div>
       </div>
    </form>
   </div>

@endsection
