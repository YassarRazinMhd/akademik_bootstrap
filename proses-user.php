<?php
include("koneksi.php");

if(isset($_POST['submit'])){
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $password = md5($_POST['password']);
    $role = $_POST['role'];

    /// cek apakah id sudah ada didalam tabel prodi
    $cek_query = "SELECT * FROM user WHERE id='$id'";
    $cek_sql = mysqli_query($db, $cek_query);
        
    $query = "INSERT INTO user(id, nama, email, password, role) VALUES('$id', '$nama','$email','$password', '$role')";

    $sql = mysqli_query($db, $query);

    if($sql){
        echo "<script>alert('Data berhasil disimpan'); window.location.href = 'user.php'</script>";
    }else{
        echo "<script>alert('Data Gagal Disimpan'); window.location.href = 'user.php'</script>";
    }
    }
?>