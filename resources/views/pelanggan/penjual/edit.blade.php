@extends('layouts.app')

@section('content')

<nav aria-label="breadcrumb">
    <ol class="breadcrumb iq-bg-primary">
       <li class="breadcrumb-item"><a href="{{ url('dashboard') }}"><i class="ri-home-4-line mr-1 float-left"></i>Dashboard</a></li>
       <li class="breadcrumb-item"><a href="{{ url('penjual') }}"></i>Penjual</a></li>
       <li class="breadcrumb-item active" aria-current="page">Edit Data</li>
    </ol>
 </nav>
 <div class="card">
    <div class="card-header d-flex justify-content-between">
       <div class="header-title">
          <h4 class="card-title">Edit Data Penjual</h4>
       </div>
    </div>
    <div class="card-body">
       <form action="{{ url('penjual/'. $penjual->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-row">
            <div class="col-md-6 mb-3">
                <label for="penjual_nama" class="form-label">Nama<span class="text-danger">*</span></label>
                <input type="text" name="penjual_nama" id="penjual_nama" class="form-control" placeholder="" value="{{ $penjual->penjual_nama }}">
            </div>
            <div class="col-md-6 mb-3">
                <label for="penjual_telp" class="form-label">Telepon<span class="text-danger">*</span></label>
                <input type="text" name="penjual_telp" id="penjual_telp" class="form-control" placeholder="" value="{{ $penjual->penjual_telp }}">
            </div>
            <div class="col-md-12 mb-3">
                <label for="penjual_alamat" class="form-label">Alamat<span class="text-danger">*</span></label>
                <textarea class="form-control -bottom-3" name="penjual_alamat" id="penjual_alamat" class="form-control" rows="4">{{ $penjual->penjual_alamat }}</textarea>
            </div>
        </div>
        <div class="modal-footer">
            <button class="btn btn-primary">Simpan</button>
            <button type="{{ url('penjual') }}" class="btn btn-secondary">Batal</button>
        </div>
       </form>
    </div>
 </div>
@endsection

