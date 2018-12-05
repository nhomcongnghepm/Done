-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 05, 2018 at 04:38 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `banhang`
--

-- --------------------------------------------------------

--
-- Table structure for table `sanpham`
--

CREATE TABLE `sanpham` (
  `masp` int(10) NOT NULL,
  `tensp` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `gia` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `hinhanh` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `loai` varchar(256) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `sanpham`
--

INSERT INTO `sanpham` (`masp`, `tensp`, `gia`, `hinhanh`, `loai`) VALUES
(13, 'Bad_cupcake', '50000', '../assets/image/bad-cupcake.jpg', '1'),
(15, 'Bánh Kẹp', '10000', '../assets/image/banh-kep.jpg', '1'),
(16, 'Bánh Tráng Nướng', '30000', '../assets/image/banh-trang-nuong.jpg', '1'),
(17, 'Bánh Su Que Kem', '10000', '../assets/image/banh-su-que-kem.jpg', '1'),
(18, 'Bánh Táo Nướng', '40000', '../assets/image/banh-tao-nuong.jpg', '1'),
(19, 'Bánh Trà Sữa', '15000', '../assets/image/banh-tra-sua.jpg', '1'),
(21, 'Bánh Xu Kem', '15000', '../assets/image/banh-xu-kem.jpg', '1'),
(22, 'Bánh Mouse Dâu Tây', '10000', '../assets/image/banh-mouse-day-tay.jpg', '1'),
(23, 'Bánh Ngọt', '15000', '../assets/image/banhngot.jpg', '1'),
(24, 'Bánh kem chuối', '20000', '../assets/image/banh-kem-chuoi-mat-ong.jpg', '1'),
(26, 'Latte', '10000', '../assets/image/latte.jpg', '2'),
(27, 'Latte Hoa Hồng', '12000', '../assets/image/latte-hoa-hong.jpg', '2'),
(28, 'Chè Khúc Bạch', '30000', '../assets/image/che-khuc-bach.jpg', '3'),
(29, 'Chè Hạt Sen Dừa', '11000', '../assets/image/che-hat-sen-dua.jpg', '3'),
(30, 'Sinh Tố Kiwi', '10000', '../assets/image/sinh-to-kiwi.jpg', '2'),
(31, 'Sinh Tố Dâu', '20000', '../assets/image/sinh-to-dau.jpg', '2'),
(32, 'Chè Hộ Lựu', '30000', '../assets/image/che-hot-luu.jpg', '3'),
(33, 'Bánh Bình', '30000', '../assets/image/2018108102343-tra-sua-oreo-cake-cream.jpg', '1'),
(34, 'Chè Ba Màu', '30000', '../assets/image/che-ba-mau.jpg', '3');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `ho` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `ten` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `user` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `pass` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `ho`, `ten`, `user`, `pass`) VALUES
(0, 'Đặng Thành', 'Đạt', 'admin', '2ec10e4f7cd2159e7ea65d2454f68287ecf81251');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`masp`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `masp` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
