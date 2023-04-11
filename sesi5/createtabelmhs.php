<?php
    include("konfigurasi.php");


    $cnn= mysqli_connect(DBHOST, DBUSER, DBPASS, DBNAME, DBPORT);

    if($cnn){
        $tbMHS= "tbMHS";
        $sql ="CREATE TABLE $tbMHS(
            id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
            nama VARCHAR(35),
            nim VARCHAR(10),
            alamat VARCHAR(255),
            telp VARCHAR(15),
            prodi VARCHAR(25),
            jeniskelamin VARCHAR(2),
            Tgllahir date 
       )";
        $hasil = mysqli_query($cnn,$sql);
        if($hasil){
            echo "pembuatan tabel ".$tbMHS. "sukses";
        }

    }else{
    echo "pembuatan tabel ".$tbMHS. "gagal";
    }
