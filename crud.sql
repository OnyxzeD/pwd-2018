/*
Navicat MySQL Data Transfer

Source Server         : Cyberdyne
Source Server Version : 100119
Source Host           : localhost:3306
Source Database       : crud

Target Server Type    : MYSQL
Target Server Version : 100119
File Encoding         : 65001

Date: 2018-07-19 13:49:54
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for berita
-- ----------------------------
DROP TABLE IF EXISTS `berita`;
CREATE TABLE `berita` (
  `id` varchar(10) NOT NULL,
  `judul` varchar(50) DEFAULT NULL,
  `isi` text,
  `tags` varchar(255) DEFAULT NULL,
  `penulis` varchar(50) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `counter` int(11) unsigned DEFAULT '0',
  `thumbnail` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of berita
-- ----------------------------
INSERT INTO `berita` VALUES ('BRT0002', 'Pewd News', 'Pengertian Pramuka dan Sejarah Pramuka | Apa itu pramuka? Pramuka adalah singkatan dari Praja Muda Karana dan merupakan organisasi atau gerakan kepanduan. Pramuka adalah sebuah organisasi yang merupakan wadah proses pendidikan kepramukaan yang dilaksanakan di Indonesia. Dalam dunia internasional, Pramuka disebut dengan istilah “Kepanduan” (Boy Scout). Gerakan Pramuka memiliki kode Kode Kehormatan Pramuka, sebagaimana yang tertuang dalam Anggaran Dasar Pramuka, Gerakan Pramuka memiliki Kode Kehormatan yang terdiri atas janji yang disebut Satya dan Ketentuan Moral yang disebut Darma Kode Kehormatan Pramuka disesuaikan dengan golongan usia dan perkembangan rohani dan jasmaninya, yaitu:\r\nKode Kehormatan Pramuka Siaga terdiri atas Dwisatya dan Dwidarma.\r\nKode Kehormatan Pramuka Penggalang terdiri atas Trisatya Pramuka Penggalang dan Dasadarma.\r\nKode Kehormatan Pramuka Penegak dan Pandega terdiri atas Trisatya Pramuka Penegak dan Pramuka Pandega dan Dasadarma.\r\nKode Kehormatan Pramuka Dewasa terdiri atas Trisatya Anggota Dewasa dan Dasadarma.\r\nSejarah Pramuka dunia pertama kali dipelopori oleh Lord Baden Powell atau nama lengkapnya Robert Sthepenson Smyth Baden Powell of Giwell, seorang warga negara Inggris yang pernah menjadi tentara. Sejak kecil Baden Powell dikenal sebagai anak yang mencintai kegiatan luar ruangan (outdoor). Ia sering bermain di hutan kecil, di samping sekolahnya. Kemah pertama kepanduan yang dipimpin Baden Powell, terjadi pada tanggal 1 Agustus 1907 yang bertempat di Brownsea Island, Inggris. Karena itulah, Tanggal 1 Agustus pun ditetapkan sebagai Hari Kepanduan Dunia.', 'Pemberitahuan,Lain-lain', 'US0003', '2018-07-19 11:40:10', '2', 'Pewd-2018-07-19edgar.jpg');
INSERT INTO `berita` VALUES ('BRT0003', 'Pengenalan Definisi Sekolah Dasar', 'Sekolah dasar (disingkat SD; bahasa Inggris: Elementary School atau Primary School) adalah jenjang paling dasar pada pendidikan formal di Indonesia. Sekolah dasar ditempuh dalam waktu 6 tahun, mulai dari kelas 1 sampai kelas 6. Saat ini murid kelas 6 diwajibkan mengikuti Ujian Nasional (Ebtanas) yang mempengaruhi kelulusan siswa. Lulusan sekolah dasar dapat melanjutkan pendidikan ke tingkat SLTP.\r\n\r\nPelajar sekolah dasar umumnya berusia 6-12 tahun. Di Indonesia, setiap warga negara berusia 6-15 tahun wajib mengikuti pendidikan dasar, yakni sekolah dasar (atau sederajat) 6 tahun dan sekolah menengah pertama (atau sederajat) 3 tahun.\r\n\r\nSekolah dasar diselenggarakan oleh pemerintah maupun swasta. Sejak diberlakukannya otonomi daerah pada tahun 2001, pengelolaan sekolah dasar negeri (SDN) di Indonesia yang sebelumnya berada di bawah Departemen Pendidikan Nasional, kini menjadi tanggung jawab pemerintah daerah kabupaten/kota. Sedangkan Departemen Pendidikan Nasional hanya berperan sebagai regulator dalam bidang standar nasional pendidikan. Secara struktural, sekolah dasar negeri merupakan unit pelaksana teknis dinas pendidikan kabupaten/kota disekitar anda.', 'Berita', 'US0001', '2018-07-19 12:59:08', '7', 'Pengenalan-2018-07-195.jpg');

-- ----------------------------
-- Table structure for gallery
-- ----------------------------
DROP TABLE IF EXISTS `gallery`;
CREATE TABLE `gallery` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `path` varchar(255) NOT NULL,
  `caption` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of gallery
-- ----------------------------
INSERT INTO `gallery` VALUES ('1', 'G-848sb-2.jpg', 'Hari ini panas ngeeettzzzz yaa, jadi pengen matiin');

-- ----------------------------
-- Table structure for guru
-- ----------------------------
DROP TABLE IF EXISTS `guru`;
CREATE TABLE `guru` (
  `nip` varchar(18) NOT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `jk` tinyint(4) DEFAULT NULL,
  `alamat` varchar(100) DEFAULT NULL,
  `gelar` varchar(20) DEFAULT NULL,
  `masa_bakti` tinyint(4) DEFAULT NULL,
  `foto` varchar(100) DEFAULT NULL,
  `level` tinyint(4) DEFAULT NULL,
  `quotes` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`nip`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of guru
-- ----------------------------
INSERT INTO `guru` VALUES ('07597666681', 'Rinda Yudiawati', '0', 'Blitar', 'S.Pd', '5', 'user.jpg', '2', 'Seorang guru akan selamanya menjadi guru, meskipun Anda telah melupakan ilmu yang Anda pelajari dari');
INSERT INTO `guru` VALUES ('197201242000031001', 'Choliq', '1', 'Kepanjen', 'S.Pd', '10', '197201242000031001-fd-orientacao.jpg', '2', 'Jika Anda bisa membaca ini, maka berterima kasihlah kepada guru');
INSERT INTO `guru` VALUES ('197201242000031004', 'Sujiwo Tedjo', '1', 'Masdasd', 'Ph. D', '10', 'user.jpg', '1', null);
INSERT INTO `guru` VALUES ('25417376392', 'Supadi', '1', 'Localhost', 'S.Pd', '3', 'user.jpg', '2', 'Orang hebat bisa melahirkan beberapa karya bermutu, tapi guru yang bermutu dapat melahirkan ribuan o');
INSERT INTO `guru` VALUES ('67467676683', 'Tatik Sulistini', '0', 'Kalipare', 'S.Pd', '6', 'user.jpg', '2', 'Jadikanlah guru-guru Anda sebagai orang terhormat. Sehingga guru-guru terbaik datang kepada Anda, da');
INSERT INTO `guru` VALUES ('81377466481', 'Miseni', '1', 'Kalipare', 'S.Pd', '5', 'user.jpg', '2', 'Guru adalah pahlawan, dan tanda-tanda kepahlawanannya terukir pada keberhasilan semua orang-orang be');

-- ----------------------------
-- Table structure for siswa
-- ----------------------------
DROP TABLE IF EXISTS `siswa`;
CREATE TABLE `siswa` (
  `nis` varchar(20) NOT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `jk` tinyint(4) DEFAULT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `alamat` varchar(100) DEFAULT NULL,
  `nama_ortu` varchar(50) DEFAULT NULL,
  `telp_ortu` varchar(12) DEFAULT NULL,
  `status` tinyint(4) DEFAULT NULL,
  PRIMARY KEY (`nis`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of siswa
-- ----------------------------
INSERT INTO `siswa` VALUES ('120105', 'Talitha Kinanti Azzahra', '0', '2005-12-24', 'Kalipare', 'Talitha', '085580111105', '7');
INSERT INTO `siswa` VALUES ('12014', 'Eka Satria Alviansyah', '1', '2005-03-20', 'Jugo', 'Eka', '085580111014', '7');
INSERT INTO `siswa` VALUES ('12021', 'Genioes Adskhan Latafat', '1', '2005-06-29', 'Mentaraman', 'Genioes', '085580111021', '7');
INSERT INTO `siswa` VALUES ('12028', 'Mikhail Dzulfiqar Purwanto', '1', '2005-12-22', 'Darungan', 'Mikhail', '085580111028', '7');
INSERT INTO `siswa` VALUES ('12035', 'Muhammad Alif Pratama', '1', '2005-08-25', 'Krajan', 'Muhammad', '085580111035', '7');
INSERT INTO `siswa` VALUES ('12042', 'Muhammad Vidje Avis', '1', '2005-01-15', 'Kesamben', 'Muhammad', '085580111042', '7');
INSERT INTO `siswa` VALUES ('12049', 'Rafiq Alfarizy Putrakusuma', '1', '2005-06-29', 'Kalipare', 'Rafiq', '085580111049', '7');
INSERT INTO `siswa` VALUES ('12056', 'Ajeng Dwi Aprilia', '0', '2005-01-23', 'Singkil', 'Ajeng', '085580111056', '7');
INSERT INTO `siswa` VALUES ('12063', 'Ashyfa Izratul Almira', '0', '2005-07-20', 'Ngadri', 'Ashyfa', '085580111063', '7');
INSERT INTO `siswa` VALUES ('1207', 'Akrana Saaha Maulana', '1', '2005-12-14', 'Ngadri', 'Akrana', '085580111007', '7');
INSERT INTO `siswa` VALUES ('12070', 'Destalitha Raniah Triamalia', '0', '2005-03-17', 'Jugo', 'Destalitha', '085580111070', '7');
INSERT INTO `siswa` VALUES ('12077', 'Galuh Liris Aggraini', '0', '2005-11-25', 'Mentaraman', 'Galuh', '085580111077', '7');
INSERT INTO `siswa` VALUES ('12084', 'Khansa Maulina Salina', '0', '2005-07-21', 'Darungan', 'Khansa', '085580111084', '7');
INSERT INTO `siswa` VALUES ('12091', 'Navish Aryasatya Chandra', '0', '2005-12-24', 'Krajan', 'Navish', '085580111091', '7');
INSERT INTO `siswa` VALUES ('12098', 'Regina Noeriannisa', '0', '2005-10-28', 'Kesamben', 'Regina', '085580111098', '7');
INSERT INTO `siswa` VALUES ('130104', 'Talitha Khansaa Wathya', '0', '2006-11-25', 'Singkil', 'Talitha', '085580111104', '6');
INSERT INTO `siswa` VALUES ('13013', 'Dawa Syahru Romadhoni', '1', '2006-06-20', 'Mentaraman', 'Dawa', '085580111013', '6');
INSERT INTO `siswa` VALUES ('13020', 'Gathan Fahmi Saktiansyah', '1', '2006-09-30', 'Darungan', 'Gathan', '085580111020', '6');
INSERT INTO `siswa` VALUES ('13027', 'Maula Abid Aqila Dwipranaja', '1', '2006-12-13', 'Krajan', 'Maula', '085580111027', '6');
INSERT INTO `siswa` VALUES ('13034', 'Muhammad Alfathar Putra Roni', '1', '2006-12-21', 'Kesamben', 'Muhammad', '085580111034', '6');
INSERT INTO `siswa` VALUES ('13041', 'Muhammad Robby Dzidni Ilman', '1', '2006-01-26', 'Kalipare', 'Muhammad', '085580111041', '6');
INSERT INTO `siswa` VALUES ('13048', 'Rafan Izyan ArkanaRaffasya Akbar Haaziqi', '1', '2006-10-19', 'Singkil', 'Rafan', '085580111048', '6');
INSERT INTO `siswa` VALUES ('13055', 'Widano Ardiansyah Putra', '1', '2006-02-18', 'Ngadri', 'Widano', '085580111055', '6');
INSERT INTO `siswa` VALUES ('1306', 'Ahmad Nabil Zakariyah', '1', '2006-01-22', 'Jugo', 'Ahmad', '085580111006', '6');
INSERT INTO `siswa` VALUES ('13062', 'Aryasatya Khairul Azzam', '0', '2006-07-16', 'Jugo', 'Aryasatya', '085580111062', '6');
INSERT INTO `siswa` VALUES ('13069', 'Davina Zifara Putri Adhani', '0', '2006-04-18', 'Mentaraman', 'Davina', '085580111069', '6');
INSERT INTO `siswa` VALUES ('13076', 'Fakhira Aabidah Tiakaruna', '0', '2006-01-15', 'Darungan', 'Fakhira', '085580111076', '6');
INSERT INTO `siswa` VALUES ('13083', 'Kadek Kirana Oke Putrianingsih ', '0', '2006-01-23', 'Krajan', 'Kadek', '085580111083', '6');
INSERT INTO `siswa` VALUES ('13090', 'Naraya Cinta Arkananta Widhyan', '0', '2006-07-11', 'Kesamben', 'Naraya', '085580111090', '6');
INSERT INTO `siswa` VALUES ('13097', 'Regan Chesta Adabi', '0', '2006-01-22', 'Kalipare', 'Regan', '085580111097', '6');
INSERT INTO `siswa` VALUES ('140103', 'Siti Mahalian Yuli Rahadian', '0', '2007-03-30', 'Ngadri', 'Siti', '085580111103', '5');
INSERT INTO `siswa` VALUES ('14012', 'Chiko Alvaro Davien', '1', '2007-12-20', 'Darungan', 'Chiko', '085580111012', '5');
INSERT INTO `siswa` VALUES ('14019', 'Ganeshi Maheswari Jiza Janitra', '1', '2007-02-27', 'Krajan', 'Ganeshi', '085580111019', '5');
INSERT INTO `siswa` VALUES ('14026', 'Maher Ahmed Musyaddad Qandhiyas', '1', '2007-06-19', 'Kesamben', 'Maher', '085580111026', '5');
INSERT INTO `siswa` VALUES ('14033', 'Muhammad Akmal Abrisam', '1', '2007-07-20', 'Kalipare', 'Muhammad', '085580111033', '5');
INSERT INTO `siswa` VALUES ('14040', 'Muhammad Gavin Ridwan', '1', '2007-08-17', 'Singkil', 'Muhammad', '085580111040', '5');
INSERT INTO `siswa` VALUES ('14047', 'Raditya Slamet Yasyafad', '1', '2007-06-24', 'Ngadri', 'Raditya', '085580111047', '5');
INSERT INTO `siswa` VALUES ('1405', 'Adnan Adiansyah Pranata', '1', '2007-08-28', 'Mentaraman', 'Adnan', '085580111005', '5');
INSERT INTO `siswa` VALUES ('14054', 'Tsar Taj Thierr', '1', '2007-12-27', 'Jugo', 'Tsar', '085580111054', '5');
INSERT INTO `siswa` VALUES ('14061', 'Arista Ratih Maharani', '0', '2007-12-28', 'Mentaraman', 'Arista', '085580111061', '5');
INSERT INTO `siswa` VALUES ('14068', 'Davina Chalista Stevanya', '0', '2007-01-12', 'Darungan', 'Davina', '085580111068', '5');
INSERT INTO `siswa` VALUES ('14075', 'Ezi Zahira Tsani', '0', '2007-06-30', 'Krajan', 'Ezi', '085580111075', '5');
INSERT INTO `siswa` VALUES ('14082', 'Juniar Irthia Ashary', '0', '2007-04-25', 'Kesamben', 'Juniar', '085580111082', '5');
INSERT INTO `siswa` VALUES ('14089', 'Nadya Nagata Utomo', '0', '2007-01-18', 'Kalipare', 'Nadya', '085580111089', '5');
INSERT INTO `siswa` VALUES ('14096', 'Rassya Agha Satria', '0', '2007-06-30', 'Singkil', 'Rassya', '085580111096', '5');
INSERT INTO `siswa` VALUES ('150102', 'Siti Aisah', '0', '2008-04-19', 'Jugo', 'Siti', '085580111102', '4');
INSERT INTO `siswa` VALUES ('15011', 'Chandra Fikri Muyassar', '1', '2008-12-28', 'Krajan', 'Chandra', '085580111011', '4');
INSERT INTO `siswa` VALUES ('15018', 'Fathur Rizqy Maulana Abi', '1', '2008-11-28', 'Kesamben', 'Fathur', '085580111018', '4');
INSERT INTO `siswa` VALUES ('15025', 'Lazuardi Ibrahim Azzahmi', '1', '2008-12-30', 'Kalipare', 'Lazuardi', '085580111025', '4');
INSERT INTO `siswa` VALUES ('15032', 'Muhamad Rizki Kurniawan', '1', '2008-12-17', 'Singkil', 'Muhamad', '085580111032', '4');
INSERT INTO `siswa` VALUES ('15039', 'Muhammad Fatir Akbar', '1', '2008-07-16', 'Ngadri', 'Muhammad', '085580111039', '4');
INSERT INTO `siswa` VALUES ('1504', 'Adil Putra Siswanto', '1', '2008-09-11', 'Darungan', 'Adil', '085580111004', '4');
INSERT INTO `siswa` VALUES ('15046', 'Pragya Prasnanti', '1', '2008-03-30', 'Jugo', 'Pragya', '085580111046', '4');
INSERT INTO `siswa` VALUES ('15053', 'Rifky Raditya Alamsyah Romadona', '1', '2008-10-14', 'Mentaraman', 'Rifky', '085580111053', '4');
INSERT INTO `siswa` VALUES ('15060', 'Andinta Setia Hati Puspitasari', '0', '2008-06-30', 'Darungan', 'Andinta', '085580111060', '4');
INSERT INTO `siswa` VALUES ('15067', 'Azwahita Huriyah Ogie', '0', '2008-03-23', 'Krajan', 'Azwahita', '085580111067', '4');
INSERT INTO `siswa` VALUES ('15074', 'Erissa Putri Oktaviani', '0', '2008-12-12', 'Kesamben', 'Erissa', '085580111074', '4');
INSERT INTO `siswa` VALUES ('15081', 'Jesicha Virginia', '0', '2008-11-30', 'Kalipare', 'Jesicha', '085580111081', '4');
INSERT INTO `siswa` VALUES ('15088', 'Nadia Ramadhani Labanu', '0', '2008-06-17', 'Singkil', 'Nadia', '085580111088', '4');
INSERT INTO `siswa` VALUES ('15095', 'Novia Fembriyana Hapsari', '0', '2008-03-14', 'Ngadri', 'Novia', '085580111095', '4');
INSERT INTO `siswa` VALUES ('16010', 'Bintani Mardika Khansa Tsamara', '1', '2009-04-29', 'Kesamben', 'Bintani', '085580111010', '3');
INSERT INTO `siswa` VALUES ('160101', 'Sheila Latisha Alayya', '0', '2009-11-28', 'Mentaraman', 'Sheila', '085580111101', '3');
INSERT INTO `siswa` VALUES ('160108', 'Zifara Ita Indriyani Azzahra Julia A', '0', '2009-11-28', 'Darungan', 'Zifara', '085580111108', '3');
INSERT INTO `siswa` VALUES ('16017', 'Fabian Brahmastra Abimanyu', '1', '2009-07-18', 'Kalipare', 'Fabian', '085580111017', '3');
INSERT INTO `siswa` VALUES ('16024', 'Gilang Putra Ramadhan', '1', '2009-10-18', 'Singkil', 'Gilang', '085580111024', '3');
INSERT INTO `siswa` VALUES ('1603', 'Adewyzar Elzaky Simbolon', '1', '2009-06-17', 'Krajan', 'Adewyzar', '085580111003', '3');
INSERT INTO `siswa` VALUES ('16031', 'Mochammad Lintang Hayya Aulia', '1', '2009-01-15', 'Ngadri', 'Mochammad', '085580111031', '3');
INSERT INTO `siswa` VALUES ('16038', 'Muhammad Ega Saputra', '1', '2009-07-24', 'Jugo', 'Muhammad', '085580111038', '3');
INSERT INTO `siswa` VALUES ('16045', 'Ozilio Sava Kurniawan', '1', '2009-11-18', 'Mentaraman', 'Ozilio', '085580111045', '3');
INSERT INTO `siswa` VALUES ('16052', 'Reihan Ezza Pratama', '1', '2009-01-30', 'Darungan', 'Reihan', '085580111052', '3');
INSERT INTO `siswa` VALUES ('16059', 'Andin Putri Aprlia', '0', '2009-09-23', 'Krajan', 'Andin', '085580111059', '3');
INSERT INTO `siswa` VALUES ('16066', 'Aurellia Dwi Ramdhani', '0', '2009-08-30', 'Kesamben', 'Aurellia', '085580111066', '3');
INSERT INTO `siswa` VALUES ('16073', 'Dyah Putri Turbani Hartanty', '0', '2009-12-20', 'Kalipare', 'Dwi', '085580111073', '3');
INSERT INTO `siswa` VALUES ('16080', 'Ineisya Naraya Prihandini', '0', '2009-01-25', 'Singkil', 'Ineisya', '085580111080', '3');
INSERT INTO `siswa` VALUES ('16087', 'Monica Freezya Queenta', '0', '2009-12-25', 'Ngadri', 'Monica', '085580111087', '3');
INSERT INTO `siswa` VALUES ('16094', 'Noura Aprilia Azzahra', '0', '2009-10-11', 'Jugo', 'Noura', '085580111094', '3');
INSERT INTO `siswa` VALUES ('170100', 'Salsa Billaaruna Putri Gamma', '0', '2010-12-17', 'Darungan', 'Salsa', '085580111100', '2');
INSERT INTO `siswa` VALUES ('170107', 'Zahra Azillea Dira Nur Rahmah', '0', '2010-06-26', 'Krajan', 'Zahra', '085580111107', '2');
INSERT INTO `siswa` VALUES ('17016', 'Evan Fabregas Prima Kurniawan', '1', '2010-01-22', 'Singkil', 'Evan', '085580111016', '2');
INSERT INTO `siswa` VALUES ('1702', 'Achmad Fahrizzi Kurniawan', '1', '2010-09-23', 'Kesamben', 'Achmad', '085580111002', '2');
INSERT INTO `siswa` VALUES ('17023', 'Ghibran Rastra Alfarizy', '1', '2010-11-21', 'Ngadri', 'Ghibran', '085580111023', '2');
INSERT INTO `siswa` VALUES ('17030', 'Mochammad Choirun Nasri', '1', '2010-10-11', 'Jugo', 'Mochammad', '085580111030', '2');
INSERT INTO `siswa` VALUES ('17037', 'Muhammad Devan Rafandra Ameldy Putra H.', '1', '2010-03-18', 'Mentaraman', 'Muhammad', '085580111037', '2');
INSERT INTO `siswa` VALUES ('17044', 'Omar Akbar Arif', '1', '2010-10-12', 'Darungan', 'Omar', '085580111044', '2');
INSERT INTO `siswa` VALUES ('17051', 'Raihan Abdulloh Anas', '1', '2010-12-30', 'Krajan', 'Raihan', '085580111051', '2');
INSERT INTO `siswa` VALUES ('17058', 'Anandra Reizy Ramadhani', '0', '2010-03-20', 'Kesamben', 'Anandra', '085580111058', '2');
INSERT INTO `siswa` VALUES ('17065', 'Aura Titania Ramadhani', '0', '2010-03-26', 'Kalipare', 'Aura', '085580111065', '2');
INSERT INTO `siswa` VALUES ('17072', 'Dwi Fitriana Septianingrum', '0', '2010-12-16', 'Singkil', 'Dwi', '085580111072', '2');
INSERT INTO `siswa` VALUES ('17079', 'Gracia Shallom Octadharma', '0', '2010-06-23', 'Ngadri', 'Gracia', '085580111079', '2');
INSERT INTO `siswa` VALUES ('17086', 'Marsya Winnie Twicilla', '0', '2010-04-14', 'Jugo', 'Marsya', '085580111086', '2');
INSERT INTO `siswa` VALUES ('1709', 'Bima Nararya Makaio Arkadiaz', '1', '2010-01-22', 'Kalipare', 'Bima', '085580111009', '2');
INSERT INTO `siswa` VALUES ('17093', 'Ni Kadek Pradnya Paramita Maheswari', '0', '2010-08-11', 'Mentaraman', 'Ni', '085580111093', '2');
INSERT INTO `siswa` VALUES ('1801', 'Achmad Aryasatya Pamuji', '1', '2011-01-23', 'Kalipare', 'Achmad', '085580111001', '1');
INSERT INTO `siswa` VALUES ('180106', 'Talitha Nasywa Afandi', '0', '2011-01-18', 'Kesamben', 'Talitha', '085580111106', '1');
INSERT INTO `siswa` VALUES ('18015', 'Elgiansyah Putra Wijaya', '1', '2011-01-14', 'Ngadri', 'Elgiansyah', '085580111015', '1');
INSERT INTO `siswa` VALUES ('18022', 'Ghalih Al Syabil Oktaviano', '1', '2011-01-29', 'Jugo', 'Ghalih', '085580111022', '1');
INSERT INTO `siswa` VALUES ('18029', 'Moch. Fitra Azzaqi', '1', '2011-09-15', 'Mentaraman', 'Moch.', '085580111029', '1');
INSERT INTO `siswa` VALUES ('18036', 'Muhammad Caesar Fahrezy', '1', '2011-08-16', 'Darungan', 'Muhammad', '085580111036', '1');
INSERT INTO `siswa` VALUES ('18043', 'Naufal Mahardhika Ferdian Putra', '1', '2011-12-24', 'Krajan', 'Naufal', '085580111043', '1');
INSERT INTO `siswa` VALUES ('18050', 'Rafka Putra Rajata', '1', '2011-11-22', 'Kesamben', 'Rafka', '085580111050', '1');
INSERT INTO `siswa` VALUES ('18057', 'Alisha Putri Sasi Kirana', '0', '2011-09-29', 'Kalipare', 'Alisha', '085580111057', '1');
INSERT INTO `siswa` VALUES ('18064', 'Aulia Choirun Nisa Lovieyana', '0', '2011-06-28', 'Singkil', 'Aulia', '085580111064', '1');
INSERT INTO `siswa` VALUES ('18071', 'Dini Almira Putri Aisyah', '0', '2011-08-28', 'Ngadri', 'Dini', '085580111071', '1');
INSERT INTO `siswa` VALUES ('18078', 'Gita Oktavia Anggraini', '0', '2011-10-29', 'Jugo', 'Gita', '085580111078', '1');
INSERT INTO `siswa` VALUES ('1808', 'Alif Abhista Putra', '1', '2011-10-28', 'Singkil', 'Alif', '085580111008', '1');
INSERT INTO `siswa` VALUES ('18085', 'Khasyifatul Fuadiah', '0', '2011-08-30', 'Mentaraman', 'Khasyifatul', '085580111085', '1');
INSERT INTO `siswa` VALUES ('18092', 'Neyra Zeta Vidi Amanda', '0', '2011-07-28', 'Darungan', 'Neyra', '085580111092', '1');
INSERT INTO `siswa` VALUES ('18099', 'Renanti Adelina Novihani', '0', '2011-01-11', 'Krajan', 'Renanti', '085580111099', '1');

-- ----------------------------
-- Table structure for user
-- ----------------------------
DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `id` varchar(10) NOT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(32) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `level` tinyint(4) DEFAULT NULL,
  `status` tinyint(4) DEFAULT NULL,
  `foto` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of user
-- ----------------------------
INSERT INTO `user` VALUES ('US0001', 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin@app.com', '1', '1', null);
INSERT INTO `user` VALUES ('US0002', 'astojim', '4e8ec7422e234f969dcc5307a96003c3', 'astojim@app.com', '2', '0', null);
INSERT INTO `user` VALUES ('US0003', 'OnyxzeD Hackazer', '0f8b882765143b00b9c1ea0d3071a88c', 'onyxzed@app.com', '1', '1', 'onyxzed-skull-user.png');
