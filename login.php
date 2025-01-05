<?php
    session_start();
    include("koneksi.php");
    if(isset($_POST['email'])){
        $email = $_POST['email'];
        $password = $_POST['password'];

        $query = "SELECT * FROM user WHERE email='$email' AND password  ='$password'";
        $sql = mysqli_query($db, $query);

        if(mysqli_num_rows($sql) > 0){
            //echo "<script>alert('login sukses!')</script>";
            $_SESSION['email'] = $email;
            $_SESSION['masuk'] = TRUE;
            header("Location: index.php");
        }else{
            echo "<script>alert('login gagal!')</script>";
        }
    }
?>
<!DOCTYPE html>
<html>
<head>
	<title>LOGIN Web Mahasiswa</title>
	<link rel="stylesheet" type="text/css" href="style.css">

	<style>
	body{
	font-family: sans-serif;
	background: #3d86F5;
}
 
h2{
	color: #FFFF;
	text-align: center;
	/*ketebalan font*/
	font-weight: 300;
}

.tulisan_login{
	text-align: center;
	/*membuat semua huruf menjadi kapital*/
	text-transform: uppercase;
}

 
.container{
	width: 350px;
	background: white;
	/*meletakkan form ke tengah*/
	margin: 80px auto;
	padding: 30px 20px;
}
 
label{
	font-size: 11pt;
}
 
.form_login{
	/*membuat lebar form penuh*/
	box-sizing : border-box;
	width: 100%;
	padding: 10px;
	font-size: 11pt;
	margin-bottom: 20px;
}
 
.tombol_login{
	background: #0083ff;
	color: white;
	font-size: 11pt;
	width: 100%;
	border: none;
	border-radius: 3px;
	padding: 10px 20px;
}

</style>
</head>
<body>
	<h2>SELAMAT DATANG DI LOGIN AKADEMIK</h2>
 
	<div class="container">
		<p class="tulisan_login">Silahkan login</p>
 
		<form action="" method="POST">
			<label for="email">Email</label>
			<input type="email" name="email" id="email" class="form_login" placeholder="Masukan email anda..">
 
			<label for="password">Password</label>
			<input type="text" name="password" class="form_login" placeholder="Masukan password ..">
 
			<input type="submit" class="tombol_login" value="LOGIN" name="submit">
 
		</form>
		
	</div>
 
 
</body>
</html>
<?php

?>