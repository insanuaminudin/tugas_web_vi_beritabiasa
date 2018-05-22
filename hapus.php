

<?php 
include 'class.php';
// memanggil fungsinya
$berita->hapus_berita($_GET["$id"]);
echo "<script>alert('data telah terhapus')</script>";
echo "<script>location='berita.php';</script>";
 ?>
