/*
 Navicat Premium Data Transfer

 Source Server         : mysql
 Source Server Type    : MySQL
 Source Server Version : 100421
 Source Host           : localhost:3306
 Source Schema         : ppdb2

 Target Server Type    : MySQL
 Target Server Version : 100421
 File Encoding         : 65001

 Date: 14/12/2022 18:40:39
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for agama
-- ----------------------------
DROP TABLE IF EXISTS `agama`;
CREATE TABLE `agama`  (
  `no` int NOT NULL AUTO_INCREMENT,
  `agama` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `kode` varchar(15) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  PRIMARY KEY (`no`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 7 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of agama
-- ----------------------------
INSERT INTO `agama` VALUES (1, 'Islam', 'Islam');
INSERT INTO `agama` VALUES (2, 'Kristen Protestan', 'Kristen');
INSERT INTO `agama` VALUES (3, 'Kristen Katolik', 'Katolik');
INSERT INTO `agama` VALUES (4, 'Hindu', 'Hindu');
INSERT INTO `agama` VALUES (5, 'Budha', 'Budha');
INSERT INTO `agama` VALUES (6, 'Konghuchu', 'Konghuchu');

-- ----------------------------
-- Table structure for asalsekolah
-- ----------------------------
DROP TABLE IF EXISTS `asalsekolah`;
CREATE TABLE `asalsekolah`  (
  `no` int NOT NULL AUTO_INCREMENT,
  `nisn` varchar(8) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `sekolah` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `alamat` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `desa` varchar(25) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `status` varchar(10) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  PRIMARY KEY (`no`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 877 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of asalsekolah
-- ----------------------------
INSERT INTO `asalsekolah` VALUES (1, '20523786', 'SMP DIPONEGORO KENCONG', 'JL. KARTINI 19', 'WONOREJO', 'SWASTA');
INSERT INTO `asalsekolah` VALUES (2, '20523929', 'SMP MUHAMMADIYAH 8 CAKRU', 'JL. K.H. HASYIM NO. 1', 'CAKRU', 'SWASTA');
INSERT INTO `asalsekolah` VALUES (3, '20523867', 'SMP NEGERI 1 KENCONG', 'JL. KRAKATAU 78', 'KENCONG', 'NEGERI');
INSERT INTO `asalsekolah` VALUES (4, '20523901', 'SMP NEGERI 2 KENCONG', 'JL. JATISARI', 'WONOREJO', 'NEGERI');
INSERT INTO `asalsekolah` VALUES (5, '20523940', 'SMP TRUNOJOYO CAKRU', 'JLN. PANTAI PASEBAN', 'CAKRU', 'SWASTA');
INSERT INTO `asalsekolah` VALUES (6, '20581501', 'MTS NEGERI KENCONG', 'JL. PANJAITAN NO.02', 'WONOREJO', 'NEGERI');
INSERT INTO `asalsekolah` VALUES (7, '20581502', 'MTS AL MAARIF WONOREJO', '-', 'WONOREJO', 'SWASTA');
INSERT INTO `asalsekolah` VALUES (8, '20581503', 'MTS AR ROHMAN KEDUNGLANGKAP', 'KEDUNGLANGKAP RT 03 RW 10', 'KRATON', 'SWASTA');
INSERT INTO `asalsekolah` VALUES (9, '60727477', 'MTS AS SUNNIYYAH KENCONG', 'JL. KH. JAUHARI ZAWAWI NOMOR 1-3', 'KENCONG', 'SWASTA');
INSERT INTO `asalsekolah` VALUES (10, '20581504', 'MTS AL MAARIF KENCONG', 'JLN. KH. AGUS SALIM 15-17', 'KENCONG', 'SWASTA');
INSERT INTO `asalsekolah` VALUES (11, '20581505', 'MTS SA DARUL QOROR CAKRU', 'DUSUN GONDANGREJO', 'CAKRU', 'SWASTA');
INSERT INTO `asalsekolah` VALUES (12, '20523764', 'SMP ISLAM MAYANGAN', '-', 'MAYANGAN', 'SWASTA');
INSERT INTO `asalsekolah` VALUES (13, '20523925', 'SMP MINQU GUMUKMAS', 'JL MAYANGAN 3', 'GUMUKMAS', 'SWASTA');
INSERT INTO `asalsekolah` VALUES (14, '20523855', 'SMP NEGERI 2 GUMUKMAS', 'JL. MAHAKAM NO. 20', 'TEMBOKREJO', 'NEGERI');
INSERT INTO `asalsekolah` VALUES (15, '20523966', 'SMP NEGERI 1 GUMUKMAS', 'JL. MAYANGAN NO. 02', 'GUMUKMAS', 'NEGERI');
INSERT INTO `asalsekolah` VALUES (16, '69787468', 'SMP PLUS BUSTANUL MAARIF GUMUKMAS', 'JLN. PANJAITAN 56', 'GUMUKMAS', 'SWASTA');
INSERT INTO `asalsekolah` VALUES (17, '20552008', 'SMP SUNAN KALIJAGA GUMUKMAS', 'JL. MERAK NO 4 KREBET', 'GUMUKMAS', 'SWASTA');
INSERT INTO `asalsekolah` VALUES (18, '69882335', 'SMP AL IKHWANIYAH KARANGREJO', 'JL KYAI IKHWANUDIN NO 01', 'KARANGREJO', 'SWASTA');
INSERT INTO `asalsekolah` VALUES (19, '20523762', 'SMP AN-NISA GUMUKMAS', '-', 'KEPANJEN', 'SWASTA');
INSERT INTO `asalsekolah` VALUES (20, '20523776', 'SMP ISLAM GUMUKMAS', 'JL. SULTAN AGUNG NO. 16', 'PURWOASRI', 'SWASTA');
INSERT INTO `asalsekolah` VALUES (21, '20581468', 'MTS AL - MUJAHIDI TEMBOKREJO', 'JL.GAJAH MADA NO.43', 'TEMBOKREJO', 'SWASTA');
INSERT INTO `asalsekolah` VALUES (22, '20581474', 'MTS AL-QODIRI GUMUKMAS', 'JL.UMBULSARI NO.03 KREBET', 'GUMUKMAS', 'SWASTA');
INSERT INTO `asalsekolah` VALUES (23, '60727473', 'MTS DARUL HUDA BAGOREJO', 'JL SUKARNO HATTA', 'BAGOREJO', 'SWASTA');
INSERT INTO `asalsekolah` VALUES (24, '20581469', 'MTS DARUL ULUM KARANGREJO', 'JL.KH.ABDULLAH HANAFI NO.129', 'KARANGREJO', 'SWASTA');
INSERT INTO `asalsekolah` VALUES (25, '20581471', 'MTS MATHLABUL ULUM AL -FALAH MENAMPU', 'PANGGUL MLATI JL KH RASYAD NO 01', 'KEPANJEN', 'SWASTA');
INSERT INTO `asalsekolah` VALUES (26, '20581473', 'MTS MIFTAHUL ULUM KEPANJEN', 'JL. RAYA PANGGUL MLATI NO. 9', 'KEPANJEN', 'SWASTA');
INSERT INTO `asalsekolah` VALUES (27, '20581472', 'MTS SA MIFTAHUL HUDA SUMBERSARI', 'JLN.MIFTADA NO.35 SUMBERSARI', 'MAYANGAN', 'SWASTA');
INSERT INTO `asalsekolah` VALUES (28, '20581470', 'MTS SUNAN AMPEL MENAMPU', 'JL.RAYA PUGER NO.47', 'MENAMPU', 'SWASTA');
INSERT INTO `asalsekolah` VALUES (29, '60728768', 'MTS AL HAROMAIN PUGER', 'JL. KH. ANWAR HAROMAIN NO. 18', 'PUGER', 'SWASTA');
INSERT INTO `asalsekolah` VALUES (30, '20581544', 'MTS AL KHOIRIYAH PUGER', 'JL. AHMAD YANI NO. 82', 'PUGER KULON', 'SWASTA');
INSERT INTO `asalsekolah` VALUES (31, '20581547', 'MTS AL MUBAROK BAGON', 'JL.BAGON NO.50 DUSUN SULING', 'BAGON', 'SWASTA');
INSERT INTO `asalsekolah` VALUES (32, '20581548', 'MTS BUSTANUL ULUM PUGER', 'JL. MOCH. SERUJI NO. 16', 'PUGER', 'SWASTA');
INSERT INTO `asalsekolah` VALUES (33, '20581545', 'MTS HAJI ILYAS MOJOSARI', 'JL. KH. HAROMAIN NO 677 DUSUN GADUNGAN', 'MOJOSARI', 'SWASTA');
INSERT INTO `asalsekolah` VALUES (34, '20581543', 'MTS HASYIM ASYARI GRENDEN', 'JALAN RAYA PUGER NO. 16', 'GRENDEN', 'SWASTA');
INSERT INTO `asalsekolah` VALUES (35, '20581546', 'MTS IBNU KHOLDUN KALIMALANG', 'JI.PANTAI SELATAN', 'KALIMALANG', 'SWASTA');
INSERT INTO `asalsekolah` VALUES (36, '20581549', 'MTS IRSYADUN NASYIIN KASIYAN', 'JALAN BAGON NO. 5', 'KASIYAN TIMUR', 'SWASTA');
INSERT INTO `asalsekolah` VALUES (37, '20581542', 'MTS RADEN FATAH PUGER', 'JL. WULUHAN NO. 114', 'PUGER WETAN', 'SWASTA');
INSERT INTO `asalsekolah` VALUES (38, '20581458', 'MTS SA BALUNG', 'JL. PUGER NO. 42', 'PUGER', 'SWASTA');
INSERT INTO `asalsekolah` VALUES (39, '20523941', 'SMP ACHMAD JANI PUGER', 'JL. UNTUNG SUROPATI NO. 116', 'PUGER KULON', 'SWASTA');
INSERT INTO `asalsekolah` VALUES (40, '20523943', 'SMP ISLAM KASIYAN', 'JL. SRIWIJAYA NO.19', 'KASIYAN', 'SWASTA');
INSERT INTO `asalsekolah` VALUES (41, '20523942', 'SMP KARYA BHAKTI KASIYAN', 'JL.KENCONG NO.117', 'KASIYAN TIMUR', 'SWASTA');
INSERT INTO `asalsekolah` VALUES (42, '20523873', 'SMP NEGERI 1 PUGER', 'JL. ACHMAD YANI NO.36', 'PUGER KULON', 'NEGERI');
INSERT INTO `asalsekolah` VALUES (43, '20523861', 'SMP NEGERI 2 PUGER', 'JL. KENCONG NO. 63', 'KASIYAN TIMUR', 'NEGERI');
INSERT INTO `asalsekolah` VALUES (44, '20523915', 'SMP NURUL HUDA WONOSARI', 'JL. KASIYAN NO. 45', 'WONOSARI', 'SWASTA');
INSERT INTO `asalsekolah` VALUES (45, '20523960', 'SMP PLUS BUSTANUL ULUM', 'JL. KH. ABDULLAH YAQIN 1-5', 'MLOKOREJO', 'SWASTA');
INSERT INTO `asalsekolah` VALUES (46, '20549713', 'SMP PLUS SUNAN GIRI MOJOMULYO', 'JL PASAR MANYUK KRAJAN I', 'MOJOMULYO', 'SWASTA');
INSERT INTO `asalsekolah` VALUES (47, '20523952', 'SMP SULTAN AGUNG KASIYAN', 'JL. MUH.SERUJI NO. 16', 'KASIYAN TIMUR', 'SWASTA');
INSERT INTO `asalsekolah` VALUES (48, '69877201', 'SMP NEGERI MOJOMULYO PUGER', 'JL. PANTAI GETEM', 'MOJOMULYO', 'NEGERI');
INSERT INTO `asalsekolah` VALUES (49, '20523939', 'SMP PGRI KASIYAN', 'JL. KENCONG 63', 'KASIYAN TIMUR', 'SWASTA');
INSERT INTO `asalsekolah` VALUES (50, '20564465', 'SMP ASY-SHIHABIYAH MUNDUREJO', 'JL.KH. SIHABUDDIN NO. 01', 'MUNDUREJO', 'SWASTA');
INSERT INTO `asalsekolah` VALUES (51, '20523853', 'SMP NEGERI 1 UMBULSARI', 'JL.PB.SUDIRMAN', 'GUNUNGSARI', 'NEGERI');
INSERT INTO `asalsekolah` VALUES (52, '20523898', 'SMP NEGERI 2 UMBULSARI', 'JL. H. SUNJOTO SUDJIONO NO.04', 'PALERAN', 'NEGERI');
INSERT INTO `asalsekolah` VALUES (53, '20523922', 'SMP PGRI GUNUNGSARI', 'JL. PB. SUDIRMAN 51', 'GUNUNGSARI', 'SWASTA');
INSERT INTO `asalsekolah` VALUES (54, '69757939', 'SMP SWASTA AKBAR GUNUNG SARI', 'JL. PB SUDIRMAN NO 50 GUNUNG SARI', 'GUNUNGSARI', 'SWASTA');
INSERT INTO `asalsekolah` VALUES (55, '20523934', 'SMP MUHAMMADIYAH 12 PALERAN', 'JL. GAMBIRONO NO. 02', 'PALERAN', 'SWASTA');
INSERT INTO `asalsekolah` VALUES (56, '20551734', 'SMP PLUS MAMBAUL ULUM PALERAN', 'JL. KH. SHOBARI', 'PALERAN', 'SWASTA');
INSERT INTO `asalsekolah` VALUES (57, '20581613', 'MTS NEGERI UMBULSARI', 'JL. WR. SUPRATMAN NO. 55', 'UMBULREJO', 'NEGERI');
INSERT INTO `asalsekolah` VALUES (58, '20581615', 'MTS RADEN RAHMAT UMBULSARI', 'JL. BRANTAS NO. 32', 'UMBULSARI', 'SWASTA');
INSERT INTO `asalsekolah` VALUES (59, '20581614', 'MTS WALISONGO PALERAN', 'JL. RAYA I', 'PALERAN', 'SWASTA');
INSERT INTO `asalsekolah` VALUES (60, '20581491', 'MTS AL MAARIF WRINGINAGUNG', 'JL GARUDA 60', 'WRINGINAGUNG', 'SWASTA');
INSERT INTO `asalsekolah` VALUES (61, '20581492', 'MTS AL QODIRI IV JOMBANG', 'JLN. GUNTAR NO. 16', 'JOMBANG', 'SWASTA');
INSERT INTO `asalsekolah` VALUES (62, '20581490', 'MTS MABDAUL MAARIF JOMBANG', 'JL. WAHID HASYIM 35', 'JOMBANG', 'SWASTA');
INSERT INTO `asalsekolah` VALUES (63, '20523742', 'SMP AL MAARIF JOMBANG', 'JL. KI HAJAR DEWANTARA NO. 11', 'JOMBANG', 'SWASTA');
INSERT INTO `asalsekolah` VALUES (64, '20523785', 'SMP DARUTTAQWA JOMBANG', 'JL. KI HAJAR DEWANTARA NO. 140', 'JOMBANG', 'SWASTA');
INSERT INTO `asalsekolah` VALUES (65, '20523787', 'SMP ISLAM PADOMASAN', 'JALAN RAYA PADOMASAN NOMOR 1 A', 'PADOMASAN', 'SWASTA');
INSERT INTO `asalsekolah` VALUES (66, '20549084', 'SMP NEGERI 2 JOMBANG', 'JL. H. AGUS SALIM NO. 7', 'SARIMULYO', 'NEGERI');
INSERT INTO `asalsekolah` VALUES (67, '20523894', 'SMP NEGERI 1 JOMBANG', 'JL. RAYA KENCONG', 'JOMBANG', 'NEGERI');
INSERT INTO `asalsekolah` VALUES (68, '20549653', 'SMP BAITURROHMAH WRINGINAGUNG', 'JL. GONTAR', 'WRINGINAGUNG', 'SWASTA');
INSERT INTO `asalsekolah` VALUES (69, '69892283', 'SMP ISLAM AL HADI JOMBANG', 'JALAN ABUYA HAMKA NO. 52', 'JOMBANG', 'SWASTA');
INSERT INTO `asalsekolah` VALUES (70, '20549080', 'SMP 18 MAARIF IBROHIMI KARANGEMANDING', 'JL. KARANG DUREN NO. 7', 'KARANG SEMANDING', 'SWASTA');
INSERT INTO `asalsekolah` VALUES (71, '20566298', 'SMP 20 MAARIF AS SALAFI BALUNG', 'JL PESANTREN KRAJAN', 'BALUNG KIDUL', 'SWASTA');
INSERT INTO `asalsekolah` VALUES (72, '20523741', 'SMP AL HIDAYAH KARANGDUREN', 'JL. UMBULSARI NO. 5', 'KARANGDUREN', 'SWASTA');
INSERT INTO `asalsekolah` VALUES (73, '20523781', 'SMP BAITUL ARQOM BALUNG', 'JL. KARANGDUREN (JL. BAWEAN) NO. 32', 'BALUNG LOR', 'SWASTA');
INSERT INTO `asalsekolah` VALUES (74, '69733855', 'SMP BUSTANUL ULUM KARANGSEMANDING', 'JL. SHOLEHUDDIN NO. 11', 'KARANGSEMANDING', 'SWASTA');
INSERT INTO `asalsekolah` VALUES (75, '20523899', 'SMP NEGERI 3 BALUNG', 'JL. RAMBIPUJI', 'BALUNG LOR', 'NEGERI');
INSERT INTO `asalsekolah` VALUES (76, '20523854', 'SMP NEGERI 2 BALUNG', 'JALAN SMPN 2 NOMOR 9', 'BALUNG KIDUL', 'NEGERI');
INSERT INTO `asalsekolah` VALUES (77, '20523965', 'SMP PLUS SUNAN GIRI CURAHLELE', 'JL. KH. ABDUL AZIZ NO.78', 'CURAHLELE', 'SWASTA');
INSERT INTO `asalsekolah` VALUES (78, '20523945', 'SMP SATYA DHARMA BALUNG', 'JL. PUGER NO. 20', 'BALUNG LOR', 'SWASTA');
INSERT INTO `asalsekolah` VALUES (79, '20523951', 'SMP NEGERI 1 BALUNG', 'JL. PUGER NO. 92', 'TUTUL', 'NEGERI');
INSERT INTO `asalsekolah` VALUES (80, '69882336', 'SMP ASH SHIDDIQI CURAHLELE', 'JL DUSUN KRAJAN KIDUL', 'CURAHLELE', 'SWASTA');
INSERT INTO `asalsekolah` VALUES (81, '20583909', 'SMP DARUT TAUHID BALUNG', 'JL. REFORMASI NO. 100', 'BALUNG LOR', 'SWASTA');
INSERT INTO `asalsekolah` VALUES (82, '20554317', 'SMP PLUS ABDUL AZIZ CURAHLELE', 'JL. CENDERAWASIH NO. 23', 'CURAHLELE', 'SWASTA');
INSERT INTO `asalsekolah` VALUES (83, '20581454', 'MTS AL AMIN BALUNG', 'JL. MOH. ILYAS, 44', 'BALUNG', 'SWASTA');
INSERT INTO `asalsekolah` VALUES (84, '20581453', 'MTS BAITUL ARQOM BALUNG', 'JL. KARANGDUREN NO. 32', 'BALUNG', 'SWASTA');
INSERT INTO `asalsekolah` VALUES (85, '20581455', 'MTS HIKMATUL HASAN BALUNG', 'JL. H. SYAHID NO. 73', 'BALUNG', 'SWASTA');
INSERT INTO `asalsekolah` VALUES (86, '20581456', 'MTS WAHID HASYIM BALUNG', 'JL. PUGER NO.20', 'BALUNG', 'SWASTA');
INSERT INTO `asalsekolah` VALUES (87, '20581457', 'MTS ZAINUL HASAN BALUNG', 'JL. PERJUANGAN NO 10', 'BALUNG LOR', 'SWASTA');
INSERT INTO `asalsekolah` VALUES (88, '20584037', 'SMP DARMAS YOSOWILANGUN', 'DSN ROWOSUGO', 'YOSOWILANGUN KIDUL', 'SWASTA');
INSERT INTO `asalsekolah` VALUES (89, '20539841', 'SMP DARUSSALAM WOTGALIH', '-', 'WOTGALIH', 'SWASTA');
INSERT INTO `asalsekolah` VALUES (90, '20521484', 'SMP ISLAM YOSOWILANGUN', 'MUKA STADION', 'YOSOWILANGUN LOR', 'SWASTA');
INSERT INTO `asalsekolah` VALUES (91, '20521477', 'SMP KRISTEN YBPK TUNJUNGREJO', 'JL WIRYO SUMARTO NO 5', 'TUNJUNGREJO', 'SWASTA');
INSERT INTO `asalsekolah` VALUES (92, '20547803', 'SMP MAARIF NU RIYADUS SHOLIHIN YOSOWILANGUN', 'JL. PANTAI SELATAN NO. 53', 'WOTGALIH', 'SWASTA');
INSERT INTO `asalsekolah` VALUES (93, '20521469', 'SMP MUHAMMADIYAH 3 YOSOWILANGUN', 'JL MAYJEN SOEKARTIYO NO 50', 'YOSOWILANGUN KIDUL', 'SWASTA');
INSERT INTO `asalsekolah` VALUES (94, '20521411', 'SMP NEGERI 1 YOSOWILANGUN', 'JL RAYA GG MASJID NO 4', 'YOSOWILANGUN LOR', 'NEGERI');
INSERT INTO `asalsekolah` VALUES (95, '20521426', 'SMP NEGERI 2 YOSOWILANGUN', 'JL AKHMAD YANI NO 20', 'MUNDER', 'NEGERI');
INSERT INTO `asalsekolah` VALUES (96, '20548339', 'SMP NEGERI 3 YOSOWILANGUN', '-', 'KALIPEPE', 'NEGERI');
INSERT INTO `asalsekolah` VALUES (97, '20560662', 'SMP NEGERI 4 YOSOWILANGUN SATU ATAP', 'JLN. PANTAI SELATAN 083, DOKTREN NURUL ICHSAN', 'WOTGALIH', 'NEGERI');
INSERT INTO `asalsekolah` VALUES (98, '69788238', 'SMP MAARIF NU AL IKHLAS AL MUHDLOR', 'JL. MAKAM NO. 1', 'DARUNGAN', 'SWASTA');
INSERT INTO `asalsekolah` VALUES (99, '20581430', 'MTS BUSTANUL ULUM YOSOWILANGUN', 'JL. DOKTREN NO 26', 'KRAI', 'SWASTA');
INSERT INTO `asalsekolah` VALUES (100, '69733825', 'MTS SA ULIL ALBAB WOTGALIH', 'RT 05 RW 03 MELEMAN', 'WOTGALIH', 'SWASTA');
INSERT INTO `asalsekolah` VALUES (101, '20581431', 'MTS WAHID HASYIM YOSOWILANGUN', 'JLN. SERSAN NAAM NO 98', 'YOSOWILANGUN', 'SWASTA');

-- ----------------------------
-- Table structure for calon
-- ----------------------------
DROP TABLE IF EXISTS `calon`;
CREATE TABLE `calon`  (
  `no_pendaftaran` int NOT NULL AUTO_INCREMENT,
  `tgl_daftar` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `tgl_bayar` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `tgl_du` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `nama` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `gender` varchar(1) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `tmp_lahir` varchar(25) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `tgl_lahir` varchar(25) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `agama` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `alamat` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `desa` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `kecamatan` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `kota` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `no_hp_siswa` varchar(13) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `no_hp_wali` varchar(13) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `asalsekolah` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `nm_ayah` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `nm_ibu` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `pekerjaan` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `prioritas1` varchar(4) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `prioritas2` varchar(4) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `prioritas3` varchar(4) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `uang_pendaftaran` int NOT NULL,
  `petugas` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  PRIMARY KEY (`no_pendaftaran`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 3 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of calon
-- ----------------------------
INSERT INTO `calon` VALUES (1, '2022-11-26', '2022-11-26', '2022-11-17', 'Yoga', 'L', 'Jember', '2000-02-02', 'Islam', 'sdfjsdlfksdf', 'sdfsdf', 'sdfsdf', 'sdfsdfsdf', '08128312', '08213123123', 'SMP 1 Kencong', 'A', 'B', 'C', 'RPL', 'TBSM', 'BDP', 50000, 'MUHAMMAD AFIF');
INSERT INTO `calon` VALUES (2, '2022-11-30', '2022-12-14', '', 'M. Afif', 'L', 'Jember', '2004-06-01', 'Islam', 'Jl. Ppppp', 'ac', 'sdfsdf', 'sdfsdf', '07343434', '08234637434', 'SMPN 5 Kencong', 'Abc', 'Def', 'Ghi', 'RPL', 'MM', 'TBSM', 50000, 'MUHAMMAD AFIF');

-- ----------------------------
-- Table structure for desa
-- ----------------------------
DROP TABLE IF EXISTS `desa`;
CREATE TABLE `desa`  (
  `no` int NOT NULL AUTO_INCREMENT,
  `desa` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  PRIMARY KEY (`no`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 602 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of desa
-- ----------------------------
INSERT INTO `desa` VALUES (4, 'Alasrejo');
INSERT INTO `desa` VALUES (3, 'Alasbulu');
INSERT INTO `desa` VALUES (2, 'Alas Malang');
INSERT INTO `desa` VALUES (1, 'Ajung');
INSERT INTO `desa` VALUES (5, 'Aliyan');
INSERT INTO `desa` VALUES (6, 'Alun Alun');
INSERT INTO `desa` VALUES (7, 'Ambulu');
INSERT INTO `desa` VALUES (8, 'Ampel');
INSERT INTO `desa` VALUES (9, 'Andongrejo');
INSERT INTO `desa` VALUES (10, 'Andongsari');
INSERT INTO `desa` VALUES (11, 'Antirogo');
INSERT INTO `desa` VALUES (12, 'Argosari');
INSERT INTO `desa` VALUES (13, 'Arjasa');
INSERT INTO `desa` VALUES (14, 'Babakan');
INSERT INTO `desa` VALUES (15, 'Badean');
INSERT INTO `desa` VALUES (16, 'Bades');
INSERT INTO `desa` VALUES (17, 'Bago');
INSERT INTO `desa` VALUES (18, 'Bagon');
INSERT INTO `desa` VALUES (19, 'Bagorejo');
INSERT INTO `desa` VALUES (20, 'Bajulmati');
INSERT INTO `desa` VALUES (21, 'Bakungan');
INSERT INTO `desa` VALUES (22, 'Balak');
INSERT INTO `desa` VALUES (23, 'Balet Baru');
INSERT INTO `desa` VALUES (24, 'Balung Kidul');
INSERT INTO `desa` VALUES (25, 'Balung Kulon');
INSERT INTO `desa` VALUES (26, 'Balung Lor');
INSERT INTO `desa` VALUES (27, 'Bandaran');
INSERT INTO `desa` VALUES (28, 'Bangorejo');
INSERT INTO `desa` VALUES (29, 'Bangsalsari');
INSERT INTO `desa` VALUES (30, 'Bangsring');
INSERT INTO `desa` VALUES (31, 'Bangunsari');
INSERT INTO `desa` VALUES (32, 'Banjar');
INSERT INTO `desa` VALUES (33, 'Banjar Sengon');
INSERT INTO `desa` VALUES (34, 'Banjarsari');
INSERT INTO `desa` VALUES (35, 'Banjarwaru');
INSERT INTO `desa` VALUES (36, 'Banyuanyar');
INSERT INTO `desa` VALUES (37, 'Banyuputih Kidul');
INSERT INTO `desa` VALUES (38, 'Banyuputih Lor');
INSERT INTO `desa` VALUES (39, 'Banyuwangi');
INSERT INTO `desa` VALUES (40, 'Barat');
INSERT INTO `desa` VALUES (41, 'Baratan');
INSERT INTO `desa` VALUES (42, 'Bareng');
INSERT INTO `desa` VALUES (43, 'Barurejo');
INSERT INTO `desa` VALUES (44, 'Bayu');
INSERT INTO `desa` VALUES (45, 'Bedadung');
INSERT INTO `desa` VALUES (46, 'Bedayu');
INSERT INTO `desa` VALUES (47, 'Bedayutalang');
INSERT INTO `desa` VALUES (48, 'Bedewang');
INSERT INTO `desa` VALUES (49, 'Bence');
INSERT INTO `desa` VALUES (50, 'Benculuk');
INSERT INTO `desa` VALUES (51, 'Benelan Kidul');
INSERT INTO `desa` VALUES (52, 'Benelan Lor');
INSERT INTO `desa` VALUES (53, 'Bengkak');
INSERT INTO `desa` VALUES (54, 'Besuk');
INSERT INTO `desa` VALUES (55, 'Bimorejo');
INSERT INTO `desa` VALUES (56, 'Bintoro');
INSERT INTO `desa` VALUES (57, 'Biting');
INSERT INTO `desa` VALUES (58, 'Blambangan');
INSERT INTO `desa` VALUES (59, 'Blimbing Sari');
INSERT INTO `desa` VALUES (60, 'Blukon');
INSERT INTO `desa` VALUES (61, 'Bodang');
INSERT INTO `desa` VALUES (62, 'Bomo');
INSERT INTO `desa` VALUES (63, 'Bondoyudo');
INSERT INTO `desa` VALUES (64, 'Boreng');
INSERT INTO `desa` VALUES (65, 'Boyolangu');
INSERT INTO `desa` VALUES (66, 'Bubuk');
INSERT INTO `desa` VALUES (67, 'Buluagung');
INSERT INTO `desa` VALUES (68, 'Bulurejo');
INSERT INTO `desa` VALUES (69, 'Bulusan');
INSERT INTO `desa` VALUES (70, 'Bulusari');
INSERT INTO `desa` VALUES (71, 'Bumiharjo');
INSERT INTO `desa` VALUES (72, 'Bunder');
INSERT INTO `desa` VALUES (73, 'Burno');
INSERT INTO `desa` VALUES (74, 'Buwek');
INSERT INTO `desa` VALUES (75, 'Cakru');
INSERT INTO `desa` VALUES (76, 'Candijati');
INSERT INTO `desa` VALUES (77, 'Candipuro');
INSERT INTO `desa` VALUES (78, 'Cangkring');
INSERT INTO `desa` VALUES (79, 'Cantuk');
INSERT INTO `desa` VALUES (80, 'Citrodiwangsan');
INSERT INTO `desa` VALUES (81, 'Cluring');
INSERT INTO `desa` VALUES (82, 'Condro');
INSERT INTO `desa` VALUES (83, 'Cumedak');
INSERT INTO `desa` VALUES (84, 'Curah Kalong');
INSERT INTO `desa` VALUES (85, 'Curahlele');
INSERT INTO `desa` VALUES (86, 'Curahmalang');
INSERT INTO `desa` VALUES (87, 'Curahnongko');
INSERT INTO `desa` VALUES (88, 'Curahpetung');
INSERT INTO `desa` VALUES (89, 'Curahtakir');
INSERT INTO `desa` VALUES (90, 'Dadapan');
INSERT INTO `desa` VALUES (91, 'Darsono');
INSERT INTO `desa` VALUES (92, 'Darungan');
INSERT INTO `desa` VALUES (93, 'Dasri');
INSERT INTO `desa` VALUES (94, 'Dawuhan Lor');
INSERT INTO `desa` VALUES (95, 'Dawuhan Mangli');
INSERT INTO `desa` VALUES (96, 'Dawuhan Wetan');
INSERT INTO `desa` VALUES (97, 'Denok');
INSERT INTO `desa` VALUES (98, 'Ditotrunan');
INSERT INTO `desa` VALUES (99, 'Dorogowok');
INSERT INTO `desa` VALUES (100, 'Dukuh Dempok');
INSERT INTO `desa` VALUES (101, 'Dukuh Mencek');
INSERT INTO `desa` VALUES (102, 'Duren');
INSERT INTO `desa` VALUES (103, 'Gadingrejo');
INSERT INTO `desa` VALUES (104, 'Gambiran');
INSERT INTO `desa` VALUES (105, 'Gambirono');
INSERT INTO `desa` VALUES (106, 'Gambor');
INSERT INTO `desa` VALUES (107, 'Garahan');
INSERT INTO `desa` VALUES (108, 'Gebang');
INSERT INTO `desa` VALUES (109, 'Gedangmas');
INSERT INTO `desa` VALUES (110, 'Gelang');
INSERT INTO `desa` VALUES (111, 'Gendoh');
INSERT INTO `desa` VALUES (112, 'Genteng Kulon');
INSERT INTO `desa` VALUES (113, 'Genteng Wetan');
INSERT INTO `desa` VALUES (114, 'Gesang');
INSERT INTO `desa` VALUES (115, 'Gintangan');
INSERT INTO `desa` VALUES (116, 'Giri');
INSERT INTO `desa` VALUES (117, 'Gitik');
INSERT INTO `desa` VALUES (118, 'Gladag');
INSERT INTO `desa` VALUES (119, 'Glagah');
INSERT INTO `desa` VALUES (120, 'Glagahagung');
INSERT INTO `desa` VALUES (121, 'Glagahwero');
INSERT INTO `desa` VALUES (122, 'Glundengan');
INSERT INTO `desa` VALUES (123, 'Gombengsari');
INSERT INTO `desa` VALUES (124, 'Gombolirang');
INSERT INTO `desa` VALUES (125, 'Gondoruso');
INSERT INTO `desa` VALUES (126, 'Grajagan');
INSERT INTO `desa` VALUES (127, 'Grati');
INSERT INTO `desa` VALUES (128, 'Grenden');
INSERT INTO `desa` VALUES (129, 'Grobogan');
INSERT INTO `desa` VALUES (130, 'Grogol');
INSERT INTO `desa` VALUES (131, 'Gucialit');
INSERT INTO `desa` VALUES (132, 'Gugut');
INSERT INTO `desa` VALUES (133, 'Gumelar');
INSERT INTO `desa` VALUES (134, 'Gumirih');
INSERT INTO `desa` VALUES (135, 'Gumuk');
INSERT INTO `desa` VALUES (136, 'Gumukmas');
INSERT INTO `desa` VALUES (137, 'Gumuksari');
INSERT INTO `desa` VALUES (138, 'Gunung Malang');
INSERT INTO `desa` VALUES (139, 'Gunungsari');
INSERT INTO `desa` VALUES (140, 'Harjomolyo');
INSERT INTO `desa` VALUES (141, 'Jajag');
INSERT INTO `desa` VALUES (142, 'Jambe Arum');
INSERT INTO `desa` VALUES (143, 'Jambearum');
INSERT INTO `desa` VALUES (144, 'Jambekumbu');
INSERT INTO `desa` VALUES (145, 'Jambesari');
INSERT INTO `desa` VALUES (146, 'Jambewangi');
INSERT INTO `desa` VALUES (147, 'Jamintoro');
INSERT INTO `desa` VALUES (148, 'Jarit');
INSERT INTO `desa` VALUES (149, 'Jatian');
INSERT INTO `desa` VALUES (150, 'Jatigono');
INSERT INTO `desa` VALUES (151, 'Jatimulyo');
INSERT INTO `desa` VALUES (152, 'Jatirejo');
INSERT INTO `desa` VALUES (153, 'Jatiroto');
INSERT INTO `desa` VALUES (154, 'Jatisari');
INSERT INTO `desa` VALUES (155, 'Jelbuk');
INSERT INTO `desa` VALUES (156, 'Jelun');
INSERT INTO `desa` VALUES (157, 'Jember Kidul');
INSERT INTO `desa` VALUES (158, 'Jember Lor');
INSERT INTO `desa` VALUES (159, 'Jenggawah');
INSERT INTO `desa` VALUES (160, 'Jenggrong');
INSERT INTO `desa` VALUES (161, 'Jeruk');
INSERT INTO `desa` VALUES (162, 'Jogotrunan');
INSERT INTO `desa` VALUES (163, 'Jogoyudan');
INSERT INTO `desa` VALUES (164, 'Jokarto');
INSERT INTO `desa` VALUES (165, 'Jombang');
INSERT INTO `desa` VALUES (166, 'Jubung');
INSERT INTO `desa` VALUES (167, 'Jugosari');
INSERT INTO `desa` VALUES (168, 'Jumerto');
INSERT INTO `desa` VALUES (169, 'Kabat');
INSERT INTO `desa` VALUES (170, 'Kabuaran');
INSERT INTO `desa` VALUES (171, 'Kajarharjo');
INSERT INTO `desa` VALUES (172, 'Kalibaru Kulon');
INSERT INTO `desa` VALUES (173, 'Kalibaru Manis');
INSERT INTO `desa` VALUES (174, 'Kalibaru Wetan');
INSERT INTO `desa` VALUES (175, 'Kalibendo');
INSERT INTO `desa` VALUES (176, 'Kaliboto Kidul');
INSERT INTO `desa` VALUES (177, 'Kaliboto Lor');
INSERT INTO `desa` VALUES (178, 'Kalidilem');
INSERT INTO `desa` VALUES (179, 'Kaliglagah');
INSERT INTO `desa` VALUES (180, 'Kaligondo');
INSERT INTO `desa` VALUES (181, 'Kaligung');
INSERT INTO `desa` VALUES (182, 'Kalipait');
INSERT INTO `desa` VALUES (183, 'Kalipenggung');
INSERT INTO `desa` VALUES (184, 'Kalipepe');
INSERT INTO `desa` VALUES (185, 'Kaliploso');
INSERT INTO `desa` VALUES (186, 'Kalipuro');
INSERT INTO `desa` VALUES (187, 'Kalirejo');
INSERT INTO `desa` VALUES (188, 'Kalisat');
INSERT INTO `desa` VALUES (189, 'Kalisemut');
INSERT INTO `desa` VALUES (190, 'Kaliuling');
INSERT INTO `desa` VALUES (191, 'Kaliwates');
INSERT INTO `desa` VALUES (192, 'Kaliwining');
INSERT INTO `desa` VALUES (193, 'Kaliwungu');
INSERT INTO `desa` VALUES (194, 'Kamal');
INSERT INTO `desa` VALUES (195, 'Kampung Mandar');
INSERT INTO `desa` VALUES (196, 'Kampung Melayu');
INSERT INTO `desa` VALUES (197, 'Kampunganyar');
INSERT INTO `desa` VALUES (198, 'Kandangan');
INSERT INTO `desa` VALUES (199, 'Kandangtepus');
INSERT INTO `desa` VALUES (200, 'Kaotan');
INSERT INTO `desa` VALUES (201, 'Karang Anyar');
INSERT INTO `desa` VALUES (202, 'Karang Bayat');
INSERT INTO `desa` VALUES (203, 'Karang Bendo');
INSERT INTO `desa` VALUES (204, 'Karang Duren');
INSERT INTO `desa` VALUES (205, 'Karang Paiton');
INSERT INTO `desa` VALUES (206, 'Karang Rejo');
INSERT INTO `desa` VALUES (207, 'Karang Semanding');
INSERT INTO `desa` VALUES (208, 'Karanganom');
INSERT INTO `desa` VALUES (209, 'Karangayar');
INSERT INTO `desa` VALUES (210, 'Karangbendo');
INSERT INTO `desa` VALUES (211, 'Karangdoro');
INSERT INTO `desa` VALUES (212, 'Karangharjo');
INSERT INTO `desa` VALUES (213, 'Karangkedawung');
INSERT INTO `desa` VALUES (214, 'Karanglo');
INSERT INTO `desa` VALUES (215, 'Karangmulyo');
INSERT INTO `desa` VALUES (216, 'Karangpring');
INSERT INTO `desa` VALUES (217, 'Karangrejo');
INSERT INTO `desa` VALUES (218, 'Karangsari');
INSERT INTO `desa` VALUES (219, 'Karangsono');
INSERT INTO `desa` VALUES (220, 'Karetan (Keretan)');
INSERT INTO `desa` VALUES (221, 'Kasiyan');
INSERT INTO `desa` VALUES (222, 'Kasiyan Timur');
INSERT INTO `desa` VALUES (223, 'Kawangrejo');
INSERT INTO `desa` VALUES (224, 'Kebalenan');
INSERT INTO `desa` VALUES (225, 'Kebaman');
INSERT INTO `desa` VALUES (226, 'Kebon Agung');
INSERT INTO `desa` VALUES (227, 'Kebonagung');
INSERT INTO `desa` VALUES (228, 'Kebonan');
INSERT INTO `desa` VALUES (229, 'Kebondalem');
INSERT INTO `desa` VALUES (230, 'Kebonrejo');
INSERT INTO `desa` VALUES (231, 'Kebonsari');
INSERT INTO `desa` VALUES (232, 'Kedaleman');
INSERT INTO `desa` VALUES (233, 'Kedawung');
INSERT INTO `desa` VALUES (234, 'Kedayunan');
INSERT INTO `desa` VALUES (235, 'Kedungasri');
INSERT INTO `desa` VALUES (236, 'Kedunggebang');
INSERT INTO `desa` VALUES (237, 'Kedungjajang');
INSERT INTO `desa` VALUES (238, 'Kedungmoro');
INSERT INTO `desa` VALUES (239, 'Kedungrejo');
INSERT INTO `desa` VALUES (240, 'Kedungringin (Kedungpringin)');
INSERT INTO `desa` VALUES (241, 'Kedungwungu');
INSERT INTO `desa` VALUES (242, 'Kelir');
INSERT INTO `desa` VALUES (243, 'Kelungkung');
INSERT INTO `desa` VALUES (244, 'Kembiritan');
INSERT INTO `desa` VALUES (245, 'Kemiren');
INSERT INTO `desa` VALUES (246, 'Kemiri');
INSERT INTO `desa` VALUES (247, 'Kemuning Sari Kidul');
INSERT INTO `desa` VALUES (248, 'Kemuningllor');
INSERT INTO `desa` VALUES (249, 'Kemuningsari Lor');
INSERT INTO `desa` VALUES (250, 'Kencong');
INSERT INTO `desa` VALUES (251, 'Kendalrejo');
INSERT INTO `desa` VALUES (252, 'Kenjo');
INSERT INTO `desa` VALUES (253, 'Kenongo');
INSERT INTO `desa` VALUES (254, 'Kepanjen');
INSERT INTO `desa` VALUES (255, 'Kepatihan');
INSERT INTO `desa` VALUES (256, 'Kepuharjo');
INSERT INTO `desa` VALUES (257, 'Kepundungan');
INSERT INTO `desa` VALUES (258, 'Keranjingan');
INSERT INTO `desa` VALUES (259, 'Kertonegoro');
INSERT INTO `desa` VALUES (260, 'Kertosari');
INSERT INTO `desa` VALUES (261, 'Kertowono');
INSERT INTO `desa` VALUES (262, 'Kesilir');
INSERT INTO `desa` VALUES (263, 'Ketapang');
INSERT INTO `desa` VALUES (264, 'Keting');
INSERT INTO `desa` VALUES (265, 'Klakah');
INSERT INTO `desa` VALUES (266, 'Klampokarum');
INSERT INTO `desa` VALUES (267, 'Klanting');
INSERT INTO `desa` VALUES (268, 'Klatak');
INSERT INTO `desa` VALUES (269, 'Klatakan');
INSERT INTO `desa` VALUES (270, 'Klompangan');
INSERT INTO `desa` VALUES (271, 'Kloposawit');
INSERT INTO `desa` VALUES (272, 'Kluncing');
INSERT INTO `desa` VALUES (273, 'Kradenan');
INSERT INTO `desa` VALUES (274, 'Krai');
INSERT INTO `desa` VALUES (275, 'Kramat Sukoharjo');
INSERT INTO `desa` VALUES (276, 'Krasak');
INSERT INTO `desa` VALUES (277, 'Kraton');
INSERT INTO `desa` VALUES (278, 'Kudus');
INSERT INTO `desa` VALUES (279, 'Kumendung');
INSERT INTO `desa` VALUES (280, 'Kunir Kidul');
INSERT INTO `desa` VALUES (281, 'Kunir Lor');
INSERT INTO `desa` VALUES (282, 'Kutorenon');
INSERT INTO `desa` VALUES (283, 'Labanasem');
INSERT INTO `desa` VALUES (284, 'Labruk Kidul');
INSERT INTO `desa` VALUES (285, 'Labruk Lor');
INSERT INTO `desa` VALUES (286, 'Lampeji');
INSERT INTO `desa` VALUES (287, 'Langkap');
INSERT INTO `desa` VALUES (288, 'Lateng');
INSERT INTO `desa` VALUES (289, 'Ledokombo');
INSERT INTO `desa` VALUES (290, 'Ledoktempuro');
INSERT INTO `desa` VALUES (291, 'Lemahbang Dewo');
INSERT INTO `desa` VALUES (292, 'Lemahbang Kulon');
INSERT INTO `desa` VALUES (293, 'Lembengan');
INSERT INTO `desa` VALUES (294, 'Lempeni');
INSERT INTO `desa` VALUES (295, 'Lengkong');
INSERT INTO `desa` VALUES (296, 'Licin');
INSERT INTO `desa` VALUES (297, 'Lojejer');
INSERT INTO `desa` VALUES (298, 'Lumajang');
INSERT INTO `desa` VALUES (299, 'Macan Putih');
INSERT INTO `desa` VALUES (300, 'Madurejo');
INSERT INTO `desa` VALUES (301, 'Mangaran');
INSERT INTO `desa` VALUES (302, 'Manggisan');
INSERT INTO `desa` VALUES (303, 'Mangir');
INSERT INTO `desa` VALUES (304, 'Mangli');
INSERT INTO `desa` VALUES (305, 'Mangunsari');
INSERT INTO `desa` VALUES (306, 'Margomulyo');
INSERT INTO `desa` VALUES (307, 'Mayang');
INSERT INTO `desa` VALUES (308, 'Mayangan');
INSERT INTO `desa` VALUES (309, 'Menampu');
INSERT INTO `desa` VALUES (310, 'Meninjo');
INSERT INTO `desa` VALUES (311, 'Merakan');
INSERT INTO `desa` VALUES (312, 'Mlawang');
INSERT INTO `desa` VALUES (313, 'Mlokorejo');
INSERT INTO `desa` VALUES (314, 'Mojo');
INSERT INTO `desa` VALUES (315, 'Mojogeni');
INSERT INTO `desa` VALUES (316, 'Mojomulyo');
INSERT INTO `desa` VALUES (317, 'Mojopanggung');
INSERT INTO `desa` VALUES (318, 'Mojosari');
INSERT INTO `desa` VALUES (319, 'Mrawan');
INSERT INTO `desa` VALUES (320, 'Mulyorejo');
INSERT INTO `desa` VALUES (321, 'Mumbulsari');
INSERT INTO `desa` VALUES (322, 'Munder');
INSERT INTO `desa` VALUES (323, 'Mundurejo');
INSERT INTO `desa` VALUES (324, 'Ngampelrejo');
INSERT INTO `desa` VALUES (325, 'Nguter');
INSERT INTO `desa` VALUES (326, 'Nogosari');
INSERT INTO `desa` VALUES (327, 'Olehsari');
INSERT INTO `desa` VALUES (328, 'Oro Oro Ombo');
INSERT INTO `desa` VALUES (329, 'Pace');
INSERT INTO `desa` VALUES (330, 'Padang');
INSERT INTO `desa` VALUES (331, 'Padomasan');
INSERT INTO `desa` VALUES (332, 'Pagowan');
INSERT INTO `desa` VALUES (333, 'Pakel');
INSERT INTO `desa` VALUES (334, 'Pakis');
INSERT INTO `desa` VALUES (335, 'Pakistaji');
INSERT INTO `desa` VALUES (336, 'Pakusari');
INSERT INTO `desa` VALUES (337, 'Paleran');
INSERT INTO `desa` VALUES (338, 'Pancakarya');
INSERT INTO `desa` VALUES (339, 'Pandanarum');
INSERT INTO `desa` VALUES (340, 'Pandansari');
INSERT INTO `desa` VALUES (341, 'Pandanwangi');
INSERT INTO `desa` VALUES (342, 'Panderejo');
INSERT INTO `desa` VALUES (343, 'Panduman');
INSERT INTO `desa` VALUES (344, 'Panti');
INSERT INTO `desa` VALUES (345, 'Papringan');
INSERT INTO `desa` VALUES (346, 'Parangharjo');
INSERT INTO `desa` VALUES (347, 'Parijatah Kulon');
INSERT INTO `desa` VALUES (348, 'Parijatah Wetan');
INSERT INTO `desa` VALUES (349, 'Paseban');
INSERT INTO `desa` VALUES (350, 'Pasirian');
INSERT INTO `desa` VALUES (351, 'Paspan');
INSERT INTO `desa` VALUES (352, 'Pasrujambe (Pasujambe)');
INSERT INTO `desa` VALUES (353, 'Patemon');
INSERT INTO `desa` VALUES (354, 'Patempuran');
INSERT INTO `desa` VALUES (355, 'Patoman');
INSERT INTO `desa` VALUES (356, 'Patrang');
INSERT INTO `desa` VALUES (357, 'Pecoro');
INSERT INTO `desa` VALUES (358, 'Pejarakan');
INSERT INTO `desa` VALUES (359, 'Penanggal');
INSERT INTO `desa` VALUES (360, 'Penataban');
INSERT INTO `desa` VALUES (361, 'Penawungan');
INSERT INTO `desa` VALUES (362, 'Pendarungan');
INSERT INTO `desa` VALUES (363, 'Penganjuran');
INSERT INTO `desa` VALUES (364, 'Pengantigan');
INSERT INTO `desa` VALUES (365, 'Pesanggaran');
INSERT INTO `desa` VALUES (366, 'Pesucen');
INSERT INTO `desa` VALUES (367, 'Petahunan');
INSERT INTO `desa` VALUES (368, 'Petung');
INSERT INTO `desa` VALUES (369, 'Plalangan');
INSERT INTO `desa` VALUES (370, 'Plampangrejo');
INSERT INTO `desa` VALUES (371, 'Plereyan');
INSERT INTO `desa` VALUES (372, 'Pocangan');
INSERT INTO `desa` VALUES (373, 'Pondok Dalem');
INSERT INTO `desa` VALUES (374, 'Pondok Joyo');
INSERT INTO `desa` VALUES (375, 'Pondoknongko');
INSERT INTO `desa` VALUES (376, 'Pondokrejo');
INSERT INTO `desa` VALUES (377, 'Pontang');
INSERT INTO `desa` VALUES (378, 'Pringgondani');
INSERT INTO `desa` VALUES (379, 'Pringgowirawan');
INSERT INTO `desa` VALUES (380, 'Pronojiwo');
INSERT INTO `desa` VALUES (381, 'Puger Kulon');
INSERT INTO `desa` VALUES (382, 'Puger Wetan');
INSERT INTO `desa` VALUES (383, 'Pulo');
INSERT INTO `desa` VALUES (384, 'Pundungsari');
INSERT INTO `desa` VALUES (385, 'Purorejo');
INSERT INTO `desa` VALUES (386, 'Purwoagung');
INSERT INTO `desa` VALUES (387, 'Purwoasri');
INSERT INTO `desa` VALUES (388, 'Purwodadi');
INSERT INTO `desa` VALUES (389, 'Purwoharjo');
INSERT INTO `desa` VALUES (390, 'Purworejo');
INSERT INTO `desa` VALUES (391, 'Purwosono');
INSERT INTO `desa` VALUES (392, 'Rambigundam');
INSERT INTO `desa` VALUES (393, 'Rambipuji');
INSERT INTO `desa` VALUES (394, 'Randu Agung');
INSERT INTO `desa` VALUES (395, 'Randuagung');
INSERT INTO `desa` VALUES (396, 'Ranubedali');
INSERT INTO `desa` VALUES (397, 'Ranulogong');
INSERT INTO `desa` VALUES (398, 'Ranupakis');
INSERT INTO `desa` VALUES (399, 'Ranupani');
INSERT INTO `desa` VALUES (400, 'Ranuwurung');
INSERT INTO `desa` VALUES (401, 'Ranuyoso');
INSERT INTO `desa` VALUES (402, 'Rejo Agung');
INSERT INTO `desa` VALUES (403, 'Rejoagung');
INSERT INTO `desa` VALUES (404, 'Rejosari');
INSERT INTO `desa` VALUES (405, 'Ringintelu');
INSERT INTO `desa` VALUES (406, 'Rogojampi');
INSERT INTO `desa` VALUES (407, 'Rogotrunan');
INSERT INTO `desa` VALUES (408, 'Rojopolo');
INSERT INTO `desa` VALUES (409, 'Rowo Indah');
INSERT INTO `desa` VALUES (410, 'Rowo Tengah');
INSERT INTO `desa` VALUES (411, 'Rowokangkung');
INSERT INTO `desa` VALUES (412, 'Rowosari');
INSERT INTO `desa` VALUES (413, 'Rowotamtu');
INSERT INTO `desa` VALUES (414, 'Sabrang');
INSERT INTO `desa` VALUES (415, 'Salak');
INSERT INTO `desa` VALUES (416, 'Sambimulyo');
INSERT INTO `desa` VALUES (417, 'Sambirejo');
INSERT INTO `desa` VALUES (418, 'Sanenrejo');
INSERT INTO `desa` VALUES (419, 'Sarikemuning');
INSERT INTO `desa` VALUES (420, 'Sarimulyo');
INSERT INTO `desa` VALUES (421, 'Sarongan');
INSERT INTO `desa` VALUES (422, 'Sawaran Kulon');
INSERT INTO `desa` VALUES (423, 'Sawaran Lor');
INSERT INTO `desa` VALUES (424, 'Sebanen');
INSERT INTO `desa` VALUES (425, 'Segobang');
INSERT INTO `desa` VALUES (426, 'Selodakon');
INSERT INTO `desa` VALUES (427, 'Selok Anyar');
INSERT INTO `desa` VALUES (428, 'Selok Awar Awar');
INSERT INTO `desa` VALUES (429, 'Selokbesuki');
INSERT INTO `desa` VALUES (430, 'Selokgondang');
INSERT INTO `desa` VALUES (431, 'Semboro');
INSERT INTO `desa` VALUES (432, 'Sembulung');
INSERT INTO `desa` VALUES (433, 'Sememu');
INSERT INTO `desa` VALUES (434, 'Sempolan');
INSERT INTO `desa` VALUES (435, 'Sempu');
INSERT INTO `desa` VALUES (436, 'Sempusari');
INSERT INTO `desa` VALUES (437, 'Senduro');
INSERT INTO `desa` VALUES (438, 'Seneporejo');
INSERT INTO `desa` VALUES (439, 'Sentul');
INSERT INTO `desa` VALUES (440, 'Sepanjang');
INSERT INTO `desa` VALUES (441, 'Seputih');
INSERT INTO `desa` VALUES (442, 'Seruni');
INSERT INTO `desa` VALUES (443, 'Serut');
INSERT INTO `desa` VALUES (444, 'Setail');
INSERT INTO `desa` VALUES (445, 'Sidodadi');
INSERT INTO `desa` VALUES (446, 'Sidomekar');
INSERT INTO `desa` VALUES (447, 'Sidomukti');
INSERT INTO `desa` VALUES (448, 'Sidomulyo');
INSERT INTO `desa` VALUES (449, 'Sidorejo');
INSERT INTO `desa` VALUES (450, 'Sidowangi');
INSERT INTO `desa` VALUES (451, 'Siliragung');
INSERT INTO `desa` VALUES (452, 'Silo');
INSERT INTO `desa` VALUES (453, 'Silumajang');
INSERT INTO `desa` VALUES (454, 'Singojuruh');
INSERT INTO `desa` VALUES (455, 'Singolatren');
INSERT INTO `desa` VALUES (456, 'Singonegaran');
INSERT INTO `desa` VALUES (457, 'Singotrunan');
INSERT INTO `desa` VALUES (458, 'Slateng');
INSERT INTO `desa` VALUES (459, 'Slawu');
INSERT INTO `desa` VALUES (460, 'Sobo');
INSERT INTO `desa` VALUES (461, 'Sombo');
INSERT INTO `desa` VALUES (462, 'Songgon');
INSERT INTO `desa` VALUES (463, 'Sragi');
INSERT INTO `desa` VALUES (464, 'Sraten');
INSERT INTO `desa` VALUES (465, 'Sruni');
INSERT INTO `desa` VALUES (466, 'Subo');
INSERT INTO `desa` VALUES (467, 'Suci');
INSERT INTO `desa` VALUES (468, 'Suco');
INSERT INTO `desa` VALUES (469, 'Suco Pangepok');
INSERT INTO `desa` VALUES (470, 'Suger Kidul');
INSERT INTO `desa` VALUES (471, 'Sukamakmur');
INSERT INTO `desa` VALUES (472, 'Suko Jember');
INSERT INTO `desa` VALUES (473, 'Sukogidri');
INSERT INTO `desa` VALUES (474, 'Sukojati');
INSERT INTO `desa` VALUES (475, 'Sukokerto');
INSERT INTO `desa` VALUES (476, 'Sukomaju');
INSERT INTO `desa` VALUES (477, 'Sukonatar');
INSERT INTO `desa` VALUES (478, 'Sukorambi');
INSERT INTO `desa` VALUES (479, 'Sukorejo');
INSERT INTO `desa` VALUES (480, 'Sukoreno');
INSERT INTO `desa` VALUES (481, 'Sukosari');
INSERT INTO `desa` VALUES (482, 'Sukowiryo');
INSERT INTO `desa` VALUES (483, 'Sukowono');
INSERT INTO `desa` VALUES (484, 'Sumber Agung');
INSERT INTO `desa` VALUES (485, 'Sumber Anget');
INSERT INTO `desa` VALUES (486, 'Sumber Arum');
INSERT INTO `desa` VALUES (487, 'Sumber Baru');
INSERT INTO `desa` VALUES (488, 'Sumber Bulu');
INSERT INTO `desa` VALUES (489, 'Sumber Bulus');
INSERT INTO `desa` VALUES (490, 'Sumber Jeruk');
INSERT INTO `desa` VALUES (491, 'Sumber Kalong');
INSERT INTO `desa` VALUES (492, 'Sumber Kejayan');
INSERT INTO `desa` VALUES (493, 'Sumber Ketempah');
INSERT INTO `desa` VALUES (494, 'Sumber Lesung');
INSERT INTO `desa` VALUES (495, 'Sumber Pakem');
INSERT INTO `desa` VALUES (496, 'Sumber Pinang');
INSERT INTO `desa` VALUES (497, 'Sumber Salak');
INSERT INTO `desa` VALUES (498, 'Sumber Wringin');
INSERT INTO `desa` VALUES (499, 'Sumberagung');
INSERT INTO `desa` VALUES (500, 'Sumberanyar');
INSERT INTO `desa` VALUES (501, 'Sumberasri');
INSERT INTO `desa` VALUES (502, 'Sumberberas');
INSERT INTO `desa` VALUES (503, 'Sumberdanti');
INSERT INTO `desa` VALUES (504, 'Sumberejo');
INSERT INTO `desa` VALUES (505, 'Sumbergondo');
INSERT INTO `desa` VALUES (506, 'Sumberjambe');
INSERT INTO `desa` VALUES (507, 'Sumberjati');
INSERT INTO `desa` VALUES (508, 'Sumberkencono');
INSERT INTO `desa` VALUES (509, 'Sumbermujur');
INSERT INTO `desa` VALUES (510, 'Sumbermulyo');
INSERT INTO `desa` VALUES (511, 'Sumberpetung');
INSERT INTO `desa` VALUES (512, 'Sumberrejo');
INSERT INTO `desa` VALUES (513, 'Sumbersari');
INSERT INTO `desa` VALUES (514, 'Sumbersewu');
INSERT INTO `desa` VALUES (515, 'Sumbersuko');
INSERT INTO `desa` VALUES (516, 'Sumberurip');
INSERT INTO `desa` VALUES (517, 'Sumberwaru');
INSERT INTO `desa` VALUES (518, 'Sumberwringin');
INSERT INTO `desa` VALUES (519, 'Sumberwuluh');
INSERT INTO `desa` VALUES (520, 'Supiturang');
INSERT INTO `desa` VALUES (521, 'Suren');
INSERT INTO `desa` VALUES (522, 'Tamanagung');
INSERT INTO `desa` VALUES (523, 'Tamanayu');
INSERT INTO `desa` VALUES (524, 'Tamanbaru');
INSERT INTO `desa` VALUES (525, 'Tamansari');
INSERT INTO `desa` VALUES (526, 'Tamansuruh');
INSERT INTO `desa` VALUES (527, 'Tambahrejo');
INSERT INTO `desa` VALUES (528, 'Tambakrejo');
INSERT INTO `desa` VALUES (529, 'Tambong');
INSERT INTO `desa` VALUES (530, 'Tampo');
INSERT INTO `desa` VALUES (531, 'Tanggul Kulon');
INSERT INTO `desa` VALUES (532, 'Tanggul Wetan');
INSERT INTO `desa` VALUES (533, 'Tanggung');
INSERT INTO `desa` VALUES (534, 'Tanjung Rejo');
INSERT INTO `desa` VALUES (535, 'Tanjungsari');
INSERT INTO `desa` VALUES (536, 'Tapanrejo');
INSERT INTO `desa` VALUES (537, 'Tegal Besar');
INSERT INTO `desa` VALUES (538, 'Tegal Gede');
INSERT INTO `desa` VALUES (539, 'Tegal Wangi');
INSERT INTO `desa` VALUES (540, 'Tegal Waru');
INSERT INTO `desa` VALUES (541, 'Tegalarum');
INSERT INTO `desa` VALUES (542, 'Tegalbangsri');
INSERT INTO `desa` VALUES (543, 'Tegalciut');
INSERT INTO `desa` VALUES (544, 'Tegaldlimo');
INSERT INTO `desa` VALUES (545, 'Tegalharjo');
INSERT INTO `desa` VALUES (546, 'Tegalrandu');
INSERT INTO `desa` VALUES (547, 'Tegalrejo');
INSERT INTO `desa` VALUES (548, 'Tegalsari');
INSERT INTO `desa` VALUES (549, 'Tekung');
INSERT INTO `desa` VALUES (550, 'Telemung');
INSERT INTO `desa` VALUES (551, 'Tembokrejo');
INSERT INTO `desa` VALUES (552, 'Temenggungan');
INSERT INTO `desa` VALUES (553, 'Tempeh Kidul');
INSERT INTO `desa` VALUES (554, 'Tempeh Lor');
INSERT INTO `desa` VALUES (555, 'Tempeh Tengah');
INSERT INTO `desa` VALUES (556, 'Tempurejo');
INSERT INTO `desa` VALUES (557, 'Tempurrejo');
INSERT INTO `desa` VALUES (558, 'Tempursari');
INSERT INTO `desa` VALUES (559, 'Temuasri');
INSERT INTO `desa` VALUES (560, 'Temuguruh');
INSERT INTO `desa` VALUES (561, 'Temurejo');
INSERT INTO `desa` VALUES (562, 'Tisnogambar');
INSERT INTO `desa` VALUES (563, 'Tompokersan');
INSERT INTO `desa` VALUES (564, 'Tugusari');
INSERT INTO `desa` VALUES (565, 'Tukangkayu');
INSERT INTO `desa` VALUES (566, 'Tukum');
INSERT INTO `desa` VALUES (567, 'Tulungrejo');
INSERT INTO `desa` VALUES (568, 'Tumpeng');
INSERT INTO `desa` VALUES (569, 'Tunjung');
INSERT INTO `desa` VALUES (570, 'Tunjungrejo');
INSERT INTO `desa` VALUES (571, 'Tutul');
INSERT INTO `desa` VALUES (572, 'Umbul');
INSERT INTO `desa` VALUES (573, 'Umbulrejo');
INSERT INTO `desa` VALUES (574, 'Umbulsari');
INSERT INTO `desa` VALUES (575, 'Uranggantung');
INSERT INTO `desa` VALUES (576, 'Wates Kulon');
INSERT INTO `desa` VALUES (577, 'Wates Wetan');
INSERT INTO `desa` VALUES (578, 'Watu Kebo');
INSERT INTO `desa` VALUES (579, 'Watukebo');
INSERT INTO `desa` VALUES (580, 'Wirolegi');
INSERT INTO `desa` VALUES (581, 'Wirowongso');
INSERT INTO `desa` VALUES (582, 'Wongsorejo');
INSERT INTO `desa` VALUES (583, 'Wonoasri');
INSERT INTO `desa` VALUES (584, 'Wonoayu');
INSERT INTO `desa` VALUES (585, 'Wonocepokoayu');
INSERT INTO `desa` VALUES (586, 'Wonogriyo');
INSERT INTO `desa` VALUES (587, 'Wonojati');
INSERT INTO `desa` VALUES (588, 'Wonokerto');
INSERT INTO `desa` VALUES (589, 'Wonorejo');
INSERT INTO `desa` VALUES (590, 'Wonosari');
INSERT INTO `desa` VALUES (591, 'Wonosobo');
INSERT INTO `desa` VALUES (592, 'Wotgalih');
INSERT INTO `desa` VALUES (593, 'Wringin Agung');
INSERT INTO `desa` VALUES (594, 'Wringin Putih');
INSERT INTO `desa` VALUES (595, 'Wringin Telu');
INSERT INTO `desa` VALUES (596, 'Wringinpitu');
INSERT INTO `desa` VALUES (597, 'Wringinrejo');
INSERT INTO `desa` VALUES (598, 'Yosomulyo');
INSERT INTO `desa` VALUES (599, 'Yosorati');
INSERT INTO `desa` VALUES (600, 'Yosowilangun Kidul');
INSERT INTO `desa` VALUES (601, 'Yosowilangun Lor');

-- ----------------------------
-- Table structure for gender
-- ----------------------------
DROP TABLE IF EXISTS `gender`;
CREATE TABLE `gender`  (
  `no` int NOT NULL AUTO_INCREMENT,
  `kode` varchar(1) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `gender` varchar(15) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  PRIMARY KEY (`no`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 3 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of gender
-- ----------------------------
INSERT INTO `gender` VALUES (1, 'L', 'Laki - laki');
INSERT INTO `gender` VALUES (2, 'P', 'Perempuan');

-- ----------------------------
-- Table structure for kategori
-- ----------------------------
DROP TABLE IF EXISTS `kategori`;
CREATE TABLE `kategori`  (
  `id` bigint NOT NULL AUTO_INCREMENT,
  `nama_kategori` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `harga` bigint NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 6 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of kategori
-- ----------------------------
INSERT INTO `kategori` VALUES (1, 'Laki-Laki', 2100000);
INSERT INTO `kategori` VALUES (3, 'Perempuan', 2200000);
INSERT INTO `kategori` VALUES (4, 'Muslimah', 2350000);
INSERT INTO `kategori` VALUES (5, 'Kategori Baru', 3000000);

-- ----------------------------
-- Table structure for kategori_biaya
-- ----------------------------
DROP TABLE IF EXISTS `kategori_biaya`;
CREATE TABLE `kategori_biaya`  (
  `kd_biaya` int NOT NULL AUTO_INCREMENT,
  `nama_kategori` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `uang` int NOT NULL,
  PRIMARY KEY (`kd_biaya`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 7 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of kategori_biaya
-- ----------------------------
INSERT INTO `kategori_biaya` VALUES (1, 'PUTRA BISMEN', 2100000);
INSERT INTO `kategori_biaya` VALUES (2, 'PUTRI BISMEN', 2200000);
INSERT INTO `kategori_biaya` VALUES (3, 'MUSLIMAH BISMEN', 2350000);
INSERT INTO `kategori_biaya` VALUES (4, 'PUTRA TEKNIK', 2115000);
INSERT INTO `kategori_biaya` VALUES (5, 'PUTRI TEKNIK', 2215000);
INSERT INTO `kategori_biaya` VALUES (6, 'MUSLIMAH TEKNIK', 2365000);

-- ----------------------------
-- Table structure for kecamatan
-- ----------------------------
DROP TABLE IF EXISTS `kecamatan`;
CREATE TABLE `kecamatan`  (
  `no` int NOT NULL AUTO_INCREMENT,
  `kecamatan` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  PRIMARY KEY (`no`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 85 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of kecamatan
-- ----------------------------
INSERT INTO `kecamatan` VALUES (2, 'Ambulu');
INSERT INTO `kecamatan` VALUES (1, 'Ajung');
INSERT INTO `kecamatan` VALUES (3, 'Arjasa');
INSERT INTO `kecamatan` VALUES (4, 'Balung');
INSERT INTO `kecamatan` VALUES (5, 'Bandongan');
INSERT INTO `kecamatan` VALUES (6, 'Bangorejo');
INSERT INTO `kecamatan` VALUES (7, 'Bangsalsari');
INSERT INTO `kecamatan` VALUES (8, 'Banyumas');
INSERT INTO `kecamatan` VALUES (9, 'Banyuwangi');
INSERT INTO `kecamatan` VALUES (10, 'Candipuro');
INSERT INTO `kecamatan` VALUES (11, 'Cibitung');
INSERT INTO `kecamatan` VALUES (12, 'Cluring');
INSERT INTO `kecamatan` VALUES (13, 'Gambiran');
INSERT INTO `kecamatan` VALUES (14, 'Genteng');
INSERT INTO `kecamatan` VALUES (15, 'Giri');
INSERT INTO `kecamatan` VALUES (16, 'Glagah');
INSERT INTO `kecamatan` VALUES (17, 'Glenmore');
INSERT INTO `kecamatan` VALUES (18, 'Gucialit');
INSERT INTO `kecamatan` VALUES (19, 'Gumuk Mas');
INSERT INTO `kecamatan` VALUES (20, 'Jatiroto');
INSERT INTO `kecamatan` VALUES (21, 'Jelbuk');
INSERT INTO `kecamatan` VALUES (22, 'Jenggawah');
INSERT INTO `kecamatan` VALUES (23, 'Jombang');
INSERT INTO `kecamatan` VALUES (24, 'Kabat');
INSERT INTO `kecamatan` VALUES (25, 'Kalibaru');
INSERT INTO `kecamatan` VALUES (26, 'Kalipuro');
INSERT INTO `kecamatan` VALUES (27, 'Kalisat');
INSERT INTO `kecamatan` VALUES (28, 'Kaliwates');
INSERT INTO `kecamatan` VALUES (29, 'Kedungjajang');
INSERT INTO `kecamatan` VALUES (30, 'Kencong');
INSERT INTO `kecamatan` VALUES (31, 'Klakah');
INSERT INTO `kecamatan` VALUES (32, 'Kunir');
INSERT INTO `kecamatan` VALUES (33, 'Ledokombo');
INSERT INTO `kecamatan` VALUES (34, 'Licin');
INSERT INTO `kecamatan` VALUES (35, 'Lumajang');
INSERT INTO `kecamatan` VALUES (36, 'Manyar');
INSERT INTO `kecamatan` VALUES (37, 'Mayang');
INSERT INTO `kecamatan` VALUES (38, 'Mumbulsari');
INSERT INTO `kecamatan` VALUES (39, 'Muncar');
INSERT INTO `kecamatan` VALUES (40, 'Na IX-X');
INSERT INTO `kecamatan` VALUES (41, 'Padang');
INSERT INTO `kecamatan` VALUES (42, 'Pakusari');
INSERT INTO `kecamatan` VALUES (43, 'Panti');
INSERT INTO `kecamatan` VALUES (44, 'Pasirian');
INSERT INTO `kecamatan` VALUES (45, 'Pasrujambe/Pasujambe');
INSERT INTO `kecamatan` VALUES (46, 'Patrang');
INSERT INTO `kecamatan` VALUES (47, 'Pesanggaran');
INSERT INTO `kecamatan` VALUES (48, 'Pronojiwo');
INSERT INTO `kecamatan` VALUES (49, 'Puger');
INSERT INTO `kecamatan` VALUES (50, 'Pulo Ampel');
INSERT INTO `kecamatan` VALUES (51, 'Purwoharjo');
INSERT INTO `kecamatan` VALUES (52, 'Rambipuji');
INSERT INTO `kecamatan` VALUES (53, 'Randuagung');
INSERT INTO `kecamatan` VALUES (54, 'Ranuyoso');
INSERT INTO `kecamatan` VALUES (55, 'Rogojampi');
INSERT INTO `kecamatan` VALUES (56, 'Rowokangkung');
INSERT INTO `kecamatan` VALUES (57, 'Semboro');
INSERT INTO `kecamatan` VALUES (58, 'Sempu');
INSERT INTO `kecamatan` VALUES (59, 'Senduro');
INSERT INTO `kecamatan` VALUES (60, 'Siliragung');
INSERT INTO `kecamatan` VALUES (61, 'Silo');
INSERT INTO `kecamatan` VALUES (62, 'Singojuruh');
INSERT INTO `kecamatan` VALUES (63, 'Songgon');
INSERT INTO `kecamatan` VALUES (64, 'Srono');
INSERT INTO `kecamatan` VALUES (65, 'Sukamaju');
INSERT INTO `kecamatan` VALUES (66, 'Sukodono');
INSERT INTO `kecamatan` VALUES (67, 'Sukorambi');
INSERT INTO `kecamatan` VALUES (68, 'Sukowono');
INSERT INTO `kecamatan` VALUES (69, 'Sumber Baru');
INSERT INTO `kecamatan` VALUES (70, 'Sumber Jambe');
INSERT INTO `kecamatan` VALUES (71, 'Sumber Sari');
INSERT INTO `kecamatan` VALUES (72, 'Sumbersuko');
INSERT INTO `kecamatan` VALUES (73, 'Tanggul');
INSERT INTO `kecamatan` VALUES (74, 'Tegaldlimo');
INSERT INTO `kecamatan` VALUES (75, 'Tegalsari');
INSERT INTO `kecamatan` VALUES (76, 'Tekung');
INSERT INTO `kecamatan` VALUES (77, 'Tempeh');
INSERT INTO `kecamatan` VALUES (78, 'Tempurejo');
INSERT INTO `kecamatan` VALUES (79, 'Tempursari');
INSERT INTO `kecamatan` VALUES (80, 'Umbulsari');
INSERT INTO `kecamatan` VALUES (81, 'Watumalang');
INSERT INTO `kecamatan` VALUES (82, 'Wongsorejo');
INSERT INTO `kecamatan` VALUES (83, 'Wuluhan');
INSERT INTO `kecamatan` VALUES (84, 'Yosowilangun');

-- ----------------------------
-- Table structure for kelas
-- ----------------------------
DROP TABLE IF EXISTS `kelas`;
CREATE TABLE `kelas`  (
  `no` int NOT NULL AUTO_INCREMENT,
  `kelas` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `kode` varchar(5) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  PRIMARY KEY (`no`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 24 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of kelas
-- ----------------------------
INSERT INTO `kelas` VALUES (1, 'XI OTKP1', '11AP1');
INSERT INTO `kelas` VALUES (2, 'XI OTKP2', '11AP2');
INSERT INTO `kelas` VALUES (3, 'XI OTKP3', '11AP3');
INSERT INTO `kelas` VALUES (4, 'XI AKL1', '11AK1');
INSERT INTO `kelas` VALUES (5, 'XI AKL2', '11AK2');
INSERT INTO `kelas` VALUES (6, 'XI BDP1', '11PM1');
INSERT INTO `kelas` VALUES (7, 'XI BDP2', '11PM2');
INSERT INTO `kelas` VALUES (8, 'XI BDP3', '11PM3');
INSERT INTO `kelas` VALUES (9, 'XI RPL', '11RPL');
INSERT INTO `kelas` VALUES (10, 'XI TBSM1', '11TS1');
INSERT INTO `kelas` VALUES (11, 'XI TBSM2', '11TS2');
INSERT INTO `kelas` VALUES (12, 'XII OTKP1', '12AP1');
INSERT INTO `kelas` VALUES (13, 'XII OTKP2', '12AP2');
INSERT INTO `kelas` VALUES (14, 'XII OTKP3', '12AP3');
INSERT INTO `kelas` VALUES (15, 'XII AKL1', '12AK1');
INSERT INTO `kelas` VALUES (16, 'XII AKL2', '12AK2');
INSERT INTO `kelas` VALUES (17, 'XII AKL3', '12AK3');
INSERT INTO `kelas` VALUES (18, 'XII BDP1', '12PM1');
INSERT INTO `kelas` VALUES (19, 'XII BDP2', '12PM2');
INSERT INTO `kelas` VALUES (20, 'XII BDP3', '12PM3');
INSERT INTO `kelas` VALUES (21, 'XII RPL', '12RPL');
INSERT INTO `kelas` VALUES (22, 'XII TBSM1', '12TS1');
INSERT INTO `kelas` VALUES (23, 'XII TSM2', '12TS2');

-- ----------------------------
-- Table structure for kota
-- ----------------------------
DROP TABLE IF EXISTS `kota`;
CREATE TABLE `kota`  (
  `no` int NOT NULL AUTO_INCREMENT,
  `kota` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  PRIMARY KEY (`no`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 502 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of kota
-- ----------------------------
INSERT INTO `kota` VALUES (2, 'Kab. Bangli');
INSERT INTO `kota` VALUES (1, 'Kab. Badung');
INSERT INTO `kota` VALUES (3, 'Kab. Buleleng');
INSERT INTO `kota` VALUES (4, 'Kota Denpasar');
INSERT INTO `kota` VALUES (5, 'Kab. Gianyar');
INSERT INTO `kota` VALUES (6, 'Kab. Jembrana');
INSERT INTO `kota` VALUES (7, 'Kab. Karangasem');
INSERT INTO `kota` VALUES (8, 'Kab. Klungkung');
INSERT INTO `kota` VALUES (9, 'Kab. Tabanan');
INSERT INTO `kota` VALUES (10, 'Kab. Bangka');
INSERT INTO `kota` VALUES (11, 'Kab. Bangka Barat');
INSERT INTO `kota` VALUES (12, 'Kab. Bangka Selatan');
INSERT INTO `kota` VALUES (13, 'Kab. Bangka Tengah');
INSERT INTO `kota` VALUES (14, 'Kab. Belitung');
INSERT INTO `kota` VALUES (15, 'Kab. Belitung Timur');
INSERT INTO `kota` VALUES (16, 'Kota Pangkal Pinang');
INSERT INTO `kota` VALUES (17, 'Kota Cilegon');
INSERT INTO `kota` VALUES (18, 'Kab. Lebak');
INSERT INTO `kota` VALUES (19, 'Kab. Pandeglang');
INSERT INTO `kota` VALUES (20, 'Kab. Serang');
INSERT INTO `kota` VALUES (21, 'Kota Serang');
INSERT INTO `kota` VALUES (22, 'Kab. Tangerang');
INSERT INTO `kota` VALUES (23, 'Kota Tangerang');
INSERT INTO `kota` VALUES (24, 'Kota Tangerang Selatan');
INSERT INTO `kota` VALUES (25, 'Kota Bengkulu');
INSERT INTO `kota` VALUES (26, 'Kab. Bengkulu Selatan');
INSERT INTO `kota` VALUES (27, 'Kab. Bengkulu Tengah');
INSERT INTO `kota` VALUES (28, 'Kab. Bengkulu Utara');
INSERT INTO `kota` VALUES (29, 'Kab. Kaur');
INSERT INTO `kota` VALUES (30, 'Kab. Kepahiang');
INSERT INTO `kota` VALUES (31, 'Kab. Lebong');
INSERT INTO `kota` VALUES (32, 'Kab. Muko Muko');
INSERT INTO `kota` VALUES (33, 'Kab. Rejang Lebong');
INSERT INTO `kota` VALUES (34, 'Kab. Seluma');
INSERT INTO `kota` VALUES (35, 'Kab. Bantul');
INSERT INTO `kota` VALUES (36, 'Kab. Gunung Kidul');
INSERT INTO `kota` VALUES (37, 'Kab. Kulon Progo');
INSERT INTO `kota` VALUES (38, 'Kab. Sleman');
INSERT INTO `kota` VALUES (39, 'Kota Yogyakarta');
INSERT INTO `kota` VALUES (40, 'Kota Jakarta Barat');
INSERT INTO `kota` VALUES (41, 'Kota Jakarta Pusat');
INSERT INTO `kota` VALUES (42, 'Kota Jakarta Selatan');
INSERT INTO `kota` VALUES (43, 'Kota Jakarta Timur');
INSERT INTO `kota` VALUES (44, 'Kota Jakarta Utara');
INSERT INTO `kota` VALUES (45, 'Kab. Kepulauan Seribu');
INSERT INTO `kota` VALUES (46, 'Kab. Boalemo');
INSERT INTO `kota` VALUES (47, 'Kab. Bone Bolango');
INSERT INTO `kota` VALUES (48, 'Kab. Gorontalo');
INSERT INTO `kota` VALUES (49, 'Kota Gorontalo');
INSERT INTO `kota` VALUES (50, 'Kab. Gorontalo Utara');
INSERT INTO `kota` VALUES (51, 'Kab. Pohuwato');
INSERT INTO `kota` VALUES (52, 'Kab. Batang Hari');
INSERT INTO `kota` VALUES (53, 'Kab. Bungo');
INSERT INTO `kota` VALUES (54, 'Kota Jambi');
INSERT INTO `kota` VALUES (55, 'Kab. Kerinci');
INSERT INTO `kota` VALUES (56, 'Kab. Merangin');
INSERT INTO `kota` VALUES (57, 'Kab. Muaro Jambi');
INSERT INTO `kota` VALUES (58, 'Kab. Sarolangun');
INSERT INTO `kota` VALUES (59, 'Kota Sungaipenuh');
INSERT INTO `kota` VALUES (60, 'Kab. Tanjung Jabung Barat');
INSERT INTO `kota` VALUES (61, 'Kab. Tanjung Jabung Timur');
INSERT INTO `kota` VALUES (62, 'Kab. Tebo');
INSERT INTO `kota` VALUES (63, 'Kab. Bandung');
INSERT INTO `kota` VALUES (64, 'Kota Bandung');
INSERT INTO `kota` VALUES (65, 'Kab. Bandung Barat');
INSERT INTO `kota` VALUES (66, 'Kota Banjar');
INSERT INTO `kota` VALUES (67, 'Kab. Bekasi');
INSERT INTO `kota` VALUES (68, 'Kota Bekasi');
INSERT INTO `kota` VALUES (69, 'Kab. Bogor');
INSERT INTO `kota` VALUES (70, 'Kota Bogor');
INSERT INTO `kota` VALUES (71, 'Kab. Ciamis');
INSERT INTO `kota` VALUES (72, 'Kab. Cianjur');
INSERT INTO `kota` VALUES (73, 'Kota Cimahi');
INSERT INTO `kota` VALUES (74, 'Kab. Cirebon');
INSERT INTO `kota` VALUES (75, 'Kota Cirebon');
INSERT INTO `kota` VALUES (76, 'Kota Depok');
INSERT INTO `kota` VALUES (77, 'Kab. Garut');
INSERT INTO `kota` VALUES (78, 'Kab. Indramayu');
INSERT INTO `kota` VALUES (79, 'Kab. Karawang');
INSERT INTO `kota` VALUES (80, 'Kab. Kuningan');
INSERT INTO `kota` VALUES (81, 'Kab. Majalengka');
INSERT INTO `kota` VALUES (82, 'Kab. Pangandaran');
INSERT INTO `kota` VALUES (83, 'Kab. Purwakarta');
INSERT INTO `kota` VALUES (84, 'Kab. Subang');
INSERT INTO `kota` VALUES (85, 'Kab. Sukabumi');
INSERT INTO `kota` VALUES (86, 'Kota Sukabumi');
INSERT INTO `kota` VALUES (87, 'Kab. Sumedang');
INSERT INTO `kota` VALUES (88, 'Kab. Tasikmalaya');
INSERT INTO `kota` VALUES (89, 'Kota Tasikmalaya');
INSERT INTO `kota` VALUES (90, 'Kab. Banjarnegara');
INSERT INTO `kota` VALUES (91, 'Kab. Banyumas');
INSERT INTO `kota` VALUES (92, 'Kab. Batang');
INSERT INTO `kota` VALUES (93, 'Kab. Blora');
INSERT INTO `kota` VALUES (94, 'Kab. Boyolali');
INSERT INTO `kota` VALUES (95, 'Kab. Brebes');
INSERT INTO `kota` VALUES (96, 'Kab. Cilacap');
INSERT INTO `kota` VALUES (97, 'Kab. Demak');
INSERT INTO `kota` VALUES (98, 'Kab. Grobogan');
INSERT INTO `kota` VALUES (99, 'Kab. Jepara');
INSERT INTO `kota` VALUES (100, 'Kab. Karanganyar');
INSERT INTO `kota` VALUES (101, 'Kab. Kebumen');
INSERT INTO `kota` VALUES (102, 'Kab. Kendal');
INSERT INTO `kota` VALUES (103, 'Kab. Klaten');
INSERT INTO `kota` VALUES (104, 'Kab. Kudus');
INSERT INTO `kota` VALUES (105, 'Kab. Magelang');
INSERT INTO `kota` VALUES (106, 'Kota Magelang');
INSERT INTO `kota` VALUES (107, 'Kab. Pati');
INSERT INTO `kota` VALUES (108, 'Kab. Pekalongan');
INSERT INTO `kota` VALUES (109, 'Kota Pekalongan');
INSERT INTO `kota` VALUES (110, 'Kab. Pemalang');
INSERT INTO `kota` VALUES (111, 'Kab. Purbalingga');
INSERT INTO `kota` VALUES (112, 'Kab. Purworejo');
INSERT INTO `kota` VALUES (113, 'Kab. Rembang');
INSERT INTO `kota` VALUES (114, 'Kota Salatiga');
INSERT INTO `kota` VALUES (115, 'Kab. Semarang');
INSERT INTO `kota` VALUES (116, 'Kota Semarang');
INSERT INTO `kota` VALUES (117, 'Kab. Sragen');
INSERT INTO `kota` VALUES (118, 'Kab. Sukoharjo');
INSERT INTO `kota` VALUES (119, 'Kota Surakarta (Solo)');
INSERT INTO `kota` VALUES (120, 'Kab. Tegal');
INSERT INTO `kota` VALUES (121, 'Kota Tegal');
INSERT INTO `kota` VALUES (122, 'Kab. Temanggung');
INSERT INTO `kota` VALUES (123, 'Kab. Wonogiri');
INSERT INTO `kota` VALUES (124, 'Kab. Wonosobo');
INSERT INTO `kota` VALUES (125, 'Kab. Bangkalan');
INSERT INTO `kota` VALUES (126, 'Kab. Banyuwangi');
INSERT INTO `kota` VALUES (127, 'Kota Batu');
INSERT INTO `kota` VALUES (128, 'Kab. Blitar');
INSERT INTO `kota` VALUES (129, 'Kota Blitar');
INSERT INTO `kota` VALUES (130, 'Kab. Bojonegoro');
INSERT INTO `kota` VALUES (131, 'Kab. Bondowoso');
INSERT INTO `kota` VALUES (132, 'Kab. Gresik');
INSERT INTO `kota` VALUES (133, 'Kab. Jember');
INSERT INTO `kota` VALUES (134, 'Kab. Jombang');
INSERT INTO `kota` VALUES (135, 'Kab. Kediri');
INSERT INTO `kota` VALUES (136, 'Kota Kediri');
INSERT INTO `kota` VALUES (137, 'Kab. Lamongan');
INSERT INTO `kota` VALUES (138, 'Kab. Lumajang');
INSERT INTO `kota` VALUES (139, 'Kab. Madiun');
INSERT INTO `kota` VALUES (140, 'Kota Madiun');
INSERT INTO `kota` VALUES (141, 'Kab. Magetan');
INSERT INTO `kota` VALUES (142, 'Kab. Malang');
INSERT INTO `kota` VALUES (143, 'Kota Malang');
INSERT INTO `kota` VALUES (144, 'Kab. Mojokerto');
INSERT INTO `kota` VALUES (145, 'Kota Mojokerto');
INSERT INTO `kota` VALUES (146, 'Kab. Nganjuk');
INSERT INTO `kota` VALUES (147, 'Kab. Ngawi');
INSERT INTO `kota` VALUES (148, 'Kab. Pacitan');
INSERT INTO `kota` VALUES (149, 'Kab. Pamekasan');
INSERT INTO `kota` VALUES (150, 'Kab. Pasuruan');
INSERT INTO `kota` VALUES (151, 'Kota Pasuruan');
INSERT INTO `kota` VALUES (152, 'Kab. Ponorogo');
INSERT INTO `kota` VALUES (153, 'Kab. Probolinggo');
INSERT INTO `kota` VALUES (154, 'Kota Probolinggo');
INSERT INTO `kota` VALUES (155, 'Kab. Sampang');
INSERT INTO `kota` VALUES (156, 'Kab. Sidoarjo');
INSERT INTO `kota` VALUES (157, 'Kab. Situbondo');
INSERT INTO `kota` VALUES (158, 'Kab. Sumenep');
INSERT INTO `kota` VALUES (159, 'Kota Surabaya');
INSERT INTO `kota` VALUES (160, 'Kab. Trenggalek');
INSERT INTO `kota` VALUES (161, 'Kab. Tuban');
INSERT INTO `kota` VALUES (162, 'Kab. Tulungagung');
INSERT INTO `kota` VALUES (163, 'Kab. Bengkayang');
INSERT INTO `kota` VALUES (164, 'Kab. Kapuas Hulu');
INSERT INTO `kota` VALUES (165, 'Kab. Kayong Utara');
INSERT INTO `kota` VALUES (166, 'Kab. Ketapang');
INSERT INTO `kota` VALUES (167, 'Kab. Kubu Raya');
INSERT INTO `kota` VALUES (168, 'Kab. Landak');
INSERT INTO `kota` VALUES (169, 'Kab. Melawi');
INSERT INTO `kota` VALUES (170, 'Kab. Pontianak');
INSERT INTO `kota` VALUES (171, 'Kota Pontianak');
INSERT INTO `kota` VALUES (172, 'Kab. Sambas');
INSERT INTO `kota` VALUES (173, 'Kab. Sanggau');
INSERT INTO `kota` VALUES (174, 'Kab. Sekadau');
INSERT INTO `kota` VALUES (175, 'Kota Singkawang');
INSERT INTO `kota` VALUES (176, 'Kab. Sintang');
INSERT INTO `kota` VALUES (177, 'Kab. Balangan');
INSERT INTO `kota` VALUES (178, 'Kab. Banjar');
INSERT INTO `kota` VALUES (179, 'Kota Banjarbaru');
INSERT INTO `kota` VALUES (180, 'Kota Banjarmasin');
INSERT INTO `kota` VALUES (181, 'Kab. Barito Kuala');
INSERT INTO `kota` VALUES (182, 'Kab. Hulu Sungai Selatan');
INSERT INTO `kota` VALUES (183, 'Kab. Hulu Sungai Tengah');
INSERT INTO `kota` VALUES (184, 'Kab. Hulu Sungai Utara');
INSERT INTO `kota` VALUES (185, 'Kab. Kotabaru');
INSERT INTO `kota` VALUES (186, 'Kab. Tabalong');
INSERT INTO `kota` VALUES (187, 'Kab. Tanah Bumbu');
INSERT INTO `kota` VALUES (188, 'Kab. Tanah Laut');
INSERT INTO `kota` VALUES (189, 'Kab. Tapin');
INSERT INTO `kota` VALUES (190, 'Kab. Barito Selatan');
INSERT INTO `kota` VALUES (191, 'Kab. Barito Timur');
INSERT INTO `kota` VALUES (192, 'Kab. Barito Utara');
INSERT INTO `kota` VALUES (193, 'Kab. Gunung Mas');
INSERT INTO `kota` VALUES (194, 'Kab. Kapuas');
INSERT INTO `kota` VALUES (195, 'Kab. Katingan');
INSERT INTO `kota` VALUES (196, 'Kab. Kotawaringin Barat');
INSERT INTO `kota` VALUES (197, 'Kab. Kotawaringin Timur');
INSERT INTO `kota` VALUES (198, 'Kab. Lamandau');
INSERT INTO `kota` VALUES (199, 'Kab. Murung Raya');
INSERT INTO `kota` VALUES (200, 'Kota Palangka Raya');
INSERT INTO `kota` VALUES (201, 'Kab. Pulang Pisau');
INSERT INTO `kota` VALUES (202, 'Kab. Seruyan');
INSERT INTO `kota` VALUES (203, 'Kab. Sukamara');
INSERT INTO `kota` VALUES (204, 'Kota Balikpapan');
INSERT INTO `kota` VALUES (205, 'Kab. Berau');
INSERT INTO `kota` VALUES (206, 'Kota Bontang');
INSERT INTO `kota` VALUES (207, 'Kab. Kutai Barat');
INSERT INTO `kota` VALUES (208, 'Kab. Kutai Kartanegara');
INSERT INTO `kota` VALUES (209, 'Kab. Kutai Timur');
INSERT INTO `kota` VALUES (210, 'Kab. Paser');
INSERT INTO `kota` VALUES (211, 'Kab. Penajam Paser Utara');
INSERT INTO `kota` VALUES (212, 'Kota Samarinda');
INSERT INTO `kota` VALUES (213, 'Kab. Bulungan (Bulongan)');
INSERT INTO `kota` VALUES (214, 'Kab. Malinau');
INSERT INTO `kota` VALUES (215, 'Kab. Nunukan');
INSERT INTO `kota` VALUES (216, 'Kab. Tana Tidung');
INSERT INTO `kota` VALUES (217, 'Kota Tarakan');
INSERT INTO `kota` VALUES (218, 'Kota Batam');
INSERT INTO `kota` VALUES (219, 'Kab. Bintan');
INSERT INTO `kota` VALUES (220, 'Kab. Karimun');
INSERT INTO `kota` VALUES (221, 'Kab. Kepulauan Anambas');
INSERT INTO `kota` VALUES (222, 'Kab. Lingga');
INSERT INTO `kota` VALUES (223, 'Kab. Natuna');
INSERT INTO `kota` VALUES (224, 'Kota Tanjung Pinang');
INSERT INTO `kota` VALUES (225, 'Kota Bandar Lampung');
INSERT INTO `kota` VALUES (226, 'Kab. Lampung Barat');
INSERT INTO `kota` VALUES (227, 'Kab. Lampung Selatan');
INSERT INTO `kota` VALUES (228, 'Kab. Lampung Tengah');
INSERT INTO `kota` VALUES (229, 'Kab. Lampung Timur');
INSERT INTO `kota` VALUES (230, 'Kab. Lampung Utara');
INSERT INTO `kota` VALUES (231, 'Kab. Mesuji');
INSERT INTO `kota` VALUES (232, 'Kota Metro');
INSERT INTO `kota` VALUES (233, 'Kab. Pesawaran');
INSERT INTO `kota` VALUES (234, 'Kab. Pesisir Barat');
INSERT INTO `kota` VALUES (235, 'Kab. Pringsewu');
INSERT INTO `kota` VALUES (236, 'Kab. Tanggamus');
INSERT INTO `kota` VALUES (237, 'Kab. Tulang Bawang');
INSERT INTO `kota` VALUES (238, 'Kab. Tulang Bawang Barat');
INSERT INTO `kota` VALUES (239, 'Kab. Way Kanan');
INSERT INTO `kota` VALUES (240, 'Kota Ambon');
INSERT INTO `kota` VALUES (241, 'Kab. Buru');
INSERT INTO `kota` VALUES (242, 'Kab. Buru Selatan');
INSERT INTO `kota` VALUES (243, 'Kab. Kepulauan Aru');
INSERT INTO `kota` VALUES (244, 'Kab. Maluku Barat Daya');
INSERT INTO `kota` VALUES (245, 'Kab. Maluku Tengah');
INSERT INTO `kota` VALUES (246, 'Kab. Maluku Tenggara');
INSERT INTO `kota` VALUES (247, 'Kab. Maluku Tenggara Barat');
INSERT INTO `kota` VALUES (248, 'Kab. Seram Bagian Barat');
INSERT INTO `kota` VALUES (249, 'Kab. Seram Bagian Timur');
INSERT INTO `kota` VALUES (250, 'Kota Tual');
INSERT INTO `kota` VALUES (251, 'Kab. Halmahera Barat');
INSERT INTO `kota` VALUES (252, 'Kab. Halmahera Selatan');
INSERT INTO `kota` VALUES (253, 'Kab. Halmahera Tengah');
INSERT INTO `kota` VALUES (254, 'Kab. Halmahera Timur');
INSERT INTO `kota` VALUES (255, 'Kab. Halmahera Utara');
INSERT INTO `kota` VALUES (256, 'Kab. Kepulauan Sula');
INSERT INTO `kota` VALUES (257, 'Kab. Pulau Morotai');
INSERT INTO `kota` VALUES (258, 'Kota Ternate');
INSERT INTO `kota` VALUES (259, 'Kota Tidore Kepulauan');
INSERT INTO `kota` VALUES (260, 'Kab. Aceh Barat');
INSERT INTO `kota` VALUES (261, 'Kab. Aceh Barat Daya');
INSERT INTO `kota` VALUES (262, 'Kab. Aceh Besar');
INSERT INTO `kota` VALUES (263, 'Kab. Aceh Jaya');
INSERT INTO `kota` VALUES (264, 'Kab. Aceh Selatan');
INSERT INTO `kota` VALUES (265, 'Kab. Aceh Singkil');
INSERT INTO `kota` VALUES (266, 'Kab. Aceh Tamiang');
INSERT INTO `kota` VALUES (267, 'Kab. Aceh Tengah');
INSERT INTO `kota` VALUES (268, 'Kab. Aceh Tenggara');
INSERT INTO `kota` VALUES (269, 'Kab. Aceh Timur');
INSERT INTO `kota` VALUES (270, 'Kab. Aceh Utara');
INSERT INTO `kota` VALUES (271, 'Kota Banda Aceh');
INSERT INTO `kota` VALUES (272, 'Kab. Bener Meriah');
INSERT INTO `kota` VALUES (273, 'Kab. Bireuen');
INSERT INTO `kota` VALUES (274, 'Kab. Gayo Lues');
INSERT INTO `kota` VALUES (275, 'Kota Langsa');
INSERT INTO `kota` VALUES (276, 'Kota Lhokseumawe');
INSERT INTO `kota` VALUES (277, 'Kab. Nagan Raya');
INSERT INTO `kota` VALUES (278, 'Kab. Pidie');
INSERT INTO `kota` VALUES (279, 'Kab. Pidie Jaya');
INSERT INTO `kota` VALUES (280, 'Kota Sabang');
INSERT INTO `kota` VALUES (281, 'Kab. Simeulue');
INSERT INTO `kota` VALUES (282, 'Kota Subulussalam');
INSERT INTO `kota` VALUES (283, 'Kab. Bima');
INSERT INTO `kota` VALUES (284, 'Kota Bima');
INSERT INTO `kota` VALUES (285, 'Kab. Dompu');
INSERT INTO `kota` VALUES (286, 'Kab. Lombok Barat');
INSERT INTO `kota` VALUES (287, 'Kab. Lombok Tengah');
INSERT INTO `kota` VALUES (288, 'Kab. Lombok Timur');
INSERT INTO `kota` VALUES (289, 'Kab. Lombok Utara');
INSERT INTO `kota` VALUES (290, 'Kota Mataram');
INSERT INTO `kota` VALUES (291, 'Kab. Sumbawa');
INSERT INTO `kota` VALUES (292, 'Kab. Sumbawa Barat');
INSERT INTO `kota` VALUES (293, 'Kab. Alor');
INSERT INTO `kota` VALUES (294, 'Kab. Belu');
INSERT INTO `kota` VALUES (295, 'Kab. Ende');
INSERT INTO `kota` VALUES (296, 'Kab. Flores Timur');
INSERT INTO `kota` VALUES (297, 'Kab. Kupang');
INSERT INTO `kota` VALUES (298, 'Kota Kupang');
INSERT INTO `kota` VALUES (299, 'Kab. Lembata');
INSERT INTO `kota` VALUES (300, 'Kab. Manggarai');
INSERT INTO `kota` VALUES (301, 'Kab. Manggarai Barat');
INSERT INTO `kota` VALUES (302, 'Kab. Manggarai Timur');
INSERT INTO `kota` VALUES (303, 'Kab. Nagekeo');
INSERT INTO `kota` VALUES (304, 'Kab. Ngada');
INSERT INTO `kota` VALUES (305, 'Kab. Rote Ndao');
INSERT INTO `kota` VALUES (306, 'Kab. Sabu Raijua');
INSERT INTO `kota` VALUES (307, 'Kab. Sikka');
INSERT INTO `kota` VALUES (308, 'Kab. Sumba Barat');
INSERT INTO `kota` VALUES (309, 'Kab. Sumba Barat Daya');
INSERT INTO `kota` VALUES (310, 'Kab. Sumba Tengah');
INSERT INTO `kota` VALUES (311, 'Kab. Sumba Timur');
INSERT INTO `kota` VALUES (312, 'Kab. Timor Tengah Selatan');
INSERT INTO `kota` VALUES (313, 'Kab. Timor Tengah Utara');
INSERT INTO `kota` VALUES (314, 'Kab. Asmat');
INSERT INTO `kota` VALUES (315, 'Kab. Biak Numfor');
INSERT INTO `kota` VALUES (316, 'Kab. Boven Digoel');
INSERT INTO `kota` VALUES (317, 'Kab. Deiyai (Deliyai)');
INSERT INTO `kota` VALUES (318, 'Kab. Dogiyai');
INSERT INTO `kota` VALUES (319, 'Kab. Intan Jaya');
INSERT INTO `kota` VALUES (320, 'Kab. Jayapura');
INSERT INTO `kota` VALUES (321, 'Kota Jayapura');
INSERT INTO `kota` VALUES (322, 'Kab. Jayawijaya');
INSERT INTO `kota` VALUES (323, 'Kab. Keerom');
INSERT INTO `kota` VALUES (324, 'Kab. Kepulauan Yapen (Yapen Waropen)');
INSERT INTO `kota` VALUES (325, 'Kab. Lanny Jaya');
INSERT INTO `kota` VALUES (326, 'Kab. Mamberamo Raya');
INSERT INTO `kota` VALUES (327, 'Kab. Mamberamo Tengah');
INSERT INTO `kota` VALUES (328, 'Kab. Mappi');
INSERT INTO `kota` VALUES (329, 'Kab. Merauke');
INSERT INTO `kota` VALUES (330, 'Kab. Mimika');
INSERT INTO `kota` VALUES (331, 'Kab. Nabire');
INSERT INTO `kota` VALUES (332, 'Kab. Nduga');
INSERT INTO `kota` VALUES (333, 'Kab. Paniai');
INSERT INTO `kota` VALUES (334, 'Kab. Pegunungan Bintang');
INSERT INTO `kota` VALUES (335, 'Kab. Puncak');
INSERT INTO `kota` VALUES (336, 'Kab. Puncak Jaya');
INSERT INTO `kota` VALUES (337, 'Kab. Sarmi');
INSERT INTO `kota` VALUES (338, 'Kab. Supiori');
INSERT INTO `kota` VALUES (339, 'Kab. Tolikara');
INSERT INTO `kota` VALUES (340, 'Kab. Waropen');
INSERT INTO `kota` VALUES (341, 'Kab. Yahukimo');
INSERT INTO `kota` VALUES (342, 'Kab. Yalimo');
INSERT INTO `kota` VALUES (343, 'Kab. Fakfak');
INSERT INTO `kota` VALUES (344, 'Kab. Kaimana');
INSERT INTO `kota` VALUES (345, 'Kab. Manokwari');
INSERT INTO `kota` VALUES (346, 'Kab. Manokwari Selatan');
INSERT INTO `kota` VALUES (347, 'Kab. Maybrat');
INSERT INTO `kota` VALUES (348, 'Kab. Pegunungan Arfak');
INSERT INTO `kota` VALUES (349, 'Kab. Raja Ampat');
INSERT INTO `kota` VALUES (350, 'Kab. Sorong');
INSERT INTO `kota` VALUES (351, 'Kota Sorong');
INSERT INTO `kota` VALUES (352, 'Kab. Sorong Selatan');
INSERT INTO `kota` VALUES (353, 'Kab. Tambrauw');
INSERT INTO `kota` VALUES (354, 'Kab. Teluk Bintuni');
INSERT INTO `kota` VALUES (355, 'Kab. Teluk Wondama');
INSERT INTO `kota` VALUES (356, 'Kab. Bengkalis');
INSERT INTO `kota` VALUES (357, 'Kota Dumai');
INSERT INTO `kota` VALUES (358, 'Kab. Indragiri Hilir');
INSERT INTO `kota` VALUES (359, 'Kab. Indragiri Hulu');
INSERT INTO `kota` VALUES (360, 'Kab. Kampar');
INSERT INTO `kota` VALUES (361, 'Kab. Kepulauan Meranti');
INSERT INTO `kota` VALUES (362, 'Kab. Kuantan Singingi');
INSERT INTO `kota` VALUES (363, 'Kota Pekanbaru');
INSERT INTO `kota` VALUES (364, 'Kab. Pelalawan');
INSERT INTO `kota` VALUES (365, 'Kab. Rokan Hilir');
INSERT INTO `kota` VALUES (366, 'Kab. Rokan Hulu');
INSERT INTO `kota` VALUES (367, 'Kab. Siak');
INSERT INTO `kota` VALUES (368, 'Kab. Majene');
INSERT INTO `kota` VALUES (369, 'Kab. Mamasa');
INSERT INTO `kota` VALUES (370, 'Kab. Mamuju');
INSERT INTO `kota` VALUES (371, 'Kab. Mamuju Utara');
INSERT INTO `kota` VALUES (372, 'Kab. Polewali Mandar');
INSERT INTO `kota` VALUES (373, 'Kab. Bantaeng');
INSERT INTO `kota` VALUES (374, 'Kab. Barru');
INSERT INTO `kota` VALUES (375, 'Kab. Bone');
INSERT INTO `kota` VALUES (376, 'Kab. Bulukumba');
INSERT INTO `kota` VALUES (377, 'Kab. Enrekang');
INSERT INTO `kota` VALUES (378, 'Kab. Gowa');
INSERT INTO `kota` VALUES (379, 'Kab. Jeneponto');
INSERT INTO `kota` VALUES (380, 'Kab. Luwu');
INSERT INTO `kota` VALUES (381, 'Kab. Luwu Timur');
INSERT INTO `kota` VALUES (382, 'Kab. Luwu Utara');
INSERT INTO `kota` VALUES (383, 'Kota Makassar');
INSERT INTO `kota` VALUES (384, 'Kab. Maros');
INSERT INTO `kota` VALUES (385, 'Kota Palopo');
INSERT INTO `kota` VALUES (386, 'Kab. Pangkajene Kepulauan');
INSERT INTO `kota` VALUES (387, 'Kota Parepare');
INSERT INTO `kota` VALUES (388, 'Kab. Pinrang');
INSERT INTO `kota` VALUES (389, 'Kab. Selayar (Kepulauan Selayar)');
INSERT INTO `kota` VALUES (390, 'Kab. Sidenreng Rappang/Rapang');
INSERT INTO `kota` VALUES (391, 'Kab. Sinjai');
INSERT INTO `kota` VALUES (392, 'Kab. Soppeng');
INSERT INTO `kota` VALUES (393, 'Kab. Takalar');
INSERT INTO `kota` VALUES (394, 'Kab. Tana Toraja');
INSERT INTO `kota` VALUES (395, 'Kab. Toraja Utara');
INSERT INTO `kota` VALUES (396, 'Kab. Wajo');
INSERT INTO `kota` VALUES (397, 'Kab. Banggai');
INSERT INTO `kota` VALUES (398, 'Kab. Banggai Kepulauan');
INSERT INTO `kota` VALUES (399, 'Kab. Buol');
INSERT INTO `kota` VALUES (400, 'Kab. Donggala');
INSERT INTO `kota` VALUES (401, 'Kab. Morowali');
INSERT INTO `kota` VALUES (402, 'Kota Palu');
INSERT INTO `kota` VALUES (403, 'Kab. Parigi Moutong');
INSERT INTO `kota` VALUES (404, 'Kab. Poso');
INSERT INTO `kota` VALUES (405, 'Kab. Sigi');
INSERT INTO `kota` VALUES (406, 'Kab. Tojo Una-Una');
INSERT INTO `kota` VALUES (407, 'Kab. Toli-Toli');
INSERT INTO `kota` VALUES (408, 'Kota Bau-Bau');
INSERT INTO `kota` VALUES (409, 'Kab. Bombana');
INSERT INTO `kota` VALUES (410, 'Kab. Buton');
INSERT INTO `kota` VALUES (411, 'Kab. Buton Utara');
INSERT INTO `kota` VALUES (412, 'Kota Kendari');
INSERT INTO `kota` VALUES (413, 'Kab. Kolaka');
INSERT INTO `kota` VALUES (414, 'Kab. Kolaka Utara');
INSERT INTO `kota` VALUES (415, 'Kab. Konawe');
INSERT INTO `kota` VALUES (416, 'Kab. Konawe Selatan');
INSERT INTO `kota` VALUES (417, 'Kab. Konawe Utara');
INSERT INTO `kota` VALUES (418, 'Kab. Muna');
INSERT INTO `kota` VALUES (419, 'Kab. Wakatobi');
INSERT INTO `kota` VALUES (420, 'Kota Bitung');
INSERT INTO `kota` VALUES (421, 'Kab. Bolaang Mongondow (Bolmong)');
INSERT INTO `kota` VALUES (422, 'Kab. Bolaang Mongondow Selatan');
INSERT INTO `kota` VALUES (423, 'Kab. Bolaang Mongondow Timur');
INSERT INTO `kota` VALUES (424, 'Kab. Bolaang Mongondow Utara');
INSERT INTO `kota` VALUES (425, 'Kab. Kepulauan Sangihe');
INSERT INTO `kota` VALUES (426, 'Kab. Kepulauan Siau Tagulandang Biaro (Sitaro)');
INSERT INTO `kota` VALUES (427, 'Kab. Kepulauan Talaud');
INSERT INTO `kota` VALUES (428, 'Kota Kotamobagu');
INSERT INTO `kota` VALUES (429, 'Kota Manado');
INSERT INTO `kota` VALUES (430, 'Kab. Minahasa');
INSERT INTO `kota` VALUES (431, 'Kab. Minahasa Selatan');
INSERT INTO `kota` VALUES (432, 'Kab. Minahasa Tenggara');
INSERT INTO `kota` VALUES (433, 'Kab. Minahasa Utara');
INSERT INTO `kota` VALUES (434, 'Kota Tomohon');
INSERT INTO `kota` VALUES (435, 'Kab. Agam');
INSERT INTO `kota` VALUES (436, 'Kota Bukittinggi');
INSERT INTO `kota` VALUES (437, 'Kab. Dharmasraya');
INSERT INTO `kota` VALUES (438, 'Kab. Kepulauan Mentawai');
INSERT INTO `kota` VALUES (439, 'Kab. Lima Puluh Koto/Kota');
INSERT INTO `kota` VALUES (440, 'Kota Padang');
INSERT INTO `kota` VALUES (441, 'Kota Padang Panjang');
INSERT INTO `kota` VALUES (442, 'Kab. Padang Pariaman');
INSERT INTO `kota` VALUES (443, 'Kota Pariaman');
INSERT INTO `kota` VALUES (444, 'Kab. Pasaman');
INSERT INTO `kota` VALUES (445, 'Kab. Pasaman Barat');
INSERT INTO `kota` VALUES (446, 'Kota Payakumbuh');
INSERT INTO `kota` VALUES (447, 'Kab. Pesisir Selatan');
INSERT INTO `kota` VALUES (448, 'Kota Sawah Lunto');
INSERT INTO `kota` VALUES (449, 'Kab. Sijunjung (Sawah Lunto Sijunjung)');
INSERT INTO `kota` VALUES (450, 'Kab. Solok');
INSERT INTO `kota` VALUES (451, 'Kota Solok');
INSERT INTO `kota` VALUES (452, 'Kab. Solok Selatan');
INSERT INTO `kota` VALUES (453, 'Kab. Tanah Datar');
INSERT INTO `kota` VALUES (454, 'Kab. Banyuasin');
INSERT INTO `kota` VALUES (455, 'Kab. Empat Lawang');
INSERT INTO `kota` VALUES (456, 'Kab. Lahat');
INSERT INTO `kota` VALUES (457, 'Kota Lubuk Linggau');
INSERT INTO `kota` VALUES (458, 'Kab. Muara Enim');
INSERT INTO `kota` VALUES (459, 'Kab. Musi Banyuasin');
INSERT INTO `kota` VALUES (460, 'Kab. Musi Rawas');
INSERT INTO `kota` VALUES (461, 'Kab. Ogan Ilir');
INSERT INTO `kota` VALUES (462, 'Kab. Ogan Komering Ilir');
INSERT INTO `kota` VALUES (463, 'Kab. Ogan Komering Ulu');
INSERT INTO `kota` VALUES (464, 'Kab. Ogan Komering Ulu Selatan');
INSERT INTO `kota` VALUES (465, 'Kab. Ogan Komering Ulu Timur');
INSERT INTO `kota` VALUES (466, 'Kota Pagar Alam');
INSERT INTO `kota` VALUES (467, 'Kota Palembang');
INSERT INTO `kota` VALUES (468, 'Kota Prabumulih');
INSERT INTO `kota` VALUES (469, 'Kab. Asahan');
INSERT INTO `kota` VALUES (470, 'Kab. Batu Bara');
INSERT INTO `kota` VALUES (471, 'Kota Binjai');
INSERT INTO `kota` VALUES (472, 'Kab. Dairi');
INSERT INTO `kota` VALUES (473, 'Kab. Deli Serdang');
INSERT INTO `kota` VALUES (474, 'Kota Gunungsitoli');
INSERT INTO `kota` VALUES (475, 'Kab. Humbang Hasundutan');
INSERT INTO `kota` VALUES (476, 'Kab. Karo');
INSERT INTO `kota` VALUES (477, 'Kab. Labuhan Batu');
INSERT INTO `kota` VALUES (478, 'Kab. Labuhan Batu Selatan');
INSERT INTO `kota` VALUES (479, 'Kab. Labuhan Batu Utara');
INSERT INTO `kota` VALUES (480, 'Kab. Langkat');
INSERT INTO `kota` VALUES (481, 'Kab. Mandailing Natal');
INSERT INTO `kota` VALUES (482, 'Kota Medan');
INSERT INTO `kota` VALUES (483, 'Kab. Nias');
INSERT INTO `kota` VALUES (484, 'Kab. Nias Barat');
INSERT INTO `kota` VALUES (485, 'Kab. Nias Selatan');
INSERT INTO `kota` VALUES (486, 'Kab. Nias Utara');
INSERT INTO `kota` VALUES (487, 'Kab. Padang Lawas');
INSERT INTO `kota` VALUES (488, 'Kab. Padang Lawas Utara');
INSERT INTO `kota` VALUES (489, 'Kota Padang Sidempuan');
INSERT INTO `kota` VALUES (490, 'Kab. Pakpak Bharat');
INSERT INTO `kota` VALUES (491, 'Kota Pematang Siantar');
INSERT INTO `kota` VALUES (492, 'Kab. Samosir');
INSERT INTO `kota` VALUES (493, 'Kab. Serdang Bedagai');
INSERT INTO `kota` VALUES (494, 'Kota Sibolga');
INSERT INTO `kota` VALUES (495, 'Kab. Simalungun');
INSERT INTO `kota` VALUES (496, 'Kota Tanjung Balai');
INSERT INTO `kota` VALUES (497, 'Kab. Tapanuli Selatan');
INSERT INTO `kota` VALUES (498, 'Kab. Tapanuli Tengah');
INSERT INTO `kota` VALUES (499, 'Kab. Tapanuli Utara');
INSERT INTO `kota` VALUES (500, 'Kota Tebing Tinggi');
INSERT INTO `kota` VALUES (501, 'Kab. Toba Samosir');

-- ----------------------------
-- Table structure for paket
-- ----------------------------
DROP TABLE IF EXISTS `paket`;
CREATE TABLE `paket`  (
  `no` int NOT NULL AUTO_INCREMENT,
  `kode` varchar(4) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `paket` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  PRIMARY KEY (`no`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 7 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of paket
-- ----------------------------
INSERT INTO `paket` VALUES (1, 'OTKP', 'Otomatisasi & Tata Kelola Perkantoran');
INSERT INTO `paket` VALUES (2, 'AKL', 'Akuntansi & Keuangan Lembaga');
INSERT INTO `paket` VALUES (3, 'BDP', 'Bisnis Daring & Pemasaran');
INSERT INTO `paket` VALUES (4, 'RPL', 'Rekayasa Perangkat Lunak');
INSERT INTO `paket` VALUES (5, 'TBSM', 'Teknik & Bisnis Sepeda Motor');
INSERT INTO `paket` VALUES (6, 'MM', 'Multimedia');

-- ----------------------------
-- Table structure for pekerjaan
-- ----------------------------
DROP TABLE IF EXISTS `pekerjaan`;
CREATE TABLE `pekerjaan`  (
  `no` int NOT NULL AUTO_INCREMENT,
  `pekerjaan` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  PRIMARY KEY (`no`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 89 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of pekerjaan
-- ----------------------------
INSERT INTO `pekerjaan` VALUES (2, 'Anggota BPK');
INSERT INTO `pekerjaan` VALUES (1, 'Akuntan');
INSERT INTO `pekerjaan` VALUES (3, 'Anggota DPD');
INSERT INTO `pekerjaan` VALUES (4, 'Anggota DPRD Kabupaten / Kota');
INSERT INTO `pekerjaan` VALUES (5, 'Anggota DPRD Propinsi');
INSERT INTO `pekerjaan` VALUES (6, 'Anggota DPR-RI');
INSERT INTO `pekerjaan` VALUES (7, 'Anggota Kabinet / Kementerian');
INSERT INTO `pekerjaan` VALUES (8, 'Anggota Mahkamah Konstitusi');
INSERT INTO `pekerjaan` VALUES (9, 'Apoteker');
INSERT INTO `pekerjaan` VALUES (10, 'Arsitek');
INSERT INTO `pekerjaan` VALUES (11, 'Belum / Tidak Bekerja');
INSERT INTO `pekerjaan` VALUES (12, 'Biarawati');
INSERT INTO `pekerjaan` VALUES (13, 'Bidan');
INSERT INTO `pekerjaan` VALUES (14, 'Bupati');
INSERT INTO `pekerjaan` VALUES (15, 'Buruh Harian Lepas');
INSERT INTO `pekerjaan` VALUES (16, 'Buruh Nelayan / Perikanan');
INSERT INTO `pekerjaan` VALUES (17, 'Buruh Peternakan');
INSERT INTO `pekerjaan` VALUES (18, 'Buruh Tani / Perkebunan');
INSERT INTO `pekerjaan` VALUES (19, 'Dokter');
INSERT INTO `pekerjaan` VALUES (20, 'Dosen');
INSERT INTO `pekerjaan` VALUES (21, 'Duta Besar');
INSERT INTO `pekerjaan` VALUES (22, 'Gubernur');
INSERT INTO `pekerjaan` VALUES (23, 'Guru');
INSERT INTO `pekerjaan` VALUES (24, 'Imam Masjid');
INSERT INTO `pekerjaan` VALUES (25, 'Industri');
INSERT INTO `pekerjaan` VALUES (26, 'Juru Masak');
INSERT INTO `pekerjaan` VALUES (27, 'Karyawan BUMD');
INSERT INTO `pekerjaan` VALUES (28, 'Karyawan BUMN');
INSERT INTO `pekerjaan` VALUES (29, 'Karyawan Honorer');
INSERT INTO `pekerjaan` VALUES (30, 'Karyawan Swasta');
INSERT INTO `pekerjaan` VALUES (31, 'Kepala Desa');
INSERT INTO `pekerjaan` VALUES (32, 'Kepolisian RI');
INSERT INTO `pekerjaan` VALUES (33, 'Konstruksi');
INSERT INTO `pekerjaan` VALUES (34, 'Konsultan');
INSERT INTO `pekerjaan` VALUES (35, 'Mekanik');
INSERT INTO `pekerjaan` VALUES (36, 'Mengurus Rumah Tangga');
INSERT INTO `pekerjaan` VALUES (37, 'Nelayan / Perikanan');
INSERT INTO `pekerjaan` VALUES (38, 'Notaris');
INSERT INTO `pekerjaan` VALUES (39, 'Paraji');
INSERT INTO `pekerjaan` VALUES (40, 'Paranormal');
INSERT INTO `pekerjaan` VALUES (41, 'Pastur');
INSERT INTO `pekerjaan` VALUES (42, 'Pedagang');
INSERT INTO `pekerjaan` VALUES (43, 'Pegawai Negeri Sipil');
INSERT INTO `pekerjaan` VALUES (44, 'Pelajar / Mahasiswa');
INSERT INTO `pekerjaan` VALUES (45, 'Pelaut');
INSERT INTO `pekerjaan` VALUES (46, 'Pembantu Rumah Tangga');
INSERT INTO `pekerjaan` VALUES (47, 'Penata Busana');
INSERT INTO `pekerjaan` VALUES (48, 'Penata Rambut');
INSERT INTO `pekerjaan` VALUES (49, 'Penata Rias');
INSERT INTO `pekerjaan` VALUES (50, 'Pendeta');
INSERT INTO `pekerjaan` VALUES (51, 'Peneliti');
INSERT INTO `pekerjaan` VALUES (52, 'Pengacara');
INSERT INTO `pekerjaan` VALUES (53, 'Pensiunan');
INSERT INTO `pekerjaan` VALUES (54, 'Penterjemah');
INSERT INTO `pekerjaan` VALUES (55, 'Penyiar Radio');
INSERT INTO `pekerjaan` VALUES (56, 'Penyiar Televisi');
INSERT INTO `pekerjaan` VALUES (57, 'Perancang Busana');
INSERT INTO `pekerjaan` VALUES (58, 'Perangkat Desa');
INSERT INTO `pekerjaan` VALUES (59, 'Perawat');
INSERT INTO `pekerjaan` VALUES (60, 'Perdagangan');
INSERT INTO `pekerjaan` VALUES (61, 'Petani / Pekebun');
INSERT INTO `pekerjaan` VALUES (62, 'Peternak');
INSERT INTO `pekerjaan` VALUES (63, 'Pialang');
INSERT INTO `pekerjaan` VALUES (64, 'Pilot');
INSERT INTO `pekerjaan` VALUES (65, 'Presiden');
INSERT INTO `pekerjaan` VALUES (66, 'Promotor Acara');
INSERT INTO `pekerjaan` VALUES (67, 'Psikiater / Psikolog');
INSERT INTO `pekerjaan` VALUES (68, 'Seniman');
INSERT INTO `pekerjaan` VALUES (69, 'Sopir');
INSERT INTO `pekerjaan` VALUES (70, 'Tabib');
INSERT INTO `pekerjaan` VALUES (71, 'Tentara Nasional Indonesia');
INSERT INTO `pekerjaan` VALUES (72, 'Transportasi');
INSERT INTO `pekerjaan` VALUES (73, 'Tukang Batu');
INSERT INTO `pekerjaan` VALUES (74, 'Tukang Cukur');
INSERT INTO `pekerjaan` VALUES (75, 'Tukang Gigi');
INSERT INTO `pekerjaan` VALUES (76, 'Tukang Jahit');
INSERT INTO `pekerjaan` VALUES (77, 'Tukang Kayu');
INSERT INTO `pekerjaan` VALUES (78, 'Tukang Las / Pandai Besi');
INSERT INTO `pekerjaan` VALUES (79, 'Tukang Listrik');
INSERT INTO `pekerjaan` VALUES (80, 'Tukang Sol Sepatu');
INSERT INTO `pekerjaan` VALUES (81, 'Ustadz / Mubaligh');
INSERT INTO `pekerjaan` VALUES (82, 'Wakil Bupati');
INSERT INTO `pekerjaan` VALUES (83, 'Wakil Gubernur');
INSERT INTO `pekerjaan` VALUES (84, 'Wakil Presiden');
INSERT INTO `pekerjaan` VALUES (85, 'Wakil Walikota');
INSERT INTO `pekerjaan` VALUES (86, 'Walikota');
INSERT INTO `pekerjaan` VALUES (87, 'Wartawan');
INSERT INTO `pekerjaan` VALUES (88, 'Wiraswasta');

-- ----------------------------
-- Table structure for reg_siswa
-- ----------------------------
DROP TABLE IF EXISTS `reg_siswa`;
CREATE TABLE `reg_siswa`  (
  `no_pendaftaran` int NOT NULL,
  `no_du` int NOT NULL,
  `tgl_du` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `paket_keahlian` varchar(10) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `uang` varchar(10) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `petugas` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `nominal` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `kembalian` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`no_pendaftaran`) USING BTREE
) ENGINE = MyISAM CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of reg_siswa
-- ----------------------------
INSERT INTO `reg_siswa` VALUES (1, 1, '2022-11-17', 'RPL', '2215000', 'MUHAMMAD AFIF', '10000000', '7785000');

-- ----------------------------
-- Table structure for registrasi
-- ----------------------------
DROP TABLE IF EXISTS `registrasi`;
CREATE TABLE `registrasi`  (
  `no` int NOT NULL AUTO_INCREMENT,
  `jenis` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `uang` int NOT NULL,
  `terbilang` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  PRIMARY KEY (`no`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 9 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of registrasi
-- ----------------------------

-- ----------------------------
-- Table structure for siswa_thn_lalu
-- ----------------------------
DROP TABLE IF EXISTS `siswa_thn_lalu`;
CREATE TABLE `siswa_thn_lalu`  (
  `no` int NOT NULL AUTO_INCREMENT,
  `NIS` varchar(12) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `nama` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `gender` varchar(1) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `tmp_lahir` varchar(25) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `tgl_lahir` varchar(25) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `agama` varchar(10) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `alamat` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `desa` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `kecamatan` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `kota` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `telp` varchar(12) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `asalsekolah` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `nm_ayah` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `nm_ibu` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `pekerjaan` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `kelas` varchar(12) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  PRIMARY KEY (`no`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 2 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of siswa_thn_lalu
-- ----------------------------

-- ----------------------------
-- Table structure for titipan
-- ----------------------------
DROP TABLE IF EXISTS `titipan`;
CREATE TABLE `titipan`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `no_pendaftaran` int NULL DEFAULT NULL,
  `kode_paket` varchar(225) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `nominal` int NULL DEFAULT NULL,
  `created_at` datetime NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 5 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of titipan
-- ----------------------------
INSERT INTO `titipan` VALUES (1, 1, 'RPL', 100000, '0000-00-00 00:00:00');
INSERT INTO `titipan` VALUES (4, 2, 'MM', 200000, '0000-00-00 00:00:00');

-- ----------------------------
-- Table structure for user
-- ----------------------------
DROP TABLE IF EXISTS `user`;
CREATE TABLE `user`  (
  `username` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `password` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `status` varchar(15) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  PRIMARY KEY (`username`) USING BTREE
) ENGINE = MyISAM CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of user
-- ----------------------------
INSERT INTO `user` VALUES ('TRI SUWARSO', '13bb7cea8a5364f9e8cc2d1c8c3e6e29308aba63', 'admin');
INSERT INTO `user` VALUES ('IKA SRI WAHYUNINGRUM', 'd22aafadd76376ec45eba13d3da4d903bf50213e', 'admin');
INSERT INTO `user` VALUES ('MUHAMMAD AFIF', 'd033e22ae348aeb5660fc2140aec35850c4da997', 'admin');
INSERT INTO `user` VALUES ('Dini Eka Livia', '3340a63f38fe48f5b02e5c7fd567c6b5acb44592', 'admin');
INSERT INTO `user` VALUES ('SAIFUL ANWAR', '369d7bd7d2d097e1029d5bb3345ce8e4a8a382c1', 'super_admin');

-- ----------------------------
-- View structure for du_v
-- ----------------------------
DROP VIEW IF EXISTS `du_v`;
CREATE ALGORITHM = UNDEFINED SQL SECURITY DEFINER VIEW `du_v` AS SELECT `reg_siswa`.`no_pendaftaran` AS `no_pendaftaran`, `reg_siswa`.`no_du` AS `no_du`, `reg_siswa`.`tgl_du` AS `tgl_du`, `reg_siswa`.`paket_keahlian` AS `paket_keahlian`, `reg_siswa`.`uang` AS `uang`, `reg_siswa`.`petugas` AS `petugas`, `calon`.`gender` AS `gender` FROM (`reg_siswa` join `calon` on(`reg_siswa`.`no_pendaftaran` = `calon`.`no_pendaftaran`)) ;

-- ----------------------------
-- View structure for reg_siswa_v
-- ----------------------------
DROP VIEW IF EXISTS `reg_siswa_v`;
CREATE ALGORITHM = UNDEFINED SQL SECURITY DEFINER VIEW `reg_siswa_v` AS SELECT
	calon.asalsekolah, 
	calon.no_hp_siswa, 
	reg_siswa.*, 
	calon.tgl_daftar, 
	calon.tgl_bayar, 
	calon.gender, 
	calon.tmp_lahir, 
	calon.tgl_lahir, 
	calon.agama, 
	calon.alamat, 
	calon.desa, 
	calon.kecamatan, 
	calon.kota, 
	calon.no_hp_wali, 
	calon.nm_ayah, 
	calon.nm_ibu, 
	calon.pekerjaan, 
	calon.nama
FROM
	reg_siswa
	INNER JOIN
	calon
	ON 
		reg_siswa.no_pendaftaran = calon.no_pendaftaran ;

-- ----------------------------
-- View structure for v_titipan
-- ----------------------------
DROP VIEW IF EXISTS `v_titipan`;
CREATE ALGORITHM = UNDEFINED SQL SECURITY DEFINER VIEW `v_titipan` AS SELECT
	titipan.*, 
	calon.nama, 
	paket.paket AS nama_jurusan, 
	calon.prioritas1, 
	calon.prioritas2, 
	calon.prioritas3, 
	calon.gender
FROM
	titipan
	INNER JOIN
	calon
	ON 
		titipan.no_pendaftaran = calon.no_pendaftaran
	INNER JOIN
	paket
	ON 
		titipan.kode_paket = paket.kode ;

SET FOREIGN_KEY_CHECKS = 1;
