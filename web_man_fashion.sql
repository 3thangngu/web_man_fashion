-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 08, 2018 at 05:10 PM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `web_man_fashion`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_bill`
--

CREATE TABLE `tb_bill` (
  `id_bill` int(11) NOT NULL,
  `code_bill` char(10) COLLATE utf8_unicode_ci NOT NULL,
  `status_bill` char(2) COLLATE utf8_unicode_ci NOT NULL,
  `id_order` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tb_bill`
--

INSERT INTO `tb_bill` (`id_bill`, `code_bill`, `status_bill`, `id_order`) VALUES
(15, '9599778', '1', 52),
(16, '1049505', '0', 51);

-- --------------------------------------------------------

--
-- Table structure for table `tb_category`
--

CREATE TABLE `tb_category` (
  `id_category` int(11) NOT NULL,
  `code_category` char(10) COLLATE utf8_unicode_ci NOT NULL,
  `name_category` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `unaccentname_category` char(100) COLLATE utf8_unicode_ci NOT NULL,
  `parent_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tb_category`
--

INSERT INTO `tb_category` (`id_category`, `code_category`, `name_category`, `unaccentname_category`, `parent_id`) VALUES
(14, '1', 'Áo nam', 'aonam', 0),
(16, '2', 'Áo Sơ Mi Nam', 'aosominam', 14),
(17, '3', 'Áo Sơ Mi Nam Ngắn Tay', 'aosominamngantay', 16),
(18, '4', 'Quần nam', 'quannam', 0),
(19, '5', 'Quần jean nam', 'quanjeannam', 18),
(20, '6', 'Quần jean ống đứng', 'quanjeanongdung', 19),
(21, 'AKN001', 'áo khoác nam', 'aokhoacnam', 14),
(22, 'AKND001', 'áo khoác nam da', 'aokhoacnamda', 21),
(23, 'GN001', 'GIÀY NAM', 'giaynam', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tb_city`
--

CREATE TABLE `tb_city` (
  `id_city` int(11) NOT NULL,
  `code_city` char(10) COLLATE utf8_unicode_ci NOT NULL,
  `name_city` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tb_city`
--

INSERT INTO `tb_city` (`id_city`, `code_city`, `name_city`) VALUES
(2, '65', 'Cần thơ');

-- --------------------------------------------------------

--
-- Table structure for table `tb_contact`
--

CREATE TABLE `tb_contact` (
  `id` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `email` char(100) COLLATE utf8_unicode_ci NOT NULL,
  `number_phone` char(11) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `content` text COLLATE utf8_unicode_ci NOT NULL,
  `status` char(1) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tb_contact`
--

INSERT INTO `tb_contact` (`id`, `name`, `email`, `number_phone`, `address`, `content`, `status`) VALUES
(1, 'le thanh tuan', 'lttuan@student.ctuet.edu.vn', '01272311832', '1028ntt', 'aaaaaaaaaaaaaaa', '1'),
(4, 'asd', 'asd@gmail.com', '01272311832', 'asdas', 'asd', '1'),
(5, 'tienthanh', 'lengoctienthanh@gmail.com', '01262897272', 'cbcbv', 'chó khoa ăn cức', '1');

-- --------------------------------------------------------

--
-- Table structure for table `tb_customer`
--

CREATE TABLE `tb_customer` (
  `id_customer` int(11) NOT NULL,
  `code_customer` char(10) COLLATE utf8_unicode_ci NOT NULL,
  `name_customer` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phone_customer` char(11) COLLATE utf8_unicode_ci NOT NULL,
  `email_customer` char(255) COLLATE utf8_unicode_ci NOT NULL,
  `address_customer` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tb_district`
--

CREATE TABLE `tb_district` (
  `id_district` int(11) NOT NULL,
  `code_district` char(10) COLLATE utf8_unicode_ci NOT NULL,
  `name_district` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `id_city` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tb_district`
--

INSERT INTO `tb_district` (`id_district`, `code_district`, `name_district`, `id_city`) VALUES
(3, '25', 'Ninh kiều', 2),
(4, '25', 'Ninh kiều', 2);

-- --------------------------------------------------------

--
-- Table structure for table `tb_email`
--

CREATE TABLE `tb_email` (
  `id_email` int(11) NOT NULL,
  `email` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tb_information`
--

CREATE TABLE `tb_information` (
  `id` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `value` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tb_information`
--

INSERT INTO `tb_information` (`id`, `name`, `value`) VALUES
(1, 'name', '3T'),
(2, 'description', 'Thương hiệu thời trang nam 3T Chuyên các dòng sản phẩm thời trang nam: Quần jean, quần tây, quần kaki, áo sơ mi, áo khoác, áo vest, áo thun, phụ kiện nam,...'),
(3, 'logo_header', 'image/logo-top.png'),
(4, 'logo_footer', 'image/logo-bottom.png'),
(5, 'email', ' lttuan@student.ctuet.edu.vn tuan10281028@gmail.com'),
(6, 'phone', ' 01272311832 01234356856'),
(7, 'adress', '$%^$%^384 Nguyễn Văn Cừ, P. An Hòa, Q.Ninh Kiều, Tp.Cần Thơ$%^$%^1028ntt'),
(15, 'slider', 'image/g144.jpg image/g137.jpg image/g142.jpg image/g143.jpg image/g116.jpg'),
(16, 'fb', 'https://www.facebook.com/profile.php?id=100004568401585'),
(17, 'image_1', 'image/slide-1-trang-chu-slide-1.jpg'),
(18, 'category_1', '17'),
(19, 'image_2', 'image/slide-2-trang-chu-slide-2.jpg'),
(20, 'category_2', '22'),
(21, 'image_3', 'image/slide-3-trang-chu-slide-3.jpg'),
(22, 'category_3', '23'),
(23, 'image_4', 'image/slide-4-trang-chu-slide-4.jpg'),
(24, 'category_4', '18');

-- --------------------------------------------------------

--
-- Table structure for table `tb_label`
--

CREATE TABLE `tb_label` (
  `id_label` int(11) NOT NULL,
  `code_label` char(10) COLLATE utf8_unicode_ci NOT NULL,
  `name_label` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `tb_label`
--

INSERT INTO `tb_label` (`id_label`, `code_label`, `name_label`) VALUES
(21, 'converse', 'giày converse');

-- --------------------------------------------------------

--
-- Table structure for table `tb_order`
--

CREATE TABLE `tb_order` (
  `id_order` int(11) NOT NULL,
  `code_order` char(10) COLLATE utf8_unicode_ci NOT NULL,
  `status_order` char(2) COLLATE utf8_unicode_ci NOT NULL,
  `id_product` int(11) NOT NULL,
  `size_product` char(255) COLLATE utf8_unicode_ci NOT NULL,
  `quantity_product` int(5) NOT NULL,
  `name_customer` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phone_customer` char(11) COLLATE utf8_unicode_ci NOT NULL,
  `address_customer` text COLLATE utf8_unicode_ci NOT NULL,
  `email_customer` char(255) COLLATE utf8_unicode_ci NOT NULL,
  `order_day` datetime NOT NULL,
  `id_district` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tb_order`
--

INSERT INTO `tb_order` (`id_order`, `code_order`, `status_order`, `id_product`, `size_product`, `quantity_product`, `name_customer`, `phone_customer`, `address_customer`, `email_customer`, `order_day`, `id_district`) VALUES
(44, '5697337', '0', 1, 's', 1, 'nguyen van a', '1231231232', 'asdasd, asdasd', '', '2018-01-08 22:37:00', 3),
(45, '5697337', '0', 2, 's', 1, 'nguyen van a', '1231231232', 'asdasd, asdasd', '', '2018-01-08 22:37:00', 3),
(46, '5697337', '0', 8, 's', 1, 'nguyen van a', '1231231232', 'asdasd, asdasd', '', '2018-01-08 22:37:00', 3),
(47, '4675611', '0', 8, 's', 1, 'nguyen van b', '1231231231', 'asd, asd', '', '2018-01-08 22:38:00', 3),
(48, '4675611', '0', 2, 's', 1, 'nguyen van b', '1231231231', 'asd, asd', '', '2018-01-08 22:38:00', 3),
(49, '5062905', '0', 4, 's', 1, 'nguyen van c', '1231231222', 'asd, asdas', '', '2018-01-08 22:38:00', 3),
(50, '5062905', '0', 8, 's', 1, 'nguyen van c', '1231231222', 'asd, asdas', '', '2018-01-08 22:38:00', 3),
(51, '4591493', '1', 1, 's', 1, 'nguyen van d', '1231212312', 'asd, asdas', '', '2018-01-08 22:39:00', 3),
(52, '3691849', '1', 1, 'S', 1, 'nguyen van e', '1231231222', 'asd, asd', '', '2018-01-08 22:40:20', 3);

-- --------------------------------------------------------

--
-- Table structure for table `tb_product`
--

CREATE TABLE `tb_product` (
  `id_product` int(11) NOT NULL,
  `code_product` char(10) COLLATE utf8_unicode_ci NOT NULL,
  `name_product` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `title_product` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `id_category` int(11) NOT NULL,
  `id_label` int(11) NOT NULL,
  `image` text COLLATE utf8_unicode_ci NOT NULL,
  `image_thump` text COLLATE utf8_unicode_ci NOT NULL,
  `price_product` int(11) NOT NULL,
  `saleprice_product` int(11) NOT NULL,
  `describe_product` text COLLATE utf8_unicode_ci NOT NULL,
  `size_product` char(255) COLLATE utf8_unicode_ci NOT NULL,
  `view_product` int(11) NOT NULL,
  `date_product` date NOT NULL,
  `status_product` char(2) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tb_product`
--

INSERT INTO `tb_product` (`id_product`, `code_product`, `name_product`, `title_product`, `id_category`, `id_label`, `image`, `image_thump`, `price_product`, `saleprice_product`, `describe_product`, `size_product`, `view_product`, `date_product`, `status_product`) VALUES
(1, 'ASM880', 'ÁO SƠ MI NGẮN TAY XANH ĐEN', '', 17, 21, 'upload/ao-so-mi-ngan-tay-xanh-den-asm880-8746-slide-products-594b7404cb3a3.jpg upload/ao-so-mi-ngan-tay-xanh-den-asm880-8746-slide-products-594b7404cdf05.jpg upload/ao-so-mi-ngan-tay-xanh-den-asm880-8746-slide-products-594b7404ce598.jpg upload/ao-so-mi-ngan-tay-xanh-den-asm880-8746-slide-products-594b7404de395.jpg upload/ao-so-mi-ngan-tay-xanh-den-asm880-8746-slide-products-594b7404e6309.jpg ', 'upload/resize/ao-so-mi-ngan-tay-xanh-den-asm880-8746-slide-products-594b7404cb3a3_thump.jpg upload/resize/ao-so-mi-ngan-tay-xanh-den-asm880-8746-slide-products-594b7404cdf05_thump.jpg upload/resize/ao-so-mi-ngan-tay-xanh-den-asm880-8746-slide-products-594b7404ce598_thump.jpg upload/resize/ao-so-mi-ngan-tay-xanh-den-asm880-8746-slide-products-594b7404de395_thump.jpg upload/resize/ao-so-mi-ngan-tay-xanh-den-asm880-8746-slide-products-594b7404e6309_thump.jpg ', 150000, 185000, 'Áo Sơ Mi Ngắn Tay Xanh Đen ASM880 thiết kế cổ bẻ ve nhỏ, tay áo ngắn năng động thích hợp cho dân công sở thay đổi diện mạo khô khan thường thấy. Bên cạnh đó, chất cotton cao cấp mang đến cảm giác thoải mái, dễ chịu cho người mặc.', 'a:4:{s:1:\"s\";s:1:\"1\";s:1:\"m\";s:1:\"1\";s:1:\"l\";s:1:\"1\";s:2:\"xl\";s:1:\"1\";}', 179, '2017-08-29', '1'),
(2, 'ASM922', 'ÁO SƠ MI NGẮN TAY XANH ĐEN', '', 17, 21, 'upload/ao-so-mi-ngan-tay-xanh-den-asm922-8986-slide-products-599569e4c30e6.jpg upload/ao-so-mi-ngan-tay-xanh-den-asm922-8986-slide-products-599569e4c52b4.jpg upload/ao-so-mi-ngan-tay-xanh-den-asm922-8986-slide-products-599569e4cacfc.jpg upload/ao-so-mi-ngan-tay-xanh-den-asm922-8986-slide-products-599569e4cd262.jpg', 'upload/resize/ao-so-mi-ngan-tay-xanh-den-asm922-8986-slide-products-599569e4c30e6_thump.jpg upload/resize/ao-so-mi-ngan-tay-xanh-den-asm922-8986-slide-products-599569e4c52b4_thump.jpg upload/resize/ao-so-mi-ngan-tay-xanh-den-asm922-8986-slide-products-599569e4cacfc_thump.jpg upload/resize/ao-so-mi-ngan-tay-xanh-den-asm922-8986-slide-products-599569e4cd262_thump.jpg', 200000, 245000, '', 'a:5:{s:1:\"s\";s:2:\"10\";s:1:\"m\";s:2:\"10\";s:1:\"l\";s:2:\"10\";s:2:\"xl\";s:2:\"10\";s:3:\"xxl\";s:2:\"10\";}', 105, '2017-08-29', '1'),
(4, 'ASM921', 'ÁO SƠ MI NGẮN TAY XANH BIỂN', '', 17, 21, 'upload/ao-so-mi-ngan-tay-xanh-bien-asm921-8983-slide-599566e13d8ae.jpg upload/ao-so-mi-ngan-tay-xanh-bien-asm921-8983-slide-599566e152c5b.jpg upload/ao-so-mi-ngan-tay-xanh-bien-asm921-8983-slide-599566e1480a3.jpg upload/ao-so-mi-ngan-tay-xanh-bien-asm921-8983-slide-599566e169911.jpg', 'upload/resize/ao-so-mi-ngan-tay-xanh-bien-asm921-8983-slide-599566e13d8ae_thump.jpg upload/resize/ao-so-mi-ngan-tay-xanh-bien-asm921-8983-slide-599566e152c5b_thump.jpg upload/resize/ao-so-mi-ngan-tay-xanh-bien-asm921-8983-slide-599566e1480a3_thump.jpg upload/resize/ao-so-mi-ngan-tay-xanh-bien-asm921-8983-slide-599566e169911_thump.jpg', 200000, 245000, '', 'a:5:{s:1:\"s\";s:2:\"10\";s:1:\"m\";s:2:\"10\";s:1:\"l\";s:2:\"10\";s:2:\"xl\";i:45;s:3:\"xxl\";s:2:\"10\";}', 144, '2017-08-30', '1'),
(5, 'QJ1364', 'QUẦN JEAN ỐNG ĐỨNG XANH', '', 20, 21, 'upload/quan-jean-skinny-xanh-qj1364-7315-slide-1.jpg upload/quan-jean-skinny-xanh-qj1364-7315-slide-2.jpg upload/quan-jean-skinny-xanh-qj1364-7315-slide-3.jpg upload/quan-jean-skinny-xanh-qj1364-7315-slide-4.jpg', 'upload/resize/quan-jean-skinny-xanh-qj1364-7315-slide-1_thump.jpg upload/resize/quan-jean-skinny-xanh-qj1364-7315-slide-2_thump.jpg upload/resize/quan-jean-skinny-xanh-qj1364-7315-slide-3_thump.jpg upload/resize/quan-jean-skinny-xanh-qj1364-7315-slide-4_thump.jpg', 300000, 400000, 'Quần Jean Ống Đứng Xanh QJ1364 là một trong những mẫu quần jean ống đứng, màu sắc hài hòa được thiết kế và sản xuất độc quyền ở 4MEN. Chất jean cao cấp, chắc chắn mang đến sự khỏe khoắn cho người mặc. Thích hợp cho cả đi học, đi chơi và đi làm.', 'a:6:{i:27;s:1:\"1\";i:28;s:1:\"1\";i:29;s:1:\"1\";i:30;s:1:\"1\";i:31;s:1:\"1\";i:32;s:1:\"1\";}', 20, '2017-08-30', '1'),
(8, 'AK211', 'ÁO KHOÁC DA ĐỎ MẬN', '', 22, 21, 'upload/ao-khoac-do-mong-ak209-8447-slide-1.jpg upload/ao-khoac-do-mong-ak209-8447-slide-2.jpg upload/ao-khoac-do-mong-ak209-8447-slide-3.jpg', 'upload/resize/ao-khoac-do-mong-ak209-8447-slide-1_thump.jpg upload/resize/ao-khoac-do-mong-ak209-8447-slide-2_thump.jpg upload/resize/ao-khoac-do-mong-ak209-8447-slide-3_thump.jpg', 500000, 625000, 'Áo Khoác Da Đỏ Mận AK209 không mang quá nhiều điểm nhấn nhưng vẫn cực kỳ thu hút nhờ màu sắc nổi bật, đường nét tinh tế và form dáng đẹp. Khi kết hợp cùng Áo thun và Quần jean sẽ mang đến cho bạn một diện mạo cực kỳ bụi bặm, chất lừ.', 'a:4:{s:1:\"s\";s:2:\"10\";s:1:\"m\";i:0;s:1:\"l\";s:2:\"10\";s:2:\"xl\";s:2:\"10\";}', 4, '2017-08-31', '1'),
(18, 'A4777', 'Áo Sơ Mi Hàn Quốc Xanh Biển', '', 14, 21, 'upload/ao-so-mi-han-quoc-trang-asm937-9142-slide-products-59da4307c4e39.jpg upload/ao-so-mi-han-quoc-trang-asm937-9142-slide-products-59da43071cbad.jpg upload/ao-so-mi-han-quoc-trang-asm937-9142-slide-products-59da43076fadb.jpg upload/ao-so-mi-han-quoc-trang-asm937-9142-slide-products-59da4308898b4.jpg upload/ao-so-mi-han-quoc-trang-asm937-9142-slide-products-59da430834700.jpg', 'upload/resize/ao-so-mi-han-quoc-trang-asm937-9142-slide-products-59da4307c4e39_thump.jpg upload/resize/ao-so-mi-han-quoc-trang-asm937-9142-slide-products-59da43071cbad_thump.jpg upload/resize/ao-so-mi-han-quoc-trang-asm937-9142-slide-products-59da43076fadb_thump.jpg upload/resize/ao-so-mi-han-quoc-trang-asm937-9142-slide-products-59da4308898b4_thump.jpg upload/resize/ao-so-mi-han-quoc-trang-asm937-9142-slide-products-59da430834700_thump.jpg', 150000, 245000, 'Áo Sơ Mi Hàn Quốc Xanh Biển được may từ chất liệu vải mềm mịn, ít nhăn, thấm hút mồ hôi tốt chính là lựa chọn hoàn hảo dành cho nam giới. Màu xanh biển nhẹ nhàng, dễ dàng sử dụng trong bất kỳ trường hợp nào.', 'a:4:{s:1:\"s\";s:2:\"10\";s:1:\"m\";s:2:\"10\";s:1:\"l\";s:2:\"10\";s:3:\"xxl\";s:2:\"10\";}', 0, '2017-12-22', '1');

-- --------------------------------------------------------

--
-- Table structure for table `tb_ship`
--

CREATE TABLE `tb_ship` (
  `id_ship` int(11) NOT NULL,
  `code_ship` char(10) COLLATE utf8_unicode_ci NOT NULL,
  `id_bill` int(11) NOT NULL,
  `id_order` int(11) NOT NULL,
  `status_ship` char(2) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tb_ship`
--

INSERT INTO `tb_ship` (`id_ship`, `code_ship`, `id_bill`, `id_order`, `status_ship`) VALUES
(2, '2389307', 15, 52, '0');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id_user` int(11) NOT NULL,
  `account_user` char(20) COLLATE utf8_unicode_ci NOT NULL,
  `pass_user` text COLLATE utf8_unicode_ci NOT NULL,
  `name_user` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `birthday_user` date NOT NULL,
  `cmnd_user` char(13) COLLATE utf8_unicode_ci NOT NULL,
  `address_user` text COLLATE utf8_unicode_ci NOT NULL,
  `phonenumber_user` char(11) COLLATE utf8_unicode_ci NOT NULL,
  `email_user` char(100) COLLATE utf8_unicode_ci NOT NULL,
  `type_user` char(2) COLLATE utf8_unicode_ci NOT NULL,
  `status_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id_user`, `account_user`, `pass_user`, `name_user`, `birthday_user`, `cmnd_user`, `address_user`, `phonenumber_user`, `email_user`, `type_user`, `status_user`) VALUES
(7, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'Lê Ngọc Tiến Thành', '1997-10-18', '362489844', '188/48B Nguyễn Văn Cừ', '01262898272', 'lengoctienthanh@gmail.com', '0', 1),
(9, 'tuankg1028', '4297f44b13955235245b2497399d7a93', 'le thanh tuan', '1997-12-10', '371778589', 'asdasd', '0127231132', 'adasd@gmail.com', '1', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_bill`
--
ALTER TABLE `tb_bill`
  ADD PRIMARY KEY (`id_bill`),
  ADD KEY `fk_order` (`id_order`);

--
-- Indexes for table `tb_category`
--
ALTER TABLE `tb_category`
  ADD PRIMARY KEY (`id_category`);

--
-- Indexes for table `tb_city`
--
ALTER TABLE `tb_city`
  ADD PRIMARY KEY (`id_city`);

--
-- Indexes for table `tb_contact`
--
ALTER TABLE `tb_contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_customer`
--
ALTER TABLE `tb_customer`
  ADD PRIMARY KEY (`id_customer`);

--
-- Indexes for table `tb_district`
--
ALTER TABLE `tb_district`
  ADD PRIMARY KEY (`id_district`),
  ADD KEY `fk_city` (`id_city`);

--
-- Indexes for table `tb_information`
--
ALTER TABLE `tb_information`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_label`
--
ALTER TABLE `tb_label`
  ADD PRIMARY KEY (`id_label`);

--
-- Indexes for table `tb_order`
--
ALTER TABLE `tb_order`
  ADD PRIMARY KEY (`id_order`),
  ADD KEY `fk_product` (`id_product`),
  ADD KEY `fk_district_order` (`id_district`);

--
-- Indexes for table `tb_product`
--
ALTER TABLE `tb_product`
  ADD PRIMARY KEY (`id_product`),
  ADD KEY `fk_label` (`id_label`),
  ADD KEY `fk_category` (`id_category`);

--
-- Indexes for table `tb_ship`
--
ALTER TABLE `tb_ship`
  ADD PRIMARY KEY (`id_ship`),
  ADD KEY `fk_bill_ship` (`id_bill`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_bill`
--
ALTER TABLE `tb_bill`
  MODIFY `id_bill` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `tb_category`
--
ALTER TABLE `tb_category`
  MODIFY `id_category` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `tb_city`
--
ALTER TABLE `tb_city`
  MODIFY `id_city` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_contact`
--
ALTER TABLE `tb_contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tb_customer`
--
ALTER TABLE `tb_customer`
  MODIFY `id_customer` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_district`
--
ALTER TABLE `tb_district`
  MODIFY `id_district` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tb_information`
--
ALTER TABLE `tb_information`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `tb_label`
--
ALTER TABLE `tb_label`
  MODIFY `id_label` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `tb_order`
--
ALTER TABLE `tb_order`
  MODIFY `id_order` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `tb_product`
--
ALTER TABLE `tb_product`
  MODIFY `id_product` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `tb_ship`
--
ALTER TABLE `tb_ship`
  MODIFY `id_ship` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_bill`
--
ALTER TABLE `tb_bill`
  ADD CONSTRAINT `fk_order` FOREIGN KEY (`id_order`) REFERENCES `tb_order` (`id_order`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tb_district`
--
ALTER TABLE `tb_district`
  ADD CONSTRAINT `fk_city` FOREIGN KEY (`id_city`) REFERENCES `tb_city` (`id_city`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tb_order`
--
ALTER TABLE `tb_order`
  ADD CONSTRAINT `fk_district_order` FOREIGN KEY (`id_district`) REFERENCES `tb_district` (`id_district`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_product` FOREIGN KEY (`id_product`) REFERENCES `tb_product` (`id_product`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tb_product`
--
ALTER TABLE `tb_product`
  ADD CONSTRAINT `fk_category` FOREIGN KEY (`id_category`) REFERENCES `tb_category` (`id_category`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_label` FOREIGN KEY (`id_label`) REFERENCES `tb_label` (`id_label`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tb_ship`
--
ALTER TABLE `tb_ship`
  ADD CONSTRAINT `fk_bill_ship` FOREIGN KEY (`id_bill`) REFERENCES `tb_bill` (`id_bill`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
