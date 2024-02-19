<?php
include "koneksi.php";
session_start();

// Check if the user is not logged in
if (!isset($_SESSION['username']) || $_SESSION['status'] !== 'login') {
    header("location: ../admin.php");
    exit();
}

// Pastikan nis tersedia dan bukan nilai yang berbahaya
if (isset($_GET['nis'])) {
    $nis = mysqli_real_escape_string($db, $_GET['nis']);

    // Tambahkan baris ini untuk debug
    // echo "NIS: " . $nis;

    $sql = "DELETE FROM user WHERE nis='$nis'";
    $result = mysqli_query($db, $sql);

    if ($result) {
        header("Location: Index.php?msg=Hapus Anda Telah Berhasil");
        exit();
    } else {
        echo "Error: " . mysqli_error($db);
    }
} else {
    echo "NIS tidak valid";
}
?>
