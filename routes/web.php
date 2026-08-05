<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\QuoteController;
use App\Http\Controllers\Admin;

// ─── Public Routes ────────────────────────────────────────────────────────────

Route::get('/', [HomeController::class, 'index'])->name('home');

// Blog
Route::get('/blog', [BlogController::class, 'index'])->name('blog.index');
Route::get('/blog/{slug}', [BlogController::class, 'show'])->name('blog.show');

// Contact
Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');

// Quote request (form modal on homepage & services pages)
Route::post('/quote', [QuoteController::class, 'store'])->name('quote.store');

// About & Services
Route::view('/about', 'about')->name('about');
Route::view('/services/petroleum-supply', 'services.petroleum-supply')->name('services.petroleum');
Route::view('/services/logistics', 'services.logistics')->name('services.logistics');
Route::view('/services/engineering', 'services.engineering')->name('services.engineering');
Route::view('/services/infrastructure', 'services.infrastructure')->name('services.infrastructure');

// Legal Pages
Route::view('/privacy-policy', 'legal.privacy-policy')->name('privacy');
Route::view('/cookie-policy', 'legal.cookie-policy')->name('cookies');
Route::view('/terms-of-supply', 'legal.terms-of-supply')->name('terms');
Route::view('/hse-policy', 'legal.hse-policy')->name('hse');

// ─── Admin Auth Routes (no auth guard needed) ─────────────────────────────────

Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/login', [Admin\AuthController::class, 'showLogin'])->name('login');
    Route::post('/login', [Admin\AuthController::class, 'login'])->name('login.post');
    Route::post('/logout', [Admin\AuthController::class, 'logout'])->name('logout');
});

// ─── Admin Protected Routes ───────────────────────────────────────────────────

Route::prefix('admin')->name('admin.')->middleware('admin.auth')->group(function () {

    // Dashboard
    Route::get('/', [Admin\DashboardController::class, 'index'])->name('dashboard');

    // Blog
    Route::resource('blog', Admin\BlogController::class)
        ->except(['show'])
        ->parameters(['blog' => 'blog']);

    // Messages
    Route::get('messages', [Admin\MessageController::class, 'index'])->name('messages.index');
    Route::get('messages/{message}', [Admin\MessageController::class, 'show'])->name('messages.show');
    Route::delete('messages/{message}', [Admin\MessageController::class, 'destroy'])->name('messages.destroy');

    // Quotes
    Route::get('quotes', [Admin\QuoteController::class, 'index'])->name('quotes.index');
    Route::get('quotes/{quote}', [Admin\QuoteController::class, 'show'])->name('quotes.show');
    Route::patch('quotes/{quote}', [Admin\QuoteController::class, 'update'])->name('quotes.update');
    Route::delete('quotes/{quote}', [Admin\QuoteController::class, 'destroy'])->name('quotes.destroy');

    // Testimonials
    Route::resource('testimonials', Admin\TestimonialController::class)
        ->except(['show']);

    // Settings
    Route::get('settings', [Admin\SettingController::class, 'index'])->name('settings.index');
    Route::post('settings', [Admin\SettingController::class, 'update'])->name('settings.update');
});

// ─── TEMPORARY: Run Migrations ───────────────────────────────────────────────
// ⚠️  REMOVE THIS ROUTE AFTER USE — it is publicly accessible!
Route::get('/run-migrations', function () {
    \Illuminate\Support\Facades\Artisan::call('migrate', ['--force' => true]);
    return 'Database tables created successfully!';
});
