<?php
use App\Http\Controllers\ProductsController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Models\Size;


Route::middleware('auth:sanctum')->post('/admin/{id}/products', [ProductsController::class, "store"])->middleware("admin");
Route::get('/products', [ProductsController::class, "index"]);
Route::get('/products/{id}', [ProductsController::class, "show"]);
Route::put("/products/{id}",  [ProductsController::class, "update"]);
Route::delete("/products/{id}",  [ProductsController::class, "destroy"]);
//Route::post('/products', [ProductsController::class, "store"]);
Route::get("/products/search/{name}",  [ProductsController::class, "search"]);

Route::get('/size', function() {
    return Size::all();
});