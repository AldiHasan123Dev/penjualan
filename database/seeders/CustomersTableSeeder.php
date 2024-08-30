<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CustomersTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('customers')->insert([
            ['customer_name' => 'Alpha Corp', 'customer_city' => 'New York'],
            ['customer_name' => 'Beta Ltd', 'customer_city' => 'London'],
            ['customer_name' => 'Gamma Inc', 'customer_city' => 'Sydney'],
            ['customer_name' => 'Delta Corp', 'customer_city' => 'Madrid'],
        ]);
    }
}

