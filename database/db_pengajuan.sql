-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 20, 2022 at 01:59 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_pengajuan`
--

-- --------------------------------------------------------

--
-- Table structure for table `loker`
--

CREATE TABLE `loker` (
  `id_loker` varchar(256) NOT NULL,
  `id_perusahaan_details` varchar(256) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `deskripsi` text NOT NULL,
  `posisi` varchar(50) NOT NULL,
  `jumlah_rekrut` int(30) NOT NULL,
  `salary` varchar(50) NOT NULL,
  `batas_akhir` date NOT NULL,
  `created_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `loker`
--

INSERT INTO `loker` (`id_loker`, `id_perusahaan_details`, `judul`, `deskripsi`, `posisi`, `jumlah_rekrut`, `salary`, `batas_akhir`, `created_at`) VALUES
('66946b44ab37c0675d6e543afcc22256', 'd509166e5f7601075b91b2de69f13471', 'Pusri', 'Admin', 'Admin Perusahaan', 100, '100000000', '2022-05-31', '2022-05-31'),
('a0fcae9ddf1f8ef6c0b679409f96253e', 'e64405bfb4d637b3902f0806a494e801', 'Penerimaan Pegawai Kontrak', 'Penerimaan Pegawai Kontrak tahun 2022', 'Operator Tambang', 100, '4000000000', '2022-06-30', '2022-06-01');

-- --------------------------------------------------------

--
-- Table structure for table `perusahaan_detail`
--

