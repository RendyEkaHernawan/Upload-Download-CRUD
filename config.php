<?php
    $server = "localhost";
    $username = "root";
    $password = "";
    $database = "db_lat";
    
    $koneksi = 
    mysqli_connect($server,$username,$password,$database);
    if(!$koneksi){
        die("Koneksi Gagal : ".mysqli_connect_error());
    }else{
        echo "";
    }
    
    //mysqli_connect_error()
?>