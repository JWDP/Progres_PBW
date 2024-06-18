<?php

    $hostname = "localhost";
    $userDataBase = "root";
    $passwordUser = "";
    $dataBaseName = "web";

    $koneksi = mysqli_connect($hostname,$userDataBase,$passwordUser,$dataBaseName) or die ("Gagagl Terhubung");

    #if($koneksi){
       # echo "berhasil koneksi";
    #} else echo "gagal koneksi";

?>