<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\LapStok;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class LapStokController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('laporan.l_stok.index', [
            'title' => 'Laporan Stok Barang',
            'active' => 'laporan',
            'bs' => Barang::all()
        ]);
    }

    public function cetakpdf()
    {
        // $bs = Barang::limit(10)->get();
        // return view('laporan.l_stok.cetak', compact('bs'));
        $bs = Barang::limit(10)->get();
        $pdf = App::make('dompdf.wrapper');
        $pdf->loadView('laporan.l_stok.cetak', compact('bs'));
        return $pdf->stream('laporan-stok.pdf');
    }
}
