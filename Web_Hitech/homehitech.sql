-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 25, 2017 at 07:53 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `homehitech`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `delete` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`, `delete`, `created_at`, `updated_at`) VALUES
(1, 'Đèn Âm Trần', 0, '2017-06-24 17:25:19', '2017-06-24 17:25:19'),
(2, 'Đèn Trang Trí', 0, '2017-06-24 17:25:32', '2017-06-24 17:25:32'),
(3, 'Thiết bị truyền hình', 0, '2017-06-24 17:26:56', '2017-06-24 17:26:56'),
(4, 'Thiết bị cáp quang', 0, '2017-06-24 17:27:06', '2017-06-24 17:27:06'),
(5, 'Phụ kiện viễn thông', 0, '2017-06-24 17:27:18', '2017-06-24 17:27:18'),
(6, 'Camera giám sát', 0, '2017-06-24 17:28:52', '2017-06-24 17:28:52'),
(7, 'Phụ kiện camera', 0, '2017-06-24 17:29:12', '2017-06-24 17:29:12'),
(8, 'Chuông cửa', 0, '2017-06-24 17:29:20', '2017-06-24 17:29:20');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `address` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `phone_canhan` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `phone_congty` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `skype` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `facebook` varchar(250) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `address`, `phone_canhan`, `phone_congty`, `email`, `skype`, `facebook`) VALUES
(1, '83 ĐIỆN BIÊN PHỦ, ĐÀ NẴNG', '0932346868', '0932346868', 'admin@homehitech.vn', 'homehitech', 'https://www.facebook.com/Home-Hi-Tech-1820442388266039/');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2017_06_21_155157_create_product_table', 1),
(4, '2017_06_21_155738_create_category_product_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(10) UNSIGNED NOT NULL,
  `ten_sanpham` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ma_sanpham` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cong_suat` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kich_thuoc` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `khoet_lo` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gia` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `giam_gia` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img_path` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `thong_so` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `delete` tinyint(1) NOT NULL DEFAULT '0',
  `created_by` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `ten_sanpham`, `ma_sanpham`, `cong_suat`, `kich_thuoc`, `khoet_lo`, `gia`, `giam_gia`, `img_path`, `thong_so`, `category_id`, `delete`, `created_by`, `created_at`, `updated_at`) VALUES
