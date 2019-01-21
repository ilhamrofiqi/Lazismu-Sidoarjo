-- phpMyAdmin SQL Dump
-- version 3.5.8.2
-- http://www.phpmyadmin.net
--
-- Host: sql110.epizy.com
-- Generation Time: Oct 25, 2018 at 04:53 AM
-- Server version: 5.6.41-84.1
-- PHP Version: 5.3.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `epiz_21384206_dblazismu`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id_admin` int(10) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id_admin`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `username`, `password`) VALUES
(1, 'ilham rofiqi', '$2y$10$cl0y5K0SqMBVJePsDuVF8u2amrzz5/O0g7QPx40oDhDRZVxciC7GO'),
(2, 'admin', '$2y$10$B7yLQ6B1Rion0eiqxk.F.ewq26ZglBq8WYJQNeF8.1Ctso06b1NP6');

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

CREATE TABLE IF NOT EXISTS `berita` (
  `id_berita` int(10) NOT NULL AUTO_INCREMENT,
  `judul_berita` varchar(100) NOT NULL,
  `penulis_berita` varchar(100) NOT NULL,
  `intro_berita` text NOT NULL,
  `isi_berita` text NOT NULL,
  `tanggal` date NOT NULL,
  PRIMARY KEY (`id_berita`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `berita`
--

INSERT INTO `berita` (`id_berita`, `judul_berita`, `penulis_berita`, `intro_berita`, `isi_berita`, `tanggal`) VALUES
(3, 'Lazismu dan IGABA Galang Dana untuk Rohingya', 'Google', 'Peringatan 1 Muharam 1439 Hijriah digelar berbeda oleh Lazismu dan IGABA (Ikatan Guru Aisyiyah Bustanul Athfal) Wonosobo. Mereka mengadakan aksi penggalangan dana untuk Rohingya.', '<p>Peringatan 1 Muharam 1439 Hijriah digelar berbeda oleh Lazismu dan IGABA (Ikatan Guru Aisyiyah Bustanul Athfal) Wonosobo. Mereka mengadakan aksi penggalangan dana untuk Rohingya.</p>\n\n<p>Wakil Bupati Wonosobo menegaskan pentingnya melatih anak sejak dini untuk berderma atau berbagi dan menanamkan kepedulian sosial yang tinggi. Acara tersebut diselenggarakan di Alun-Alun Wonosobo yang dihadiri oleh sedikitnya 1500 peserta dari PAUD hingga Sekolah Dasar Muhammdiyah.</p>\n\n<p>Wakil Bupati Wonosobo Agus Subagyo dalam sambutannya, mengajak seluruh peserta peringatan 1 Muharam 1439 H yang bertepatan pada Rabu (20/9), untuk terus meningkatkan kepekaan diri terhadap sosial. Membiasakan diri berinfak atau bersedekah, melatih anak-anak untuk peka dan peduli terhadap lingkungan disekitarnya.</p>\n\n<p>Hal tersebut dimulai dari lingkungan keluarga maupun disekolah. Senada dengan hal itu Manager Lazismu Wonosobo Tabah S. Pambudi menegaskan, 1 Muharam 1439H menjadi momen penting untuk instropeksi diri diantaranya meningkatkan kepedulian terhadap sosial.</p>\n', '2017-11-14'),
(4, 'contoh', 'contoh', 'contoh', '<p style="text-align:justify">&nbsp;</p>\n\n<p style="text-align:center">LAlalalalalalalalallaalalallalalalala</p>\n\n<p style="text-align:center">&nbsp;</p>\n\n<p style="text-align:center">&nbsp;</p>\n\n<p style="text-align:center">&nbsp;</p>\n\n<p style="text-align:center">&nbsp;</p>\n\n<p style="text-align:center">&nbsp;</p>\n\n<p>&nbsp;</p>\n\n<p>&nbsp;</p>\n\n<p>&nbsp;</p>\n\n<p>&nbsp;</p>\n\n<p>&nbsp;</p>\n\n<p>&nbsp;</p>\n\n<p>&nbsp;</p>\n\n<p>&nbsp;</p>\n\n<p>&nbsp;</p>\n\n<p>&nbsp;</p>\n\n<p style="text-align:center">&nbsp;</p>\n\n<p>&nbsp;</p>\n\n<p>&nbsp;</p>\n\n<p>&nbsp;</p>\n', '2017-11-16'),
(5, 'Konsep SQL Injection untuk Menembus Password Login ', 'Google', 'Bila seseorang ingin mengakses suatu sistem komputer, biasanya diperlukan login. Penerapannya pada website ditampilkan dengan dua kotak isian, yaitu kotak User Name, User Id, atau User Account dan kotak Password. Login ini berguna untuk memfilter dan mengetahui identitas seseorang yang ingin mengakses suatu sistem. Sistem login merupakan suatu cara dalam dunia sekuriti komputer untuk memfilter orang yang masuk ke sistem sehingga orang â€“ orang yang tidak terdaftar tidak dapat masuk ke sistem tersebut.', '<p style="margin-left:0cm; margin-right:0cm"><span style="font-size:11pt"><strong><span style="font-size:14.0pt">SQL Injection </span></strong></span></p>\r\n\r\n<p style="margin-left:0cm; margin-right:0cm; text-align:justify"><span style="font-size:11pt">Bila seseorang ingin mengakses suatu sistem komputer, biasanya diperlukan login. Penerapannya pada website ditampilkan dengan dua kotak isian, yaitu kotak <strong>User Name</strong>, <strong>User Id</strong>, atau <strong>User Account</strong> dan kotak <strong>Password</strong>. Login ini berguna untuk memfilter dan mengetahui identitas seseorang yang ingin mengakses suatu sistem. Sistem login merupakan suatu cara dalam dunia sekuriti komputer untuk memfilter orang yang masuk ke sistem sehingga orang &ndash; orang yang tidak terdaftar tidak dapat masuk ke sistem tersebut.</span></p>\r\n\r\n<p style="margin-left:0cm; margin-right:0cm; text-align:justify"><span style="font-size:11pt">Tetapi teknologi yang ada selalu saja tidak sempurna. Ada banyak cara untuk menembus filter pada sistem login tersebut. Sehingga seseorang yang tidak mengetahui password dapat juga ikut menikmati dan masuk ke sistem tersebut. Salah satunya adalah dengan SQL injection.</span></p>\r\n\r\n<p style="margin-left:0cm; margin-right:0cm; text-align:justify"><span style="font-size:11pt">Pada tulisan ini saya akan jelaskan tentang cara menembus <em>password</em> login dengan SQL injection secara teoritis dengan melihat pada sisi kelemahan <em>query</em> bahasa SQL itu sendiri. SQL injection itu sendiri adalah suatu cara untuk mengeksploitasi kelemahan bahasa SQL dengan cara memasukkan (menginjeksikan) beberapa karakter tertentu. Deretan karakter tersebut biasa dikenal dengan nama <em>injection string</em>. Ada banyak hal yang dapat dilakukan dengan <em>injection</em> <em>string</em>. Diantaranya, mem-<em>bypass</em> password, mendapatkan nama tabel, menyisipkan anggota baru, dll, bahkan sampai menghapus tabel pada suatu database.</span></p>\r\n\r\n<p style="margin-left:0cm; margin-right:0cm; text-align:justify"><span style="font-size:11pt"><strong><span style="font-size:14.0pt">Memahami Cara Kerja SQL Injection </span></strong></span></p>\r\n\r\n<p style="margin-left:0cm; margin-right:0cm; text-align:justify"><span style="font-size:11pt">Semisal ada seorang user yang bernama Joko yang ingin mengakses suatu sistem yang menggunakan sistem login. Maka Joko akan memasukkan isian pada kotak <strong>User Id</strong> dengan &lsquo;Joko&rsquo; (tanpa kutip) dan pada kotak <strong>Password</strong> dengan &lsquo;rahasia&rsquo; (tanpa kutip). Bila kemudian ditekan tombol <strong>OK</strong> atau tombol Login &ndash; nama tombolnya bisa berbeda &ndash; maka sistem tersebut akan menjalankan perintah <em>query</em> dalam bahasa SQL seperti berikut ini.</span></p>\r\n\r\n<p style="margin-left:0cm; margin-right:0cm; text-align:justify"><span style="font-size:11pt">Arti dari perintah tersebut adalah menampilkan data dari seluruh <em>record</em> (perhatikan tanda * di perintah tersebut) di database sistem tersebut. Tetapi tidak semua record akan ditampilkan, karena pada perintah di atas ada filter atau pemilihan, yaitu hanya data yang <em>record</em> <strong>UserId</strong>-nya berisi &lsquo;joko&rsquo; dan <strong>Password</strong>-nya berisi &lsquo;rahasia&rsquo;. Perhatikan penggalan perintah setelah klausa <strong>where</strong>. Dan harus dipahami juga bahwa isian <strong>UserId</strong> dan <strong>Password</strong> yang diinputkan oleh <em>user</em>, <strong>keduanya</strong> harus bersesuaian dengan yang tersimpan di database sistem.&nbsp; Karena digunakan logika <strong>AND</strong> pada perintah tersebut.</span><span style="font-size:11pt">Dengan demikian, bila isian <strong>UserId</strong> dan <strong>Password</strong> sesuai dengan yang tersimpan di database, barulah user tersebut dapat masuk ke sistem.</span></p>\r\n\r\n<p style="margin-left:0cm; margin-right:0cm; text-align:justify">&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n', '2017-11-17');

-- --------------------------------------------------------

--
-- Table structure for table `donatur`
--

CREATE TABLE IF NOT EXISTS `donatur` (
  `id_donatur` int(10) NOT NULL AUTO_INCREMENT,
  `nama` varchar(50) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `telephone` int(50) NOT NULL,
  `jenis_donasi` varchar(50) NOT NULL,
  `jumlah_donasi` varchar(20) NOT NULL,
  `tanggal` date NOT NULL,
  PRIMARY KEY (`id_donatur`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=52 ;

--
-- Dumping data for table `donatur`
--

INSERT INTO `donatur` (`id_donatur`, `nama`, `alamat`, `telephone`, `jenis_donasi`, `jumlah_donasi`, `tanggal`) VALUES
(1, 'rofiqi', 'krian', 1231213, 'infaq', '2000', '2017-11-16'),
(2, 'ilham', 'surabaya', 8976, 'zakat', '20.000', '2017-11-07'),
(3, 'bayu', 'sidoarjo', 123, 'zakat', '500.000', '2017-11-08'),
(4, 'alpin', 'balongbendo', 123, 'infaq', '500.000', '2017-11-08'),
(5, 'budi', 'balongbendo', 1323, 'infaq', '800.000', '2017-11-01'),
(6, 'zaki', 'balongbendo', 123, 'infaq', '100.000', '2017-11-08'),
(7, 'qiki', 'balongbendo', 1323, 'infaq', '80.000', '2017-10-01'),
(8, 'sulis', 'balongbendo', 1323, 'infaq', '200.000', '2017-10-01'),
(9, 'kaka', 'surabaya', 8765, 'zakat', '20.000', '2017-11-03'),
(10, 'kuku', 'mikarta', 98234, 'zakat', '60.000', '2017-11-06'),
(11, 'kako', 'surabaya', 8765, 'zakat', '10.000', '2017-10-03'),
(12, 'boku', 'mikarta', 98234, 'zakat', '90.000', '2017-08-06'),
(13, 'budi', 'mikarta', 89, 'infaq', '100.000', '2017-11-08'),
(14, 'habib', 'krian', 123456, 'zakat', '1000', '2017-11-09'),
(15, 'ilham', 'NY', 90909, 'zakat', '100.000', '2017-11-12'),
(16, 'ilham', 'NY', 90909, 'zakat', '100.000', '2017-11-12'),
(17, 'yoman', 'sidoarjo', 0, 'zakat', '90.000', '2017-11-12'),
(18, 'raisa', 'jkt', 89898, 'zakat', '70.000', '2017-11-12'),
(19, 'gita', 'bandung', 7621244, 'infaq', '80.000', '2017-11-12'),
(20, 'test', 'test', 0, 'infaq', '100.000', '2017-11-17'),
(21, 'solikin', 'bumi', 4444, 'infaq', '90.000', '2017-11-30'),
(22, 'osas', 'uwuwe', 987898, 'infaq', '900.000', '2017-12-10'),
(23, 'osas', 'uwuwe', 987898, 'infaq', '900.000', '2017-12-10'),
(24, 'osas', 'uwuwe', 987898, 'infaq', '900.000', '2017-12-10'),
(25, 'osas', 'uwuwe', 987898, 'infaq', 'jiji', '2017-12-10'),
(26, 'osas', 'uwuwe', 987898, 'infaq', '90990', '2017-12-10'),
(27, 'osas', 'uwuwe', 987898, 'zakat', '90990', '2017-12-10'),
(28, 'jxnjwxnwjxnj', 'wehxbhewbx', 0, 'zakat', 'jenxj', '2017-12-10'),
(29, 'isjisjia', 'jsnajsaj', 0, 'infaq', 'ajsanjsans', '2017-12-10'),
(30, 'hoal', 'hggg', 767676, 'infaq', '67676', '2017-12-10'),
(31, 'mmxsncjcndsjcnsdj', 'cdscjnsdjcn', 0, 'zakat', '09090', '2017-12-10'),
(32, 'mkkmk', 'kkmkm', 0, 'zakat', '78787', '2017-12-10'),
(33, '', '', 0, '', '', '2017-12-10'),
(34, '', '', 0, '', '', '2017-12-10'),
(35, 'hghgh', 'bjbjb', 0, 'zakat', '78787', '2017-12-10'),
(36, 'njhjn', 'hbhbh', 0, 'zakat', 'o990909', '2017-12-10'),
(37, 'assssssao', 'smksmqkwx', 1827183718, 'zakat', '9819389', '2017-12-10'),
(38, 'assssssao', 'smksmqkwx', 1827183718, 'zakat', '9819389', '2017-12-10'),
(39, 'assssssao', 'smksmqkwx', 1827183718, 'zakat', '9819389', '2017-12-10'),
(40, 'ok', 'ok', 9, 'infaq', '78787878', '2017-12-10'),
(41, 'uyuy', 'huhu', 909, 'zakat', '5656', '2017-12-10'),
(42, 'ilham rofiqi', 'surabaya', 987898, 'infaq', '900.000', '2017-12-10'),
(43, 'budi', 'test', 89898, 'zakat', '80.000', '2017-12-10'),
(44, 'ko', 'sp', 0, 'infaq', '70.000', '2017-12-10'),
(45, 'jijjj', 'jjj', 989, 'zakat', '90990', '2017-12-10'),
(46, 'uuu', 'uuu', 90909, 'infaq', '90909', '2017-12-10'),
(47, 'kikii', 'tuh', 87, 'zakat', '80.000', '2017-12-10'),
(48, 'llll', 'mmmm9', 999, 'infaq', '988', '2017-12-10'),
(49, 'ilham muhammad', 'surabaya', 8976, 'infaq', '100.000', '2018-01-04'),
(50, 'Bayu', 'Tulangan', 2147483647, 'infaq', '5000', '2018-01-10'),
(51, '', '', 0, '', '', '2018-01-10');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
