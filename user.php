<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login</title>
    <link rel="stylesheet" href="user.css" />
</head>
<body>
    <div class="container">
        <div class="login">
            <h1>Siswa</h1>
            <form action="loginuser.php" method="post" onsubmit="return validasi()">
                <div class="form-group">
                    <input type="text" name="nis" id="nis" placeholder="NIS" />
                    <input type="text" name="nama" id="nama" placeholder="Nama" />
                    <input type="text" name="alamat" id="alamat" placeholder="Alamat" />
                    <input type="text" name="telpon" id="telpon" placeholder="Telpon" />
                    <input type="text" name="kelas" id="kelas" placeholder="Kelas" />
                    <select name="kelamin" id="kelamin">
                        <option value="laki_laki">Laki-laki</option>
                        <option value="perempuan">Perempuan</option>
                    </select>
                </div>
                <button type="submit" name="submit">Login</button>
            </form>
        </div>
    </div>

    <script type="text/javascript">
        function validasi() {
            var nis = document.getElementById("nis").value;
            var nama = document.getElementById("nama").value;
            var alamat = document.getElementById("alamat").value;
            var telpon = document.getElementById("telpon").value;
            var kelas = document.getElementById("kelas").value;
            var kelamin = document.getElementById("kelamin").value;

            if (nis !== "" && nama !== "" && alamat !== "" && telpon !== "" && kelas !== "" && kelamin !== "") {
                // Jika formulir valid
                return true;
            } else {
                alert("Semua kolom harus diisi!");
                return false;
            }
        }
    </script>
</body>
</html>
