<?php

use App\Http\Controllers\AdjustmentTypeController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ColorController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\OrderDetailController;
use App\Http\Controllers\OrderStatuController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PromotionController;
use App\Http\Controllers\PromotionStatuController;
use App\Http\Controllers\PurchaseController;
use App\Http\Controllers\PurchaseDetailController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\ShippingController;
use App\Http\Controllers\SizeController;
use App\Http\Controllers\StockAdjustmentController;
use App\Http\Controllers\StockController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\TransactionTypeController;
use App\Http\Controllers\WishlistController;

use Illuminate\Support\Facades\Route;

Route::get('/admin/dashboard', function () {
    return view('welcome');
})->name("admin.dashboard")->middleware('auth');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});



Route::view('front', 'layout.frontend.main');

Route::get('/ecom-shop',  [ProductController::class,'shop']);



Route::resource('adjustmenttypes', AdjustmentTypeController::class);
Route::resource('brands', BrandController::class);
Route::resource('categorys', CategoryController::class);
Route::resource('colors', ColorController::class);
Route::resource('customers', CustomerController::class);
Route::resource('orders', OrderController::class);
Route::resource('orderdetails', OrderDetailController::class);
Route::resource('orderstatus', OrderStatuController::class);
Route::resource('payments', PaymentController::class);
Route::resource('products', ProductController::class);

Route::resource('promotions', PromotionController::class);
Route::resource('promotionstatus', PromotionStatuController::class);
Route::resource('purchases', PurchaseController::class);
Route::resource('purchasedetails', PurchaseDetailController::class);
Route::resource('reviews', ReviewController::class);
Route::resource('roles', RoleController::class);
Route::resource('shippings', ShippingController::class);
Route::resource('sizes', SizeController::class);
Route::resource('stockadjustments', StockAdjustmentController::class);
Route::resource('stocks', StockController::class);
Route::resource('suppliers', SupplierController::class);
Route::resource('transactiontypes', TransactionTypeController::class);
Route::resource('wishlists', WishlistController::class);







require __DIR__.'/auth.php';
