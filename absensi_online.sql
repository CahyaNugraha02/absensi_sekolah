-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 13, 2023 at 03:16 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `absensi_online`
--

-- --------------------------------------------------------

--
-- Table structure for table `db_absensi`
--

CREATE TABLE `db_absensi` (
  `id_absen` bigint(20) NOT NULL,
  `kode_absen` varchar(100) NOT NULL,
  `nama_pegawai` varchar(125) NOT NULL,
  `kode_akun` varchar(125) NOT NULL,
  `tgl_absen` varchar(125) NOT NULL,
  `jam_masuk` varchar(13) NOT NULL,
  `jam_pulang` varchar(13) NOT NULL,
  `status_pegawai` int(1) NOT NULL,
  `keterangan_absen` varchar(100) NOT NULL,
  `maps_absen` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `db_absensi`
--

INSERT INTO `db_absensi` (`id_absen`, `kode_absen`, `nama_pegawai`, `kode_akun`, `tgl_absen`, `jam_masuk`, `jam_pulang`, `status_pegawai`, `keterangan_absen`, `maps_absen`) VALUES
(4, 'absen_20231272827', 'Nugraha', '293571010111', 'Kamis, 7 Desember 2023', '09:47:12', '', 1, 'Hadir', 'No Location'),
(5, 'absen_20231218332', 'Rival Cahya Nugraha', '845156763892147', 'Kamis, 7 Desember 2023', '09:48:00', '', 1, 'Hadir', 'No Location'),
(6, 'absen_20231276315', 'Dicky Zakaria', '401386473628997', 'Kamis, 7 Desember 2023', '09:48:57', '', 1, 'Hadir', 'No Location'),
(7, 'absen_20231271443', 'Endikat Gumay', '542211786790430', 'Kamis, 7 Desember 2023', '09:49:09', '', 1, 'Hadir', 'No Location'),
(8, 'absen_20231249741', 'Maimunah', '648376750184593', 'Kamis, 7 Desember 2023', '09:49:23', '', 1, 'Hadir', 'No Location');

-- --------------------------------------------------------

--
-- Table structure for table `db_rememberme`
--

CREATE TABLE `db_rememberme` (
  `id_session` int(11) NOT NULL,
  `kode_akun` varchar(125) NOT NULL,
  `username` varchar(255) NOT NULL,
  `user_agent` varchar(35) NOT NULL,
  `agent_string` varchar(255) NOT NULL,
  `platform` varchar(128) NOT NULL,
  `user_ip` varchar(35) NOT NULL,
  `cookie_hash` varchar(255) NOT NULL,
  `expired` int(128) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `db_setting`
--

CREATE TABLE `db_setting` (
  `status_setting` int(1) NOT NULL DEFAULT 0,
  `nama_instansi` varchar(255) NOT NULL,
  `jumbotron_lead_set` varchar(125) NOT NULL,
  `nama_app_absensi` varchar(100) NOT NULL DEFAULT 'Absensi Online',
  `logo_instansi` varchar(255) NOT NULL,
  `timezone` varchar(35) NOT NULL,
  `absen_mulai` varchar(13) NOT NULL,
  `absen_mulai_to` varchar(13) NOT NULL,
  `absen_pulang` varchar(13) NOT NULL,
  `maps_use` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `db_setting`
--

INSERT INTO `db_setting` (`status_setting`, `nama_instansi`, `jumbotron_lead_set`, `nama_app_absensi`, `logo_instansi`, `timezone`, `absen_mulai`, `absen_mulai_to`, `absen_pulang`, `maps_use`) VALUES
(1, 'SMK PERMATA', 'Jangan Lupa Absen Hari ini', 'PERMATA ABSEN', 'default-logo.png', 'Asia/Jakarta', '13:05:00', '13:10:00', '17:00:00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_pegawai` int(11) NOT NULL,
  `nama_lengkap` varchar(125) NOT NULL,
  `username` varchar(125) NOT NULL,
  `password` varchar(256) NOT NULL,
  `role_id` int(1) NOT NULL,
  `umur` int(11) NOT NULL,
  `image` varchar(125) NOT NULL,
  `kode_akun` varchar(125) NOT NULL,
  `instansi` varchar(125) NOT NULL,
  `jabatan` varchar(125) NOT NULL,
  `mapel` varchar(125) NOT NULL,
  `kelas` varchar(125) NOT NULL,
  `nomer_induk` varchar(255) NOT NULL,
  `tgl_lahir` varchar(25) NOT NULL,
  `tempat_lahir` varchar(25) NOT NULL,
  `jenis_kelamin` varchar(25) NOT NULL,
  `is_active` int(1) NOT NULL,
  `last_login` int(11) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_pegawai`, `nama_lengkap`, `username`, `password`, `role_id`, `umur`, `image`, `kode_akun`, `instansi`, `jabatan`, `mapel`, `kelas`, `nomer_induk`, `tgl_lahir`, `tempat_lahir`, `jenis_kelamin`, `is_active`, `last_login`, `date_created`) VALUES
(12, 'Nugraha', 'admin', '$2y$10$H4qV6HYLbe1qH73zjFI7ku4QR5E0/ax.d/dJ8noJls6TcyYRwi9y.', 1, 18, 'default.png', '293571010111', 'SMK PERMATA', 'Admin', '-', '-', '999999', '2023-11-02', 'Test', 'Laki - Laki', 1, 1702275853, 1584698797),
(42, 'Rival Cahya Nugraha', 'rival', '$2y$10$i85U1JQDKZxTQNxw9PUtpevxMwtRjeKIlEXjMiFk1Vgi2nwX1/Lwy', 2, 18, 'default.png', '845156763892147', 'SMK PERMATA', 'Guru', 'Dasar Pemograman', '-', '200011819', '2005-10-18', 'Bogor', 'Laki - Laki', 1, 1702275951, 1699589921),
(44, 'Dicky Zakaria', 'diki', '$2y$10$JvgWdq6jhaMHJhtypi86w.UtVFlnnsypaMQlK9edRjKeFbJW/ud4e', 3, 19, 'default.png', '401386473628997', 'SMK PERMATA', 'Siswa', '-', '12 TKJ A', '1819082', '2003-12-21', 'Bogor', 'Laki - Laki', 1, 1701917341, 1699608047),
(45, 'Endikat Gumay', 'gumay', '$2y$10$iIq.TrhfiicGQwNdCmnHg.v2YnIr5Mt0y7vN7NIzZHexwmtR1rM42', 3, 20, 'default.png', '542211786790430', 'SMK PERMATA', 'Siswa', '-', '12 TKJ A', '1819083', '2002-12-19', 'Jakarta', 'Laki - Laki', 1, 1701917354, 1699775344),
(46, 'Maimunah', 'munah', '$2y$10$PEDJWp/7.QyXb8zl3gSPdeVGnTixAv7R8MUp7EYnh2E/gecC9D4Yy', 3, 19, 'default.png', '648376750184593', 'SMK PERMATA', 'Siswa', '-', '12 MM 1', '1819084', '2004-10-19', 'Bogor', 'Laki - Laki', 1, 1701917366, 1700304100);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `db_absensi`
--
ALTER TABLE `db_absensi`
  ADD PRIMARY KEY (`id_absen`);

--
-- Indexes for table `db_rememberme`
--
ALTER TABLE `db_rememberme`
  ADD PRIMARY KEY (`id_session`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_pegawai`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `db_absensi`
--
ALTER TABLE `db_absensi`
  MODIFY `id_absen` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `db_rememberme`
--
ALTER TABLE `db_rememberme`
  MODIFY `id_session` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_pegawai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
