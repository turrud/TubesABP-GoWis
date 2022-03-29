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
    return view('welcome');
});
<<<<<<< HEAD
Route::get('/paketWisata', function () {
    return view('PaketWisata');
});
Route::get('/sewaKendaraan', function () {
    return view('SewaKendaraan');
});
Route::get('/berita', function () {
    return view('Berita');
});
Route::get('/login', function () {
    return view('login.index');
});
Route::get('/register', function () {
    return view('login.register');
=======
Route::get('/home', function () {
    return view('Home');
});
Route::get('/berita', function () {
    return view('Berita');
>>>>>>> 46dccf5527e338b2c9b2b202cdee89a0ec40443e
});