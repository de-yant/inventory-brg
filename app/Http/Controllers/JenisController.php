<?php

namespace App\Http\Controllers;

use App\Models\Jenis;
use Illuminate\Http\Request;

class JenisController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('master/jenis/index', [
            'title' => 'Jenis Barang',
            'active' => 'jenis',
            'jenis' => Jenis::all()
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
        $jns = Jenis::create([
            'jenisbarang_nama' => $request->jenisbarang_nama,
            'jenisbarang_ket' => $request->jenisbarang_ket,
        ]);

        if ($jns) {
            //redirect dengan pesan sukses
            return redirect()->route('jenis')->with(['success' => 'Data Berhasil Disimpan!']);
        } else {
            //redirect dengan pesan error
            return redirect()->route('jenis')->with(['error' => 'Data Gagal Disimpan!']);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Jenis  $jenis
     * @return \Illuminate\Http\Response
     */
    public function show(Jenis $jenis)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Jenis  $jenis
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $jenis = Jenis::findOrFail($id);

        return view('master/jenis/edit', [
            'title' => 'Edit Jenis Barang',
            'active' => 'jenis',
        ], compact('jenis'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Jenis  $jenis
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $jns = Jenis::findOrFail($id);

        $jns->update([
            'jenisbarang_nama' => $request->jenisbarang_nama,
            'jenisbarang_ket' => $request->jenisbarang_ket,
        ]);

        if ($jns) {
            //redirect dengan pesan sukses
            return redirect()->route('jenis')->with(['success' => 'Data Berhasil Diupdate!']);
        } else {
            //redirect dengan pesan error
            return redirect()->route('jenis')->with(['error' => 'Data Gagal Diupdate!']);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Jenis  $jenis
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $jns = Jenis::findOrFail($id);
        $jns->delete();

        if ($jns) {
            //redirect dengan pesan sukses
            return redirect()->route('jenis')->with(['success' => 'Data Berhasil Dihapus!']);
        } else {
            //redirect dengan pesan error
            return redirect()->route('jenis')->with(['error' => 'Data Gagal Dihapus!']);
        }
    }
}
