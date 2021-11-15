-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versi server:                 10.4.19-MariaDB - mariadb.org binary distribution
-- OS Server:                    Win64
-- HeidiSQL Versi:               10.3.0.5771
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- membuang struktur untuk table db_laravel.activity_log
CREATE TABLE IF NOT EXISTS `activity_log` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `log_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject_type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `event` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subject_id` bigint(20) unsigned DEFAULT NULL,
  `causer_type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `causer_id` bigint(20) unsigned DEFAULT NULL,
  `properties` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`properties`)),
  `batch_uuid` char(36) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `subject` (`subject_type`,`subject_id`),
  KEY `causer` (`causer_type`,`causer_id`),
  KEY `activity_log_log_name_index` (`log_name`)
) ENGINE=InnoDB AUTO_INCREMENT=38 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Membuang data untuk tabel db_laravel.activity_log: ~37 rows (lebih kurang)
/*!40000 ALTER TABLE `activity_log` DISABLE KEYS */;
INSERT INTO `activity_log` (`id`, `log_name`, `description`, `subject_type`, `event`, `subject_id`, `causer_type`, `causer_id`, `properties`, `batch_uuid`, `created_at`, `updated_at`) VALUES
	(1, 'default', 'Log Out', NULL, NULL, NULL, 'App\\Models\\User', 482, '[]', NULL, '2021-10-29 10:30:24', '2021-10-29 10:30:24'),
	(2, 'default', 'Login', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-10-29 10:30:27', '2021-10-29 10:30:27'),
	(3, 'default', 'Ubah Data Pegawai dengan ID = 93', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-10-29 10:30:57', '2021-10-29 10:30:57'),
	(4, 'default', 'Log Out', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-10-29 10:31:03', '2021-10-29 10:31:03'),
	(5, 'default', 'Login', NULL, NULL, NULL, 'App\\Models\\User', 482, '[]', NULL, '2021-10-29 10:31:12', '2021-10-29 10:31:12'),
	(6, 'default', 'Login', NULL, NULL, NULL, 'App\\Models\\User', 482, '[]', NULL, '2021-10-29 10:32:48', '2021-10-29 10:32:48'),
	(7, 'default', 'Ubah Data Profil dengan ID = 482', NULL, NULL, NULL, 'App\\Models\\User', 482, '[]', NULL, '2021-10-29 10:33:32', '2021-10-29 10:33:32'),
	(8, 'default', 'Log Out', NULL, NULL, NULL, 'App\\Models\\User', 482, '[]', NULL, '2021-10-29 10:33:36', '2021-10-29 10:33:36'),
	(9, 'default', 'Login', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-10-29 10:33:38', '2021-10-29 10:33:38'),
	(10, 'default', 'Log Out', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-10-29 11:10:02', '2021-10-29 11:10:02'),
	(11, 'default', 'Login', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-10-29 11:12:09', '2021-10-29 11:12:09'),
	(12, 'default', 'Ubah Data Pengaturan', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-10-29 11:16:43', '2021-10-29 11:16:43'),
	(13, 'default', 'Ubah Data Pengaturan', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-10-29 11:16:50', '2021-10-29 11:16:50'),
	(14, 'default', 'Ubah Data Pengaturan', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-10-29 11:17:10', '2021-10-29 11:17:10'),
	(15, 'default', 'Ubah Data Pengaturan', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-10-29 11:23:12', '2021-10-29 11:23:12'),
	(16, 'default', 'Log Out', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-10-29 11:23:19', '2021-10-29 11:23:19'),
	(17, 'default', 'Login', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-10-29 11:23:25', '2021-10-29 11:23:25'),
	(18, 'default', 'Ubah Data Pengaturan', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-10-29 11:23:40', '2021-10-29 11:23:40'),
	(19, 'default', 'Ubah Data Pengaturan', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-10-29 11:23:45', '2021-10-29 11:23:45'),
	(20, 'default', 'Ubah Data Pengaturan', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-10-29 11:23:50', '2021-10-29 11:23:50'),
	(21, 'default', 'Ubah Data Pengaturan', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-10-29 11:23:55', '2021-10-29 11:23:55'),
	(22, 'default', 'Ubah Data Pengaturan', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-10-29 11:23:59', '2021-10-29 11:23:59'),
	(23, 'default', 'Ubah Data Pengaturan', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-10-29 11:24:03', '2021-10-29 11:24:03'),
	(24, 'default', 'Log Out', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-10-29 11:25:32', '2021-10-29 11:25:32'),
	(25, 'default', 'Login', NULL, NULL, NULL, 'App\\Models\\User', 482, '[]', NULL, '2021-10-29 11:25:39', '2021-10-29 11:25:39'),
	(26, 'default', 'Ubah Data Profil dengan ID = 482', NULL, NULL, NULL, 'App\\Models\\User', 482, '[]', NULL, '2021-10-29 11:26:56', '2021-10-29 11:26:56'),
	(27, 'default', 'Login', NULL, NULL, NULL, 'App\\Models\\User', 482, '[]', NULL, '2021-10-29 11:27:02', '2021-10-29 11:27:02'),
	(28, 'default', 'Log Out', NULL, NULL, NULL, 'App\\Models\\User', 482, '[]', NULL, '2021-10-29 11:46:26', '2021-10-29 11:46:26'),
	(29, 'default', 'Login', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-10-29 14:15:38', '2021-10-29 14:15:38'),
	(30, 'default', 'Ubah Data Pengaturan', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-10-29 14:18:08', '2021-10-29 14:18:08'),
	(31, 'default', 'Log Out', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-10-29 14:18:12', '2021-10-29 14:18:12'),
	(32, 'default', 'Login', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-10-29 14:29:41', '2021-10-29 14:29:41'),
	(33, 'default', 'Tambah Data Pegawai', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-10-29 14:30:33', '2021-10-29 14:30:33'),
	(34, 'default', 'Ubah Data Pegawai dengan ID = 97', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-10-29 14:30:48', '2021-10-29 14:30:48'),
	(35, 'default', 'Ubah Data Pegawai dengan ID = 97', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-10-29 14:33:39', '2021-10-29 14:33:39'),
	(36, 'default', 'Ubah Data Pegawai dengan ID = 97', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-10-29 14:35:31', '2021-10-29 14:35:31'),
	(37, 'default', 'Ubah Data Pegawai dengan ID = 97', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2021-10-29 14:35:48', '2021-10-29 14:35:48');
/*!40000 ALTER TABLE `activity_log` ENABLE KEYS */;

-- membuang struktur untuk table db_laravel.failed_jobs
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Membuang data untuk tabel db_laravel.failed_jobs: ~0 rows (lebih kurang)
/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;

-- membuang struktur untuk table db_laravel.migrations
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Membuang data untuk tabel db_laravel.migrations: ~9 rows (lebih kurang)
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(1, '2014_10_12_000000_create_users_table', 1),
	(2, '2014_10_12_100000_create_password_resets_table', 1),
	(3, '2019_08_19_000000_create_failed_jobs_table', 1),
	(4, '2014_10_12_200000_add_two_factor_columns_to_users_table', 2),
	(5, '2019_12_14_000001_create_personal_access_tokens_table', 2),
	(6, '2021_04_05_060844_create_sessions_table', 2),
	(7, '2021_05_11_132318_create_events_table', 3),
	(8, '2021_10_28_132348_create_activity_log_table', 4),
	(9, '2021_10_28_132349_add_event_column_to_activity_log_table', 4),
	(10, '2021_10_28_132350_add_batch_uuid_column_to_activity_log_table', 4);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;

-- membuang struktur untuk table db_laravel.password_resets
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Membuang data untuk tabel db_laravel.password_resets: ~0 rows (lebih kurang)
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;

-- membuang struktur untuk table db_laravel.pegawai_tbl
CREATE TABLE IF NOT EXISTS `pegawai_tbl` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nip` varchar(18) DEFAULT NULL,
  `nama_pegawai` varchar(100) DEFAULT NULL,
  `tempat_lahir` varchar(50) DEFAULT NULL,
  `tanggal_lahir` date DEFAULT NULL,
  `jenis_kelamin` varchar(50) DEFAULT NULL,
  `alamat` text DEFAULT NULL,
  `agama` varchar(300) DEFAULT NULL,
  `gol_darah` varchar(50) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `foto_formal` varchar(50) DEFAULT NULL,
  `foto_kedinasan` varchar(50) DEFAULT NULL,
  `status` varchar(50) DEFAULT NULL,
  `status_hapus` int(11) DEFAULT 0,
  `user_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=98 DEFAULT CHARSET=utf8mb4 ROW_FORMAT=DYNAMIC;

-- Membuang data untuk tabel db_laravel.pegawai_tbl: ~94 rows (lebih kurang)
/*!40000 ALTER TABLE `pegawai_tbl` DISABLE KEYS */;
INSERT INTO `pegawai_tbl` (`id`, `nip`, `nama_pegawai`, `tempat_lahir`, `tanggal_lahir`, `jenis_kelamin`, `alamat`, `agama`, `gol_darah`, `email`, `foto_formal`, `foto_kedinasan`, `status`, `status_hapus`, `user_id`, `created_at`, `updated_at`) VALUES
	(1, '196406211985032009', 'Hj. Sitti Saleha, SE, M.Si', 'sasa', '1964-06-21', 'Wanita', 'ssa', 'Islam', NULL, 'a@gmail.com', '1635393285.jpg', '1635393266.jpg', 'PNS', 0, 1, '2021-05-03 14:20:18', '2021-10-28 11:54:45'),
	(2, '196412311998011000', 'Ir. Laode Hamalin, M.Si', NULL, '1970-01-01', 'Pria', NULL, NULL, NULL, NULL, NULL, NULL, 'PNS', 0, NULL, '2021-05-03 14:20:18', '2021-06-21 01:18:44'),
	(3, '196312301986072000', 'Wa Ode Nuryani, SE', NULL, '1963-12-30', 'Wanita', NULL, NULL, NULL, NULL, NULL, NULL, 'PNS', 0, NULL, '2021-05-03 14:20:18', '2021-05-03 14:20:18'),
	(4, '196602011984111000', 'Sutomo, SP, M. Si', NULL, '1966-02-01', 'Pria', NULL, NULL, NULL, NULL, NULL, NULL, 'PNS', 0, NULL, '2021-05-03 14:20:18', '2021-05-03 14:20:18'),
	(5, '196302081993031000', 'Ir. Irmanuddin', NULL, '1963-02-08', 'Pria', NULL, NULL, NULL, NULL, NULL, NULL, 'PNS', 0, NULL, '2021-05-03 14:20:18', '2021-05-03 14:20:18'),
	(6, '196412301994031000', 'Ir. Sapoan, M.Si', NULL, '1970-01-01', 'Pria', NULL, NULL, NULL, NULL, NULL, NULL, 'PNS', 0, NULL, '2021-05-03 14:20:18', '2021-06-21 02:34:09'),
	(7, '196207171983022000', 'Rukmini, SE', NULL, '1962-07-17', 'Wanita', NULL, NULL, NULL, NULL, NULL, NULL, 'PNS', 0, NULL, '2021-05-03 14:20:18', '2021-05-03 14:20:18'),
	(8, '196504101985031000', 'Najamuddin Pidani,S.Sos', NULL, '1965-04-10', 'Pria', NULL, NULL, NULL, NULL, NULL, NULL, 'PNS', 0, NULL, '2021-05-03 14:20:18', '2021-05-03 14:20:18'),
	(9, '198005222006041000', 'La Ode. Muh. Rusdin Jaya, S.IP, M.Si', NULL, '1980-05-22', 'Pria', NULL, NULL, NULL, NULL, NULL, NULL, 'PNS', 0, NULL, '2021-05-03 14:20:18', '2021-05-03 14:20:18'),
	(10, '196608121994041000', 'Drs. Muslimin', NULL, '1966-08-12', 'Pria', NULL, NULL, NULL, NULL, NULL, NULL, 'PNS', 0, NULL, '2021-05-03 14:20:18', '2021-05-03 14:20:18'),
	(11, '196605291995031000', 'Sulkifli Saleh,ST.M.Si', NULL, '1966-05-29', 'Pria', NULL, NULL, NULL, NULL, NULL, NULL, 'PNS', 0, NULL, '2021-05-03 14:20:18', '2021-05-03 14:20:18'),
	(12, '196603071994032000', 'Hasnawati, SE', NULL, '1966-03-07', 'Wanita', NULL, NULL, NULL, NULL, NULL, NULL, 'PNS', 0, NULL, '2021-05-03 14:20:18', '2021-05-03 14:20:18'),
	(13, '196605101995032000', 'Andi Indriani P.U, SH', NULL, '1966-11-10', 'Wanita', NULL, NULL, NULL, NULL, NULL, NULL, 'PNS', 0, NULL, '2021-05-03 14:20:18', '2021-05-03 14:20:18'),
	(14, '197102211991032000', 'Darmawati Gamma, SH', NULL, '1971-02-21', 'Wanita', NULL, NULL, NULL, NULL, NULL, NULL, 'PNS', 0, NULL, '2021-05-03 14:20:18', '2021-05-03 14:20:18'),
	(15, '196303021985032000', 'Nursan, S.Sos', NULL, '1963-02-03', 'Wanita', NULL, NULL, NULL, NULL, NULL, NULL, 'PNS', 0, NULL, '2021-05-03 14:20:18', '2021-05-03 14:20:18'),
	(16, '196412311985031000', 'Kasman,S.Pd', NULL, '1964-12-12', 'Pria', NULL, NULL, NULL, NULL, NULL, NULL, 'PNS', 0, NULL, '2021-05-03 14:20:19', '2021-05-03 14:20:19'),
	(17, '196712311993111000', 'Abdul Latif, S.Sos', NULL, '1967-12-12', 'Pria', NULL, NULL, NULL, NULL, NULL, NULL, 'PNS', 0, NULL, '2021-05-03 14:20:19', '2021-05-03 14:20:19'),
	(18, '197312262001121000', 'Monasman, ST', 'uuu', '1973-12-26', 'Pria', 'uuu', 'Islam', 'A', NULL, NULL, NULL, 'PNS', 0, 1, '2021-05-03 14:20:19', '2021-10-28 12:02:52'),
	(19, '197605252001122000', 'Nahrida, ST', NULL, '1976-05-25', 'Wanita', NULL, NULL, NULL, NULL, NULL, NULL, 'PNS', 0, NULL, '2021-05-03 14:20:19', '2021-05-03 14:20:19'),
	(20, '196508081994032000', 'Tina Sidupa, S.E', NULL, '1965-08-08', 'Wanita', NULL, NULL, NULL, NULL, NULL, NULL, 'PNS', 0, NULL, '2021-05-03 14:20:19', '2021-05-03 14:20:19'),
	(21, '196705271994031000', 'La Ode Amirul Mukminin, A.Md', NULL, '1967-05-27', 'Pria', NULL, NULL, NULL, NULL, NULL, NULL, 'PNS', 0, NULL, '2021-05-03 14:20:19', '2021-05-03 14:20:19'),
	(22, '196602182007012000', 'Sachiko Isamu, SE', NULL, '1966-02-18', 'Wanita', NULL, NULL, NULL, NULL, NULL, NULL, 'PNS', 0, NULL, '2021-05-03 14:20:19', '2021-05-03 14:20:19'),
	(23, '197301012006041000', 'Akra Sipa,ST', NULL, '1973-01-01', 'Pria', NULL, NULL, NULL, NULL, NULL, NULL, 'PNS', 0, NULL, '2021-05-03 14:20:19', '2021-05-03 14:20:19'),
	(24, '198011212005022000', 'Veradela Nandha Tiara, ST', NULL, '1980-11-21', 'Wanita', NULL, NULL, NULL, NULL, NULL, NULL, 'PNS', 0, NULL, '2021-05-03 14:20:19', '2021-05-03 14:20:19'),
	(25, '197006062005022000', 'Halimah Saleh Putri,SH', NULL, '1970-06-03', 'Wanita', NULL, NULL, NULL, NULL, NULL, NULL, 'PNS', 0, NULL, '2021-05-03 14:20:19', '2021-05-03 14:20:19'),
	(26, '197809272002121000', 'Adyanto Halyawan, S.E', NULL, '1978-09-27', 'Pria', NULL, NULL, NULL, NULL, NULL, NULL, 'PNS', 0, NULL, '2021-05-03 14:20:19', '2021-05-03 14:20:19'),
	(27, '197709102006042000', 'Wahyuni, S.Si', NULL, '1977-09-10', 'Wanita', NULL, NULL, NULL, NULL, NULL, NULL, 'PNS', 0, NULL, '2021-05-03 14:20:19', '2021-05-03 14:20:19'),
	(28, '198305062011011000', 'Muh. Yasser Tuwu, SE., M.Sc', NULL, '1983-05-06', 'Pria', NULL, NULL, NULL, NULL, NULL, NULL, 'PNS', 0, NULL, '2021-05-03 14:20:19', '2021-05-03 14:20:19'),
	(29, '198404062011011000', 'La Ode Muh. Fitrah Arsyad, SE. M. Si', NULL, '1984-04-06', 'Pria', NULL, NULL, NULL, NULL, NULL, NULL, 'PNS', 0, NULL, '2021-05-03 14:20:19', '2021-05-03 14:20:19'),
	(30, '196410101988011000', 'Haryanto', NULL, '1964-10-10', 'Pria', NULL, NULL, NULL, NULL, NULL, NULL, 'PNS', 0, NULL, '2021-05-03 14:20:19', '2021-05-03 14:20:19'),
	(31, '197009181996031000', 'Moh. Iskandar Azis, A.Md', NULL, '1970-09-18', 'Pria', NULL, NULL, NULL, NULL, NULL, NULL, 'PNS', 0, NULL, '2021-05-03 14:20:20', '2021-05-03 14:20:20'),
	(32, '198205212006041000', 'Kemal Jusra, S.Si, M.Si', NULL, '1982-05-21', 'Pria', NULL, NULL, NULL, NULL, NULL, NULL, 'PNS', 0, NULL, '2021-05-03 14:20:20', '2021-05-03 14:20:20'),
	(33, '196812311994031000', 'Khaidir, S.Si', NULL, '1968-12-31', 'Pria', NULL, NULL, NULL, NULL, NULL, NULL, 'PNS', 0, NULL, '2021-05-03 14:20:20', '2021-05-03 14:20:20'),
	(34, '198011112010012000', 'Rosmaidar HS S.Sos', NULL, '1980-11-14', 'Wanita', NULL, NULL, NULL, NULL, NULL, NULL, 'PNS', 0, NULL, '2021-05-03 14:20:20', '2021-05-03 14:20:20'),
	(35, '197809212010011000', 'Oon Sulfikar,SH.MM', NULL, '1978-09-21', 'Pria', NULL, NULL, NULL, NULL, NULL, NULL, 'PNS', 0, NULL, '2021-05-03 14:20:20', '2021-05-03 14:20:20'),
	(36, '197810052008012000', 'Siti Nurhanti, S.Pi', NULL, '1978-10-05', 'Wanita', NULL, NULL, NULL, NULL, NULL, NULL, 'PNS', 0, NULL, '2021-05-03 14:20:20', '2021-05-03 14:20:20'),
	(37, '198408112010012000', 'Andi Zakiah Wahidah, ST. M.Si', NULL, '1984-08-11', 'Wanita', NULL, NULL, NULL, NULL, NULL, NULL, 'PNS', 0, NULL, '2021-05-03 14:20:20', '2021-05-03 14:20:20'),
	(38, '198411072008032000', 'Anisyah Ringgasa, S.Si', NULL, '1984-11-07', 'Wanita', NULL, NULL, NULL, NULL, NULL, NULL, 'PNS', 0, NULL, '2021-05-03 14:20:20', '2021-05-03 14:20:20'),
	(39, '197803162008011000', 'Hasmindar, S.P', NULL, '1978-03-16', 'Pria', NULL, NULL, NULL, NULL, NULL, NULL, 'PNS', 0, NULL, '2021-05-03 14:20:20', '2021-05-03 14:20:20'),
	(40, '198106202010011000', 'Andi Puhu, S.Pd', NULL, '1981-06-20', 'Pria', NULL, NULL, NULL, NULL, NULL, NULL, 'PNS', 0, NULL, '2021-05-03 14:20:20', '2021-05-03 14:20:20'),
	(41, '19857142006021000', 'La Ode Muh. Qamal Jogugu S, STP, ME', NULL, '1985-07-14', 'Pria', NULL, NULL, NULL, NULL, NULL, NULL, 'PNS', 0, NULL, '2021-05-03 14:20:20', '2021-05-03 14:20:20'),
	(42, '197312152009011000', 'Bachar, ST', NULL, '1973-12-15', 'Pria', NULL, NULL, NULL, NULL, NULL, NULL, 'PNS', 0, NULL, '2021-05-03 14:20:20', '2021-05-03 14:20:20'),
	(43, '197902222009012000', 'Ariskha Sazriany HS, ST', NULL, '1979-02-22', 'Wanita', NULL, NULL, NULL, NULL, NULL, NULL, 'PNS', 0, NULL, '2021-05-03 14:20:20', '2021-05-03 14:20:20'),
	(44, '198111022009012000', 'Indri, S. Pi', NULL, '1981-11-02', 'Wanita', NULL, NULL, NULL, NULL, NULL, NULL, 'PNS', 0, NULL, '2021-05-03 14:20:20', '2021-05-03 14:20:20'),
	(45, '197905022009042000', 'Wa Ode Hardiana, SE', NULL, '1979-05-02', 'Wanita', NULL, NULL, NULL, NULL, NULL, NULL, 'PNS', 0, NULL, '2021-05-03 14:20:20', '2021-05-03 14:20:20'),
	(46, '198304182009042000', 'Wa Ode Hasniati, S. Si', NULL, '1983-04-18', 'Wanita', NULL, NULL, NULL, NULL, NULL, NULL, 'PNS', 0, NULL, '2021-05-03 14:20:20', '2021-05-03 14:20:20'),
	(47, '198510222010012000', 'Henny Savitri Oktaviana, S. Si, M.Si', NULL, '1985-10-22', 'Wanita', NULL, NULL, NULL, NULL, NULL, NULL, 'PNS', 0, NULL, '2021-05-03 14:20:21', '2021-05-03 14:20:21'),
	(48, '197805152010011000', 'Mardan, SE', NULL, '1978-05-15', 'Pria', NULL, NULL, NULL, NULL, NULL, NULL, 'PNS', 0, NULL, '2021-05-03 14:20:21', '2021-05-03 14:20:21'),
	(49, '198301122011011000', 'Ikbal Hidayat, S.T', NULL, '1983-01-12', 'Pria', NULL, NULL, NULL, NULL, NULL, NULL, 'PNS', 0, NULL, '2021-05-03 14:20:21', '2021-05-03 14:20:21'),
	(50, '198203102010012000', 'Jumarlian Santi Rafiun,SP', NULL, '1982-03-10', 'Wanita', NULL, NULL, NULL, NULL, NULL, NULL, 'PNS', 0, NULL, '2021-05-03 14:20:21', '2021-05-03 14:20:21'),
	(51, '198402152011012000', 'Febriani Arumi, ST', NULL, '1984-02-15', 'Wanita', NULL, NULL, NULL, NULL, NULL, NULL, 'PNS', 0, NULL, '2021-05-03 14:20:21', '2021-05-03 14:20:21'),
	(52, '198209222011012000', 'Sitti Aisyah, SE', NULL, '1982-09-22', 'Wanita', NULL, NULL, NULL, NULL, NULL, NULL, 'PNS', 0, NULL, '2021-05-03 14:20:21', '2021-05-03 14:20:21'),
	(53, '196411021986032000', 'Suryamin', NULL, '1964-11-02', 'Wanita', NULL, NULL, NULL, NULL, NULL, NULL, 'PNS', 0, NULL, '2021-05-03 14:20:21', '2021-05-03 14:20:21'),
	(54, '196310111985031000', 'Hamzah', NULL, '1963-10-11', 'Pria', NULL, NULL, NULL, NULL, NULL, NULL, 'PNS', 0, NULL, '2021-05-03 14:20:21', '2021-05-03 14:20:21'),
	(55, '197212122007012000', 'Indriyani Sudibyo,S.Sos', NULL, '1972-12-12', 'Wanita', NULL, NULL, NULL, NULL, NULL, NULL, 'PNS', 0, NULL, '2021-05-03 14:20:21', '2021-05-03 14:20:21'),
	(56, '198103172010012000', 'Windi Dianovita, ST', NULL, '1981-03-17', 'Wanita', NULL, NULL, NULL, NULL, NULL, NULL, 'PNS', 0, NULL, '2021-05-03 14:20:21', '2021-05-03 14:20:21'),
	(57, '198304192010012000', 'Sulistiany Tamrin, ST', NULL, '1983-04-19', 'Wanita', NULL, NULL, NULL, NULL, NULL, NULL, 'PNS', 0, NULL, '2021-05-03 14:20:21', '2021-05-03 14:20:21'),
	(58, '198705132011012000', 'Dian Sulistyowati,S.Kom,M.E', NULL, '1987-05-13', 'Wanita', NULL, NULL, NULL, NULL, NULL, NULL, 'PNS', 0, NULL, '2021-05-03 14:20:21', '2021-05-03 14:20:21'),
	(59, '198503262011012000', 'Imayanti Suhardin, SE', NULL, '1985-03-26', 'Wanita', NULL, NULL, NULL, NULL, NULL, NULL, 'PNS', 0, NULL, '2021-05-03 14:20:21', '2021-05-03 14:20:21'),
	(60, '198010132009011000', 'Dian Hidayah S,Sos', NULL, '1980-10-13', 'Pria', NULL, NULL, NULL, NULL, NULL, NULL, 'PNS', 0, NULL, '2021-05-03 14:20:21', '2021-05-03 14:20:21'),
	(61, '197911112009011000', 'La Ode Muhammad Ihsan Abdi, SP', NULL, '1979-11-11', 'Pria', NULL, NULL, NULL, NULL, NULL, NULL, 'PNS', 0, NULL, '2021-05-03 14:20:21', '2021-05-03 14:20:21'),
	(62, '196608192006042000', 'Sitti Salma, ST, M.Si', NULL, '1966-08-19', 'Wanita', NULL, NULL, NULL, NULL, NULL, NULL, 'PNS', 0, NULL, '2021-05-03 14:20:22', '2021-05-03 14:20:22'),
	(63, '196306101994031000', 'Asrul Suaeb', NULL, '1963-06-10', 'Pria', NULL, NULL, NULL, NULL, NULL, NULL, 'PNS', 0, NULL, '2021-05-03 14:20:22', '2021-05-03 14:20:22'),
	(64, '198509252009012000', 'Sitti Wahyuni, S.TP', NULL, '1985-09-24', 'Wanita', NULL, NULL, NULL, NULL, NULL, NULL, 'PNS', 0, NULL, '2021-05-03 14:20:22', '2021-05-03 14:20:22'),
	(65, '197806032005021000', 'Mauliddun, SH', NULL, '1978-06-03', 'Pria', NULL, NULL, NULL, NULL, NULL, NULL, 'PNS', 0, NULL, '2021-05-03 14:20:22', '2021-05-03 14:20:22'),
	(66, '197512082007012000', 'Jusanti, S.Sos', NULL, '1975-12-08', 'Wanita', NULL, NULL, NULL, NULL, NULL, NULL, 'PNS', 0, NULL, '2021-05-03 14:20:22', '2021-05-03 14:20:22'),
	(67, '198412062014032000', 'Wa Ode Kasmila, S. Si, M.Si', NULL, '1984-12-06', 'Wanita', NULL, NULL, NULL, NULL, NULL, NULL, 'PNS', 0, NULL, '2021-05-03 14:20:22', '2021-05-03 14:20:22'),
	(68, '198702202010012000', 'Sufiati, A. Md,SE', NULL, '1987-02-20', 'Wanita', NULL, NULL, NULL, NULL, NULL, NULL, 'PNS', 0, NULL, '2021-05-03 14:20:22', '2021-05-03 14:20:22'),
	(69, '197710262007122000', 'Reniati, S. Sos', NULL, '1977-10-26', 'Wanita', NULL, NULL, NULL, NULL, NULL, NULL, 'PNS', 0, NULL, '2021-05-03 14:20:22', '2021-05-03 14:20:22'),
	(70, '196707072014082000', 'Sitti Asniah, SE', NULL, '1967-07-07', 'Wanita', NULL, NULL, NULL, NULL, NULL, NULL, 'PNS', 0, NULL, '2021-05-03 14:20:22', '2021-05-03 14:20:22'),
	(71, '197912212014082000', 'Mulyani Abuhari, SE', NULL, '1979-12-21', 'Wanita', NULL, NULL, NULL, NULL, NULL, NULL, 'PNS', 0, NULL, '2021-05-03 14:20:22', '2021-05-03 14:20:22'),
	(72, '198510032010011000', 'Amir Pae, A.Md,SE', NULL, '1985-10-03', 'Pria', NULL, NULL, NULL, NULL, NULL, NULL, 'PNS', 0, NULL, '2021-05-03 14:20:22', '2021-05-03 14:20:22'),
	(73, '197906112007011000', 'E m i, S.Si', NULL, '1979-06-11', 'Pria', NULL, NULL, NULL, NULL, NULL, NULL, 'PNS', 0, NULL, '2021-05-03 14:20:22', '2021-05-03 14:20:22'),
	(74, '196904012008011000', 'Basri, SH', NULL, '1969-04-01', 'Pria', NULL, NULL, NULL, NULL, NULL, NULL, 'PNS', 0, NULL, '2021-05-03 14:20:22', '2021-05-03 14:20:22'),
	(75, '198003112009011000', 'Agus, S.Si', NULL, '1980-03-11', 'Pria', NULL, NULL, NULL, NULL, NULL, NULL, 'PNS', 0, NULL, '2021-05-03 14:20:22', '2021-05-03 14:20:22'),
	(76, '196708261989032000', 'Nurlina Malik', NULL, '1967-12-12', 'Wanita', NULL, NULL, NULL, NULL, NULL, NULL, 'PNS', 0, NULL, '2021-05-03 14:20:22', '2021-05-03 14:20:22'),
	(77, '196601101991031000', 'Sapiuddin', NULL, '1966-01-10', 'Pria', NULL, NULL, NULL, NULL, NULL, NULL, 'PNS', 0, NULL, '2021-05-03 14:20:22', '2021-05-03 14:20:22'),
	(78, '197503072008012000', 'Bahrain, SE', NULL, '1975-03-07', 'Wanita', NULL, NULL, NULL, NULL, NULL, NULL, 'PNS', 0, NULL, '2021-05-03 14:20:23', '2021-05-03 14:20:23'),
	(79, '198504262008011000', 'La Ode Muh. Ikbal Beau,S.Sos', NULL, '1985-04-06', 'Pria', NULL, NULL, NULL, NULL, NULL, NULL, 'PNS', 0, NULL, '2021-05-03 14:20:23', '2021-05-03 14:20:23'),
	(80, '197909172009011000', 'Muhammad Zailani Sanusi, S.E', NULL, '1979-09-17', 'Pria', NULL, NULL, NULL, NULL, NULL, NULL, 'PNS', 0, NULL, '2021-05-03 14:20:23', '2021-05-03 14:20:23'),
	(81, '198407022014081000', 'Samsuddin,SH', NULL, '1984-07-02', 'Pria', NULL, NULL, NULL, NULL, NULL, NULL, 'PNS', 0, NULL, '2021-05-03 14:20:23', '2021-05-03 14:20:23'),
	(82, '198910182015022000', 'Erika Ayu Christanti, A.Md', NULL, '1989-10-18', 'Wanita', NULL, NULL, NULL, NULL, NULL, NULL, 'PNS', 0, NULL, '2021-05-03 14:20:23', '2021-05-03 14:20:23'),
	(83, '197809022014071000', 'Asjan Husain,ST', NULL, '1978-09-02', 'Pria', NULL, NULL, NULL, NULL, NULL, NULL, 'PNS', 0, NULL, '2021-05-03 14:20:23', '2021-05-03 14:20:23'),
	(84, '198301052009012000', 'Hamira, A. Md. Kom', NULL, '1983-01-05', 'Wanita', NULL, NULL, NULL, NULL, NULL, NULL, 'PNS', 0, NULL, '2021-05-03 14:20:23', '2021-05-03 14:20:23'),
	(85, '197409042014062000', 'Riny astuti, S. Sos', NULL, '1974-09-04', 'Wanita', NULL, NULL, NULL, NULL, NULL, NULL, 'PNS', 0, NULL, '2021-05-03 14:20:23', '2021-05-03 14:20:23'),
	(86, '198912272015021000', 'Mardiono, A.Md', NULL, '1989-12-27', 'Pria', NULL, NULL, NULL, NULL, NULL, NULL, 'PNS', 0, NULL, '2021-05-03 14:20:23', '2021-05-03 14:20:23'),
	(87, '196412312006041000', 'Asikin Jamal', NULL, '1964-12-12', 'Pria', NULL, NULL, NULL, NULL, NULL, NULL, 'PNS', 0, NULL, '2021-05-03 14:20:23', '2021-05-03 14:20:23'),
	(88, '196312312007011000', 'La Ode Hafilu', NULL, '1963-12-12', 'Pria', NULL, NULL, NULL, NULL, NULL, NULL, 'PNS', 0, NULL, '2021-05-03 14:20:23', '2021-05-03 14:20:23'),
	(89, '198302142008011000', 'Wahyuddin Amir Manab', NULL, '1983-02-14', 'Pria', NULL, NULL, NULL, NULL, NULL, NULL, 'PNS', 0, NULL, '2021-05-03 14:20:23', '2021-05-03 14:20:23'),
	(90, '198201102009012000', 'Misna Haseng', NULL, '1982-01-10', 'Wanita', NULL, NULL, NULL, NULL, NULL, NULL, 'PNS', 0, NULL, '2021-05-03 14:20:23', '2021-05-03 14:20:23'),
	(91, '197908272011011000', 'Agus Herdianto, A.Md', NULL, '1979-08-27', 'Pria', NULL, NULL, NULL, NULL, NULL, NULL, 'PNS', 0, NULL, '2021-05-03 14:20:23', '2021-05-03 14:20:23'),
	(92, '198306192010011000', 'Munandar ', NULL, '1983-06-19', 'Pria', NULL, NULL, NULL, NULL, NULL, NULL, 'PNS', 0, NULL, '2021-05-03 14:20:23', '2021-05-03 14:20:23'),
	(93, '197412022014081000', 'Faisal', 'xxx', '1974-12-02', 'Pria', 'xx', 'Islam', NULL, NULL, NULL, NULL, 'PNS', 0, 1, '2021-05-03 14:20:24', '2021-10-29 10:30:57'),
	(97, '197412022014081002', 'ADRI SAPUTRA IBRAHIM', 'KENDARI', '1991-10-16', 'Pria', 'KENDARI', 'Islam', NULL, NULL, '1635489348.png', NULL, 'PNS', 0, 1, '2021-10-29 14:30:33', '2021-10-29 14:35:48');
/*!40000 ALTER TABLE `pegawai_tbl` ENABLE KEYS */;

-- membuang struktur untuk table db_laravel.pengaturan_tbl
CREATE TABLE IF NOT EXISTS `pengaturan_tbl` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama_aplikasi` varchar(200) DEFAULT NULL,
  `singkatan_nama_aplikasi` varchar(200) DEFAULT NULL,
  `logo_kecil` varchar(100) DEFAULT NULL,
  `logo_besar` varchar(100) DEFAULT NULL,
  `background_login` varchar(100) DEFAULT NULL,
  `background_sidebar` varchar(100) DEFAULT NULL,
  `layout` varchar(100) DEFAULT NULL,
  `skin` varchar(100) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 ROW_FORMAT=DYNAMIC;

