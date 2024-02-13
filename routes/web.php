<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\sellerController;
use App\Http\Controllers\mainController;
use App\Http\Controllers\AdminController;

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

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/dashboard-seller', [sellerController::class, 'index'])->name('DashboardSeller');
Route::get('/dashboard', [mainController::class, 'index'])->name('Dashboard');
Route::get('/dashboard-admin', [AdminController::class, 'index'])->name('DashboardAdmin');
