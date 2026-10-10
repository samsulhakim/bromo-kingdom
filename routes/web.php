<?php

use Illuminate\Support\Facades\Route;
use App\Models\Package;
use App\Http\Controllers\DestinationController;
use App\Models\Destination; // <-- Pastikan baris ini ada
use App\Http\Controllers\PackageController;


Route::get('/', function () {
    $packages = Package::all();
    $destinations = Destination::all();
    return view('welcome', compact('destinations', 'packages'));
});

// Route Daftar Semua Destinasi
Route::get('/destinasi', [DestinationController::class, 'index'])->name('destinations.index');


// Route Halaman Detail Destinasi
Route::get('/destinasi/{slug}', [DestinationController::class, 'show'])->name('destination.show');


// Route Daftar Semua Paket Wisata
Route::get('/paket-wisata', [PackageController::class, 'index'])->name('packages.index');

// Route Detail Paket Wisata (opsional kalau mau pakai halaman detail terpisah)
Route::get('/paket-wisata/{id}', [PackageController::class, 'show'])->name('packages.show');