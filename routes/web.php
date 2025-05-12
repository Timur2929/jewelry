<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;



Route::get('/', [HomeController::class, 'index'])->name('glavnaya');
Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/selected', [HomeController::class, 'selected'])->name('selected');
Route::get('/catalog', [HomeController::class, 'catalog'])->name('catalog');
Route::get('/catalog2', [HomeController::class, 'catalog2'])->name('catalog2');
Route::get('/catalog3', [HomeController::class, 'catalog3'])->name('catalog3');
Route::get('/gifts', [HomeController::class, 'gifts'])->name('gifts');






Route::middleware(['auth', 'admin'])->prefix('admin')->name('admin.')->group(function () {
    // Existing admin routes...
    
    Route::get('/monitoring', [App\Http\Controllers\Admin\MonitoringController::class, 'dashboard'])->name('monitoring.dashboard');
    Route::get('/monitoring/logs', [App\Http\Controllers\Admin\MonitoringController::class, 'logs'])->name('monitoring.logs');
    Route::get('/monitoring/activities', [App\Http\Controllers\Admin\MonitoringController::class, 'activities'])->name('monitoring.activities');
    Route::get('/monitoring/performance', [App\Http\Controllers\Admin\MonitoringController::class, 'performance'])->name('monitoring.performance');
});

