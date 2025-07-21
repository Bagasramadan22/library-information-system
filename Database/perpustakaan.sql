-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 29, 2024 at 09:34 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.1.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `perpustakaan`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_anggota`
--

CREATE TABLE `tbl_anggota` (
  `id_anggota` int(11) NOT NULL,
  `tgl_lahir` varchar(50) DEFAULT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `no_hp` varchar(50) DEFAULT NULL,
  `jenis_kelamin` varchar(50) DEFAULT NULL,
  `kelas` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_anggota`
--

INSERT INTO `tbl_anggota` (`id_anggota`, `tgl_lahir`, `nama`, `no_hp`, `jenis_kelamin`, `kelas`) VALUES
(10, '2024-05-29', 'firzi', '08758757580', 'Laki-laki', ' VII 7'),
(11, '2024-05-30', 'arul', '08758757585', 'Laki-laki', 'VI 6'),
(12, '2024-06-03', 'Melani', '08758757585', 'Perempuan', ' VII 8'),
(13, '2024-06-04', 'rehan', '08758757585', 'Laki-laki', ' VII 7'),
(14, '2024-06-05', 'wati', '08758757585', 'Perempuan', ' VII 8'),
(15, '2024-06-29', 'Faruk', '08758757580', 'laki-laki', 'VII 8'),
(16, '2024-06-29', 'bagas', '08758757580', 'laki-laki', 'VII 8'),
(17, '2024-06-29', 'Samsul', '08758757580', 'Laki-laki', 'IX 9'),
(18, '2024-06-29', 'Jamal', '08758757580', 'Laki-laki', 'VIII 8'),
(19, '2024-06-29', 'Sami', '08758757580', 'laki-laki', 'IX 9'),
(20, '2024-06-29', 'Wawa', '08758757580', 'laki-laki', 'VII 7'),
(21, '2024-06-30', 'Budi', '08758757580', 'laki-laki', 'VII 7'),
(22, '2024-06-24', 'Satrio', '08758757583', 'laki-laki', 'VII 7'),
(23, '2024-06-30', 'Randi', '08758757580', 'laki-laki', 'VII 7');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_buku`
--

CREATE TABLE `tbl_buku` (
  `id_buku` int(11) NOT NULL,
  `judul_buku` varchar(100) DEFAULT NULL,
  `id_kategori` int(11) DEFAULT NULL,
  `id_penulis` int(11) DEFAULT NULL,
  `id_penerbit` int(11) DEFAULT NULL,
  `id_rak` int(11) DEFAULT NULL,
  `isbn` varchar(100) DEFAULT NULL,
  `tahun` varchar(4) DEFAULT NULL,
  `bahasa` varchar(100) DEFAULT NULL,
  `jumlah` varchar(10) DEFAULT NULL,
  `cover` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_buku`
--

