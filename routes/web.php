<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

// Redirect root to dashboard (or login if not authenticated)
Route::get('/', function () {
    return redirect()->route('dashboard');
});

// Dashboard — requires authentication
Route::get('/dashboard', [DashboardController::class, 'index'])
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

// Pages group — requires authentication
Route::middleware('auth')->group(function () {
    // Profile pages
    Route::get('/pages/profile', [PageController::class, 'profile'])->name('pages.profile');
    Route::get('/pages/blank', [PageController::class, 'blank'])->name('pages.blank');

    // UI component pages
    Route::get('/ui/buttons', [PageController::class, 'buttons'])->name('ui.buttons');
    Route::get('/ui/forms', [PageController::class, 'forms'])->name('ui.forms');
    Route::get('/ui/cards', [PageController::class, 'cards'])->name('ui.cards');
    Route::get('/ui/typography', [PageController::class, 'typography'])->name('ui.typography');
    Route::get('/icons/feather', [PageController::class, 'icons'])->name('icons.feather');

    // Charts & Maps
    Route::get('/charts/chartjs', [PageController::class, 'charts'])->name('charts.chartjs');
    Route::get('/maps/google', [PageController::class, 'maps'])->name('maps.google');

    // Breeze profile management
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
