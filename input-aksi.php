<?php 
include 'koneksi.php';
$nim = $_POST['NIM'];
$nama = $_POST['Nama'];
$alamat = $_POST['Alamat'];
$jenis_kelamin = $_POST['Jenis_Kelamin'];
$jurusan = $_POST['Jurusan'];
 
mysql_query("INSERT INTO mahasiswa VALUES('','$nim','$nama','$alamat','$jenis_kelamin','$jurusan')");
 
header("location:index.php?pesan=input");
?>