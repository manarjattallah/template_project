<?php

use Illuminate\Support\Facades\Route;



Route::get('about.html', function () {
    return view('about');
});
Route::get('/', function () {
    return view('service');
});
Route::get('blog.html', function () {
    return view('blog');
});
Route::get('contact.html', function () {
    return view('contact');
});
Route::get('index.html', function () {
    return view('index');
});
Route::get('service.html', function () {
    return view('service');
});
