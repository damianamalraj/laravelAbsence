<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AbsenceController;

Route::get('/', function () {
    return view('absence');
});

Route::get('/csrf-token', [AbsenceController::class, 'csrf']);

Route::post('/absence', [AbsenceController::class, 'store']);