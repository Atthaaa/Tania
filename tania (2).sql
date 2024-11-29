-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 29 Nov 2024 pada 09.20
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tania`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id_admin` char(5) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id_admin`, `username`, `password`) VALUES
('1', 'attha', '8667b3e4ea7917c770a780adbc7b3ab02b698396'),
('2', 'mendo', 'a3e87903f0914bd1339f025e110ea2b4355c1635');

-- --------------------------------------------------------

--
-- Struktur dari tabel `hama_penyakit`
--

CREATE TABLE `hama_penyakit` (
  `id_hama_penyakit` char(10) NOT NULL,
  `id_admin` char(5) DEFAULT NULL,
  `judul_hama_penyakit` varchar(255) DEFAULT NULL,
  `artikel_hama_penyakit` text DEFAULT NULL,
  `gambar_hama_penyakit` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `hama_penyakit`
--

INSERT INTO `hama_penyakit` (`id_hama_penyakit`, `id_admin`, `judul_hama_penyakit`, `artikel_hama_penyakit`, `gambar_hama_penyakit`) VALUES
('', '2', 'hn5ey5bnrb', '<p>asddfgghjkll</p>\r\n', 'WIN_20241017_21_24_13_Pro5.jpg'),
('HP001', '2', 'hama ganas', '<p>iojrsdytugoi</p>\r\n', 'WIN_20241017_21_24_13_Pro7.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `info_pasar`
--

CREATE TABLE `info_pasar` (
  `id_info_pasar` char(10) NOT NULL,
  `id_admin` char(5) DEFAULT NULL,
  `judul_info_pasar` varchar(255) DEFAULT NULL,
  `artikel_informasi_pasar` text DEFAULT NULL,
  `gambar_info_pasar` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `konsultan`
--

CREATE TABLE `konsultan` (
  `id_konsultan` char(15) NOT NULL,
  `nama` varchar(20) DEFAULT NULL,
  `email` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `konsultasi`
--

CREATE TABLE `konsultasi` (
  `id_konsultasi` char(10) NOT NULL,
  `id_pengguna` char(10) DEFAULT NULL,
  `id_konsultan` char(15) DEFAULT NULL,
  `Tanggal_konsultasi` datetime DEFAULT NULL,
  `Topik_konsultasi` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `layanan_keuangan`
--

CREATE TABLE `layanan_keuangan` (
  `id_layanan_keuangan` int(11) NOT NULL,
  `id_admin` char(5) DEFAULT NULL,
  `judul_layanan_keuangan` varchar(255) DEFAULT NULL,
  `artikel_layanan_keuangan` text DEFAULT NULL,
  `gambar_layanan_keuangan` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `layanan_keuangan`
--

INSERT INTO `layanan_keuangan` (`id_layanan_keuangan`, `id_admin`, `judul_layanan_keuangan`, `artikel_layanan_keuangan`, `gambar_layanan_keuangan`) VALUES
(1, '2', 'mendooooooooooooooooo', '<p>forceeeeeeeeeeeeeee</p>\r\n', NULL),
(2, '2', 'ssss', '<p>sssss</p>\r\n', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengguna`
--

