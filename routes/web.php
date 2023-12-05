<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\productcontroller;
use App\Http\Controllers\employeecontroller;

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
// Route::view('/','addproduct');
// Route::post('/insert',[productcontroller::class,'insertdata'])->name('insert');

// Route::get('/add', [productcontroller::class,'index'])->name('product.index');
// Route::get('/product', [productcontroller::class,'add'])->name('product.add');
Route::resource('product',employeecontroller::class);

