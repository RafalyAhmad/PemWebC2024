<?php
    session_start();                                //start si session
    if(isset($_POST["logOut"])){
        session_unset();                            //clear semua datanya
        session_destroy();                          //destroy, ya keluar la tu data
        header('location: index.php');
    }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" 
                integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <title>Dashboard- YESclean PSTI C</title>
        <link href="styleset.css" rel="stylesheet" />
    </head>

<body>
    <?php include "layout/header.html" ?>
    <section class="header bg-light text-center text-sm-start">
        <div class="container">
            <div class="d-flex align-items-center">
                <h2>Hai <span class="text-warning"> <?= $_SESSION["username"] ?> </span></h2>
                <form action="dashboard.php" method="POST">
                    <button type="submit" class="btn btn-warning" name="logOut" >LOG OUT</button>
                </form>
            </div>
        </div>
    </section>

    <section class="header bg-light text-center text-sm-start" id="projects">
        <div class="container">
            <div class="d-flex align-items-center">
                <h1>HELAW INI <span class="text-danger">DASHBOARD</span> yg belum diisi</h1>
            </div>
        </div>
    </section>
    <?php include "layout/footer.html" ?>
</body>
</html>