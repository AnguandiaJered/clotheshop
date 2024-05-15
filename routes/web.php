<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{ HomeController, LoginController, BlogController, ContactController, ProductController};
use App\Http\Controllers\{ UserController, RoleController, SlideController};


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

Route::group(['prefix' => 'etsyetu'], function () {
    Route::get('/dashboard', [HomeController::class,'dashboard'])->name('admin.home');

    Route::controller(LoginController::class)->group(function () {
        Route::get('/etsyetu/login', 'index')->name('login');

        Route::get('/login', 'login_set')->name('login');
        Route::get('/logout', 'logout')->name('logout');
        Route::get('/registered', 'registered')->name('register.index');
        Route::get('/forgot-password', 'forgot')->name('forgot');
        Route::get('/secure', 'secure')->name('secure');
        Route::post('/register', 'register')->name('register');
        Route::post('/login', 'login')->name('auth.login');
    });

    Route::controller(ContactController::class)->group(function () {
        Route::get('/message', 'message')->name('message.message');
    });

    Route::controller(ContactController::class)->group(function () {
        Route::get('/comment', 'comments')->name('comment');
    });

    Route::controller(UserController::class)->group(function () {
        Route::get('/users', 'index')->name('users.index');
        Route::post('/users', 'store')->name('users.store');
        Route::get('/users/{id}', 'show')->name('users.show');
        Route::post('/users/update', 'update')->name('users.update');
        Route::get('/users/{id}', 'destroy')->name('users.destroy');
    });

    Route::controller(RoleController::class)->group(function () {
        Route::get('/role', 'index')->name('role.index');
        Route::post('/role', 'store')->name('role.store');
        Route::get('/role/{id}', 'show')->name('role.show');
        Route::post('/role/update', 'update')->name('role.update');
        Route::get('/role/{id}', 'destroy')->name('role.destroy');
    });

    Route::controller(SlideController::class)->group(function () {
        Route::get('/slide', 'index')->name('slide.index');
        Route::post('/slide', 'store')->name('slide.store');
        Route::get('/slide/{id}', 'show')->name('slide.show');
        Route::post('/slide/update', 'update')->name('slide.update');
        Route::get('/slide/{id}', 'destroy')->name('slide.destroy');
    });

});


Route::group(['prefix' => 'etsyetu'], function () {
    Route::get('/', [HomeController::class, 'home'])->name('home');
    Route::get('/contact', [ContactController::class, 'message'])->name('contact');
    Route::post('/contact', [ContactController::class, 'contact'])->name('contact.contact');
    Route::get('/comment', [ContactController::class, 'comment'])->name('comment');
    Route::post('/comments', [ContactController::class, 'comments'])->name('contact.comments');
    Route::get('/about', [HomeController::class, 'about'])->name('about');

    Route::group(['prefix' => 'blog'], function () {
        Route::get('/', [BlogController::class,'blog'])->name('blog');
        Route::get('/detail', [BlogController::class,'detail'])->name('blog_detail');
        Route::get('/{y}/{m}/{d}/{slug}', [BlogController::class, 'show'])->name('blog.show');
        Route::get('/category/{slug}', [BlogController::class, 'sortByCategory'])->name('blog.category');
        Route::get('/search', [BlogController::class, 'search'])->name('search');
        Route::get('/presse', [BlogController::class, 'presse'])->name('presse');
    });

    Route::group(['prefix' => 'product'], function () {
        Route::get('/', [ProductController::class,'product'])->name('product');
        Route::get('/detail', [ProductController::class,'detail'])->name('product_detail');
    });

});
