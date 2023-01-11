<html>
    <head>
        <title>Tambah Prodi</title>
    </head>
    <body >
        <div class="container-fluid pt-3">
            <div class="card bg-info">
                <div class="card-header text-white"><strong>Tambah Data Program Studi</strong></div>
                <div class="card-body bg-light text-black">
                    <form action="<?php echo base_url() . 'prodi/simpan'; ?>" method="post" class="/was-validated">
                        <table>
                            <tr>
                                <td><label for="" class="form-label">Kode Prodi</label></td>
                                <td><input type="text" name="kdprodi" class="form-control form-control-sm" required></td>
                            </tr>
                            <tr>
                                <td><label for="" class="form-label">Nama Prodi</label></td>
                                <td><input type="text" name="nmprodi" class="form-control form-control-sm" required></td>
                            </tr>
                            <tr>
                                <td>
                                    <button type="submit" class="btn btn-success btn-sm"><i class="fa fa-floppy-o" aria-hidden="true"></i> Simpan</button>
                                    <a href="<?=base_url()?>prodi" class="btn btn-warning btn-sm"><i class="fa fa-undo" aria-hidden="true"></i> Batal</a>
                                </td>
                            </tr>
                        </table>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>