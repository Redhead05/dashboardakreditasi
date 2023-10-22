<?php

namespace App\Http\Controllers;

use App\Models\HasilAkreditasi;
use Illuminate\Http\Request;
use Inertia\Inertia;

class DashboardController extends Controller
{
    public function index()
    {
        $data = HasilAkreditasi::where('tahun_akreditasi', '2008')
        ->groupBy('status')
        ->get();

        dd($data);

        return Inertia::render('dashboard');
    }
}
