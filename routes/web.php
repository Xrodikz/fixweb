<?php

use app\Models\Product;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProductsController;

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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/home', [HomeController::class, 'home'])->name('home');
Route::get('/', [HomeController::class, 'index']);


Auth::routes();
// Route User
Route::middleware(['auth','user-role:user'])->group(function()
{
    Route::get("/home/user",[HomeController::class, 'userHome'])->name("userHome");
});
// Route Admin
Route::middleware(['auth','user-role:admin'])->group(function()
{
    Route::get("/home/admin",[HomeController::class, 'adminHome'])->name("adminHome");
});
//crud
Route::get('/input', [ProductsController::class, 'input'])->name('input');
Route::get('/create', [ProductsController::class, 'create'])->name('create');
Route::post('store/', [ProductsController::class, 'store'])->name('store');
Route::get('show/{product}', [ProductsController::class,'show'])->name('show');
Route::get('edit/{product}', [ProductsController::class, 'edit'])->name('edit');
Route::put('edit/{product}', [ProductsController::class, 'update'])->name('update');
Route::delete('/{product}', [ProductsController::class,'destroy'])->name('destroy');