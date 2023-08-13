<?php

namespace App\Http\Controllers;

use App\Models\Penjual;
use Illuminate\Http\Request;

class PenjualController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pelanggan.penjual.index', [
            'title' => 'Penjual',
            'active' => 'penjual',
            'penjual' => Penjual::all()
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
        Penjual::create([
            'penjual_nama' => $request->penjual_nama,
            'penjual_alamat' => $request->penjual_alamat,
            'penjual_telp' => $request->penjual_telp
        ]);

        return redirect()->route('penjual')->with('success', 'Data Penjual Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Penjual  $penjual
     * @return \Illuminate\Http\Response
     */
    public function show(Penjual $penjual)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Penjual  $penjual
     * @return \Illuminate\Http\Response
     */
    public function edit(Penjual $penjual, $id)
    {
        return view('pelanggan.penjual.edit', [
            'title' => 'Edit Penjual',
            'active' => 'penjual',
            'penjual' => Penjual::find($id)
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Penjual  $penjual
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Penjual $penjual, $id)
    {
        Penjual::where('id', $id)->update([
            'penjual_nama' => $request->penjual_nama,
            'penjual_alamat' => $request->penjual_alamat,
            'penjual_telp' => $request->penjual_telp
        ]);

        return redirect()->route('penjual')->with('success', 'Data Penjual Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Penjual  $penjual
     * @return \Illuminate\Http\Response
     */
    public function destroy(Penjual $penjual, $id)
    {
        Penjual::destroy($id);
        return redirect()->route('penjual')->with('success', 'Data Penjual Berhasil Dihapus');
    }
}
