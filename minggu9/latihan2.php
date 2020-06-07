<?php
//cek apakah $_GET terdapat data?
if( !isset($_GET["nama"]) ){
    //redirect
    header("Location: latihan1.php");
    exit;
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Koleksi</title>
</head>
<body>
    <ul>
        <li><img src="img/<?= $_GET["gambar"]?>"></li>
        <li><?= $_GET["nama"]; ?></li>
        <li><?= $_GET["asal"]; ?></li>
        <li><?= $_GET["jenis"]; ?></li>
    </ul>

    <a href="latihan1.php">Kembali ke halaman utama</a>
</body>
</html>