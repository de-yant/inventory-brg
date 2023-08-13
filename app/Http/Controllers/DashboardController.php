<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//model
use App\Models\Jenis;
use App\Models\Satuan;
use App\Models\Merk;
use App\Models\Barang;
use App\Models\Bm;
use App\Models\Bk;
use App\Models\Pembeli;
use App\Models\Penjual;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jenis      = Jenis::count();
        $satuan     = Satuan::count();
        $merk       = Merk::count();
        $barang     = Barang::count();
        $bm         = Bm::count();
        $bk         = Bk::count();
        $pembeli    = Pembeli::count();
        $penjual    = Penjual::count();

        return view('dashboard.index', [
            'title' => 'Dashboard',
            'active' => 'dashboard',
        ], compact('jenis', 'satuan', 'merk', 'barang', 'bm', 'bk', 'pembeli', 'penjual' ));

    }
}
