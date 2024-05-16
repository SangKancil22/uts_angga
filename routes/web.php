<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PenyewaController;

Route::get('/combo', function () {
    return view('layouts.app');
});
Route::get('/guest', function () {
    return view('layouts.guest');
});


Route::middleware(['auth'])->group(function () {
    Route::get('/', [DashboardController::class, 'index'])->name('penyewas');
    Route::resource('penyewa', PenyewaContoller::class)->except(['show']);

});

