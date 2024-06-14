<?php
    include "service/database.php";
    session_start();

    $login_massage  = "";

    if(isset($_SESSION["is_login"])){
        header("location: dashboard.php");
    }

    if(isset($_POST['logIn'])){
        $username   = $_POST['username'];
        $password   = $_POST['password'];
        $keperluan  = $_POST['keperluan'];

        $sql = "SELECT * FROM users 
                WHERE username_pengguna='$username' AND password_pengguna='$password'
                ";
        $result = $db->query($sql);

        if($result->num_rows > 0) {
            $data = $result->fetch_assoc();  
            $_SESSION["username"]   = $data["username_pengguna"];
            $_SESSION["is_login"]   = true;
            
            $sql = "INSERT INTO tamu_masuk(username_pengguna, keperluan) VALUES('$username', '$keperluan')";
            if($db->query($sql)) {
                $login_massage = "LOG IN succeed!";
            }else{
                $login_massage = "LOG IN doesn't run successfully, try again";
            }
        }else{
            $login_massage= "AKUN TIDAK DITEMUKAN";
            }
        
            header("location: dashboard.php");
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
        
    <!--NAVBAR-->
    <nav class="navbar shadow navbar-expand-lg fixed-top" style="background-color: #001E47" data-bs-theme="dark">
    <div class="container">
        <img src="img/Logo Nama.png" style="max-width: 150px; padding-right: 5px;">
        <a href="dashboard.php" class="navbar-brand "></a>
        
        <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navmenu"
            >
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navmenu">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a href="index.php" class="nav-link">Beranda</a>
                </li>
                <li class="nav-item">
                    <a href="register.php" class="nav-link">Register</a>
                </li>
                <li class="nav-item">
                    <a href="login.php" class="nav-link">Log In</a>
                </li>
            </ul>
        </div>    
    </div>
</nav>

        <i><?= $login_massage ?></i>
        <section class="header text-center text-sm-start" id="logIn">
            <div class="container">
            <div class="img-fluid" style="height:50px; width: 1520px"></div>
            <h1 class="text-warning" style="margin-top: 90px; margin-bottom: 20px; font-size: 65px;"><strong>Log In</strong></h1>
               
                <form action="login.php" method="POST">
                    <input type="text" placeholder="Username" name="username">
                    <input type="password" placeholder="Password" name="password">
                    <input type="text" placeholder="Keperluan" name="keperluan">
                    <button type="submit" class="btn btn-warning" name="logIn" >LOG IN</button>
                </form>
            </div>
            <div class="img-fluid" style="height:90px; width: 1520px"></div>

        </section>

    <?php include "layout/footer.html" ?>
    </body>
    </html>