<html>
    <head>
        <title>Data Prodi</title>
    </head>
    <body>
        <div class="container-fluid pt-3 ph-5">
            <div class="card bg-info">
                <div class="card-header text-white"><strong>Data Matakuliah</strong></div>
                <div class="card-body bg-light text-black">
                    <a href="<?=base_url()?>mk" class="btn btn-warning btn-sm"><i class="fa fa-undo" aria-hidden="true"></i> Kembali</a>
                    <table class="table table-striped table-primary table-sm">
                        <tr>
                            <th>Kode MK</th>
                            <th>Nama MK</th>
                            <th>SKS</th>
                            <th>Aksi</th>
                        </tr>
                        <?php
                        foreach ($hasilcari as $row) {
                        ?>
                            <tr>
                                <td><?php echo $row->kodemk; ?></td>
                                <td><?php echo $row->namamk; ?></td>
                                <td><?php echo $row->sks; ?></td>
                                <td>
                                    <a href="<?php echo base_url() . 'mk/getmk/' . $row->kodemk; ?>" class="btn btn-primary btn-sm"><i class="fa fa-pencil-square" aria-hidden="true"></i></a>
                                    <a href="<?php echo base_url() . 'mk/hapus/' . $row->kodemk; ?>" class="btn btn-warning btn-sm"><i class="fa fa-scissors" aria-hidden="true"></i></a>
                            </tr>
                        <?php
                        }
                        ?>
                    </table>
                </div>
            </div>
        </div>
    </body>
</html>