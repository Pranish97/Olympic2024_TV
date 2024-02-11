<?php

use App\Http\Controllers\CountryController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DashboardController;

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

Route::controller(UserController::class)->group(function () {
    Route::get('/register', 'register');
    Route::post('/create/user', 'registerUser')->name('registerUser');
    Route::get('/login', 'login')->name('login');
    Route::post('/login-user', 'loginUser')->name('loginUser');
});


Route::controller(DashboardController::class)->group(function () {
    Route::get('/dashboard', 'dashboard')->name('dashboard');
    Route::get('/logout', 'logout')->name('logout');
    Route::get('/countries/create', 'country')->name('countries.create');
    Route::post('/countries/store', 'addCountry')->name('countries.store');
    Route::get('/links/create', 'link')->name('link.create');
    Route::post('/links/store', 'addLink')->name('link.store');
    Route::get('/redirect-to-country/{countryId}', 'redirectToCountry')->name('redirect.to.country');
});
