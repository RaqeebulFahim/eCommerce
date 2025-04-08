<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\api\ProductController;
use App\Http\Controllers\api\ContactController;
use App\Http\Controllers\api\OrderProcessController;
use App\Http\Controllers\Api\VueCrud\BrandController;
use App\Http\Controllers\api\vuecrud\ColorController;
use App\Http\Controllers\Api\VueCrud\RoleController;
use App\Http\Controllers\Api\VueCrud\UserController;
use App\Http\Controllers\AuthController;

Route::get("/order", [OrderProcessController::class,'index']);
Route::get("/orders/all", [OrderProcessController::class,'allOrders']);
Route::get("/invoice/{id}", [OrderProcessController::class,'invoice']);
Route::get("/products", [ProductController::class,'index']);
Route::get("/contacts", [ContactController::class,'index']);
Route::post("/contacts/store", [ContactController::class,'store']);

Route::apiResource("/roles", RoleController::class);
Route::apiResource("/colors", ColorController::class);
Route::apiResource("/brands", BrandController::class);
Route::apiResource("/users", UserController::class);


Route::post('register',[AuthController::class,'register']);
Route::post('login', [AuthController::class,'login']);
Route::post('refresh', [AuthController::class,'refresh']);
Route::post('logout', [AuthController::class,'logout']);