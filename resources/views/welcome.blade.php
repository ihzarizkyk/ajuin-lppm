<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.css') }}">
    
    <title>Ajuin - Homepage</title>
</head>
<body style="font-family:  'Montserrat', sans-serif;">

        <nav class="navbar py-3 navbar-expand-lg navbar-light bg-light">
            <div class="container">
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <a class="navbar-brand" href="#">
                <img src="assets/img/logoabalabal.jpg" width="120" alt="abalabal">
              </a>
              <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
                <ul class="navbar-nav ms-auto fw-bolder">
                  <li class="nav-item">
                    <a class="nav-link active  px-3 py-2" aria-current="page" href="#">Beranda</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link px-3 py-2" href="#">Kerjasama</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link px-3 py-2" href="#">Tentang kami</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link px-3 py-2" href="#">Kontrak</a>
                  </li>
                  <a href="{{ url('/login') }}" class="btn btn-primary px-4 py-1 rounded-3 fw-normal">Login</a>
                </ul>
              </div>
            </div>
          </nav>

          <div class="container-fluid py-lg-5 bg-black">
            <h3 class="d-flex justify-content-center text-white fw-normal mb-5 py-lg-5">ABOUT US</h3>
            <h1 class="d-flex justify-content-center text-white fw-bold mb-5 text-center">Challenge for<br> everythings</h1>
            <p class="d-flex justify-content-center text-white fw-light text-center">
              kita adalah debu-debu bintang yang terlihat kecil <br>dikejauhan, tetapi sesungguhnya kita adalah bintang<br>besar yang bersinar terang
            </p>
            <div class="d-flex justify-content-center py-lg-5" id="get-started">
              <button type="button" class="btn btn-primary px-4 py-1 rounded-3 d-flex justify-content-center">Learn More</button>
            </div>
          </div>
        <div class="container-fluid shadow mt-5">
          <h1 class="d-flex justify-content-center fw-bold mt-5 mb-5">PARTNERSHIP</h1>
          <div class="row mx-5 mb-5">
            <div class="col d-flex justify-content-center mt-4 mb-5">
              <img src="assets/img/Group3.png" width="120"  alt="">
            </div>
            <div class="col d-flex justify-content-center mt-4 mb-5">
              <img src="assets/img/Group3.png" width="120" alt="">
            </div>
            <div class="col d-flex justify-content-center mt-4 mb-5">
              <img src="assets/img/Group3.png" width="120" alt="">
            </div>
            <div class="col d-flex justify-content-center mt-4 mb-5">
              <img src="assets/img/Group3.png" width="120" alt="">
            </div>
          </div>
        </div>

        <div class="container-fluid shadow mt-5">
          <h1 class="d-flex justify-content-center fw-bold mt-5 mb-5">KERJASAMA TAHUNAN</h1>
          <div class="row">
            <div class="col d-flex justify-content-center align-self-start">
              <h2 class="fw-bold">2018</h2>
              <h1 class="text-primary mt-4 mb-5">10</h1>
            </div>
            <div class="col d-flex justify-content-center align-self-center">
              <h2 class="fw-bold">2019</h2>
              <h1 class="text-primary mt-4 mb-5">16</h1>
            </div>
            <div class="col d-flex justify-content-center align-self-end">
              <h2 class="fw-bold">2020</h2>
              <h1 class="text-primary mt-4 mb-5">23</h1>
            </div>
        </div>
        </div>
        <div class="container-fluid">
          <h1 class="d-flex justify-content-center fw-bold mt-5 mb-5">Berita</h1>
          <div class="row">
            <div class="col d-flex justify-content-center m-2">
              <div class="card shadow-lg" style="width: 18rem;">
                <img src="assets/img/n1.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Berita 1</h5>
                  <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum, nostrum.</p>
                  <a href="#" class="btn btn-primary">Baca</a>
                </div>
              </div>
            </div>
            <div class="col d-flex justify-content-center m-2">
              <div class="card shadow-lg" style="width: 18rem;">
                <img src="assets/img/n2.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Berita 2</h5>
                  <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing, elit. Libero, nemo.</p>
                  <a href="#" class="btn btn-primary">Baca</a>
                </div>
              </div>
            </div>
            <div class=" col d-flex justify-content-center m-2">
              <div class="card shadow-lg" style="width: 18rem;">
                <img src="assets/img/n3.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Berita 3</h5>
                  <p class="card-text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ab, aliquam?</p>
                  <a href="#" class="btn btn-primary">Baca</a>
                </div>
              </div>
            </div>
        </div>
        </div>
        
        <div class="container-fluid bg-primary">
          <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 mt-5 ">
            <div class="col-md-4 d-flex align-items-center ">
              
              <span class="text-white">&copy; 2021 Company, Inc</span>
            </div>
        
          </footer>
        </div>

    <script src="{{ asset('assets/js/bootstrap.js') }}"></script>
</body>
</html>

