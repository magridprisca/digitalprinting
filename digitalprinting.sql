-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 04 Jul 2021 pada 08.10
-- Versi Server: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `digitalprinting`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_barangmasuk`
--

CREATE TABLE `tb_barangmasuk` (
  `id_barang` int(11) NOT NULL,
  `nama_barang` varchar(100) DEFAULT NULL,
  `panjang` int(11) NOT NULL,
  `lebar` int(11) NOT NULL,
  `satuan` varchar(30) NOT NULL,
  `jml_barang` int(11) DEFAULT NULL,
  `tgl_diterima` date DEFAULT NULL,
  `supplier` varchar(100) DEFAULT NULL,
  `username` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ROW_FORMAT=DYNAMIC;

--
-- Dumping data untuk tabel `tb_barangmasuk`
--

INSERT INTO `tb_barangmasuk` (`id_barang`, `nama_barang`, `panjang`, `lebar`, `satuan`, `jml_barang`, `tgl_diterima`, `supplier`, `username`) VALUES
(1, 'kertasA', 0, 0, '', 1, '2021-06-21', 'yuan', 'magrid'),
(2, 'kertas', 1, 1, 'botol', 1, '2021-06-24', 'yuan', 'magrid'),
(3, 'tinta', 1, 1, 'botol', 1, '2021-06-25', 'yuan', 'magrid');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_customer`
--

