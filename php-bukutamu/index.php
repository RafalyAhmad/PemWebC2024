<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buku Tamu</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Buku Tamu</h1>
        <form action="process.php" method="post">
            <label for="nama">Nama:</label><br>
            <input type="text" id="nama" name="nama"><br>
            <label for="keperluan">Keperluan:</label><br>
            <textarea id="keperluan" name="keperluan"></textarea><br>
            <input type="submit" value="Submit" name="submit">
        </form>
        <a href="lihat_tamu.php" class="lihat-tamu">Lihat Tamu</a>
    </div>
</body>
</html>
