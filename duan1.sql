-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 11, 2019 lúc 07:13 AM
-- Phiên bản máy phục vụ: 10.4.6-MariaDB
-- Phiên bản PHP: 7.1.32

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
  `date_bill` datetime NOT NULL DEFAULT current_timestamp(),
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `bill`
--

INSERT INTO `bill` (`id_bill`, `id_customer_bill`, `date_bill`, `status`) VALUES
(34165666, 'nguyenkhanh', '2019-12-06 21:41:41', 1),
(54547450, 'huycc', '2019-12-06 14:08:32', 1),
(103742948, 'nguyenkhanh', '2019-12-08 15:35:01', 1),
(130843280, 'nguyenkhanh', '2019-12-05 01:52:23', 1),
(131868113, 'nguyenkhanh', '2019-12-06 00:55:05', 1),
(293892842, 'nguoidung', '2019-12-10 16:15:52', 1),
(301524748, 'nguyenkhanh', '2019-12-08 15:38:03', 1),
(327414372, 'nguyenkhanh', '2019-12-06 21:41:47', 1),
(343503145, 'huycc', '2019-12-07 14:04:47', 1),
(404503701, 'nguyenkhanh', '2019-12-06 01:27:43', 1),
(433995361, 'nguyenkhanh', '2019-12-08 15:36:46', 1),
(447460811, 'employee2', '2019-12-09 13:44:31', 1),
(463193520, 'employee2', '2019-12-09 14:12:31', 1),
(574149074, 'nguyenkhanh', '2019-12-06 00:42:07', 1),
(746388621, 'nguyenkhanh', '2019-12-05 01:54:12', 1),
(937340280, 'huycc', '2019-12-06 21:39:14', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `comments`
--

CREATE TABLE `comments` (
  `id_comment` int(11) NOT NULL,
  `title_comment` varchar(120) COLLATE utf8_unicode_ci NOT NULL,
  `content_comment` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `review` int(1) NOT NULL,
  `id_product_comment` int(12) NOT NULL,
  `id_customer_comment` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `img_comment` text COLLATE utf8_unicode_ci NOT NULL,
  `date_comment` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `comments`
--

INSERT INTO `comments` (`id_comment`, `title_comment`, `content_comment`, `review`, `id_product_comment`, `id_customer_comment`, `img_comment`, `date_comment`) VALUES
(12, 'ÄÃ¡nh giÃ¡ trÃ  sá»¯a', 'TÃ  tÆ°a á»Ÿ Ä‘Ã¢y ngon quÃ¡ ', 5, 2, 'huycc', 'foody-tra-sua-nha-lam-tran-cao-van-511-637042382751902525.jpg', '2019-12-06 22:24:09'),
(14, 'ÄÃ¡nh giÃ¡ má»³ quáº£ng táº¡i quÃ¡n', 'Tuyá»‡t vá»i ', 5, 4, 'employee2', 'maxresdefault.jpg', '2019-12-07 14:01:25'),
(16, 'quÃ¡ hay', 'hihi', 4, 12, 'nguyenkhanh', '77346697_1459391470893675_3864244061179215872_n.jpg', '2019-12-08 12:41:49');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `customers`
--

CREATE TABLE `customers` (
  `id_customer` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(120) COLLATE utf8_unicode_ci NOT NULL,
  `name_customer` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `gender` varchar(6) COLLATE utf8_unicode_ci NOT NULL,
  `img_customer` varchar(120) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(110) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `address` text COLLATE utf8_unicode_ci NOT NULL,
  `role` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `customers`
--

INSERT INTO `customers` (`id_customer`, `password`, `name_customer`, `gender`, `img_customer`, `email`, `phone`, `address`, `role`) VALUES
('bbb', '123456', 'Nguyá»…n VÄƒn Nam', 'Nam', '77346697_1459391470893675_3864244061179215872_n.jpg', 'nam123@gmail.com', '0868006762', '133 Nguyá»…n VÄƒn Trá»—i, LiÃªn Chiá»ƒu, ÄÃ  Náºµng', 0),
('ccc', '123456', 'Tráº§n Kiáº¿n Trung', 'Nam', 'user.svg', 'trungml@gmail.com', '0784736733', '42 VÃµ NguyÃªn GiÃ¡p, SÆ¡n TrÃ , ÄÃ  Náºµng', 0),
('ddd', '123456', 'Nguyá»…n Ngá»c Háº£i', 'Nam', 'poster.jpg', 'hai@gmail.com', '0847384676', '99 Nguyá»…n VÄƒn Trá»•i, Háº£i ChÃ¢u, ÄÃ  Náºµng', 0),
('employee2', '123456', 'Nguyá»…n Thá»‹ Minh TrÃ ', 'Ná»¯', 'received_133616914222270.jpeg', 'trantmpd02873@fpt.edu.vn', '0787463744', '29 HÃ m Nghi, Háº£i ChÃ¢u, ÄÃ  Náºµng', 1),
('huycc', 'huyccc', 'Nguyen Dinh Huy', 'Nam', '77346697_1459391470893675_3864244061179215872_n.jpg', 'huycc@gmail.com', '0837283789', 'Lien Chieu Da Nang', 0),
('nguoidung', '123456', 'Nguyen Nguoi Dung', 'Nam', '79086051_1097399663959539_1492013755356151808_n.jpg', 'nguoidung@gmail.com', '08327637677', '69 Lien Chieu, Da Nang', 0),
('nguyenkhanh', 'khanh123', 'Nguyen Khanh (Boss)', 'Nam', '78543892_1097399637292875_5194519527240499200_n.jpg', 'khanh26122000@gmail.com', '0868003429', '54/82 Nguyá»…n LÆ°Æ¡ng Báº±ng, LiÃªn Chiá»ƒu, ÄÃ  Náºµng', 3);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `detail_bill`
--

CREATE TABLE `detail_bill` (
  `id_detail_bill` int(12) NOT NULL,
  `id_bill` int(12) NOT NULL,
  `id_product_bill` int(12) NOT NULL,
  `quantity` int(10) NOT NULL,
  `amount` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `detail_bill`
--

INSERT INTO `detail_bill` (`id_detail_bill`, `id_bill`, `id_product_bill`, `quantity`, `amount`) VALUES
(4, 130843280, 12, 2, 25000),
(5, 130843280, 6, 2, 5000),
(6, 130843280, 2, 1, 20000),
(7, 746388621, 4, 1, 15000),
(8, 574149074, 12, 1, 22500),
(9, 131868113, 4, 1, 15000),
(10, 131868113, 2, 1, 20000),
(11, 404503701, 4, 1, 15000),
(12, 54547450, 4, 1, 15000),
(13, 54547450, 2, 1, 20000),
(14, 937340280, 12, 1, 22500),
(15, 34165666, 4, 1, 15000),
(16, 327414372, 2, 1, 20000),
(17, 343503145, 6, 5, 5000),
(18, 343503145, 3, 3, 20000),
(19, 343503145, 4, 7, 15000),
(20, 103742948, 6, 3, 5000),
(21, 103742948, 2, 1, 20000),
(22, 433995361, 3, 1, 20000),
(23, 433995361, 12, 1, 22500),
(24, 301524748, 2, 6, 20000),
(25, 447460811, 21, 1, 15000),
(26, 447460811, 22, 1, 28500),
(27, 463193520, 20, 2, 20000),
(28, 293892842, 2, 4, 20000),
(29, 293892842, 22, 4, 28500);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `kind_products`
--

CREATE TABLE `kind_products` (
  `id_kind` int(11) NOT NULL,
  `name_kind` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `kind_products`
--

INSERT INTO `kind_products` (`id_kind`, `name_kind`) VALUES
(18, 'TrÃ  sá»¯a'),
(19, 'Äá»“ Äƒn váº·t'),
(21, 'MÃ³n chÃ­nh'),
(22, 'NÆ°á»›c uá»‘ng');

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
  `kind_product` int(11) NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `products`
--

INSERT INTO `products` (`id_product`, `name_product`, `img_product`, `price_product`, `sale`, `view`, `kind_product`, `description`) VALUES
(2, 'TrÃ  sá»¯a Ä‘áº­u Ä‘á»', 'trasua.jpg', 20000, 0, 162, 18, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. '),
(3, 'BÃ¡nh xÃ¨o', 'banhxeo.jpg', 20000, 0, 44, 21, 'Táº¡i Huáº¿, mÃ³n Äƒn nÃ y thÆ°á»ng Ä‘Æ°á»£c gá»i lÃ  bÃ¡nh khoÃ¡i vÃ  thÆ°á»ng kÃ¨m vá»›i thá»‹t nÆ°á»›ng, nÆ°á»›c cháº¥m lÃ  nÆ°á»›c lÃ¨o gá»“m tÆ°Æ¡ng, gan, láº¡c. Táº¡i miá»n Nam Viá»‡t Nam, bÃ¡nh cÃ³ cho thÃªm trá»©ng vÃ  ngÆ°á»i ta Äƒn bÃ¡nh xÃ¨o cháº¥m nÆ°á»›c máº¯m chua ngá»t. Táº¡i miá»n Báº¯c Viá»‡t Nam, nhÃ¢n bÃ¡nh xÃ¨o ngoÃ i cÃ¡c thÃ nh pháº§n nhÆ° cÃ¡c nÆ¡i khÃ¡c cÃ²n thÃªm cá»§ Ä‘áº­u thÃ¡i má»ng hoáº·c khoai mÃ´n thÃ¡i sá»£i.\r\n\r\nCÃ¡c loáº¡i rau Äƒn kÃ¨m vá»›i bÃ¡nh xÃ¨o ráº¥t Ä‘a dáº¡ng gá»“m rau diáº¿p, cáº£i xanh, rau diáº¿p cÃ¡, tÃ­a tÃ´, rau hÃºng, lÃ¡ quáº¿, lÃ¡ cÆ¡m nguá»™i non... á»ž Cáº§n ThÆ¡ cÃ³ thÃªm lÃ¡ chiáº¿t, á»Ÿ Äá»“ng ThÃ¡p thÃªm lÃ¡ báº±ng lÄƒng, á»Ÿ VÄ©nh Long cÃ³ thÃªm lÃ¡ xoÃ i non, á»Ÿ Báº¡c LiÃªu cÃ³ thÃªm lÃ¡ cÃ¡ch. Cáº§u ká»³ nháº¥t lÃ  á»Ÿ cÃ¡c vÃ¹ng miá»n Trung Viá»‡t Nam, ngoÃ i rau sá»‘ng, cÃ²n thÃªm quáº£ váº£ chÃ¡t, kháº¿ chua.. Bá»Ÿi váº­y, dÃ¢n sÃ nh Äƒn cá»© tháº¥y ngá» ngá»£ nhÆ° mÃ³n nÃ y thá»±c sá»± Ä‘Æ°á»£c báº¯t nguá»“n tá»« Huáº¿.'),
(4, 'Má»³ quáº£ng PhÃº ChiÃªm', 'my.png', 15000, 0, 80, 21, 'Du khÃ¡ch Ä‘Ã£ má»™t láº§n Ä‘áº¿n vá»›i Quáº£ng Nam háº³n khÃ´ng thá»ƒ nÃ o quÃªn Ä‘Æ°á»£c má»™t mÃ³n Äƒn bÃ¬nh dá»‹, dÃ¢n dÃ£ cá»§a vÃ¹ng Ä‘áº¥t Quáº£ng Nam. ÄÃ³ lÃ  mÃ³n MÃ¬ Quáº£ng. Tá»« miá»n quÃª Ä‘áº¿n thÃ nh phá»‘, chá»— nÃ o chÃºng ta cÅ©ng cÃ³ tháº¿ tÃ¬m Ä‘uá»£c 1 quÃ¡n mÃ¬, cÃ³ quÃ¡n vÃ¡ch ná»©a mÃ¡i tranh chÃªnh vÃªnh bÃªn sÆ°á»n nÃºi, cÃ³ quÃ¡n náº±m láº·ng láº½ bÃªn nhá»¯ng cÃ¡nh Ä‘á»“ng mÆ°á»›t xanh, cÃ³ quÃ¡n láº¡i lá»t thá»m giá»¯a á»“n Ã o phá»‘ thá»‹.'),
(6, 'BÃ¡nh káº¹p ÄÃ  Náºµng', 'banh-kep.png', 5000, 0, 134, 19, 'Náº¿u ai cÃ³ dá»‹p Ä‘Æ°á»£c ghÃ© thÄƒm thÃ nh phá»‘ biá»ƒn ÄÃ  Náºµng mÃ  váº«n chÆ°a Äƒn mÃ³n bÃ¡nh trÃ¡ng káº¹p thÃ¬ quáº£ lÃ  má»™t thiáº¿u sÃ³t ráº¥t lá»›n. Vá»›i hÆ°Æ¡ng vá»‹ thÆ¡m ngon, háº¥p dáº«n, bÃ¡nh trÃ¡ng káº¹p ÄÃ  Náºµng Ä‘Ã£ lÃ m xiÃªu lÃ²ng biáº¿t bao thá»±c khÃ¡ch khi cÃ³ cÆ¡ há»™i thÆ°á»Ÿng thá»©c mÃ³n Äƒn Ä‘á»™c Ä‘Ã¡o nÃ y. BÃ¡nh trÃ¡ng káº¹p ÄÃ  Náºµng Ä‘Æ°á»£c xem nhÆ° má»™t trong nhá»¯ng mÃ³n Äƒn Ä‘Æ°á»ng phá»‘ háº¥p dáº«n nháº¥t mÃ  báº¡n nÃªn thá»­ má»™t láº§n khi cÃ³ dá»‹p Ä‘áº¿n vá»›i ÄÃ  thÃ nh. Cháº³ng pháº£i ngáº«u nhiÃªn mÃ  bÃ¡nh trÃ¡ng káº¹p ÄÃ  Náºµng láº¡i nháº­n Ä‘Æ°á»£c nhiá»u tÃ¬nh cáº£m cá»§a thá»±c khÃ¡ch Ä‘áº¿n váº­y. KhÃ¡c vá»›i cÃ¡i váº» ngoÃ i bÃ¬nh dá»‹, mÃ³n Äƒn nÃ y mang Ä‘áº¿n nhá»¯ng hÆ°Æ¡ng vá»‹ khÃ³ quÃªn cho ngÆ°á»i dÃ¹ng ngay tá»« nhá»¯ng giÃ¢y phÃºt Ä‘áº§u tiÃªn.'),
(12, 'TrÃ  Ä‘Ã o', 'tra-dao.jpg', 25000, 10, 124, 22, 'TrÃ  Ä‘Ã o chÃ­nh xÃ¡c lÃ  thá»©c uá»‘ng lÃ½ tÆ°á»Ÿng cho mÃ¹a hÃ¨ mang vá»‹ ngá»t thanh tÆ°Æ¡i mÃ¡t, bá»• dÆ°á»¡ng Ä‘Ã£ say mÃª nhiá»u nhá»¯ng \"fan\" Äƒn váº·t. Sau xoÃ i láº¯c muá»‘i tÃ´m hay trÃ  sá»¯a thÃ¡i thÃ¬ cÃ¡c tÃ­n Ä‘á»“ Äƒn váº·t láº¡i bá»‹ thÃ´i miÃªn bá»Ÿi mÃ³n trÃ  Ä‘Ã o thanh thanh mÃ¡t láº¡nh. DÃ¹ Ä‘Ã£ xuáº¥t hiá»‡n Ä‘Æ°á»£c má»™t thá»i gian ráº¥t ráº¥t lÃ¢u rá»“i nhÆ°ng thá»±c táº¿ pháº£i Ä‘áº¿n nÄƒm 2015 trÃ  Ä‘Ã o má»›i chÃ­nh thá»©c Ä‘áº·t chÃ¢n Ä‘áº¿n thiÃªn Ä‘Æ°á»ng áº©m thá»±c SÃ i GÃ²n vÃ  ráº¥t nhanh lÃ  má»™t trÃ o lÆ°u Ä‘á»“ uá»‘ng ráº¥t Ä‘Æ°á»£c ngÆ°á»i ngÆ°á»i, nhÃ  nhÃ  yÃªu thÃ­ch.'),
(20, 'TrÃ  sá»¯a trÃ¢n chÃ¢u Ä‘Æ°á»ng nÃ¢u', 'cooky-recipe-cover-r27550.jpg', 20000, 0, 2, 18, ''),
(21, 'Kem bÆ¡', 'recipe19686-636282848214527500.jpg', 15000, 0, 2, 19, 'Kem bÆ¡ cÃ³ láº½ khÃ´ng cÃ²n lÃ  cÃ¡i tÃªn xa láº¡ vá»›i ngÆ°á»i dÃ¢n cÅ©ng nhÆ° du khÃ¡ch Ä‘áº¿n ÄÃ  Náºµng. Äáº·c biá»‡t lÃ  vÃ o nhá»¯ng ngÃ y hÃ¨ náº¯ng nÃ³ng, Äƒn má»™t ly kem bÆ¡ lÃ  tháº¥y mÃ¡t tá»« miá»‡ng xuá»‘ng dáº¡ dÃ y. Kem bÆ¡ ÄÃ  Náºµng lÃ  má»™t trong nhá»¯ng mÃ³n Äƒn xuáº¥t phÃ¡t tá»« ÄÃ  Láº¡t. NhÆ°ng táº¡i ÄÃ  Náºµng, kem bÆ¡ dáº§n báº¯t Ä‘áº§u phá»• biáº¿n vÃ  trá»Ÿ thÃ nh mÃ³n Äƒn váº·t Ä‘Æ°á»£c yÃªu thÃ­ch nháº¥t. HÆ°Æ¡ng vá»‹ bÃ©o, thÆ¡m, mÃ¡t láº¡nh, giÃ²n giÃ²n cá»§a dá»«a táº¡o nÃªn báº£n giao hÆ°á»Ÿng khÃ³ kiá»m lÃ²ng.'),
(22, 'GÃ  chiÃªn', 'cooky-collection-cover-c764177.jpg', 30000, 5, 2, 21, '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `upload_img`
--

CREATE TABLE `upload_img` (
  `id_img` int(11) NOT NULL,
  `img_upload` text COLLATE utf8_unicode_ci NOT NULL,
  `id_product` int(12) NOT NULL,
  `id_customer` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `upload_img`
--

INSERT INTO `upload_img` (`id_img`, `img_upload`, `id_product`, `id_customer`) VALUES
(24, 'foody-khai-tam-tra-tra-sua-204-637069239386981205.jpg', 2, 'huycc'),
(25, 'foody-khai-tam-tra-tra-sua-949-637102317755721418.jpg', 2, 'huycc'),
(26, 'foody-tra-sua-money-nguyen-du-325-636298307274999343.jpg', 2, 'huycc'),
(27, 'foody-tra-sua-money-nguyen-du-953-636298307263593279.jpg', 2, 'huycc'),
(28, 'foody-tra-sua-nha-lam-tran-cao-van-511-637042382751902525.jpg', 2, 'nguyenkhanh'),
(29, 'IMG_4383.jpg', 3, 'nguyenkhanh');

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
  ADD PRIMARY KEY (`id_customer`),
  ADD UNIQUE KEY `id_customer` (`id_customer`);

--
-- Chỉ mục cho bảng `detail_bill`
--
ALTER TABLE `detail_bill`
  ADD PRIMARY KEY (`id_detail_bill`),
  ADD KEY `id_bill` (`id_bill`),
  ADD KEY `id_product_bill` (`id_product_bill`);

--
-- Chỉ mục cho bảng `kind_products`
--
ALTER TABLE `kind_products`
  ADD PRIMARY KEY (`id_kind`);

--
-- Chỉ mục cho bảng `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id_product`),
  ADD KEY `fk_kind_product` (`kind_product`);

--
-- Chỉ mục cho bảng `upload_img`
--
ALTER TABLE `upload_img`
  ADD PRIMARY KEY (`id_img`),
  ADD KEY `FK_img_product` (`id_product`),
  ADD KEY `FK_id_customer_upload` (`id_customer`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `comments`
--
ALTER TABLE `comments`
  MODIFY `id_comment` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT cho bảng `detail_bill`
--
ALTER TABLE `detail_bill`
  MODIFY `id_detail_bill` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT cho bảng `kind_products`
--
ALTER TABLE `kind_products`
  MODIFY `id_kind` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT cho bảng `products`
--
ALTER TABLE `products`
  MODIFY `id_product` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT cho bảng `upload_img`
--
ALTER TABLE `upload_img`
  MODIFY `id_img` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

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

--
-- Các ràng buộc cho bảng `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `fk_kind_product` FOREIGN KEY (`kind_product`) REFERENCES `kind_products` (`id_kind`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `upload_img`
--
ALTER TABLE `upload_img`
  ADD CONSTRAINT `FK_id_customer_upload` FOREIGN KEY (`id_customer`) REFERENCES `customers` (`id_customer`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_img_product` FOREIGN KEY (`id_product`) REFERENCES `products` (`id_product`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
