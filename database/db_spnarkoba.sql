-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 25 Feb 2021 pada 13.09
-- Versi server: 10.4.14-MariaDB
-- Versi PHP: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_spnarkoba`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `diagnosa`
--

CREATE TABLE `diagnosa` (
  `id` varchar(255) NOT NULL,
  `penyakit_id` varchar(255) NOT NULL,
  `gejala_id` varchar(255) NOT NULL,
  `Cf_pakar` float DEFAULT NULL,
  `Cf_user` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `diagnosa`
--

INSERT INTO `diagnosa` (`id`, `penyakit_id`, `gejala_id`, `Cf_pakar`, `Cf_user`) VALUES
('DI-001', 'P001', 'G001', 0.8, 1),
('DI-002', 'P001', 'G002', 0.8, 0.4),
('DI-003', 'P001', 'G003', 0.6, 0.8),
('DI-004', 'P001', 'G004', 0.4, 0.6),
('DI-005', 'P001', 'G005', 0.4, 0.6),
('DI-006', 'P002', 'G006', 1, 0.4),
('DI-007', 'P002', 'G002', 0.8, 0.4),
('DI-008', 'P002', 'G007', 0.8, 0.4),
('DI-009', 'P002', 'G008', 0.6, 0.6),
('DI-010', 'P002', 'G009', 0.6, 0.8),
('DI-011', 'P002', 'G010', 0.4, 0.6),
('DI-012', 'P003', 'G005', 0.4, 1),
('DI-013', 'P003', 'G011', 0.4, 0.6),
('DI-014', 'P003', 'G012', 0.6, 0.8),
('DI-015', 'P003', 'G013', 0.8, 0.4),
('DI-016', 'P003', 'G014', 0.6, 0),
('DI-017', 'P004', 'G015', 1, 0.4),
('DI-018', 'P004', 'G002', 0.6, 0.6),
('DI-019', 'P004', 'G007', 0.8, 0.4),
('DI-020', 'P004', 'G016', 0.4, 1),
('DI-021', 'P005', 'G011', 0, 0.2),
('DI-022', 'P005', 'G001', 0.4, 0.6),
('DI-023', 'P005', 'G016', 0.6, 0.8),
('DI-024', 'P005', 'G017', 0.4, 0.4),
('DI-025', 'P005', 'G018', 1, 0.2),
('DI-026', 'P006', 'G009', 0.2, 0.4),
('DI-027', 'P006', 'G011', 0.6, 0.8),
('DI-028', 'P006', 'G018', 0.8, 0.6),
('DI-029', 'P006', 'G019', 0.4, 0.4),
('DI-030', 'P006', 'G010', 0.2, 0.2),
('DI-031', 'P006', 'G014', 0.4, 0.4),
('DI-032', 'P007', 'G018', 0.8, 0.8),
('DI-033', 'P007', 'G003', 0.6, 0.6),
('DI-034', 'P007', 'G004', 0.4, 0.4),
('DI-035', 'P007', 'G005', 0.4, 0.6),
('DI-036', 'P007', 'G001', 0.4, 0.4),
('DI-037', 'P007', 'G020', 0.4, 1),
('DI-038', 'P008', 'G007', 1, 0.2),
('DI-039', 'P008', 'G013', 0.8, 0.6),
('DI-040', 'P008', 'G005', 0.6, 0.8),
('DI-041', 'P008', 'G003', 0.6, 0.4),
('DI-042', 'P009', 'G027', 0.8, 0.2),
('DI-043', 'P009', 'G003', 0.6, 0.4),
('DI-044', 'P009', 'G018', 0.8, 0.8),
('DI-045', 'P009', 'G021', 0.4, 0.6),
('DI-046', 'P009', 'G022', 0.2, 0.6),
('DI-047', 'P010', 'G023', 1, 0.4),
('DI-048', 'P010', 'G024', 0.8, 0.6),
('DI-049', 'P010', 'G009', 0.8, 0.4),
('DI-050', 'P010', 'G025', 0.6, 1),
('DI-051', 'P010', 'G026', 1, 0.2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `gejala`
--

CREATE TABLE `gejala` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `gejala`
--

INSERT INTO `gejala` (`id`, `nama`, `created_at`, `updated_at`) VALUES
('G001', 'Sesak Nafas', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('G002', 'Cemas dan Gelisah', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('G003', 'Mual dan Muntah', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('G004', 'Diare', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('G005', 'Kejang-kejang', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('G006', 'Mudah Marah', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('G007', 'Depresi', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('G008', 'Perubahan pola tidur', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('G009', 'Berkeringat', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('G010', 'Panas Dingin', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('G011', 'Tremor', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('G012', 'Insomnia', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('G013', 'Denyut Jantung cepat', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('G014', 'Tekanan darah meningkat', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('G015', 'Sulit fokus', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('G016', 'Sulit Beristirahat', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('G017', 'Turun Berat Badan', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('G018', 'Mulut Kering', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('G019', 'Penglihatan Kabur', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('G020', 'warna kulit berganti', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('G021', 'Sembelit', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('G022', 'Sakit Perut', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('G023', 'Mengantuk', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('G024', 'Gatal', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('G025', 'Sulit Buang Air Kecil', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('G026', 'Perubahan Suasana Hati', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('G027', 'Pusing ', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `hasil_konsultasi`
--

CREATE TABLE `hasil_konsultasi` (
  `id` int(11) NOT NULL,
  `pasien_id` varchar(255) NOT NULL,
  `penyakit_id` varchar(255) NOT NULL,
  `cf` varchar(255) DEFAULT NULL,
  `hasil` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `kaidah_produksi`
--

CREATE TABLE `kaidah_produksi` (
  `id` int(11) NOT NULL,
  `penyakit_id` varchar(255) NOT NULL,
  `gejala_id` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kaidah_produksi`
