<?php
    include("konfigurasi.php");


    $cnn= mysqli_connect(DBHOST, DBUSER, DBPASS, DBNAME, DBPORT);

    if($cnn){
        $tbMK= "tbMK";
        $sql ="CREATE TABLE $tbMK(
          kodematkul VARCHAR(8) PRIMARY KEY,
          matakuliah VARCHAR(50),
          sks INT

        )";
        $hasil = mysqli_query($cnn,$sql);
        if($hasil){
            echo "pembuatan tabel ".$tbMK. "sukses";
        }

    }else{
    echo "pembuatan tabel ".$tbMK. "gagal";
    }
