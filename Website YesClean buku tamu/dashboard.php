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
        header('location: register.php');
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
            <div class="container d-flex align-items-center">
                <h2>Hai <span class="text-warning"><?= $_SESSION["username"] ?></span></h2>
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