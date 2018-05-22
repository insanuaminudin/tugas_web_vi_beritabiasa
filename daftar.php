<?php 
include 'class.php';
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Daftar pelanggan</title>
	<link rel="stylesheet" href="../bootstrap/css/bootstrap.css">
</head>
<body>
	
	<div class="container">
		<div class="row">
			<div class="col-md-8">
				<form action="" method="POST" enctype="multipart/form-data">
					<div class="form-group">
						<label>Nama</label>
						<input type="text" name="nm" class="form-control">
					</div>
					<div class="form-group">
						<label>email</label>
						<input type="text" name="em" class="form-control">
					</div>
					<div class="form-group">
						<label>Password</label>
						<input type="password" name="pas" class="form-control">
					</div>
					
					
					<button class="btn btn-primary" name="simpan">
						<i class="glyphicon glyphicon-save"></i>Simpan
					</button>

				</form>
				<?php 
					//mendapatkan inputan dari formuli $_POST
					// jika ada tombol simpan maka,
				if (isset($_POST["simpan"])) {
					$nama =$_POST["nm"];
					$email = $_POST["em"];
					$pasword = $_POST["pas"];
					
					$admin -> daftar_pengunjung($nama,$email,$pasword);
					// redirect ke tampilpelanggan.php
					echo "<script>alert('Daftar Berhasil')</script>";
					echo "<script>location='login.php';</script>";
				}
				 ?>

			</div>
		</div>
	</div>
	
</body>
</html>