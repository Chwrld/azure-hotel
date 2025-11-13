<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GuestController;

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

// Home page
Route::get('/', [GuestController::class, 'index'])->name('home');

// Booking routes
Route::post('/bookings', [GuestController::class, 'storeBooking'])->name('bookings.store');

// 404 fallback
Route::fallback(function () {
    return view('pages.not-found-new');
});
