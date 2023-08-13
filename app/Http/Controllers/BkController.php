<?php

namespace App\Http\Controllers;

use App\Models\Bk;
use App\Models\Barang;
use App\Models\Pembeli;
use Illuminate\Http\Request;

class BkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view ('transaksi.t_keluar.index', [
            'title' => 'Barang Keluar',
            'active' => 'barangkeluar',
            'bk' => Bk::all(),
            'pembeli' => Pembeli::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('transaksi.t_keluar.create', [
            'title'     => 'Tambah Barang Keluar',
            'active'    => 'barangkeluar',
            'bk'        => Bk::all(),
            'pembeli'   => Pembeli::all(),
            'barang'    => Barang::all(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request);
        $barangkeluar = Bk::latest()->first();
        $kodekeluar = 'BK';
        $kodetanggal = date('md');
        if($barangkeluar == null){
            $kode = '0001';
        }else{
            $kode = (int)substr($barangkeluar->bk_kode, 9, 4) + 1;
            $kode = str_pad($kode, 4, '0', STR_PAD_LEFT);
        }
        $kodebarang = $kodekeluar.'-'.$kodetanggal.'-'.$kode;
        $request->merge([
            'bk_kode' => $kodebarang,
        ]);

        $barangkeluar = Bk::create([
            'bk_kode'           => $request->bk_kode,
            'bk_tanggal'        => $request->bk_tanggal,
            'pembeli_id'        => $request->pembeli_id,
            'barang_kode'       => $request->barang_kode,
            'bk_jumlah'         => $request->bk_jumlah,
        ]);

        return redirect()->route('bk')->with('success', 'Data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Bk  $bk
     * @return \Illuminate\Http\Response
     */
    public function show(Bk $bk)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Bk  $bk
     * @return \Illuminate\Http\Response
     */
    public function edit(Bk $bk)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Bk  $bk
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Bk $bk)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Bk  $bk
     * @return \Illuminate\Http\Response
     */
    public function destroy(Bk $bk)
    {
        //
    }
}
