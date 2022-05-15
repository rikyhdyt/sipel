-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 02 Mei 2020 pada 09.34
-- Versi Server: 10.1.19-MariaDB
-- PHP Version: 7.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_sipel`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_gudang`
--

CREATE TABLE `tb_gudang` (
  `id_gdng` int(2) NOT NULL,
  `nm_gdng` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_gudang`
--

INSERT INTO `tb_gudang` (`id_gdng`, `nm_gdng`) VALUES
(1, 'GDT KOTA PADANG'),
(2, 'GDB SIDOMULYO'),
(3, 'GBB TABA TEMBILANG');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_harga`
--

CREATE TABLE `tb_harga` (
  `id` int(1) NOT NULL,
  `harga` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_harga`
--

INSERT INTO `tb_harga` (`id`, `harga`) VALUES
(1, 8700),
(2, 8600);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_komoditi`
--

CREATE TABLE `tb_komoditi` (
  `id_komoditi` int(2) NOT NULL,
  `nm_komoditi` varchar(25) NOT NULL,
  `hrg_antar` float NOT NULL,
  `hrg_str_lbh` int(4) NOT NULL,
  `hrg_str_krg` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_komoditi`
--

INSERT INTO `tb_komoditi` (`id_komoditi`, `nm_komoditi`, `hrg_antar`, `hrg_str_lbh`, `hrg_str_krg`) VALUES
(1, 'Beras Lampung @50 Kg', 8700, 8600, 8700),
(2, 'Beras Sumsel @50 Kg', 8700, 8600, 8700),
(3, 'Beras Thailand @50 Kg', 8700, 8600, 8700),
(4, 'Beras Pakistan @50 Kg', 8700, 8600, 8700),
(5, 'Beras India @50 Kg', 8700, 8600, 8700);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_mitra`
--

CREATE TABLE `tb_mitra` (
  `id` int(2) NOT NULL,
  `nm_mitra` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_mitra`
--

INSERT INTO `tb_mitra` (`id`, `nm_mitra`) VALUES
(1, 'RPK bla bla1'),
(2, 'Sumber kenyang');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_nota`
--

CREATE TABLE `tb_nota` (
  `id` int(11) NOT NULL,
  `no_nota` varchar(24) NOT NULL,
  `id_saluran` int(2) NOT NULL,
  `kd_gdng` int(2) NOT NULL,
  `ttl_harga` int(9) NOT NULL,
  `tanggal` date NOT NULL,
  `id_operator` int(2) NOT NULL,
  `nm_mitra` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_nota`
--

INSERT INTO `tb_nota` (`id`, `no_nota`, `id_saluran`, `kd_gdng`, `ttl_harga`, `tanggal`, `id_operator`, `nm_mitra`) VALUES
(1, 'KPSH/0000/07010/04/2020', 1, 3, 2, '2020-04-01', 3, 'ss'),
(2, 'KPSH/0001/07010/04/2020', 2, 1, 435000, '2020-04-30', 11, 'ss'),
(3, 'KPSH/0002/07010/04/2020', 1, 1, 435000, '2020-05-02', 9, 'ss');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_operator`
--

CREATE TABLE `tb_operator` (
  `id_op` int(2) NOT NULL,
  `nm_op` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_operator`
--

INSERT INTO `tb_operator` (`id_op`, `nm_op`) VALUES
(1, 'Hylian Tanregudio'),
(2, 'Fajar Abdillah'),
(3, 'Ovelia Soemantry'),
(4, 'Satrio Nugraha'),
(5, 'Yogi Pranata'),
(6, 'Masnatul Laili'),
(7, 'Chandra Ardiansyah'),
(8, 'Aprida Devi'),
(9, 'Nursal Muhajirin'),
(10, 'Dinda Novia Suhana'),
(11, 'Abdul Kadir Jailani');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pesanan`
--

CREATE TABLE `tb_pesanan` (
  `kd_pesanan` int(8) NOT NULL,
  `kuantum` int(5) NOT NULL,
  `harga` int(5) NOT NULL,
  `id_barang` varchar(25) NOT NULL,
  `kd_nota` varchar(24) NOT NULL,
  `jumlah` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_pesanan`
--

INSERT INTO `tb_pesanan` (`kd_pesanan`, `kuantum`, `harga`, `id_barang`, `kd_nota`, `jumlah`) VALUES
(41, 50, 8700, '2', 'KPSH/0001/07010/04/2020', 435000),
(42, 50, 8700, '2', 'KPSH/0002/07010/04/2020', 435000),
(43, 50, 8700, '2', 'KPSH/0002/07010/04/2020', 435000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_saluran`
--

CREATE TABLE `tb_saluran` (
  `id_saluran` int(2) NOT NULL,
  `nm_saluran` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_saluran`
--

INSERT INTO `tb_saluran` (`id_saluran`, `nm_saluran`) VALUES
(1, 'Retail (OPT)'),
(2, 'Umum');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_user`
--

CREATE TABLE `tb_user` (
  `username` varchar(15) NOT NULL,
  `password` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_user`
--

INSERT INTO `tb_user` (`username`, `password`) VALUES
('admin', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_gudang`
--
ALTER TABLE `tb_gudang`
  ADD PRIMARY KEY (`id_gdng`);

--
-- Indexes for table `tb_harga`
--
ALTER TABLE `tb_harga`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_komoditi`
--
ALTER TABLE `tb_komoditi`
  ADD PRIMARY KEY (`id_komoditi`);

--
-- Indexes for table `tb_mitra`
--
ALTER TABLE `tb_mitra`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_nota`
--
ALTER TABLE `tb_nota`
  ADD PRIMARY KEY (`no_nota`),
  ADD UNIQUE KEY `id` (`id`),
  ADD KEY `id_saluran` (`id_saluran`),
  ADD KEY `kd_gdng` (`kd_gdng`),
  ADD KEY `id_op` (`id_operator`);

--
-- Indexes for table `tb_operator`
--
ALTER TABLE `tb_operator`
  ADD PRIMARY KEY (`id_op`);

--
-- Indexes for table `tb_pesanan`
--
ALTER TABLE `tb_pesanan`
  ADD PRIMARY KEY (`kd_pesanan`),
  ADD KEY `id_barang` (`id_barang`),
  ADD KEY `id_barang_2` (`id_barang`),
  ADD KEY `kd_nota` (`kd_nota`),
  ADD KEY `harga` (`harga`);

--
-- Indexes for table `tb_saluran`
--
ALTER TABLE `tb_saluran`
  ADD PRIMARY KEY (`id_saluran`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_gudang`
--
ALTER TABLE `tb_gudang`
  MODIFY `id_gdng` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tb_harga`
--
ALTER TABLE `tb_harga`
  MODIFY `id` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tb_komoditi`
--
ALTER TABLE `tb_komoditi`
  MODIFY `id_komoditi` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `tb_mitra`
--
ALTER TABLE `tb_mitra`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tb_nota`
--
ALTER TABLE `tb_nota`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tb_operator`
--
ALTER TABLE `tb_operator`
  MODIFY `id_op` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `tb_pesanan`
--
ALTER TABLE `tb_pesanan`
  MODIFY `kd_pesanan` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;
--
-- AUTO_INCREMENT for table `tb_saluran`
--
ALTER TABLE `tb_saluran`
  MODIFY `id_saluran` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `tb_nota`
--
ALTER TABLE `tb_nota`
  ADD CONSTRAINT `tb_nota_ibfk_1` FOREIGN KEY (`kd_gdng`) REFERENCES `tb_gudang` (`id_gdng`),
  ADD CONSTRAINT `tb_nota_ibfk_2` FOREIGN KEY (`id_operator`) REFERENCES `tb_operator` (`id_op`),
  ADD CONSTRAINT `tb_nota_ibfk_3` FOREIGN KEY (`id_saluran`) REFERENCES `tb_saluran` (`id_saluran`);

--
-- Ketidakleluasaan untuk tabel `tb_pesanan`
--
ALTER TABLE `tb_pesanan`
  ADD CONSTRAINT `tb_pesanan_ibfk_2` FOREIGN KEY (`kd_nota`) REFERENCES `tb_nota` (`no_nota`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
