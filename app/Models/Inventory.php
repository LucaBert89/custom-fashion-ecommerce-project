<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Inventory extends Model
{
    use HasFactory;
    protected $fillable = [
        "product_id",
        "size_id",
        "color_id",
        "gender_id",
        "stock",
        "price",
        "sku"
    ];
    public function products(){
        return $this->belongsTo(Products::class, 'product_id');
    }

    public function size(){
        return $this->belongsTo(Size::class, 'size_id');
    }

    public function color(){
        return $this->belongsTo(Color::class, 'color_id');
    }

    public function gender(){
        return $this->belongsTo(Gender::class, 'gender_id');
    }
    
}
