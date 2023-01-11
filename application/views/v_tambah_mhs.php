<html>
    <head>
        <title>Tambah Data Mahasiswa</title>
    </head>
    <body>
        <div class="container-fluid pt-3 ph-5">
            <div class="card bg-info">
                <div class="card-header text-white"><strong>Tambah Data Mahasiswa</strong></div>
                <div class="card-body bg-light text-dark">
                    <form method="post" action="<?=base_url()?>mahasiswa/simpan" class="/was-validated">
                        <div class="form-group">
                            <label for="nim" class="form-label">NIM</label>
                            <input type="text" name="nim" class="form-control form-control-sm" required>
                        </div>
                        <div class="form-group">
                            <label for="nama" class="form-label">Nama</label>
                            <input type="text" name="nama" class="form-control form-control-sm" required>
                        </div>
                        <div class="form-group">
                            <label for="kdprodi" class="form-label">Program Studi</label>
                            <select name="kdprodi" class="form-control form-control-sm" required>
                                <option value="">-- Pilih Program Studi --</option>
                                <?php foreach ($prodi as $row) { ?>
                                <option value="<?=$row->kodeprodi?>"><?=$row->namaprodi?></option>
                                <?php }?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="jk" class="form-label">Jenis Kelamin</label>
                            <select name="jk" class="form-control form-control-sm" required>
                                <option value="L" selected>Laki-laki</option>
                                <option value="P">Perempuan</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="tgl" class="form-label">Tanggal Lahir</label>
                            <input type="date" name="tgl" class="form-control form-control-sm" required>
                        </div>
                        <div class="form-group">
                            <label for="alamat" class="form-label">Alamat</label>
                            <textarea name="alamat" rows="4" cols="50"  class="form-control form-control-sm" required></textarea>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-success btn-sm"><i class="fa fa-floppy-o" aria-hidden="true"></i> Simpan</button>
                            <a href="<?=base_url()?>mahasiswa" class="btn btn-warning btn-sm"><i class="fa fa-undo" aria-hidden="true"></i> Batal</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>