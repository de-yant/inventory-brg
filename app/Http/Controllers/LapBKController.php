<?php

namespace App\Http\Controllers;

use App\Models\Bk;
use App\Models\LapBK;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class LapBKController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view ('laporan.l_keluar.index', [
            'title' => 'Laporan Barang Keluar',
            'active' => 'laporan',
            'bk' => Bk::all()
        ]);
    }

    public function cetakpdf()
    {
        // $barangmasuk = BarangMasuk::limit(10)->get();
        // return view('admin.laporan.laporanMasuk.cetak', compact('barangmasuk'));
        $bk = Bk::limit(10)->get();
        $pdf = App::make('dompdf.wrapper');
        $pdf->loadView('laporan.l_keluar.cetak', compact('bk'));
        return $pdf->stream('laporan-keluar.pdf');
    }

}
