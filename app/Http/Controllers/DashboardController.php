<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Customer;
use App\Models\Order;
use App\Models\Salesman;

class DashboardController extends Controller
{
    public function count()
    {
        // Menghitung jumlah data di masing-masing tabel menggunakan Eloquent
        $countsCustomer = Customer::count();
        $countsSalesman = Salesman::count();
        $countsOrder = Order::count();

        return view('dashboard', compact([
            'countsCustomer',
            'countsSalesman',
            'countsOrder'
        ]));
    }
}

