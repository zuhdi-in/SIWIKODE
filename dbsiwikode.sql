-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 19 Jun 2022 pada 19.37
-- Versi server: 10.4.20-MariaDB
-- Versi PHP: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbsiwikode`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `jenis_kuliner`
--

CREATE TABLE `jenis_kuliner` (
  `id` int(11) NOT NULL,
  `nama_jeniskuliner` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `jenis_kuliner`
--

INSERT INTO `jenis_kuliner` (`id`, `nama_jeniskuliner`) VALUES
(1, 'nasi gorengg cok'),
(2, 'Nasi Uduk'),
(3, 'udang'),
(5, 'Nasi Kuning warna kuning'),
(9, 'Nasi Kuning warna ijo');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jenis_wisata`
--

CREATE TABLE `jenis_wisata` (
  `id` int(11) NOT NULL,
  `nama_jeniswisata` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `jenis_wisata`
--

INSERT INTO `jenis_wisata` (`id`, `nama_jeniswisata`) VALUES
(1, 'wisata rekreasi'),
(2, 'wisata kuliner'),
(4, 'wisata air'),
(6, 'kolam');

-- --------------------------------------------------------

--
-- Struktur dari tabel `login`
--

CREATE TABLE `login` (
  `id_login` int(11) NOT NULL,
  `nama_login` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `level` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `login`
--

INSERT INTO `login` (`id_login`, `nama_login`, `username`, `password`, `level`) VALUES
(1, 'Farhan', 'admin', 'hannn123', 'admin'),
(2, 'hannn', 'costumer', '4fdf976db93884ce8560c31bb9ce542c', 'costumer'),
(6, 'Pak Rojul', 'Rojulman', 'admin123', 'admin'),
(7, 'zaki', 'zakiy', 'jaki123', 'admin'),
(8, 'jakmania', 'jak', 'jak123', 'costumer'),
(9, 'muhammad', 'ahmad', 'ahmad123', 'admin'),
(10, 'Muhammad Farhan', 'hancok', 'jakmania12', 'hancok'),
(11, 'nadia', 'nad123', 'nad123', 'admin'),
(12, 'nur', 'farhan', 'farhan123', 'admin'),
(13, 'Muhammad Farhan', 'farhan', 'farhan123', 'pengunjung');

-- --------------------------------------------------------

--
-- Struktur dari tabel `profesi`
--

CREATE TABLE `profesi` (
  `id` int(11) NOT NULL,
  `nama_profesi` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `profesi`
--

INSERT INTO `profesi` (`id`, `nama_profesi`) VALUES
(2, 'Pejabat'),
(3, 'Mahasiswa'),
(4, 'Pegawai Swasta'),
(5, 'Umum');

-- --------------------------------------------------------

--
-- Struktur dari tabel `testimoni`
--

CREATE TABLE `testimoni` (
  `id` int(11) NOT NULL,
  `id_login` int(11) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `wisata_id` int(11) NOT NULL,
  `profesi_id` int(11) NOT NULL,
  `rating` smallint(6) DEFAULT NULL,
  `komentar` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `testimoni`
--

INSERT INTO `testimoni` (`id`, `id_login`, `email`, `wisata_id`, `profesi_id`, `rating`, `komentar`) VALUES
(1, 7, 'zhafia@gmail.comm', 1, 2, 6, 'bagus banget'),
(8, 11, 'mftfn14@gmail.com', 2, 4, 5, 'tempat nya sangat nyaman dan bagus');

-- --------------------------------------------------------

--
-- Stand-in struktur untuk tampilan `view_testimoni`
-- (Lihat di bawah untuk tampilan aktual)
--
CREATE TABLE `view_testimoni` (
`nama_profesi` varchar(20)
,`nama_wisata` varchar(100)
,`nama_login` varchar(50)
,`id` int(11)
,`id_login` int(11)
,`email` varchar(45)
,`wisata_id` int(11)
,`profesi_id` int(11)
,`rating` smallint(6)
,`komentar` text
);

-- --------------------------------------------------------

--
-- Struktur dari tabel `wisata`
--

CREATE TABLE `wisata` (
  `id` int(11) NOT NULL,
  `nama_wisata` varchar(100) DEFAULT NULL,
  `deskripsi` text DEFAULT NULL,
  `jenis_wisata_id` int(11) NOT NULL,
  `fasilitas` text DEFAULT NULL,
  `bintang` smallint(6) DEFAULT NULL,
  `kontak` varchar(45) DEFAULT NULL,
  `alamat` text DEFAULT NULL,
  `latlong` varchar(20) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `web` varchar(45) DEFAULT NULL,
  `jenis_kuliner_id` int(11) NOT NULL,
  `id_penanggung_jawab` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `wisata`
--

INSERT INTO `wisata` (`id`, `nama_wisata`, `deskripsi`, `jenis_wisata_id`, `fasilitas`, `bintang`, `kontak`, `alamat`, `latlong`, `email`, `web`, `jenis_kuliner_id`, `id_penanggung_jawab`) VALUES
(1, 'kubah mas', 'bagus bgt dah', 1, 'lengkap bwuedbvwugdfuwgedywgyfdeffefwefwefewfwefwfwwwfwfwfwf', 5, '(021) 3822255', 'aebdjebfjbefubeufbefb cejbfjebfbefubefuefubve', '6.175392 - 106.82715', 'mtugumonas@yahoo.co.id', 'https://www.museumnasional.or.id/', 1, 1),
(2, 'Kubah Mas', 'dsdfgh', 2, 'lengkap', 7, '0987678565656', 'jl.tole iskandar gg. serma niran', 'test', 'mftfn15@gmail.com', 'www.kubahmas.com', 3, 2);

-- --------------------------------------------------------

--
-- Struktur untuk view `view_testimoni`
--
DROP TABLE IF EXISTS `view_testimoni`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_testimoni`  AS SELECT `a`.`nama_profesi` AS `nama_profesi`, `b`.`nama_wisata` AS `nama_wisata`, `c`.`nama_login` AS `nama_login`, `d`.`id` AS `id`, `d`.`id_login` AS `id_login`, `d`.`email` AS `email`, `d`.`wisata_id` AS `wisata_id`, `d`.`profesi_id` AS `profesi_id`, `d`.`rating` AS `rating`, `d`.`komentar` AS `komentar` FROM (((`profesi` `a` join `wisata` `b`) join `login` `c`) join `testimoni` `d`) WHERE `a`.`id` = `d`.`profesi_id` AND `b`.`id` = `d`.`wisata_id` AND `c`.`id_login` = `d`.`id_login` ;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `jenis_kuliner`
--
ALTER TABLE `jenis_kuliner`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `jenis_wisata`
--
ALTER TABLE `jenis_wisata`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id_login`);

--
-- Indeks untuk tabel `profesi`
--
ALTER TABLE `profesi`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `testimoni`
--
ALTER TABLE `testimoni`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_testimoni_wisata1_idx` (`wisata_id`),
  ADD KEY `fk_testimoni_profesi1_idx` (`profesi_id`),
  ADD KEY `id_login` (`id_login`);

--
-- Indeks untuk tabel `wisata`
--
ALTER TABLE `wisata`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_wisata_jenis_wisata_idx` (`jenis_wisata_id`),
  ADD KEY `fk_wisata_jenis_kuliner1_idx` (`jenis_kuliner_id`),
  ADD KEY `id_penanggung_jawab` (`id_penanggung_jawab`),
  ADD KEY `jenis_kuliner_id` (`jenis_kuliner_id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `jenis_kuliner`
--
ALTER TABLE `jenis_kuliner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `jenis_wisata`
--
ALTER TABLE `jenis_wisata`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `login`
--
ALTER TABLE `login`
  MODIFY `id_login` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `profesi`
--
ALTER TABLE `profesi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `testimoni`
--
ALTER TABLE `testimoni`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `wisata`
--
ALTER TABLE `wisata`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `testimoni`
--
ALTER TABLE `testimoni`
  ADD CONSTRAINT `testimoni_ibfk_2` FOREIGN KEY (`wisata_id`) REFERENCES `wisata` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `testimoni_ibfk_3` FOREIGN KEY (`id_login`) REFERENCES `login` (`id_login`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `testimoni_ibfk_4` FOREIGN KEY (`profesi_id`) REFERENCES `profesi` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `wisata`
--
ALTER TABLE `wisata`
  ADD CONSTRAINT `wisata_ibfk_3` FOREIGN KEY (`jenis_kuliner_id`) REFERENCES `jenis_kuliner` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `wisata_ibfk_4` FOREIGN KEY (`jenis_wisata_id`) REFERENCES `jenis_wisata` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `wisata_ibfk_5` FOREIGN KEY (`id_penanggung_jawab`) REFERENCES `login` (`id_login`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
