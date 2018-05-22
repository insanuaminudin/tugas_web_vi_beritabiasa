-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 22, 2018 at 08:07 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tugasprak`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `nama_lengkap` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `email`, `password`, `nama_lengkap`) VALUES
(1, 'jhenis@gmail.com', 'dfc00d6e2c760bd3f64e4b261045ff913d404fe1', 'jhenis atha nanda pradana'),
(10, 'sanu1@gmail.com', 'f701abd8043006a1b74c7d58bc880f95d042fe53', 'sanu');

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

CREATE TABLE `berita` (
  `id_berita` int(11) NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `nama_berita` varchar(250) NOT NULL,
  `deskripsi_berita` text NOT NULL,
  `gambar_berita` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `berita`
--

INSERT INTO `berita` (`id_berita`, `id_kategori`, `nama_berita`, `deskripsi_berita`, `gambar_berita`) VALUES
(3, 0, 'Bom Surabaya', 'Surabaya - Polisi menggeledah rumah para pelaku pemboman di Surabaya dan teroris Sidoarjo. Hasilnya mengejutkan. Ditemukan rangkaian bon sebanyak hampir satu truk.\r\n\r\n\"Saat ini sudah dikumpulkan, lalu didisposal untuk jadi barang bukti. Sekarang rangkaian ini tidak didisposal dulu, tapi masih disimpan di Mako Brimob karena jumlahnya banyak,\" kata Kabid Humas Polda Jatim Frans Barung Mangera saat jumpa pers di Mapolda Jatim Jalan Ahmad Yani, Surabaya, Rabu (16/5/2018).\r\nPenemuan ini ujar Barung, usai Densus 88 menemukan satu koper bom pipa yang berjumlah total 54 bom yang sudah dijinakkan. Dalam satu truk ini, terdiri dari ratusan rangkaian bom yang ditemukan dari rumah pelaku pengeboman, rumah para teroris yang ditangkap atau rumah kontrakan teroris yang telah dilumpuhkan polisi. \r\n\r\nNamun ketika ditanya detail jumlahnya, Barung mengatakan belum bisa memastikan jumlahnya karena hingga saat ini, bom tersebut belum didisposal atau dijinakkan. \r\n\r\nSaat ini jelas Barung, 1 truk bom-bom tersebut dibawa ke Markas Brimob Watu Kosek Mojokerto untuk didisposal. Pengiriman tersebut sudah dilakukan sejak pukul 07.31 WIB. \r\nYang jelas jumlahnya banyak. Pagi tadi dibawa ke Watu Kosek kalau sudah didisposal baru kami detailkan. Barang bukti terlalu banyak. kesimpulannya lebih dari satu truk,\" tegasnnya.\r\n\r\nPasca bom meledak di tiga gereja Surabaya, Densus 88 melakukan penggedahan di rumah para pelaku pengeboman. Selain itu, Densus 88 juga melakukan penangkapan terhadap para terduga teroris di Surabaya dan Sidoarjo. ', 'bom.jpg'),
(4, 0, 'BREAKING NEWS - BPPTKG Naikkan Status Gunung Merapi ke Level Waspada   ', '- Setelah mengalami beberapa erupsi freatik, akhirnya status Gunung Merapi ditingkatkan dari Level I (Normal) menjadi Level II (Waspada).\r\n\r\nPeningkatan status Gunung Merapi ini diumumkan Kepala Balai Penyelidikan dan Pengembangan Teknologi Kebencanaan Geologi (BPPTKG), Yogyakarta, Hanik Humaida, Senin (21/05/2018) malam.\r\n\r\nDalam suratnya yang dikirim ke beberapa pihak, Hanik antara lain mengatakan, peningkatan status berlaku mulai Senin pukul 23.00 WIB.\r\n\r\nSurat itu dikirim, antara lain, ke BNPB, Gubernur DIY dan Gubernur Jateng, Bupati Sleman, Bupati Boyolali, dan Bupati Jateng.\r\n\r\n\r\n\r\nArtikel ini telah tayang di Tribunjogja.com dengan judul BREAKING NEWS - BPPTKG Naikkan Status Gunung Merapi ke Level Waspada, http://jogja.tribunnews.com/2018/05/22/breaking-news-bpptkg-naikkan-status-gunung-merapi-ke-level-waspada.\r\nSedangkan pihak KESDM, Badan Geologi, PVMBG Balai Penyelidikan dan Pengembangan Teknologi Kebencanaan Geologi, dalam rilisnya merekomendasikan, antara lain:\r\n\r\n1. Kegiatan pendakian Gunung Merapi untuk sementara tidak direkomendasikan, kecuali untuk kepentingan penyelidikan dan penelitian berkaitan dengan upaya mitigasi bencana.\r\n\r\n2. Radius 3 km dari puncak agar dikosongkan dari aktivitas penduduk.\r\n\r\n3. Masyarakat yang tinggal di KRB III mohon meningkatkan kewaspadaan terhadap aktivitas Merapi.\r\n\r\n4. Masyarakat agar tidak terpancing isu-isu mengenai erupsi Gunung Merapi yang tidak jelas sumbernya dan tetap mengikuti arahan aparat pemerintah daerah.\r\n\r\n\r\n\r\nArtikel ini telah tayang di Tribunjogja.com dengan judul BREAKING NEWS - BPPTKG Naikkan Status Gunung Merapi ke Level Waspada, http://jogja.tribunnews.com/2018/05/22/breaking-news-bpptkg-naikkan-status-gunung-merapi-ke-level-waspada.', '2018_05_21_23_05_21_erupsi-freatik-merapi_20180521_103003.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(11) NOT NULL,
  `nama_kategori` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pengunjung`
--

CREATE TABLE `pengunjung` (
  `id_pengunjung` int(11) NOT NULL,
  `email_pengunjung` varchar(100) NOT NULL,
  `password_pengunjung` varchar(50) NOT NULL,
  `nama_pengunjung` varchar(250) NOT NULL,
  `telepon_pengunjung` varchar(25) NOT NULL,
  `alamat_pengunjung` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id_berita`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `pengunjung`
--
ALTER TABLE `pengunjung`
  ADD PRIMARY KEY (`id_pengunjung`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `berita`
--
ALTER TABLE `berita`
  MODIFY `id_berita` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pengunjung`
--
ALTER TABLE `pengunjung`
  MODIFY `id_pengunjung` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
