<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CountryController;
use App\Http\Controllers\HousingController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');

// Authentification
Route::get('/login', [AuthController::class, 'login'])->name('auth.login');
Route::post('/login', [AuthController::class, 'doLogin']);

Route::get('/register', [AuthController::class, 'register'])->name('auth.register');
Route::post('/register', [AuthController::class, 'doRegister'])->name('auth.doRegister');

Route::delete('/logout', [AuthController::class, 'logout'])->name('auth.logout');

// Users
Route::get('/user/index', [UserController::class, 'index'])->name('user.index')->middleware('auth');

Route::get('/dashboard', [UserController::class, 'dashboard'])->name('user.dashboard')->middleware('auth');

Route::get('/user/create', [UserController::class, 'create'])->name('user.create');
Route::post('user/create', [UserController::class, 'store']);

Route::get('/user/edit/{user}', [UserController::class, 'edit'])->name('user.edit')->middleware('auth');
Route::post('/user/edit/{user}', [UserController::class, 'update'])->name('modify');;

Route::get('/user/show/{user}', [UserController::class, 'show'])->name('user.show')->middleware('auth');

Route::get('/user/list', [UserController::class, 'list'])->name('user.list')->middleware('auth');

Route::get('/user/delete/{user}', [UserController::class, 'destroy'])->name('user.destroy')->middleware('auth');

//Country
Route::get('/country/index', [CountryController::class, 'index'])->name('country.list');

Route::get('/country/create', [CountryController::class, 'create'])->name('country.create');
Route::post('/country/create', [CountryController::class, 'store'])->name('update');

Route::get('/country/edit/{country}', [CountryController::class, 'edit'])->name('country.edit');
Route::post('/country/edit/{country}', [CountryController::class, 'update'])->name('update');

Route::get('/country/destroy/{country}', [CountryController::class, 'destroy'])->name('country.destroy');

//city
Route::get('/city/index', [CountryController::class, 'index'])->name('city.list');

Route::get('/city/create', [CountryController::class, 'create'])->name('city.create');
Route::post('/city/create', [CountryController::class, 'store'])->name('update');

Route::get('/city/edit/{city}', [CountryController::class, 'edit'])->name('city.edit');
Route::post('/city/edit/{city}', [CountryController::class, 'update'])->name('update');

Route::get('/city/destroy/{city}', [CountryController::class, 'destroy'])->name('city.destroy');

// Housings
Route::get('/housing/index', [HousingController::class, 'index'])->name('housing.list')->middleware('auth');

Route::get('/housing/show/{housing}', [HousingController::class, 'show'])->name('housing.show');

Route::get('/housing/create', [HousingController::class, 'create'])->name('housing.create')->middleware('auth');
Route::post('/housing/create', [HousingController::class, 'store'])->name('update');

Route::get('/housing/edit/{housing}', [HousingController::class, 'edit'])->name('housing.edit')->middleware('auth');
Route::post('/housing/edit/{housing}', [HousingController::class, 'update'])->name('update');

Route::get('/housing/destroy/{housing}', [HousingController::class, 'destroy'])->name('housing.destroy')->middleware('auth');

Route::get('/search', [HousingController::class, 'viewSearch'])->name('view_search');
Route::post('/search', [HousingController::class, 'filter'])->name('filter');

Route::get('/show_all',  [HousingController::class, 'showAll'])->name('show_all');

// Reservation

// Categories
Route::get('/category/create', [CategoryController::class, 'create'])->name('category.create')->middleware('auth');
Route::post('/category/create', [CategoryController::class, 'store']);

Route::get('/category/edit/{category}', [CategoryController::class, 'edit'])->name('category.edit')->middleware('auth');
Route::post('/category/edit/{category}', [CategoryController::class, 'update'])->name('update');

Route::get('/category/destroy/{category}', [CategoryController::class, 'destroy'])->name('category.destroy')->middleware('auth');

Route::get('/category/index', [CategoryController::class, 'index'])->name('category.list')->middleware('auth');
