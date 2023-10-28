<?php

namespace App\Http\Controllers;

use App\Models\HasilAkreditasi;
use App\Models\RefProvinsi;
use Illuminate\Http\Request;
use Inertia\Inertia;

class DashboardController extends Controller
{
    public function index()
    {
        return Inertia::render('dashboard');
    }
    public function CapaianNasional()
    {
        $data = RefProvinsi::sum('kuota');
        // dd($data);
        return Inertia::render('dashboard', [
            'data' => $data
        ]);
    }
}






// $data = HasilAkreditasi::where('tahun_akreditasi', '2008')
//         ->groupBy('tahun_akreditasi')
//         ->get();

//         dd($data);
