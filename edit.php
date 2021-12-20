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
    
	<a class="ex2" href="index.php">Lihat Semua Data</a>
 
	<br/>
	<h3><b>Edit data</b></h3>
 
	<?php 
	include "koneksi.php";
	$no = $_GET['No'];
	$query_mysql = mysql_query("SELECT * FROM mahasiswa WHERE No='$no'")or die(mysql_error());
	$nomor = 1;
	while($data = mysql_fetch_array($query_mysql)){
	?>
	<form action="update.php" method="post">		
		<table>
			<tr>
				<td>NIM</td>
				<td>
					<input type="hidden" name="No" value="<?php echo $data['No'] ?>">
					<input type="text" name="NIM" value="<?php echo $data['NIM'] ?>">
				</td>					
			</tr>	
            <tr>
				<td>Nama</td>
				<td><input type="text" name="Nama" value="<?php echo $data['Nama'] ?>"></td>					
			</tr>	
			<tr>
				<td>Alamat</td>
				<td> <textarea name="Alamat" id="" cols="30" rows="5" ><?php echo $data['Alamat']; ?>
				</textarea> </td>										
			</tr>	
			<tr>
				<td>Jenis Kelamin</td>
    <td>
      <label><input type="radio" name="Jenis_Kelamin" value="Pria"  <?php if($data=="Pria"){echo "checked";} ?> >Pria</label>
      <label><input type="radio" name="Jenis_Kelamin" value="Wanita"  <?php if($data=="Wanita"){echo "checked";} ?> >Wanita</label>
    </td>
   </tr>
   <tr>
                 <td>Jurusan</td>
				<td><select name="Jurusan">
                <option value="--" <?php if($data=="--"){echo "selected";} ?>  >--Kosong--</option>
  				<option value="Manajemen Keuangan" <?php if($data=="Manajemen Keuangan"){echo "selected";} ?>  >Manajemen Keuangan</option>
  				<option value="Manajemen SDM" <?php if($data=="Manajemen SDM"){echo "selected";} ?>  >Manajemen SDM</option>
  				<option value="Manajemen Bisnis" <?php if($data=="Manajemen Bisnis"){echo "selected";} ?>  >Manajemen Bisnis</option>
  				<option value="Manajemen Produksi" <?php if($data=="Manajemen Produksi"){echo "selected";} ?>  >Manajemen Produksi</option>
                <option value="Akutansi" <?php if($data=="Akutansi"){echo "selected";} ?>  >Akutansi</option>
				</select></td> 								
			</tr>		
			<tr>
				<td></td>
				<td><input type="submit" value="Simpan"></td>					
</tr>				
		</table>
	</form>
	<?php } ?>
</body>
</html>
