<!DOCTYPE html>
<html>
<head>
	<title>Akademik</title>
	<link rel="stylesheet" type="text/css" href="style1.css">
</head>
<body bgcolor="#FFFFFF">
	<div class="judul">		
		<h1>Data Mahasiswa Angkatan 2014</h1>
		<h2>Universitas Padjajang Jurusan Manajemen & Akutansi</h2>
		<h3>Jalan Raya Rancameong No. 212</h3>
	</div>
	<br/>
 
 <h3><b>Form Pencarian Mahasiswa</b></h3>
 
<form action="search.php" method="get">
	<label>Cari :</label>
	<input type="text" name="cari">
	<input type="submit" value="Cari">
</form>
 
	<?php 
	if(isset($_GET['pesan'])){
		$pesan = $_GET['pesan'];
		if($pesan == "input"){
			echo "Data berhasil di input.";
		}else if($pesan == "update"){
			echo "Data berhasil di update.";
		}else if($pesan == "hapus"){
			echo "Data berhasil di hapus.";
		}
	}
	?>
	<br/>
	<a class="ex2" href="input.php">+ Tambah Data Baru</a>
 
	<h3><b>Data Mahasiswa</b></h3>
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
		<?php 
		include "koneksi.php";
		$query_mysql = mysql_query("SELECT * FROM mahasiswa")or die(mysql_error());
		$nomor = 1;
		while($data = mysql_fetch_array($query_mysql)){
		?>
		<tr>
			<td><?php echo $nomor++; ?></td>
			<td><?php echo $data['NIM']; ?></td>
			<td><?php echo $data['Nama']; ?></td>
			<td><?php echo $data['Alamat']; ?></td>
            <td><?php echo $data['Jenis_Kelamin']; ?></td>
            <td><?php echo $data['Jurusan']; ?></td>
			<td>
				<a class="ex1" href="edit.php?No=<?php echo $data['No']; ?>">Edit</a> |
				<a class="ex1" href="hapus.php?No=<?php echo $data['No']; ?>">Hapus</a>					
			</td>
		</tr>
		<?php } ?>
	</table>
</body>
</html>