-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 09 Nov 2021 pada 04.06
-- Versi server: 10.4.16-MariaDB
-- Versi PHP: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_kos`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `nama` varchar(100) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`nama`, `username`, `password`) VALUES
('Administrator', 'admin', '40bd001563085fc35165329ea1ff5c5ecbdbbeef'),
('Azvadennys Vasiguhamiaz', 'azvadennys', 'ea0db54b61921a0427daab68c80b2536cba64a0d');

-- --------------------------------------------------------

--
-- Stand-in struktur untuk tampilan `detail_kamar`
-- (Lihat di bawah untuk tampilan aktual)
--
CREATE TABLE `detail_kamar` (
`lantai` varchar(5)
,`no_kamar` varchar(5)
,`harga` int(11)
,`total_biaya` decimal(51,0)
,`total_bayar` decimal(63,0)
,`piutang` decimal(64,0)
,`jml_penghuni` bigint(21)
);

-- --------------------------------------------------------

--
-- Stand-in struktur untuk tampilan `detail_pembayaran`
-- (Lihat di bawah untuk tampilan aktual)
--
CREATE TABLE `detail_pembayaran` (
`id_pembayaran` int(10)
,`id_penghuni` int(5)
,`no_kamar` varchar(10)
,`nama` varchar(200)
,`no_ktp` varchar(20)
,`tgl_bayar` varchar(10)
,`biaya` int(30)
,`bayar` bigint(20)
,`ket` varchar(200)
);

-- --------------------------------------------------------

--
-- Stand-in struktur untuk tampilan `detail_penghuni`
-- (Lihat di bawah untuk tampilan aktual)
--
CREATE TABLE `detail_penghuni` (
`id` int(10)
,`no_kamar` varchar(10)
,`nama` varchar(200)
,`no_ktp` varchar(20)
,`alamat` varchar(200)
,`no` varchar(30)
,`tgl_masuk` varchar(10)
,`tgl_keluar` varchar(10)
,`status` varchar(20)
,`biaya` int(30)
,`bayar` decimal(41,0)
,`piutang` decimal(42,0)
);

-- --------------------------------------------------------

--
-- Struktur dari tabel `kamar`
--

CREATE TABLE `kamar` (
  `lantai` varchar(5) NOT NULL,
  `no_kamar` varchar(5) NOT NULL,
  `harga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kamar`
--

INSERT INTO `kamar` (`lantai`, `no_kamar`, `harga`) VALUES
('1', '1', 500000),
('2', '10', 1000000),
('1', '101', 500000),
('1', '102', 400000),
('1', '103', 500000),
('1', '104', 600000),
('1', '105', 600000),
('3', '11', 1500000),
('3', '12', 1500000),
('3', '13', 1500000),
('3', '14', 1500000),
('3', '15', 1500000),
('1', '2', 500000),
('2', '201', 500000),
('2', '202', 500000),
('2', '203', 500000),
('2', '204', 400000),
('2', '205', 400000),
('1', '3', 500000),
('1', '4', 500000),
('1', '5', 500000),
('2', '6', 1000000),
('2', '7', 1000000),
('2', '8', 1000000),
('2', '9', 1000000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `keuangan`
--

CREATE TABLE `keuangan` (
  `id_pembayaran` int(10) NOT NULL,
  `id_penghuni` int(5) NOT NULL,
  `tgl_bayar` varchar(10) NOT NULL,
  `bayar` bigint(20) NOT NULL,
  `ket` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `keuangan`
--

INSERT INTO `keuangan` (`id_pembayaran`, `id_penghuni`, `tgl_bayar`, `bayar`, `ket`) VALUES
(1, 1, '01-02-2020', 5100000, 'bayar'),
(2, 48, '07-05-2020', 40000, ''),
(4, 1, '02-11-2021', 300000, 'Cicil'),
(5, 48, '02-11-2021', 300000, 'Cicil'),
(6, 48, '02-11-2021', 4000000, ''),
(8, 198234568, '09-11-2021', 500000, '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `penghuni`
--

CREATE TABLE `penghuni` (
  `id` int(10) NOT NULL,
  `no_kamar` varchar(10) DEFAULT NULL,
  `no_ktp` varchar(20) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `alamat` varchar(200) NOT NULL,
  `no` varchar(30) NOT NULL,
  `tgl_masuk` varchar(10) NOT NULL,
  `tgl_keluar` varchar(10) NOT NULL,
  `biaya` int(30) DEFAULT NULL,
  `status` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `penghuni`
--

INSERT INTO `penghuni` (`id`, `no_kamar`, `no_ktp`, `nama`, `alamat`, `no`, `tgl_masuk`, `tgl_keluar`, `biaya`, `status`) VALUES
(1, '101', '2147483647', 'Nobi Kharisma', 'Ds Darmorejo RT 05/02 Mejayan Madiun', '081333896104', '01-08-2019', '31-07-2020', 5400000, 'Penghuni'),
(48, '102', '5557', 'Yoga Pratama', '423', '23424', '25-06-2020', '31-07-2020', 4800000, 'Penghuni'),
(49, '204', '4222222222', 'David', 'Jl. Prof. Soedarto S.H., Tembalang', '7888787878', '07-05-2020', '31-07-2020', 6000000, 'Penghuni'),
(51, '104', '1771022402020002', 'Azvadennys Vasiguhamiaz', 'dwqqwdqwd', '2312132131', '25-10-2021', '25-10-2021', 7200000, 'Penghuni'),
(101234567, '10', '098765432123', 'Andre', 'berkas', '081234567898', '1-1-2020', '12-4-2020', 4000000, 'aktif'),
(111234567, '1', '198765432123', 'joko', 'pasar baru', '081234567899', '1-2-2020', '18-3-2020', 1000000, 'aktif'),
(121234567, '101', '298765432123', 'budi', 'benteng', '081234567817', '1-3-2020', '18-7-2020', 2500000, 'aktif'),
(131234567, '2', '398765432133', 'lala', 'sukarami', '081234567878', '1-7-2020', '20-12-2020', 3000000, 'aktif'),
(138234567, '5', '244765432133', 'lilulu', 'bandar raya', '081234566230', '1-1-2021', '1-11-2021', 5500000, 'aktif'),
(142234567, '9', '998765432133', 'putra', 'anggut', '081234565675', '18-9-2020', '27-12-2020', 4000000, 'aktif'),
(144234567, '3', '785765432133', 'daffa', 'nusa indah', '081234568753', '14-6-2020', '1-1-2021', 4000000, 'aktif'),
(169234567, '201', '512765432133', 'aka', 'tebeng', '081234561231', '2-2-2021', '1-10-2021', 4500000, 'aktif'),
(184234567, '8', '945765432133', 'eza', 'curup', '081234565123', '12-7-2020', '1-12-2020', 5000000, 'aktif'),
(198234567, '7', '454765432133', 'dennis', 'pagar dewa', '081234561489', '19-2-2021', '1-7-2021', 6000000, 'aktif'),
(198234568, '1', '1771022402020002', 'Khairatul Hasanah', 'dwqqwdqwd', '2312132131', '22-07-2021', '09-11-2021', 6000000, 'Penghuni'),
(198234569, '10', '1214124', 'Azvadennys Vasiguhamiaz', '214124e12e', '21321312312312', '17-11-2021', '31-07-2021', 12000000, 'Penghuni');

-- --------------------------------------------------------

--
-- Struktur untuk view `detail_kamar`
--
DROP TABLE IF EXISTS `detail_kamar`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `detail_kamar`  AS SELECT `kamar`.`lantai` AS `lantai`, `kamar`.`no_kamar` AS `no_kamar`, `kamar`.`harga` AS `harga`, sum(`keuangan_penghuni`.`biaya`) AS `total_biaya`, sum(`keuangan_penghuni`.`bayar`) AS `total_bayar`, coalesce(sum(`keuangan_penghuni`.`biaya`),0) - coalesce(sum(`keuangan_penghuni`.`bayar`),0) AS `piutang`, count(`keuangan_penghuni`.`id`) AS `jml_penghuni` FROM (`kamar` left join (select `penghuni`.`id` AS `id`,`penghuni`.`no_kamar` AS `no_kamar`,`penghuni`.`biaya` AS `biaya`,sum(`keuangan`.`bayar`) AS `bayar` from (`penghuni` left join `keuangan` on(`keuangan`.`id_penghuni` = `penghuni`.`id`)) where `penghuni`.`status` = 'Penghuni' group by `penghuni`.`id`) `keuangan_penghuni` on(`kamar`.`no_kamar` = `keuangan_penghuni`.`no_kamar`)) GROUP BY `kamar`.`no_kamar` ;

-- --------------------------------------------------------

--
-- Struktur untuk view `detail_pembayaran`
--
DROP TABLE IF EXISTS `detail_pembayaran`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `detail_pembayaran`  AS SELECT `keuangan`.`id_pembayaran` AS `id_pembayaran`, `keuangan`.`id_penghuni` AS `id_penghuni`, `penghuni`.`no_kamar` AS `no_kamar`, `penghuni`.`nama` AS `nama`, `penghuni`.`no_ktp` AS `no_ktp`, `keuangan`.`tgl_bayar` AS `tgl_bayar`, `penghuni`.`biaya` AS `biaya`, `keuangan`.`bayar` AS `bayar`, `keuangan`.`ket` AS `ket` FROM (`penghuni` join `keuangan` on(`penghuni`.`id` = `keuangan`.`id_penghuni`)) WHERE 1 = '1' ORDER BY str_to_date(`keuangan`.`tgl_bayar`,'%d-%m-%Y') DESC ;

-- --------------------------------------------------------

--
-- Struktur untuk view `detail_penghuni`
--
DROP TABLE IF EXISTS `detail_penghuni`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `detail_penghuni`  AS SELECT `penghuni`.`id` AS `id`, `penghuni`.`no_kamar` AS `no_kamar`, `penghuni`.`nama` AS `nama`, `penghuni`.`no_ktp` AS `no_ktp`, `penghuni`.`alamat` AS `alamat`, `penghuni`.`no` AS `no`, `penghuni`.`tgl_masuk` AS `tgl_masuk`, `penghuni`.`tgl_keluar` AS `tgl_keluar`, `penghuni`.`status` AS `status`, `penghuni`.`biaya` AS `biaya`, sum(`keuangan`.`bayar`) AS `bayar`, `penghuni`.`biaya`- coalesce(sum(`keuangan`.`bayar`),0) AS `piutang` FROM (`penghuni` left join `keuangan` on(`penghuni`.`id` = `keuangan`.`id_penghuni`)) GROUP BY `penghuni`.`id` ORDER BY `penghuni`.`no_kamar` ASC ;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`username`);

--
-- Indeks untuk tabel `kamar`
--
ALTER TABLE `kamar`
  ADD PRIMARY KEY (`no_kamar`);

--
-- Indeks untuk tabel `keuangan`
--
ALTER TABLE `keuangan`
  ADD PRIMARY KEY (`id_pembayaran`),
  ADD KEY `fk_pembayaran` (`id_penghuni`);

--
-- Indeks untuk tabel `penghuni`
--
ALTER TABLE `penghuni`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_kamar` (`no_kamar`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `keuangan`
--
ALTER TABLE `keuangan`
  MODIFY `id_pembayaran` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `penghuni`
--
ALTER TABLE `penghuni`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=198234570;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `keuangan`
--
ALTER TABLE `keuangan`
  ADD CONSTRAINT `fk_pembayaran` FOREIGN KEY (`id_penghuni`) REFERENCES `penghuni` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `penghuni`
--
ALTER TABLE `penghuni`
  ADD CONSTRAINT `fk_kamar` FOREIGN KEY (`no_kamar`) REFERENCES `kamar` (`no_kamar`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
