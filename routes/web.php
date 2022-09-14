<?php

use Illuminate\Support\Facades\Route;
use App\http\controllers\OrderController;
use App\http\controllers\OrderitemController;
use App\http\controllers\ProductController;


Route::get('/', function () {
    return view('interface');
});

Route::get('product',[ProductController::class,'product']);
Route::get('order',[OrderController::class,'show']);
Route::get('product',[ProductController::class,'create']);
Route::get('orderitem',[OrderitemController::class,'order']);
Route::get('/edit/{id}',[ProductController::class,'edit']);
Route::put('/edit/{id}',[ProductController::class,'update']);
Route::get('order',[OrderController::class,'makeorder']);
Route::get('/editorder/{id}',[OrderController::class,'editorder']);
Route::put('/editorder/{id}',[OrderController::class,'updateorder']);
?>