<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sale_detail extends Model
{
    use HasFactory;
    protected $table = 'sales_details'; 
 protected $fillable = [ 'product_id', 'customer_id', 'quantity', 'price', 'sale_date' ];
}
