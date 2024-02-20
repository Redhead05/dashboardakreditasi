<?php

namespace App\Http\Controllers;

use App\Models\HasilAkreditasi;
use Illuminate\Http\Request;
use Inertia\Inertia;

class DataProvinsiController extends Controller
{
    public function index(Request $request)
    {
        //datatable provinsi
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

            $statusCounts['statuscount'] = $statusCounts['A'] +
                $statusCounts['B'] +
                $statusCounts['C'] +
                $statusCounts['TT'];

            return array_merge(['provinsi' => $provinsi], $statusCounts);
        })->values();

        //cardTotalData
        $setCard = [
            'A' => 0,
            'B' => 0,
            'C' => 0,
            'TT' => 0,
        ];

        $statusCount = HasilAkreditasi::selectRaw('status, COUNT(*) as count')
            ->where('tahun_akreditasi', $year)
            ->groupBy('status')
            ->get();

        foreach ($statusCount as $item) {
            $setCard [$item->status] = $item->count;

        }
//        dd($statusCount->toArray());
        return Inertia::render('dataProvinsi',
            [
                'provinsiStatusCount' => $provinsiStatusCount,
                'setCard' => $setCard,
            ]
        );
    }
}
