<?php

namespace App\Http\Controllers;

use App\Models\SegmentasiLRFM;
use App\Models\Segmentasiutama;
use Illuminate\Http\Request;

class SegmentasiController extends Controller
{
    public function segmentasi()
    {
        $segmentasi = Segmentasiutama::get();
        $segmentasi1 = SegmentasiLRFM::get();
        return view('hasilklaster', ['segmentasilrfm' => $segmentasi1, 'segmentasipelanggan' => $segmentasi]);
    }
}
