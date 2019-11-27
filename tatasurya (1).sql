-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 27, 2019 at 09:35 AM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tatasurya`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(16) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(11, 'admin', 'admin123');

-- --------------------------------------------------------

--
-- Table structure for table `planet`
--

CREATE TABLE `planet` (
  `id_planet` int(11) NOT NULL,
  `foto_planet` varchar(200) NOT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `jarak` float DEFAULT NULL,
  `deskripsi` varchar(255) DEFAULT NULL,
  `waktu_rotasi` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `planet`
--

INSERT INTO `planet` (`id_planet`, `foto_planet`, `nama`, `jarak`, `deskripsi`, `waktu_rotasi`) VALUES
(1, 'merkurius.gif', 'merkurius', 57, 'Merkurius adalah planet terkecil di dalam tata surya dan juga yang terdekat dengan Matahari', '59'),
(12, 'bola_dunia.gif', 'Earth', 149.6, 'Bumi merupakan sebuah planet yang dapat untuk dihuni. Hal ini karena Planet Bumi mempunyai suhu yang relatif tetap. Suhu di Planet Bumi dapat menjaga agar tetap air tersedia dalam bentuk cair serta dapat menjaga berbagai macam organisme penghasil oksigen ', '365,26'),
(13, 'mars.gif', 'mars', 227.9, 'Planet Mars berasal dari nama dewa perang serta legenda dari bangsa Romawi. Planet Mars dijuluki dengan sebutan planet merah. Hal ini karena permukaan Planet Mars memiliki warna merah yang berasal dari besarnya berkarat yang terdapat dalam seluruh permuka', '24 jam 37 menit'),
(14, 'jupiter.gif', 'jupiter', 778.5, 'Planet Jupiter atau Planet Zeus berasal dari nama raja dewa-dewa dari bangsa Yunani kuno. Pengertian planet Jupiter merupakan planet terbesar dalam tata surya kita. Planet Jupiter memiliki diameter sekitar 11 kali dari diameter Bumi dan memiliki yang bera', '9 jam 55 menit'),
(15, 'saturnus.gif', 'saturnus', 1.434, 'Planet Saturnus tidak padat, hal ini karena sebagian besar penyusunnya adalah gas helium dan hidrogen. Hanya di bagian inti Planet Saturnus yang sangat kecil terdapat batu padat. Angin di Planet Saturnus sangat kencang dibandingkan dengan badai yang terja', '10 jam 13 menit'),
(16, 'uranus.gif', 'uranus', 2.871, 'Planet Uranus diambil dari nama dewi langit Yunani kuno, yaitu Urania. Planet Uranus berjarak  cukup jauh dari Matahari, sehingga dapat melakukan satu kali revolusi yang dibutuhkan sekitar 84 tahun. Letak uranus sangatlah jauh dari Matahari, hal ini dapat', '17,2 jam'),
(17, 'neptunus.gif', 'neptunus', 4.495, 'Planet Neptunus memiliki diameter yang dapat mencapai hingga 50.500 km. Planet Neptunus pertama kali ditemukan 65 tahun setelah Planet Uranus ditemukan. Planet Neptunus memiliki warna yang tampak cerah biru kehijauan. Pengertian planet Neptunus dapat dise', '16 jam 17 menit');

-- --------------------------------------------------------

--
-- Table structure for table `sateltit`
--

CREATE TABLE `sateltit` (
  `id_satelit` int(11) NOT NULL,
  `id_planet` int(11) DEFAULT NULL,
  `nama_satelit` varchar(255) DEFAULT NULL,
  `ukuran_satelit` int(11) DEFAULT NULL,
  `deskripsi_satelit` varchar(255) DEFAULT NULL,
  `rotasi_satelit` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `planet`
--
ALTER TABLE `planet`
  ADD PRIMARY KEY (`id_planet`);

--
-- Indexes for table `sateltit`
--
ALTER TABLE `sateltit`
  ADD PRIMARY KEY (`id_satelit`),
  ADD KEY `id_planet` (`id_planet`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(16) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `sateltit`
--
ALTER TABLE `sateltit`
  ADD CONSTRAINT `sateltit_ibfk_1` FOREIGN KEY (`id_planet`) REFERENCES `planet` (`id_planet`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
