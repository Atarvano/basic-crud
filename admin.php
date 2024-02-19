<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login</title>
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    <div class="container">
      <div class="login">
        <h1>Admin</h1>
        <form action="login.php" method="post" onsubmit="return validasi()">
          <div class="form-group">
            <!-- <label for="username">Username</label> -->
            <input
              type="text"
              name="user"
              id="user"
              placeholder="Username"
            />
          </div>
          <div class="form-group">
            <!-- <label for="password">Password</label> -->
            <input
              type="password"
              name="password"
              id="password"
              placeholder="Password"
            />
          </div>
          <button type="submit" name="submit">Login</button>
        </form>
      </div>
    </div>

    <script type="text/javascript">
      function validasi() {
        var username = document.getElementById("user").value;
        var password = document.getElementById("password").value;
        if (username !== "" && password !== "") {
          // Jika formulir valid
          return true;
        } else {
          alert("Username dan Password harus diisi!");
          return false;
        }
      }
    </script>
  </body>
</html>
