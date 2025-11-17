<?php

use App\Http\Controllers\BienesController;
use App\Http\Controllers\ComunidadController;
use App\Http\Controllers\PdfController;
use App\Livewire\Settings\Appearance;
use App\Livewire\Settings\Password;
use App\Livewire\Settings\Profile;
use App\Livewire\Settings\TwoFactor;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Laravel\Fortify\Features;


Route::get('/', function () {
    return Auth::check()
        ? redirect()->route('dashboard')
        : redirect()->route('login');
});

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::middleware(['auth'])->group(function () {
    Route::redirect('settings', 'settings/profile');

    Route::get('settings/profile', Profile::class)->name('settings.profile');
    Route::get('settings/password', Password::class)->name('settings.password');
    Route::get('settings/appearance', Appearance::class)->name('settings.appearance');

    Route::get('/bienes', [BienesController::class, 'index'])->name('bienes.index');
    Route::get('/bienes/create', [BienesController::class, 'create'])->name('bienes.create');
    Route::post('/bienes', [BienesController::class, 'store'])->name('bienes.store');
    Route::delete('/bienes/destroy/{id}', [BienesController::class, 'destroy'])->name('bienes.destroy');
    Route::get('/bienes/edit/{id}', [BienesController::class, 'edit'])->name('bienes.edit');
    Route::put('bienes/update/{id}', [BienesController::class, 'update'])->name('bienes.update');
    Route::get('inventario-pdf/{id}', [PdfController::class, 'generarPDF'])->name('inventario.pdf');

    Route::middleware(['rol.admin:1'])->group(function () {

        Route::get('/comunidad', [ComunidadController::class, 'index'])->name('comunidad.index');
        Route::get('/comunidad/details/{id}', [ComunidadController::class, 'details'])->name('comunidad.details');
    });
});

require __DIR__ . '/auth.php';
