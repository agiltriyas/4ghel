<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('demo-satu', function () {
    return view('1.demo-satu');
})->name('demo-satu');

Route::get('demo-dua', function () {
    return view('2.demo-dua');
})->name('demo-dua');

Route::get('demo-satu-blog', function () {
    return view('1.demo-satu-blog');
})->name('demo-satu-blog');

Route::get('demo-satu-blog-detail', function () {
    return view('1.demo-satu-blog-detail');
})->name('demo-satu-blog-detail');




Route::get('demo-tiga', function () {
    return view('3.demo-tiga');
})->name('demo-tiga');

Route::get('demo-empat', function () {
    return view('4.demo-empat');
})->name('demo-empat');

Route::get('demo-tiga-blog', function () {
    return view('3.demo-tiga-blog');
})->name('demo-tiga-blog');

Route::get('demo-tiga-blog-detail', function () {
    return view('3.demo-tiga-blog-detail');
})->name('demo-tiga-blog-detail');

