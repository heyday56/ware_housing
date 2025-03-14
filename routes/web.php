<?php

use App\Http\Controllers\CustomerController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\SalesController;
use App\Http\Controllers\SalesItemController;
use App\Http\Controllers\SupplierController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;




Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
});

// Products Routes
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/product', [ProductController::class, 'index'])->name('product.read');
});


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/product/add', [ProductController::class, 'insert'])->name('product.create');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/product/delete/{id}', [ProductController::class, 'delete'])->name('products.delete');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::post('/product/insert', [ProductController::class, 'save'])->name('products.save');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/product/edit/{id}', [ProductController::class, 'edit'])->name('products.edit');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::post('/product/update/{id}', [ProductController::class, 'update'])->name('products.update');
});



// Employee  Routes
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/employee', [EmployeeController::class, 'index'])->name('employee.read');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/employee/add', [EmployeeController::class, 'create'])->name('employee.create');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::post('/employee/insert', [EmployeeController::class, 'insert'])->name('employee.insert');
});


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/employee/delete/{id}', [EmployeeController::class, 'delete'])->name('employee.delete');
});


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/employee/edit/{id}', [EmployeeController::class, 'edit'])->name('employee.edit');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::post('/employee/update/{id}', [EmployeeController::class, 'update'])->name('employee.update');
});



// Customer Routes

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/customer', [CustomerController::class, 'index'])->name('customer.read');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/customer/add', [CustomerController::class, 'create'])->name('customer.create');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::post('/customer/insert', [CustomerController::class, 'insert'])->name('customer.insert');
});


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/customer/delete/{id}', [CustomerController::class, 'delete'])->name('customer.delete');
});


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/customer/edit/{id}', [CustomerController::class, 'edit'])->name('customer.edit');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::post('/customer/update/{id}', [CustomerController::class, 'update'])->name('customer.update');
});



// Sales Route
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/sales', [SalesController::class, 'index'])->name('sales.read');
});


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/sales/add', [SalesController::class, 'create'])->name('sales.create');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/sales/delete/{id}', [SalesController::class, 'delete'])->name('sales.delete');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::post('/sales/insert', [SalesController::class, 'insert'])->name('sales.insert');
});


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/sales/edit/{id}', [SalesController::class, 'edit'])->name('sales.edit');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::post('/sales/update/{id}', [SalesController::class, 'update'])->name('sales.update');
});

// Sales Item Routes
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/salesitem', [SalesItemController::class, 'index'])->name('salesitem.read');
});


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/salesitem/add', [SalesItemController::class, 'create'])->name('salesitem.create');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/salesitem/delete/{id}', [SalesItemController::class, 'delete'])->name('salesitem.delete');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::post('/salesitem/insert', [SalesItemController::class, 'insert'])->name('salesitem.insert');
});


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/salesitem/edit/{id}', [SalesItemController::class, 'edit'])->name('salesitem.edit');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::post('/salesitem/update/{id}', [SalesItemController::class, 'update'])->name('salesitem.update');
});




// Supplier Routes
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/supplier', [SupplierController::class, 'index'])->name('supplier.read');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/supplier/add', [SupplierController::class, 'create'])->name('supplier.create');
});


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::post('/supplier/insert', [SupplierController::class, 'insert'])->name('supplier.insert');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/supplier/delete/{id}', [SupplierController::class, 'delete'])->name('supplier.delete');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/supplier/edit/{id}', [SupplierController::class, 'edit'])->name('supplier.edit');
});


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::post('/supplier/update/{id}', [SupplierController::class, 'update'])->name('supplier.update');
});