<?php include'class.php'; 
$semuaberita = $berita->tampil_berita();

echo "<pre>";
print_r($semuaberita);
echo "</pre>";


?>


<!DOCTYPE html>
<html>
<head>
	<title>Tampil Data Berita</title>
	<link rel="stylesheet"  href="css/bootstrap.css">
</head>
<body>
	<div class="container">
	<table class="table table-hover">
	<thead>
	<tr>
		<th>No</th>
		<th>Nama Berita</th>
		<th>Deskripsi</th>
		<th>Gambar</th>
		<th>Aksi</th>
	</tr>
	</thead>
	<?php foreach ($semuaberita as $key => $value): ?>
		
	
	<tbody>
		<tr>
			<td><?php echo $key+1 ?></td>
			<td><?php echo $value ["nama_berita"] ?> </td>
			<td><?php echo $value ["deskripsi_berita"] ?></td>
			<td><?php echo $value ["gambar_berita"] ?></td>

			<td>
				 <a href="hapus.php?id=<?php echo $value["id_berita"]; ?>" class="btn btn-danger"> Hapus Berita </a>

				<button class="btn btn-success"> <i class="glyphicon glyphicon-wrench"></i>  Edit Berita</button>
			</td>
		</tr>
		

	</tbody>
	<?php endforeach ?>
</table>
</div>
</body>
</html>