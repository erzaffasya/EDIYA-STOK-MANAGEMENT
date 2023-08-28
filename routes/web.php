<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\CareerController;
use App\Http\Controllers\ComponentRebuildController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HandlingController;
use App\Http\Controllers\HeroController;
use App\Http\Controllers\HeroTextController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KantorController;
use App\Http\Controllers\KategoriProdukController;
use App\Http\Controllers\LandingpageController;
use App\Http\Controllers\LubricantController;
use App\Http\Controllers\MainProdukController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\OurMemberController;
use App\Http\Controllers\PartnerController;
use App\Http\Controllers\PiusiController;
use App\Http\Controllers\PopupController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\SparepartController;
use App\Http\Controllers\SubProdukController;
use App\Http\Controllers\SubProdukDetailController;
use App\Http\Controllers\TentangSingkatController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\BlogDetailController;
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

Route::get('/dashboard', function () {
    return view('admin.dashboard');
})->middleware(['auth'])->name('dashboard');


// Route::get('/', function () {
//     return view('landingpage.index');
// });
Route::get('/', [LandingpageController::class, 'index'])->name('landingpage.index');
Route::get('/member', [LandingpageController::class, 'member'])->name('landingpage.member');

Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function () {
    Route::resource('member', MemberController::class);
});

Route::resource('component', ComponentRebuildController::class);





require __DIR__ . '/auth.php';
