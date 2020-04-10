<?php
    //date untuk menampilkan tanggal dengan format tertentu

    echo date (
        "l, d-M-Y",
        time() +
            60 * 60 * 24 - 500
            );

    // dengan format tersebut kita dapat mengetahui 100 hari yang akan datang hari apa

    ?>