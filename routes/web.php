<?php

// use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('Home');
});
Route::get('/about', function () {
    return view('About');
});
Route::get('/projects', function () {
    return view('Projects');
});
Route::get('/contact', function () {
    return view('Contact');
});

