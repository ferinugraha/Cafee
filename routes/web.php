<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\TransaksiController;
use App\Http\Controllers\RegisterController;
use Illuminate\Auth\Events\Logout;
use App\Models\Transaksi;


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
    // return view('welcome');
    return view('login.index');
});


    Route::resource('login', LoginController::class);
Route::get('/logout', [LoginController::class, 'logout']);



    Route::middleware('login')->group(function() {
    Route::get('/admin', function() {
        return view('admin.index');
    })->middleware('admin')->name('admin.index');
    // Route::resource('admin/userList', RegisterController::class)->middleware('admin');
    Route::resource('admin/register', RegisterController::class)->middleware('admin');

    
    Route::get('/manager', function() {
        return view('manager.index');
    })->middleware('manager')->name('manager.index');
    Route::resource('manager/menu', MenuController::class)->middleware('manager');
    Route::get('/manager/laporan', function() {
        return view('manager.laporan.index');
    })->middleware('manager');
    Route::get('/get-transaksi', [TransaksiController::class, 'filtering']); 



    // route untuk dashboard User
    Route::get('/user', function() {
        return view('user.index');
    })->middleware('user')->name('user.index');
    
    Route::get('/user', function() {
        return view('user.index');
    })->middleware('user')->name('user.index');
    Route::resource('user/pembelian', TransaksiController::class)->middleware('user');
});