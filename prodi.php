<?php include('template/header.php')?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
    <div class="container">
    <h1>Data Prodi</h1>
    <a href="index-prodi.php" class="btn btn-primary">Input Data Prodi</a>
    <button id="exportprodi" class="btn btn-success">UNDUH PDF</button>
        <table class="table table-striped table-bordered" id="tabel-mahasiswa">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Prodi</th>
                    <th>Jenjang</th>
                    <th>Keterangan</th>
                    <th>Aksi</th>  
                </tr>
            </thead>
            <tbody>
            <?php
              include("koneksi.php");
              $query= "SELECT * FROM prodi";
              $sql = mysqli_query($db, $query);
              $no = 1;
              while($row = mysqli_fetch_array($sql)){
            ?>
                <tr>
                    <td><?=$no++ ?></td>
                    <td><?= $row['nama_prodi'];?></td>
                    <td><?= $row['jenjang'];?></td>
                    <td><?= $row['keterangan'];?></td>

                    <td>
                    <a href="edit-prodi.php?id=<?= $row['id']?>" class="btn btn-warning btn-sm">Edit</a>
                    <a onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')" href="hapus-prodi.php?id=<?= $row['id']?>" class="btn btn-danger">Hapus</a>
                    </td>
                </tr>
                <?php }?>
            </tbody>
        </table>
    </body>
    </html>

<?php include('template/footer.php')?>