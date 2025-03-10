<?php

namespace App\Http\Controllers;
use App\Models\Essai;
use App\Models\Berita;
use App\Models\Opini;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Show the homepage.
     */
    public function index()
    {
        $essais = Essai::latest()->get();
        $beritas = Berita::latest()->get();
        $opinis = Opini::latest()->get();
        $rekomendasi = collect()
            ->merge($essais)
            ->merge($beritas)
            ->merge($opinis)
            ->shuffle()
            ->take(10);

        return view('page.home', compact('essais', 'beritas', 'opinis', 'rekomendasi'));
    }

    public function berita()
    {
        $essais = Essai::latest()->get();
        $beritas = Berita::latest()->get();
        $opinis = Opini::latest()->get();
        $rekomendasi = collect()
            ->merge($essais)
            ->merge($beritas)
            ->merge($opinis)
            ->shuffle()
            ->take(10);

        return view('page.berita', compact('essais', 'beritas', 'opinis', 'rekomendasi'));
    }

    public function opini()
    {
        $essais = Essai::latest()->get();
        $beritas = Berita::latest()->get();
        $opinis = Opini::latest()->get();
        $rekomendasi = collect()
            ->merge($essais)
            ->merge($beritas)
            ->merge($opinis)
            ->shuffle()
            ->take(10);

        return view('page.opini', compact('essais', 'beritas', 'opinis', 'rekomendasi'));
    }

    public function essai()
    {
        $essais = Essai::latest()->get();
        $beritas = Berita::latest()->get();
        $opinis = Opini::latest()->get();
        $rekomendasi = collect()
            ->merge($essais)
            ->merge($beritas)
            ->merge($opinis)
            ->shuffle()
            ->take(10);

        return view('page.essai', compact('essais', 'beritas', 'opinis', 'rekomendasi'));
    }

}
