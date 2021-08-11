<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;
use App\Http\Controllers\HomeController;


/////////////////
// Auth Routes //
/////////////////
require __DIR__ . '/auth.php';


/////////////////
// Open Routes //
/////////////////

// Wrong way: only Ric
Route::get('/wrong-way', function () {
    return view('service.onlyric');
})->name('onlyric');
// Home
Route::get('/', function () {
    return view('home.index');
})->name('home');
// Apod
Route::get('/home/getApod', [HomeController::class, 'getApod']);


////////////////
// Ric Routes //
////////////////

// Root Panel
Route::get('/boss', function () {
    return view('boss.index');
})->middleware(['ric'])->name('boss');

// Artisan
Route::get('/boss/clear-cache', function () {
    Artisan::call('cache:clear');
    Artisan::call('route:clear');
    Artisan::call('config:clear');
    Artisan::call('view:clear');
    return "All cache is cleared";
})->middleware(['ric']);
Route::get('/boss/unlock', [BossController::class, 'unlockSite'])->middleware('ric');
Route::get('/boss/bossdo/{command}', [BossController::class, 'runArtisan'])->middleware('ric');