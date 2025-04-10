<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\CapsuleController;
use App\Http\Controllers\RequestController;

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

Route::get('/terms-and-conditions', [PageController::class, 'termsandconditions'])->name('termsandconditions');

Route::get('/privacy-policy', [PageController::class, 'privacypolicy'])->name('privacypolicy');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    //Route::get('/admin', [AdminController::class, 'index']);
});

Route::get('/capsules-page', [CapsuleController::class, 'index'])->name('capsules');

Route::post('/requests', [RequestController::class, 'store'])->name('requests.store');


require __DIR__.'/auth.php';
