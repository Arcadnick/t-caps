<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\CapsuleController;
use App\Http\Controllers\RequestController;
use App\Http\Controllers\RedirectDevelopedCapsuleController;
use App\Models\Page;

// Главная страница
Route::get('/', [PageController::class, 'index'])->name('welcome');

// Все капсулы
Route::get('/capsules-page', [PageController::class, 'capsules'])->name('capsules');

// Автоответы
Route::get('/auto-response-page', [PageController::class, 'autoResponse'])->name('auto-response');

// Лендинг капсулы
Route::get('/landing', [PageController::class, 'landing'])->name('landing');

// Партнеры
Route::get('/partners-page', [PageController::class, 'partners'])->name('partners');

// Консультация
Route::get('/consultation-page', [PageController::class, 'consultation'])->name('consultation');

// Логин
Route::get('/login', [PageController::class, 'login'])->name('login');

//Route::get('/terms-and-conditions', [PageController::class, 'termsandconditions'])->name('termsandconditions');

//Route::get('/privacy-policy', [PageController::class, 'privacypolicy'])->name('privacypolicy');

Route::get('/privacy-policy', function () {
    $page = Page::where('slug', 'privacy-policy')->firstOrFail();
    return view('privacy-policy', ['content' => $page->content]);
})->name('privacypolicy');

Route::get('/terms-and-conditions', function () {
    $page = Page::where('slug', 'terms-and-conditions')->firstOrFail();
    return view('terms-and-conditions', ['content' => $page->content]);
})->name('termsandconditions');

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

Route::get('/capsule-in-development/{slug}', [CapsuleController::class, 'showDefault'])->name('capsule.default');

Route::get('/develop-generated-capsule', [PageController::class, 'developGeneratedCapsule'])->name('develop-generated-capsule');

//Route::get('/developed-capsule-page',[PageController::class, 'developedCapsulePage'])->name('developed-capsule-page');

Route::get('/redirect-to-developed/{id}', [RedirectDevelopedCapsuleController::class, 'handle'])->name('redirect-developed');

Route::get('/developed-capsule-page', [RedirectDevelopedCapsuleController::class, 'developedCapsulePage'])->name('developed-capsule-page');

Route::get('/talkinghead', [RedirectDevelopedCapsuleController::class, 'talkingHead'])->name('talkinghead');

require __DIR__.'/auth.php';
