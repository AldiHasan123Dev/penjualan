<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;
    
    protected $primaryKey = 'customers_id';

    protected $fillable = [
        'customer_name', 'customer_city',
    ];


    public function order()
    {
        return $this->hasMany('App\Models\Order');
    }
}


