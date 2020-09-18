<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Order;

class OrderProductController extends Controller
{
    public function order(Request $request, $id)
    {
        $product = Product::findOrFail($id);

        Order::create([
            'id_product'    => $product->id,
            'name_customer' => $request->name_customer,
            'address'       => $request->address,
            'email'         => $request->email,
            'phone_number'  => $request->phone_number,
            'note'          => $request->note,
            'total_price'   => $product->price
        ]);

        return view('pages.success');
    }
}
