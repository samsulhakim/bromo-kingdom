<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Package;

class PackageController extends Controller
{
    // Menampilkan semua daftar paket wisata
    public function index()
    {
        $packages = Package::all();
        return view('packages-index', compact('packages'));
    }

    // Menampilkan detail paket wisata
    public function show($id)
    {
        $package = Package::findOrFail($id);
        return view('package-detail', compact('package'));
    }
}