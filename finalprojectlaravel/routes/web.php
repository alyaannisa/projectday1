<?php

use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\ProductsController;
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

// Route::post('/logout', function () {
//     auth()->logout();
//     request()->session()->invalidate();
//     request()->session()->regenerateToken();

//     return redirect('login');
// })->name('logout');

Route::get('logout', function ()
{
    auth()->logout();
    Session()->flush();

    return redirect('login');
})->name('logout');

Route::get('home', [ProductsController::class, 'home']);
Route::get('produk', [ProductsController::class, 'index']);
Route::get('edit', [ProductsController::class, 'edit']);
Route::post('update', [ProductsController::class, 'update']);
Route::get('hapus', [ProductsController::class, 'hapus']);

Route::get("products", [ProductsController::class, 'index'])->name('products.index');
Route::get('/products/create', [ProductsController::class, 'create'])->name('products.create');
Route::post('/products', [ProductsController::class, 'store'])->name('products.store');
// Route::get('products/create', [ProductsController::class, 'create'])->name('products.create');
// Route::post('products', [ProductsController::class, 'store'])->name('products.store');
// Munculin Form Edit
Route::get("products/{id}", [ProductsController::class, 'show'])->name('products.show');
// Buat Delete
Route::delete("products/{id}", [ProductsController::class, 'destroy'])->name('products.destroy');

// Route::get("products/{id}", [ProductsController::class, 'show'])->name('products.show');

Route::put("products/{id}", [ProductsController::class, 'update'])->name('products.update');

Route::get("categories", [CategoriesController::class, 'index'])->name('categories.index');


Route::get("categories/{id}", [CategoriesController::class, 'show'])->name('categories.show');
Route::delete("categories/{id}", [CategoriesController::class, 'destroy'])->name('categories.destroy');
Route::get('/categories/create', [CategoriesController::class, 'create'])->name('categories.create');
Route::post('categories', [CategoriesController::class, 'store'])->name('categories.store');
Route::put("categories/{id}", [ProductsController::class, 'update'])->name('categories.update');


