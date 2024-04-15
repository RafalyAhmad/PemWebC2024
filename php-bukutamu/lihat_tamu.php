<?php
session_start();

if(isset($_SESSION['tamu'])) {
    $tamu = $_SESSION['tamu'];
} else {
    $tamu = array();
}

if(isset($_POST['sudah_keluar'])) {
    $index = $_POST['index'];
    $tamu[$index]['waktu_keluar'] = date("Y-m-d H:i:s");
    $_SESSION['tamu'] = $tamu;
}

if(isset($_POST['kembali'])) {
    header("Location: index.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lihat Tamu</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Data Tamu</h1>
        <table>
            <tr>
                <th>Nama</th>
                <th>Keperluan</th>
                <th>Waktu Masuk</th>
                <th>Waktu Keluar</th>
                <th>Action</th>
            </tr>
            <?php foreach($tamu as $key => $data): ?>
            <tr>
                <td><?php echo $data['nama']; ?></td>
                <td><?php echo $data['keperluan']; ?></td>
                <td><?php echo $data['waktu_masuk']; ?></td>
                <td>
                    <?php 
                    if($data['waktu_keluar'] == '') {
                        echo "Belum Keluar";
                    } else {
                        echo $data['waktu_keluar'];
                    }
                    ?>
                </td>
                <td>
                    <?php if($data['waktu_keluar'] == ''): ?>
                    <form action="lihat_tamu.php" method="post">
                        <input type="hidden" name="index" value="<?php echo $key; ?>">
                        <input type="submit" name="sudah_keluar" value="Sudah Keluar">
                    </form>
                    <?php endif; ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <form action="lihat_tamu.php" method="post">
            <input type="submit" name="kembali" value="Kembali">
        </form>
    </div>
</body>
</html>
