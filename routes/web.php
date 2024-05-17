<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{ LoginController, RoleController, BlogController, HomeController};
use App\Http\Controllers\{ CategoryController, SubCategoryController, ContactController, ProductController};
use App\Http\Controllers\{ UserController, PostController, SlideController, TestimonialController};


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

    Route::controller(BlogController::class)->group(function () {
        Route::get('/blog', 'index')->name('blog.index');
        Route::post('/blog', 'store')->name('blog.store');
        Route::get('/blog/{id}', 'edit')->name('blog.edit');
        Route::post('/blog/update', 'update')->name('blog.update');
        Route::get('/blog/{id}', 'destroy')->name('blog.destroy');
    });

    Route::controller(CategoryController::class)->group(function () {
        Route::get('/categorie', 'index')->name('categorie.index');
        Route::post('/categorie', 'store')->name('categorie.store');
        Route::get('/categorie/{id}', 'edit')->name('categorie.edit');
        Route::post('/categorie/update', 'update')->name('categorie.update');
        Route::get('/categorie/{id}', 'destroy')->name('categorie.destroy');
    });

    Route::controller(SubCategoryController::class)->group(function () {
        Route::get('/subcategorie', 'index')->name('subcategorie.index');
        Route::post('/subcategorie', 'store')->name('subcategorie.store');
        Route::get('/subcategorie/{id}', 'edit')->name('subcategorie.edit');
        Route::post('/subcategorie/update', 'update')->name('subcategorie.update');
        Route::get('/subcategorie/{id}', 'destroy')->name('subcategorie.destroy');
    });

    Route::controller(TestimonialController::class)->group(function () {
        Route::get('/testimonial', 'index')->name('testimonial.index');
        Route::post('/testimonial', 'store')->name('testimonial.store');
        Route::get('/testimonial/{id}', 'edit')->name('testimonial.edit');
        Route::post('/testimonial/update', 'update')->name('testimonial.update');
        Route::get('/testimonial/{id}', 'destroy')->name('testimonial.destroy');
    });

});


Route::group(['prefix' => 'etsyetu'], function () {
    Route::get('/', [HomeController::class, 'home'])->name('home');
    Route::get('/contact', [ContactController::class, 'message'])->name('contact');
    Route::post('/contact', [ContactController::class, 'contact'])->name('contact.contact');
    Route::get('/about', [HomeController::class, 'about'])->name('about');

    Route::group(['prefix' => 'blog'], function () {
        Route::get('/',[PostController::class, 'index'])->name('blog');
        Route::get('/{y}/{m}/{d}/{slug}', [PostController::class, 'show'])->name('blog.show');
        Route::post('/{y}/{m}/{d}/{slug}', [ContactController::class, 'comment'])->name('comment');
        Route::get('/category/{slug}', [PostController::class, 'sortByCategory'])->name('blog.category');
        Route::get('/search', [PostController::class, 'search'])->name('search');
        Route::get('/presse', [PostController::class, 'presse'])->name('presse');
    });

    Route::group(['prefix' => 'product'], function () {
        Route::get('/', [ProductController::class,'product'])->name('product');
        Route::get('/detail', [ProductController::class,'detail'])->name('product.detail');
    });

});
