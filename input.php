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
	<h3><b>Input data baru</b></h3>
	<form action="input-aksi.php" method="post">		
		<table>
       		 <tr>
				<td>NIM</td>
				<td><input type="text" name="NIM"></td>					
			</tr>	
			<tr>
				<td>Nama</td>
				<td><input type="text" name="Nama"></td>					
			</tr>	
			<tr>
				<td><align="left">Alamat</td>
				<td> <textarea name="Alamat" rows="10" cols="30">

				</textarea> </td>					
			</tr>	
			<tr>
				<td>Jenis Kelaminn</td>
				<td><input type="radio" id="Pria" name="Jenis_Kelamin" value="Pria">
  				<label for="Pria">Pria</label><br>
 				 <input type="radio" id="Wanita" name="Jenis_Kelamin" value="Wanita">
			  	<label for="Wanita">Wanita</label><br></td>					
			</tr>	
            <tr>
				<td>Jurusan</td>
				<td><select id="Jurusan" name="Jurusan">
                <option value="">-Kosong-</option>
  				<option value="Manajemen Keuangan">Manajemen Keuangan</option>
  				<option value="Manajemen SDM">Manajemen SDM</option>
  				<option value="Manajemen Bisnis">Manajemen Bisnis</option>
  				<option value="Manajemen Produksi">Manajemen Produksi</option>
                <option value="Akutansi">Akutansi</option>
				</select></td> 				
			</tr>	
			<tr>
				<td></td>
				<td><input type="submit" value="Simpan"> <input type="reset" onClick="konfirmasi()"></td>					
			</tr>				
		</table>
	</form>
    
</body>
</html>