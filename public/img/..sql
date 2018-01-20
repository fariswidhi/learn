-- phpMyAdmin SQL Dump
-- version 4.6.6deb1+deb.cihar.com~xenial.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 19, 2018 at 10:24 PM
-- Server version: 5.7.20-0ubuntu0.16.04.1
-- PHP Version: 7.1.12-3+ubuntu16.04.1+deb.sury.org+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `learn_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `activities`
--

CREATE TABLE `activities` (
  `id_activity` int(10) UNSIGNED NOT NULL,
  `id_children` int(11) NOT NULL,
  `activity` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id` int(11) NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `activities`
--

INSERT INTO `activities` (`id_activity`, `id_children`, `activity`, `type`, `id`, `deleted_at`, `created_at`, `updated_at`) VALUES
(4, 18, 'Mengerjakan Soal', '2', 1, NULL, '2018-01-16 08:33:06', '2018-01-16 08:33:06');

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(10) UNSIGNED NOT NULL,
  `user` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `answers`
--

CREATE TABLE `answers` (
  `id` int(10) UNSIGNED NOT NULL,
  `answer` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_question` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `true` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `answers`
--

INSERT INTO `answers` (`id`, `answer`, `id_question`, `true`, `deleted_at`, `created_at`, `updated_at`) VALUES
(4, '2', '6', '0', NULL, '2018-01-13 09:31:35', '2018-01-13 09:31:35'),
(5, '3', '6', '1', NULL, '2018-01-13 09:31:35', '2018-01-13 09:31:35'),
(6, '4', '6', '0', NULL, '2018-01-13 09:31:35', '2018-01-13 09:31:35'),
(7, '1', '7', '0', NULL, '2018-01-14 18:38:55', '2018-01-14 18:38:55'),
(8, '4', '7', '1', NULL, '2018-01-14 18:38:55', '2018-01-14 18:38:55'),
(9, '5', '7', '0', NULL, '2018-01-14 18:38:55', '2018-01-14 18:38:55'),
(10, '6', '7', '0', NULL, '2018-01-14 18:38:55', '2018-01-14 18:38:55'),
(11, '4', '8', '1', NULL, '2018-01-16 08:30:19', '2018-01-16 08:30:19'),
(12, '5', '8', '0', NULL, '2018-01-16 08:30:19', '2018-01-16 08:30:19'),
(13, '6', '8', '0', NULL, '2018-01-16 08:30:20', '2018-01-16 08:30:20'),
(14, '7', '8', '0', NULL, '2018-01-16 08:30:20', '2018-01-16 08:30:20'),
(15, '3', '9', '0', NULL, '2018-01-16 08:31:10', '2018-01-16 08:31:10'),
(16, '4', '9', '0', NULL, '2018-01-16 08:31:10', '2018-01-16 08:31:10'),
(17, '5', '9', '0', NULL, '2018-01-16 08:31:10', '2018-01-16 08:31:10'),
(18, '1', '9', '1', NULL, '2018-01-16 08:31:10', '2018-01-16 08:31:10');

-- --------------------------------------------------------

--
-- Table structure for table `childrens`
--

CREATE TABLE `childrens` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_user` int(11) NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `childrens`
--

INSERT INTO `childrens` (`id`, `name`, `username`, `password`, `id_user`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, '', 'bagus', 'bagus', 12, NULL, NULL, NULL),
(3, 'Bagus F', 'bagusf', '$2y$10$eHQWYXILwSbAtRuwTzZB2OsVOgT.RAxK.51UVZ0wUSSjX.ztxKI3G', 3, NULL, '2018-01-14 07:19:16', '2018-01-14 07:19:16'),
(4, 'Ronian', 'roni19', '$2y$10$yXTomTE5./noBLU/SpWA2uV2xJx1zIBF76/I1R9IJsVzREPBZ0CGW', 4, NULL, '2018-01-14 17:34:30', '2018-01-14 17:44:44'),
(5, 'ahmad', 'ahmadin', '$2y$10$t.Tmwj3YqiVvSzuPRzRqmuKnO6Sz68PMTdE2rUs2JNS5wG9YsJfKO', 7, NULL, '2018-01-15 17:06:37', '2018-01-15 17:06:37');

-- --------------------------------------------------------

--
-- Table structure for table `materials`
--

CREATE TABLE `materials` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_subject` int(11) NOT NULL,
  `id_user` int(11) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `materials`
--

INSERT INTO `materials` (`id`, `name`, `content`, `id_subject`, `id_user`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Materi Trigonometri Bab 1', 'Ini adalah Materi', 4, NULL, NULL, '2018-01-13 06:54:33', '2018-01-13 07:02:00');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2018_01_13_081106_create_childrens_table', 1),
(4, '2018_01_13_081119_create_admins_table', 1),
(5, '2018_01_13_081134_create_subjects_table', 1),
(6, '2018_01_13_081148_create_materials_table', 1),
(7, '2018_01_13_081201_create_modules_table', 1),
(8, '2018_01_13_081215_create_questions_table', 1),
(9, '2018_01_13_081231_create_answers_table', 1),
(10, '2018_01_13_081255_create_users_answers_table', 1),
(11, '2018_01_13_081304_create_points_table', 1),
(12, '2018_01_13_081327_create_activities_table', 1),
(13, '2018_01_13_082622_create_news_table', 1),
(14, '2018_01_13_083211_create_verifications_table', 1),
(15, '2018_01_17_121850_create_users_questions_table', 2),
(16, '2018_01_18_150551_create_activities_table', 3),
(17, '2018_01_18_150551_create_admins_table', 3),
(18, '2018_01_18_150551_create_answers_table', 3),
(19, '2018_01_18_150551_create_childrens_table', 3),
(20, '2018_01_18_150551_create_materials_table', 3),
(21, '2018_01_18_150551_create_modules_table', 3),
(22, '2018_01_18_150551_create_news_table', 3),
(23, '2018_01_18_150551_create_password_resets_table', 3),
(24, '2018_01_18_150551_create_points_table', 3),
(25, '2018_01_18_150551_create_questions_table', 3),
(26, '2018_01_18_150551_create_subjects_table', 3),
(27, '2018_01_18_150551_create_users_table', 3),
(28, '2018_01_18_150551_create_users_answers_table', 3),
(29, '2018_01_18_150551_create_users_questions_table', 3),
(30, '2018_01_18_150551_create_verifications_table', 3);

-- --------------------------------------------------------

--
-- Table structure for table `modules`
--

CREATE TABLE `modules` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `time` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `id_subjects` int(11) NOT NULL,
  `subject_number` int(11) NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `modules`
--

INSERT INTO `modules` (`id`, `name`, `time`, `description`, `id_subjects`, `subject_number`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Matematika Kelas 10', '90', NULL, 4, 3, NULL, '2018-01-13 07:24:06', '2018-01-13 07:24:06');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` text COLLATE utf8mb4_unicode_ci,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `title`, `photo`, `content`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Berita 112', NULL, 'skljd', '2018-01-19 02:52:59', '2018-01-13 07:07:34', '2018-01-19 02:52:59'),
(2, 'Tes', '1516161211.png', 'tess', '2018-01-19 02:53:02', '2018-01-16 20:53:31', '2018-01-19 02:53:02'),
(3, 'Khasiat Daun Pepaya Sebagai Obat Tradisional', '1516356670.jpg', 'Daun Pepaya adalah sayuran yang dipanen dari pohon pepaya, bentuk simetris saat bagian atas dilipat. Pepaya membuat rasa pahit jika masih muda, tapi kalau sudah direbus lebih lama, zat yang membuatnya jadi pahit akan berkurang. <br />\r\n<br />\r\nSelain banyak digunakan sebagai sayuran segar, daun pepaya juga sering dijadikan obat tradisional untuk mengobati penyakit atau melindungi tubuh dari berbagai patogen. Saat ini, manfaat daun pepaya akan dijelaskan secara singkat, tapi sebelum Anda juga perlu tahu manfaat buah pepaya. <br />\r\n<br />\r\nMeski manfaat dari daun pepaya itu sendiri banyak, untuk membuktikan keefektifannya. Anda bisa mempercayainya, mengetahui informasi yang akan dipertimbangkan di bawah ini. <br />\r\n<br />\r\n1. Persiapan untuk pengobatan ginjal. <br />\r\nManfaat daun pepaya <br />\r\nBiarkan beberapa daun pepaya segar dari pohon, bilas dengan air, lalu rebus selama 10 menit. Pepaya daun rebus air minum sebelum kadaluwarsa, kadaluwarsa 30 menit, minumlah air kelapa muda. (Bagi orang dengan tekanan darah tinggi, tidak diperbolehkan untuk mencoba pengobatan ini). <br />\r\n<br />\r\n2. Sakit di perut saat menstruasi <br />\r\nKelebihan daun pepaya. Siapkan bahan daun berupa daun pepaya, kentang tumbuk bersama buah dan garam. Tambahkan air matang, campuran dikompres dan disaring, finishing air minum saat haid. <br />\r\n<br />\r\n3. Disentri <br />\r\nManfaat daun pepaya <br />\r\nRebus 2 buah daun pepaya yang telah dicuci dalam pot yang berisi 1 liter air dan 1 sendok teh bubuk kopi hitam jika direbus dan minumlah satu gelas air putih sehari. <br />\r\n<br />\r\n4. Obat Terlarang <br />\r\nKelebihan daun pepaya Siapkan bahan berupa minyak kelapa dan daun pepaya secukupnya. Daun pepaya dilatasi dan direbus dengan minyak kelapa, masukkan ramuannya ke perut sebelum diare. <br />\r\n<br />\r\n5. Pengobatan perut dengan cacing <br />\r\nKelebihan daun pepaya. Siapkan bahan berupa 1 lembar daun pepaya, bilas mereka. Rebus dalam 2 gelas air dalam panci dengan pompa masak dill. Bilas air dan minum setelah dingin setiap malam sebelum tidur. <br />\r\n<br />\r\n6. Pengobatan Keputihan <br />\r\nKelebihan daun pepaya Gunakan selembar pepaya bersih, lalu rebus dalam 1,5 liter air dengan 50 g akar alang-alang dan pulsar. Air, direbus dengan daun pepaya dan akar buluh, Anda menyaring dan meminum air sampai habis setiap hari. <br />\r\n<br />\r\n7. Pengobatan Jerawat <br />\r\nManfaat daun pepaya <br />\r\nLangkah pertama adalah membersihkan wajah dengan air hangat. Kemudian tumbuk daun pepaya dan tumbuk atau dicampur, dicampur dengan air. Campuran pepaya daun pepaya (sari) dicampur dengan masker dan digunakan untuk menutupi wajah. Setelah 15 menit pengeringan, bersihkan lagi dengan air hangat, yang terakhir mengusap wajah dengan air dingin. <br />\r\n<br />\r\n8. Bintik hitam pada obat <br />\r\n<br />\r\nManfaat daun pepaya <br />\r\nJika bekas jerawat atau bintik hitam tidak terlalu banyak, gunakan metode ini. Cara menumbuk daun pepaya dengan cara mengoleskan atau menggiling atau mencampur dan menambahkan air. Air daun pepaya dicampur dalam masker dan dioleskan secara merata ke wajah. Tunggu 15 menit agar masker mengering dan bersih dengan air hangat sampai masker dinaikkan. <br />\r\n<br />\r\nManfaat daun pepaya tentu saja tidak boleh dibagi ke dalam kandungan yang terkandung di dalamnya. Anda juga perlu tahu bahwa beberapa masalah di atas akan benar-benar sembuh jika rutin dan dikontrol oleh dokter. Namun, Anda tidak bisa mengabaikan saran dari seorang ahli medis, yaitu seorang dokter. <br />\r\n<br />\r\nSebenarnya, ada banyak kelebihan lain dari daun pepaya, misalnya untuk menambah nafsu makan, menghancurkan sel kanker, mempercepat sistem pencernaan manusia, mengobati demam berdarah (demam berdarah), kebutuhan anak akan nutrisi dan banyak lagi.', NULL, '2018-01-19 03:11:10', '2018-01-19 03:11:10'),
(4, 'Cara Berkembang Biak Komodo', '1516357032.jpg', 'Bagaimana cara mengembangkan Biak Komodo. Komodo yang lebih dikenal dengan komodo adalah Varanus komodoensis, merupakan spesies kadal terbesar di dunia, tinggal di Pulau Komodo, Rinka, Flores, Gili Motang dan Gili Dasami di Nusa Tenggara. Kadal ini di kampung halaman Komodo juga disebut ora nama setempat. <br />\r\n<br />\r\nTermasuk anggota keluarga kadal Varanid dan harta karun Toxicopter, Komodo adalah kadal terbesar di dunia dengan panjang rata-rata 2-3 m. Ukuran besar ini dikaitkan dengan gigantisme pulau, yang mewakili kecenderungan Mekra-Sasans terhadap tubuh beberapa hewan yang hidup di sebuah pulau kecil yang terikat. dengan tidak adanya mamalia karnivora di pulau tempat tinggal naga, dan kecepatan metabolisme kecil Komodo Naga. Karena tubuhnya yang besar, kadal ini menempati posisi predator atas, yang mendominasi ekosistem tempat tinggalnya. <br />\r\n<br />\r\nBagaimana cara mengembangkan Biak Komodo. Komodo ditemukan oleh periset Barat pada tahun 1910. Tubuh agung dan reputasinya yang mengerikan membuat mereka populer di kebun binatang. Habitat komodo di alam liar telah berkurang akibat aktivitas manusia, dan oleh karena itu IUCN termasuk Komodo sebagai spesies yang rentan terhadap kepunahan. Kadal besar sekarang dilindungi oleh peraturan pemerintah Indonesia, dan sebuah taman nasional, Taman Nasional Komodo, diciptakan untuk melindungi mereka. <br />\r\n<br />\r\nKomodo adalah hewan langka yang hanya ditemukan di Indonesia. Komodo, menetas telur di tanah, tersebar di kepulauan Komodo. Komodo menunggu sampai telurnya menetas dari delapan sampai sembilan bulan. <br />\r\n<br />\r\nBagaimana cara mengembangkan Biak Komodo. Komodo terhubung dari bulan Juli sampai Agustus, dan delapan bulan kemudian atau pada bulan April tahun depan kita akan melihat bagaimana komodo muncul. Setiap situs telur mengandung rata-rata sekitar 820 butir telur. Saat keluar dari 820 butir telur, menangkap sekitar 200 butir, lalu 1000 kadal baru, haus darah dan bangkai menetas di Pulau Komodo. Keganasan reptil mengancam hewan lain, seperti babi hutan, rusa dan kuda liar. <br />\r\n<br />\r\nBagaimana cara mengembangkan Biak Komodo. Sepanjang tahun, reptil raksasa ini hanya memiliki satu musim kawin pada bulan Juli-Agustus. Di kerang Komodo ini, para jantan akan bertarung, berkelahi, untuk melawan wanita tersebut. Kedua komodo, siap bertarung, akan merobek atau buang air besar untuk menunjukkan kesediaan untuk bertarung.<br />\r\n<br />\r\nBagaimana cara mengembangkan Biak Komodo. Setelah ini, saat betina bertelur, dia akan mencari lubang untuk bertelur. Telur yang diperoleh berkisar antara 20-30 butir telur dan masa inkubasi 8-9 bulan. Mereka terkenal dengan sifat predator dan kanibalistiknya, sehingga anak ayam yang baru lahir akan bersembunyi di pepohonan sampai mereka tumbuh dan melindungi diri mereka sendiri. Umur komodo bisa mencapai 50 tahun.', NULL, '2018-01-19 03:17:12', '2018-01-19 03:17:12'),
(5, 'Bagian Sel Tumbuhan Dan Fungsinya', '1516357180.jpg', 'Bagian Sel Tumbuhan Dan Fungsinya – Bagian – bagian sel tumbuhan selalu berperan penting dalam menjaga kondisi dan menjalankan fungsinya. Beberapa organel yang membentuknya tentunya berbeda dengan yang dimiliki oleh hewan. Nah, untuk lebih jelasnya mari kami tunjukkan bagian-bagiannya di bawah ini.<br />\r\n<br />\r\nBagian sel tumbuhan dan fungsinya<br />\r\n<br />\r\n1. Nukleus (inti sel)<br />\r\nNukleus merupakan salah satu pusat utama sel dimana fungsi dari nukleus ini adalah untuk mengkoordinasikan proses metabolisme yang ada di dalam sel.<br />\r\n<br />\r\n2. Kloroplas (plastida)<br />\r\nPlastida adalah bagian dari organel sel pada tumbuhan yang membawa pigmen. Dan, pigmen ini ada pada kloroplas itu sendiri sehingga dengan itu tumbuhan mampu melakukan fotosintesis dengan sempurna.<br />\r\n<br />\r\n3. Ribosom<br />\r\nRibosom inilah yang menjadi tempat untuk sintesis protein, dan organel sel ini terdiri dari protein dan asam ribonukleat (40 dan 60%).<br />\r\n<br />\r\n4. Mitokondria<br />\r\nGunanya adalah untuk memecah karbohidrats kompleks dan gula sehingga bisa dimanfaatkan oleh tumbuhan itu sendiri.<br />\r\n<br />\r\n5. Badan golgi<br />\r\nFungsinya dalah untuk mengangkut zat kimia dari dan keluar dari sel setelah lemak dan protein disintesis ole retikulum endoplasma.<br />\r\n<br />\r\n6. Retikulum endoplasma<br />\r\nFungsi utama dari organel sel ini adalah sebagai jalur penghubung antara inti dan sitoplasma dalam tumbuhan.<br />\r\n<br />\r\n7. Vakuola<br />\r\nFungsinya dalah untuk mengatur tekanan turgor, serta menyimpan banyak zat kimia, bahkan membantu pencernaan intraselular molekul kompleks.<br />\r\n<br />\r\n8. Peroksisom<br />\r\nFungsinya adalah memecah asam lemak menjadi gula, serta membantu kloroplas dalam proses fotorespirasi.<br />\r\n<br />\r\nDemikianlah bagian-bagian penting dalam sel tumbuhan. Kalian bisa mencermati bagian sel tumbuhan dan fungsinya sebagai perbandingan dengan organel sel pada makhluk hidup lainnya.', NULL, '2018-01-19 03:19:40', '2018-01-19 03:19:40'),
(6, 'Daftar Manfaat Buah Naga', '1516357470.jpg', 'Mencegah diabetes <br />\r\nTentu saja, kita mengenal diabetes, karena kita sering menemukan bahwa beberapa orang memiliki penyakit ini. Gaya hidup yang tidak sehat membuat orang rentan terhadap diabetes. Karena itu, tidak ada salahnya mengonsumsi buah naga untuk mencegah dan mengatasi penyakit diabetes, karena diyakini buah naga membunuh sel-sel jahat yang dihasilkan karena gaya hidup masyarakat yang tidak sehat. <br />\r\n<br />\r\nMendukung program diet <br />\r\nBagi anda yang membuat program penurunan berat badan, tidak ada salahnya mencoba dan menciptakan buah naga sebagai bahan atau alternatif dalam menurunkan berat badan. Buah naga adalah protein protein tinggi, namun rendah lemak dan karbohidrat. Jadi buah naga berubah menjadi buah, cocok untuk digunakan dengan diet. Kandungan proteinnya bisa memuaskan kebutuhan tubuh, dan kandungan lemak dan karbohidrat tidak mengganggu program diet Anda. Selain itu, kandungan serat buah naga juga bisa membantu memperlancar pencernaan.', NULL, '2018-01-19 03:24:30', '2018-01-19 03:24:30'),
(7, 'Peranan Tanah Bagi Hewan', '1516357663.jpg', 'Tanahnya sangat berguna bagi hewan, karena tanah merupakan tempat hidup untuk melanjutkan hidupnya. Tanahnya sangat besar untuk hewan, terutama untuk hewan. Dalam peran tanah, yang menjadi faktor utama dalam kehidupan binatang. Di tanah ini binatang sangat bergantung, namun tanah menjadi masalah. Untuk tanah yang subur dan tandus menjadi elemen pertama dalam penyebarannya. Dengan tanah yang subur, mudah bagi semua makhluk hidup untuk mencari makanan. Sementara tanah tandus bisa sangat sulit untuk dikembangkan, karena hewan juga membutuhkan makhluk hidup lainnya, seperti tumbuhan, hewan dan makhluk hidup lainnya. Selain lahan dijadikan tempat dan mencari makanan tanah, begitu pula dengan air bersih. Dimana air juga mempengaruhi kehidupan Bumi, yang mampu mengadaptasi air yang lebih lama, hewan bisa berkembang biak dengan mudah. Tapi dengan keadaan terestrial hewan saat ini - beberapa spesies hewan hampir punah / langka, karena bumi sekarang sudah rusak parah akibat pengaruh berbagai unsur iklim. Tapi beberapa di antaranya tidak dipercepat oleh tindakan atau pengolahan manusia, sehingga hewan tidak bisa berkembang biak karena kurang adanya tempat tinggal, makanan dan air. Kesimpulannya didasarkan pada apa yang telah dijelaskan tentang tanah untuk hewan, sehingga dapat disimpulkan bahwa; - Tanah sangat penting bagi hewan, karena tanah merupakan tempat kehidupan untuk melanjutkan kehidupan. Tanah adalah salah satu sistem Bumi bersama dengan sistem bumi lainnya, yaitu air alami dan suasananya, menjadi fungsi utama dari perubahan dan stabilitas ekosistem,', NULL, '2018-01-19 03:27:43', '2018-01-19 03:27:43');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `points`
--

CREATE TABLE `points` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_module` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sessid` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `point` int(11) NOT NULL,
  `id_user` int(11) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `points`
--

INSERT INTO `points` (`id`, `id_module`, `sessid`, `point`, `id_user`, `deleted_at`, `created_at`, `updated_at`) VALUES
(17, '1', 'R2PTGAZ', 66, 18, NULL, '2018-01-18 18:27:04', '2018-01-18 18:27:04'),
(18, '1', '8MN2KTY', 66, 8, NULL, '2018-01-18 23:05:27', '2018-01-18 23:05:27'),
(19, '1', '7FPKJMO', 66, 18, NULL, '2018-01-19 00:01:48', '2018-01-19 00:01:48');

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_module` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`id`, `name`, `id_module`, `deleted_at`, `created_at`, `updated_at`) VALUES
(6, '1+1=', '1', NULL, '2018-01-13 09:31:35', '2018-01-13 09:31:35'),
(7, 'Pangkat 2 =...', '1', NULL, '2018-01-14 18:38:54', '2018-01-14 18:38:54'),
(8, '2+2 = ...', '1', NULL, '2018-01-16 08:30:19', '2018-01-16 08:30:19'),
(9, '1+4=', '1', NULL, '2018-01-16 08:31:10', '2018-01-16 08:31:10');

-- --------------------------------------------------------

--
-- Table structure for table `subjects`
--

CREATE TABLE `subjects` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `subjects`
--

INSERT INTO `subjects` (`id`, `name`, `deleted_at`, `created_at`, `updated_at`) VALUES
(2, 'Matematika', '2018-01-13 05:49:11', '2018-01-13 05:49:08', '2018-01-13 05:49:11'),
(3, 'Ipa', '2018-01-13 06:22:33', '2018-01-13 05:55:31', '2018-01-13 06:22:33'),
(4, 'Matematika', NULL, '2018-01-13 06:22:44', '2018-01-13 06:22:44'),
(5, 'Bahasa Indonesia', NULL, '2018-01-14 18:16:53', '2018-01-14 18:16:53'),
(6, 'Ilmu Pengetahuan Alam', NULL, '2018-01-14 18:17:07', '2018-01-14 18:17:07');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `username` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` text COLLATE utf8mb4_unicode_ci,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `active` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_parent` int(11) DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `username`, `password`, `type`, `phone`, `address`, `gender`, `active`, `id_parent`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'ahmad@ahmad.com', 'ahmad.barjo@gmail.com', '', '$2y$10$.KUBYb5JkYdPtrFnse1mRepMfdq42WacTu7yhOKpFKwQl8QBrAZAu', '2', '0895322931444', NULL, 'laki-laki', '0', NULL, NULL, '2018-01-13 02:28:18', '2018-01-13 02:28:18'),
(2, 'Ahmad', 'Ahmadbarjo@gmail.com', '', '$2y$10$K2d6PLB.yXJLgmXbCUiYVu/Cb6BBbYeWRx/g9FUClhORf8D5r9CCq', '2', '0895322931444', NULL, 'laki-laki', '0', NULL, NULL, '2018-01-14 01:11:09', '2018-01-14 01:11:09'),
(3, 'faris', 'fariswidhi@gmail.com', '', '$2y$10$E/gtUwlI7.wR2UOvb07iKO5J62zVuwCWRum8CJjHAm5Y5rw1khqtO', '2', '0895322931444', NULL, 'laki-laki', '0', NULL, NULL, '2018-01-14 06:54:42', '2018-01-14 06:54:42'),
(4, 'Bambang', 'bambang@gmail.com', '', '$2y$10$3QqfvgYNaiUZMYGXbuDlquPDJiavfL9L9TRot8qeaDG731Qcvvzg.', '2', '0895322931444', NULL, 'laki-laki', '0', NULL, 'zWhMKAaxtZgT1kcBeVjDrtn4mQXREaGPPTKusbm0QHpOJeERD6pRCz4zZ4IU', '2018-01-14 17:31:27', '2018-01-14 17:31:27'),
(5, 'budi', 'budi12@gmail.com', '', '$2y$10$aBXtT.UF..O7jMP0ccvlTuctx1390O3gzkmv7F3zO8yVVZsdywQXm', '2', '0895322931444', NULL, 'laki-laki', '0', NULL, 'BJaOk9GsVznyHJ9xF7Qw9XOmkn3HP9ijDV0OIIashVrdSLnnbyDJeFJnWbqr', '2018-01-14 18:10:10', '2018-01-14 18:10:10'),
(6, 'Ahmad Budiawan', 'ahmadbudi123@gmail.com', '', '$2y$10$ylsPixS29xDRm/J/FglqrukjKFR/4G8g2UnAweW/y1fL.bhOfw7/u', '2', '0895322931444', NULL, 'laki-laki', '0', NULL, NULL, '2018-01-14 19:05:47', '2018-01-14 19:05:47'),
(7, 'Yanto', 'suyanto@gmail.com', '', '$2y$10$CuE2kVZCvt9BWB4UZ4dP2ezfrXHePnkNQnhpSqmvEFv0lnUfPqRZG', '2', '0895322931444', NULL, 'laki-laki', '0', NULL, 'zlqF3DZPo519xqzsvnaC7Cc2kJTvWw7KvUttkz0u0xjaXHbk05zwylQ2tepz', '2018-01-15 17:05:23', '2018-01-15 17:05:23'),
(8, 'yanto', 'yanto@gmail.com', 'yanto', '$2y$10$BccOfsmYI2S9PwNJk/nJx./MD7OopFhHcZwlJ7rmdDfHj3APZfc5y', '2', '08211233423', NULL, 'laki-laki', '0', NULL, '0rb39S1o9o60j20lyh8ejdFHocee0EObYZlU0F5qy4afsm2DnKNrE8Mzp41G', '2018-01-15 17:40:16', '2018-01-15 17:40:16'),
(9, 'Toni', NULL, 'toni', '$2y$10$9nm2k.wQZob.xt1rj7V28OXaJw7kwDUenec19vSY0Pwhg0x74czvK', '3', NULL, NULL, NULL, '1', 8, NULL, '2018-01-15 20:39:12', '2018-01-15 20:39:49'),
(10, 'yanto', 'yanto@yahoo.com', 'yanto12', '$2y$10$OL6b9.ZeaP7ba0INSO6hJ.Sl6SW6pPKWkZEXiY52tfWYTADSiRV2K', '2', '018276543', NULL, 'laki-laki', '0', NULL, 'c3K2MPJrdPYPaxrPPTryuO9m98rUjfQjhANnFjqHwhU9jUhPP06NVWhzu1aD', '2018-01-15 21:02:29', '2018-01-15 21:02:29'),
(11, 'toni abdullah', NULL, 'tonia', '$2y$10$bf05phynlovD2mCdisv9sOdCmS5sCBkFOqsLN.l1E27YKIBygrALS', '3', NULL, NULL, NULL, '1', 10, NULL, '2018-01-15 21:02:56', '2018-01-15 21:02:56'),
(12, 'budi', 'budi@mail.com', 'budiawan', '$2y$10$DhVKfR4ZhrrfwK4IAniUE.NMdVcgxg/f5f.HigDht3u4Yhs4dPjGW', '2', '0812712', NULL, 'laki-laki', '0', NULL, 'A6tTGcrrfmnZG379tZgjWrzawNoDvB2hRMR1mZ6dBQvS0xNwWTefSmGtch0R', '2018-01-15 21:09:23', '2018-01-15 21:09:23'),
(14, 'ahmad budiawan', 'budiawan@mail.com', 'budiawan19', '$2y$10$6oxYUzhCxOrv99AVsd6vv.vWrJHrqqGj3SbNXRLKGVdJfMDBFTOtK', '3', NULL, NULL, NULL, '1', 12, 'eoMmIj5A90m24dlvIYocFvPToFBnizmmtzaIdNgAdzJs0AYxdrxMjzoeL16e', '2018-01-15 21:19:08', '2018-01-15 21:19:08'),
(15, 'jjj', 'jjj@gmail.com', 'username', '$2y$10$4HiTSEr459ggeW9sdUhzWOseyrISz0oIcei0RDVsT.URWoe0Ec.0.', '2', '9929929299', NULL, 'laki-laki', '0', NULL, 'V5f5uuECg3e4kbMEVx1swiua4742TTmu8YijMBmskOLxgoXrksr9xb3dAMFr', '2018-01-15 21:47:46', '2018-01-15 21:47:46'),
(16, 'faris', 'fariswidhiarta123@gmail.com', 'faris', '$2y$10$T3yURq0j9Boi/578vRcNUu/M2D3uP2f22z7Qb1cFhZywDSoX6HUAi', '3', NULL, NULL, NULL, '1', 15, 'BmY2MDkNw509x54JSJR3Z5Ku22mp4pXOT3Zw843jxCKgdOA6fcMRcxOcMl9W', '2018-01-15 21:49:01', '2018-01-15 21:49:01'),
(17, 'adam', 'adam@adam.com', 'admin', '$2y$10$k5LTN7hEsvYDu0GtjnsAG.KfvPe2VD2S.Rh7JAtG5p2J1MbC0k5ce', '2', '08182812', NULL, 'laki-laki', '0', NULL, 'QDGDayIg0GnjhhIYYKV8myTeNJiPgyyjQ0BPPmr8KMvP5SMUJjGEJM1Qebvy', '2018-01-15 22:27:51', '2018-01-15 22:27:51'),
(18, 'maryono', 'maryono@gmail.com', 'maryono', '$2y$10$M9PyJV3FHZ..HKN1r7Tm1eAWd9VVCo10GuJT0NPZshEQfrjWzP1s6', '3', NULL, NULL, NULL, '1', 8, '3VbbHvZNopmTgUzRgBsFtlvUuYOwp65Q17f8Atbi8sGY7I7SIdJxfrWCYqoQ', '2018-01-16 06:50:56', '2018-01-16 06:52:08'),
(19, 'admin', 'admin@admin.com', 'adminis', '$2y$10$xuEsPBJb081kZ/IDJxRJD.9d5XFvz3utS6BR7YrmskqeznKqH4U/G', '1', '0891221', NULL, 'laki-laki', '0', NULL, 'Yqm8tXOSDkP8pw5Nmqlxje8j6ofnekdziQQNKRFkGPWgLps3zB84ZkLrwRvh', '2018-01-19 00:37:49', '2018-01-19 00:37:49');

-- --------------------------------------------------------

--
-- Table structure for table `users_answers`
--

CREATE TABLE `users_answers` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_children` int(11) NOT NULL,
  `id_question` int(11) NOT NULL,
  `id_answer` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sessid` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `on_going` int(11) DEFAULT NULL,
  `point` int(11) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users_answers`
--

INSERT INTO `users_answers` (`id`, `id_children`, `id_question`, `id_answer`, `sessid`, `on_going`, `point`, `deleted_at`, `created_at`, `updated_at`) VALUES
(22, 18, 33, '11', '79747', 1, 33, NULL, '2018-01-18 07:40:17', '2018-01-18 07:40:17'),
(23, 18, 34, '6', '79747', 1, 0, NULL, '2018-01-18 07:40:25', '2018-01-18 07:40:25'),
(24, 18, 35, '8', '79747', 1, 33, NULL, '2018-01-18 07:40:28', '2018-01-18 07:40:28'),
(25, 18, 37, '9', '1007', 1, 0, NULL, '2018-01-18 15:43:33', '2018-01-18 15:43:33'),
(26, 18, 36, '15', '1007', 1, 0, NULL, '2018-01-18 15:52:31', '2018-01-18 15:56:20'),
(27, 18, 38, '5', '1007', 1, 33, NULL, '2018-01-18 15:57:05', '2018-01-18 16:12:12'),
(28, 18, 39, '9', 'IM7PFPL', 1, 0, NULL, '2018-01-18 17:27:15', '2018-01-18 17:27:15'),
(29, 18, 40, '12', 'IM7PFPL', 1, 0, NULL, '2018-01-18 17:27:18', '2018-01-18 17:27:18'),
(30, 18, 41, '6', 'IM7PFPL', 1, 0, NULL, '2018-01-18 17:27:31', '2018-01-18 17:27:34'),
(31, 18, 42, '17', 'V4YTMJF', 1, 0, NULL, '2018-01-18 17:27:54', '2018-01-18 17:27:54'),
(32, 18, 44, '4', 'V4YTMJF', 1, 0, NULL, '2018-01-18 17:28:00', '2018-01-18 17:28:00'),
(33, 18, 43, '13', 'V4YTMJF', 1, 0, NULL, '2018-01-18 17:28:04', '2018-01-18 17:28:04'),
(34, 18, 45, '5', '0N27UEI', 1, 33, NULL, '2018-01-18 17:30:25', '2018-01-18 17:30:26'),
(35, 18, 46, '8', '0N27UEI', 1, 33, NULL, '2018-01-18 17:30:30', '2018-01-18 17:30:31'),
(36, 18, 47, '13', '0N27UEI', 1, 0, NULL, '2018-01-18 17:30:35', '2018-01-18 17:30:35'),
(37, 18, 48, '7', 'YAWJ7H8', 1, 0, NULL, '2018-01-18 17:40:58', '2018-01-18 17:40:58'),
(38, 18, 49, '16', 'YAWJ7H8', 1, 0, NULL, '2018-01-18 17:41:01', '2018-01-18 17:41:01'),
(39, 18, 50, '13', 'YAWJ7H8', 1, 0, NULL, '2018-01-18 17:41:04', '2018-01-18 17:41:04'),
(40, 18, 51, '6', 'WTCM5HT', 0, 0, NULL, '2018-01-18 17:45:29', '2018-01-18 17:46:54'),
(41, 18, 52, '9', 'WTCM5HT', 0, 0, NULL, '2018-01-18 17:45:36', '2018-01-18 17:46:54'),
(42, 18, 53, '15', 'WTCM5HT', 0, 0, NULL, '2018-01-18 17:45:39', '2018-01-18 17:46:54'),
(43, 18, 57, '16', 'R2PTGAZ', 0, 0, NULL, '2018-01-18 18:24:02', '2018-01-18 18:27:05'),
(44, 18, 58, '4', 'R2PTGAZ', 0, 0, NULL, '2018-01-18 18:24:08', '2018-01-18 18:27:05'),
(45, 18, 59, '13', 'R2PTGAZ', 0, 0, NULL, '2018-01-18 18:26:27', '2018-01-18 18:27:05'),
(46, 8, 63, '11', '8MN2KTY', 0, 33, NULL, '2018-01-18 23:04:57', '2018-01-18 23:05:28'),
(47, 8, 64, '8', '8MN2KTY', 0, 33, NULL, '2018-01-18 23:05:08', '2018-01-18 23:05:28'),
(48, 8, 65, '5', '8MN2KTY', 0, 33, NULL, '2018-01-18 23:05:22', '2018-01-18 23:05:28'),
(49, 18, 72, '5', '7FPKJMO', 0, 33, NULL, '2018-01-19 00:01:36', '2018-01-19 00:01:49'),
(50, 18, 73, '14', '7FPKJMO', 0, 0, NULL, '2018-01-19 00:01:40', '2018-01-19 00:01:49'),
(51, 18, 74, '10', '7FPKJMO', 0, 0, NULL, '2018-01-19 00:01:45', '2018-01-19 00:01:49');

-- --------------------------------------------------------

--
-- Table structure for table `users_questions`
--

CREATE TABLE `users_questions` (
  `id` int(10) UNSIGNED NOT NULL,
  `sessid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_module` int(11) NOT NULL,
  `id_question` int(11) NOT NULL,
  `id_answer` int(11) DEFAULT NULL,
  `id_user` int(11) NOT NULL,
  `point` int(11) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users_questions`
--

INSERT INTO `users_questions` (`id`, `sessid`, `id_module`, `id_question`, `id_answer`, `id_user`, `point`, `deleted_at`, `created_at`, `updated_at`) VALUES
(24, '5302', 1, 8, NULL, 18, NULL, NULL, '2018-01-17 06:28:21', '2018-01-17 06:28:21'),
(25, '5302', 1, 7, NULL, 18, NULL, NULL, '2018-01-17 06:28:21', '2018-01-17 06:28:21'),
(26, '5302', 1, 6, NULL, 18, NULL, NULL, '2018-01-17 06:28:21', '2018-01-17 06:28:21'),
(27, '75603', 1, 7, NULL, 18, NULL, NULL, '2018-01-17 15:41:22', '2018-01-17 15:41:22'),
(28, '75603', 1, 8, NULL, 18, NULL, NULL, '2018-01-17 15:41:23', '2018-01-17 15:41:23'),
(29, '75603', 1, 9, NULL, 18, NULL, NULL, '2018-01-17 15:41:23', '2018-01-17 15:41:23'),
(30, '44807', 1, 6, NULL, 18, NULL, NULL, '2018-01-17 23:37:34', '2018-01-17 23:37:34'),
(31, '44807', 1, 9, NULL, 18, NULL, NULL, '2018-01-17 23:37:34', '2018-01-17 23:37:34'),
(32, '44807', 1, 8, NULL, 18, NULL, NULL, '2018-01-17 23:37:34', '2018-01-17 23:37:34'),
(33, '79747', 1, 8, NULL, 18, NULL, NULL, '2018-01-18 01:33:34', '2018-01-18 01:33:34'),
(34, '79747', 1, 6, NULL, 18, NULL, NULL, '2018-01-18 01:33:34', '2018-01-18 01:33:34'),
(35, '79747', 1, 7, NULL, 18, NULL, NULL, '2018-01-18 01:33:34', '2018-01-18 01:33:34'),
(36, '1007', 1, 9, NULL, 18, NULL, NULL, '2018-01-18 15:39:46', '2018-01-18 15:39:46'),
(37, '1007', 1, 7, NULL, 18, NULL, NULL, '2018-01-18 15:39:46', '2018-01-18 15:39:46'),
(38, '1007', 1, 6, NULL, 18, NULL, NULL, '2018-01-18 15:39:46', '2018-01-18 15:39:46'),
(39, 'IM7PFPL', 1, 7, NULL, 18, NULL, NULL, '2018-01-18 17:27:08', '2018-01-18 17:27:08'),
(40, 'IM7PFPL', 1, 8, NULL, 18, NULL, NULL, '2018-01-18 17:27:08', '2018-01-18 17:27:08'),
(41, 'IM7PFPL', 1, 6, NULL, 18, NULL, NULL, '2018-01-18 17:27:09', '2018-01-18 17:27:09'),
(42, 'V4YTMJF', 1, 9, NULL, 18, NULL, NULL, '2018-01-18 17:27:49', '2018-01-18 17:27:49'),
(43, 'V4YTMJF', 1, 8, NULL, 18, NULL, NULL, '2018-01-18 17:27:49', '2018-01-18 17:27:49'),
(44, 'V4YTMJF', 1, 6, NULL, 18, NULL, NULL, '2018-01-18 17:27:49', '2018-01-18 17:27:49'),
(45, '0N27UEI', 1, 6, NULL, 18, NULL, NULL, '2018-01-18 17:29:35', '2018-01-18 17:29:35'),
(46, '0N27UEI', 1, 7, NULL, 18, NULL, NULL, '2018-01-18 17:29:35', '2018-01-18 17:29:35'),
(47, '0N27UEI', 1, 8, NULL, 18, NULL, NULL, '2018-01-18 17:29:35', '2018-01-18 17:29:35'),
(48, 'YAWJ7H8', 1, 7, NULL, 18, NULL, NULL, '2018-01-18 17:40:51', '2018-01-18 17:40:51'),
(49, 'YAWJ7H8', 1, 9, NULL, 18, NULL, NULL, '2018-01-18 17:40:51', '2018-01-18 17:40:51'),
(50, 'YAWJ7H8', 1, 8, NULL, 18, NULL, NULL, '2018-01-18 17:40:51', '2018-01-18 17:40:51'),
(51, 'WTCM5HT', 1, 6, NULL, 18, NULL, NULL, '2018-01-18 17:45:22', '2018-01-18 17:45:22'),
(52, 'WTCM5HT', 1, 7, NULL, 18, NULL, NULL, '2018-01-18 17:45:22', '2018-01-18 17:45:22'),
(53, 'WTCM5HT', 1, 9, NULL, 18, NULL, NULL, '2018-01-18 17:45:22', '2018-01-18 17:45:22'),
(54, 'D51YCGX', 1, 7, NULL, 18, NULL, NULL, '2018-01-18 18:22:45', '2018-01-18 18:22:45'),
(55, 'D51YCGX', 1, 9, NULL, 18, NULL, NULL, '2018-01-18 18:22:45', '2018-01-18 18:22:45'),
(56, 'D51YCGX', 1, 8, NULL, 18, NULL, NULL, '2018-01-18 18:22:46', '2018-01-18 18:22:46'),
(57, 'R2PTGAZ', 1, 9, NULL, 18, NULL, NULL, '2018-01-18 18:22:56', '2018-01-18 18:22:56'),
(58, 'R2PTGAZ', 1, 6, NULL, 18, NULL, NULL, '2018-01-18 18:22:56', '2018-01-18 18:22:56'),
(59, 'R2PTGAZ', 1, 8, NULL, 18, NULL, NULL, '2018-01-18 18:22:56', '2018-01-18 18:22:56'),
(60, 'LC94P48', 1, 6, NULL, 18, NULL, NULL, '2018-01-18 19:03:42', '2018-01-18 19:03:42'),
(61, 'LC94P48', 1, 9, NULL, 18, NULL, NULL, '2018-01-18 19:03:42', '2018-01-18 19:03:42'),
(62, 'LC94P48', 1, 8, NULL, 18, NULL, NULL, '2018-01-18 19:03:42', '2018-01-18 19:03:42'),
(63, '8MN2KTY', 1, 8, NULL, 8, NULL, NULL, '2018-01-18 23:04:49', '2018-01-18 23:04:49'),
(64, '8MN2KTY', 1, 7, NULL, 8, NULL, NULL, '2018-01-18 23:04:49', '2018-01-18 23:04:49'),
(65, '8MN2KTY', 1, 6, NULL, 8, NULL, NULL, '2018-01-18 23:04:49', '2018-01-18 23:04:49'),
(66, 'RBF7SHE', 1, 7, NULL, 7, NULL, NULL, '2018-01-18 23:51:10', '2018-01-18 23:51:10'),
(67, 'RBF7SHE', 1, 8, NULL, 7, NULL, NULL, '2018-01-18 23:51:10', '2018-01-18 23:51:10'),
(68, 'RBF7SHE', 1, 6, NULL, 7, NULL, NULL, '2018-01-18 23:51:10', '2018-01-18 23:51:10'),
(69, '4O3X8JV', 1, 9, NULL, 18, NULL, NULL, '2018-01-18 23:53:18', '2018-01-18 23:53:18'),
(70, '4O3X8JV', 1, 8, NULL, 18, NULL, NULL, '2018-01-18 23:53:19', '2018-01-18 23:53:19'),
(71, '4O3X8JV', 1, 6, NULL, 18, NULL, NULL, '2018-01-18 23:53:19', '2018-01-18 23:53:19'),
(72, '7FPKJMO', 1, 6, NULL, 18, NULL, NULL, '2018-01-19 00:01:30', '2018-01-19 00:01:30'),
(73, '7FPKJMO', 1, 8, NULL, 18, NULL, NULL, '2018-01-19 00:01:31', '2018-01-19 00:01:31'),
(74, '7FPKJMO', 1, 7, NULL, 18, NULL, NULL, '2018-01-19 00:01:31', '2018-01-19 00:01:31');

-- --------------------------------------------------------

--
-- Table structure for table `verifications`
--

CREATE TABLE `verifications` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_user` int(11) NOT NULL,
  `verification_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activities`
--
ALTER TABLE `activities`
  ADD PRIMARY KEY (`id_activity`);

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `answers`
--
ALTER TABLE `answers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `childrens`
--
ALTER TABLE `childrens`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `materials`
--
ALTER TABLE `materials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `modules`
--
ALTER TABLE `modules`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `points`
--
ALTER TABLE `points`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subjects`
--
ALTER TABLE `subjects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `users_answers`
--
ALTER TABLE `users_answers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users_questions`
--
ALTER TABLE `users_questions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `verifications`
--
ALTER TABLE `verifications`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `activities`
--
ALTER TABLE `activities`
  MODIFY `id_activity` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `answers`
--
ALTER TABLE `answers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `childrens`
--
ALTER TABLE `childrens`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `materials`
--
ALTER TABLE `materials`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
--
-- AUTO_INCREMENT for table `modules`
--
ALTER TABLE `modules`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `points`
--
ALTER TABLE `points`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `subjects`
--
ALTER TABLE `subjects`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `users_answers`
--
ALTER TABLE `users_answers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;
--
-- AUTO_INCREMENT for table `users_questions`
--
ALTER TABLE `users_questions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;
--
-- AUTO_INCREMENT for table `verifications`
--
ALTER TABLE `verifications`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
