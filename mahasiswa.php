<?php include('template/header.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.4.0/jspdf.umd.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf-autotable/3.5.13/jspdf.plugin.autotable.min.js"></script>
</head>
<body>
<div class="container">
    <h1>Data Mahasiswa</h1>
    <a href="index.php" class="btn btn-primary">Input Data Mahasiswa</a>
    <button id="exportmahasiswa" class="btn btn-success">UNDUH PDF</button>
    <table class="table table-striped table-hover" id="tabel-mahasiswa">
        <thead>
            <tr>
                <th>No</th>
                <th>NIM</th>
                <th>Prodi</th>
                <th>Nama</th>
                <th>Tanggal Lahir</th>
                <th>Alamat</th>
                <th>Foto</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php
            include('koneksi.php');
            $query = "SELECT m.*, p.nama_prodi FROM mahasiswa m JOIN prodi p ON m.prodi_id = p.id";
            $sql = mysqli_query($db, $query);
            $no = 1;
            while($row = mysqli_fetch_array($sql)){
            ?>
                <tr>
                    <td><?= $no++; ?></td>
                    <td><?= $row['nim']; ?></td>
                    <td><?= $row['nama_prodi']; ?></td>
                    <td><?= $row['nama_mhs']; ?></td>
                    <td><?= $row['tgl_lahir']; ?></td>
                    <td><?= $row['alamat']; ?></td>
                    <td><img src="picture/<?= $row['foto']; ?>" class="img-fluid" width="100px" alt=""></td>
                    <td>
                        <a href="edit-mahasiswa.php?nim=<?= $row['nim']; ?>" class="btn btn-warning">Edit</a>
                        <a href="hapus-mahasiswa.php?nim=<?= $row['nim']; ?>" class="btn btn-danger">Hapus</a>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>
<script>
    document.getElementById('exportmahasiswa').addEventListener('click', function () {
        exportTableToPDF('tabel-mahasiswa', 'mahasiswa.pdf');
    });

    function exportTableToPDF(tableId, filename) {
        const { jsPDF } = window.jspdf;
        const doc = new jsPDF();
        doc.autoTable({ html: '#' + tableId });
        doc.save(filename);
    }
</script>
</body>
</html>

<?php include('template/footer.php'); ?>