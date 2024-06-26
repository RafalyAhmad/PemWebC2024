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
        <title>Property Service | YESclean Indonesia</title>
        <link href="styleset.css" rel="stylesheet" />
    </head>
  <body>
  <?php include "layout/header.html" ?>
  
  <div class="img-fluid" style="height:50px; width: 1520px;"></div>
  
    <p class="mt-5 fs-1 fw-bold text-center">Property Service</p>

    <div
      id="carouselExampleAutoplaying"
      class="carousel slide mt-5"
      data-bs-ride="carousel"
    >
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="Img/bersih1.jpeg" class="d-block w-100" alt="..." />
        </div>
        <div class="carousel-item">
          <img src="Img/bersih2.jpeg" class="d-block w-100" alt="..." />
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
          <h5 class="card-title">Property Service</h5>
          <p class="card-text">
            YCI menyadari bahwa aset dan properti pelanggan harus terjaga dengan
            baik. Aset dan properti tersebut harus dapat dimanfaatkan dalam
            waktu yang cukup lama. Untuk itulah PT. Yes Clean Indonesia hadir
            dalam memberikan perawatan aset dan properti mereka. dan dapat
            pelanggan bisa berfokus pada bisnis utamanya.
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
