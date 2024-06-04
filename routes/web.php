<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->route('login');
});

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    })->name('dashboard');

    Route::get('/home', function () {
        return view('admin.home');
    })->name('home');

    Route::get('/about', function () {
        return view('admin.about');
    })->name('about');

    Route::get('/services', function () {
        return view('admin.services');
    })->name('services');

    Route::get('/contact', function () {
        return view('admin.contact');
    })->name('contact');

    Route::get('/products', function () {
        return view('admin.products');
    })->name('products');
});

Route::middleware('auth')->group(function () {
    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    })->name('dashboard');
});

require __DIR__.'/auth.php';
