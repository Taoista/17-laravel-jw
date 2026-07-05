<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ProductosController;


Route::middleware('auth:api')->group(function () {
    
    Route::get('/get-productos', [ProductosController::class, 'get_productos']);

});