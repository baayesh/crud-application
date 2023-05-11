<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    use HasFactory;

    // array to add details of product
    protected $addProductDetails =[
        'product_name', 'description', 'shipping_method', 'quantity',   
    ];
}
