<?php
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\SizeController;
use App\Http\Controllers\ColorController;
use App\Http\Controllers\GenderController;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::group(["middleware" => "auth:sanctum"], function() {
    Route::group(["middleware" => "admin", "prefix"=> "admin"], function() {
        Route::post('/{id}/products', [ProductsController::class, "store"]);
        Route::post('/{id}/size', [SizeController::class, "store"]);
        Route::post('/{id}/color', [ColorController::class, "store"]);
        Route::post('/{id}/gender', [GenderController::class, "store"]);

        Route::delete("/products/{id}",  [ProductsController::class, "destroy"]);
        Route::delete("/size/{id}",  [SizeController::class, "destroy"]);
        Route::delete("/color/{id}",  [ColorController::class, "destroy"]);
        Route::delete("/gender/{id}",  [GenderController::class, "destroy"]);

        Route::put("/products/{id}",  [ProductsController::class, "update"]);
        Route::put("/size/{id}",  [SizeController::class, "update"]);
        Route::put("/color/{id}",  [ColorController::class, "update"]);
        Route::put("/gender/{id}",  [GenderController::class, "update"]);
    });
});



Route::get('/size', [SizeController::class, "index"]);
Route::get('/size/{id}', [SizeController::class, "show"]);

Route::get('/color', [ColorController::class, "index"]);
Route::get('/color/{id}', [ColorController::class, "show"]);

Route::get('/gender', [GenderController::class, "index"]);
Route::get('/gender/{id}', [GenderController::class, "show"]);

Route::get("/products/search/{name}",  [ProductsController::class, "search"]);
