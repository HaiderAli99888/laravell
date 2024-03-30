<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\CommentController;

Auth::routes();

Route::get('/', [HomeController::class, 'index'])->name('index');

Route::group(['middleware' => 'auth'], function () {

    Route::get('/home', [HomeController::class, 'home'])->name('home');
    Route::resource('blogs', BlogController::class);
    Route::get('blog/user', [BlogController::class, 'listing'])->name('blogs.listing');

    Route::group(['prefix' => 'comments'], function () {
        Route::post('store', [CommentController::class, 'store'])->name('comments.store');
        Route::delete('destroy/{id}', [CommentController::class, 'destroy'])->name('comments.destroy');
    });

});
