<?php
session_start();

if(isset($_POST['submit'])) {
    $nama = $_POST['nama'];
    $keperluan = $_POST['keperluan'];
    $waktu_masuk = date("Y-m-d H:i:s");
    
    $_SESSION['tamu'][] = array(
        'nama' => $nama,
        'keperluan' => $keperluan,
        'waktu_masuk' => $waktu_masuk,
        'waktu_keluar' => ''
    );
    
    header("Location: index.php");
    exit();
}
?>
