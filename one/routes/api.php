<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\aacontroller;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
*/
/*
Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
*/
Route::apiResource('products',ProductController::class);//get all
//Route::apiResource('products',[ProductController::class]);
//Route::post('products',[ProductController::class,'store']);//create

//Route::post('aa1',[aacontroller::class,'aab']);//create
/* crud has 5 fn -all will be done in above- laravel resource route handling
Route::get('products',[ProductController::class,'index']);//get all
Route::get('products/{id}',[ProductController::class,'show']);//get single
Route::post('products',[ProductController::class,'store']);//create
Route::put('products/{id}',[ProductController::class,'update']);//update
Route::delete('products/{id}',[ProductController::class,'destroy']);//delete
*/