-- Membuang data untuk tabel db_laravel.pengaturan_tbl: ~0 rows (lebih kurang)
/*!40000 ALTER TABLE `pengaturan_tbl` DISABLE KEYS */;
INSERT INTO `pengaturan_tbl` (`id`, `nama_aplikasi`, `singkatan_nama_aplikasi`, `logo_kecil`, `logo_besar`, `background_login`, `background_sidebar`, `layout`, `skin`, `user_id`, `created_at`, `updated_at`) VALUES
	(1, 'CORE LARAVEL', 'CORE', '16354773231.png', '16354769112.png', '16354882883.jpg', NULL, 'default', 'skin-purple-light', 1, '2021-10-29 10:58:27', '2021-10-29 14:18:08');
/*!40000 ALTER TABLE `pengaturan_tbl` ENABLE KEYS */;

-- membuang struktur untuk table db_laravel.personal_access_tokens
CREATE TABLE IF NOT EXISTS `personal_access_tokens` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) unsigned NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Membuang data untuk tabel db_laravel.personal_access_tokens: ~0 rows (lebih kurang)
/*!40000 ALTER TABLE `personal_access_tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `personal_access_tokens` ENABLE KEYS */;

-- membuang struktur untuk table db_laravel.sessions
CREATE TABLE IF NOT EXISTS `sessions` (
  `id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) unsigned DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payload` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `sessions_user_id_index` (`user_id`),
  KEY `sessions_last_activity_index` (`last_activity`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Membuang data untuk tabel db_laravel.sessions: ~3 rows (lebih kurang)
/*!40000 ALTER TABLE `sessions` DISABLE KEYS */;
INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
	('6M3V5Q1K9DE0DV1Y1YkVRSvF0Nczyz99JNzeMjRv', 1, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/95.0.4638.54 Safari/537.36', 'YTo1OntzOjY6Il9mbGFzaCI7YToyOntzOjM6Im5ldyI7YTowOnt9czozOiJvbGQiO2E6MDp7fX1zOjY6Il90b2tlbiI7czo0MDoiS2Y3Q2VyUkNlbFNVeTdQajBReGR4bmc1b3hwbXlHWHVQdFExR1Z5QiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDQ6Imh0dHA6Ly9sb2NhbGhvc3QvY29yZS1sYXJhdmVsL3BlZ2F3YWk/cGFnZT00Ijt9czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6MTtzOjE3OiJwYXNzd29yZF9oYXNoX3dlYiI7czo2MDoiJDJ5JDEwJFJjLmVDdWQ1SVlnYUpBZUZJYWVUMk9RTTlMNE1pcWRWa1YuLnAxd2JRdm5QeHhHNkw2N215Ijt9', 1635489406),
	('a7qL9XqGoi7YuU9ryNOvSdUDSi6xlOqgBvhucoMj', 482, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/95.0.4638.54 Safari/537.36', 'YTo1OntzOjY6Il9mbGFzaCI7YToyOntzOjM6Im5ldyI7YTowOnt9czozOiJvbGQiO2E6MDp7fX1zOjY6Il90b2tlbiI7czo0MDoiMjJmdUsxNzZFWkR0VXhobVVwUnRSRVVBQUZKNGd2T2ZIUUZSQ201YSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzM6Imh0dHA6Ly9sb2NhbGhvc3QvY29yZS1sYXJhdmVsL2xvZyI7fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjQ4MjtzOjE3OiJwYXNzd29yZF9oYXNoX3dlYiI7czo2MDoiJDJ5JDEwJEo2amplRU5IMDBFWUxFc1RVVDNzYS54VHVKQ0M3MkhWQjBvWVpFRWU4TXdaV0pXZFVqUmp1Ijt9', 1635474679),
	('lkVBRUHIRn8hKB9tG7zEDQ5hGZUXK7qheAr10BTo', NULL, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/95.0.4638.54 Safari/537.36', 'YTozOntzOjY6Il9mbGFzaCI7YToyOntzOjM6Im5ldyI7YTowOnt9czozOiJvbGQiO2E6MDp7fX1zOjY6Il90b2tlbiI7czo0MDoiYlhuNEd4TDUzbHFpUXlXZ2ZLZng1enE5RnpSNHNqeVRYS1NWRXRkcyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzU6Imh0dHA6Ly9sb2NhbGhvc3QvY29yZS1sYXJhdmVsL2xvZ2luIjt9fQ==', 1635479187);
/*!40000 ALTER TABLE `sessions` ENABLE KEYS */;

-- membuang struktur untuk table db_laravel.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `group` int(11) DEFAULT NULL,
  `bidang_id` int(11) DEFAULT NULL,
  `foto` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=483 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Membuang data untuk tabel db_laravel.users: ~1 rows (lebih kurang)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `remember_token`, `group`, `bidang_id`, `foto`, `status`, `created_at`, `updated_at`) VALUES
	(1, 'administrator', 'administrator@gmail.com', NULL, '$2y$10$Rc.eCud5IYgaJAeFIaeT2OQM9L4MiqdVkV..p1wbQvnPxxG6L67my', NULL, NULL, NULL, 1, NULL, '1635394631.jpg', 0, '2021-04-05 14:20:00', '2021-10-28 12:17:11'),
	(482, 'operator', 'operator@gmail.com', NULL, '$2y$10$RFfcHMYYV/VNaeZZXsZiBuYURin.uYGD9BMBDfhpbxxI./GOWqf3.', NULL, NULL, NULL, 2, NULL, '1635474811.jpg', 0, '2021-10-28 12:09:14', '2021-10-29 11:26:56');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
