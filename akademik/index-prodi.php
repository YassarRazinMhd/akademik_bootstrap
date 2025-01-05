<?php include('template/header.php') ?>
  <div class="container">
    <h1>Input Data Prodi</h1>
    <p>
    Klik <a href="prodi.php">di sini </a>untuk melihat list prodi
    </p>
    <form action="proses-prodi.php" method="POST" enctype="multipart/form-data">
    <div class="mb-3">
                <label for="nama_prodi" class="form-label">Nama Prodi</label>
                <input type="text" class="form-control" id="nama_prodi" name="nama_prodi" required>
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
                <input type="text" class="form-control" id="keterangan" name="keterangan" required>
            </div>
         <input type="submit" class="btn btn-primary" value="Simpan" name="submit">
         <input type="reset" class="btn btn-danger" name="reset">
    </form>
</div>
<?php include('template/footer.php')?>