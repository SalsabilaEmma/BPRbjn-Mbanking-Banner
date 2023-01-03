<?php

use App\Http\Controllers\BannerController;
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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::GET('/', [BannerController::class, 'index'])->name('index');
Route::POST('/banner/store', [BannerController::class, 'store'])->name('banner.store');
Route::DELETE('/banner/delete/{namafile?}', [BannerController::class, 'destroy'])->name('banner.destroy');
