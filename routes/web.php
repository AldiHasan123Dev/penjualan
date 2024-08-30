<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\SalesmanController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\DashboardController;

// Route::get('/', function () {
//     return view('dashboard');
// });

//Dashboard
Route::get('/', [DashboardController::class, 'count']);

//Customer 
Route::resource('customers', CustomerController::class);

//Salesman
Route::resource('salesmans', SalesmanController::class);

//Order
Route::resource('orders', OrderController::class);
