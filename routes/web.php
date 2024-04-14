<?php

use App\Http\Controllers\AlternatifController;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\KriteriaController;
use App\Http\Controllers\PenilaianController;
use App\Http\Controllers\TopsisController;
use App\Http\Controllers\SubkriteriaController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;


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

Route::group(['middleware'=>['guest']], function(){
    Route::get('login', [UserController::class, 'indexLogin'])->name('login');
    Route::post('login', [UserController::class, 'login'])->name('auth.login');
});

Route::group(['middleware'=>['auth']], function(){
    Route::get('dash', [UserController::class, 'indexDash']);

    Route::resource('alternatif', AlternatifController::class)->except('edit', 'destroy');
    Route::get('alternatif/destroy/{id}', [AlternatifController::class, 'destroy']);
    Route::post('alternatif/edit', [AlternatifController::class, 'editalternatif'])->name('alternatif.edit');

    Route::resource('kriteria', KriteriaController::class)->except('edit', 'destroy');
    Route::get('kriteria/destroy/{id}', [KriteriaController::class, 'destroy']);
    Route::post('kriteria/edit', [KriteriaController::class, 'editkriteria'])->name('kriteria.edit');

    Route::resource('subkriteria', SubkriteriaController::class)->except('edit', 'destroy');
    Route::get('subkriteria/destroy/{id}', [SubkriteriaController::class, 'destroy']);
    Route::post('subkriteria/edit', [SubkriteriaController::class, 'editsubkriteria'])->name('subkriteria.edit');

    Route::resource('user', UserController::class)->except('destroy', 'edit', 'show', 'update', 'store');
    Route::post('user/store', [UserController::class, 'store']);
    Route::post('user/edit', [UserController::class, 'edit']);
    Route::get('user/destroy/{id}', [UserController::class, 'destroy']);

    Route::resource('penilaian', PenilaianController::class)->except(['destroy', 'edit', 'store', 'update']);
    Route::post('penilaian/edit', [PenilaianController::class, 'editpenilaian']);

    Route::get('logout', [UserController::class, 'logout'])->name('auth.logout');

    Route::get('topsis', [TopsisController::class, 'topsis'])->name('topsis.index');

    Route::get('hasil', [TopsisController::class, 'indexHasil']);
    Route::get('hasiluser', [TopsisController::class, 'hasilUser']);
});

Route::get('/', function () {
    return redirect()->intended('/dash');
});
