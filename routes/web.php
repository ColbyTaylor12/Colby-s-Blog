<?php

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
    return view('welcome');
});

Route::get('/blog-home', function () {
    return view('blog-home');
});

Route::get('/blog-create', function () {
    return view('blog-create');
});

Route::get('/blog-edit', function () {
    return view('blog-edit');
});

Route::get('/blog-index', function () {
    return view('blog-index');
});
