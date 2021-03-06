<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Order;
use App\Product;

class DashboardController extends Controller
{
    public function index(Request $request)
    {
        return view('pages.admin.dashboard',[
            'total_product'       => Product::count(),
            'total_order'         => Order::count()
        ]);
    }

    public function get_order()
    {
        $order_notif = Order::count();
        return response()->json(['order_notif'=> $order_notif]);
    }

}
