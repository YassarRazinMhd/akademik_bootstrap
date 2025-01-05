<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="author" content="Mhd. Razin Yassar ">
    <link rel="stylesheet" href="bootstrap/bootstrap.min.css">
    <title>G-Book</title>
</head>
<body>
    <h2>DATA MAHASISWA</h2>
    <form action="gbprosess.php" method="POST">
    <table>
        <tr>
            <td>Nim Mahasiswa </td>
            <td><input type="number" name="nim" id="nim" placeholder="Masukkan Nim Anda"></td>
        </tr>
        <tr>
            <td>Nama Mahasiswa </td>
            <td><input type="text" name="nama" id="nama" placeholder="Masukkan Nama Anda"></td>
        </tr>
        <tr>
            <td>Tanggal Lahir </td>
            <td><input type="date" name="tgl" id="tgl" placeholder="Masukkan Tanggal Lahir"></td>
        </tr>
        <tr>
            <td>Alamat </td>
            <td><input type="text" name="alamat" placeholder="Masukkan Alamat Anda" ></td>
        </tr>
        <tr>
            <td> </td>
            <td>
                <input type="submit" value="Submit" name="submit">
                <input type="reset" name="reset" id="reset">
            </td>
             
        </tr>
    </table>
    </form>
    <p>
        Klik <a href="listt.php">disini</a> untuk melihat list data mahasiswa
    </p>
</body>
</html>