-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 16, 2020 at 04:23 AM
-- Server version: 5.7.19
-- PHP Version: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `semesta_buku`
--

-- --------------------------------------------------------

--
-- Table structure for table `artikels`
--

CREATE TABLE `artikels` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `judul` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cover` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `buku_id` bigint(20) UNSIGNED NOT NULL,
  `konten` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `artikels`
--

INSERT INTO `artikels` (`id`, `judul`, `cover`, `user_id`, `buku_id`, `konten`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'Novel Terlaris di Bulan September', 'WzFQcd_242593_book-wallpaper.jpg', 1, 6, '<pre>\r\nSebagian Besar Hal yang anda Ketahui tentang Kesuksesan Adalah Salah Besar\r\n\r\nBanyak saran yang diberikan kepada kita tentang kesuksesan terdengar masuk akal, serius-dan jelas-jelas salah. Eric Barker mengungkap fakta-fakta luar biasa tentang penentu kesuksesan-yang mungkin sebelumnya tidak kita pikirkan, seperti:\r\n- Mengapa murid paling pintar di sekolah jarang menjadi miliarder dan bagaimana kelemahan terbesar Anda bisa menjadi kekuatan terhebat Anda.\r\n- Apakah orang baik selalu menjadi yang terakhir mencapai garis akhir dan mengapa pelajaran terbaik tentang kerja sama datang dari anggota geng, bajak laut, dan pembunuh berantai.\r\n- Mengapa mencoba meningkatkan kepercayaan diri selalu gagal dan bagaimana filosofi Buddha memberi solusi yang terbaik.\r\n- Bagaimana menemukan keseimbangan hidup dan kerja dengan menggunakan strategi Genghis Khan, kesalahan-kesalahan yang dilakukan Albert Einstein, dan satu pelajaran kecil dari Speder-Man.\r\n\r\nDengan mencermati yang memisahkan kesuksesan yang luar biasa dari yang biasa-biasa saja, kita bisa berhenti menebak-nebak rahasia mencapai kesuksesan dan memulai kehidupan yang Anda inginkan.</pre>', 'novel-terlaris-di-bulan-september', '2020-01-14 07:03:59', '2020-01-15 19:07:55'),
(2, 'Novel Karya Fiersa Besari', 'rGNoqd_mee.jpg', 1, 8, '<pre>\r\nSebagian Besar Hal yang anda Ketahui tentang Kesuksesan Adalah Salah Besar\r\n\r\nBanyak saran yang diberikan kepada kita tentang kesuksesan terdengar masuk akal, serius-dan jelas-jelas salah. Eric Barker mengungkap fakta-fakta luar biasa tentang penentu kesuksesan-yang mungkin sebelumnya tidak kita pikirkan, seperti:\r\n- Mengapa murid paling pintar di sekolah jarang menjadi miliarder dan bagaimana kelemahan terbesar Anda bisa menjadi kekuatan terhebat Anda.\r\n- Apakah orang baik selalu menjadi yang terakhir mencapai garis akhir dan mengapa pelajaran terbaik tentang kerja sama datang dari anggota geng, bajak laut, dan pembunuh berantai.\r\n- Mengapa mencoba meningkatkan kepercayaan diri selalu gagal dan bagaimana filosofi Buddha memberi solusi yang terbaik.\r\n- Bagaimana menemukan keseimbangan hidup dan kerja dengan menggunakan strategi Genghis Khan, kesalahan-kesalahan yang dilakukan Albert Einstein, dan satu pelajaran kecil dari Speder-Man.\r\n\r\nDengan mencermati yang memisahkan kesuksesan yang luar biasa dari yang biasa-biasa saja, kita bisa berhenti menebak-nebak rahasia mencapai kesuksesan dan memulai kehidupan yang Anda inginkan.</pre>', 'novel-karya-fiersa-besari', '2020-01-15 06:29:20', '2020-01-15 06:29:20'),
(3, 'Hidup Penuh dengan Seni', 'pJvslq_undftd.png', 1, 5, '<pre>\r\nSebagian Besar Hal yang anda Ketahui tentang Kesuksesan Adalah Salah Besar\r\n\r\nBanyak saran yang diberikan kepada kita tentang kesuksesan terdengar masuk akal, serius-dan jelas-jelas salah. Eric Barker mengungkap fakta-fakta luar biasa tentang penentu kesuksesan-yang mungkin sebelumnya tidak kita pikirkan, seperti:\r\n- Mengapa murid paling pintar di sekolah jarang menjadi miliarder dan bagaimana kelemahan terbesar Anda bisa menjadi kekuatan terhebat Anda.\r\n- Apakah orang baik selalu menjadi yang terakhir mencapai garis akhir dan mengapa pelajaran terbaik tentang kerja sama datang dari anggota geng, bajak laut, dan pembunuh berantai.\r\n- Mengapa mencoba meningkatkan kepercayaan diri selalu gagal dan bagaimana filosofi Buddha memberi solusi yang terbaik.\r\n- Bagaimana menemukan keseimbangan hidup dan kerja dengan menggunakan strategi Genghis Khan, kesalahan-kesalahan yang dilakukan Albert Einstein, dan satu pelajaran kecil dari Speder-Man.\r\n\r\nDengan mencermati yang memisahkan kesuksesan yang luar biasa dari yang biasa-biasa saja, kita bisa berhenti menebak-nebak rahasia mencapai kesuksesan dan memulai kehidupan yang Anda inginkan.</pre>', 'hidup-penuh-dengan-seni', '2020-01-15 06:32:21', '2020-01-15 06:32:21');

-- --------------------------------------------------------

--
-- Table structure for table `artikel_genres`
--

CREATE TABLE `artikel_genres` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `artikel_id` bigint(20) UNSIGNED NOT NULL,
  `genre_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `artikel_genres`
