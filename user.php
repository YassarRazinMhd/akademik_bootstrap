<?php include('template/header.php')?>
    
<div class="container">
    <h1>Data Prodi</h1>
    <a href="input-user.php" class="btn btn-primary">Input Data User</a>
        <table class="table table-striped table-bordered" id="tabel-mahasiswa">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Id</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Role</th>
                    <th>Aksi</th>  
                </tr>
            </thead>
            <tbody>
            <?php
              include("koneksi.php");
              $query= "SELECT * FROM user";
              $sql = mysqli_query($db, $query);
              $no = 1;
              while($row = mysqli_fetch_array($sql)){
            ?>
                <tr>
                    <td><?=$no++ ?></td>
                    <td><?= $row['id'];?></td>
                    <td><?= $row['nama'];?></td>
                    <td><?= $row['email'];?></td>
                    <td><?= $row['role'];?></td>
                    <td>
                    <a href="edit-user.php?id=<?= $row['id']?>" class="btn btn-warning btn-sm">Edit</a>
                    <a onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')" href="hapus-user.php?id=<?= $row['id']?>" class="btn btn-danger">Hapus</a>
                    </td>
                </tr>
                <?php }?>
            </tbody>
        </table>
    
<?php include('template/footer.php')?>