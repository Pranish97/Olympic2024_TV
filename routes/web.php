<?php

use App\Http\Controllers\CountryController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProfileController;

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
    Route::get('/data/manage', 'data')->name('data.manage');
    Route::get('/redirect-to-country/{countryId}', 'redirectToCountry')->name('redirect.to.country');
});

Route::controller(AdminController::class)->group(function () {
    Route::get('/manage/countries', 'manageCountry')->name('manage.countries');
    Route::get('/countries/create', 'country')->name('countries.create');
    Route::post('/countries/store', 'addCountry')->name('countries.store');
    Route::get('/countries/{id}/edit', 'editCountry')->name('country.edit');
    Route::put('/countries/{id}', 'updateCountry')->name('country.update');
    Route::delete('/countries/{id}', 'deleteCountry')->name('country.delete');

    Route::get('/manage/links', 'manageLink')->name('manage.link');
    Route::get('/links/create', 'link')->name('link.create');
    Route::post('/links/store', 'addLink')->name('link.store');
    Route::get('/links/{id}/edit', 'editLink')->name('link.edit');
    Route::put('/links/{id}', 'updateLink')->name('link.update');
    Route::delete('/links/{id}', 'deleteLink')->name('link.delete');

    Route::get('/manage/schedule', 'manageSchedule')->name('manage.schedule');
    Route::get('/schedule/create', 'schedule')->name('schedule.create');
    Route::post('/schedule/store', 'addSchedule')->name('schedule.store');
    Route::get('/schedule/{id}/edit', 'editSchedule')->name('schedule.edit');
    Route::put('/schedule/{id}', 'updateSchedule')->name('schedule.update');
    Route::delete('/schedule/{id}', 'deleteSchedule')->name('schedule.delete');


    Route::get('/manage/news', 'manageNews')->name('manage.news');
    Route::get('/news/create', 'news')->name('news.create');
    Route::post('/news/store', 'addNews')->name('news.store');
    Route::get('/news/{id}/edit', 'editNews')->name('news.edit');
    Route::put('/news/{id}', 'updateNews')->name('news.update');
    Route::delete('/news/{id}', 'deleteNews')->name('news.delete');
});

Route::controller(ProfileController::class)->group(function () {
    Route::get('/profile', 'profile')->name('profile');
    Route::put('/update-profile/{id}', 'updateProfile')->name('update.profile');
});
