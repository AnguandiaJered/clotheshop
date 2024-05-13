<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{ HomeController, AboutController, BlogController, ContactController, ProductController};


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
    return view('admin/home');
});

Route::get('/home', [HomeController::class,'home'])->name('home');
Route::get('/about', [HomeController::class,'about'])->name('about');
Route::get('/blog', [BlogController::class,'blog'])->name('blog');
Route::get('/blog_detail', [BlogController::class,'detail'])->name('blog_detail');
Route::get('/contact', [ContactController::class,'index'])->name('contact');
Route::get('/product', [ProductController::class,'index'])->name('product');
Route::get('/product_detail', [ProductController::class,'product_detail'])->name('product_detail');

