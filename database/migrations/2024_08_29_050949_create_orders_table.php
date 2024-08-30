<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id('order_id');
            $table->date('order_date');
            $table->decimal('amount', 10, 4);
            // Sesuaikan dengan kolom primary key di tabel salesman dan customers
            $table->unsignedBigInteger('salesman_id');
            $table->unsignedBigInteger('customers_id');
            
            $table->foreign('salesman_id')->references('salesman_id')->on('salesman')->onDelete('cascade');
            $table->foreign('customers_id')->references('customers_id')->on('customers')->onDelete('cascade');

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('orders');
    }
}
