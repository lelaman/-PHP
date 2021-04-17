<?php
// koneksi ke dbms
require 'function.php';

//ambil data yangdi url\
 $ID=$_GET["ID"];
 

 // query data mhasiswa berdasarka idnya
  $mhs =query( "SELECT * FROM rapika WHERE ID=$ID" )[0];
  
// cek apakh submit pernah digunakan
if (isset($_POST["submit"]) ) {
	

	


	if(ubah($_POST) > 0) {
		echo "
		 <script>
		alert('data berhasil ubah');
		document.location.href='latihan2.php';
		</script>
		";

	} else {
		 Echo "<script>
		 alert ('data gagal ubah!');
		 document.location.href='latihan2.php';
		 </script>
		 ";
		 
	}
}
?>
<doytype html>
	<html>
		<head>
			<title>Ubah data</title>
		</head>
		<body>
			<h1> Ubah Data mahasiswa</h1>
			<form action=" "  method="POST">
				<input type="hidden" name="ID" value="<?= $mhs["ID"];?> ">
				<ul>
					<li>
						<label for="nama"> Nama : </label>
						<input type="text" name="nama" id="nama" required value="<?= $mhs["nama"];?>">
					</li>
					<li><label for="nim"> Nim : </label>
						<input type="text" name="nim" id="nim" value="<?= $mhs["nim"];?>">
					</li>
					<li><label for="jurusan"> Jurusan : </label>
						<input type="text" name="jurusan" id="jurusan" value="<?= $mhs["jurusan"];?>">
					</li>
					<li><label for="email"> Email : </label>
						<input type="text" name="email" id="email" value="<?= $mhs["email"];?>">
					</li><label for="gambar"> Gambar </label>
						<input type="text" name="gambar" id="gambar" value="<?= $mhs["gambar"];?>">
					</li>
					<li> <button type="submit" name="submit"> ubah Data</button>
					</li>
				</ul>
			</form>
			
						
		</body>
	</html>
