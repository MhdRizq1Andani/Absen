<?php 
require 'link.php';

$id = $_GET["id"];

if(hapus($id) > 0 ){
	echo "<script>
              alert('data berhasil dihapus!');
              document.location.href = 'datap.php';
            </script>";

}else  {  "<script>
              alert('data gagal dihapus!');
              document.location.href = 'datap.php';
            </script>";
}


 ?>