<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FunnelController;
use App\Http\Controllers\MensajeController;

Route::resource('funnels', FunnelController::class)->except('show');

Route::resource('mensajes', MensajeController::class)->except('show');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
