<html>
    <head>
        <title>Data Prodi</title>
    </head>
    <body>
        <div class="container-fluid pt-3 ph-5">
            <div class="card bg-info">
                <div class="card-header text-white"><strong>Data Program Studi</strong></div>
                <div class="card-body bg-light text-black">
                    <a href="<?=base_url()?>mahasiswa" class="btn btn-warning btn-sm"><i class="fa fa-undo" aria-hidden="true"></i> Kembali</a>
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
                            <?php foreach ($hasilcari as $row) { ?>
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