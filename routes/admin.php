<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\XMLController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\LicenceController;
use App\Http\Controllers\admin\AdminController;

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

// admin routes
Route::group(['prefix' => '/dashboard', 'middleware' => ['auth']], function () {
    Route::get('/', [AdminController::class, 'index'])->name('admin');
    Route::get('/fetch-specialites', [AdminController::class, 'fetchSpecialites'])->name('fetchSpecialites');
    Route::get('/licences', [AdminController::class, 'Listlicence'])->name('licences');
    Route::delete('/licences/{id}', [AdminController::class, 'supprimerLicence'])->name('supprimerLicence');
    Route::delete('/users/{id}', [AdminController::class, 'supprimerUser'])->name('supprimerUsers');
    Route::get('/users', [AdminController::class, 'listUsers'])->name('Users');
    Route::get('/xmlusers', [XMLController::class, 'listUsers'])->name('XMLUsers');
    Route::put('/licences/{id}', [AdminController::class, 'updateLicence'])->name('updateLicence');
    Route::delete('/xmlusers/{id}', [XMLController::class, 'deleteUser'])->name('delete-XMLUsers');
    Route::get('/xmllicence', [XMLController::class, 'Listlicence'])->name('XMLlicences');
    Route::put('/xmllicence/{licenceId}', [XMLController::class, 'editLicence'])->name('update-XMLlicence');
    Route::delete('/xmllicence/{licenceId}', [XMLController::class, 'deletelicence'])->name('delete-XMLlicence');
    Route::get('/XMLinscriptions', [XMLController::class, 'listInscriptions'])->name('XMLinscriptions');
    Route::delete('/XMLinscriptions/{id}', [XMLController::class, 'deleteinscription'])->name('delete-deleteinscription');
    Route::put('/XMLinscriptions/{id}', [XMLController::class, 'editinscription'])->name('update-inscription');
});

