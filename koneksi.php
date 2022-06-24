<?php
 //koneksi ke database uas-web
 $server = "localhost";
  $user = "root";
 $pass = "";
 $dbname = "uas-web";

 $koneksi = mysqli_connect($server,$user,$pass,$dbname);
 if(mysqli_connect_errno()){
  echo "Koneksi database gagal".mysqli_connect_error();
 }
?>
