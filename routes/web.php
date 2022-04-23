<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('counter');
});

Route::get('/include', function(){
    return view('include');
});

Route::get('/upload', function(){
    return view('upload');
});