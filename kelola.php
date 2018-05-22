<?php include 'class.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<title>Tambah Berita</title>
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="OwlCarousel2-2.2.1/dist/assets/owl.carousel.min.css">
	<link rel="stylesheet" href="OwlCarousel2-2.2.1/dist/assets/owl.theme.default.min.css">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/warna.css">
</head>
<body>

	<?php include 'navbar.php' ;?>
<section class="content">
	<div class="container">
		
			<h3>Masukan Berita Terbaru Hari Ini</h3><br>
			<div class="col-md-8">
		<form method="POST" enctype="multipart/form-data" class="form-horizontal">
			<div class="form-group">
				<label class="col-md-2 control-label">Berita</label>
				<div class="col-md-8">			
					<input type="text" name="berita" class="form-control">
				</div>
			</div>
			<div class="form-group">
				<label class="col-md-2 control-label">Deskripsi</label>
				<div class="col-md-8">			
					<textarea name="deskripsi" class="form-control"></textarea>
				</div>
			</div>
			<div class="form-group">
				<label class="col-md-2 control-label">Gambar</label>
				<div class="col-md-8">			
					<input type="file" name="gambar" class="form-control">
				</div>
			</div>
			<div class="col-md-8 col-md-offset-2">
				<button class="btn btn-primary" name="simpan"><i class="glyphicon glyphicon-ok"></i>  Simpan</button>
			</div>
		</form>
	
	</div>
	</div>

	<?php 
	if (isset($_POST["simpan"])) 
	{
		$hasil = $berita->simpan_berita($_POST["berita"],$_POST["deskripsi"],$_FILES["gambar"]);


		echo "<script>alert('berita berhasil tersimpan')</script>";
		echo "<script>location='index.php'</script>";

	}


	?>

	</section>








	
	<?php include'footer.php'; ?>

</body>

</html>