--

INSERT INTO `kaidah_produksi` (`id`, `penyakit_id`, `gejala_id`) VALUES
(1, 'P001', 'G001'),
(2, 'P001', 'G002'),
(3, 'P001', 'G003'),
(4, 'P001', 'G004'),
(5, 'P001', 'G005'),
(6, 'P002', 'G006'),
(7, 'P002', 'G002'),
(8, 'P002', 'G007'),
(9, 'P002', 'G008'),
(10, 'P002', 'G009'),
(11, 'P002', 'G010'),
(12, 'P003', 'G005'),
(13, 'P003', 'G011'),
(14, 'P003', 'G012'),
(15, 'P003', 'G013'),
(16, 'P003', 'G014'),
(17, 'P004', 'G015'),
(18, 'P004', 'G002'),
(19, 'P004', 'G007'),
(20, 'P004', 'G016'),
(21, 'P005', 'G011'),
(22, 'P005', 'G001'),
(23, 'P005', 'G016'),
(24, 'P005', 'G017'),
(25, 'P005', 'G018'),
(26, 'P006', 'G009'),
(27, 'P006', 'G011'),
(28, 'P006', 'G018'),
(29, 'P006', 'G019'),
(30, 'P006', 'G010'),
(31, 'P006', 'G014'),
(32, 'P007', 'G018'),
(33, 'P007', 'G003'),
(35, 'P007', 'G004'),
(36, 'P007', 'G005'),
(37, 'P007', 'G001'),
(38, 'P007', 'G020'),
(39, 'P008', 'G007'),
(40, 'P008', 'G013'),
(41, 'P008', 'G005'),
(42, 'P008', 'G003'),
(43, 'P009', 'G027'),
(44, 'P009', 'G003'),
(45, 'P009', 'G018'),
(46, 'P009', 'G021'),
(47, 'P009', 'G022'),
(48, 'P010', 'G023'),
(49, 'P010', 'G024'),
(50, 'P010', 'G009'),
(51, 'P010', 'G025'),
(52, 'P010', 'G026');

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
(47, '2014_10_12_000000_create_users_table', 1),
(48, '2014_10_12_100000_create_password_resets_table', 1),
(49, '2019_08_19_000000_create_failed_jobs_table', 1),
(50, '2020_01_28_234308_create_penyakit_table', 1),
(51, '2020_01_30_122002_create_gejala_table', 1),
(52, '2020_01_30_165204_create_pasien_table', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pasien`
--

CREATE TABLE `pasien` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `umur` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis_kelamin` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pekerjaan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `pasien`
--

INSERT INTO `pasien` (`id`, `nama`, `umur`, `jenis_kelamin`, `pekerjaan`, `alamat`, `created_at`, `updated_at`) VALUES
('PAS001', 'LILIK NURHAYATI', '23', 'Perempuan', 'PNS', 'Narmada', '2021-02-24 23:47:41', '2021-02-24 23:47:41'),
('PAS002', 'donny', '212', 'Laki-laki', 'PNS', 'qwe', '2021-02-24 23:59:35', '2021-02-24 23:59:35'),
('PAS003', 'raghib', '21', 'Laki-laki', 'PNS', 'weqwer', '2021-02-25 00:00:20', '2021-02-25 00:00:20'),
('PAS004', 'donny', '23', 'Laki-laki', 'PNS', 'sumbawa', '2021-02-25 00:02:17', '2021-02-25 00:02:17'),
('PAS005', 'Kokain', '32', 'Laki-laki', 'PNS', '23', '2021-02-25 00:36:00', '2021-02-25 00:36:00'),
('PAS006', 'LILIK NURHAYATI', '23', 'Perempuan', 'PNS', 'Narmada', '2021-02-25 02:40:52', '2021-02-25 02:40:52'),
('PAS007', 'LILIK NURHAYATI', '23', 'Perempuan', 'PNS', 'narmada', '2021-02-25 05:02:49', '2021-02-25 05:02:49');

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
-- Struktur dari tabel `penyakit`
--

CREATE TABLE `penyakit` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `penyakit`
--

INSERT INTO `penyakit` (`id`, `nama`, `deskripsi`, `created_at`, `updated_at`) VALUES
('P001', 'Kokain', 'Kokaina atau juga disebut sebagai kokain adalah senyawa sintesis yang memicu metabolisme sel menjadi sangat cepat', '2021-02-22 23:56:40', '2021-02-22 23:56:40'),
('P002', 'Ganja', 'Ganja atau mariyuana adalah psikotropika mengandung tetrahidrokanabinol dan kanabidiol yang membuat pemakainya mengalami euforia. Ganja biasanya dibuat menjadi rokok untuk dihisap supaya efek dari zatnya bereaksi.', '2021-02-22 23:57:41', '2021-02-22 23:57:41'),
('P003', 'Ekstasi', 'Ekstasi mengandung stimulan yang dengan cepat diserap dalam aliran darah manusia, tapi begitu ia sudah masuk maka ekstasi akan mengganggu kemampuan tubuh untuk metabolisme atau merusak.', '2021-02-22 23:59:12', '2021-02-22 23:59:12'),
('P004', 'Heroin atau Putaw', 'Heroin atau Putaw adalah salah satu jenis obat golongan narkotika. Obat yang sering kali disalahgunakan ini dapat menimbulkan efek halusinasi, menurunnya kesadaran, dan menyebabkan kecanduan.', '2021-02-23 00:02:45', '2021-02-23 00:02:45'),
('P005', 'Methampethamin', 'Metamfetamina (metilamfetamina atau desoksiefedrin), disingkat met, dan dikenal di Indonesia sebagai sabu-sabu, adalah obat psikostimulansia dan simpatomimetik. Obat ini dipergunakan untuk kasus parah gangguan hiperaktivitas kekurangan perhatian atau narkolepsi dengan nama dagang Desoxyn, tetapi juga disalahgunakan sebagai narkotika.', '2021-02-23 00:04:00', '2021-02-23 00:04:00'),
('P006', 'Halusinogen', 'Halusinogen adalah jenis psikotropika yang dapat menimbulkan efek halusinasi yang bersifat mengubah perasaan, pikiran dan sering kali menciptakan daya pandang yang berbeda sehingga seluruh perasaan dapat terganggu.', '2021-02-23 00:04:30', '2021-02-23 00:04:30'),
('P007', 'Amfetamin', 'Amfetamin atau amphetamine adalah obat stimulan sistem saraf pusat yang digunakan untuk menangani attention deficit hyperactivity disorder (ADHD) dan narkolepsi.', '2021-02-23 00:05:13', '2021-02-23 00:05:13'),
('P008', 'Petidin', 'Petidin (pethidine) atau meperidin hidroklorida adalah anti nyeri yang termasuk dalam golongan narkotika.', '2021-02-23 00:05:53', '2021-02-23 00:05:53'),
('P009', 'Kodein', 'Kodeina atau kodein ialah asam opiat alkaloid yang dijumpai di dalam candu dalam konsentrasi antara 0,7% dan 2,5%. Kebanyakan kodein yang digunakan di Amerika Serikat diproses dari morfin melalui proses metilasi.', '2021-02-23 00:07:09', '2021-02-23 00:07:09'),
('P010', 'Morfin', 'Morfina adalah alkaloid analgesik yang sangat kuat dan merupakan agen aktif utama yang ditemukan pada opium.', '2021-02-23 00:07:55', '2021-02-23 00:07:55');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pertanyaan`
--

CREATE TABLE `pertanyaan` (
  `id` int(11) NOT NULL,
  `id_gejala` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jawaban` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `pertanyaan`
--

INSERT INTO `pertanyaan` (`id`, `id_gejala`, `jawaban`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'G001', 'TIDAK', '2021-02-25 05:03:17', '2021-02-25 05:03:17', NULL),
(2, 'G002', 'YA', '2021-02-25 05:03:17', '2021-02-25 05:03:17', NULL),
(3, 'G003', 'YA', '2021-02-25 05:03:17', '2021-02-25 05:03:17', NULL),
(4, 'G004', 'TIDAK', '2021-02-25 05:03:18', '2021-02-25 05:03:18', NULL),
(5, 'G005', 'TIDAK', '2021-02-25 05:03:18', '2021-02-25 05:03:18', NULL),
(6, 'G006', 'TIDAK', '2021-02-25 05:03:18', '2021-02-25 05:03:18', NULL),
(7, 'G007', 'TIDAK', '2021-02-25 05:03:18', '2021-02-25 05:03:18', NULL),
(8, 'G008', 'TIDAK', '2021-02-25 05:03:18', '2021-02-25 05:03:18', NULL),
(9, 'G009', 'TIDAK', '2021-02-25 05:03:18', '2021-02-25 05:03:18', NULL),
(10, 'G010', 'TIDAK', '2021-02-25 05:03:18', '2021-02-25 05:03:18', NULL),
(11, 'G011', 'TIDAK', '2021-02-25 05:03:18', '2021-02-25 05:03:18', NULL),
(12, 'G012', 'TIDAK', '2021-02-25 05:03:18', '2021-02-25 05:03:18', NULL),
(13, 'G013', 'TIDAK', '2021-02-25 05:03:18', '2021-02-25 05:03:18', NULL),
(14, 'G014', 'TIDAK', '2021-02-25 05:03:18', '2021-02-25 05:03:18', NULL),
(15, 'G015', 'TIDAK', '2021-02-25 05:03:18', '2021-02-25 05:03:18', NULL),
(16, 'G016', 'TIDAK', '2021-02-25 05:03:18', '2021-02-25 05:03:18', NULL),
(17, 'G017', 'TIDAK', '2021-02-25 05:03:18', '2021-02-25 05:03:18', NULL),
(18, 'G018', 'TIDAK', '2021-02-25 05:03:18', '2021-02-25 05:03:18', NULL),
(19, 'G019', 'TIDAK', '2021-02-25 05:03:18', '2021-02-25 05:03:18', NULL),
(20, 'G020', 'TIDAK', '2021-02-25 05:03:18', '2021-02-25 05:03:18', NULL),
(21, 'G021', 'TIDAK', '2021-02-25 05:03:19', '2021-02-25 05:03:19', NULL),
(22, 'G022', 'TIDAK', '2021-02-25 05:03:19', '2021-02-25 05:03:19', NULL),
(23, 'G023', 'TIDAK', '2021-02-25 05:03:19', '2021-02-25 05:03:19', NULL),
(24, 'G024', 'TIDAK', '2021-02-25 05:03:19', '2021-02-25 05:03:19', NULL),
(25, 'G025', 'TIDAK', '2021-02-25 05:03:19', '2021-02-25 05:03:19', NULL),
(26, 'G026', 'TIDAK', '2021-02-25 05:03:19', '2021-02-25 05:03:19', NULL),
(27, 'G027', 'TIDAK', '2021-02-25 05:03:19', '2021-02-25 05:03:19', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `soal`
--

CREATE TABLE `soal` (
  `id` varchar(255) NOT NULL,
  `soal` varchar(255) NOT NULL,
  `id_gejala` varchar(100) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `soal`
--

INSERT INTO `soal` (`id`, `soal`, `id_gejala`, `created_at`, `updated_at`) VALUES
('PER001', 'Apakah terdapat gejala Sesak Nafas?', 'G001', '2021-02-23 07:36:02', '2021-02-23 07:36:02'),
('PER002', 'Apakah anda Cemas dan Gelisah?', 'G002', '2021-02-23 23:07:52', '2021-02-23 23:07:52'),
('PER003', 'Apakah anda Terdapat Gejala Mual dan Muntah?', 'G003', '2021-02-23 23:08:18', '2021-02-23 23:08:18'),
('PER004', 'Apakah anda terkena Diare?', 'G004', '2021-02-23 23:10:50', '2021-02-23 23:10:50'),
('PER005', 'Apakah anda terdapat gejala kejang-kejang?', 'G005', '2021-02-23 23:11:18', '2021-02-23 23:11:18'),
('PER006', 'Apakah Anda Mudah Marah?', 'G006', '2021-02-23 23:11:45', '2021-02-23 23:11:45'),
('PER007', 'Apakah anda mengalami Depresi?', 'G007', '2021-02-23 23:12:09', '2021-02-23 23:12:09'),
('PER008', 'Apakah anda ada Perubahan Pola Tidur?', 'G008', '2021-02-23 23:13:15', '2021-02-23 23:13:15'),
('PER009', 'Apakah anda sering berkeringat lebih?', 'G009', '2021-02-23 23:13:56', '2021-02-23 23:13:56'),
('PER010', 'Apakah Anda Mengalami Panas Dingin?', 'G010', '2021-02-23 23:14:34', '2021-02-23 23:14:34'),
('PER011', 'Apakah anda mengalami Tremor?', 'G011', '2021-02-23 23:14:55', '2021-02-23 23:14:55'),
('PER012', 'Apakah mengalami gejala Insomnia?', 'G012', '2021-02-23 23:15:53', '2021-02-23 23:15:53'),
('PER013', 'Apakah mengalami denyut jantung cepat?', 'G013', '2021-02-23 23:16:57', '2021-02-23 23:16:57'),
('PER014', 'Apakah Anda Merasakan Tekanan Darah Meningkat?', 'G014', '2021-02-23 23:17:29', '2021-02-23 23:17:29'),
('PER015', 'Apakah Anda Mengalami Sulit Fokus?', 'G015', '2021-02-23 23:17:56', '2021-02-23 23:17:56'),
('PER016', 'Apakah anda Sulit Beristirahat?', 'G016', '2021-02-23 23:18:30', '2021-02-23 23:18:30'),
('PER017', 'Apakah anda mengalami penurunan Berat Badan?', 'G017', '2021-02-23 23:18:57', '2021-02-23 23:18:57'),
('PER018', 'Apakah anda mengalami mulut kering?', 'G018', '2021-02-23 23:19:27', '2021-02-23 23:19:27'),
('PER019', 'Apakah Penglihatan anda kabur?', 'G019', '2021-02-23 23:19:53', '2021-02-23 23:19:53'),
('PER020', 'Apakah warna kulit berganti?', 'G020', '2021-02-23 23:20:17', '2021-02-23 23:20:17'),
('PER021', 'Apakah anda mengalami Sembelit?', 'G021', '2021-02-23 23:20:47', '2021-02-23 23:20:47'),
('PER022', 'Apakah anda mengalami sakit pada perut?', 'G022', '2021-02-23 23:21:33', '2021-02-23 23:21:33'),
('PER023', 'Apakah anda sering mengantuk?', 'G023', '2021-02-23 23:22:06', '2021-02-23 23:22:06'),
('PER024', 'Apakah anda mengalami gejala gatal-gatal?', 'G024', '2021-02-23 23:22:44', '2021-02-23 23:22:44'),
('PER025', 'Apakah Anda Mengalami Sulit Buang Air Kecil?', 'G025', '2021-02-23 23:23:09', '2021-02-23 23:23:09'),
('PER026', 'Apakah anda mengalami suasana Hati yang berubah ubah?', 'G026', '2021-02-23 23:23:47', '2021-02-23 23:23:47'),
('PER027', 'Apakah anda mengalami gejala pusing?', 'G027', '2021-02-23 23:24:10', '2021-02-23 23:24:10');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `role`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(2, 'Bhintang Dirgantara', 'Admin', 'bddeddy06@gmail.com', NULL, '$2y$10$OwD8gPqhwVyqqXgp7D5MK.cVSZl5cuxJABTfiVBD.hhbrCBFQVjT2', NULL, '2020-02-02 18:37:39', '2020-02-02 18:37:39'),
(3, 'Donny Kurniawan', 'Asisten Dokter', 'donnyacm@gmail.com', NULL, '$2y$10$aroxr.ZmGJboL5jqNmdXP.i1bSl5i1W04TP0PiOK12eFJR/DfWwbm', NULL, '2020-02-02 18:39:02', '2020-02-02 18:39:02'),
(4, 'admin', 'Asisten Dokter', 'admin@gmail.com', NULL, '$2y$10$XbLz2CwI8HyzAp6raDErm.DursV04F9Xl3B1sHmx.CIbRAEKfvyh6', NULL, '2021-02-10 21:54:42', '2021-02-10 21:54:42'),
(5, 'donny', 'Admin', 'donnydkg25@gmail.com', NULL, '$2y$10$PPeyFIC1Fj8.ZKd95wHkp.rJjEXe9vfsCAzuNdXr.FOMc8cHB2LAO', NULL, '2021-02-10 21:55:47', '2021-02-10 21:55:47'),
(6, 'admin', 'Admin', 'admin1@gmail.com', NULL, '$2y$10$aexMS5jkeCRS.5uQW4nFEOM5VzfX0yP4Sto8UkZk5LkHQ9KwHvgHa', NULL, '2021-02-22 06:37:36', '2021-02-22 06:37:36'),
(7, 'donny', 'Asisten Dokter', 'donny25@gmail.com', NULL, '$2y$10$5B5rqW3gkhkSDDiAvHETlO0hH9KdGLeM8pqkc/xQajIFiqoakMjl2', NULL, '2021-02-22 23:49:40', '2021-02-22 23:49:40');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `diagnosa`
--
ALTER TABLE `diagnosa`
  ADD PRIMARY KEY (`id`),
  ADD KEY `penyakit_id` (`penyakit_id`),
  ADD KEY `gejala_id` (`gejala_id`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `gejala`
--
ALTER TABLE `gejala`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `hasil_konsultasi`
--
ALTER TABLE `hasil_konsultasi`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pasien_id` (`pasien_id`),
  ADD KEY `penyakit_id` (`penyakit_id`);

--
-- Indeks untuk tabel `kaidah_produksi`
--
ALTER TABLE `kaidah_produksi`
  ADD PRIMARY KEY (`id`),
  ADD KEY `penyakit_id` (`penyakit_id`),
  ADD KEY `gejala_id` (`gejala_id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pasien`
--
ALTER TABLE `pasien`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indeks untuk tabel `penyakit`
--
ALTER TABLE `penyakit`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pertanyaan`
--
ALTER TABLE `pertanyaan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `soal`
--
ALTER TABLE `soal`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `hasil_konsultasi`
--
ALTER TABLE `hasil_konsultasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `kaidah_produksi`
--
ALTER TABLE `kaidah_produksi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT untuk tabel `pertanyaan`
--
ALTER TABLE `pertanyaan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
