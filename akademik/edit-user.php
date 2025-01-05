<?php include('template/header.php') ?>

<?php
    include("koneksi.php");
    $id = $_GET['id'];
    $edit = mysqli_query($db, "SELECT * FROM user WHERE id='$id'");
    $data = mysqli_fetch_array($edit);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ubah Data User</title>
</head>
<body>
    <div class="container">
        <h1>Ubah Data User</h1>
        <a href="user.php" class="btn btn-primary">Tampilkan Data User</a>
        <form action="" method="POST" enctype="multipart/form-data">
            <input type="hidden" value="<?php echo $data['id']; ?>" name="id">
            <div class="mb-3">
                <label for="nama" class="form-label">Nama User</label>
                <input type="text" class="form-control" id="nama" name="nama" value="<?= $data['nama'] ?>" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="text" class="form-control" id="email" name="email" value="<?php echo $data['email']; ?>" required>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" name="password" placeholder="kosongkan password jika tidak ingin diubah!">
            </div>
            <div class="mb-3">
                <label for="role" class="form-label">Role</label>
                <select class="form-select" name="role" required>
                <option value= "">Pilih role</option>
                <option value= "superadmin" <?= $data['role'] == 'superadmin' ? 'selected' : ''?>>Superadmin</option>
                <option value= "admin" <?= $data['role'] == 'admin' ? 'selected' : ''?>>Admin</option>
                <option value= "user" <?= $data['role'] == 'user' ? 'selected' : ''?>>User</option>
                </select>
            </div>
            
            <input type="submit" class="btn btn-primary" value="SIMPAN" name="submit">
        </form>
    </div>
</body>
</html>

<?php
if (isset($_POST['submit'])) {
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $password = md5($_POST['password']);
    $role = $_POST['role'];

 $update = mysqli_query($db, "UPDATE user SET nama='$nama', email='$email', password='$password',role='$role' WHERE id='$id'");
     
 
     if ($update) {
         
         header("Location: user.php");
     } else {
         echo "Maaf, data gagal diubah.";
     }
 }
 ?>
 
 <?php include('template/footer.php') ?>