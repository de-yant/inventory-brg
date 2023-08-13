<!-- MODAL TAMBAH -->
<div class="modal fade" data-bs-backdrop="static" id="Tambahsatuan" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalCenterTitle">Tambah Data</h5>
            <button type="reset" class="close" data-bs-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <form method="POST" action="{{ route('satuan.store') }}">
                @csrf
                <div class="form-group">
                    <label for="satuanbarang_nama" class="form-label">Satuan Barang <span class="text-danger">*</span></label>
                    <input type="text" name="satuanbarang_nama" id="satuanbarang_nama" class="form-control" placeholder="Harus di isi ...">
                </div>
                <div class="form-group">
                    <label for="satuanbarang_ket" class="form-label">Keterangan</label>
                    <textarea name="satuanbarang_ket" id="satuanbarang_ket" class="form-control" rows="4"></textarea>
                </div>
            <div class="modal-footer">
                <button class="btn btn-primary">Simpan</button>
                <button type="reset" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
            </div>
            </form>
        </div>
    </div>
    </div>
</div>
