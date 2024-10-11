<?php

use Illuminate\Support\Facades\Route;

// Menampilkan halaman 'index.blade.php' untuk route '/'
Route::get('/', function () {
    return view('index');
});

// Menampilkan halaman 'index.blade.php' untuk route '/home'
Route::get('/home', function () {
    return view('index');
});

// Menampilkan halaman 'about.blade.php' untuk route '/about'
Route::get('/about', function () {
    return view('about');
});

Route::get('/products', function () {
    return view('products');
});

Route::get('/contact', function () {
    return view('contact');
});
