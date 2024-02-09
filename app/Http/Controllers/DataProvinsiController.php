<?php

namespace App\Http\Controllers;

use App\Models\HasilAkreditasi;
use Illuminate\Http\Request;
use Inertia\Inertia;

class DataProvinsiController extends Controller
{
    public function index(Request $request)
    {
        //status A
            $year = $request->year;
            $statusa = HasilAkreditasi::where('status', 'A')
            ->where('tahun_akreditasi', $year)
            ->count() ?? 0;

        //status B
            $statusb = HasilAkreditasi::where('status', 'B')
                ->where('tahun_akreditasi', $year)
                ->count() ?? 0;
        //status C
        $statusc = HasilAkreditasi::where('status', 'C')
            ->where('tahun_akreditasi', $year)
            ->count() ?? 0;

        //status TT
        $statustt = HasilAkreditasi::where('status', 'TT')
            ->where('tahun_akreditasi', $year)
            ->count() ?? 0;

//        dd($statusa);

        //table provinsi hasil akreditasi
        $year = $request->year;

        $provinsiCount = HasilAkreditasi::selectRaw('provinsi, status, COUNT(*) as count')
            ->where('tahun_akreditasi', $year)
            ->groupBy('provinsi', 'status')
            ->get();

        $provinsiStatusCount = $provinsiCount->groupBy('provinsi')->map(function ($items, $provinsi) {
            $statusCounts = [
                'A' => 0,
                'B' => 0,
                'C' => 0,
                'TT' => 0,
            ];

            foreach ($items as $item) {
                $statusCounts[$item->status] = $item->count;
            }

            return array_merge(['provinsi' => $provinsi], $statusCounts);
        })->values();

//        dd($provinsiStatusCount->toArray());

        return Inertia::render('dataProvinsi',
            [
                'statusa' => $statusa,
                'statusb' => $statusb,
                'statusc' => $statusc,
                'statustt' => $statustt,
                'provinsiStatusCount' => $provinsiStatusCount,
            ]
        );
    }
}
