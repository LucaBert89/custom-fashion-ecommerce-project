<?php
use App\Http\Controllers\InventoryController;
use Illuminate\Support\Facades\Route;

Route::get('/products', [InventoryController::class, "index"]);
Route::get('/products/{product}', [InventoryController::class, "show"]);

?>