(1, 'Đèn Âm Trần', 'DBS1-5', '5w', '100x100', '85x85', '157000', '10', 'denamtran_1_resize.jpg', '<table class="NormalTable"><tbody><tr><td><span class="fontstyle0">Thương hiệu</span><span class="fontstyle2">: DBLED<br></span><span class="fontstyle0">Hiệu suất: </span><span class="fontstyle2">80lm/W<br></span><span class="fontstyle0">Chỉ số hoàn màu: </span><span class="fontstyle2">CRI&gt;80Ra<br></span><span class="fontstyle0">Điện áp sử dụng: </span><span class="fontstyle2">85VAC-265VAC</span><span class="fontstyle0">.<br>Dòng điện: </span><span class="fontstyle2">300mA<br></span><span class="fontstyle0">Thời gian bảo hành: </span><span class="fontstyle2">2 năm<br></span><span class="fontstyle0">LED chip</span><span class="fontstyle2">: Epistar – Taiwan<br></span><span class="fontstyle0">IP44 – </span><span class="fontstyle2">Sử dụng trong nhà</span></td></tr></tbody></table><br> \n<br style="line-height: normal; text-align: -webkit-auto; text-size-adjust: auto;">', '1', 0, '1', '2017-06-24 17:30:36', '2017-06-24 20:41:21'),
(2, 'Đèn Âm Trần', 'DBR1-4', '4w', '95', '80', '146000', '10', 'denamtran_2_resize.jpg', '<table class="NormalTable"><tbody><tr><td width="200"><span class="fontstyle0">Thương hiệu</span><span class="fontstyle2">: DBLED<br></span><span class="fontstyle0">Hiệu suất: </span><span class="fontstyle2">80lm/W<br></span><span class="fontstyle0">Chỉ số hoàn màu: </span><span class="fontstyle2">CRI&gt;80Ra<br></span><span class="fontstyle0">Điện áp sử dụng: </span><span class="fontstyle2">85VAC-265VAC</span><span class="fontstyle0">.<br>Dòng điện: </span><span class="fontstyle2">300mA<br></span><span class="fontstyle0">Thời gian bảo hành: </span><span class="fontstyle2">2 năm<br></span><span class="fontstyle0">LED chip</span><span class="fontstyle2">: Epistar – Taiwan<br></span><span class="fontstyle0">IP44 – </span><span class="fontstyle2">Sử dụng trong nhà</span></td></tr></tbody></table><br> \r\n<br style="line-height: normal; text-align: -webkit-auto; text-size-adjust: auto;">', '1', 0, '1', '2017-06-24 20:42:27', '2017-06-24 20:42:27'),
(3, 'Đèn Âm Trần', 'KS GZTD-05', '5w', '108', '80', '141000', '10', 'denamtran_3_resize.jpg', '<table class="NormalTable"><tbody><tr><td width="200"><span class="fontstyle0">Thương hiệu: </span><span class="fontstyle2">Kosoom.<br></span><span class="fontstyle0">LED chip: </span><span class="fontstyle2">Epistar.<br></span><span class="fontstyle0">Hiệu suất: </span><span class="fontstyle2">90lm/W<br></span><span class="fontstyle0">Chỉ số hoàn màu: &gt;</span><span class="fontstyle2">72Ra<br></span><span class="fontstyle0">Điện áp: </span><span class="fontstyle2">175-240VAC<br></span><span class="fontstyle0">Thời gian bảo hành: </span><span class="fontstyle2">2 năm</span></td></tr></tbody></table><br> \r\n<br style="line-height: normal; text-align: -webkit-auto; text-size-adjust: auto;">', '1', 0, '1', '2017-06-24 20:43:10', '2017-06-24 20:43:10'),
(4, 'Đèn Âm Trần', 'KSTH-COB-5', '5w', '100x100', '85x85', '141000', '10', 'denamtran_4_resize.jpg', '<table class="NormalTable"><tbody><tr><td width="200"><span class="fontstyle0">Thương hiệu: </span><span class="fontstyle2">Kosoom.<br></span><span class="fontstyle0">LED chip: </span><span class="fontstyle2">Epistar.<br></span><span class="fontstyle0">Hiệu suất: </span><span class="fontstyle2">90lm/W<br></span><span class="fontstyle0">Chỉ số hoàn màu: &gt;</span><span class="fontstyle2">72Ra<br></span><span class="fontstyle0">Điện áp: </span><span class="fontstyle2">175-240VAC<br></span><span class="fontstyle0">Thời gian bảo hành: </span><span class="fontstyle2">2 năm</span></td></tr></tbody></table><br> \r\n<br style="line-height: normal; text-align: -webkit-auto; text-size-adjust: auto;">', '1', 0, '1', '2017-06-24 20:44:28', '2017-06-24 20:44:28'),
(5, 'Đèn Âm Trần', 'KSTH-COB-5', '5w', '100x100', '80', '157000', '10', 'denamtran_5_resize.jpg', '<table class="NormalTable"><tbody><tr><td width="200"><span class="fontstyle0">Thương hiệu: </span><span class="fontstyle2">Kosoom.<br></span><span class="fontstyle0">LED chip: </span><span class="fontstyle2">Epistar.<br></span><span class="fontstyle0">Hiệu suất: </span><span class="fontstyle2">90lm/W<br></span><span class="fontstyle0">Chỉ số hoàn màu: &gt;</span><span class="fontstyle2">72Ra<br></span><span class="fontstyle0">Điện áp: </span><span class="fontstyle2">175-240VAC<br></span><span class="fontstyle0">Thời gian bảo hành: </span><span class="fontstyle2">2 năm</span></td></tr></tbody></table><br> \r\n<br style="line-height: normal; text-align: -webkit-auto; text-size-adjust: auto;">', '1', 0, '1', '2017-06-24 20:44:55', '2017-06-24 20:44:55'),
(6, 'Đèn LEB Âm Trần', 'RPL-6W-3.5', '6w', 'Φ120x20', 'Φ110', '170000', '10', 'denamtran_7_resize.jpg', '<table class="NormalTable"><tbody><tr><td width="200"><span class="fontstyle0">Thương hiệu: </span><span class="fontstyle2">FSL.<br></span><span class="fontstyle0">LED chip: </span><span class="fontstyle2">Nationstar.<br></span><span class="fontstyle0">Hiệu suất: </span><span class="fontstyle2">60-70lm/W<br></span><span class="fontstyle0">Chỉ số hoàn màu: &gt;</span><span class="fontstyle2">70Ra<br></span><span class="fontstyle0">Điện áp: </span><span class="fontstyle2">100-240VAC<br></span><span class="fontstyle0">Thời gian bảo hành: </span><span class="fontstyle2">18 tháng</span></td></tr></tbody></table><br> \r\n<br style="line-height: normal; text-align: -webkit-auto; text-size-adjust: auto;">', '1', 0, '1', '2017-06-24 20:45:46', '2017-06-24 20:45:46'),
(7, 'Đèn LEB Âm Trần', 'KSTH-COB-5', '6w', 'Φ120x20', '85x85', '170000', '10', 'denamtran_6_resize.jpg', '<table class="NormalTable"><tbody><tr><td width="200"><span class="fontstyle0">Thương hiệu: </span><span class="fontstyle2">FSL.<br></span><span class="fontstyle0">LED chip: </span><span class="fontstyle2">Nationstar.<br></span><span class="fontstyle0">Hiệu suất: </span><span class="fontstyle2">60-70lm/W<br></span><span class="fontstyle0">Chỉ số hoàn màu: &gt;</span><span class="fontstyle2">70Ra<br></span><span class="fontstyle0">Điện áp: </span><span class="fontstyle2">100-240VAC<br></span><span class="fontstyle0">Thời gian bảo hành: </span><span class="fontstyle2">18 tháng</span></td></tr></tbody></table><br> \r\n<br style="line-height: normal; text-align: -webkit-auto; text-size-adjust: auto;">', '1', 0, '1', '2017-06-24 20:46:13', '2017-06-24 20:46:13'),
(8, 'Đèn LEB Âm Trần', 'DBR1-4', '4w', 'Φ120x20', 'Φ110', '170000', '10', 'denamtran_8_resize.jpg', '<table class="NormalTable"><tbody><tr><td width="200"><span class="fontstyle0">Thương hiệu: </span><span class="fontstyle2">FSL.<br></span><span class="fontstyle0">LED chip: </span><span class="fontstyle2">Nationstar.<br></span><span class="fontstyle0">Hiệu suất: </span><span class="fontstyle2">60-70lm/W<br></span><span class="fontstyle0">Chỉ số hoàn màu: &gt;</span><span class="fontstyle2">70Ra<br></span><span class="fontstyle0">Điện áp: </span><span class="fontstyle2">100-240VAC<br></span><span class="fontstyle0">Thời gian bảo hành: </span><span class="fontstyle2">18 tháng</span></td></tr></tbody></table><br> \r\n<br style="line-height: normal; text-align: -webkit-auto; text-size-adjust: auto;">', '1', 0, '1', '2017-06-24 20:46:36', '2017-06-24 20:46:36'),
(9, 'Đèn Trang Trí', 'KSTH-COB-5', '5w', 'Φ120x20', '85x85', '100000', '10', 'dentrangtri_1_resize.jpg', '<table class="NormalTable"><tbody><tr><td width="200"><span class="fontstyle0">Thương hiệu: </span><span class="fontstyle2">Kosoom.<br></span><span class="fontstyle0">LED chip: </span><span class="fontstyle2">Epistar.<br></span><span class="fontstyle0">Hiệu suất: </span><span class="fontstyle2">90lm/W<br></span><span class="fontstyle0">Chỉ số hoàn màu: &gt;</span><span class="fontstyle2">72Ra<br></span><span class="fontstyle0">Điện áp: </span><span class="fontstyle2">175-240VAC<br></span><span class="fontstyle0">Thời gian bảo hành: </span><span class="fontstyle2">2 năm</span></td></tr></tbody></table><br> \r\n<br style="line-height: normal; text-align: -webkit-auto; text-size-adjust: auto;">', '2', 0, '1', '2017-06-25 00:12:41', '2017-06-25 00:12:41'),
(10, 'Đèn Trang Trí', 'KSTH-COB-5', '5w', '100x100', '85x85', '170000', '10', 'dentrangtri_2_resize.jpg', '<table class="NormalTable"><tbody><tr><td width="200"><span class="fontstyle0">Thương hiệu: </span><span class="fontstyle2">Kosoom.<br></span><span class="fontstyle0">LED chip: </span><span class="fontstyle2">Epistar.<br></span><span class="fontstyle0">Hiệu suất: </span><span class="fontstyle2">90lm/W<br></span><span class="fontstyle0">Chỉ số hoàn màu: &gt;</span><span class="fontstyle2">72Ra<br></span><span class="fontstyle0">Điện áp: </span><span class="fontstyle2">175-240VAC<br></span><span class="fontstyle0">Thời gian bảo hành: </span><span class="fontstyle2">2 năm</span></td></tr></tbody></table><br> \r\n<br style="line-height: normal; text-align: -webkit-auto; text-size-adjust: auto;">', '2', 0, '1', '2017-06-25 00:13:08', '2017-06-25 00:13:08'),
(11, 'Đèn Trang Trí', 'KS GZTD-05', '6w', '95', '80', '149000', '10', 'dentrangtri_3_resize.jpg', '<table class="NormalTable"><tbody><tr><td width="200"><span class="fontstyle0">Thương hiệu: </span><span class="fontstyle2">Kosoom.<br></span><span class="fontstyle0">LED chip: </span><span class="fontstyle2">Epistar.<br></span><span class="fontstyle0">Hiệu suất: </span><span class="fontstyle2">90lm/W<br></span><span class="fontstyle0">Chỉ số hoàn màu: &gt;</span><span class="fontstyle2">72Ra<br></span><span class="fontstyle0">Điện áp: </span><span class="fontstyle2">175-240VAC<br></span><span class="fontstyle0">Thời gian bảo hành: </span><span class="fontstyle2">2 năm</span></td></tr></tbody></table><br> \r\n<br style="line-height: normal; text-align: -webkit-auto; text-size-adjust: auto;">', '2', 0, '1', '2017-06-25 00:14:07', '2017-06-25 00:14:07'),
(12, 'Đèn Trang Trí', 'D001', '5w', '100x100', '80', '141000', '10', 'dentrangtri_4_resize.jpg', '<table class="NormalTable"><tbody><tr><td width="200"><span class="fontstyle0">Thương hiệu: </span><span class="fontstyle2">Kosoom.<br></span><span class="fontstyle0">LED chip: </span><span class="fontstyle2">Epistar.<br></span><span class="fontstyle0">Hiệu suất: </span><span class="fontstyle2">90lm/W<br></span><span class="fontstyle0">Chỉ số hoàn màu: &gt;</span><span class="fontstyle2">72Ra<br></span><span class="fontstyle0">Điện áp: </span><span class="fontstyle2">175-240VAC<br></span><span class="fontstyle0">Thời gian bảo hành: </span><span class="fontstyle2">2 năm</span></td></tr></tbody></table><br> \r\n<br style="line-height: normal; text-align: -webkit-auto; text-size-adjust: auto;">', '2', 0, '1', '2017-06-25 00:14:30', '2017-06-25 00:14:30'),
(13, 'Đèn Trang Trí', 'DBS1-5', '6w', 'Φ120x20', '85x85', '157000', '10', 'dentrangtri_5_resize.jpg', '<table class="NormalTable"><tbody><tr><td width="200"><span class="fontstyle0">Thương hiệu: </span><span class="fontstyle2">Kosoom.<br></span><span class="fontstyle0">LED chip: </span><span class="fontstyle2">Epistar.<br></span><span class="fontstyle0">Hiệu suất: </span><span class="fontstyle2">90lm/W<br></span><span class="fontstyle0">Chỉ số hoàn màu: &gt;</span><span class="fontstyle2">72Ra<br></span><span class="fontstyle0">Điện áp: </span><span class="fontstyle2">175-240VAC<br></span><span class="fontstyle0">Thời gian bảo hành: </span><span class="fontstyle2">2 năm</span></td></tr></tbody></table><br> \r\n<br style="line-height: normal; text-align: -webkit-auto; text-size-adjust: auto;">', '2', 0, '1', '2017-06-25 00:14:56', '2017-06-25 00:14:56'),
(14, 'Đèn Trang Trí', 'DBS1-5', '5w', '100x100', '80', '146000', '10', 'dentrangtri_6_resize.jpg', '<table class="NormalTable"><tbody><tr><td width="200"><span class="fontstyle0">Thương hiệu: </span><span class="fontstyle2">Kosoom.<br></span><span class="fontstyle0">LED chip: </span><span class="fontstyle2">Epistar.<br></span><span class="fontstyle0">Hiệu suất: </span><span class="fontstyle2">90lm/W<br></span><span class="fontstyle0">Chỉ số hoàn màu: &gt;</span><span class="fontstyle2">72Ra<br></span><span class="fontstyle0">Điện áp: </span><span class="fontstyle2">175-240VAC<br></span><span class="fontstyle0">Thời gian bảo hành: </span><span class="fontstyle2">2 năm</span></td></tr></tbody></table><br> \r\n<br style="line-height: normal; text-align: -webkit-auto; text-size-adjust: auto;">', '2', 0, '1', '2017-06-25 00:15:33', '2017-06-25 00:15:33'),
(15, 'Đèn Trang Trí', 'KSTH-COB-5', '5w', '100x100', '80', '132000', '10', 'dentrangtri_7_resize.jpg', '<table class="NormalTable"><tbody><tr><td width="200"><span class="fontstyle0">Thương hiệu: </span><span class="fontstyle2">Kosoom.<br></span><span class="fontstyle0">LED chip: </span><span class="fontstyle2">Epistar.<br></span><span class="fontstyle0">Hiệu suất: </span><span class="fontstyle2">90lm/W<br></span><span class="fontstyle0">Chỉ số hoàn màu: &gt;</span><span class="fontstyle2">72Ra<br></span><span class="fontstyle0">Điện áp: </span><span class="fontstyle2">175-240VAC<br></span><span class="fontstyle0">Thời gian bảo hành: </span><span class="fontstyle2">2 năm</span></td></tr></tbody></table><br> \r\n<br style="line-height: normal; text-align: -webkit-auto; text-size-adjust: auto;">', '2', 0, '1', '2017-06-25 00:16:10', '2017-06-25 00:16:10'),
(16, 'Đèn Trang Trí', 'DBS1-5', '6w', '100x100', '85x85', '146000', '10', 'dentrangtri_8_resize.jpg', '<table class="NormalTable"><tbody><tr><td width="200"><span class="fontstyle0">Thương hiệu: </span><span class="fontstyle2">Kosoom.<br></span><span class="fontstyle0">LED chip: </span><span class="fontstyle2">Epistar.<br></span><span class="fontstyle0">Hiệu suất: </span><span class="fontstyle2">90lm/W<br></span><span class="fontstyle0">Chỉ số hoàn màu: &gt;</span><span class="fontstyle2">72Ra<br></span><span class="fontstyle0">Điện áp: </span><span class="fontstyle2">175-240VAC<br></span><span class="fontstyle0">Thời gian bảo hành: </span><span class="fontstyle2">2 năm</span></td></tr></tbody></table><br> \r\n<br style="line-height: normal; text-align: -webkit-auto; text-size-adjust: auto;">', '2', 0, '1', '2017-06-25 00:16:33', '2017-06-25 00:16:33'),
(17, 'Đèn Trang Trí', 'DBR1-4', '5w', 'Φ120x20', '85x85', '137000', '10', 'dentrangtri_9_resize.jpg', '<table class="NormalTable"><tbody><tr><td width="200"><span class="fontstyle0">Thương hiệu: </span><span class="fontstyle2">Kosoom.<br></span><span class="fontstyle0">LED chip: </span><span class="fontstyle2">Epistar.<br></span><span class="fontstyle0">Hiệu suất: </span><span class="fontstyle2">90lm/W<br></span><span class="fontstyle0">Chỉ số hoàn màu: &gt;</span><span class="fontstyle2">72Ra<br></span><span class="fontstyle0">Điện áp: </span><span class="fontstyle2">175-240VAC<br></span><span class="fontstyle0">Thời gian bảo hành: </span><span class="fontstyle2">2 năm</span></td></tr></tbody></table><br> \r\n<br style="line-height: normal; text-align: -webkit-auto; text-size-adjust: auto;">', '2', 0, '1', '2017-06-25 00:17:01', '2017-06-25 00:17:01'),
(18, 'Đèn Trang Trí', 'DBR1-4', '6w', 'Φ120x20', '85x85', '170000', '10', 'dentrangtri_10_resize.jpg', '<table class="NormalTable"><tbody><tr><td width="200"><span class="fontstyle0">Thương hiệu: </span><span class="fontstyle2">Kosoom.<br></span><span class="fontstyle0">LED chip: </span><span class="fontstyle2">Epistar.<br></span><span class="fontstyle0">Hiệu suất: </span><span class="fontstyle2">90lm/W<br></span><span class="fontstyle0">Chỉ số hoàn màu: &gt;</span><span class="fontstyle2">72Ra<br></span><span class="fontstyle0">Điện áp: </span><span class="fontstyle2">175-240VAC<br></span><span class="fontstyle0">Thời gian bảo hành: </span><span class="fontstyle2">2 năm</span></td></tr></tbody></table><br> \r\n<br style="line-height: normal; text-align: -webkit-auto; text-size-adjust: auto;">', '2', 0, '1', '2017-06-25 00:17:21', '2017-06-25 00:17:21');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@homehitech.vn', '$2y$10$g4mSp/gFOCN1hsLS47sGhuUNn2fLBN9GZ5gmt2e.Q9LNHCFsgxexW', NULL, '2017-06-25 09:10:54', '2017-06-25 09:10:54');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
