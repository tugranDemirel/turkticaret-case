<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductCategory extends Model
{
    use HasFactory;

    protected $table = 'product_category';
    protected $fillable = [
        'product_id',
        'category_id'
    ];
    protected $casts = [
        'product_id' => 'integer',
        'category_id' => 'integer'
    ];
    public $timestamps = false;

}
