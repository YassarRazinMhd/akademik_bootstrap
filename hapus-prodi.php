<?php
include('koneksi.php');
$id = $_GET['id'];
$query = "DELETE FROM prodi WHERE id='$id'";
$sql = mysqli_query($db, $query);

if($sql){
    header("Location:prodi.php");
}else{
    echo"gagal menghapus data bang!";
}
?>