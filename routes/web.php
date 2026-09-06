<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MuttonController;

Route::get('/', [MuttonController::class, 'index'])->name('home');
Route::get('/menu', [MuttonController::class, 'menu'])->name('menu');
Route::get('/gallery', [MuttonController::class, 'gallery'])->name('gallery');
Route::get('/contact', [MuttonController::class, 'contact'])->name('contact');
Route::post('/contact', [MuttonController::class, 'sendContact'])->name('contact.send');