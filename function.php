<?php

// koneksi kedatabase
$conn = mysqli_connect("localhost","root",""  ,"calon");

function query($query) {
	global $conn;
 $result = mysqli_query($conn, $query);
 $rows=[];
 while ($row= mysqli_fetch_assoc ($result) ) {
 	$rows[]=$row;

  }
  return $rows;
}


function tambah($data) {
	global $conn;
	$nama=htmlspecialchars($data["nama"]);
	$nim=htmlspecialchars($data["nim"]);
	$jurusan=htmlspecialchars($data["jurusan"]);
	$email=htmlspecialchars($data["email"]);
	$gambar=htmlspecialchars($data["gambar"]);

	//query fungsi data

	$query="INSERT INTO rapika  VALUES ('','$nama','$nim','$jurusan','$email','$gambar')
	";
	mysqli_query($conn, $query);

	return mysqli_affected_rows($conn);

} 

function hapus($ID) {
	global $conn;
	mysqli_query($conn, "DELETE FROM rapika WHERE ID=$ID");

	return mysqli_affected_rows($conn);
} 

function ubah($data) {
	global $conn;
	$ID=$data["ID"];
	$nama=htmlspecialchars($data["nama"]);
	$nim=htmlspecialchars($data["nim"]);
	$jurusan=htmlspecialchars($data["jurusan"]);
	$email=htmlspecialchars($data["email"]);
	$gambar=htmlspecialchars($data["gambar"]);

	//query fungsi data

	$query="UPDATE  rapika SET 
	nama='$nama',
	nim='$nim',
	jurusan='$jurusan',
	email='$email',
	gambar='$gambar'
	WHERE ID = $ID
	";
	mysqli_query($conn, $query);

	return mysqli_affected_rows($conn);

}

function cari($keyword) {
	$query="SELECT *FROM rapika
	 WHERE
	nama LIKE'%$keyword%' OR
	nim LIKE'%$keyword%' OR
	jurusan LIKE'%$keyword%' OR
	email LIKE'%$keyword%'
	";

	return query($query);
} 
?>