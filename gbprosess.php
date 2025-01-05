<?php 

  include("koneksi.php");

 if(isset($_POST['submit'])) {
    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $tgl = $_POST['tgl'];
    $alamat = $_POST['alamat'];
  

  $sql = mysqli_query ($db, "INSERT INTO mahasiswa(nim, nama_mhs, tgl_lahir, alamat) VALUES ('$nim','$nama', '$tgl', '$alamat')");
  
  if($sql) {
     echo "Terimakasih Telah Mengisi data mahasiswa <br>";
     echo "<a href='listt.php'>Lihat Data Mahasiswa</a>";
  }
  else 
  {
     echo "Gagal Mengisi Data Mahasiswa <br>";
  }
} 

?> 