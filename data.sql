-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 12, 2014 at 12:45 AM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `optimasi`
--

-- --------------------------------------------------------

--
-- Table structure for table `kalori`
--

CREATE TABLE IF NOT EXISTS `kalori` (
  `No` int(11) NOT NULL AUTO_INCREMENT,
  `JenisMakanan` varchar(255) NOT NULL,
  `NamaMakanan` varchar(255) NOT NULL,
  `Kalori` double NOT NULL,
  PRIMARY KEY (`No`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=113 ;

--
-- Dumping data for table `kalori`
--

INSERT INTO `kalori` (`No`, `JenisMakanan`, `NamaMakanan`, `Kalori`) VALUES
(1, 'Karbohidrat', 'Nasi', 1.75),
(2, 'Karbohidrat', 'Nasi tim', 0.875),
(3, 'Karbohidrat', 'Bubur Beras', 0.4375),
(4, 'Karbohidrat', 'Kentang', 0.875),
(5, 'Karbohidrat', 'Roti Putih', 2.1875),
(6, 'Karbohidrat', 'Kraker', 3.5),
(7, 'Karbohidrat', 'Havermouth', 3.5),
(8, 'Karbohidrat', 'Supermi', 3.5),
(9, 'Karbohidrat', 'Lontong', 1.166666667),
(10, 'Karbohidrat', 'Ketupat', 1.166666667),
(11, 'Protein Hewani', 'Daging Sapi', 1.9),
(12, 'Protein Hewani', 'Daging Babi', 3.8),
(13, 'Protein Hewani', 'Daging Ayam', 1.9),
(14, 'Protein Hewani', 'Hati Sapi', 1.9),
(15, 'Protein Hewani', 'Hati Ayam', 1.9),
(16, 'Protein Hewani', 'Telur Ayam biasa', 1.266666667),
(17, 'Protein Hewani', 'Telur Ayam negri', 1.583333333),
(18, 'Protein Hewani', 'Telur Bebek', 1.583333333),
(19, 'Protein Hewani', 'Ikan Segar', 1.9),
(20, 'Protein Hewani', 'Ikan Asin', 3.8),
(21, 'Protein Hewani', 'Ikan Teri', 3.8),
(22, 'Protein Hewani', 'Udang Basah', 1.9),
(23, 'Protein Hewani', 'Keju', 3.166666667),
(24, 'Protein Hewani', 'Bakso Daging', 0.95),
(25, 'Protein Nabati', 'Kacang Hijau', 3.2),
(26, 'Protein Nabati', 'Kacang Kedelai', 3.2),
(27, 'Protein Nabati', 'Kacang Merah', 3.2),
(28, 'Protein Nabati', 'Kacang Tanah Terkupas', 4),
(29, 'Protein Nabati', 'Keju Kacang Tanah', 4),
(30, 'Protein Nabati', 'Kacang Tolo', 3.2),
(31, 'Protein Nabati', 'Oncom', 1.6),
(32, 'Protein Nabati', 'Tahu', 0.8),
(33, 'Protein Nabati', 'Tempe', 1.6),
(34, 'Sayuran', 'Daun Bawang', 0),
(35, 'Sayuran', 'Daun Kacang Panjang', 0),
(36, 'Sayuran', 'Daun Koro', 0),
(37, 'Sayuran', 'Daun Labu Siam', 0),
(38, 'Sayuran', 'Daun Wuluh', 0),
(39, 'Sayuran', 'Daun Lobak', 0),
(40, 'Sayuran', 'Jamur Segar', 0),
(41, 'Sayuran', 'Oyong', 0),
(42, 'Sayuran', 'Kangkung', 0),
(43, 'Sayuran', 'Ketimun', 0),
(44, 'Sayuran', 'Tomat', 0),
(45, 'Sayuran', 'Kecipir Muda', 0),
(46, 'Sayuran', 'Kol', 0),
(47, 'Sayuran', 'Kembang Kol', 0),
(48, 'Sayuran', 'Labu Air', 0),
(49, 'Sayuran', 'Lobak', 0),
(50, 'Sayuran', 'Pepaya Muda', 0),
(51, 'Sayuran', 'Pecai', 0),
(52, 'Sayuran', 'Rebung', 0),
(53, 'Sayuran', 'Sawi', 0),
(54, 'Sayuran', 'Seledri', 0),
(55, 'Sayuran', 'Selada', 0),
(56, 'Sayuran', 'Tauge', 0),
(57, 'Sayuran', 'Tebu Terubuk', 0),
(58, 'Sayuran', 'Terong', 0),
(59, 'Sayuran', 'Cabe Hijau Besar', 0),
(60, 'Sayuran', 'Bayam', 0.5),
(61, 'Sayuran', 'Bit', 0.5),
(62, 'Sayuran', 'Buncis', 0.5),
(63, 'Sayuran', 'Daun Bluntas', 0.5),
(64, 'Sayuran', 'Daun Ketela Rambut', 0.5),
(65, 'Sayuran', 'Daun Kecipir', 0.5),
(66, 'Sayuran', 'Daun Leunca', 0.5),
(67, 'Sayuran', 'Daun Lompong', 0.5),
(68, 'Sayuran', 'Daun Mangkokan', 0.5),
(69, 'Sayuran', 'Daun Melinjo', 0.5),
(70, 'Sayuran', 'Daun Pakis', 0.5),
(71, 'Sayuran', 'Daun Singkong', 0.5),
(72, 'Sayuran', 'Daun Pepaya', 0.5),
(73, 'Sayuran', 'Jagung Muda', 0.5),
(74, 'Sayuran', 'Jantung Pisang', 0.5),
(75, 'Sayuran', 'Genjer', 0.5),
(76, 'Sayuran', 'Kacang Panjang', 0.5),
(77, 'Sayuran', 'Kacang Kapri', 0.5),
(78, 'Sayuran', 'Katuk', 0.5),
(79, 'Sayuran', 'Kucai', 0.5),
(80, 'Sayuran', 'Labu Siam', 0.5),
(81, 'Sayuran', 'Labu Wuluh', 0.5),
(82, 'Sayuran', 'Nangka Muda', 0.5),
(83, 'Sayuran', 'Pare', 0.5),
(84, 'Sayuran', 'Tekokak', 0.5),
(85, 'Sayuran', 'Wortel', 0.5),
(86, 'Susu', 'Susu Sapi', 0.65),
(87, 'Susu', 'Susu Kambing', 0.866666667),
(88, 'Susu', 'Susu Kerbau', 1.3),
(89, 'Susu', 'Susu Kental Manis', 1.3),
(90, 'Susu', 'Yoghurt', 0.65),
(91, 'Susu', 'Tepung Susu Full Cream', 5.2),
(92, 'Susu', 'Tepung Susu Skim', 6.5),
(93, 'Susu', 'Tepung Sari Kedele', 5.2),
(94, 'Buah', 'Advokat', 0.8),
(95, 'Buah', 'Apel', 0.533333333),
(96, 'Buah', 'Anggur', 0.533333333),
(97, 'Buah', 'Belimbing', 0.32),
(98, 'Buah', 'Jambu Biji', 0.4),
(99, 'Buah', 'Jambu Air', 0.4),
(100, 'Buah', 'Jambu Bol', 0.533333333),
(101, 'Buah', 'Duku', 0.533333333),
(102, 'Buah', 'Durian', 0.8),
(103, 'Buah', 'Jeruk Manis', 0.4),
(104, 'Buah', 'Kedondong', 0.4),
(105, 'Buah', 'Mangga', 0.8),
(106, 'Buah', 'Nanas', 0.533333333),
(107, 'Buah', 'Nangka Masak', 0.8),
(108, 'Buah', 'Pepaya', 0.4),
(109, 'Buah', 'Pisang Ambon', 0.8),
(110, 'Buah', 'Pisang Raja Sereh', 0.8),
(111, 'Buah', 'Rambutan', 0.533333333),
(112, 'Buah', 'Salak', 0.533333333);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
