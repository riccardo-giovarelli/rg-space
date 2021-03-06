<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContactController;


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

// About me
Route::get('/about-me', function () {
    return view('aboutme.aboutme');
})->name('aboutme');

//Privacy
Route::get('/privacy', function () {
    return view('privacy.index');
})->name('privacy');

// Contact me
Route::get('/contact', [ContactController::class, 'contactShow'])->name('contactme');
Route::post('/contact', [ContactController::class, 'contactPost']);

// Apod
Route::get('/get-apod', [HomeController::class, 'getApod'])->name('getapod');

// Language
Route::get('lang/{lang}', ['as' => 'lang.switch', 'uses' => 'App\Http\Controllers\LanguageController@switchLang']);


////////////////
// Ric Routes //
////////////////

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
