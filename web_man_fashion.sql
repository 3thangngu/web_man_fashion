-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 24, 2017 lúc 08:37 PM
-- Phiên bản máy phục vụ: 10.1.26-MariaDB
-- Phiên bản PHP: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `web_man_fashion`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tb_category`
--

CREATE TABLE `tb_category` (
  `id_category` int(11) NOT NULL,
  `code_category` char(10) COLLATE utf8_unicode_ci NOT NULL,
  `name_category` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `unaccentname_category` char(100) COLLATE utf8_unicode_ci NOT NULL,
  `parent_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tb_category`
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
-- Cấu trúc bảng cho bảng `tb_city`
--

CREATE TABLE `tb_city` (
  `id_city` int(11) NOT NULL,
  `code_city` char(10) COLLATE utf8_unicode_ci NOT NULL,
  `name_city` varchar(40) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tb_contact`
--

CREATE TABLE `tb_contact` (
  `id` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `email` char(100) COLLATE utf8_unicode_ci NOT NULL,
  `number_phone` int(20) NOT NULL,
  `address` text COLLATE utf8_unicode_ci NOT NULL,
  `content` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tb_contact`
--

INSERT INTO `tb_contact` (`id`, `name`, `email`, `number_phone`, `address`, `content`) VALUES
(2, 'asdasd', 'asdasd@gmail.com', 123123, 'sdasda', 'asdasdasdas');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tb_district`
--

CREATE TABLE `tb_district` (
  `id_district` int(11) NOT NULL,
  `code_district` char(10) COLLATE utf8_unicode_ci NOT NULL,
  `name_district` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `id_city` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tb_email`
--

CREATE TABLE `tb_email` (
  `id_email` int(11) NOT NULL,
  `email` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tb_label`
--

CREATE TABLE `tb_label` (
  `id_label` int(11) NOT NULL,
  `code_label` char(10) COLLATE utf8_unicode_ci NOT NULL,
  `name_label` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=COMPACT;

--
-- Đang đổ dữ liệu cho bảng `tb_label`
--

INSERT INTO `tb_label` (`id_label`, `code_label`, `name_label`) VALUES
(21, 'converse', 'giày converse');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tb_order`
--

CREATE TABLE `tb_order` (
  `id_order` int(11) NOT NULL,
  `code_order` char(20) COLLATE utf8_unicode_ci NOT NULL,
  `status_order` char(2) COLLATE utf8_unicode_ci NOT NULL,
  `id_ship` int(11) DEFAULT NULL,
  `id_product` int(11) NOT NULL,
  `size_product` char(10) COLLATE utf8_unicode_ci NOT NULL,
  `quantity_product` int(5) NOT NULL,
  `name_customer` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `phone_customer` char(11) COLLATE utf8_unicode_ci NOT NULL,
  `address_customer` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email_customer` char(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `order_day` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tb_order`
--

INSERT INTO `tb_order` (`id_order`, `code_order`, `status_order`, `id_ship`, `id_product`, `size_product`, `quantity_product`, `name_customer`, `phone_customer`, `address_customer`, `email_customer`, `order_day`) VALUES
(217, '1775666', '0', 0, 4, '27', 1, 'thành óc chó', '1123123', 'bụi, bụi, Thành phố Long Xuyên, An Giang', '', '2017-11-23 01:33:48'),
(218, '8056068', '0', 0, 2, '27', 1, 'abc', '123123123', 'asdas, asda, Thành phố Long Xuyên, An Giang', '', '2017-11-23 08:54:31'),
(216, '1775666', '0', 0, 2, '27', 4, 'thành óc chó', '1123123', 'bụi, bụi, Thành phố Long Xuyên, An Giang', '', '2017-11-23 01:33:48'),
(212, '868952', '0', 0, 2, '27', 1, 'le thanh tuan', '01272311832', '1028 Nguyển trung trực an hoa Thành phố Long Xuyên An Giang', '', '2017-11-23 01:29:09'),
(213, '868952', '0', 0, 1, 'M', 1, 'le thanh tuan', '01272311832', '1028 Nguyển trung trực an hoa Thành phố Long Xuyên An Giang', '', '2017-11-23 01:29:09'),
(214, '868952', '0', 0, 1, 'L', 1, 'le thanh tuan', '01272311832', '1028 Nguyển trung trực an hoa Thành phố Long Xuyên An Giang', '', '2017-11-23 01:29:09'),
(215, '868952', '0', 0, 5, '27', 1, 'le thanh tuan', '01272311832', '1028 Nguyển trung trực an hoa Thành phố Long Xuyên An Giang', '', '2017-11-23 01:29:09'),
(219, '8056068', '0', 0, 1, 'M', 1, 'abc', '123123123', 'asdas, asda, Thành phố Long Xuyên, An Giang', '', '2017-11-23 08:54:31'),
(220, '2551807', '0', 0, 2, '27', 1, 'bbb', '12123', 'asdasd, asdasd, Huyện Châu Đức, Bà Rịa - Vũng Tàu', '', '2017-11-23 08:55:40'),
(221, '2551807', '0', 0, 6, '27', 1, 'bbb', '12123', 'asdasd, asdasd, Huyện Châu Đức, Bà Rịa - Vũng Tàu', '', '2017-11-23 08:55:40'),
(222, '198465', '0', 0, 4, '29', 1, 'ccc', '123123', 'asdas, asdasd, Thành phố Long Xuyên, An Giang', '', '2017-11-23 09:09:36'),
(223, '198465', '0', 0, 4, '27', 1, 'ccc', '123123', 'asdas, asdasd, Thành phố Long Xuyên, An Giang', '', '2017-11-23 09:09:36'),
(224, '198465', '0', 0, 6, '27', 2, 'ccc', '123123', 'asdas, asdasd, Thành phố Long Xuyên, An Giang', '', '2017-11-23 09:09:36'),
(225, '52562', '0', 0, 5, '27', 1, 'le thah', '123123', '1028, an hoa, Thành phố Long Xuyên, An Giang', '', '2017-11-23 13:42:50');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tb_product`
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
  `size_product` char(10) COLLATE utf8_unicode_ci NOT NULL,
  `quantity_product` int(11) NOT NULL,
  `view_product` int(11) NOT NULL,
  `date_product` date NOT NULL,
  `status_product` char(2) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tb_product`
--

INSERT INTO `tb_product` (`id_product`, `code_product`, `name_product`, `title_product`, `id_category`, `id_label`, `image`, `image_thump`, `price_product`, `saleprice_product`, `describe_product`, `size_product`, `quantity_product`, `view_product`, `date_product`, `status_product`) VALUES
(1, 'ASM880', 'ÁO SƠ MI NGẮN TAY XANH ĐEN', '', 17, 21, 'upload/ao-so-mi-ngan-tay-xanh-den-asm880-8746-slide-products-594b7404cb3a3.jpg upload/ao-so-mi-ngan-tay-xanh-den-asm880-8746-slide-products-594b7404cdf05.jpg upload/ao-so-mi-ngan-tay-xanh-den-asm880-8746-slide-products-594b7404ce598.jpg upload/ao-so-mi-ngan-tay-xanh-den-asm880-8746-slide-products-594b7404de395.jpg upload/ao-so-mi-ngan-tay-xanh-den-asm880-8746-slide-products-594b7404e6309.jpg ', 'upload/resize/ao-so-mi-ngan-tay-xanh-den-asm880-8746-slide-products-594b7404cb3a3_thump.jpg upload/resize/ao-so-mi-ngan-tay-xanh-den-asm880-8746-slide-products-594b7404cdf05_thump.jpg upload/resize/ao-so-mi-ngan-tay-xanh-den-asm880-8746-slide-products-594b7404ce598_thump.jpg upload/resize/ao-so-mi-ngan-tay-xanh-den-asm880-8746-slide-products-594b7404de395_thump.jpg upload/resize/ao-so-mi-ngan-tay-xanh-den-asm880-8746-slide-products-594b7404e6309_thump.jpg ', 150000, 185000, 'Áo Sơ Mi Ngắn Tay Xanh Đen ASM880 thiết kế cổ bẻ ve nhỏ, tay áo ngắn năng động thích hợp cho dân công sở thay đổi diện mạo khô khan thường thấy. Bên cạnh đó, chất cotton cao cấp mang đến cảm giác thoải mái, dễ chịu cho người mặc.', '', 0, 183, '2017-08-29', '1'),
(2, 'ASM922', 'ÁO SƠ MI NGẮN TAY XANH ĐEN', '', 17, 21, 'upload/ao-so-mi-ngan-tay-xanh-den-asm922-8986-slide-products-599569e4c30e6.jpg upload/ao-so-mi-ngan-tay-xanh-den-asm922-8986-slide-products-599569e4c52b4.jpg upload/ao-so-mi-ngan-tay-xanh-den-asm922-8986-slide-products-599569e4cacfc.jpg upload/ao-so-mi-ngan-tay-xanh-den-asm922-8986-slide-products-599569e4cd262.jpg ', 'upload/resize/ao-so-mi-ngan-tay-xanh-den-asm922-8986-slide-products-599569e4c30e6_thump.jpg upload/resize/ao-so-mi-ngan-tay-xanh-den-asm922-8986-slide-products-599569e4c52b4_thump.jpg upload/resize/ao-so-mi-ngan-tay-xanh-den-asm922-8986-slide-products-599569e4cacfc_thump.jpg upload/resize/ao-so-mi-ngan-tay-xanh-den-asm922-8986-slide-products-599569e4cd262_thump.jpg ', 200000, 245000, '', '', 0, 98, '2017-08-29', '1'),
(4, 'ASM921', 'ÁO SƠ MI NGẮN TAY XANH BIỂN', '', 17, 21, 'upload/ao-so-mi-ngan-tay-xanh-bien-asm921-8983-slide-599566e13d8ae.jpg upload/ao-so-mi-ngan-tay-xanh-bien-asm921-8983-slide-599566e152c5b.jpg upload/ao-so-mi-ngan-tay-xanh-bien-asm921-8983-slide-599566e1480a3.jpg upload/ao-so-mi-ngan-tay-xanh-bien-asm921-8983-slide-599566e169911.jpg ', 'upload/resize/ao-so-mi-ngan-tay-xanh-bien-asm921-8983-slide-599566e13d8ae_thump.jpg upload/resize/ao-so-mi-ngan-tay-xanh-bien-asm921-8983-slide-599566e152c5b_thump.jpg upload/resize/ao-so-mi-ngan-tay-xanh-bien-asm921-8983-slide-599566e1480a3_thump.jpg upload/resize/ao-so-mi-ngan-tay-xanh-bien-asm921-8983-slide-599566e169911_thump.jpg ', 200000, 245000, '', '', 0, 132, '2017-08-30', '1'),
(5, 'QJ1364', 'QUẦN JEAN ỐNG ĐỨNG XANH', '', 20, 21, 'upload/quan-jean-skinny-xanh-qj1364-7315-slide-1.jpg upload/quan-jean-skinny-xanh-qj1364-7315-slide-2.jpg upload/quan-jean-skinny-xanh-qj1364-7315-slide-3.jpg upload/quan-jean-skinny-xanh-qj1364-7315-slide-4.jpg ', 'upload/resize/quan-jean-skinny-xanh-qj1364-7315-slide-1_thump.jpg upload/resize/quan-jean-skinny-xanh-qj1364-7315-slide-2_thump.jpg upload/resize/quan-jean-skinny-xanh-qj1364-7315-slide-3_thump.jpg upload/resize/quan-jean-skinny-xanh-qj1364-7315-slide-4_thump.jpg ', 300000, 400000, 'Quần Jean Ống Đứng Xanh QJ1364 là một trong những mẫu quần jean ống đứng, màu sắc hài hòa được thiết kế và sản xuất độc quyền ở 4MEN. Chất jean cao cấp, chắc chắn mang đến sự khỏe khoắn cho người mặc. Thích hợp cho cả đi học, đi chơi và đi làm.', '', 0, 21, '2017-08-30', '1'),
(6, 'AK209', 'ÁO KHOÁC DA NÂU', '', 17, 21, 'upload/ao-khoac-da-nau-ak209-8448-slide-1.jpg upload/ao-khoac-da-nau-ak209-8448-slide-2.jpg upload/ao-khoac-da-nau-ak209-8448-slide-3.jpg ', 'upload/resize/ao-khoac-da-nau-ak209-8448-slide-1_thump.jpg upload/resize/ao-khoac-da-nau-ak209-8448-slide-2_thump.jpg upload/resize/ao-khoac-da-nau-ak209-8448-slide-3_thump.jpg ', 500000, 625000, 'Áo Khoác Da Nâu AK209 kiểu dáng nam tính, đường nét khá đơn giản nhưng tinh tế và đẹp mắt. Thiết kế dáng tay dài, cổ thấp phối khóa kéo linh hoạt. Chất liệu da PU cao cấp, dày dặn, có lót vải bên trong tạo nên cảm giác êm mềm khi mặc.', '', 0, 45, '2017-08-31', '1'),
(7, 'AK210', 'ÁO KHOÁC DA ĐEN', '', 22, 21, 'upload/ao-khoac-den-ak209-8446-slide-1.jpg upload/ao-khoac-den-ak209-8446-slide-2.jpg upload/ao-khoac-den-ak209-8446-slide-3.jpg ', 'upload/resize/ao-khoac-den-ak209-8446-slide-1_thump.jpg upload/resize/ao-khoac-den-ak209-8446-slide-2_thump.jpg upload/resize/ao-khoac-den-ak209-8446-slide-3_thump.jpg ', 500000, 625000, 'Áo Khoác Da Đen AK209 cách điệu với túi cá tính ở ngực, màu đen nam tính, mạnh mẽ tạo nên phong cách cực chất cho chàng. Kiểu dáng bắt mắt, tay dài phối khóa kéo cách điệu, dáng cổ tròn cùng các đường cắt may tinh tế. Hai chiếc túi hông sâu rộng được kết hợp khóa kéo linh hoạt, rất tiện lợi.', '', 0, 0, '2017-08-31', '1'),
(8, 'AK211', 'ÁO KHOÁC DA ĐỎ MẬN', '', 22, 21, 'upload/ao-khoac-do-mong-ak209-8447-slide-1.jpg upload/ao-khoac-do-mong-ak209-8447-slide-2.jpg upload/ao-khoac-do-mong-ak209-8447-slide-3.jpg ', 'upload/resize/ao-khoac-do-mong-ak209-8447-slide-1_thump.jpg upload/resize/ao-khoac-do-mong-ak209-8447-slide-2_thump.jpg upload/resize/ao-khoac-do-mong-ak209-8447-slide-3_thump.jpg ', 500000, 625000, 'Áo Khoác Da Đỏ Mận AK209 không mang quá nhiều điểm nhấn nhưng vẫn cực kỳ thu hút nhờ màu sắc nổi bật, đường nét tinh tế và form dáng đẹp. Khi kết hợp cùng Áo thun và Quần jean sẽ mang đến cho bạn một diện mạo cực kỳ bụi bặm, chất lừ.', '', 0, 3, '2017-08-31', '1'),
(16, 'AK 95', 'Áo Khoác Dù Xám Chuột', '', 21, 21, 'upload/ao-khoac-du-den-ak223-9125-slide-products-59d8980edecdd.jpg upload/ao-khoac-du-den-ak223-9125-slide-products-59d8980f817db.jpg upload/ao-khoac-du-den-ak223-9125-slide-products-59d8980f36749.jpg ', 'upload/resize/ao-khoac-du-den-ak223-9125-slide-products-59d8980edecdd_thump.jpg upload/resize/ao-khoac-du-den-ak223-9125-slide-products-59d8980f817db_thump.jpg upload/resize/ao-khoac-du-den-ak223-9125-slide-products-59d8980f36749_thump.jpg ', 300000, 250000, '', '', 0, 1, '2017-11-23', '1'),
(22, 'QN', 'QUẦN JEAN ĐEN', '', 19, 21, 'upload/quan-jean-den-qj1435-8521-slide-1.jpg upload/quan-jean-den-qj1435-8521-slide-2.jpg upload/quan-jean-den-qj1435-8521-slide-3.jpg upload/quan-jean-den-qj1435-8521-slide-4.jpg ', 'upload/resize/quan-jean-den-qj1435-8521-slide-1_thump.jpg upload/resize/quan-jean-den-qj1435-8521-slide-2_thump.jpg upload/resize/quan-jean-den-qj1435-8521-slide-3_thump.jpg upload/resize/quan-jean-den-qj1435-8521-slide-4_thump.jpg ', 300000, 345000, 'Màu đen phối một chút wash sáng ở mặt trước mang đậm chất chơi, bụi bặm. Quần Jean Đen QJ1435 thiết kế tương đối đơn giản, đường may đều đẹp đặc biệt là những chi tiết viền túi. Form dáng đẹp, dễ mặc và kết hợp với đa dạng áo.', '', 0, 0, '2017-11-24', '1'),
(23, 'QN1', 'QUẦN JEAN RÁCH XANH ĐEN', '', 19, 21, 'upload/quan-jean-rach-xanh-den-qj1250-4880-slide-1.jpg upload/quan-jean-rach-xanh-den-qj1250-4880-slide-2.jpg upload/quan-jean-rach-xanh-den-qj1250-4880-slide-3.jpg ', 'upload/resize/quan-jean-rach-xanh-den-qj1250-4880-slide-1_thump.jpg upload/resize/quan-jean-rach-xanh-den-qj1250-4880-slide-2_thump.jpg upload/resize/quan-jean-rach-xanh-den-qj1250-4880-slide-3_thump.jpg ', 300000, 375000, 'Quần Jean Rách Xanh Đen QJ1250 kiểu dáng quần ống côn trẻ trung, năng động phối rách cùng các chấm sơn nhỏ bắt mắt. Tông màu xanh đen nam tính, mạnh mẽ. Chất liệu jean cao cấp, mềm mịn, bền.', '', 0, 0, '2017-11-24', '1'),
(24, 'QN2', 'QUẦN JEAN XÁM CHUỘT ĐẬM', '', 19, 21, 'upload/quan-jean-rach-xam-chuot-dam-qj1246-4877-slide-1.jpg upload/quan-jean-rach-xam-chuot-dam-qj1246-4877-slide-2.jpg upload/quan-jean-rach-xam-chuot-dam-qj1246-4877-slide-3.jpg ', 'upload/resize/quan-jean-rach-xam-chuot-dam-qj1246-4877-slide-1_thump.jpg upload/resize/quan-jean-rach-xam-chuot-dam-qj1246-4877-slide-2_thump.jpg upload/resize/quan-jean-rach-xam-chuot-dam-qj1246-4877-slide-3_thump.jpg ', 300000, 375000, 'Quần Jean Rách Xám Chuột Đậm QJ1246 kiểu dáng mới lạ và đầy phong cách với các đường rách nhẹ, chất liệu jeans bền chắc. Màu xám chuột mới lạ.', '', 0, 0, '2017-11-24', '1'),
(25, 'QN3', 'QUẦN JEAN XANH ĐEN', '', 19, 21, 'upload/quan-jean-xanh-den-qj1249-4879-slide-1.jpg upload/quan-jean-xanh-den-qj1249-4879-slide-2.jpg upload/quan-jean-xanh-den-qj1249-4879-slide-3.jpg upload/quan-jean-xanh-den-qj1249-4879-slide-4.jpg ', 'upload/resize/quan-jean-xanh-den-qj1249-4879-slide-1_thump.jpg upload/resize/quan-jean-xanh-den-qj1249-4879-slide-2_thump.jpg upload/resize/quan-jean-xanh-den-qj1249-4879-slide-3_thump.jpg upload/resize/quan-jean-xanh-den-qj1249-4879-slide-4_thump.jpg ', 300000, 375000, '', '', 0, 0, '2017-11-24', '1'),
(27, 'G96', 'GIÀY MỌI DA LỘN NÂU', '', 23, 21, 'upload/giay-moi-da-lon-nau-g96-7431-slide-products-599c0567e06ee.jpg upload/giay-moi-da-lon-nau-g96-7431-slide-products-599c0567e34b9.jpg upload/giay-moi-da-lon-nau-g96-7431-slide-products-599c0567e302d.jpg upload/giay-moi-da-lon-nau-g96-7431-slide-products-599c0567ea5b5.jpg ', 'upload/resize/giay-moi-da-lon-nau-g96-7431-slide-products-599c0567e06ee_thump.jpg upload/resize/giay-moi-da-lon-nau-g96-7431-slide-products-599c0567e34b9_thump.jpg upload/resize/giay-moi-da-lon-nau-g96-7431-slide-products-599c0567e302d_thump.jpg upload/resize/giay-moi-da-lon-nau-g96-7431-slide-products-599c0567ea5b5_thump.jpg ', 40000, 545000, 'Giày Mọi Da Lộn Nâu G96 chất liệu da lộn bền đẹp và thoải mái. Đường nét tinh tế, chỉ may đều đẹp, chắc chắn, màu sắc thanh lịch. Đế cao su chắc chắn, có độ ma sát chống trơn trượt. Phần thun co dãn tạo sự thoải mái cho người sử dụng. Cực bụi, cực thời trang.', '', 0, 1, '2017-11-24', '1'),
(28, 'G99', 'GIÀY MỌI DA NÂU', '', 23, 21, 'upload/giay-moi-da-nau-g25-6284-slide-1.jpg upload/giay-moi-da-nau-g25-6284-slide-2.jpg ', 'upload/resize/giay-moi-da-nau-g25-6284-slide-1_thump.jpg upload/resize/giay-moi-da-nau-g25-6284-slide-2_thump.jpg ', 40000, 545000, '', '', 0, 0, '2017-11-24', '1'),
(29, 'GIÀY MỌI D', 'GIÀY MỌI DA NÂU', '', 23, 21, 'upload/giay-moi-da-mau-bo-g94-7427-slide-1.jpg upload/giay-moi-da-mau-bo-g94-7427-slide-2.jpg upload/giay-moi-da-mau-bo-g94-7427-slide-3.jpg ', 'upload/resize/giay-moi-da-mau-bo-g94-7427-slide-1_thump.jpg upload/resize/giay-moi-da-mau-bo-g94-7427-slide-2_thump.jpg upload/resize/giay-moi-da-mau-bo-g94-7427-slide-3_thump.jpg ', 500000, 625000, 'Giày Mọi Da Màu Bò G94 kiểu dáng thời trang, chất da lỗ mới lạ tạo nên sự khác biệt cho sản phẩm. Đường chỉ may tinh tế, tỉ mỉ mang đến sự chắc chắn khi sử dụng. Màu sắc nhã nhặn, có thể kết hợp với nhiều trang phục cá tính khác. Độc quyền tại 4MEN.', '', 0, 1, '2017-11-24', '1'),
(30, 'G76', 'GIÀY MỌI DA ĐEN G76', '', 23, 21, 'upload/giay-moi-da-den-g76-7047-slide-1.jpg upload/giay-moi-da-den-g76-7047-slide-2.jpg upload/giay-moi-da-den-g76-7047-slide-3.jpg upload/giay-moi-da-den-g76-7047-slide-4.jpg ', 'upload/resize/giay-moi-da-den-g76-7047-slide-1_thump.jpg upload/resize/giay-moi-da-den-g76-7047-slide-2_thump.jpg upload/resize/giay-moi-da-den-g76-7047-slide-3_thump.jpg upload/resize/giay-moi-da-den-g76-7047-slide-4_thump.jpg ', 500000, 625000, '', '', 0, 0, '2017-11-24', '1');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tb_ship`
--

CREATE TABLE `tb_ship` (
  `id_ship` int(11) NOT NULL,
  `status_ship` char(2) COLLATE utf8_unicode_ci NOT NULL,
  `price_ship` int(11) NOT NULL,
  `id_district` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tb_user`
--

CREATE TABLE `tb_user` (
  `id_user` int(11) NOT NULL,
  `account_user` char(20) COLLATE utf8_unicode_ci NOT NULL,
  `pass_user` text COLLATE utf8_unicode_ci NOT NULL,
  `name_user` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `address_user` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phonenumber_user` char(11) COLLATE utf8_unicode_ci NOT NULL,
  `email_user` char(100) COLLATE utf8_unicode_ci NOT NULL,
  `status_user` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=COMPACT;

--
-- Đang đổ dữ liệu cho bảng `tb_user`
--

INSERT INTO `tb_user` (`id_user`, `account_user`, `pass_user`, `name_user`, `address_user`, `phonenumber_user`, `email_user`, `status_user`) VALUES
(7, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'Lê Ngọc Tiến Thành', '188/48B Nguyễn Văn Cừ', '01262898272', 'lengoctienthanh@gmail.com', 1);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `tb_category`
--
ALTER TABLE `tb_category`
  ADD PRIMARY KEY (`id_category`);

--
-- Chỉ mục cho bảng `tb_city`
--
ALTER TABLE `tb_city`
  ADD PRIMARY KEY (`id_city`);

--
-- Chỉ mục cho bảng `tb_contact`
--
ALTER TABLE `tb_contact`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tb_district`
--
ALTER TABLE `tb_district`
  ADD PRIMARY KEY (`id_district`),
  ADD KEY `fk_city` (`id_city`);

--
-- Chỉ mục cho bảng `tb_label`
--
ALTER TABLE `tb_label`
  ADD PRIMARY KEY (`id_label`);

--
-- Chỉ mục cho bảng `tb_order`
--
ALTER TABLE `tb_order`
  ADD PRIMARY KEY (`id_order`),
  ADD KEY `fk_ship` (`id_ship`),
  ADD KEY `fk_product` (`id_product`);

--
-- Chỉ mục cho bảng `tb_product`
--
ALTER TABLE `tb_product`
  ADD PRIMARY KEY (`id_product`),
  ADD KEY `fk_label` (`id_label`),
  ADD KEY `fk_category` (`id_category`);

--
-- Chỉ mục cho bảng `tb_ship`
--
ALTER TABLE `tb_ship`
  ADD PRIMARY KEY (`id_ship`),
  ADD KEY `fk_district` (`id_district`);

--
-- Chỉ mục cho bảng `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `tb_category`
--
ALTER TABLE `tb_category`
  MODIFY `id_category` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT cho bảng `tb_city`
--
ALTER TABLE `tb_city`
  MODIFY `id_city` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT cho bảng `tb_contact`
--
ALTER TABLE `tb_contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT cho bảng `tb_district`
--
ALTER TABLE `tb_district`
  MODIFY `id_district` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT cho bảng `tb_label`
--
ALTER TABLE `tb_label`
  MODIFY `id_label` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT cho bảng `tb_order`
--
ALTER TABLE `tb_order`
  MODIFY `id_order` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=226;
--
-- AUTO_INCREMENT cho bảng `tb_product`
--
ALTER TABLE `tb_product`
  MODIFY `id_product` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
--
-- AUTO_INCREMENT cho bảng `tb_ship`
--
ALTER TABLE `tb_ship`
  MODIFY `id_ship` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT cho bảng `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
