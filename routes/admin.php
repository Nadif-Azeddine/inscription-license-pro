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
Route::group(['prefix' => '/dashboard', 'middleware' => ['auth', 'set-locale']], function () {
    Route::get('/', [AdminController::class, 'index'])->name('admin');
    Route::get('/fetch-specialites', [AdminController::class, 'fetchSpecialites'])->name('fetchSpecialites');
    Route::get('/licences', [AdminController::class, 'Listlicence'])->name('licences');
    Route::get('/condidat', [AdminController::class, 'ListCondudates'])->name('condidats');
    Route::get('/inscriptions', [AdminController::class, 'ListInsription'])->name('inscriptions');
    Route::put('/inscriptions/{id}', [AdminController::class, 'updateInscription'])->name('updateInscription');
    Route::delete('/inscriptions/{id}', [AdminController::class, 'DELETEInscription'])->name('delete-inscription');
    Route::delete('/licences/{id}', [AdminController::class, 'supprimerLicence'])->name('supprimerLicence');
    Route::delete('/users/{id}', [AdminController::class, 'supprimerUser'])->name('supprimerUsers');
    Route::get('/users', [AdminController::class, 'listUsers'])->name('Users');
    Route::get('/xmlusers', [XMLController::class, 'listUsers'])->name('XMLUsers');
    Route::put('/licences/{id}', [AdminController::class, 'updateLicence'])->name('updateLicence');
    Route::put('/xmlusers/{id}', [XMLController::class, 'editUser'])->name('update-XMLUsers');
    Route::delete('/xmlusers/{id}', [XMLController::class, 'deleteUser'])->name('delete-XMLUsers');
    Route::get('/xmllicence', [XMLController::class, 'Listlicence'])->name('XMLlicences');
    Route::put('/xmllicence/{licenceId}', [XMLController::class, 'editLicence'])->name('update-XMLlicence');
    Route::delete('/xmllicence/{licenceId}', [XMLController::class, 'deletelicence'])->name('delete-XMLlicence');
    Route::get('/XMLinscriptions', [XMLController::class, 'listInscriptions'])->name('XMLinscriptions');
    Route::delete('/XMLinscriptions/{id}', [XMLController::class, 'deleteinscription'])->name('delete-deleteinscription');
    Route::put('/XMLinscriptions/{id}', [XMLController::class, 'editinscription'])->name('update-inscription');
});

