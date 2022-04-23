<?php
$host = "localhost";
$user = "root";
$pass = "";
$dbname = "berita_kita"; 

$connect = mysqli_connect($host,$user,$pass);

if(mysqli_connect_errno()){

   echo "Gagal Koneksi ke Database ". mysqli_connect_error();   
}else{

   echo "Koneksi Sukses";
}

?>