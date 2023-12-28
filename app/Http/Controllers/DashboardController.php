<?php

namespace App\Http\Controllers;
use App\Models\ref_provinsi;
use App\Models\HasilAkreditasi;
use App\Models\RefProvinsi;
use Illuminate\Http\Request;
use Inertia\Inertia;

class DashboardController extends Controller
{
    public function index(Request $request)
    {
        return Inertia::render('dashboard');
    }

    public function CapaianNasional(Request $request)
    {
        //dump($request->year);
      $datas = RefProvinsi::sum('kuota');

       return Inertia::render('dashboard', compact('datas'));
    }
}


//     public function CapaianNasional(Request $request)
//     {
//         //dump($request->year);
//         $datas = RefProvinsi::sum('kuota');

//         return Inertia::render('dashboard', compact('datas'));
//     }