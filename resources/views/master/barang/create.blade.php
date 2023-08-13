@extends('layouts.app')

@section('content')

<nav aria-label="breadcrumb">
    <ol class="breadcrumb iq-bg-primary">
       <li class="breadcrumb-item"><a href="{{ url('dashboard') }}"><i class="ri-home-4-line mr-1 float-left"></i>Dashboard</a></li>
       <li class="breadcrumb-item"><a href="{{ url('barang') }}"></i>Barang</a></li>
       <li class="breadcrumb-item active" aria-current="page">Tambah Data Barang</li>
    </ol>
 </nav>
 <div class="card">
    <div class="card-header d-flex justify-content-between">
       <div class="header-title">
          <h4 class="card-title">Tambah Data Barang</h4>
       </div>
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route('barang.store') }}" enctype="multipart/form-data">
            @csrf
                <div class="form-row">
                    <div class="col-md-3 mb-3">
                        <label for="title" class="form-label">Gambar</label>
                        <center>
                            <input class="form-control" name="barang_gambar" type="file" onchange="VerifyFileNameAndFileSize()" accept=".png,.jpeg,.jpg,.svg">
                        </center>
                    </div>
                    <div class="col-md-3 mb-3">
                        <label for="jenis_id" class="form-label">Jenis <span class="text-danger">*</span></label>
                        <select name="jenis_id" class="form-control">
                            <option selected disabled value="">Pilih Jenis Barang</option>
                            @foreach ($jenis as $jns )
                            <option value="{{ $jns->id }}">{{ $jns->jenisbarang_nama }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-3 mb-3">
                        <label for="satuan_id" class="form-label">Satuan Barang<span class="text-danger">*</span></label>
                        <select name="satuan_id" class="form-control">
                            <option selected disabled value="">Pilih Satuan Barang</option>
                            @foreach ($satuan as $stn )
                            <option value="{{ $stn->id }}">{{ $stn->satuanbarang_nama }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-3 mb-3">
                        <label for="merk_id" class="form-label">Merk Barang <span class="text-danger">*</span></label>
                        <select name="merk_id" class="form-control">
                            <option selected disabled value="">Pilih Merk Barang</option>
                            @foreach ($merk as $merk )
                            <option value="{{ $merk->id }}">{{ $merk->merkbarang_nama }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-3 mb-3">
                        <label for="barang_nama" class="form-label">Nama Barang <span class="text-danger">*</span></label>
                        <input type="text" name="barang_nama" class="form-control">
                    </div>
                    <div class="col-md-3 mb-3">
                        <label for="barang_harga" class="form-label">Harga Barang <span class="text-danger">*</span></label>
                        <input type="text" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1').replace(/^0[^.]/, '0');" name="barang_harga" class="form-control">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="barang_ket" class="form-label">Keterangan</label>
                        <input type="text" name="barang_ket" class="form-control">
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
