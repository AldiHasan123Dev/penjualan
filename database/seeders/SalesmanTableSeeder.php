<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SalesmanTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('salesman')->insert([
            ['salesman_name' => 'Lauda', 'salesman_city' => 'New York', 'comision' => 0.15],
            ['salesman_name' => 'Miomio', 'salesman_city' => 'Los Angeles', 'comision' => 0.12],
            ['salesman_name' => 'Kamille', 'salesman_city' => 'Houston', 'comision' => 0.10],
            ['salesman_name' => 'Agus', 'salesman_city' => 'Chicago', 'comision' => 0.14],
        ]);
    }
}
