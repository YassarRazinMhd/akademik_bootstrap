<?php
  session_start();
  ///cek apakah sudah login atau belum
  if(!isset($_SESSION['masuk'])){
      header("Location: login.php");
  }
?>
<?php include('template/header.php') ?>
  <div class="container">
    <h1>Input Data Mahasiswa</h1>
    <p>
    Klik untuk melihat <a href="mahasiswa.php">list mahasiswa</a>
    </p>
    <form action="proses-mahasiswa.php" method="POST" enctype="multipart/form-data">
        <div class="mb-3">
            <label for="nim" class="form-label">NIM</label>
             <input type="number" class="form-control" id="nim" name="nim" required>
         </div>
         <div class="mb-3">
            <label for="nama_mhs" class="form-label">Nama Mahasiswa</label>
             <input type="text" class="form-control" id="nama_mhs" name="nama_mhs" required>
         </div>
         <div class="mb-3">
            <label for="prodi_id" class="form-label">Prodi</label>
            <select class="form-select" name="prodi_id" required>
            <option value="">Pilih Prodi</option>
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
             <input type="date" class="form-control" id="tgl_lahir" name="tgl_lahir" required>
         </div>
         <div class="mb-3">
            <label for="alamat" class="form-label">Alamat</label>
            <textarea class="form-control" id="alamat" name="alamat" rows="3"></textarea>
         </div><div class="mb-3">
            <label for="foto" class="form-label">Foto</label>
            <input accept="image/*" class="form-control" type="file" id="foto" name="foto" required>
         </div>
         <input type="submit" class="btn btn-primary" value="Simpan" name="submit">
         <input type="reset" class="btn btn-danger" name="reset">
    </form>
</div>
<?php include('template/footer.php')?>