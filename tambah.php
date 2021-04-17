<?php
// koneksi ke dbms
require 'function.php';

// cek apakh submit pernah digunakan
if (isset($_POST["submit"]) ) {
	

	


	if(tambah($_POST) > 0) {
		echo "
		 <script>
		alert('data berhasil ditambahkan');
		document.location.href='latihan2.php';
		</script>
		";

	}else {
		 Echo "<script>
		 alert ('data gagal ditambahkan');
		 document.location.href='latihan2.php';
		 </script>
		 ";
		 
	}
}
?>
<doytype html>
	<html>
		<head>
			<title> Tambah Data mahasiswa</title>
		</head>
		<body>
			<h1> Tambah mahasiswa</h1>
			<form action=" "  method="POST">
				<ul>
					<li>
						<label for="nama"> Nama : </label>
						<input type="text" name="nama" id="nama" required>
					</li>
					<li><label for="nim"> Nim : </label>
						<input type="text" name="nim" id="nim">
					</li>
					<li><label for="jurusan"> Jurusan : </label>
						<input type="text" name="jurusan" id="jurusan">
					</li>
					<li><label for="email"> Email : </label>
						<input type="text" name="email" id="email">
					</li><label for="gambar"> Gambar </label>
						<input type="text" name="gambar" id="gambar">
					</li>
					<li> <button type="submit" name="submit"> Tambah Data</button>
					</li>
				</ul>
			</form>
			
						
		</body>
	</html>