--

INSERT INTO `artikel_genres` (`id`, `artikel_id`, `genre_id`, `created_at`, `updated_at`) VALUES
(1, 1, 1, NULL, NULL),
(2, 1, 3, NULL, NULL),
(4, 2, 3, NULL, NULL),
(5, 3, 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `bukus`
--

CREATE TABLE `bukus` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `judul` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cover` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `penulis` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `penerbit` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_isbn` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rating` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sinopsis` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgl_terbit` date NOT NULL,
  `jml_halaman` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kategori_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bukus`
--

INSERT INTO `bukus` (`id`, `judul`, `cover`, `penulis`, `penerbit`, `no_isbn`, `rating`, `slug`, `sinopsis`, `tgl_terbit`, `jml_halaman`, `kategori_id`, `created_at`, `updated_at`) VALUES
(1, 'Sebuah Seni Untuk Bersikap Bodoamat', 'PiGbXy_seni.jpg', 'Mark Manson', 'Gramedia Widiasarana Indonesia', '9786024526986', '5', 'sebuah-seni-untuk-bersikap-bodoamat', '<p>&lt;pre&gt; &amp;quot;Selama beberapa tahun belakangan, Mark Manson&amp;mdash;melalui blognya yang sangat populer&amp;mdash;telah membantu mengoreksi harapan-harapan delusional kita, baik mengenai diri kita sendiri maupun dunia. Ia kini menuangkan buah pikirnya yang keren itu di dalam buku hebat ini. &amp;ldquo;Dalam hidup ini, kita hanya punya kepedulian dalam jumlah yang terbatas. Makanya, Anda harus bijaksana dalam menentukan kepedulian Anda.&amp;rdquo; Manson menciptakan momen perbincangan yang serius dan mendalam, dibungkus dengan cerita-cerita yang menghibur dan &amp;ldquo;kekinian&amp;rdquo;, serta humor yang cadas. Buku ini merupakan tamparan di wajah yang menyegarkan untuk kita semua, supaya kita bisa mulai menjalani kehidupan yang lebih memuaskan, dan apa adanya.&lt;/pre&gt;</p>', '2018-05-02', '250', 2, '2020-01-14 05:38:46', '2020-01-14 05:38:46'),
(2, 'KKN di Desa Penari', '9plkeD_3.jpg', 'Simpleman', 'BUKUNE', '9786022203339', '4', 'kkn-di-desa-penari', '<pre>\r\nSaat motor melaju kencang menembus hutan, Widya mendengar tabuhan gamelan. Suaranya mendayu-dayu dan terasa semakin dekat. Tiba-tiba Widya melihat sesosok manusia tengah menelungkup seakan memasang pose menari. Ia berlenggak-lenggok mengikuti irama musik gamelan yang ditabuh cepat.\r\n\r\nSiapa yang menari di malam gulita seperti ini?\r\n\r\nTiga puluh menit berlalu, dan atap rumah terlihat samar-samar dengan cahaya yang meski tamaram bisa dilihat jelas oleh mata.\r\n&quot;Mbak... kita sudah sampai di desa.&quot;\r\n\r\nDari kisah yang menggemparkan dunia maya, KKN di Desa Penari kini diceritakan lewat lembar tulisan yang lebih rinci. Menuturkan kisah Widya, Nur, dan kawan kawan, serta bagian bagian yang belum pernah dibagikan di mana pun sebelumnya.</pre>', '2019-09-16', '255', 1, '2020-01-15 05:02:29', '2020-01-15 05:02:29'),
(3, 'How Could ?', 'teHn7m_4.jpg', 'Asabella Audida', 'Romancius', '9786237211280', '4', 'how-could', '<pre>\r\nValery, kekasih Vee, menghilang menjelang hari pernikahan mereka...\r\n\r\nCinta Vee pada Valery, membuatnya gila. Demi menjaga nama baik Valery di hadapan neneknya, Vee menyusun sebuah rencana untuk menikahi Aily adik kandung Valery. Rencana itu pun disetujui oleh kedua belah pihak. Vee berjanji semuanya akan baik-baik saja. Tidak akan ada yang terluka.\r\n\r\nAwalnya, Vee menganggap Aily sebagai calon adik ipar saja. Hanya itu, tidak lebih. Namun, tanpa ia sadari, sikap polos Aily mampu maluluhkan hatinya. Dan perlahan, mampu mengurangi kesedihannya atas hilangnya Valery secara misterius.\r\n\r\nVee sadar kalau dirinya mulai tertarik dengan Aily. Tapi, pada saat ia mulai mengendalikan perasaannya, ada hal yang tidak masuk akal mengenai dirinya dengan Aily. Sosok Aily, seperti ia pernah kenal sebelumnya.\r\n\r\nDi tengah kebingungan tersebut, tiba-tiba saja Valery ditemukan dengan membawa satu hal besar yang telah diungkapnya sendirian.\r\n\r\nLantas, kepada siapa Vee menjatuhkan pilihannya?\r\n\r\nApakah Vee mampu menepati janji untuk memastikan semuanya baik-baik saja, tanpa ada yang terluka?</pre>', '2019-08-28', '333', 1, '2020-01-15 05:05:10', '2020-01-15 05:05:10'),
(4, 'Tanjung Kemarau', '2oQTTf_6.jpg', 'Royyan Julian', 'Gramedia Widiasarana Indonesia', '9786024523527', '4', 'tanjung-kemarau', '<pre>\r\nWalid tak pernah menduga bahwa kepulangannya ke kampung halamannya di Madura menyeretnya kepada sebuah konflik yang lebih pelik daripada persoalan dengan kekasihnya di Yogyakarta. Di dusun yang senantiasa dihunjam kemarau, ia terjerumus ke dalam sebuah perbuatan serong dengan Ria, mantan biduan yang merupakan istri bekas seorang bajing. Lebih jauh lagi, ia terperosok ke dalam pusaran politik desa yang melibatkan Ra Amir (putra kiai yang berambisi pada kekuasaan), Nyai Rasera (perempuan sakti berusia ratusan tahun yang menyusui kelelawar-kelelawar hutan bakau), dan Maulana Bulan Purnama (mursyid Tarekat Nabi Kesturi).\r\n\r\nMenarasikan kon lik politik yang sarat intrik, konspirasi, dan pengkhiatan, Tanjung Kemarau dibumbui kisah eros, sihir, dunia perbanditan, kerusakan ekologi, gosip tentang bajak laut, dongeng-dongeng, serta pengalaman ilahiah yang memabukkan.</pre>', '2017-10-02', '262', 1, '2020-01-15 05:08:35', '2020-01-15 05:08:35'),
(5, 'Bicara Itu Ada Seninya', 'MElXOA_9786024553920_Bicara-Itu-Ada-Seninya__w414_hauto.jpg', 'Oh Su Hyang', 'Bhuana Ilmu Populer', '9786024553920', '5', 'bicara-itu-ada-seninya', '<p>&nbsp;</p>\r\n\r\n<pre>\r\n&quot;TAHUKAH ANDA BAHWA BERBICARA ITU ADA SENINYA?\r\nKetika komunikasi menjadi hal yang penting untuk bersaing, pakar komunikasi Oh Su Hyang mengeluarkan buku yang sangat berarti. Selain berisi tentang pengalaman peningkatan diri, buku ini juga memuat berbagai konten mengenai teknik komunikasi, persuasi, dan negosiasi.\r\n\r\n\r\n\r\nLalu bagaimana cara berbicara yang baik? Apakah berbicara dengan artikulasi yang jelas? Atau berbicara tanpa mengambil tarikan napas? Tidak! Sebuah ucapan yang bisa disebut baik adalah yang bisa menggetarkan hati. Ucapan seorang juara memiliki daya tarik tersendiri. Ucapan pemandu acara memiliki kemampuan menghidupkan suasana dan kekuatan kalimatnya yang terus terang. Anda harus pandai berbicara untuk menunjukkan diri Anda kepada lawan bicara dalam kehidupan sosial. Orang yang berbicara dengan mahir akan menjadi lebih maju daripada yang lainnya.\r\n\r\n\r\n\r\nUntuk mencapai tujuan komunikasi, persuasi, dan negosiasi, Anda harus mengetahui metode komunikasi yang efisien. Buku ini dijabarkan agar dapat dimengerti oleh siapa saja. Terdapat banyak episode menarik dari orang-orang terkenal dan juga rahasia inti dari komunikasi. Jika Anda membacanya dengan runut, saya yakin rasa percaya diri Anda untuk berbicara pun akan tumbuh dengan sendirinya.&quot;</pre>', '2018-04-20', '256', 2, '2020-01-15 05:11:39', '2020-01-15 05:14:41'),
(6, 'Heart Decor', '5t1qLG_7.jpg', 'Mala Shantii', 'Gramedia Widiasarana Indonesia', '9786020502557', '5', 'heart-decor', '<pre>\r\nKarena tidak kuliah kedokteran, maka tidak punya kekasih di usia dua puluh\r\ntujuh tahun adalah sebuah kekeliruan bagi mama Jenna. Dan itu menyebabkan\r\nJenna harus mau saja dijodohkan dengan Dokter Gary oleh mamanya. Padahal\r\nbukannya tak mau, atau tak laku, Jenna hanya tak mau sembarangan memilih.\r\n\r\n\r\n\r\nBukan hanya mamanya, Tantri sahabatnya yang sebenarnya juga jomlo juga\r\nikut mencarikannya pasangan. Target yang disodorkan kepada Jenna adalah\r\nFerdian, seorang klien yang cukup menjanjikan, bukan dokter, dan terlihat\r\ncharming dengan kacamatanya. Namun ternyata Ferdian memiliki sikap yang\r\nberbeda jauh dengan tampilanya. Ia begitu menyebalkan bagi Jenna, meski\r\nsebenarnya ia menaruh rasa.\r\n\r\n\r\n\r\n\r\nLalu, manakah yang akan dipilih Jenna di antara Ferdian dan Dokter Gary\r\npilihan mamanya?</pre>', '2018-04-23', '310', 1, '2020-01-15 05:13:59', '2020-01-15 05:13:59'),
(7, 'Ensiklopedia Sains', 'mmbjYH_8.jpg', 'Usborne', 'Bhuana Ilmu Populer', '9786022497301', '6', 'ensiklopedia-sains', '<pre>\r\nBuku ini memperkenalkan seluruh bidang ilmu pengetahuan, mulai dari fisika, kimia, biologi, teknologi informasi, ilmu bumi, astronomi, hingga ilmu-ilmu baru, seperti rekayasa genetika, nanoteknologi, dan telekomunikasi.</pre>', '2014-05-09', '456', 2, '2020-01-15 05:32:33', '2020-01-15 19:28:19'),
(8, '11.11', 'y1BWrs_11.jpg', 'Fiersa Besari', 'Agromedia Pustaka', '9789797945695', '6', '1111', '<p>&nbsp;</p>\r\n\r\n<pre>\r\nOrang bilang, jodoh takkan ke mana. Aku rasa mereka keliru. Jodoh akan ke mana-mana terlebih dahulu sebelum akhirnya menetap.\r\n\r\n\r\nKetika waktunya telah tiba, ketika segala rasa sudah tidak bisa lagi dilawan, yang bisa kita lakukan hanyalah merangkul tanpa perlu banyak kompromi.</pre>', '2019-11-11', '211', 1, '2020-01-15 05:35:18', '2020-01-15 05:35:18'),
(9, 'Hujan Bulan Juni Sebuah Novel', '47yjME_12.jpg', 'Sapardi Djoko Damono', 'Gramedia Pustaka Utama', '9786020318431', '5', 'hujan-bulan-juni-sebuah-novel', '<pre>\r\nBagaimana mungkin seseorang memiliki\r\nkeinginan untuk mengurai kembali benang yang tak terkirakan jumlahnya dalam selembar sapu tangan yang telah ditenunnya sendiri. Bagaimana mungkin\r\nseseorang bisa mendadak terbebaskan dari jaringan benang yang\r\nsusun-bersusun, silang-menyilang, timpa-menimpa dengan rapi di\r\nselembar saputangan yang sudah bertahun-tahun lamanya ditenun dengan\r\nsabar oleh jari-jarinya sendiri oleh kesunyiannya sendiri oleh ketabahannya\r\nsendiri oleh tarikan dan hembusan napasnya sendiri oleh rintik waktu dalam\r\nbenaknya sendiri oleh kerinduannya sendiri oleh penghayatannya sendiri tentang\r\nhubungan-hubungan pelik antara perempuan dan laki-laki yang tinggal di sebuah\r\nruangan kedap suara yang bernama kasih sayang. Bagaimana mungkin.</pre>', '2015-06-15', '135', 1, '2020-01-15 05:38:36', '2020-01-15 05:38:36'),
(10, 'Mendaki Tangga yang Salah', 'mDhKwM_9786020388175_MENDAKI_TANGG__w414_hauto.jpg', 'Eric Barker', 'Gramedia Pustaka Utama', '9786020388175', '5', 'mendaki-tangga-yang-salah', '<pre>\r\nSebagian Besar Hal yang anda Ketahui tentang Kesuksesan Adalah Salah Besar\r\n\r\nBanyak saran yang diberikan kepada kita tentang kesuksesan terdengar masuk akal, serius-dan jelas-jelas salah. Eric Barker mengungkap fakta-fakta luar biasa tentang penentu kesuksesan-yang mungkin sebelumnya tidak kita pikirkan, seperti:\r\n- Mengapa murid paling pintar di sekolah jarang menjadi miliarder dan bagaimana kelemahan terbesar Anda bisa menjadi kekuatan terhebat Anda.\r\n- Apakah orang baik selalu menjadi yang terakhir mencapai garis akhir dan mengapa pelajaran terbaik tentang kerja sama datang dari anggota geng, bajak laut, dan pembunuh berantai.\r\n- Mengapa mencoba meningkatkan kepercayaan diri selalu gagal dan bagaimana filosofi Buddha memberi solusi yang terbaik.\r\n- Bagaimana menemukan keseimbangan hidup dan kerja dengan menggunakan strategi Genghis Khan, kesalahan-kesalahan yang dilakukan Albert Einstein, dan satu pelajaran kecil dari Speder-Man.\r\n\r\nDengan mencermati yang memisahkan kesuksesan yang luar biasa dari yang biasa-biasa saja, kita bisa berhenti menebak-nebak rahasia mencapai kesuksesan dan memulai kehidupan yang Anda inginkan.</pre>', '2018-03-04', '378', 2, '2020-01-15 05:41:38', '2020-01-15 05:41:38');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `genres`
--

CREATE TABLE `genres` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_genre` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `genres`
--

INSERT INTO `genres` (`id`, `nama_genre`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'Self Improvement', 'self-improvement', '2020-01-14 05:37:18', '2020-01-14 05:37:18'),
(2, 'Sejarah', 'sejarah', '2020-01-14 05:37:23', '2020-01-14 05:37:23'),
(3, 'Humor', 'humor', '2020-01-14 05:37:28', '2020-01-14 05:37:28'),
(4, 'Romantis', 'romantis', '2020-01-15 19:24:44', '2020-01-15 19:24:44');

-- --------------------------------------------------------

--
-- Table structure for table `kategoris`
--

CREATE TABLE `kategoris` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_kategori` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kategoris`
--

INSERT INTO `kategoris` (`id`, `nama_kategori`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'Novel', 'novel', '2020-01-14 05:37:01', '2020-01-14 05:37:01'),
(2, 'Pengetahuan', 'pengetahuan', '2020-01-14 05:37:08', '2020-01-14 05:37:08');

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_13_093305_create_kategoris_table', 1),
(5, '2019_12_13_093459_create_bukus_table', 1),
(6, '2019_12_13_093634_create_genres_table', 1),
(7, '2019_12_13_094004_create_artikels_table', 1),
(8, '2019_12_13_094110_artikel_genres', 1),
(9, '2019_12_13_100742_create_reviews_table', 1);

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
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `judul` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cover` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `quotes` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `buku_id` bigint(20) UNSIGNED DEFAULT NULL,
  `isi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`id`, `judul`, `cover`, `quotes`, `user_id`, `buku_id`, `isi`, `slug`, `created_at`, `updated_at`) VALUES
(2, 'Buku Motivasi Diri', '8ZlP3c_242593_book-wallpaper.jpg', 'Hadapi masalah, bukan menghindarinya', 1, 1, '<p>Sebagian Besar Hal yang anda Ketahui tentang Kesuksesan Adalah Salah Besar Banyak saran yang diberikan kepada kita tentang kesuksesan terdengar masuk akal, serius-dan jelas-jelas salah. Eric Barker mengungkap fakta-fakta luar biasa tentang penentu kesuksesan-yang mungkin sebelumnya tidak kita pikirkan, seperti: - Mengapa murid paling pintar di sekolah jarang menjadi miliarder dan bagaimana kelemahan terbesar Anda bisa menjadi kekuatan terhebat Anda. - Apakah orang baik selalu menjadi yang terakhir mencapai garis akhir dan mengapa pelajaran terbaik tentang kerja sama datang dari anggota geng, bajak laut, dan pembunuh berantai. - Mengapa mencoba meningkatkan kepercayaan diri selalu gagal dan bagaimana filosofi Buddha memberi solusi yang terbaik. - Bagaimana menemukan keseimbangan hidup dan kerja dengan menggunakan strategi Genghis Khan, kesalahan-kesalahan yang dilakukan Albert Einstein, dan satu pelajaran kecil dari Speder-Man. Dengan mencermati yang memisahkan kesuksesan yang luar biasa dari yang biasa-biasa saja, kita bisa berhenti menebak-nebak rahasia mencapai kesuksesan dan memulai kehidupan yang Anda inginkan.</p>', 'buku-motivasi-diri', '2020-01-14 20:11:43', '2020-01-15 19:16:14'),
(3, 'Novel Unik', '8Uw6O6_242593_book-wallpaper.jpg', 'Older', 1, 4, '<p>Sebagian Besar Hal yang anda Ketahui tentang Kesuksesan Adalah Salah Besar Banyak saran yang diberikan kepada kita tentang kesuksesan terdengar masuk akal, serius-dan jelas-jelas salah. Eric Barker mengungkap fakta-fakta luar biasa tentang penentu kesuksesan-yang mungkin sebelumnya tidak kita pikirkan, seperti: - Mengapa murid paling pintar di sekolah jarang menjadi miliarder dan bagaimana kelemahan terbesar Anda bisa menjadi kekuatan terhebat Anda. - Apakah orang baik selalu menjadi yang terakhir mencapai garis akhir dan mengapa pelajaran terbaik tentang kerja sama datang dari anggota geng, bajak laut, dan pembunuh berantai. - Mengapa mencoba meningkatkan kepercayaan diri selalu gagal dan bagaimana filosofi Buddha memberi solusi yang terbaik. - Bagaimana menemukan keseimbangan hidup dan kerja dengan menggunakan strategi Genghis Khan, kesalahan-kesalahan yang dilakukan Albert Einstein, dan satu pelajaran kecil dari Speder-Man. Dengan mencermati yang memisahkan kesuksesan yang luar biasa dari yang biasa-biasa saja, kita bisa berhenti menebak-nebak rahasia mencapai kesuksesan dan memulai kehidupan yang Anda inginkan.</p>', 'novel-unik', '2020-01-14 20:16:46', '2020-01-15 19:14:50'),
(4, 'Sebuah Jurnal', '2FeNE6_nbhdlogo.jpg', 'Mentang mentang besar hati. Kau masukkan semua orang kedalamnya!', 1, 8, '<pre>\r\nBanyak saran yang diberikan kepada kita tentang kesuksesan terdengar masuk akal, serius-dan jelas-jelas salah. Eric Barker mengungkap fakta-fakta luar biasa tentang penentu kesuksesan-yang mungkin sebelumnya tidak kita pikirkan, seperti:\r\n- Mengapa murid paling pintar di sekolah jarang menjadi miliarder dan bagaimana kelemahan terbesar Anda bisa menjadi kekuatan terhebat Anda.\r\n- Apakah orang baik selalu menjadi yang terakhir mencapai garis akhir dan mengapa pelajaran terbaik tentang kerja sama datang dari anggota geng, bajak laut, dan pembunuh berantai.\r\n- Mengapa mencoba meningkatkan kepercayaan diri selalu gagal dan bagaimana filosofi Buddha memberi solusi yang terbaik.\r\n- Bagaimana menemukan keseimbangan hidup dan kerja dengan menggunakan strategi Genghis Khan, kesalahan-kesalahan yang dilakukan Albert Einstein, dan satu pelajaran kecil dari Speder-Man.</pre>', 'sebuah-jurnal', '2020-01-15 07:01:48', '2020-01-15 07:01:48'),
(5, 'Novel Viral 2019', 'udKUOY_242593_book-wallpaper.jpg', 'KKN', 1, 2, '<p>Sebagian Besar Hal yang anda Ketahui tentang Kesuksesan Adalah Salah Besar Banyak saran yang diberikan kepada kita tentang kesuksesan terdengar masuk akal, serius-dan jelas-jelas salah. Eric Barker mengungkap fakta-fakta luar biasa tentang penentu kesuksesan-yang mungkin sebelumnya tidak kita pikirkan, seperti: - Mengapa murid paling pintar di sekolah jarang menjadi miliarder dan bagaimana kelemahan terbesar Anda bisa menjadi kekuatan terhebat Anda. - Apakah orang baik selalu menjadi yang terakhir mencapai garis akhir dan mengapa pelajaran terbaik tentang kerja sama datang dari anggota geng, bajak laut, dan pembunuh berantai. - Mengapa mencoba meningkatkan kepercayaan diri selalu gagal dan bagaimana filosofi Buddha memberi solusi yang terbaik. - Bagaimana menemukan keseimbangan hidup dan kerja dengan menggunakan strategi Genghis Khan, kesalahan-kesalahan yang dilakukan Albert Einstein, dan satu pelajaran kecil dari Speder-Man. Dengan mencermati yang memisahkan kesuksesan yang luar biasa dari yang biasa-biasa saja, kita bisa berhenti menebak-nebak rahasia mencapai kesuksesan dan memulai kehidupan yang Anda inginkan.</p>', 'novel-viral-2019', '2020-01-15 19:19:47', '2020-01-15 19:19:47'),
(6, 'Buku Pengetahuan Populer', '2hKDLf_242593_book-wallpaper.jpg', 'Ensiklopedia', 1, 7, '<p>Sebagian Besar Hal yang anda Ketahui tentang Kesuksesan Adalah Salah Besar Banyak saran yang diberikan kepada kita tentang kesuksesan terdengar masuk akal, serius-dan jelas-jelas salah. Eric Barker mengungkap fakta-fakta luar biasa tentang penentu kesuksesan-yang mungkin sebelumnya tidak kita pikirkan, seperti: - Mengapa murid paling pintar di sekolah jarang menjadi miliarder dan bagaimana kelemahan terbesar Anda bisa menjadi kekuatan terhebat Anda. - Apakah orang baik selalu menjadi yang terakhir mencapai garis akhir dan mengapa pelajaran terbaik tentang kerja sama datang dari anggota geng, bajak laut, dan pembunuh berantai. - Mengapa mencoba meningkatkan kepercayaan diri selalu gagal dan bagaimana filosofi Buddha memberi solusi yang terbaik. - Bagaimana menemukan keseimbangan hidup dan kerja dengan menggunakan strategi Genghis Khan, kesalahan-kesalahan yang dilakukan Albert Einstein, dan satu pelajaran kecil dari Speder-Man. Dengan mencermati yang memisahkan kesuksesan yang luar biasa dari yang biasa-biasa saja, kita bisa berhenti menebak-nebak rahasia mencapai kesuksesan dan memulai kehidupan yang Anda inginkan.</p>', 'buku-pengetahuan-populer', '2020-01-15 19:20:40', '2020-01-15 19:20:40'),
(7, 'Buku Terbaru', 'wW1AKM_242593_book-wallpaper.jpg', NULL, 1, 10, '<p>Sebagian Besar Hal yang anda Ketahui tentang Kesuksesan Adalah Salah Besar Banyak saran yang diberikan kepada kita tentang kesuksesan terdengar masuk akal, serius-dan jelas-jelas salah. Eric Barker mengungkap fakta-fakta luar biasa tentang penentu kesuksesan-yang mungkin sebelumnya tidak kita pikirkan, seperti: - Mengapa murid paling pintar di sekolah jarang menjadi miliarder dan bagaimana kelemahan terbesar Anda bisa menjadi kekuatan terhebat Anda. - Apakah orang baik selalu menjadi yang terakhir mencapai garis akhir dan mengapa pelajaran terbaik tentang kerja sama datang dari anggota geng, bajak laut, dan pembunuh berantai. - Mengapa mencoba meningkatkan kepercayaan diri selalu gagal dan bagaimana filosofi Buddha memberi solusi yang terbaik. - Bagaimana menemukan keseimbangan hidup dan kerja dengan menggunakan strategi Genghis Khan, kesalahan-kesalahan yang dilakukan Albert Einstein, dan satu pelajaran kecil dari Speder-Man. Dengan mencermati yang memisahkan kesuksesan yang luar biasa dari yang biasa-biasa saja, kita bisa berhenti menebak-nebak rahasia mencapai kesuksesan dan memulai kehidupan yang Anda inginkan.</p>', 'buku-terbaru', '2020-01-15 19:21:38', '2020-01-15 19:21:38'),
(8, 'Novel Kartun', 'e7GqWJ_242593_book-wallpaper.jpg', NULL, 1, 3, '<p>Sebagian Besar Hal yang anda Ketahui tentang Kesuksesan Adalah Salah Besar Banyak saran yang diberikan kepada kita tentang kesuksesan terdengar masuk akal, serius-dan jelas-jelas salah. Eric Barker mengungkap fakta-fakta luar biasa tentang penentu kesuksesan-yang mungkin sebelumnya tidak kita pikirkan, seperti: - Mengapa murid paling pintar di sekolah jarang menjadi miliarder dan bagaimana kelemahan terbesar Anda bisa menjadi kekuatan terhebat Anda. - Apakah orang baik selalu menjadi yang terakhir mencapai garis akhir dan mengapa pelajaran terbaik tentang kerja sama datang dari anggota geng, bajak laut, dan pembunuh berantai. - Mengapa mencoba meningkatkan kepercayaan diri selalu gagal dan bagaimana filosofi Buddha memberi solusi yang terbaik. - Bagaimana menemukan keseimbangan hidup dan kerja dengan menggunakan strategi Genghis Khan, kesalahan-kesalahan yang dilakukan Albert Einstein, dan satu pelajaran kecil dari Speder-Man. Dengan mencermati yang memisahkan kesuksesan yang luar biasa dari yang biasa-biasa saja, kita bisa berhenti menebak-nebak rahasia mencapai kesuksesan dan memulai kehidupan yang Anda inginkan.</p>', 'novel-kartun', '2020-01-15 19:22:22', '2020-01-15 19:22:22'),
(9, 'Novel Ber alur unik', 'B2u9uu_242593_book-wallpaper.jpg', NULL, 1, 9, '<p>Sebagian Besar Hal yang anda Ketahui tentang Kesuksesan Adalah Salah Besar Banyak saran yang diberikan kepada kita tentang kesuksesan terdengar masuk akal, serius-dan jelas-jelas salah. Eric Barker mengungkap fakta-fakta luar biasa tentang penentu kesuksesan-yang mungkin sebelumnya tidak kita pikirkan, seperti: - Mengapa murid paling pintar di sekolah jarang menjadi miliarder dan bagaimana kelemahan terbesar Anda bisa menjadi kekuatan terhebat Anda. - Apakah orang baik selalu menjadi yang terakhir mencapai garis akhir dan mengapa pelajaran terbaik tentang kerja sama datang dari anggota geng, bajak laut, dan pembunuh berantai. - Mengapa mencoba meningkatkan kepercayaan diri selalu gagal dan bagaimana filosofi Buddha memberi solusi yang terbaik. - Bagaimana menemukan keseimbangan hidup dan kerja dengan menggunakan strategi Genghis Khan, kesalahan-kesalahan yang dilakukan Albert Einstein, dan satu pelajaran kecil dari Speder-Man. Dengan mencermati yang memisahkan kesuksesan yang luar biasa dari yang biasa-biasa saja, kita bisa berhenti menebak-nebak rahasia mencapai kesuksesan dan memulai kehidupan yang Anda inginkan.</p>', 'novel-ber-alur-unik', '2020-01-15 19:24:12', '2020-01-15 19:24:12');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Rian Adriansyah', 'rianjh2@gmail.com', NULL, '$2y$10$NwxkFYoeuiHV/cKh..vg8OmEBOBhTYI4hGGGEPVqY/Epv9a9fqEE2', NULL, '2020-01-14 05:36:22', '2020-01-14 05:36:22');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `artikels`
--
ALTER TABLE `artikels`
  ADD PRIMARY KEY (`id`),
  ADD KEY `artikels_user_id_foreign` (`user_id`),
  ADD KEY `artikels_buku_id_foreign` (`buku_id`);

--
-- Indexes for table `artikel_genres`
--
ALTER TABLE `artikel_genres`
  ADD PRIMARY KEY (`id`),
  ADD KEY `artikel_genres_artikel_id_foreign` (`artikel_id`),
  ADD KEY `artikel_genres_genre_id_foreign` (`genre_id`);

--
-- Indexes for table `bukus`
--
ALTER TABLE `bukus`
  ADD PRIMARY KEY (`id`),
  ADD KEY `bukus_kategori_id_foreign` (`kategori_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `genres`
--
ALTER TABLE `genres`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kategoris`
--
ALTER TABLE `kategoris`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`),
  ADD KEY `reviews_user_id_foreign` (`user_id`),
  ADD KEY `reviews_buku_id_foreign` (`buku_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `artikels`
--
ALTER TABLE `artikels`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `artikel_genres`
--
ALTER TABLE `artikel_genres`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `bukus`
--
ALTER TABLE `bukus`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `genres`
--
ALTER TABLE `genres`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `kategoris`
--
ALTER TABLE `kategoris`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `artikels`
--
ALTER TABLE `artikels`
  ADD CONSTRAINT `artikels_buku_id_foreign` FOREIGN KEY (`buku_id`) REFERENCES `bukus` (`id`),
  ADD CONSTRAINT `artikels_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `artikel_genres`
--
ALTER TABLE `artikel_genres`
  ADD CONSTRAINT `artikel_genres_artikel_id_foreign` FOREIGN KEY (`artikel_id`) REFERENCES `artikels` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `artikel_genres_genre_id_foreign` FOREIGN KEY (`genre_id`) REFERENCES `genres` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `bukus`
--
ALTER TABLE `bukus`
  ADD CONSTRAINT `bukus_kategori_id_foreign` FOREIGN KEY (`kategori_id`) REFERENCES `kategoris` (`id`);

--
-- Constraints for table `reviews`
--
ALTER TABLE `reviews`
  ADD CONSTRAINT `reviews_buku_id_foreign` FOREIGN KEY (`buku_id`) REFERENCES `bukus` (`id`),
  ADD CONSTRAINT `reviews_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
