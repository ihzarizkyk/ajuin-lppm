-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Waktu pembuatan: 08 Okt 2021 pada 08.53
-- Versi server: 10.4.8-MariaDB
-- Versi PHP: 7.2.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_ajuin`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `accesses`
--

CREATE TABLE `accesses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `bentuks`
--

CREATE TABLE `bentuks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `bentuk_id` int(11) NOT NULL,
  `bentuk_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bentuk_kegiatan_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `bentuks`
--

INSERT INTO `bentuks` (`id`, `bentuk_id`, `bentuk_type`, `bentuk_kegiatan_id`, `created_at`, `updated_at`) VALUES
(3, 18, 'App\\Models\\Kerjasama', '1', NULL, NULL),
(4, 18, 'App\\Models\\Kerjasama', '2', NULL, NULL),
(5, 19, 'App\\Models\\Kerjasama', '3', NULL, NULL),
(6, 19, 'App\\Models\\Kerjasama', '7', NULL, NULL),
(12, 1, 'App\\Models\\Kerjasama', '2', NULL, NULL),
(13, 1, 'App\\Models\\Kerjasama', '3', NULL, NULL),
(14, 2, 'App\\Models\\Kerjasama', '3', NULL, NULL),
(15, 17, 'App\\Models\\Kerjasama', '3', NULL, NULL),
(16, 21, 'App\\Models\\Kerjasama', '4', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `bentuk_kegiatan`
--

CREATE TABLE `bentuk_kegiatan` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `kerjasama_id` bigint(20) UNSIGNED DEFAULT NULL,
  `sasaran_id` bigint(20) UNSIGNED DEFAULT NULL,
  `indikator_id` bigint(20) UNSIGNED DEFAULT NULL,
  `master_kegiatan_id` bigint(20) UNSIGNED DEFAULT NULL,
  `keterangan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `luaran` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `bentuk_kegiatan`
--

INSERT INTO `bentuk_kegiatan` (`id`, `nama`, `created_at`, `updated_at`, `kerjasama_id`, `sasaran_id`, `indikator_id`, `master_kegiatan_id`, `keterangan`, `luaran`) VALUES
(2, 'Magang/ Praktik Kerja-Kampus Merdeka', NULL, NULL, NULL, NULL, NULL, NULL, '-', NULL),
(3, 'Asistensi Mengajar di Satuan Pendidikan-Kampus Merdeka', NULL, NULL, NULL, NULL, NULL, NULL, '-', NULL),
(4, 'Penelitian/Riset-Kampus Merdeka', NULL, NULL, NULL, NULL, NULL, NULL, '-', NULL),
(5, 'Membangun Desa/KKN Tematik-Kampus Merdeka', NULL, NULL, NULL, NULL, NULL, NULL, '-', NULL),
(6, 'Studi/Proyek Independen-Kampus Merdeka', NULL, NULL, NULL, NULL, NULL, NULL, '-', NULL),
(7, 'Kegiatan Wirausaha-Kampus Merdeka', NULL, NULL, NULL, NULL, NULL, NULL, '-', NULL),
(8, 'Proyek Kemanusiaan-Kampus Merdeka', NULL, NULL, NULL, NULL, NULL, NULL, '-', NULL),
(9, 'Gelar Bersama (Joint Degree)', NULL, NULL, NULL, NULL, NULL, NULL, '-', NULL),
(10, 'Gelar Ganda (Dual Degree)', NULL, NULL, NULL, NULL, NULL, NULL, '-', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `detail_sasaran_kinerja`
--

CREATE TABLE `detail_sasaran_kinerja` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `sasaran_kinerja_id` int(11) DEFAULT NULL,
  `volume` int(11) DEFAULT NULL,
  `satuan` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `dokumen`
--

CREATE TABLE `dokumen` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `instansi`
--

CREATE TABLE `instansi` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `kerjasama`
--

CREATE TABLE `kerjasama` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `perihal_kerjasama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `unit_pelaksana` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `rencana` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `aktif` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lama_kerjasama` timestamp NULL DEFAULT NULL,
  `anggaran` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `file` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL,
  `users_id` bigint(20) UNSIGNED NOT NULL,
  `dokumen_id` bigint(20) UNSIGNED DEFAULT NULL,
  `awal_kerjasama` date DEFAULT NULL,
  `akhir_kerjasama` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `kerjasama`
--

INSERT INTO `kerjasama` (`id`, `perihal_kerjasama`, `unit_pelaksana`, `deskripsi`, `rencana`, `aktif`, `lama_kerjasama`, `anggaran`, `created_at`, `updated_at`, `file`, `status`, `users_id`, `dokumen_id`, `awal_kerjasama`, `akhir_kerjasama`) VALUES
(1, 'lorem ipsum lorem ipsumlorem ipsumlorem ipsumlorem ipsum', 'Pengusul', 'lorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsum', 'lorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsum', NULL, '2021-10-02 22:28:21', NULL, '2021-09-09 00:17:17', '2021-10-02 22:28:21', '1631171837_Surat Rekomendasi Peserta LeadID.pdf', 0, 1, NULL, '0000-00-00', NULL),
(2, 'lorem ipsmlorem ipsmlorem ipsmlorem ipsmlorem ipsm', 'lorem ipsmlorem ipsmlorem ipsmlorem ipsm', 'lorem ipsmlorem ipsmlorem ipsmlorem ipsmlorem ipsm', 'lorem ipsmlorem ipsmlorem ipsmlorem ipsmlorem ipsm', NULL, '2021-10-02 22:28:45', NULL, '2021-09-09 01:21:28', '2021-10-02 22:28:45', '1631175688_Surat Rekomendasi Peserta LeadID.pdf', 0, 1, NULL, '0000-00-00', NULL),
(3, 'lorem ipsmlorem ipsmlorem ipsmlorem ipsm', 'Pengusul', 'lorem ipsmlorem ipsmlorem ipsmlorem ipsmlorem ipsm', 'lorem ipsmlorem ipsmlorem ipsmlorem ipsmlorem ipsm', NULL, '2021-09-09 01:48:28', NULL, '2021-09-09 01:48:28', '2021-09-09 01:48:28', '1631177308_Surat Rekomendasi Peserta LeadID.pdf', 0, 1, NULL, '0000-00-00', NULL),
(4, 'Perihal Perihal Perihal', 'pengusul', 'lorem ipsum lorem ipsumlorem ipsumlorem ipsum', 'lorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsum', NULL, '2021-09-30 18:28:31', NULL, '2021-09-30 18:28:31', '2021-09-30 18:28:31', '1633051711_keyboard-shortcuts-linux.pdf', 0, 1, NULL, '0000-00-00', NULL),
(5, 'Perihal Perihal Perihal', 'pengusul', 'lorem ipsum lorem ipsumlorem ipsumlorem ipsum', 'lorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsum', NULL, '2021-09-30 18:29:43', NULL, '2021-09-30 18:29:43', '2021-09-30 18:29:43', '1633051783_keyboard-shortcuts-linux.pdf', 0, 1, NULL, '0000-00-00', NULL),
(6, 'Perihal Perihal Perihal', 'pengusul', 'lorem ipsum lorem ipsumlorem ipsumlorem ipsum', 'lorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsum', NULL, '2021-09-30 18:31:10', NULL, '2021-09-30 18:31:10', '2021-09-30 18:31:10', '1633051870_keyboard-shortcuts-linux.pdf', 0, 1, NULL, '0000-00-00', NULL),
(7, 'Perihal Perihal Perihal', 'pengusul', 'lorem ipsum lorem ipsumlorem ipsumlorem ipsum', 'lorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsum', NULL, '2021-09-30 18:31:46', NULL, '2021-09-30 18:31:46', '2021-09-30 18:31:46', '1633051906_keyboard-shortcuts-linux.pdf', 0, 1, NULL, '0000-00-00', NULL),
(8, 'Perihal Perihal Perihal', 'pengusul', 'lorem ipsum lorem ipsumlorem ipsumlorem ipsum', 'lorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsum', NULL, '2021-09-30 18:33:23', NULL, '2021-09-30 18:33:23', '2021-09-30 18:33:23', '1633052003_keyboard-shortcuts-linux.pdf', 0, 1, NULL, '0000-00-00', NULL),
(9, 'Perihal Perihal Perihal', 'pengusul', 'lorem ipsum lorem ipsumlorem ipsumlorem ipsum', 'lorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsum', NULL, '2021-09-30 18:35:23', NULL, '2021-09-30 18:35:23', '2021-09-30 18:35:23', '1633052123_keyboard-shortcuts-linux.pdf', 0, 1, NULL, '0000-00-00', NULL),
(10, 'Perihal Perihal Perihal', 'pengusul', 'lorem ipsum lorem ipsumlorem ipsumlorem ipsum', 'lorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsum', NULL, '2021-09-30 18:35:44', NULL, '2021-09-30 18:35:44', '2021-09-30 18:35:44', '1633052144_keyboard-shortcuts-linux.pdf', 0, 1, NULL, '0000-00-00', NULL),
(11, 'Perihal Perihal Perihal', 'pengusul', 'lorem ipsum lorem ipsumlorem ipsumlorem ipsum', 'lorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsum', NULL, '2021-09-30 19:25:02', NULL, '2021-09-30 19:25:02', '2021-09-30 19:25:02', '1633055102_keyboard-shortcuts-linux.pdf', 0, 1, NULL, '0000-00-00', NULL),
(12, 'Perihal Perihal Perihal', 'pengusul', 'lorem ipsum lorem ipsumlorem ipsumlorem ipsum', 'lorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsum', NULL, '2021-09-30 19:25:58', NULL, '2021-09-30 19:25:58', '2021-09-30 19:25:58', '1633055158_keyboard-shortcuts-linux.pdf', 0, 1, NULL, '0000-00-00', NULL),
(13, 'Perihal Perihal Perihal', 'pengusul', 'lorem ipsum lorem ipsumlorem ipsumlorem ipsum', 'lorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsum', NULL, '2021-09-30 19:27:52', NULL, '2021-09-30 19:27:52', '2021-09-30 19:27:52', '1633055272_keyboard-shortcuts-linux.pdf', 0, 1, NULL, '0000-00-00', NULL),
(14, 'Perihal Perihal Perihal', 'pengusul', 'lorem ipsum lorem ipsumlorem ipsumlorem ipsum', 'lorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsum', NULL, '2021-09-30 19:30:11', NULL, '2021-09-30 19:30:11', '2021-09-30 19:30:11', '1633055411_keyboard-shortcuts-linux.pdf', 0, 1, NULL, '0000-00-00', NULL),
(15, 'Perihal Perihal Perihal', 'pengusul', 'lorem ipsum lorem ipsumlorem ipsumlorem ipsum', 'lorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsum', NULL, '2021-09-30 19:31:45', NULL, '2021-09-30 19:31:45', '2021-09-30 19:31:45', '1633055505_keyboard-shortcuts-linux.pdf', 0, 1, NULL, '0000-00-00', NULL),
(16, 'Perihal Perihal Perihal', 'pengusul', 'lorem ipsum lorem ipsumlorem ipsumlorem ipsum', 'lorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsum', NULL, '2021-09-30 19:33:42', NULL, '2021-09-30 19:33:42', '2021-09-30 19:33:42', '1633055622_keyboard-shortcuts-linux.pdf', 0, 1, NULL, '0000-00-00', NULL),
(17, 'Perihal Perihal Perihal', 'pengusul', 'lorem ipsum lorem ipsumlorem ipsumlorem ipsum', 'lorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsum', NULL, '2021-10-02 22:29:47', NULL, '2021-09-30 19:39:05', '2021-10-02 22:29:47', '1633055945_keyboard-shortcuts-linux.pdf', 0, 1, NULL, '0000-00-00', NULL),
(18, 'Perihal 1 PerihalPerihal 1 PerihalPerihal 1 Perihal', 'pengusul', 'lorem ipsum loremlorem ipsum loremlorem ipsum loremlorem ipsum lorem', 'lorem ipsum loremlorem ipsum loremlorem ipsum loremlorem ipsum lorem', NULL, '2021-09-30 19:45:25', NULL, '2021-09-30 19:45:25', '2021-09-30 19:45:25', '1633056325_keyboard-shortcuts-linux.pdf', 0, 1, NULL, '0000-00-00', NULL),
(19, 'Perihal Kerjasama Kampus Merdeka Belajar', 'pengusul', 'lorem ipsum lorem ipsum lorem ipsum lorem ipsum', 'lorem ipsum lorem ipsum lorem ipsum lorem ipsum', NULL, '2021-10-02 22:26:59', NULL, '2021-10-01 19:51:29', '2021-10-02 22:26:59', '1633143089_keyboard-shortcuts-linux.pdf', 0, 1, NULL, '0000-00-00', NULL),
(21, 'Kerjasama Antar Fakultas ITTS', 'pengusul', 'lorem ipsum sit lorem ipsum sitlorem ipsum sitlorem ipsum sit', 'bla bla bla bla bla blabla bla blabla bla blabla bla bla', NULL, '2021-10-03 18:30:45', NULL, '2021-10-03 18:30:45', '2021-10-03 18:30:45', '1633311045_keyboard-shortcuts-linux.pdf', 0, 1, NULL, NULL, '2021-10-30');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kriteria_mitra`
--

CREATE TABLE `kriteria_mitra` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `klasifikasi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keterangan` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `kriteria_mitra`
--

INSERT INTO `kriteria_mitra` (`id`, `klasifikasi`, `keterangan`, `created_at`, `updated_at`) VALUES
(1, 'Perusahaan multinasional', 'Perusahaan yang beroperasi di lebih dari 1 (satu) negara', NULL, NULL),
(2, 'Perusahaan nasional berstandar tinggi', 'Perusahaan nasional yang sudah menjadi perusahaan publik (terbuka / Tbk) atau\r\nperusahaan dengan pendapatan setahun terakhir sejumlah lebih dari Rp\r\n100.000.000.000 (seratus miliar rupiah)', NULL, NULL),
(3, 'Perusahaan teknologi global', 'Perusahaan yang tercakup sebagai perusahaan teknologi global adalah yang\r\nterdaftar di Forbes Top 100 Digital Companies', NULL, NULL),
(4, 'Perusahaan rintisan (startup company) teknologi', '1 Perusahaan startup teknologi dalam negeri maupun luar negeri', NULL, NULL),
(5, 'Organisasi nirlaba kelas dunia', 'Organisasi nirlaba dalam negeri maupun luar negeri, harus mempunyai anggaran tahunan setahun terakhir\r\nsejumlah lebih dari Rp 50.000.000.000 (lima puluh milyar rupiah) atau sudah\r\nbekerja sama dengan mitra di tingkat nasional maupun internasional selama 5\r\ntahun terakhir', NULL, NULL),
(6, 'Institusi/ Organisasi multilateral', 'Institusi atau organisasi multilateral yang diakui Pemerintah Indonesia', NULL, NULL),
(7, 'Perguruan tinggi yang masuk dalam daftar QS100 berdasarkan ilmu', 'Program studi berkerja sama dengan perguruan tinggi yang termasuk dalam\r\ndaftar QS100 berdasarkan ilmu', NULL, NULL),
(8, 'Instansi pemerintah, BUMN dan/atau BUMD', 'Kementerian atau kelembagaan Pemerintah Indonesia, Badan Usaha Milik Negara dan Badan Usaha Milik Daerah', NULL, NULL),
(9, 'Rumah Sakit', 'Rumah sakit yang memiliki Izin Rumah Sakit Kelas A dan B yang diberikan oleh\r\nKementerian Kesehatan.', NULL, NULL),
(10, 'UMKM', 'UMKM harus mempunyai pendapatan setahun terakhir sejumlah lebih dari Rp\r\n30.000.000.000 (tiga puluh milyar rupiah)', NULL, NULL),
(11, 'Dunia Usaha', '-', NULL, NULL),
(12, 'Institusi Pendidikan', '-', NULL, NULL),
(13, 'Organisasi', '-', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2021_08_26_171836_create_permission_tables', 1),
(6, '2021_08_26_181127_add_role_user', 1),
(7, '2021_08_26_184715_create_kerjasama_table', 1),
(8, '2021_08_26_185115_create_kriteria_mitra_table', 1),
(9, '2021_08_26_185256_create_mitra_table', 1),
(10, '2021_08_26_185815_create_instansi_table', 1),
(11, '2021_08_26_190042_create_bentuk_kegiatan_table', 1),
(12, '2021_08_26_190320_add_kerjasama_id_to_mitra_table', 1),
(13, '2021_08_26_190426_add_kerjasama_id_to_bentuk_kegiatan_table', 1),
(14, '2021_08_26_190637_create_master_kegiatan_table', 1),
(15, '2021_08_26_205122_add_file_to_kerjasama', 1),
(16, '2021_08_26_205512_add_status_to_kerjasama', 1),
(17, '2021_08_26_210407_add_users_id_to_kerjasama', 1),
(18, '2021_08_26_211031_create_dokumen_table', 1),
(19, '2021_08_26_211219_add_dokumen_id_to_kerjasama', 1),
(20, '2021_08_26_234944_create_accesses_table', 1),
(21, '2021_09_13_235124_create_news_table', 2),
(22, '2021_09_16_022332_create_revisi_table', 2),
(23, '2021_09_19_091638_create_penggiat__kerjasama_table', 3),
(24, '2021_09_19_115224_create_table_status_kerjasama_table', 4),
(25, '2021_09_19_222858_create_sasaran_kinerja_table', 5),
(26, '2021_09_19_231730_create_detail_sasaran_kinerja_table', 5),
(27, '2021_10_01_020111_create_bentuk_table', 6),
(28, '2021_10_01_020111_create_bentuks_table', 7),
(29, '2021_10_04_012017_add_awal_kerjasama_to_kerjasama_table', 8),
(30, '2021_10_04_012050_add_akhir_kerjasama_to_kerjasama_table', 8);

-- --------------------------------------------------------

--
-- Struktur dari tabel `mitra`
--

CREATE TABLE `mitra` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kriteria_mitra_id` bigint(20) UNSIGNED DEFAULT NULL,
  `instansi_id` bigint(20) UNSIGNED DEFAULT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jabatan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `negara` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `kerjasama_id` bigint(20) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `mitra`
--

INSERT INTO `mitra` (`id`, `kriteria_mitra_id`, `instansi_id`, `nama`, `jabatan`, `negara`, `created_at`, `updated_at`, `kerjasama_id`) VALUES
(1, NULL, NULL, '\"1. PT BIO FARMA (PERSERO) 2. PT RISET NUSANTARA GENETIKA 3. RUMAH SAKIT PUSAT DR. KARIADI 4. RUMAH SAKIT NASIONAL DIPONEGORO\"', NULL, 'Indonesia', NULL, NULL, NULL),
(2, NULL, NULL, '\"Alma Mater Studiorum\"-University of Bologna', NULL, 'Italy', NULL, NULL, NULL),
(3, NULL, NULL, '	\r\n\"BADAN PENGEMBANGAN DAN PEMBERDAYAAN SUMBER DAYA MANUSIA KESEHATAN KEMENTERIAN KESEHATAN\"', NULL, 'Indonesia', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `news`
--

CREATE TABLE `news` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `penggiat_kerjasama`
--

CREATE TABLE `penggiat_kerjasama` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `penggiat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `instansi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jabatan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kerjasama_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `revisi`
--

CREATE TABLE `revisi` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `revisi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL,
  `kerjasama_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `sasaran_kinerja`
--

CREATE TABLE `sasaran_kinerja` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `sasaran` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `level` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `indikator` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `detail_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `sasaran_kinerja`
--

INSERT INTO `sasaran_kinerja` (`id`, `sasaran`, `level`, `indikator`, `detail_id`, `created_at`, `updated_at`) VALUES
(1, 'Meningkatnya program studi yang berkualitas', 'Prioritas Kementerian', 'IKK 2.5.2.1 Persentase Prodi bekerjasama dengan mitra', NULL, NULL, NULL),
(2, 'IKK 2.5.2.1 Persentase Prodi bekerjasama dengan mitra', 'Prioritas', 'Kesiapan kerja lulusan,Mahasiswa di luar kampus', NULL, NULL, NULL),
(3, 'Meningkatnya inovasi perguruan tinggi dalam rangka meningkatkan mutu pendidikan', 'Prioritas', 'Link and match PTS', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `status_kerjasama`
--

CREATE TABLE `status_kerjasama` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `keterangan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kadaluarsa` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `status_kerjasama`
--

INSERT INTO `status_kerjasama` (`id`, `status`, `keterangan`, `kadaluarsa`, `created_at`, `updated_at`) VALUES
(1, 'Aktif', '	Kerja sama tengah dilaksanakan, baik sebagian maupun secara keseluruhan', NULL, NULL, NULL),
(2, 'Kadaluarsa', 'Kerjasama telah habis masa berlakunya dan tidak atau belum dilakukan upaya perpanjangan', NULL, NULL, NULL),
(3, 'Dalam Perpanjang', '	Kerjsama telah habis masa berlakunya dan saat laporan disampaikan sedang dilakukan perpanjangan', NULL, NULL, NULL),
(4, 'Tidak Aktif', 'Kerjasama Non-Aktif', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nip` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_telp` int(11) DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `unit` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jabatan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `role` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `nip`, `username`, `email`, `no_telp`, `password`, `unit`, `jabatan`, `remember_token`, `created_at`, `updated_at`, `role`) VALUES
(1, 'ihzarizkyk', NULL, 'ihzarizkyk', 'ihza@gmail.com', NULL, '$2y$10$Mmumc/vmKj9WUGzgyI6J4uRdj/eh.4J.ftuGlPgDay7JV0bBn6rUm', 'pengusul', 'pengusul', NULL, NULL, NULL, 0),
(2, 'ihza', NULL, 'ihzarizky', 'rizky@gmail.com', NULL, '$2y$10$Mmumc/vmKj9WUGzgyI6J4uRdj/eh.4J.ftuGlPgDay7JV0bBn6rUm', 'pengelola', 'pengelola', NULL, NULL, NULL, 1),
(3, 'johndoe', NULL, 'johndoe', 'john@gmail.com', 9876543, '$2y$10$Mmumc/vmKj9WUGzgyI6J4uRdj/eh.4J.ftuGlPgDay7JV0bBn6rUm', 'pimpinan', 'pimpinan', NULL, NULL, NULL, 3);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `accesses`
--
ALTER TABLE `accesses`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `bentuks`
--
ALTER TABLE `bentuks`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `bentuk_kegiatan`
--
ALTER TABLE `bentuk_kegiatan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `detail_sasaran_kinerja`
--
ALTER TABLE `detail_sasaran_kinerja`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `dokumen`
--
ALTER TABLE `dokumen`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `instansi`
--
ALTER TABLE `instansi`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kerjasama`
--
ALTER TABLE `kerjasama`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kriteria_mitra`
--
ALTER TABLE `kriteria_mitra`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `mitra`
--
ALTER TABLE `mitra`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  ADD KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indeks untuk tabel `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  ADD KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indeks untuk tabel `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indeks untuk tabel `penggiat_kerjasama`
--
ALTER TABLE `penggiat_kerjasama`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indeks untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indeks untuk tabel `revisi`
--
ALTER TABLE `revisi`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indeks untuk tabel `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

--
-- Indeks untuk tabel `sasaran_kinerja`
--
ALTER TABLE `sasaran_kinerja`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `status_kerjasama`
--
ALTER TABLE `status_kerjasama`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_username_unique` (`username`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `accesses`
--
ALTER TABLE `accesses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `bentuks`
--
ALTER TABLE `bentuks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT untuk tabel `bentuk_kegiatan`
--
ALTER TABLE `bentuk_kegiatan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `detail_sasaran_kinerja`
--
ALTER TABLE `detail_sasaran_kinerja`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `dokumen`
--
ALTER TABLE `dokumen`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `instansi`
--
ALTER TABLE `instansi`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `kerjasama`
--
ALTER TABLE `kerjasama`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT untuk tabel `kriteria_mitra`
--
ALTER TABLE `kriteria_mitra`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT untuk tabel `mitra`
--
ALTER TABLE `mitra`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `news`
--
ALTER TABLE `news`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `penggiat_kerjasama`
--
ALTER TABLE `penggiat_kerjasama`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `revisi`
--
ALTER TABLE `revisi`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `sasaran_kinerja`
--
ALTER TABLE `sasaran_kinerja`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `status_kerjasama`
--
ALTER TABLE `status_kerjasama`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
