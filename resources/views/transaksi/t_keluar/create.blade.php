@extends('layouts.app')

@section('content')

<nav aria-label="breadcrumb">
    <ol class="breadcrumb iq-bg-primary">
       <li class="breadcrumb-item"><a href="{{ url('dashboard') }}"><i class="ri-home-4-line mr-1 float-left"></i>Dashboard</a></li>
       <li class="breadcrumb-item"><a href="{{ url('bk') }}"></i>Barang Keluar</a></li>
       <li class="breadcrumb-item active" aria-current="page">Tambah Data Barang Keluar</li>
    </ol>
 </nav>
 <div class="card">
    <div class="card-body">
        <form method="POST" action="{{ route('bk.store') }}">
            @csrf
                <div class="form-row">
                    <div class="col-md-2 mb-3">
                        <label for="bk_tanggal" class="form-label">Tanggal Keluar Barang <span class="text-danger">*</span></label>
                        <input type="date" name="bk_tanggal" class="form-control">
                    </div>
                    <div class="col-md-2 mb-3">
                        <label for="pembeli_id" class="form-label">Nama Pembeli Barang<span class="text-danger">*</span></label>
                        <select name="pembeli_id" class="form-control">
                            <option selected disabled value="">Pilih Nama Pembeli</option>
                            @foreach ($pembeli as $pbl )
                            <option value="{{ $pbl->id }}">{{ $pbl->pembeli_nama }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-2 mb-3">
                        <label for="barang_kode" class="form-label">Nama Barang<span class="text-danger">*</span></label>
                        <select name="barang_kode" class="form-control">
                            <option selected disabled value="">Pilih Nama Barang</option>
                            @foreach ($barang as $brg )
                            <option value="{{ $brg->barang_kode }}">{{ $brg->barang_nama }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-2 mb-3">
                        <label for="bk_jumlah" class="form-label">Jumlah Barang Keluar <span class="text-danger">*</span></label>
                        <input type="text" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1').replace(/^0[^.]/, '0');" name="bk_jumlah" class="form-control" placeholder="Masukan Jumlah">
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-primary">Simpan</button>
                    <button type="reset" class="btn btn-secondary">Batal</button>
                </div>
            </div>
        </form>
    </div>
 </div>
@endsection
