<!DOCTYPE html>
<html>
<head>
	<title>Akademik</title>
	<link rel="stylesheet" type="text/css" href="style1.css">
</head>
<body>
	<div class="judul">		
		<h1>Data Mahasiswa Angkatan 2014</h1>
		<h2>Universitas Padjajang Jurusan Manajemen & Akutansi</h2>
		<h3>Jalan Raya Rancameong No. 212</h3>
	</div>
	<br/>
<?php 
include 'koneksi.php';
?>
 
<h3><b>Form Pencarian Mahasiswa</b></h3>
 
<form action="search.php" method="get">
	<label>Cari :</label>
	<input type="text" name="cari">
	<input type="submit" value="Cari">
</form>

<br>
<a class="ex2" href="input.php">+ Tambah Data Baru</a>
<br>
<br>

<?php 
if(isset($_GET['cari'])){
	$cari = $_GET['cari'];
	echo "<b>Hasil pencarian : ".$cari."</b>";
}
?>

<table border="1" class="table">
	<tr>
		<th>No</th>
		<th>NIM</th>
        <th>Nama</th>
        <th>Alamat</th>
        <th>Jenis Kelamin</th>
        <th>Jurusan</th>
        <th>Opsi</th>
	</tr>
    <br>
    <a class="ex2" href="index.php"><= Kembali</a>
	<?php 
	if(isset($_GET['cari'])){
		$cari = $_GET['cari'];
		$data = mysql_query("select * from mahasiswa where Nama like '%".$cari."%'");				
	}else{
		$data = mysql_query("select * from mahasiswa");		
	}
	$no = 1;
	while($d = mysql_fetch_array($data)){
	?>

	<tr>
		<td><?php echo $no++; ?></td>
        <td><?php echo $d['NIM']; ?></td>
		<td><?php echo $d['Nama']; ?></td>
        <td><?php echo $d['Alamat']; ?></td>
        <td><?php echo $d['Jenis_Kelamin']; ?></td>
        <td><?php echo $d['Jurusan']; ?></td>
        <td>
        <a class="edit" href="edit.php?No=<?php echo $data['No']; ?>">Edit</a> |
		<a class="hapus" href="hapus.php?No=<?php echo $data['No']; ?>">Hapus</a>
        </td>
	</tr>
	<?php } ?>
</table>
</body>
</html>