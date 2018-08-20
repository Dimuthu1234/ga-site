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

Route::get('/contact-us', function () {
    return view('contact');
});

Route::get('/project-list', function () {
    return view('projectList');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/quality-safety', function () {
    return view('qualitySafety');
});

Route::get('/our-testimonials', function () {
    return view('ourTestimonials');
});

Route::get('/ga-qatar', function () {
    return view('gaQatar');
});
