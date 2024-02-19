<?php
session_start();
include 'koneksi.php';

$username = $_POST['user'];
$password = ($_POST['password']); 

$login = mysqli_query($koneksi, "SELECT * FROM admin WHERE user='$username' AND password='$password'");
$cek = mysqli_num_rows($login);

if ($cek > 0) {
    $_SESSION['username'] = $username;
    $_SESSION['status'] = "login";
    header("location:minji/index.php");
} else {
    header("location:admin.php?pesan=gagal");
} exit();
?>
