<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ChartController extends Controller
{
    public function pieChart()
    {
        $result = DB::select(DB::raw("SELECT CAST(Cluster as CHAR) as clstr, count(*) as jumlah from segmentasiutama GROUP BY Cluster"));
        $data = "";
        foreach ($result as $val) {
            $data .= "['" . $val->clstr . "',     " . $val->jumlah . "],";
        }
        // dd($data);
        $chartData = $data;

        $result1 = DB::select(DB::raw("SELECT CAST(Cluster as CHAR) as clstr, count(*) as jumlah from segmentasilrfm GROUP BY Cluster"));
        $data1 = "";
        foreach ($result1 as $val1) {
            $data1 .= "['" . $val1->clstr . "',     " . $val1->jumlah . "],";
        }
        // dd($data);
        $chartData1 = $data1;
        return view('pie', compact('chartData', 'chartData1'));
    }
    // public function pieChart1()
    // {
    //     $result1 = DB::select(DB::raw("SELECT CAST(Cluster as CHAR) as clstr, count(*) as jumlah from segmentasilrfm GROUP BY Cluster"));
    //     $data = "";
    //     foreach ($result as $val) {
    //         $data .= "['" . $val->clstr . "',     " . $val->jumlah . "],";
    //     }
    //     // dd($data);
    //     $chartData1 = $data;
    //     return view('pie', compact('chartData1'));
    // }
}
