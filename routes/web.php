<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\MasterDataUsahaPariwisataController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DataEkrafController;
use App\Http\Controllers\PenggunaController;
use App\Http\Controllers\SubsektorController;
use App\Http\Controllers\RegionController;
use App\Http\Controllers\BiayaProduksiController;
use App\Http\Controllers\OmzetController;
use App\Http\Controllers\PajakController;
use App\Http\Controllers\PelatihanController;
use App\Http\Controllers\PelakuWisataController;
use App\Http\Controllers\FrontController;

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
Route::get('/', [FrontController::class, 'index'])->name('home');
Route::get('/list-subsektor/{id}', [FrontController::class, 'listSubsektor'])->name('list.subsektor');

Route::group(['middleware' => 'auth'], function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    Route::group(['prefix' => 'master'], function () {
        Route::resource('jenis_usaha', MasterDataUsahaPariwisataController::class);
        Route::resource('ekraf', DataEkrafController::class);
        Route::resource('subsektor', SubsektorController::class);
        Route::resource('pengguna', PenggunaController::class);
        Route::resource('biaya-produksi', BiayaProduksiController::class);
        Route::resource('omzet', OmzetController::class);
        Route::resource('pajak', PajakController::class);
        Route::resource('pelatihan', PelatihanController::class);
    });
    Route::group(['prefix' => 'pelaku-wisata', 'as' => 'pelaku.'], function(){
        Route::resource('pelaku-wisata', PelakuWisataController::class);
        Route::get('/biaya/list', [BiayaProduksiController::class, 'biaya'])->name('biaya.list');
        Route::get('/omzet/list', [OmzetController::class, 'omzet'])->name('omzet.list');
        Route::get('/pajak/list', [PajakController::class, 'pajak'])->name('pajak.list');
    });
    Route::get('kelurahan', [RegionController::class, 'kelurahan'])->name('kelurahan');
    Route::get('/biaya/list', [BiayaProduksiController::class, 'biaya'])->name('biaya.list');
    Route::get('/omzet/list', [OmzetController::class, 'omzet'])->name('omzet.list');
    Route::get('/pajak/list', [PajakController::class, 'pajak'])->name('pajak.list');
    Route::get('/pelatihan/list', [PelatihanController::class, 'pelatihan'])->name('pelatihan.list');
});
