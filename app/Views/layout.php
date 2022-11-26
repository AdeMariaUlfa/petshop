<!DOCTYPE html>
<html lang="en" itemscope itemtype="http://schema.org/WebPage">

<head>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<link rel="apple-touch-icon" sizes="76x76" href="<?= base_url('assets/img/apple-icon.png'); ?>" />
<link rel="icon" type="image/png" href="<?= base_url('assets/img/favicon.png'); ?>" />

<title>
  PETSHOP
</title>

<!--     Fonts and icons     -->
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />

<!-- Nucleo Icons -->
<link href="<?= base_url('assets/css/nucleo-icons.css'); ?>" rel="stylesheet" />
<link href="<?= base_url('assets/css/nucleo-svg.css'); ?>" rel="stylesheet" />

<!-- Font Awesome Icons -->
<script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
<link href="<?= base_url('assets/css/nucleo-svg.css'); ?>" rel="stylesheet" />
<!-- CSS Files -->
<link id="pagestyle" href="<?= base_url('assets/css/soft-design-system.css?v=1.0.7'); ?>" rel="stylesheet" />
</head>

<body class="index-page">
  
  
  <!-- Navbar -->
<div class="container position-sticky z-index-sticky top-0"><div class="row"><div class="col-12">
<nav class="navbar navbar-expand-lg  blur blur-rounded top-0 z-index-fixed shadow position-absolute my-3 py-2 start-0 end-0 mx-4">
  <div class="container-fluid px-0">
    <a class="navbar-brand font-weight-bolder ms-sm-3" href="https://demos.creative-tim.com/soft-ui-design-system/index.html" rel="tooltip" title="Designed and Coded by Creative Tim" data-placement="bottom" target="_blank">
    PETSHOP
    </a>
    <button class="navbar-toggler shadow-none ms-2" type="button" data-bs-toggle="collapse" data-bs-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon mt-2">
        <span class="navbar-toggler-bar bar1"></span>
        <span class="navbar-toggler-bar bar2"></span>
        <span class="navbar-toggler-bar bar3"></span>
      </span>
    </button>
    <div class="collapse navbar-collapse pt-3 pb-2 py-lg-0 w-100" id="navigation">
      <ul class="navbar-nav navbar-nav-hover ms-lg-12 ps-lg-5 w-100">
        <li class="nav-item dropdown dropdown-hover mx-2">
          <a class="nav-link ps-2 d-flex justify-content-between cursor-pointer align-items-center" href="" id="dropdownMenuPages" data-bs-toggle="dropdown" aria-expanded="false">
            Produk Anjing
          </a>
        </li>
        <li class="nav-item dropdown dropdown-hover mx-2">
          <a class="nav-link ps-2 d-flex justify-content-between cursor-pointer align-items-center" href="" id="dropdownMenuPages" data-bs-toggle="dropdown" aria-expanded="false">
            Produk Kucing
          </a>
        </li>
        <li class="nav-item dropdown dropdown-hover mx-2">
          <a class="nav-link ps-2 d-flex justify-content-between cursor-pointer align-items-center" href="" id="dropdownMenuPages" data-bs-toggle="dropdown" aria-expanded="false">
            Produk Ikan
          </a>
        </li>
        <li class="nav-item dropdown dropdown-hover mx-2">
          <a class="nav-link ps-2 d-flex justify-content-between cursor-pointer align-items-center" href="" id="dropdownMenuPages" data-bs-toggle="dropdown" aria-expanded="false">
            Produk Reptil
          </a>
        </li>
        <li class="nav-item ms-lg-auto">
          <a class="nav-link nav-link-icon me-2" href="/login" target="_blank">
            <i class="fa fa-sign-in" aria-hidden="true"></i>
            <p class="d-inline text-sm z-index-1 font-weight-bold" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="Login Admin">Login</p>
          </a>
        </li>
        
      </ul>
    </div>
  </div>
</nav>
<!-- End Navbar -->
</div></div></div>

