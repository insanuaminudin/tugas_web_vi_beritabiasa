<?php include'class.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<title>Detail Berita</title>
	<link rel="stylesheet" href="css/bootstrap.css">
</head>
<body>
	<?php include 'navbar.php'; ?>
	<?php 
		$idp=$_GET['id'];
		$databerita = $berita->ambilberita($idp);



	 ?>
	 <section class="content">
		<div class="container">
			<div class="row">
				<div class="col-md-9">
					<div class="row">
						<div class="col-md-6">
							<div class="product-image">
								<img src="foto_berita/<?php echo $databerita['gambar_berita']; ?>" alt="" class="img-responsive">
							</div>
						</div>
						<div class="col-md-6">
							<h2 class="product-title"><?php echo $databerita['nama_berita']; ?></h2>
							<p>
								<?php echo $databerita['deskripsi_berita']; ?>
							</p>
							
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

</body>
</html>