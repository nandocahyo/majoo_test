<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class HomeController extends Controller
{
  
    public function index()
    {
        $products = Product::all();
        return view('pages.home',['products' => $products]);
    }

    public function product_detail($id)
    {
        $detail = Product::findOrFail($id);

        return view('pages.checkout',[
            'detail' => $detail
        ]);
    }
}
