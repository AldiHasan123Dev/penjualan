<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OrdersTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('orders')->insert([
            ['order_date' => '2023-01-01', 'amount' => 200.00, 'salesman_id' => 1, 'customers_id' => 1],
            ['order_date' => '2023-01-02', 'amount' => 250.00, 'salesman_id' => 2, 'customers_id' => 1],
            ['order_date' => '2024-01-03', 'amount' => 150.00, 'salesman_id' => 3, 'customers_id' => 2],
            ['order_date' => '2024-01-04', 'amount' => 300.00, 'salesman_id' => 4, 'customers_id' => 3],
            ['order_date' => '2024-01-05', 'amount' => 400.00, 'salesman_id' => 1, 'customers_id' => 2],
            ['order_date' => '2024-01-06', 'amount' => 350.00, 'salesman_id' => 2, 'customers_id' => 3],
            ['order_date' => '2024-01-07', 'amount' => 500.00, 'salesman_id' => 3, 'customers_id' => 1],
            ['order_date' => '2024-01-08', 'amount' => 200.00, 'salesman_id' => 4, 'customers_id' => 3],
        ]);
    }
}

