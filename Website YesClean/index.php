<?php
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" 
                integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <title>Home-YESclean PSTI C</title>
        <link href="styleset.css" rel="stylesheet" />
    </head>

    <body>
        <?php include "layout/header.html" ?>

    <!--PROJECT-->
    <section class="header bg-light text-center text-sm-start" id="projects">
        <div class="container">
            <div class="d-flex align-items-center">
                <div>
                    <h1><span class="text-danger">YES</span>clean!</h1>
                    <h2>Your House Cleaning Solution</h2>
                    <p class="lead">
                        Sistem berbasis website yang menyediakan layanan Home Cleaning Service Hunian rumah, kos, dan apartemen terpercaya di Indonesia. 
                    </p>
                </div>

                <img 
                    class="img-fluid w-25 w-sm-50 d-none d-sm-block" 
                    src="img/cleaning.png" 
                    alt="header">
            </div>
        </div>
    </section>
     
    <!--ALASAN PILIH-->
    <section class="alasan bg-warning p-4" id="alasan">
        <div class="container">
            <h1>Mengapa YESclean?</h1>
            <p>
                Dewasa ini, dengan berkembangnya kesetaraan, baik pria maupun wanita dapat menempuh pendidikan dan pekerjaan dalam taraf yang sama. 
                Membuat tuntutan pekerjaan, perkuliahan, serta aktivitas luar rumah yang semakin meningkat. 
                Tidak lagi memandang gender, baik ayah, ibu, pria, maupun wanita kini memiliki jam terbang yang tinggi, membuatnya pulang ke rumah menjelang malam dan terlalu lelah bahkan sekedar membersihkan huniannya.
                <br>YESclean hadir sebagai peringan beban di kala lelah dan penat :)
            </p>
        </div>
    </section>

    <!--OUR TEAM-->
    <section class="p-4" id="team">
        <div class="container">
            <h1 class="pb-2">Meet <span class="text-warning">Our</span> Team!</h1>
            <div class="pb-5 row text-center">
                <diw class="col-md">
                    <div class="card align-items-center bg-light h-80">
                        <img 
                            src="img/Arnora Mardiansyah.jpg" 
                            class="card-img-top" 
                            alt="Foto-Arnora">
                        <div class="card-body">
                            <h5 class="card-title">Arnora Mardiansyah</h5>
                            <h6>NPM : 2215061015</h6>
                            <p class="card-text ">
                                -
                                <br>The greatest teacher is failure.
                            </p>
                            <a href="https://drive.google.com/file/d/1griGf88KZAMjTYnwz_CniJ6pKkzLlU_I/view?usp=drive_link" class="btn btn-warning">Here's my CV!</a>
                        </div>
                    </div>
                </diw>
                <diw class="col-md">
                    <div class="card align-items-center bg-secondary-subtle h-80">
                        <img 
                            src="img/Ahmad Rafaly_Materi.jpg" 
                            class="card-img-top" 
                            alt="Foto-Rafaly">
                        <div class="card-body">
                            <h5 class="card-title">Ahmad Rafaly</h5>
                            <h6>NPM : 2215061011</h6>
                            <p class="card-text">
                                -
                                <br>Kak Bagas, tutor dribble dong.
                                
                            </p>
                            <a href="https://drive.google.com/file/d/1ds8X0cQOjoGja4H_AOS9RUOb5mxotxKQ/view?usp=drive_link" class="btn btn-warning">Here's my CV!</a>
                        </div>
                    </div>
                </diw>
                <diw class="col-md">
                    <div class="card align-items-center bg-light h-80">
                        <img 
                            src="img/Theofani Hati K.jpg" 
                            class="card-img-top" 
                            alt="Foto-Theofani">
                        <div class="card-body">
                            <h5 class="card-title">Theofani Hati K</h5>
                            <h6>NPM : 2255061004</h6>
                            <p class="card-text">
                                Gapailah mimpi setinggi langit, kalau jatuh seengganya pernah ke langit.
                            </p>
                            <a href="https://drive.google.com/file/d/1tTk52b6tYtg5HQVVX8luERKWIDGoX3iF/view?usp=drive_link" class="btn btn-warning">Here's my CV!</a>
                        </div>
                    </div>
                </diw>
                <diw class="col-md">
                    <div class="card align-items-center bg-secondary-subtle h-80">
                        <img 
                            src="img/Laurentius Nicholas C.png" 
                            class="card-img-top" 
                            alt="Foto-Laurentius">
                        <div class="card-body">
                            <h5 class="card-title">Laurentius Nicholas C</h5>
                            <h6>NPM : 2215061059</h6>
                            <p class="card-text">
                                Inget kata Dorry "Terus berenang terus berenang".
                            </p>
                            <a href="https://drive.google.com/file/d/1vaN5KuqBfTuZvQIFL53S7o_udbG3UMXy/view?usp=drive_link" class="btn btn-warning">Here's my CV!</a>
                        </div>
                    </div>
                </diw>
            </div>
        </div>
    </section>

    <?php include "layout/footer.html" ?>
    </body>
</html>