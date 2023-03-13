<?php

use App\Http\Controllers\Admin\ProductController as AdminProductController;
use App\Http\Controllers\User\ProductController as UserProductController;

use App\Http\Controllers\Admin\ManufacturerController as AdminManufacturerController;
use App\Http\Controllers\User\ManufacturerController as UserManufacturerController;

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
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home.index');
Route::get('/home/hospitals', [App\Http\Controllers\HomeController::class, 'hospitalIndex'])->name('home.manufacturer.index');

Auth::routes();

Route::resource('/admin/products', AdminProductController::class)->middleware(['auth'])->names('admin.products');
Route::resource('/user/products', UserProductController::class)->middleware(['auth'])->names('user.products')->only(['index', 'show']);

Route::resource('/admin/manufacturers', AdminManufacturerController::class)->middleware(['auth'])->names('admin.manufacturers');
Route::resource('/user/manufacturers', UserManufacturerController::class)->middleware(['auth'])->names('user.manufacturers')->only(['index', 'show']);
