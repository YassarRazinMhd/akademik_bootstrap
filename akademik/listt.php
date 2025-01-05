<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap/bootstrap.min.css">
    <title>LIST DATA MAHASISWA</title>
</head>
<body>
    <h2>LIST DATA MAHASISWA</h2>
    <table border="1"  width="50%">
        <tr bgcolor="#99CCFF">
            <th>No.</th>
            <th>Nim Mahasiswa</th>
            <th>Nama Mahasiswa</th>
            <th>Tanggal Lahir</th>
            <th>Alamat Mahasiswa</th>
            <th>Aksi</th>
        </tr>

        <?php
            include("koneksi.php");
            $tampil = mysqli_query($db, "SELECT * FROM mahasiswa");
            $no = 1; 
            while ($data = mysqli_fetch_array($tampil)) { 
        ?>
       <tr>
        <td><?php echo $no++; ?></td>
        <td><?php echo $data['nim']; ?></td>
        <td><?php echo $data['nama_mhs']; ?></td>
        <td><?php echo $data['tgl_lahir']; ?></td>
        <td><?php echo $data['alamat']; ?></td>
        <td>
            <a href="hapus.php?nim=<?php echo $data['nim']?>">Hapus</a>
            <a href="edit.php?nim=<?php echo $data['nim']?>">Edit</a>
        </td>
       </tr>

       <?php
            }
       ?>
    </table>
    <p>
    Klik <a href="gboook.php">di sini </a>untuk Proses input data mahasiswa
</p>
</body>
</html>
