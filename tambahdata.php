<?php 
function kirim(){
$conn = mysqli_connect("localhost", "root", "","data_mahasiswa");

$nim1 = $_POST['nim'];
$nama1 = $_POST['name'];
$prodi1 = $_POST['prodi'];
$angkatan1 = $_POST['angkatan'];

$query = mysqli_query($conn, "insert into tabel_mahasiswa values (' ','$nim1', '$nama1', '$prodi1', '$angkatan1')");

return $query;
}
 ?>