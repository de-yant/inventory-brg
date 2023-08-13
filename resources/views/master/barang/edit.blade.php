@extends('layouts.app')

@section('content')

<nav aria-label="breadcrumb">
    <ol class="breadcrumb iq-bg-primary">
       <li class="breadcrumb-item"><a href="{{ url('dashborad') }}"><i class="ri-home-4-line mr-1 float-left"></i>Dashboard</a></li>
       <li class="breadcrumb-item"><a href="{{ url('barang') }}"></i>Barang</a></li>
       <li class="breadcrumb-item active" aria-current="page">Edit Data Barang</li>
    </ol>
 </nav>
 <div class="card">
    <div class="card-header d-flex justify-content-between">
       <div class="header-title">
          <h4 class="card-title">Edit Data Barang</h4>
       </div>
    </div>
    <div class="card-body">
       <form method="POST" action="{{ url('barang/'. $barang->id) }} ">
        @csrf
        @method('PUT')
            <div class="form-row">
                <div class="col-md-3 mb-3">
                    <label for="title" class="form-label">Gambar</label>
                    <center>
                        <input class="form-control" id="GetFile" name="barang_gambar" type="file" onchange="VerifyFileNameAndFileSize()" accept=".png,.jpeg,.jpg,.svg">
                    </center>
                </div>
                <div class="col-md-3 mb-3">
                    <label for="jenis_id" class="form-label">Jenis Barang</label>
                    <select name="jenis_id" class="form-control">
                        @foreach ($jenis as $jns )
                        <option value="{{ $jns->id }}">{{ $jns->jenisbarang_nama }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-md-3 mb-3">
                    <label for="satuan_id" class="form-label">Satuan Barang</label>
                    <select name="satuan_id" class="form-control">
                        @foreach ($satuan as $stn )
                        <option value="{{ $stn->id }}">{{ $stn->satuanbarang_nama }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-md-3 mb-3">
                    <label for="merk_id" class="form-label">Merk Barang</label>
                    <select name="merk_id" class="form-control">
                        @foreach ($merk as $merk )
                        <option value="{{ $merk->id }}">{{ $merk->merkbarang_nama }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-md-2 mb-3">
                    <label for="barang_kode" class="form-label">Kode Barang <span class="text-danger"></span></label>
                    <input type="text" name="barang_kode" class="form-control" readonly value="{{ $barang->barang_kode }}">
                </div>

                <div class="col-md-3 mb-3">
                    <label for="barang_nama" class="form-label">Nama Barang <span class="text-danger">*</span></label>
                    <input type="text" name="barang_nama" class="form-control" value="{{ $barang->barang_nama }}">
                </div>

                <div class="col-md-3 mb-3">
                    <label for="barang_harga" class="form-label">Harga Barang <span class="text-danger">*</span></label>
                    <input type="text" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1').replace(/^0[^.]/, '0');" name="barang_harga" class="form-control" value="{{ $barang->barang_harga }}">
                </div>
                <div class="col-md-4 mb-3">
                    <label for="barang_ket" class="form-label">Keterangan <span class="text-danger">*</span></label>
                    <input type="text" name="barang_ket" class="form-control" value="{{ $barang->barang_ket }}">
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
