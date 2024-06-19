<?php

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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/', function () {
    return view('welcome');
});

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionsController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TarifController;




Route::get('/', function () {return redirect('sign-in');})->middleware('guest');
Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth')->name('dashboard');
Route::get('sign-up', [RegisterController::class, 'create'])->middleware('guest')->name('register');
Route::post('sign-up', [RegisterController::class, 'store'])->middleware('guest');
Route::get('sign-in', [SessionsController::class, 'create'])->middleware('guest')->name('login');
Route::post('sign-in', [SessionsController::class, 'store'])->middleware('guest');
Route::post('verify', [SessionsController::class, 'show'])->middleware('guest');
Route::post('reset-password', [SessionsController::class, 'update'])->middleware('guest')->name('password.update');
Route::get('verify', function () {
	return view('sessions.password.verify');
})->middleware('guest')->name('verify');
Route::get('/reset-password/{token}', function ($token) {
	return view('sessions.password.reset', ['token' => $token]);
})->middleware('guest')->name('password.reset');

Route::post('sign-out', [SessionsController::class, 'destroy'])->middleware('auth')->name('logout');
Route::get('profile', [ProfileController::class, 'create'])->middleware('auth')->name('profile');
Route::post('user-profile', [ProfileController::class, 'update'])->middleware('auth');
Route::group(['middleware' => 'auth'], function () {
	Route::get('billing', function () {
		return view('pages.billing');
	})->name('billing');
	Route::get('tables', function () {
		return view('pages.tables');
	})->name('tables');
	Route::get('rtl', function () {
		return view('pages.rtl');
	})->name('rtl');
	Route::get('virtual-reality', function () {
		return view('pages.virtual-reality');
	})->name('virtual-reality');
	Route::get('notifications', function () {
		return view('pages.notifications');
	})->name('notifications');
	Route::get('static-sign-in', function () {
		return view('pages.static-sign-in');
	})->name('static-sign-in');
	Route::get('static-sign-up', function () {
		return view('pages.static-sign-up');
	})->name('static-sign-up');
	Route::get('user-management', function () {
		return view('pages.laravel-examples.user-management');
	})->name('user-management');
	Route::get('user-profile', function () {
		return view('pages.laravel-examples.user-profile');
	})->name('user-profile');
	Route::get('user-management', [DashboardController::class, 'userManagement'])->name('user-management');
	Route::get('user-management/create', [UserController::class, 'create'])->name('user.create');
	Route::post('user-management', [UserController::class, 'store'])->name('user.store');
    Route::get('user-management/{id}/edit', [UserController::class, 'edit'])->name('user.edit');
	Route::post('user-management/{id}/update', [UserController::class, 'update'])->name('user.update');
	Route::delete('user-management/{id}', [UserController::class, 'destroy'])->name('user.destroy');

	// les routes de la page d'accueil
	Route::get('/', [HomeController::class, 'index'])->name('home');

	//Tarif
	Route::get('/tarifs', [TarifController::class, 'index'])->name('tarifs.index');
	Route::get('tarifs/create', [TarifController::class, 'create'])->name('tarifs.create');
	Route::post('tarifs', [TarifController::class, 'store'])->name('tarifs.store');


    Route::get('tickets', [TicketController::class, 'index'])->name('tickets.index');
    Route::get('tickets/create', [TicketController::class, 'create'])->name('tickets.create');
    Route::post('tickets/store', [TicketController::class, 'store'])->name('tickets.store');
    Route::get('tickets/edit/{id}', [TicketController::class, 'edit'])->name('tickets.edit');
    Route::post('tickets/update/{id}', [TicketController::class, 'update'])->name('tickets.update');
    Route::delete('tickets/delete/{id}', [TicketController::class, 'delete'])->name('tickets.delete');


});
