-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 13, 2023 lúc 12:11 PM
-- Phiên bản máy phục vụ: 10.4.28-MariaDB
-- Phiên bản PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `duan1`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `bill`
--

CREATE TABLE `bill` (
  `id` int(11) NOT NULL,
  `iduser` int(11) NOT NULL,
  `bill_name` varchar(45) NOT NULL,
  `bill_tel` varchar(45) NOT NULL,
  `bill_addr` varchar(45) NOT NULL,
  `bill_pttt` tinyint(1) NOT NULL DEFAULT 1,
  `ngaydathang` varchar(45) DEFAULT NULL,
  `total` int(11) NOT NULL DEFAULT 0,
  `bill_status` tinyint(1) NOT NULL DEFAULT 0,
  `recive_name` varchar(45) DEFAULT NULL,
  `recive_addr` varchar(45) DEFAULT NULL,
  `recive_tel` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `bill`
--

INSERT INTO `bill` (`id`, `iduser`, `bill_name`, `bill_tel`, `bill_addr`, `bill_pttt`, `ngaydathang`, `total`, `bill_status`, `recive_name`, `recive_addr`, `recive_tel`) VALUES
(1, 0, 'Hồ phạm Quốc Thuận', '0123123123', 'Da nang ', 1, '02:19:14pm 11/12/2023', 260, 0, NULL, NULL, NULL),
(2, 0, 'Hồ phạm Quốc Thuận', '0123123123', 'Da nang ', 1, '02:32:14pm 11/12/2023', 260, 0, NULL, NULL, NULL),
(3, 0, 'Hồ phạm Quốc Thuận', '0123123123', 'Da nang ', 1, '02:55:38pm 11/12/2023', 420, 0, NULL, NULL, NULL),
(4, 0, 'Hồ phạm Quốc Thuận', '0123123123', 'Da nang ', 1, '11/12/2023', 420, 0, NULL, NULL, NULL),
(5, 0, 'Hồ phạm Quốc Thuận', '0123123123', 'Da nang ', 1, '11/12/2023', 420, 0, NULL, NULL, NULL),
(6, 0, 'Hồ phạm Quốc Thuận', '0123123123', 'Da nang ', 1, '11/12/2023', 420, 0, NULL, NULL, NULL),
(7, 0, 'Hồ phạm Quốc Thuận', '0123123123', 'Da nang ', 1, '11/12/2023', 420, 0, NULL, NULL, NULL),
(8, 0, 'Hồ phạm Quốc Thuận', '0123123123', 'Da nang ', 1, '11/12/2023', 420, 0, NULL, NULL, NULL),
(9, 0, 'Hồ phạm Quốc Thuận', '0123123123', 'Da nang ', 1, '11/12/2023', 420, 0, NULL, NULL, NULL),
(10, 0, 'Hồ phạm Quốc Thuận', '0123123123', 'Da nang ', 1, '11/12/2023', 420, 0, NULL, NULL, NULL),
(11, 0, 'Hồ phạm Quốc Thuận', '0123123123', 'Da nang ', 1, '11/12/2023', 420, 0, NULL, NULL, NULL),
(12, 0, 'toI BI DEDE', '0123123123', 'Da nang ', 1, '11/12/2023', 580, 0, NULL, NULL, NULL),
(13, 0, '0', '0966105411', 'Đà Nẵng', 1, '11/12/2023', 310, 0, NULL, NULL, NULL),
(14, 0, '0', '0966105411', 'Đà Nẵng', 1, '11/12/2023', 310, 0, NULL, NULL, NULL),
(15, 0, '0', '0966105411', 'Đà Nẵng', 1, '11/12/2023', 460, 0, NULL, NULL, NULL),
(16, 0, 'nhuly', '0966105411', 'Đà Nẵng', 1, '11/12/2023', 610, 0, NULL, NULL, NULL),
(17, 0, 'nhuly', '0966105411', 'Đà Nẵng', 1, '11/12/2023', 610, 0, NULL, NULL, NULL),
(18, 0, 'nhuly', '0966105411', 'Đà Nẵng', 1, '11/12/2023', 610, 0, NULL, NULL, NULL),
(19, 0, '0', '0966105411', 'Đà Nẵng', 1, '11/12/2023', 310, 0, NULL, NULL, NULL),
(20, 19, 'Hồ phạm Quốc Thuận', '0123123123', 'Da nang ', 1, '13/12/2023', 150, 0, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `binhluan`
--

CREATE TABLE `binhluan` (
  `id` int(10) NOT NULL,
  `comment` varchar(250) NOT NULL,
  `iduser` int(10) NOT NULL,
  `idpro` int(10) NOT NULL,
  `daycomment` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `binhluan`
--

INSERT INTO `binhluan` (`id`, `comment`, `iduser`, `idpro`, `daycomment`) VALUES
(20, 'ngon lắm', 18, 69, '07/12/2023'),
(21, 'ngon lắm', 18, 74, '07/12/2023'),
(22, '', 18, 70, '07/12/2023'),
(23, 'lo', 18, 70, '07/12/2023'),
(24, 'ngonlam', 18, 70, '07/12/2023'),
(25, 'ngon lắm', 18, 75, '10/12/2023'),
(26, 'ngon lắm', 18, 62, '10/12/2023'),
(27, '', 18, 65, '11/12/2023');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `iduser` int(10) NOT NULL,
  `idpro` int(11) DEFAULT NULL,
  `img` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `soluong` int(3) DEFAULT NULL,
  `thanhtien` int(10) DEFAULT NULL,
  `idbill` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `cart`
--

INSERT INTO `cart` (`id`, `iduser`, `idpro`, `img`, `name`, `price`, `soluong`, `thanhtien`, `idbill`) VALUES
(1, 19, 72, '', 'Mì Harussame', 140, 1, 140, 3),
(2, 19, 53, '', 'Susshi ca tra', 120, 1, 120, 3),
(3, 19, 73, '', 'Sashimi cá tra', 160, 1, 160, 3),
(4, 19, 72, '', 'Mì Harussame', 140, 1, 140, 4),
(5, 19, 53, '', 'Susshi ca tra', 120, 1, 120, 4),
(6, 19, 73, '', 'Sashimi cá tra', 160, 1, 160, 4),
(7, 19, 72, '', 'Mì Harussame', 140, 1, 140, 5),
(8, 19, 53, '', 'Susshi ca tra', 120, 1, 120, 5),
(9, 19, 73, '', 'Sashimi cá tra', 160, 1, 160, 5),
(10, 19, 72, '', 'Mì Harussame', 140, 1, 140, 6),
(11, 19, 53, '', 'Susshi ca tra', 120, 1, 120, 6),
(12, 19, 73, '', 'Sashimi cá tra', 160, 1, 160, 6),
(13, 19, 72, '', 'Mì Harussame', 140, 1, 140, 7),
(14, 19, 53, '', 'Susshi ca tra', 120, 1, 120, 7),
(15, 19, 73, '', 'Sashimi cá tra', 160, 1, 160, 7),
(16, 19, 72, '', 'Mì Harussame', 140, 1, 140, 8),
(17, 19, 53, '', 'Susshi ca tra', 120, 1, 120, 8),
(18, 19, 73, '', 'Sashimi cá tra', 160, 1, 160, 8),
(19, 19, 72, '', 'Mì Harussame', 140, 1, 140, 9),
(20, 19, 53, '', 'Susshi ca tra', 120, 1, 120, 9),
(21, 19, 73, '', 'Sashimi cá tra', 160, 1, 160, 9),
(22, 19, 72, '', 'Mì Harussame', 140, 1, 140, 10),
(23, 19, 53, '', 'Susshi ca tra', 120, 1, 120, 10),
(24, 19, 73, '', 'Sashimi cá tra', 160, 1, 160, 10),
(25, 19, 72, '', 'Mì Harussame', 140, 1, 140, 11),
(26, 19, 53, '', 'Susshi ca tra', 120, 1, 120, 11),
(27, 19, 73, '', 'Sashimi cá tra', 160, 1, 160, 11),
(28, 19, 72, '', 'Mì Harussame', 140, 1, 140, 12),
(29, 19, 53, '', 'Susshi ca tra', 120, 1, 120, 12),
(30, 19, 73, '', 'Sashimi cá tra', 160, 1, 160, 12),
(31, 19, 73, '', 'Sashimi cá tra', 160, 1, 160, 12),
(32, 18, 73, '', 'Sashimi cá tra', 160, 1, 160, 13),
(33, 18, 74, '', 'Salad hải sản', 150, 1, 150, 13),
(34, 18, 73, '', 'Sashimi cá tra', 160, 1, 160, 14),
(35, 18, 74, '', 'Salad hải sản', 150, 1, 150, 14),
(36, 18, 73, '', 'Sashimi cá tra', 160, 1, 160, 15),
(37, 18, 74, '', 'Salad hải sản', 150, 1, 150, 15),
(38, 18, 69, '', 'Rượu Sake Nhật', 150, 1, 150, 15),
(39, 18, 73, '', 'Sashimi cá tra', 160, 1, 160, 16),
(40, 18, 74, '', 'Salad hải sản', 150, 1, 150, 16),
(41, 18, 69, '', 'Rượu Sake Nhật', 150, 1, 150, 16),
(42, 18, 74, '', 'Salad hải sản', 150, 1, 150, 16),
(43, 18, 73, '', 'Sashimi cá tra', 160, 1, 160, 17),
(44, 18, 74, '', 'Salad hải sản', 150, 1, 150, 17),
(45, 18, 69, '', 'Rượu Sake Nhật', 150, 1, 150, 17),
(46, 18, 74, '', 'Salad hải sản', 150, 1, 150, 17),
(47, 18, 73, '', 'Sashimi cá tra', 160, 1, 160, 18),
(48, 18, 74, '', 'Salad hải sản', 150, 1, 150, 18),
(49, 18, 69, '', 'Rượu Sake Nhật', 150, 1, 150, 18),
(50, 18, 74, '', 'Salad hải sản', 150, 1, 150, 18),
(51, 18, 74, '', 'Salad hải sản', 150, 1, 150, 19),
(52, 18, 73, '', 'Sashimi cá tra', 160, 1, 160, 19),
(53, 19, 74, '', 'Salad hải sản', 150, 1, 150, 20);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `danhmuc`
--

CREATE TABLE `danhmuc` (
  `id` int(11) NOT NULL,
  `namedm` varchar(255) NOT NULL,
  `imgdm` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `danhmuc`
--

INSERT INTO `danhmuc` (`id`, `namedm`, `imgdm`) VALUES
(39, 'Sushi', 'sushi.jpg'),
(40, 'Sashimi', 'sashimi.png'),
(41, 'Mì', 'mi.jpg'),
(42, 'Salad', 'salada.png'),
(43, 'Rượu', 'ruou.png');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `donhang`
--

CREATE TABLE `donhang` (
  `id` int(10) NOT NULL,
  `idKH` int(10) NOT NULL,
  `maDH` varchar(12) NOT NULL,
  `nameuser` varchar(255) NOT NULL,
  `namePD` varchar(255) NOT NULL,
  `pricePD` double NOT NULL,
  `phone` int(11) NOT NULL,
  `adr` varchar(255) NOT NULL,
  `timeDH` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanpham`
--

CREATE TABLE `sanpham` (
  `id` int(11) NOT NULL,
  `namesp` varchar(255) NOT NULL,
  `newpricesp` double NOT NULL,
  `pricesp` double NOT NULL DEFAULT 0,
  `imgsp` varchar(255) DEFAULT NULL,
  `des` text DEFAULT NULL,
  `view` int(11) DEFAULT 0,
  `iddm` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `sanpham`
--

INSERT INTO `sanpham` (`id`, `namesp`, `newpricesp`, `pricesp`, `imgsp`, `des`, `view`, `iddm`) VALUES
(51, 'Susshi ca', 190, 140, 'combo.png', 'Sushi thường được chấm với mù tạt (wasabi) hoặc nước tương Nhật Bản rồi thưởng thức. Sushi ý chỉ món cơm ngọt nhẹ, nêm với giấm, còn gọi là shari, và được trang trí với neta, tức hải sản, trứng hoặc rau củ, đã được nấu chín hay để sống. Ở nhiều quốc gia, sushi là một món ăn đắt tiền, tinh tế, dùng trong những dịp đặc biệt.', 0, 39),
(52, 'Sashimi cá hồi', 200, 250, 'sushia.jpg', 'Sushi thường được chấm với mù tạt (wasabi) hoặc nước tương Nhật Bản rồi thưởng thức. Sushi ý chỉ món cơm ngọt nhẹ, nêm với giấm, còn gọi là shari, và được trang trí với neta, tức hải sản, trứng hoặc rau củ, đã được nấu chín hay để sống. Ở nhiều quốc gia, sushi là một món ăn đắt tiền, tinh tế, dùng trong những dịp đặc biệt.', 0, 40),
(53, 'Susshi ca tra', 120, 160, 'sushib.png', 'Sushi thường được chấm với mù tạt (wasabi) hoặc nước tương Nhật Bản rồi thưởng thức. Sushi ý chỉ món cơm ngọt nhẹ, nêm với giấm, còn gọi là shari, và được trang trí với neta, tức hải sản, trứng hoặc rau củ, đã được nấu chín hay để sống. Ở nhiều quốc gia, sushi là một món ăn đắt tiền, tinh tế, dùng trong những dịp đặc biệt.', 0, 39),
(54, 'Salad Thịt Gà', 130, 190, 'saladbb.png', 'Sushi thường được chấm với mù tạt (wasabi) hoặc nước tương Nhật Bản rồi thưởng thức. Sushi ý chỉ món cơm ngọt nhẹ, nêm với giấm, còn gọi là shari, và được trang trí với neta, tức hải sản, trứng hoặc rau củ, đã được nấu chín hay để sống. Ở nhiều quốc gia, sushi là một món ăn đắt tiền, tinh tế, dùng trong những dịp đặc biệt.', 0, 42),
(55, 'Sashimi cá ngừ', 200, 265, 'sushicc.png', 'Sushi thường được chấm với mù tạt (wasabi) hoặc nước tương Nhật Bản rồi thưởng thức.\r\nSushi ý chỉ món cơm ngọt nhẹ, nêm với giấm, còn gọi là shari, và được trang trí với neta, tức hải sản, trứng hoặc rau củ, đã được nấu chín hay để sống. Ở nhiều quốc gia, sushi là một món ăn đắt tiền, tinh tế, dùng trong những dịp đặc biệt. ', 0, 40),
(56, 'Sashimi cá hồi', 200, 230, 'sashimid.jpg', 'Sushi thường được chấm với mù tạt (wasabi) hoặc nước tương Nhật Bản rồi thưởng thức. Sushi ý chỉ món cơm ngọt nhẹ, nêm với giấm, còn gọi là shari, và được trang trí với neta, tức hải sản, trứng hoặc rau củ, đã được nấu chín hay để sống. Ở nhiều quốc gia, sushi là một món ăn đắt tiền, tinh tế, dùng trong những dịp đặc biệt.', 0, 40),
(58, 'Rượu Shochu', 130, 170, 'ruou.png', 'Sushi thường được chấm với mù tạt (wasabi) hoặc nước tương Nhật Bản rồi thưởng thức. Sushi ý chỉ món cơm ngọt nhẹ, nêm với giấm, còn gọi là shari, và được trang trí với neta, tức hải sản, trứng hoặc rau củ, đã được nấu chín hay để sống. Ở nhiều quốc gia, sushi là một món ăn đắt tiền, tinh tế, dùng trong những dịp đặc biệt.', 0, 43),
(59, 'Mì Udon', 120, 150, 'mibb.png', 'Sushi thường được chấm với mù tạt (wasabi) hoặc nước tương Nhật Bản rồi thưởng thức. Sushi ý chỉ món cơm ngọt nhẹ, nêm với giấm, còn gọi là shari, và được trang trí với neta, tức hải sản, trứng hoặc rau củ, đã được nấu chín hay để sống. Ở nhiều quốc gia, sushi là một món ăn đắt tiền, tinh tế, dùng trong những dịp đặc biệt.', 0, 41),
(60, 'Rượu thảo dược', 200, 250, 'ruouc.png', 'Sushi thường được chấm với mù tạt (wasabi) hoặc nước tương Nhật Bản rồi thưởng thức. Sushi ý chỉ món cơm ngọt nhẹ, nêm với giấm, còn gọi là shari, và được trang trí với neta, tức hải sản, trứng hoặc rau củ, đã được nấu chín hay để sống. Ở nhiều quốc gia, sushi là một món ăn đắt tiền, tinh tế, dùng trong những dịp đặc biệt.', 0, 43),
(62, 'Rượu vang hoa anh đào', 170, 200, 'ruoua.png', 'Sushi thường được chấm với mù tạt (wasabi) hoặc nước tương Nhật Bản rồi thưởng thức. Sushi ý chỉ món cơm ngọt nhẹ, nêm với giấm, còn gọi là shari, và được trang trí với neta, tức hải sản, trứng hoặc rau củ, đã được nấu chín hay để sống. Ở nhiều quốc gia, sushi là một món ăn đắt tiền, tinh tế, dùng trong những dịp đặc biệt.', 0, 43),
(63, 'Salad wakame', 100, 140, 'saladb.png', 'Sushi thường được chấm với mù tạt (wasabi) hoặc nước tương Nhật Bản rồi thưởng thức. Sushi ý chỉ món cơm ngọt nhẹ, nêm với giấm, còn gọi là shari, và được trang trí với neta, tức hải sản, trứng hoặc rau củ, đã được nấu chín hay để sống. Ở nhiều quốc gia, sushi là một món ăn đắt tiền, tinh tế, dùng trong những dịp đặc biệt.', 0, 42),
(64, 'Món salad rong nho', 150, 180, 'saladc.png', '\r\nSalad thường được chấm với mù tạt (wasabi) hoặc nước tương Nhật Bản rồi thưởng thức. Sushi ý chỉ món cơm ngọt nhẹ, nêm với giấm, còn gọi là shari, và được trang trí với neta, tức hải sản, trứng hoặc rau củ, đã được nấu chín hay để sống. Ở nhiều quốc gia, sushi là một món ăn đắt tiền, tinh tế, dùng trong những dịp đặc biệt.', 0, 42),
(65, 'Sushi tôm', 200, 170, 'sushic.jpg', 'Sushi thường được chấm với mù tạt (wasabi) hoặc nước tương Nhật Bản rồi thưởng thức. Sushi ý chỉ món cơm ngọt nhẹ, nêm với giấm, còn gọi là shari, và được trang trí với neta, tức hải sản, trứng hoặc rau củ, đã được nấu chín hay để sống. Ở nhiều quốc gia, sushi là một món ăn đắt tiền, tinh tế, dùng trong những dịp đặc biệt.', 0, 39),
(66, 'Sushi cá hồi', 150, 170, 'sushidd.JPG', 'Sushi thường được chấm với mù tạt (wasabi) hoặc nước tương Nhật Bản rồi thưởng thức. Sushi ý chỉ món cơm ngọt nhẹ, nêm với giấm, còn gọi là shari, và được trang trí với neta, tức hải sản, trứng hoặc rau củ, đã được nấu chín hay để sống. Ở nhiều quốc gia, sushi là một món ăn đắt tiền, tinh tế, dùng trong những dịp đặc biệt.', 0, 39),
(67, 'Sashimi Mực Sống', 200, 230, 'sashimib.png', 'Sushi thường được chấm với mù tạt (wasabi) hoặc nước tương Nhật Bản rồi thưởng thức. Sushi ý chỉ món cơm ngọt nhẹ, nêm với giấm, còn gọi là shari, và được trang trí với neta, tức hải sản, trứng hoặc rau củ, đã được nấu chín hay để sống. Ở nhiều quốc gia, sushi là một món ăn đắt tiền, tinh tế, dùng trong những dịp đặc biệt.', 0, 40),
(68, 'Sashimi Tôm', 200, 230, 'sashimicc.jpg', '\r\nSushi thường được chấm với mù tạt (wasabi) hoặc nước tương Nhật Bản rồi thưởng thức. Sushi ý chỉ món cơm ngọt nhẹ, nêm với giấm, còn gọi là shari, và được trang trí với neta, tức hải sản, trứng hoặc rau củ, đã được nấu chín hay để sống. Ở nhiều quốc gia, sushi là một món ăn đắt tiền, tinh tế, dùng trong những dịp đặc biệt.', 0, 40),
(69, 'Rượu Sake Nhật', 150, 180, 'ruoud.png', 'Sake dùng để chỉ loại rượu gạo Nhật Bản truyền thống. Để tạo nên dòng rượu sake ngon, người nghệ nhân cần trải qua nhiều bước, các công đoạn đạt mức độ tỉ mỉ, nghiêm khắc từ đánh bóng, lên men đến ủ rượu. Từ đó, các dòng rượu sake thường có nồng độ cồn nhẹ từ khoảng 14%-17%.', 0, 43),
(70, 'Mì Ramen', 140, 165, 'mid.png', 'Có hàng trăm loại ramen khác nhau, một số đầu bếp mất cả cuộc đời để hoàn thiện công thức ban đầu của họ, việc chuẩn bị một số lamen nó có thể mất đến 12 giờ. Có hàng ngàn nhà hàng ramen trải khắp Nhật Bản.\r\n Một số đầu bếp còn đi xa hơn và tạo ra ramen với thịt kho đen, trên lửa hoặc nhồi thịt, trí tưởng tượng là giới hạn!', 0, 41),
(71, 'Mì lạnh', 140, 160, 'mibb.png', 'Có hàng trăm loại ramen khác nhau, một số đầu bếp mất cả cuộc đời để hoàn thiện công thức ban đầu của họ, việc chuẩn bị một số lamen nó có thể mất đến 12 giờ. Có hàng ngàn nhà hàng ramen trải khắp Nhật Bản. Một số đầu bếp còn đi xa hơn và tạo ra ramen với thịt kho đen, trên lửa hoặc nhồi thịt, trí tưởng tượng là giới hạn!', 0, 41),
(72, 'Mì Harussame', 140, 160, 'mia.png', 'Có hàng trăm loại ramen khác nhau, một số đầu bếp mất cả cuộc đời để hoàn thiện công thức ban đầu của họ, việc chuẩn bị một số lamen nó có thể mất đến 12 giờ. Có hàng ngàn nhà hàng ramen trải khắp Nhật Bản. Một số đầu bếp còn đi xa hơn và tạo ra ramen với thịt kho đen, trên lửa hoặc nhồi thịt, trí tưởng tượng là giới hạn!', 0, 41),
(73, 'Sashimi cá tra', 160, 180, 'sashimibb.png', 'Sashimi trong mờ thường được sử dụng để làm món salad, hoặc là một thành phần trong các món ăn áp chảo nóng. Chúng cũng thường được sử dụng để chế biến các món ăn Nhật Bản của Trung Quốc và Hàn Quốc. Một sự thay thế tương tự khác là Shirataki.', 0, 40),
(74, 'Salad hải sản', 150, 165, 'saladd.png', 'Mì ống trong mờ thường được sử dụng để làm món salad, hoặc là một thành phần trong các món ăn áp chảo nóng. Chúng cũng thường được sử dụng để chế biến các món ăn Nhật Bản của Trung Quốc và Hàn Quốc. Một sự thay thế tương tự khác là Shirataki.', 0, 42),
(75, 'Rượu hoa anh đào', 112, 140, 'ruoub.png', 'Sushi thường được chấm với mù tạt (wasabi) hoặc nước tương Nhật Bản rồi thưởng thức. Sushi ý chỉ món cơm ngọt nhẹ, nêm với giấm, còn gọi là shari, và được trang trí với neta, tức hải sản, trứng hoặc rau củ, đã được nấu chín hay để sống. Ở nhiều quốc gia, sushi là một món ăn đắt tiền, tinh tế, dùng trong những dịp đặc biệt.', 0, 43);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `taikhoan`
--

CREATE TABLE `taikhoan` (
  `id` int(10) NOT NULL,
  `user` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL,
  `email` varchar(255) NOT NULL,
  `addr` varchar(255) NOT NULL,
  `tel` varchar(20) NOT NULL,
  `role` tinyint(4) NOT NULL DEFAULT 0,
  `nameuser` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `taikhoan`
--

INSERT INTO `taikhoan` (`id`, `user`, `pass`, `email`, `addr`, `tel`, `role`, `nameuser`) VALUES
(16, 'admin', 'admin', 'admin@gmail.com', 'Đà Nẵng', '0966105411', 0, '0'),
(17, 'abc', '123123', 'sangcdpd07742@fpt.edu.vn', '123123123', '123123123', 0, '0'),
(18, 'admin', '123123', 'nhuly@gmail.com', 'Đà Nẵng', '0966105411', 0, '0'),
(19, 'admin1', '123123', '123123@gmail.com', 'Da nang ', '0123123123', 0, 'Hồ phạm Quốc Thuận');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `bill`
--
ALTER TABLE `bill`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `danhmuc`
--
ALTER TABLE `danhmuc`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `donhang`
--
ALTER TABLE `donhang`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`id`),
  ADD KEY `lk_sanpham_danhmuc` (`iddm`);

--
-- Chỉ mục cho bảng `taikhoan`
--
ALTER TABLE `taikhoan`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `bill`
--
ALTER TABLE `bill`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT cho bảng `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT cho bảng `danhmuc`
--
ALTER TABLE `danhmuc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT cho bảng `donhang`
--
ALTER TABLE `donhang`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=108;

--
-- AUTO_INCREMENT cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;

--
-- AUTO_INCREMENT cho bảng `taikhoan`
--
ALTER TABLE `taikhoan`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD CONSTRAINT `lk_sanpham_danhmuc` FOREIGN KEY (`iddm`) REFERENCES `danhmuc` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
