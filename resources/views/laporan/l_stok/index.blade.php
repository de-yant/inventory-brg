@extends('layouts.app')

@section('content')
<nav aria-label="breadcrumb">
    <ol class="breadcrumb iq-bg-primary">
       <li class="breadcrumb-item"><a href="{{ url('dashboard') }}"><i class="ri-home-4-line mr-1 float-left"></i>Dashboard</a></li>
       <li class="breadcrumb-item active" aria-current="page">Laporan Stok Barang</li>
    </ol>
 </nav>
<div class="container-fluid">
    <div class="row">
       <div class="col-lg-12">
          <div class="card card-block card-stretch card-height">
             <div class="card-header d-flex justify-content-between">
                <div class="iq-header-title">
                   <h4 class="card-title mb-0">Laporan Stok Barang</h4>
                </div>
                <a href="{{ url('laporan-stok/cetakpdf') }}" class="btn btn-purple">PDF</a>
            </div>
            <div class="card-body">
                @if (Session::has('success'))
                    <div class="alert alert-success" role="alert">
                        {{ Session::get('success') }}
                    </div>
                @endif
                       <table class="table" width="100%">
                          <thead>
                             <tr>
                                <th class="border-bottom-0" width="1%" scope="col">NO</th>
                                <th class="border-bottom-0" scope="col">KODE BARANG</th>
                                <th class="border-bottom-0" scope="col">BARANG</th>
                                <th class="border-bottom-0" scope="col">STOK AWAL</th>
                                <th class="border-bottom-0" scope="col">JUMLAH MASUK</th>
                                <th class="border-bottom-0" scope="col">JUMLAH KELUAR</th>
                                <th class="border-bottom-0" scope="col">TOTAL STOK</th>
                             </tr>
                          <tbody>
                            @if($bs->count() > 0)
                            @foreach ($bs as $row )
                            <tr>
                                <th>{{ $loop->iteration }}</th>
                                <td>{{ $row->barang_kode }}</td>
                                <td>{{ $row->barang_nama }}</td>
                                <td>0</td>
                                <td>{{ $row->barang_masuk }}</td>
                                <td>{{ $row->barang_keluar }}</td>
                                <td>{{ $row->barang_stok }}</td>
                            </tr>
                            @endforeach
                            @else
                            <tr>
                                <td class="text-center" colspan="7">Data Laporan Stok Barang Masih Kosong</td>
                            </tr>
                            @endif
                          </tbody>
                       </table>
                    </>
                 </div>
             </div>
          </div>
       </div>
    </div>
 </div>
@endsection
