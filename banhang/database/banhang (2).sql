-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 05, 2018 at 01:24 PM
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
  `gia` int(30) NOT NULL,
  `soluong` int(30) NOT NULL,
  `hinhanh` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `loai` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `mota` varchar(256) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `sanpham`
--

INSERT INTO `sanpham` (`masp`, `tensp`, `gia`, `soluong`, `hinhanh`, `loai`, `mota`) VALUES
(13, 'Bad_cupcake', 50000, 50, '../assets/image/bad-cupcake.jpg', '1', 'Đây là 1 loại sản phẩm được nhiều người quan tâm và ngon được chiết xuất từ các nguyên liệu thiên nhiên'),
(15, 'Bánh Kẹp', 10000, 20, '../assets/image/banh-kep.jpg', '1', 'Đây là 1 loại sản phẩm được nhiều người quan tâm và ngon được chiết xuất từ các nguyên liệu thiên nhiên'),
(16, 'Bánh Tráng Nướng', 30000, 30, '../assets/image/banh-trang-nuong.jpg', '1', 'Đây là 1 loại sản phẩm được nhiều người quan tâm và ngon được chiết xuất từ các nguyên liệu thiên nhiên'),
(17, 'Bánh Su Que Kem', 10000, 10, '../assets/image/banh-su-que-kem.jpg', '1', 'Đây là 1 loại sản phẩm được nhiều người quan tâm và ngon được chiết xuất từ các nguyên liệu thiên nhiên'),
(18, 'Bánh Táo Nướng', 40000, 20, '../assets/image/banh-tao-nuong.jpg', '1', 'Đây là 1 loại sản phẩm được nhiều người quan tâm và ngon được chiết xuất từ các nguyên liệu thiên nhiên'),
(19, 'Bánh Trà Sữa', 15000, 40, '../assets/image/banh-tra-sua.jpg', '1', 'Đây là 1 loại sản phẩm được nhiều người quan tâm và ngon được chiết xuất từ các nguyên liệu thiên nhiên'),
(21, 'Bánh Xu Kem', 15000, 50, '../assets/image/banh-xu-kem.jpg', '1', 'Đây là 1 loại sản phẩm được nhiều người quan tâm và ngon được chiết xuất từ các nguyên liệu thiên nhiên'),
(22, 'Bánh Mouse Dâu Tây', 10000, 20, '../assets/image/banh-mouse-day-tay.jpg', '1', 'Đây là 1 loại sản phẩm được nhiều người quan tâm và ngon được chiết xuất từ các nguyên liệu thiên nhiên'),
(23, 'Bánh Ngọt', 15000, 50, '../assets/image/banhngot.jpg', '1', 'Đây là 1 loại sản phẩm được nhiều người quan tâm và ngon được chiết xuất từ các nguyên liệu thiên nhiên'),
(26, 'Latte', 10000, 30, '../assets/image/latte.jpg', '2', 'Đây là 1 loại sản phẩm được nhiều người quan tâm và ngon được chiết xuất từ các nguyên liệu thiên nhiên'),
(27, 'Latte Hoa Hồng', 12000, 40, '../assets/image/latte-hoa-hong.jpg', '2', 'Đây là 1 loại sản phẩm được nhiều người quan tâm và ngon được chiết xuất từ các nguyên liệu thiên nhiên'),
(28, 'Chè Khúc Bạch', 30000, 30, '../assets/image/che-khuc-bach.jpg', '3', 'Đây là 1 loại sản phẩm được nhiều người quan tâm và ngon được chiết xuất từ các nguyên liệu thiên nhiên'),
(29, 'Chè Hạt Sen Dừa', 11000, 40, '../assets/image/che-hat-sen-dua.jpg', '3', 'Đây là 1 loại sản phẩm được nhiều người quan tâm và ngon được chiết xuất từ các nguyên liệu thiên nhiên'),
(30, 'Sinh Tố Kiwi', 10000, 30, '../assets/image/sinh-to-kiwi.jpg', '2', 'Đây là 1 loại sản phẩm được nhiều người quan tâm và ngon được chiết xuất từ các nguyên liệu thiên nhiên'),
(31, 'Sinh Tố Dâu', 20000, 20, '../assets/image/sinh-to-dau.jpg', '2', 'Đây là 1 loại sản phẩm được nhiều người quan tâm và ngon được chiết xuất từ các nguyên liệu thiên nhiên'),
(32, 'Chè Hộ Lựu', 30000, 30, '../assets/image/che-hot-luu.jpg', '3', 'Đây là 1 loại sản phẩm được nhiều người quan tâm và ngon được chiết xuất từ các nguyên liệu thiên nhiên'),
(33, 'Bánh Bình', 30000, 30, '../assets/image/2018108102343-tra-sua-oreo-cake-cream.jpg', '1', 'Đây là 1 loại sản phẩm được nhiều người quan tâm và ngon được chiết xuất từ các nguyên liệu thiên nhiên'),
(34, 'Chè Ba Màu', 30000, 30, '../assets/image/che-ba-mau.jpg', '3', 'Đây là 1 loại sản phẩm được nhiều người quan tâm và ngon được chiết xuất từ các nguyên liệu thiên nhiên'),
(35, 'Bánh Khoai Mì Nướng', 30000, 20, '../assets/image/banh-khoai-mi-nuong.jpg', '1', 'Đây là 1 loại sản phẩm được nhiều người quan tâm và ngon được chiết xuất từ các nguyên liệu thiên nhiên'),
(36, 'Bánh Kem Phô Mát', 30000, 10, '../assets/image/banh-kem-pho-mat.jpg', '1', 'Đây là 1 loại sản phẩm được nhiều người quan tâm và ngon được chiết xuất từ các nguyên liệu thiên nhiên'),
(37, 'Bánh Dứa Đài Loan', 50000, 30, '../assets/image/banh-dua-dai-loan.jpg', '1', 'Đây là 1 loại sản phẩm được nhiều người quan tâm và ngon được chiết xuất từ các nguyên liệu thiên nhiên'),
(38, 'Trà Sữa Kurotaki', 30000, 20, '../assets/image/tra-sua-kurotaki.jpg', '2', 'Đây là 1 loại sản phẩm được nhiều người quan tâm và ngon được chiết xuất từ các nguyên liệu thiên nhiên'),
(40, 'Trà Sữa Bo Ba Pop', 20000, 30, '../assets/image/tra-sua-bobaopo.jpg', '2', 'Đây là 1 loại sản phẩm được nhiều người quan tâm và ngon được chiết xuất từ các nguyên liệu thiên nhiên'),
(41, 'Trà Sữa Trân Châu Trắng', 50000, 40, '../assets/image/tra-sua-tran-chau-trang.jpg', '2', 'Đây là 1 loại sản phẩm được nhiều người quan tâm và ngon được chiết xuất từ các nguyên liệu thiên nhiên'),
(42, 'Trà Sữa Việt Quất', 30000, 40, '../assets/image/tra-sua-viet-quat.jpg', '2', 'Đây là 1 loại sản phẩm được nhiều người quan tâm và ngon được chiết xuất từ các nguyên liệu thiên nhiên'),
(43, 'Trà Sữa Đầu Đỏ', 30000, 0, '../assets/image/tra-sua-dau-do.jpg', '2', 'Đây là 1 loại sản phẩm được nhiều người quan tâm và ngon được chiết xuất từ các nguyên liệu thiên nhiên'),
(44, 'Trà Sữa Vani', 30000, 0, '../assets/image/tra-sua-vani.jpg', '2', 'Đây là 1 loại sản phẩm được nhiều người quan tâm và ngon được chiết xuất từ các nguyên liệu thiên nhiên'),
(45, 'Sinh Tố Mãng Cầu', 30000, 0, '../assets/image/sinh-to-mang-cau.jpg', '2', 'Đây là 1 loại sản phẩm được nhiều người quan tâm và ngon được chiết xuất từ các nguyên liệu thiên nhiên'),
(46, 'Sinh Tố Xoài Chuối', 30000, 0, '../assets/image/sinh-to-xoai-chuoi.jpg', '2', 'Đây là 1 loại sản phẩm được nhiều người quan tâm và ngon được chiết xuất từ các nguyên liệu thiên nhiên'),
(47, 'Sinh Tố Dâu', 30000, 0, '../assets/image/sinh-to-dau.jpg', '2', 'Đây là 1 loại sản phẩm được nhiều người quan tâm và ngon được chiết xuất từ các nguyên liệu thiên nhiên'),
(48, 'Trà Sữa Koi', 30000, 0, '../assets/image/trasuakoi.jpg', '2', 'Đây là 1 loại sản phẩm được nhiều người quan tâm và ngon được chiết xuất từ các nguyên liệu thiên nhiên'),
(49, 'Chè Nhăn Nhục', 30000, 30, '../assets/image/che-nhan-nhuc.jpg', '3', 'Đây là 1 loại sản phẩm được nhiều người quan tâm và ngon được chiết xuất từ các nguyên liệu thiên nhiên'),
(50, 'Chè hạt sen dừa', 30000, 30, '../assets/image/che-hat-sen-dua.jpg', '3', 'Đây là 1 loại sản phẩm được nhiều người quan tâm và ngon được chiết xuất từ các nguyên liệu thiên nhiên');

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
  MODIFY `masp` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
