<html>
    <head>
        <title>Data Prodi</title>
    </head>
    <body>
        <div class="container-fluid pt-3 ph-5">
            <div class="card bg-info">
                <div class="card-header text-white"><strong>Data Program Studi</strong></div>
                <div class="card-body bg-light text-black">
                    <form action="<?=base_url()?>prodi/cari" method="post">
                        <table style="width: 100%;">
                            <tbody>
                                <tr>
                                    <td style="width: 15%; text-align:left;">
                                        <a href="<?=base_url()?>prodi/tambah" class="btn btn-success btn-sm"><i class="fa fa-plus-square" aria-hidden="true"></i> Tambah Data</a>
                                    </td>
                                    <td style="width: 80%; text-align:right;">
                                        <input type="text" id="ktkunci" name="ktkunci" value="" placeholder="Pencarian Data Prodi" class="form-control form-control-sm">
                                    </td>
                                    <td style="width: 5%; text-align:right;">
                                        <button type="submit" class="btn btn-block btn-success btn-sm"><i class="fa fa-search" aria-hidden="true"></i> Cari</button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </form>
                    <table class="table table-striped table-primary table-sm">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Kode Prodi</th>
                                <th>Nama Prodi</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no = 1;
                            foreach ($prodi as $row) {
                            ?>
                                <tr>
                                    <td><?php echo $no++; ?></td>
                                    <td><?php echo $row->kodeprodi; ?></td>
                                    <td><?php echo $row->namaprodi; ?></td>
                                    <td>
                                        <a href="<?php echo base_url() . 'prodi/getprodi/' . $row->kodeprodi; ?>" class="btn btn-primary btn-sm"><i class="fa fa-pencil-square"></i></a>
                                        <a href="<?php echo base_url() . 'prodi/hapus/' . $row->kodeprodi; ?>" class="btn btn-warning btn-sm"><i class="fa fa-scissors"></i></a>
                                    </td>
                                </tr>
                            <?php
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </body>
</html>