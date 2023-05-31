<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Sign Up</title>
  <link href="css/bootstrap.min.css" rel="stylesheet" />
  <script src="js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" />
  <link rel="stylesheet" href="font awesome/css/font-awesome.min.css" />
  <style>
    @import url("https://fonts.googleapis.com/css2?family=Inter:wght@500&display=swap");

    .sign {
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

    .arrow {
      left: 20px;
      top: 25px;
      size: 10px;
      color: black;
    }

    .sign-up-box {
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

    .sign-up-box .user-box {
      position: relative;
      margin-bottom: 10px;
    }

    .sign-up-box .user-box input[type="text"],
    .sign-up-box .user-box input[type="email"],
    .sign-up-box .user-box input[type="password"],
    .sign-up-box .user-box input[type="number"],
    .sign-up-box .user-box select,
    .sign-up-box .user-box input[type="text"] {
      width: 100%;
      padding: 10px 0;
      font-size: 16px;
      color: black;
      border: none;
      border-bottom: 1px solid #ff5a60;
      outline: none;
      background: transparent;
    }

    .sign-up-box .user-box label {
      position: absolute;
      top: 0;
      left: 0;
      padding: 10px 0;
      font-size: 16px;
      color: black;
      pointer-events: none;
      transition: 0.5s;
    }

    .sign-up-box .user-box input[type="text"]:focus~label,
    .sign-up-box .user-box input[type="email"]:focus~label,
    .sign-up-box .user-box input[type="password"]:focus~label,
    .sign-up-box .user-box input[type="number"]:focus~label,
    .sign-up-box .user-box input[type="text"]:focus~label,
    .sign-up-box .user-box select:focus~label,
    .sign-up-box .user-box input[type="text"]:valid~label,
    .sign-up-box .user-box input[type="email"]:valid~label,
    .sign-up-box .user-box input[type="password"]:valid~label,
    .sign-up-box .user-box input[type="number"]:valid~label,
    .sign-up-box .user-box select:valid~label,
    .sign-up-box .user-box input[type="text"]:valid~label {
      top: -20px;
      left: 0;
      color: #ff5a60;
      font-size: 12px;
    }

    .sign-up-box button[type="register"] {
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

    .sign-up-box button[type="register"]:hover {
      background-color: #025f8c;
    }

    .sign-up-box {
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      width: 35%;
      background-color: white;
      padding: 40px;
      border-radius: 5px;
    }

    button[type="register"] {
      height: 36px;
      left: 154px;
      top: 58px;

      font-family: "Inter";
      font-style: normal;
      font-weight: 700;
      font-size: 30px;
      line-height: 6px;
    }

    input:invalid {
      background-color: ivory;
      border: none;
      outline: 2px solid red;
      border-radius: 5px;
    }

    footer {
      font-family: "Inter";
      font-style: normal;
      font-weight: 700;
      font-size: 12px;
      line-height: 15px;
      text-align: center;
      margin: 625px 0px 0px 0px;
    }

    i {
      font-size: 35px;
    }

    .in {
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
  <div >
    <div class="sign-up-box">
      <a href="guest.php">
        <i class="fa-solid fa-arrow-left arrow"></i>
      </a>
      <center>
        <h2 class="sign">SIGN UP</h2>
        <br>
        <br>
        <form method="POST" action="Save Sign Up.php">
          <div class="user-box">
            <input type="text" name="username" required="" />
            <label>Username</label>
          </div>
          <div class="user-box">
            <input type="password" name="password" maxlength="8" required="" />
            <label>Password</label>
          </div>
          <div class="user-box">
            <input type="text" name="nama_lengkap" required="" />
            <label>Nama Lengkap</label>
          </div>
          <div class="user-box">
            <label for="">Jenis Kelamin</label>
            <br>
            <select id="" class="form-control" name="jenis_kelamin">
              <option value=""></option>
              <option value="laki laki">Laki Laki</option>
              <option value="perempuan">Perempuan</option>
            </select>
          </div>
          <div class="user-box">
            <input type="text" name="alamat" required="" />
            <label>Alamat</label>
          </div>
          <div class="user-box">
            <input type="number" name="hp" maxlength="12" pattern="[0-9]" required="" />
            <label>No Telepon</label>
          </div>
          <div class="user-box">
            <label for="sts">Status Registrasi</label>
            <br>
            <select id="sts" class="form-control" name="status">
              <option value=""></option>
              <option value="user">User</option>
              <option value="admin">Admin</option>
            </select>
          </div>
          <p class="in">
            Sudah punya akun?
            <a href="Login.php">Login di sini</a>
          </p>
          <a href="#">
            <span>
              <button type="register" value="SIGN UP">Sign Up </button>
            </span>
          </a>
          <ul id="log"></ul>
        </form>
      </center>
    </div>
  </div>
  <footer>Five Star Restaurant</footer>
</body>

</html>