CREATE TABLE `pengguna` (
  `id_pengguna` char(10) NOT NULL,
  `Username` varchar(20) NOT NULL,
  `Password` char(15) NOT NULL,
  `Nama` varchar(100) DEFAULT NULL,
  `No_HP` varchar(15) DEFAULT NULL,
  `Jenis_kelamin` enum('Laki-laki','Perempuan') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pimpinan`
--

CREATE TABLE `pimpinan` (
  `id_pimpinan` char(5) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `slider`
--

CREATE TABLE `slider` (
  `id_slider` char(10) NOT NULL,
  `foto_slider` varchar(100) NOT NULL,
  `caption_slider` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `slider`
--

INSERT INTO `slider` (`id_slider`, `foto_slider`, `caption_slider`) VALUES
('', 'WIN_20241017_21_24_13_Pro5.jpg', '<p>sssss</p>\r\n');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tips_budidaya`
--

CREATE TABLE `tips_budidaya` (
  `id_tips_budidaya` char(10) NOT NULL,
  `id_admin` char(5) DEFAULT NULL,
  `judul_tips_budidaya` varchar(255) DEFAULT NULL,
  `artikel_tips_budidaya` text DEFAULT NULL,
  `gambar_tips_budidaya` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tips_budidaya`
--

INSERT INTO `tips_budidaya` (`id_tips_budidaya`, `id_admin`, `judul_tips_budidaya`, `artikel_tips_budidaya`, `gambar_tips_budidaya`) VALUES
('', '2', 'mendooooooooooo', '<p>mando forceeeeeeeeeeeeeeeeee</p>\r\n', 'WIN_20241017_21_24_13_Pro.jpg');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indeks untuk tabel `hama_penyakit`
--
ALTER TABLE `hama_penyakit`
  ADD PRIMARY KEY (`id_hama_penyakit`),
  ADD KEY `id_admin` (`id_admin`);

--
-- Indeks untuk tabel `info_pasar`
--
ALTER TABLE `info_pasar`
  ADD PRIMARY KEY (`id_info_pasar`),
  ADD KEY `id_admin` (`id_admin`);

--
-- Indeks untuk tabel `konsultan`
--
ALTER TABLE `konsultan`
  ADD PRIMARY KEY (`id_konsultan`);

--
-- Indeks untuk tabel `konsultasi`
--
ALTER TABLE `konsultasi`
  ADD PRIMARY KEY (`id_konsultasi`),
  ADD KEY `id_pengguna` (`id_pengguna`),
  ADD KEY `id_konsultan` (`id_konsultan`);

--
-- Indeks untuk tabel `layanan_keuangan`
--
ALTER TABLE `layanan_keuangan`
  ADD PRIMARY KEY (`id_layanan_keuangan`),
  ADD KEY `id_admin` (`id_admin`);

--
-- Indeks untuk tabel `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`id_pengguna`);

--
-- Indeks untuk tabel `pimpinan`
--
ALTER TABLE `pimpinan`
  ADD PRIMARY KEY (`id_pimpinan`);

--
-- Indeks untuk tabel `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id_slider`);

--
-- Indeks untuk tabel `tips_budidaya`
--
ALTER TABLE `tips_budidaya`
  ADD PRIMARY KEY (`id_tips_budidaya`),
  ADD KEY `id_admin` (`id_admin`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `layanan_keuangan`
--
ALTER TABLE `layanan_keuangan`
  MODIFY `id_layanan_keuangan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `hama_penyakit`
--
ALTER TABLE `hama_penyakit`
  ADD CONSTRAINT `hama_penyakit_ibfk_1` FOREIGN KEY (`id_admin`) REFERENCES `admin` (`id_admin`);

--
-- Ketidakleluasaan untuk tabel `info_pasar`
--
ALTER TABLE `info_pasar`
  ADD CONSTRAINT `info_pasar_ibfk_1` FOREIGN KEY (`id_admin`) REFERENCES `admin` (`id_admin`);

--
-- Ketidakleluasaan untuk tabel `konsultasi`
--
ALTER TABLE `konsultasi`
  ADD CONSTRAINT `konsultasi_ibfk_1` FOREIGN KEY (`id_pengguna`) REFERENCES `pengguna` (`id_pengguna`),
  ADD CONSTRAINT `konsultasi_ibfk_2` FOREIGN KEY (`id_konsultan`) REFERENCES `konsultan` (`id_konsultan`);

--
-- Ketidakleluasaan untuk tabel `layanan_keuangan`
--
ALTER TABLE `layanan_keuangan`
  ADD CONSTRAINT `layanan_keuangan_ibfk_1` FOREIGN KEY (`id_admin`) REFERENCES `admin` (`id_admin`);

--
-- Ketidakleluasaan untuk tabel `tips_budidaya`
--
ALTER TABLE `tips_budidaya`
  ADD CONSTRAINT `tips_budidaya_ibfk_1` FOREIGN KEY (`id_admin`) REFERENCES `admin` (`id_admin`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
