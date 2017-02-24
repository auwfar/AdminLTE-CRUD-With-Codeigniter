-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 24 Feb 2017 pada 15.57
-- Versi Server: 10.1.13-MariaDB
-- PHP Version: 7.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cendana`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(15) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `foto` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `nama`, `foto`) VALUES
(1, 'auwfar', 'f0a047143d1da15b630c73f0256d5db0', 'Achmad Chadil Auwfar', 'Koala.jpg'),
(2, 'ozil', 'f4e404c7f815fc68e7ce8e3c2e61e347', 'Mesut ', 'profil2.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kelamin`
--

CREATE TABLE `kelamin` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kelamin`
--

INSERT INTO `kelamin` (`id`, `nama`) VALUES
(1, 'Laki laki'),
(2, 'Perempuan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kota`
--

CREATE TABLE `kota` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kota`
--

INSERT INTO `kota` (`id`, `nama`) VALUES
(1, 'Malang'),
(3, 'Blitar'),
(4, 'Tulungagung'),
(17, 'Jakarta'),
(21, 'Surabaya'),
(22, 'Paris');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pegawai`
--

CREATE TABLE `pegawai` (
  `id` varchar(255) NOT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `telp` varchar(255) DEFAULT NULL,
  `id_kota` int(11) DEFAULT NULL,
  `id_kelamin` int(1) DEFAULT NULL,
  `id_posisi` int(11) DEFAULT NULL,
  `status` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pegawai`
--

INSERT INTO `pegawai` (`id`, `nama`, `telp`, `id_kota`, `id_kelamin`, `id_posisi`, `status`) VALUES
('10', 'Antony Febriansyah Hartono', '082199568540', 1, 1, 1, 1),
('11', 'Hafizh Asrofil Al Banna', '087859615271', 1, 1, 1, 1),
('12', 'Faiq Fajrullah', '085736333728', 1, 1, 2, 1),
('3', 'Mustofa Halim', '081330493322', 1, 1, 3, 1),
('4', 'Dody Ahmad Kusuma Jaya', '083854520015', 1, 1, 2, 1),
('5', 'Mokhammad Choirul Ikhsan', '085749535400', 3, 1, 2, 1),
('7', 'Achmad Chadil Auwfar', '08984119934', 2, 1, 1, 1),
('8', 'Rizal Ferdian', '087777284179', 1, 1, 3, 1),
('9', 'Redika Angga Pratama', '083834657395', 1, 1, 3, 1),
('1', 'Tolkha Hasan', '081233072122', 1, 1, 4, 1),
('2', 'Wawan Dwi Prasetyo', '085745966707', 4, 1, 4, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `posisi`
--

CREATE TABLE `posisi` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `posisi`
--

INSERT INTO `posisi` (`id`, `nama`) VALUES
(1, 'IT'),
(2, 'HRD'),
(3, 'Keuangan'),
(4, 'Produk'),
(5, 'Web Developer');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kelamin`
--
ALTER TABLE `kelamin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kota`
--
ALTER TABLE `kota`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posisi`
--
ALTER TABLE `posisi`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `kota`
--
ALTER TABLE `kota`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `posisi`
--
ALTER TABLE `posisi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
