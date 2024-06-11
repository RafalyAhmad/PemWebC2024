<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link 
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" 
        rel="stylesheet" 
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous"
        />
    <link rel="icon" href="img/logo white.png" type="image/x-icon">
    <title>Cleaning Service | YESclean Indonesia</title>
    <link href="styleset.css" rel="stylesheet" />
</head>

  <body>
  <?php include "layout/header.html" ?>

  <div class="img-fluid" style="height:50px; width: 1520px;"></div>
  
    <p class="mt-5 fs-1 fw-bold text-center">CLeaning Service</p>

    <div
      id="carouselExampleAutoplaying"
      class="carousel slide mt-5"
      data-bs-ride="carousel"
    >
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="/Img/Clean1.jpg" class="d-block w-100" alt="..." />
        </div>
        <div class="carousel-item">
          <img src="/Img/Clean2.jpg" class="d-block w-100" alt="..." />
        </div>
      </div>
      <button
        class="carousel-control-prev"
        type="button"
        data-bs-target="#carouselExampleAutoplaying"
        data-bs-slide="prev"
      >
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button
        class="carousel-control-next"
        type="button"
        data-bs-target="#carouselExampleAutoplaying"
        data-bs-slide="next"
      >
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>

    <div
      class="container d-flex justify-content-center align-items-center"
      style="height: 68vh"
    >
      <div class="card" style="width: 18rem">
        <div class="card-body">
          <h5 class="card-title">Cleaning Service</h5>
          <p class="card-text">
            Tidak ada yang menyegarkan seperti rumah yang bersih! Percayakan
            pada YES Clean untuk membawa kilauan berseri ke tempat Anda. Nikmati
            kenyamanan tanpa stres dengan layanan pembersihan kami yang
            profesional.
          </p>
        </div>
      </div>
    </div>

 <?php include "layout/footer.html" ?>

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
