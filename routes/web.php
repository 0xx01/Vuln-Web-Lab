<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return redirect(route('login'));
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('checkadmin');

Route::group(["prefix" => 'Profile', 'namespace' => 'profile','middleware' => ['auth']], function (){
    Route::get('update', [App\Http\Controllers\Users\UserController::class, 'update_view'])->name('profile.update');
    Route::post('update', [App\Http\Controllers\Users\UserController::class, 'UpdateUserInfo'])->name('update.info');
});
Route::group(["prefix" => 'Orders', 'namespace' => 'Orders','middleware' => ['auth']], function (){
    Route::get('add', [App\Http\Controllers\Orders\OrdersController::class, 'order_index'])->name('orders');
    Route::post('add', [App\Http\Controllers\Orders\OrdersController::class, 'add_order'])->name('add_orders');
    Route::get('view', [App\Http\Controllers\Orders\OrdersController::class, 'view_all'])->name('view_orders')->middleware('checkadmin');
    Route::get('view/{id}', [App\Http\Controllers\Orders\OrdersController::class, 'view'])->name('view_order')->middleware('checkadmin');
});
