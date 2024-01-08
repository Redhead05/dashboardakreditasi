<?php

namespace App\Http\Controllers;
use App\Models\HasilAkreditasi;
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
        ->where('tahun_akreditasi', $request->year ?? '2008')
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

        return Inertia::render('dashboard', [
            'chartGrading' => $result
        ]);
    }
    public function getChartData()
    {
        $chartData = HasilAkreditasi::select(DB::raw('count(*) as count'), 'status')
            ->groupBy('status')
            ->get();

        dd($chartData->toJson());

        return Inertia::render('dashboard', compact('chartData'));
    }
}