<header class="header-2">
  <div class="page-header min-vh-75 relative" style="background-image: url(<?= base_url('assets/img/curved-images/curved.jpg'); ?>">
    <div class="container">
      <div class="row">
        <div class="col-lg-7 text-center mx-auto">
          <h1 class="text-white pt-3 mt-n5">Selamat Datang di Petshop</h1>
          <p class="lead text-white mt-3">Toko online & offline yang menyediakan <br> segala jenis kebutuhan binatang peliharaan anda.</p>
        </div>
      </div>
    </div>

    <div class="position-absolute w-100 z-index-1 bottom-0">
      <svg class="waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 24 150 40" preserveAspectRatio="none" shape-rendering="auto">
        <defs>
          <path id="gentle-wave" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z"></path>
        </defs>
        <g class="moving-waves">
          <use xlink:href="#gentle-wave" x="48" y="-1" fill="rgba(255,255,255,0.40"></use>
          <use xlink:href="#gentle-wave" x="48" y="3" fill="rgba(255,255,255,0.35)"></use>
          <use xlink:href="#gentle-wave" x="48" y="5" fill="rgba(255,255,255,0.25)"></use>
          <use xlink:href="#gentle-wave" x="48" y="8" fill="rgba(255,255,255,0.20)"></use>
          <use xlink:href="#gentle-wave" x="48" y="13" fill="rgba(255,255,255,0.15)"></use>
          <use xlink:href="#gentle-wave" x="48" y="16" fill="rgba(255,255,255,0.95"></use>
        </g>
      </svg>
    </div>
  </div>
</header>


<section class="pt-3 pb-4" id="count-stats">
  <div class="container">
    <div class="row">
      <div class="col-lg-9 z-index-2 border-radius-xl mt-n10 mx-auto py-3 blur shadow-blur">
        <div class="row">
          <div class="col-md-4 position-relative">
            <div class="p-3 text-center">
              <h1 class="text-gradient text-primary"><span id="state1" countto="50">50</span>%</h1>
              <h5 class="mt-3">Discount</h5>
              <p class="text-sm">Save 50% Discount Mainan Kucing & Anjing</p>
            </div>
            <hr class="vertical dark">
          </div>
          <div class="col-md-4 position-relative">
            <div class="p-3 text-center">
              <h1 class="text-gradient text-primary"> <span id="state2" countto="15">15</span>%</h1>
              <h5 class="mt-3">Discount</h5>
              <p class="text-sm">Save up to 15% Discount Makananan Peliharaan Anda</p>
            </div>
            <hr class="vertical dark">
          </div>
          <div class="col-md-4">
            <div class="p-3 text-center">
              <h1 class="text-gradient text-primary"> <span id="state3" countto="30">30</span>%</h1>
              <h5 class="mt-3">Discount</h5>
              <p class="text-sm">Save up to 30% Discount Tempat Tinggal Peliharaan Anda</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="py-5">
  <div class="container">
    <div class="row">
      <div class="row text-center my-sm-5 mt-5">
        <div class="col-lg-6 mx-auto">
          <h2 class="text-primary text-gradient mb-0">Tingkatkan kreativitas</h2>
          <h2 class="">Dengan website kami</h2>
          <p class="lead">Bagikan Kegembiraan! Penawaran & <br> hadiah untuk membuat musim cerah! </p>
        </div>
      </div>
    </div>
  </div>
  <div class="container mt-5">
    <div class="row">
      <div class="col-md-8">
        <div class="row mt-4">
          <div class="col-md-6">
              <div class="card move-on-hover">
                <img class="w-100" src="https://c1.wallpaperflare.com/preview/750/161/185/corgi-ear-dog-portrait.jpg" alt="">
              </div>
              <div class="mt-2 ms-2">
                <h6 class="mb-0">Anjing</h6>
              </div>
          </div>
          <div class="col-md-6 mt-md-0 mt-5">
              <div class="card move-on-hover">
                <img class="w-100" src="https://asset-a.grid.id/crop/0x0:0x0/x/photo/2022/06/14/webpnet-resizeimage-2022-06-1-20220614024455.jpg" alt="">
              </div>
              <div class="mt-2 ms-2">
                <h6 class="mb-0">Kucing</h6>
              </div>
          </div>
          <div class="col-md-6 mt-md-0 mt-6">
              <div class="card move-on-hover">
                <img class="w-100" src="https://www.goodnewsfromindonesia.id/uploads/images/2020/07/1116362020-shutterstock_1021980943.jpg" alt="">
              </div>
              <div class="mt-2 ms-2">
                <h6 class="mb-0">Ikan</h6>
              </div>
          </div>
          <div class="col-md-6 mt-md-0 mt-6">
              <div class="card move-on-hover">
                <img class="w-100" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSsMLKv64cbQP6N4H_Sz63c5H-aO8sLNCUIUUbBYXQRC8P6X1Bgvn7QK8wbd2gAiBfYlPM&usqp=CAU" alt="">
              </div>
              <div class="mt-2 ms-2">
                <h6 class="mb-0">Reptil</h6>
              </div>
          </div>
        </div>
      </div>
      <div class="col-md-3 mx-auto mt-md-0 mt-5">
        <div class="position-sticky" style="top:100px !important">
          <h4 class="">Menyediakan segala jenis kebutuhan hewan peliharaan seperti di gambar</h4>
          <h6 class="text-secondary">Di petshop kami memiliki segala jenis kebutuhan pada hewan anjing, kucing, ikan, dan reptil. Dari makanan, obat, tempat tinggal, dan lainya</h6>
        </div>
      </div>
    </div>
  </div>
