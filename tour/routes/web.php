<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\ManagerController;
use App\Http\Controllers\ProgramController;
use App\Http\Controllers\CarController;
use App\Http\Controllers\HotelController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\GuideController;
use App\Http\Controllers\PriceController;
use App\Http\Controllers\TypeController;
use App\Http\Controllers\TourController;

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
Route::group(['prefix' => 'programs'], function () {
    Route::get('', [ProgramController::class, 'index'])->name('program.index');
    Route::get('create', [ProgramController::class, 'create'])->name('program.create');
    Route::post('store', [ProgramController::class, 'store'])->name('program.store');
    Route::get('edit/{program}', [ProgramController::class, 'edit'])->name('program.edit');
    Route::post('update/{program}', [ProgramController::class, 'update'])->name('program.update');
    Route::post('delete/{program}', [ProgramController::class, 'destroy'])->name('program.destroy');
    Route::get('show/{program}', [ProgramController::class, 'show'])->name('program.show');
    Route::get('pdf/{program}', [ProgramController::class, 'pdf'])->name('program.pdf');
});
Route::group(['prefix' => 'cars'], function () {
    Route::get('', [CarController::class, 'index'])->name('car.index');
    Route::get('create', [CarController::class, 'create'])->name('car.create');
    Route::post('store', [CarController::class, 'store'])->name('car.store');
    Route::get('edit/{car}', [CarController::class, 'edit'])->name('car.edit');
    Route::post('update/{car}', [CarController::class, 'update'])->name('car.update');
    Route::post('delete/{car}', [CarController::class, 'destroy'])->name('car.destroy');
    Route::get('show/{car}', [CarController::class, 'show'])->name('car.show');
});
Route::group(['prefix' => 'hotels'], function () {
    Route::get('', [HotelController::class, 'index'])->name('hotel.index');
    Route::get('create', [HotelController::class, 'create'])->name('hotel.create');
    Route::post('store', [HotelController::class, 'store'])->name('hotel.store');
    Route::get('edit/{hotel}', [HotelController::class, 'edit'])->name('hotel.edit');
    Route::post('update/{hotel}', [HotelController::class, 'update'])->name('hotel.update');
    Route::post('delete/{hotel}', [HotelController::class, 'destroy'])->name('hotel.destroy');
    Route::get('show/{hotel}', [HotelController::class, 'show'])->name('hotel.show');
});
Route::group(['prefix' => 'categories'], function () {
    Route::get('', [CategoryController::class, 'index'])->name('category.index');
    Route::get('create', [CategoryController::class, 'create'])->name('category.create');
    Route::post('store', [CategoryController::class, 'store'])->name('category.store');
    Route::get('edit/{category}', [CategoryController::class, 'edit'])->name('category.edit');
    Route::post('update/{category}', [CategoryController::class, 'update'])->name('category.update');
    Route::post('delete/{category}', [CategoryController::class, 'destroy'])->name('category.destroy');
    Route::get('show/{category}', [CategoryController::class, 'show'])->name('category.show');
});
Route::group(['prefix' => 'guides'], function () {
    Route::get('', [GuideController::class, 'index'])->name('guide.index');
    Route::get('create', [GuideController::class, 'create'])->name('guide.create');
    Route::post('store', [GuideController::class, 'store'])->name('guide.store');
    Route::get('edit/{guide}', [GuideController::class, 'edit'])->name('guide.edit');
    Route::post('update/{guide}', [GuideController::class, 'update'])->name('guide.update');
    Route::post('delete/{guide}', [GuideController::class, 'destroy'])->name('guide.destroy');
    Route::get('show/{guide}', [GuideController::class, 'show'])->name('guide.show');
});
Route::group(['prefix' => 'prices'], function () {
    Route::get('', [PriceController::class, 'index'])->name('price.index');
    Route::get('create', [PriceController::class, 'create'])->name('price.create');
    Route::post('store', [PriceController::class, 'store'])->name('price.store');
    Route::get('edit/{price}', [PriceController::class, 'edit'])->name('price.edit');
    Route::post('update/{price}', [PriceController::class, 'update'])->name('price.update');
    Route::post('delete/{price}', [PriceController::class, 'destroy'])->name('price.destroy');
    Route::get('show/{price}', [PriceController::class, 'show'])->name('price.show');
});
Route::group(['prefix' => 'types'], function () {
    Route::get('', [TypeController::class, 'index'])->name('type.index');
    Route::get('create', [TypeController::class, 'create'])->name('type.create');
    Route::post('store', [TypeController::class, 'store'])->name('type.store');
    Route::get('edit/{type}', [TypeController::class, 'edit'])->name('type.edit');
    Route::post('update/{type}', [TypeController::class, 'update'])->name('type.update');
    Route::post('delete/{type}', [TypeController::class, 'destroy'])->name('type.destroy');
    Route::get('show/{type}', [TypeController::class, 'show'])->name('type.show');
});
Route::group(['prefix' => 'tours'], function () {
    Route::get('', [TourController::class, 'index'])->name('tour.index');
    Route::get('create', [TourController::class, 'create'])->name('tour.create');
    Route::post('store', [TourController::class, 'store'])->name('tour.store');
    Route::get('edit/{tour}', [TourController::class, 'edit'])->name('tour.edit');
    Route::post('update/{tour}', [TourController::class, 'update'])->name('tour.update');
    Route::post('delete/{tour}', [TourController::class, 'destroy'])->name('tour.destroy');
    Route::get('show/{tour}', [TourController::class, 'show'])->name('tour.show');
});