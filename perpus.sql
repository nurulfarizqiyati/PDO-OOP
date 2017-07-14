-- phpMyAdmin SQL Dump
-- version 4.5.0.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 14, 2017 at 09:08 AM
-- Server version: 10.0.17-MariaDB
-- PHP Version: 5.6.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `perpus`
--

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `kodebuku` int(11) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `pengarang` varchar(100) NOT NULL,
  `penerbit` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`kodebuku`, `judul`, `pengarang`, `penerbit`) VALUES
(1, 'komik', 'nurul', 'farizqik'),
(13, 'novel', 'ashvi h', 'aaa'),
(14, 'bbb', 'bukan biasa biasa', 'bukan uji coba SIAP');

-- --------------------------------------------------------

--
-- Table structure for table `buku`
--

CREATE TABLE `buku` (
  `id` int(11) NOT NULL,
  `judulbuku` varchar(300) NOT NULL,
  `penjelasan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `buku`
--

INSERT INTO `buku` (`id`, `judulbuku`, `penjelasan`) VALUES
(1, 'detektif conan', 'dalah sebuah serial manga detektif yang ditulis dan digambar oleh G?sh? Aoyama. Sejak tahun 1994 cerita ini dipublikasikan pada majalah Mingguan Sh?nen Sunday yang terbit di Jepang. Serial ini menceritakan tentang Shinichi Kudo, seorang detektif sekolah menengah atas, yang tubuhnya mengecil akibat sebuah racun.\r\n\r\nDetektif Conan telah diterbitkan secara terus menerus di majalah antologi manga Mingguan Sh?nen Sunday sejak tahun 1994 dan telah dikumpulkan dalam 86 volume tank?bon sampai dengan Desember 2014. Dalam versi bahasa Indonesia, Detektif Conan diterbitkan oleh Elex Media Komputindo yang telah menerbitkan hingga volume 86 sampai dengan November 2015.'),
(8, 'The 5th Wave', 'Alien menyerbu bumi dalam berbagai gelombang. Gelombang 1, EMP - Denyut Elektromagnetik Masif, setengah juta manusia tewas. Gelombang 2, Tsunami, tiga miliar manusia tewas. Gelombang 3, Wabah Sampar, 97% dari empat miliar (sisa jumlah penduduk bumi) tewas. Gelombang 4, Peredam. Cassiopeia Sullivan selamat dari Gelombang 4 dan sedang dalam perjalanan untuk menyelamatkan adiknya, Sammy, yang dibawa pihak militer yang membunuh ayah mereka. Sementara dalam perjalanannya, Cassie diburu oleh seorang Peredam yang mengikutinya selama berhari-hari, ia pun diselamatkan oleh cowok tampan bernama Evan Walker. Masalahnya, setelah selamat dari 4 gelombang, Cassie mempunyai prinsip: Jangan Percayai Siapapun. Meskipun Evan menyelamatkan dan merawatnya, cowok itu tetap saja terlihat mencurigakan di mata Cassie. Dan harus Cassie akui, dia membutuhkan bantuan Evan untuk mencari adiknya kembali. Tapi siapa sangka, perjalanan itu ternyata mempertemukannya dengan Ben Parish, cinta pertama Cassie, yang sekarang menjadi seorang prajurit dan mengenal Sammy. Bersama Ben, si cantik Ringer, Sammy, dan teman-teman prajurit Ben lain, Cassie dan yang lain mencoba bertahan menghadapi Gelombang 5.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`kodebuku`);

--
-- Indexes for table `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `kodebuku` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `buku`
--
ALTER TABLE `buku`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
