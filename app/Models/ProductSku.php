<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductSku extends Model
{
    //可修改文件
    protected $fillable = [
        'title', 'description', 'price', 'stock'
    ];

    public function product(){
        return $this->belongsTo(Product::class);
    }
}
