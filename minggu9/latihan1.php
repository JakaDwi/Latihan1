<?php

$koleksi = [
    [
        "nama" => "Peacock Bass Monoculus", 
        "asal" => "Sungai Amazon", 
        "jenis" => "Predator Karnivora Cenderung Omnivora",
        "gambar"=> "mono.png"
    ],
    
    [
        "nama" => "Peacock Bass Orinoco", 
        "asal" => "Sungai Amazon", 
        "jenis" => "Predator Karnivora Cenderung Omnivora",
        "gambar"=> "orino.png"
    ],

    [
        "nama" => "Payara", 
        "asal" => "Amerika Selatan", 
        "jenis" => "Predator Karnivora Cenderung Omnivora",
        "gambar"=> "payara.png"
    ],

    [
        "nama" => "Tiger Shovelnose Catfish", 
        "asal" => "Suriname", 
        "jenis" => "Predator Karnivora Cenderung Omnivora",
        "gambar"=> "tiger.png"
    ],

    [
        "nama" => "Red Tail Catfish", 
        "asal" => "Sungai Amazon", 
        "jenis" => "Predator Karnivora Cenderung Omnivora",
        "gambar"=> "rtc.png"
    ],

    [
        "nama" => "Dazt Borneo", 
        "asal" => "Perairan Borneo", 
        "jenis" => "Predator Karnivora Cenderung Omnivora",
        "gambar"=> "dazt.png"
    ]

 ];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan GET</title>
</head>
<body>
    <h1>Daftar Koleksi Ikan Predator Saya</h1>
        <ul>
            <?php foreach ($koleksi as $klk) : ?>
                <li>
                    <a 
                        href="latihan2.php?nama=<?= $klk["nama"];?>&asal=<?= $klk["asal"];?>&jenis=<?= $klk["jenis"];?>&gambar=<?= $klk["gambar"];?>"><?= $klk["nama"];?>
                    </a>
                </li>
                
            <?php endforeach; ?>
        </ul>
</body>
</html>