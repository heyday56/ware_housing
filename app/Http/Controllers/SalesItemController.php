<?php

namespace App\Http\Controllers;

use App\Models\customer;
use App\Models\Product;
use App\Models\sale_item;
use App\Models\sales;
use Illuminate\Http\Request;

class SalesItemController extends Controller
{
    function index()
    {
        $salesItems = sale_item::with('product')->latest()->get();
        return view('SalesItem.SalesItems', compact('salesItems'));
    }
    function create()
    {
        $product = Product::all();
        $sales = sales::all();
        $arr = [$product, $sales];
        return view('SalesItem.AddSalesItem', compact('arr'));
    }

    function delete($id)
    {
        $sales = sale_item::findOrFail($id)->delete();
        return redirect()->route('salesitem.read');
    }

    function insert(Request $request)
    {
        $saleitem = new sale_item();
        $saleitem->product_id = $request->product_id;
        $saleitem->sales_id = $request->sales_id;
        $saleitem->quantity = $request->quantity;
        $saleitem->unit_price = $request->unit_price;
        $saleitem->total_price = $request->total_price;
        $saleitem->save();
        return redirect()->route('salesitem.read');
    }

    function edit($id)
    {

        $saleitem = sale_item::findOrFail($id)->first();
        $product = Product::all();
        $sales = sales::all();
        $arr = [$product, $sales, $saleitem];
        return view('SalesItem.EditSalesItem', compact('arr'));
    }

    function update(Request $request, $id)
    {
        $saleitem = sale_item::findOrFail($id)->first();
        $saleitem->product_id = $request->product_id;
        $saleitem->sales_id = $request->sales_id;
        $saleitem->quantity = $request->quantity;
        $saleitem->unit_price = $request->unit_price;
        $saleitem->total_price = $request->total_price;
        $saleitem->save();
        return redirect()->route('salesitem.read');
    }
}
