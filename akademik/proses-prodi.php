<?php
include("koneksi.php");

if(isset($_POST['submit'])){
    // Mengambil data dari form
    $nama_prodi = $_POST['nama_prodi'];
    $jenjang = $_POST['jenjang'];
    $keterangan = $_POST['keterangan'];

    /// cek apakah id sudah ada didalam tabel prodi
    $query = "INSERT INTO prodi(id, nama_prodi, jenjang, keterangan) VALUES('$nama_prodi','$jenjang','$keterangan')";

    $sql = mysqli_query($db, $query);

    if(mysqli_query($db, $query)){
        echo "<script>alert('Data berhasil disimpan'); window.location.href = 'prodi.php'</script>";
    }else{
        echo "<script>alert('Data Gagal Disimpan'); window.location.href = 'prodi.php'</script>";
    }
    }
    mysqli_close($db);
?>