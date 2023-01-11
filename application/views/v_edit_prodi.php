<html>
    <head>
        <title>Update Data Prodi</title>
    </head>
    <body>
        <div class="container-fluid pt-3">
            <div class="card bg-info">
                <div class="card-header text-white"><strong>Edit Data Program Studi</strong></div>
                <div class="card-body bg-light text-black">
                    <form action="<?php echo base_url() . 'prodi/update'; ?>" method="post">
                        <table>
                            <tr>
                                <td for="" class="form-label">Kode Prodi</td>
                                <td><input type="text" name="kdprodi" value="<?php echo $kdprodi; ?>" ></td>
                            </tr>
                            <tr>
                                <td for="" class="form-label">Nama Prodi</td>
                                <td><input type="text" name="nmprodi" value="<?php echo $nmprodi; ?>"></td>
                            </tr>
                            <tr>
                                <td>
                                    <button type="submit" class="btn btn-success btn-sm"><i class="fa fa-floppy-o" aria-hidden="true"></i> Simpan</button>
                                    <a href="<?=base_url()?>prodi" class="btn btn-warning btn-sm"><i class="fa fa-undo" aria-hidden="true"></i> Batal</a>
                                </td>
                                <td><input type="text" value="<?php echo $kdprodi; ?>" name="kdprodilama" hidden></td>
                            </tr>
                        </table>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>