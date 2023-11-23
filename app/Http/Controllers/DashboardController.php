<?php

namespace App\Http\Controllers;
use App\Models\ref_provinsi;
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
        // dd($request->year);
        $datas = RefProvinsi::sum('kuota');

        return Inertia::render('dashboard', compact('datas'));
    }
    public function filter(Request $request)
    {
        $refprovinsi = RefProvinsi::find(1);
        $yearFilter = $refprovinsi->id_tahun_akreditasi;

        return Inertia::render('dashboard', compact('yearFilter'));
    }
}






// $data = HasilAkreditasi::where('tahun_akreditasi', '2008')
//         ->groupBy('tahun_akreditasi')
//         ->get();

//         dd($data);
