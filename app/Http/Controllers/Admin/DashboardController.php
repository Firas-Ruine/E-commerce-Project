<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function users()
    {
        $users = User::all();
        return view('admin.users.index', compact('users'));
    }

    public function viewuser($id)
    {
        $users = User::find($id);
        return view('admin.users.view', compact('users'));
    }

    public function delete($id)
    {
        $user = User::find($id);
          $user->delete();
         return redirect('users')->with('status',"User deleted successfully");
    }

    public function user()
    {
        $usercount = User::count();
        $money = Order::where('status','1')->sum('total_price');
        $orders = Order::where('status','0')->count();
        $product = Product::count();
        $outstock = Product::where('qty','0')->count();
        $stock = Product::where('qty','>','0')->count();
        return view('admin.index' ,compact('usercount','money','orders','product','outstock','stock'));
    }

}
