@extends('layouts.app')

@section('content')
<nav aria-label="breadcrumb">
    <ol class="breadcrumb iq-bg-primary">
       <li class="breadcrumb-item"><a href="{{ url('dashboard') }}"><i class="ri-home-4-line mr-1 float-left"></i>Dashboard</a></li>
       <li class="breadcrumb-item active" aria-current="page">Barang Masuk</li>
    </ol>
 </nav>
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
          <div class="card card-block card-stretch card-height">
             <div class="card-header d-flex justify-content-between">
                <div class="iq-header-title">
                   <h4 class="card-title mb-0">Data Barang Masuk</h4>
                </div>
                <a href="{{ url('/bm/create' )}}" class="btn btn-purple">Tambah Data</a>
             </div>
             <div class="card-body">
                @if (Session::has('success'))
                    <div class="alert alert-success" role="alert">
                        {{ Session::get('success') }}
                    </div>
                @endif
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                           <tr class="table">
                              <th scope="col">NO</th>
                              <th scope="col">TANGGAL MASUK</th>
                              <th scope="col">KODE BARANG MASUK</th>
                              <th scope="col">KODE BARANG</th>
                              <th scope="col">PENJUAL</th>
                              <th scope="col">JUMLAH MASUK</th>
                           </tr>
                        </thead>
                        <tbody>
                         @if($bm->count() > 0)
                         @foreach ($bm as $row )
                         <tr>
                             <th  scope="row">{{ $loop->iteration }}</th>
                             <td>{{ $row->bm_tanggal }}</td>
                             <td>{{ $row->bm_kode }}</td>
                             <td>{{ $row->barang_kode }}</td>
                             <td>{{ $row->penjual_id }}</td>
                             <td>{{ $row->bm_jumlah }}</td>
                         </tr>
                         @endforeach
                         @else
                         <tr>
                             <td class="text-center" colspan="8">Data Barang Masuk Masih Kosong</td>
                         </tr>
                         @endif
                        </tbody>
                     </table>
                </div>
             </div>
          </div>
        </div>
    </div>
</div>
@endsection
