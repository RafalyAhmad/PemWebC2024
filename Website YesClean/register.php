<?php
    include "service/database.php";
    session_start();

    $register_massage = "";

    if(isset($_SESSION["is_login"])){
        header("location: dashboard.php");
    }

    if(isset($_POST['register'])){
        $username   = $_POST["username"];
        $password   = $_POST["password"];
        
        try{
            $sql = "INSERT INTO users(username_pengguna, password_pengguna) VALUES('$username', '$password')";

            if($db->query($sql)) {
                $register_massage = "REGISTERED, go click that SIGN IN option!";
                }else{
                $register_massage = "YOUR REGISTER doesn't run successfully, try again";
                }
        }catch(mysqli_sql_exception){
            $register_massage = "USERNAME ALREADY USED, try another username";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <title>Register- YESclean PSTI C</title>
        <link href="styleset.css" rel="stylesheet" />
    </head>
    <body>
        <?php include "layout/header.html" ?>
        
        <section class="header bg-light text-center text-sm-start" id="signUp">
            <div class="container">
                <h3>REGISTER</h3>
                <i><?= $register_massage ?></i>
                <form action="register.php" method="POST">
                    <input type="text" placeholder="Nama" name="username">
                    <input type="password" placeholder="Password" name="password">
                    <button type="submit" class="btn btn-warning" name="register" >SUBMIT</button>
                </form>
            </div>
        </section>

    <?php include "layout/footer.html" ?>
    </body>
    </html>