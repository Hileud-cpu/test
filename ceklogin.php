<?php
session_start();
if(isset($_SESSION['email'])) {
    echo '<script>window.location.replace("./index.php");</script>';
} else {
$email = "boy@gmail.com";
$password = "123456";
if(isset($_POST['email']) && isset($_POST['password'])) {
	if($_POST['email'] == $email && $_POST['password'] == $password) {
		
		$_SESSION['email'] = $_POST['email'];
		$_SESSION['password'] = $_POST['password'];
		echo '<meta http-equiv="refresh" content="2; url=./index.php"/>';
		echo "<center><h1>Anda Berhasil Login</h1></center>";
	} elseif($_POST['email'] != $email && $_POST['password'] == $password) {
		echo "<center><h1>Gagal!, Email Salah,Harap masukan email dengan benar</h1></center>";
	} elseif($_POST['email'] == $email && $_POST['password'] != $password) {
		echo "<center><h1>Gagal!, Password Salah,Harap masukan password dengan benar</h1></center>";
	} elseif($_POST['email'] != $email && $_POST['password'] != $password) {
		echo "<center><h1>Gagal!, Email & Password Salah</h1></center>";
	} 
} else {
	echo "<center><h1>Gagal!, jangan biarkan email & password kosong</h1></center>";
}
}
?>