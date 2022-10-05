-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 26 Agu 2022 pada 00.22
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `membaca`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `jawaban`
--

CREATE TABLE `jawaban` (
  `id_jawaban` int(100) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `hasil` varchar(200) NOT NULL,
  `tanggal` date NOT NULL DEFAULT current_timestamp(),
  `soal` varchar(255) NOT NULL,
  `jawaban_anak` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `jawaban`
--

INSERT INTO `jawaban` (`id_jawaban`, `nama`, `hasil`, `tanggal`, `soal`, `jawaban_anak`) VALUES
(50, 'Gilang Ramadhan Purba', '100', '2022-08-26', 'Gambar Mobil<br>Gambar Kuda<br>Gambar Apel<br>Gambar Lebah<br>Gambar Balon<br>Gambar Buku<br>Gambar Bola<br>Gambar Ayam<br>Gambar Jeruk<br>Gambar Ikan', 'b<br>c<br>a<br>d<br>c<br>b<br>d<br>c<br>d<br>a');

-- --------------------------------------------------------

--
-- Struktur dari tabel `soal`
--

CREATE TABLE `soal` (
  `id_soal` int(100) NOT NULL,
  `keterangan` varchar(255) NOT NULL,
  `a` varchar(200) NOT NULL,
  `b` varchar(200) NOT NULL,
  `c` varchar(200) NOT NULL,
  `d` varchar(200) NOT NULL,
  `jawaban` enum('a','b','c','d') NOT NULL,
  `foto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `soal`
--

INSERT INTO `soal` (`id_soal`, `keterangan`, `a`, `b`, `c`, `d`, `jawaban`, `foto`) VALUES
(19, 'Gambar Apel', 'APEL', 'EPAL', 'LAPE', 'ALEP', 'a', 'apel.jpg'),
(20, 'Gambar Sepeda', 'SEPDA', 'SEPEDA', 'PEDA', 'EPEDA', 'b', 'sepeda.jpg'),
(21, 'Gambar Ayam', 'AYAH', 'AYUH', 'AYAM', 'YAAM', 'c', 'ayam.jpg'),
(22, 'Gambar Balon', 'BLON', 'BOLN', 'BALON', 'BULAN', 'c', 'balon.png'),
(23, 'Gambar Bola', 'LABU', 'BULA', 'BULAT', 'BOLA', 'd', 'bola.jpg'),
(24, 'Gambar Buku', 'KUBU', 'BUKU', 'BOLU', 'BOLU', 'b', 'buku.jpg'),
(25, 'Gambar Ikan', 'IKAN', 'KANI', 'NIKA', 'KAHI', 'a', 'ikan.jpg'),
(26, 'Gambar Jeruk', 'KUJER', 'RUKUK', 'KURUK', 'JERUK', 'd', 'jeruk.jpg'),
(27, 'Gambar Kuda', 'DAKU', 'AKU', 'KUDA', 'DUKA', 'c', 'kuda.jpg'),
(28, 'Gambar Lebah', 'LIBAH', 'HIBAH', 'LEBIH', 'LEBAH', 'd', 'lebah.jpg'),
(29, 'Gambar Mobil', 'LIBIM', 'MOBIL', 'MOLIM', 'LIMOB', 'b', 'mobil.jpg'),
(30, 'Gambar Sapi', 'SAPI', 'PISA', 'PISI', 'ISAP', 'a', 'sapi.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(100) NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `nama_lengkap` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `nama_lengkap`, `email`) VALUES
(10, 'admin', 'admin', 'admin', 'admin@admin'),
(13, 'adminn@admin', '21232f297a57a5a743894a0e4a801fc3', 'adminn', 'adminn@aa'),
(14, 'admin1', '827ccb0eea8a706c4c34a16891f84e7b', 'aku', 'admin@admin');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `jawaban`
--
ALTER TABLE `jawaban`
  ADD PRIMARY KEY (`id_jawaban`);

--
-- Indeks untuk tabel `soal`
--
ALTER TABLE `soal`
  ADD PRIMARY KEY (`id_soal`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `jawaban`
--
ALTER TABLE `jawaban`
  MODIFY `id_jawaban` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT untuk tabel `soal`
--
ALTER TABLE `soal`
  MODIFY `id_soal` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
