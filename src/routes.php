<?php

use Illuminate\Support\Facades\Route;
use Teggoin\HealthCheck\Http\Controllers\HealthCheckController;

Route::prefix('health')->group(function () {
    Route::get('hc', [HealthCheckController::class, 'checkDatabaseConnection']);
});
