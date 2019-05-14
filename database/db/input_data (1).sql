-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 14, 2019 at 04:21 PM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `input_data`
--

-- --------------------------------------------------------

--
-- Table structure for table `agama`
--

CREATE TABLE `agama` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `agama`
--

INSERT INTO `agama` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Islam', '2019-01-29 17:00:00', '2019-01-29 17:00:00'),
(2, 'Kristen/ Protestan', '2019-01-29 17:00:00', '2019-01-29 17:00:00'),
(3, 'Katholik', '2019-01-29 17:00:00', '2019-01-29 17:00:00'),
(4, 'Hindu', '2019-01-29 17:00:00', '2019-01-29 17:00:00'),
(5, 'Budha', '2019-01-29 17:00:00', '2019-01-29 17:00:00'),
(6, 'Khong Hu Chu', '2019-01-29 17:00:00', '2019-01-29 17:00:00'),
(7, 'Kepercayaan Kpd Tuan YME', '2019-01-29 17:00:00', '2019-01-29 17:00:00'),
(99, 'Lainnya', '2019-01-29 17:00:00', '2019-01-29 17:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `beasiswa`
--

CREATE TABLE `beasiswa` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_murid` int(11) DEFAULT NULL,
  `jenis` int(11) DEFAULT NULL,
  `keterangan` text COLLATE utf8mb4_unicode_ci,
  `tahun_mulai` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tahun_selesai` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `beasiswa`
--

INSERT INTO `beasiswa` (`id`, `id_murid`, `jenis`, `keterangan`, `tahun_mulai`, `tahun_selesai`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 'Ket Beasiswa', '2020', '2023', '2019-04-30 18:49:54', '2019-04-30 18:51:08');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(10) UNSIGNED NOT NULL,
  `nomor_telepon_rumah` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nomor_hp` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `belongs_to` int(11) DEFAULT NULL,
  `ekskul` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `nomor_telepon_rumah`, `nomor_hp`, `email`, `belongs_to`, `ekskul`, `created_at`, `updated_at`) VALUES
(1, '0838249', '0213347', 'admin@inven.com', 1, 1, '2019-04-30 18:49:54', '2019-04-30 18:51:08');

-- --------------------------------------------------------

--
-- Table structure for table `detail_murid`
--

CREATE TABLE `detail_murid` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_murid` int(11) DEFAULT NULL,
  `tinggi_badan` int(11) DEFAULT NULL,
  `berat_badan` int(11) DEFAULT NULL,
  `jarak_sekolah` tinyint(4) DEFAULT NULL,
  `jarak_sekolah_kilometer` int(11) DEFAULT NULL,
  `waktu_tempuh` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jumlah_saudara_kandung` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `detail_murid`
--

INSERT INTO `detail_murid` (`id`, `id_murid`, `tinggi_badan`, `berat_badan`, `jarak_sekolah`, `jarak_sekolah_kilometer`, `waktu_tempuh`, `jumlah_saudara_kandung`, `created_at`, `updated_at`) VALUES
(1, 1, 165, 48, 1, 10, '1 jam', 4, '2019-04-30 18:49:54', '2019-04-30 20:30:51');

-- --------------------------------------------------------

--
-- Table structure for table `ekskul`
--

CREATE TABLE `ekskul` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ekskul`
--

INSERT INTO `ekskul` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Bahasa', '2019-01-29 17:00:00', '2019-01-29 17:00:00'),
(2, 'Karya Ilmiah Remaja/Sains KIR', '2019-01-29 17:00:00', '2019-01-29 17:00:00'),
(3, 'Kerohanian', '2019-01-29 17:00:00', '2019-01-29 17:00:00'),
(4, 'Komputer dan Teknologi', '2019-01-29 17:00:00', '2019-01-29 17:00:00'),
(5, 'Olahaga/Beladiri', '2019-01-29 17:00:00', '2019-01-29 17:00:00'),
(6, 'Otomotif/Bengkel/Bikers', '2019-01-29 17:00:00', '2019-01-29 17:00:00'),
(7, 'Palang Merah Remaja(PMR)', '2019-01-29 17:00:00', '2019-01-29 17:00:00'),
(8, 'Paskibra', '2019-01-29 17:00:00', '2019-01-29 17:00:00'),
(9, 'Palang Keamanan Sekolah (PKS)', '2019-01-29 17:00:00', '2019-01-29 17:00:00'),
(10, 'Pencinta Alam', '2019-01-29 17:00:00', '2019-01-29 17:00:00'),
(11, 'Pramuka', '2019-01-29 17:00:00', '2019-01-29 17:00:00'),
(12, 'Seni Media, Jurnal', '2019-01-29 17:00:00', '2019-01-29 17:00:00'),
(13, ' Seni Musik', '2019-01-29 17:00:00', '2019-01-29 17:00:00'),
(14, 'Seni Tari dan Peran', '2019-01-29 17:00:00', '2019-01-29 17:00:00'),
(15, 'Unit Kesehatan Sekolah(UKS) ', '2019-01-29 17:00:00', '2019-01-29 17:00:00'),
(16, 'Wirausaha/Koperasi/keterampilan produktif', '2019-01-29 17:00:00', '2019-01-29 17:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `jurusan`
--

CREATE TABLE `jurusan` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `jurusan`
--

INSERT INTO `jurusan` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Multimedia', '2019-04-29 17:00:00', '2019-04-29 17:00:00'),
(2, 'Rekayasa Perangkat Lunak', '2019-04-29 17:00:00', '2019-04-29 17:00:00'),
(3, 'Administrasi Perkantoran', '2019-04-29 17:00:00', '2019-04-29 17:00:00'),
(4, 'Teknik Jaringan dan Komputer', '2019-04-29 17:00:00', '2019-04-29 17:00:00'),
(5, 'Pemasaran', '2019-04-29 17:00:00', '2019-04-29 17:00:00'),
(6, 'Tata Boga', '2019-04-29 17:00:00', '2019-04-29 17:00:00'),
(7, 'Perhotelan', '2019-04-29 17:00:00', '2019-04-29 17:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `kebutuhan_khusus`
--

CREATE TABLE `kebutuhan_khusus` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_kekurangan` int(11) DEFAULT NULL,
  `belongs_to` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `kekurangan`
--

CREATE TABLE `kekurangan` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kekurangan`
--

INSERT INTO `kekurangan` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Tidak', '2019-01-29 17:00:00', '2019-01-29 17:00:00'),
(2, 'Netra(A) ', '2019-01-29 17:00:00', '2019-01-29 17:00:00'),
(3, 'Rungu(B)', '2019-01-29 17:00:00', '2019-01-29 17:00:00'),
(4, 'Grahita ringan (C)', '2019-01-29 17:00:00', '2019-01-29 17:00:00'),
(5, 'Grahita Sedang (C1)', '2019-01-29 17:00:00', '2019-01-29 17:00:00'),
(6, 'Daksa Ringan (D)', '2019-01-29 17:00:00', '2019-01-29 17:00:00'),
(7, 'Daksa Sedang (D1)', '2019-01-29 17:00:00', '2019-01-29 17:00:00'),
(8, 'Laras (E)', '2019-01-29 17:00:00', '2019-01-29 17:00:00'),
(9, 'Wicara (F)', '2019-01-29 17:00:00', '2019-01-29 17:00:00'),
(10, 'Tuna ganda (G)', '2019-01-29 17:00:00', '2019-01-29 17:00:00'),
(11, 'Hiper aktif (H)', '2019-01-29 17:00:00', '2019-01-29 17:00:00'),
(12, 'Cerdas Istimewa (i)', '2019-01-29 17:00:00', '2019-01-29 17:00:00'),
(13, 'Bakat Istimewa (J)', '2019-01-29 17:00:00', '2019-01-29 17:00:00'),
(14, 'Kesulitan Belajra (K)', '2019-01-29 17:00:00', '2019-01-29 17:00:00'),
(15, 'Narkoba (N)', '2019-01-29 17:00:00', '2019-01-29 17:00:00'),
(16, 'Indigo (O)', '2019-01-29 17:00:00', '2019-01-29 17:00:00'),
(17, 'Down Sindrome (P)', '2019-01-29 17:00:00', '2019-01-29 17:00:00'),
(18, 'Autis (Q)\r\n', '2019-01-29 17:00:00', '2019-01-29 17:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `keluar`
--

CREATE TABLE `keluar` (
  `id` int(10) UNSIGNED NOT NULL,
  `alasan` int(11) DEFAULT NULL,
  `tanggal` datetime DEFAULT NULL,
  `detail_alasan` text COLLATE utf8mb4_unicode_ci,
  `id_murid` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `kota`
--

CREATE TABLE `kota` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(97, '2014_10_12_000000_create_users_table', 1),
(98, '2014_10_12_100000_create_password_resets_table', 1),
(99, '2018_12_31_114427_create_kekurangan_table', 1),
(100, '2018_12_31_123624_create_kebutuhan_khusus_table', 1),
(101, '2018_12_31_123845_create_wakil_table', 1),
(102, '2018_12_31_124202_create_jurusan_table', 1),
(103, '2018_12_31_124346_create_murid_table', 1),
(104, '2018_12_31_130113_create_registrasi_murid_table', 1),
(105, '2018_12_31_130622_create_keluar_table', 1),
(106, '2018_12_31_130851_create_kota_table', 1),
(107, '2018_12_31_131028_create_agama_table', 1),
(108, '2018_12_31_131232_create_contact_table', 1),
(109, '2018_12_31_131451_create_ekskul_table', 1),
(110, '2018_12_31_140905_create_detail_murid_table', 1),
(111, '2018_12_31_141232_create_prestasi_table', 1),
(112, '2018_12_31_141301_create_beasiswa_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `murid`
--

CREATE TABLE `murid` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jk` enum('l','p') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nisn` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nik` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tempat_lahir` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tanggal_lahir` date DEFAULT NULL,
  `no_register_akta_lahir` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `agama` int(11) DEFAULT NULL,
  `kewarganegaraan` tinyint(4) DEFAULT NULL,
  `nama_negara` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alamat_jalan` text COLLATE utf8mb4_unicode_ci,
  `rt` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rw` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nama_dusun` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kelurahan_desa` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kecamatan` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kode_pos` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tempat_tinggal` int(11) DEFAULT NULL,
  `moda_transportasi` int(11) DEFAULT NULL,
  `nomor_kks` int(11) DEFAULT NULL,
  `anak_keberapa` int(11) DEFAULT NULL,
  `penerima_kps` tinyint(4) DEFAULT NULL,
  `nomor_kps` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `usulan_sekolah` tinyint(4) DEFAULT NULL,
  `penerima_kip` tinyint(4) DEFAULT NULL,
  `nomor_kip` int(11) DEFAULT NULL,
  `nama_di_kip` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `terima_fisik_kartu` tinyint(4) DEFAULT NULL,
  `alasan_layak` int(11) DEFAULT NULL,
  `bank` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nomor_rekening` int(11) DEFAULT NULL,
  `rekening_holder` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_wakil` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `murid`
--

INSERT INTO `murid` (`id`, `name`, `jk`, `nisn`, `nik`, `tempat_lahir`, `tanggal_lahir`, `no_register_akta_lahir`, `agama`, `kewarganegaraan`, `nama_negara`, `alamat_jalan`, `rt`, `rw`, `nama_dusun`, `kelurahan_desa`, `kecamatan`, `kode_pos`, `tempat_tinggal`, `moda_transportasi`, `nomor_kks`, `anak_keberapa`, `penerima_kps`, `nomor_kps`, `usulan_sekolah`, `penerima_kip`, `nomor_kip`, `nama_di_kip`, `terima_fisik_kartu`, `alasan_layak`, `bank`, `nomor_rekening`, `rekening_holder`, `id_wakil`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Amrinaina', 'p', '123', '3434', 'bogor', '2019-05-07', '43aa', 99, 1, 'indo', 'asdd23', '04', '04', 'mdnas', 'msdfn', 'mfj', '38273', 2, 2, 32489, 4, 0, '34234', 0, 0, 432423, 'fsf', 0, 1, 'jsfdh', 3242, 'fsdf', '1', NULL, '2019-04-30 18:49:54', '2019-04-30 22:16:36');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `prestasi`
--

CREATE TABLE `prestasi` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_murid` int(11) DEFAULT NULL,
  `jenis` int(11) DEFAULT NULL,
  `tingkat` int(11) DEFAULT NULL,
  `nama` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tahun` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `penyelenggara` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `prestasi`
--

INSERT INTO `prestasi` (`id`, `id_murid`, `jenis`, `tingkat`, `nama`, `tahun`, `penyelenggara`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 1, 'Nama Prestasi', '2020', 'jashj', '2019-04-30 18:49:54', '2019-04-30 23:07:22');

-- --------------------------------------------------------

--
-- Table structure for table `registrasi_murid`
--

CREATE TABLE `registrasi_murid` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_murid` int(11) DEFAULT NULL,
  `jurusan` int(11) DEFAULT NULL,
  `jenis` int(11) DEFAULT NULL,
  `nis` int(11) DEFAULT NULL,
  `tanggal_masuk` date DEFAULT NULL,
  `asal_sekolah` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `no_peserta_ujian` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nomor_seri_ijazah` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nomor_seri_skhus` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `registrasi_murid`
--

INSERT INTO `registrasi_murid` (`id`, `id_murid`, `jurusan`, `jenis`, `nis`, `tanggal_masuk`, `asal_sekolah`, `no_peserta_ujian`, `nomor_seri_ijazah`, `nomor_seri_skhus`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 1, 74218, '2019-04-30', 'Smp 3 Bogor', '43728', 'b2 342872', 'b1 123', '2019-04-30 07:31:38', '2019-04-30 07:53:30'),
(2, 1, 1, 1, 234, '2019-04-30', 'Smp 3 Bogor', '446', 'b2 342872', 'b1 123', '2019-04-30 07:56:32', '2019-05-01 06:36:24'),
(3, 1, 1, 2, 123, '2019-05-01', 'Smp 1 Bogor', '22401', 'b2 342872', 'b1 23482', '2019-05-01 06:16:01', '2019-05-01 06:16:01');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@admin.com', NULL, 'password', NULL, '2019-04-29 20:13:06', '2019-05-01 07:31:26'),
(2, 'Amrina', 'admin@gmail.com', NULL, '$2y$10$R2UCfL/MVQ26PzuWbIIDAO9bmoskDJN6yQhKKzQOVYvOOVnPGjX6u', NULL, '2019-05-02 05:36:07', '2019-05-02 05:36:07');

-- --------------------------------------------------------

--
-- Table structure for table `wakil`
--

CREATE TABLE `wakil` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_murid` int(11) DEFAULT NULL,
  `family_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nik` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tahun_lahir` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pendidikan` int(11) DEFAULT NULL,
  `pekerjaan` int(11) DEFAULT NULL,
  `penghasilan_bulanan` int(11) DEFAULT NULL,
  `type` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `wakil`
--

INSERT INTO `wakil` (`id`, `id_murid`, `family_name`, `nik`, `tahun_lahir`, `pendidikan`, `pekerjaan`, `penghasilan_bulanan`, `type`, `created_at`, `updated_at`) VALUES
(1, 1, 'Nama Nama Wali', '3434', '1956', 9, 12, 6, 1, '2019-04-30 18:49:54', '2019-04-30 18:51:08');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `agama`
--
ALTER TABLE `agama`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `beasiswa`
--
ALTER TABLE `beasiswa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `detail_murid`
--
ALTER TABLE `detail_murid`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ekskul`
--
ALTER TABLE `ekskul`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jurusan`
--
ALTER TABLE `jurusan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kebutuhan_khusus`
--
ALTER TABLE `kebutuhan_khusus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kekurangan`
--
ALTER TABLE `kekurangan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `keluar`
--
ALTER TABLE `keluar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kota`
--
ALTER TABLE `kota`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `murid`
--
ALTER TABLE `murid`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `prestasi`
--
ALTER TABLE `prestasi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registrasi_murid`
--
ALTER TABLE `registrasi_murid`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `wakil`
--
ALTER TABLE `wakil`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `agama`
--
ALTER TABLE `agama`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100;
--
-- AUTO_INCREMENT for table `beasiswa`
--
ALTER TABLE `beasiswa`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `detail_murid`
--
ALTER TABLE `detail_murid`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `ekskul`
--
ALTER TABLE `ekskul`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `jurusan`
--
ALTER TABLE `jurusan`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `kebutuhan_khusus`
--
ALTER TABLE `kebutuhan_khusus`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `kekurangan`
--
ALTER TABLE `kekurangan`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `keluar`
--
ALTER TABLE `keluar`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `kota`
--
ALTER TABLE `kota`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=113;
--
-- AUTO_INCREMENT for table `murid`
--
ALTER TABLE `murid`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `prestasi`
--
ALTER TABLE `prestasi`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `registrasi_murid`
--
ALTER TABLE `registrasi_murid`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `wakil`
--
ALTER TABLE `wakil`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
