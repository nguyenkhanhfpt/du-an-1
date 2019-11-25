-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 25, 2019 lúc 07:51 AM
-- Phiên bản máy phục vụ: 10.3.16-MariaDB
-- Phiên bản PHP: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
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
  `id_bill` int(12) NOT NULL,
  `id_customer_bill` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `date_bill` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `comments`
--

CREATE TABLE `comments` (
  `id_comment` int(11) NOT NULL,
  `content_comment` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `id_product_comment` int(12) NOT NULL,
  `id_customer_comment` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `img_comment` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `date_comment` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `customers`
--

CREATE TABLE `customers` (
  `id_customer` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(120) COLLATE utf8_unicode_ci NOT NULL,
  `name_customer` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `gender` varchar(6) COLLATE utf8_unicode_ci NOT NULL,
  `img_custumer` varchar(120) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(110) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `role` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `detail_bill`
--

CREATE TABLE `detail_bill` (
  `id_detail_bill` int(12) NOT NULL,
  `id_bill` int(12) NOT NULL,
  `id_product_bill` int(12) NOT NULL,
  `quantity` int(10) NOT NULL,
  `amount` float NOT NULL,
  `status` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `products`
--

CREATE TABLE `products` (
  `id_product` int(12) NOT NULL,
  `name_product` varchar(120) COLLATE utf8_unicode_ci NOT NULL,
  `img_product` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `price_product` float NOT NULL,
  `sale` float NOT NULL,
  `view` int(10) NOT NULL,
  `kind_product` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `products`
--

INSERT INTO `products` (`id_product`, `name_product`, `img_product`, `price_product`, `sale`, `view`, `kind_product`, `description`) VALUES
(2, 'TrÃ  sá»¯a Ä‘áº­u Ä‘á»', 'trasua.jpg', 20000, 0, 0, 'TrÃ  sá»¯a', ''),
(3, 'BÃ¡nh xÃ¨o', 'banhxeo.jpg', 20000, 0, 0, 'MÃ³n chÃ­nh', ''),
(4, 'Má»³ quáº£ng PhÃº ChiÃªm', 'my.png', 15000, 0, 0, 'MÃ³n chÃ­nh', ''),
(6, 'BÃ¡nh káº¹p ÄÃ  Náºµng', 'banh-kep.png', 5000, 0, 0, 'Äá»“ Äƒn váº·t', ''),
(12, 'TrÃ  Ä‘Ã o', 'tra-dao.jpg', 25000, 0, 0, 'NÆ°á»›c uá»‘ng', '');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `bill`
--
ALTER TABLE `bill`
  ADD PRIMARY KEY (`id_bill`),
  ADD KEY `id_customer_bill` (`id_customer_bill`);

--
-- Chỉ mục cho bảng `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id_comment`),
  ADD KEY `id_customer_comment` (`id_customer_comment`),
  ADD KEY `id_product_comment` (`id_product_comment`);

--
-- Chỉ mục cho bảng `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id_customer`);

--
-- Chỉ mục cho bảng `detail_bill`
--
ALTER TABLE `detail_bill`
  ADD PRIMARY KEY (`id_detail_bill`),
  ADD KEY `id_bill` (`id_bill`),
  ADD KEY `id_product_bill` (`id_product_bill`);

--
-- Chỉ mục cho bảng `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id_product`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `bill`
--
ALTER TABLE `bill`
  MODIFY `id_bill` int(12) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `comments`
--
ALTER TABLE `comments`
  MODIFY `id_comment` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `detail_bill`
--
ALTER TABLE `detail_bill`
  MODIFY `id_detail_bill` int(12) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `products`
--
ALTER TABLE `products`
  MODIFY `id_product` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `bill`
--
ALTER TABLE `bill`
  ADD CONSTRAINT `id_customer_bill` FOREIGN KEY (`id_customer_bill`) REFERENCES `customers` (`id_customer`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `id_customer_comment` FOREIGN KEY (`id_customer_comment`) REFERENCES `customers` (`id_customer`) ON DELETE CASCADE,
  ADD CONSTRAINT `id_product_comment` FOREIGN KEY (`id_product_comment`) REFERENCES `products` (`id_product`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `detail_bill`
--
ALTER TABLE `detail_bill`
  ADD CONSTRAINT `id_bill` FOREIGN KEY (`id_bill`) REFERENCES `bill` (`id_bill`) ON DELETE CASCADE,
  ADD CONSTRAINT `id_product_bill` FOREIGN KEY (`id_product_bill`) REFERENCES `products` (`id_product`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
