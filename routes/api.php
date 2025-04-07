<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\api\ProductController;
use App\Http\Controllers\api\ContactController;
use App\Http\Controllers\api\OrderProcessController;
use App\Http\Controllers\Api\VueCrud\BrandController;
use App\Http\Controllers\Api\VueCrud\RoleController;
use App\Http\Controllers\Api\VueCrud\UserController;

Route::get("/order", [OrderProcessController::class,'index']);
Route::get("/orders/all", [OrderProcessController::class,'allOrders']);
Route::get("/invoice/{id}", [OrderProcessController::class,'invoice']);
Route::get("/products", [ProductController::class,'index']);
Route::get("/contacts", [ContactController::class,'index']);
Route::post("/contacts/store", [ContactController::class,'store']);

Route::apiResource("/roles", RoleController::class);
Route::apiResource("/brands", BrandController::class);
Route::apiResource("/users", UserController::class);
