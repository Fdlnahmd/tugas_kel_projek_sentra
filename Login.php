<?php
include 'koneksi.php';
?>

<?php
if (isset($_POST['submit'])) {
  $user = $_POST['username'];
  $password = $_POST['password'];

  // Query untuk memilih tabel
  $cek_data = mysqli_query($koneksi, "SELECT * FROM cust WHERE username = '$user' AND pass = '$password'");
  $hasil = mysqli_fetch_array($cek_data);
  $status = $hasil['stats'];
  $login_user = $hasil['username'];
  $row = mysqli_num_rows($cek_data);

  // Pengecekan Kondisi Login Berhasil/Tidak
  if ($row > 0) {
    session_start();
    $_SESSION['login_user'] = $login_user;

    if ($status == 'admin') {
      header('location: admin.php');
    } elseif ($status == 'user') {
      header('location: user.php');
    }
  } else {
    header("location: login.php");
  }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Login</title>
  <link href="css/bootstrap.min.css" rel="stylesheet" />
  <script src="js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" />
  <link rel="stylesheet" href="font awesome/css/font-awesome.min.css" />
  <style>
    @import url("https://fonts.googleapis.com/css2?family=Inter:wght@500&display=swap");

    .arrow {
      left: 20px;
      top: 25px;
      size: 10px;
      color: black;
    }

    .login {
      height: 48px;
      left: 133px;
      top: 263px;

      font-family: "Inter";
      font-style: normal;
      font-weight: 700;
      font-size: 40px;
      line-height: 48px;

      color: #ff5a60;
    }

    .login-box {
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      width: 350px;
      background-color: #191919;
      padding: 40px;
      border-radius: 5px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
    }

    .login-box .user-box {
      position: relative;
      margin-bottom: 20px;
    }

    .login-box .user-box input[type="text"],
    .login-box .user-box input[type="password"] {
      width: 100%;
      padding: 10px 0;
      font-size: 16px;
      color: black;
      border: none;
      border-bottom: 1px solid #ff5a60;
      outline: none;
      background: transparent;
    }

    .login-box .user-box label {
      position: absolute;
      top: 0;
      left: 0;
      padding: 10px 0;
      font-size: 16px;
      color: black;
      pointer-events: none;
      transition: 0.5s;
    }

    .login-box .user-box input[type="text"]:focus~label,
    .login-box .user-box input[type="password"]:focus~label,
    .login-box .user-box input[type="text"]:valid~label,
    .login-box .user-box input[type="password"]:valid~label {
      top: -20px;
      left: 0;
      color: #ff5a60;
      font-size: 12px;
    }

    .login-box button[type="submit"] {
      display: inline-block;
      background-color: #a79b94;
      color: white;
      padding: 10px 40px;
      text-align: center;
      text-decoration: none;
      font-size: 16px;
      margin-top: 20px;
      border-radius: 5px;
      transition: 0.5s;
      width: 150px;
      height: 43px;
      left: 117px;
      top: 580px;
    }

    .login-box button[type="submit"]:hover {
      background-color: #025f8c;
    }

    .login-box {
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      width: 35%;
      background-color: white;
      padding: 40px;
      border-radius: 5px;
    }

    button[type="submit"] {
      height: 36px;
      left: 154px;
      top: 58px;

      font-family: "Inter";
      font-style: normal;
      font-weight: 700;
      font-size: 30px;
      line-height: 6px;
    }

    footer {
      font-family: "Inter";
      font-style: normal;
      font-weight: 700;
      font-size: 12px;
      line-height: 15px;
      text-align: center;
      margin: 550px 0px 0px 0px;
    }

    i {
      font-size: 35px;
    }

    .up {
      color: black;
      font-family: "Open Sans", sans-serif;
      padding-top: 10px;
    }
  </style>

  <script>
    const input = document.querySelector("input");
    input.addEventListener("invalid", (e) => {
      log.appendChild(
        Object.assign(document.createElement("li"), {
          textContent: JSON.stringify(e.target.value),
        })
      );
    });
  </script>
</head>

<body>
  <div class="login-box">
    <a href="guest.php">
      <i class="fa-solid fa-arrow-left arrow"></i>
    </a>
    <center>
      <h2 class="login">LOGIN</h2>
      <form method="POST" action="">
        <div class="user-box">
          <input type="text" name="username" required="" />
          <label>Username</label>
        </div>
        <div class="user-box">
          <input type="password" name="password" maxlength="8" required="" />
          <label>Password</label>
        </div>
        <p class="up">
          Belum punya akun?
          <a href="Sign Up.php">Register di sini</a>
        </p>
        <p>
          Github :
          <a href="https://github.com/Fdlnahmd/projek_sentra_bend1.git">Github</a>
        </p>
        <span>
          <button type="submit" name="submit" value="LOGIN">Login</button>
        </span>

      </form>

    </center>
  </div>
  <footer>Five Star Restaurant</footer>
</body>

</html>