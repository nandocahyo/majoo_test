<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Product;

class ProductController extends Controller
{
    public function index(Request $request)
    {
        $items = Product::all();

        return view('pages.admin.product.index',[
            'items' => $items
        ]);
    }

    public function create()
    {
        return view('pages.admin.product.create');
    }

    public function store(Request $request)
    {
        //product validation
        $validatedData = $request->validate([
            'name_product'  => 'required|unique:products|max:255',
            'image'         => 'required',
            'description'   => 'required',
            'price'         => 'required',
        ]);
        //icon upload
        $image = $request->file('image');
        $new_name = rand() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('product-image'), $new_name);
        
        $form_data = array(
            'name_product'  => $request->name_product,
            'image'         => $new_name,
            'description'   => $request->description,
            'price'         => $request->price
        );

        Product::create($form_data);
        return redirect()->route('product.index');
    }

    public function edit($id)
    {
        $item = Product::findOrFail($id);

        return view('pages.admin.product.edit',[
            'item' => $item
        ]);
    }

    public function update(Request $request, $id)
    {
        $image_name = $request->hidden_image;
        $image = $request->file('image');

        if($image != '')
        {
            $new_name = rand() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('product-image'), $image_name);
        }
        else
        {
            $form_data = array(
                'name_product'      => $request->name_product,
                'description'       => $request->description,
                'image'             => $image_name,
                'price'             => $request->price
            );
            Product::whereId($id)->update($form_data);
        }
       
        return redirect()->route('product.index');
    }

    public function destroy($id)
    {
        $item = Product::findOrFail($id);
        $item->delete();

        return redirect()->route('product.index')->with('success','Product deleted successfully');
    }

}
