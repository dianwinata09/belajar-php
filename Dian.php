<?php
    echo "
    <marquee>
        <h1>Dian Winata XIRPL2</h1>
    </marquee>
    ";

    //variable

    $nama = "Dian Winata";
    $kelas = "XI RPL 2";
    $nilai = 80.85;

    echo "nama : " . $nama;
    echo "<br>";
    echo "kelas :" . $kelas;
    echo "<br>";
    echo "nilai : $nilai";
    echo "<br><br>";

    //operator jumlah

    $angka1 = 5;
    $angka2 = 10;

    $hasil = $angka1 + $angka2;
    echo "hasil dari penjumlahan $hasil";
    echo "<br><br>";

    //rumus ruas segi tiga
    $alas = 8;
    $tinggi = 20;
    
    $rumus = 0.5 * $alas *$tinggi;
    echo "hasil rumus : $rumus";
    echo "<br><br>";

    //rumus luas lingkaran
    $phi = 3.14;
    $r = 7;

    $lingkaran = $phi * $r * $r;
    echo "Hasil Luas Lingkaran : $lingkaran" ;
    echo "<br><br>";

    //rumus luas balok

    $p = 10; 
    $l = 5;
    $t = 10;

    $balok =$p * $l * $t;
    echo " Hasil Volume Balok : $balok";
?>
    