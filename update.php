<?php 
 
include 'koneksi.php';
$no = $_POST['No'];
$nim = $_POST['NIM'];
$nama = $_POST['Nama'];
$alamat = $_POST['Alamat'];
$jenis_kelamin = $_POST['Jenis_Kelamin'];
$jurusan = $_POST['Jurusan'];
 
mysql_query("UPDATE mahasiswa SET NIM='$nim', Nama='$nama', Alamat='$alamat', Jenis_Kelamin='$jenis_kelamin', Jurusan='$jurusan' WHERE No='$no'");
 
header("location:index.php?pesan=update");
?>