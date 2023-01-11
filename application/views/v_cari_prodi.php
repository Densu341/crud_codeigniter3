<html>
    <head>
        <title>Data Prodi</title>
    </head>
    <body>
        <div class="container-fluid pt-3 ph-5">
            <div class="card bg-info">
                <div class="card-header text-white"><strong>Data Program Studi</strong></div>
                <div class="card-body bg-light text-black">
                    <a href="<?=base_url()?>prodi" class="btn btn-warning btn-sm"><i class="fa fa-undo" aria-hidden="true"></i> Kembali</a>
                    <table class="table table-striped table-primary table-sm">
                        <thead>
                            <tr>
                                <th>Kode</th>
                                <th>Nama Prodi</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                                foreach ($hasilcari as $row){
                            ?>
                            <tr>
                                <td><?php echo $row->kodeprodi;?></td>
                                <td><?php echo $row->namaprodi;?></td>
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