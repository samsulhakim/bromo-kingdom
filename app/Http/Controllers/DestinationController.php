<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Destination;

class DestinationController extends Controller
{
    // Menampilkan semua daftar destinasi
    public function index()
    {
        $destinations = Destination::all();
        return view('destinations-index', compact('destinations'));
    }

    // Menampilkan halaman detail berdasarkan slug
    public function show($slug)
    {
        $destination = Destination::where('slug', $slug)->firstOrFail();
        $relatedDestinations = Destination::where('slug', '!=', $slug)->take(3)->get();

        return view('destination-detail', compact('destination', 'relatedDestinations'));
    }
}