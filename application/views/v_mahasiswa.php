<html>
    <head>
        <title>Data Mahasiswa</title>
    </head>
    <body>
        <div class="container-fluid pt-3 ph-5">
            <div class="card bg-info">
                <div class="card-header text-white"><strong>Data Mahasiswa</strong></div>
                <div class="card-body bg-light text-dark">
                    <form action="<?=base_url()?>mahasiswa/cari" method="post">
                        <table style="width: 100%;">
                            <tbody>
                                <tr>
                                    <td style="width: 15%; text-align:left;">
                                        <a href="<?=base_url()?>mahasiswa/tambah" class="btn btn-success btn-sm"><i class="fa fa-plus-square" aria-hidden="true"></i> Tambah Data</a>
                                    </td>
                                    <td style="width: 80%; text-align:right;">
                                        <input type="text" id="cari" name="cari" value="" placeholder="Pencarian Data Mahasiswa" class="form-control form-control-sm">
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
                                <th>NIM</th>
                                <th>Nama</th>
                                <th>Prodi</th>
                                <th>Tanggal Lahir</th>
                                <th>Jenis Kelamin</th>
                                <th>Alamat</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($mahasiswa as $row) { ?>
                            <tr>
                                <td><?=$row->nim?></td>
                                <td><?=$row->nama?></td>
                                <td><?=$row->namaprodi?></td>
                                <td><?=$row->tgl_lahir?></td>
                                <td><?=$row->jenis_kelamin?></td>
                                <td><?=$row->alamat?></td>
                                <td>
                                    <a href="<?=base_url()?>mahasiswa/getmhs/<?=$row->nim?>" class="btn btn-primary btn-sm"><i class="fa fa-pencil-square" aria-hidden="true"></i></a>
                                    <a href="<?=base_url()?>mahasiswa/hapus/<?=$row->nim?>" class="btn btn-warning btn-sm"><i class="fa fa-scissors" aria-hidden="true"></i></a>
                                </td>
                            </tr>
                            <?php }?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </body>
</html>