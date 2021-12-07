<?php 

	require 'link.php';

	if(isset($_POST["submit"]) ){

		if(absen($_POST) > 0){
			echo "<script>
              		alert('absen sukses!');
              		document.location.href = 'datap.php';
            	 </script>";
		}else {
			echo "<script>
              		alert('absen gagal!');
              		document.location.href = 'datap.php';
            	  </script>";
		}

	}


?>


<!DOCTYPE html>
<html>
<head>
	<title>ABSEN</title>
	<style>
		label{
			display: block;
		}
	</style>
</head>
<body>

	<center>
		<h2>ABSEN</h2>

		<form action="" method="post">
			<table>
				<tr>
					<td>
						<label for="no_pegawai">No Pegawai</label>
            			<input type="text" name="no_pegawai" id="no_pegawai" required>
					</td>
				</tr>
				<tr>
					<td>
						<label for="nama">Nama</label>
            			<input type="text" name="nama" id="nama" required>
					</td>
				</tr>
				<tr>
					<td>
						<label for="bagian">Bagian</label>
            			<input type="text" name="bagian" id="bagian" required>
					</td>
				</tr>
				<tr>
          			<td>
            		<button type="submit" name="submit">absen</button>
          			</td>
        		</tr>
			</table>	
		</form>


	</center>

</body>
</html>