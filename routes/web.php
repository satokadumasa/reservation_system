<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\Auth\LoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CalendarController;
use App\Http\Controllers\BookingController;

require __DIR__.'/auth.php';

Route::prefix('admin')->group(function () {
    Route::get('/login', [LoginController::class, 'showLoginForm'])->name('admin.login');
    Route::post('/login', [LoginController::class, 'login']);
    Route::post('/logout', [LoginController::class, 'logout'])->name('admin.logout');
    Route::middleware('auth:admin')->group(function () {
        Route::get('/dashboard', function () {
            return view('admin.dashboard');
        });
        
    });
});

Route::get('/', [HomeController::class, 'index'])->name('home.index');

Route::middleware('auth')->group(function () {
    Route::get('/calendar', [CalendarController::class, 'index'])->middleware(['auth', 'verified'])->name('calendar.index');
    Route::get("/booking/{ymd}", [BookingController::class, 'index'])->middleware(['auth', 'verified'])->name('booking.list');
    Route::get("/booking/{id}", [BookingController::class, 'show'])->middleware(['auth', 'verified'])->name('booking.show');
    Route::get("/booking/regist", [BookingController::class, 'create'])->middleware(['auth', 'verified'])->name('booking.regist');
    Route::post("/booking/regist", [BookingController::class, 'store'])->middleware(['auth', 'verified'])->name('booking.store');
    Route::get("/booking/edit/{id}", [BookingController::class, 'edit'])->middleware(['auth', 'verified'])->name('booking.edit');
    Route::put("/booking/edit", [BookingController::class, 'update'])->middleware(['auth', 'verified'])->name('booking.update');
});
