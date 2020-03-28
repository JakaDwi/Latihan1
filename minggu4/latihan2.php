<!DOCTYPE html>
<html lang = "en">
<head>
    <meta charset = "UTF - 8">
    <title>Latihan Looping</title>
</head>
<body>
    <h2>Membuat perulangan tabel</h2>
    <table border = "1" cellpadding = "10" cellspacing = "0">
        <?php
            for ( $b = 1; $b <= 3; $b++ ) { # $b = untuk baris
                echo "<tr>";
                for ( $k = 1; $k <=5; $k++ ) {
                    echo "<td> $b , $k </td>";
                }
                echo "</tr>";
            }
        ?>
    </table>
</body>
</html>