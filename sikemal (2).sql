-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 07, 2015 at 09:30 AM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `sikemal`
--

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE IF NOT EXISTS `event` (
  `id_event` int(5) NOT NULL AUTO_INCREMENT,
  `uid` int(5) NOT NULL,
  `tanggal` date NOT NULL,
  `jam` time NOT NULL,
  `tanggal_event` date NOT NULL,
  `jam_event` time NOT NULL,
  `judul` varchar(100) NOT NULL,
  `isi` text NOT NULL,
  `nama_lokasi` varchar(100) NOT NULL,
  `location` varchar(1000) NOT NULL,
  PRIMARY KEY (`id_event`),
  KEY `uid` (`uid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`id_event`, `uid`, `tanggal`, `jam`, `tanggal_event`, `jam_event`, `judul`, `isi`, `nama_lokasi`, `location`) VALUES
(1, 1, '2015-10-04', '20:18:50', '2015-11-30', '18:00:00', 'pernikahan ane dengan chelsea islan seminggu lagi', '<p>saya dirumah ajaj</p>', 'FIlkom UB', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3951.435460045471!2d112.61246371437828!3d-7.953870581452302!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e78827991fd78ef%3A0xa23f4cf3d9ba8cd4!2sFILKOM+UB!5e0!3m2!1sen!2sid!4v1447322933281'),
(2, 1, '2015-11-17', '09:47:18', '2015-09-09', '18:00:00', 'Pernikahan Ane', '<p>jangan lupa datang rek jangan lupa datang rekjangan lupa datang rekjangan lupa datang rekjangan lupa datang rekjangan lupa datang rek<strong></strong><em></em></p>', 'Empire Palace Surabaya', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3951.435460045471!2d112.61246371437828!3d-7.953870581452302!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e78827991fd78ef%3A0xa23f4cf3d9ba8cd4!2sFILKOM+UB!5e0!3m2!1sen!2sid!4v1447322933281'),
(3, 1, '2015-12-05', '09:53:41', '0000-00-00', '19:00:00', 'my event', '<p>malangmalangmalangmalangmalangmalangmalangmalangmalangmalangmalang</p>', 'malang', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3951.435460045471!2d112.61246371437828!3d-7.953870581452302!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e78827991fd78ef%3A0xa23f4cf3d9ba8cd4!2sFILKOM+UB!5e0!3m2!1sen!2sid!4v1447322933281');

-- --------------------------------------------------------

--
-- Table structure for table `komentar`
--

CREATE TABLE IF NOT EXISTS `komentar` (
  `id_komentar` int(5) NOT NULL AUTO_INCREMENT,
  `uid` int(5) NOT NULL,
  `id_post` int(5) NOT NULL,
  `tanggal` date NOT NULL,
  `jam` time NOT NULL,
  `isi_komentar` text NOT NULL,
  PRIMARY KEY (`id_komentar`),
  KEY `uid` (`uid`),
  KEY `id_post` (`id_post`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=546 ;

--
-- Dumping data for table `komentar`
--

INSERT INTO `komentar` (`id_komentar`, `uid`, `id_post`, `tanggal`, `jam`, `isi_komentar`) VALUES
(1, 2, 7, '2015-12-01', '18:00:00', 'corrrrrrrrrrrrrrrr'),
(5, 2, 7, '2015-12-05', '12:20:09', ' tes'),
(6, 2, 7, '2015-12-05', '12:41:03', ' koc\r\n'),
(7, 2, 7, '2015-12-05', '12:41:45', ' koc\r\n'),
(8, 2, 7, '2015-12-05', '12:44:55', ' kocls,lqax,'),
(11, 2, 7, '2015-12-05', '12:54:28', ' koc'),
(12, 2, 7, '2015-12-05', '12:58:24', 'indonesaia'),
(13, 2, 7, '2015-12-05', '12:59:16', 'blok'),
(34, 2, 7, '2015-12-05', '13:00:28', ' iiiii'),
(55, 2, 7, '2015-12-05', '13:01:15', ' iiiii'),
(76, 2, 7, '2015-12-05', '13:02:59', 'qwertyuiop'),
(97, 2, 7, '2015-12-05', '13:07:07', 'qwertyuiop'),
(98, 2, 7, '2015-12-05', '13:07:24', ' jjjjj'),
(99, 2, 7, '2015-12-05', '13:08:07', ' jjjjjlas,xk'),
(100, 2, 7, '2015-12-05', '13:11:14', 'jomblo'),
(101, 2, 7, '2015-12-05', '13:11:20', 'jomblo'),
(102, 2, 7, '2015-12-05', '13:12:34', 'jomblo'),
(103, 2, 7, '2015-12-05', '13:30:23', ' kom'),
(104, 2, 7, '2015-12-05', '13:34:21', ' komfvc'),
(105, 2, 7, '2015-12-05', '14:05:31', ' tes'),
(106, 2, 7, '2015-12-05', '14:07:58', ' submit 1'),
(107, 2, 7, '2015-12-05', '14:09:18', ' submit 13e2'),
(108, 2, 7, '2015-12-05', '14:11:04', ' xws'),
(109, 2, 7, '2015-12-05', '14:14:21', ' xws nwdx'),
(130, 2, 7, '2015-12-05', '14:15:33', ' xws nwdx'),
(193, 2, 5, '2015-12-05', '14:54:14', ' c s'),
(214, 2, 5, '2015-12-05', '15:18:33', ' koc'),
(235, 2, 9, '2015-12-05', '15:44:29', ' kmnkmn'),
(256, 2, 7, '2015-12-05', '15:44:50', ' mkm'),
(277, 2, 9, '2015-12-05', '15:45:22', ' kmk'),
(298, 21, 7, '2015-12-05', '15:47:26', ' jkkl'),
(319, 21, 7, '2015-12-05', '15:48:28', ' jkkl'),
(340, 21, 7, '2015-12-05', '15:48:40', ' kmplm'),
(361, 1, 9, '2015-12-05', '18:05:52', ' cok'),
(382, 1, 9, '2015-12-05', '18:08:13', ' hai'),
(403, 1, 7, '2015-12-05', '18:19:12', ' tes'),
(424, 1, 9, '2015-12-05', '18:20:45', ' tes'),
(445, 1, 9, '2015-12-05', '18:23:24', ' tesgyx'),
(466, 1, 9, '2015-12-05', '18:24:14', ' ted'),
(487, 1, 9, '2015-12-05', '18:26:14', ' tarian'),
(509, 1, 9, '2015-12-05', '18:30:49', ' submit'),
(530, 1, 7, '2015-12-05', '18:35:51', ' ini mencoba'),
(531, 1, 7, '2015-12-05', '18:37:51', ' ini tes komentar 100'),
(532, 1, 7, '2015-12-05', '18:38:52', ' ini tes komentar 100edc'),
(533, 1, 7, '2015-12-05', '18:40:32', ' ini tes komentar 100edcv'),
(534, 1, 7, '2015-12-05', '18:41:12', ' ini tes komentar 104'),
(535, 1, 7, '2015-12-05', '18:41:27', ' ini tes komentar 105'),
(536, 1, 7, '2015-12-05', '18:41:57', ' ini tes komentar 106'),
(537, 1, 7, '2015-12-05', '18:44:35', ' ini tes komentar 107'),
(538, 1, 7, '2015-12-05', '18:45:44', ' ini tes komentar 108'),
(539, 1, 7, '2015-12-05', '18:46:32', ' ini tes komentar 109'),
(540, 1, 7, '2015-12-05', '18:46:54', ' ini tes komentar 110'),
(541, 1, 9, '2015-12-05', '18:49:01', ' percobaan 321'),
(542, 1, 9, '2015-12-05', '19:24:01', ' tes'),
(543, 2, 6, '2015-12-06', '06:09:08', ' komentar'),
(544, 1, 7, '2015-12-06', '06:33:41', ' sx\r\n'),
(545, 21, 7, '2015-12-07', '05:47:00', ' coa');

-- --------------------------------------------------------

--
-- Table structure for table `lokasi`
--

CREATE TABLE IF NOT EXISTS `lokasi` (
  `id_loc` int(5) NOT NULL AUTO_INCREMENT,
  `uid` int(5) NOT NULL,
  `nama_lokasi` varchar(100) NOT NULL,
  `location` varchar(1000) NOT NULL,
  PRIMARY KEY (`id_loc`),
  KEY `uid` (`uid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Dumping data for table `lokasi`
--

INSERT INTO `lokasi` (`id_loc`, `uid`, `nama_lokasi`, `location`) VALUES
(19, 1, 'Filkom Universitas Brawijaya', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3951.435460045471!2d112.61246371437828!3d-7.953870581452302!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e78827991fd78ef%3A0xa23f4cf3d9ba8cd4!2sFILKOM+UB!5e0!3m2!1sen!2sid!4v1447322933281'),
(20, 1, 'malang', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3951.435460045471!2d112.61246371437828!3d-7.953870581452302!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e78827991fd78ef%3A0xa23f4cf3d9ba8cd4!2sFILKOM+UB!5e0!3m2!1sen!2sid!4v1447322933281');

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE IF NOT EXISTS `post` (
  `id_post` int(5) NOT NULL AUTO_INCREMENT,
  `uid` int(5) NOT NULL,
  `tanggal` date NOT NULL,
  `jam` time NOT NULL,
  `judul` varchar(100) NOT NULL,
  `kategori` enum('tarian','kuliner','sejarah') NOT NULL,
  `isi` text NOT NULL,
  `gambar` varchar(100) NOT NULL,
  PRIMARY KEY (`id_post`),
  KEY `uid` (`uid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`id_post`, `uid`, `tanggal`, `jam`, `judul`, `kategori`, `isi`, `gambar`) VALUES
(5, 1, '2015-11-20', '08:55:05', 'tarian ngalam', 'tarian', '<p>tarian malang</p>', 'favicon.PNG'),
(6, 1, '2015-11-20', '08:57:06', 'sejarah info', 'sejarah', '<p>sejarahinfo malang tes</p>', 'Capture_22.PNG'),
(7, 1, '2015-12-07', '05:06:58', 'ini informasi bersejarah tanpa gambar', 'sejarah', '<p>ce<strong>kcekcekcekcekcekcekcekcekcekcekcekcekcekce</strong></p>\r\n<p><strong>kcekcekcekcekcekcekcekcekcekcekcekcekcekcekcekcekcekcekcekce</strong></p>\r\n<p><strong>kcekcekcekcekcekcekce</strong></p>\r\n<p>kcekcekcekcekcekcekcekcekcekcekcekcekcekcekcekcek</p>', 'adit1.jpg'),
(9, 1, '2015-12-05', '09:51:53', 'ini informasi tarian', 'tarian', '<p>\r\n<hr />\r\n</p>\r\n<p>sdpkacmscm</p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>', 'favicon.PNG'),
(10, 1, '2015-12-05', '19:24:42', 'ini kuliner ngalam', 'kuliner', '<p>gak enak</p>', 'favicon.PNG'),
(11, 1, '2015-12-07', '05:09:15', 'ini sejarah baru', 'sejarah', '<p>bajxb</p>', ''),
(12, 1, '2015-12-07', '09:14:39', 'asd', 'kuliner', '<p>lksdnflk</p>', 'favicon.PNG'),
(13, 1, '0000-00-00', '838:59:59', 'Assalamualaikum', 'sejarah', '<p>Assalamualaikum,, Pada kesempatan kali ini IT Sasak akan share tentang cara pembuatan Ghost Windows 7... Sebelumnya saya akan Assalamualaikum,, Pada kesempatan kali ini IT Sasak akan share tentang cara pembuatan Ghost Windows 7... Sebelumnya saya akan Assalamualaikum,, Pada kesempatan kali ini IT Sasak akan share tentang cara pembuatan Ghost Windows 7... Sebelumnya saya akan&nbsp;</p>', '');

-- --------------------------------------------------------

--
-- Table structure for table `rating`
--

CREATE TABLE IF NOT EXISTS `rating` (
  `id_rating` int(5) NOT NULL AUTO_INCREMENT,
  `id_post` int(5) NOT NULL,
  `uid` int(5) NOT NULL,
  `counter` int(10) NOT NULL,
  `value` int(10) NOT NULL,
  `satu` int(10) NOT NULL,
  `dua` int(10) NOT NULL,
  `tiga` int(10) NOT NULL,
  `empat` int(10) NOT NULL,
  `lima` int(10) NOT NULL,
  PRIMARY KEY (`id_rating`),
  KEY `id_post` (`id_post`),
  KEY `uid` (`uid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `story`
--

CREATE TABLE IF NOT EXISTS `story` (
  `id_story` int(5) NOT NULL AUTO_INCREMENT,
  `uid` int(5) NOT NULL,
  `tanggal` date NOT NULL,
  `jam` time NOT NULL,
  `judul` varchar(100) NOT NULL,
  `isi` text NOT NULL,
  `gambar` varchar(100) NOT NULL,
  PRIMARY KEY (`id_story`),
  KEY `uid` (`uid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `uid` int(5) NOT NULL AUTO_INCREMENT,
  `username` varchar(30) NOT NULL,
  `password` varchar(255) NOT NULL,
  `level` enum('admin','member') NOT NULL,
  `email` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `notelp` varchar(50) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `instagram` varchar(32) NOT NULL,
  PRIMARY KEY (`uid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=27 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`uid`, `username`, `password`, `level`, `email`, `nama`, `alamat`, `notelp`, `foto`, `instagram`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin', 'admin@gmail.com', 'admin', 'malang', '85', 'profpic.PNG', 'adityawrdhn'),
(2, 'aditya', '057829fa5a65fc1ace408f490be486ac', 'member', 'member@gmail.com', 'aditya wardhana', 'sidoarjo', '85', '2.jpg', 'adityawrdhn'),
(16, 'bayu', 'a430e06de5ce438d499c2e4063d60fd6', 'member', 'adityaganggong@ymail.com', 'aditya wardhana', 'sidoarjo', '000', 'profpic.PNG', 'adityawrdhn'),
(20, 'malang', '7e00112eaecc682b95fdb2e7f476e6c8', 'member', 'adityaganggong@gmail.com', 'aditya bayu wardhana', 'jak', '000', 'profpic.PNG', 'adityawrdhn'),
(21, 'samid', '183302b157a276e7304caab75d9f45d2', 'member', 'samidmi@gmail.com', 'dimas malik i', 'jogja', '000', 'Capture_3.PNG', 'samidmi'),
(22, 'adit', '486b6c6b267bc61677367eb6b6458764', 'member', 'aditya@ymail.com', 'adit', 'malang', '000', 'profpic.PNG', 'adityawrdhn'),
(23, 'adityawrdhn', 'fd404db18432fb4d76103600a703cf5a', 'member', 'adityawrdhn@gmail.com', 'adit', 'candi panggung', '085852172577', 'mtf_XGRgr_219.jpg.jpg', 'adityawrdhn'),
(24, 'surya', 'aff8fbcbf1363cd7edc85a1e11391173', 'member', 'suryag@gmail.com', 'surya', 'sigura', '089898989898', 'Kirim_Dokumen.PNG', 'surya_gumi'),
(25, 'adly', 'b57364a56db3e45edd2c768a7c1fd150', 'member', 'adly@gmail.com', 'adly', 'malang', '90909089789', 'profpic.PNG', 'ohohadly'),
(26, 'ical', '5ecf13e925ee2eced6335291b00502a5', 'member', 'ical@gmail.com', 'ical', 'sby', '098097896795', 'profpic.PNG', 'ical');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `event`
--
ALTER TABLE `event`
  ADD CONSTRAINT `event_ibfk_1` FOREIGN KEY (`uid`) REFERENCES `user` (`uid`);

--
-- Constraints for table `komentar`
--
ALTER TABLE `komentar`
  ADD CONSTRAINT `komentar_ibfk_1` FOREIGN KEY (`id_post`) REFERENCES `post` (`id_post`);

--
-- Constraints for table `lokasi`
--
ALTER TABLE `lokasi`
  ADD CONSTRAINT `lokasi_ibfk_1` FOREIGN KEY (`uid`) REFERENCES `user` (`uid`);

--
-- Constraints for table `post`
--
ALTER TABLE `post`
  ADD CONSTRAINT `post_ibfk_1` FOREIGN KEY (`uid`) REFERENCES `user` (`uid`);

--
-- Constraints for table `story`
--
ALTER TABLE `story`
  ADD CONSTRAINT `story_ibfk_1` FOREIGN KEY (`uid`) REFERENCES `user` (`uid`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
