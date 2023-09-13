<?php

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\LandingpageController;
use App\Http\Controllers\RegisterController;
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

Route::get('/', [LandingpageController::class, 'index'])->name('landingpage.index');

Route::get('/register', [RegisteredUserController::class, 'create'])->name('register.create');

Route::get('/login', [AuthenticatedSessionController::class, 'create'])->name('register.create');

//make route for admin page
Route::get('/admin', function () {
    return view('admin.dashboard');
});

require __DIR__ . '/auth.php';

