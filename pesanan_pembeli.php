<?php
session_start();
if (!isset($_SESSION['login_user'])) {
    header("location: login.php");
} else {
?>
    <?php
    if (empty($_SESSION["pesanan"]) or !isset($_SESSION["pesanan"])) {
        echo "<script>alert('Pesanan kosong, Silahkan Pesan dahulu');</script>";
        echo "<script>location= 'Menu Admin.php'</script>";
    }
    ?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Dashboard</title>
        <link href="css/bootstrap.min.css" rel="stylesheet" />
        <script src="js/bootstrap.bundle.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" />
        <link rel="stylesheet" href="font awesome/css/font-awesome.min.css" />
        <link rel="stylesheet" href="font awesome/css/font-awesome.min.css" />


        <style>
            :root {
                scroll-behavior: smooth;
            }

            #btn-back-to-top {
                position: fixed;
                bottom: 100px;
                right: 20px;
                display: none;
                animation: fadeIn 1s ease;
            }

            @keyframes fadeIn {
                0% {
                    opacity: 0;
                }

                100% {
                    opacity: 1;
                }
            }

            header {
                background-color: #fcebb6;
            }

            footer {
                background-color: #fcebb6;
                padding: 25px;
            }

            nav {
                background-color: #fceaa0;
            }

            li {
                letter-spacing: 1px;
            }

            .nav-link {
                color: #5e412f;
            }

            .nav {
                color: black;
            }

            .nav-link::after {
                content: "";
                position: absolute;
                width: 100%;
                transform: scaleX(0);
                height: 2px;
                bottom: 0;
                left: 0;
                background-color: black;
                transform-origin: bottom;
                transition: transform 0.25s ease-out;
            }

            .nav-link:hover::after {
                transform: scaleX(1);
                transform-origin: bottom;
            }

            .b-example-divider {
                height: 3rem;
                background-color: rgba(0, 0, 0, 0.1);
                border: solid rgba(0, 0, 0, 0.15);
                border-width: 1px 0;
                box-shadow: inset 0 0.5em 1.5em rgba(0, 0, 0, 0.1),
                    inset 0 0.125em 0.5em rgba(0, 0, 0, 0.15);
            }

            .form-control-dark {
                color: #fff;
                background-color: var(--bs-dark);
                border-color: var(--bs-gray);
            }

            .form-control-dark:focus {
                color: #fff;
                background-color: var(--bs-dark);
                border-color: #fff;
                box-shadow: 0 0 0 0.25rem rgba(255, 255, 255, 0.25);
            }

            .bi {
                vertical-align: -0.125em;
                fill: currentColor;
            }

            .text-small {
                font-size: 85%;
            }

            .dropdown-toggle {
                outline: 0;
            }

            .border {
                background-color: #78c0ab;
                width: 250px;
                border-radius: 100px;
                text-align: center;
                margin: auto;
            }

            .border2 {
                background-color: #78c0ab;
                width: 300px;
                border-radius: 100px;
                text-align: center;
                margin-right: auto;
            }

            .border3 {
                background-color: #198754;
                font-size: large;
                text-align: center;
                margin-right: auto;
            }

            .featurette-divider {
                margin: 5rem 0;
                /* Space out the Bootstrap <hr> more */
            }

            .bd-placeholder-img {
                font-size: 1.125rem;
                text-anchor: middle;
                -webkit-user-select: none;
                -moz-user-select: none;
                user-select: none;
            }

            @media (min-width: 768px) {
                .bd-placeholder-img-lg {
                    font-size: 3.5rem;
                }
            }

            .navMenu {
                animation: fadeIn 1s ease;
            }

            @keyframes fadeIn {
                0% {
                    opacity: 0;
                }

                100% {
                    opacity: 1;
                }
            }

            .addp {
                color: white;
                text-decoration: none;
            }
        </style>

    </head>

    <body>
        <button type="button" class="btn btn-danger btn-floating btn-lg fadein" id="btn-back-to-top">
            <i class="fas fa-arrow-up"></i>
        </button>
        <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
            <symbol id="bootstrap" viewBox="0 0 118 94">
                <title>Bootstrap</title>
            </symbol>
            <symbol id="home" viewBox="0 0 16 16">
                <path d="M8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4.5a.5.5 0 0 0 .5-.5v-4h2v4a.5.5 0 0 0 .5.5H14a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146zM2.5 14V7.707l5.5-5.5 5.5 5.5V14H10v-4a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5v4H2.5z" />
            </symbol>
            <symbol id="speedometer2" viewBox="0 0 16 16">
                <path d="M8 4a.5.5 0 0 1 .5.5V6a.5.5 0 0 1-1 0V4.5A.5.5 0 0 1 8 4zM3.732 5.732a.5.5 0 0 1 .707 0l.915.914a.5.5 0 1 1-.708.708l-.914-.915a.5.5 0 0 1 0-.707zM2 10a.5.5 0 0 1 .5-.5h1.586a.5.5 0 0 1 0 1H2.5A.5.5 0 0 1 2 10zm9.5 0a.5.5 0 0 1 .5-.5h1.5a.5.5 0 0 1 0 1H12a.5.5 0 0 1-.5-.5zm.754-4.246a.389.389 0 0 0-.527-.02L7.547 9.31a.91.91 0 1 0 1.302 1.258l3.434-4.297a.389.389 0 0 0-.029-.518z" />
                <path fill-rule="evenodd" d="M0 10a8 8 0 1 1 15.547 2.661c-.442 1.253-1.845 1.602-2.932 1.25C11.309 13.488 9.475 13 8 13c-1.474 0-3.31.488-4.615.911-1.087.352-2.49.003-2.932-1.25A7.988 7.988 0 0 1 0 10zm8-7a7 7 0 0 0-6.603 9.329c.203.575.923.876 1.68.63C4.397 12.533 6.358 12 8 12s3.604.532 4.923.96c.757.245 1.477-.056 1.68-.631A7 7 0 0 0 8 3z" />
            </symbol>
            <symbol id="table" viewBox="0 0 16 16">
                <path d="M0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2zm15 2h-4v3h4V4zm0 4h-4v3h4V8zm0 4h-4v3h3a1 1 0 0 0 1-1v-2zm-5 3v-3H6v3h4zm-5 0v-3H1v2a1 1 0 0 0 1 1h3zm-4-4h4V8H1v3zm0-4h4V4H1v3zm5-3v3h4V4H6zm4 4H6v3h4V8z" />
            </symbol>
            <symbol id="people-circle" viewBox="0 0 16 16">
                <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
            </symbol>
            <symbol id="grid" viewBox="0 0 16 16">
                <path d="M1 2.5A1.5 1.5 0 0 1 2.5 1h3A1.5 1.5 0 0 1 7 2.5v3A1.5 1.5 0 0 1 5.5 7h-3A1.5 1.5 0 0 1 1 5.5v-3zM2.5 2a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3zm6.5.5A1.5 1.5 0 0 1 10.5 1h3A1.5 1.5 0 0 1 15 2.5v3A1.5 1.5 0 0 1 13.5 7h-3A1.5 1.5 0 0 1 9 5.5v-3zm1.5-.5a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3zM1 10.5A1.5 1.5 0 0 1 2.5 9h3A1.5 1.5 0 0 1 7 10.5v3A1.5 1.5 0 0 1 5.5 15h-3A1.5 1.5 0 0 1 1 13.5v-3zm1.5-.5a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3zm6.5.5A1.5 1.5 0 0 1 10.5 9h3a1.5 1.5 0 0 1 1.5 1.5v3a1.5 1.5 0 0 1-1.5 1.5h-3A1.5 1.5 0 0 1 9 13.5v-3zm1.5-.5a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3z" />
            </symbol>
        </svg>
        <div class=" fixed-top">
            <nav class="nav py-2 border-bottom ">
                <div class="container d-flex flex-wrap">
                    <ul class=" nav me-auto">
                        <li class="nav-item dropdown"><a href="Menu User.php#bck" class="nav-link ">Home</a></li>
                        <li class="nav-item dropdown"><a href="Menu User.php#about-us" class="nav-link ">About Us</a></li>
                        <li class="nav-item dropdown"><a href="Menu User.php#menu" class="nav-link ">Menu</a></li>
                        <li class="nav-item dropdown"><a href="Menu User.php#franchise" class="nav-link ">Franchise</a></li>
                        <li class="nav-item dropdown"><a href="https://www.instagram.com/" class="nav-link "> <i class="fa fa-instagram"></i></a></li>
                        <li class="nav-item dropdown"><a href="https://www.facebook.com/" class="nav-link "> <i class="fa fa-facebook"></i></a></li>
                    </ul>
                    <ul class="nav">
                        <li class="nav-item dropdown"><a href="Logout.php" class="nav-link px-2">Log Out</a></li>
                        &emsp;
                    </ul>
                </div>
            </nav>
            <header class="py-3 mb-4 border-bottom">
                <div class="container d-flex flex-wrap justify-content-center">
                    <a href="Dashboard.php" class="d-flex align-items-center mb-3 mb-lg-0 me-lg-auto text-dark text-decoration-none">
                        <img src="photo/FS_wordmark.png" class="bi me-2" width="150" height="62" alt="">

                    </a>

                </div>

            </header>
        </div>
        <br id="bck">
        <br>
        <br>
        <br>
        <br>
        <br>
        <main>
            <!-- Menu -->
            <div class="container">
                <div class="judul-pesanan mt-5">

                    <h3 class="text-center font-weight-bold">PESANAN ANDA</h3>

                </div>
                <table class="table table-bordered" id="example">
                    <thead class="thead-light">
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nama Pesanan</th>
                            <th scope="col">Harga</th>
                            <th scope="col">Jumlah</th>
                            <th scope="col">Subharga</th>
                            <th scope="col">Opsi</th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php $nomor = 1; ?>
                        <?php $totalbelanja = 0; ?>
                        <?php foreach ($_SESSION["pesanan"] as $id_menu => $jumlah) : ?>

                            <?php
                            include('koneksi.php');
                            $ambil = mysqli_query($koneksi, "SELECT * FROM produk WHERE id='$id_menu'");
                            $pecah = $ambil->fetch_assoc();
                            $subharga = $pecah["harga_menu"] * $jumlah;
                            ?>
                            <tr>
                                <td><?php echo $nomor; ?></td>
                                <td><?php echo $pecah["nama_menu"]; ?></td>
                                <td>Rp. <?php echo number_format($pecah["harga_menu"]); ?></td>
                                <td><?php echo $jumlah; ?></td>
                                <td>Rp. <?php echo number_format($subharga); ?></td>
                                <td>
                                    <a href="hapus_pesanan.php?id_menu=<?php echo $id_menu ?>" class="btn btn-danger btn-sm btn-block">Hapus</a>
                                </td>
                            </tr>
                            <?php $nomor++; ?>
                            <?php $totalbelanja += $subharga; ?>
                        <?php endforeach ?>
                    </tbody>
                    <tfoot>
                        <tr>
                            <th colspan="4">Total Belanja</th>
                            <th colspan="2">Rp. <?php echo number_format($totalbelanja) ?> </th>
                        </tr>
                        <tr>
                            <th colspan="6">
                                <form method="POST" action="">
                                    <a href="Menu User.php" class="btn btn-primary btn-sm">Lihat Menu</a>
                                    <button class="btn btn-success btn-sm" name="konfirm">Konfirmasi Pesanan</button>
                                </form>
                            </th>
                        </tr>
                    </tfoot>

                    <?php
                    if (isset($_POST['konfirm'])) {
                        $tanggal_pemesanan = date("Y-m-d");

                        // Menyimpan data ke tabel pemesanan
                        $insert = mysqli_query($koneksi, "INSERT INTO pemesanan (tanggal_pemesanan, total_belanja) VALUES ('$tanggal_pemesanan', '$totalbelanja')");

                        // Mendapatkan ID barusan
                        $id_terbaru = $koneksi->insert_id;

                        // Menyimpan data ke tabel pemesanan produk
                        foreach ($_SESSION["pesanan"] as $id_menu => $jumlah) {
                            $insert = mysqli_query($koneksi, "INSERT INTO pemesanan_produk (id_pemesanan, id_menu, jumlah) 
              VALUES ('$id_terbaru', '$id_menu', '$jumlah') ");
                        }

                        // Mengosongkan pesanan
                        unset($_SESSION["pesanan"]);

                        // Dialihkan ke halaman nota
                        echo "<script>alert('Pemesanan Sukses!');</script>";
                        echo "<script>location= 'Menu User.php'</script>";
                    }
                    ?>


        </main>
        <script>
            //Get the button
            let mybutton = document.getElementById("btn-back-to-top");

            // When the user scrolls down 20px from the top of the document, show the button
            window.onscroll = function() {
                scrollFunction();
            };

            function scrollFunction() {
                if (
                    document.body.scrollTop > 60 ||
                    document.documentElement.scrollTop > 60
                ) {
                    mybutton.style.display = "block";
                } else {
                    mybutton.style.display = "none";
                }
            }
            // When the user clicks on the button, scroll to the top of the document
            mybutton.addEventListener("click", backToTop);

            function backToTop() {
                document.body.scrollTop = 0;
                document.documentElement.scrollTop = 0;
            }
        </script>
        <br>
        <!-- FOOTER -->
        <footer class="container-fluid">
            <a href="#bck">
                <p> <img style="position:relative;" src="photo/FS_wordmark.png" alt="">
                </p>
            </a>
            <p class="float-end">&copy; 2023 Five Star Hainanese Kampung Chicken Rice </p>
            <p class="">&emsp; </p>

        </footer>

    </body>


    </html>
<?php } ?>