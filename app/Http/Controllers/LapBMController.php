<?php

namespace App\Http\Controllers;

use App\Models\Bm;
use App\Models\LapBM;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class LapBMController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('laporan.l_masuk.index', [
            'title' => 'Laporan Barang Masuk',
            'active' => 'laporan',
            'bm' => Bm::all()
        ]);
    }

    public function cetakpdf()
    {
        // $barangmasuk = BarangMasuk::limit(10)->get();
        // return view('admin.laporan.laporanMasuk.cetak', compact('barangmasuk'));
        $bm = Bm::limit(10)->get();
        $pdf = App::make('dompdf.wrapper');
        $pdf->loadView('laporan.l_masuk.cetak', compact('bm'));
        return $pdf->stream('laporan-masuk.pdf');
    }

}
