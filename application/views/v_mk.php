<html>
    <head>
        <title>Data Matakuliah</title>
    </head>
    <body>
        <div class="container-fluid pt-3 ph-5">
            <div class="card bg-info">
                <div class="card-header text-white"><strong>Data Matakuliah</strong></div>
                <div class="card-body bg-light text-dark">
                    <form action="<?=base_url()?>mk/cari" method="post">
                        <table style="width: 100%;">
                            <tbody>
                                <tr>
                                    <td style="width: 15%; text-align:left;">
                                        <a href="<?=base_url()?>mk/tambah" class="btn btn-success btn-sm"><i class="fa fa-plus-square" aria-hidden="true"></i> Tambah Data</a>
                                    </td>
                                    <td style="width: 80%; text-align:right;">
                                        <input type="text" id="cari" name="cari" value="" placeholder="Pencarian Data Matakuliah" class="form-control form-control-sm">
                                    </td>
                                    <td style="width: 5%; text-align:right;">
                                        <button type="submit" class="btn btn-block btn-success btn-sm"><i class="fa fa-search" aria-hidden="true"></i> Cari</button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </form>
                    <table class="table table-striped table-primary table-sm">
                        <tr>
                            <th>No</th>
                            <th>Kode MK</th>
                            <th>Nama MK</th>
                            <th>SKS</th>
                            <th>Aksi</th>
                        </tr>
                        <?php
                        $no = 1;
                        foreach ($mk as $row) {
                        ?>
                            <tr>
                                <td><?php echo $no++; ?></td>
                                <td><?php echo $row->kodemk; ?></td>
                                <td><?php echo $row->namamk; ?></td>
                                <td><?php echo $row->sks; ?></td>
                                <td>
                                    <a href="<?php echo base_url() . 'mk/getmk/' . $row->kodemk; ?>" class="btn btn-primary btn-sm"><i class="fa fa-pencil-square" aria-hidden="true"></i></a>
                                    <a href="<?php echo base_url() . 'mk/hapus/' . $row->kodemk; ?>" class="btn btn-warning btn-sm"><i class="fa fa-scissors" aria-hidden="true"></i></a>
                                </td>
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