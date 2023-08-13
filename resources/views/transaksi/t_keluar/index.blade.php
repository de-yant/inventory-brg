@extends('layouts.app')

@section('content')
<nav aria-label="breadcrumb">
    <ol class="breadcrumb iq-bg-primary">
       <li class="breadcrumb-item"><a href="dashboard"><i class="ri-home-4-line mr-1 float-left"></i>Dashboard</a></li>
       <li class="breadcrumb-item active" aria-current="page">Barang Keluar</li>
    </ol>
 </nav>
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
          <div class="card card-block card-stretch card-height">
             <div class="card-header d-flex justify-content-between">
                <div class="iq-header-title">
                   <h4 class="card-title mb-0">Data Barang Keluar</h4>
                </div>
                <a href="{{ url('/bk/create' )}}" class="btn btn-purple">Tambah Data</a>
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
                              <th scope="col">TANGGAL KELUAR</th>
                              <th scope="col">KODE BARANG KELUAR</th>
                              <th scope="col">KODE BARANG</th>
                              <th scope="col">PEMBELI</th>
                              <th scope="col">TUJUAN</th>
                              <th scope="col">JUMLAH KELUAR</th>
                           </tr>
                        </thead>
                        <tbody>
                         @if($bk->count() > 0)
                         @foreach ($bk as $row )
                         <tr>
                             <th  scope="row">{{ $loop->iteration }}</th>
                             <td>{{ $row->bk_tanggal }}</td>
                             <td>{{ $row->bk_kode }}</td>
                             <td>{{ $row->barang_kode }}</td>
                             <td>{{ $row->pembeli->pembeli_nama }}</td>
                             <td>{{ $row->pembeli->pembeli_alamat }}</td>
                             <td>{{ $row->bk_jumlah }}</td>
                         </tr>
                         @endforeach
                         @else
                         <tr>
                             <td class="text-center" colspan="8">Data Barang Keluar Masih Kosong</td>
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
