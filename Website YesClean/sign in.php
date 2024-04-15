<?php
    include "service/database.php";
    session_start();

    $login_massage  = "";

    if(isset($_SESSION["is_login"])){
        header("location: dashboard.php");
    }

    if(isset($_POST['signIn'])){
        $username   = $_POST['username'];
        $password   = $_POST['password'];
        $keperluan  = $_POST['keperluan'];

        $sql = "SELECT * FROM users 
                WHERE username='$username' AND password='$password'
                ";

        $result = $db->query($sql);

        if($result->num_rows > 0) {
            $data = $result->fetch_assoc();  
            $_SESSION["username"]   = $data["username"];
            $_SESSION["is_login"]   = true;
            
            header("location: dashboard.php");
        }else{
            $login_massage= "AKUN TIDAK DITEMUKAN";
            }
    }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" 
                integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <title>Sign In- YESclean PSTI C</title>
        <link href="styleset.css" rel="stylesheet" />
    </head>
    <body>
        <?php include "layout/header.html" ?>
        <i><?= $login_massage ?></i>
        <section class="header bg-light text-center text-sm-start" id="signIn">
            <div class="container">
                <h3>SIGN IN</h3>
                <form action="sign in.php" method="POST">
                    <input type="text" placeholder="Username" name="username">
                    <input type="password" placeholder="Password" name="password">
                    <input type="text" placeholder="Keperluan" name="keperluan">
                    <button type="submit" class="btn btn-warning" name="signIn" >SIGN IN</button>
                </form>
            </div>
        </section>

    <?php include "layout/footer.html" ?>
    </body>
    </html>