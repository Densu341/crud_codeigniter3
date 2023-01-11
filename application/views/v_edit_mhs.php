<html>
    <head>
        <title>Edit Data Mahasiwa</title>
    </head>
    <body>
        <div class="container-fluid pt-3 ph-5">
            <div class="card bg-info">
                <div class="card-header text-white"><strong>Edit Data Mahasiswa</strong></div>
                <div class="card-body bg-light text-dark">
                    <form method="post" action="<?=base_url()?>mahasiswa/update" class="/was-validated">
                        <div class="form-group">
                            <label for="nim" class="form-label">NIM</label>
                            <input type="text" name="nim" value="<?=$nim?>" class="form-control form-control-sm" required>
                        </div>
                        <div class="form-group">
                            <label class="form-label">Nama</label>
                            <input type="text" name="nama" value="<?=$nama?>" class="form-control form-control-sm" required>
                        </div>
                        <div class="form-group">
                            <label class="form-label">Program Studi</label>
                            <select name="kdprodi" class="form-control form-control-sm" required>
                                <?php foreach ($prodi as $row) { 
                                if ($row->kodeprodi == $kdprodi) { ?>
                                <option value="<?php echo $row->kodeprodi;?>"selected><?php echo $row->namaprodi;?></option>
                                <?php }else {
                                ?>
                                <option value="<?php echo $row->kodeprodi;?>"><?php echo $row->namaprodi;?></option>
                                <?php }
                                     }
                                ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label class="form-label">Jenis Kelamin</label>
                            <select name="jk" class="form-control form-control-sm" required>
                                <?php if ($jk == 'L') { ?>
                                <option value="L" selected>Laki-laki</option>
                                <option value="P">Perempuan</option>
                                <?php } else { ?>
                                <option value="L">Laki-laki</option>
                                <option value="P" selected>Perempuan</option>
                                <?php }?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="tgl" class="form-label">Tanggal Lahir</label>
                            <input type="date" name="tgl" value="<?=$tgl?>" class="form-control form-control-sm" required>
                        </div>
                        <div class="form-group">
                            <label for="alamat" class="form-label">Alamat</label>
                            <textarea name="alamat" rows="4" cols="50" class="form-control form-control-sm" required><?=$alamat?></textarea>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-success btn-sm"><i class="fa fa-floppy-o" aria-hidden="true"></i> Simpan</button>
                            <a href="<?=base_url()?>mahasiswa" class="btn btn-warning btn-sm"><i class="fa fa-undo" aria-hidden="true"></i> Batal</a>
                            <input type="text" value="<?php echo $nim;?>" name="nimlama" hidden>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>