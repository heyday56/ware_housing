<?php

namespace App\Http\Controllers;

use App\Models\customer;
use App\Models\Employee;
use App\Models\Product;
use App\Models\sale_item;
use App\Models\sales;
use App\Models\Supplier;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    function index()
    {
        $products = Product::all()->count();
        $customers = customer::all()->count();
        $sales = sales::all()->count();
        $salesItems = sale_item::all()->count();
        $employees = Employee::all()->count();
        $suppliers = Supplier::all()->count();
        $total = [$products, $customers, $employees, $sales, $salesItems, $suppliers];
        return view('dashboard', compact('total'));
    }
}
