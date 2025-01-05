<?php include('template/header.php')?>
<?php
    include("koneksi.php");
    $edit=mysqli_query($db,"SELECT * FROM mahasiswa , prodi where nim=$_GET[nim]");
    $data=mysqli_fetch_array($edit);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h2>Ubah data mahasiswa</h2>
    <form method="post" action="">
    <table width="100%" border="0">
    <div class="mb-3">
            <label for="nim" class="form-label">NIM</label>
             <input type="number" class="form-control" id="nim" name="nim" required value=<?php echo "$data[nim]"; ?>>
         </div>
         <div class="mb-3">
            <label for="nama_mhs" class="form-label">Nama Mahasiswa</label>
             <input type="text" class="form-control" id="nama_mhs" name="nama_mhs" required value=<?php echo "$data[nama_mhs]"; ?>>
         </div>
         <div class="mb-3">
            <label for="prodi_id" class="form-label">Prodi</label>
            <select class="form-select" name="prodi_id" required>
            <option value=""><?php echo "$data[nama_prodi]"; ?></option>
            <?php
                include("koneksi.php");
                $query_prodi = mysqli_query($db, "SELECT * FROM prodi");
                while($prodi = mysqli_fetch_array($query_prodi)){
            ?>
            <option value="<?=$prodi['id']?>"><?=$prodi['nama_prodi']?></option>
            <?php    } ?>
            </select>
         </div>
         <div class="mb-3">
            <label for="tgl_lahir" class="form-label">Tanggal Lahir</label>
             <input type="date" class="form-control" id="tgl_lahir" name="tgl_lahir" required value=<?php echo "$data[tgl_lahir]"; ?>>
         </div>
         <div class="mb-3">
            <label for="alamat" class="form-label">Alamat</label>
            <textarea class="form-control" id="alamat" name="alamat" rows="3"><?php echo"$data[alamat]"; ?></textarea>
         </div><div class="mb-3">
            <label for="foto" class="form-label">Foto</label>
            <input accept="image/*" class="form-control" type="file" id="foto" name="foto" required value=<?php echo "$data[foto]"; ?>>
         </div>
         <input type="submit" class="btn btn-primary" value="Simpan" name="submit">
         <input type="reset" class="btn btn-danger" name="reset">
    </table>
    </form>
</body>
</html>
<?php
if (isset($_POST['submit'])) {
$update=mysqli_query($db,"UPDATE mahasiswa SET nim='$_POST[nim]',nama_mhs='$_POST[nama_mhs]', tgl_lahir='$_POST[tgl_lahir]', alamat='$_POST[alamat]' WHERE nim=$_GET[nim]");
if ($update) {
header ("Location:mahasiswa.php");
} else {
print "Maaf, data gagal diubah ";
}
}
?>
<?php include('template/footer.php')?>
