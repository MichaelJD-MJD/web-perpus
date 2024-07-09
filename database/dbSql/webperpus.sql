-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 09 Jul 2024 pada 06.31
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webperpus`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `books`
--

CREATE TABLE `books` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `cover` varchar(255) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `genre` varchar(255) NOT NULL,
  `pengarang` varchar(255) NOT NULL,
  `penerbit` varchar(255) NOT NULL,
  `tempat_terbit` varchar(255) NOT NULL,
  `tahun_terbit` int(11) NOT NULL,
  `bahasa` varchar(255) NOT NULL,
  `jumlah_halaman` int(11) NOT NULL,
  `sinopsis` text NOT NULL,
  `stok` int(11) NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `books`
--

INSERT INTO `books` (`id`, `cover`, `judul`, `genre`, `pengarang`, `penerbit`, `tempat_terbit`, `tahun_terbit`, `bahasa`, `jumlah_halaman`, `sinopsis`, `stok`, `deleted_at`, `created_at`, `updated_at`) VALUES
(19, 'assets/gallery/ILdSuqwtNSzWTQeEEFcsah6iiCzcCNLG8GTR8BpI.jpg', 'Bumi', '6', 'Tere liye', 'Gramedia', 'Jakarta', 2014, 'Indonesia', 440, 'Novel \"Bumi\" merupakan buku pertama dari serial Bumi atau Dunia Paralel karya Tere Liye. Novel ini menceritakan tentang petualangan tiga remaja bernama Raib, Seli, dan Ali yang berasal dari klan berbeda di dunia paralel. Raib dari Klan Bulan, Seli dari Klan Matahari, dan Ali dari Klan Bumi. Ketiganya memiliki kemampuan khusus dan ditakdirkan untuk menyelamatkan Bumi dari ancaman klan-klan jahat pimpinan Tamus.\r\n\r\nRaib, seorang gadis berusia 15 tahun, memiliki kemampuan untuk menghilangkan diri. Sejak kecil, dia selalu dirahasiakan oleh orang tuanya. Suatu hari, Raib bertemu dengan Tamus, sosok kurus tinggi yang ingin menguasai dunia. Raib pun harus melarikan diri dan bertemu dengan Seli dan Ali. Bersama-sama, mereka bertiga harus melewati berbagai rintangan dan bahaya untuk menyelamatkan Bumi.', 3, NULL, '2024-07-07 22:19:19', '2024-07-07 22:27:04'),
(20, 'assets/gallery/FZfGJUEFSt4qdcvU5rynWXeG6I9NIRkvRNI6UiTq.jpg', 'Pulang', '6', 'Tere liye', 'Gramedia', 'Jakarta', 2015, 'Indonesia', 472, 'Buku ini mengisahkan tentang kisah perjalanan seorang pemuda bernama Hambali, yang meninggalkan Indonesia untuk merantau ke Malaysia. Di sana, ia mengalami berbagai peristiwa dan akhirnya menemukan arti sebenarnya dari kata \"pulang\"', 0, NULL, '2024-07-08 21:01:12', '2024-07-08 21:01:12'),
(21, 'assets/gallery/gCYLGLymPb9TLNL28myNQQXdUxMe3UPiLh4d2ePs.jpg', 'The Night Country', '7', 'Melissa Albert', 'Flatiron Books', 'New York', 2018, 'Inggris', 416, 'Novel ini menceritakan tentang Alice Hartley, seorang gadis berusia 17 tahun yang menemukan bahwa dia adalah pewaris Hinterland, dunia fantasi yang diciptakan oleh neneknya, Althea Morrigan.\r\n\r\nSetelah kematian neneknya, Alice dipaksa untuk kembali ke Hinterland untuk menghadiri pemakamannya. Di sana, dia bertemu dengan beberapa karakter aneh dan berbahaya, termasuk Finch, seorang pria misterius yang tampaknya tahu lebih banyak tentang Alice daripada yang dia ketahui tentang dirinya sendiri.\r\n\r\nAlice segera mengetahui bahwa Hinterland tidak seperti yang dia bayangkan. Tempat itu penuh dengan sihir dan keajaiban, tetapi juga penuh dengan bahaya. Alice harus belajar mengendalikan kekuatannya dan bekerja sama dengan Finch untuk mengalahkan kekuatan jahat yang mengancam menghancurkan Hinterland.', 4, NULL, '2024-07-08 21:02:52', '2024-07-08 21:02:52'),
(22, 'assets/gallery/PuYCXgp91JMMyJbXtiaV8TL5EndmAgYReMcx6dGd.jpg', 'The Psychology of Money', '16', 'Morgan Housel', 'HarperCollins', 'New York', 2020, 'Inggris', 262, '\"The Psychology of Money\" adalah buku yang membahas tentang hubungan antara psikologi dan keuangan. Buku ini berisi 19 cerita pendek yang membahas berbagai topik keuangan, seperti menabung, berinvestasi, dan mengelola uang.\r\n\r\nPenulis, Morgan Housel, menggunakan bahasa yang mudah dipahami dan contoh-contoh yang relatable untuk menjelaskan konsep-konsep keuangan yang kompleks. Dia juga membagikan pengalaman pribadinya dan kisah-kisah orang lain untuk menunjukkan bagaimana psikologi dapat memengaruhi keputusan keuangan kita.', 4, NULL, '2024-07-08 21:03:57', '2024-07-08 21:03:57'),
(23, 'assets/gallery/edNd5aySZ3PozpAyQnwbCKVMk11llLBxP1xp20Gg.jpg', 'The Power of Thinking Out of the Box', '16', 'Hasna Wijayati', 'Anak Hebat Indonesia', 'Jakarta', 2022, 'Indonesia', 224, 'Buku \"The Power of Thinking Out of the Box\"  berisi panduan untuk mengembangkan pola pikir kreatif dan inovatif dalam kehidupan sehari-hari. Penulis, Hasna Wijayati, menjelaskan bahwa berpikir out of the box bukan hanya tentang menghasilkan sesuatu yang baru, tetapi juga tentang menemukan solusi kreatif untuk masalah-masalah yang kompleks.', 3, NULL, '2024-07-08 21:06:33', '2024-07-08 21:06:33'),
(24, 'assets/gallery/XvIJy8khozQG0GpzdzMim2yvNkOnceMmnWCmkphj.png', 'Filosofi Teras', '16', 'Henry Manampiring', 'Gramedia', 'Jakarta', 2018, 'Indonesia', 346, 'Buku \"Filosofi Teras\" adalah buku pengantar filsafat Stoa yang dikemas dengan bahasa yang mudah dipahami dan relevan dengan kehidupan sehari-hari. Penulis, Henry Manampiring, menjelaskan konsep-konsep dasar Stoa seperti dikotomi kendali, kebajikan, dan hidup selaras dengan alam dengan cara yang relatable dan praktis.', 1, NULL, '2024-07-08 21:07:37', '2024-07-08 21:07:37'),
(25, 'assets/gallery/2PQmFlyenccKqI1kG1GPF7dha2Tbz8fm7t2YLV4f.jpg', 'Pride and Prejudice', '1', 'Jane Austen', 'Berbagai penerbit (tergantung edisi)', 'Berbagai tempat (tergantung edisi)', 1813, 'Indonesia', 350, '\"Pride and Prejudice\" menceritakan kisah Elizabeth Bennet, seorang gadis cerdas dan mandiri dari keluarga kelas menengah di Inggris pada awal abad ke-19. Elizabeth harus menghadapi berbagai rintangan sosial dan prasangka dalam usahanya untuk menemukan cinta sejati.\r\n\r\nNovel ini terkenal dengan humornya yang cerdas, karakternya yang kompleks, dan penggambarannya yang realistis tentang kehidupan masyarakat kelas atas di Inggris pada masa itu. \"Pride and Prejudice\" telah diadaptasi ke berbagai bentuk media, termasuk film, serial televisi, dan drama panggung.', 1, NULL, '2024-07-08 21:09:13', '2024-07-08 21:09:13'),
(26, 'assets/gallery/6rErUUuLZzvEQNW31t8R1ymDzC3aY8r4wCM6qiZl.jpg', 'The Notebook', '1', 'Nicholas Sparks', 'Warner Books', 'New York', 1996, 'Inggris', 208, '\"The Notebook\" menceritakan kisah cinta Noah Calhoun dan Allie Nelson yang terhalang oleh perbedaan kelas sosial dan Perang Dunia II. Novel ini terbagi menjadi dua bagian:\r\n\r\nBagian pertama: Noah dan Allie bertemu dan jatuh cinta saat remaja di South Carolina pada tahun 1940-an. Namun, hubungan mereka ditentang oleh orang tua Allie karena perbedaan kelas sosial mereka.\r\nBagian kedua: Noah dan Allie berpisah setelah Perang Dunia II. Noah menunggu Allie selama bertahun-tahun, sementara Allie dipaksa untuk menikah dengan pria lain.', 1, NULL, '2024-07-08 21:10:28', '2024-07-08 21:10:28'),
(27, 'assets/gallery/kJ3RArb1BV5Z8nm4sa7wxjJy846pd0Oohwzec6sm.jpg', '1984', '14', 'George Orwell', 'Secker & Warburg', 'London', 1949, 'Inggris', 328, '\"1984\" menceritakan kisah Winston Smith, seorang pria yang hidup di negara totaliter Oceania yang diperintah oleh Partai. Winston bekerja di Kementerian Kebenaran, di mana dia bertugas memanipulasi sejarah untuk kepentingan Partai. Namun, Winston diam-diam membenci rezim dan bercita-cita untuk memberontak.\r\n\r\nWinston bertemu dengan Julia, seorang wanita yang juga membenci Partai, dan mereka berdua bergabung dengan gerakan perlawanan bawah tanah yang dipimpin oleh O\'Brien. Namun, O\'Brien ternyata adalah agen ganda yang bekerja untuk Partai, dan Winston dan Julia ditangkap dan disiksa. Di bawah penyiksaan, Winston akhirnya menyerah dan mengkhianati Julia, dan dia dipaksa untuk menerima ideologi Partai sepenuhnya.', 2, NULL, '2024-07-08 21:11:38', '2024-07-08 21:11:38'),
(28, 'assets/gallery/LSlW00LGwg4BtI3E8D9c2EzGH6KQn4wwwapGN2kq.jpg', 'To Kill a Mockingbird', '6', 'Harper Lee', 'Harper & Row', 'New York', 1960, 'Inggris', 324, '\"To Kill a Mockingbird\" menceritakan kisah Scout Finch, seorang gadis muda yang tinggal di Maycomb, Alabama, pada tahun 1930-an. Ayah Scout, Atticus Finch, adalah seorang pengacara yang ditunjuk untuk membela Tom Robinson, seorang pria kulit hitam yang dituduh melakukan kejahatan terhadap seorang wanita kulit putih.\r\n\r\nScout dan kakaknya, Jem, menyaksikan persidangan Tom Robinson dengan penuh keprihatinan dan kebingungan. Mereka melihat bagaimana Tom Robinson diperlakukan tidak adil karena rasnya, dan mereka belajar tentang prasangka dan ketidakadilan yang ada di masyarakat mereka.', 1, NULL, '2024-07-08 21:12:46', '2024-07-08 21:12:46'),
(29, 'assets/gallery/NzzB6T9hQByD1Ej7bJe64ZPD2AhVDCIMKEPqYwBD.jpg', 'The Hobbit', '7', 'J.R.R. Tolkien', 'Gramedia', 'Jakarta', 1977, 'Inggris', 310, '\"The Hobbit\" menceritakan kisah Bilbo Baggins, seorang hobbit yang suka hidup nyaman dan tidak suka berpetualang. Suatu hari, Bilbo direkrut oleh penyihir Gandalf dan sekelompok kurcaci untuk membantu mereka merebut kembali harta karun mereka dari Smaug, seekor naga yang ganas.\r\n\r\nPerjalanan Bilbo dan teman-temannya penuh dengan bahaya dan rintangan. Mereka harus menghadapi goblin, troll, laba-laba raksasa, dan makhluk berbahaya lainnya. Bilbo juga menemukan Cincin Satu, sebuah benda ajaib yang memiliki kekuatan luar biasa.', 1, NULL, '2024-07-08 21:14:14', '2024-07-08 21:14:14'),
(30, 'assets/gallery/degLMLRm15LElNQ2feZZPyJzxgBed2gUN1Av1rlf.jpg', 'The Girl with the Dragon Tattoo', '8', 'Stieg Larsson', 'Norstedts', 'Stockholm', 2005, 'Swedia', 480, '\"The Girl with the Dragon Tattoo\" adalah novel pertama dalam trilogi Millennium karya Stieg Larsson. Novel ini menceritakan kisah Mikael Blomkvist, seorang jurnalis investigasi yang didiskreditkan karena fitnah, dan Lisbeth Salander, seorang hacker muda dengan kemampuan luar biasa.\r\n\r\nBlomkvist disewa oleh Henrik Vanger, seorang industrialis kaya, untuk menyelidiki hilangnya putri bungsu Vanger, Harriet, 40 tahun yang lalu. Blomkvist bekerja sama dengan Salander, yang memiliki akses ke informasi rahasia melalui pekerjaannya sebagai hacker, untuk mengungkap misteri di balik hilangnya Harriet.\r\n\r\nPenyelidikan Blomkvist dan Salander membawa mereka ke dunia gelap perdagangan seks, penyiksaan, dan pembunuhan. Mereka harus menghadapi bahaya dan rintangan yang besar dalam upaya mereka untuk menemukan kebenaran dan keadilan bagi Harriet.', 1, NULL, '2024-07-08 21:15:19', '2024-07-08 21:15:19'),
(31, 'assets/gallery/D4ZNJuZelfrffXUiwgrfCmttfstVcGiR5xjuou8N.jpg', 'The Silent Patient', '9', 'Alex Michaelides', 'Orion Publishing Group', 'London', 2019, 'Inggris', 336, '\"The Silent Patient\" menceritakan kisah Alicia Berenson, seorang pelukis terkenal yang tiba-tiba menjadi bisu setelah membunuh suaminya, Gabriel, di rumah mereka. Alicia dirawat di sebuah rumah sakit jiwa, dan tidak ada yang tahu mengapa dia tidak mau berbicara.\r\n\r\nTheo Faber, seorang psikoterapis muda, terobsesi dengan kasus Alicia dan ingin membantunya memecahkan keheningannya. Theo mengunjungi Alicia di rumah sakit jiwa dan mencoba membangun hubungan dengannya.\r\n\r\nSeiring dengan penyelidikannya, Theo menemukan rahasia kelam tentang kehidupan Alicia dan Gabriel. Dia juga mulai mempertanyakan motif Alicia dan kebenaran di balik peristiwa tragis yang menimpanya.', 2, NULL, '2024-07-08 21:17:16', '2024-07-08 21:17:16'),
(32, 'assets/gallery/iM2tSDBJHMLfZufvR3uJsPkf4krX3QTWaz1EpSsm.jpg', 'The Great Gatsby', '6', 'F. Scott Fitzgerald', 'Charles Scribner\'s Sons', 'New York', 1925, 'Inggris', 226, '\"The Great Gatsby\" menceritakan kisah Jay Gatsby, seorang jutawan misterius yang mengadakan pesta-pesta mewah di Long Island pada tahun 1920-an. Gatsby diam-diam mencintai Daisy Buchanan, seorang wanita yang sudah menikah dengan Tom Buchanan, seorang pria kaya dan sombong.\r\n\r\nNovel ini mengeksplorasi tema cinta, kekayaan, dan impian yang hilang di era Jazz yang gemerlap. Gatsby berusaha untuk mendapatkan kembali Daisy dan mencapai mimpinya, tetapi dia terjebak dalam masa lalunya dan tidak dapat melepaskan diri dari realitas pahit.', 2, NULL, '2024-07-08 21:18:50', '2024-07-08 21:18:50'),
(33, 'assets/gallery/ujjueBIQIrqiewl4MCOvDHxJHMxsauNGOVZYhpts.jpg', 'The Hunger Games', '14', 'Suzanne Collins', 'Scholastic Press', 'New York', 2008, 'Inggris', 410, '\"The Hunger Games\" menceritakan kisah Katniss Everdeen, seorang gadis berusia 16 tahun yang tinggal di negara distopia Panem. Setiap tahun, Panem mengadakan Hunger Games, sebuah acara televisi di mana dua anak dari setiap distrik harus bertarung sampai mati di arena raksasa. Katniss secara sukarela menggantikan adik perempuannya, Prim, dalam Hunger Games, dan dia harus menggunakan semua keterampilan dan kecerdasannya untuk bertahan hidup dan memenangkan pertandingan.\r\n\r\nDi arena, Katniss bersekutu dengan Peeta Mellark, anak laki-laki dari distriknya. Bersama-sama, mereka berjuang untuk mendapatkan makanan, air, dan tempat berlindung, dan mereka harus menghindari bahaya dari mutan yang mematikan dan para peserta lain yang haus darah.', 2, NULL, '2024-07-08 21:20:17', '2024-07-08 21:20:17'),
(34, 'assets/gallery/IZ5LZzN8borU40zQPjfSWE810TDFOdfkAEmUi1rh.jpg', 'The Da Vinci Code', '9', 'Dan Brown', 'Doubleday', 'New York', 2003, 'Inggris', 679, '\"The Da Vinci Code\" menceritakan kisah Robert Langdon, seorang profesor simbologi dari Harvard, yang terjebak dalam perburuan Cawan Suci yang legendaris setelah seorang kurator Museum Louvre terbunuh. Langdon bekerja sama dengan Sophie Neveu, seorang kriptolog muda, untuk mengungkap misteri yang tersembunyi dalam karya seni Leonardo da Vinci dan petunjuk yang ditinggalkan oleh Biarawan Sion, sebuah persaudaraan rahasia yang telah melindungi Cawan Suci selama berabad-abad.\r\n\r\nNovel ini menggabungkan genre detektif, thriller, dan fiksi konspirasi, dan penuh dengan teka-teki, kode rahasia, dan simbol-simbol yang harus dipecahkan oleh Langdon dan Neveu. Perjalanan mereka membawa mereka ke berbagai lokasi di Eropa, termasuk Paris, London, dan Rosslyn, dan mereka harus menghindari bahaya dari Opus Dei, sebuah organisasi religius yang ingin melindungi rahasia Cawan Suci.', 2, NULL, '2024-07-08 21:21:18', '2024-07-08 21:21:18'),
(35, 'assets/gallery/fk1GKnJfKbS2QDCZqP5VCIlt1q79lzUVkVS0QL7m.jpg', 'Treasure Island', '6', 'Robert Louis Stevenson', 'Cassell and Company', 'London', 1883, 'Inggris', 310, '\"Treasure Island\" menceritakan kisah Jim Hawkins, seorang anak laki-laki yang menemukan peta harta karun bajak laut yang legendaris. Jim bergabung dengan kru bajak laut yang dipimpin oleh Kapten Flint, dan mereka berlayar ke pulau terpencil untuk mencari harta karun tersebut.\r\n\r\nPerjalanan Jim penuh dengan bahaya dan rintangan. Dia harus menghadapi bajak laut yang kejam, badai yang dahsyat, dan hewan buas yang berbahaya. Jim juga harus berhati-hati terhadap beberapa anggota kru bajak laut yang berencana untuk memberontak dan merebut harta karun untuk diri mereka sendiri.', 1, NULL, '2024-07-08 21:22:12', '2024-07-08 21:22:12');

-- --------------------------------------------------------

--
-- Struktur dari tabel `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `cache`
--

