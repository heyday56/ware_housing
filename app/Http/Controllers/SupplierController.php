<?php

namespace App\Http\Controllers;

use App\Models\Supplier;
use Illuminate\Http\Request;

class SupplierController extends Controller
{

    function index()
    {
        $suppliers = Supplier::latest()->get();
        return view('Supplier.Supplier', compact('suppliers'));
    }

    function create()
    {
        return view('Supplier.AddSupplier');
    }

    function insert(Request $request)
    {
        $supplier = new Supplier();
        $supplier->supplier_name = $request->supplier_name;
        $supplier->contact_name = $request->contact_name;
        $supplier->email = $request->email;
        $supplier->phone_no = $request->phone_no;
        $supplier->address = $request->address;
        $supplier->save();
        return redirect()->route('supplier.read')->with('success', 'Successfully Insert');
    }

    function delete($id)
    {
        Supplier::findOrFail($id)->delete();
        return redirect()->route('supplier.read')->with('success', 'One Itme Deleted');
    }

    function edit($id)
    {
        $supplier = Supplier::findOrFail($id)->first();
        return view('Supplier.EditSupplier', compact('supplier'));
    }

    function update(Request $request, $id)
    {
        $supplier = Supplier::findOrFail($id)->first();
        $supplier->supplier_name = $request->supplier_name;
        $supplier->contact_name = $request->contact_name;
        $supplier->email = $request->email;
        $supplier->phone_no = $request->phone_no;
        $supplier->address = $request->address;
        $supplier->save();
        return redirect()->route('supplier.read')->with('success', 'Successfully Insert');
    }
}