CREATE TABLE `tb_customer` (
  `id_customer` int(11) NOT NULL,
  `nama_customer` varchar(100) DEFAULT NULL,
  `telp_customer` varchar(13) DEFAULT NULL,
  `keterangan` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ROW_FORMAT=DYNAMIC;

--
-- Dumping data untuk tabel `tb_customer`
--

INSERT INTO `tb_customer` (`id_customer`, `nama_customer`, `telp_customer`, `keterangan`) VALUES
(1, 'hendra', '1234', 'abc');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_detail`
--

CREATE TABLE `tb_detail` (
  `id_detail` int(11) NOT NULL,
  `id_transaksi` int(11) DEFAULT NULL,
  `id_stok` int(11) DEFAULT NULL,
  `harga_detail` int(11) DEFAULT NULL,
  `jasa_design` int(11) DEFAULT NULL,
  `jml_detail` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_gaji`
--

CREATE TABLE `tb_gaji` (
  `id_gaji` int(11) NOT NULL,
  `tahun_gaji` int(4) DEFAULT NULL,
  `bulan_gaji` varchar(20) DEFAULT NULL,
  `gapok` int(11) DEFAULT NULL,
  `lainlain` int(11) DEFAULT NULL,
  `total_gaji` int(11) DEFAULT NULL,
  `id_karyawan` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_karyawan`
--

CREATE TABLE `tb_karyawan` (
  `id_karyawan` int(11) NOT NULL,
  `tgl_masuk` date DEFAULT NULL,
  `nama_karyawan` varchar(100) DEFAULT NULL,
  `nohp_karyawan` varchar(13) DEFAULT NULL,
  `alamat_karyawan` varchar(100) DEFAULT NULL,
  `posisi` varchar(20) DEFAULT NULL,
  `username` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ROW_FORMAT=DYNAMIC;

--
-- Dumping data untuk tabel `tb_karyawan`
--

INSERT INTO `tb_karyawan` (`id_karyawan`, `tgl_masuk`, `nama_karyawan`, `nohp_karyawan`, `alamat_karyawan`, `posisi`, `username`) VALUES
(1, '2021-06-17', 'yuanita', '123456', 'malang', 'kasir', 'magrid');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_stok`
--

CREATE TABLE `tb_stok` (
  `id_stok` int(11) NOT NULL,
  `nama_stok` varchar(50) DEFAULT NULL,
  `panjang_stok` varchar(20) DEFAULT NULL,
  `lebar_stok` int(11) NOT NULL,
  `satuan_stok` varchar(11) NOT NULL,
  `jml_stok` int(11) DEFAULT NULL,
  `harga_stok` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ROW_FORMAT=DYNAMIC;

--
-- Dumping data untuk tabel `tb_stok`
--

INSERT INTO `tb_stok` (`id_stok`, `nama_stok`, `panjang_stok`, `lebar_stok`, `satuan_stok`, `jml_stok`, `harga_stok`) VALUES
(1, 'kertas', '10x20', 0, '0', 2, 10000),
(2, 'abcde', '123', 0, '0', 1, 2345),
(3, 'tinta', '1', 0, '0', 1, 1000),
(4, 'tinta', '1', 0, '0', 1, 1000),
(5, 'tinta', '1', 0, '0', 1, 1000),
(6, 'kertasA', '9', 2, 'm', 1, 1000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_transaksi`
--

CREATE TABLE `tb_transaksi` (
  `id_transaksi` int(11) NOT NULL,
  `username` varchar(50) DEFAULT NULL,
  `id_customer` int(11) DEFAULT NULL,
  `tgl_transaksi` date DEFAULT NULL,
  `total_transaksi` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_user`
--

CREATE TABLE `tb_user` (
  `username` varchar(50) NOT NULL,
  `password` varchar(100) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `nama_lengkap` varchar(100) DEFAULT NULL,
  `level` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ROW_FORMAT=DYNAMIC;

--
-- Dumping data untuk tabel `tb_user`
--

INSERT INTO `tb_user` (`username`, `password`, `email`, `nama_lengkap`, `level`) VALUES
('magrid', '$2y$10$yMAp8hcJXDT3Fsu7bXZViezUHEZfFVNxFk4SkQ9NItGNvjl5IMGZO', 'admin@kars.or.id', 'magrid', 'admin'),
('yuanitahendra', '$2y$10$u1baOZ9eQGA0fSt3rI/y/uTAefZcsFF6RNdXLWMMjS21AJnkqoham', 'yuanitahc@gmail.com', 'yuanitahc', 'User');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_barangmasuk`
--
ALTER TABLE `tb_barangmasuk`
  ADD PRIMARY KEY (`id_barang`) USING BTREE;

--
-- Indexes for table `tb_customer`
--
ALTER TABLE `tb_customer`
  ADD PRIMARY KEY (`id_customer`) USING BTREE;

--
-- Indexes for table `tb_detail`
--
ALTER TABLE `tb_detail`
  ADD PRIMARY KEY (`id_detail`) USING BTREE;

--
-- Indexes for table `tb_gaji`
--
ALTER TABLE `tb_gaji`
  ADD PRIMARY KEY (`id_gaji`) USING BTREE;

--
-- Indexes for table `tb_karyawan`
--
ALTER TABLE `tb_karyawan`
  ADD PRIMARY KEY (`id_karyawan`) USING BTREE;

--
-- Indexes for table `tb_stok`
--
ALTER TABLE `tb_stok`
  ADD PRIMARY KEY (`id_stok`) USING BTREE;

--
-- Indexes for table `tb_transaksi`
--
ALTER TABLE `tb_transaksi`
  ADD PRIMARY KEY (`id_transaksi`) USING BTREE;

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`username`) USING BTREE;

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_barangmasuk`
--
ALTER TABLE `tb_barangmasuk`
  MODIFY `id_barang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tb_customer`
--
ALTER TABLE `tb_customer`
  MODIFY `id_customer` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tb_detail`
--
ALTER TABLE `tb_detail`
  MODIFY `id_detail` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tb_gaji`
--
ALTER TABLE `tb_gaji`
  MODIFY `id_gaji` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tb_karyawan`
--
ALTER TABLE `tb_karyawan`
  MODIFY `id_karyawan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tb_stok`
--
ALTER TABLE `tb_stok`
  MODIFY `id_stok` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `tb_transaksi`
--
ALTER TABLE `tb_transaksi`
  MODIFY `id_transaksi` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
