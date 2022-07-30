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

// Route::get('/', function () {
//     return view('welcome');
// });




Route::get('login',[App\Http\Controllers\LoginController::class,'index']);
Route::post('login',[App\Http\Controllers\LoginController::class,'login']);

Route::get('pendaftaran',[App\Http\Controllers\PendaftaranController::class,'index']);
Route::post('pendaftaran',[App\Http\Controllers\PendaftaranController::class,'pendaftaran']);



Route::get('/',[App\Http\Controllers\LandingPageController::class,'beranda']);
Route::get('asosiasi',[App\Http\Controllers\LandingPageController::class,'asosiasi']);
Route::get('jasa',[App\Http\Controllers\LandingPageController::class,'jasa']);
Route::get('katalog',[App\Http\Controllers\LandingPageController::class,'katalog']);



// Admin
Route::get('pendaftar',[App\Http\Controllers\Admin\PendaftarController::class,'index']);
Route::get('dashboard',[App\Http\Controllers\Admin\DashboardController::class,'index']);

Auth::routes(['login'=>false,'register'=>false]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
