<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    function index()
    {
        $products = Product::all();
        return view('Product.Products', compact('products'));
    }

    function delete($id)
    {
        Product::find($id)->delete();
        return redirect()->back()->with('success', 'One item deleted');
    }

    function insert()
    {
        return view('product.AddProduct');
    }

    function save(Request $request)
    {
        $product = new Product();

        // Assign values from the request to the product attributes
        $product->product_name = $request->product_name;
        $product->description = $request->description;
        $product->category_id = $request->category_id;
        $product->price = $request->price;
        $product->stock_quantity = $request->stock_quantity;

        // Save the product to the database
        $product->save();
        return redirect()->route('product.read');
    }

    function edit($id)
    {
        $product = Product::find($id)->first();
        return view('Product.EditProduct', compact('product'));
    }
    function update(Request $request, $id)
    {
        $product = Product::findOrFail($id)->first();
        $product->product_name = $request->product_name;
        $product->description = $request->description;
        $product->category_id = $request->category_id;
        $product->price = $request->price;
        $product->stock_quantity = $request->stock_quantity;

        // Save the product to the database
        $product->save();
        return redirect()->route('product.read');
    }
}
