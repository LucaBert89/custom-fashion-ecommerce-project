<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Products;
use App\Models\Size;


Route::get('/products', function () {
    return Products::all();
});

Route::get('/size', function() {
    return Size::all();
});