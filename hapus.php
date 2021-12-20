<?php 
include 'koneksi.php';
$no = $_GET['No'];
mysql_query("DELETE FROM mahasiswa WHERE No='$no'")or die(mysql_error());
 
header("location:index.php?pesan=hapus");
?>