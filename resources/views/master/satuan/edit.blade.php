@extends('layouts.app')

@section('content')

<nav aria-label="breadcrumb">
    <ol class="breadcrumb iq-bg-primary">
       <li class="breadcrumb-item"><a href="{{ url('dashboard') }}"><i class="ri-home-4-line mr-1 float-left"></i>Dashboard</a></li>
       <li class="breadcrumb-item"><a href="{{ url('satuanbarang') }}"></i>Satuan Barang</a></li>
       <li class="breadcrumb-item active" aria-current="page">Edit Data</li>
    </ol>
 </nav>
 <div class="card">
    <div class="card-body">
       <form action="{{ url('satuan/'. $satuan->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-row">
            <div class="col-md-12 mb-3">
                <label for="satuanbarang_nama" class="form-label">Satuan Barang <span class="text-danger">*</span></label>
                <input type="text" name="satuanbarang_nama" id="satuanbarang_nama" class="form-control" placeholder="" value="{{ $satuan->satuanbarang_nama }}">
            </div>
            <div class="col-md-12 mb-3">
                <label for="satuanbarang_ket" class="form-label">Keterangan<span class="text-danger"></span></label>
                <textarea class="form-control -bottom-3" name="satuanbarang_ket" id="satuanbarang_ket" class="form-control" rows="4">{{ $satuan->satuanbarang_ket }}</textarea>
            </div>
        </div>
        <div class="modal-footer">
            <button class="btn btn-primary">Simpan</button>
            <button type="{{ url('satuan') }}" class="btn btn-secondary">Batal</button>
        </div>
       </form>
    </div>
 </div>
@endsection

