<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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

Route::get('/', function (){
   return Inertia::render('Main');
})->name('main');

Route::get('/info', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::group(['prefix' => 'dashboard', 'middleware' => 'auth'], function () {
//    Route::get('/', \App\Http\Controllers\Admin\IndexController::class)->name('admin');

    Route::get('/media', \App\Http\Controllers\Media\IndexController::class)->name('media.index');

    Route::group(['prefix' => 'products'], function (){
        Route::get('/', \App\Http\Controllers\Product\Dashboard\IndexController::class)->name('dashboard.product.index');
        Route::get('/create', \App\Http\Controllers\Product\Dashboard\CreateController::class)->name('product.create');
        Route::post('/', \App\Http\Controllers\Product\Dashboard\StoreController::class)->name('product.store');
        Route::get('/edit/{product_id}', \App\Http\Controllers\Product\Dashboard\EditController::class)->name('dashboard.product.show');

//        Route::get('/{product}', \App\Http\Controllers\Product\Admin\ShowController::class)->name('admin.product.show');
        Route::patch('/{product}', \App\Http\Controllers\Product\Dashboard\UpdateController::class)->name('product.update');
//        Route::delete('/{product}', \App\Http\Controllers\Product\Admin\DeleteController::class)->name('product.delete');
    });

    Route::group(['prefix' => 'users'], function (){
        Route::get('/', \App\Http\Controllers\User\IndexController::class)->name('user.index');

//        Route::get('/create', \App\Http\Controllers\Product\Dashboard\CreateController::class)->name('product.create');
//        Route::post('/', \App\Http\Controllers\Product\Dashboard\StoreController::class)->name('product.store');
//        Route::get('/edit/{product_id}', \App\Http\Controllers\Product\Dashboard\EditController::class)->name('product.edit');
//        Route::get('/{product}', \App\Http\Controllers\Product\Admin\ShowController::class)->name('admin.product.show');
//        Route::patch('/{product}', \App\Http\Controllers\Product\Admin\UpdateController::class)->name('product.update');
//        Route::delete('/{product}', \App\Http\Controllers\Product\Admin\DeleteController::class)->name('product.delete');
    });

})->middleware(['auth', 'verified']);

Route::get('/shop', \App\Http\Controllers\Product\Guest\IndexController::class)->name('product.index');
Route::get('/product/{slug}', \App\Http\Controllers\Product\Guest\ShowController::class)->name('product.show');

Route::get('/test', function () {
    return view('welcome');
});

Route::get('/admin', function () {
    return Inertia::render('Admin');
})->middleware(['auth', 'verified'])->name('admin');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
