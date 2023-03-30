<?php
$koneksi = mysqli_connect("localhost","root","","laman_berita");
// cek koneksi
if (!$koneksi){
  die("Error koneksi: " . mysqli_connect_errno());
}
?>