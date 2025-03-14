<?php

namespace App\Http\Controllers;

use App\Models\customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    // index function which read the customer
    function index()
    {
        $customers = customer::all();
        return view('Customer.Customers', compact('customers'));
    }

    // create function which load the add customer page
    function create()
    {
        return view('Customer.AddCustomer');
    }

    // Save function which save insert customer to the database
    function insert(Request $request)
    {
        $customer = new customer();

        // Assign values from the request to the customer attributes
        $customer->first_name = $request->first_name;
        $customer->last_name = $request->last_name;
        $customer->address = $request->address;
        $customer->phone_no = $request->phone_no;
        $customer->email = $request->email;
        $customer->date_joined = $request->date_joined;

        // Save the product to the database
        $customer->save();
        return redirect()->route('customer.read');
    }


    // Delete function which will delete the customer by using id
    function delete($id)
    {
        customer::findOrFail($id)->delete();
        return redirect()->route('customer.read');
    }

    // edit function will load the edit page of customer
    function edit($id)
    {
        $customer = customer::findOrFail($id)->first();
        return view('Customer.EditCustomer', compact('customer'));
    }

    // this function is going to update the select customer
    function update(Request $request, $id)
    {
        $customer = customer::findOrFail($id)->first();


        // Assign values from the request to the customer attributes
        $customer->first_name = $request->first_name;
        $customer->last_name = $request->last_name;
        $customer->address = $request->address;
        $customer->phone_no = $request->phone_no;
        $customer->email = $request->email;
        $customer->date_joined = $request->date_joined;

        // Save the product to the database
        $customer->save();
        return redirect()->route('customer.read');
    }
}
