<?php
use App\Http\Controllers\AuthController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Models\Size;


//Route::middleware('auth:sanctum')->post('/products', [ProductsController::class, "store"]);
Route::middleware('auth:sanctum')->post('/logout', [AuthController::class, "logout"]);

?>