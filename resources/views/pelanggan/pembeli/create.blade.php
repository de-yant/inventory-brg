<!-- MODAL TAMBAH -->
<div class="modal fade" data-bs-backdrop="static" id="Tambahpembeli" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalCenterTitle">Tambah Data</h5>
            <button type="reset" class="close" data-bs-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <form method="POST" action="" >
                @csrf
                <div class="form-group">
                    <label for="pembeli_nama" class="form-label">Nama<span class="text-danger">*</span></label>
                    <input type="text" name="pembeli_nama" id="pembeli_nama" class="form-control" placeholder="Nama harus diisi">
                </div>
                <div class="form-group">
                    <label for="pembeli_telp" class="form-label">Telepon<span class="text-danger">*</span></label>
                    <input type="text" name="pembeli_telp" id="pembeli_telp" class="form-control" placeholder="Nomor telepon harus diisi">
                </div>
                <div class="form-group">
                    <label for="pembeli_alamat" class="form-label">Alamat<span class="text-danger">*</span></label>
                    <textarea name="pembeli_alamat" id="pembeli_alamat" class="form-control" rows="4" placeholder="Alamat harus diisi"></textarea>
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
