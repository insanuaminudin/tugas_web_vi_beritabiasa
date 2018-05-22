<?php  

session_start();

$mysqli= new mysqli("localhost","root","","tugasprak");
class admin
{
	public $koneksi;
	function __construct($mysqli)
	{
		$this->koneksi=$mysqli;
	}
	function login_admin($em,$ps)
	{
			// enskripsi $ps dengan sha1
		$pass=sha1($ps);
			// 1. mengambil data yg cocok dengan email dan pass itu
		$ambil=$this->koneksi->query("SELECT * FROM admin WHERE email='$em' AND password='$pass' ");
			// 2. menghitung data yg cocok 
		$yangcocok=$ambil->num_rows;
			// 3. bila ada data yang cocok sama dengan 1(ada 1 akun yang cocok dengan database) maka
		if ($yangcocok==1) 
		{
				// 3.a pecah data ke array
			$akun=$ambil->fetch_assoc();
				// 3b. menyimpan akun ke session ['admin']
			$_SESSION['admin'] = $akun;
			return "sukses";
		}
		else
		{
				// 4. selain itu jika tidak ada yanng cocok(0 akun yang sama) meka
			return "gagal";
		}

	}
	function daftar_pengunjung($nama,$email,$pasword)
	{
		$pass=sha1($pasword);	
		$this->koneksi->query("INSERT INTO admin (email,password,nama_lengkap) 
			VALUES('$email','$pass','$nama')");		
	}


}
class berita
{
	public $koneksi;
	function __construct($mysqli)
	{
		$this->koneksi=$mysqli;
	}
	function tampil_berita()
	{
		$ambilberita = $this->koneksi->query("SELECT * FROM berita");
		while($pecahberita = $ambilberita->fetch_assoc())
		{
			$semuaberita[] = $pecahberita;	
		}
	
	return $semuaberita;
	}



function simpan_berita($berita,$deskripsi,$gambar)
{
			// mengambil gambar
	$namagambar=$gambar["name"];
	$fotofix = date("Y_m_d_H_m_d")."_".$namagambar;
			// mengambil lokasi gambar
	$lokasigambar=$gambar["tmp_name"];
			// upload gambar dari lokasi ke ../gambar_produk/$namagambar
	move_uploaded_file($lokasigambar, "foto_berita/$fotofix");
	$this->koneksi->query("INSERT INTO berita (nama_berita,deskripsi_berita,gambar_berita) 
		VALUES('$berita','$deskripsi','$fotofix')");		
}
function ambilberita($id_berita)
{
	$ambil=$this->koneksi->query("SELECT * FROM berita WHERE id_berita='$id_berita'");
	$pecah=$ambil->fetch_assoc();
	return $pecah;
}
function beritaterbaru()
{
	$data=array();
	$ambil=$this->koneksi->query("SELECT * FROM berita ORDER BY id_berita DESC LIMIT 5 ");
	while ($pecah = $ambil->fetch_assoc()) 
	{
		$data[]=$pecah;
	}
	return $data;
}

function ambil_berita($id)
{
	$ambilberita = $this->koneksi->query("SELECT * FROM berita WHERE id_berita='$id'");

	$pecahberita = $ambilberita->fetch_assoc();

	return $pecahberita;
}
function hapus_berita($id)
{
	// Sebelum menghapus data dr data base , kita harus menghapus foto dulu dari folder foto
	// caranya:
	//1.Ambil data lamanya dulu
		$data_berita_lama = $this->ambil_berita($id);
		// 2.Ambil Foto Lamanya
		$foto_lama = $foto_berita_lama['foto_pelanggan'];
		// 3.jika foto lama ada di folder foto
		if (file_exists("foto_berita/$foto_lama")) 
		{
			// 4.mengapus foto lama di folder
			unlink("foto_berita/foto_lama");

		}
		// menghapus datanya
		$this->koneksi->query("DELETE FROM berita WHERE id_berita='$id'");
} 

}

$admin = new admin($mysqli);
$berita = new berita($mysqli);
	// $pengunjung = new admin($mysqli);
?>


<!-- disusun oleh @kelompok 3 jhenis,insanu,abdullah,wahid,dzulhaidar -->
