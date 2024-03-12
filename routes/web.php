<?php

use App\Http\Controllers\EventController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\TicketController;

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

Route::get('/', [HomeController::class, 'index'])->middleware(['auth', 'verified'])->name('home');

Route::get('/events', [EventController::class, 'events'])->name('events');
Route::get('/search', [EventController::class, 'search']);
Route::get('/pages/overview/{id}', [EventController::class, 'overview'])->name('events.overview');
Route::post('/events/{eventId}/reserve', [ReservationController::class, 'reserve'])->name('events.reserve');

Route::get('/dashboard', function () {
    $user = Auth::user();

    if ($user && $user->hasAnyRole(['Administrator', 'Organizer'])) {
        return view('dashboard');
    }

    abort(403, 'Unauthorized action.');
})->middleware(['auth', 'verified'])->name('dashboard');



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';

Route::prefix('admin')->middleware(['auth', 'role:Administrator'])->group(function () {
    Route::resource('categories', CategoryController::class);
    Route::get('events', [EventController::class, 'manage'])->name('events.manage');
    Route::post('events/{id}/accept', [EventController::class, 'accept'])->name('events.accept');
    Route::post('events/{id}/reject', [EventController::class, 'reject'])->name('events.reject');
    Route::get('users', [UserController::class, 'index'])->name('users.index');
    Route::post('/users/{user}/block', [UserController::class, 'block'])->name('users.block');
    Route::put('/users/{user}/unblock', [UserController::class, 'unblock'])->name('users.unblock');

});

Route::prefix('organizer')->middleware(['auth', 'role:Organizer'])->group(function () {
    Route::resource('events', EventController::class);
    Route::get('reservations', [ReservationController::class, 'index'])->name('reservations.index');
    Route::post('reservations/{id}/confirm', [ReservationController::class, 'confirm'])->name('reservations.confirm');
    Route::post('reservations/{id}/cancel', [ReservationController::class, 'cancel'])->name('reservations.cancel');
});

Route::get('/download-ticket/{reservationId}', [TicketController::class, 'downloadTicket'])->name('download.ticket');