<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customers extends Model
{
    use HasFactory;

    protected $fillable = [

        'customer_id',
        'first_name',
        'last_name',
        'product_purchase',

];
    public static function customers(){
        $customer = self::all();
        return $customer;
}
}
