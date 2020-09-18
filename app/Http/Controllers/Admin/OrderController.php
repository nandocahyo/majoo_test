<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Order;

class OrderController extends Controller
{
    public function index(Request $request)
    {
        $items = Order::with('product')->get();

        return view('pages.admin.order.index',[
            'items' => $items
        ]);
    }

    public function destroy($id)
    {
        $item = Order::findOrFail($id);
        $item->delete();

        return redirect()->route('order.index')->with('success','Order deleted successfully');
    }

}
