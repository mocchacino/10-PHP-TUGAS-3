<?php
    $jarak = 360;
    $kecepatan = 90;
    $waktu_jam = $kecepatan/$jarak;
    $waktu = $waktu_jam * 60;
    echo "
        Jarak kota A-Z = $jarak Km<br/>
        Kecepatan motor = $kecepatan <br/>
        Waktu tempuh = ?
        Jawaban : $waktu Menit
    ";
?>