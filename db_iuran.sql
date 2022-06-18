-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 11 Jul 2021 pada 15.07
-- Versi server: 10.4.13-MariaDB
-- Versi PHP: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_iuran`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `iuran_tunggakan`
--

CREATE TABLE `iuran_tunggakan` (
  `id` int(11) NOT NULL,
  `kode_tagihan` varchar(12) NOT NULL,
  `keterangan` varchar(50) NOT NULL,
  `jumlah` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `iuran_tunggakan`
--

INSERT INTO `iuran_tunggakan` (`id`, `kode_tagihan`, `keterangan`, `jumlah`) VALUES
(1, 'H001', 'Kebersihan', '2200000'),
(3, 'H002', 'Perbaikan Lampu jalan', '850000'),
(4, 'H000004', 'Gaji Tukang Bersih', '800000');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_admin`
--

CREATE TABLE `tb_admin` (
  `id` int(11) NOT NULL,
  `pp_admin` varchar(250) NOT NULL,
  `nama_admin` varchar(25) NOT NULL,
  `email_admin` varchar(20) NOT NULL,
  `no_admin` varchar(15) NOT NULL,
  `username_admin` varchar(15) NOT NULL,
  `password_admin` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_admin`
--

INSERT INTO `tb_admin` (`id`, `pp_admin`, `nama_admin`, `email_admin`, `no_admin`, `username_admin`, `password_admin`) VALUES
(1, 'sadnibba.png', 'Furfio', 'furfio@gmail.com', '085311466807', 'admin', 'admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_iuran_keluar`
--

CREATE TABLE `tb_iuran_keluar` (
  `id` int(11) NOT NULL,
  `kode_iuran_keluar` varchar(12) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `tanggal` date NOT NULL,
  `keterangan` varchar(50) NOT NULL,
  `metode_bayar` varchar(50) NOT NULL,
  `jumlah` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_iuran_keluar`
--

INSERT INTO `tb_iuran_keluar` (`id`, `kode_iuran_keluar`, `nama`, `tanggal`, `keterangan`, `metode_bayar`, `jumlah`) VALUES
(1, 'K001', 'Salmi', '2021-05-28', 'Pembayaran Sampah', 'KAS TUNAI', '1500000'),
(3, 'k000002', 'Jessica', '2021-07-22', 'Iuran Perbaikan Jalan', 'Permata', '900000');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_iuran_masuk`
--

CREATE TABLE `tb_iuran_masuk` (
  `id` int(11) NOT NULL,
  `kode_iuran_masuk` varchar(12) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `tanggal` date NOT NULL,
  `keterangan` varchar(50) NOT NULL,
  `metode_bayar` varchar(50) NOT NULL,
  `jumlah` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_iuran_masuk`
--

INSERT INTO `tb_iuran_masuk` (`id`, `kode_iuran_masuk`, `nama`, `tanggal`, `keterangan`, `metode_bayar`, `jumlah`) VALUES
(1, 'M001', 'Andhika Prasetya Nugraha', '2021-04-30', 'Iuran Satpam', 'NIAGA', '2000000'),
(2, 'M003', 'Harif', '2021-05-26', 'Perbaikan jalan', 'BRI', '500000'),
(4, 'M000003', 'Taufik', '2021-07-24', 'iuran kebersihan', 'CIMB', '700000');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_penduduk`
--

CREATE TABLE `tb_penduduk` (
  `id_penduduk` int(10) NOT NULL,
  `nama_penduduk` varchar(50) NOT NULL,
  `agama` varchar(12) NOT NULL,
  `jenis_kelamin` varchar(10) NOT NULL,
  `alamat_penduduk` varchar(150) NOT NULL,
  `rt_penduduk` varchar(10) NOT NULL,
  `no_penduduk` varchar(13) NOT NULL,
  `nik_penduduk` varchar(16) NOT NULL,
  `kk_penduduk` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_penduduk`
--

INSERT INTO `tb_penduduk` (`id_penduduk`, `nama_penduduk`, `agama`, `jenis_kelamin`, `alamat_penduduk`, `rt_penduduk`, `no_penduduk`, `nik_penduduk`, `kk_penduduk`) VALUES
(10, 'Andhika Prasetya Nugraha', 'Kristen', 'Laki-Laki', 'W.12', '06', '089124965', '1203812038', '131231');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `iuran_tunggakan`
--
ALTER TABLE `iuran_tunggakan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_admin`
--
ALTER TABLE `tb_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_iuran_keluar`
--
ALTER TABLE `tb_iuran_keluar`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `kode_iuran_keluar` (`kode_iuran_keluar`);

--
-- Indeks untuk tabel `tb_iuran_masuk`
--
ALTER TABLE `tb_iuran_masuk`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `kode_iuran_masuk` (`kode_iuran_masuk`);

--
-- Indeks untuk tabel `tb_penduduk`
--
ALTER TABLE `tb_penduduk`
  ADD PRIMARY KEY (`id_penduduk`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `iuran_tunggakan`
--
ALTER TABLE `iuran_tunggakan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `tb_admin`
--
ALTER TABLE `tb_admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `tb_iuran_keluar`
--
ALTER TABLE `tb_iuran_keluar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `tb_iuran_masuk`
--
ALTER TABLE `tb_iuran_masuk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `tb_penduduk`
--
ALTER TABLE `tb_penduduk`
  MODIFY `id_penduduk` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
