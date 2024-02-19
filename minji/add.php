<?php
include 'koneksi.php';
if (isset($_POST['Submit'])) {
  $nis = $_POST['nis'];
  $alamat = $_POST['alamat'];
  $nama = $_POST['nama'];
  $kelas = $_POST['sekolah'];
  $jenis_kelamin = $_POST['jenis_kelamin'];
  $no_telepon = $_POST['nomor'];


  $sql = "INSERT INTO `user`(`nis`, `nama`, `alamat`, `jenis_kelamin`, `no_telepon`, `kelas`) VALUES ('$nis', '$nama', '$alamat', '$jenis_kelamin', '$no_telepon', '$kelas')";

  $result = mysqli_query($db, $sql);

  if ($result) {
      header("Location: Index.php?msg=Pendaftaran Anda Telah Berhasil");
      exit; // pastikan keluar setelah mengarahkan pengguna
  } else {
      echo "Error: " . mysqli_error($koneksi);
  }
}
?>









<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- css -->
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
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
      crossorigin="anonymous"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
      integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <title>Tambah Siswa</title>
  </head>
  <body>
    <nav class="navbar navbar-light justify-content-center fs-3 mb-5" style="background-color: #00ff5573; font-family: ari;">
      Tambah Siswa
    </nav>

    <div class="container isi">
      <div class="text-center mb-4">
        <h3>Tambah Siswa</h3>
        <p class="text-muted">Isi dengan lengkap</p>
      </div>

      <div class="container justify-content-center d-flex">
        <form action="" method="post" style="width: 50vw; min-width: 300px;">
          <div class="row mb-3">
            <div class="col">
              <label for="" class="form-label">NIS</label>
              <input type="text" class="form-control" name="nis" placeholder="NIS">
            </div>
            <div class="col">
              <label for="" class="form-label">Nama</label>
              <input type="text" class="form-control" name="nama" placeholder="Nama">
            </div>
          </div>
          <div class="row mb-3">
            <div class="col">
              <label for="" class="form-label">Alamat</label>
              <input type="text" class="form-control" name="alamat" style="height: 200px;">
            </div>
          </div>
          <div class="row mb-3">
            <div class="col">
              <label for="" style="margin-top: 10px;">Jenis Kelamin</label>
              <select class="form-select" name="jenis_kelamin" style="margin-top: 20px;">
                <option value="laki_laki">Laki-Laki</option>
                <option value="perempuan">Perempuan</option>
              </select>
            </div>
          </div>
          <div class="row mb-3">
            <div class="col">
              <div style="display: flex; justify-content: space-between;">
                <div style="flex: 1; margin-right: 10px;">
                  <label for="" style="margin-top: 10px;">Kelas</label>
                  <input type="text" class="form-control" name="sekolah" placeholder="Kelas">
                </div>
                <div style="flex: 1;">
                  <label for="" style="margin-top: 10px;">Telepon</label>
                  <input type="text" class="form-control" name="nomor" placeholder="+Telepon">
                </div>
              </div>
            </div>
          </div>
          <div class=" submitbro">
          <input type="submit" placeholder="Simpan" name="Submit" class="btn btn-primary mx-auto" style="height: 50px; width: 120px; border-radius: 12px; text-align: center;">
            
          </div>
        </form>
      </div>
    </div>

    <!-- Bootstrap -->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
