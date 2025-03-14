<?php

namespace App\Http\Controllers;

use App\Models\customer;
use App\Models\sales;
use Illuminate\Http\Request;

class SalesController extends Controller
{
    //
    function index()
    {
        $sales = sales::with('customer')->latest()->get();
        return view('Sales.Sales', compact('sales'));
    }
    function create()
    {
        $customers = customer::all();
        return view('Sales.AddSales', compact('customers'));
    }

    function delete($id)
    {
        $sales = sales::findOrFail($id)->delete();
        return redirect()->route('sales.read');
    }

    function insert(Request $request)
    {
        $sale = new sales();
        $sale->customer_id = $request->customer_id;
        $sale->total_amount = $request->total_amount;
        $sale->discount_applied = $request->discount_applied;
        $sale->sales_status = $request->sales_status;
        $sale->sales_date = $request->sales_date;
        $sale->save();
        return redirect()->route('sales.read');
    }

    function edit($id)
    {
        $customers = customer::all();
        $sale = sales::findOrFail($id)->first();
        $arr = [$customers, $sale];
        return view('Sales.EditSales', compact('arr'));
    }

    function update(Request $request, $id)
    {
        $sale = sales::findOrFail($id)->first();
        $sale->customer_id = $request->customer_id;
        $sale->total_amount = $request->total_amount;
        $sale->discount_applied = $request->discount_applied;
        $sale->sales_status = $request->sales_status;
        $sale->sales_date = $request->sales_date;
        $sale->save();
        return redirect()->route('sales.read');
    }
}
