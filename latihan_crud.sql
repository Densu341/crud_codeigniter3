-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 10 Jan 2023 pada 17.35
-- Versi server: 10.1.38-MariaDB
-- Versi PHP: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `latihan_crud`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `nim` varchar(8) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `kodeprodi` varchar(3) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `jenis_kelamin` enum('L','P') NOT NULL,
  `alamat` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `mahasiswa`
--

INSERT INTO `mahasiswa` (`nim`, `nama`, `kodeprodi`, `tgl_lahir`, `jenis_kelamin`, `alamat`) VALUES
('20230009', 'Yoga Pratama', '133', '2002-01-01', 'L', 'Jakarta'),
('20230010', 'Putra Arrahman', '121', '2003-02-10', 'L', 'Bandung'),
('20230012', 'Siti Munjayanah', '121', '2001-10-18', 'P', 'Palembang'),
('20230015', 'Nanda Prayoga', '120', '2002-02-13', 'L', 'Jakarta'),
('20230018', 'Bintang Erliya', '121', '2002-03-13', 'P', 'Klaten'),
('20230019', 'Deni Irawan', '121', '2002-04-10', 'L', 'Sukadana'),
('20230032', 'Andi Hermawan', '120', '2001-12-20', 'L', 'Palembang');

-- --------------------------------------------------------

--
-- Struktur dari tabel `mk`
--

CREATE TABLE `mk` (
  `kodemk` varchar(7) NOT NULL,
  `namamk` varchar(50) NOT NULL,
  `sks` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `mk`
--

INSERT INTO `mk` (`kodemk`, `namamk`, `sks`) VALUES
('SI02', 'Statistika', 2),
('SI03', 'Basis Data', 3),
('SI05', 'Pemrograman Berorentasi Objek', 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `prodi`
--

CREATE TABLE `prodi` (
  `kodeprodi` varchar(3) NOT NULL,
  `namaprodi` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `prodi`
--

INSERT INTO `prodi` (`kodeprodi`, `namaprodi`) VALUES
('120', 'Informatika'),
('121', 'Sistem Informasi'),
('122', 'Teknik Elektro'),
('123', 'Teknologi Informasi'),
('133', 'Hubungan Internasional'),
('134', 'Ilmu Komunikasi'),
('135', 'Akuntansi'),
('240', 'Kesehatan Masyarakat'),
('241', 'Gizi'),
('242', 'Fisioterapi');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`nim`),
  ADD KEY `FK_mahasiswa_1` (`kodeprodi`);

--
-- Indeks untuk tabel `mk`
--
ALTER TABLE `mk`
  ADD PRIMARY KEY (`kodemk`);

--
-- Indeks untuk tabel `prodi`
--
ALTER TABLE `prodi`
  ADD PRIMARY KEY (`kodeprodi`);

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD CONSTRAINT `FK_mahasiswa_1` FOREIGN KEY (`kodeprodi`) REFERENCES `prodi` (`kodeprodi`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