INSERT INTO `cache` (`key`, `value`, `expiration`) VALUES
('ac3478d69a3c81fa62e60f5c3696165a4e5e6ac4', 'i:1;', 1719387402),
('ac3478d69a3c81fa62e60f5c3696165a4e5e6ac4:timer', 'i:1719387402;', 1719387402),
('c1dfd96eea8cc2b62785275bca38ac261256e278', 'i:1;', 1720242147),
('c1dfd96eea8cc2b62785275bca38ac261256e278:timer', 'i:1720242147;', 1720242147);

-- --------------------------------------------------------

--
-- Struktur dari tabel `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `genre` varchar(255) NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `categories`
--

INSERT INTO `categories` (`id`, `genre`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Romance', NULL, NULL, NULL),
(6, 'Fiction', NULL, NULL, NULL),
(7, 'Fantasy', NULL, NULL, NULL),
(8, 'Mystery', NULL, NULL, NULL),
(9, 'Thriller', NULL, NULL, NULL),
(10, 'Horror', NULL, NULL, NULL),
(11, 'Drama', NULL, NULL, NULL),
(12, 'Adventure', NULL, NULL, NULL),
(13, 'Action', NULL, NULL, NULL),
(14, 'Sci-fi', NULL, NULL, NULL),
(15, 'Non-Fiction', NULL, NULL, NULL),
(16, 'Self Improvement', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `favorites`
--

CREATE TABLE `favorites` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_buku` int(11) NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `favorites`
--

