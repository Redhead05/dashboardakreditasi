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
    public function CapaianNasional(Request $request)
    {
        dd($request->year);
        $datas = RefProvinsi::sum('kuota');

        return Inertia::render('dashboard', compact('datas'));
    }
}






// $data = HasilAkreditasi::where('tahun_akreditasi', '2008')
//         ->groupBy('tahun_akreditasi')
//         ->get();

//         dd($data);
