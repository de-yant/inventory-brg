@extends('layouts.app')

@section('content')
<nav aria-label="breadcrumb">
    <ol class="breadcrumb iq-bg-primary">
       <li class="breadcrumb-item"><a href="{{ url('dashboard') }}"><i class="ri-home-4-line mr-1 float-left"></i>Dashboard</a></li>
       <li class="breadcrumb-item"><a href="{{ url('barang') }}"></i>Barang</a></li>
       <li class="breadcrumb-item active" aria-current="page">Detail Data Barang</li>
    </ol>
 </nav>
<div class="container-fluid">
    <div class="row">
       <div class="col-lg-12">
          <div class="card card-block card-stretch card-height">
             <div class="card-header d-flex justify-content-between">
                <a href="{{ url('barang') }}" class="btn btn-primary">Kembali</a>
             </div>
             <div class="card-body">
                <div class="form-row">
                    <div class="col-md-12 mb-3">
                        <center>
                            <img src="{{ asset('images/'.$barang->barang_gambar) }}" alt="Foto Produk" style="width: 400px">
                        </center>
                    </div>

                <div class="form-row">
                        <div class="col-md-3 mb-3">
                            <label for="jenis_id" class="form-label">Jenis Barang</label>
                            <input type="text" name="jenis_id" class="form-control" readonly value="{{ $barang->jenis->jenisbarang_nama }}">
                        </div>
                        <div class="col-md-3 mb-3">
                            <label for="satuan_id" class="form-label">Satuan Barang</label>
                           <input type="text" name="satuan_id" class="form-control" readonly value="{{ $barang->satuan->satuanbarang_nama }}">
                        </div>
                        <div class="col-md-3 mb-3">
                            <label for="merk_id" class="form-label">Merk Barang</label>
                               <input type="text" name="merk_id" class="form-control" readonly value="{{ $barang->merk->merkbarang_nama }}">
                        </div>
                        <div class="col-md-3 mb-3">
                            <label for="barang_kode" class="form-label">Kode Barang <span class="text-danger"></span></label>
                            <input type="text" name="barang_kode" class="form-control" readonly value="{{ $barang->barang_kode }}">
                        </div>
                        <div class="col-md-3 mb-3">
                            <label for="barang_nama" class="form-label">Nama Barang</label>
                            <input type="text" name="barang_nama" class="form-control" value="{{ $barang->barang_nama }}">
                        </div>

                        <div class="col-md-3 mb-3">
                            <label for="barang_harga" class="form-label">Harga Barang</label>
                            <input type="text" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1').replace(/^0[^.]/, '0');" name="barang_harga" class="form-control" value="Rp. {{ $barang->barang_harga }}">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="barang_ket" class="form-label">Keterangan</label>
                            <input type="text" name="barang_ket" class="form-control" value="{{ $barang->barang_ket }}">
                        </div>
                    </div>
                 </div>
             </div>
          </div>
      </div>
    </div>
</div>
@endsection
