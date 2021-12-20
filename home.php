<?php
include "koneksi.php";
$query = mysqli_query($koneksi,"SELECT * FROM mahasiswa");
?>
<form action="" method="post">
    <table border="1" cellpadding="0" cellspacing="0">
        <tr>
          <th>NO</th>
			<th>Nama</th>
			<th>NIM</th>
            <th>Jenis Kelamin</th>
			<th>Alamat</th>
			<th>Jurusan</th>
            <th>OPSI</th>
        </tr>
        <?php if(mysqli_num_rows($query)>0){ ?>
        <?php
            $no = 1;
            while($data = mysqli_fetch_array($query)){
        ?>
        <tr>
            <td><?php echo $no ?></td>
            <td><?php echo $data["Nama"];?></td>
            <td><?php echo $data["NIM"];?></td>
            <td><?php echo $data["Jenis Kelamin"];?></td>
            <td><?php echo $data["Alamat"];?></td>
            <td><?php echo $data["Jurusan"];?></td>
            <td>
                <a href="#">Delete</a> |
                <a href="#">Update</a>
            </td>
        </tr>
        <?php $no++; } ?>
        <?php } ?>
    </table>
</form>