<?php 
$conn = mysqli_connect("localhost", "root", "","data_mahasiswa");
if ($nim = $_GET['nim']) {
	if ($nim == $_GET['nim'] ) {
		mysqli_query($conn, "DELETE FROM tabel_mahasiswa WHERE nim = '$nim'");
		echo "<script type= text/javascript> alert('Data Dihapus'); </script>";
		header("location: index.php");
	}else{
		echo "<script type= text/javascript> alert('Data Tidak Dihapus'); </script>";
	}
}


 ?>
