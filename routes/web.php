<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TemplateController;


Route::get('/home', function(){
    return view('home');;
});

Route::get('about', function(){
    return view('about');
});

Route::get('contact',function(){
    return view('contact');
});

Route::get('category', function(){
    return view('category');
});

Route::get('testmonial', function(){
    return view('testmonial');
});

Route::get('404', function(){
    return view('404');
});

Route::get('job-list', function(){
    return view('job-list');
});

Route::get('job-detail', function(){
    return view('job-detail');
});