INSERT INTO `favorites` (`id`, `id_user`, `id_buku`, `deleted_at`, `created_at`, `updated_at`) VALUES
(4, 1, 19, NULL, '2024-07-08 00:38:12', '2024-07-08 00:38:12'),
(9, 7, 26, NULL, '2024-07-08 21:23:14', '2024-07-08 21:23:14');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(4, '2024_06_25_135416_create_books_table', 2),
(5, '2024_06_25_140527_create_peminjaman_table', 2),
(6, '2024_06_25_141050_create_pengembalian_table', 2),
(7, '2024_06_25_141320_create_favorites_table', 2),
(8, '2024_06_25_141704_add_roles_to_users_table', 2),
(9, '2024_06_28_054958_add_cover_to_books_table', 3),
(12, '2024_07_04_073421_rename_table_peminjaman_to_transaction_loan', 4),
(13, '2024_07_04_073612_rename_table_pengembalian_to_transaction_return', 4),
(14, '2024_07_05_061411_add_trigger_to_transaction_loans_table', 5),
(15, '2024_07_05_062522_add_trigger_to_transaction_returns_table', 6),
(16, '2024_07_07_073200_add_default_value_to_status_in_transaction_loans_table', 7),
(17, '2024_07_07_074343_create_categories_table', 8);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('DfuwDseexgAYWWz6Lleh1cfxhUYiFNaHXY9cUFTH', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/126.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiSUhPTUp6Y2hoTUc1RE9kZ0pxZVZPbWpudXR1azc0UmNrelpBWW5mVSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjc6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9hZG1pbiI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjE7fQ==', 1720499455),
('LnGGEHRjgBpDD1CY6IHY0wfpIg1YyG7AqdHnlp6z', 7, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/126.0.0.0 Safari/537.36', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoiWm93Wnhxc2RnZHZTUkZtM2N5UjB4UEg5UEdPSHBCMjNQSWNvVFNydiI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzA6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9jYXRlZ29yeSI7fXM6MzoidXJsIjthOjA6e31zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aTo3O30=', 1720499444);

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaction_loans`
--

CREATE TABLE `transaction_loans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_buku` int(11) NOT NULL,
  `tanggal_pinjam` date NOT NULL,
  `tanggal_kembali` date NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'Sedang Dipinjam',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `transaction_loans`
--

INSERT INTO `transaction_loans` (`id`, `id_user`, `id_buku`, `tanggal_pinjam`, `tanggal_kembali`, `status`, `deleted_at`, `created_at`, `updated_at`) VALUES
(6, 1, 19, '2024-07-08', '2024-07-11', 'Sedang Dipinjam', NULL, '2024-07-08 05:02:06', '2024-07-08 05:02:06'),
(7, 1, 19, '2024-07-08', '2024-07-11', 'Sedang Dipinjam', NULL, '2024-07-08 05:02:55', '2024-07-08 05:02:55'),
(8, 1, 19, '2024-07-08', '2024-07-11', 'Sedang Dipinjam', NULL, '2024-07-08 05:04:58', '2024-07-08 05:04:58'),
(9, 1, 19, '2024-07-08', '2024-07-11', 'Dikembalikan', NULL, '2024-07-08 05:05:21', '2024-07-08 05:05:51'),
(10, 7, 19, '2024-07-09', '2024-07-12', 'Dikembalikan', NULL, '2024-07-08 20:57:23', '2024-07-08 20:58:40');

--
-- Trigger `transaction_loans`
--
DELIMITER $$
CREATE TRIGGER `set_tanggal_kembali` BEFORE INSERT ON `transaction_loans` FOR EACH ROW BEGIN
            SET NEW.tanggal_kembali = DATE_ADD(NEW.tanggal_pinjam, INTERVAL 3 DAY);
        END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaction_returns`
--

CREATE TABLE `transaction_returns` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_peminjaman` int(11) NOT NULL,
  `tanggal_pengembalian` date NOT NULL,
  `denda` int(11) NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `transaction_returns`
--

INSERT INTO `transaction_returns` (`id`, `id_peminjaman`, `tanggal_pengembalian`, `denda`, `deleted_at`, `created_at`, `updated_at`) VALUES
(8, 9, '2024-07-16', 10000, NULL, '2024-07-08 05:05:51', '2024-07-08 05:05:51'),
(9, 10, '2024-07-14', 4000, NULL, '2024-07-08 20:58:40', '2024-07-08 20:58:40');

--
-- Trigger `transaction_returns`
--
DELIMITER $$
CREATE TRIGGER `set_denda` BEFORE INSERT ON `transaction_returns` FOR EACH ROW BEGIN   
                DECLARE loan_date DATE;

                SELECT tanggal_kembali INTO loan_date
                FROM transaction_loans
                WHERE id = NEW.id_peminjaman;

                IF NEW.tanggal_pengembalian > loan_date THEN
                    SET NEW.denda = DATEDIFF(NEW.tanggal_pengembalian, loan_date) * 2000;
                ELSE
                    SET NEW.denda = 0;
                END IF;
            END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `roles` varchar(255) NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `roles`) VALUES
(1, 'mjd', 'mjd@gmail.com', NULL, '$2y$12$yOnv4TppWPkhd7c6Wfbpm.spMca.AE4CvW8XbD3XUIN3BT/giYala', NULL, '2024-06-24 00:37:10', '2024-06-24 00:37:10', 'ADMIN'),
(3, 'budi', 'budi@gmail.com', NULL, '$2y$12$XCpCFY8BRHJvu6ZK2VtIHOTBxm3yLK5i6ljox/8zYv2Q6EM3VxLua', NULL, '2024-06-25 21:55:40', '2024-06-25 21:55:40', 'user'),
(4, 'anies', 'anies@gmail.com', NULL, '$2y$12$VqQz6aQf2X0tOZUaFwBYFu7vqIPT2nnc7dVVoyAk2DyminsjdZllq', NULL, '2024-06-26 00:18:07', '2024-06-26 00:18:07', 'user'),
(5, 'rony', 'rony@gmail.com', '2024-06-26 00:35:43', '$2y$12$mNs/81pFYqBrIOdUTJ/1aexDVmwMjMn6726TCJaUZE6C5jUIDRtxO', NULL, '2024-06-26 00:35:01', '2024-06-26 00:35:43', 'user'),
(6, 'budi', 'budi2@gmail.com', '2024-07-05 22:01:28', '$2y$12$fBaOCmaf3ook2v9ZywLRD.GGBnX82SFtPFb8OE5eoOQSV.GsbALEe', NULL, '2024-07-05 22:00:21', '2024-07-05 22:01:28', 'user'),
(7, 'berhasil', 'berhasil@gmail.com', NULL, '$2y$12$qGLG0pUlHNtAtGPl7gHigON2YQTNjFauWpUeDfiaavF.M0KKq9v2y', NULL, '2024-07-08 20:56:04', '2024-07-08 20:56:04', 'user');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indeks untuk tabel `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indeks untuk tabel `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `favorites`
--
ALTER TABLE `favorites`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indeks untuk tabel `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indeks untuk tabel `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indeks untuk tabel `transaction_loans`
--
ALTER TABLE `transaction_loans`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `transaction_returns`
--
ALTER TABLE `transaction_returns`
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
-- AUTO_INCREMENT untuk tabel `books`
--
ALTER TABLE `books`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT untuk tabel `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `favorites`
--
ALTER TABLE `favorites`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT untuk tabel `transaction_loans`
--
ALTER TABLE `transaction_loans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `transaction_returns`
--
ALTER TABLE `transaction_returns`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
