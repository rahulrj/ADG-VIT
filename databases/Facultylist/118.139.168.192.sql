-- phpMyAdmin SQL Dump
-- version 2.11.11.3
-- http://www.phpmyadmin.net
--
-- Host: 118.139.168.192
-- Generation Time: Jul 27, 2013 at 10:55 AM
-- Server version: 5.0.96
-- PHP Version: 5.1.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `Facultylist`
--
CREATE DATABASE `Facultylist` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `Facultylist`;

-- --------------------------------------------------------

--
-- Table structure for table `Faculties`
--

CREATE TABLE `Faculties` (
  `sno` varchar(10) NOT NULL,
  `gen` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `sex` varchar(10) NOT NULL,
  `des` varchar(100) NOT NULL,
  `room` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Faculties`
--

INSERT INTO `Faculties` VALUES('1', 'Dr.', 'Margret Anouncia S.', 'F', 'Professor & Director', '321-SJT');
INSERT INTO `Faculties` VALUES('2', 'Dr.', 'Balakrushna Tripathy', 'M', 'Senior Professor', '623TT');
INSERT INTO `Faculties` VALUES('3', 'Dr.', 'Iyengar N.Ch.S.N.', 'M', 'Senior Professor', 'Library');
INSERT INTO `Faculties` VALUES('4', 'Dr.', 'Vaideeswaran J.', 'M', 'Senior Professor', '101E-SJTAnnexe');
INSERT INTO `Faculties` VALUES('5', 'Dr.', 'Arunkumar T.', 'M', 'Professor', '201-ALM');
INSERT INTO `Faculties` VALUES('6', 'Dr.', 'Chandra Mouli P.V.S.S.R.', 'M', 'Professor', '323D-SJT');
INSERT INTO `Faculties` VALUES('7', 'Dr.', 'Debi Prasanna Acharjya', 'M', 'Professor', '201A-SJT Annexe');
INSERT INTO `Faculties` VALUES('8', 'Dr.', 'Ilango P.', 'M', 'Professor', '101F-SJTAnnexe');
INSERT INTO `Faculties` VALUES('9', 'Dr.', 'Jaisankar N.', 'M', 'Professor', '323C-SJT');
INSERT INTO `Faculties` VALUES('10', 'Prof.', 'Kalyanaraman P.', 'M', 'Professor', '101H-SJTAnnexe');
INSERT INTO `Faculties` VALUES('11', 'Dr.', 'Lakshmanan K', 'M', 'Professor', '323F-SJT');
INSERT INTO `Faculties` VALUES('12', 'Dr.', 'Venkata Krishna P.', 'M', 'Professor', '201H-SJTAnnexe');
INSERT INTO `Faculties` VALUES('13', 'Dr.', 'Anand M.', 'M', 'Asso. Professor', '323E-SJT');
INSERT INTO `Faculties` VALUES('14', 'Prof.', 'Harsh Arora', 'M', 'Asso. Professor', '111-A35SJT');
INSERT INTO `Faculties` VALUES('15', 'Dr.', 'Jayanthi M.K.', 'F', 'Asso. Professor', '213-A07SJT');
INSERT INTO `Faculties` VALUES('16', 'Dr.', 'Madhu Viswanatham V.', 'M', 'Asso. Professor', '323A-SJT');
INSERT INTO `Faculties` VALUES('17', 'Prof.', 'Manjula R', 'F', 'Asso. Professor', '313-A32SJT');
INSERT INTO `Faculties` VALUES('18', 'Dr.', 'Prabu S.', 'M', 'Asso. Professor', '511-A06SJT');
INSERT INTO `Faculties` VALUES('19', 'Dr.', 'Rajasekhara Babu M.', 'M', 'Asso. Professor', '411-A06SJT');
INSERT INTO `Faculties` VALUES('20', 'Prof.', 'Ramesh Babu K.', 'M', 'Asso. Professor', '510-A11SJT');
INSERT INTO `Faculties` VALUES('21', 'Dr.', 'Saleem Durai M.A.', 'M', 'Asso. Professor', '323G-SJT');
INSERT INTO `Faculties` VALUES('22', 'Prof.', 'Santhi V.', 'F', 'Asso. Professor', '411-A26SJT');
INSERT INTO `Faculties` VALUES('23', 'Prof.', 'Srimathi C.', 'F', 'Asso. Professor', '323B-SJT');
INSERT INTO `Faculties` VALUES('24', 'Prof.', 'Anupriya E.', 'F', 'Asst. Prof. Sel. Grade', '');
INSERT INTO `Faculties` VALUES('25', 'Prof.', 'Balasubramanian V.', 'M', 'Asst. Prof. Sel. Grade', '510-A29SJT');
INSERT INTO `Faculties` VALUES('26', 'Prof.', 'Govinda K.', 'M', 'Asst. Prof. Sel. Grade', '210-A07SJT');
INSERT INTO `Faculties` VALUES('27', 'Prof.', 'Hari Seetha  ', 'F', 'Asst. Prof. Sel. Grade', '413-A29SJT');
INSERT INTO `Faculties` VALUES('28', 'Prof.', 'Karthikeyan T.', 'M', 'Asst. Prof. Sel. Grade', '510-A32SJT');
INSERT INTO `Faculties` VALUES('29', 'Prof.', 'Kumar K.', 'M', 'Asst. Prof. Sel. Grade', '313-A22SJT');
INSERT INTO `Faculties` VALUES('30', 'Prof.', 'Malaserene I.', 'F', 'Asst. Prof. Sel. Grade', '511-A27SJT');
INSERT INTO `Faculties` VALUES('31', 'Prof.', 'Parveen Sulthana H.', 'F', 'Asst. Prof. Sel. Grade', '510-A05SJT');
INSERT INTO `Faculties` VALUES('32', 'Prof.', 'Saravanaguru RA. K.', 'M', 'Asst. Prof. Sel. Grade', '510-A31SJT');
INSERT INTO `Faculties` VALUES('33', 'Prof.', 'Saritha V.', 'F', 'Asst. Prof. Sel. Grade', '511-A24SJT');
INSERT INTO `Faculties` VALUES('34', 'Prof.', 'Senthil Kumar R.', 'M', 'Asst. Prof. Sel. Grade', '413-A28SJT');
INSERT INTO `Faculties` VALUES('35', 'Prof.', 'Swarnalatha P.', 'F', 'Asst. Prof. Sel. Grade', '510-A34SJT');
INSERT INTO `Faculties` VALUES('36', 'Prof.', 'Venkatesan M.', 'M', 'Asst. Prof. Sel. Grade', '413-A19SJT');
INSERT INTO `Faculties` VALUES('37', 'Prof.', 'Vijayasherly V.', 'F', 'Asst. Prof. Sel. Grade', '411-A12SJT');
INSERT INTO `Faculties` VALUES('38', 'Prof.', 'Abdul Gaffar H.', 'M', 'Asst. Prof. Senior', '413-A01SJT');
INSERT INTO `Faculties` VALUES('39', 'Prof.', 'Aju D.', 'M', 'Asst. Prof. Senior', '413-A33SJT');
INSERT INTO `Faculties` VALUES('40', 'Prof.', 'Ananda Kumar S.', 'M', 'Asst. Prof. Senior', '310-A31SJT');
INSERT INTO `Faculties` VALUES('41', 'Prof.', 'Anisha M. Lal', 'F', 'Asst. Prof. Senior', '411-A27SJT');
INSERT INTO `Faculties` VALUES('42', 'Prof.', 'Annapurna J.', 'F', 'Asst. Prof. Senior', '116-A30SJT');
INSERT INTO `Faculties` VALUES('43', 'Prof.', 'Anthoniraj A.', 'M', 'Asst. Prof. Senior', '411-A15SJT');
INSERT INTO `Faculties` VALUES('44', 'Prof.', 'Anuradha J.', 'F', 'Asst. Prof. Senior', '213-A21SJT');
INSERT INTO `Faculties` VALUES('45', 'Prof.', 'Arunkumar G.', 'M', 'Asst. Prof. Senior', '510-A34SJT');
INSERT INTO `Faculties` VALUES('46', 'Prof.', 'Arunkumar S.', 'M', 'Asst. Prof. Senior', '413-A02SJT');
INSERT INTO `Faculties` VALUES('47', 'Prof.', 'Boominathan P.', 'M', 'Asst. Prof. Senior', '310-A30SJT');
INSERT INTO `Faculties` VALUES('48', 'Prof.', 'Ganesh Gopal D.', 'M', 'Asst. Prof. Senior', '213-A12SJT');
INSERT INTO `Faculties` VALUES('49', 'Prof.', 'Gayathri P.', 'F', 'Asst. Prof. Senior', '310-A10SJT');
INSERT INTO `Faculties` VALUES('50', 'Prof.', 'Geetha Mary A.', 'F', 'Asst. Prof. Senior', '213-A33SJT');
INSERT INTO `Faculties` VALUES('51', 'Prof.', 'Jimmy Mathew', 'M', 'Asst. Prof. Senior', '313-A08SJT');
INSERT INTO `Faculties` VALUES('52', 'Prof.', 'Lydia Jane G.', 'F', 'Asst. Prof. Senior', '510-A17SJT');
INSERT INTO `Faculties` VALUES('53', 'Prof.', 'Manikandan K.', 'M', 'Asst. Prof. Senior', '411-A29SJT');
INSERT INTO `Faculties` VALUES('54', 'Prof.', 'Manoov R.', 'M', 'Asst. Prof. Senior', '313-A21SJT');
INSERT INTO `Faculties` VALUES('55', 'Prof.', 'Marimuthu K.', 'M', 'Asst. Prof. Senior', '313-A29SJT');
INSERT INTO `Faculties` VALUES('56', 'Prof.', 'Meenakshi S.P.', 'F', 'Asst. Prof. Senior', '');
INSERT INTO `Faculties` VALUES('57', 'Prof.', 'Mohan K.', 'M', 'Asst. Prof. Senior', '411-A13SJT');
INSERT INTO `Faculties` VALUES('58', 'Prof.', 'Muhammad Rukunuddin Ghalib', 'M', 'Asst. Prof. Senior', '411-A32SJT');
INSERT INTO `Faculties` VALUES('59', 'Prof.', 'Mythili T.', 'F', 'Asst. Prof. Senior', '511-A14SJT');
INSERT INTO `Faculties` VALUES('60', 'Prof.', 'Nagaraju M.', 'M', 'Asst. Prof. Senior', '310-A01SJT');
INSERT INTO `Faculties` VALUES('61', 'Prof.', 'Narayanamoorthy M.', 'M', 'Asst. Prof. Senior', '510-A33SJT');
INSERT INTO `Faculties` VALUES('62', 'Prof.', 'Natarajan P.', 'M', 'Asst. Prof. Senior', '413-A20SJT');
INSERT INTO `Faculties` VALUES('63', 'Prof.', 'Raghuveer V.R.', 'M', 'Asst. Prof. Senior', '413-A34SJT');
INSERT INTO `Faculties` VALUES('64', 'Prof.', 'Rajeshkannan R.', 'M', 'Asst. Prof. Senior', '411-A01SJT');
INSERT INTO `Faculties` VALUES('65', 'Prof.', 'Rajkumar R.', 'M', 'Asst. Prof. Senior', '510-A28SJT');
INSERT INTO `Faculties` VALUES('66', 'Prof.', 'Ramanathan L.', 'M', 'Asst. Prof. Senior', '413-A24SJT');
INSERT INTO `Faculties` VALUES('67', 'Prof.', 'Rishin Haldar', 'M', 'Asst. Prof. Senior', '310-A04SJT');
INSERT INTO `Faculties` VALUES('68', 'Prof.', 'Saira Banu J.', 'F', 'Asst. Prof. Senior', '313-A28SJT');
INSERT INTO `Faculties` VALUES('69', 'Prof.', 'Santhi H.', 'F', 'Asst. Prof. Senior', '310-A11SJT');
INSERT INTO `Faculties` VALUES('70', 'Prof.', 'Sasikumar G.', 'M', 'Asst. Prof. Senior', '310-A08SJT');
INSERT INTO `Faculties` VALUES('71', 'Prof.', 'Satish C.J.', 'M', 'Asst. Prof. Senior', '116-A07SJT');
INSERT INTO `Faculties` VALUES('72', 'Prof.', 'Senthil J.', 'M', 'Asst. Prof. Senior', '510-A06SJT');
INSERT INTO `Faculties` VALUES('73', 'Prof.', 'Shalini L.', 'F', 'Asst. Prof. Senior', '411-A11SJT');
INSERT INTO `Faculties` VALUES('74', 'Prof.', 'Siva Kumar P.', 'M', 'Asst. Prof. Senior', '411-A10SJT');
INSERT INTO `Faculties` VALUES('75', 'Prof.', 'Sivanesan S.', 'M', 'Asst. Prof. Senior', '413-A03SJT');
INSERT INTO `Faculties` VALUES('76', 'Prof.', 'Suresh Kumar N.', 'M', 'Asst. Prof. Senior', '413-A04SJT');
INSERT INTO `Faculties` VALUES('77', 'Prof.', 'Swathi J.N.', 'F', 'Asst. Prof. Senior', '411-A30SJT');
INSERT INTO `Faculties` VALUES('78', 'Prof.', 'Thendral P.', 'M', 'Asst. Prof. Senior', '511-A26SJT');
INSERT INTO `Faculties` VALUES('79', 'Prof.', 'Umadevi K.S.', 'F', 'Asst. Prof. Senior', '413-A26SJT');
INSERT INTO `Faculties` VALUES('80', 'Prof.', 'Vairamuthu S.', 'M', 'Asst. Prof. Senior', '310-A29SJT');
INSERT INTO `Faculties` VALUES('81', 'Prof.', 'Vijayakumar K.', 'M', 'Asst. Prof. Senior', '411-A09SJT');
INSERT INTO `Faculties` VALUES('82', 'Prof.', 'Vijayarajan V.', 'M', 'Asst. Prof. Senior', '411-A16SJT');
INSERT INTO `Faculties` VALUES('83', 'Prof.', 'Yokesh Babu S.', 'M', 'Asst. Prof. Senior', '510-A26SJT');
INSERT INTO `Faculties` VALUES('84', 'Prof.', 'Ajanthaa Lakkshmanan', 'F', 'Asst. Professor', '510-A22SJT');
INSERT INTO `Faculties` VALUES('85', 'Prof.', 'Akila Victor', 'F', 'Asst. Professor', '510-A30SJT');
INSERT INTO `Faculties` VALUES('86', 'Prof.', 'Anbarasi M.', 'F', 'Asst. Professor', '510-A10SJT');
INSERT INTO `Faculties` VALUES('87', 'Prof.', 'Bhagyavathi M.', 'F', 'Asst. Professor', '210-A26SJT');
INSERT INTO `Faculties` VALUES('88', 'Prof.', 'Bhulakshmi Bonthu', 'F', 'Asst. Professor', '210-A27SJT');
INSERT INTO `Faculties` VALUES('89', 'Prof.', 'Elavarasi M.', 'F', 'Asst. Professor', '210-A02SJT');
INSERT INTO `Faculties` VALUES('90', 'Prof.', 'Gladys Gnana Kiruba B.', 'F', 'Asst. Professor', '511-A21SJT');
INSERT INTO `Faculties` VALUES('91', 'Prof.', 'Gopinath M.P.', 'M', 'Asst. Professor', '511-A17SJT');
INSERT INTO `Faculties` VALUES('92', 'Prof.', 'Indumathy K.', 'F', 'Asst. Professor', '411-A03SJT');
INSERT INTO `Faculties` VALUES('93', 'Prof.', 'Jabanjalin Hilda J.', 'F', 'Asst. Professor', '411-A14SJT');
INSERT INTO `Faculties` VALUES('94', 'Prof.', 'Kalaivani D.', 'F', 'Asst. Professor', '210-A28SJT');
INSERT INTO `Faculties` VALUES('95', 'Prof.', 'Kannadasan R.', 'M', 'Asst. Professor', '411-A17SJT');
INSERT INTO `Faculties` VALUES('96', 'Prof.', 'Kaushik S.', 'M', 'Asst. Professor', '310-A07SJT');
INSERT INTO `Faculties` VALUES('97', 'Prof.', 'Krishnamoorthy A.', 'M', 'Asst. Professor', '411-A03SJT');
INSERT INTO `Faculties` VALUES('98', 'Prof.', 'Lavanya K.', 'F', 'Asst. Professor', '313-A38SJT');
INSERT INTO `Faculties` VALUES('99', 'Prof.', 'Lijo V.P.', 'M', 'Asst. Professor', '510-A02SJT');
INSERT INTO `Faculties` VALUES('100', 'Prof.', 'Mohanasundaram R.', 'M', 'Asst. Professor', '313-A07SJT');
INSERT INTO `Faculties` VALUES('101', 'Prof.', 'Murali S.', 'M', 'Asst. Professor', '413-A32SJT');
INSERT INTO `Faculties` VALUES('102', 'Prof.', 'Nalini N.', 'F', 'Asst. Professor', '413-A31SJT');
INSERT INTO `Faculties` VALUES('103', 'Prof.', 'Naresh K.', 'M', 'Asst. Professor', '411-A05SJT');
INSERT INTO `Faculties` VALUES('104', 'Prof.', 'Naveen Kumar N.', 'M', 'Asst. Professor', '413-A21SJT');
INSERT INTO `Faculties` VALUES('105', 'Prof.', 'Prabakaran N.', 'M', 'Asst. Professor', '411-A22SJT');
INSERT INTO `Faculties` VALUES('106', 'Prof.', 'Priya G.', 'F', 'Asst. Professor', '413-A25SJT');
INSERT INTO `Faculties` VALUES('107', 'Prof.', 'Rajkumar S.', 'M', 'Asst. Professor', '310-A09SJT');
INSERT INTO `Faculties` VALUES('108', 'Prof.', 'Ramani S.', 'M', 'Asst. Professor', '413-A22SJT');
INSERT INTO `Faculties` VALUES('109', 'Prof.', 'Sanjiban Sekhar Roy', 'M', 'Asst. Professor', '116-A29SJT');
INSERT INTO `Faculties` VALUES('110', 'Prof.', 'Santhosh Kumar Baratam', 'M', 'Asst. Professor', '413-A23SJT');
INSERT INTO `Faculties` VALUES('111', 'Prof.', 'Sathyaraj R.', 'M', 'Asst. Professor', '313-A02SJT');
INSERT INTO `Faculties` VALUES('112', 'Prof.', 'Selvakumar K.', 'M', 'Asst. Professor', '');
INSERT INTO `Faculties` VALUES('113', 'Prof.', 'Sendhil Kumar K.S.', 'M', 'Asst. Professor', '510-A04SJT');
INSERT INTO `Faculties` VALUES('114', 'Prof.', 'Senthilnathan P.', 'M', 'Asst. Professor', '313-A24SJT');
INSERT INTO `Faculties` VALUES('115', 'Prof.', 'Sharmila Banu K.', 'F', 'Asst. Professor', '116-A27SJT');
INSERT INTO `Faculties` VALUES('116', 'Prof.', 'Siva Shanmugam G.', 'M', 'Asst. Professor', '411-A21SJT');
INSERT INTO `Faculties` VALUES('117', 'Prof.', 'Srivani A.', 'F', 'Asst. Professor', '511-A16SJT');
INSERT INTO `Faculties` VALUES('118', 'Prof.', 'Tamizharasi T.', 'F', 'Asst. Professor', '510-A21SJT');
INSERT INTO `Faculties` VALUES('119', 'Prof.', 'Ushus Elizebeth Zachariah', 'F', 'Asst. Professor', '111-A07SJT');
INSERT INTO `Faculties` VALUES('121', 'Prof.', 'Jaya Subalakshmi R.', 'F', 'Asst. Prof. Junior', '510-A24SJT');
INSERT INTO `Faculties` VALUES('122', 'Prof.', 'Kauser Ahmed P.', 'M', 'Asst. Prof. Junior', '310-A21SJT');
--
-- Database: `information_schema`
--
CREATE DATABASE `information_schema` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `information_schema`;

-- --------------------------------------------------------

--
-- Table structure for table `CHARACTER_SETS`
--

CREATE TEMPORARY TABLE `CHARACTER_SETS` (
  `CHARACTER_SET_NAME` varchar(64) NOT NULL default '',
  `DEFAULT_COLLATE_NAME` varchar(64) NOT NULL default '',
  `DESCRIPTION` varchar(60) NOT NULL default '',
  `MAXLEN` bigint(3) NOT NULL default '0'
) ENGINE=MEMORY DEFAULT CHARSET=utf8;

--
-- Dumping data for table `CHARACTER_SETS`
--

INSERT INTO `CHARACTER_SETS` VALUES('big5', 'big5_chinese_ci', 'Big5 Traditional Chinese', 2);
INSERT INTO `CHARACTER_SETS` VALUES('dec8', 'dec8_swedish_ci', 'DEC West European', 1);
INSERT INTO `CHARACTER_SETS` VALUES('cp850', 'cp850_general_ci', 'DOS West European', 1);
INSERT INTO `CHARACTER_SETS` VALUES('hp8', 'hp8_english_ci', 'HP West European', 1);
INSERT INTO `CHARACTER_SETS` VALUES('koi8r', 'koi8r_general_ci', 'KOI8-R Relcom Russian', 1);
INSERT INTO `CHARACTER_SETS` VALUES('latin1', 'latin1_swedish_ci', 'cp1252 West European', 1);
INSERT INTO `CHARACTER_SETS` VALUES('latin2', 'latin2_general_ci', 'ISO 8859-2 Central European', 1);
INSERT INTO `CHARACTER_SETS` VALUES('swe7', 'swe7_swedish_ci', '7bit Swedish', 1);
INSERT INTO `CHARACTER_SETS` VALUES('ascii', 'ascii_general_ci', 'US ASCII', 1);
INSERT INTO `CHARACTER_SETS` VALUES('ujis', 'ujis_japanese_ci', 'EUC-JP Japanese', 3);
INSERT INTO `CHARACTER_SETS` VALUES('sjis', 'sjis_japanese_ci', 'Shift-JIS Japanese', 2);
INSERT INTO `CHARACTER_SETS` VALUES('hebrew', 'hebrew_general_ci', 'ISO 8859-8 Hebrew', 1);
INSERT INTO `CHARACTER_SETS` VALUES('tis620', 'tis620_thai_ci', 'TIS620 Thai', 1);
INSERT INTO `CHARACTER_SETS` VALUES('euckr', 'euckr_korean_ci', 'EUC-KR Korean', 2);
INSERT INTO `CHARACTER_SETS` VALUES('koi8u', 'koi8u_general_ci', 'KOI8-U Ukrainian', 1);
INSERT INTO `CHARACTER_SETS` VALUES('gb2312', 'gb2312_chinese_ci', 'GB2312 Simplified Chinese', 2);
INSERT INTO `CHARACTER_SETS` VALUES('greek', 'greek_general_ci', 'ISO 8859-7 Greek', 1);
INSERT INTO `CHARACTER_SETS` VALUES('cp1250', 'cp1250_general_ci', 'Windows Central European', 1);
INSERT INTO `CHARACTER_SETS` VALUES('gbk', 'gbk_chinese_ci', 'GBK Simplified Chinese', 2);
INSERT INTO `CHARACTER_SETS` VALUES('latin5', 'latin5_turkish_ci', 'ISO 8859-9 Turkish', 1);
INSERT INTO `CHARACTER_SETS` VALUES('armscii8', 'armscii8_general_ci', 'ARMSCII-8 Armenian', 1);
INSERT INTO `CHARACTER_SETS` VALUES('utf8', 'utf8_general_ci', 'UTF-8 Unicode', 3);
INSERT INTO `CHARACTER_SETS` VALUES('ucs2', 'ucs2_general_ci', 'UCS-2 Unicode', 2);
INSERT INTO `CHARACTER_SETS` VALUES('cp866', 'cp866_general_ci', 'DOS Russian', 1);
INSERT INTO `CHARACTER_SETS` VALUES('keybcs2', 'keybcs2_general_ci', 'DOS Kamenicky Czech-Slovak', 1);
INSERT INTO `CHARACTER_SETS` VALUES('macce', 'macce_general_ci', 'Mac Central European', 1);
INSERT INTO `CHARACTER_SETS` VALUES('macroman', 'macroman_general_ci', 'Mac West European', 1);
INSERT INTO `CHARACTER_SETS` VALUES('cp852', 'cp852_general_ci', 'DOS Central European', 1);
INSERT INTO `CHARACTER_SETS` VALUES('latin7', 'latin7_general_ci', 'ISO 8859-13 Baltic', 1);
INSERT INTO `CHARACTER_SETS` VALUES('cp1251', 'cp1251_general_ci', 'Windows Cyrillic', 1);
INSERT INTO `CHARACTER_SETS` VALUES('cp1256', 'cp1256_general_ci', 'Windows Arabic', 1);
INSERT INTO `CHARACTER_SETS` VALUES('cp1257', 'cp1257_general_ci', 'Windows Baltic', 1);
INSERT INTO `CHARACTER_SETS` VALUES('binary', 'binary', 'Binary pseudo charset', 1);
INSERT INTO `CHARACTER_SETS` VALUES('geostd8', 'geostd8_general_ci', 'GEOSTD8 Georgian', 1);
INSERT INTO `CHARACTER_SETS` VALUES('cp932', 'cp932_japanese_ci', 'SJIS for Windows Japanese', 2);
INSERT INTO `CHARACTER_SETS` VALUES('eucjpms', 'eucjpms_japanese_ci', 'UJIS for Windows Japanese', 3);

-- --------------------------------------------------------

--
-- Table structure for table `CLIENT_STATISTICS`
--

CREATE TEMPORARY TABLE `CLIENT_STATISTICS` (
  `CLIENT` varchar(64) NOT NULL default '',
  `TOTAL_CONNECTIONS` bigint(21) NOT NULL default '0',
  `CONCURRENT_CONNECTIONS` bigint(21) NOT NULL default '0',
  `CONNECTED_TIME` bigint(21) NOT NULL default '0',
  `BUSY_TIME` bigint(21) NOT NULL default '0',
  `CPU_TIME` bigint(21) NOT NULL default '0',
  `BYTES_RECEIVED` bigint(21) NOT NULL default '0',
  `BYTES_SENT` bigint(21) NOT NULL default '0',
  `BINLOG_BYTES_WRITTEN` bigint(21) NOT NULL default '0',
  `ROWS_FETCHED` bigint(21) NOT NULL default '0',
  `ROWS_UPDATED` bigint(21) NOT NULL default '0',
  `TABLE_ROWS_READ` bigint(21) NOT NULL default '0',
  `SELECT_COMMANDS` bigint(21) NOT NULL default '0',
  `UPDATE_COMMANDS` bigint(21) NOT NULL default '0',
  `OTHER_COMMANDS` bigint(21) NOT NULL default '0',
  `COMMIT_TRANSACTIONS` bigint(21) NOT NULL default '0',
  `ROLLBACK_TRANSACTIONS` bigint(21) NOT NULL default '0',
  `DENIED_CONNECTIONS` bigint(21) NOT NULL default '0',
  `LOST_CONNECTIONS` bigint(21) NOT NULL default '0',
  `ACCESS_DENIED` bigint(21) NOT NULL default '0',
  `EMPTY_QUERIES` bigint(21) NOT NULL default '0'
) ENGINE=MEMORY DEFAULT CHARSET=utf8;

--
-- Dumping data for table `CLIENT_STATISTICS`
--

-- in use (#1227 - Access denied; you need the PROCESS,SUPER privilege for this operation)

-- --------------------------------------------------------

--
-- Table structure for table `COLLATIONS`
--

CREATE TEMPORARY TABLE `COLLATIONS` (
  `COLLATION_NAME` varchar(64) NOT NULL default '',
  `CHARACTER_SET_NAME` varchar(64) NOT NULL default '',
  `ID` bigint(11) NOT NULL default '0',
  `IS_DEFAULT` varchar(3) NOT NULL default '',
  `IS_COMPILED` varchar(3) NOT NULL default '',
  `SORTLEN` bigint(3) NOT NULL default '0'
) ENGINE=MEMORY DEFAULT CHARSET=utf8;

--
-- Dumping data for table `COLLATIONS`
--

INSERT INTO `COLLATIONS` VALUES('big5_chinese_ci', 'big5', 1, 'Yes', 'Yes', 1);
INSERT INTO `COLLATIONS` VALUES('big5_bin', 'big5', 84, '', 'Yes', 1);
INSERT INTO `COLLATIONS` VALUES('dec8_swedish_ci', 'dec8', 3, 'Yes', 'Yes', 1);
INSERT INTO `COLLATIONS` VALUES('dec8_bin', 'dec8', 69, '', 'Yes', 1);
INSERT INTO `COLLATIONS` VALUES('cp850_general_ci', 'cp850', 4, 'Yes', 'Yes', 1);
INSERT INTO `COLLATIONS` VALUES('cp850_bin', 'cp850', 80, '', 'Yes', 1);
INSERT INTO `COLLATIONS` VALUES('hp8_english_ci', 'hp8', 6, 'Yes', 'Yes', 1);
INSERT INTO `COLLATIONS` VALUES('hp8_bin', 'hp8', 72, '', 'Yes', 1);
INSERT INTO `COLLATIONS` VALUES('koi8r_general_ci', 'koi8r', 7, 'Yes', 'Yes', 1);
INSERT INTO `COLLATIONS` VALUES('koi8r_bin', 'koi8r', 74, '', 'Yes', 1);
INSERT INTO `COLLATIONS` VALUES('latin1_german1_ci', 'latin1', 5, '', 'Yes', 1);
INSERT INTO `COLLATIONS` VALUES('latin1_swedish_ci', 'latin1', 8, 'Yes', 'Yes', 1);
INSERT INTO `COLLATIONS` VALUES('latin1_danish_ci', 'latin1', 15, '', 'Yes', 1);
INSERT INTO `COLLATIONS` VALUES('latin1_german2_ci', 'latin1', 31, '', 'Yes', 2);
INSERT INTO `COLLATIONS` VALUES('latin1_bin', 'latin1', 47, '', 'Yes', 1);
INSERT INTO `COLLATIONS` VALUES('latin1_general_ci', 'latin1', 48, '', 'Yes', 1);
INSERT INTO `COLLATIONS` VALUES('latin1_general_cs', 'latin1', 49, '', 'Yes', 1);
INSERT INTO `COLLATIONS` VALUES('latin1_spanish_ci', 'latin1', 94, '', 'Yes', 1);
INSERT INTO `COLLATIONS` VALUES('latin2_czech_cs', 'latin2', 2, '', 'Yes', 4);
INSERT INTO `COLLATIONS` VALUES('latin2_general_ci', 'latin2', 9, 'Yes', 'Yes', 1);
INSERT INTO `COLLATIONS` VALUES('latin2_hungarian_ci', 'latin2', 21, '', 'Yes', 1);
INSERT INTO `COLLATIONS` VALUES('latin2_croatian_ci', 'latin2', 27, '', 'Yes', 1);
INSERT INTO `COLLATIONS` VALUES('latin2_bin', 'latin2', 77, '', 'Yes', 1);
INSERT INTO `COLLATIONS` VALUES('swe7_swedish_ci', 'swe7', 10, 'Yes', 'Yes', 1);
INSERT INTO `COLLATIONS` VALUES('swe7_bin', 'swe7', 82, '', 'Yes', 1);
INSERT INTO `COLLATIONS` VALUES('ascii_general_ci', 'ascii', 11, 'Yes', 'Yes', 1);
INSERT INTO `COLLATIONS` VALUES('ascii_bin', 'ascii', 65, '', 'Yes', 1);
INSERT INTO `COLLATIONS` VALUES('ujis_japanese_ci', 'ujis', 12, 'Yes', 'Yes', 1);
INSERT INTO `COLLATIONS` VALUES('ujis_bin', 'ujis', 91, '', 'Yes', 1);
INSERT INTO `COLLATIONS` VALUES('sjis_japanese_ci', 'sjis', 13, 'Yes', 'Yes', 1);
INSERT INTO `COLLATIONS` VALUES('sjis_bin', 'sjis', 88, '', 'Yes', 1);
INSERT INTO `COLLATIONS` VALUES('hebrew_general_ci', 'hebrew', 16, 'Yes', 'Yes', 1);
INSERT INTO `COLLATIONS` VALUES('hebrew_bin', 'hebrew', 71, '', 'Yes', 1);
INSERT INTO `COLLATIONS` VALUES('tis620_thai_ci', 'tis620', 18, 'Yes', 'Yes', 4);
INSERT INTO `COLLATIONS` VALUES('tis620_bin', 'tis620', 89, '', 'Yes', 1);
INSERT INTO `COLLATIONS` VALUES('euckr_korean_ci', 'euckr', 19, 'Yes', 'Yes', 1);
INSERT INTO `COLLATIONS` VALUES('euckr_bin', 'euckr', 85, '', 'Yes', 1);
INSERT INTO `COLLATIONS` VALUES('koi8u_general_ci', 'koi8u', 22, 'Yes', 'Yes', 1);
INSERT INTO `COLLATIONS` VALUES('koi8u_bin', 'koi8u', 75, '', 'Yes', 1);
INSERT INTO `COLLATIONS` VALUES('gb2312_chinese_ci', 'gb2312', 24, 'Yes', 'Yes', 1);
INSERT INTO `COLLATIONS` VALUES('gb2312_bin', 'gb2312', 86, '', 'Yes', 1);
INSERT INTO `COLLATIONS` VALUES('greek_general_ci', 'greek', 25, 'Yes', 'Yes', 1);
INSERT INTO `COLLATIONS` VALUES('greek_bin', 'greek', 70, '', 'Yes', 1);
INSERT INTO `COLLATIONS` VALUES('cp1250_general_ci', 'cp1250', 26, 'Yes', 'Yes', 1);
INSERT INTO `COLLATIONS` VALUES('cp1250_czech_cs', 'cp1250', 34, '', 'Yes', 2);
INSERT INTO `COLLATIONS` VALUES('cp1250_croatian_ci', 'cp1250', 44, '', 'Yes', 1);
INSERT INTO `COLLATIONS` VALUES('cp1250_bin', 'cp1250', 66, '', 'Yes', 1);
INSERT INTO `COLLATIONS` VALUES('gbk_chinese_ci', 'gbk', 28, 'Yes', 'Yes', 1);
INSERT INTO `COLLATIONS` VALUES('gbk_bin', 'gbk', 87, '', 'Yes', 1);
INSERT INTO `COLLATIONS` VALUES('latin5_turkish_ci', 'latin5', 30, 'Yes', 'Yes', 1);
INSERT INTO `COLLATIONS` VALUES('latin5_bin', 'latin5', 78, '', 'Yes', 1);
INSERT INTO `COLLATIONS` VALUES('armscii8_general_ci', 'armscii8', 32, 'Yes', 'Yes', 1);
INSERT INTO `COLLATIONS` VALUES('armscii8_bin', 'armscii8', 64, '', 'Yes', 1);
INSERT INTO `COLLATIONS` VALUES('utf8_general_ci', 'utf8', 33, 'Yes', 'Yes', 1);
INSERT INTO `COLLATIONS` VALUES('utf8_bin', 'utf8', 83, '', 'Yes', 1);
INSERT INTO `COLLATIONS` VALUES('utf8_unicode_ci', 'utf8', 192, '', 'Yes', 8);
INSERT INTO `COLLATIONS` VALUES('utf8_icelandic_ci', 'utf8', 193, '', 'Yes', 8);
INSERT INTO `COLLATIONS` VALUES('utf8_latvian_ci', 'utf8', 194, '', 'Yes', 8);
INSERT INTO `COLLATIONS` VALUES('utf8_romanian_ci', 'utf8', 195, '', 'Yes', 8);
INSERT INTO `COLLATIONS` VALUES('utf8_slovenian_ci', 'utf8', 196, '', 'Yes', 8);
INSERT INTO `COLLATIONS` VALUES('utf8_polish_ci', 'utf8', 197, '', 'Yes', 8);
INSERT INTO `COLLATIONS` VALUES('utf8_estonian_ci', 'utf8', 198, '', 'Yes', 8);
INSERT INTO `COLLATIONS` VALUES('utf8_spanish_ci', 'utf8', 199, '', 'Yes', 8);
INSERT INTO `COLLATIONS` VALUES('utf8_swedish_ci', 'utf8', 200, '', 'Yes', 8);
INSERT INTO `COLLATIONS` VALUES('utf8_turkish_ci', 'utf8', 201, '', 'Yes', 8);
INSERT INTO `COLLATIONS` VALUES('utf8_czech_ci', 'utf8', 202, '', 'Yes', 8);
INSERT INTO `COLLATIONS` VALUES('utf8_danish_ci', 'utf8', 203, '', 'Yes', 8);
INSERT INTO `COLLATIONS` VALUES('utf8_lithuanian_ci', 'utf8', 204, '', 'Yes', 8);
INSERT INTO `COLLATIONS` VALUES('utf8_slovak_ci', 'utf8', 205, '', 'Yes', 8);
INSERT INTO `COLLATIONS` VALUES('utf8_spanish2_ci', 'utf8', 206, '', 'Yes', 8);
INSERT INTO `COLLATIONS` VALUES('utf8_roman_ci', 'utf8', 207, '', 'Yes', 8);
INSERT INTO `COLLATIONS` VALUES('utf8_persian_ci', 'utf8', 208, '', 'Yes', 8);
INSERT INTO `COLLATIONS` VALUES('utf8_esperanto_ci', 'utf8', 209, '', 'Yes', 8);
INSERT INTO `COLLATIONS` VALUES('utf8_hungarian_ci', 'utf8', 210, '', 'Yes', 8);
INSERT INTO `COLLATIONS` VALUES('ucs2_general_ci', 'ucs2', 35, 'Yes', 'Yes', 1);
INSERT INTO `COLLATIONS` VALUES('ucs2_bin', 'ucs2', 90, '', 'Yes', 1);
INSERT INTO `COLLATIONS` VALUES('ucs2_unicode_ci', 'ucs2', 128, '', 'Yes', 8);
INSERT INTO `COLLATIONS` VALUES('ucs2_icelandic_ci', 'ucs2', 129, '', 'Yes', 8);
INSERT INTO `COLLATIONS` VALUES('ucs2_latvian_ci', 'ucs2', 130, '', 'Yes', 8);
INSERT INTO `COLLATIONS` VALUES('ucs2_romanian_ci', 'ucs2', 131, '', 'Yes', 8);
INSERT INTO `COLLATIONS` VALUES('ucs2_slovenian_ci', 'ucs2', 132, '', 'Yes', 8);
INSERT INTO `COLLATIONS` VALUES('ucs2_polish_ci', 'ucs2', 133, '', 'Yes', 8);
INSERT INTO `COLLATIONS` VALUES('ucs2_estonian_ci', 'ucs2', 134, '', 'Yes', 8);
INSERT INTO `COLLATIONS` VALUES('ucs2_spanish_ci', 'ucs2', 135, '', 'Yes', 8);
INSERT INTO `COLLATIONS` VALUES('ucs2_swedish_ci', 'ucs2', 136, '', 'Yes', 8);
INSERT INTO `COLLATIONS` VALUES('ucs2_turkish_ci', 'ucs2', 137, '', 'Yes', 8);
INSERT INTO `COLLATIONS` VALUES('ucs2_czech_ci', 'ucs2', 138, '', 'Yes', 8);
INSERT INTO `COLLATIONS` VALUES('ucs2_danish_ci', 'ucs2', 139, '', 'Yes', 8);
INSERT INTO `COLLATIONS` VALUES('ucs2_lithuanian_ci', 'ucs2', 140, '', 'Yes', 8);
INSERT INTO `COLLATIONS` VALUES('ucs2_slovak_ci', 'ucs2', 141, '', 'Yes', 8);
INSERT INTO `COLLATIONS` VALUES('ucs2_spanish2_ci', 'ucs2', 142, '', 'Yes', 8);
INSERT INTO `COLLATIONS` VALUES('ucs2_roman_ci', 'ucs2', 143, '', 'Yes', 8);
INSERT INTO `COLLATIONS` VALUES('ucs2_persian_ci', 'ucs2', 144, '', 'Yes', 8);
INSERT INTO `COLLATIONS` VALUES('ucs2_esperanto_ci', 'ucs2', 145, '', 'Yes', 8);
INSERT INTO `COLLATIONS` VALUES('ucs2_hungarian_ci', 'ucs2', 146, '', 'Yes', 8);
INSERT INTO `COLLATIONS` VALUES('cp866_general_ci', 'cp866', 36, 'Yes', 'Yes', 1);
INSERT INTO `COLLATIONS` VALUES('cp866_bin', 'cp866', 68, '', 'Yes', 1);
INSERT INTO `COLLATIONS` VALUES('keybcs2_general_ci', 'keybcs2', 37, 'Yes', 'Yes', 1);
INSERT INTO `COLLATIONS` VALUES('keybcs2_bin', 'keybcs2', 73, '', 'Yes', 1);
INSERT INTO `COLLATIONS` VALUES('macce_general_ci', 'macce', 38, 'Yes', 'Yes', 1);
INSERT INTO `COLLATIONS` VALUES('macce_bin', 'macce', 43, '', 'Yes', 1);
INSERT INTO `COLLATIONS` VALUES('macroman_general_ci', 'macroman', 39, 'Yes', 'Yes', 1);
INSERT INTO `COLLATIONS` VALUES('macroman_bin', 'macroman', 53, '', 'Yes', 1);
INSERT INTO `COLLATIONS` VALUES('cp852_general_ci', 'cp852', 40, 'Yes', 'Yes', 1);
INSERT INTO `COLLATIONS` VALUES('cp852_bin', 'cp852', 81, '', 'Yes', 1);
INSERT INTO `COLLATIONS` VALUES('latin7_estonian_cs', 'latin7', 20, '', 'Yes', 1);
INSERT INTO `COLLATIONS` VALUES('latin7_general_ci', 'latin7', 41, 'Yes', 'Yes', 1);
INSERT INTO `COLLATIONS` VALUES('latin7_general_cs', 'latin7', 42, '', 'Yes', 1);
INSERT INTO `COLLATIONS` VALUES('latin7_bin', 'latin7', 79, '', 'Yes', 1);
INSERT INTO `COLLATIONS` VALUES('cp1251_bulgarian_ci', 'cp1251', 14, '', 'Yes', 1);
INSERT INTO `COLLATIONS` VALUES('cp1251_ukrainian_ci', 'cp1251', 23, '', 'Yes', 1);
INSERT INTO `COLLATIONS` VALUES('cp1251_bin', 'cp1251', 50, '', 'Yes', 1);
INSERT INTO `COLLATIONS` VALUES('cp1251_general_ci', 'cp1251', 51, 'Yes', 'Yes', 1);
INSERT INTO `COLLATIONS` VALUES('cp1251_general_cs', 'cp1251', 52, '', 'Yes', 1);
INSERT INTO `COLLATIONS` VALUES('cp1256_general_ci', 'cp1256', 57, 'Yes', 'Yes', 1);
INSERT INTO `COLLATIONS` VALUES('cp1256_bin', 'cp1256', 67, '', 'Yes', 1);
INSERT INTO `COLLATIONS` VALUES('cp1257_lithuanian_ci', 'cp1257', 29, '', 'Yes', 1);
INSERT INTO `COLLATIONS` VALUES('cp1257_bin', 'cp1257', 58, '', 'Yes', 1);
INSERT INTO `COLLATIONS` VALUES('cp1257_general_ci', 'cp1257', 59, 'Yes', 'Yes', 1);
INSERT INTO `COLLATIONS` VALUES('binary', 'binary', 63, 'Yes', 'Yes', 1);
INSERT INTO `COLLATIONS` VALUES('geostd8_general_ci', 'geostd8', 92, 'Yes', 'Yes', 1);
INSERT INTO `COLLATIONS` VALUES('geostd8_bin', 'geostd8', 93, '', 'Yes', 1);
INSERT INTO `COLLATIONS` VALUES('cp932_japanese_ci', 'cp932', 95, 'Yes', 'Yes', 1);
INSERT INTO `COLLATIONS` VALUES('cp932_bin', 'cp932', 96, '', 'Yes', 1);
INSERT INTO `COLLATIONS` VALUES('eucjpms_japanese_ci', 'eucjpms', 97, 'Yes', 'Yes', 1);
INSERT INTO `COLLATIONS` VALUES('eucjpms_bin', 'eucjpms', 98, '', 'Yes', 1);

-- --------------------------------------------------------

--
-- Table structure for table `COLLATION_CHARACTER_SET_APPLICABILITY`
--

CREATE TEMPORARY TABLE `COLLATION_CHARACTER_SET_APPLICABILITY` (
  `COLLATION_NAME` varchar(64) NOT NULL default '',
  `CHARACTER_SET_NAME` varchar(64) NOT NULL default ''
) ENGINE=MEMORY DEFAULT CHARSET=utf8;

--
-- Dumping data for table `COLLATION_CHARACTER_SET_APPLICABILITY`
--

INSERT INTO `COLLATION_CHARACTER_SET_APPLICABILITY` VALUES('big5_chinese_ci', 'big5');
INSERT INTO `COLLATION_CHARACTER_SET_APPLICABILITY` VALUES('big5_bin', 'big5');
INSERT INTO `COLLATION_CHARACTER_SET_APPLICABILITY` VALUES('dec8_swedish_ci', 'dec8');
INSERT INTO `COLLATION_CHARACTER_SET_APPLICABILITY` VALUES('dec8_bin', 'dec8');
INSERT INTO `COLLATION_CHARACTER_SET_APPLICABILITY` VALUES('cp850_general_ci', 'cp850');
INSERT INTO `COLLATION_CHARACTER_SET_APPLICABILITY` VALUES('cp850_bin', 'cp850');
INSERT INTO `COLLATION_CHARACTER_SET_APPLICABILITY` VALUES('hp8_english_ci', 'hp8');
INSERT INTO `COLLATION_CHARACTER_SET_APPLICABILITY` VALUES('hp8_bin', 'hp8');
INSERT INTO `COLLATION_CHARACTER_SET_APPLICABILITY` VALUES('koi8r_general_ci', 'koi8r');
INSERT INTO `COLLATION_CHARACTER_SET_APPLICABILITY` VALUES('koi8r_bin', 'koi8r');
INSERT INTO `COLLATION_CHARACTER_SET_APPLICABILITY` VALUES('latin1_german1_ci', 'latin1');
INSERT INTO `COLLATION_CHARACTER_SET_APPLICABILITY` VALUES('latin1_swedish_ci', 'latin1');
INSERT INTO `COLLATION_CHARACTER_SET_APPLICABILITY` VALUES('latin1_danish_ci', 'latin1');
INSERT INTO `COLLATION_CHARACTER_SET_APPLICABILITY` VALUES('latin1_german2_ci', 'latin1');
INSERT INTO `COLLATION_CHARACTER_SET_APPLICABILITY` VALUES('latin1_bin', 'latin1');
INSERT INTO `COLLATION_CHARACTER_SET_APPLICABILITY` VALUES('latin1_general_ci', 'latin1');
INSERT INTO `COLLATION_CHARACTER_SET_APPLICABILITY` VALUES('latin1_general_cs', 'latin1');
INSERT INTO `COLLATION_CHARACTER_SET_APPLICABILITY` VALUES('latin1_spanish_ci', 'latin1');
INSERT INTO `COLLATION_CHARACTER_SET_APPLICABILITY` VALUES('latin2_czech_cs', 'latin2');
INSERT INTO `COLLATION_CHARACTER_SET_APPLICABILITY` VALUES('latin2_general_ci', 'latin2');
INSERT INTO `COLLATION_CHARACTER_SET_APPLICABILITY` VALUES('latin2_hungarian_ci', 'latin2');
INSERT INTO `COLLATION_CHARACTER_SET_APPLICABILITY` VALUES('latin2_croatian_ci', 'latin2');
INSERT INTO `COLLATION_CHARACTER_SET_APPLICABILITY` VALUES('latin2_bin', 'latin2');
INSERT INTO `COLLATION_CHARACTER_SET_APPLICABILITY` VALUES('swe7_swedish_ci', 'swe7');
INSERT INTO `COLLATION_CHARACTER_SET_APPLICABILITY` VALUES('swe7_bin', 'swe7');
INSERT INTO `COLLATION_CHARACTER_SET_APPLICABILITY` VALUES('ascii_general_ci', 'ascii');
INSERT INTO `COLLATION_CHARACTER_SET_APPLICABILITY` VALUES('ascii_bin', 'ascii');
INSERT INTO `COLLATION_CHARACTER_SET_APPLICABILITY` VALUES('ujis_japanese_ci', 'ujis');
INSERT INTO `COLLATION_CHARACTER_SET_APPLICABILITY` VALUES('ujis_bin', 'ujis');
INSERT INTO `COLLATION_CHARACTER_SET_APPLICABILITY` VALUES('sjis_japanese_ci', 'sjis');
INSERT INTO `COLLATION_CHARACTER_SET_APPLICABILITY` VALUES('sjis_bin', 'sjis');
INSERT INTO `COLLATION_CHARACTER_SET_APPLICABILITY` VALUES('hebrew_general_ci', 'hebrew');
INSERT INTO `COLLATION_CHARACTER_SET_APPLICABILITY` VALUES('hebrew_bin', 'hebrew');
INSERT INTO `COLLATION_CHARACTER_SET_APPLICABILITY` VALUES('tis620_thai_ci', 'tis620');
INSERT INTO `COLLATION_CHARACTER_SET_APPLICABILITY` VALUES('tis620_bin', 'tis620');
INSERT INTO `COLLATION_CHARACTER_SET_APPLICABILITY` VALUES('euckr_korean_ci', 'euckr');
INSERT INTO `COLLATION_CHARACTER_SET_APPLICABILITY` VALUES('euckr_bin', 'euckr');
INSERT INTO `COLLATION_CHARACTER_SET_APPLICABILITY` VALUES('koi8u_general_ci', 'koi8u');
INSERT INTO `COLLATION_CHARACTER_SET_APPLICABILITY` VALUES('koi8u_bin', 'koi8u');
INSERT INTO `COLLATION_CHARACTER_SET_APPLICABILITY` VALUES('gb2312_chinese_ci', 'gb2312');
INSERT INTO `COLLATION_CHARACTER_SET_APPLICABILITY` VALUES('gb2312_bin', 'gb2312');
INSERT INTO `COLLATION_CHARACTER_SET_APPLICABILITY` VALUES('greek_general_ci', 'greek');
INSERT INTO `COLLATION_CHARACTER_SET_APPLICABILITY` VALUES('greek_bin', 'greek');
INSERT INTO `COLLATION_CHARACTER_SET_APPLICABILITY` VALUES('cp1250_general_ci', 'cp1250');
INSERT INTO `COLLATION_CHARACTER_SET_APPLICABILITY` VALUES('cp1250_czech_cs', 'cp1250');
INSERT INTO `COLLATION_CHARACTER_SET_APPLICABILITY` VALUES('cp1250_croatian_ci', 'cp1250');
INSERT INTO `COLLATION_CHARACTER_SET_APPLICABILITY` VALUES('cp1250_bin', 'cp1250');
INSERT INTO `COLLATION_CHARACTER_SET_APPLICABILITY` VALUES('gbk_chinese_ci', 'gbk');
INSERT INTO `COLLATION_CHARACTER_SET_APPLICABILITY` VALUES('gbk_bin', 'gbk');
INSERT INTO `COLLATION_CHARACTER_SET_APPLICABILITY` VALUES('latin5_turkish_ci', 'latin5');
INSERT INTO `COLLATION_CHARACTER_SET_APPLICABILITY` VALUES('latin5_bin', 'latin5');
INSERT INTO `COLLATION_CHARACTER_SET_APPLICABILITY` VALUES('armscii8_general_ci', 'armscii8');
INSERT INTO `COLLATION_CHARACTER_SET_APPLICABILITY` VALUES('armscii8_bin', 'armscii8');
INSERT INTO `COLLATION_CHARACTER_SET_APPLICABILITY` VALUES('utf8_general_ci', 'utf8');
INSERT INTO `COLLATION_CHARACTER_SET_APPLICABILITY` VALUES('utf8_bin', 'utf8');
INSERT INTO `COLLATION_CHARACTER_SET_APPLICABILITY` VALUES('utf8_unicode_ci', 'utf8');
INSERT INTO `COLLATION_CHARACTER_SET_APPLICABILITY` VALUES('utf8_icelandic_ci', 'utf8');
INSERT INTO `COLLATION_CHARACTER_SET_APPLICABILITY` VALUES('utf8_latvian_ci', 'utf8');
INSERT INTO `COLLATION_CHARACTER_SET_APPLICABILITY` VALUES('utf8_romanian_ci', 'utf8');
INSERT INTO `COLLATION_CHARACTER_SET_APPLICABILITY` VALUES('utf8_slovenian_ci', 'utf8');
INSERT INTO `COLLATION_CHARACTER_SET_APPLICABILITY` VALUES('utf8_polish_ci', 'utf8');
INSERT INTO `COLLATION_CHARACTER_SET_APPLICABILITY` VALUES('utf8_estonian_ci', 'utf8');
INSERT INTO `COLLATION_CHARACTER_SET_APPLICABILITY` VALUES('utf8_spanish_ci', 'utf8');
INSERT INTO `COLLATION_CHARACTER_SET_APPLICABILITY` VALUES('utf8_swedish_ci', 'utf8');
INSERT INTO `COLLATION_CHARACTER_SET_APPLICABILITY` VALUES('utf8_turkish_ci', 'utf8');
INSERT INTO `COLLATION_CHARACTER_SET_APPLICABILITY` VALUES('utf8_czech_ci', 'utf8');
INSERT INTO `COLLATION_CHARACTER_SET_APPLICABILITY` VALUES('utf8_danish_ci', 'utf8');
INSERT INTO `COLLATION_CHARACTER_SET_APPLICABILITY` VALUES('utf8_lithuanian_ci', 'utf8');
INSERT INTO `COLLATION_CHARACTER_SET_APPLICABILITY` VALUES('utf8_slovak_ci', 'utf8');
INSERT INTO `COLLATION_CHARACTER_SET_APPLICABILITY` VALUES('utf8_spanish2_ci', 'utf8');
INSERT INTO `COLLATION_CHARACTER_SET_APPLICABILITY` VALUES('utf8_roman_ci', 'utf8');
INSERT INTO `COLLATION_CHARACTER_SET_APPLICABILITY` VALUES('utf8_persian_ci', 'utf8');
INSERT INTO `COLLATION_CHARACTER_SET_APPLICABILITY` VALUES('utf8_esperanto_ci', 'utf8');
INSERT INTO `COLLATION_CHARACTER_SET_APPLICABILITY` VALUES('utf8_hungarian_ci', 'utf8');
INSERT INTO `COLLATION_CHARACTER_SET_APPLICABILITY` VALUES('ucs2_general_ci', 'ucs2');
INSERT INTO `COLLATION_CHARACTER_SET_APPLICABILITY` VALUES('ucs2_bin', 'ucs2');
INSERT INTO `COLLATION_CHARACTER_SET_APPLICABILITY` VALUES('ucs2_unicode_ci', 'ucs2');
INSERT INTO `COLLATION_CHARACTER_SET_APPLICABILITY` VALUES('ucs2_icelandic_ci', 'ucs2');
INSERT INTO `COLLATION_CHARACTER_SET_APPLICABILITY` VALUES('ucs2_latvian_ci', 'ucs2');
INSERT INTO `COLLATION_CHARACTER_SET_APPLICABILITY` VALUES('ucs2_romanian_ci', 'ucs2');
INSERT INTO `COLLATION_CHARACTER_SET_APPLICABILITY` VALUES('ucs2_slovenian_ci', 'ucs2');
INSERT INTO `COLLATION_CHARACTER_SET_APPLICABILITY` VALUES('ucs2_polish_ci', 'ucs2');
INSERT INTO `COLLATION_CHARACTER_SET_APPLICABILITY` VALUES('ucs2_estonian_ci', 'ucs2');
INSERT INTO `COLLATION_CHARACTER_SET_APPLICABILITY` VALUES('ucs2_spanish_ci', 'ucs2');
INSERT INTO `COLLATION_CHARACTER_SET_APPLICABILITY` VALUES('ucs2_swedish_ci', 'ucs2');
INSERT INTO `COLLATION_CHARACTER_SET_APPLICABILITY` VALUES('ucs2_turkish_ci', 'ucs2');
INSERT INTO `COLLATION_CHARACTER_SET_APPLICABILITY` VALUES('ucs2_czech_ci', 'ucs2');
INSERT INTO `COLLATION_CHARACTER_SET_APPLICABILITY` VALUES('ucs2_danish_ci', 'ucs2');
INSERT INTO `COLLATION_CHARACTER_SET_APPLICABILITY` VALUES('ucs2_lithuanian_ci', 'ucs2');
INSERT INTO `COLLATION_CHARACTER_SET_APPLICABILITY` VALUES('ucs2_slovak_ci', 'ucs2');
INSERT INTO `COLLATION_CHARACTER_SET_APPLICABILITY` VALUES('ucs2_spanish2_ci', 'ucs2');
INSERT INTO `COLLATION_CHARACTER_SET_APPLICABILITY` VALUES('ucs2_roman_ci', 'ucs2');
INSERT INTO `COLLATION_CHARACTER_SET_APPLICABILITY` VALUES('ucs2_persian_ci', 'ucs2');
INSERT INTO `COLLATION_CHARACTER_SET_APPLICABILITY` VALUES('ucs2_esperanto_ci', 'ucs2');
INSERT INTO `COLLATION_CHARACTER_SET_APPLICABILITY` VALUES('ucs2_hungarian_ci', 'ucs2');
INSERT INTO `COLLATION_CHARACTER_SET_APPLICABILITY` VALUES('cp866_general_ci', 'cp866');
INSERT INTO `COLLATION_CHARACTER_SET_APPLICABILITY` VALUES('cp866_bin', 'cp866');
INSERT INTO `COLLATION_CHARACTER_SET_APPLICABILITY` VALUES('keybcs2_general_ci', 'keybcs2');
INSERT INTO `COLLATION_CHARACTER_SET_APPLICABILITY` VALUES('keybcs2_bin', 'keybcs2');
INSERT INTO `COLLATION_CHARACTER_SET_APPLICABILITY` VALUES('macce_general_ci', 'macce');
INSERT INTO `COLLATION_CHARACTER_SET_APPLICABILITY` VALUES('macce_bin', 'macce');
INSERT INTO `COLLATION_CHARACTER_SET_APPLICABILITY` VALUES('macroman_general_ci', 'macroman');
INSERT INTO `COLLATION_CHARACTER_SET_APPLICABILITY` VALUES('macroman_bin', 'macroman');
INSERT INTO `COLLATION_CHARACTER_SET_APPLICABILITY` VALUES('cp852_general_ci', 'cp852');
INSERT INTO `COLLATION_CHARACTER_SET_APPLICABILITY` VALUES('cp852_bin', 'cp852');
INSERT INTO `COLLATION_CHARACTER_SET_APPLICABILITY` VALUES('latin7_estonian_cs', 'latin7');
INSERT INTO `COLLATION_CHARACTER_SET_APPLICABILITY` VALUES('latin7_general_ci', 'latin7');
INSERT INTO `COLLATION_CHARACTER_SET_APPLICABILITY` VALUES('latin7_general_cs', 'latin7');
INSERT INTO `COLLATION_CHARACTER_SET_APPLICABILITY` VALUES('latin7_bin', 'latin7');
INSERT INTO `COLLATION_CHARACTER_SET_APPLICABILITY` VALUES('cp1251_bulgarian_ci', 'cp1251');
INSERT INTO `COLLATION_CHARACTER_SET_APPLICABILITY` VALUES('cp1251_ukrainian_ci', 'cp1251');
INSERT INTO `COLLATION_CHARACTER_SET_APPLICABILITY` VALUES('cp1251_bin', 'cp1251');
INSERT INTO `COLLATION_CHARACTER_SET_APPLICABILITY` VALUES('cp1251_general_ci', 'cp1251');
INSERT INTO `COLLATION_CHARACTER_SET_APPLICABILITY` VALUES('cp1251_general_cs', 'cp1251');
INSERT INTO `COLLATION_CHARACTER_SET_APPLICABILITY` VALUES('cp1256_general_ci', 'cp1256');
INSERT INTO `COLLATION_CHARACTER_SET_APPLICABILITY` VALUES('cp1256_bin', 'cp1256');
INSERT INTO `COLLATION_CHARACTER_SET_APPLICABILITY` VALUES('cp1257_lithuanian_ci', 'cp1257');
INSERT INTO `COLLATION_CHARACTER_SET_APPLICABILITY` VALUES('cp1257_bin', 'cp1257');
INSERT INTO `COLLATION_CHARACTER_SET_APPLICABILITY` VALUES('cp1257_general_ci', 'cp1257');
INSERT INTO `COLLATION_CHARACTER_SET_APPLICABILITY` VALUES('binary', 'binary');
INSERT INTO `COLLATION_CHARACTER_SET_APPLICABILITY` VALUES('geostd8_general_ci', 'geostd8');
INSERT INTO `COLLATION_CHARACTER_SET_APPLICABILITY` VALUES('geostd8_bin', 'geostd8');
INSERT INTO `COLLATION_CHARACTER_SET_APPLICABILITY` VALUES('cp932_japanese_ci', 'cp932');
INSERT INTO `COLLATION_CHARACTER_SET_APPLICABILITY` VALUES('cp932_bin', 'cp932');
INSERT INTO `COLLATION_CHARACTER_SET_APPLICABILITY` VALUES('eucjpms_japanese_ci', 'eucjpms');
INSERT INTO `COLLATION_CHARACTER_SET_APPLICABILITY` VALUES('eucjpms_bin', 'eucjpms');

-- --------------------------------------------------------

--
-- Table structure for table `COLUMNS`
--

CREATE TEMPORARY TABLE `COLUMNS` (
  `TABLE_CATALOG` varchar(512) default NULL,
  `TABLE_SCHEMA` varchar(64) NOT NULL default '',
  `TABLE_NAME` varchar(64) NOT NULL default '',
  `COLUMN_NAME` varchar(64) NOT NULL default '',
  `ORDINAL_POSITION` bigint(21) NOT NULL default '0',
  `COLUMN_DEFAULT` longtext,
  `IS_NULLABLE` varchar(3) NOT NULL default '',
  `DATA_TYPE` varchar(64) NOT NULL default '',
  `CHARACTER_MAXIMUM_LENGTH` bigint(21) default NULL,
  `CHARACTER_OCTET_LENGTH` bigint(21) default NULL,
  `NUMERIC_PRECISION` bigint(21) default NULL,
  `NUMERIC_SCALE` bigint(21) default NULL,
  `CHARACTER_SET_NAME` varchar(64) default NULL,
  `COLLATION_NAME` varchar(64) default NULL,
  `COLUMN_TYPE` longtext NOT NULL,
  `COLUMN_KEY` varchar(3) NOT NULL default '',
  `EXTRA` varchar(20) NOT NULL default '',
  `PRIVILEGES` varchar(80) NOT NULL default '',
  `COLUMN_COMMENT` varchar(255) NOT NULL default ''
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `COLUMNS`
--

INSERT INTO `COLUMNS` VALUES(NULL, 'information_schema', 'CHARACTER_SETS', 'CHARACTER_SET_NAME', 1, '', 'NO', 'varchar', 64, 192, NULL, NULL, 'utf8', 'utf8_general_ci', 'varchar(64)', '', '', 'select', '');
INSERT INTO `COLUMNS` VALUES(NULL, 'information_schema', 'CHARACTER_SETS', 'DEFAULT_COLLATE_NAME', 2, '', 'NO', 'varchar', 64, 192, NULL, NULL, 'utf8', 'utf8_general_ci', 'varchar(64)', '', '', 'select', '');
INSERT INTO `COLUMNS` VALUES(NULL, 'information_schema', 'CHARACTER_SETS', 'DESCRIPTION', 3, '', 'NO', 'varchar', 60, 180, NULL, NULL, 'utf8', 'utf8_general_ci', 'varchar(60)', '', '', 'select', '');
INSERT INTO `COLUMNS` VALUES(NULL, 'information_schema', 'CHARACTER_SETS', 'MAXLEN', 4, '0', 'NO', 'bigint', NULL, NULL, 19, 0, NULL, NULL, 'bigint(3)', '', '', 'select', '');
INSERT INTO `COLUMNS` VALUES(NULL, 'information_schema', 'CLIENT_STATISTICS', 'CLIENT', 1, '', 'NO', 'varchar', 64, 192, NULL, NULL, 'utf8', 'utf8_general_ci', 'varchar(64)', '', '', 'select', '');
INSERT INTO `COLUMNS` VALUES(NULL, 'information_schema', 'CLIENT_STATISTICS', 'TOTAL_CONNECTIONS', 2, '0', 'NO', 'bigint', NULL, NULL, 19, 0, NULL, NULL, 'bigint(21)', '', '', 'select', '');
INSERT INTO `COLUMNS` VALUES(NULL, 'information_schema', 'CLIENT_STATISTICS', 'CONCURRENT_CONNECTIONS', 3, '0', 'NO', 'bigint', NULL, NULL, 19, 0, NULL, NULL, 'bigint(21)', '', '', 'select', '');
INSERT INTO `COLUMNS` VALUES(NULL, 'information_schema', 'CLIENT_STATISTICS', 'CONNECTED_TIME', 4, '0', 'NO', 'bigint', NULL, NULL, 19, 0, NULL, NULL, 'bigint(21)', '', '', 'select', '');
INSERT INTO `COLUMNS` VALUES(NULL, 'information_schema', 'CLIENT_STATISTICS', 'BUSY_TIME', 5, '0', 'NO', 'bigint', NULL, NULL, 19, 0, NULL, NULL, 'bigint(21)', '', '', 'select', '');
INSERT INTO `COLUMNS` VALUES(NULL, 'information_schema', 'CLIENT_STATISTICS', 'CPU_TIME', 6, '0', 'NO', 'bigint', NULL, NULL, 19, 0, NULL, NULL, 'bigint(21)', '', '', 'select', '');
INSERT INTO `COLUMNS` VALUES(NULL, 'information_schema', 'CLIENT_STATISTICS', 'BYTES_RECEIVED', 7, '0', 'NO', 'bigint', NULL, NULL, 19, 0, NULL, NULL, 'bigint(21)', '', '', 'select', '');
INSERT INTO `COLUMNS` VALUES(NULL, 'information_schema', 'CLIENT_STATISTICS', 'BYTES_SENT', 8, '0', 'NO', 'bigint', NULL, NULL, 19, 0, NULL, NULL, 'bigint(21)', '', '', 'select', '');
INSERT INTO `COLUMNS` VALUES(NULL, 'information_schema', 'CLIENT_STATISTICS', 'BINLOG_BYTES_WRITTEN', 9, '0', 'NO', 'bigint', NULL, NULL, 19, 0, NULL, NULL, 'bigint(21)', '', '', 'select', '');
INSERT INTO `COLUMNS` VALUES(NULL, 'information_schema', 'CLIENT_STATISTICS', 'ROWS_FETCHED', 10, '0', 'NO', 'bigint', NULL, NULL, 19, 0, NULL, NULL, 'bigint(21)', '', '', 'select', '');
INSERT INTO `COLUMNS` VALUES(NULL, 'information_schema', 'CLIENT_STATISTICS', 'ROWS_UPDATED', 11, '0', 'NO', 'bigint', NULL, NULL, 19, 0, NULL, NULL, 'bigint(21)', '', '', 'select', '');
INSERT INTO `COLUMNS` VALUES(NULL, 'information_schema', 'CLIENT_STATISTICS', 'TABLE_ROWS_READ', 12, '0', 'NO', 'bigint', NULL, NULL, 19, 0, NULL, NULL, 'bigint(21)', '', '', 'select', '');
INSERT INTO `COLUMNS` VALUES(NULL, 'information_schema', 'CLIENT_STATISTICS', 'SELECT_COMMANDS', 13, '0', 'NO', 'bigint', NULL, NULL, 19, 0, NULL, NULL, 'bigint(21)', '', '', 'select', '');
INSERT INTO `COLUMNS` VALUES(NULL, 'information_schema', 'CLIENT_STATISTICS', 'UPDATE_COMMANDS', 14, '0', 'NO', 'bigint', NULL, NULL, 19, 0, NULL, NULL, 'bigint(21)', '', '', 'select', '');
INSERT INTO `COLUMNS` VALUES(NULL, 'information_schema', 'CLIENT_STATISTICS', 'OTHER_COMMANDS', 15, '0', 'NO', 'bigint', NULL, NULL, 19, 0, NULL, NULL, 'bigint(21)', '', '', 'select', '');
INSERT INTO `COLUMNS` VALUES(NULL, 'information_schema', 'CLIENT_STATISTICS', 'COMMIT_TRANSACTIONS', 16, '0', 'NO', 'bigint', NULL, NULL, 19, 0, NULL, NULL, 'bigint(21)', '', '', 'select', '');
INSERT INTO `COLUMNS` VALUES(NULL, 'information_schema', 'CLIENT_STATISTICS', 'ROLLBACK_TRANSACTIONS', 17, '0', 'NO', 'bigint', NULL, NULL, 19, 0, NULL, NULL, 'bigint(21)', '', '', 'select', '');
INSERT INTO `COLUMNS` VALUES(NULL, 'information_schema', 'CLIENT_STATISTICS', 'DENIED_CONNECTIONS', 18, '0', 'NO', 'bigint', NULL, NULL, 19, 0, NULL, NULL, 'bigint(21)', '', '', 'select', '');
INSERT INTO `COLUMNS` VALUES(NULL, 'information_schema', 'CLIENT_STATISTICS', 'LOST_CONNECTIONS', 19, '0', 'NO', 'bigint', NULL, NULL, 19, 0, NULL, NULL, 'bigint(21)', '', '', 'select', '');
INSERT INTO `COLUMNS` VALUES(NULL, 'information_schema', 'CLIENT_STATISTICS', 'ACCESS_DENIED', 20, '0', 'NO', 'bigint', NULL, NULL, 19, 0, NULL, NULL, 'bigint(21)', '', '', 'select', '');
INSERT INTO `COLUMNS` VALUES(NULL, 'information_schema', 'CLIENT_STATISTICS', 'EMPTY_QUERIES', 21, '0', 'NO', 'bigint', NULL, NULL, 19, 0, NULL, NULL, 'bigint(21)', '', '', 'select', '');
INSERT INTO `COLUMNS` VALUES(NULL, 'information_schema', 'COLLATIONS', 'COLLATION_NAME', 1, '', 'NO', 'varchar', 64, 192, NULL, NULL, 'utf8', 'utf8_general_ci', 'varchar(64)', '', '', 'select', '');
INSERT INTO `COLUMNS` VALUES(NULL, 'information_schema', 'COLLATIONS', 'CHARACTER_SET_NAME', 2, '', 'NO', 'varchar', 64, 192, NULL, NULL, 'utf8', 'utf8_general_ci', 'varchar(64)', '', '', 'select', '');
INSERT INTO `COLUMNS` VALUES(NULL, 'information_schema', 'COLLATIONS', 'ID', 3, '0', 'NO', 'bigint', NULL, NULL, 19, 0, NULL, NULL, 'bigint(11)', '', '', 'select', '');
INSERT INTO `COLUMNS` VALUES(NULL, 'information_schema', 'COLLATIONS', 'IS_DEFAULT', 4, '', 'NO', 'varchar', 3, 9, NULL, NULL, 'utf8', 'utf8_general_ci', 'varchar(3)', '', '', 'select', '');
INSERT INTO `COLUMNS` VALUES(NULL, 'information_schema', 'COLLATIONS', 'IS_COMPILED', 5, '', 'NO', 'varchar', 3, 9, NULL, NULL, 'utf8', 'utf8_general_ci', 'varchar(3)', '', '', 'select', '');
INSERT INTO `COLUMNS` VALUES(NULL, 'information_schema', 'COLLATIONS', 'SORTLEN', 6, '0', 'NO', 'bigint', NULL, NULL, 19, 0, NULL, NULL, 'bigint(3)', '', '', 'select', '');
INSERT INTO `COLUMNS` VALUES(NULL, 'information_schema', 'COLLATION_CHARACTER_SET_APPLICABILITY', 'COLLATION_NAME', 1, '', 'NO', 'varchar', 64, 192, NULL, NULL, 'utf8', 'utf8_general_ci', 'varchar(64)', '', '', 'select', '');
INSERT INTO `COLUMNS` VALUES(NULL, 'information_schema', 'COLLATION_CHARACTER_SET_APPLICABILITY', 'CHARACTER_SET_NAME', 2, '', 'NO', 'varchar', 64, 192, NULL, NULL, 'utf8', 'utf8_general_ci', 'varchar(64)', '', '', 'select', '');
INSERT INTO `COLUMNS` VALUES(NULL, 'information_schema', 'COLUMNS', 'TABLE_CATALOG', 1, NULL, 'YES', 'varchar', 512, 1536, NULL, NULL, 'utf8', 'utf8_general_ci', 'varchar(512)', '', '', 'select', '');
INSERT INTO `COLUMNS` VALUES(NULL, 'information_schema', 'COLUMNS', 'TABLE_SCHEMA', 2, '', 'NO', 'varchar', 64, 192, NULL, NULL, 'utf8', 'utf8_general_ci', 'varchar(64)', '', '', 'select', '');
INSERT INTO `COLUMNS` VALUES(NULL, 'information_schema', 'COLUMNS', 'TABLE_NAME', 3, '', 'NO', 'varchar', 64, 192, NULL, NULL, 'utf8', 'utf8_general_ci', 'varchar(64)', '', '', 'select', '');
INSERT INTO `COLUMNS` VALUES(NULL, 'information_schema', 'COLUMNS', 'COLUMN_NAME', 4, '', 'NO', 'varchar', 64, 192, NULL, NULL, 'utf8', 'utf8_general_ci', 'varchar(64)', '', '', 'select', '');
INSERT INTO `COLUMNS` VALUES(NULL, 'information_schema', 'COLUMNS', 'ORDINAL_POSITION', 5, '0', 'NO', 'bigint', NULL, NULL, 19, 0, NULL, NULL, 'bigint(21)', '', '', 'select', '');
INSERT INTO `COLUMNS` VALUES(NULL, 'information_schema', 'COLUMNS', 'COLUMN_DEFAULT', 6, NULL, 'YES', 'longtext', 4294967295, 4294967295, NULL, NULL, 'utf8', 'utf8_general_ci', 'longtext', '', '', 'select', '');
INSERT INTO `COLUMNS` VALUES(NULL, 'information_schema', 'COLUMNS', 'IS_NULLABLE', 7, '', 'NO', 'varchar', 3, 9, NULL, NULL, 'utf8', 'utf8_general_ci', 'varchar(3)', '', '', 'select', '');
INSERT INTO `COLUMNS` VALUES(NULL, 'information_schema', 'COLUMNS', 'DATA_TYPE', 8, '', 'NO', 'varchar', 64, 192, NULL, NULL, 'utf8', 'utf8_general_ci', 'varchar(64)', '', '', 'select', '');
INSERT INTO `COLUMNS` VALUES(NULL, 'information_schema', 'COLUMNS', 'CHARACTER_MAXIMUM_LENGTH', 9, NULL, 'YES', 'bigint', NULL, NULL, 19, 0, NULL, NULL, 'bigint(21)', '', '', 'select', '');
INSERT INTO `COLUMNS` VALUES(NULL, 'information_schema', 'COLUMNS', 'CHARACTER_OCTET_LENGTH', 10, NULL, 'YES', 'bigint', NULL, NULL, 19, 0, NULL, NULL, 'bigint(21)', '', '', 'select', '');
INSERT INTO `COLUMNS` VALUES(NULL, 'information_schema', 'COLUMNS', 'NUMERIC_PRECISION', 11, NULL, 'YES', 'bigint', NULL, NULL, 19, 0, NULL, NULL, 'bigint(21)', '', '', 'select', '');
INSERT INTO `COLUMNS` VALUES(NULL, 'information_schema', 'COLUMNS', 'NUMERIC_SCALE', 12, NULL, 'YES', 'bigint', NULL, NULL, 19, 0, NULL, NULL, 'bigint(21)', '', '', 'select', '');
INSERT INTO `COLUMNS` VALUES(NULL, 'information_schema', 'COLUMNS', 'CHARACTER_SET_NAME', 13, NULL, 'YES', 'varchar', 64, 192, NULL, NULL, 'utf8', 'utf8_general_ci', 'varchar(64)', '', '', 'select', '');
INSERT INTO `COLUMNS` VALUES(NULL, 'information_schema', 'COLUMNS', 'COLLATION_NAME', 14, NULL, 'YES', 'varchar', 64, 192, NULL, NULL, 'utf8', 'utf8_general_ci', 'varchar(64)', '', '', 'select', '');
INSERT INTO `COLUMNS` VALUES(NULL, 'information_schema', 'COLUMNS', 'COLUMN_TYPE', 15, NULL, 'NO', 'longtext', 4294967295, 4294967295, NULL, NULL, 'utf8', 'utf8_general_ci', 'longtext', '', '', 'select', '');
INSERT INTO `COLUMNS` VALUES(NULL, 'information_schema', 'COLUMNS', 'COLUMN_KEY', 16, '', 'NO', 'varchar', 3, 9, NULL, NULL, 'utf8', 'utf8_general_ci', 'varchar(3)', '', '', 'select', '');
INSERT INTO `COLUMNS` VALUES(NULL, 'information_schema', 'COLUMNS', 'EXTRA', 17, '', 'NO', 'varchar', 20, 60, NULL, NULL, 'utf8', 'utf8_general_ci', 'varchar(20)', '', '', 'select', '');
INSERT INTO `COLUMNS` VALUES(NULL, 'information_schema', 'COLUMNS', 'PRIVILEGES', 18, '', 'NO', 'varchar', 80, 240, NULL, NULL, 'utf8', 'utf8_general_ci', 'varchar(80)', '', '', 'select', '');
INSERT INTO `COLUMNS` VALUES(NULL, 'information_schema', 'COLUMNS', 'COLUMN_COMMENT', 19, '', 'NO', 'varchar', 255, 765, NULL, NULL, 'utf8', 'utf8_general_ci', 'varchar(255)', '', '', 'select', '');
INSERT INTO `COLUMNS` VALUES(NULL, 'information_schema', 'COLUMN_PRIVILEGES', 'GRANTEE', 1, '', 'NO', 'varchar', 81, 243, NULL, NULL, 'utf8', 'utf8_general_ci', 'varchar(81)', '', '', 'select', '');
INSERT INTO `COLUMNS` VALUES(NULL, 'information_schema', 'COLUMN_PRIVILEGES', 'TABLE_CATALOG', 2, NULL, 'YES', 'varchar', 512, 1536, NULL, NULL, 'utf8', 'utf8_general_ci', 'varchar(512)', '', '', 'select', '');
INSERT INTO `COLUMNS` VALUES(NULL, 'information_schema', 'COLUMN_PRIVILEGES', 'TABLE_SCHEMA', 3, '', 'NO', 'varchar', 64, 192, NULL, NULL, 'utf8', 'utf8_general_ci', 'varchar(64)', '', '', 'select', '');
INSERT INTO `COLUMNS` VALUES(NULL, 'information_schema', 'COLUMN_PRIVILEGES', 'TABLE_NAME', 4, '', 'NO', 'varchar', 64, 192, NULL, NULL, 'utf8', 'utf8_general_ci', 'varchar(64)', '', '', 'select', '');
INSERT INTO `COLUMNS` VALUES(NULL, 'information_schema', 'COLUMN_PRIVILEGES', 'COLUMN_NAME', 5, '', 'NO', 'varchar', 64, 192, NULL, NULL, 'utf8', 'utf8_general_ci', 'varchar(64)', '', '', 'select', '');
INSERT INTO `COLUMNS` VALUES(NULL, 'information_schema', 'COLUMN_PRIVILEGES', 'PRIVILEGE_TYPE', 6, '', 'NO', 'varchar', 64, 192, NULL, NULL, 'utf8', 'utf8_general_ci', 'varchar(64)', '', '', 'select', '');
INSERT INTO `COLUMNS` VALUES(NULL, 'information_schema', 'COLUMN_PRIVILEGES', 'IS_GRANTABLE', 7, '', 'NO', 'varchar', 3, 9, NULL, NULL, 'utf8', 'utf8_general_ci', 'varchar(3)', '', '', 'select', '');
INSERT INTO `COLUMNS` VALUES(NULL, 'information_schema', 'INNODB_BUFFER_POOL_CONTENT', 'BLOCK_NUM', 1, '0', 'NO', 'bigint', NULL, NULL, 19, 0, NULL, NULL, 'bigint(21)', '', '', 'select', '');
INSERT INTO `COLUMNS` VALUES(NULL, 'information_schema', 'INNODB_BUFFER_POOL_CONTENT', 'SPACE', 2, '0', 'NO', 'bigint', NULL, NULL, 19, 0, NULL, NULL, 'bigint(21)', '', '', 'select', '');
INSERT INTO `COLUMNS` VALUES(NULL, 'information_schema', 'INNODB_BUFFER_POOL_CONTENT', 'OFFSET', 3, '0', 'NO', 'bigint', NULL, NULL, 19, 0, NULL, NULL, 'bigint(21)', '', '', 'select', '');
INSERT INTO `COLUMNS` VALUES(NULL, 'information_schema', 'INNODB_BUFFER_POOL_CONTENT', 'RECORDS', 4, '0', 'NO', 'bigint', NULL, NULL, 19, 0, NULL, NULL, 'bigint(21)', '', '', 'select', '');
INSERT INTO `COLUMNS` VALUES(NULL, 'information_schema', 'INNODB_BUFFER_POOL_CONTENT', 'DATASIZE', 5, '0', 'NO', 'bigint', NULL, NULL, 19, 0, NULL, NULL, 'bigint(21)', '', '', 'select', '');
INSERT INTO `COLUMNS` VALUES(NULL, 'information_schema', 'INNODB_BUFFER_POOL_CONTENT', 'FLUSH_TYPE', 6, '0', 'NO', 'bigint', NULL, NULL, 19, 0, NULL, NULL, 'bigint(21)', '', '', 'select', '');
INSERT INTO `COLUMNS` VALUES(NULL, 'information_schema', 'INNODB_BUFFER_POOL_CONTENT', 'FIX_COUNT', 7, '0', 'NO', 'bigint', NULL, NULL, 19, 0, NULL, NULL, 'bigint(21)', '', '', 'select', '');
INSERT INTO `COLUMNS` VALUES(NULL, 'information_schema', 'INNODB_BUFFER_POOL_CONTENT', 'LRU_POSITION', 8, '0', 'NO', 'bigint', NULL, NULL, 19, 0, NULL, NULL, 'bigint(21)', '', '', 'select', '');
INSERT INTO `COLUMNS` VALUES(NULL, 'information_schema', 'INNODB_BUFFER_POOL_CONTENT', 'PAGE_TYPE_ID', 9, '0', 'NO', 'bigint', NULL, NULL, 19, 0, NULL, NULL, 'bigint(21)', '', '', 'select', '');
INSERT INTO `COLUMNS` VALUES(NULL, 'information_schema', 'INNODB_BUFFER_POOL_CONTENT', 'PAGE_TYPE', 10, '', 'NO', 'varchar', 64, 192, NULL, NULL, 'utf8', 'utf8_general_ci', 'varchar(64)', '', '', 'select', '');
INSERT INTO `COLUMNS` VALUES(NULL, 'information_schema', 'INNODB_BUFFER_POOL_CONTENT', 'INDEX_NAME', 11, '', 'NO', 'varchar', 64, 192, NULL, NULL, 'utf8', 'utf8_general_ci', 'varchar(64)', '', '', 'select', '');
INSERT INTO `COLUMNS` VALUES(NULL, 'information_schema', 'INNODB_BUFFER_POOL_CONTENT', 'TABLE_SCHEMA', 12, '', 'NO', 'varchar', 64, 192, NULL, NULL, 'utf8', 'utf8_general_ci', 'varchar(64)', '', '', 'select', '');
INSERT INTO `COLUMNS` VALUES(NULL, 'information_schema', 'INNODB_BUFFER_POOL_CONTENT', 'TABLE_NAME', 13, '', 'NO', 'varchar', 64, 192, NULL, NULL, 'utf8', 'utf8_general_ci', 'varchar(64)', '', '', 'select', '');
INSERT INTO `COLUMNS` VALUES(NULL, 'information_schema', 'INDEX_STATISTICS', 'TABLE_SCHEMA', 1, '', 'NO', 'varchar', 64, 192, NULL, NULL, 'utf8', 'utf8_general_ci', 'varchar(64)', '', '', 'select', '');
INSERT INTO `COLUMNS` VALUES(NULL, 'information_schema', 'INDEX_STATISTICS', 'TABLE_NAME', 2, '', 'NO', 'varchar', 64, 192, NULL, NULL, 'utf8', 'utf8_general_ci', 'varchar(64)', '', '', 'select', '');
INSERT INTO `COLUMNS` VALUES(NULL, 'information_schema', 'INDEX_STATISTICS', 'INDEX_NAME', 3, '', 'NO', 'varchar', 64, 192, NULL, NULL, 'utf8', 'utf8_general_ci', 'varchar(64)', '', '', 'select', '');
INSERT INTO `COLUMNS` VALUES(NULL, 'information_schema', 'INDEX_STATISTICS', 'ROWS_READ', 4, '0', 'NO', 'bigint', NULL, NULL, 19, 0, NULL, NULL, 'bigint(21)', '', '', 'select', '');
INSERT INTO `COLUMNS` VALUES(NULL, 'information_schema', 'KEY_COLUMN_USAGE', 'CONSTRAINT_CATALOG', 1, NULL, 'YES', 'varchar', 512, 1536, NULL, NULL, 'utf8', 'utf8_general_ci', 'varchar(512)', '', '', 'select', '');
INSERT INTO `COLUMNS` VALUES(NULL, 'information_schema', 'KEY_COLUMN_USAGE', 'CONSTRAINT_SCHEMA', 2, '', 'NO', 'varchar', 64, 192, NULL, NULL, 'utf8', 'utf8_general_ci', 'varchar(64)', '', '', 'select', '');
INSERT INTO `COLUMNS` VALUES(NULL, 'information_schema', 'KEY_COLUMN_USAGE', 'CONSTRAINT_NAME', 3, '', 'NO', 'varchar', 64, 192, NULL, NULL, 'utf8', 'utf8_general_ci', 'varchar(64)', '', '', 'select', '');
INSERT INTO `COLUMNS` VALUES(NULL, 'information_schema', 'KEY_COLUMN_USAGE', 'TABLE_CATALOG', 4, NULL, 'YES', 'varchar', 512, 1536, NULL, NULL, 'utf8', 'utf8_general_ci', 'varchar(512)', '', '', 'select', '');
INSERT INTO `COLUMNS` VALUES(NULL, 'information_schema', 'KEY_COLUMN_USAGE', 'TABLE_SCHEMA', 5, '', 'NO', 'varchar', 64, 192, NULL, NULL, 'utf8', 'utf8_general_ci', 'varchar(64)', '', '', 'select', '');
INSERT INTO `COLUMNS` VALUES(NULL, 'information_schema', 'KEY_COLUMN_USAGE', 'TABLE_NAME', 6, '', 'NO', 'varchar', 64, 192, NULL, NULL, 'utf8', 'utf8_general_ci', 'varchar(64)', '', '', 'select', '');
INSERT INTO `COLUMNS` VALUES(NULL, 'information_schema', 'KEY_COLUMN_USAGE', 'COLUMN_NAME', 7, '', 'NO', 'varchar', 64, 192, NULL, NULL, 'utf8', 'utf8_general_ci', 'varchar(64)', '', '', 'select', '');
INSERT INTO `COLUMNS` VALUES(NULL, 'information_schema', 'KEY_COLUMN_USAGE', 'ORDINAL_POSITION', 8, '0', 'NO', 'bigint', NULL, NULL, 19, 0, NULL, NULL, 'bigint(10)', '', '', 'select', '');
INSERT INTO `COLUMNS` VALUES(NULL, 'information_schema', 'KEY_COLUMN_USAGE', 'POSITION_IN_UNIQUE_CONSTRAINT', 9, NULL, 'YES', 'bigint', NULL, NULL, 19, 0, NULL, NULL, 'bigint(10)', '', '', 'select', '');
INSERT INTO `COLUMNS` VALUES(NULL, 'information_schema', 'KEY_COLUMN_USAGE', 'REFERENCED_TABLE_SCHEMA', 10, NULL, 'YES', 'varchar', 64, 192, NULL, NULL, 'utf8', 'utf8_general_ci', 'varchar(64)', '', '', 'select', '');
INSERT INTO `COLUMNS` VALUES(NULL, 'information_schema', 'KEY_COLUMN_USAGE', 'REFERENCED_TABLE_NAME', 11, NULL, 'YES', 'varchar', 64, 192, NULL, NULL, 'utf8', 'utf8_general_ci', 'varchar(64)', '', '', 'select', '');
INSERT INTO `COLUMNS` VALUES(NULL, 'information_schema', 'KEY_COLUMN_USAGE', 'REFERENCED_COLUMN_NAME', 12, NULL, 'YES', 'varchar', 64, 192, NULL, NULL, 'utf8', 'utf8_general_ci', 'varchar(64)', '', '', 'select', '');
INSERT INTO `COLUMNS` VALUES(NULL, 'information_schema', 'PROCESSLIST', 'ID', 1, '0', 'NO', 'bigint', NULL, NULL, 19, 0, NULL, NULL, 'bigint(4)', '', '', 'select', '');
INSERT INTO `COLUMNS` VALUES(NULL, 'information_schema', 'PROCESSLIST', 'USER', 2, '', 'NO', 'varchar', 16, 48, NULL, NULL, 'utf8', 'utf8_general_ci', 'varchar(16)', '', '', 'select', '');
INSERT INTO `COLUMNS` VALUES(NULL, 'information_schema', 'PROCESSLIST', 'HOST', 3, '', 'NO', 'varchar', 64, 192, NULL, NULL, 'utf8', 'utf8_general_ci', 'varchar(64)', '', '', 'select', '');
INSERT INTO `COLUMNS` VALUES(NULL, 'information_schema', 'PROCESSLIST', 'DB', 4, NULL, 'YES', 'varchar', 64, 192, NULL, NULL, 'utf8', 'utf8_general_ci', 'varchar(64)', '', '', 'select', '');
INSERT INTO `COLUMNS` VALUES(NULL, 'information_schema', 'PROCESSLIST', 'COMMAND', 5, '', 'NO', 'varchar', 16, 48, NULL, NULL, 'utf8', 'utf8_general_ci', 'varchar(16)', '', '', 'select', '');
INSERT INTO `COLUMNS` VALUES(NULL, 'information_schema', 'PROCESSLIST', 'TIME', 6, '0', 'NO', 'bigint', NULL, NULL, 19, 0, NULL, NULL, 'bigint(7)', '', '', 'select', '');
INSERT INTO `COLUMNS` VALUES(NULL, 'information_schema', 'PROCESSLIST', 'STATE', 7, NULL, 'YES', 'varchar', 64, 192, NULL, NULL, 'utf8', 'utf8_general_ci', 'varchar(64)', '', '', 'select', '');
INSERT INTO `COLUMNS` VALUES(NULL, 'information_schema', 'PROCESSLIST', 'INFO', 8, NULL, 'YES', 'longtext', 4294967295, 4294967295, NULL, NULL, 'utf8', 'utf8_general_ci', 'longtext', '', '', 'select', '');
INSERT INTO `COLUMNS` VALUES(NULL, 'information_schema', 'PROCESSLIST', 'TIME_MS', 9, '0.000', 'NO', 'decimal', NULL, NULL, 22, 3, NULL, NULL, 'decimal(22,3)', '', '', 'select', '');
INSERT INTO `COLUMNS` VALUES(NULL, 'information_schema', 'PROFILING', 'QUERY_ID', 1, '0', 'NO', 'bigint', NULL, NULL, 19, 0, NULL, NULL, 'bigint(20)', '', '', 'select', '');
INSERT INTO `COLUMNS` VALUES(NULL, 'information_schema', 'PROFILING', 'SEQ', 2, '0', 'NO', 'bigint', NULL, NULL, 19, 0, NULL, NULL, 'bigint(20)', '', '', 'select', '');
INSERT INTO `COLUMNS` VALUES(NULL, 'information_schema', 'PROFILING', 'STATE', 3, '', 'NO', 'varchar', 30, 90, NULL, NULL, 'utf8', 'utf8_general_ci', 'varchar(30)', '', '', 'select', '');
INSERT INTO `COLUMNS` VALUES(NULL, 'information_schema', 'PROFILING', 'DURATION', 4, '0.000000', 'NO', 'decimal', NULL, NULL, 9, 6, NULL, NULL, 'decimal(9,6)', '', '', 'select', '');
INSERT INTO `COLUMNS` VALUES(NULL, 'information_schema', 'PROFILING', 'CPU_USER', 5, NULL, 'YES', 'decimal', NULL, NULL, 9, 6, NULL, NULL, 'decimal(9,6)', '', '', 'select', '');
INSERT INTO `COLUMNS` VALUES(NULL, 'information_schema', 'PROFILING', 'CPU_SYSTEM', 6, NULL, 'YES', 'decimal', NULL, NULL, 9, 6, NULL, NULL, 'decimal(9,6)', '', '', 'select', '');
INSERT INTO `COLUMNS` VALUES(NULL, 'information_schema', 'PROFILING', 'CONTEXT_VOLUNTARY', 7, NULL, 'YES', 'bigint', NULL, NULL, 19, 0, NULL, NULL, 'bigint(20)', '', '', 'select', '');
INSERT INTO `COLUMNS` VALUES(NULL, 'information_schema', 'PROFILING', 'CONTEXT_INVOLUNTARY', 8, NULL, 'YES', 'bigint', NULL, NULL, 19, 0, NULL, NULL, 'bigint(20)', '', '', 'select', '');
INSERT INTO `COLUMNS` VALUES(NULL, 'information_schema', 'PROFILING', 'BLOCK_OPS_IN', 9, NULL, 'YES', 'bigint', NULL, NULL, 19, 0, NULL, NULL, 'bigint(20)', '', '', 'select', '');
INSERT INTO `COLUMNS` VALUES(NULL, 'information_schema', 'PROFILING', 'BLOCK_OPS_OUT', 10, NULL, 'YES', 'bigint', NULL, NULL, 19, 0, NULL, NULL, 'bigint(20)', '', '', 'select', '');
INSERT INTO `COLUMNS` VALUES(NULL, 'information_schema', 'PROFILING', 'MESSAGES_SENT', 11, NULL, 'YES', 'bigint', NULL, NULL, 19, 0, NULL, NULL, 'bigint(20)', '', '', 'select', '');
INSERT INTO `COLUMNS` VALUES(NULL, 'information_schema', 'PROFILING', 'MESSAGES_RECEIVED', 12, NULL, 'YES', 'bigint', NULL, NULL, 19, 0, NULL, NULL, 'bigint(20)', '', '', 'select', '');
INSERT INTO `COLUMNS` VALUES(NULL, 'information_schema', 'PROFILING', 'PAGE_FAULTS_MAJOR', 13, NULL, 'YES', 'bigint', NULL, NULL, 19, 0, NULL, NULL, 'bigint(20)', '', '', 'select', '');
INSERT INTO `COLUMNS` VALUES(NULL, 'information_schema', 'PROFILING', 'PAGE_FAULTS_MINOR', 14, NULL, 'YES', 'bigint', NULL, NULL, 19, 0, NULL, NULL, 'bigint(20)', '', '', 'select', '');
INSERT INTO `COLUMNS` VALUES(NULL, 'information_schema', 'PROFILING', 'SWAPS', 15, NULL, 'YES', 'bigint', NULL, NULL, 19, 0, NULL, NULL, 'bigint(20)', '', '', 'select', '');
INSERT INTO `COLUMNS` VALUES(NULL, 'information_schema', 'PROFILING', 'SOURCE_FUNCTION', 16, NULL, 'YES', 'varchar', 30, 90, NULL, NULL, 'utf8', 'utf8_general_ci', 'varchar(30)', '', '', 'select', '');
INSERT INTO `COLUMNS` VALUES(NULL, 'information_schema', 'PROFILING', 'SOURCE_FILE', 17, NULL, 'YES', 'varchar', 20, 60, NULL, NULL, 'utf8', 'utf8_general_ci', 'varchar(20)', '', '', 'select', '');
INSERT INTO `COLUMNS` VALUES(NULL, 'information_schema', 'PROFILING', 'SOURCE_LINE', 18, NULL, 'YES', 'bigint', NULL, NULL, 19, 0, NULL, NULL, 'bigint(20)', '', '', 'select', '');
INSERT INTO `COLUMNS` VALUES(NULL, 'information_schema', 'ROUTINES', 'SPECIFIC_NAME', 1, '', 'NO', 'varchar', 64, 192, NULL, NULL, 'utf8', 'utf8_general_ci', 'varchar(64)', '', '', 'select', '');
INSERT INTO `COLUMNS` VALUES(NULL, 'information_schema', 'ROUTINES', 'ROUTINE_CATALOG', 2, NULL, 'YES', 'varchar', 512, 1536, NULL, NULL, 'utf8', 'utf8_general_ci', 'varchar(512)', '', '', 'select', '');
INSERT INTO `COLUMNS` VALUES(NULL, 'information_schema', 'ROUTINES', 'ROUTINE_SCHEMA', 3, '', 'NO', 'varchar', 64, 192, NULL, NULL, 'utf8', 'utf8_general_ci', 'varchar(64)', '', '', 'select', '');
INSERT INTO `COLUMNS` VALUES(NULL, 'information_schema', 'ROUTINES', 'ROUTINE_NAME', 4, '', 'NO', 'varchar', 64, 192, NULL, NULL, 'utf8', 'utf8_general_ci', 'varchar(64)', '', '', 'select', '');
INSERT INTO `COLUMNS` VALUES(NULL, 'information_schema', 'ROUTINES', 'ROUTINE_TYPE', 5, '', 'NO', 'varchar', 9, 27, NULL, NULL, 'utf8', 'utf8_general_ci', 'varchar(9)', '', '', 'select', '');
INSERT INTO `COLUMNS` VALUES(NULL, 'information_schema', 'ROUTINES', 'DTD_IDENTIFIER', 6, NULL, 'YES', 'varchar', 64, 192, NULL, NULL, 'utf8', 'utf8_general_ci', 'varchar(64)', '', '', 'select', '');
INSERT INTO `COLUMNS` VALUES(NULL, 'information_schema', 'ROUTINES', 'ROUTINE_BODY', 7, '', 'NO', 'varchar', 8, 24, NULL, NULL, 'utf8', 'utf8_general_ci', 'varchar(8)', '', '', 'select', '');
INSERT INTO `COLUMNS` VALUES(NULL, 'information_schema', 'ROUTINES', 'ROUTINE_DEFINITION', 8, NULL, 'YES', 'longtext', 4294967295, 4294967295, NULL, NULL, 'utf8', 'utf8_general_ci', 'longtext', '', '', 'select', '');
INSERT INTO `COLUMNS` VALUES(NULL, 'information_schema', 'ROUTINES', 'EXTERNAL_NAME', 9, NULL, 'YES', 'varchar', 64, 192, NULL, NULL, 'utf8', 'utf8_general_ci', 'varchar(64)', '', '', 'select', '');
INSERT INTO `COLUMNS` VALUES(NULL, 'information_schema', 'ROUTINES', 'EXTERNAL_LANGUAGE', 10, NULL, 'YES', 'varchar', 64, 192, NULL, NULL, 'utf8', 'utf8_general_ci', 'varchar(64)', '', '', 'select', '');
INSERT INTO `COLUMNS` VALUES(NULL, 'information_schema', 'ROUTINES', 'PARAMETER_STYLE', 11, '', 'NO', 'varchar', 8, 24, NULL, NULL, 'utf8', 'utf8_general_ci', 'varchar(8)', '', '', 'select', '');
INSERT INTO `COLUMNS` VALUES(NULL, 'information_schema', 'ROUTINES', 'IS_DETERMINISTIC', 12, '', 'NO', 'varchar', 3, 9, NULL, NULL, 'utf8', 'utf8_general_ci', 'varchar(3)', '', '', 'select', '');
INSERT INTO `COLUMNS` VALUES(NULL, 'information_schema', 'ROUTINES', 'SQL_DATA_ACCESS', 13, '', 'NO', 'varchar', 64, 192, NULL, NULL, 'utf8', 'utf8_general_ci', 'varchar(64)', '', '', 'select', '');
INSERT INTO `COLUMNS` VALUES(NULL, 'information_schema', 'ROUTINES', 'SQL_PATH', 14, NULL, 'YES', 'varchar', 64, 192, NULL, NULL, 'utf8', 'utf8_general_ci', 'varchar(64)', '', '', 'select', '');
INSERT INTO `COLUMNS` VALUES(NULL, 'information_schema', 'ROUTINES', 'SECURITY_TYPE', 15, '', 'NO', 'varchar', 7, 21, NULL, NULL, 'utf8', 'utf8_general_ci', 'varchar(7)', '', '', 'select', '');
INSERT INTO `COLUMNS` VALUES(NULL, 'information_schema', 'ROUTINES', 'CREATED', 16, '0000-00-00 00:00:00', 'NO', 'datetime', NULL, NULL, NULL, NULL, NULL, NULL, 'datetime', '', '', 'select', '');
INSERT INTO `COLUMNS` VALUES(NULL, 'information_schema', 'ROUTINES', 'LAST_ALTERED', 17, '0000-00-00 00:00:00', 'NO', 'datetime', NULL, NULL, NULL, NULL, NULL, NULL, 'datetime', '', '', 'select', '');
INSERT INTO `COLUMNS` VALUES(NULL, 'information_schema', 'ROUTINES', 'SQL_MODE', 18, NULL, 'NO', 'longtext', 4294967295, 4294967295, NULL, NULL, 'utf8', 'utf8_general_ci', 'longtext', '', '', 'select', '');
INSERT INTO `COLUMNS` VALUES(NULL, 'information_schema', 'ROUTINES', 'ROUTINE_COMMENT', 19, '', 'NO', 'varchar', 64, 192, NULL, NULL, 'utf8', 'utf8_general_ci', 'varchar(64)', '', '', 'select', '');
INSERT INTO `COLUMNS` VALUES(NULL, 'information_schema', 'ROUTINES', 'DEFINER', 20, '', 'NO', 'varchar', 77, 231, NULL, NULL, 'utf8', 'utf8_general_ci', 'varchar(77)', '', '', 'select', '');
INSERT INTO `COLUMNS` VALUES(NULL, 'information_schema', 'SCHEMATA', 'CATALOG_NAME', 1, NULL, 'YES', 'varchar', 512, 1536, NULL, NULL, 'utf8', 'utf8_general_ci', 'varchar(512)', '', '', 'select', '');
INSERT INTO `COLUMNS` VALUES(NULL, 'information_schema', 'SCHEMATA', 'SCHEMA_NAME', 2, '', 'NO', 'varchar', 64, 192, NULL, NULL, 'utf8', 'utf8_general_ci', 'varchar(64)', '', '', 'select', '');
INSERT INTO `COLUMNS` VALUES(NULL, 'information_schema', 'SCHEMATA', 'DEFAULT_CHARACTER_SET_NAME', 3, '', 'NO', 'varchar', 64, 192, NULL, NULL, 'utf8', 'utf8_general_ci', 'varchar(64)', '', '', 'select', '');
INSERT INTO `COLUMNS` VALUES(NULL, 'information_schema', 'SCHEMATA', 'DEFAULT_COLLATION_NAME', 4, '', 'NO', 'varchar', 64, 192, NULL, NULL, 'utf8', 'utf8_general_ci', 'varchar(64)', '', '', 'select', '');
INSERT INTO `COLUMNS` VALUES(NULL, 'information_schema', 'SCHEMATA', 'SQL_PATH', 5, NULL, 'YES', 'varchar', 512, 1536, NULL, NULL, 'utf8', 'utf8_general_ci', 'varchar(512)', '', '', 'select', '');
INSERT INTO `COLUMNS` VALUES(NULL, 'information_schema', 'SCHEMA_PRIVILEGES', 'GRANTEE', 1, '', 'NO', 'varchar', 81, 243, NULL, NULL, 'utf8', 'utf8_general_ci', 'varchar(81)', '', '', 'select', '');
INSERT INTO `COLUMNS` VALUES(NULL, 'information_schema', 'SCHEMA_PRIVILEGES', 'TABLE_CATALOG', 2, NULL, 'YES', 'varchar', 512, 1536, NULL, NULL, 'utf8', 'utf8_general_ci', 'varchar(512)', '', '', 'select', '');
INSERT INTO `COLUMNS` VALUES(NULL, 'information_schema', 'SCHEMA_PRIVILEGES', 'TABLE_SCHEMA', 3, '', 'NO', 'varchar', 64, 192, NULL, NULL, 'utf8', 'utf8_general_ci', 'varchar(64)', '', '', 'select', '');
INSERT INTO `COLUMNS` VALUES(NULL, 'information_schema', 'SCHEMA_PRIVILEGES', 'PRIVILEGE_TYPE', 4, '', 'NO', 'varchar', 64, 192, NULL, NULL, 'utf8', 'utf8_general_ci', 'varchar(64)', '', '', 'select', '');
INSERT INTO `COLUMNS` VALUES(NULL, 'information_schema', 'SCHEMA_PRIVILEGES', 'IS_GRANTABLE', 5, '', 'NO', 'varchar', 3, 9, NULL, NULL, 'utf8', 'utf8_general_ci', 'varchar(3)', '', '', 'select', '');
INSERT INTO `COLUMNS` VALUES(NULL, 'information_schema', 'STATISTICS', 'TABLE_CATALOG', 1, NULL, 'YES', 'varchar', 512, 1536, NULL, NULL, 'utf8', 'utf8_general_ci', 'varchar(512)', '', '', 'select', '');
INSERT INTO `COLUMNS` VALUES(NULL, 'information_schema', 'STATISTICS', 'TABLE_SCHEMA', 2, '', 'NO', 'varchar', 64, 192, NULL, NULL, 'utf8', 'utf8_general_ci', 'varchar(64)', '', '', 'select', '');
INSERT INTO `COLUMNS` VALUES(NULL, 'information_schema', 'STATISTICS', 'TABLE_NAME', 3, '', 'NO', 'varchar', 64, 192, NULL, NULL, 'utf8', 'utf8_general_ci', 'varchar(64)', '', '', 'select', '');
INSERT INTO `COLUMNS` VALUES(NULL, 'information_schema', 'STATISTICS', 'NON_UNIQUE', 4, '0', 'NO', 'bigint', NULL, NULL, 19, 0, NULL, NULL, 'bigint(1)', '', '', 'select', '');
INSERT INTO `COLUMNS` VALUES(NULL, 'information_schema', 'STATISTICS', 'INDEX_SCHEMA', 5, '', 'NO', 'varchar', 64, 192, NULL, NULL, 'utf8', 'utf8_general_ci', 'varchar(64)', '', '', 'select', '');
INSERT INTO `COLUMNS` VALUES(NULL, 'information_schema', 'STATISTICS', 'INDEX_NAME', 6, '', 'NO', 'varchar', 64, 192, NULL, NULL, 'utf8', 'utf8_general_ci', 'varchar(64)', '', '', 'select', '');
INSERT INTO `COLUMNS` VALUES(NULL, 'information_schema', 'STATISTICS', 'SEQ_IN_INDEX', 7, '0', 'NO', 'bigint', NULL, NULL, 19, 0, NULL, NULL, 'bigint(2)', '', '', 'select', '');
INSERT INTO `COLUMNS` VALUES(NULL, 'information_schema', 'STATISTICS', 'COLUMN_NAME', 8, '', 'NO', 'varchar', 64, 192, NULL, NULL, 'utf8', 'utf8_general_ci', 'varchar(64)', '', '', 'select', '');
INSERT INTO `COLUMNS` VALUES(NULL, 'information_schema', 'STATISTICS', 'COLLATION', 9, NULL, 'YES', 'varchar', 1, 3, NULL, NULL, 'utf8', 'utf8_general_ci', 'varchar(1)', '', '', 'select', '');
INSERT INTO `COLUMNS` VALUES(NULL, 'information_schema', 'STATISTICS', 'CARDINALITY', 10, NULL, 'YES', 'bigint', NULL, NULL, 19, 0, NULL, NULL, 'bigint(21)', '', '', 'select', '');
INSERT INTO `COLUMNS` VALUES(NULL, 'information_schema', 'STATISTICS', 'SUB_PART', 11, NULL, 'YES', 'bigint', NULL, NULL, 19, 0, NULL, NULL, 'bigint(3)', '', '', 'select', '');
INSERT INTO `COLUMNS` VALUES(NULL, 'information_schema', 'STATISTICS', 'PACKED', 12, NULL, 'YES', 'varchar', 10, 30, NULL, NULL, 'utf8', 'utf8_general_ci', 'varchar(10)', '', '', 'select', '');
INSERT INTO `COLUMNS` VALUES(NULL, 'information_schema', 'STATISTICS', 'NULLABLE', 13, '', 'NO', 'varchar', 3, 9, NULL, NULL, 'utf8', 'utf8_general_ci', 'varchar(3)', '', '', 'select', '');
INSERT INTO `COLUMNS` VALUES(NULL, 'information_schema', 'STATISTICS', 'INDEX_TYPE', 14, '', 'NO', 'varchar', 16, 48, NULL, NULL, 'utf8', 'utf8_general_ci', 'varchar(16)', '', '', 'select', '');
INSERT INTO `COLUMNS` VALUES(NULL, 'information_schema', 'STATISTICS', 'COMMENT', 15, NULL, 'YES', 'varchar', 16, 48, NULL, NULL, 'utf8', 'utf8_general_ci', 'varchar(16)', '', '', 'select', '');
INSERT INTO `COLUMNS` VALUES(NULL, 'information_schema', 'TABLES', 'TABLE_CATALOG', 1, NULL, 'YES', 'varchar', 512, 1536, NULL, NULL, 'utf8', 'utf8_general_ci', 'varchar(512)', '', '', 'select', '');
INSERT INTO `COLUMNS` VALUES(NULL, 'information_schema', 'TABLES', 'TABLE_SCHEMA', 2, '', 'NO', 'varchar', 64, 192, NULL, NULL, 'utf8', 'utf8_general_ci', 'varchar(64)', '', '', 'select', '');
INSERT INTO `COLUMNS` VALUES(NULL, 'information_schema', 'TABLES', 'TABLE_NAME', 3, '', 'NO', 'varchar', 64, 192, NULL, NULL, 'utf8', 'utf8_general_ci', 'varchar(64)', '', '', 'select', '');
INSERT INTO `COLUMNS` VALUES(NULL, 'information_schema', 'TABLES', 'TABLE_TYPE', 4, '', 'NO', 'varchar', 64, 192, NULL, NULL, 'utf8', 'utf8_general_ci', 'varchar(64)', '', '', 'select', '');
INSERT INTO `COLUMNS` VALUES(NULL, 'information_schema', 'TABLES', 'ENGINE', 5, NULL, 'YES', 'varchar', 64, 192, NULL, NULL, 'utf8', 'utf8_general_ci', 'varchar(64)', '', '', 'select', '');
INSERT INTO `COLUMNS` VALUES(NULL, 'information_schema', 'TABLES', 'VERSION', 6, NULL, 'YES', 'bigint', NULL, NULL, 19, 0, NULL, NULL, 'bigint(21)', '', '', 'select', '');
INSERT INTO `COLUMNS` VALUES(NULL, 'information_schema', 'TABLES', 'ROW_FORMAT', 7, NULL, 'YES', 'varchar', 10, 30, NULL, NULL, 'utf8', 'utf8_general_ci', 'varchar(10)', '', '', 'select', '');
INSERT INTO `COLUMNS` VALUES(NULL, 'information_schema', 'TABLES', 'TABLE_ROWS', 8, NULL, 'YES', 'bigint', NULL, NULL, 19, 0, NULL, NULL, 'bigint(21)', '', '', 'select', '');
INSERT INTO `COLUMNS` VALUES(NULL, 'information_schema', 'TABLES', 'AVG_ROW_LENGTH', 9, NULL, 'YES', 'bigint', NULL, NULL, 19, 0, NULL, NULL, 'bigint(21)', '', '', 'select', '');
INSERT INTO `COLUMNS` VALUES(NULL, 'information_schema', 'TABLES', 'DATA_LENGTH', 10, NULL, 'YES', 'bigint', NULL, NULL, 19, 0, NULL, NULL, 'bigint(21)', '', '', 'select', '');
INSERT INTO `COLUMNS` VALUES(NULL, 'information_schema', 'TABLES', 'MAX_DATA_LENGTH', 11, NULL, 'YES', 'bigint', NULL, NULL, 19, 0, NULL, NULL, 'bigint(21)', '', '', 'select', '');
INSERT INTO `COLUMNS` VALUES(NULL, 'information_schema', 'TABLES', 'INDEX_LENGTH', 12, NULL, 'YES', 'bigint', NULL, NULL, 19, 0, NULL, NULL, 'bigint(21)', '', '', 'select', '');
INSERT INTO `COLUMNS` VALUES(NULL, 'information_schema', 'TABLES', 'DATA_FREE', 13, NULL, 'YES', 'bigint', NULL, NULL, 19, 0, NULL, NULL, 'bigint(21)', '', '', 'select', '');
INSERT INTO `COLUMNS` VALUES(NULL, 'information_schema', 'TABLES', 'AUTO_INCREMENT', 14, NULL, 'YES', 'bigint', NULL, NULL, 19, 0, NULL, NULL, 'bigint(21)', '', '', 'select', '');
INSERT INTO `COLUMNS` VALUES(NULL, 'information_schema', 'TABLES', 'CREATE_TIME', 15, NULL, 'YES', 'datetime', NULL, NULL, NULL, NULL, NULL, NULL, 'datetime', '', '', 'select', '');
INSERT INTO `COLUMNS` VALUES(NULL, 'information_schema', 'TABLES', 'UPDATE_TIME', 16, NULL, 'YES', 'datetime', NULL, NULL, NULL, NULL, NULL, NULL, 'datetime', '', '', 'select', '');
INSERT INTO `COLUMNS` VALUES(NULL, 'information_schema', 'TABLES', 'CHECK_TIME', 17, NULL, 'YES', 'datetime', NULL, NULL, NULL, NULL, NULL, NULL, 'datetime', '', '', 'select', '');
INSERT INTO `COLUMNS` VALUES(NULL, 'information_schema', 'TABLES', 'TABLE_COLLATION', 18, NULL, 'YES', 'varchar', 64, 192, NULL, NULL, 'utf8', 'utf8_general_ci', 'varchar(64)', '', '', 'select', '');
INSERT INTO `COLUMNS` VALUES(NULL, 'information_schema', 'TABLES', 'CHECKSUM', 19, NULL, 'YES', 'bigint', NULL, NULL, 19, 0, NULL, NULL, 'bigint(21)', '', '', 'select', '');
INSERT INTO `COLUMNS` VALUES(NULL, 'information_schema', 'TABLES', 'CREATE_OPTIONS', 20, NULL, 'YES', 'varchar', 255, 765, NULL, NULL, 'utf8', 'utf8_general_ci', 'varchar(255)', '', '', 'select', '');
INSERT INTO `COLUMNS` VALUES(NULL, 'information_schema', 'TABLES', 'TABLE_COMMENT', 21, '', 'NO', 'varchar', 80, 240, NULL, NULL, 'utf8', 'utf8_general_ci', 'varchar(80)', '', '', 'select', '');
INSERT INTO `COLUMNS` VALUES(NULL, 'information_schema', 'TABLE_CONSTRAINTS', 'CONSTRAINT_CATALOG', 1, NULL, 'YES', 'varchar', 512, 1536, NULL, NULL, 'utf8', 'utf8_general_ci', 'varchar(512)', '', '', 'select', '');
INSERT INTO `COLUMNS` VALUES(NULL, 'information_schema', 'TABLE_CONSTRAINTS', 'CONSTRAINT_SCHEMA', 2, '', 'NO', 'varchar', 64, 192, NULL, NULL, 'utf8', 'utf8_general_ci', 'varchar(64)', '', '', 'select', '');
INSERT INTO `COLUMNS` VALUES(NULL, 'information_schema', 'TABLE_CONSTRAINTS', 'CONSTRAINT_NAME', 3, '', 'NO', 'varchar', 64, 192, NULL, NULL, 'utf8', 'utf8_general_ci', 'varchar(64)', '', '', 'select', '');
INSERT INTO `COLUMNS` VALUES(NULL, 'information_schema', 'TABLE_CONSTRAINTS', 'TABLE_SCHEMA', 4, '', 'NO', 'varchar', 64, 192, NULL, NULL, 'utf8', 'utf8_general_ci', 'varchar(64)', '', '', 'select', '');
INSERT INTO `COLUMNS` VALUES(NULL, 'information_schema', 'TABLE_CONSTRAINTS', 'TABLE_NAME', 5, '', 'NO', 'varchar', 64, 192, NULL, NULL, 'utf8', 'utf8_general_ci', 'varchar(64)', '', '', 'select', '');
INSERT INTO `COLUMNS` VALUES(NULL, 'information_schema', 'TABLE_CONSTRAINTS', 'CONSTRAINT_TYPE', 6, '', 'NO', 'varchar', 64, 192, NULL, NULL, 'utf8', 'utf8_general_ci', 'varchar(64)', '', '', 'select', '');
INSERT INTO `COLUMNS` VALUES(NULL, 'information_schema', 'TABLE_PRIVILEGES', 'GRANTEE', 1, '', 'NO', 'varchar', 81, 243, NULL, NULL, 'utf8', 'utf8_general_ci', 'varchar(81)', '', '', 'select', '');
INSERT INTO `COLUMNS` VALUES(NULL, 'information_schema', 'TABLE_PRIVILEGES', 'TABLE_CATALOG', 2, NULL, 'YES', 'varchar', 512, 1536, NULL, NULL, 'utf8', 'utf8_general_ci', 'varchar(512)', '', '', 'select', '');
INSERT INTO `COLUMNS` VALUES(NULL, 'information_schema', 'TABLE_PRIVILEGES', 'TABLE_SCHEMA', 3, '', 'NO', 'varchar', 64, 192, NULL, NULL, 'utf8', 'utf8_general_ci', 'varchar(64)', '', '', 'select', '');
INSERT INTO `COLUMNS` VALUES(NULL, 'information_schema', 'TABLE_PRIVILEGES', 'TABLE_NAME', 4, '', 'NO', 'varchar', 64, 192, NULL, NULL, 'utf8', 'utf8_general_ci', 'varchar(64)', '', '', 'select', '');
INSERT INTO `COLUMNS` VALUES(NULL, 'information_schema', 'TABLE_PRIVILEGES', 'PRIVILEGE_TYPE', 5, '', 'NO', 'varchar', 64, 192, NULL, NULL, 'utf8', 'utf8_general_ci', 'varchar(64)', '', '', 'select', '');
INSERT INTO `COLUMNS` VALUES(NULL, 'information_schema', 'TABLE_PRIVILEGES', 'IS_GRANTABLE', 6, '', 'NO', 'varchar', 3, 9, NULL, NULL, 'utf8', 'utf8_general_ci', 'varchar(3)', '', '', 'select', '');
INSERT INTO `COLUMNS` VALUES(NULL, 'information_schema', 'TABLE_STATISTICS', 'TABLE_SCHEMA', 1, '', 'NO', 'varchar', 64, 192, NULL, NULL, 'utf8', 'utf8_general_ci', 'varchar(64)', '', '', 'select', '');
INSERT INTO `COLUMNS` VALUES(NULL, 'information_schema', 'TABLE_STATISTICS', 'TABLE_NAME', 2, '', 'NO', 'varchar', 64, 192, NULL, NULL, 'utf8', 'utf8_general_ci', 'varchar(64)', '', '', 'select', '');
INSERT INTO `COLUMNS` VALUES(NULL, 'information_schema', 'TABLE_STATISTICS', 'ROWS_READ', 3, '0', 'NO', 'bigint', NULL, NULL, 19, 0, NULL, NULL, 'bigint(21)', '', '', 'select', '');
INSERT INTO `COLUMNS` VALUES(NULL, 'information_schema', 'TABLE_STATISTICS', 'ROWS_CHANGED', 4, '0', 'NO', 'bigint', NULL, NULL, 19, 0, NULL, NULL, 'bigint(21)', '', '', 'select', '');
INSERT INTO `COLUMNS` VALUES(NULL, 'information_schema', 'TABLE_STATISTICS', 'ROWS_CHANGED_X_INDEXES', 5, '0', 'NO', 'bigint', NULL, NULL, 19, 0, NULL, NULL, 'bigint(21)', '', '', 'select', '');
INSERT INTO `COLUMNS` VALUES(NULL, 'information_schema', 'TRIGGERS', 'TRIGGER_CATALOG', 1, NULL, 'YES', 'varchar', 512, 1536, NULL, NULL, 'utf8', 'utf8_general_ci', 'varchar(512)', '', '', 'select', '');
INSERT INTO `COLUMNS` VALUES(NULL, 'information_schema', 'TRIGGERS', 'TRIGGER_SCHEMA', 2, '', 'NO', 'varchar', 64, 192, NULL, NULL, 'utf8', 'utf8_general_ci', 'varchar(64)', '', '', 'select', '');
INSERT INTO `COLUMNS` VALUES(NULL, 'information_schema', 'TRIGGERS', 'TRIGGER_NAME', 3, '', 'NO', 'varchar', 64, 192, NULL, NULL, 'utf8', 'utf8_general_ci', 'varchar(64)', '', '', 'select', '');
INSERT INTO `COLUMNS` VALUES(NULL, 'information_schema', 'TRIGGERS', 'EVENT_MANIPULATION', 4, '', 'NO', 'varchar', 6, 18, NULL, NULL, 'utf8', 'utf8_general_ci', 'varchar(6)', '', '', 'select', '');
INSERT INTO `COLUMNS` VALUES(NULL, 'information_schema', 'TRIGGERS', 'EVENT_OBJECT_CATALOG', 5, NULL, 'YES', 'varchar', 512, 1536, NULL, NULL, 'utf8', 'utf8_general_ci', 'varchar(512)', '', '', 'select', '');
INSERT INTO `COLUMNS` VALUES(NULL, 'information_schema', 'TRIGGERS', 'EVENT_OBJECT_SCHEMA', 6, '', 'NO', 'varchar', 64, 192, NULL, NULL, 'utf8', 'utf8_general_ci', 'varchar(64)', '', '', 'select', '');
INSERT INTO `COLUMNS` VALUES(NULL, 'information_schema', 'TRIGGERS', 'EVENT_OBJECT_TABLE', 7, '', 'NO', 'varchar', 64, 192, NULL, NULL, 'utf8', 'utf8_general_ci', 'varchar(64)', '', '', 'select', '');
INSERT INTO `COLUMNS` VALUES(NULL, 'information_schema', 'TRIGGERS', 'ACTION_ORDER', 8, '0', 'NO', 'bigint', NULL, NULL, 19, 0, NULL, NULL, 'bigint(4)', '', '', 'select', '');
INSERT INTO `COLUMNS` VALUES(NULL, 'information_schema', 'TRIGGERS', 'ACTION_CONDITION', 9, NULL, 'YES', 'longtext', 4294967295, 4294967295, NULL, NULL, 'utf8', 'utf8_general_ci', 'longtext', '', '', 'select', '');
INSERT INTO `COLUMNS` VALUES(NULL, 'information_schema', 'TRIGGERS', 'ACTION_STATEMENT', 10, NULL, 'NO', 'longtext', 4294967295, 4294967295, NULL, NULL, 'utf8', 'utf8_general_ci', 'longtext', '', '', 'select', '');
INSERT INTO `COLUMNS` VALUES(NULL, 'information_schema', 'TRIGGERS', 'ACTION_ORIENTATION', 11, '', 'NO', 'varchar', 9, 27, NULL, NULL, 'utf8', 'utf8_general_ci', 'varchar(9)', '', '', 'select', '');
INSERT INTO `COLUMNS` VALUES(NULL, 'information_schema', 'TRIGGERS', 'ACTION_TIMING', 12, '', 'NO', 'varchar', 6, 18, NULL, NULL, 'utf8', 'utf8_general_ci', 'varchar(6)', '', '', 'select', '');
INSERT INTO `COLUMNS` VALUES(NULL, 'information_schema', 'TRIGGERS', 'ACTION_REFERENCE_OLD_TABLE', 13, NULL, 'YES', 'varchar', 64, 192, NULL, NULL, 'utf8', 'utf8_general_ci', 'varchar(64)', '', '', 'select', '');
INSERT INTO `COLUMNS` VALUES(NULL, 'information_schema', 'TRIGGERS', 'ACTION_REFERENCE_NEW_TABLE', 14, NULL, 'YES', 'varchar', 64, 192, NULL, NULL, 'utf8', 'utf8_general_ci', 'varchar(64)', '', '', 'select', '');
INSERT INTO `COLUMNS` VALUES(NULL, 'information_schema', 'TRIGGERS', 'ACTION_REFERENCE_OLD_ROW', 15, '', 'NO', 'varchar', 3, 9, NULL, NULL, 'utf8', 'utf8_general_ci', 'varchar(3)', '', '', 'select', '');
INSERT INTO `COLUMNS` VALUES(NULL, 'information_schema', 'TRIGGERS', 'ACTION_REFERENCE_NEW_ROW', 16, '', 'NO', 'varchar', 3, 9, NULL, NULL, 'utf8', 'utf8_general_ci', 'varchar(3)', '', '', 'select', '');
INSERT INTO `COLUMNS` VALUES(NULL, 'information_schema', 'TRIGGERS', 'CREATED', 17, NULL, 'YES', 'datetime', NULL, NULL, NULL, NULL, NULL, NULL, 'datetime', '', '', 'select', '');
INSERT INTO `COLUMNS` VALUES(NULL, 'information_schema', 'TRIGGERS', 'SQL_MODE', 18, NULL, 'NO', 'longtext', 4294967295, 4294967295, NULL, NULL, 'utf8', 'utf8_general_ci', 'longtext', '', '', 'select', '');
INSERT INTO `COLUMNS` VALUES(NULL, 'information_schema', 'TRIGGERS', 'DEFINER', 19, NULL, 'NO', 'longtext', 4294967295, 4294967295, NULL, NULL, 'utf8', 'utf8_general_ci', 'longtext', '', '', 'select', '');
INSERT INTO `COLUMNS` VALUES(NULL, 'information_schema', 'USER_PRIVILEGES', 'GRANTEE', 1, '', 'NO', 'varchar', 81, 243, NULL, NULL, 'utf8', 'utf8_general_ci', 'varchar(81)', '', '', 'select', '');
INSERT INTO `COLUMNS` VALUES(NULL, 'information_schema', 'USER_PRIVILEGES', 'TABLE_CATALOG', 2, NULL, 'YES', 'varchar', 512, 1536, NULL, NULL, 'utf8', 'utf8_general_ci', 'varchar(512)', '', '', 'select', '');
INSERT INTO `COLUMNS` VALUES(NULL, 'information_schema', 'USER_PRIVILEGES', 'PRIVILEGE_TYPE', 3, '', 'NO', 'varchar', 64, 192, NULL, NULL, 'utf8', 'utf8_general_ci', 'varchar(64)', '', '', 'select', '');
INSERT INTO `COLUMNS` VALUES(NULL, 'information_schema', 'USER_PRIVILEGES', 'IS_GRANTABLE', 4, '', 'NO', 'varchar', 3, 9, NULL, NULL, 'utf8', 'utf8_general_ci', 'varchar(3)', '', '', 'select', '');
INSERT INTO `COLUMNS` VALUES(NULL, 'information_schema', 'USER_STATISTICS', 'USER', 1, '', 'NO', 'varchar', 16, 48, NULL, NULL, 'utf8', 'utf8_general_ci', 'varchar(16)', '', '', 'select', '');
INSERT INTO `COLUMNS` VALUES(NULL, 'information_schema', 'USER_STATISTICS', 'TOTAL_CONNECTIONS', 2, '0', 'NO', 'bigint', NULL, NULL, 19, 0, NULL, NULL, 'bigint(21)', '', '', 'select', '');
INSERT INTO `COLUMNS` VALUES(NULL, 'information_schema', 'USER_STATISTICS', 'CONCURRENT_CONNECTIONS', 3, '0', 'NO', 'bigint', NULL, NULL, 19, 0, NULL, NULL, 'bigint(21)', '', '', 'select', '');
INSERT INTO `COLUMNS` VALUES(NULL, 'information_schema', 'USER_STATISTICS', 'CONNECTED_TIME', 4, '0', 'NO', 'bigint', NULL, NULL, 19, 0, NULL, NULL, 'bigint(21)', '', '', 'select', '');
INSERT INTO `COLUMNS` VALUES(NULL, 'information_schema', 'USER_STATISTICS', 'BUSY_TIME', 5, '0', 'NO', 'bigint', NULL, NULL, 19, 0, NULL, NULL, 'bigint(21)', '', '', 'select', '');
INSERT INTO `COLUMNS` VALUES(NULL, 'information_schema', 'USER_STATISTICS', 'CPU_TIME', 6, '0', 'NO', 'bigint', NULL, NULL, 19, 0, NULL, NULL, 'bigint(21)', '', '', 'select', '');
INSERT INTO `COLUMNS` VALUES(NULL, 'information_schema', 'USER_STATISTICS', 'BYTES_RECEIVED', 7, '0', 'NO', 'bigint', NULL, NULL, 19, 0, NULL, NULL, 'bigint(21)', '', '', 'select', '');
INSERT INTO `COLUMNS` VALUES(NULL, 'information_schema', 'USER_STATISTICS', 'BYTES_SENT', 8, '0', 'NO', 'bigint', NULL, NULL, 19, 0, NULL, NULL, 'bigint(21)', '', '', 'select', '');
INSERT INTO `COLUMNS` VALUES(NULL, 'information_schema', 'USER_STATISTICS', 'BINLOG_BYTES_WRITTEN', 9, '0', 'NO', 'bigint', NULL, NULL, 19, 0, NULL, NULL, 'bigint(21)', '', '', 'select', '');
INSERT INTO `COLUMNS` VALUES(NULL, 'information_schema', 'USER_STATISTICS', 'ROWS_FETCHED', 10, '0', 'NO', 'bigint', NULL, NULL, 19, 0, NULL, NULL, 'bigint(21)', '', '', 'select', '');
INSERT INTO `COLUMNS` VALUES(NULL, 'information_schema', 'USER_STATISTICS', 'ROWS_UPDATED', 11, '0', 'NO', 'bigint', NULL, NULL, 19, 0, NULL, NULL, 'bigint(21)', '', '', 'select', '');
INSERT INTO `COLUMNS` VALUES(NULL, 'information_schema', 'USER_STATISTICS', 'TABLE_ROWS_READ', 12, '0', 'NO', 'bigint', NULL, NULL, 19, 0, NULL, NULL, 'bigint(21)', '', '', 'select', '');
INSERT INTO `COLUMNS` VALUES(NULL, 'information_schema', 'USER_STATISTICS', 'SELECT_COMMANDS', 13, '0', 'NO', 'bigint', NULL, NULL, 19, 0, NULL, NULL, 'bigint(21)', '', '', 'select', '');
INSERT INTO `COLUMNS` VALUES(NULL, 'information_schema', 'USER_STATISTICS', 'UPDATE_COMMANDS', 14, '0', 'NO', 'bigint', NULL, NULL, 19, 0, NULL, NULL, 'bigint(21)', '', '', 'select', '');
INSERT INTO `COLUMNS` VALUES(NULL, 'information_schema', 'USER_STATISTICS', 'OTHER_COMMANDS', 15, '0', 'NO', 'bigint', NULL, NULL, 19, 0, NULL, NULL, 'bigint(21)', '', '', 'select', '');
INSERT INTO `COLUMNS` VALUES(NULL, 'information_schema', 'USER_STATISTICS', 'COMMIT_TRANSACTIONS', 16, '0', 'NO', 'bigint', NULL, NULL, 19, 0, NULL, NULL, 'bigint(21)', '', '', 'select', '');
INSERT INTO `COLUMNS` VALUES(NULL, 'information_schema', 'USER_STATISTICS', 'ROLLBACK_TRANSACTIONS', 17, '0', 'NO', 'bigint', NULL, NULL, 19, 0, NULL, NULL, 'bigint(21)', '', '', 'select', '');
INSERT INTO `COLUMNS` VALUES(NULL, 'information_schema', 'USER_STATISTICS', 'DENIED_CONNECTIONS', 18, '0', 'NO', 'bigint', NULL, NULL, 19, 0, NULL, NULL, 'bigint(21)', '', '', 'select', '');
INSERT INTO `COLUMNS` VALUES(NULL, 'information_schema', 'USER_STATISTICS', 'LOST_CONNECTIONS', 19, '0', 'NO', 'bigint', NULL, NULL, 19, 0, NULL, NULL, 'bigint(21)', '', '', 'select', '');
INSERT INTO `COLUMNS` VALUES(NULL, 'information_schema', 'USER_STATISTICS', 'ACCESS_DENIED', 20, '0', 'NO', 'bigint', NULL, NULL, 19, 0, NULL, NULL, 'bigint(21)', '', '', 'select', '');
INSERT INTO `COLUMNS` VALUES(NULL, 'information_schema', 'USER_STATISTICS', 'EMPTY_QUERIES', 21, '0', 'NO', 'bigint', NULL, NULL, 19, 0, NULL, NULL, 'bigint(21)', '', '', 'select', '');
INSERT INTO `COLUMNS` VALUES(NULL, 'information_schema', 'VIEWS', 'TABLE_CATALOG', 1, NULL, 'YES', 'varchar', 512, 1536, NULL, NULL, 'utf8', 'utf8_general_ci', 'varchar(512)', '', '', 'select', '');
INSERT INTO `COLUMNS` VALUES(NULL, 'information_schema', 'VIEWS', 'TABLE_SCHEMA', 2, '', 'NO', 'varchar', 64, 192, NULL, NULL, 'utf8', 'utf8_general_ci', 'varchar(64)', '', '', 'select', '');
INSERT INTO `COLUMNS` VALUES(NULL, 'information_schema', 'VIEWS', 'TABLE_NAME', 3, '', 'NO', 'varchar', 64, 192, NULL, NULL, 'utf8', 'utf8_general_ci', 'varchar(64)', '', '', 'select', '');
INSERT INTO `COLUMNS` VALUES(NULL, 'information_schema', 'VIEWS', 'VIEW_DEFINITION', 4, NULL, 'NO', 'longtext', 4294967295, 4294967295, NULL, NULL, 'utf8', 'utf8_general_ci', 'longtext', '', '', 'select', '');
INSERT INTO `COLUMNS` VALUES(NULL, 'information_schema', 'VIEWS', 'CHECK_OPTION', 5, '', 'NO', 'varchar', 8, 24, NULL, NULL, 'utf8', 'utf8_general_ci', 'varchar(8)', '', '', 'select', '');
INSERT INTO `COLUMNS` VALUES(NULL, 'information_schema', 'VIEWS', 'IS_UPDATABLE', 6, '', 'NO', 'varchar', 3, 9, NULL, NULL, 'utf8', 'utf8_general_ci', 'varchar(3)', '', '', 'select', '');
INSERT INTO `COLUMNS` VALUES(NULL, 'information_schema', 'VIEWS', 'DEFINER', 7, '', 'NO', 'varchar', 77, 231, NULL, NULL, 'utf8', 'utf8_general_ci', 'varchar(77)', '', '', 'select', '');
INSERT INTO `COLUMNS` VALUES(NULL, 'information_schema', 'VIEWS', 'SECURITY_TYPE', 8, '', 'NO', 'varchar', 7, 21, NULL, NULL, 'utf8', 'utf8_general_ci', 'varchar(7)', '', '', 'select', '');
INSERT INTO `COLUMNS` VALUES(NULL, 'information_schema', 'INNODB_IO_PATTERN', 'SPACE', 1, '0', 'NO', 'bigint', NULL, NULL, 19, 0, NULL, NULL, 'bigint(11)', '', '', 'select', '');
INSERT INTO `COLUMNS` VALUES(NULL, 'information_schema', 'INNODB_IO_PATTERN', 'OFFSET', 2, '0', 'NO', 'bigint', NULL, NULL, 19, 0, NULL, NULL, 'bigint(11)', '', '', 'select', '');
INSERT INTO `COLUMNS` VALUES(NULL, 'information_schema', 'INNODB_IO_PATTERN', 'INDEX_ID', 3, '0', 'NO', 'bigint', NULL, NULL, 19, 0, NULL, NULL, 'bigint(11)', '', '', 'select', '');
INSERT INTO `COLUMNS` VALUES(NULL, 'information_schema', 'INNODB_IO_PATTERN', 'TABLE_NAME', 4, '', 'NO', 'varchar', 32, 96, NULL, NULL, 'utf8', 'utf8_general_ci', 'varchar(32)', '', '', 'select', '');
INSERT INTO `COLUMNS` VALUES(NULL, 'information_schema', 'INNODB_IO_PATTERN', 'INDEX_NAME', 5, '', 'NO', 'varchar', 32, 96, NULL, NULL, 'utf8', 'utf8_general_ci', 'varchar(32)', '', '', 'select', '');
INSERT INTO `COLUMNS` VALUES(NULL, 'information_schema', 'INNODB_IO_PATTERN', 'N_READ', 6, '0', 'NO', 'bigint', NULL, NULL, 19, 0, NULL, NULL, 'bigint(11)', '', '', 'select', '');
INSERT INTO `COLUMNS` VALUES(NULL, 'information_schema', 'INNODB_IO_PATTERN', 'N_WRITE', 7, '0', 'NO', 'bigint', NULL, NULL, 19, 0, NULL, NULL, 'bigint(11)', '', '', 'select', '');
INSERT INTO `COLUMNS` VALUES(NULL, 'information_schema', 'INNODB_RSEG', 'RSEG_ID', 1, '0', 'NO', 'bigint', NULL, NULL, 19, 0, NULL, NULL, 'bigint(21)', '', '', 'select', '');
INSERT INTO `COLUMNS` VALUES(NULL, 'information_schema', 'INNODB_RSEG', 'SPACE_ID', 2, '0', 'NO', 'bigint', NULL, NULL, 19, 0, NULL, NULL, 'bigint(21)', '', '', 'select', '');
INSERT INTO `COLUMNS` VALUES(NULL, 'information_schema', 'INNODB_RSEG', 'PAGE_NO', 3, '0', 'NO', 'bigint', NULL, NULL, 19, 0, NULL, NULL, 'bigint(21)', '', '', 'select', '');
INSERT INTO `COLUMNS` VALUES(NULL, 'information_schema', 'INNODB_RSEG', 'MAX_SIZE', 4, '0', 'NO', 'bigint', NULL, NULL, 19, 0, NULL, NULL, 'bigint(21)', '', '', 'select', '');
INSERT INTO `COLUMNS` VALUES(NULL, 'information_schema', 'INNODB_RSEG', 'CURR_SIZE', 5, '0', 'NO', 'bigint', NULL, NULL, 19, 0, NULL, NULL, 'bigint(21)', '', '', 'select', '');
INSERT INTO `COLUMNS` VALUES(NULL, 'Facultylist', 'Faculties', 'sno', 1, NULL, 'NO', 'varchar', 10, 30, NULL, NULL, 'utf8', 'utf8_general_ci', 'varchar(10)', '', '', 'select,insert,update', '');
INSERT INTO `COLUMNS` VALUES(NULL, 'Facultylist', 'Faculties', 'gen', 2, NULL, 'NO', 'varchar', 100, 300, NULL, NULL, 'utf8', 'utf8_general_ci', 'varchar(100)', '', '', 'select,insert,update', '');
INSERT INTO `COLUMNS` VALUES(NULL, 'Facultylist', 'Faculties', 'name', 3, NULL, 'NO', 'varchar', 100, 300, NULL, NULL, 'utf8', 'utf8_general_ci', 'varchar(100)', '', '', 'select,insert,update', '');
INSERT INTO `COLUMNS` VALUES(NULL, 'Facultylist', 'Faculties', 'sex', 4, NULL, 'NO', 'varchar', 10, 30, NULL, NULL, 'utf8', 'utf8_general_ci', 'varchar(10)', '', '', 'select,insert,update', '');
INSERT INTO `COLUMNS` VALUES(NULL, 'Facultylist', 'Faculties', 'des', 5, NULL, 'NO', 'varchar', 100, 300, NULL, NULL, 'utf8', 'utf8_general_ci', 'varchar(100)', '', '', 'select,insert,update', '');
INSERT INTO `COLUMNS` VALUES(NULL, 'Facultylist', 'Faculties', 'room', 6, NULL, 'NO', 'varchar', 100, 300, NULL, NULL, 'utf8', 'utf8_general_ci', 'varchar(100)', '', '', 'select,insert,update', '');

-- --------------------------------------------------------

--
-- Table structure for table `COLUMN_PRIVILEGES`
--

CREATE TEMPORARY TABLE `COLUMN_PRIVILEGES` (
  `GRANTEE` varchar(81) NOT NULL default '',
  `TABLE_CATALOG` varchar(512) default NULL,
  `TABLE_SCHEMA` varchar(64) NOT NULL default '',
  `TABLE_NAME` varchar(64) NOT NULL default '',
  `COLUMN_NAME` varchar(64) NOT NULL default '',
  `PRIVILEGE_TYPE` varchar(64) NOT NULL default '',
  `IS_GRANTABLE` varchar(3) NOT NULL default ''
) ENGINE=MEMORY DEFAULT CHARSET=utf8;

--
-- Dumping data for table `COLUMN_PRIVILEGES`
--


-- --------------------------------------------------------

--
-- Table structure for table `INNODB_BUFFER_POOL_CONTENT`
--

CREATE TEMPORARY TABLE `INNODB_BUFFER_POOL_CONTENT` (
  `BLOCK_NUM` bigint(21) NOT NULL default '0',
  `SPACE` bigint(21) NOT NULL default '0',
  `OFFSET` bigint(21) NOT NULL default '0',
  `RECORDS` bigint(21) NOT NULL default '0',
  `DATASIZE` bigint(21) NOT NULL default '0',
  `FLUSH_TYPE` bigint(21) NOT NULL default '0',
  `FIX_COUNT` bigint(21) NOT NULL default '0',
  `LRU_POSITION` bigint(21) NOT NULL default '0',
  `PAGE_TYPE_ID` bigint(21) NOT NULL default '0',
  `PAGE_TYPE` varchar(64) NOT NULL default '',
  `INDEX_NAME` varchar(64) NOT NULL default '',
  `TABLE_SCHEMA` varchar(64) NOT NULL default '',
  `TABLE_NAME` varchar(64) NOT NULL default ''
) ENGINE=MEMORY DEFAULT CHARSET=utf8;

--
-- Dumping data for table `INNODB_BUFFER_POOL_CONTENT`
--

-- in use (#1227 - Access denied; you need the PROCESS privilege for this operation)

-- --------------------------------------------------------

--
-- Table structure for table `INDEX_STATISTICS`
--

CREATE TEMPORARY TABLE `INDEX_STATISTICS` (
  `TABLE_SCHEMA` varchar(64) NOT NULL default '',
  `TABLE_NAME` varchar(64) NOT NULL default '',
  `INDEX_NAME` varchar(64) NOT NULL default '',
  `ROWS_READ` bigint(21) NOT NULL default '0'
) ENGINE=MEMORY DEFAULT CHARSET=utf8;

--
-- Dumping data for table `INDEX_STATISTICS`
--


-- --------------------------------------------------------

--
-- Table structure for table `KEY_COLUMN_USAGE`
--

CREATE TEMPORARY TABLE `KEY_COLUMN_USAGE` (
  `CONSTRAINT_CATALOG` varchar(512) default NULL,
  `CONSTRAINT_SCHEMA` varchar(64) NOT NULL default '',
  `CONSTRAINT_NAME` varchar(64) NOT NULL default '',
  `TABLE_CATALOG` varchar(512) default NULL,
  `TABLE_SCHEMA` varchar(64) NOT NULL default '',
  `TABLE_NAME` varchar(64) NOT NULL default '',
  `COLUMN_NAME` varchar(64) NOT NULL default '',
  `ORDINAL_POSITION` bigint(10) NOT NULL default '0',
  `POSITION_IN_UNIQUE_CONSTRAINT` bigint(10) default NULL,
  `REFERENCED_TABLE_SCHEMA` varchar(64) default NULL,
  `REFERENCED_TABLE_NAME` varchar(64) default NULL,
  `REFERENCED_COLUMN_NAME` varchar(64) default NULL
) ENGINE=MEMORY DEFAULT CHARSET=utf8;

--
-- Dumping data for table `KEY_COLUMN_USAGE`
--


-- --------------------------------------------------------

--
-- Table structure for table `PROCESSLIST`
--

CREATE TEMPORARY TABLE `PROCESSLIST` (
  `ID` bigint(4) NOT NULL default '0',
  `USER` varchar(16) NOT NULL default '',
  `HOST` varchar(64) NOT NULL default '',
  `DB` varchar(64) default NULL,
  `COMMAND` varchar(16) NOT NULL default '',
  `TIME` bigint(7) NOT NULL default '0',
  `STATE` varchar(64) default NULL,
  `INFO` longtext,
  `TIME_MS` decimal(22,3) NOT NULL default '0.000'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `PROCESSLIST`
--

INSERT INTO `PROCESSLIST` VALUES(1920202, 'Facultylist', '182.50.131.34:50899', NULL, 'Query', 0, 'executing', 'SELECT * FROM `information_schema`.`PROCESSLIST`', 0.719);

-- --------------------------------------------------------

--
-- Table structure for table `PROFILING`
--

CREATE TEMPORARY TABLE `PROFILING` (
  `QUERY_ID` bigint(20) NOT NULL default '0',
  `SEQ` bigint(20) NOT NULL default '0',
  `STATE` varchar(30) NOT NULL default '',
  `DURATION` decimal(9,6) NOT NULL default '0.000000',
  `CPU_USER` decimal(9,6) default NULL,
  `CPU_SYSTEM` decimal(9,6) default NULL,
  `CONTEXT_VOLUNTARY` bigint(20) default NULL,
  `CONTEXT_INVOLUNTARY` bigint(20) default NULL,
  `BLOCK_OPS_IN` bigint(20) default NULL,
  `BLOCK_OPS_OUT` bigint(20) default NULL,
  `MESSAGES_SENT` bigint(20) default NULL,
  `MESSAGES_RECEIVED` bigint(20) default NULL,
  `PAGE_FAULTS_MAJOR` bigint(20) default NULL,
  `PAGE_FAULTS_MINOR` bigint(20) default NULL,
  `SWAPS` bigint(20) default NULL,
  `SOURCE_FUNCTION` varchar(30) default NULL,
  `SOURCE_FILE` varchar(20) default NULL,
  `SOURCE_LINE` bigint(20) default NULL
) ENGINE=MEMORY DEFAULT CHARSET=utf8;

--
-- Dumping data for table `PROFILING`
--


-- --------------------------------------------------------

--
-- Table structure for table `ROUTINES`
--

CREATE TEMPORARY TABLE `ROUTINES` (
  `SPECIFIC_NAME` varchar(64) NOT NULL default '',
  `ROUTINE_CATALOG` varchar(512) default NULL,
  `ROUTINE_SCHEMA` varchar(64) NOT NULL default '',
  `ROUTINE_NAME` varchar(64) NOT NULL default '',
  `ROUTINE_TYPE` varchar(9) NOT NULL default '',
  `DTD_IDENTIFIER` varchar(64) default NULL,
  `ROUTINE_BODY` varchar(8) NOT NULL default '',
  `ROUTINE_DEFINITION` longtext,
  `EXTERNAL_NAME` varchar(64) default NULL,
  `EXTERNAL_LANGUAGE` varchar(64) default NULL,
  `PARAMETER_STYLE` varchar(8) NOT NULL default '',
  `IS_DETERMINISTIC` varchar(3) NOT NULL default '',
  `SQL_DATA_ACCESS` varchar(64) NOT NULL default '',
  `SQL_PATH` varchar(64) default NULL,
  `SECURITY_TYPE` varchar(7) NOT NULL default '',
  `CREATED` datetime NOT NULL default '0000-00-00 00:00:00',
  `LAST_ALTERED` datetime NOT NULL default '0000-00-00 00:00:00',
  `SQL_MODE` longtext NOT NULL,
  `ROUTINE_COMMENT` varchar(64) NOT NULL default '',
  `DEFINER` varchar(77) NOT NULL default ''
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ROUTINES`
--


-- --------------------------------------------------------

--
-- Table structure for table `SCHEMATA`
--

CREATE TEMPORARY TABLE `SCHEMATA` (
  `CATALOG_NAME` varchar(512) default NULL,
  `SCHEMA_NAME` varchar(64) NOT NULL default '',
  `DEFAULT_CHARACTER_SET_NAME` varchar(64) NOT NULL default '',
  `DEFAULT_COLLATION_NAME` varchar(64) NOT NULL default '',
  `SQL_PATH` varchar(512) default NULL
) ENGINE=MEMORY DEFAULT CHARSET=utf8;

--
-- Dumping data for table `SCHEMATA`
--

INSERT INTO `SCHEMATA` VALUES(NULL, 'information_schema', 'utf8', 'utf8_general_ci', NULL);
INSERT INTO `SCHEMATA` VALUES(NULL, 'Facultylist', 'utf8', 'utf8_general_ci', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `SCHEMA_PRIVILEGES`
--

CREATE TEMPORARY TABLE `SCHEMA_PRIVILEGES` (
  `GRANTEE` varchar(81) NOT NULL default '',
  `TABLE_CATALOG` varchar(512) default NULL,
  `TABLE_SCHEMA` varchar(64) NOT NULL default '',
  `PRIVILEGE_TYPE` varchar(64) NOT NULL default '',
  `IS_GRANTABLE` varchar(3) NOT NULL default ''
) ENGINE=MEMORY DEFAULT CHARSET=utf8;

--
-- Dumping data for table `SCHEMA_PRIVILEGES`
--

INSERT INTO `SCHEMA_PRIVILEGES` VALUES('''Facultylist''@''%''', NULL, 'Facultylist', 'SELECT', 'NO');
INSERT INTO `SCHEMA_PRIVILEGES` VALUES('''Facultylist''@''%''', NULL, 'Facultylist', 'INSERT', 'NO');
INSERT INTO `SCHEMA_PRIVILEGES` VALUES('''Facultylist''@''%''', NULL, 'Facultylist', 'UPDATE', 'NO');
INSERT INTO `SCHEMA_PRIVILEGES` VALUES('''Facultylist''@''%''', NULL, 'Facultylist', 'DELETE', 'NO');
INSERT INTO `SCHEMA_PRIVILEGES` VALUES('''Facultylist''@''%''', NULL, 'Facultylist', 'CREATE', 'NO');
INSERT INTO `SCHEMA_PRIVILEGES` VALUES('''Facultylist''@''%''', NULL, 'Facultylist', 'DROP', 'NO');
INSERT INTO `SCHEMA_PRIVILEGES` VALUES('''Facultylist''@''%''', NULL, 'Facultylist', 'INDEX', 'NO');
INSERT INTO `SCHEMA_PRIVILEGES` VALUES('''Facultylist''@''%''', NULL, 'Facultylist', 'ALTER', 'NO');
INSERT INTO `SCHEMA_PRIVILEGES` VALUES('''Facultylist''@''%''', NULL, 'Facultylist', 'CREATE TEMPORARY TABLES', 'NO');
INSERT INTO `SCHEMA_PRIVILEGES` VALUES('''Facultylist''@''%''', NULL, 'Facultylist', 'LOCK TABLES', 'NO');
INSERT INTO `SCHEMA_PRIVILEGES` VALUES('''Facultylist''@''%''', NULL, 'Facultylist', 'EXECUTE', 'NO');
INSERT INTO `SCHEMA_PRIVILEGES` VALUES('''Facultylist''@''%''', NULL, 'Facultylist', 'CREATE VIEW', 'NO');
INSERT INTO `SCHEMA_PRIVILEGES` VALUES('''Facultylist''@''%''', NULL, 'Facultylist', 'SHOW VIEW', 'NO');
INSERT INTO `SCHEMA_PRIVILEGES` VALUES('''Facultylist''@''%''', NULL, 'Facultylist', 'CREATE ROUTINE', 'NO');
INSERT INTO `SCHEMA_PRIVILEGES` VALUES('''Facultylist''@''%''', NULL, 'Facultylist', 'ALTER ROUTINE', 'NO');

-- --------------------------------------------------------

--
-- Table structure for table `STATISTICS`
--

CREATE TEMPORARY TABLE `STATISTICS` (
  `TABLE_CATALOG` varchar(512) default NULL,
  `TABLE_SCHEMA` varchar(64) NOT NULL default '',
  `TABLE_NAME` varchar(64) NOT NULL default '',
  `NON_UNIQUE` bigint(1) NOT NULL default '0',
  `INDEX_SCHEMA` varchar(64) NOT NULL default '',
  `INDEX_NAME` varchar(64) NOT NULL default '',
  `SEQ_IN_INDEX` bigint(2) NOT NULL default '0',
  `COLUMN_NAME` varchar(64) NOT NULL default '',
  `COLLATION` varchar(1) default NULL,
  `CARDINALITY` bigint(21) default NULL,
  `SUB_PART` bigint(3) default NULL,
  `PACKED` varchar(10) default NULL,
  `NULLABLE` varchar(3) NOT NULL default '',
  `INDEX_TYPE` varchar(16) NOT NULL default '',
  `COMMENT` varchar(16) default NULL
) ENGINE=MEMORY DEFAULT CHARSET=utf8;

--
-- Dumping data for table `STATISTICS`
--


-- --------------------------------------------------------

--
-- Table structure for table `TABLES`
--

CREATE TEMPORARY TABLE `TABLES` (
  `TABLE_CATALOG` varchar(512) default NULL,
  `TABLE_SCHEMA` varchar(64) NOT NULL default '',
  `TABLE_NAME` varchar(64) NOT NULL default '',
  `TABLE_TYPE` varchar(64) NOT NULL default '',
  `ENGINE` varchar(64) default NULL,
  `VERSION` bigint(21) default NULL,
  `ROW_FORMAT` varchar(10) default NULL,
  `TABLE_ROWS` bigint(21) default NULL,
  `AVG_ROW_LENGTH` bigint(21) default NULL,
  `DATA_LENGTH` bigint(21) default NULL,
  `MAX_DATA_LENGTH` bigint(21) default NULL,
  `INDEX_LENGTH` bigint(21) default NULL,
  `DATA_FREE` bigint(21) default NULL,
  `AUTO_INCREMENT` bigint(21) default NULL,
  `CREATE_TIME` datetime default NULL,
  `UPDATE_TIME` datetime default NULL,
  `CHECK_TIME` datetime default NULL,
  `TABLE_COLLATION` varchar(64) default NULL,
  `CHECKSUM` bigint(21) default NULL,
  `CREATE_OPTIONS` varchar(255) default NULL,
  `TABLE_COMMENT` varchar(80) NOT NULL default ''
) ENGINE=MEMORY DEFAULT CHARSET=utf8;

--
-- Dumping data for table `TABLES`
--

INSERT INTO `TABLES` VALUES(NULL, 'information_schema', 'CHARACTER_SETS', 'SYSTEM VIEW', 'MEMORY', 0, 'Fixed', NULL, 576, 0, 8388288, 0, 0, NULL, NULL, NULL, NULL, 'utf8_general_ci', NULL, 'max_rows=14563', '');
INSERT INTO `TABLES` VALUES(NULL, 'information_schema', 'CLIENT_STATISTICS', 'SYSTEM VIEW', 'MEMORY', 0, 'Fixed', NULL, 354, 0, 8388384, 0, 0, NULL, NULL, NULL, NULL, 'utf8_general_ci', NULL, 'max_rows=23696', '');
INSERT INTO `TABLES` VALUES(NULL, 'information_schema', 'COLLATIONS', 'SYSTEM VIEW', 'MEMORY', 0, 'Fixed', NULL, 423, 0, 8388513, 0, 0, NULL, NULL, NULL, NULL, 'utf8_general_ci', NULL, 'max_rows=19831', '');
INSERT INTO `TABLES` VALUES(NULL, 'information_schema', 'COLLATION_CHARACTER_SET_APPLICABILITY', 'SYSTEM VIEW', 'MEMORY', 0, 'Fixed', NULL, 387, 0, 8388225, 0, 0, NULL, NULL, NULL, NULL, 'utf8_general_ci', NULL, 'max_rows=21675', '');
INSERT INTO `TABLES` VALUES(NULL, 'information_schema', 'COLUMNS', 'SYSTEM VIEW', 'MyISAM', 0, 'Dynamic', NULL, 0, 0, 281474976710655, 1024, 0, NULL, '2013-07-27 09:55:26', '2013-07-27 09:55:26', NULL, 'utf8_general_ci', NULL, 'max_rows=2178', '');
INSERT INTO `TABLES` VALUES(NULL, 'information_schema', 'COLUMN_PRIVILEGES', 'SYSTEM VIEW', 'MEMORY', 0, 'Fixed', NULL, 2565, 0, 8387550, 0, 0, NULL, NULL, NULL, NULL, 'utf8_general_ci', NULL, 'max_rows=3270', '');
INSERT INTO `TABLES` VALUES(NULL, 'information_schema', 'INNODB_BUFFER_POOL_CONTENT', 'SYSTEM VIEW', 'MEMORY', 0, 'Fixed', NULL, 845, 0, 8388315, 0, 0, NULL, NULL, NULL, NULL, 'utf8_general_ci', NULL, 'max_rows=9927', '');
INSERT INTO `TABLES` VALUES(NULL, 'information_schema', 'INDEX_STATISTICS', 'SYSTEM VIEW', 'MEMORY', 0, 'Fixed', NULL, 588, 0, 8388408, 0, 0, NULL, NULL, NULL, NULL, 'utf8_general_ci', NULL, 'max_rows=14266', '');
INSERT INTO `TABLES` VALUES(NULL, 'information_schema', 'KEY_COLUMN_USAGE', 'SYSTEM VIEW', 'MEMORY', 0, 'Fixed', NULL, 4637, 0, 8388333, 0, 0, NULL, NULL, NULL, NULL, 'utf8_general_ci', NULL, 'max_rows=1809', '');
INSERT INTO `TABLES` VALUES(NULL, 'information_schema', 'PROCESSLIST', 'SYSTEM VIEW', 'MyISAM', 0, 'Dynamic', NULL, 0, 0, 281474976710655, 1024, 0, NULL, '2013-07-27 09:55:26', '2013-07-27 09:55:26', NULL, 'utf8_general_ci', NULL, 'max_rows=11699', '');
INSERT INTO `TABLES` VALUES(NULL, 'information_schema', 'PROFILING', 'SYSTEM VIEW', 'MEMORY', 0, 'Fixed', NULL, 356, 0, 8388428, 0, 0, NULL, NULL, NULL, NULL, 'utf8_general_ci', NULL, 'max_rows=23563', '');
INSERT INTO `TABLES` VALUES(NULL, 'information_schema', 'ROUTINES', 'SYSTEM VIEW', 'MyISAM', 0, 'Dynamic', NULL, 0, 0, 281474976710655, 1024, 0, NULL, '2013-07-27 09:55:26', '2013-07-27 09:55:26', NULL, 'utf8_general_ci', NULL, 'max_rows=2293', '');
INSERT INTO `TABLES` VALUES(NULL, 'information_schema', 'SCHEMATA', 'SYSTEM VIEW', 'MEMORY', 0, 'Fixed', NULL, 3656, 0, 8386864, 0, 0, NULL, NULL, NULL, NULL, 'utf8_general_ci', NULL, 'max_rows=2294', '');
INSERT INTO `TABLES` VALUES(NULL, 'information_schema', 'SCHEMA_PRIVILEGES', 'SYSTEM VIEW', 'MEMORY', 0, 'Fixed', NULL, 2179, 0, 8386971, 0, 0, NULL, NULL, NULL, NULL, 'utf8_general_ci', NULL, 'max_rows=3849', '');
INSERT INTO `TABLES` VALUES(NULL, 'information_schema', 'STATISTICS', 'SYSTEM VIEW', 'MEMORY', 0, 'Fixed', NULL, 2679, 0, 8387949, 0, 0, NULL, NULL, NULL, NULL, 'utf8_general_ci', NULL, 'max_rows=3131', '');
INSERT INTO `TABLES` VALUES(NULL, 'information_schema', 'TABLES', 'SYSTEM VIEW', 'MEMORY', 0, 'Fixed', NULL, 3641, 0, 8385223, 0, 0, NULL, NULL, NULL, NULL, 'utf8_general_ci', NULL, 'max_rows=2303', '');
INSERT INTO `TABLES` VALUES(NULL, 'information_schema', 'TABLE_CONSTRAINTS', 'SYSTEM VIEW', 'MEMORY', 0, 'Fixed', NULL, 2504, 0, 8388400, 0, 0, NULL, NULL, NULL, NULL, 'utf8_general_ci', NULL, 'max_rows=3350', '');
INSERT INTO `TABLES` VALUES(NULL, 'information_schema', 'TABLE_PRIVILEGES', 'SYSTEM VIEW', 'MEMORY', 0, 'Fixed', NULL, 2372, 0, 8387392, 0, 0, NULL, NULL, NULL, NULL, 'utf8_general_ci', NULL, 'max_rows=3536', '');
INSERT INTO `TABLES` VALUES(NULL, 'information_schema', 'TABLE_STATISTICS', 'SYSTEM VIEW', 'MEMORY', 0, 'Fixed', NULL, 411, 0, 8388510, 0, 0, NULL, NULL, NULL, NULL, 'utf8_general_ci', NULL, 'max_rows=20410', '');
INSERT INTO `TABLES` VALUES(NULL, 'information_schema', 'TRIGGERS', 'SYSTEM VIEW', 'MyISAM', 0, 'Dynamic', NULL, 0, 0, 281474976710655, 1024, 0, NULL, '2013-07-27 09:55:26', '2013-07-27 09:55:26', NULL, 'utf8_general_ci', NULL, 'max_rows=1913', '');
INSERT INTO `TABLES` VALUES(NULL, 'information_schema', 'USER_PRIVILEGES', 'SYSTEM VIEW', 'MEMORY', 0, 'Fixed', NULL, 1986, 0, 8386878, 0, 0, NULL, NULL, NULL, NULL, 'utf8_general_ci', NULL, 'max_rows=4223', '');
INSERT INTO `TABLES` VALUES(NULL, 'information_schema', 'USER_STATISTICS', 'SYSTEM VIEW', 'MEMORY', 0, 'Fixed', NULL, 210, 0, 8388450, 0, 0, NULL, NULL, NULL, NULL, 'utf8_general_ci', NULL, 'max_rows=39945', '');
INSERT INTO `TABLES` VALUES(NULL, 'information_schema', 'VIEWS', 'SYSTEM VIEW', 'MyISAM', 0, 'Dynamic', NULL, 0, 0, 281474976710655, 1024, 0, NULL, '2013-07-27 09:55:26', '2013-07-27 09:55:26', NULL, 'utf8_general_ci', NULL, 'max_rows=3768', '');
INSERT INTO `TABLES` VALUES(NULL, 'information_schema', 'INNODB_IO_PATTERN', 'SYSTEM VIEW', 'MEMORY', 0, 'Fixed', NULL, 235, 0, 8388560, 0, 0, NULL, NULL, NULL, NULL, 'utf8_general_ci', NULL, 'max_rows=35696', '');
INSERT INTO `TABLES` VALUES(NULL, 'information_schema', 'INNODB_RSEG', 'SYSTEM VIEW', 'MEMORY', 0, 'Fixed', NULL, 41, 0, 8388600, 0, 0, NULL, NULL, NULL, NULL, 'utf8_general_ci', NULL, 'max_rows=204600', '');
INSERT INTO `TABLES` VALUES(NULL, 'Facultylist', 'Faculties', 'BASE TABLE', 'MyISAM', 10, 'Dynamic', 121, 58, 7036, 281474976710655, 1024, 0, NULL, '2013-04-14 03:05:55', '2013-04-14 03:10:14', NULL, 'utf8_general_ci', NULL, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `TABLE_CONSTRAINTS`
--

CREATE TEMPORARY TABLE `TABLE_CONSTRAINTS` (
  `CONSTRAINT_CATALOG` varchar(512) default NULL,
  `CONSTRAINT_SCHEMA` varchar(64) NOT NULL default '',
  `CONSTRAINT_NAME` varchar(64) NOT NULL default '',
  `TABLE_SCHEMA` varchar(64) NOT NULL default '',
  `TABLE_NAME` varchar(64) NOT NULL default '',
  `CONSTRAINT_TYPE` varchar(64) NOT NULL default ''
) ENGINE=MEMORY DEFAULT CHARSET=utf8;

--
-- Dumping data for table `TABLE_CONSTRAINTS`
--


-- --------------------------------------------------------

--
-- Table structure for table `TABLE_PRIVILEGES`
--

CREATE TEMPORARY TABLE `TABLE_PRIVILEGES` (
  `GRANTEE` varchar(81) NOT NULL default '',
  `TABLE_CATALOG` varchar(512) default NULL,
  `TABLE_SCHEMA` varchar(64) NOT NULL default '',
  `TABLE_NAME` varchar(64) NOT NULL default '',
  `PRIVILEGE_TYPE` varchar(64) NOT NULL default '',
  `IS_GRANTABLE` varchar(3) NOT NULL default ''
) ENGINE=MEMORY DEFAULT CHARSET=utf8;

--
-- Dumping data for table `TABLE_PRIVILEGES`
--


-- --------------------------------------------------------

--
-- Table structure for table `TABLE_STATISTICS`
--

CREATE TEMPORARY TABLE `TABLE_STATISTICS` (
  `TABLE_SCHEMA` varchar(64) NOT NULL default '',
  `TABLE_NAME` varchar(64) NOT NULL default '',
  `ROWS_READ` bigint(21) NOT NULL default '0',
  `ROWS_CHANGED` bigint(21) NOT NULL default '0',
  `ROWS_CHANGED_X_INDEXES` bigint(21) NOT NULL default '0'
) ENGINE=MEMORY DEFAULT CHARSET=utf8;

--
-- Dumping data for table `TABLE_STATISTICS`
--

INSERT INTO `TABLE_STATISTICS` VALUES('Facultylist', 'Faculties', 121, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `TRIGGERS`
--

CREATE TEMPORARY TABLE `TRIGGERS` (
  `TRIGGER_CATALOG` varchar(512) default NULL,
  `TRIGGER_SCHEMA` varchar(64) NOT NULL default '',
  `TRIGGER_NAME` varchar(64) NOT NULL default '',
  `EVENT_MANIPULATION` varchar(6) NOT NULL default '',
  `EVENT_OBJECT_CATALOG` varchar(512) default NULL,
  `EVENT_OBJECT_SCHEMA` varchar(64) NOT NULL default '',
  `EVENT_OBJECT_TABLE` varchar(64) NOT NULL default '',
  `ACTION_ORDER` bigint(4) NOT NULL default '0',
  `ACTION_CONDITION` longtext,
  `ACTION_STATEMENT` longtext NOT NULL,
  `ACTION_ORIENTATION` varchar(9) NOT NULL default '',
  `ACTION_TIMING` varchar(6) NOT NULL default '',
  `ACTION_REFERENCE_OLD_TABLE` varchar(64) default NULL,
  `ACTION_REFERENCE_NEW_TABLE` varchar(64) default NULL,
  `ACTION_REFERENCE_OLD_ROW` varchar(3) NOT NULL default '',
  `ACTION_REFERENCE_NEW_ROW` varchar(3) NOT NULL default '',
  `CREATED` datetime default NULL,
  `SQL_MODE` longtext NOT NULL,
  `DEFINER` longtext NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `TRIGGERS`
--


-- --------------------------------------------------------

--
-- Table structure for table `USER_PRIVILEGES`
--

CREATE TEMPORARY TABLE `USER_PRIVILEGES` (
  `GRANTEE` varchar(81) NOT NULL default '',
  `TABLE_CATALOG` varchar(512) default NULL,
  `PRIVILEGE_TYPE` varchar(64) NOT NULL default '',
  `IS_GRANTABLE` varchar(3) NOT NULL default ''
) ENGINE=MEMORY DEFAULT CHARSET=utf8;

--
-- Dumping data for table `USER_PRIVILEGES`
--

INSERT INTO `USER_PRIVILEGES` VALUES('''Facultylist''@''%''', NULL, 'USAGE', 'NO');

-- --------------------------------------------------------

--
-- Table structure for table `USER_STATISTICS`
--

CREATE TEMPORARY TABLE `USER_STATISTICS` (
  `USER` varchar(16) NOT NULL default '',
  `TOTAL_CONNECTIONS` bigint(21) NOT NULL default '0',
  `CONCURRENT_CONNECTIONS` bigint(21) NOT NULL default '0',
  `CONNECTED_TIME` bigint(21) NOT NULL default '0',
  `BUSY_TIME` bigint(21) NOT NULL default '0',
  `CPU_TIME` bigint(21) NOT NULL default '0',
  `BYTES_RECEIVED` bigint(21) NOT NULL default '0',
  `BYTES_SENT` bigint(21) NOT NULL default '0',
  `BINLOG_BYTES_WRITTEN` bigint(21) NOT NULL default '0',
  `ROWS_FETCHED` bigint(21) NOT NULL default '0',
  `ROWS_UPDATED` bigint(21) NOT NULL default '0',
  `TABLE_ROWS_READ` bigint(21) NOT NULL default '0',
  `SELECT_COMMANDS` bigint(21) NOT NULL default '0',
  `UPDATE_COMMANDS` bigint(21) NOT NULL default '0',
  `OTHER_COMMANDS` bigint(21) NOT NULL default '0',
  `COMMIT_TRANSACTIONS` bigint(21) NOT NULL default '0',
  `ROLLBACK_TRANSACTIONS` bigint(21) NOT NULL default '0',
  `DENIED_CONNECTIONS` bigint(21) NOT NULL default '0',
  `LOST_CONNECTIONS` bigint(21) NOT NULL default '0',
  `ACCESS_DENIED` bigint(21) NOT NULL default '0',
  `EMPTY_QUERIES` bigint(21) NOT NULL default '0'
) ENGINE=MEMORY DEFAULT CHARSET=utf8;

--
-- Dumping data for table `USER_STATISTICS`
--

-- in use (#1227 - Access denied; you need the PROCESS,SUPER privilege for this operation)

-- --------------------------------------------------------

--
-- Table structure for table `VIEWS`
--

CREATE TEMPORARY TABLE `VIEWS` (
  `TABLE_CATALOG` varchar(512) default NULL,
  `TABLE_SCHEMA` varchar(64) NOT NULL default '',
  `TABLE_NAME` varchar(64) NOT NULL default '',
  `VIEW_DEFINITION` longtext NOT NULL,
  `CHECK_OPTION` varchar(8) NOT NULL default '',
  `IS_UPDATABLE` varchar(3) NOT NULL default '',
  `DEFINER` varchar(77) NOT NULL default '',
  `SECURITY_TYPE` varchar(7) NOT NULL default ''
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `VIEWS`
--


-- --------------------------------------------------------

--
-- Table structure for table `INNODB_IO_PATTERN`
--

CREATE TEMPORARY TABLE `INNODB_IO_PATTERN` (
  `SPACE` bigint(11) NOT NULL default '0',
  `OFFSET` bigint(11) NOT NULL default '0',
  `INDEX_ID` bigint(11) NOT NULL default '0',
  `TABLE_NAME` varchar(32) NOT NULL default '',
  `INDEX_NAME` varchar(32) NOT NULL default '',
  `N_READ` bigint(11) NOT NULL default '0',
  `N_WRITE` bigint(11) NOT NULL default '0'
) ENGINE=MEMORY DEFAULT CHARSET=utf8;

--
-- Dumping data for table `INNODB_IO_PATTERN`
--

-- in use (#1227 - Access denied; you need the PROCESS privilege for this operation)

-- --------------------------------------------------------

--
-- Table structure for table `INNODB_RSEG`
--

CREATE TEMPORARY TABLE `INNODB_RSEG` (
  `RSEG_ID` bigint(21) NOT NULL default '0',
  `SPACE_ID` bigint(21) NOT NULL default '0',
  `PAGE_NO` bigint(21) NOT NULL default '0',
  `MAX_SIZE` bigint(21) NOT NULL default '0',
  `CURR_SIZE` bigint(21) NOT NULL default '0'
) ENGINE=MEMORY DEFAULT CHARSET=utf8;

--
-- Dumping data for table `INNODB_RSEG`
--

-- in use (#1227 - Access denied; you need the PROCESS privilege for this operation)
