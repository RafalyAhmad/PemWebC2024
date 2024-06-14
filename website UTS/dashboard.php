<?php
    include "service/database.php";
    session_start();                                //start si session
    $logout_massages  = "";

    if(isset($_POST["logOut"])){
        $username = $_SESSION["username"];
        //$logout_time = date("Y-m-d H:i:s");         // Catat waktu logout
        
        try{
            $sql = "INSERT INTO tamu_keluar(username_pengguna) VALUES('$username')";
            if($db->query($sql)) {
                $logout_massages = "LOG OUT succeed!";
            }else{
                $logout_massages = "LOG OUT doesn't run successfully, try again";
            }
        }catch(mysqli_sql_exception){
            $logout_massages = "ada error bray, benerin dulu coba";
        }
        session_unset();                            // clear semua datanya
        session_destroy();                          // destroy, ya keluar la tu data
        header('location: index.php');
    }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link 
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" 
            rel="stylesheet" 
            integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" 
            crossorigin="anonymous"/>
        <link rel="icon" href="img/logo white.png" type="image/x-icon">
        <title>Beranda | YESclean Indonesia</title>
        <link href="styleset.css" rel="stylesheet" />
    </head>

    <body>
    <?php include "layout/header.html" ?>

    <!--HEADER-->
    <section class="bg-white text-center text-sm-start img-fluid" style="padding: 85px; background-image: url('img/header\ background.jpg'); background-size: 1550px" id="projects" >
        <div class="container d-flex justify-content-center">
            <div class="container" style="padding-bottom: 150px;">
                <h1 class="text-white" style="margin-top: 90px; margin-bottom: 20px; font-size: 65px;"><strong>Bersih-Bersih Rumah Jadi Makin Cepat</strong></h1>
                <h5 class="text-white" style="margin-top: 60px;">Cari partner bersih-bersih yang terjamin kualitasnya? Cuma kita yang bisa!</h5>
                <!--<h3 class="text-white">Apalagi jasa kebersihan disini didukung oleh pekerja profesional yang terlatih dan kompeten, bersih-bersih rumah jadi makin cepat!</h5>-->    
            </div>
            <div class="container" style="height: 10px;"></div>
        </div>
    </section>
    <div class="img-fluid" style="height:100px; width: 1520px; background-color: #001E47;"></div>
    <div class="img-fluid" style="height:80px; width: 1520px;"></div>

    <!--TENTANG SISTEM--> 
    <section class="p-4"> 
        <div class="container">
            <div class="d-flex align-items-center">
                <div class="container d-flex align-items-center " >
                    <div class="rounded">
                        <div>
                            <h1 style="margin-bottom: 50px;"><strong>Selamat Datang di Website YES Clean Indonesia</strong></h1>
                            <p class="lead text-primary">YES Clean Indonesia merupakan perusahaan yang bergerak di bidang jasa, menyediakan solusi pembersihan dan perawatan hunian berkualitas di Indonesia.</p>
                            <p class="lead text-dark">Didirikan pada tahun 2023, YES Clean Indonesia terus memperluas jangkauannya ke seluruh Indonesia</p>
                        </div>
                    </div>
                </div>
                    <img 
                        class="img-fluid w-sm-50 d-none d-sm-block" 
                        src="img/pekerja.png" 
                        style="width: 1450px;">
            </div>
        </div>
    </section>
    <div class="img-fluid" style="height:50px; width: 1520px;"></div>

    <!--LAYANAN-->
    <section class="p-4" id="layanan">    
        
        <div class="container">
            <div id="carouselLayanan" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                  <button type="button" data-bs-target="#carouselLayanan" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                  <button type="button" data-bs-target="#carouselLayanan" data-bs-slide-to="1" aria-label="Slide 2"></button>
                  <button type="button" data-bs-target="#carouselLayanan" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img 
                        src="img/Cleaning Service1.jpg" 
                        class="img-fluid d-block w-100" 
                        alt="Foto Cleaning Service">
                    <div class="carousel-caption d-none d-md-block">
                      <h5>Cleaning Service</h5>
                      <p> Layanan yang menyediakan tim profesional untuk membersihkan dan merapikan rumah Anda. Dengan menggunakan jasa ini, Anda dapat menjaga kebersihan rumah tanpa harus meluangkan waktu dan tenaga sendiri.</p>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <img src="img/Property Service1.jpg" 
                    class="img-fluid d-block w-100" 
                    alt="Foto Property Service">
                    <div class="carousel-caption d-none d-md-block">
                      <h5>Property Service</h5>
                      <p> Layanan yang menyediakan tim profesional untuk membersihkan perabotan di dalam rumah Anda. Sofa berdebu? tidak lagi jika ada kami! </p>
                    </div>
                  </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselLayanan" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselLayanan" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
        <div class="img-fluid" style="height:50px; width: 1520px;"></div>
        <div class="container">
            <h1 class="text-center">Layanan Kami</h1>
            <p class="text-center">Cepat, Cekatan, Bersih Mengilap! Tim kami siap menjadikan hunian anda semakin nyaman. </p>
            <p class="text-center" style="margin-top: -20px;">Yuk, intip jenis layanan kami!</p>
            <div class="d-flex justify-content-center">
                <div class="bg-light rounded d-flex justify-content-center" style="width: fit-content; margin-right: 25px; padding: 8px;">
                    <div class="container border bg-white rounded align-items-center" style="margin: 10px; width: fit-content;">
                        <a href="Cleaning Service.php" class="text-dark" style="text-decoration: none;"><h3><img src="img/icon cleaning.jpg" style="max-height: 100px;" alt="icon Cleaning Service">Cleaning Service</h3></a>
                    </div>
                </div>
                <div class="bg-light rounded" style="width: fit-content; margin-left: 25px; padding: 8px;">
                    <div class="container border rounded bg-white" style="margin: 10px; width: fit-content;">
                        <a href="Property Service.php" class="text-dark" style="text-decoration: none;"><h3><img src="img/icon property.jpg" style="max-height: 100px" alt="icon Property Service">Property Service</h3></a>
                    </div>
                </div>
            </div>
        </div>  
    </section>

    <!--KONTAK-->
    <div class="img-fluid" style="height:80px; width: 1520px;" id="kontak"></div>
    <div class="kontak text-center">
        <h1>HUBUNGI KAMI</h1>
        <div class="position-relative py-2 px-4 text-center">
            <a href="https://wa.me/qr/LVRSQD2TCYHBC1" class="btn btn-success"><img src="Img/wa-kontak.svg" class="wa">WhatsApp</a>
          </div>
    </div>
    <!--KONTRIBUTOR-->
    <section class="p-4" id="kontributor">
        <div class="container">
            <h1 class="pb-2">Meet <span class="Our">Our</span> Team!</h1>
            <div class="pb-5 row text-center">
                <diw class="col-md">
                    <div class="card align-items-center text-bg-info h-80">
                        <img 
                            src="img/Arnora Mardiansyah.jpg" 
                            class="card-img-top" 
                            alt="Foto-Arnora">
                        <div class="card-body">
                            <h5 class="Nama">Arnora Mardiansyah</h5>
                            <h6 class="npm">NPM : 2215061015</h6>
                            <p class="text ">
                                -
                                <br>The greatest teacher is failure.
                            </p>
                            <a href="http://arnora.my.id/" class="btn btn-light">Here's my CV!</a>
                        </div>
                    </div>
                </diw>
                <diw class="col-md">
                    <div class="card align-items-center text-bg-info h-80">
                        <img 
                            src="img/Ahmad Rafaly_Materi.jpg" 
                            class="card-img-top" 
                            alt="Foto-Rafaly">
                        <div class="card-body">
                            <h5 class="Nama">Ahmad Rafaly</h5>
                            <h6 class="npm">NPM : 2215061011</h6>
                            <p class="text">
                                -
                                <br>Kak Bagas, tutor dribble dong.
                                
                            </p>
                            <a href="https://rafalyahmad.github.io/" class="btn btn-light">Here's my CV!</a>
                        </div>
                    </div>
                </diw>
                <diw class="col-md">
                    <div class="card align-items-center text-bg-info h-80">
                        <img 
                            src="img/Theofani Hati K.jpg" 
                            class="card-img-top" 
                            alt="Foto-Theofani">
                        <div class="card-body">
                            <h5 class="Nama">Theofani Hati K</h5>
                            <h6 class="npm">NPM : 2255061004</h6>
                            <p class="text">
                                Gapailah mimpi setinggi langit, kalau jatuh seengganya pernah ke langit.
                            </p>
                            <a href="http://theofanihati.free.nf" class="btn btn-light">Here's my CV!</a>
                        </div>
                    </div>
                </diw>
                <diw class="col-md">
                    <div class="card align-items-center text-bg-info h-80">
                        <img 
                            src="img/Laurentius Nicholas C.png" 
                            class="card-img-top" 
                            alt="Foto-Laurentius">
                        <div class="card-body">
                            <h5 class="Nama">Laurentius Nicholas C</h5>
                            <h6 class="npm">NPM : 2215061059</h6>
                            <p class="text">
                                Inget kata Dorry "Terus berenang terus berenang".
                            </p>
                            <a href="https://laurentiusnicholasc.github.io/web/" class="btn btn-light">Here's my CV!</a>
                        </div>
                    </div>
                </diw>
            </div>
        </div>
    </section>

    <?php include "layout/footer.html" ?>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>   

    </body>
</html>