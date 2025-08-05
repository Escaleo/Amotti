<?php

use Illuminate\Support\Facades\Route;
use Livewire\Volt\Volt;

use App\Livewire\ContactForm;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::middleware(['auth'])->group(function () {
    Route::redirect('settings', 'settings/profile');

    Volt::route('settings/profile', 'settings.profile')->name('settings.profile');
    Volt::route('settings/password', 'settings.password')->name('settings.password');
    Volt::route('settings/appearance', 'settings.appearance')->name('settings.appearance');
});

Route::view('/', 'pages.index')->name('home');
Route::view('/plans', 'pages.plans')->name('plans');
Route::view('/products/voice-virtual-agents', 'pages.products.voice-virtual-agents')->name('products.voice-virtual-agents');
Route::view('/products/intelligent-chatbots', 'pages.products.intelligent-chatbots')->name('products.intelligent-chatbots');
Route::get('/contact', ContactForm::class)->name('contact');

require __DIR__.'/auth.php';
