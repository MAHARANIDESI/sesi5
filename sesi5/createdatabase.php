<?php
    include("konfigurasi.php");


    $cnn= mysqli_connect (DBHOST, DBUSER, DBPASS);


    if($cnn){

        $sql ="CREATE DATABASE ". DBNAME ;
        $hasil = mysqli_query($cnn,$sql);
        if($hasil){
            echo "pembuatan data base ".DBNAME. "sukses";
        }



    }else{
    echo "koneksi ke mysql gagal";
    }