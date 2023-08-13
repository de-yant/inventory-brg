<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\Jenis;
use App\Models\Merk;
use App\Models\Satuan;
use Illuminate\Http\Request;

class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $barangs = Barang :: with(['jenis', 'merk', 'satuan'])->get();

        return view('master/barang/index', [
            'title'     => 'Barang',
            'active'    => 'barang',
            'barangs'   => $barangs
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('master/barang/create', [
                'title'     => 'Tambah Data Barang',
                'active'    => 'barang',
                'jenis'     => Jenis::all(),
                'merk'      => Merk::all(),
                'satuan'    => Satuan::all(),
                'barang'    => new Barang()
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
        $barang = Barang::latest()->first();
        $kodebrg = 'BRG';
        $kodetanggal = date('md');
        if($barang == null){
            $kode = '0001';
        }else{
            $kode = (int)substr($barang->barang_kode, 9, 4) + 1;
            $kode = str_pad($kode, 4, '0', STR_PAD_LEFT);
        }

        $kodebarang = $kodebrg.'-'.$kodetanggal.$kode;
        $request->merge([
            'barang_kode' => $kodebarang,
        ]);

        $barang = Barang::create([
            'barang_gambar' => $request->barang_gambar,
            'jenis_id' => $request->jenis_id,
            'satuan_id' => $request->satuan_id,
            'merk_id' => $request->merk_id,
            'barang_kode' => $request->barang_kode,
            'barang_nama' => $request->barang_nama,
            'barang_harga' => $request->barang_harga,
            'barang_ket' => $request->barang_ket,
        ]);

        if($request->hasFile('barang_gambar')){
            $request->file('barang_gambar')->move('images/',$request->file('barang_gambar')->getClientOriginalName());
            $barang->barang_gambar = $request->file('barang_gambar')->getClientOriginalName();
            $barang->save();
        }

        return redirect()->route('barang')->with('success', 'Data Barang Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Barang  $barang
     * @return \Illuminate\Http\Response
     */
    public function show(Barang $barang, $id)
    {
        return view('master/barang/show', [
            'title'     => 'Detail Data Barang',
            'active'    => 'barang',
            'barang'    => Barang::findOrFail($id)
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Barang  $barang
     * @return \Illuminate\Http\Response
     */
    public function edit(Barang $barang, $id)
    {
        return view('master/barang/edit', [
            'title'     => 'Edit Data Barang',
            'active'    => 'barang',
            'barang'    => Barang::findOrFail($id),
            'jenis'     => Jenis::all(),
            'merk'      => Merk::all(),
            'satuan'    => Satuan::all(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Barang  $barang
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Barang $barang, $id)
    {
        $barang = Barang::findOrFail($id);
        $barang->update([
            'barang_gambar' => $request->barang_gambar,
            'jenis_id' => $request->jenis_id,
            'satuan_id' => $request->satuan_id,
            'merk_id' => $request->merk_id,
            'barang_kode' => $request->barang_kode,
            'barang_nama' => $request->barang_nama,
            'barang_harga' => $request->barang_harga,
            'barang_ket' => $request->barang_ket,
        ]);

        if($request->hasFile('barang_gambar')){
            $request->file('barang_gambar')->move('images/',$request->file('barang_gambar')->getClientOriginalName());
            $barang->barang_gambar = $request->file('barang_gambar')->getClientOriginalName();
            $barang->save();
        }

        return redirect()->route('barang')->with('success', 'Data Barang Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Barang  $barang
     * @return \Illuminate\Http\Response
     */
    public function destroy(Barang $barang, $id)
    {
        $barang = Barang::findOrFail($id);
        $barang->delete();

        return redirect()->route('barang')->with('success', 'Data Barang Berhasil Dihapus');
    }
}
