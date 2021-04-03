<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\ManagerController;

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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['prefix' => 'clients'], function () {
    Route::get('', [ClientController::class, 'index'])->name('client.index');
    Route::get('create', [ClientController::class, 'create'])->name('client.create');
    Route::post('store', [ClientController::class, 'store'])->name('client.store');
    Route::get('edit/{client}', [ClientController::class, 'edit'])->name('client.edit');
    Route::post('update/{client}', [ClientController::class, 'update'])->name('client.update');
    Route::post('delete/{client}', [ClientController::class, 'destroy'])->name('client.destroy');
    Route::get('show/{client}', [ClientController::class, 'show'])->name('client.show');
});
Route::group(['prefix' => 'managers'], function () {
    Route::get('', [ManagerController::class, 'index'])->name('manager.index');
    Route::get('create', [ManagerController::class, 'create'])->name('manager.create');
    Route::post('store', [ManagerController::class, 'store'])->name('manager.store');
    Route::get('edit/{manager}', [ManagerController::class, 'edit'])->name('manager.edit');
    Route::post('update/{manager}', [ManagerController::class, 'update'])->name('manager.update');
    Route::post('delete/{manager}', [ManagerController::class, 'destroy'])->name('manager.destroy');
    Route::get('show/{manager}', [ManagerController::class, 'show'])->name('manager.show');
});