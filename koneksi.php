<?php
  $server = "localhost";
  $user = "root";
  $password = "";
  $nama_database = "db_akademik";

  $db = mysqli_connect ($server, $user, $password, $nama_database);
  if (!$db) {
      die("Koneksi Gagal : ".  mysqli_connect_error());
  } 
?>