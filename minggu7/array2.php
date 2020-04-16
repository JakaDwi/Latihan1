<?php
//array multidimensi/ array didalam array/ array bersarang
$mahasiswa =[
    ["Jaka Dwi Prasetyo", "19.52.0004", "Teknik 
    Informatika", "pelolong24@gmail.com"],
    ["Jaka Dwi", "19.525.0004", "Teknik 
    Informatika", "pel25@gmail.com"],
    ["Jaka", "19.5.0041", "Teknik 
    Informatika", "pelolooooong@gmail.com"]
];
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
    <?php foreach($mahasiswa as $mhs) : ?>
    <ul>
        <?php foreach($mhs as $m) : ?>
        <li> <?php echo $m; ?> </li>
        <?php endforeach; ?>
    </ul>
    <?php endforeach; ?>
</body>
</html>