<?php
  require 'function.php'; 

 $ID=$_GET["ID"];

  if(hapus($ID) > 0) {
  	echo "
		 <script>
		alert('data berhasil dihapus');
		document.location.href='latihan2.php';
		</script>
		";

	} else {
		 Echo "<script>
		 alert ('data gagal dihapus');
		 document.location.href='latihan2.php';
		 </script>
		 ";
		 
  }
?>