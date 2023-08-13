<?php

namespace App\Http\Controllers;

use App\Models\Pembeli;
use Illuminate\Http\Request;

class PembeliController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pelanggan.pembeli.index', [
            'title' => 'Pembeli',
            'active' => 'pembeli',
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
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Pembeli::create([
            'pembeli_nama' => $request->pembeli_nama,
            'pembeli_alamat' => $request->pembeli_alamat,
            'pembeli_telp' => $request->pembeli_telp
        ]);

        return redirect()->route('pembeli')->with('success', 'Data Pembeli Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pembeli  $pembeli
     * @return \Illuminate\Http\Response
     */
    public function show(Pembeli $pembeli)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pembeli  $pembeli
     * @return \Illuminate\Http\Response
     */
    public function edit(Pembeli $pembeli, $id)
    {
        return view('pelanggan.pembeli.edit', [
            'title' => 'Edit Pembeli',
            'active' => 'pembeli',
            'pembeli' => Pembeli::find($id)
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pembeli  $pembeli
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pembeli $pembeli, $id)
    {
        $pembeli = Pembeli::find($id);
        $pembeli->update([
            'pembeli_nama' => $request->pembeli_nama,
            'pembeli_alamat' => $request->pembeli_alamat,
            'pembeli_telp' => $request->pembeli_telp
        ]);

        return redirect()->route('pembeli')->with('success', 'Data Pembeli Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pembeli  $pembeli
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pembeli $pembeli, $id)
    {
        $pembeli = Pembeli::find($id);
        $pembeli->delete();

        return redirect()->route('pembeli')->with('success', 'Data Pembeli Berhasil Dihapus');
    }
}
