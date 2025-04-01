<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

//Route::get('/', function () {
//    return view('index');
//});

// Главная страница
Route::get('/', [PageController::class, 'index'])->name('welcome');

// Все капсулы
Route::get('/capsules-page', [PageController::class, 'capsules'])->name('capsules');

// Автоответы
Route::get('/auto-response-page', [PageController::class, 'autoResponse'])->name('auto-response');

// Капсула в разработке
Route::get('/capsule-in-development', [PageController::class, 'capsuleInDevelopment'])->name('capsule-in-development');

// Лендинг капсулы
Route::get('/landing', [PageController::class, 'landing'])->name('landing');

// Партнеры
Route::get('/partners-page', [PageController::class, 'partners'])->name('partners');

// Консультация
Route::get('/consultation-page', [PageController::class, 'consultation'])->name('consultation');

// Логин
Route::get('/login', [PageController::class, 'login'])->name('login');
