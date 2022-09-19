<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FunnelController;
use App\Http\Controllers\MensajeController;
use App\Http\Controllers\PruebaController;

// Route::resource('funnels', FunnelController::class);

// Route::resource('mensajes', MensajeController::class);

Route::controller(FunnelController::class)->group( function () {

    Route::get('/funnels',             'index' )->name('funnels');
    
    Route::get('/funnels/{id}',             'single_show' )->name('funnel_single');

} );

Route::controller(MensajeController::class)->group( function () {

    Route::get('/funnels/{id}/mensaje/create',             'create' )->name('mensaje_create');

    Route::post('/funnels/store',             'store' )->name('mensaje_store');

} );

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

