<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Salesman extends Model
{
    use HasFactory;
    
    protected $primaryKey = 'salesman_id';
    protected $table = 'salesman';

    protected $fillable = [
        'salesman_name', 
        'salesman_city', 'comision',
    ];


    public function order()
    {
        return $this->hasMany('App\Models\Order');
    }
}