INSERT INTO `tbl_buku` (`id_buku`, `judul_buku`, `id_kategori`, `id_penulis`, `id_penerbit`, `id_rak`, `isbn`, `tahun`, `bahasa`, `jumlah`, `cover`) VALUES
(76, 'BUKU PROJEK PENGUATAN PROFIL PELAJAR PANCASILA (P5): UNTUK SISWA SEKOLAH MENENGAH PERTAMA (FASE-D)', 8, 64, 20, 10, '978-623-205-813-2', '2024', 'indonesia', '10', 'Preliminaries_P5_D_SMP.jpg'),
(77, 'BUKU PENDIDIKAN JASMANI, OLAHRAGA, DAN KESEHATAN UNTUK SMP/MTs KELAS 8', 13, 63, 20, 12, '978-623-205-904-7', '2024', 'indonesia', '10', 'PJOK-SMP-Kelas-VIII.jpg'),
(78, 'BUKU BELAJAR BARENG MATEMATIKA UNTUK SMP/MTs KELAS 8', 14, 62, 20, 9, '978-623-205-875-0', '2024', 'indonesia', '10', 'Matematika-SMP-Kelas-VIII-KurMer.jpg'),
(79, 'BUKU ILMU PENGETAHUAN ALAM UNTUK SISWA SMP/MTS KELAS VII', 10, 65, 20, 5, '978-623-205-830-9', '2023', 'indonesia', '10', 'IPA-SMP-Kelas-VII-Penilaian-Revisi-2023.jpg'),
(80, 'BUKU BAHASA INGGRIS UNTUK SISWA SMP/MTs KELAS VII FASE D', 15, 66, 21, 8, '978-602-382-557-8', '2023', 'Inggris', '10', 'Bahasa-Inggris-SMP-Kelas-VII-Debi-Ratna3.jpg'),
(81, 'BUKU PENDIDIKAN AGAMA ISLAM DAN BUDI PEKERTI UNTUK SMP KELAS 8', 16, 67, 20, 26, '978-623-205589-0', '2023', 'indonesia', '10', 'PAI-SMP-Kelas-VIII.jpg'),
(82, 'BUKU ILMU PENGETAHUAN SOSIAL UNTUK SISWA SMP/MTS KELAS VII', 12, 68, 20, 18, '978-623-205-824-8', '2023', 'indonesia', '10', 'IPS-SMP-Kelas-VII-Penilaian-Rev-2023.jpg'),
(83, 'BUKU BAHASA INDONESIA UNTUK SMP/MTs KELAS 8', 17, 69, 20, 7, '978-623-205-858-3', '2023', 'indonesia', '10', 'B.-Indonesia-SMP-Kelas-VIII.jpg'),
(84, 'BUKU PENDIDIKAN PANCASILA UNTUK SMP/MTs KELAS 8', 11, 70, 20, 10, '978-623-205-847-7', '2023', 'indonesia', '10', 'Pancasila-SMP-Kelas-VIII-1024x1024.jpg'),
(85, 'BUKU INFORMATIKA UNTUK SMP/MTs KELAS 7', 8, 71, 20, 11, ' 978-623-205-759-3', '2023', 'indonesia', '9', 'Informatika-SMP-Kelas-VII-600x600.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_denda`
--

CREATE TABLE `tbl_denda` (
  `id_denda` int(11) NOT NULL,
  `id_kelas` int(11) DEFAULT NULL,
  `id_anggota` int(11) DEFAULT NULL,
  `tgl_denda` varchar(50) DEFAULT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `kelas` varchar(50) DEFAULT NULL,
  `denda` varchar(50) DEFAULT NULL,
  `ket` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_denda`
--

INSERT INTO `tbl_denda` (`id_denda`, `id_kelas`, `id_anggota`, `tgl_denda`, `nama`, `kelas`, `denda`, `ket`) VALUES
(8, 8, 8, '2024-05-27', NULL, NULL, 'Rp. 50.000', 'telat'),
(9, 9, 11, '2024-05-30', NULL, NULL, 'Rp. 50.000', 'telat'),
(11, 9, 19, '2024-06-29', NULL, NULL, 'Rp. 50.000', 'Buku Hilang'),
(12, NULL, 19, '2024-06-29', NULL, NULL, 'Rp. 50.000', 'telat'),
(13, NULL, 19, '2024-06-29', NULL, NULL, 'Rp. 50.000', 'telat'),
(14, 0, 19, '2024-06-29', NULL, NULL, 'Rp. 50.000', 'telat'),
(15, 9, 19, '2024-06-29', NULL, NULL, 'Rp. 50.000', 'telat'),
(16, NULL, 19, '2024-06-29', NULL, NULL, 'Rp. 50.000', 'telat'),
(17, NULL, 18, '2024-06-29', NULL, NULL, 'Rp. 50.000', 'telat'),
(18, 9, 0, '2024-06-29', NULL, NULL, 'Rp. 50.000', 'telat'),
(19, NULL, 19, '2024-06-29', NULL, NULL, 'Rp. 50.000', 'telat'),
(20, NULL, 18, '2024-06-29', NULL, NULL, 'Rp.40.000', 'telat'),
(21, NULL, 19, '2024-06-29', NULL, NULL, 'Rp. 50.000', 'telat'),
(22, NULL, 19, '2024-06-29', NULL, NULL, 'Rp. 50.000', 'telat'),
(23, 9, 19, '2024-06-29', NULL, NULL, 'Rp. 50.000', 'telat'),
(24, 8, 19, '2024-06-29', NULL, NULL, 'Rp. 50.000', 'telat'),
(25, 9, 19, '2024-06-29', NULL, NULL, 'Rp. 50.000', 'telat'),
(28, 8, 19, '2024-06-29', NULL, NULL, 'Rp. 50.000', 'telat'),
(30, 9, 20, '2024-06-29', NULL, NULL, 'Rp. 50.000', 'telat'),
(34, 8, 20, '2024-06-30', NULL, NULL, 'Rp. 40.000', 'telat'),
(35, 8, 21, '2024-06-30', NULL, NULL, 'Rp. 15.000', 'telat');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_hilang`
--

CREATE TABLE `tbl_hilang` (
  `id_hilang` int(11) NOT NULL,
  `id_anggota` int(11) DEFAULT NULL,
  `id_buku` int(11) DEFAULT NULL,
  `no_buku` varchar(20) DEFAULT NULL,
  `jumlah` int(11) DEFAULT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `id_kelas` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_hilang`
--

INSERT INTO `tbl_hilang` (`id_hilang`, `id_anggota`, `id_buku`, `no_buku`, `jumlah`, `nama`, `id_kelas`) VALUES
(10, 8, 85, '08', 1, NULL, 'VIII 8'),
(11, 11, 85, '08', 1, NULL, 'VII 7'),
(13, 13, 85, 'No: 1', 1, NULL, 'VII 7'),
(14, 13, 85, 'No: 1', 1, NULL, 'VII 7'),
(15, 19, 85, 'No: 1', 1, NULL, 'VIII 8'),
(16, 19, 85, 'No: 1', 1, NULL, '8'),
(17, 19, 85, 'No: 1', 1, NULL, '8'),
(18, 19, 85, 'No: 1', 1, NULL, '8'),
(19, 19, 85, 'No: 1', 1, NULL, 'VIII 8'),
(20, 19, 84, 'No: 1', 1, NULL, ''),
(21, 19, 85, 'No: 1', 1, NULL, 'VIII 8'),
(22, 19, 85, 'No: 1', 1, NULL, 'IX 9'),
(23, 19, 85, 'No: 1', 1, NULL, 'VII 7'),
(24, 19, 85, 'No: 1', 1, NULL, 'VII 7'),
(25, 19, 85, 'No: 1', 1, NULL, 'VII 7'),
(27, 19, 85, 'No: 1', 1, NULL, 'VII 7'),
(28, 19, 85, 'No: 1', 1, NULL, 'VII 7'),
(29, 19, 85, 'No: 1', 1, NULL, 'VII 7'),
(30, 19, 85, 'No: 1', 1, NULL, 'IX 9');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kategori`
--

CREATE TABLE `tbl_kategori` (
  `id_kategori` int(11) NOT NULL,
  `nama_kategori` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_kategori`
--

INSERT INTO `tbl_kategori` (`id_kategori`, `nama_kategori`) VALUES
(8, 'Buku Pelajaran'),
(9, 'Buku Reverensi'),
(10, 'Buku Pengetahuan'),
(11, 'Buku Sejarah'),
(12, 'Buku Sosial'),
(13, 'Buku Olahraga'),
(14, 'Buku Matematika'),
(15, 'Buku B.Inggris'),
(16, 'Buku Agama Islam'),
(17, 'Buku B.indonesia');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kelas`
--

CREATE TABLE `tbl_kelas` (
  `id_kelas` int(11) NOT NULL,
  `nama_kelas` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_kelas`
--

INSERT INTO `tbl_kelas` (`id_kelas`, `nama_kelas`) VALUES
(7, 'IX 9'),
(8, 'VIII 8'),
(9, 'VII 7');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_penerbit`
--

CREATE TABLE `tbl_penerbit` (
  `id_penerbit` int(11) NOT NULL,
  `nama_penerbit` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_penerbit`
--

INSERT INTO `tbl_penerbit` (`id_penerbit`, `nama_penerbit`) VALUES
(1, 'Gramedia'),
(2, 'Anna'),
(3, 'Pusat Kurikulum dan Perbukuan'),
(4, 'Pusat Perbukuan'),
(7, 'Kementerian Pendidikan, Kebudayaan, Riset, dan Tek'),
(8, 'Graha Ilmu'),
(9, 'Elex Media Komputindo'),
(10, 'KawahMedia'),
(11, 'Program Vokasi Humas Universitas Indonesia'),
(12, 'CDFS'),
(13, 'Center for Digital Society'),
(14, 'Vokasi UI'),
(15, 'Google'),
(16, 'Simbiosa Rekatama Media '),
(17, 'Wedatama Widya Sastra '),
(18, ' CV Langgam Pustaka'),
(19, 'Andi Publisher'),
(20, 'Yrama Widya'),
(21, 'Srikandi Empat Widya Utama');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_penulis`
--

CREATE TABLE `tbl_penulis` (
  `id_penulis` int(11) NOT NULL,
  `nama_penulis` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_penulis`
--

INSERT INTO `tbl_penulis` (`id_penulis`, `nama_penulis`) VALUES
(3, 'Fadillah Tri Aulia, Sefi Indra Gumilar'),
(4, 'Ayuk Ratna Puspaningsih, Elizabeth Tjahjadarmawan,'),
(5, 'Ahmad Taufik, Nurwastuti Setyowati'),
(6, 'Sari Oktafiana, Efvinggo Fasya Jaya. SP, M. Nursa’'),
(7, 'Budi Hermawan, Dwi Haryanti, Nining Suryaningsih'),
(8, 'Dicky Susanto, Theja Kurniawan, Savitri K. Sihombi'),
(9, 'Agus Mahendra, Bambang Abdul Jabar'),
(10, 'Mushthofa, Wahyono, Auzi Asfarian, Dean Apriana Ra'),
(11, 'Hani Amalia Hendrajatin, Ratna Aryani'),
(12, 'Henry Pranoto, Christy Rahma Septiani'),
(13, 'Monika Irayati, Saraswati Dewi'),
(14, 'E. Sumadiningrat, Sobar Budiman'),
(15, 'Sri Suratinah Hadiyati Kamihadi, Dewi Sri Handayan'),
(16, 'Sari Oktafiana'),
(17, 'Heny Marwati, K. Waskitaningtyas'),
(18, 'Puji Astuti, Aria Septi Anggaira, Atti Herawati, D'),
(19, 'Dicky Susanto, Savitri K. Sihombing, Marianna Magd'),
(20, 'Sri Cahyati, Siti Nurjanah, Ali Usman'),
(21, 'Rochimudin, Muhamad Hari Purnomo Hadi, Ahmad Asron'),
(22, 'Auzi Asfarian, Paulina H. Prima Rosa, Irya Wisnubh'),
(23, 'Muhajir'),
(24, 'Abd. Rahman, Hery Nugroho'),
(25, 'Eny Kusumastuti,Milasari'),
(26, 'Turino, A.Budiyanto'),
(27, 'Bambang Subarnas, Lenny Djanurlia'),
(28, 'Deden Haerudin, Tria Sismalinda'),
(29, 'Dessy Rachma Waryanti, Lu’lu’ul Fauziah Nurwito, W'),
(30, 'Joan Hesti Gita Purwasih, Seli Septiana Pratiwi'),
(31, 'Yeni Fitriani, Aisyah Nurjanah'),
(32, 'Budi Handoyo'),
(33, 'Martina Safitry, Indah Wahyu Puji Utami, Zein Ilya'),
(34, 'Rini Solihat, Eris Rustandi, Wandi Herpiandi, Zamz'),
(35, 'Marianna Magdalena Radjawane, Alvius Tinambunan, S'),
(36, 'Munasprianto Ramli, Nanda Saridewi, Tiktik Mustika'),
(37, 'Bambang Trimansyah'),
(38, 'Susanti Retno Hardini Achdi Merdianto Marjenny Ran'),
(39, 'Mohammad Tohir, Ahmad Choirul Anam, Ibnu Taufiq'),
(40, 'Dwi Astuti Setiawan, Hatim Gazali, Ida Rohayani'),
(41, 'Budi Permana, R. Kurweni Ukar, Dela Chaerani, Sole'),
(42, 'Anggara Aditya Kurniawan, Syahriad'),
(43, 'Rohmat Chozin, Untoro'),
(44, 'Cicilia Ika Rahayu Nita, Laili Khoirun Nisak'),
(45, 'Pri Ario Damar, DJ Dimas Phetorant'),
(46, 'Dessy Rachma Waryanti, Karen Hardini'),
(47, 'Rano Sumarno, Enung Nurhayati'),
(48, 'Muktiarni, Henni Ratnasusanti, Nur Umiyahwati'),
(49, 'Joan Hesti Gita Purwasih, Seli Septiana Pratiwi'),
(50, 'Aisyah Nurjanah, Yeni Fitriani'),
(51, 'Johan Arif'),
(52, 'Bunafit Nugroho'),
(53, '	Wildan Adnan'),
(54, 'Nison, Steve'),
(55, 'Siberkreasi'),
(56, 'Devie Rahmawati'),
(57, 'Dr. Yosal Iriantara'),
(58, 'Ali Akbar'),
(59, 'Hotum Hotimah'),
(60, 'Derry Rm'),
(61, 'Taufik Hidayat'),
(62, 'Suah Sembiring'),
(63, 'Khairul Hadziq & Annisha Fathni F.'),
(64, 'Achmad Mudrikah, Cahya Suryana, Chairuddin'),
(65, 'Paramitha Retno P., Resty Wijayanti, & Meta Junias'),
(66, 'Debi Karmila & Ratna Juwita Ningsih'),
(67, ' Nurlailah & Farhan'),
(68, 'Jaka Firman P., Lia Malyani, & Taufan Harimurti'),
(69, 'Yadi Mulyadi, Ani Andriyani & Andini Puji Lestari'),
(70, 'Muhamad Taupan & Ine Ariyani S.'),
(71, ' Ade Hodijah, dkk.');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pinjam`
--

CREATE TABLE `tbl_pinjam` (
  `id_pinjam` int(11) NOT NULL,
  `id_anggota` int(11) DEFAULT NULL,
  `tgl_pinjam` varchar(100) DEFAULT NULL,
  `tgl_harus_kembali` varchar(50) DEFAULT NULL,
  `tgl_kembali` varchar(100) DEFAULT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `id_kelas` int(11) DEFAULT NULL,
  `id_buku` int(11) DEFAULT NULL,
  `no` varchar(20) DEFAULT NULL,
  `jumlah` int(11) DEFAULT NULL,
  `status` varchar(100) DEFAULT NULL,
  `status_kembali` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_pinjam`
--

INSERT INTO `tbl_pinjam` (`id_pinjam`, `id_anggota`, `tgl_pinjam`, `tgl_harus_kembali`, `tgl_kembali`, `nama`, `id_kelas`, `id_buku`, `no`, `jumlah`, `status`, `status_kembali`) VALUES
(43, 8, '27 May 2024', '01 January 1970', '27 May 2024', NULL, 9, 84, 'No : 3', 1, 'Kembali', NULL),
(44, 8, '27 May 2024', '01 January 1970', '28 May 2024', NULL, 8, 85, 'No : 3', 1, 'Kembali', NULL),
(45, 8, '28 May 2024', '04 June 2024', '28 May 2024', NULL, 9, 85, 'No : 3', 1, 'Kembali', NULL),
(46, 9, '29 May 2024', '01 January 1970', '30 May 2024', NULL, 9, 85, 'No : 3', 1, 'Kembali', NULL),
(47, 11, '30 May 2024', '01 January 1970', '30 May 2024', NULL, 9, 85, 'No : 3', 1, 'Kembali', NULL),
(48, 12, '03 June 2024', '10 June 2024', '03 June 2024', NULL, 8, 85, 'No : 4', 1, 'Kembali', NULL),
(49, 13, '04 June 2024', '14 June 2024', '04 June 2024', NULL, 9, 85, 'No : 1', 1, 'Kembali', NULL),
(50, 13, '04 June 2024', '15 June 2024', '2024-06-29', NULL, 9, 85, 'No : 1', 1, 'Kembali', 'Terlambat'),
(51, 13, '04 June 2024', '22 June 2024', '2024-06-29', NULL, 9, 85, 'No : 1', 1, 'Kembali', 'Terlambat'),
(52, 19, '2024-06-29', '2024-06-29', '2024-06-29', NULL, 8, 85, 'No : 1', 1, 'Kembali', 'Tidak Terlambat'),
(53, 19, '2024-06-29', '2024-06-29', '2024-06-29', NULL, 9, 85, 'No : 1', 1, 'Kembali', 'Tidak Terlambat'),
(54, 19, '2024-06-29', '2024-06-29', '2024-06-29', NULL, 9, 85, 'No : 1', 1, 'Kembali', 'Tidak Terlambat'),
(55, 19, '2024-06-29', '2024-06-29', '2024-06-29', NULL, 8, 85, 'No : 1', 1, 'Kembali', 'Tidak Terlambat'),
(56, 19, '2024-06-29', '2024-06-29', '2024-06-29', NULL, 9, 85, 'No : 1', 1, 'Kembali', 'Tidak Terlambat'),
(57, 20, '2024-06-29', '2024-06-29', '2024-06-29', NULL, 9, 85, 'No : 1', 1, 'Kembali', 'Tidak Terlambat'),
(58, 20, '2024-06-29', '2024-06-29', '2024-06-29', NULL, 9, 85, 'No : 1', 1, 'Kembali', 'Tidak Terlambat'),
(59, 22, '2024-06-29', '2024-06-30', '2024-06-29', NULL, 9, 85, 'No : 1', 1, 'Kembali', 'Tidak Terlambat'),
(61, 22, '2024-06-29', '2024-06-30', '2024-06-29', NULL, 9, 85, 'No : 1', 1, 'Kembali', 'Tidak Terlambat');

--
-- Triggers `tbl_pinjam`
--
DELIMITER $$
CREATE TRIGGER `kembali` AFTER UPDATE ON `tbl_pinjam` FOR EACH ROW BEGIN
	UPDATE tbl_buku SET jumlah = jumlah + NEW.jumlah
    WHERE id_buku = NEW.id_buku;
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `pinjam` AFTER INSERT ON `tbl_pinjam` FOR EACH ROW BEGIN
	UPDATE tbl_buku SET jumlah = jumlah - NEW.jumlah
    WHERE id_buku = NEW.id_buku;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_rak`
--

CREATE TABLE `tbl_rak` (
  `id_rak` int(11) NOT NULL,
  `nama_rak` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_rak`
--

INSERT INTO `tbl_rak` (`id_rak`, `nama_rak`) VALUES
(5, 'IPA'),
(6, 'IPS'),
(7, 'Bahasa Indonesia'),
(8, 'Bahasa Inggris'),
(9, 'Matematika'),
(10, 'Pendidikan Pancasila'),
(11, 'Informatika'),
(12, 'PJOK'),
(13, 'Seni Tari'),
(14, 'Seni Musik'),
(15, 'Seni Rupa'),
(16, 'Seni Teater'),
(17, 'Prakarya'),
(18, 'Sosiologi'),
(19, 'Antropologi'),
(20, 'Ekonomi'),
(21, 'Geografi'),
(22, 'Sejarah'),
(23, 'Biologi'),
(24, 'Fisika'),
(25, 'Kimia'),
(26, 'Pendidikan Agama Islam'),
(27, 'Referensi'),
(28, 'Fiksi');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_transaksi`
--

CREATE TABLE `tbl_transaksi` (
  `id_transaksi` int(11) NOT NULL,
  `tgl_peminjaman` date DEFAULT NULL,
  `tgl_pengembalian` varchar(20) DEFAULT NULL,
  `nama_siswa` varchar(100) DEFAULT NULL,
  `id_kelas` int(11) DEFAULT NULL,
  `id_buku1` varchar(100) DEFAULT NULL,
  `no_buku1` varchar(100) DEFAULT NULL,
  `id_buku2` varchar(100) DEFAULT NULL,
  `no_buku2` varchar(100) DEFAULT NULL,
  `id_buku3` varchar(100) DEFAULT NULL,
  `no_buku3` varchar(100) DEFAULT NULL,
  `id_buku4` varchar(100) DEFAULT NULL,
  `no_buku4` varchar(100) DEFAULT NULL,
  `id_buku5` varchar(100) DEFAULT NULL,
  `no_buku5` varchar(100) DEFAULT NULL,
  `buku_dipinjam` text DEFAULT NULL,
  `status1` varchar(50) DEFAULT NULL,
  `status2` varchar(50) DEFAULT NULL,
  `status3` varchar(50) DEFAULT NULL,
  `status4` varchar(50) DEFAULT NULL,
  `status5` varchar(50) DEFAULT NULL,
  `ket` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_transaksi`
--

INSERT INTO `tbl_transaksi` (`id_transaksi`, `tgl_peminjaman`, `tgl_pengembalian`, `nama_siswa`, `id_kelas`, `id_buku1`, `no_buku1`, `id_buku2`, `no_buku2`, `id_buku3`, `no_buku3`, `id_buku4`, `no_buku4`, `id_buku5`, `no_buku5`, `buku_dipinjam`, `status1`, `status2`, `status3`, `status4`, `status5`, `ket`) VALUES
(62, '2023-09-30', '2023-09-30', 'Fadli Jahyadi', 30, 'Kristalista Susah Senang Bersama Sang Ibu di Amerika', 'No : 5', '', '', '', '', '', '', '', '', NULL, 'Dipinjam', '', '', '', '', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_transaksi_kembali`
--

CREATE TABLE `tbl_transaksi_kembali` (
  `id_transaksi_kembali` int(11) NOT NULL,
  `tgl_pengembalian` date DEFAULT NULL,
  `nama_siswa` varchar(100) DEFAULT NULL,
  `id_kelas` int(100) DEFAULT NULL,
  `id_buku1` varchar(100) DEFAULT NULL,
  `no_buku1` varchar(100) DEFAULT NULL,
  `id_buku2` varchar(100) DEFAULT NULL,
  `no_buku2` varchar(100) DEFAULT NULL,
  `id_buku3` varchar(100) DEFAULT NULL,
  `no_buku3` varchar(100) DEFAULT NULL,
  `id_buku4` varchar(100) DEFAULT NULL,
  `no_buku4` varchar(100) DEFAULT NULL,
  `id_buku5` int(100) DEFAULT NULL,
  `no_buku5` int(100) DEFAULT NULL,
  `status` int(100) DEFAULT NULL,
  `ket` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id_user` int(11) NOT NULL,
  `nama_user` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `hak_akses` varchar(50) DEFAULT NULL,
  `no_hp` varchar(100) DEFAULT NULL,
  `foto` varchar(100) DEFAULT NULL,
  `level` varchar(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id_user`, `nama_user`, `email`, `password`, `hak_akses`, `no_hp`, `foto`, `level`) VALUES
(1, 'Admin', 'admin@gmail.com', '12345', 'Admin', '08758757580', 'gambar 1.png', '1'),
(2, 'Petugas', 'petugas@gmail.com', '12345', 'Petugas', '08758757580', 'gambar 2.png', '2'),
(3, 'Kepala Sekolah', 'kepsek@gmail.com', '12345', 'Kepsek', '08758757580', 'gambar 3.png', '3');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_anggota`
--
ALTER TABLE `tbl_anggota`
  ADD PRIMARY KEY (`id_anggota`);

--
-- Indexes for table `tbl_buku`
--
ALTER TABLE `tbl_buku`
  ADD PRIMARY KEY (`id_buku`),
  ADD KEY `id_kategori` (`id_kategori`),
  ADD KEY `id_penulis` (`id_penulis`),
  ADD KEY `id_penerbit` (`id_penerbit`),
  ADD KEY `id_rak` (`id_rak`);

--
-- Indexes for table `tbl_denda`
--
ALTER TABLE `tbl_denda`
  ADD PRIMARY KEY (`id_denda`);

--
-- Indexes for table `tbl_hilang`
--
ALTER TABLE `tbl_hilang`
  ADD PRIMARY KEY (`id_hilang`),
  ADD KEY `id_buku` (`id_buku`);

--
-- Indexes for table `tbl_kategori`
--
ALTER TABLE `tbl_kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `tbl_kelas`
--
ALTER TABLE `tbl_kelas`
  ADD PRIMARY KEY (`id_kelas`);

--
-- Indexes for table `tbl_penerbit`
--
ALTER TABLE `tbl_penerbit`
  ADD PRIMARY KEY (`id_penerbit`);

--
-- Indexes for table `tbl_penulis`
--
ALTER TABLE `tbl_penulis`
  ADD PRIMARY KEY (`id_penulis`);

--
-- Indexes for table `tbl_pinjam`
--
ALTER TABLE `tbl_pinjam`
  ADD PRIMARY KEY (`id_pinjam`);

--
-- Indexes for table `tbl_rak`
--
ALTER TABLE `tbl_rak`
  ADD PRIMARY KEY (`id_rak`);

--
-- Indexes for table `tbl_transaksi`
--
ALTER TABLE `tbl_transaksi`
  ADD PRIMARY KEY (`id_transaksi`),
  ADD KEY `id_kelas` (`id_kelas`);

--
-- Indexes for table `tbl_transaksi_kembali`
--
ALTER TABLE `tbl_transaksi_kembali`
  ADD PRIMARY KEY (`id_transaksi_kembali`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_anggota`
--
ALTER TABLE `tbl_anggota`
  MODIFY `id_anggota` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `tbl_buku`
--
ALTER TABLE `tbl_buku`
  MODIFY `id_buku` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=87;

--
-- AUTO_INCREMENT for table `tbl_denda`
--
ALTER TABLE `tbl_denda`
  MODIFY `id_denda` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `tbl_hilang`
--
ALTER TABLE `tbl_hilang`
  MODIFY `id_hilang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `tbl_kategori`
--
ALTER TABLE `tbl_kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `tbl_kelas`
--
ALTER TABLE `tbl_kelas`
  MODIFY `id_kelas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `tbl_penerbit`
--
ALTER TABLE `tbl_penerbit`
  MODIFY `id_penerbit` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `tbl_penulis`
--
ALTER TABLE `tbl_penulis`
  MODIFY `id_penulis` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;

--
-- AUTO_INCREMENT for table `tbl_pinjam`
--
ALTER TABLE `tbl_pinjam`
  MODIFY `id_pinjam` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT for table `tbl_rak`
--
ALTER TABLE `tbl_rak`
  MODIFY `id_rak` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `tbl_transaksi`
--
ALTER TABLE `tbl_transaksi`
  MODIFY `id_transaksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT for table `tbl_transaksi_kembali`
--
ALTER TABLE `tbl_transaksi_kembali`
  MODIFY `id_transaksi_kembali` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
