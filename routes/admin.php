<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\LicenceController;
use App\Http\Controllers\admin\AdminController;
use App\Http\Controllers\UsersController;

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
    Route::get('/licences', [AdminController::class, 'Listlicence'])->name('licences');
    Route::get('/users', [AdminController::class, 'listUsers'])->name('Users');
});

