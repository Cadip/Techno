<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/login', function () {
    return view('login');
});
Route::get('/signup', function () {
    return view('signup');
});
Route::get('/homepage', function () {
    return view('homepage');
});
Route::get('/riwayat', function () {
    return view('riwayat');
});
Route::get('/faqs', function () {
    return view('faqs');
});
Route::get('/profile', function () {
    return view('profile');
});
Route::get('/detailPlaces', function () {
    return view('detailPlaces');
});
Route::get('/booking', function () {
    return view('booking');
});
