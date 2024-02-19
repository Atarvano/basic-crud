<?php
session_start();

if (!isset($_SESSION['username']) || $_SESSION['status'] !== 'login') {
    header("location: ../admin.php");
    exit();
}

include 'koneksi.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu Admin</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer">
</head>
<body>
    <nav class="navbar navbar-light justify-content-center fs-3 mb-5" style="background-color: #00ff5573; font-family: ari;">
        Menu Siswa
    </nav>

    <div class="container isi">
        <div class="text-center mb-4">
            <h3>Menu Siswa</h3>
            <p class="text-muted">Daftar Siswa</p>
        </div>

        <div class="container">
            <div class="justify-content-center">
                <a href="add.php" class="btn btn-dark mb-3">Tambah Siswa</a>
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th scope="col">NIS</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Alamat</th>
                            <th scope="col">Jenis Kelamin</th>
                            <th>No Telepon</th>
                            <th>Kelas</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                        $sql = "SELECT * FROM user";
                        $result = mysqli_query($db, $sql);

                        while ($row = mysqli_fetch_assoc($result)) {
                            ?>
                            <tr>
                                <td><?php echo $row['nis']; ?></td>
                                <td><?php echo $row['nama']; ?></td>
                                <td><?php echo $row['alamat']; ?></td>
                                <td><?php echo $row['jenis_kelamin']; ?></td>
                                <td><?php echo $row['no_telepon']; ?></td>
                                <td><?php echo $row['kelas']; ?></td>
                                <td>
                                    <a href="edit.php?nis=<?php echo $row['nis']; ?>" class="link-dark"><i class="fa-solid fa-pen-to-square fs-7"></i></a>
                                    <a href="hapus.php?nis=<?php echo $row['nis']; ?>" class="link-dark"><i class="fa-solid fa-trash fs-7"></i></a>
                                </td>
                            </tr>
                            <?php
                        }
                        ?>
                    </tbody>
                </table>
                <a href="logout.php" class="btn btn-dark mb-3">Logout</a>
            </div>
        </div>
    </div>

    <!-- Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
