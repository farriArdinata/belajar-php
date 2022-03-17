<?php

$servername = "localhost"; //hostname Xampp
$username = "root"; //username default root
$password = ""; //password default Xampp kosong
$database = "belajar_db"; //sesuai kan dengan database yang digunakan

//menghubungkan php ke database menggunakan mysqli_connect
$koneksi = mysqli_connect($servername,$username,$password,$database);

//mengecek php terhubung dengan database atau tidak
if ($koneksi) {
  echo "Berhasil Koneksi";
}else{
  die("Gagal Koneksi" . mysqli_connect_error());
}

?>
