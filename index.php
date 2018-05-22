<!-- <pre><?php print_r($_SESSION); ?></pre> -->
<?php include 'class.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Berita</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="OwlCarousel2-2.2.1/dist/assets/owl.carousel.min.css">
	<link rel="stylesheet" href="OwlCarousel2-2.2.1/dist/assets/owl.theme.default.min.css">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/warna.css">
</head>
<body>
	
	<?php include 'navbar.php'; ?>
	<section class="content">
		<div class="container">
			<div class="section-title">
				<div class="row">
					<div class="col-md-10 col-xs-10">
						<h3>Berita Terbaru</h3>
					</div>
					<div class="col-md-2 col-xs-2">
						<div class="text-right" id="customNavProduct"></div>
					</div>
				</div>
			</div>
			
		<div class="row">
  <div class="col-sm-5 col-md-5>
    <div class="thumbnail">	
			<div class="owl-carousel" id="owl-product">
				<?php $databerita=$berita->beritaterbaru(); ?>
				<?php foreach ($databerita as $key => $value): ?>
					
					<div>
						<div class="product-image">
							<img class="img-rounded" src="foto_berita/<?php echo $value['gambar_berita'] ?>" alt="">
						</div>
						<h3 class="product-title"><a href=""><?php echo $value['nama_berita']; ?></a></h3>
						<a href="detail.php?id=<?php echo $value['id_berita']; ?>" class="btn btn-default">BACA DISINI</a>

					</div>
				<?php endforeach ?>
			</div>
			</div>
			</div>
			</div>
			</div>

			
		</div>
	</section>
	
	
	<?php include 'footer.php'; ?>
</body>
</html>