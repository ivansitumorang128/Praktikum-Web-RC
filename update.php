<?php 
$nimbaru = $_GET['nim1'];
$conn = mysqli_connect("localhost", "root", "","data_mahasiswa");
$query = mysqli_query($conn, "SELECT * FROM tabel_mahasiswa where nim = '$nimbaru' ")

 ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="tambah.css">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
	<script type="text/javascript" src="JQuery.js"></script>
</head>
<body>

<div class="formdata">
<h2>INPUT DATA MAHASISWA</h2>
<form method="post" id="formmahasiswa">
<label>NIM</label>
<input class="form-control form-control-lg" type="text" aria-label=".form-control-lg example" name="nim">
<label>Nama</label>
<input class="form-control form-control-lg" type="text" aria-label=".form-control-lg example" name="name" value="">
<label>Prodi</label>
<select class="form-select" aria-label="Default select example" name="prodi">
  <option selected><?= $query['prodi'] ?></option>
  <option value="Teknik Informatika">Teknik Informatika</option>
  <option value="Teknik Sipil">Teknik Sipil</option>
  <option value="Teknik Geofisika">Teknik Geofisika</option>
  <option value="Teknik Geomatika">Teknik Geomatika</option>
  <option value="Teknik Geologi">Teknik Geologi</option>
  <option value="Perencanaan Wilayah dan Kota">Perencanaan Wilayah dan Kota</option>
  <option value="Teknik Industri">Teknik Industri</option>
</select>

<label>Angkatan</label>
<select class="form-select" aria-label="Default select example" name="angkatan">
  <option selected>Pilih Angkatan</option>
  <option value="2015">2015</option>
  <option value="2016">2016</option>
  <option value="2017">2017</option>
  <option value="2018">2018</option>
  <option value="2019">2019</option>
  <option value="2020">2020</option>
  <option value="2021">2021</option>
</select>
<button type="submit" class="btn btn-primary" id="submit" name="submit">Submit</button>
</form>
</div>

</body>
</html>
