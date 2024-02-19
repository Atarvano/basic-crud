<?php
include 'koneksi.php';

if (isset($_GET['nis'])) {
    $nis = mysqli_real_escape_string($db, $_GET['nis']);

    $sql = "SELECT * FROM user WHERE nis='$nis'";
    $result = mysqli_query($db, $sql);
    $row = mysqli_fetch_assoc($result);
} else {
    header("Location: index.php");
    exit();
}

if (isset($_POST['Submit'])) {
    $nis = $_POST['nis'];
    $alamat = $_POST['alamat'];
    $nama = $_POST['nama'];
    $kelas = $_POST['sekolah'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $no_telepon = $_POST['nomor'];

    $sql = "UPDATE `user` SET `nama`='$nama', `alamat`='$alamat', `jenis_kelamin`='$jenis_kelamin', `no_telepon`='$no_telepon', `kelas`='$kelas' WHERE `nis`='$nis'";

    $result = mysqli_query($db, $sql);

    if ($result) {
        header("Location: index.php?msg=Pendaftaran Anda Telah Berhasil");
        exit;
    } else {
        echo "Error: " . mysqli_error($db);
    }
}

mysqli_close($db);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        .submitbro {
            margin-top: 30px;
            margin-bottom: 50px;
        }

        .submitbro input[type="submit"] {
            background-color: #007bff;
            color: #ffffff;
            transition: background-color 0.3s ease, transform 0.3s ease;
        }

        .submitbro input[type="submit"]:hover {
            background-color: rgb(0, 0, 0);
            transform: translateY(-5px);
        }

        .submitbro input[type="submit"]:active {
            transform: translateY(0);
        }
    </style>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer">
    <title>Edit Siswa</title>
</head>
<body>
    <nav class="navbar navbar-light justify-content-center fs-3 mb-5" style="background-color: #00ff5573; font-family: arial;">
        Information Siswa
    </nav>

    <div class="container isi">
        <div class="text-center mb-4">
            <h3>Information Siswa</h3>
            <p class="text-muted">Edit Information Siswa</p>
        </div>

        <div class="container justify-content-center d-flex">
            <form action="" method="post" style="width: 50vw; min-width: 300px;">
                <div class="row mb-3">
                    <div class="col">
                        <label for="" class="form-label">NIS</label>
                        <input type="text" class="form-control" name="nis" value="<?php echo $row['nis'] ?>" readonly>
                    </div>
                    <div class="col">
                        <label for="" class="form-label">Nama</label>
                        <input type="text" class="form-control" name="nama" value="<?php echo $row['nama'] ?>">
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col">
                        <label for="" class="form-label">Alamat</label>
                        <input type="text" class="form-control" name="alamat" style="height: 200px;" value="<?php echo $row['alamat'] ?>">
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col">
                        <label for="" style="margin-top: 10px;">Jenis Kelamin</label>
                        <select class="form-select" name="jenis_kelamin" style="margin-top: 20px;">
                            <option value="laki_laki" <?php echo ($row['jenis_kelamin'] == 'laki_laki') ? 'selected' : ''; ?>>Laki-Laki</option>
                            <option value="perempuan" <?php echo ($row['jenis_kelamin'] == 'perempuan') ? 'selected' : ''; ?>>Perempuan</option>
                        </select>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col">
                        <div style="display: flex; justify-content: space-between;">
                            <div style="flex: 1; margin-right: 10px;">
                                <label for="" style="margin-top: 10px;">Kelas</label>
                                <input type="text" class="form-control" name="sekolah" value="<?php echo $row['kelas'] ?>">
                            </div>
                            <div style="flex: 1;">
                                <label for="" style="margin-top: 10px;">Telepon</label>
                                <input type="text" class="form-control" name="nomor" value="<?php echo $row['no_telepon'] ?>">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="submitbro">
                <input type="submit" placeholder="Simpan" name="Submit" class="btn btn-primary mx-auto" style="height: 50px; width: 120px; border-radius: 12px; text-align: center;">

                </div>
            </form>
        </div>
    </div>

    <!-- Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
