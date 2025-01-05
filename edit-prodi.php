<?php include('template/header.php') ?>

<?php
    include("koneksi.php");
    $id = $_GET['id'];
    $edit = mysqli_query($db, "SELECT * FROM prodi WHERE id='$id'");
    $data = mysqli_fetch_array($edit);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ubah Data prodi</title>
</head>
<body>
    <div class="container">
        <h1>Ubah Data Prodi</h1>
        <a href="prodi.php" class="btn btn-primary">Tampilkan Data Prodi</a>
        <form action="" method="POST" enctype="multipart/form-data">
            <input type="hidden" value="<?php echo $data['id']; ?>" name="id">
            <div class="mb-3">
                <label for="nama_prodi" class="form-label">Nama Prodi</label>
                <input type="text" class="form-control" id="nama_prodi" name="nama_prodi" value="<?php echo $data['nama_prodi']; ?>" required>
            </div>
            <div class="mb-3">
                <label for="jenjang" class="form-label">Jenjang</label>
                
                
                <select class="form-select" name="jenjang" required>
                <option value= "">Pilih jenjang</option>
                <option value= "D4">D4</option>
                <option value= "D3">D3</option>
                <option value= "S1">S1</option>
                <option value= "S2">S2</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="keterangan" class="form-label">Keterangan</label>
                <input type="text" class="form-control" id="keterangan" name="keterangan" value="<?php echo $data['keterangan']; ?>" required>
            </div>
            
            <input type="submit" class="btn btn-primary" value="SIMPAN" name="submit">
        </form>
    </div>
</body>
</html>

<?php
if (isset($_POST['submit'])) {
    $id = $_POST['id'];
    $nama_prodi = $_POST['nama_prodi'];
    $jenjang = $_POST['jenjang'];
    $keterangan = $_POST['keterangan'];

 $update = mysqli_query($db, "UPDATE prodi SET nama_prodi='$nama_prodi', jenjang='$jenjang', keterangan='$keterangan' WHERE id='$id'");
     
 
     if ($update) {
         
         header("Location: prodi.php");
     } else {
         echo "Maaf, data gagal diubah.";
     }
 }
 ?>
 
 <?php include('template/footer.php') ?>