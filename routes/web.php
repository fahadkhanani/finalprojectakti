<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\OrderController;

//Client Routes
Route::get('/client/master', [WebController::class, 'MasterPage'])->name('client-master-page');
Route::get('/client/index', [WebController::class, 'IndexPage'])->name('index-page');
Route::get('/client/cart',[WebController::class, 'CartPage'])->name('cart-page');
Route::get('/client/checkout',[WebController::class, 'CheckoutPage'])->name('checkout-page');
Route::get('/client/shop', [WebController::class, 'ShopPage'])->name('shop-page');
Route::get('/client/contact',[WebController::class, 'ContactPage'])->name('contact-page');

//Server Routes
Route::get('/server/index', [ProductController::class, 'ServerIndexPage'])->name('server-index');
Route::get('/server/create', [ProductController::class, 'ServerCreatePage'])->name('server-create-products');
Route::post('/server/products/store', [ProductController::class, 'ServerProductStore'])->name('server-products-store');
Route::get('/server/edit/product/{id}', [ProductController::class, 'ServerEditProduct'])->name('server-edit-product');
Route::get('/server/delete/product/{id}', [ProductController::class, 'ServerDeleteProduct'])->name('server-delete-product');
// Route::get('/server/orders',[ProductController::class,'ServerOrdersPage'])->name('server-orders');
//Using put method because we are updating existing posted route
Route::put('/server/{id}/update', [ProductController::class, 'ServerUpdateProduct'])->name('server-update-product');
//Cart Controller
Route::get('/cart/addtocart/{id}', [CartController::class, 'AddToCart'])->name('add-to-cart');
Route::get('/cart/removefromcart/{id}', [CartController::class,'RemoveFromCart'])->name('remove-from-cart');
Route::get('/cart/status', [CartController::class, 'CartStatus'])->name('cart-status');
//Order Controller
Route::post('/place/order', [OrderController::class,'PlaceOrder'])->name('place-order');
Route::get('/server/complete/order/{id}',[OrderController::class,'CompleteOrder'])->name('complete-order');
Route::get('/server/delete/order/{id}',[OrderController::class,'DeleteOrder'])->name('delete-order');








//Redirect Route
Route::get('/',function () {
    return redirect()->route('index-page');
});
// Route::get('/test', action: function()
// {
//     $name = "Fahad";
//     $age = 23;
//     return "<h1>Hello $name , Your age is: $age </h1>";
// });
// Route::get('/hello', action: function () {
//     $name = "Saad Chaudhary";
//     return "<h1>hello 23393 $name</h1>";
// });
