-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 22 Sep 2019 pada 15.46
-- Versi Server: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_payroll`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_jabatan`
--

CREATE TABLE `tbl_jabatan` (
  `id_jabatan` int(11) NOT NULL,
  `nama_jabatan` varchar(100) DEFAULT NULL,
  `gaji_pokok` varchar(30) DEFAULT NULL,
  `tunjangan_kesehatan` varchar(30) DEFAULT NULL,
  `dana_pensiun` varchar(30) DEFAULT NULL,
  `tunjangan_lembur` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_jabatan`
--

INSERT INTO `tbl_jabatan` (`id_jabatan`, `nama_jabatan`, `gaji_pokok`, `tunjangan_kesehatan`, `dana_pensiun`, `tunjangan_lembur`) VALUES
(1, 'Manager', '7000000', '6000000', '5000000', 300000),
(2, 'Supervisor', '6500000', '3500000', '5500000', 200000),
(3, 'HRD', '6000000', '4000000', '5000000', 190000),
(4, 'Admin', '5500000', '2500000', '4500000', 150000),
(5, 'Staff', '4000000', '2000000', '3000000', 150000),
(6, 'CS', '3800000', '1500000', '2800000', 130000),
(7, 'Satpam', '3400000', '1000000', '1500000', 55000),
(8, 'Marketing', '3570000', '1200000', '2500000', 100000),
(9, 'Accounting', '4570000', '2900000', '3500000', 150000),
(10, 'IT', '8000000', '6000000', '5000000', 170000),
(11, 'Resepsionis', '4500000', '2000000', '3500000', 160000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_karyawan`
--

CREATE TABLE `tbl_karyawan` (
  `id_karyawan` int(11) NOT NULL,
  `nama_karyawan` varchar(100) DEFAULT NULL,
  `nik` varchar(20) DEFAULT NULL,
  `jenis_kelamin` varchar(20) DEFAULT NULL,
  `tempat_lahir` varchar(50) DEFAULT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `jabatan` int(11) DEFAULT NULL,
  `no_telpon` varchar(13) DEFAULT NULL,
  `email` varchar(40) DEFAULT NULL,
  `agama` varbinary(50) DEFAULT NULL,
  `pendidikan` varchar(50) DEFAULT NULL,
  `asal_sekolah` varchar(100) DEFAULT NULL,
  `gol_darah` varchar(2) DEFAULT NULL,
  `alamat` text,
  `foto` text,
  `data_record` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_karyawan`
--

INSERT INTO `tbl_karyawan` (`id_karyawan`, `nama_karyawan`, `nik`, `jenis_kelamin`, `tempat_lahir`, `tgl_lahir`, `jabatan`, `no_telpon`, `email`, `agama`, `pendidikan`, `asal_sekolah`, `gol_darah`, `alamat`, `foto`, `data_record`) VALUES
(3, 'Wahyu Aziz Prastiyo', '13214325346', 'laki-laki', 'Wiyung', '1996-12-12', 4, '08983436346', 'ajis@gmail.com', 0x69736c616d, 'SMK', 'MRT', 'a', 'Wiyung Surabaya', 'PEGAWAI_14092019141139.png', '2019-09-14 14:00:10'),
(4, 'Moch. Firman Firdaus', '21325326', 'laki-laki', 'Sidoarjo', '1998-12-09', 1, '089666515952', 'firman.firdaus90@yahoo.com', 0x69736c616d, 'S1', 'Universitas Bhayangkara Surabaya', 'a', 'Jl. Brigjen Katamso No. 23 RT 01 RW 01 Desa Janti ', '', '2019-09-19 16:34:39'),
(5, 'ali', '1111209209', 'laki-laki', 'Surabaya', '1996-08-20', 9, '0859321000', 'ali36@gmail.com', 0x69736c616d, 'S1', 'SMKN 1 SURABAYA', 'a', 'Dukuh Karangan', 'PEGAWAI_20092019083138.jpg', '2019-09-20 08:31:38');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id_user` int(11) NOT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `username` varchar(100) DEFAULT NULL,
  `password` text,
  `level` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_user`
--

INSERT INTO `tbl_user` (`id_user`, `nama`, `username`, `password`, `level`) VALUES
(1, 'Moch. Firman Firdaus', 'admin', 'b34b40ca8771c48c204e55f927376885', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_jabatan`
--
ALTER TABLE `tbl_jabatan`
  ADD PRIMARY KEY (`id_jabatan`);

--
-- Indexes for table `tbl_karyawan`
--
ALTER TABLE `tbl_karyawan`
  ADD PRIMARY KEY (`id_karyawan`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_jabatan`
--
ALTER TABLE `tbl_jabatan`
  MODIFY `id_jabatan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `tbl_karyawan`
--
ALTER TABLE `tbl_karyawan`
  MODIFY `id_karyawan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