CREATE TABLE `perusahaan_detail` (
  `id_perusahaan_detail` varchar(256) NOT NULL,
  `nama_perusahaan` varchar(50) DEFAULT NULL,
  `jenis_perusahaan` varchar(50) DEFAULT NULL,
  `npwp_perusahaan` varchar(30) DEFAULT NULL,
  `provinsi` varchar(50) DEFAULT NULL,
  `kota` varchar(50) DEFAULT NULL,
  `alamat` text DEFAULT NULL,
  `kode_pos` varchar(20) DEFAULT NULL,
  `deskripsi` text DEFAULT NULL,
  `nomor_telepon` varchar(50) DEFAULT NULL,
  `date_registered` date NOT NULL,
  `logo` varchar(256) DEFAULT NULL,
  `id_status_verifikasi` int(11) NOT NULL,
  `id_status_aktif` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `perusahaan_detail`
--

INSERT INTO `perusahaan_detail` (`id_perusahaan_detail`, `nama_perusahaan`, `jenis_perusahaan`, `npwp_perusahaan`, `provinsi`, `kota`, `alamat`, `kode_pos`, `deskripsi`, `nomor_telepon`, `date_registered`, `logo`, `id_status_verifikasi`, `id_status_aktif`) VALUES
('0fce2d618d88fcb962a30f6ca370b7c7', 'PT Pusri', 'Persero', '910920192', 'Sumatera Selatan', 'Select City', 'CV g', '30661', 'ahsuas', '17287182', '2022-06-14', '5d1e614a00d8ad72b9eeadd176d3cc30_logo.jpg', 2, 2),
('7ec0c82dacd303494c008521f8a3c04a', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-06-17', NULL, 1, 1),
('a69bb59aa6b7a811881eb71061d44a73', 'PT Pusri ', 'Persero', '910920192', 'Sumatera Selatan', 'Select City', 'Jl.Belanti', '30661', 'bukit', '082176350289', '2022-06-14', 'e87fae3ea452cd87592d545ff2649879_logo.jpg', 2, 2),
('d509166e5f7601075b91b2de69f13471', 'PT Pusri ', 'Persero', '910920192', 'Sumatera Selatan', 'test', 'Jl. Sekip', '30661', 'Bagus', '+62812781728', '2022-05-25', 'f9c37483c1c51ecb622b3b6d4975c6e4_logo1.png', 2, 1),
('e64405bfb4d637b3902f0806a494e801', 'PT Bukit Asam', 'Persero', '910920192', 'Sumatera Selatan', 'Lahat', 'Jl.Belanti', '30661', 'Mantabb', '082176350289', '2022-06-01', '23d3a842aafc9d203ba7cd95affe4cad_logo.png', 2, 1),
('f86ce82e5fbbc90231459ead48d2532a', 'PT.Garuda', 'Persero', '910920228', 'Jawa Tengah', 'Pati', 'Jl. Pperjuangan', '59188', 'Perusahaan bergerak dibidang kuliner makanan', '59188', '2022-08-18', 'e43ae16f243c18fe6039cbd5940f16c3_logo4.png', 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `status_aktif`
--

CREATE TABLE `status_aktif` (
  `id_status_aktif` int(11) NOT NULL,
  `status_aktif` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `status_aktif`
--

INSERT INTO `status_aktif` (`id_status_aktif`, `status_aktif`) VALUES
(1, 'Belum Aktif'),
(2, 'Telah Aktif');

-- --------------------------------------------------------

--
-- Table structure for table `status_perpanjangan`
--

CREATE TABLE `status_perpanjangan` (
  `id_status_perpanjangan` int(11) NOT NULL,
  `status_perpanjangan` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `status_perpanjangan`
--

INSERT INTO `status_perpanjangan` (`id_status_perpanjangan`, `status_perpanjangan`) VALUES
(1, 'Belum Membutuhkan Perpanjang'),
(2, 'Membutuhkan Perpanjangan');

-- --------------------------------------------------------

--
-- Table structure for table `status_verifikasi`
--

CREATE TABLE `status_verifikasi` (
  `id_status_verifikasi` int(11) NOT NULL,
  `status_verifikasi` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `status_verifikasi`
--

INSERT INTO `status_verifikasi` (`id_status_verifikasi`, `status_verifikasi`) VALUES
(1, 'Belum Diverifikasi'),
(2, 'Sudah Diverifikasi');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` varchar(256) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(256) NOT NULL,
  `email` varchar(30) NOT NULL,
  `id_user_level` varchar(256) NOT NULL,
  `id_user_detail` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `email`, `id_user_level`, `id_user_detail`) VALUES
('0a96bcca52e148a10327acbcc171360f', 'peserta_7', 'peserta_7', 'peserta_7@kkp.com', '3', '0a96bcca52e148a10327acbcc171360f'),
('0fce2d618d88fcb962a30f6ca370b7c7', 'pt_pupuk', '123', 'pupuk@gmail.com', '2', '0fce2d618d88fcb962a30f6ca370b7c7'),
('4f6954c768b78c390bb3f26137215a0b', 'peserta_1', 'peserta_1', 'peserta_1@kkp.com', '3', '4f6954c768b78c390bb3f26137215a0b'),
('63a080b9072038176f77572f681b099f', 'peserta_6', 'peserta_6', 'peserta_6@kkp.com', '3', '63a080b9072038176f77572f681b099f'),
('7910fb5341d0ec5f788bc83a3d38b68c', 'peserta_8', 'peserta_8', 'peserta_8@kkp.com', '3', '7910fb5341d0ec5f788bc83a3d38b68c'),
('7ce591dc1e0a8ee70d1e0675d4f48fab', 'peserta_2', 'peserta_2', 'peserta_2@kkp.com', '3', '7ce591dc1e0a8ee70d1e0675d4f48fab'),
('7ec0c82dacd303494c008521f8a3c04a', 'pama', '123', 'pama@gmail.com', '2', '7ec0c82dacd303494c008521f8a3c04a'),
('a69bb59aa6b7a811881eb71061d44a73', 'bukit', '123', 'bukit@gmail.com', '2', 'a69bb59aa6b7a811881eb71061d44a73'),
('b36cff2013e50f0a31cf2b27646d14c4', 'peserta_5', 'peserta_5', 'peserta_5@kkp.com', '3', 'b36cff2013e50f0a31cf2b27646d14c4'),
('d509166e5f7601075b91b2de69f13471', 'perusahaan', 'perusahaan', 'taufiiqulhakim23@gmail.com', '2', 'd509166e5f7601075b91b2de69f13471'),
('d95b82e7dd22192582557a3837d38cfa', 'peserta_4', 'peserta_4', 'peserta_4@kkp.com', '3', 'd95b82e7dd22192582557a3837d38cfa'),
('e64405bfb4d637b3902f0806a494e801', 'bukit_asam', 'bukit_asam', 'bukit_asam@gmail.com', '2', 'e64405bfb4d637b3902f0806a494e801'),
('eab3f6d6f450c71a0d0e1e6110e7fbc5', 'peserta_3', 'peserta_3', 'peserta3@kkp.com', '3', 'eab3f6d6f450c71a0d0e1e6110e7fbc5'),
('ef6e295b553be6143f5179fd1955515f', 'admin', 'admin123', 'admin@admin.com', '1', 'ef6e295b553be6143f5179fd1955515f'),
('f86ce82e5fbbc90231459ead48d2532a', 'garuda', 'garuda', 'garuda@gmail.com', '2', 'f86ce82e5fbbc90231459ead48d2532a');

-- --------------------------------------------------------

--
-- Table structure for table `user_detail`
--

CREATE TABLE `user_detail` (
  `id_user_detail` varchar(256) NOT NULL,
  `no_pendaftaran` varchar(20) DEFAULT NULL,
  `nik` varchar(50) DEFAULT NULL,
  `nama_lengkap` varchar(50) DEFAULT NULL,
  `tempat_lahir` varchar(50) DEFAULT NULL,
  `tanggal_lahir` date DEFAULT NULL,
  `jenis_kelamin` enum('L','P') DEFAULT NULL,
  `agama` varchar(30) DEFAULT NULL,
  `status_perkawinan` varchar(30) DEFAULT NULL,
  `tinggi_badan` int(12) DEFAULT NULL,
  `berat_badan` int(12) DEFAULT NULL,
  `pendidikan_terakhir` varchar(100) DEFAULT NULL,
  `jurusan` varchar(50) DEFAULT NULL,
  `pengalaman_kerja` text DEFAULT NULL,
  `no_hp` varchar(20) DEFAULT NULL,
  `formasi_jabatan` varchar(30) DEFAULT NULL,
  `lokasi_tes` varchar(30) DEFAULT NULL,
  `tanggal_tes` date DEFAULT NULL,
  `alamat` text DEFAULT NULL,
  `foto_saya` varchar(256) DEFAULT NULL,
  `foto_ktp` varchar(256) DEFAULT NULL,
  `foto_ijazah` varchar(256) DEFAULT NULL,
  `foto_akte` varchar(255) DEFAULT NULL,
  `foto_surat_pengalaman_kerja` varchar(255) DEFAULT NULL,
  `foto_transkrip_nilai` varchar(255) DEFAULT NULL,
  `date_registered` date NOT NULL,
  `id_status_verifikasi` int(12) NOT NULL,
  `id_status_perpanjangan` int(12) NOT NULL,
  `id_status_aktif` int(11) NOT NULL,
  `mulai_berlaku` date DEFAULT NULL,
  `akhir_berlaku` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_detail`
--

INSERT INTO `user_detail` (`id_user_detail`, `no_pendaftaran`, `nik`, `nama_lengkap`, `tempat_lahir`, `tanggal_lahir`, `jenis_kelamin`, `agama`, `status_perkawinan`, `tinggi_badan`, `berat_badan`, `pendidikan_terakhir`, `jurusan`, `pengalaman_kerja`, `no_hp`, `formasi_jabatan`, `lokasi_tes`, `tanggal_tes`, `alamat`, `foto_saya`, `foto_ktp`, `foto_ijazah`, `foto_akte`, `foto_surat_pengalaman_kerja`, `foto_transkrip_nilai`, `date_registered`, `id_status_verifikasi`, `id_status_perpanjangan`, `id_status_aktif`, `mulai_berlaku`, `akhir_berlaku`) VALUES
('0a96bcca52e148a10327acbcc171360f', '58595147', '7', 'tujuh', 'surabaya', '1999-12-15', 'P', 'katolik', 'Kawin', 150, 50, 'S2', 'Tekink Kelautan', 'Kepala', '08123456789', 'Kepala', 'Malang', '2022-12-22', 'Jl. Teknik Kimia, Keputih, Kec. Sukolilo, Kota SBY, Jawa Timur', 'bd7f576ced714d9ed90487b18d2b1788_saya.jpg', 'bd7f576ced714d9ed90487b18d2b1788_ktp.jpg', 'bd7f576ced714d9ed90487b18d2b1788_ijazah.jpg', 'bd7f576ced714d9ed90487b18d2b1788_akte.jpg', '', 'bd7f576ced714d9ed90487b18d2b1788_foto_transkrip_nilai.jpg', '2022-12-20', 2, 1, 2, '2022-12-20', '2023-01-03'),
('3cb2dea54efd01a9283b9c38c2616696', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-08-17', 1, 1, 1, NULL, NULL),
('4f6954c768b78c390bb3f26137215a0b', '11575071', '1', '1', '1', '0011-11-11', 'L', '1', 'Kawin', 1, 1, 'Profesor', '1', '1', '1', '1', '1', '0000-00-00', '1', '3e3fb20111ff4fffcd3ba23b811b4750_saya.jpg', '3e3fb20111ff4fffcd3ba23b811b4750_ktp.jpg', '3e3fb20111ff4fffcd3ba23b811b4750_ijazah.jpg', '3e3fb20111ff4fffcd3ba23b811b4750_akte.jpg', '3e3fb20111ff4fffcd3ba23b811b4750_foto_surat_pengalaman_kerja.jpg', '3e3fb20111ff4fffcd3ba23b811b4750_foto_transkrip_nilai.jpg', '2022-12-19', 2, 1, 2, '2022-12-20', '2023-01-07'),
('63a080b9072038176f77572f681b099f', '27294925', '6', 'enam', 'mediun', '2000-12-10', 'L', 'hindu', 'Kawin', 180, 65, 'S1', 'Teknik Informatika', 'Ketua Schematics', '08123456789', 'Kepala', 'Malang', '2022-12-21', 'Jl. Teknik Kimia, Keputih, Kec. Sukolilo, Kota SBY, Jawa Timur', 'e99aea1a7692fd48151e5c3ff31a31d4_saya.jpg', 'e99aea1a7692fd48151e5c3ff31a31d4_ktp.jpg', 'e99aea1a7692fd48151e5c3ff31a31d4_ijazah.jpg', 'e99aea1a7692fd48151e5c3ff31a31d4_akte.jpg', '', 'e99aea1a7692fd48151e5c3ff31a31d4_foto_transkrip_nilai.jpg', '2022-12-20', 2, 1, 2, '0000-00-00', '0000-00-00'),
('7910fb5341d0ec5f788bc83a3d38b68c', '77362659', '8', 'delapan', 'Gresik', '2002-10-10', 'L', 'Islam', 'Kawin', 190, 70, 'S3', 'Teknik Informatika', 'Ketua Panitia ICT', '08123456789', 'Kepala', 'Gresik', '2022-12-24', 'Jl. Teknik Kimia, Keputih, Kec. Sukolilo, Kota SBY, Jawa Timur', '00627f3e294033c8db39da9c8f5c12b1_saya.jpg', '00627f3e294033c8db39da9c8f5c12b1_ktp.jpg', '00627f3e294033c8db39da9c8f5c12b1_ijazah.jpg', '00627f3e294033c8db39da9c8f5c12b1_akte.jpg', '', '00627f3e294033c8db39da9c8f5c12b1_foto_transkrip_nilai.jpg', '2022-12-20', 2, 1, 2, '2022-12-20', '2023-01-03'),
('7ce591dc1e0a8ee70d1e0675d4f48fab', '30358401', '2', '2', '2', '0222-02-22', 'P', '2', 'Belum Kawin', 2, 2, 'SD', '2', '2', '2', '2', '2', '0000-00-00', '2', 'f3bd5c7c3602712d0c61c94a48f69738_saya.jpg', 'f3bd5c7c3602712d0c61c94a48f69738_ktp.jpg', 'f3bd5c7c3602712d0c61c94a48f69738_ijazah.jpg', 'f3bd5c7c3602712d0c61c94a48f69738_akte.jpg', 'f3bd5c7c3602712d0c61c94a48f69738_foto_surat_pengalaman_kerja.jpg', 'f3bd5c7c3602712d0c61c94a48f69738_foto_transkrip_nilai.jpg', '2022-12-19', 2, 1, 2, '2022-12-19', '2022-12-21'),
('b36cff2013e50f0a31cf2b27646d14c4', '11717155', '5', 'lima', 'surabaya', '2006-10-10', 'L', 'buddha', 'Belum Kawin', 190, 90, 'D4', 'Tekink Kelautan', 'Kepala Bagian', '08123456789', 'Kepala', 'surabaya', '2023-01-07', 'Jl. Teknik Kimia, Keputih, Kec. Sukolilo, Kota SBY, Jawa Timur', '9ae6a71e940a6f1fb07c66e1ad0ed0e5_saya.jpg', '9ae6a71e940a6f1fb07c66e1ad0ed0e5_ktp.jpg', '9ae6a71e940a6f1fb07c66e1ad0ed0e5_ijazah.jpg', '9ae6a71e940a6f1fb07c66e1ad0ed0e5_akte.jpg', '', '9ae6a71e940a6f1fb07c66e1ad0ed0e5_foto_transkrip_nilai.jpg', '2022-12-20', 2, 1, 2, '2022-12-20', '2023-02-21'),
('d95b82e7dd22192582557a3837d38cfa', '48596967', '4', 'empat', 'surabaya', '2005-10-10', 'P', 'kristen', 'Belum Kawin', 190, 60, 'Profesor', 'Teknik Nuklir', 'Kepala Bagian', '08123456789', 'Kepala', 'surabaya', '2023-01-07', 'Jl. Teknik Kimia, Keputih, Kec. Sukolilo, Kota SBY, Jawa Timur', 'f4011f2f328b9bf1eefe5e1a536af28e_saya.png', 'f4011f2f328b9bf1eefe5e1a536af28e_ktp.jpg', 'f4011f2f328b9bf1eefe5e1a536af28e_ijazah.jpg', 'f4011f2f328b9bf1eefe5e1a536af28e_akte.jpg', '', 'f4011f2f328b9bf1eefe5e1a536af28e_foto_transkrip_nilai.jpg', '2022-12-20', 2, 1, 2, '2022-12-20', '2023-01-07'),
('e2c929f4edd991d6371a719e8c72c3ec', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-06-17', 1, 1, 1, NULL, NULL),
('eab3f6d6f450c71a0d0e1e6110e7fbc5', '43158392', '3', 'tiga', 'gresik', '2000-10-10', 'P', 'islam', 'Belum Kawin', 190, 70, 'S1', 'Tekink Kelautan', 'Kapten Kapal', '08333333', 'kepala', 'surabaya', '2022-12-31', 'jl. jalan 3', 'e0d0658aac8fcc8a128b8488f623fabf_saya.jpg', 'e0d0658aac8fcc8a128b8488f623fabf_ktp.jpg', 'e0d0658aac8fcc8a128b8488f623fabf_ijazah.jpg', 'e0d0658aac8fcc8a128b8488f623fabf_akte.jpg', 'e0d0658aac8fcc8a128b8488f623fabf_foto_surat_pengalaman_kerja.jpg', 'e0d0658aac8fcc8a128b8488f623fabf_foto_transkrip_nilai.jpg', '2022-12-19', 2, 1, 2, '0000-00-00', '0000-00-00'),
('ef6e295b553be6143f5179fd1955515f', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-05-18', 1, 1, 1, NULL, NULL),
('ef7c895ae10cbcca951ba4afbd9e6241', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-08-18', 1, 1, 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user_level`
--

CREATE TABLE `user_level` (
  `id_user_level` int(11) NOT NULL,
  `user_level` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_level`
--

INSERT INTO `user_level` (`id_user_level`, `user_level`) VALUES
(1, 'Admin'),
(2, 'Perusahaan'),
(3, 'User');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `loker`
--
ALTER TABLE `loker`
  ADD PRIMARY KEY (`id_loker`);

--
-- Indexes for table `perusahaan_detail`
--
ALTER TABLE `perusahaan_detail`
  ADD PRIMARY KEY (`id_perusahaan_detail`);

--
-- Indexes for table `status_aktif`
--
ALTER TABLE `status_aktif`
  ADD PRIMARY KEY (`id_status_aktif`);

--
-- Indexes for table `status_perpanjangan`
--
ALTER TABLE `status_perpanjangan`
  ADD PRIMARY KEY (`id_status_perpanjangan`);

--
-- Indexes for table `status_verifikasi`
--
ALTER TABLE `status_verifikasi`
  ADD PRIMARY KEY (`id_status_verifikasi`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `user_detail`
--
ALTER TABLE `user_detail`
  ADD PRIMARY KEY (`id_user_detail`);

--
-- Indexes for table `user_level`
--
ALTER TABLE `user_level`
  ADD PRIMARY KEY (`id_user_level`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `status_aktif`
--
ALTER TABLE `status_aktif`
  MODIFY `id_status_aktif` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `status_perpanjangan`
--
ALTER TABLE `status_perpanjangan`
  MODIFY `id_status_perpanjangan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `status_verifikasi`
--
ALTER TABLE `status_verifikasi`
  MODIFY `id_status_verifikasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user_level`
--
ALTER TABLE `user_level`
  MODIFY `id_user_level` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
