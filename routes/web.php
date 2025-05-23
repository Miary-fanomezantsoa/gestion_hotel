<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EtageController;
use App\Http\Controllers\ChambreController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\RestaurantController;
use App\Http\Controllers\PersonnelController;

Route::get('/', [DashboardController::class, 'index'])->name('dashboard');


Route::resource('etages', EtageController::class);
Route::resource('chambres', ChambreController::class);

Route::get('/', function () {
    return view('welcome');
});

Route::resource('clients', ClientController::class);
Route::resource('restaurants', RestaurantController::class);
Route::resource('personnels', PersonnelController::class);
Route::resource('reservations', ReservationEvenementController::class);
Route::resource('salles', SalleController::class);
