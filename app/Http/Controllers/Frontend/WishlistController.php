<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Wishlist;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;


class WishlistController extends Controller
{
    public function index()
    {
        $wishlist = Wishlist::where('user_id', Auth::id())->get();
        return view('frontend.wishlist',compact('wishlist'));
    }

    public function add(Request $request)
    {
        if(Auth::check())
        {
            $prod_id = $request->input('product_id');
            $prod_check = Product::where('id',$prod_id)->first();
            if ($prod_check)
            {
                if(Wishlist::where('prod_id',$prod_id)->where('user_id',Auth::id())->exists())
                {
                  return response()->json(['status'=>" Already added to Wishlist"]);
                }
                else
                {
                    $wish = new Wishlist();
                    $wish->prod_id = $prod_id;
                    $wish->user_id = Auth::id();
                    $wish->save();
                    return response()->json(['status'=>" Product Added to wishlist"]);
              }
            }

        }
        else
        {
            return response()->json(['status'=>"Login to continue"]);
        }
    }



    public function deleteitem(Request $request)
    {
        if(Auth::check())
        {
           $prod_id = $request->input('prod_id');
           if(Wishlist::where('prod_id',$prod_id)->where('user_id',Auth::id())->exists())
           {
              $wish =Wishlist::where('prod_id',$prod_id)->where('user_id',Auth::id())->first();
              $wish->delete();
              return response()->json(['status'=>"Item removed from wishlist"]);

           }
        }
        else

        {
            return response()->json(['status'=>"Login to continue"]);
        }
    }

    public function wishlistcount()
    {
        $wishcount = Wishlist::where('user_id',Auth::id())->count();
        return response()->json(['count'=>$wishcount]);
    }
}
