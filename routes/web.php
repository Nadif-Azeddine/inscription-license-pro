<?php

use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\inscription\CandidatController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

Route::get('/local', [HomeController::class, 'local'])->name('change-local');
Route::group(['middleware' => 'set-locale'], function () {
    Auth::routes();
    Route::get('/', function () {
        return view('welcome');
    });
    // inscription
    Route::group(['prefix' => '/inscription', 'middleware' => ['auth']], function () {
        Route::get('/candidat', [CandidatController::class, 'index'])->name('candidat');
        Route::post('/candidat', [CandidatController::class, 'save'])->name('save_candidat');

        // bac
        Route::get('/bac', [CandidatController::class, 'bac'])->middleware('is_candidat')->name('bac');
        Route::post('/bac', [CandidatController::class, 'saveBac'])->middleware('is_candidat')->name('save_bac');

        // bac +2
        Route::get('/bacpd', [CandidatController::class, 'bacPd'])->middleware('is_bac')->name('bacpd');
        Route::post('/bacpd', [CandidatController::class, 'saveBacPd'])->middleware('is_bac')->name('save_bacpd');

        // choix
        Route::get('/choix', [CandidatController::class, 'choix'])->middleware('is_bacpd')->name('choix');
        Route::post('/choix', [CandidatController::class, 'saveChoix'])->middleware('is_bacpd')->name('save-choix');

    });
});





require_once('admin.php');

