<?php

use App\Http\Controllers\KampanyaController;
use App\Http\Controllers\LayoutController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IletisimController;
use App\Http\Controllers\CiftciController;
use App\Http\Controllers\UrunKategorisiController;
use App\Http\Controllers\UrunController;

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::get('/', [LayoutController::class, 'index']);
Route::get('/index', [KampanyaController::class, ''])->name('kampanyalar');
Route::get('/kampanyalar', [KampanyaController::class, 'allCampaigns'])->name('kampanyalar.all');
Route::get('/hakkimizda', [\App\Http\Controllers\HakkimizdaController::class,'index'])->name('hakkimizda');
Route::get('/ciftciler', [CiftciController::class, 'index'])->name('ciftciler');
Route::get('/ciftciler/ara', [CiftciController::class, 'ara'])->name('ciftciler.ara');
Route::get('/urunler', [UrunController::class, 'index'])->name('urunler');
Route::get('/urunler/{id}', [UrunController::class, 'show'])->name('urunler.detay');
Route::get('/kategoriler', [UrunKategorisiController::class, 'index'])->name('kategoriler.index');
Route::get('/iletisim', [IletisimController::class, 'showForm'])->name('iletisim.form');
Route::post('/iletisim', [IletisimController::class, 'submitForm'])->name('iletisim.gonder');



