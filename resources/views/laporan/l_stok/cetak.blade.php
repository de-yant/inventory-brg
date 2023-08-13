
<h2 align="center">Laporan Stok Barang</h2>
<h4>
    <table border="1" align="center" cellpadding="5" cellspacing="0"  >
        <thead>
           <tr class="table" bgcolor="#a0a0a0" style="font-size: 12px">
              <th scope="col">NO</th>
              <th scope="col">KODE BARANG</th>
              <th scope="col">NAMA BARANG</th>
              <th scope="col">STOK AWAL</th>
              <th scope="col">STOK MASUK</th>
              <th scope="col">STOK KELUAR</th>
              <th scope="col">STOK SEKARANG</th>
           </tr>
        </thead>
        <tbody style="font-size: 10px">
         @if($bs->count() > 0)
         @foreach ($bs as $row )
         <tr>
             <th  scope="row">{{ $loop->iteration }}</th>
             <td style="text-align:center;">{{ $row->barang_kode }}</td>
             <td style="text-align:center;">{{ $row->barang_nama }}</td>
             <td style="text-align:center;">0</td>
             <td style="text-align:center;">{{ $row->barang_masuk }}</td>
             <td style="text-align:center;">{{ $row->barang_keluar }}</td>
             <td style="text-align:center;">{{ $row->barang_stok }}</td>
         </tr>
         @endforeach
         @else
         <tr>
             <td class="text-center" colspan="6">Data Barang Masuk Masih Kosong</td>
         </tr>
         @endif
        </tbody>
     </table>
</h4>
<h4 align="center"><script>document.write(new Date().getFullYear())</script> ©  Inventory</h4>



