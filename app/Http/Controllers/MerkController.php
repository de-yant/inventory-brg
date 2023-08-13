<?php

namespace App\Http\Controllers;

use App\Models\Merk;
use Illuminate\Http\Request;

class MerkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('master.merk.index', [
            'title' => 'Merk Barang',
            'active' => 'merk',
            'merk' => Merk::all()
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
        $merk = Merk::create([
            'merkbarang_nama' => $request->merkbarang_nama,
            'merkbarang_ket' => $request->merkbarang_ket,
        ]);

        if ($merk) {
            //redirect dengan pesan sukses
            return redirect()->route('merk')->with(['success' => 'Data Berhasil Disimpan!']);
        } else {
            //redirect dengan pesan error
            return redirect()->route('merk')->with(['error' => 'Data Gagal Disimpan!']);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Merk  $merk
     * @return \Illuminate\Http\Response
     */
    public function show(Merk $merk)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Merk  $merk
     * @return \Illuminate\Http\Response
     */
    public function edit(Merk $merk, $id)
    {
        $merk = Merk::find($id);
        return view('master.merk.edit', [
            'title' => 'Edit Merk Barang',
            'active' => 'merk',
            'merk' => $merk
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Merk  $merk
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Merk $merk , $id)
    {
        $merk = Merk::find($id);
        $merk->update([
            'merkbarang_nama' => $request->merkbarang_nama,
            'merkbarang_ket' => $request->merkbarang_ket,
        ]);

        if ($merk) {
            //redirect dengan pesan sukses
            return redirect()->route('merk')->with(['success' => 'Data Berhasil Diupdate!']);
        } else {
            //redirect dengan pesan error
            return redirect()->route('merk')->with(['error' => 'Data Gagal Diupdate!']);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Merk  $merk
     * @return \Illuminate\Http\Response
     */
    public function destroy(Merk $merk, $id)
    {
        $merk = Merk::find($id);
        $merk->delete();

        if ($merk) {
            //redirect dengan pesan sukses
            return redirect()->route('merk')->with(['success' => 'Data Berhasil Dihapus!']);
        } else {
            //redirect dengan pesan error
            return redirect()->route('merk')->with(['error' => 'Data Gagal Dihapus!']);
        }
    }
}
