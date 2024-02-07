<?php

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

// Route::get('/', function () {
//     return view('company.home');
// });

use App\Http\Controllers\DataController;

Route::get('/', [DataController::class, 'index']);
Route::get('/tambah', [DataController::class, 'tambah']);
Route::post('/store', [DataController::class, 'store']);
Route::get('/hapus/{id}', [DataController::class, 'hapus']);
Route::get('/edit/{id}', [DataController::class, 'edit']);
Route::post('/update', [DataController::class, 'update']);

// Route::post('/add', 'DataController@addData')->name('addData');


