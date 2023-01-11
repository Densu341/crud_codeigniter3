<html>
    <head>
        <title>Edit Data Matakuliah</title>
    </head>
    <body>
        <div class="container-fluid pt-3">
            <div class="card bg-info">
                <div class="card-header text-white"><strong>Edit Data Program Studi</strong></div>
                <div class="card-body bg-light text-black">
                    <form action="<?php echo base_url() . 'mk/update'; ?>" method="post" class="/was-validated">
                        <table>
                            <tr>
                                <td>Kode MK</td>
                                <td><input type="hidden" name="kdmklama" value="<?php echo $kdmk; ?>" class="form-control form-control-sm" required>
                                    <input type="text" name="kdmk" value="<?php echo $kdmk; ?>" class="form-control form-control-sm" required></td>
                            </tr>
                            <tr>
                                <td>Nama MK</td>
                                <td><input type="text" name="nmmk" value="<?php echo $nmmk; ?>" class="form-control form-control-sm" required></td>
                            </tr>
                            <tr>
                                <td>SKS</td>
                                <td><input type="number" min="1" max="6" name="sks" value="<?php echo $sks; ?>" class="form-control form-control-sm" required></td>
                            </tr>
                            <tr>
                                <td>
                                    <button type="submit" class="btn btn-success btn-sm"><i class="fa fa-floppy-o" aria-hidden="true"></i> Simpan</button>
                                    <a href="<?=base_url()?>mk" class="btn btn-warning btn-sm"><i class="fa fa-undo" aria-hidden="true"></i> Batal</a>
                                </td>
                            </tr>
                        </table>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>