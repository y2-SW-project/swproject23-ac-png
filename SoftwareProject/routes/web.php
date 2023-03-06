<?php

use App\Http\Controllers\Admin\ProductController as AdminProductController;
use App\Http\Controllers\User\ProductController as UserProductController;

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::resource('/products', ProductController::class)->middleware(['auth']);

Route::resource('/admin/products', AdminProductController::class)->middleware(['auth'])->names('admin.products');
Route::resource('/user/products', UserProductController::class)->middleware(['auth'])->names('user.products')->only(['index', 'show']);
