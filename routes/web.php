<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PembeliController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\TransaksiController;

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
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('admin.index');
})->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__.'/auth.php';

Route::resource('/user', UserController::class);
Route::resource('/pembeli', PembeliController::class);
Route::resource('/produk', ProdukController::class);
Route::resource('/order', OrderController::class);
Route::resource('/transaksi', TransaksiController::class);

//admin all route
Route::controller(AdminController::class)->group(function(){
Route::get('/admin/logout','destroy')->name('admin.logout');
Route::get('/admin/profile','profile')->name('admin.profile');
Route::get('/edit/profile','EditProfile')->name('edit.profile');
Route::post('/store/profile','StoreProfile')->name('store.profile');
Route::get('/change/password','ChangePassword')->name('change.password');
Route::post('/update/password','UpdatePassword')->name('update.password');

});
