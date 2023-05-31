<?php
session_start();
if (!isset($_SESSION['login_user'])) {
  header("location: Login.php");
} else {
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

    <style>
      :root {
        scroll-behavior: smooth;
      }

      header {
        background-color: #fcebb6;
      }

      .menu {
        color: black;
        text-decoration: none;
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
        color: #5E412F;
      }

      .nav {
        color: black;
      }

      .nav-link::after {
        content: '';
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
        background-color: rgba(0, 0, 0, .1);
        border: solid rgba(0, 0, 0, .15);
        border-width: 1px 0;
        box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
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
        box-shadow: 0 0 0 .25rem rgba(255, 255, 255, .25);
      }

      .bi {
        vertical-align: -.125em;
        fill: currentColor;
      }

      .text-small {
        font-size: 85%;
      }

      .dropdown-toggle {
        outline: 0;
      }

      /* CUSTOMIZE THE CAROUSEL
-------------------------------------------------- */

      /* Carousel base class */
      .carousel {
        margin-bottom: 4rem;
      }

      /* Since positioning the image, we need to help out the caption */
      .carousel-caption {
        bottom: 3rem;
        z-index: 10;
      }

      /* Declare heights because of positioning of img element */
      .carousel-item {
        height: 38rem;
      }

      .carousel-item>img.img1 {
        position: absolute;
        top: -500px;
        left: 0;
        min-width: 100%;
        background-size: cover;
      }

      .carousel-item>img.img2 {
        position: absolute;
        top: -750px;
        left: 0;
        min-width: 100%;
        background-size: cover;
      }

      .carousel-item>img.img3 {
        position: absolute;
        top: -350px;
        left: 0;
        min-width: 100%;
        background-size: cover;
      }


      /* MARKETING CONTENT
-------------------------------------------------- */

      /* Center align the text within the three columns below the carousel */
      .marketing .col-lg-4 {
        margin-bottom: 1.5rem;
        text-align: center;
      }

      .marketing h2 {
        font-weight: 400;
      }

      /* rtl:begin:ignore */
      .marketing .col-lg-4 p {
        margin-right: .75rem;
        margin-left: .75rem;
      }

      /* rtl:end:ignore */


      /* Featurettes
------------------------- */

      .featurette-divider {
        margin: 5rem 0;
        /* Space out the Bootstrap <hr> more */
      }

      /* Thin out the marketing headings */
      .featurette-heading {
        font-weight: 300;
        line-height: 1;
        /* rtl:remove */
        letter-spacing: -.05rem;
      }


      /* RESPONSIVE CSS
-------------------------------------------------- */

      @media (min-width: 40em) {

        /* Bump up size of carousel content */
        .carousel-caption p {
          margin-bottom: 1.25rem;
          font-size: 1.25rem;
          line-height: 1.4;
        }

        .featurette-heading {
          font-size: 50px;
        }
      }

      @media (min-width: 62em) {
        .featurette-heading {
          margin-top: 7rem;
        }
      }

      /* end caoursel */

      .border {
        background-color: #78c0ab;
        width: 250px;
        border-radius: 100px;
        text-align: center;
      }

      .border-2 {
        background-color: #78c0ab;
        width: 250px;
        border-radius: 100px;
        text-align: center;
        margin: auto;
      }

      .border-3 {
        background-color: #78c0ab;
        width: 250px;
        border-radius: 100px;
        text-align: center;
        margin-left: auto;
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

      .txt-abt {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 10px;
        /* Jarak antara teks kiri dan kanan */
      }

      .ccp {
        background-color: rgba(255, 255, 255, 0.5);
        /* ubah angka 0.5 menjadi nilai opacity yang diinginkan, dari 0 (transparan) hingga 1 (tidak transparan) */
        color: #5E412F;
        /* warna teks */
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
            <li class="nav-item dropdown"><a href="admin.php#bck" class="nav-link ">Home</a></li>
            <li class="nav-item dropdown"><a href="admin.php#about-us" class="nav-link ">About Us</a></li>
            <li class="nav-item dropdown"><a href="admin.php#menu" class="nav-link ">Menu</a></li>
            <li class="nav-item dropdown"><a href="admin.php#franchise" class="nav-link ">Franchise</a></li>
            <li class="nav-item dropdown"><a href="https://www.instagram.com/" class="nav-link "> <i class="fa fa-instagram"></i></a></li>
            <li class="nav-item dropdown"><a href="https://www.facebook.com/" class="nav-link "> <i class="fa fa-facebook"></i></a></li>
          </ul>
          <ul class="nav">
            <li class="nav-item dropdown">
              <a href="pesanan.php" class="nav-link px-2">Pesanan</a>
            </li>
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

      <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="img1" src="photo/section_chicken.jpg" alt="">

            <div class="container">
              <div class="carousel-caption ccp ">
                <h1>THE KAMPUNG CHICKEN DIFFERENCE</h1>
                <p>Less fat doesn’t mean less flavour. Taste less oil and more goodness in every bite of our signature Hainanese-style kampung chicken.</p>
                <p><a class="btn btn-lg btn-primary" href="Menu Admin.php">See More</a></p>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <img class="img2" src="photo/section_pork.jpg" alt="">


            <div class="container">
              <div class="carousel-caption ccp ">
                <h1>MELT-IN-YOUR-MOUTH SUCCULENCE</h1>
                <p>
                  Choice cuts of pork belly are marinated in herbs and spices then slow-braised, bringing out fullness of flavour for you to enjoy.
                </p>
                <p><a class="btn btn-lg btn-primary" href="Menu Admin.php">See More</a></p>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <img class="img3" src="photo/section_seafood2.jpg" alt="">

            <div class="container">
              <div class="carousel-caption ccp ">
                <h1>CRISP TO THE LAST BITE</h1>
                <p>Rolled in fragrant cereal, curry leaves, and chilli padi, discover the finger-licking satisfaction of this crowd favourite.</p>
                <p><a class="btn btn-lg btn-primary" href="Menu Admin.php">See More</a></p>
              </div>
            </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
        <div id="about-us"></div>
      </div>


      <!-- Marketing messaging and featurettes
  ================================================== -->
      <!-- Wrap the rest of the page in another container to center all the content. -->

      <div class="container marketing">

        <!-- START THE FEATURETTES -->

        <hr class="featurette-divider">


        <div class="row featurette">
          <div class="">
            <div class="border">
              <h1>About Us</h1>
            </div>
            <br>
            <div class="txt-abt">
              <div>
                <p>Our signature dish begins with kampung chicken of an uncommon freshness and quality. Chosen then prepared with utmost care, its pure flavours emerge through simple yet masterful slow cooking.</p>
                <h3>The result is aromatic, fork-tender, and succulent — the true taste of chicken achieved without shortcuts or synthetics.</h3>
                <p>With savoury rice and sauces made in-house from fresh ingredients, enjoy our honest, hearty, and wholesome offering perfected over many decades. Those decades started long before Five Star was a restaurant.</p>
              </div>
              <div>
                <h3>Growing up around chickens himself and later becoming a sought- after supplier, our founder made himself an expert so acute he can tell just by looking how old a chicken is at slaughter, its state of health, the care it was given.</h3>
                <p>To this day, we receive only the finest from purveyors because we know the difference. With every visit, enjoy what sets us apart — especially in our Five Star Signatures masterfully created to delight the palette.</p>
              </div>
            </div>
          </div>
        </div>
        <div id="menu"></div>
        <hr class="featurette-divider">

        <div class="border-2">
          <a class="menu" href="Menu Admin.php">
            <h1>Menu</h1>
          </a>
        </div>
        <br>
        <nav class="navbar navbar-expand-lg rounded" aria-label="Eleventh navbar example">
          <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample09" aria-controls="navbarsExample09" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarsExample09">

              <div class="container ">
                <ul class="nav nav-fill text-uppercase justify-content-center">
                  <li class="nav-item dropdown"><a href="Menu Admin.php" class="nav-link "><br> Chicken</a></li>
                  <li class="nav-item dropdown"><a href="Menu Admin.php" class="nav-link "><br> Pork</a></li>
                  <li class="nav-item dropdown"><a href="Menu Admin.php" class="nav-link ">Tofu <br> & Omelette</a></li>
                  <li class="nav-item dropdown"><a href="Menu Admin.php" class="nav-link "><br> Fish</a></li>
                  <li class="nav-item dropdown"><a href="Menu Admin.php" class="nav-link "><br> Seafood</a></li>
                  <li class="nav-item dropdown"><a href="Menu Admin.php" class="nav-link "><br> Vegetables</a></li>
                  <li class="nav-item dropdown"><a href="Menu Admin.php" class="nav-link ">Soup,Rice, <br>& Noodles</a></li>
                  <li class="nav-item dropdown"><a href="Menu Admin.php" class="nav-link ">Desserts <br> & Beverages</a></li>
                </ul>
              </div>
            </div>
          </div>
        </nav>
        <center>
          <br>
          <div class="row row-mn">
            <div class="col-lg-4">
              <h2>CHICKEN</h2>
              <br>
              <img src="photo/section_chicken.jpg" class="rounded-circle" width="240" height="240" alt="">
              <h2>FIVE STAR KAMPUNG CHICKEN</h2>
              <p>Less in fat and rich in flavour, free range chicken is cooked in the traditional Hainanese style and served with house- made chilli and ginger sauces. Taste less oil and more goodness in every bite.</p>
              <title>Placeholder</title>
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4">
              <h2>PORK</h2>
              <br>
              <img src="photo/section_pork.jpg" class="rounded-circle" width="240" height="240" alt="">
              <h2>BRAISED PORK BELLY</h2>
              <p>Pork belly specially selected for fat and meat is marinated in herbs and spices for fullness of flavour. Slow braising over low heat yields the melt-in-your-mouth succulence you are about to enjoy.</p>
              <title>Placeholder</title>
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4">
              <h2>TOFU & OMELETTE</h2>
              <br>
              <img src="photo/section_tofu.jpg" class="rounded-circle" width="240" height="240" alt="">
              <h2>HOMETOWN TOFU </h2>
              <p>Our tofu’s silky texture is house-made with fresh soy milk and a closely guarded family secret. Draped in a savoury minced meat sauce, it is a simple yet filling dish</p>
              <title>Placeholder</title>
            </div><!-- /.col-lg-4 -->
          </div><!-- /.row -->
          <!-- header 1 -->
          <hr class="featurette-divider">
          <div class="row">
            <div class="col-lg-4">
              <h2>FISH</h2>
              <br>
              <img src="photo/section_fish.jpg" class="rounded-circle" width="240" height="240" alt="">
              <h2>CLAYPOT CURRY FISH HEAD</h2>
              <p>Sumptuous flavour infused by traditional herbs and spices is balanced by a medley of fresh vegetables</p>
              <title>Placeholder</title>
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4">
              <h2>SEAFOOD</h2>
              <br>
              <img src="photo/section_seafood.jpg" class="rounded-circle" width="240" height="240" alt="">
              <h2>BLACK PEPPER CRAB
              </h2>
              <p>Fresh Sri Lankan crab is perfectly coated with a layer of aromatic and robust black pepper sauce that complements the sweetness of the succulent crab flesh.
              </p>
              <title>Placeholder</title>
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4">
              <h2>VEGETABLES</h2>
              <br>
              <img src="photo/section_vegetables2.jpg" class="rounded-circle" width="240" height="240" alt="">
              <h2>CHINESE SPINACH WITH 3 ASSORTED EGGS
              </h2>
              <p>Quickly blanched to retain its crunch, Chinese Spinach soaks in broth made with regular, century, and salted eggs. Laced with wolfberries, the flavoursome broth may be enjoyed on its own.
              </p>
              <title>Placeholder</title>
            </div><!-- /.col-lg-4 -->
          </div><!-- /.row -->
          <hr class="featurette-divider">
          <!-- header 2 -->
          <div class="row">
            <div class="col-lg-4">
              <h2>SOUP,RICE <br>& NOODLES</h2>
              <br>
              <img src="photo/section_rice.jpg" class="rounded-circle" width="240" height="240" alt="">
              <h2>YANG ZHOU FRIED RICE
              </h2>
              <p>With a tantalizing golden hue, each grain of rice is cooked to perfection and stir-fried with shrimps and char siew delivering a satisfying wok hei taste and fragrance.
              </p>
              <title>Placeholder</title>
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4">
              <h2>DESSERTS <br> & BEVERAGES</h2>
              <br>
              <img src="photo/section_dessertsbev.jpg" class="rounded-circle" width="240" height="240" alt="">
              <title>Placeholder</title>
            </div><!-- /.col-lg-4 -->
            <hr class="featurette-divider">
            <div id="franchise"></div>
            <div class="row featurette">
              <div class="border-3">
                <h1>Franchise</h1>
              </div>
            </div>
          </div><!-- /.row -->
          <br>
          <br>
          <br>
          <br>
          <br>
          <br>
          <br>
          <br>
          <br>
          <br>
          <br>
          <br>
          <br>
          <h3 style="text-align: center;"> Join the five star family </h3>
          <br>
          <h1 style="text-align: center;">Coming Soon</h1>
          <br>
          <br>
          <br>
          <br>
          <br>
          <br>
          <br>
          <br>
          <br>
          <br>
          <br>
          <br>
          <br>
      </div>

      <!-- /END THE FEATURETTES -->

      </div><!-- /.container -->


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