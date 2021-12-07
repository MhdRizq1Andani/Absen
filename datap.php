<?php 

require 'link.php';

$users = query("SELECT * FROM datak")

 ?>


<!DOCTYPE html>
<html>
<head>
	<title>record</title>
	<style>
	</style>
</head>
<body>

	<center>

		<br>

		<h2>ABSEN</h2>
		<br>
			<br>
		<table border="1" cellpadding="10" cellspacing="5">
			
			<tr>
				<th>#</th>
				<th>No Pegawai</th>
				<th>Nama</th>
				<th>Bagian</th>
				<th>Jam</th>
				<th>Tanggal</th>
				<th></th>
			</tr>

			<?php $i = 1; ?>
			<?php foreach ($users as $row) :?>
				<tr>
					<td><?= $i; ?></td>
					<td><?= $row["no_pegawai"]; ?></td>
					<td><?= $row["nama"]; ?></td>
					<td><?= $row["bagian"]; ?></td>
					<td><?= $row["jam"]; ?></td>
					<td><?= $row["tanggal"]; ?></td>
					<td><a href="hapus.php?id=<?= $row["id"]; ?>" onclick = "return confirm('yakin?');">hapus</a></td>
				</tr>
			<?php $i++; ?>
			<?php endforeach ?>
			


		</table>
		<br>
			<br>
		<a href="insert.php"><button type="submit" name="submit">kembali</button></a>

	</center>

</body>
</html>