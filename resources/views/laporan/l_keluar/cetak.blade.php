
<h2 align="center">Laporan Barang Keluar</h2>
<h4>
    <table border="1" align="center" cellpadding="5" cellspacing="0"  >
        <thead>
           <tr class="table" bgcolor="#a0a0a0" style="font-size: 12px">
              <th scope="col">NO</th>
              <th scope="col">TANGGAL KELUAR</th>
              <th scope="col">KODE BARANG KELUAR</th>
              <th scope="col">KODE BARANG</th>
              <th scope="col">PEMBELI</th>
              <th scope="col">TUJUAN</th>
              <th scope="col">JUMLAH KELUAR</th>
           </tr>
        </thead>
        <tbody style="font-size: 10px">
            @if($bk->count() > 0)
            @foreach ($bk as $row )
            <tr>
                <th >{{ $loop->iteration }}</th>
                <td style="text-align:center;">{{ $row->bk_tanggal }}</td>
                <td style="text-align:center;">{{ $row->bk_kode }}</td>
                <td style="text-align:center;">{{ $row->barang_kode }}</td>
                <td style="text-align:center;">{{ $row->bk_jumlah }}</td>
                <td style="text-align:center;">{{ $row->pembeli->pembeli_nama }}</td>
                <td style="text-align:center;">{{ $row->pembeli->pembeli_alamat }}</td>
            </tr>
            @endforeach
            @else
            <tr>
                <td class="text-center" colspan="7">Data Laporan Barang Keluar Masih Kosong</td>
            </tr>
            @endif
        </tbody>
     </table>
</h4>
<h4 align="center"><script>document.write(new Date().getFullYear())</script> ©  Inventory</h4>



