<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    
    protected $primaryKey = 'order_id';
    protected $table = 'orders';

    protected $fillable = [
        'order_id', 'order_date', 'amount',
        'salesman_id', 'customers_id',
    ];


    public function salesman()
    {
        return $this->belongsTo(Salesman::class, 'salesman_id', 'salesman_id');
    }

    public function customer()
    {
        return $this->belongsTo(Customer::class, 'customers_id', 'customers_id');
    }
}


