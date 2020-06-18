<?php
	session_start();
	if(!isset($_SESSION['password'])){
		echo "anda belum masuk! silahkan <a href='login.php'>masuk dulu!</a>";
	}else{
?>
<html>
	<head>
		<title>Halaman Beranda</title>
		<link rel="stylesheet" type="text/css" href="styles.css" >
	</head>
	<body>
		<header>
			<ul>
				<a href="indexlogin.php"><li>Beranda<li></li>
				<a href="login.php"><li>Absen<li></li>
				<a href="mahasiswa.php"><li>Keluar<li></li>
			<ul>
		</header>
		
		<section>
			<center>
				<font style="font-size:40px;">Selamat Datang di Halaman Dosen</font>
			</center>
		</section>
		
		<footer>
			Copyright &copy; 2020 Dimas Alfath Indriyanto. All Rights Reserved.
		</footer>
	</body>
</html>
<?php } ?>
