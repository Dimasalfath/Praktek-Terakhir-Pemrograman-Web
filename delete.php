<?php
	session_start();
	if(!isset($_SESSION['username'])){
		echo "anda belum masuk! silahkan <a href='login.php'>masuk dulu!</a>";
	}else{
?>
<?php
include 'koneksi.php';
if(isset($_GET['nim'])){
	$delete = mysqli_query($conn, "DELETE FROM mahasiswa WHERE nim = '".$_GET['nim']."' ");
	header('location:index.php');
}
?>
<?php } ?>	