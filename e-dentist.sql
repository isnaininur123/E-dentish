-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Waktu pembuatan: 14 Apr 2020 pada 06.59
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `e-dentist`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `diagnosa`
--

CREATE TABLE `diagnosa` (
  `id` int(11) NOT NULL,
  `kode` varchar(100) NOT NULL,
  `nama` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `diagnosa`
--

INSERT INTO `diagnosa` (`id`, `kode`, `nama`) VALUES
(2, 'afaf14', 'Rindu Adek Iin'),
(3, 'asca2', 'Nur Isnaini Cantikku');

-- --------------------------------------------------------

--
-- Struktur dari tabel `dosen`
--

CREATE TABLE `dosen` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `level` int(11) NOT NULL,
  `nip` int(11) NOT NULL,
  `tempat` varchar(100) NOT NULL,
  `ttl` varchar(100) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `no_telepon` int(11) NOT NULL,
  `tanggal` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `dosen`
--

INSERT INTO `dosen` (`id`, `nama`, `username`, `password`, `level`, `nip`, `tempat`, `ttl`, `alamat`, `no_telepon`, `tanggal`) VALUES
(5, 'Nur Isnaini', 'admin@gmail.com', '21232f297a57a5a743894a0e4a801fc3', 1, 4121414, 'Surabaya', '2000-08-25', 'Banjar Sugihan', 14151515, '06-04-2020'),
(13, 'Nur Isnaini13', 'dosen@gmail.com', 'ce28eed1511f631af6b2a7bb0a85d636', 2, 124141, 'Surabaya', '2020-04-08', 'wfqfq', 15151, '08-04-2020'),
(14, 'Ghozyan IIN', 'nurisnaini@gmail.com', 'd083bd8b5640c14e557fa346777bca1a', 2, 241515, 'Surabaya', '2020-04-08', 'asfasfa', 41414124, '08-04-2020');

-- --------------------------------------------------------

--
-- Struktur dari tabel `gigi`
--

CREATE TABLE `gigi` (
  `id` int(11) NOT NULL,
  `kode_gigi` varchar(100) NOT NULL,
  `deskripsi` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `gigi`
--

INSERT INTO `gigi` (`id`, `kode_gigi`, `deskripsi`) VALUES
(1, 'iin123', 'Iin ojik jodoh'),
(2, 'ojik123', 'ojik iin nikah');

-- --------------------------------------------------------

--
-- Struktur dari tabel `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(10000) NOT NULL,
  `nim` varchar(100) NOT NULL,
  `tempat` varchar(100) NOT NULL,
  `ttl` varchar(100) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `no_telepon` int(11) NOT NULL,
  `jenjang` varchar(100) NOT NULL,
  `tanggal` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `mahasiswa`
--

INSERT INTO `mahasiswa` (`id`, `nama`, `username`, `password`, `nim`, `tempat`, `ttl`, `alamat`, `no_telepon`, `jenjang`, `tanggal`) VALUES
(2, 'Nur Isnaini', 'mahasiswa@gmail.com', '5787be38ee03a9ae5360f54d9026465f', '018181', 'Surabaya', '2020-04-06', 'Dada', 141421, 'D3', '08-04-2020'),
(4, 'Ghozyan', 'ghozyan@gmail.com', '5787be38ee03a9ae5360f54d9026465f', '1241241', 'Surabaya', '2020-04-08', 'afafa', 2424124, 'D4', '08-04-2020');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pasien`
--

CREATE TABLE `pasien` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `tempat` varchar(100) NOT NULL,
  `ttl` varchar(100) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `kelamin` varchar(100) NOT NULL,
  `no_telepon` varchar(100) NOT NULL,
  `tanggal` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pasien`
--

INSERT INTO `pasien` (`id`, `nama`, `tempat`, `ttl`, `alamat`, `kelamin`, `no_telepon`, `tanggal`) VALUES
(6, 'Nur Isnaini', 'Surabaya', '2020-04-08', 'afasfas', 'Laki-Laki', '4124124', '13-04-2020');

-- --------------------------------------------------------

--
-- Struktur dari tabel `perawatan`
--

CREATE TABLE `perawatan` (
  `id` int(11) NOT NULL,
  `id_mahasiswa` int(11) NOT NULL,
  `id_dosen` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `diagnosa` varchar(100) NOT NULL,
  `keluhan` varchar(100) NOT NULL,
  `kode_gigi` varchar(100) NOT NULL,
  `tindakan` varchar(100) NOT NULL,
  `tanggal` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `perawatan`
--

INSERT INTO `perawatan` (`id`, `id_mahasiswa`, `id_dosen`, `nama`, `diagnosa`, `keluhan`, `kode_gigi`, `tindakan`, `tanggal`) VALUES
(6, 2, 13, 'Nur Isnaini', '3', 'cemburu', 'dad131', 'Pacaran', '08-04-2020'),
(7, 2, 13, 'Nur Isnaini', '2', 'cemburu', 'dad131', 'Pacaran', '08-04-2020'),
(8, 4, 13, 'Nur Isnaini', '2', 'cemburu', 'dad131', 'Pacaran', '09-04-2020'),
(9, 2, 13, 'Nur Isnaini', '3', 'cemburu', 'dad131', 'Pacaran', '13-04-2020');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `diagnosa`
--
ALTER TABLE `diagnosa`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `dosen`
--
ALTER TABLE `dosen`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `gigi`
--
ALTER TABLE `gigi`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pasien`
--
ALTER TABLE `pasien`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `perawatan`
--
ALTER TABLE `perawatan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_mahasiswa` (`id_mahasiswa`),
  ADD KEY `id_mahasiswa_2` (`id_mahasiswa`),
  ADD KEY `id_dosen` (`id_dosen`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `diagnosa`
--
ALTER TABLE `diagnosa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `dosen`
--
ALTER TABLE `dosen`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `gigi`
--
ALTER TABLE `gigi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `pasien`
--
ALTER TABLE `pasien`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `perawatan`
--
ALTER TABLE `perawatan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `perawatan`
--
ALTER TABLE `perawatan`
  ADD CONSTRAINT `perawatan_ibfk_1` FOREIGN KEY (`id_dosen`) REFERENCES `dosen` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `perawatan_ibfk_2` FOREIGN KEY (`id_mahasiswa`) REFERENCES `mahasiswa` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
