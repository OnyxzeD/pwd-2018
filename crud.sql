-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 19, 2018 at 07:16 AM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `crud`
--

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

CREATE TABLE `berita` (
  `id` varchar(10) NOT NULL,
  `judul` varchar(50) DEFAULT NULL,
  `isi` text,
  `tags` varchar(255) DEFAULT NULL,
  `penulis` varchar(50) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `counter` int(11) UNSIGNED DEFAULT '0',
  `thumbnail` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `berita`
--

INSERT INTO `berita` (`id`, `judul`, `isi`, `tags`, `penulis`, `created_at`, `counter`, `thumbnail`) VALUES
('BRT0002', 'Pewd News', 'Pengertian Pramuka dan Sejarah Pramuka | Apa itu pramuka? Pramuka adalah singkatan dari Praja Muda Karana dan merupakan organisasi atau gerakan kepanduan. Pramuka adalah sebuah organisasi yang merupakan wadah proses pendidikan kepramukaan yang dilaksanakan di Indonesia. Dalam dunia internasional, Pramuka disebut dengan istilah “Kepanduan” (Boy Scout). Gerakan Pramuka memiliki kode Kode Kehormatan Pramuka, sebagaimana yang tertuang dalam Anggaran Dasar Pramuka, Gerakan Pramuka memiliki Kode Kehormatan yang terdiri atas janji yang disebut Satya dan Ketentuan Moral yang disebut Darma Kode Kehormatan Pramuka disesuaikan dengan golongan usia dan perkembangan rohani dan jasmaninya, yaitu:\r\nKode Kehormatan Pramuka Siaga terdiri atas Dwisatya dan Dwidarma.\r\nKode Kehormatan Pramuka Penggalang terdiri atas Trisatya Pramuka Penggalang dan Dasadarma.\r\nKode Kehormatan Pramuka Penegak dan Pandega terdiri atas Trisatya Pramuka Penegak dan Pramuka Pandega dan Dasadarma.\r\nKode Kehormatan Pramuka Dewasa terdiri atas Trisatya Anggota Dewasa dan Dasadarma.\r\nSejarah Pramuka dunia pertama kali dipelopori oleh Lord Baden Powell atau nama lengkapnya Robert Sthepenson Smyth Baden Powell of Giwell, seorang warga negara Inggris yang pernah menjadi tentara. Sejak kecil Baden Powell dikenal sebagai anak yang mencintai kegiatan luar ruangan (outdoor). Ia sering bermain di hutan kecil, di samping sekolahnya. Kemah pertama kepanduan yang dipimpin Baden Powell, terjadi pada tanggal 1 Agustus 1907 yang bertempat di Brownsea Island, Inggris. Karena itulah, Tanggal 1 Agustus pun ditetapkan sebagai Hari Kepanduan Dunia.', 'Pemberitahuan,Lain-lain', 'US0003', '2018-07-19 11:40:10', 2, 'Pewd-2018-07-19edgar.jpg'),
('BRT0003', 'Pengenalan Definisi Sekolah Dasar', 'Sekolah dasar (disingkat SD; bahasa Inggris: Elementary School atau Primary School) adalah jenjang paling dasar pada pendidikan formal di Indonesia. Sekolah dasar ditempuh dalam waktu 6 tahun, mulai dari kelas 1 sampai kelas 6. Saat ini murid kelas 6 diwajibkan mengikuti Ujian Nasional (Ebtanas) yang mempengaruhi kelulusan siswa. Lulusan sekolah dasar dapat melanjutkan pendidikan ke tingkat SLTP.\r\n\r\nPelajar sekolah dasar umumnya berusia 6-12 tahun. Di Indonesia, setiap warga negara berusia 6-15 tahun wajib mengikuti pendidikan dasar, yakni sekolah dasar (atau sederajat) 6 tahun dan sekolah menengah pertama (atau sederajat) 3 tahun.\r\n\r\nSekolah dasar diselenggarakan oleh pemerintah maupun swasta. Sejak diberlakukannya otonomi daerah pada tahun 2001, pengelolaan sekolah dasar negeri (SDN) di Indonesia yang sebelumnya berada di bawah Departemen Pendidikan Nasional, kini menjadi tanggung jawab pemerintah daerah kabupaten/kota. Sedangkan Departemen Pendidikan Nasional hanya berperan sebagai regulator dalam bidang standar nasional pendidikan. Secara struktural, sekolah dasar negeri merupakan unit pelaksana teknis dinas pendidikan kabupaten/kota disekitar anda.', 'Berita', 'US0001', '2018-07-19 12:09:27', 3, 'Pengenalan-2018-07-195.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id` int(11) NOT NULL,
  `path` varchar(255) NOT NULL,
  `caption` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `guru`
--

CREATE TABLE `guru` (
  `nip` varchar(18) NOT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `jk` tinyint(4) DEFAULT NULL,
  `alamat` varchar(100) DEFAULT NULL,
  `gelar` varchar(20) DEFAULT NULL,
  `masa_bakti` tinyint(4) DEFAULT NULL,
  `foto` varchar(100) DEFAULT NULL,
  `level` tinyint(4) DEFAULT NULL,
  `quotes` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `guru`
--

INSERT INTO `guru` (`nip`, `nama`, `jk`, `alamat`, `gelar`, `masa_bakti`, `foto`, `level`, `quotes`) VALUES
('123', 'Jiraiya', 1, 'Localhost', 'S.Pd', 2, 'user.jpg', 2, 'Hidup ini adalah sebuah kegiatan yang gratis (seharusnya) ....'),
('124', 'b', NULL, NULL, 'S.Pd', NULL, 'user.jpg', 2, NULL),
('125', 'c', NULL, NULL, 'S.Pd', NULL, 'user.jpg', 2, NULL),
('126', 'd', NULL, NULL, 'S.Pd', NULL, 'user.jpg', 2, NULL),
('197201242000031001', 'Choliq', 1, 'Kepanjen', 'S.Pd', 10, '197201242000031001-fd-orientacao.jpg', 2, 'Jika Anda bisa membaca ini, maka berterima kasihlah kepada guru'),
('197201242000031004', 'Sujiwo Tedjo', 1, 'Masdasd', 'Ph. D', 10, 'user.jpg', 1, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE `siswa` (
  `nis` varchar(20) NOT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `jk` tinyint(4) DEFAULT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `alamat` varchar(100) DEFAULT NULL,
  `nama_ortu` varchar(50) DEFAULT NULL,
  `telp_ortu` varchar(12) DEFAULT NULL,
  `status` tinyint(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`nis`, `nama`, `jk`, `tgl_lahir`, `alamat`, `nama_ortu`, `telp_ortu`, `status`) VALUES
('120105', 'Talitha Kinanti Azzahra', 0, '2005-12-24', 'Kalipare', 'Talitha', '085580111105', 7),
('12014', 'Eka Satria Alviansyah', 1, '2005-03-20', 'Jugo', 'Eka', '085580111014', 7),
('12021', 'Genioes Adskhan Latafat', 1, '2005-06-29', 'Mentaraman', 'Genioes', '085580111021', 7),
('12028', 'Mikhail Dzulfiqar Purwanto', 1, '2005-12-22', 'Darungan', 'Mikhail', '085580111028', 7),
('12035', 'Muhammad Alif Pratama', 1, '2005-08-25', 'Krajan', 'Muhammad', '085580111035', 7),
('12042', 'Muhammad Vidje Avis', 1, '2005-01-15', 'Kesamben', 'Muhammad', '085580111042', 7),
('12049', 'Rafiq Alfarizy Putrakusuma', 1, '2005-06-29', 'Kalipare', 'Rafiq', '085580111049', 7),
('12056', 'Ajeng Dwi Aprilia', 0, '2005-01-23', 'Singkil', 'Ajeng', '085580111056', 7),
('12063', 'Ashyfa Izratul Almira', 0, '2005-07-20', 'Ngadri', 'Ashyfa', '085580111063', 7),
('1207', 'Akrana Saaha Maulana', 1, '2005-12-14', 'Ngadri', 'Akrana', '085580111007', 7),
('12070', 'Destalitha Raniah Triamalia', 0, '2005-03-17', 'Jugo', 'Destalitha', '085580111070', 7),
('12077', 'Galuh Liris Aggraini', 0, '2005-11-25', 'Mentaraman', 'Galuh', '085580111077', 7),
('12084', 'Khansa Maulina Salina', 0, '2005-07-21', 'Darungan', 'Khansa', '085580111084', 7),
('12091', 'Navish Aryasatya Chandra', 0, '2005-12-24', 'Krajan', 'Navish', '085580111091', 7),
('12098', 'Regina Noeriannisa', 0, '2005-10-28', 'Kesamben', 'Regina', '085580111098', 7),
('130104', 'Talitha Khansaa Wathya', 0, '2006-11-25', 'Singkil', 'Talitha', '085580111104', 6),
('13013', 'Dawa Syahru Romadhoni', 1, '2006-06-20', 'Mentaraman', 'Dawa', '085580111013', 6),
('13020', 'Gathan Fahmi Saktiansyah', 1, '2006-09-30', 'Darungan', 'Gathan', '085580111020', 6),
('13027', 'Maula Abid Aqila Dwipranaja', 1, '2006-12-13', 'Krajan', 'Maula', '085580111027', 6),
('13034', 'Muhammad Alfathar Putra Roni', 1, '2006-12-21', 'Kesamben', 'Muhammad', '085580111034', 6),
('13041', 'Muhammad Robby Dzidni Ilman', 1, '2006-01-26', 'Kalipare', 'Muhammad', '085580111041', 6),
('13048', 'Rafan Izyan ArkanaRaffasya Akbar Haaziqi', 1, '2006-10-19', 'Singkil', 'Rafan', '085580111048', 6),
('13055', 'Widano Ardiansyah Putra', 1, '2006-02-18', 'Ngadri', 'Widano', '085580111055', 6),
('1306', 'Ahmad Nabil Zakariyah', 1, '2006-01-22', 'Jugo', 'Ahmad', '085580111006', 6),
('13062', 'Aryasatya Khairul Azzam', 0, '2006-07-16', 'Jugo', 'Aryasatya', '085580111062', 6),
('13069', 'Davina Zifara Putri Adhani', 0, '2006-04-18', 'Mentaraman', 'Davina', '085580111069', 6),
('13076', 'Fakhira Aabidah Tiakaruna', 0, '2006-01-15', 'Darungan', 'Fakhira', '085580111076', 6),
('13083', 'Kadek Kirana Oke Putrianingsih ', 0, '2006-01-23', 'Krajan', 'Kadek', '085580111083', 6),
('13090', 'Naraya Cinta Arkananta Widhyan', 0, '2006-07-11', 'Kesamben', 'Naraya', '085580111090', 6),
('13097', 'Regan Chesta Adabi', 0, '2006-01-22', 'Kalipare', 'Regan', '085580111097', 6),
('140103', 'Siti Mahalian Yuli Rahadian', 0, '2007-03-30', 'Ngadri', 'Siti', '085580111103', 5),
('14012', 'Chiko Alvaro Davien', 1, '2007-12-20', 'Darungan', 'Chiko', '085580111012', 5),
('14019', 'Ganeshi Maheswari Jiza Janitra', 1, '2007-02-27', 'Krajan', 'Ganeshi', '085580111019', 5),
('14026', 'Maher Ahmed Musyaddad Qandhiyas', 1, '2007-06-19', 'Kesamben', 'Maher', '085580111026', 5),
('14033', 'Muhammad Akmal Abrisam', 1, '2007-07-20', 'Kalipare', 'Muhammad', '085580111033', 5),
('14040', 'Muhammad Gavin Ridwan', 1, '2007-08-17', 'Singkil', 'Muhammad', '085580111040', 5),
('14047', 'Raditya Slamet Yasyafad', 1, '2007-06-24', 'Ngadri', 'Raditya', '085580111047', 5),
('1405', 'Adnan Adiansyah Pranata', 1, '2007-08-28', 'Mentaraman', 'Adnan', '085580111005', 5),
('14054', 'Tsar Taj Thierr', 1, '2007-12-27', 'Jugo', 'Tsar', '085580111054', 5),
('14061', 'Arista Ratih Maharani', 0, '2007-12-28', 'Mentaraman', 'Arista', '085580111061', 5),
('14068', 'Davina Chalista Stevanya', 0, '2007-01-12', 'Darungan', 'Davina', '085580111068', 5),
('14075', 'Ezi Zahira Tsani', 0, '2007-06-30', 'Krajan', 'Ezi', '085580111075', 5),
('14082', 'Juniar Irthia Ashary', 0, '2007-04-25', 'Kesamben', 'Juniar', '085580111082', 5),
('14089', 'Nadya Nagata Utomo', 0, '2007-01-18', 'Kalipare', 'Nadya', '085580111089', 5),
('14096', 'Rassya Agha Satria', 0, '2007-06-30', 'Singkil', 'Rassya', '085580111096', 5),
('150102', 'Siti Aisah', 0, '2008-04-19', 'Jugo', 'Siti', '085580111102', 4),
('15011', 'Chandra Fikri Muyassar', 1, '2008-12-28', 'Krajan', 'Chandra', '085580111011', 4),
('15018', 'Fathur Rizqy Maulana Abi', 1, '2008-11-28', 'Kesamben', 'Fathur', '085580111018', 4),
('15025', 'Lazuardi Ibrahim Azzahmi', 1, '2008-12-30', 'Kalipare', 'Lazuardi', '085580111025', 4),
('15032', 'Muhamad Rizki Kurniawan', 1, '2008-12-17', 'Singkil', 'Muhamad', '085580111032', 4),
('15039', 'Muhammad Fatir Akbar', 1, '2008-07-16', 'Ngadri', 'Muhammad', '085580111039', 4),
('1504', 'Adil Putra Siswanto', 1, '2008-09-11', 'Darungan', 'Adil', '085580111004', 4),
('15046', 'Pragya Prasnanti', 1, '2008-03-30', 'Jugo', 'Pragya', '085580111046', 4),
('15053', 'Rifky Raditya Alamsyah Romadona', 1, '2008-10-14', 'Mentaraman', 'Rifky', '085580111053', 4),
('15060', 'Andinta Setia Hati Puspitasari', 0, '2008-06-30', 'Darungan', 'Andinta', '085580111060', 4),
('15067', 'Azwahita Huriyah Ogie', 0, '2008-03-23', 'Krajan', 'Azwahita', '085580111067', 4),
('15074', 'Erissa Putri Oktaviani', 0, '2008-12-12', 'Kesamben', 'Erissa', '085580111074', 4),
('15081', 'Jesicha Virginia', 0, '2008-11-30', 'Kalipare', 'Jesicha', '085580111081', 4),
('15088', 'Nadia Ramadhani Labanu', 0, '2008-06-17', 'Singkil', 'Nadia', '085580111088', 4),
('15095', 'Novia Fembriyana Hapsari', 0, '2008-03-14', 'Ngadri', 'Novia', '085580111095', 4),
('16010', 'Bintani Mardika Khansa Tsamara', 1, '2009-04-29', 'Kesamben', 'Bintani', '085580111010', 3),
('160101', 'Sheila Latisha Alayya', 0, '2009-11-28', 'Mentaraman', 'Sheila', '085580111101', 3),
('160108', 'Zifara Ita Indriyani Azzahra Julia A', 0, '2009-11-28', 'Darungan', 'Zifara', '085580111108', 3),
('16017', 'Fabian Brahmastra Abimanyu', 1, '2009-07-18', 'Kalipare', 'Fabian', '085580111017', 3),
('16024', 'Gilang Putra Ramadhan', 1, '2009-10-18', 'Singkil', 'Gilang', '085580111024', 3),
('1603', 'Adewyzar Elzaky Simbolon', 1, '2009-06-17', 'Krajan', 'Adewyzar', '085580111003', 3),
('16031', 'Mochammad Lintang Hayya Aulia', 1, '2009-01-15', 'Ngadri', 'Mochammad', '085580111031', 3),
('16038', 'Muhammad Ega Saputra', 1, '2009-07-24', 'Jugo', 'Muhammad', '085580111038', 3),
('16045', 'Ozilio Sava Kurniawan', 1, '2009-11-18', 'Mentaraman', 'Ozilio', '085580111045', 3),
('16052', 'Reihan Ezza Pratama', 1, '2009-01-30', 'Darungan', 'Reihan', '085580111052', 3),
('16059', 'Andin Putri Aprlia', 0, '2009-09-23', 'Krajan', 'Andin', '085580111059', 3),
('16066', 'Aurellia Dwi Ramdhani', 0, '2009-08-30', 'Kesamben', 'Aurellia', '085580111066', 3),
('16073', 'Dyah Putri Turbani Hartanty', 0, '2009-12-20', 'Kalipare', 'Dwi', '085580111073', 3),
('16080', 'Ineisya Naraya Prihandini', 0, '2009-01-25', 'Singkil', 'Ineisya', '085580111080', 3),
('16087', 'Monica Freezya Queenta', 0, '2009-12-25', 'Ngadri', 'Monica', '085580111087', 3),
('16094', 'Noura Aprilia Azzahra', 0, '2009-10-11', 'Jugo', 'Noura', '085580111094', 3),
('170100', 'Salsa Billaaruna Putri Gamma', 0, '2010-12-17', 'Darungan', 'Salsa', '085580111100', 2),
('170107', 'Zahra Azillea Dira Nur Rahmah', 0, '2010-06-26', 'Krajan', 'Zahra', '085580111107', 2),
('17016', 'Evan Fabregas Prima Kurniawan', 1, '2010-01-22', 'Singkil', 'Evan', '085580111016', 2),
('1702', 'Achmad Fahrizzi Kurniawan', 1, '2010-09-23', 'Kesamben', 'Achmad', '085580111002', 2),
('17023', 'Ghibran Rastra Alfarizy', 1, '2010-11-21', 'Ngadri', 'Ghibran', '085580111023', 2),
('17030', 'Mochammad Choirun Nasri', 1, '2010-10-11', 'Jugo', 'Mochammad', '085580111030', 2),
('17037', 'Muhammad Devan Rafandra Ameldy Putra H.', 1, '2010-03-18', 'Mentaraman', 'Muhammad', '085580111037', 2),
('17044', 'Omar Akbar Arif', 1, '2010-10-12', 'Darungan', 'Omar', '085580111044', 2),
('17051', 'Raihan Abdulloh Anas', 1, '2010-12-30', 'Krajan', 'Raihan', '085580111051', 2),
('17058', 'Anandra Reizy Ramadhani', 0, '2010-03-20', 'Kesamben', 'Anandra', '085580111058', 2),
('17065', 'Aura Titania Ramadhani', 0, '2010-03-26', 'Kalipare', 'Aura', '085580111065', 2),
('17072', 'Dwi Fitriana Septianingrum', 0, '2010-12-16', 'Singkil', 'Dwi', '085580111072', 2),
('17079', 'Gracia Shallom Octadharma', 0, '2010-06-23', 'Ngadri', 'Gracia', '085580111079', 2),
('17086', 'Marsya Winnie Twicilla', 0, '2010-04-14', 'Jugo', 'Marsya', '085580111086', 2),
('1709', 'Bima Nararya Makaio Arkadiaz', 1, '2010-01-22', 'Kalipare', 'Bima', '085580111009', 2),
('17093', 'Ni Kadek Pradnya Paramita Maheswari', 0, '2010-08-11', 'Mentaraman', 'Ni', '085580111093', 2),
('1801', 'Achmad Aryasatya Pamuji', 1, '2011-01-23', 'Kalipare', 'Achmad', '085580111001', 1),
('180106', 'Talitha Nasywa Afandi', 0, '2011-01-18', 'Kesamben', 'Talitha', '085580111106', 1),
('18015', 'Elgiansyah Putra Wijaya', 1, '2011-01-14', 'Ngadri', 'Elgiansyah', '085580111015', 1),
('18022', 'Ghalih Al Syabil Oktaviano', 1, '2011-01-29', 'Jugo', 'Ghalih', '085580111022', 1),
('18029', 'Moch. Fitra Azzaqi', 1, '2011-09-15', 'Mentaraman', 'Moch.', '085580111029', 1),
('18036', 'Muhammad Caesar Fahrezy', 1, '2011-08-16', 'Darungan', 'Muhammad', '085580111036', 1),
('18043', 'Naufal Mahardhika Ferdian Putra', 1, '2011-12-24', 'Krajan', 'Naufal', '085580111043', 1),
('18050', 'Rafka Putra Rajata', 1, '2011-11-22', 'Kesamben', 'Rafka', '085580111050', 1),
('18057', 'Alisha Putri Sasi Kirana', 0, '2011-09-29', 'Kalipare', 'Alisha', '085580111057', 1),
('18064', 'Aulia Choirun Nisa Lovieyana', 0, '2011-06-28', 'Singkil', 'Aulia', '085580111064', 1),
('18071', 'Dini Almira Putri Aisyah', 0, '2011-08-28', 'Ngadri', 'Dini', '085580111071', 1),
('18078', 'Gita Oktavia Anggraini', 0, '2011-10-29', 'Jugo', 'Gita', '085580111078', 1),
('1808', 'Alif Abhista Putra', 1, '2011-10-28', 'Singkil', 'Alif', '085580111008', 1),
('18085', 'Khasyifatul Fuadiah', 0, '2011-08-30', 'Mentaraman', 'Khasyifatul', '085580111085', 1),
('18092', 'Neyra Zeta Vidi Amanda', 0, '2011-07-28', 'Darungan', 'Neyra', '085580111092', 1),
('18099', 'Renanti Adelina Novihani', 0, '2011-01-11', 'Kepanjen', 'Renanti', '085580111099', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` varchar(10) NOT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(32) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `level` tinyint(4) DEFAULT NULL,
  `status` tinyint(4) DEFAULT NULL,
  `foto` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `email`, `level`, `status`, `foto`) VALUES
('US0001', 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin@app.com', 1, 1, NULL),
('US0002', 'astojim', '4e8ec7422e234f969dcc5307a96003c3', 'astojim@app.com', 2, 0, NULL),
('US0003', 'OnyxzeD Hackazer', '0f8b882765143b00b9c1ea0d3071a88c', 'onyxzed@app.com', 1, 1, 'onyxzed-skull-user.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `guru`
--
ALTER TABLE `guru`
  ADD PRIMARY KEY (`nip`);

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`nis`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
