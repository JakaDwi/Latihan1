<?php
$mahasiswa =["Jaka Dwi Prasetyo", "19.52.0004", "Teknik 
Informatika", "pelolong24@gmail.com"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>
    <ul>
        <?php foreach($mahasiswa as $mhs): ?>
        <li>
            <?php echo $mhs; ?>
        </li>
        <?php endforeach; ?>
    </ul>
    
</body>
</html>