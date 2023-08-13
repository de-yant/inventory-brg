@extends('layouts.app')

@section('content')
<nav aria-label="breadcrumb">
    <ol class="breadcrumb iq-bg-primary">
       <li class="breadcrumb-item"><a href="{{ url('dashboard') }}"><i class="ri-home-4-line mr-1 float-left"></i>Dashboard</a></li>
       <li class="breadcrumb-item active" aria-current="page">Barang</li>
    </ol>
 </nav>
<div class="container-fluid">
    <div class="row">
       <div class="col-lg-12">
          <div class="card card-block card-stretch card-height">
             <div class="card-header d-flex justify-content-between">
                <div class="iq-header-title">
                   <h4 class="card-title mb-0">Data Barang</h4>
                </div>
                <a href="{{ url('barang/create')}}" class="btn btn-purple">Tambah Data</a>
             </div>
             <div class="card-body">
                @if (Session::has('success'))
                    <div class="alert alert-success" role="alert">
                        {{ Session::get('success') }}
                    </div>
                @endif
                <table class="table">
                   <thead>
                      <tr>
                         <th scope="col">NO</th>
                         <th scope="col">GAMBAR</th>
                         <th scope="col">KODE BARANG</th>
                         <th scope="col">NAMA BARANG</th>
                         <th scope="col">STOK AWAL</th>
                         <th scope="col">HARGA</th>
                         <th scope="col">AKSI</th>
                      </tr>
                   </thead>
                   <tbody>
                    @if($barangs->count() > 0)
                    @foreach ($barangs as $brg )
                    <tr>
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td>
                            <img src="{{ asset('images/'.$brg->barang_gambar) }}" alt="img" style="width: 50px">
                        </td>
                        <td>{{ $brg->barang_kode}}</td>
                        <td>{{ $brg->barang_nama }}</td>
                        <td>{{ $brg->barang_stok }}</td>
                        <td>Rp. {{ $brg->barang_harga }}</td>
                        <td>
                            <div class="flex align-items-center list-user-action">
                                <a class="btn btn-sm bg-info" data-toggle="tooltip" data-id="{{ $brg->id }}" data-placement="top" title=""
                                    data-original-title="Detail" href="{{ url('/barang/' . $brg->id . '/show')}}"><i class="ri-eye-line mr-0"></i></a>
                                <a class="btn btn-sm bg-secondary" data-toggle="tooltip" data-id="{{ $brg->id }}" data-placement="top" title=""
                                    data-original-title="Edit" href="{{ url('/barang/' . $brg->id . '/edit' )}}"><i class="ri-pencil-line mr-0"></i></a>
                                <a class="btn btn-sm bg-danger delete" data-toggle="tooltip" data-id="{{ $brg->id }}" data-placement="top" title=""
                                    data-original-title="Hapus" href="#"><i class="ri-delete-bin-line mr-0"></i></a>
                            </div>
                         </td>
                     </tr>
                    @endforeach
                    @else
                            <tr>
                                <td class="text-center" colspan="10">Data Barang Tidak Ada</td>
                            </tr>
                            @endif
                   </tbody>
                </table>
             </div>
          </div>
      </div>
    </div>
</div>

<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
 <script src="https://code.jquery.com/jquery-3.7.0.slim.js" integrity="sha256-7GO+jepT9gJe9LB4XFf8snVOjX3iYNb0FHYr5LI1N5c=" crossorigin="anonymous"></script>

 <script>
    $('.delete').click(function(){
            var barang_id = $(this).attr('data-id');
            var url = "{{ route('barang.destroy', ':barang_id') }}";

            swal({
                title: "Yakin?",
                text: "Kamu akan menghapus data ini!",
                icon: "warning",
                buttons: true,
                dangerMode: true,
            })
            .then((willDelete) => {
                console.log(willDelete);
                if (willDelete) {
                    window.location = "/barang/"+barang_id;
                    swal("Data Berhasil Dihapus", {
                    icon: "success",
                    });
                } else {
                    swal("Data kamu aman!");
                }
            });
        });
</script>
@endsection
