<?php

namespace App\Http\Controllers;

use App\Models\Bm;
use App\Models\Barang;
use App\Models\Penjual;
use Illuminate\Http\Request;

class BmController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('transaksi.t_masuk.index', [
            'title' => 'Barang Masuk',
            'active' => 'barangmasuk',
            'bm' => Bm::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
          return view('transaksi.t_masuk.create', [
                'title' => 'Tambah Barang Masuk',
                'active' => 'barangmasuk',
                'bm' => Bm::all(),
                'penjual' => Penjual::all(),
                'barang' => Barang::all(),
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
        $barangmasuk = Bm::latest()->first();
        $kodemasuk = 'BM';
        $kodetanggal = date('md');
        if($barangmasuk == null){
            $kode = '0001';
        }else{
            $kode = (int)substr($barangmasuk->bm_kode, 9, 4) + 1;
            $kode = str_pad($kode, 4, '0', STR_PAD_LEFT);
        }
        $kodebarang = $kodemasuk.'-'.$kodetanggal.'-'.$kode;
        $request->merge([
            'bm_kode' => $kodebarang,
        ]);

        Bm::create([
            'penjual_id'    => $request->penjual_id,
            'bm_kode'       => $request->bm_kode,
            'barang_kode'   => $request->barang_kode, // tambahin ini di tabel 'barangmasuk
            'bm_jumlah'     => $request->bm_jumlah,
            'bm_tanggal'    => $request->bm_tanggal,
        ]);

        return redirect()->route('bm')->with('success', 'Data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Bm  $bm
     * @return \Illuminate\Http\Response
     */
    public function show(Bm $bm)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Bm  $bm
     * @return \Illuminate\Http\Response
     */
    public function edit(Bm $bm)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Bm  $bm
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Bm $bm)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Bm  $bm
     * @return \Illuminate\Http\Response
     */
    public function destroy(Bm $bm)
    {
        //
    }
}
