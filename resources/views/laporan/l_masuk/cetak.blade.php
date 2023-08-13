
<h2 align="center">Laporan Barang Masuk</h2>
<h4>
    <table border="1" align="center" cellpadding="5" cellspacing="0"  >
        <thead>
           <tr class="table" bgcolor="#a0a0a0" style="font-size: 12px">
              <th scope="col">NO</th>
              <th scope="col">TANGGAL MASUK</th>
              <th scope="col">KODE BARANG MASUK</th>
              <th scope="col">KODE BARANG</th>
              <th scope="col">PENJUAL</th>
              <th scope="col">JUMLAH MASUK</th>
           </tr>
        </thead>
        <tbody style="font-size: 10px">
         @if($bm->count() > 0)
         @foreach ($bm as $row )
         <tr>
             <th  scope="row">{{ $loop->iteration }}</th>
             <td style="text-align:center;">{{ $row->bm_tanggal }}</td>
             <td style="text-align:center;">{{ $row->bm_kode }}</td>
             <td style="text-align:center;">{{ $row->barang_kode }}</td>
             <td style="text-align:center;">{{ $row->penjual_id }}</td>
             <td style="text-align:center;">{{ $row->bm_jumlah }}</td>
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



