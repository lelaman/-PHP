
<?php
// koneksi kedatabase
require 'function.php';
 
 $mahasiswa = query("SELECT * FROM rapika ORDER BY ID ASC");
 

// tombol cari ditekan
 if(isset($_POST["submit"]) ) {
 	$mahasiswa=cari($_POST["keyword"]);
 }
?>
<doytype html>
	<html>
		<head>
			<title> halaman admin</title>
		</head>
		<body>
			<h1> Daftar mahasiswa</h1>
			<a href="tambah.php">Tambah data Mahasiswa</a>

			<br>
			<br>


<form action="" method="POST">

	<input type="text" name="keyword" size="30 autofokus"
	placeholder="Masukkan keyword pencarian" autocomplete="off">
	<button type="submit" name="submit">cari</button>

</form>
		
		<br>
		<br>	
<table border ="1" cellpadding="10" cellspacing="0">

 <tr>
 	<th>No.</th>
 	<th>Aksi</th>
 	<th>gambar</th>
 	<th>nim</th>
 	<th>nama</th>
 	<th>jurusan</th>
 	<th>email</th>
 </tr>
 <?php $i=1; ?>

 <?php foreach ($mahasiswa as $row ):?>

 <tr>

 	<td><?= $i;?></td>
 	<td>
 	<a href="ubah.php?ID=<?= $row["ID"]; ?>" onclick ="return confirm('yakin!');">ubah</a>
 	<a href="hapus.php?ID=<?= $row["ID"]; ?>" onclick ="return confirm('yakin!');" >hapus</a>
 </td>
 <td>
 	<img src="img/<?=  $row["gambar"]; ?>" width="100"> </td>
 <td><?= $row["nama"];?></td>
 <td><?= $row["nim"]; ?></td>
 <td><?= $row["jurusan"]; ?></td>
 <td><?= $row ["email"];?></td>
</tr>
<?php $i++; ?>
<?php endforeach; ?>
 
</table>
			
						
		</body>
	</html>
