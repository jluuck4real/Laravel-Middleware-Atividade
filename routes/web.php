<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PortalController;

Route::get('/', [PortalController::class, 'index'])
    ->name('inicio');

Route::get('/painel', [PortalController::class, 'painel'])
    ->name('painel');
