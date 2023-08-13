@extends('layouts.app')

@section('content')

<nav aria-label="breadcrumb">
    <ol class="breadcrumb iq-bg-primary">
       <li class="breadcrumb-item"><a href="{{ url('dashboard') }}"><i class="ri-home-4-line mr-1 float-left"></i>Dashboard</a></li>
       <li class="breadcrumb-item"><a href="{{ url('merkbarang') }}"></i>Merk Barang</a></li>
       <li class="breadcrumb-item active" aria-current="page">Edit Data</li>
    </ol>
 </nav>
 <div class="card">
    <div class="card-body">
       <form action="{{ url('merk/'. $merk->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-row">
            <div class="col-md-12 mb-3">
                <label for="merkbarang_nama" class="form-label">Merk Barang <span class="text-danger">*</span></label>
                <input type="text" name="merkbarang_nama" id="merkbarang_nama" class="form-control" placeholder="" value="{{ $merk->merkbarang_nama }}">
            </div>
            <div class="col-md-12 mb-3">
                <label for="merkbarang-ket" class="form-label">Keterangan<span class="text-danger"></span></label>
                <textarea class="form-control -bottom-3" name="merkbarang_ket" id="merkbarang_ket" class="form-control" rows="4">{{ $merk->merkbarang_ket }}</textarea>
            </div>
        </div>
        <div class="modal-footer">
            <button class="btn btn-primary">Simpan</button>
            <button type="{{ url('merk') }}" class="btn btn-secondary">Batal</button>
        </div>
       </form>
    </div>
 </div>
@endsection


