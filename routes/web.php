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

Route::get('/index', function () {
    return view('index');
});
Route::get('/test', function () {
    return view('test');
});
Route::get('/about2', function () {
    return view('about2');
});
Route::get('/blog-item', function () {
    return view('blog-item');
});
Route::get('/book-a-temp', function () {
    return view('book-a-temp');
});
Route::get('/career', function () {
    return view('career');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/cv-upload', function () {
    return view('cv-upload');
});
Route::get('/employer', function () {
    return view('employer');
})->name('employer');
Route::get('/job-seeker', function () {
    return view('job-seeker');
});
Route::get('/location', function () {
    return view('location');
});
Route::get('/post-a-job', function () {
    return view('post-a-job');
});
Route::get('/testimonial', function () {
    return view('testimonial');
});
Route::get('/why-us', function () {
    return view('why-us');
});
Route::get('/catering', function () {
    return view('catering');
});
Route::get('/construction', function () {
    return view('construction');
});
Route::get('/events-&-promotions', function () {
    return view('events-&-promotions');
});
Route::get('/hospitality', function () {
    return view('hospitality');
});
Route::get('/it-&-telecom', function () {
    return view('it-&-telecom');
});
Route::get('/light-industrial-staff', function () {
    return view('light-industrial-staff');
});
Route::get('/sales-&-retail', function () {
    return view('sales-&-retail');
});
Route::get('/agency-temps', function () {
    return view('agency-temps');
});
Route::get('/temporary-staffing-solutions', function () {
    return view('temporary-staffing-solutions');
});
Route::get('/staff-on-call', function () {
    return view('staff-on-call');
});
Route::get('/temporary-labourer', function () {
    return view('temporary-labourer');
});
Route::get('/ready-talent', function () {
    return view('ready-talent');
});