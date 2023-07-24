<?php

use App\Http\Controllers\Api\V1\EmployeeController;
use App\Http\Controllers\Api\V1\FilialController;
use Illuminate\Support\Facades\Route;

Route::apiResource('filials', FilialController::class)->except('update', 'destroy');
Route::apiResource('filials.employees', EmployeeController::class)->only('store');
