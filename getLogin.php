<?php
$nama = $_GET['nama'];
$email = $_GET['email'];
include "hari.php";

if (empty($nama) || empty($email)) {
	header('Location: tidaklengkap.php');
} else {
	echo "Nama : $nama"."<br>";
	echo "Email : $email"."<br>";
	echo "Login : $date $time"."<br>";
}
?> 