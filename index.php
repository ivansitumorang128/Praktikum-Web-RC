<?php 
$conn = mysqli_connect("localhost", "root", "","data_mahasiswa");
$ambildata = mysqli_query($conn, "select*from tabel_mahasiswa");
 ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
	<script type="text/javascript" src="JQuery.js"></script>
	<title></title>
</head>
<body>
	<div class="d-grid gap-2" >
  <button class="btn btn-primary" type="button" id="add">Button</button>
</div>

	<table class="table table-dark table-hover">
		<thead>
			<tr>
				<th>No</th>
				<th>NIM</th>
				<th>Nama</th>
				<th>Prodi</th>
				<th>Angkatan</th>
				<th> </th>
			</tr>
		</thead>
		<tbody>
			<?php while ($tampil = mysqli_fetch_array($ambildata)) : ?>
			<tr>
				<td><?= $tampil['no'] ?></td>
				<td><?= $tampil['nim'] ?></td>
				<td><?= $tampil['nama'] ?></td>
				<td><?= $tampil['prodi'] ?></td>
				<td><?= $tampil['angkatan'] ?></td>
				<td>
				<a href="hapus.php?nim= <?= $tampil['nim'] ?>">HAPUS</a>
				<a href="update.php?nim1= <?= $tampil['nim'] ?>">EDIT</a>
				</td>
			</tr>
			<?php endwhile; ?>
		</tbody>
	</table>

</body>
</html>

<script type="text/javascript">
	$(document).ready(function(){
		$("#add").click(function(){
			window.location.href = "tambah.php";
		});
	});
</script>