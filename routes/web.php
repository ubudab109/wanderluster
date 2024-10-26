<?php

use App\Http\Controllers\MenuController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.home');
})->name('home');

Route::get('/transportation', [MenuController::class, 'transportation'])->name('transportation');
Route::get('/grouptour', [MenuController::class, 'groupTour'])->name('grouptour');
Route::get('/personalizetrip', [MenuController::class, 'personalizetrip'])->name('personalizetrip');
Route::get('/eventtrip', [MenuController::class, 'eventtrip'])->name('eventtrip');
Route::get('/destination', [MenuController::class, 'destination'])->name('destination');
Route::get('/tourtravel', [MenuController::class, 'tourtravel'])->name('tourtravel');
Route::get('/contact', [MenuController::class, 'contact'])->name('contact');
Route::get('/exhibition', [MenuController::class, 'exhibition'])->name('exhibition');