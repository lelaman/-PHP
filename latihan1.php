
<?php
// koneksi kedatabase
$conn = mysqli_connect("localhost","root",""  ,"calon");
// AMBILL DATA SQL
 $result = mysqli_query($conn, "SELECT * FROM mahasiswa");
 var_dump($result);
 // ambil data objek result(fetch)
 //mysqli_fetch-row
 // mysqli-Fetch_assoc
 //mysql_fetch_array
 //mysql_fetch_abject

 //ambil dat fecth
//while ($mhs= mysqli_fetch_assoc($result)) {
 //var_dump($mhs);
//}

  
 

?>
<doytype html>
	<html>
		<head>
			<title> halaman admin</title>
		</head>
		<body>
			<h1> Daftar mahasiswa</h1>
			
<table border ="1" cellpadding="10" cellspacing="0">

 <tr>
 	<th>No.</th>
 	<th>Aksi</th>
 	<th>Gambar</th>
 	<th>Nim</th>
 	<th>Nama</th>
 	<th>Jurusan</th>
 	<th>Email</th>
 </tr>
 <?php $i=1; ?>

 <?php while ($row = mysqli_fetch_assoc($result)) : ?>

 <tr>

 	<td><?= $i;?></td>
 	<td>
 	<a href="">ubah</a>
 	<a href="">hapus</a>
 </td>
 <td>
 	<img src="img/<?=  $row["gambar"]; ?>" width="100"> </td>
 <td><?= $row["nama"];?></td>
 <td><?= $row["nim"]; ?></td>
 <td><?= $row["jurusan"]; ?></td>
 <td><?= $row ["email"];?></td>
</tr>
<?php $i++; ?>
<?php endwhile; ?>
 
</table>
			
						
		</body>
	</html>
