<?php 

$conn = mysqli_connect("localhost","root","","panda");
//koneksi ke database




function query ($query){
	global $conn;
	$result = mysqli_query($conn, $query);
	$rows = [];
	while( $row = mysqli_fetch_assoc($result)){
		$rows[ ] = $row; 
	}
	return $rows;
}


function absen($data){
	global $conn;

	date_default_timezone_set("Asia/Jakarta");

	$no_pegawai = $data['no_pegawai'];
	$nama = $data['nama'];
	$bagian = $data['bagian'];
	$TIME = date("h:i:s");
	$DATE = date("M:d:Y");

	$query = "INSERT INTO datak VALUES 
				('','$no_pegawai','$nama','$bagian','$TIME','$DATE')";
	
	mysqli_query($conn, $query);

	return mysqli_affected_rows($conn);

}

function hapus($id) {
	global $conn;
	mysqli_query($conn, "DELETE FROM datak WHERE id = $id ");
	return mysqli_affected_rows($conn);
}




 ?>