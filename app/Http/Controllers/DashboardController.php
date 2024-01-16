<?php

namespace App\Http\Controllers;
use App\Models\HasilAkreditasi;
use App\Models\Populasi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Inertia\Inertia;

class DashboardController extends Controller
{
    public function index(Request $request)
    {
        $result = [];
        $capaianNasional = HasilAkreditasi::selectRaw(
            'satuan, status, COUNT(*) as count'
        )->groupBy('satuan', 'status')
        ->where('tahun_akreditasi', $request->year ?? '2019')
        ->get();
//        dump($capaianNasional->toArray());
        if ($capaianNasional->isEmpty()) {
            $result[] = [
                'category' => [],
                'data' => []
            ];
        } else {
            $statuses = $capaianNasional->groupBy('status')->keys()->toArray();
            // add keys category
            $result['category'] = $capaianNasional->groupBy('satuan')->keys()->toArray();
            // mapping data
            foreach ($result['category'] as $category) {
                foreach ($statuses as $status) {
                    if ( ! isset($result['data'][$status])) {
                        $result['data'][$status] = [
                            'name' => $status,
                            'data' => []
                        ];
                    }

                    $data = $capaianNasional->where('satuan', $category)->where('status', $status)->first();
                    if ($data) {
                        array_push($result['data'][$status]['data'], $data['count']);
                    } else {
                        array_push($result['data'][$status]['data'], 0);
                    }
                }
            }

            // reset index
            $result['data'] = array_values($result['data']);
        }

        //total_populasi
        $populasis = Populasi::selectRaw(
            'tahun, SUM(total_populasi) as jumlah'
        )->groupBy('tahun');
        if ($request->year) {
            $populasis->where('tahun', $request->year);
        }

//        dd($populasis->get()->toArray());


        return Inertia::render('dashboard', [
            'chartGrading' => $result,
            'populasis' => $populasis,
        ]);
    }
}
