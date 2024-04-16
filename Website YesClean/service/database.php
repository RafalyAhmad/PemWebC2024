<?php
$hostname="localhost";
$username="root";
$password="";
$database_name  = "buku_tamu";

$db = mysqli_connect($hostname, $username, $password, $database_name);

if($db->connect_error){
    echo "database rusak";
    die("error!");
}

//$koneksi    = mysqli_connect("localhost", "root", "", "buku_tamu")
//or die(mysqli_connect_error());
?>