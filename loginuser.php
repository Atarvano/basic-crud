<?php
session_start();
include 'koneksi.php';

$nis = isset($_POST['nis']) ? $_POST['nis'] : '';
$nama = isset($_POST['nama']) ? $_POST['nama'] : '';
$alamat = isset($_POST['alamat']) ? $_POST['alamat'] : '';
$kelamin = isset($_POST['kelamin']) ? $_POST['kelamin'] : '';
$telpon = isset($_POST['telpon']) ? $_POST['telpon'] : '';
$kelas = isset($_POST['kelas']) ? $_POST['kelas'] : '';

$login = mysqli_query($koneksi, "SELECT * FROM user WHERE nis='$nis' AND nama='$nama' AND alamat='$alamat' AND jenis_kelamin='$kelamin' AND no_telepon='$telpon' AND kelas='$kelas'");
$cek = mysqli_num_rows($login);

if ($cek > 0) {
    $_SESSION['nis'] = $nis;
    $_SESSION['status'] = "login";
    header("location: user/dashboard.php");
    exit();
} else {
    $pesan_error = "Login gagal. Periksa kembali data Anda.";
    header("location: user.php?pesan=$pesan_error");
    exit();
}
?>
