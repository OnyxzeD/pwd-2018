/*
Navicat MySQL Data Transfer

Source Server         : Cyberdyne
Source Server Version : 100119
Source Host           : localhost:3306
Source Database       : crud

Target Server Type    : MYSQL
Target Server Version : 100119
File Encoding         : 65001

Date: 2018-07-18 16:06:15
*/

SET FOREIGN_KEY_CHECKS=0;

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
INSERT INTO `guru` VALUES ('123', 'Jiraiya', '1', 'Localhost', 'S.Pd', '2', 'user.jpg', '2', 'Hidup ini adalah sebuah kegiatan yang gratis (seharusnya) ....');
INSERT INTO `guru` VALUES ('124', 'b', null, null, 'S.Pd', null, 'user.jpg', '2', null);
INSERT INTO `guru` VALUES ('125', 'c', null, null, 'S.Pd', null, 'user.jpg', '2', null);
INSERT INTO `guru` VALUES ('126', 'd', null, null, 'S.Pd', null, 'user.jpg', '2', null);
INSERT INTO `guru` VALUES ('197201242000031004', 'Sujiwo Tedjo', '1', 'Masdasd', 'Ph. D', '10', 'user.jpg', '1', null);

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
INSERT INTO `siswa` VALUES ('120701', 'Daniel Budi', '1', '2005-02-01', 'Batu', 'Susanto', '081339087689', '7');
INSERT INTO `siswa` VALUES ('120702', 'Kiki Adela', '0', '2005-09-10', 'Malang', 'Sutrisno', '082339087678', '7');
INSERT INTO `siswa` VALUES ('120703', 'Erna Putriana', '0', '2005-08-11', 'Malang', 'Sudrajat', '081339087690', '7');
INSERT INTO `siswa` VALUES ('120704', 'Ayu Fitriani', '0', '2005-01-21', 'Malang', 'Prajudi', '081224908765', '7');
INSERT INTO `siswa` VALUES ('120705', 'Dewi Puspita', '0', '2005-04-25', 'Malang', 'Hariyono', '081332456098', '7');
INSERT INTO `siswa` VALUES ('120706', 'Arini Dina Yasmin', '0', '2005-08-09', 'Malang', 'Sudarsono', '082890765349', '7');
INSERT INTO `siswa` VALUES ('120707', 'Ami Rahelia', '0', '2005-04-21', 'Malang', 'Agus', '08133130864', '7');
INSERT INTO `siswa` VALUES ('120708', 'Priska Dwi Cahyani', '0', '2005-06-24', 'Kesamben', 'Pratik', '085546778900', '7');
INSERT INTO `siswa` VALUES ('12345', 'Conan', '1', '2018-07-17', 'Tokyo', 'Yuusaku', '02991293', '2');
INSERT INTO `siswa` VALUES ('130601', 'Fitri Angelya', '0', '2006-01-02', 'Malang', 'Sodiq', '081331390874', '6');
INSERT INTO `siswa` VALUES ('130602', 'Raka Defantara', '1', '2006-10-01', 'Blitar', 'Muslimin', '081334908764', '6');
INSERT INTO `siswa` VALUES ('130603', 'Dicky Aditya', '1', '2006-02-19', 'Malang', 'Prayit', '082345908765', '6');
INSERT INTO `siswa` VALUES ('130604', 'Ilham Pratama', '1', '2006-09-10', 'Malang', 'Sugiyono', '081338097657', '6');
INSERT INTO `siswa` VALUES ('130605', 'Intan Sari Dewi', '0', '2006-10-02', 'Malang', 'Joko', '082908765879', '6');
INSERT INTO `siswa` VALUES ('130606', 'Gibran Pratama', '1', '2006-12-01', 'Malang', 'Joni', '081223889076', '6');
INSERT INTO `siswa` VALUES ('130607', 'Aditya Pratama', '1', '2006-07-02', 'Malang', 'Agus', '082876589762', '6');
INSERT INTO `siswa` VALUES ('140501', 'Adi Pratama', '1', '2007-03-21', 'Malang', 'Danu', '082456097854', '5');
INSERT INTO `siswa` VALUES ('140502', 'Adi Prakoso', '1', '2007-02-09', 'Malang', 'Nanda', '081334590872', '5');
INSERT INTO `siswa` VALUES ('140503', 'Vika Anatalia', '0', '2007-03-29', 'Blitar', 'Hadi', '082456098324', '5');
INSERT INTO `siswa` VALUES ('140504', 'Chintyah Mega', '0', '2007-02-21', 'Malang', 'Toni', '081339087643', '5');
INSERT INTO `siswa` VALUES ('140505', 'Cindy Greysilia', '0', '2007-05-19', 'Malang', 'Bimo', '082349087652', '5');
INSERT INTO `siswa` VALUES ('140506', 'Jihan Febriani', '0', '2007-12-10', 'Malang', 'Galih', '081333087652', '5');
INSERT INTO `siswa` VALUES ('140507', 'Ervan Cahya Nugraha', '1', '2007-01-01', 'Malang', 'Eko', '082356011', '5');
INSERT INTO `siswa` VALUES ('150401', 'Rahmat Ardianto', '1', '2008-08-01', 'Malang', 'Johan', '081331390874', '4');
INSERT INTO `siswa` VALUES ('150402', 'Rahmat Fadhli', '1', '2008-09-20', 'Malang', 'Supri', '082349086321', '4');
INSERT INTO `siswa` VALUES ('150403', 'Henry Prasetya', '1', '2008-10-17', 'Malang', 'Sopraon', '087546098128', '4');
INSERT INTO `siswa` VALUES ('150404', 'Jati Sudrajad', '1', '2008-05-12', 'Malang', 'Joko', '081331398064', '4');
INSERT INTO `siswa` VALUES ('150405', 'Faidatul Chasanah', '1', '2008-01-09', 'Malang', 'Agus', '082397092349', '4');
INSERT INTO `siswa` VALUES ('150406', 'Trisna Ramadhanti', '0', '2008-12-10', 'Kediri', 'Dadang', '083971492084', '4');
INSERT INTO `siswa` VALUES ('150407', 'Anindita Rahelina', '0', '2008-11-09', 'Malang', 'Dedi', '081334906875', '4');
INSERT INTO `siswa` VALUES ('160301', 'Ima Setyawati', '0', '2009-08-15', 'Malang', 'Irfan', '089786542905', '3');
INSERT INTO `siswa` VALUES ('160302', 'Finda Himari', '0', '2009-09-18', 'Nganjuk', 'Joko', '081356789062', '3');
INSERT INTO `siswa` VALUES ('160303', 'Alivia Nikita', '0', '2009-01-30', 'Malang', 'Edi', '087234908765', '3');
INSERT INTO `siswa` VALUES ('160304', 'Ica Novita', '0', '2009-03-28', 'Malang', 'Budi', '081331398065', '3');
INSERT INTO `siswa` VALUES ('160305', 'Annisa Wulandari', '0', '2009-10-09', 'Malan', 'Koko', '082569087643', '3');
INSERT INTO `siswa` VALUES ('160306', 'Fahmi Ade', '1', '2009-06-21', 'Malang', 'Sugeng', '089764539087', '3');
INSERT INTO `siswa` VALUES ('160307', 'Ginanjar Andi', '1', '2009-07-10', 'Batu', 'Adit', '089765011', '3');
INSERT INTO `siswa` VALUES ('170201', 'Nathan Nael', '1', '2010-01-24', 'Malang', 'Bagus', '081334056897', '2');
INSERT INTO `siswa` VALUES ('170202', 'David Jordi', '1', '2010-05-26', 'Malang', 'Sutrisno', '089456078975', '2');
INSERT INTO `siswa` VALUES ('170203', 'Reza Oktavian', '1', '2010-04-10', 'Pontianak', 'Nurdin', '082345687986', '2');
INSERT INTO `siswa` VALUES ('170204', 'Kartika Novita', '0', '2010-03-20', 'Jember', 'Lutfi', '083456908765', '2');
INSERT INTO `siswa` VALUES ('170205', 'Ifan Priyo', '1', '2010-05-20', 'Malang', 'Joko', '081331980675', '2');
INSERT INTO `siswa` VALUES ('170206', 'Adi Prakoso', '1', '2010-04-03', 'Malang', 'Edi', '081333098764', '2');
INSERT INTO `siswa` VALUES ('170207', 'Rofiqul Andi', '1', '2010-11-12', 'Malang', 'Prayit', '082456789081', '2');
INSERT INTO `siswa` VALUES ('180101', 'Yoel Putra Willy', '1', '2011-06-10', 'Malang', 'Wiji', '081331348975', '1');
INSERT INTO `siswa` VALUES ('180102', 'Wihang Santoso', '1', '2011-01-21', 'Kediri', 'Yanto', '081333396078', '1');
INSERT INTO `siswa` VALUES ('180103', 'Arung Dani', '1', '2011-05-01', 'Malang', 'Edi', '087346987234', '1');
INSERT INTO `siswa` VALUES ('180104', 'Wanda Yunita', '0', '0000-00-00', 'Blitar', 'Joko', '081334087695', '1');
INSERT INTO `siswa` VALUES ('180105', 'Jesica Wati', '0', '2011-04-25', 'Malang', 'Sugiyono', '089765324986', '1');
INSERT INTO `siswa` VALUES ('180106', 'Ayub Eko', '1', '2011-05-02', 'Malang', 'Eko', '081334567098', '1');
INSERT INTO `siswa` VALUES ('180107', 'Felicia Andrea', '0', '2011-09-10', 'Malang', 'Dhea', '082457097865', '1');

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
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of user
-- ----------------------------
INSERT INTO `user` VALUES ('US0001', 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin@app.com', '1', '1');
INSERT INTO `user` VALUES ('US0002', 'astojim', '4e8ec7422e234f969dcc5307a96003c3', 'astojim@app.com', '2', '0');
