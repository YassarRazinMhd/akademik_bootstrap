<?php include('template/header.php') ?>
  <div class="container">
    <h1>Input Data User</h1>
    <p>
    Klik <a href="user.php">di sini </a>untuk melihat list user
    </p>
    <form action="proses-user.php" method="POST" enctype="multipart/form-data">
    <div class="mb-3">
            <label for="nama" class="form-label">Nama User</label>
             <input type="text" class="form-control" id="nama" name="nama" required>
         </div><div class="mb-3">
            <label for="email" class="form-label">Email</label>
             <input type="text" class="form-control" id="email" name="email" required>
         </div>
         <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" id="password" name="password" placeholder="kosongkan password jika tidak ingin diubah!">
        </div>
         <div class="mb-3">
                <label for="role" class="form-label">Role</label>
                <select class="form-select" name="role" required>
                <option value= "">Pilih role</option>
                <option value= "superadmin">Superadmin</option>
                <option value= "admin">Admin</option>
                <option value= "user">User</option>
                </select>
        </div>
         <input type="submit" class="btn btn-primary" value="Simpan" name="submit">
         <input type="reset" class="btn btn-danger" name="reset">
    </form>
</div>
<?php include('template/footer.php')?>