</section>


<!-- -------- START Content Presentation Docs ------- -->
<div class="container mt-sm-5">
  <div class="page-header min-vh-50 my-sm-3 mb-3 border-radius-xl" style="background-image: url('https://raw.githubusercontent.com/creativetimofficial/public-assets/master/soft-ui-design-system/assets/img/flower.jpg');">
    <span class="mask bg-gradient-dark"></span>
    <div class="container">
      <div class="row">
        <div class="col-lg-6 ms-lg-5">
          <h4 class="text-white mb-0">By PT. Petshop Indonesia</h4>
          <h1 class="text-white">Sejak 2014</h1>
          <p class="lead text-white opacity-8">Petshop merupakan sebuah toko yang menyediakan segala jenis kebutuhan binatang peliharaan. Semenjak toko ini berkembang dibangunkanlan sebuah website untuk menuju penjangkauan yang lebih luas lagi.</p>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- -------- END Content Presentation Docs ------- -->

<section class="py-7">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 mx-auto text-center">
        <h2 class="mb-0">Dipercaya oleh lebih</h2>
        <h2 class="text-gradient text-primary mb-3">150 mitra</h2>
        <p class="lead">Banyak toko kecil yang memercayakan produk kami secara keseluruhan</p>
      </div>
    </div>
    <div class="row mt-6">


      <div class="col-lg-4 col-md-8">
        <div class="card card-plain">
          <div class="card-body">
            <div class="author">
              <div class="name">
                <h6 class="mb-0 font-weight-bolder">Amanda Sy.</h6>
                <div class="stats">
                  <i class="far fa-clock" aria-hidden="true"></i> 3 hari lalu
                </div>
              </div>
            </div>
            <p class="mt-4">"Ini adalah sebuah website yang bagus, saya sering menggunakan website ini untuk memenuhi kebutuhan binatang peliharaan saya."</p>
            <div class="rating mt-3">
              <i class="fas fa-star" aria-hidden="true"></i>
              <i class="fas fa-star" aria-hidden="true"></i>
              <i class="fas fa-star" aria-hidden="true"></i>
              <i class="fas fa-star" aria-hidden="true"></i>
              <i class="fas fa-star" aria-hidden="true"></i>
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-8 ms-md-auto">
        <div class="card bg-gradient-primary">
          <div class="card-body">
            <div class="author align-items-center">
              <div class="name">
                <h6 class="text-white mb-0 font-weight-bolder">Nathan A.T</h6>
                <div class="stats text-white">
                  <i class="far fa-clock" aria-hidden="true"></i> 1 minggu lalu
                </div>
              </div>
            </div>
            <p class="mt-4 text-white">"Akhirnya saya menemukan solusi dari permasalahan saya. Saya selalu sibuk dalam membeli peralatan kucing saya, dengan adanya website ini sangat terbantu dalam kebutuhan sehari-hari saya. Good Job!!!!"</p>
            <div class="rating mt-3">
              <i class="fas fa-star text-white" aria-hidden="true"></i>
              <i class="fas fa-star text-white" aria-hidden="true"></i>
              <i class="fas fa-star text-white" aria-hidden="true"></i>
              <i class="fas fa-star text-white" aria-hidden="true"></i>
              <i class="fas fa-star text-white" aria-hidden="true"></i>
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-8">
        <div class="card card-plain">
          <div class="card-body">
            <div class="author">
              <div class="name">
                <h6 class="mb-0 font-weight-bolder">Jessica A.</h6>
                <div class="stats">
                  <i class="far fa-clock" aria-hidden="true"></i> 3 minggu lalu
                </div>
              </div>
            </div>
            <p class="mt-4">"Produk-produk yang ada di website ini berkualitas. Saya senang sekali ketika pertama kali membeli, anjing saya sangat menyukainya. Selanjutnya saya akan mencoba produk yang lainnya. Terimakasih~"</p>
            <div class="rating mt-3">
              <i class="fas fa-star" aria-hidden="true"></i>
              <i class="fas fa-star" aria-hidden="true"></i>
              <i class="fas fa-star" aria-hidden="true"></i>
              <i class="fas fa-star" aria-hidden="true"></i>
              <i class="fas fa-star" aria-hidden="true"></i>
            </div>
          </div>
        </div>
      </div>

    </div>
    <hr class="horizontal dark my-5">
    
  </div>
