<?php

use Illuminate\Support\Facades\Route;
use Livewire\Volt\Volt;

use App\Http\Controllers\PlansController;
use App\Http\Controllers\ReferedController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\PartnerController;
use App\Http\Controllers\TiiBotController;
use App\Http\Controllers\TiicAllController;

Route::fallback(function () {
    return redirect()->route('home');
});
Route::get('/', [IndexController::class, 'index'])->name('home');
Route::get('/plans', [PlansController::class, 'index'])->name('plans.index');
Route::get('/refered', [ReferedController::class, 'index'])->name('referred.index');
Route::get('/partners', [PartnerController::class, 'index'])->name('partners.index');
Route::get('/tiibot', [TiiBotController::class, 'index'])->name('tiibot.index');
Route::get('/tiicall', [TiiCallController::class, 'index'])->name('tiicall.index');
Route::get('/contact', [ContactController::class, 'index'])->name('contact.index');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::middleware(['auth'])->group(function () {
    Route::redirect('settings', 'settings/profile');
    Volt::route('settings/profile', 'settings.profile')->name('settings.profile');
    Volt::route('settings/password', 'settings.password')->name('settings.password');
    Volt::route('settings/appearance', 'settings.appearance')->name('settings.appearance');
});

require __DIR__ . '/auth.php';
