<?php
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" 
                integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <title>Buku Tamu- YESclean PSTI C</title>
        <link href="styleset.css" rel="stylesheet" />
    </head>

    <body>
        <?php include "layout/header.html" ?>
        <section class="header bg-light text-center text-sm-start">
            <div class="container d-flex align-items-center">
                <h2 class="text">Buku Tamu <span class="text-danger">YES</span>clean</h2>
            </div>
            <div class="container text-center">
                <table class="table">
                    <thead>
                        <tr>
                        <th scope="col">No</th>
                        <th scope="col">Username</th>
                        <th scope="col">Keperluan</th>
                        <th scope="col">Waktu Masuk</th>
                        <th scope="col">Waktu Keluar</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        include "koneksi.php";
                        $no=1;
                        $ambilData= mysqli_query($koneksi, "SELECT * FROM tamu_masuk, tamu_keluar
                        WHERE tamu_masuk.id_tamu_masuk = tamu_keluar.id_tamu_keluar") or die(mysqli_error($koneksi));

                        while($tampil = mysqli_fetch_array($ambilData)){
                            echo "
                            <tr>
                                <td align='center'>$no</td>
                                <td>$tampil[username_pengguna]</td>
                                <td>$tampil[keperluan]</td>
                                <td align='center'>$tampil[waktu_masuk]</td>
                                <td align='center'>$tampil[waktu_keluar]</td>
                            </tr>";
                            $no++;
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </section>
        <?php include "layout/footer.html" ?>
    </body>
    </html>