</section>

  <footer class="footer pt-5 mt-5">
  <div class="container">
    <div class=" row">
      <div class="col-12">
        <div class="text-center">
          <p class="my-4 text-sm">
            All rights reserved. Copyright © Petshop <script>document.write(new Date().getFullYear())</script>
          </p>
        </div>
      </div>
    </div>
  </div>
</footer>

<!--   Core JS Files   -->
<script src="<?= base_url('assets/js/core/popper.min.js'); ?>" type="text/javascript"></script>
<script src="<?= base_url('assets/js/core/bootstrap.min.js'); ?>" type="text/javascript"></script>
<script src="<?= base_url('assets/js/plugins/perfect-scrollbar.min.js'); ?>"></script>
<!--  Plugin for TypedJS, full documentation here: https://github.com/inorganik/CountUp.js -->
<script src="<?= base_url('assets/js/plugins/countup.min.js'); ?>"></script>
<script src="<?= base_url('assets/js/plugins/choices.min.js'); ?>"></script>
<script src="<?= base_url('assets/js/plugins/prism.min.js'); ?>"></script>
<script src="<?= base_url('assets/js/plugins/highlight.min.js'); ?>"></script>
<!--  Plugin for Parallax, full documentation here: https://github.com/dixonandmoe/rellax -->
<script src="<?= base_url('assets/js/plugins/rellax.min.js'); ?>"></script>
<!--  Plugin for TiltJS, full documentation here: https://gijsroge.github.io/tilt.js/ -->
// <script src="<?= base_url('assets/js/plugins/tilt.min.js'); ?>"></script>
<!--  Plugin for Selectpicker - ChoicesJS, full documentation here: https://github.com/jshjohnson/Choices -->
<script src="<?= base_url('assets/js/plugins/choices.min.js'); ?>"></script>
<!--  Plugin for Parallax, full documentation here: https://github.com/wagerfield/parallax  -->
<script src="<?= base_url('assets/js/plugins/parallax.min.js'); ?>"></script>
<!-- Control Center for Soft UI Kit: parallax effects, scripts for the example pages etc -->
<!--  Google Maps Plugin    -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDTTfWur0PDbZWPr7Pmq8K3jiDp0_xUziI"></script>
<script src="<?= base_url('assets/js/soft-design-system.min.js?v=1.0.7'); ?>" type="text/javascript"></script>

<script type="text/javascript">

  if (document.getElementById('state1')) {
    const countUp = new CountUp('state1', document.getElementById("state1").getAttribute("countTo"));
    if (!countUp.error) {
      countUp.start();
    } else {
      console.error(countUp.error);
    }
  }
  if (document.getElementById('state2')) {
    const countUp1 = new CountUp('state2', document.getElementById("state2").getAttribute("countTo"));
    if (!countUp1.error) {
      countUp1.start();
    } else {
      console.error(countUp1.error);
    }
  }
  if (document.getElementById('state3')) {
    const countUp2 = new CountUp('state3', document.getElementById("state3").getAttribute("countTo"));
    if (!countUp2.error) {
      countUp2.start();
    } else {
      console.error(countUp2.error);
    };
  }
</script>

</body>

</html>