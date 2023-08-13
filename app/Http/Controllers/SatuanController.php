<?php

namespace App\Http\Controllers;

use App\Models\Satuan;
use Illuminate\Http\Request;

class SatuanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('master/satuan/index', [
            'title' => 'Satuan Barang',
            'active' => 'satuan',
            'satuan' => Satuan::all()
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
        $satuan = Satuan::create([
            'satuanbarang_nama' => $request->satuanbarang_nama,
            'satuanbarang_ket' => $request->satuanbarang_ket,
        ]);

        if ($satuan) {
            //redirect dengan pesan sukses
            return redirect()->route('satuan')->with(['success' => 'Data Berhasil Disimpan!']);
        } else {
            //redirect dengan pesan error
            return redirect()->route('satuan')->with(['error' => 'Data Gagal Disimpan!']);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Satuan  $satuan
     * @return \Illuminate\Http\Response
     */
    public function show(Satuan $satuan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Satuan  $satuan
     * @return \Illuminate\Http\Response
     */
    public function edit(Satuan $satuan, $id)
    {
        $satuan = Satuan::find($id);
        return view('master/satuan/edit', [
            'title' => 'Edit Satuan Barang',
            'active' => 'satuan',
            'satuan' => $satuan
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Satuan  $satuan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Satuan $satuan, $id)
    {
        $satuan = Satuan::findOrFail($id);
        $satuan->update([
            'satuanbarang_nama' => $request->satuanbarang_nama,
            'satuanbarang_ket' => $request->satuanbarang_ket,
        ]);

        if ($satuan) {
            //redirect dengan pesan sukses
            return redirect()->route('satuan')->with(['success' => 'Data Berhasil Diupdate!']);
        } else {
            //redirect dengan pesan error
            return redirect()->route('satuan')->with(['error' => 'Data Gagal Diupdate!']);
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Satuan  $satuan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Satuan $satuan , $id)
    {
        $satuan = Satuan::findOrFail($id);
        $satuan->delete();

        if ($satuan) {
            //redirect dengan pesan sukses
            return redirect()->route('satuan')->with(['success' => 'Data Berhasil Dihapus!']);
        } else {
            //redirect dengan pesan error
            return redirect()->route('satuan')->with(['error' => 'Data Gagal Dihapus!']);
        }
    }
}
