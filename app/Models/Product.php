<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table = 'product';
    public $primaryKey = 'product_id';
    public $fillable = [
        // 'category_id',
        'name_product',
        'price',
        'view',
        'description',
        'image'
        
    ];
}
