-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 16 Jul 2020 pada 11.27
-- Versi server: 10.1.35-MariaDB
-- Versi PHP: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dujian`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `daftar`
--

CREATE TABLE `daftar` (
  `daftar_id` int(11) NOT NULL,
  `npm` varchar(12) NOT NULL,
  `semester` varchar(128) NOT NULL,
  `ta_id` int(11) NOT NULL,
  `matkul_id` varchar(6) NOT NULL,
  `dosen_id` int(11) NOT NULL,
  `durt_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `detail`
--

CREATE TABLE `detail` (
  `detail_id` int(11) NOT NULL,
  `detail_package_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `detail_daftar_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `dosen`
--

CREATE TABLE `dosen` (
  `id_dosen` int(11) NOT NULL,
  `nik` varchar(14) NOT NULL,
  `nama_dosen` varchar(100) NOT NULL,
  `matkul_kode` varchar(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `dosen`
--

INSERT INTO `dosen` (`id_dosen`, `nik`, `nama_dosen`, `matkul_kode`) VALUES
(1, '410 100 378', 'Foni Agus Setiawan, S.Kom., M.Kom.\r\n', ''),
(2, '410 100 588', 'Yuggo Afrianto, S.T., M.Kom\r\n', 'IFK362'),
(3, '410 100 619', 'Berlina Wulandari, S.T., M.Kom.\r\n', ''),
(4, '410100380', 'Andik Eko Kristus Pramuko, S.Si., M.T\r\n', ''),
(5, '410100382', 'Bayu Adhi Prakosa, S.Kom., M.T\r\n', 'IFK333'),
(6, '410100405', 'Safaruddin Hidayat Al Ikhsan, S.Kom., M.Kom.\r\n', ''),
(7, '410100406', 'Gibtha Fitri Laxmi, S.Kom., M.Kom.\r\n', ''),
(8, '410100454', 'Ritzkal, S.Kom., M.Kom.\r\n', ''),
(9, '410100489', 'Freza Riana, S.Si., M.Si.\r\n', ''),
(10, '410100569', 'Fitrah Satrya Fajar Kusumah, S.Komp., M.Kom\r\n', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `d_package`
--

CREATE TABLE `d_package` (
  `package_id` int(11) NOT NULL,
  `package_created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `matkul`
--

CREATE TABLE `matkul` (
  `id_matkul` int(11) NOT NULL,
  `kode_matkul` varchar(6) NOT NULL,
  `nama_matkul` varchar(100) NOT NULL,
  `semester` varchar(7) NOT NULL,
  `sks` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `matkul`
--

INSERT INTO `matkul` (`id_matkul`, `kode_matkul`, `nama_matkul`, `semester`, `sks`) VALUES
(1, 'PAI111', 'Studi Islam I\r\n', 'ganjil', 2),
(2, 'IHK175', 'Pendidikan Pancasila dan Kewarganegaraan\r\n', 'ganjil', 3),
(3, 'IFK111', 'Matematika Diskrit\r\n', 'ganjil', 3),
(4, 'IFK121', 'Pengantar Teknologi Informasi\r\n', 'ganjil', 2),
(5, 'IFK122', 'Logika Informatika\r\n', 'ganjil', 3),
(6, 'IFK112', 'Kalkulus I\r\n', 'ganjil', 3),
(7, 'IFK113', 'Fisika Dasar I\r\n', 'ganjil', 3),
(8, 'PBI131', 'Bahasa Indonesia\r\n', 'genap', 3),
(9, 'PBI132', 'Bahasa Inggris\r\n', 'genap', 2),
(10, 'IFK114', 'Kalkulus II\r\n', 'genap', 3),
(11, 'IFK115', 'Fisika Dasar II + Praktikum\r\n', 'genap', 3),
(12, 'IFK116', 'Aljabar Linear\r\n', 'genap', 3),
(13, 'IFK117', 'Statistika dan Probabilitas I\r\n', 'genap', 2),
(14, 'IFK123', 'Algoritma dan Pemrograman + Praktikum\r\n', 'genap', 3),
(15, 'PAI211', 'Studi Islam II\r\n', 'ganjil', 2),
(16, 'IFK217', 'Statistika dan Probabilitas II\r\n', 'ganjil', 2),
(17, 'IFK221', 'Struktur Data\r\n', 'ganjil', 3),
(18, 'IFK222', 'Teori Bahasa dan Automata\r\n', 'ganjil', 3),
(19, 'IFK223', 'Basis Data + Praktikum\r\n', 'ganjil', 3),
(20, 'IFK226', 'Rekayasa Perangkat Lunak I + Praktikum\r\n', 'ganjil', 3),
(21, 'IFK281', 'Teknik Digital dan Rangkaian Logika + Praktikum\r\n', 'ganjil', 3),
(22, 'IFK218', 'Metode Numerik + Praktikum\r\n', 'genap', 3),
(23, 'IFK224', 'Interaksi Manusia dan Komputer\r\n', 'genap', 3),
(24, 'IFK225', 'Sistem Informasi + Praktikum\r\n', 'genap', 3),
(25, 'IFK231', 'Pemrograman Berorientasi Obyek + Praktikum\r\n', 'genap', 3),
(26, 'IFK227', 'Arsitektur dan Organisasi Komputer\r\n', 'genap', 3),
(27, 'IFK228', 'Jaringan Komputer + Praktikum\r\n', 'genap', 3),
(28, 'IFK229', 'Dasar Keamanan Informasi\r\n', 'genap', 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `ta`
--

CREATE TABLE `ta` (
  `id_ta` int(11) NOT NULL,
  `tahun` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `ta`
--

INSERT INTO `ta` (`id_ta`, `tahun`) VALUES
(1, '2019/2020'),
(2, '2020/2021');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_durt`
--

CREATE TABLE `tb_durt` (
  `id_durt` int(11) NOT NULL,
  `nama_durt` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_durt`
--

INSERT INTO `tb_durt` (`id_durt`, `nama_durt`) VALUES
(1, 'uts'),
(2, 'uas'),
(3, 'remedial teaching');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `npm` varchar(12) DEFAULT NULL,
  `nik` varchar(9) DEFAULT NULL,
  `password` varchar(100) NOT NULL,
  `prodi` varchar(128) NOT NULL,
  `kelas` varchar(128) NOT NULL,
  `no_hp` varchar(128) NOT NULL,
  `role_id` int(11) NOT NULL,
  `aktif` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `nama`, `email`, `npm`, `nik`, `password`, `prodi`, `kelas`, `no_hp`, `role_id`, `aktif`) VALUES
(1, 'Fitria Nur Isna', 'fitrianurisna@gmail.com', '161105150596', '', 'jibff1b5', '', '', '', 2, 1),
(4, 'nash', 'fitrianurisna@yahoo.com', '161105153422', NULL, '$2y$10$6udQdW6930jSXL5GZlsqOOQZgRueuF/hprer0GG4sHz', 'Teknik Informatika', '0', '089606987532', 2, 0),
(5, 'admin1', 'admin@gmail.com', NULL, NULL, 'jibff1b4', '', '', '', 1, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_role`
--

CREATE TABLE `user_role` (
  `id_role` int(11) NOT NULL,
  `role` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user_role`
--

INSERT INTO `user_role` (`id_role`, `role`) VALUES
(1, 'admin'),
(2, 'mahasiswa');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_token`
--

CREATE TABLE `user_token` (
  `id_token` int(11) NOT NULL,
  `email` varchar(128) NOT NULL,
  `token` varchar(128) NOT NULL,
  `dibuat` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user_token`
--

INSERT INTO `user_token` (`id_token`, `email`, `token`, `dibuat`) VALUES
(2, 'fitrianurisna@yahoo.com', '65nLIeU075DUww8xXALAmf+LdD780yi6pCb/yZupdfs=', 1579755491),
(3, 'fitrianurisna@yahoo.com', 'b44PjONuJvja79Q32pg9hyXGU1RisTIogFNPawWp8hs=', 1579787167);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `daftar`
--
ALTER TABLE `daftar`
  ADD PRIMARY KEY (`daftar_id`);

--
-- Indeks untuk tabel `detail`
--
ALTER TABLE `detail`
  ADD PRIMARY KEY (`detail_id`);

--
-- Indeks untuk tabel `dosen`
--
ALTER TABLE `dosen`
  ADD PRIMARY KEY (`id_dosen`);

--
-- Indeks untuk tabel `d_package`
--
ALTER TABLE `d_package`
  ADD PRIMARY KEY (`package_id`);

--
-- Indeks untuk tabel `matkul`
--
ALTER TABLE `matkul`
  ADD PRIMARY KEY (`id_matkul`),
  ADD UNIQUE KEY `kode_matkul` (`kode_matkul`);

--
-- Indeks untuk tabel `ta`
--
ALTER TABLE `ta`
  ADD PRIMARY KEY (`id_ta`);

--
-- Indeks untuk tabel `tb_durt`
--
ALTER TABLE `tb_durt`
  ADD PRIMARY KEY (`id_durt`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indeks untuk tabel `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id_role`);

--
-- Indeks untuk tabel `user_token`
--
ALTER TABLE `user_token`
  ADD PRIMARY KEY (`id_token`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `daftar`
--
ALTER TABLE `daftar`
  MODIFY `daftar_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `detail`
--
ALTER TABLE `detail`
  MODIFY `detail_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `dosen`
--
ALTER TABLE `dosen`
  MODIFY `id_dosen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `d_package`
--
ALTER TABLE `d_package`
  MODIFY `package_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `matkul`
--
ALTER TABLE `matkul`
  MODIFY `id_matkul` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT untuk tabel `ta`
--
ALTER TABLE `ta`
  MODIFY `id_ta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tb_durt`
--
ALTER TABLE `tb_durt`
  MODIFY `id_durt` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id_role` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `user_token`
--
ALTER TABLE `user_token`
  MODIFY `id_token` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
