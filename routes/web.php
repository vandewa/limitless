<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\MasterDataUsahaPariwisataController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DataEkrafController;
use App\Http\Controllers\PenggunaController;
use App\Http\Controllers\SubsektorController;
use App\Http\Controllers\RegionController;

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

Auth::routes();

Route::group(['middleware' => 'auth'], function () {
    Route::get('/', [DashboardController::class, 'index']);

    Route::group(['prefix' => 'master'], function () {
        Route::resource('jenis_usaha', MasterDataUsahaPariwisataController::class);
        Route::resource('ekraf', DataEkrafController::class);
        Route::resource('subsektor', SubsektorController::class);
        Route::resource('pengguna', PenggunaController::class);
    });
    Route::get('kelurahan', [RegionController::class, 'kelurahan'])->name('kelurahan');
});
