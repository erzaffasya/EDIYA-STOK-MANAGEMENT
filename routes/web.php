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

//make route for landing page
Route::get('/', function () {
    return view('landingpage.index');
});

//make route for admin page
Route::get('/admin', function () {
    return view('admin.dashboard');
});

require __DIR__ . '/auth.php';

