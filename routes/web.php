<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Artisan;

/* Frontend start */
Route::get('/', function () {
    return view('home');
});
Route::get('/clear-cache', function () {
    Artisan::call('config:clear');
    Artisan::call('route:clear');
    Artisan::call('view:clear');
    Artisan::call('cache:clear');
    Artisan::call('config:cache');
    return 'Cache Cleared';
});


/* Frontend end */


Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');

    Route::get('/category', [CategoryController::class, 'category'])->name('category');
    Route::get('/category/add/{id?}', [CategoryController::class, 'categoryAdd'])->name('category.add');
    Route::get('/category/view/{id?}', [CategoryController::class, 'categoryView'])->name('category.view');
    Route::post('/category/store', [CategoryController::class, 'categoryStore'])->name('category.store');
    Route::post('/category/update/{id}', [CategoryController::class, 'categoryUpdate'])->name('category.update');
    Route::delete('/category/delete/{id}', [CategoryController::class, 'categoryDelete'])->name('category.delete');

});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
