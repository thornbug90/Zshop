<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'stock',
        'weight',
        'price',
        'thumbnail',
        'image',
        'description',
        'category_id',
        'sku',
    ];

    public function product_option(){
        return $this->belongsTo(product_option::class);
    }
    public function category(){
        return $this->belongsTo(category::class);
    }

    // public function product_category(){
    //     return $this->belongsTo(product_category::class);
    // }

    public function order_details(){
        return $this->hasMany(order_details::class);
    }
}
