-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th5 05, 2020 lúc 11:39 AM
-- Phiên bản máy phục vụ: 10.4.11-MariaDB
-- Phiên bản PHP: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `laravel`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `admin`
--

CREATE TABLE `admin` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` char(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `avatar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `active` tinyint(4) NOT NULL DEFAULT 1,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `admin`
--

INSERT INTO `admin` (`id`, `name`, `email`, `phone`, `avatar`, `active`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(2, 'Nguyen Huu quang', 'neuem113@gmail.com', '0327460560', '', 1, '$2y$10$Cp1uotuNB62wNryop92q0ukYhp3IZEQ9x14PEEN0sEWrM33mMo1dO', 'JF4QiDwFw5i1AgTtQ0qnXw65QIztnKFpgwipVCJzWJoZh8fnUIulZPWh2U3k', NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `article`
--

CREATE TABLE `article` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `a_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `a_slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `a_description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `a_content` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `a_active` tinyint(4) NOT NULL DEFAULT 1,
  `a_author_id` int(10) UNSIGNED NOT NULL DEFAULT 0,
  `a_description_seo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `a_title_seo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `a_avatar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `a_view` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `a_hot` tinyint(4) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `article`
--

INSERT INTO `article` (`id`, `a_name`, `a_slug`, `a_description`, `a_content`, `a_active`, `a_author_id`, `a_description_seo`, `a_title_seo`, `a_avatar`, `a_view`, `created_at`, `updated_at`, `a_hot`) VALUES
(2, 'điện thoại iphone xix', 'dien-thoai-iphone-xix', 'điện thoại iphone 9', '<h3>Th&ocirc;ng số kỹ thuật chi tiết iPhone 9</h3>\r\n\r\n<ul>\r\n	<li>M&agrave;n h&igrave;nh</li>\r\n	<li>C&ocirc;ng nghệ m&agrave;n h&igrave;nh\r\n	<p><a href=\"https://www.thegioididong.com/hoi-dap/man-hinh-ledbacklit-ips-lcd-la-gi-905757\" target=\"_blank\">LED-backlit IPS LCD</a></p>\r\n	</li>\r\n	<li>Độ ph&acirc;n giải\r\n	<p><a href=\"https://www.thegioididong.com/tin-tuc/do-phan-giai-man-hinh-qhd-hd-fullhd-2k-4k-la-gi--592178#qhd\" target=\"_blank\">qHD (640 x 1136 Pixels)</a></p>\r\n	</li>\r\n	<li>M&agrave;n h&igrave;nh rộng\r\n	<p>4.7&quot;</p>\r\n	</li>\r\n	<li>\r\n	<p>Mặt k&iacute;nh cảm ứng</p>\r\n\r\n	<p><a href=\"https://www.thegioididong.com/hoi-dap/kinh-thuong-kinh-chong-xuoc-kinh-cuong-luc-la-1173657#cuongluc\" target=\"_blank\">K&iacute;nh cường lực</a></p>\r\n	</li>\r\n	<li>Camera sau</li>\r\n	<li>Độ ph&acirc;n giải\r\n	<p>12 MP</p>\r\n	</li>\r\n	<li>Quay phim\r\n	<p><a href=\"https://www.thegioididong.com/hoi-dap/cac-chuan-quay-phim-tren-dien-thoai-tablet-pho-bi-1174134#fullhd\" target=\"_blank\">Quay phim FullHD 1080p@30fps</a></p>\r\n	</li>\r\n	<li>Đ&egrave;n Flash\r\n	<p><a href=\"https://www.thegioididong.com/hoi-dap/tim-hieu-cac-loai-den-flash-tren-camera-dien-thoai-1143808#denflash\" target=\"_blank\">C&oacute;</a></p>\r\n	</li>\r\n	<li>Chụp ảnh n&acirc;ng cao\r\n	<p><a href=\"https://www.thegioididong.com/hoi-dap/ai-camera-la-gi-co-tac-dung-gi-trong-may-anh-1169103\" target=\"_blank\">A.I Camera</a>,&nbsp;<a href=\"https://www.thegioididong.com/hoi-dap/che-do-chup-dem-night-mode-la-gi-907873\" target=\"_blank\">Ban đ&ecirc;m (Night Mode)</a>,&nbsp;<a href=\"https://www.thegioididong.com/hoi-dap/che-do-quay-phim-timelapse-la-gi-1172228\" target=\"_blank\">Tr&ocirc;i nhanh thời gian (Time Lapse)</a>,&nbsp;<a href=\"https://www.thegioididong.com/hoi-dap/slow-motion-la-gi-1013728\" target=\"_blank\">Quay chậm (Slow Motion)</a>, L&agrave;m đẹp,&nbsp;<a href=\"https://www.thegioididong.com/hoi-dap/camera-goc-rong-goc-sieu-rong-tren-smartphone-l-1172240\" target=\"_blank\">G&oacute;c rộng (Wide)</a>,&nbsp;<a href=\"https://www.thegioididong.com/hoi-dap/che-do-autofocus-trong-chup-anh-tren-smartphone-906408\" target=\"_blank\">Tự động lấy n&eacute;t (AF)</a>,&nbsp;<a href=\"https://www.thegioididong.com/hoi-dap/che-do-touch-focus-khi-chup-anh-tren-smartphone-906412\" target=\"_blank\">Chạm lấy n&eacute;t</a>,&nbsp;<a href=\"https://www.thegioididong.com/hoi-dap/chuc-nang-nhan-dien-khuon-mat-la-gi-907903\" target=\"_blank\">Nhận diện khu&ocirc;n mặt</a>,&nbsp;<a href=\"https://www.thegioididong.com/hoi-dap/che-do-chup-anh-hdr-tren-smartphone-la-gi-906400\" target=\"_blank\">HDR</a>,&nbsp;<a href=\"https://www.thegioididong.com/hoi-dap/chup-anh-panorama-toan-canh-tren-camera-cua-smar-906425\" target=\"_blank\">To&agrave;n cảnh (Panorama)</a></p>\r\n	</li>\r\n	<li>Camera trước</li>\r\n	<li>Độ ph&acirc;n giải\r\n	<p>7 MP</p>\r\n	</li>\r\n	<li>Videocall\r\n	<p><a href=\"https://www.thegioididong.com/hoi-dap/goi-video-call-la-gi-neu-may-khong-trang-bi-san-1174141\" target=\"_blank\">Hỗ trợ VideoCall th&ocirc;ng qua ứng dụng</a></p>\r\n	</li>\r\n	<li>Th&ocirc;ng tin kh&aacute;c\r\n	<p><a href=\"https://www.thegioididong.com/hoi-dap/chuc-nang-retina-flash-tren-cac-dong-dien-thoai-ip-1173061\" target=\"_blank\">Retina Flash</a>,&nbsp;<a href=\"https://www.thegioididong.com/hoi-dap/cac-chuan-quay-phim-tren-dien-thoai-tablet-pho-1174134#hd\" target=\"_blank\">Quay video HD</a>,&nbsp;<a href=\"https://www.thegioididong.com/hoi-dap/che-do-lam-dep-beautify-tren-smartphone-tablet-1172231\" target=\"_blank\">L&agrave;m đẹp (Beautify)</a></p>\r\n	</li>\r\n	<li>Hệ điều h&agrave;nh - CPU</li>\r\n	<li>Hệ điều h&agrave;nh\r\n	<p><a href=\"https://www.thegioididong.com/hoi-dap/tat-ca-nhung-tinh-nang-moi-duoc-cap-nhat-tren-ios-1171206\" target=\"_blank\">iOS 13</a></p>\r\n	</li>\r\n	<li>Chipset (h&atilde;ng SX CPU)\r\n	<p><a href=\"https://www.thegioididong.com/hoi-dap/tim-hieu-ve-chip-apple-a13-bionic-tren-iphone-11-n-1197492\" target=\"_blank\">Apple A13 Bionic 6 nh&acirc;n</a></p>\r\n	</li>\r\n	<li>Tốc độ CPU\r\n	<p>2 nh&acirc;n 2.65 GHz &amp; 4 nh&acirc;n 1.8 GHz</p>\r\n	</li>\r\n	<li>Chip đồ họa (GPU)\r\n	<p><a href=\"https://www.thegioididong.com/hoi-dap/tim-hieu-chip-apple-a12-bionic-con-chip-7nm-dau-1171937\" target=\"_blank\">Apple GPU 4 nh&acirc;n</a></p>\r\n	</li>\r\n	<li>Bộ nhớ &amp; Lưu trữ</li>\r\n	<li>RAM\r\n	<p>3 GB</p>\r\n	</li>\r\n	<li>Bộ nhớ trong\r\n	<p>64 GB</p>\r\n	</li>\r\n	<li>Bộ nhớ c&ograve;n lại (khả dụng)\r\n	<p>Đang cập nhật</p>\r\n	</li>\r\n	<li>Thẻ nhớ ngo&agrave;i\r\n	<p>Kh&ocirc;ng</p>\r\n	</li>\r\n	<li>Kết nối</li>\r\n	<li>Mạng di động\r\n	<p><a href=\"https://www.thegioididong.com/hoi-dap/mang-du-lieu-di-dong-4g-la-gi-731757\" target=\"_blank\">Hỗ trợ 4G</a></p>\r\n	</li>\r\n	<li>SIM\r\n	<p><a href=\"https://www.thegioididong.com/tin-tuc/tim-hieu-cac-loai-sim-thong-dung-sim-thuong-micro--590216#nanosim\" target=\"_blank\">1 Nano SIM</a></p>\r\n	</li>\r\n	<li>Wifi\r\n	<p><a href=\"https://www.thegioididong.com/tin-tuc/wifi-la-gi-cai-dat-wifi-hotspot-nhu-the-nao--590309#80211n\" target=\"_blank\">Wi-Fi 802.11 b/g/n</a>,&nbsp;<a href=\"https://www.thegioididong.com/tin-tuc/wifi-la-gi-cai-dat-wifi-hotspot-nhu-the-nao--590309#wifihotspot\" target=\"_blank\">Wi-Fi hotspot</a></p>\r\n	</li>\r\n	<li>GPS\r\n	<p><a href=\"https://www.thegioididong.com/hoi-dap/gps-la-gi-806129#a-gps\" target=\"_blank\">A-GPS</a>,&nbsp;<a href=\"https://www.thegioididong.com/hoi-dap/gps-la-gi-806129#glonass\" target=\"_blank\">GLONASS</a></p>\r\n	</li>\r\n	<li>Bluetooth\r\n	<p><a href=\"https://www.thegioididong.com/hoi-dap/cong-nghe-bluetooth-a2dp-la-gi-723725\" target=\"_blank\">A2DP</a>,&nbsp;<a href=\"https://www.thegioididong.com/hoi-dap/cong-nghe-bluetooth-743602#le\" target=\"_blank\">LE</a>,&nbsp;<a href=\"https://www.thegioididong.com/hoi-dap/bluetooth-42-la-gi-895615\" target=\"_blank\">v4.2</a></p>\r\n	</li>\r\n	<li>C&ocirc;̉ng k&ecirc;́t n&ocirc;́i/sạc\r\n	<p><a href=\"https://www.thegioididong.com/hoi-dap/cong-lightning-la-gi-868282\" target=\"_blank\">Lightning</a></p>\r\n	</li>\r\n	<li>Jack tai nghe\r\n	<p>3.5 mm</p>\r\n	</li>\r\n	<li>Kết nối kh&aacute;c\r\n	<p><a href=\"https://www.thegioididong.com/hoi-dap/ket-noi-airplay-la-gi-907867\" target=\"_blank\">Air Play</a>,&nbsp;<a href=\"https://www.thegioididong.com/hoi-dap/ket-noi-otg-la-gi-otg-duoc-su-dung-cho-muc-dich-gi-1172882\" target=\"_blank\">OTG</a>,&nbsp;<a href=\"https://www.thegioididong.com/hoi-dap/chuan-ket-noi-hdmi-la-gi-930605\" target=\"_blank\">HDMI</a></p>\r\n	</li>\r\n	<li>Thiết kế &amp; Trọng lượng</li>\r\n	<li>Thiết kế\r\n	<p><a href=\"https://www.thegioididong.com/tin-tuc/tim-hieu-cac-kieu-thiet-ke-tren-di-dong-va-may-tin-597153#nguyenkhoi\" target=\"_blank\">Nguy&ecirc;n khối</a></p>\r\n	</li>\r\n	<li>Chất liệu\r\n	<p>Khung kim loại &amp; Mặt lưng k&iacute;nh cường lực</p>\r\n	</li>\r\n	<li>K&iacute;ch thước\r\n	<p>Đang cập nhật</p>\r\n	</li>\r\n	<li>Trọng lượng\r\n	<p>Đang cập nhật</p>\r\n	</li>\r\n	<li>Th&ocirc;ng tin pin &amp; Sạc</li>\r\n	<li>Dung lượng pin\r\n	<p>Đang cập nhật</p>\r\n	</li>\r\n	<li>Loại pin\r\n	<p><a href=\"https://www.thegioididong.com/hoi-dap/tim-hieu-pin-li-ion-la-gi-985040\" target=\"_blank\">Lithium - Ion</a></p>\r\n	</li>\r\n	<li>\r\n	<p>C&ocirc;ng nghệ pin</p>\r\n\r\n	<p><a href=\"https://www.thegioididong.com/hoi-dap/che-do-tiet-kiem-pin-va-sieu-tiet-kiem-pin-la-gi-926730\" target=\"_blank\">Tiết kiệm pin</a></p>\r\n	</li>\r\n	<li>Tiện &iacute;ch</li>\r\n	<li>Bảo mật n&acirc;ng cao\r\n	<p><a href=\"https://www.thegioididong.com/hoi-dap/cam-bien-van-tay-tren-smartphone-la-gi-908163\" target=\"_blank\">Mở kh&oacute;a bằng v&acirc;n tay</a></p>\r\n	</li>\r\n	<li>T&iacute;nh năng đặc biệt\r\n	<p><a href=\"https://www.thegioididong.com/hoi-dap/lam-the-nao-de-ghi-am-cuoc-goi-tren-android-574902#ghiam\" target=\"_blank\">Ghi &acirc;m cuộc gọi</a><br />\r\n	<a href=\"https://www.thegioididong.com/hoi-dap/tong-hop-mot-so-tinh-nang-quen-thuoc-tren-dien-t-1144487#chan\" target=\"_blank\">Chặn cuộc gọi</a><br />\r\n	<a href=\"https://www.thegioididong.com/hoi-dap/tro-ly-ao-cortana-la-gi-899933\" target=\"_blank\">Trợ l&yacute; ảo Cortana</a></p>\r\n	</li>\r\n	<li>Ghi &acirc;m\r\n	<p>C&oacute;</p>\r\n	</li>\r\n	<li>Radio\r\n	<p>Kh&ocirc;ng</p>\r\n	</li>\r\n	<li>Xem phim\r\n	<p><a href=\"https://www.thegioididong.com/hoi-dap/cac-dinh-dang-video-va-am-thanh-pho-bien-hien-nay-740243#h265\" target=\"_blank\">H.265</a>,&nbsp;<a href=\"https://www.thegioididong.com/hoi-dap/cac-dinh-dang-video-va-am-thanh-740243#3gp\" target=\"_blank\">3GP</a>,&nbsp;<a href=\"https://www.thegioididong.com/hoi-dap/cac-dinh-dang-video-va-am-thanh-740243#mp4\" target=\"_blank\">MP4</a>,&nbsp;<a href=\"https://www.thegioididong.com/hoi-dap/cac-dinh-dang-video-va-am-thanh-740243#avi\" target=\"_blank\">AVI</a>,&nbsp;<a href=\"https://www.thegioididong.com/hoi-dap/cac-dinh-dang-video-va-am-thanh-740243#h263\" target=\"_blank\">H.263</a>,&nbsp;<a href=\"https://www.thegioididong.com/hoi-dap/cac-dinh-dang-video-va-am-thanh-740243#h264\" target=\"_blank\">H.264(MPEG4-AVC)</a></p>\r\n	</li>\r\n	<li>Nghe nhạc\r\n	<p>3GPP, ALAC,&nbsp;<a href=\"https://www.thegioididong.com/hoi-dap/cac-dinh-dang-video-va-am-thanh-740243#wav\" target=\"_blank\">WAV</a>,&nbsp;<a href=\"https://www.thegioididong.com/hoi-dap/cac-dinh-dang-video-va-am-thanh-740243#wma\" target=\"_blank\">WMA</a>,&nbsp;<a href=\"https://www.thegioididong.com/hoi-dap/cac-dinh-dang-video-va-am-thanh-740243#wma\" target=\"_blank\">WMA9</a>,&nbsp;<a href=\"https://www.thegioididong.com/hoi-dap/cac-dinh-dang-video-va-am-thanh-740243#aac\" target=\"_blank\">AAC+</a>,&nbsp;<a href=\"https://www.thegioididong.com/hoi-dap/cac-dinh-dang-video-va-am-thanh-740243#aac\" target=\"_blank\">AAC++</a>,&nbsp;<a href=\"https://www.thegioididong.com/hoi-dap/cac-dinh-dang-video-va-am-thanh-740243#eaac+\" target=\"_blank\">eAAC+</a>,&nbsp;<a href=\"https://www.thegioididong.com/hoi-dap/cac-dinh-dang-video-va-am-thanh-740243#flac\" target=\"_blank\">FLAC</a></p>\r\n	</li>\r\n	<li>Th&ocirc;ng tin kh&aacute;c</li>\r\n	<li>Thời điểm ra mắt\r\n	<p>Đang cập nhật</p>\r\n	</li>\r\n</ul>', 0, 0, 'điện thoại iphone 9', 'điện thoại iphone 9', '2020-03-02__3.png', 0, '2020-02-26 03:58:18', '2020-03-19 11:30:48', 1),
(3, 'ipad air 10.5 inch Wifi 64GB 2019', 'ipad-air-105-inch-wifi-64gb-2019', 'ipad air', '<h2>Đặc điểm nổi bật của iPad Air 10.5 inch Wifi 64GB 2019</h2>\r\n\r\n<p><img src=\"https://cdn.tgdd.vn/Products/Images/522/202705/Slider/vi-vn-ipad-air-105-inch-wifi-2019-tinhnang.jpg\" /></p>\r\n\r\n<p><a href=\"https://www.thegioididong.com/tin-tuc/chi-tiet-chip-apple-a12-bionic-ben-trong-iphone-xs-xs-max-1116982\" target=\"_blank\">T&igrave;m hiểu th&ecirc;m</a></p>\r\n\r\n<p><a href=\"https://www.thegioididong.com/phu-kien-thong-minh/apple-pencil\" target=\"_blank\">T&igrave;m hiểu th&ecirc;m</a></p>\r\n\r\n<p>Bộ sản phẩm chuẩn: C&aacute;p Lightning,Adapter</p>\r\n\r\n<h2>Đ&atilde; rất l&acirc;u rồi Apple mới lại n&acirc;ng cấp d&ograve;ng&nbsp;<a href=\"https://www.thegioididong.com/may-tinh-bang-apple-ipad\" target=\"_blank\" title=\"Tham khảo máy tính bảng Apple chính hãng\">iPad</a>&nbsp;Air của m&igrave;nh v&agrave; với phi&ecirc;n bản&nbsp;<a href=\"https://www.thegioididong.com/may-tinh-bang/ipad-air-105-inch-wifi-2019\" target=\"_blank\" title=\"Tham khảo máy tính bảng iPad Air 10.5 inch Wifi 2019 chính hãng\">iPad Air 10.5 inch Wifi 2019</a>&nbsp;th&igrave; thực sự người d&ugrave;ng đ&atilde; c&oacute; được một thiết bị được n&acirc;ng cấp mạnh mẽ sau thời gian d&agrave;i chờ đợi.</h2>\r\n\r\n<h3>Thiết kế chuẩn mực của một chiếc m&aacute;y t&iacute;nh bảng</h3>\r\n\r\n<p>iPad Air 10.5 inch Wifi 2019 kh&ocirc;ng đi theo thiết kế tr&agrave;n viền như tr&ecirc;n&nbsp;<a href=\"https://www.thegioididong.com/dtdd\" target=\"_blank\" title=\"Tham khảo điện thoại chính hãng\">smartphone</a>&nbsp;nhưng điều đ&oacute; lại mang lại cho người d&ugrave;ng cảm gi&aacute;c cầm nắm tốt hơn.</p>\r\n\r\n<p><a href=\"https://www.thegioididong.com/images/522/202705/ipad-air-105-inch-wifi-20193.jpg\" onclick=\"return false;\"><img alt=\"Thiết kế của máy tính bảng iPad Air 10.5 inch Wifi 2019 chính hãng\" src=\"https://cdn.tgdd.vn/Products/Images/522/202705/ipad-air-105-inch-wifi-20193.jpg\" title=\"Thiết kế của máy tính bảng iPad Air 10.5 inch Wifi 2019 chính hãng\" /></a></p>\r\n\r\n<p>K&iacute;ch thước iPad thường kh&aacute; lớn n&ecirc;n việc sở hữu viền m&agrave;n h&igrave;nh d&agrave;y một ch&uacute;t sẽ gi&uacute;p bạn thoải m&aacute;i cầm ngang hay cầm dọc m&agrave; kh&ocirc;ng sợ chạm v&agrave;o m&agrave;n h&igrave;nh.</p>\r\n\r\n<p><a href=\"https://www.thegioididong.com/images/522/202705/ipad-air-105-inch-wifi-20195.jpg\" onclick=\"return false;\"><img alt=\"Thiết kế của máy tính bảng iPad Air 10.5 inch Wifi 2019 chính hãng\" src=\"https://cdn.tgdd.vn/Products/Images/522/202705/ipad-air-105-inch-wifi-20195.jpg\" title=\"Thiết kế của máy tính bảng iPad Air 10.5 inch Wifi 2019 chính hãng\" /></a></p>\r\n\r\n<p>Chất liệu kim loại nguy&ecirc;n khối với c&aacute;c g&oacute;c canh bo cong mềm mại gi&uacute;p bạn c&oacute; một thiết bị sang trọng v&agrave; rất thoải m&aacute;i khi cầm sử dụng tr&ecirc;n tay.</p>\r\n\r\n<p><a href=\"https://www.thegioididong.com/images/522/202705/ipad-air-105-inch-wifi-20194.jpg\" onclick=\"return false;\"><img alt=\"Thiết kế của máy tính bảng iPad Air 10.5 inch Wifi 2019 chính hãng\" src=\"https://cdn.tgdd.vn/Products/Images/522/202705/ipad-air-105-inch-wifi-20194.jpg\" title=\"Thiết kế của máy tính bảng iPad Air 10.5 inch Wifi 2019 chính hãng\" /></a></p>\r\n\r\n<p>Đ&uacute;ng như t&ecirc;n gọi th&igrave;&nbsp;iPad Air mới vẫn c&oacute; độ mỏng rất ấn tượng n&ecirc;n bạn c&oacute; thể dễ d&agrave;ng cho v&agrave;o balo hay t&uacute;i x&aacute;ch mang đi cafe với bạn b&egrave;.</p>\r\n\r\n<p>Xem th&ecirc;m:&nbsp;<a href=\"https://www.thegioididong.com/tin-tuc/danh-gia-chi-tiet-ipad-air-2019-phien-ban-gia-re-cua-ipad-pro-1158801\" target=\"_blank\" title=\"Đánh giá chi tiết iPad Air 2019: Phiên bản giá rẻ của iPad Pro\" type=\"Đánh giá chi tiết iPad Air 2019: Phiên bản giá rẻ của iPad Pro\">Đ&aacute;nh gi&aacute; chi tiết iPad Air 2019: Phi&ecirc;n bản gi&aacute; rẻ của iPad Pro</a></p>\r\n\r\n<h3>M&agrave;n h&igrave;nh sắc n&eacute;t, độ s&aacute;ng cao</h3>\r\n\r\n<p>M&agrave;n h&igrave;nh l&agrave; thứ quan trọng nhất khi người d&ugrave;ng chọn mua một chiếc iPad v&agrave; với k&iacute;ch thước&nbsp;<a href=\"https://www.thegioididong.com/may-tinh-bang?g=tren-10\" target=\"_blank\" title=\"Tham khảo giá máy tính bảng có kích thước màn hình trên 10 inch\" type=\"Tham khảo giá máy tính bảng có kích thước màn hình trên 10 inch\">10.5 inch</a>&nbsp;th&igrave; bạn cũng sẽ c&oacute; được kh&ocirc;ng gian rất thoải m&aacute;i để giải tr&iacute;.</p>\r\n\r\n<p><a href=\"https://www.thegioididong.com/images/522/202705/ipad-air-105-inch-wifi-20192.jpg\" onclick=\"return false;\"><img alt=\"Màn hình của máy tính bảng iPad Air 10.5 inch Wifi 2019 chính hãng\" src=\"https://cdn.tgdd.vn/Products/Images/522/202705/ipad-air-105-inch-wifi-20192.jpg\" title=\"Màn hình của máy tính bảng iPad Air 10.5 inch Wifi 2019 chính hãng\" /></a></p>\r\n\r\n<p>B&ecirc;n cạnh đ&oacute; m&aacute;y c&ograve;n hỗ trợ c&ocirc;ng nghệ True Tone gi&uacute;p bạn lu&ocirc;n cảm thấy dễ chịu d&ugrave; sử dụng trong bất cứ điều kiện m&ocirc;i trường n&agrave;o.</p>\r\n\r\n<p><a href=\"https://www.thegioididong.com/images/522/202705/ipad-air-105-inch-wifi-20199.jpg\" onclick=\"return false;\"><img alt=\"Màn hình của máy tính bảng iPad Air 10.5 inch Wifi 2019 chính hãng\" src=\"https://cdn.tgdd.vn/Products/Images/522/202705/ipad-air-105-inch-wifi-20199.jpg\" title=\"Màn hình của máy tính bảng iPad Air 10.5 inch Wifi 2019 chính hãng\" /></a></p>\r\n\r\n<p>iPad Air mới được Apple sử dụng m&agrave;n h&igrave;nh cấu tạo bởi nhiều lớp n&ecirc;n h&igrave;nh ảnh sẽ xuất hiện như thể được vẽ trực tiếp tr&ecirc;n một mảnh k&iacute;nh vậy.</p>\r\n\r\n<p><a href=\"https://www.thegioididong.com/images/522/202705/ipad-air-105-inch-wifi-201910.jpg\" onclick=\"return false;\"><img alt=\"Màn hình của máy tính bảng iPad Air 10.5 inch Wifi 2019 chính hãng\" src=\"https://cdn.tgdd.vn/Products/Images/522/202705/ipad-air-105-inch-wifi-201910.jpg\" title=\"Màn hình của máy tính bảng iPad Air 10.5 inch Wifi 2019 chính hãng\" /></a></p>\r\n\r\n<p>M&agrave;u sắc ch&acirc;n thực, g&oacute;c nh&igrave;n cao gi&uacute;p bạn hay con c&aacute;i c&oacute; những gi&acirc;y ph&uacute;t thư gi&atilde;n thoải m&aacute;i nhất.</p>\r\n\r\n<h3>Dung lượng pin vượt trội</h3>\r\n\r\n<p>So với c&aacute;c&nbsp;<a href=\"https://www.thegioididong.com/may-tinh-bang\" target=\"_blank\" title=\"Tham khảo máy tính bảng chính hãng\">m&aacute;y t&iacute;nh bảng</a>&nbsp;Android th&igrave; iPad vượt trội về thời gian sử dụng pin v&agrave; tr&ecirc;n&nbsp;iPad Air 10.5 inch Wifi 2019 Apple tiếp tục duy tr&igrave; lợi thế n&agrave;y.</p>\r\n\r\n<p><a href=\"https://www.thegioididong.com/images/522/202705/ipad-air-105-inch-wifi-201911.jpg\" onclick=\"return false;\"><img alt=\"Thời lượng pin của máy tính bảng iPad Air 10.5 inch Wifi 2019 chính hãng\" src=\"https://cdn.tgdd.vn/Products/Images/522/202705/ipad-air-105-inch-wifi-201911.jpg\" title=\"Thời lượng pin của máy tính bảng iPad Air 10.5 inch Wifi 2019 chính hãng\" /></a></p>\r\n\r\n<p>Theo c&ocirc;ng bố th&igrave; m&aacute;y c&oacute; thể xem phim hay lướt web li&ecirc;n tục tới 10 giờ gi&uacute;p bạn c&oacute; thể sử dụng thoải m&aacute;i trong 2-3 ng&agrave;y.</p>\r\n\r\n<p><a href=\"https://www.thegioididong.com/images/522/202705/ipad-air-105-inch-wifi-201912.jpg\" onclick=\"return false;\"><img alt=\"Thời lượng pin của máy tính bảng iPad Air 10.5 inch Wifi 2019 chính hãng\" src=\"https://cdn.tgdd.vn/Products/Images/522/202705/ipad-air-105-inch-wifi-201912.jpg\" title=\"Thời lượng pin của máy tính bảng iPad Air 10.5 inch Wifi 2019 chính hãng\" /></a></p>\r\n\r\n<p>Một điểm cộng nữa l&agrave; nhớ được tối ưu hiệu quả n&ecirc;n việc để m&aacute;y ở trạng th&aacute;i chờ hay để qua đ&ecirc;m th&igrave; bạn cũng sẽ kh&ocirc;ng bị giảm đi nhiều dung lượng pin.</p>\r\n\r\n<p><a href=\"https://www.thegioididong.com/images/522/202705/ipad-air-105-inch-wifi-20198.jpg\" onclick=\"return false;\"><img alt=\"Thời lượng pin của máy tính bảng iPad Air 10.5 inch Wifi 2019 chính hãng\" src=\"https://cdn.tgdd.vn/Products/Images/522/202705/ipad-air-105-inch-wifi-20198.jpg\" title=\"Thời lượng pin của máy tính bảng iPad Air 10.5 inch Wifi 2019 chính hãng\" /></a></p>\r\n\r\n<p>Nhờ việc c&oacute; th&ecirc;m cổng kết nối Smart Conector ở cạnh b&ecirc;n n&ecirc;n iPad Air mới cũng c&oacute; thể kết nối với b&agrave;n ph&iacute;m Smart Keyboard gi&uacute;p bạn l&agrave;m việc hiệu quả hơn.</p>\r\n\r\n<h3>Hiệu năng mạnh mẽ h&agrave;ng đầu hiện nay</h3>\r\n\r\n<p>Về hiệu năng th&igrave; iPad &quot;kh&ocirc;ng c&oacute; đối thủ&quot; khi m&aacute;y sở hữu con chip mạnh mẽ ngang với&nbsp;<a href=\"https://www.thegioididong.com/dtdd/iphone-xs-max\" target=\"_blank\" title=\"Tham khảo iPhone Xs Max chính hãng\">iPhone Xs Max</a>&nbsp;&quot;đ&igrave;nh đ&aacute;m&quot; hiện nay, chỉ kh&aacute;c biệt một ch&uacute;t về RAM.</p>\r\n\r\n<p><a href=\"https://www.thegioididong.com/images/522/202705/ipad-air-105-inch-wifi-201913.jpg\" onclick=\"return false;\"><img alt=\"Cấu hình của máy tính bảng iPad Air 10.5 inch Wifi 2019 chính hãng\" src=\"https://cdn.tgdd.vn/Products/Images/522/202705/ipad-air-105-inch-wifi-201913.jpg\" title=\"Cấu hình của máy tính bảng iPad Air 10.5 inch Wifi 2019 chính hãng\" /></a></p>\r\n\r\n<p>Con chip&nbsp;Apple A12 Bionic với&nbsp;<a href=\"https://www.thegioididong.com/may-tinh-bang?g=3-gb\" target=\"_blank\" title=\"Tham khảo giá máy tính bảng có RAM 3 GB\" type=\"Tham khảo giá máy tính bảng có RAM 3 GB\">RAM 3 GB</a>&nbsp;gi&uacute;p bạn thoải m&aacute;i sử dụng tất cả game v&agrave; ứng dụng hiện c&oacute; tr&ecirc;n AppStore.</p>\r\n\r\n<p><a href=\"https://www.thegioididong.com/images/522/202705/ipad-air-105-inch-wifi-201914.jpg\" onclick=\"return false;\"><img alt=\"Cấu hình của máy tính bảng iPad Air 10.5 inch Wifi 2019 chính hãng\" src=\"https://cdn.tgdd.vn/Products/Images/522/202705/ipad-air-105-inch-wifi-201914.jpg\" title=\"Cấu hình của máy tính bảng iPad Air 10.5 inch Wifi 2019 chính hãng\" /></a></p>\r\n\r\n<p>M&aacute;y cũng c&oacute; camera sau 8 MP c&ugrave;ng camera trước 7 MP gi&uacute;p bạn c&oacute; được những bức ảnh vui vẻ hay thực hiện c&aacute;c cuộc gọi video với bạn b&egrave;.</p>\r\n\r\n<p><a href=\"https://www.thegioididong.com/images/522/202705/ipad-air-105-inch-wifi-20196.jpg\" onclick=\"return false;\"><img alt=\"Camera sau của máy tính bảng iPad Air 10.5 inch Wifi 2019 chính hãng\" src=\"https://cdn.tgdd.vn/Products/Images/522/202705/ipad-air-105-inch-wifi-20196.jpg\" title=\"Camera sau của máy tính bảng iPad Air 10.5 inch Wifi 2019 chính hãng\" /></a></p>\r\n\r\n<p>Nếu sở hữu một chiếc&nbsp;iPad Air 10.5 inch Wifi 2019 th&igrave; bạn ho&agrave;n to&agrave;n c&oacute; thể tự tin sử dụng thoải m&aacute;i trong 3-4 năm nữa m&agrave; m&aacute;y vẫn hoạt động trơn tru v&agrave; mượt m&agrave;.</p>', 1, 0, 'Chất liệu kim loại nguyên khối với các góc canh bo cong mềm mại giúp bạn có một thiết bị sang trọng và rất thoải mái khi cầm sử dụng trên tay.', 'Chất liệu kim loại nguyên khối với các góc canh bo cong mềm mại giúp bạn có một thiết bị sang trọng và rất thoải mái khi cầm sử dụng trên tay.', '2020-03-02__iphone-11-pro-max-256gb-black-400x460.png', 0, '2020-02-26 04:43:15', '2020-03-19 11:37:31', 1),
(4, 'Điện thoại iPhone 11 Pro Max 64bg', 'dien-thoai-iphone-11-pro-max-64bg', 'Trong năm 2019 thì chiếc smartphone được nhiều người mong muốn sở hữu trên tay và sử dụng nhất không ai khác chính là iPhone 11 Pro Max 64GB tới từ nhà Apple.', '<h2>Đặc điểm nổi bật của iPhone 11 Pro Max 64GB</h2>\r\n\r\n<p><img src=\"https://cdn.tgdd.vn/Products/Images/42/200533/Slider/vi-vn-iphone-11-pro-max-thumbvideo.jpg\" /><img src=\"https://www.thegioididong.com/Content/desktop/images/V4/icon-yt.png\" /></p>\r\n\r\n<p><a href=\"https://www.thegioididong.com/hoi-dap/che-do-chup-dem-night-mode-la-gi-907873\" target=\"_blank\">T&igrave;m hiểu th&ecirc;m</a></p>\r\n\r\n<p><a href=\"https://www.thegioididong.com/hoi-dap/man-hinh-super-retina-xdr-tren-iphone-11-pro-va-11-1198630\" target=\"_blank\">T&igrave;m hiểu th&ecirc;m</a></p>\r\n\r\n<p><a href=\"https://www.thegioididong.com/hoi-dap/tim-hieu-ve-chip-apple-a13-bionic-tren-iphone-11-1197492\" target=\"_blank\">T&igrave;m hiểu th&ecirc;m</a></p>\r\n\r\n<p>Bộ sản phẩm chuẩn: Sạc,Tai nghe,Hộp,C&aacute;p,C&acirc;y lấy sim,S&aacute;ch hướng dẫn</p>\r\n\r\n<h2 dir=\"ltr\">Trong năm 2019 th&igrave; chiếc&nbsp;<a href=\"https://www.thegioididong.com/dtdd\" target=\"_blank\" title=\"Tham khảo giá điện thoại smartphone chính hãng\">smartphone</a>&nbsp;được nhiều người mong muốn sở hữu tr&ecirc;n tay v&agrave; sử dụng nhất kh&ocirc;ng ai kh&aacute;c ch&iacute;nh l&agrave;&nbsp;<a href=\"https://www.thegioididong.com/dtdd/iphone-11-pro-max\" target=\"_blank\" title=\"Tham khảo điện thoại iPhone 11 Pro Max 64GB chính hãng\">iPhone 11 Pro Max 64GB</a>&nbsp;tới từ nh&agrave; Apple.</h2>\r\n\r\n<h3 dir=\"ltr\">Camera được cải tiến mạnh mẽ</h3>\r\n\r\n<p dir=\"ltr\">Chắc chắn l&yacute; do lớn nhất m&agrave; bạn muốn n&acirc;ng cấp l&ecirc;n iPhone 11 Pro Max ch&iacute;nh l&agrave; cụm camera mới được Apple n&acirc;ng cấp rất nhiều.</p>\r\n\r\n<p dir=\"ltr\"><a href=\"https://www.thegioididong.com/images/42/200533/iphone-11-pro-max-tgdd14-1.jpg\" onclick=\"return false;\"><img alt=\"iPhone 11 Pro Max 64GB | Cụm ba camera sau ấn tượng\" src=\"https://cdn.tgdd.vn/Products/Images/42/200533/iphone-11-pro-max-tgdd14-1.jpg\" title=\"iPhone 11 Pro Max 64GB | Cụm ba camera sau ấn tượng\" /></a></p>\r\n\r\n<p dir=\"ltr\">Lần đầu ti&ecirc;n ch&uacute;ng ta sẽ c&oacute; một chiếc&nbsp;<a href=\"https://www.thegioididong.com/dtdd-apple-iphone\" target=\"_blank\" title=\"Tham khảo iPhone chính hãng\">iPhone</a>&nbsp;với 3 camera ở mặt sau v&agrave; cả 3 camera n&agrave;y đều c&oacute; độ ph&acirc;n giải l&agrave; 12 MP.</p>\r\n\r\n<p dir=\"ltr\"><a href=\"https://www.thegioididong.com/images/42/200533/iphone-11-pro-max-tgdd6-1.jpg\" onclick=\"return false;\"><img alt=\"Điện thoại iPhone 11 Pro Max 64GB | Giao diện chụp ảnh camera\" src=\"https://cdn.tgdd.vn/Products/Images/42/200533/iphone-11-pro-max-tgdd6-1.jpg\" title=\"Điện thoại iPhone 11 Pro Max 64GB | Giao diện chụp ảnh camera\" /></a></p>\r\n\r\n<p dir=\"ltr\">Ch&uacute;ng ta sẽ c&oacute; một camera g&oacute;c thường, một camera g&oacute;c rộng v&agrave; một camera tele đ&aacute;p ứng đầy đủ nhu cầu chụp ảnh h&agrave;ng ng&agrave;y của người d&ugrave;ng.</p>\r\n\r\n<p dir=\"ltr\"><a href=\"https://www.thegioididong.com/images/42/200533/iphone-11-pro-max-tgdd9-1.jpg\" onclick=\"return false;\"><img alt=\"Điện thoại iPhone 11 Pro Max 64GB | Ảnh chụp chân dung bằng camera sau\" src=\"https://cdn.tgdd.vn/Products/Images/42/200533/iphone-11-pro-max-tgdd9-1.jpg\" title=\"Điện thoại iPhone 11 Pro Max 64GB | Ảnh chụp chân dung bằng camera sau\" /></a></p>\r\n\r\n<p dir=\"ltr\"><em>Ảnh chụp bằng camera sau tr&ecirc;n iPhone 11 Pro Max</em></p>\r\n\r\n<p dir=\"ltr\">Một cải tiến nữa cũng rất đ&aacute;ng ch&uacute; &yacute; ch&iacute;nh l&agrave;&nbsp;<a href=\"https://www.thegioididong.com/hoi-dap/night-mode-la-gi-diem-khac-nhau-giu-night-mode-va-1197122\" target=\"_blank\" title=\"Tìm hiểu chế độ Night Mode\" type=\"Tìm hiểu chế độ Night Mode\">chế độ Night Mode</a>&nbsp;mới sẽ gi&uacute;p bạn cải thiện rất nhiều chất lượng ảnh chụp đ&ecirc;m tr&ecirc;n iPhone.</p>\r\n\r\n<p dir=\"ltr\"><a href=\"https://www.thegioididong.com/images/42/200533/iphone-11-pro-max-tgdd15-1.jpg\" onclick=\"return false;\"><img alt=\"Điện thoại iPhone 11 Pro Max 64GB | Ảnh chụp bằng camera sau\" src=\"https://cdn.tgdd.vn/Products/Images/42/200533/iphone-11-pro-max-tgdd15-1.jpg\" title=\"Điện thoại iPhone 11 Pro Max 64GB | Ảnh chụp bằng camera sau\" /></a></p>\r\n\r\n<p dir=\"ltr\"><em>Ảnh chụp bằng camera sau tr&ecirc;n iPhone 11 Pro Max</em></p>\r\n\r\n<p dir=\"ltr\">T&ugrave;y thuộc v&agrave;o điều kiện m&ocirc;i trường bạn chụp m&agrave; iPhone sẽ đưa ra những th&ocirc;ng số ph&ugrave; hợp để bạn c&oacute; thể c&oacute; cho m&igrave;nh được một bức ảnh ưng &yacute; nhất.</p>\r\n\r\n<p dir=\"ltr\"><a href=\"https://www.thegioididong.com/images/42/200533/iphone-11-pro-max-tgdd12.jpg\" onclick=\"return false;\"><img alt=\"Điện thoại iPhone 11 Pro Max 64GB | Chế độ Night Mode mới\" src=\"https://cdn.tgdd.vn/Products/Images/42/200533/iphone-11-pro-max-tgdd12.jpg\" title=\"Điện thoại iPhone 11 Pro Max 64GB | Chế độ Night Mode mới\" /></a></p>\r\n\r\n<p dir=\"ltr\"><em>Chế độ Night Mode mới</em></p>\r\n\r\n<p dir=\"ltr\">Chế độ ch&acirc;n dung kh&ocirc;ng chỉ tốt hơn trong việc lấy n&eacute;t v&agrave;o đối tượng muốn chụp, m&agrave; c&ograve;n hoạt động được ở khoảng c&aacute;ch &#39;b&igrave;nh thường&#39; nhờ sự trợ gi&uacute;p của cảm biến độ s&acirc;u.</p>\r\n\r\n<p dir=\"ltr\"><a href=\"https://www.thegioididong.com/images/42/200533/iphone-11-pro-max-tgdd7-1.jpg\" onclick=\"return false;\"><img alt=\"Điện thoại iPhone 11 Pro Max 64GB | Ảnh chụp bằng chế độ Night Mode\" src=\"https://cdn.tgdd.vn/Products/Images/42/200533/iphone-11-pro-max-tgdd7-1.jpg\" title=\"Điện thoại iPhone 11 Pro Max 64GB | Ảnh chụp bằng chế độ Night Mode\" /></a></p>\r\n\r\n<p dir=\"ltr\"><em>Ảnh chụp với chế độ Night Mode tr&ecirc;n iPhone 11 Pro Max</em></p>\r\n\r\n<p dir=\"ltr\">So với người anh em&nbsp;<a href=\"https://www.thegioididong.com/dtdd/iphone-xs-max\" target=\"_blank\" title=\"Tham khảo giá điện thoại iPhone Xs Max chính hãng\" type=\"Tham khảo giá điện thoại iPhone Xs Max chính hãng\">iPhone Xs Max</a>&nbsp;th&igrave; với việc được t&iacute;ch hợp th&ecirc;m một camera g&oacute;c rộng người d&ugrave;ng iPhone giờ đ&acirc;y sẽ c&oacute; được cho m&igrave;nh những khung h&igrave;nh độc đ&aacute;o hơn.</p>\r\n\r\n<p dir=\"ltr\"><a href=\"https://www.thegioididong.com/images/42/200533/iphone-11-pro-max-tgdd8-1.jpg\" onclick=\"return false;\"><img alt=\"Điện thoại iPhone 11 Pro Max 64GB | Ảnh chụp chế độ thường bằng camera sau\" src=\"https://cdn.tgdd.vn/Products/Images/42/200533/iphone-11-pro-max-tgdd8-1.jpg\" title=\"Điện thoại iPhone 11 Pro Max 64GB | Ảnh chụp chế độ thường bằng camera sau\" /></a></p>\r\n\r\n<p dir=\"ltr\"><em>Ảnh chụp chế độ cơ bản b&igrave;nh thường với camera ch&iacute;nh</em></p>\r\n\r\n<p dir=\"ltr\">Bạn muốn chụp một t&ograve;a nh&agrave; cao tầng, bạn muốn ghi lại khung cảnh thi&ecirc;n nhi&ecirc;n h&ugrave;ng vĩ m&agrave; m&igrave;nh nh&igrave;n thấy th&igrave; camera&nbsp;<a href=\"https://www.thegioididong.com/dtdd-camera-goc-rong\" target=\"_blank\" title=\"Tham khảo các dòng điện thoại hỗ trợ chụp góc rộng\" type=\"Tham khảo các dòng điện thoại hỗ trợ chụp góc rộng\">g&oacute;c si&ecirc;u rộng</a>&nbsp;sẽ l&agrave;m rất tốt trong những điều kiện n&agrave;y.</p>\r\n\r\n<p dir=\"ltr\"><a href=\"https://www.thegioididong.com/images/42/200533/iphone-11-pro-max-tgdd16-1.jpg\" onclick=\"return false;\"><img alt=\"Điện thoại iPhone 11 Pro Max 64GB | Ảnh chụp ngược sáng với HDR\" src=\"https://cdn.tgdd.vn/Products/Images/42/200533/iphone-11-pro-max-tgdd16-1.jpg\" title=\"Điện thoại iPhone 11 Pro Max 64GB | Ảnh chụp ngược sáng với HDR\" /></a></p>\r\n\r\n<h3 dir=\"ltr\">Camera trước cũng mang lại sự kh&aacute;c biệt</h3>\r\n\r\n<p dir=\"ltr\">Kh&ocirc;ng chỉ c&oacute; camera ch&iacute;nh m&agrave; camera selfie tr&ecirc;n iPhone 11 Pro Max cũng được cải thiện rất nhiều.</p>\r\n\r\n<p dir=\"ltr\"><a href=\"https://www.thegioididong.com/images/42/200533/iphone-11-pro-max-tgdd17-1.jpg\" onclick=\"return false;\"><img alt=\"Điện thoại iPhone 11 Pro Max 64GB | Trải nghiệm selfie\" src=\"https://cdn.tgdd.vn/Products/Images/42/200533/iphone-11-pro-max-tgdd17-1.jpg\" title=\"Điện thoại iPhone 11 Pro Max 64GB | Trải nghiệm selfie\" /></a></p>\r\n\r\n<p dir=\"ltr\"><em>Ảnh selfie tr&ecirc;n iPhone 11 Pro Max</em></p>\r\n\r\n<p dir=\"ltr\">Đầu ti&ecirc;n ch&uacute;ng ta c&oacute; thể kể tới l&agrave; độ ph&acirc;n giải giờ đ&acirc;y đ&atilde; được n&acirc;ng l&ecirc;n th&agrave;nh 12 MP thay v&igrave; 7 MP như tr&ecirc;n thế hệ trước.</p>\r\n\r\n<p dir=\"ltr\">Tiếp theo ch&uacute;ng ta sẽ c&oacute; c&ocirc;ng nghệ quay video độ ph&acirc;n giải 4K ngay tr&ecirc;n camera trước một điều m&agrave; những chiếc iPhone trước đ&acirc;y chưa thể l&agrave;m được.</p>\r\n\r\n<p dir=\"ltr\">Ngo&agrave;i ra bạn cũng c&oacute; thể d&ugrave;ng camera trước để quay video slow motion (quay chậm) gi&uacute;p bạn c&oacute; được những video&nbsp; th&uacute; vị v&agrave; vui vẻ với bạn b&egrave;.</p>\r\n\r\n<p dir=\"ltr\"><a href=\"https://www.thegioididong.com/images/42/200533/iphone-11-pro-max-tgdd6.jpg\" onclick=\"return false;\"><img alt=\"Điện thoại iPhone 11 Pro Max 64GB | Giao diện chụp ảnh chế độ zoom quang học\" src=\"https://cdn.tgdd.vn/Products/Images/42/200533/iphone-11-pro-max-tgdd6.jpg\" title=\"Điện thoại iPhone 11 Pro Max 64GB | Giao diện chụp ảnh chế độ zoom quang học\" /></a></p>\r\n\r\n<p dir=\"ltr\">Một t&iacute;nh năng mới cũng được Apple t&iacute;ch hợp tr&ecirc;n iPhone mới đ&oacute; ch&iacute;nh l&agrave; khả năng tự động nhận diện để thay đổi g&oacute;c chụp gi&uacute;p bạn lấy được nhiều chi tiết hơn.</p>\r\n\r\n<p dir=\"ltr\"><a href=\"https://www.thegioididong.com/images/42/200533/iphone-11-pro-max.gif\" onclick=\"return false;\"><img alt=\"Điện thoại iPhone 11 Pro Max 64GB | Ảnh chụp chế độ slofie\" src=\"https://cdn.tgdd.vn/Products/Images/42/200533/iphone-11-pro-max.gif\" title=\"Điện thoại iPhone 11 Pro Max 64GB | Ảnh chụp chế độ slofie\" /></a></p>\r\n\r\n<p dir=\"ltr\">V&iacute; dụ khi bạn để điện thoại ở chế độ chụp dọc th&igrave; m&aacute;y sẽ chụp ở g&oacute;c b&igrave;nh thường, c&ograve;n khi bạn xoay điện thoại nằm ngang th&igrave; m&aacute;y tự động sẽ điều chỉnh để bạn c&oacute; được một g&oacute;c chụp rộng hơn.</p>\r\n\r\n<p dir=\"ltr\">Xem th&ecirc;m:&nbsp;<a href=\"https://www.thegioididong.com/tin-tuc/danh-gia-chi-tiet-iphone-11-pro-max-1199526\" target=\"_blank\" title=\"Đánh giá chi tiết iPhone 11 Pro Max\" type=\"Đánh giá chi tiết iPhone 11 Pro Max\">Đ&aacute;nh gi&aacute; chi tiết iPhone 11 Pro Max: Chiếc smartphone đỉnh nhất 2019?</a></p>\r\n\r\n<h3 dir=\"ltr\">Hiệu năng &quot;đ&egrave; bẹp&quot; mọi đối thủ</h3>\r\n\r\n<p dir=\"ltr\">Mỗi năm ra mắt iPhone mới th&igrave; Apple lại n&acirc;ng cấp con chip của m&igrave;nh để m&aacute;y c&oacute; thể đạt được một hiệu năng tốt nhất v&agrave; với iPhone 11 Pro Max năm nay cũng kh&ocirc;ng phải l&agrave; một ngoại lệ.</p>\r\n\r\n<p dir=\"ltr\"><a href=\"https://www.thegioididong.com/images/42/200533/iphone-11-pro-max-14.jpg\" onclick=\"return false;\"><img alt=\"Điện thoại iPhone 11 Pro Max 64GB | Giao diện màn hình chính\" src=\"https://cdn.tgdd.vn/Products/Images/42/200533/iphone-11-pro-max-14.jpg\" title=\"Điện thoại iPhone 11 Pro Max 64GB | Giao diện màn hình chính\" /></a></p>\r\n\r\n<p dir=\"ltr\">Chiếc iPhone mới n&agrave;y chạy tr&ecirc;n con chip&nbsp;<a href=\"https://www.thegioididong.com/hoi-dap/tim-hieu-ve-chip-apple-a13-bionic-tren-iphone-11-n-1197492\" target=\"_blank\" title=\"Tham khảo thêm về chip Apple A13 Bionic\">Apple A13 Bionic</a>, con chip mạnh mẽ nhất d&agrave;nh cho những chiếc iPhone trong năm 2019.</p>\r\n\r\n<p dir=\"ltr\"><a href=\"https://www.thegioididong.com/images/42/200533/iphone-11-pro-max-21.jpg\" onclick=\"return false;\"><img alt=\"Điện thoại iPhone 11 Pro Max 64GB | Điểm hiệu năng Antutu Benchmark\" src=\"https://cdn.tgdd.vn/Products/Images/42/200533/iphone-11-pro-max-21.jpg\" title=\"Điện thoại iPhone 11 Pro Max 64GB | Điểm hiệu năng Antutu Benchmark\" /></a></p>\r\n\r\n<p dir=\"ltr\">B&ecirc;n cạnh đ&oacute; bạn vẫn sẽ c&oacute; cho m&igrave;nh 4 GB RAM v&agrave; 64 GB bộ nhớ trong thoải m&aacute;i cho bạn c&agrave;i đặt game v&agrave; ứng dụng.</p>\r\n\r\n<p dir=\"ltr\"><a href=\"https://www.thegioididong.com/images/42/200533/iphone-11-pro-max-2.jpg\" onclick=\"return false;\"><img alt=\"Điện thoại iPhone 11 Pro Max 64GB | Trải nghiệm chơi game\" src=\"https://cdn.tgdd.vn/Products/Images/42/200533/iphone-11-pro-max-2.jpg\" title=\"Điện thoại iPhone 11 Pro Max 64GB | Trải nghiệm chơi game\" /></a></p>\r\n\r\n<p dir=\"ltr\">Tất nhi&ecirc;n m&aacute;y cũng sẽ chạy tr&ecirc;n phi&ecirc;n bản&nbsp;<a href=\"https://www.thegioididong.com/hoi-dap/tat-ca-nhung-tinh-nang-moi-duoc-cap-nhat-tren-ios-1171206\" target=\"_blank\" title=\"Tìm hiểu những tính năng mới trên iOS 13\" type=\"Tìm hiểu những tính năng mới trên iOS 13\">iOS 13</a>&nbsp;mới nhất với nhiều cải tiến gi&uacute;p tối ưu h&oacute;a hiệu năng đem lại trải nghiệm mượt m&agrave; hơn cho người d&ugrave;ng.</p>\r\n\r\n<p dir=\"ltr\"><a href=\"https://www.thegioididong.com/images/42/200533/iphone-11-pro-max-tgdd8.jpg\" onclick=\"return false;\"><img alt=\"Điện thoại iPhone 11 Pro Max 64GB | Giao diện iOS 13 mới\" src=\"https://cdn.tgdd.vn/Products/Images/42/200533/iphone-11-pro-max-tgdd8.jpg\" title=\"Điện thoại iPhone 11 Pro Max 64GB | Giao diện iOS 13 mới\" /></a></p>\r\n\r\n<p dir=\"ltr\"><em>Những t&iacute;nh năng tr&ecirc;n iOS 13 mới</em></p>\r\n\r\n<p dir=\"ltr\">Mọi game v&agrave; ứng dụng tr&ecirc;n iPhone 11 Pro Max hoạt động rất mượt m&agrave; v&agrave; ổn định, bạn hầu như sẽ kh&ocirc;ng thấy bất cứ độ trễ n&agrave;o trong qu&aacute; tr&igrave;nh sử dụng.</p>\r\n\r\n<p dir=\"ltr\">Năm nay Face ID cũng được cải thiện để c&oacute; thể nhận dạng ở nhiều g&oacute;c kh&aacute;c nhau mang lại trải nghiệm mở kh&oacute;a tốt hơn.</p>\r\n\r\n<p dir=\"ltr\"><a href=\"https://www.thegioididong.com/images/42/200533/iphone-11-pro-max-tgdd17.jpg\" onclick=\"return false;\"><img alt=\"Điện thoại iPhone 11 Pro Max 64GB | Công nghệ Haptic Engine mới \" src=\"https://cdn.tgdd.vn/Products/Images/42/200533/iphone-11-pro-max-tgdd17.jpg\" title=\"Điện thoại iPhone 11 Pro Max 64GB | Công nghệ Haptic Engine mới \" /></a></p>\r\n\r\n<p dir=\"ltr\">C&ocirc;ng nghệ Haptic Engine mới sẽ dựa tr&ecirc;n thời gian ấn v&agrave; giữ icon để hiện l&ecirc;n những menu chức năng kh&aacute;c nhau thay v&igrave; dựa v&agrave;o lực ấn như 3D Touch.</p>\r\n\r\n<h3 dir=\"ltr\">Dung lượng pin &#39;tr&acirc;u&#39;</h3>\r\n\r\n<p dir=\"ltr\">Apple đ&atilde; tuy&ecirc;n bố rằng iPhone 11 Pro Max c&oacute; thời lượng pin l&acirc;u hơn 5 giờ so với iPhone Xs&nbsp;Max.</p>\r\n\r\n<p dir=\"ltr\"><a href=\"https://www.thegioididong.com/images/42/200533/iphone-11-pro-max-7.jpg\" onclick=\"return false;\"><img alt=\"Điện thoại iPhone 11 Pro Max 64GB | Thời lượng pin tốt\" src=\"https://cdn.tgdd.vn/Products/Images/42/200533/iphone-11-pro-max-7.jpg\" title=\"Điện thoại iPhone 11 Pro Max 64GB | Thời lượng pin tốt\" /></a></p>\r\n\r\n<p dir=\"ltr\">V&agrave; nếu bạn chưa biết th&igrave; iPhone 11 Pro Max l&agrave; chiếc iPhone c&oacute; dung lượng pin lớn nhất từ trước tới nay m&agrave; Apple từng sản xuất.</p>\r\n\r\n<p dir=\"ltr\"><a href=\"https://www.thegioididong.com/images/42/200533/iphone-11-pro-max-tgdd9.jpg\" onclick=\"return false;\"><img alt=\"Điện thoại iPhone 11 Pro Max 64GB | Thời lượng sử dụng pin trên iOS 13\" src=\"https://cdn.tgdd.vn/Products/Images/42/200533/iphone-11-pro-max-tgdd9.jpg\" title=\"Điện thoại iPhone 11 Pro Max 64GB | Thời lượng sử dụng pin trên iOS 13\" /></a></p>\r\n\r\n<p dir=\"ltr\">Bạn c&oacute; thể sử dụng m&aacute;y thoải m&aacute;i từ s&aacute;ng tới tối m&agrave; kh&ocirc;ng cần phải bận t&acirc;m về việc nạp năng lượng cho m&aacute;y giữa chừng.</p>\r\n\r\n<p dir=\"ltr\">Tin vui l&agrave; năm nay Apple đ&atilde; trang bị củ&nbsp;<a href=\"https://www.thegioididong.com/dtdd?f=sac-pin-nhanh\" target=\"_blank\" title=\"Tham khảo giá điện thoại smartphone sạc pin nhanh\">sạc nhanh</a>&nbsp;18W đi k&egrave;m b&ecirc;n trong hộp của chiếc iPhone mới n&agrave;y.</p>\r\n\r\n<p dir=\"ltr\"><a href=\"https://www.thegioididong.com/images/42/200533/iphone-11-pro-max-tgdd1-2.jpg\" onclick=\"return false;\"><img alt=\"Điện thoại iPhone 11 Pro Max 64GB | Cổng sạc trên máy\" src=\"https://cdn.tgdd.vn/Products/Images/42/200533/iphone-11-pro-max-tgdd1-2.jpg\" title=\"Điện thoại iPhone 11 Pro Max 64GB | Cổng sạc trên máy\" /></a></p>\r\n\r\n<p dir=\"ltr\">Tất nhi&ecirc;n bạn vẫn sẽ c&oacute; c&ocirc;ng nghệ sạc kh&ocirc;ng d&acirc;y v&agrave; thậm ch&iacute; l&agrave; sạc nhanh kh&ocirc;ng d&acirc;y để bạn c&oacute; thể sử dụng h&agrave;ng ng&agrave;y.</p>\r\n\r\n<h3 dir=\"ltr\">Những thay đổi về thiết kế v&agrave; m&agrave;n h&igrave;nh</h3>\r\n\r\n<p dir=\"ltr\">Để ph&acirc;n biệt iPhone 11 Pro Max v&agrave; iPhone Xs Max th&igrave; bạn bắt buộc phải nh&igrave;n v&agrave;o mặt lưng nơi sẽ c&oacute; cụm camera to bản hơn cũng như phần k&iacute;nh được ho&agrave;n thiện k&iacute;nh mờ thay v&igrave; b&oacute;ng như tr&ecirc;n thế trước.</p>\r\n\r\n<p dir=\"ltr\"><a href=\"https://www.thegioididong.com/images/42/200533/iphone-11-pro-max-17.jpg\" onclick=\"return false;\"><img alt=\"Điện thoại iPhone 11 Pro Max 64GB | Thiết kế mặt lưng nổi bật cụm camera sau\" src=\"https://cdn.tgdd.vn/Products/Images/42/200533/iphone-11-pro-max-17.jpg\" title=\"Điện thoại iPhone 11 Pro Max 64GB | Thiết kế mặt lưng nổi bật cụm camera sau\" /></a></p>\r\n\r\n<p dir=\"ltr\">Thiết kế mới n&agrave;y của Apple gi&uacute;p hạn chế mồ h&ocirc;i v&agrave; bụi bẩn b&aacute;m lại sau qu&aacute; tr&igrave;nh sử dụng, gi&uacute;p thiết bị lu&ocirc;n lu&ocirc;n c&oacute; được sự sang trọng v&agrave; b&oacute;ng bẩy.</p>\r\n\r\n<p dir=\"ltr\"><a href=\"https://www.thegioididong.com/images/42/200533/iphone-11-pro-max-tgdd4-1.jpg\" onclick=\"return false;\"><img alt=\"Điện thoại iPhone 11 Pro Max 64GB | Khay sim\" src=\"https://cdn.tgdd.vn/Products/Images/42/200533/iphone-11-pro-max-tgdd4-1.jpg\" title=\"Điện thoại iPhone 11 Pro Max 64GB | Khay sim\" /></a></p>\r\n\r\n<p dir=\"ltr\">Ngo&agrave;i ra logo Apple quen thuộc năm nay đ&atilde; được đặt ở ch&iacute;nh giữa mặt lưng thay v&igrave; đặt lệch về ph&iacute;a cạnh tr&ecirc;n như những chiếc iPhone trước đ&oacute;.</p>\r\n\r\n<p dir=\"ltr\"><a href=\"https://www.thegioididong.com/images/42/200533/iphone-11-pro-max-tgdd3-1.jpg\" onclick=\"return false;\"><img alt=\"Điện thoại iPhone 11 Pro Max 64GB | Thiết kế viền màn hình\" src=\"https://cdn.tgdd.vn/Products/Images/42/200533/iphone-11-pro-max-tgdd3-1.jpg\" title=\"Điện thoại iPhone 11 Pro Max 64GB | Thiết kế viền màn hình\" /></a></p>\r\n\r\n<p dir=\"ltr\">Một trong những điểm quan trọng được n&acirc;ng cấp trong m&agrave;n h&igrave;nh của iPhone mới đ&oacute; l&agrave; khả năng ph&aacute;t nội dung Dolby Vision.</p>\r\n\r\n<p dir=\"ltr\"><a href=\"https://www.thegioididong.com/images/42/200533/iphone-11-pro-max-tgdd5-1.jpg\" onclick=\"return false;\"><img alt=\"Điện thoại iPhone 11 Pro Max 64GB | Trải nghiệm xem phim\" src=\"https://cdn.tgdd.vn/Products/Images/42/200533/iphone-11-pro-max-tgdd5-1.jpg\" title=\"Điện thoại iPhone 11 Pro Max 64GB | Trải nghiệm xem phim\" /></a></p>\r\n\r\n<p dir=\"ltr\">Nhờ đ&oacute;, trải nghiệm xem phim sẽ cho h&igrave;nh ảnh chi tiết hơn v&agrave; mang đến những thước phim điện ảnh hơn nhiều.</p>\r\n\r\n<p dir=\"ltr\"><a href=\"https://www.thegioididong.com/images/42/200533/iphone-11-pro-max-tgdd12-1.jpg\" onclick=\"return false;\"><img alt=\"Điện thoại iPhone 11 Pro Max 64GB | Màn hình\" src=\"https://cdn.tgdd.vn/Products/Images/42/200533/iphone-11-pro-max-tgdd12-1.jpg\" title=\"Điện thoại iPhone 11 Pro Max 64GB | Màn hình\" /></a></p>\r\n\r\n<p dir=\"ltr\">iPhone thường đạt được độ s&aacute;ng 800 nits, nhưng với Dolby Vision mọi thứ thậm ch&iacute; c&ograve;n ấn tượng hơn (l&ecirc;n tới 1200 nits, theo Apple).</p>', 1, 0, 'Trong năm 2019 thì chiếc smartphone được nhiều người mong muốn sở hữu trên tay và sử dụng nhất không ai khác chính là iPhone 11 Pro Max 64GB tới từ nhà Apple.', 'Trong năm 2019 thì chiếc smartphone được nhiều người mong muốn sở hữu trên tay và sử dụng nhất không ai khác chính là iPhone 11 Pro Max 64GB tới từ nhà Apple.', '2020-03-02__iphone-11-pro-max-256gb-black-400x460.png', 0, '2020-03-01 20:36:00', '2020-03-01 21:02:37', 0);
INSERT INTO `article` (`id`, `a_name`, `a_slug`, `a_description`, `a_content`, `a_active`, `a_author_id`, `a_description_seo`, `a_title_seo`, `a_avatar`, `a_view`, `created_at`, `updated_at`, `a_hot`) VALUES
(5, 'Điện thoại Samsung Galaxy Z Flip', 'dien-thoai-samsung-galaxy-z-flip', 'Cuối cùng sau bao nhiêu thời gian chờ đợi, chiếc điện thoại Samsung Galaxy Z Flip đã được Samsung ra mắt tại sự kiện Unpacked 2020. Siêu phẩm với thiết kế màn hình gập vỏ sò độc đáo, hiệu năng tuyệt đỉnh cùng nhiều công nghệ thời thượng, dẫn dầu 2020.', '<h2 dir=\"ltr\">Cuối c&ugrave;ng sau bao nhi&ecirc;u thời gian chờ đợi, chiếc điện thoại&nbsp;<a href=\"https://www.thegioididong.com/dtdd/samsung-galaxy-z-flip\" target=\"_blank\" title=\"Tham khảo giá điện thoại Samsung Galaxy Z Flip chính hãng\" type=\"Tham khảo giá điện thoại Samsung Galaxy Z Flip chính hãng\">Samsung Galaxy Z Flip</a>&nbsp;đ&atilde; được&nbsp;<a href=\"https://www.thegioididong.com/dtdd-samsung\" target=\"_blank\" title=\"Tham khảo giá điện thoại smartphone Samsung chính hãng\" type=\"Tham khảo giá điện thoại smartphone Samsung chính hãng\">Samsung</a>&nbsp;ra mắt tại sự kiện&nbsp;Unpacked 2020. Si&ecirc;u phẩm với thiết kế m&agrave;n h&igrave;nh gập vỏ s&ograve; độc đ&aacute;o, hiệu năng tuyệt đỉnh c&ugrave;ng nhiều c&ocirc;ng nghệ thời thượng, dẫn dầu 2020.</h2>\r\n\r\n<h3 dir=\"ltr\">Đột ph&aacute; với thiết kế m&agrave;n h&igrave;nh gập</h3>\r\n\r\n<p dir=\"ltr\">Samsung Galaxy Z Flip được thiết kế với kiểu d&aacute;ng m&agrave;n h&igrave;nh gập lấy &yacute; tưởng từ d&ograve;ng sản phẩm&nbsp;<a href=\"https://www.thegioididong.com/dtdd/samsung-galaxy-fold\" target=\"_blank\" title=\"Tham khảo giá điện thoại Samsung Galaxy Fold chính hãng\" type=\"Tham khảo giá điện thoại Samsung Galaxy Fold chính hãng\">Galaxy Fold</a>&nbsp;từng g&acirc;y nhiều tiếng vang trong năm 2019.</p>\r\n\r\n<p dir=\"ltr\"><a href=\"https://www.thegioididong.com/images/42/213022/samsung-galaxy-z-flip-tgdd10.jpg\" onclick=\"return false;\"><img alt=\"Điện thoại Samsung Galaxy Z Flip | Khả năng gập với nhiều góc độ khác nhau\" src=\"https://cdn.tgdd.vn/Products/Images/42/213022/samsung-galaxy-z-flip-tgdd10.jpg\" title=\"Điện thoại Samsung Galaxy Z Flip | Khả năng gập với nhiều góc độ khác nhau\" /></a></p>\r\n\r\n<p dir=\"ltr\">Tuy nhi&ecirc;n điểm kh&aacute;c biệt l&agrave; m&agrave;n h&igrave;nh của Z Flip được&nbsp;thiết kế gập theo chiều dọc, khiến cho tổng thể m&aacute;y c&oacute; thể nằm gọn trong l&ograve;ng b&agrave;n tay của người d&ugrave;ng như một phụ kiện thời trang cao cấp.</p>\r\n\r\n<p dir=\"ltr\"><a href=\"https://www.thegioididong.com/images/42/213022/samsung-galaxy-z-flip-tgdd13.jpg\" onclick=\"return false;\"><img alt=\"Điện thoại Samsung Galaxy Z Flip | Đột phá thiết kế màn hình gập\" src=\"https://cdn.tgdd.vn/Products/Images/42/213022/samsung-galaxy-z-flip-tgdd13.jpg\" title=\"Điện thoại Samsung Galaxy Z Flip | Đột phá thiết kế màn hình gập\" /></a></p>\r\n\r\n<p dir=\"ltr\">Bản lề của m&aacute;y cũng c&oacute; khả năng gập - mở với nhiều g&oacute;c độ kh&aacute;c nhau, khi thiết bị ở trạng th&aacute;i mở một nửa, m&agrave;n h&igrave;nh sẽ tự động chia th&agrave;nh hai m&agrave;n h&igrave;nh 4 inch vừa đủ để bạn c&oacute; thể dễ d&agrave;ng xem h&igrave;nh ảnh, nội dung hoặc video ở nửa tr&ecirc;n của m&agrave;n h&igrave;nh v&agrave; thao t&aacute;c điều khiển ch&uacute;ng ở nửa dưới.</p>\r\n\r\n<p dir=\"ltr\"><a href=\"https://www.thegioididong.com/images/42/213022/samsung-galaxy-z-flip-tgdd11.jpg\" onclick=\"return false;\"><img alt=\"Điện thoại Samsung Galaxy Z Flip | Thiết kế bản lề mới với độ bền cao\" src=\"https://cdn.tgdd.vn/Products/Images/42/213022/samsung-galaxy-z-flip-tgdd11.jpg\" title=\"Điện thoại Samsung Galaxy Z Flip | Thiết kế bản lề mới với độ bền cao\" /></a></p>\r\n\r\n<p dir=\"ltr\">Trải nghiệm sử dụng Samsung Galaxy Z Flip linh hoạt nhờ kết cấu bản lề mới hiện đại, c&oacute; khả năng chống bụi bẩn tốt hơn. Tuy vẫn c&oacute; vết gấp giữa m&agrave;n h&igrave;nh Galaxy Z Flip nhưng ho&agrave;n to&agrave;n kh&ocirc;ng ảnh hưởng đến trải nghiệm người d&ugrave;ng.</p>\r\n\r\n<p dir=\"ltr\">B&ecirc;n cạnh đ&oacute; c&ocirc;ng nghệ n&agrave;y c&ograve;n cho ph&eacute;p Samsung Galaxy c&oacute; thể dễ d&agrave;ng gập mở với độ bền l&ecirc;n tới hơn 200.000 lần, mở ra một thập kỷ mới của sự s&aacute;ng tạo d&agrave;nh cho&nbsp;<a href=\"https://www.thegioididong.com/dtdd\" target=\"_blank\" title=\"Tham khảo giá điện thoại smartphone chính hãng\" type=\"Tham khảo giá điện thoại smartphone chính hãng\">điện thoại</a>&nbsp;m&agrave;n h&igrave;nh gập.</p>\r\n\r\n<p dir=\"ltr\"><a href=\"https://www.thegioididong.com/images/42/213022/samsung-galaxy-z-flip-tgdd16.jpg\" onclick=\"return false;\"><img alt=\"Điện thoại Samsung Galaxy Z Flip | Thiết kế gọn nhẹ\" src=\"https://cdn.tgdd.vn/Products/Images/42/213022/samsung-galaxy-z-flip-tgdd16.jpg\" title=\"Điện thoại Samsung Galaxy Z Flip | Thiết kế gọn nhẹ\" /></a></p>\r\n\r\n<p dir=\"ltr\">Khi mở m&aacute;y hết cỡ, m&agrave;n h&igrave;nh của m&aacute;y c&oacute; k&iacute;ch thước 6.7 inch, đ&acirc;y l&agrave; m&agrave;n h&igrave;nh c&oacute; thiết kế gập vỏ s&ograve; bằng k&iacute;nh đầu ti&ecirc;n tr&ecirc;n thế giới với thiết kế&nbsp;<a href=\"https://www.thegioididong.com/hoi-dap/hoi-dap-tong-hop-cac-loai-man-hinh-vo-cuc-moi-t-1150900#infinity-o\" target=\"_blank\" title=\"Tìm hiểu về màn hình Infinity O\" type=\"Tìm hiểu về màn hình Infinity O\">m&agrave;n h&igrave;nh &ldquo;Infinity O&rdquo;</a>&nbsp;với camera kho&eacute;t lỗ.&nbsp;</p>\r\n\r\n<p dir=\"ltr\">Galaxy Z Flip sở hữu m&agrave;n h&igrave;nh Infinity Flex với c&ocirc;ng nghệ k&iacute;nh uốn dẻo Ultra Thin Glass (UTG) độc đ&aacute;o từ Samsung, c&ocirc;ng nghệ n&agrave;y gi&uacute;p m&aacute;y mỏng hơn, cho cảm gi&aacute;c cầm nắm sang trọng v&agrave; cao cấp.</p>\r\n\r\n<p dir=\"ltr\"><a href=\"https://www.thegioididong.com/images/42/213022/samsung-galaxy-z-flip-tgdd15.jpg\" onclick=\"return false;\"><img alt=\"Điện thoại Samsung Galaxy Z Flip | Màn hình giải trí sắc nét\" src=\"https://cdn.tgdd.vn/Products/Images/42/213022/samsung-galaxy-z-flip-tgdd15.jpg\" title=\"Điện thoại Samsung Galaxy Z Flip | Màn hình giải trí sắc nét\" /></a></p>\r\n\r\n<p dir=\"ltr\">Sử dụng tấm nền Dynamic AMOLED độ ph&acirc;n giải Full HD+ tỉ lệ m&agrave;n h&igrave;nh 21.9:9 độc đ&aacute;o nhất hiện nay, hỗ trợ HDR10+ gi&uacute;p cho từng h&igrave;nh ảnh m&agrave; bạn xem sống động tr&ecirc;n từng chi tiết, sắc n&eacute;t tr&ecirc;n từng chuyển động mang đến m&agrave;u sắc sống động ch&acirc;n thật.</p>\r\n\r\n<h3 dir=\"ltr\">N&acirc;ng cấp camera k&eacute;p, chụp ảnh ban đ&ecirc;m ấn tượng</h3>\r\n\r\n<p dir=\"ltr\">Samsung Galaxy Z Flip được trang bị camera k&eacute;p c&ugrave;ng độ ph&acirc;n giải 12 MP với khẩu độ lần lượt l&agrave; f/1.8 v&agrave; f/2.2 c&oacute; hỗ trợ chống rung quang học OIS cho khả năng chụp h&igrave;nh thiếu s&aacute;ng tốt đi k&egrave;m c&ocirc;ng nghệ chụp ảnh bằng chỉ, dễ d&agrave;ng ghi lại mọi khoảnh khắc hằng ng&agrave;y.&nbsp;</p>\r\n\r\n<p dir=\"ltr\"><a href=\"https://www.thegioididong.com/images/42/213022/samsung-galaxy-z-flip-tgdd18.jpg\" onclick=\"return false;\"><img alt=\"Điện thoại Samsung Galaxy Z Flip | Camera kép ấn tượng\" src=\"https://cdn.tgdd.vn/Products/Images/42/213022/samsung-galaxy-z-flip-tgdd18.jpg\" title=\"Điện thoại Samsung Galaxy Z Flip | Camera kép ấn tượng\" /></a></p>\r\n\r\n<p dir=\"ltr\">C&ocirc;ng nghệ nhận diện AI gi&uacute;p m&aacute;y c&oacute; thể nhận biết được nhiều chủ thể kh&aacute;c nhau qua đố tối ưu c&aacute;c th&ocirc;ng số kỹ thuật để cho ra những tấm h&igrave;nh sắc n&eacute;t, độ chi tiết cao c&ugrave;ng m&agrave;u sắc sống động.</p>\r\n\r\n<p dir=\"ltr\"><a href=\"https://www.thegioididong.com/images/42/213022/samsung-galaxy-z-flip-tgdd12.jpg\" onclick=\"return false;\"><img alt=\"Điện thoại Samsung Galaxy Z Flip | Trải nghiệm camera \" src=\"https://cdn.tgdd.vn/Products/Images/42/213022/samsung-galaxy-z-flip-tgdd12.jpg\" title=\"Điện thoại Samsung Galaxy Z Flip | Trải nghiệm camera \" /></a></p>\r\n\r\n<p dir=\"ltr\">Camera trước của m&aacute;y c&oacute; độ ph&acirc;n giải 10 MP với khẩu độ f2.4 được bố tr&iacute; dạng đục lỗ ở ch&iacute;nh giữa m&agrave;n h&igrave;nh cũng tương tự như Galaxy S20, đ&aacute;p ứng tốt nhu cầu chụp ảnh selfie, quay video với chất lượng tốt.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><img src=\"https://cdn.tgdd.vn/Products/Images/42/213022/samsung-galaxy-z-flip-15-1.jpg\" />Ảnh chụp g&oacute;c si&ecirc;u rộng 0.5x tr&ecirc;n Samsung Galaxy Z Flip</p>\r\n\r\n<p><img src=\"https://cdn.tgdd.vn/Products/Images/42/213022/samsung-galaxy-z-flip-14-1.jpg\" />Ảnh chụp g&oacute;c thường 1x tr&ecirc;n Samsung Galaxy Z Flip</p>\r\n\r\n<p><img src=\"https://cdn.tgdd.vn/Products/Images/42/213022/samsung-galaxy-z-flip-16-1.jpg\" />Ảnh chụp chế độ zoom 2x tr&ecirc;n Samsung Galaxy Z Flip</p>\r\n\r\n<p><img src=\"https://cdn.tgdd.vn/Products/Images/42/213022/samsung-galaxy-z-flip-17-1.jpg\" />Ảnh chụp chế độ zoom 4x tr&ecirc;n&nbsp;Samsung Galaxy Z Flip</p>\r\n\r\n<p><img src=\"https://cdn.tgdd.vn/Products/Images/42/213022/samsung-galaxy-z-flip-18-1.jpg\" />Ảnh chụp chế độ zoom 8x tr&ecirc;n&nbsp;Samsung Galaxy Z Flip</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p dir=\"ltr\">Khi gập m&aacute;y lại bạn cũng c&oacute; thể chụp ảnh với m&agrave;n h&igrave;nh phụ k&iacute;ch thước 1.1 inch, thỏa th&iacute;ch trải nghiệm selfie chất lượng với bộ đ&ocirc;i camera k&eacute;p ở mặt sau.</p>\r\n\r\n<p dir=\"ltr\"><a href=\"https://www.thegioididong.com/images/42/213022/samsung-galaxy-z-flip-tgdd9.jpg\" onclick=\"return false;\"><img alt=\"Điện thoại Samsung Galaxy Z Flip | Trải nghiệm selfie\" src=\"https://cdn.tgdd.vn/Products/Images/42/213022/samsung-galaxy-z-flip-tgdd9.jpg\" title=\"Điện thoại Samsung Galaxy Z Flip | Trải nghiệm selfie\" /></a></p>\r\n\r\n<h3 dir=\"ltr\">Hiệu năng đỉnh cao với Snapdragon 855 Plus</h3>\r\n\r\n<p dir=\"ltr\">Samsung Galaxy Z Flip được trang bị con chip mạnh mẽ Snapdragon 855 Plus đi k&egrave;m với m&aacute;y l&agrave; dung lượng RAM 8 GB v&agrave; bộ nhớ trong l&ecirc;n đến 256 GB.</p>\r\n\r\n<p dir=\"ltr\"><a href=\"https://www.thegioididong.com/images/42/213022/samsung-galaxy-z-flip-tgdd9-1.jpg\" onclick=\"return false;\"><img alt=\"Điện thoại Samsung Galaxy Z Flip | Điểm Antutu Benchmark\" src=\"https://cdn.tgdd.vn/Products/Images/42/213022/samsung-galaxy-z-flip-tgdd9-1.jpg\" title=\"Điện thoại Samsung Galaxy Z Flip | Điểm Antutu Benchmark\" /></a></p>\r\n\r\n<p dir=\"ltr\">Mặc d&ugrave; kh&ocirc;ng qu&aacute; nổi trội như so với si&ecirc;u phẩm&nbsp;<a href=\"https://www.thegioididong.com/dtdd/samsung-galaxy-s20\" target=\"_blank\" title=\"Tham khảo giá điện thoại Samsung Galaxy S20 chính hãng\" type=\"Tham khảo giá điện thoại Samsung Galaxy S20 chính hãng\">Samsung Galaxy S20</a>&nbsp;nhưng vẫn đủ để đảm bảo Z Flip lu&ocirc;n chạy mượt m&agrave; c&aacute;c ứng dụng nặng. Th&ocirc;ng số n&agrave;y cũng thuộc h&agrave;ng top trong thế giới Android đầu 2020.</p>\r\n\r\n<p dir=\"ltr\"><a href=\"https://www.thegioididong.com/images/42/213022/samsung-galaxy-z-flip-tgdd14.jpg\" onclick=\"return false;\"><img alt=\"Điện thoại Samsung Galaxy Z Flip | Hiệu năng đỉnh cao\" src=\"https://cdn.tgdd.vn/Products/Images/42/213022/samsung-galaxy-z-flip-tgdd14.jpg\" title=\"Điện thoại Samsung Galaxy Z Flip | Hiệu năng đỉnh cao\" /></a></p>\r\n\r\n<p dir=\"ltr\">Chiếc m&aacute;y m&agrave;n h&igrave;nh gập của Samsung được trang bị bộ nhớ trong chuẩn UFS 3.0 được đ&aacute;nh gi&aacute; cho tốc độ cực nhanh, c&oacute; thể s&aacute;nh ngang với SSD tr&ecirc;n m&aacute;y t&iacute;nh c&aacute; nh&acirc;n. Tốc độ ổ cứng nhanh kết hợp với vi xử l&yacute; hiệu năng mạnh mẽ g&oacute;p phần l&agrave;m cho m&aacute;y xử l&yacute; mượt m&agrave;, nhanh ch&oacute;ng hơn.</p>\r\n\r\n<p dir=\"ltr\">Galaxy Z Flip được c&agrave;i đặt sẵn hệ điều h&agrave;nh Android 10 t&ugrave;y biến tr&ecirc;n giao diện OneUI 2.0 mới nhất, đồng thời Samsung cũng tối ưu giao điện cho chế độ m&aacute;y gập lại, gập 1 nửa cho người d&ugrave;ng trải nghiệm mới lạ v&agrave; tuyệt vời hơn.</p>\r\n\r\n<h3 dir=\"ltr\">Thời lượng pin tốt đi k&egrave;m sạc kh&ocirc;ng d&acirc;y thời thượng</h3>\r\n\r\n<p dir=\"ltr\">Thời lượng pin cũng l&agrave; điểm mạnh của Samsung Galaxy Z Flip khi được trang bị vi&ecirc;n&nbsp;<a href=\"https://www.thegioididong.com/dtdd?f=pin-khung-3000-mah\" target=\"_blank\" title=\"Tham khảo giá điện thoại smartphone pin khủng pin trâu\" type=\"Tham khảo giá điện thoại smartphone pin khủng pin trâu\">pin lớn</a>&nbsp;dung lượng&nbsp;3300 mAh, c&oacute; hỗ trợ c&ocirc;ng nghệ&nbsp;<a href=\"https://www.thegioididong.com/dtdd?f=sac-pin-nhanh\" target=\"_blank\" title=\"Tham khảo giá điện thoại smartphone sạc pin nhanh\" type=\"Tham khảo giá điện thoại smartphone sạc pin nhanh\">sạc nhanh</a>&nbsp;15W gi&uacute;p giảm đ&aacute;ng kể thời gian sạc đầy pin cho m&aacute;y.</p>\r\n\r\n<p dir=\"ltr\"><a href=\"https://www.thegioididong.com/images/42/213022/samsung-galaxy-z-flip-tgdd17.jpg\" onclick=\"return false;\"><img alt=\"Điện thoại Samsung Galaxy Z Flip | Thời lượng pin tốt \" src=\"https://cdn.tgdd.vn/Products/Images/42/213022/samsung-galaxy-z-flip-tgdd17.jpg\" title=\"Điện thoại Samsung Galaxy Z Flip | Thời lượng pin tốt \" /></a></p>\r\n\r\n<p dir=\"ltr\">B&ecirc;n cạnh đ&oacute; smartphone Galaxy c&ograve;n được trang bị c&ocirc;ng nghệ&nbsp;<a href=\"https://www.thegioididong.com/dtdd?f=sac-khong-day\" target=\"_blank\" title=\"Tham khảo giá điện thoại smartphone hỗ trợ sạc pin không dây\" type=\"Tham khảo giá điện thoại smartphone hỗ trợ sạc pin không dây\">sạc kh&ocirc;ng d&acirc;y</a>&nbsp;hiện đại, kh&aacute; tiện lợi v&agrave; gọn g&agrave;ng kh&ocirc;ng cần phải lo sợ bị đứt d&acirc;y hay r&ograve; rỉ điện như c&aacute;c phương thức sạc truyền thống kh&aacute;c.</p>\r\n\r\n<p dir=\"ltr\"><a href=\"https://www.thegioididong.com/dtdd?f=bao-mat-van-tay\" target=\"_blank\" title=\"Tham khảo giá điện thoại smartphone có bảo mật cảm biến vân tay\" type=\"Tham khảo giá điện thoại smartphone có bảo mật cảm biến vân tay\">Cảm biến v&acirc;n tay</a>&nbsp;của m&aacute;y được đặt ở cạnh b&ecirc;n, kh&ocirc;ng được t&iacute;ch hợp b&ecirc;n trong m&agrave;n h&igrave;nh đổi lại m&aacute;y lại c&oacute; khả năng nhận diện nhanh v&agrave; ch&iacute;nh x&aacute;c cũng như độ bảo mật cao hơn so với cảm biến v&acirc;n tay trong m&agrave;n h&igrave;nh.</p>\r\n\r\n<p dir=\"ltr\"><a href=\"https://www.thegioididong.com/images/42/213022/samsung-galaxy-z-flip-tgdd20.jpg\" onclick=\"return false;\"><img alt=\"Điện thoại Samsung Galaxy Z Flip | Cảm biến vân tay\" src=\"https://cdn.tgdd.vn/Products/Images/42/213022/samsung-galaxy-z-flip-tgdd20.jpg\" title=\"Điện thoại Samsung Galaxy Z Flip | Cảm biến vân tay\" /></a></p>\r\n\r\n<p dir=\"ltr\">T&oacute;m lại, Galaxy Z Flip l&agrave; sản phẩm mang đẳng cấp kh&aacute;c biệt tiếp theo của Samsung kể tử khi ra mắt chiếc Galaxy Fold. Chiếc m&aacute;y sở hữu đầy đủ c&aacute;c yếu tố: Thời trang, kh&aacute;c lạ, c&ocirc;ng nghệ đỉnh cao.</p>\r\n\r\n<p dir=\"ltr\"><a href=\"https://www.thegioididong.com/images/42/213022/samsung-galaxy-z-flip-tgdd19.jpg\" onclick=\"return false;\"><img alt=\"Điện thoại Samsung Galaxy Z Flip | Siêu phẩm công nghệ 2020\" src=\"https://cdn.tgdd.vn/Products/Images/42/213022/samsung-galaxy-z-flip-tgdd19.jpg\" title=\"Điện thoại Samsung Galaxy Z Flip | Siêu phẩm công nghệ 2020\" /></a></p>\r\n\r\n<p dir=\"ltr\">Chắc chắn sẽ g&acirc;y hứng th&uacute; với anh em y&ecirc;u c&ocirc;ng nghệ hoặc những ai muốn trở n&ecirc;n thật tự tin khi sở hữu một thiết bị đặc biệt v&agrave; cao cấp so với thế giới c&ograve;n lại.</p>', 1, 0, 'Điện thoại Samsung Galaxy Z Flip', 'Điện thoại Samsung Galaxy Z Flip', '2020-03-02__xiaomi-redmi-note-8-white-400x400.jpg', 0, '2020-03-01 20:51:57', '2020-03-01 20:51:57', 0),
(6, 'Xiaomi Mi A3 và Redmi Note 8 Pro', 'xiaomi-mi-a3-va-redmi-note-8-pro', 'Xiaomi Mi A3 và Redmi Note 8 Pro', '<h2>Sau nhiều th&aacute;ng chờ đợi, hiện&nbsp;<a href=\"https://www.thegioididong.com/dtdd-xiaomi\" target=\"_blank\" title=\"Đặt mua smartphone Xiaomi tại Thegioididong.com\" type=\"Đặt mua smartphone Xiaomi tại Thegioididong.com\">Xiaomi&nbsp;</a>đ&atilde; bắt đầu tung ra bản cập nhật phần mềm Android 10 cho điện thoại&nbsp;<a href=\"https://www.thegioididong.com/dtdd/xiaomi-mi-a3\" target=\"_blank\" title=\"Đặt mua Xiaomi Mi A3 tại Thegioididong.com\" type=\"Đặt mua Xiaomi Mi A3 tại Thegioididong.com\">Mi A3</a>&nbsp;chạy Android One v&agrave;&nbsp;<a href=\"https://www.thegioididong.com/dtdd/xiaomi-redmi-note-8-pro\" target=\"_blank\" title=\"Đặt mua Xiaomi Redmi Note 8 Pro tại Thegioididong.com\" type=\"Đặt mua Xiaomi Redmi Note 8 Pro tại Thegioididong.com\">Redmi Note 8 Pro</a>&nbsp;chạy MIUI.</h2>\r\n\r\n<p>Ban đầu Xiaomi dự kiến sẽ tung ra bản cập nhật Android 10 cho Mi A3 v&agrave;o v&agrave;i tuần trước nhưng một b&aacute;o c&aacute;o gần đ&acirc;y cho biết do sự b&ugrave;ng ph&aacute;t của dịch COVID-19 n&ecirc;n việc ph&aacute;t h&agrave;nh đ&atilde; bị tr&igrave; ho&atilde;n cho đến nay.</p>\r\n\r\n<p>Bản cập nhật Android 10 cho Mi A3 c&oacute; số phi&ecirc;n bản V11.0.7.0.QFQMIXM với dung lượng 1.3 GB, nếu OTA chưa c&oacute; th&ocirc;ng b&aacute;o cập nhật th&igrave; người d&ugrave;ng&nbsp;<a href=\"https://www.xda-developers.com/download-xiaomi-mi-a3-redmi-note-8-pro-official-android-10-update/\" rel=\"nofollow\" target=\"_blank\" title=\"Tải firmware Android 10 cho Xiaomi Mi 3\" type=\"Tải firmware Android 10 cho Xiaomi Mi 3\">tải tại đ&acirc;y</a>&nbsp;cũng được.</p>\r\n\r\n<p><a href=\"https://cdn.tgdd.vn/Files/2020/03/01/1239371/redmi-note-8-pro-android-10-update_358x776.png\" rel=\"nofollow\" target=\"_blank\" title=\"Redmi Note 8 Pro được cập nhật Android 10 qua OTA\" type=\"Redmi Note 8 Pro được cập nhật Android 10 qua OTA\"><img alt=\"Redmi Note 8 Pro được cập nhật Android 10 qua OTA\" src=\"https://cdn.tgdd.vn/Files/2020/03/01/1239371/redmi-note-8-pro-android-10-update_358x776.png\" title=\"Redmi Note 8 Pro được cập nhật Android 10 qua OTA\" /></a></p>\r\n\r\n<p>Redmi Note 8 Pro được cập nhật Android 10 qua OTA</p>\r\n\r\n<p>Hiện người d&ugrave;ng Redmi Note 8 Pro tại&nbsp;EEA, Nga v&agrave; Pakistan đ&atilde; nhận được bản cập nhật Android 10 với dung lượng 1.9 GB v&agrave; đi k&egrave;m với bản v&aacute; bảo mật Android th&aacute;ng 2/2020.</p>\r\n\r\n<p>Bạn c&oacute; đang d&ugrave;ng Xiaomi Mi A3 hoặc Redmi Note 8 Pro kh&ocirc;ng, v&agrave; đ&atilde; nhận được bản cập nhật Android 10 chưa?</p>', 1, 0, 'Xiaomi Mi A3 và Redmi Note 8 Pro', 'Xiaomi Mi A3 và Redmi Note 8 Pro', '2020-03-02__redmi-note-8-pro-800x450.jpg', 0, '2020-03-01 21:08:26', '2020-03-01 21:08:26', 0),
(7, 'được cập nhật Android 10 với giao diện One UI 2.0', 'duoc-cap-nhat-android-10-voi-giao-dien-one-ui-20', 'được cập nhật Android 10 với giao diện One UI 2.0', '<h2>Sau bao ng&agrave;y chờ đợi, cuối c&ugrave;ng người d&ugrave;ng&nbsp;<a href=\"https://www.thegioididong.com/dtdd/samsung-galaxy-s9\" target=\"_blank\" title=\"Chi tiết Samsung Galaxy S9\" type=\"Chi tiết Samsung Galaxy S9\">Galaxy S9</a>&nbsp;v&agrave;&nbsp;<a href=\"https://www.thegioididong.com/dtdd/samsung-galaxy-s9-plus\" target=\"_blank\" title=\"Chi tiết Samsung Galaxy S9+\" type=\"Chi tiết Samsung Galaxy S9+\">Galaxy S9+</a>&nbsp;tại Việt Nam đ&atilde; nhận được bản cập nhật Android 10 với giao diện One UI 2.0.</h2>\r\n\r\n<p>Bản ROM Android 10 cho d&ograve;ng Galaxy S9 c&oacute; dung lượng hơn 1.7 GB v&agrave; đi k&egrave;m với bản v&aacute; bảo mật Android th&aacute;ng 1/2020.</p>\r\n\r\n<p><img alt=\"Bản ROM Android 10 cho dòng Galaxy S9 có dung lượng hơn 1.7 GB\" src=\"https://cdn.tgdd.vn/Files/2020/02/13/1236308/galaxy-s9-plus-android-10-update_2160x2220-800-resize.jpg\" title=\"Bản ROM Android 10 cho dòng Galaxy S9 có dung lượng hơn 1.7 GB\" /></p>\r\n\r\n<p>Kiểm tra nhanh giao diện camera sau khi cập nhật One UI 2.0, m&igrave;nh thấy bố cục c&aacute;c ph&iacute;m chức năng đ&atilde; được điều phối lại gọn g&agrave;ng hơn. C&ograve;n ngo&agrave;i m&agrave;n h&igrave;nh kh&oacute;a c&oacute; th&ecirc;m t&ugrave;y chọn M&agrave;n h&igrave;nh kh&oacute;a động, v&agrave; Bảng điều khiển nhanh c&oacute; th&ecirc;m 2 mục: Media v&agrave; Thiết bị.</p>\r\n\r\n<p><img alt=\"Giao diện camera trên Galaxy S9+ sau khi cập nhật One UI 2.0\" src=\"https://cdn.tgdd.vn/Files/2020/02/13/1236308/s9plus-ui-camera-oneui2-_2220x1080-800-resize.jpg\" title=\"Giao diện camera trên Galaxy S9+ sau khi cập nhật One UI 2.0\" /></p>\r\n\r\n<p>Giao diện camera tr&ecirc;n Galaxy S9+ sau khi cập nhật One UI 2.0</p>\r\n\r\n<p><img alt=\"Giao diện thanh thông báo và hệ thống\" src=\"https://cdn.tgdd.vn/Files/2020/02/13/1236308/oneui2-_3240x2220-800-resize.jpg\" title=\"Giao diện thanh thông báo và hệ thống\" /></p>\r\n\r\n<p>C&ograve;n đ&acirc;y l&agrave; giao diện thanh th&ocirc;ng b&aacute;o v&agrave; hệ thống</p>\r\n\r\n<p><a href=\"https://cdn.tgdd.vn/Files/2020/02/13/1236308/man-hinh-khoa-dong_1080x2220-800-resize.jpg\" rel=\"nofollow\" target=\"_blank\" title=\"Từ màn hình khóa vuốt từ phải sang để truy cập mục tinh chỉnh Màn hình khóa động\" type=\"Từ màn hình khóa vuốt từ phải sang để truy cập mục tinh chỉnh Màn hình khóa động\"><img alt=\"Từ màn hình khóa vuốt từ phải sang để truy cập mục tinh chỉnh Màn hình khóa động\" src=\"https://cdn.tgdd.vn/Files/2020/02/13/1236308/man-hinh-khoa-dong_1080x2220-800-resize.jpg\" title=\"Từ màn hình khóa vuốt từ phải sang để truy cập mục tinh chỉnh Màn hình khóa động\" /></a></p>\r\n\r\n<p>Từ m&agrave;n h&igrave;nh kh&oacute;a vuốt từ phải sang để truy cập mục tinh chỉnh M&agrave;n h&igrave;nh kh&oacute;a động</p>\r\n\r\n<p>Sau đ&acirc;y l&agrave; những cập nhật mới c&oacute; tr&ecirc;n One UI 2.0:</p>\r\n\r\n<h3><strong>Chế độ Tối</strong></h3>\r\n\r\n<ul>\r\n	<li>Đ&atilde; tăng cường hiệu chỉnh ảnh, văn bản v&agrave; m&agrave;u sắc cho m&ocirc;i trường ban ng&agrave;y v&agrave; ban đ&ecirc;m.</li>\r\n	<li>H&igrave;nh nền tối m&agrave;u, widget v&agrave; chu&ocirc;ng b&aacute;o khi bật chế độ Tối.</li>\r\n</ul>\r\n\r\n<h3><strong>Tinh giản tương t&aacute;c</strong></h3>\r\n\r\n<ul>\r\n	<li>Điều hướng thoải m&aacute;i hơn tr&ecirc;n m&agrave;n h&igrave;nh lớn với chuyển động ng&oacute;n tay tối thiểu.</li>\r\n	<li>Dễ d&agrave;ng tập trung v&agrave;o những điều quan trọng với c&aacute;c ph&iacute;m được t&ocirc; s&aacute;ng r&otilde; r&agrave;ng.</li>\r\n</ul>\r\n\r\n<h3><strong>Văn bản r&otilde; r&agrave;ng hơn tr&ecirc;n h&igrave;nh nền</strong></h3>\r\n\r\n<ul>\r\n	<li>Xem văn bản r&otilde; r&agrave;ng hơn tr&ecirc;n h&igrave;nh nền, nhờ One UI tự động hiệu chỉnh m&agrave;u font dựa tr&ecirc;n c&aacute;c v&ugrave;ng s&aacute;ng v&agrave; tối v&agrave; độ tương phản m&agrave;u.</li>\r\n</ul>\r\n\r\n<h3><strong>Tiện &iacute;ch số</strong></h3>\r\n\r\n<ul>\r\n	<li>Đặt mục ti&ecirc;u đề thường xuy&ecirc;n kiểm tra mức sử dụng&nbsp;<a href=\"https://www.thegioididong.com/dtdd\" target=\"_blank\" title=\"Đặt mua smartphone tại Thegioididong.com\" type=\"Đặt mua smartphone tại Thegioididong.com\">điện thoại</a>&nbsp;của bạn.</li>\r\n	<li>Sử dụng chế độ Tập trung để gi&uacute;p tr&aacute;nh phiền nhiễu từ điện thoại của ban.</li>\r\n	<li>Theo d&otilde;i hoạt động của con bạn với t&iacute;nh năng kiểm so&aacute; truy cập mới.</li>\r\n</ul>\r\n\r\n<h3><strong>Camera</strong></h3>\r\n\r\n<ul>\r\n	<li>Đ&atilde; th&ecirc;m khả năng sửa c&aacute;c chế độ xuất hiện ở dưới c&ugrave;ng m&agrave;n h&igrave;nh.</li>\r\n	<li>Cung cấp tab kh&aacute;c để bạn c&oacute; thể nhanh ch&oacute;ng truy cập c&aacute;c chế độ ẩn từ m&agrave;n h&igrave;nh xem trước.</li>\r\n	<li>Đ&atilde; cải thiện bố cục để bạn c&oacute; thể tập trung chụp ảnh m&agrave; kh&ocirc;ng bị vướng c&agrave;i đặt.</li>\r\n</ul>\r\n\r\n<h3><strong>Hỗ trợ</strong></h3>\r\n\r\n<ul>\r\n	<li>Đ&atilde; cải thiện b&agrave;n ph&iacute;m v&agrave; bố cục tương phản cao cho văn bản lớn.</li>\r\n	<li>Nghe lời n&oacute;i trực tiếp v&agrave; hiển thị ở dạng văn bản.</li>\r\n</ul>\r\n\r\n<p><img alt=\"Giao diện One UI 2.0 trên Galaxy S9+\" src=\"https://cdn.tgdd.vn/Files/2020/02/13/1236308/s9oneui2-_3240x2220-800-resize.jpg\" title=\"Giao diện One UI 2.0 trên Galaxy S9+\" /></p>\r\n\r\n<p>Nếu điện thoại của bạn chưa nhận được th&ocirc;ng b&aacute;o cập nhật, h&atilde;y v&agrave;o&nbsp;<strong>C&agrave;i đặt m&aacute;y &gt; Cập nhật phần mềm &gt; Tải về v&agrave; c&agrave;i đặt</strong>.</p>\r\n\r\n<p>Những t&iacute;nh năng kh&aacute;c sau khi kh&aacute;m ph&aacute; xong, c&aacute;c bạn nhớ b&igrave;nh luận b&ecirc;n dưới b&agrave;i viết n&agrave;y để mọi người c&ugrave;ng thảo luận th&ecirc;m nh&eacute;!</p>', 1, 0, 'được cập nhật Android 10 với giao diện One UI 2.0', 'được cập nhật Android 10 với giao diện One UI 2.0', '2020-03-02__galaxy-s9-plus-android-10-800x450.jpg', 0, '2020-03-01 21:09:49', '2020-03-01 21:09:49', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `articles`
--

CREATE TABLE `articles` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `catrgories`
--

CREATE TABLE `catrgories` (
  `id` int(10) UNSIGNED NOT NULL,
  `c_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `c_slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `c_icon` char(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `c_avatar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `c_active` tinyint(4) NOT NULL DEFAULT 1,
  `total_product` int(11) NOT NULL DEFAULT 0,
  `c_detail_seo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `c_description_seo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `c_keywork_seo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `c_home` tinyint(4) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `catrgories`
--

INSERT INTO `catrgories` (`id`, `c_name`, `c_slug`, `c_icon`, `c_avatar`, `c_active`, `total_product`, `c_detail_seo`, `c_description_seo`, `c_keywork_seo`, `created_at`, `updated_at`, `c_home`) VALUES
(1, 'Điện Thoại', 'dien-thoai', 'fa-mobile', NULL, 1, 0, 'Điện thoại iphone 8', 'asdasd', NULL, '2020-02-24 04:08:20', '2020-03-16 11:52:14', 1),
(2, 'máy giặc', 'may-giac', 'fa-keyboard', NULL, 1, 0, 'máy giặc', 'ada', NULL, '2020-02-24 21:15:34', '2020-02-24 21:15:45', 1),
(3, 'Máy tính bảng', 'may-tinh-bang', 'fa fa-pad', NULL, 1, 0, 'Máy tính bảng', NULL, NULL, '2020-03-10 07:57:32', '2020-03-10 07:57:32', 1),
(4, 'Phụ Kiện', 'phu-kien', 'fa fa-ffa', NULL, 1, 0, 'Phụ Kiện', NULL, NULL, '2020-03-10 07:58:16', '2020-03-10 07:58:16', 0),
(5, 'Điện Thoại phổ thông', 'dien-thoai-pho-thong', 'fa', NULL, 1, 0, 'Điện Thoại phổ thông', NULL, NULL, '2020-03-10 08:01:19', '2020-03-10 08:01:19', 0),
(6, 'Điện Thoại cao cấp', 'dien-thoai-cao-cap', 'fa da', NULL, 1, 0, 'Điện Thoại cao cấp', NULL, NULL, '2020-03-10 08:03:58', '2020-03-10 08:03:58', 0),
(18, 'Đồ gia dụng', 'do-gia-dung', 'fa fa-home', NULL, 1, 0, 'Đồ gia dụng', NULL, NULL, '2020-03-10 08:56:06', '2020-03-10 08:56:06', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `contacts`
--

CREATE TABLE `contacts` (
  `id` int(10) UNSIGNED NOT NULL,
  `c_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `c_email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `c_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `c_content` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `c_status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `contacts`
--

INSERT INTO `contacts` (`id`, `c_name`, `c_email`, `c_title`, `c_content`, `c_status`, `created_at`, `updated_at`) VALUES
(1, 'nguyễn văn thành', 'ducy357@gmail.com', 'lỗi mua hàng', 'websaite chậm', 1, NULL, NULL),
(2, 'nguyễn hữu quang', 'ducy357@gmail.com', 'mua lổi do website delay', 'websaite chậm', 1, '2020-03-03 23:00:25', '2020-03-03 23:00:25');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `messages`
--

CREATE TABLE `messages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(11, '2014_10_12_000000_create_users_table', 1),
(14, '2020_02_23_061235_category', 1),
(15, '2020_02_24_092356_create_products_table', 1),
(16, '2020_02_24_100243_alter_column_pro_content_and_pro_title_ceo_in_table_product', 1),
(18, '2020_02_26_062610_create_article_table', 2),
(19, '2020_03_04_045018_create_contact_table', 3),
(20, '2020_03_04_113946_create_transactions_table', 4),
(21, '2020_03_04_114102_create_orders_table', 5),
(22, '2020_03_04_130929_alter_columm_products', 6),
(23, '2020_03_05_102846_create_rating_table', 7),
(24, '2020_03_05_103531_alter_comlumm_rating_in_table_product', 7),
(25, '2020_03_11_153850_after_table_user_add_total_pay', 8),
(26, '2020_03_15_154254_create_pages_static', 9),
(27, '2020_03_16_174510_after_table_cagtegories-add_hot_collum', 10),
(28, '2020_03_18_194331_create_admin_table', 11),
(29, '2020_03_19_181658_alter_column_a_hot_in_-table', 12),
(30, '2020_03_20_174110_after_users_add_collum_about_and_user', 13),
(31, '2020_03_22_093558_after_column_code_and_in_table', 14),
(32, '2020_03_23_000012_after_user_add_code_active', 15),
(33, '2020_03_23_000220_after_user_add_time_active', 16),
(42, '2014_10_12_100000_create_password_resets_table', 17),
(43, '2017_12_29_233629_create_articles_table', 17),
(44, '2019_08_19_000000_create_failed_jobs_table', 17);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `orders`
--

CREATE TABLE `orders` (
  `id` int(10) UNSIGNED NOT NULL,
  `or_transaction_id` int(10) UNSIGNED NOT NULL DEFAULT 0,
  `or_product_id` int(10) UNSIGNED NOT NULL DEFAULT 0,
  `or_qty` tinyint(4) NOT NULL DEFAULT 0,
  `or_price` int(11) NOT NULL DEFAULT 0,
  `or_sale` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `orders`
--

INSERT INTO `orders` (`id`, `or_transaction_id`, `or_product_id`, `or_qty`, `or_price`, `or_sale`, `created_at`, `updated_at`) VALUES
(2, 3, 8, 1, 18490000, 90, NULL, NULL),
(3, 4, 8, 2, 18490000, 90, '2020-03-04 07:22:03', '2020-03-04 07:22:03'),
(4, 4, 7, 1, 18490000, 100, '2020-03-04 07:22:03', '2020-03-04 07:22:03'),
(5, 5, 7, 1, 18490000, 100, '2020-03-11 08:09:01', '2020-03-11 08:09:01'),
(6, 5, 8, 1, 18490000, 90, '2020-03-11 08:09:01', '2020-03-11 08:09:01'),
(7, 6, 8, 1, 18490000, 90, '2020-03-14 13:30:11', '2020-03-14 13:30:11'),
(8, 6, 7, 1, 18490000, 100, '2020-03-14 13:30:11', '2020-03-14 13:30:11'),
(9, 7, 5, 1, 18490000, 0, '2020-03-14 13:49:55', '2020-03-14 13:49:55');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `page_statics`
--

CREATE TABLE `page_statics` (
  `id` int(10) UNSIGNED NOT NULL,
  `ps_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ps_type` tinyint(4) NOT NULL DEFAULT 1,
  `ps_content` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `page_statics`
--

INSERT INTO `page_statics` (`id`, `ps_name`, `ps_type`, `ps_content`, `created_at`, `updated_at`) VALUES
(2, 'Về chúng Tôi', 1, '<p>Nội dung về ch&uacute;ng t&ocirc;i</p>', '2020-03-15 10:19:41', '2020-03-15 10:39:53'),
(3, 'thông tin giao hàng', 2, NULL, '2020-03-15 10:20:24', '2020-03-15 10:20:24');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `products`
--

CREATE TABLE `products` (
  `id` int(10) UNSIGNED NOT NULL,
  `pro_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pro_slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pro_category_id` int(10) UNSIGNED NOT NULL,
  `pro_price` double(20,3) NOT NULL DEFAULT 0.000,
  `pro_sale` tinyint(4) NOT NULL DEFAULT 0,
  `pro_active` tinyint(4) NOT NULL DEFAULT 1,
  `pro_author_id` int(10) UNSIGNED NOT NULL DEFAULT 0,
  `pro_hot` tinyint(4) NOT NULL DEFAULT 0,
  `pro_view` int(11) NOT NULL DEFAULT 0,
  `pro_description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pro_avatar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pro_description_seo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pro_keywork_seo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `pro_title_seo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pro_content` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pro_pay` tinyint(4) NOT NULL DEFAULT 0,
  `pro_number` tinyint(4) NOT NULL DEFAULT 0,
  `pro_total_number` int(11) NOT NULL DEFAULT 0,
  `pro_total_rating` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `products`
--

INSERT INTO `products` (`id`, `pro_name`, `pro_slug`, `pro_category_id`, `pro_price`, `pro_sale`, `pro_active`, `pro_author_id`, `pro_hot`, `pro_view`, `pro_description`, `pro_avatar`, `pro_description_seo`, `pro_keywork_seo`, `created_at`, `updated_at`, `pro_title_seo`, `pro_content`, `pro_pay`, `pro_number`, `pro_total_number`, `pro_total_rating`) VALUES
(2, 'Máy tính bảng Samsung Galaxy Tab S865', 'may-tinh-bang-samsung-galaxy-tab-s865', 1, 1867657567.000, 0, 1, 0, 1, 0, 'adasdddew', '2020-03-02__galaxy-s9-plus-android-10-800x450.jpg', NULL, NULL, '2020-02-24 04:53:02', '2020-03-10 09:37:51', 'Máy tính bảng Samsung Galaxy Tab S64', '<p>dasdas</p>', 0, 99, 0, 0),
(5, 'Điện thoại OPPO Reno2', 'dien-thoai-oppo-reno2', 1, 18490000.000, 0, 1, 0, 1, 0, 'Điện thoại OPPO Reno2 F', '2020-02-28__oppo-reno2-f-xanh-600x600-400x400.jpg', 'Điện thoại OPPO Reno2 F', NULL, '2020-02-28 06:45:46', '2020-03-15 13:15:24', 'Điện thoại OPPO Reno2 F', '<p>Điện thoại OPPO Reno2 F</p>', 1, 0, 55, 23),
(6, 'Điện thoại iPhone 11 Pro Max 64gb', 'dien-thoai-iphone-11-pro-max-64gb', 1, 18490000.000, 0, 1, 0, 1, 0, 'Trong năm 2019 thì chiếc smartphone được nhiều người mong muốn sở hữu trên tay và sử dụng nhất không ai khác chính là iPhone 11 Pro Max 64GB tới từ nhà Apple.', '2020-03-05__iphone-11-pro-max-16.jpg', 'So với người anh em iPhone Xs Max thì với việc được tích hợp thêm một camera góc rộng người dùng iPhone giờ đây sẽ có được cho mình những khung hình độc đáo hơn.', NULL, '2020-02-28 19:30:12', '2020-03-15 12:02:01', 'So với người anh em iPhone Xs Max thì với việc được tích hợp thêm một camera góc rộng người dùng iPhone giờ đây sẽ có được cho mình những khung hình độc đáo hơn.', '<h2>Đặc điểm nổi bật của iPhone 11 Pro Max 64GB</h2>\r\n\r\n<p><img src=\"https://cdn.tgdd.vn/Products/Images/42/200533/Slider/vi-vn-iphone-11-pro-max-thumbvideo.jpg\" /><img src=\"https://www.thegioididong.com/Content/desktop/images/V4/icon-yt.png\" /></p>\r\n\r\n<p><a href=\"https://www.thegioididong.com/hoi-dap/che-do-chup-dem-night-mode-la-gi-907873\" target=\"_blank\">T&igrave;m hiểu th&ecirc;m</a></p>\r\n\r\n<p><a href=\"https://www.thegioididong.com/hoi-dap/man-hinh-super-retina-xdr-tren-iphone-11-pro-va-11-1198630\" target=\"_blank\">T&igrave;m hiểu th&ecirc;m</a></p>\r\n\r\n<p><a href=\"https://www.thegioididong.com/hoi-dap/tim-hieu-ve-chip-apple-a13-bionic-tren-iphone-11-1197492\" target=\"_blank\">T&igrave;m hiểu th&ecirc;m</a></p>\r\n\r\n<p>Bộ sản phẩm chuẩn: Sạc,Tai nghe,Hộp,C&aacute;p,C&acirc;y lấy sim,S&aacute;ch hướng dẫn</p>\r\n\r\n<h2 dir=\"ltr\">Trong năm 2019 th&igrave; chiếc&nbsp;<a href=\"https://www.thegioididong.com/dtdd\" target=\"_blank\" title=\"Tham khảo giá điện thoại smartphone chính hãng\">smartphone</a>&nbsp;được nhiều người mong muốn sở hữu tr&ecirc;n tay v&agrave; sử dụng nhất kh&ocirc;ng ai kh&aacute;c ch&iacute;nh l&agrave;&nbsp;<a href=\"https://www.thegioididong.com/dtdd/iphone-11-pro-max\" target=\"_blank\" title=\"Tham khảo điện thoại iPhone 11 Pro Max 64GB chính hãng\">iPhone 11 Pro Max 64GB</a>&nbsp;tới từ nh&agrave; Apple.</h2>\r\n\r\n<h3 dir=\"ltr\">Camera được cải tiến mạnh mẽ</h3>\r\n\r\n<p dir=\"ltr\">Chắc chắn l&yacute; do lớn nhất m&agrave; bạn muốn n&acirc;ng cấp l&ecirc;n iPhone 11 Pro Max ch&iacute;nh l&agrave; cụm camera mới được Apple n&acirc;ng cấp rất nhiều.</p>\r\n\r\n<p dir=\"ltr\"><a href=\"https://www.thegioididong.com/images/42/200533/iphone-11-pro-max-tgdd14-1.jpg\" onclick=\"return false;\"><img alt=\"iPhone 11 Pro Max 64GB | Cụm ba camera sau ấn tượng\" src=\"https://cdn.tgdd.vn/Products/Images/42/200533/iphone-11-pro-max-tgdd14-1.jpg\" title=\"iPhone 11 Pro Max 64GB | Cụm ba camera sau ấn tượng\" /></a></p>\r\n\r\n<p dir=\"ltr\">Lần đầu ti&ecirc;n ch&uacute;ng ta sẽ c&oacute; một chiếc&nbsp;<a href=\"https://www.thegioididong.com/dtdd-apple-iphone\" target=\"_blank\" title=\"Tham khảo iPhone chính hãng\">iPhone</a>&nbsp;với 3 camera ở mặt sau v&agrave; cả 3 camera n&agrave;y đều c&oacute; độ ph&acirc;n giải l&agrave; 12 MP.</p>\r\n\r\n<p dir=\"ltr\"><a href=\"https://www.thegioididong.com/images/42/200533/iphone-11-pro-max-tgdd6-1.jpg\" onclick=\"return false;\"><img alt=\"Điện thoại iPhone 11 Pro Max 64GB | Giao diện chụp ảnh camera\" src=\"https://cdn.tgdd.vn/Products/Images/42/200533/iphone-11-pro-max-tgdd6-1.jpg\" title=\"Điện thoại iPhone 11 Pro Max 64GB | Giao diện chụp ảnh camera\" /></a></p>\r\n\r\n<p dir=\"ltr\">Ch&uacute;ng ta sẽ c&oacute; một camera g&oacute;c thường, một camera g&oacute;c rộng v&agrave; một camera tele đ&aacute;p ứng đầy đủ nhu cầu chụp ảnh h&agrave;ng ng&agrave;y của người d&ugrave;ng.</p>\r\n\r\n<p dir=\"ltr\"><a href=\"https://www.thegioididong.com/images/42/200533/iphone-11-pro-max-tgdd9-1.jpg\" onclick=\"return false;\"><img alt=\"Điện thoại iPhone 11 Pro Max 64GB | Ảnh chụp chân dung bằng camera sau\" src=\"https://cdn.tgdd.vn/Products/Images/42/200533/iphone-11-pro-max-tgdd9-1.jpg\" title=\"Điện thoại iPhone 11 Pro Max 64GB | Ảnh chụp chân dung bằng camera sau\" /></a></p>\r\n\r\n<p dir=\"ltr\"><em>Ảnh chụp bằng camera sau tr&ecirc;n iPhone 11 Pro Max</em></p>\r\n\r\n<p dir=\"ltr\">Một cải tiến nữa cũng rất đ&aacute;ng ch&uacute; &yacute; ch&iacute;nh l&agrave;&nbsp;<a href=\"https://www.thegioididong.com/hoi-dap/night-mode-la-gi-diem-khac-nhau-giu-night-mode-va-1197122\" target=\"_blank\" title=\"Tìm hiểu chế độ Night Mode\" type=\"Tìm hiểu chế độ Night Mode\">chế độ Night Mode</a>&nbsp;mới sẽ gi&uacute;p bạn cải thiện rất nhiều chất lượng ảnh chụp đ&ecirc;m tr&ecirc;n iPhone.</p>\r\n\r\n<p dir=\"ltr\"><a href=\"https://www.thegioididong.com/images/42/200533/iphone-11-pro-max-tgdd15-1.jpg\" onclick=\"return false;\"><img alt=\"Điện thoại iPhone 11 Pro Max 64GB | Ảnh chụp bằng camera sau\" src=\"https://cdn.tgdd.vn/Products/Images/42/200533/iphone-11-pro-max-tgdd15-1.jpg\" title=\"Điện thoại iPhone 11 Pro Max 64GB | Ảnh chụp bằng camera sau\" /></a></p>\r\n\r\n<p dir=\"ltr\"><em>Ảnh chụp bằng camera sau tr&ecirc;n iPhone 11 Pro Max</em></p>\r\n\r\n<p dir=\"ltr\">T&ugrave;y thuộc v&agrave;o điều kiện m&ocirc;i trường bạn chụp m&agrave; iPhone sẽ đưa ra những th&ocirc;ng số ph&ugrave; hợp để bạn c&oacute; thể c&oacute; cho m&igrave;nh được một bức ảnh ưng &yacute; nhất.</p>\r\n\r\n<p dir=\"ltr\"><a href=\"https://www.thegioididong.com/images/42/200533/iphone-11-pro-max-tgdd12.jpg\" onclick=\"return false;\"><img alt=\"Điện thoại iPhone 11 Pro Max 64GB | Chế độ Night Mode mới\" src=\"https://cdn.tgdd.vn/Products/Images/42/200533/iphone-11-pro-max-tgdd12.jpg\" title=\"Điện thoại iPhone 11 Pro Max 64GB | Chế độ Night Mode mới\" /></a></p>\r\n\r\n<p dir=\"ltr\"><em>Chế độ Night Mode mới</em></p>\r\n\r\n<p dir=\"ltr\">Chế độ ch&acirc;n dung kh&ocirc;ng chỉ tốt hơn trong việc lấy n&eacute;t v&agrave;o đối tượng muốn chụp, m&agrave; c&ograve;n hoạt động được ở khoảng c&aacute;ch &#39;b&igrave;nh thường&#39; nhờ sự trợ gi&uacute;p của cảm biến độ s&acirc;u.</p>\r\n\r\n<p dir=\"ltr\"><a href=\"https://www.thegioididong.com/images/42/200533/iphone-11-pro-max-tgdd7-1.jpg\" onclick=\"return false;\"><img alt=\"Điện thoại iPhone 11 Pro Max 64GB | Ảnh chụp bằng chế độ Night Mode\" src=\"https://cdn.tgdd.vn/Products/Images/42/200533/iphone-11-pro-max-tgdd7-1.jpg\" title=\"Điện thoại iPhone 11 Pro Max 64GB | Ảnh chụp bằng chế độ Night Mode\" /></a></p>\r\n\r\n<p dir=\"ltr\"><em>Ảnh chụp với chế độ Night Mode tr&ecirc;n iPhone 11 Pro Max</em></p>\r\n\r\n<p dir=\"ltr\">So với người anh em&nbsp;<a href=\"https://www.thegioididong.com/dtdd/iphone-xs-max\" target=\"_blank\" title=\"Tham khảo giá điện thoại iPhone Xs Max chính hãng\" type=\"Tham khảo giá điện thoại iPhone Xs Max chính hãng\">iPhone Xs Max</a>&nbsp;th&igrave; với việc được t&iacute;ch hợp th&ecirc;m một camera g&oacute;c rộng người d&ugrave;ng iPhone giờ đ&acirc;y sẽ c&oacute; được cho m&igrave;nh những khung h&igrave;nh độc đ&aacute;o hơn.</p>\r\n\r\n<p dir=\"ltr\"><a href=\"https://www.thegioididong.com/images/42/200533/iphone-11-pro-max-tgdd8-1.jpg\" onclick=\"return false;\"><img alt=\"Điện thoại iPhone 11 Pro Max 64GB | Ảnh chụp chế độ thường bằng camera sau\" src=\"https://cdn.tgdd.vn/Products/Images/42/200533/iphone-11-pro-max-tgdd8-1.jpg\" title=\"Điện thoại iPhone 11 Pro Max 64GB | Ảnh chụp chế độ thường bằng camera sau\" /></a></p>\r\n\r\n<p dir=\"ltr\"><em>Ảnh chụp chế độ cơ bản b&igrave;nh thường với camera ch&iacute;nh</em></p>\r\n\r\n<p dir=\"ltr\">Bạn muốn chụp một t&ograve;a nh&agrave; cao tầng, bạn muốn ghi lại khung cảnh thi&ecirc;n nhi&ecirc;n h&ugrave;ng vĩ m&agrave; m&igrave;nh nh&igrave;n thấy th&igrave; camera&nbsp;<a href=\"https://www.thegioididong.com/dtdd-camera-goc-rong\" target=\"_blank\" title=\"Tham khảo các dòng điện thoại hỗ trợ chụp góc rộng\" type=\"Tham khảo các dòng điện thoại hỗ trợ chụp góc rộng\">g&oacute;c si&ecirc;u rộng</a>&nbsp;sẽ l&agrave;m rất tốt trong những điều kiện n&agrave;y.</p>\r\n\r\n<p dir=\"ltr\"><a href=\"https://www.thegioididong.com/images/42/200533/iphone-11-pro-max-tgdd16-1.jpg\" onclick=\"return false;\"><img alt=\"Điện thoại iPhone 11 Pro Max 64GB | Ảnh chụp ngược sáng với HDR\" src=\"https://cdn.tgdd.vn/Products/Images/42/200533/iphone-11-pro-max-tgdd16-1.jpg\" title=\"Điện thoại iPhone 11 Pro Max 64GB | Ảnh chụp ngược sáng với HDR\" /></a></p>\r\n\r\n<h3 dir=\"ltr\">Camera trước cũng mang lại sự kh&aacute;c biệt</h3>\r\n\r\n<p dir=\"ltr\">Kh&ocirc;ng chỉ c&oacute; camera ch&iacute;nh m&agrave; camera selfie tr&ecirc;n iPhone 11 Pro Max cũng được cải thiện rất nhiều.</p>\r\n\r\n<p dir=\"ltr\"><a href=\"https://www.thegioididong.com/images/42/200533/iphone-11-pro-max-tgdd17-1.jpg\" onclick=\"return false;\"><img alt=\"Điện thoại iPhone 11 Pro Max 64GB | Trải nghiệm selfie\" src=\"https://cdn.tgdd.vn/Products/Images/42/200533/iphone-11-pro-max-tgdd17-1.jpg\" title=\"Điện thoại iPhone 11 Pro Max 64GB | Trải nghiệm selfie\" /></a></p>\r\n\r\n<p dir=\"ltr\"><em>Ảnh selfie tr&ecirc;n iPhone 11 Pro Max</em></p>\r\n\r\n<p dir=\"ltr\">Đầu ti&ecirc;n ch&uacute;ng ta c&oacute; thể kể tới l&agrave; độ ph&acirc;n giải giờ đ&acirc;y đ&atilde; được n&acirc;ng l&ecirc;n th&agrave;nh 12 MP thay v&igrave; 7 MP như tr&ecirc;n thế hệ trước.</p>\r\n\r\n<p dir=\"ltr\">Tiếp theo ch&uacute;ng ta sẽ c&oacute; c&ocirc;ng nghệ quay video độ ph&acirc;n giải 4K ngay tr&ecirc;n camera trước một điều m&agrave; những chiếc iPhone trước đ&acirc;y chưa thể l&agrave;m được.</p>\r\n\r\n<p dir=\"ltr\">Ngo&agrave;i ra bạn cũng c&oacute; thể d&ugrave;ng camera trước để quay video slow motion (quay chậm) gi&uacute;p bạn c&oacute; được những video&nbsp; th&uacute; vị v&agrave; vui vẻ với bạn b&egrave;.</p>\r\n\r\n<p dir=\"ltr\"><a href=\"https://www.thegioididong.com/images/42/200533/iphone-11-pro-max-tgdd6.jpg\" onclick=\"return false;\"><img alt=\"Điện thoại iPhone 11 Pro Max 64GB | Giao diện chụp ảnh chế độ zoom quang học\" src=\"https://cdn.tgdd.vn/Products/Images/42/200533/iphone-11-pro-max-tgdd6.jpg\" title=\"Điện thoại iPhone 11 Pro Max 64GB | Giao diện chụp ảnh chế độ zoom quang học\" /></a></p>\r\n\r\n<p dir=\"ltr\">Một t&iacute;nh năng mới cũng được Apple t&iacute;ch hợp tr&ecirc;n iPhone mới đ&oacute; ch&iacute;nh l&agrave; khả năng tự động nhận diện để thay đổi g&oacute;c chụp gi&uacute;p bạn lấy được nhiều chi tiết hơn.</p>\r\n\r\n<p dir=\"ltr\"><a href=\"https://www.thegioididong.com/images/42/200533/iphone-11-pro-max.gif\" onclick=\"return false;\"><img alt=\"Điện thoại iPhone 11 Pro Max 64GB | Ảnh chụp chế độ slofie\" src=\"https://cdn.tgdd.vn/Products/Images/42/200533/iphone-11-pro-max.gif\" title=\"Điện thoại iPhone 11 Pro Max 64GB | Ảnh chụp chế độ slofie\" /></a></p>\r\n\r\n<p dir=\"ltr\">V&iacute; dụ khi bạn để điện thoại ở chế độ chụp dọc th&igrave; m&aacute;y sẽ chụp ở g&oacute;c b&igrave;nh thường, c&ograve;n khi bạn xoay điện thoại nằm ngang th&igrave; m&aacute;y tự động sẽ điều chỉnh để bạn c&oacute; được một g&oacute;c chụp rộng hơn.</p>\r\n\r\n<p dir=\"ltr\">Xem th&ecirc;m:&nbsp;<a href=\"https://www.thegioididong.com/tin-tuc/danh-gia-chi-tiet-iphone-11-pro-max-1199526\" target=\"_blank\" title=\"Đánh giá chi tiết iPhone 11 Pro Max\" type=\"Đánh giá chi tiết iPhone 11 Pro Max\">Đ&aacute;nh gi&aacute; chi tiết iPhone 11 Pro Max: Chiếc smartphone đỉnh nhất 2019?</a></p>\r\n\r\n<h3 dir=\"ltr\">Hiệu năng &quot;đ&egrave; bẹp&quot; mọi đối thủ</h3>\r\n\r\n<p dir=\"ltr\">Mỗi năm ra mắt iPhone mới th&igrave; Apple lại n&acirc;ng cấp con chip của m&igrave;nh để m&aacute;y c&oacute; thể đạt được một hiệu năng tốt nhất v&agrave; với iPhone 11 Pro Max năm nay cũng kh&ocirc;ng phải l&agrave; một ngoại lệ.</p>\r\n\r\n<p dir=\"ltr\"><a href=\"https://www.thegioididong.com/images/42/200533/iphone-11-pro-max-14.jpg\" onclick=\"return false;\"><img alt=\"Điện thoại iPhone 11 Pro Max 64GB | Giao diện màn hình chính\" src=\"https://cdn.tgdd.vn/Products/Images/42/200533/iphone-11-pro-max-14.jpg\" title=\"Điện thoại iPhone 11 Pro Max 64GB | Giao diện màn hình chính\" /></a></p>\r\n\r\n<p dir=\"ltr\">Chiếc iPhone mới n&agrave;y chạy tr&ecirc;n con chip&nbsp;<a href=\"https://www.thegioididong.com/hoi-dap/tim-hieu-ve-chip-apple-a13-bionic-tren-iphone-11-n-1197492\" target=\"_blank\" title=\"Tham khảo thêm về chip Apple A13 Bionic\">Apple A13 Bionic</a>, con chip mạnh mẽ nhất d&agrave;nh cho những chiếc iPhone trong năm 2019.</p>\r\n\r\n<p dir=\"ltr\"><a href=\"https://www.thegioididong.com/images/42/200533/iphone-11-pro-max-21.jpg\" onclick=\"return false;\"><img alt=\"Điện thoại iPhone 11 Pro Max 64GB | Điểm hiệu năng Antutu Benchmark\" src=\"https://cdn.tgdd.vn/Products/Images/42/200533/iphone-11-pro-max-21.jpg\" title=\"Điện thoại iPhone 11 Pro Max 64GB | Điểm hiệu năng Antutu Benchmark\" /></a></p>\r\n\r\n<p dir=\"ltr\">B&ecirc;n cạnh đ&oacute; bạn vẫn sẽ c&oacute; cho m&igrave;nh 4 GB RAM v&agrave; 64 GB bộ nhớ trong thoải m&aacute;i cho bạn c&agrave;i đặt game v&agrave; ứng dụng.</p>\r\n\r\n<p dir=\"ltr\"><a href=\"https://www.thegioididong.com/images/42/200533/iphone-11-pro-max-2.jpg\" onclick=\"return false;\"><img alt=\"Điện thoại iPhone 11 Pro Max 64GB | Trải nghiệm chơi game\" src=\"https://cdn.tgdd.vn/Products/Images/42/200533/iphone-11-pro-max-2.jpg\" title=\"Điện thoại iPhone 11 Pro Max 64GB | Trải nghiệm chơi game\" /></a></p>\r\n\r\n<p dir=\"ltr\">Tất nhi&ecirc;n m&aacute;y cũng sẽ chạy tr&ecirc;n phi&ecirc;n bản&nbsp;<a href=\"https://www.thegioididong.com/hoi-dap/tat-ca-nhung-tinh-nang-moi-duoc-cap-nhat-tren-ios-1171206\" target=\"_blank\" title=\"Tìm hiểu những tính năng mới trên iOS 13\" type=\"Tìm hiểu những tính năng mới trên iOS 13\">iOS 13</a>&nbsp;mới nhất với nhiều cải tiến gi&uacute;p tối ưu h&oacute;a hiệu năng đem lại trải nghiệm mượt m&agrave; hơn cho người d&ugrave;ng.</p>\r\n\r\n<p dir=\"ltr\"><a href=\"https://www.thegioididong.com/images/42/200533/iphone-11-pro-max-tgdd8.jpg\" onclick=\"return false;\"><img alt=\"Điện thoại iPhone 11 Pro Max 64GB | Giao diện iOS 13 mới\" src=\"https://cdn.tgdd.vn/Products/Images/42/200533/iphone-11-pro-max-tgdd8.jpg\" title=\"Điện thoại iPhone 11 Pro Max 64GB | Giao diện iOS 13 mới\" /></a></p>\r\n\r\n<p dir=\"ltr\"><em>Những t&iacute;nh năng tr&ecirc;n iOS 13 mới</em></p>\r\n\r\n<p dir=\"ltr\">Mọi game v&agrave; ứng dụng tr&ecirc;n iPhone 11 Pro Max hoạt động rất mượt m&agrave; v&agrave; ổn định, bạn hầu như sẽ kh&ocirc;ng thấy bất cứ độ trễ n&agrave;o trong qu&aacute; tr&igrave;nh sử dụng.</p>\r\n\r\n<p dir=\"ltr\">Năm nay Face ID cũng được cải thiện để c&oacute; thể nhận dạng ở nhiều g&oacute;c kh&aacute;c nhau mang lại trải nghiệm mở kh&oacute;a tốt hơn.</p>\r\n\r\n<p dir=\"ltr\"><a href=\"https://www.thegioididong.com/images/42/200533/iphone-11-pro-max-tgdd17.jpg\" onclick=\"return false;\"><img alt=\"Điện thoại iPhone 11 Pro Max 64GB | Công nghệ Haptic Engine mới \" src=\"https://cdn.tgdd.vn/Products/Images/42/200533/iphone-11-pro-max-tgdd17.jpg\" title=\"Điện thoại iPhone 11 Pro Max 64GB | Công nghệ Haptic Engine mới \" /></a></p>\r\n\r\n<p dir=\"ltr\">C&ocirc;ng nghệ Haptic Engine mới sẽ dựa tr&ecirc;n thời gian ấn v&agrave; giữ icon để hiện l&ecirc;n những menu chức năng kh&aacute;c nhau thay v&igrave; dựa v&agrave;o lực ấn như 3D Touch.</p>\r\n\r\n<h3 dir=\"ltr\">Dung lượng pin &#39;tr&acirc;u&#39;</h3>\r\n\r\n<p dir=\"ltr\">Apple đ&atilde; tuy&ecirc;n bố rằng iPhone 11 Pro Max c&oacute; thời lượng pin l&acirc;u hơn 5 giờ so với iPhone Xs&nbsp;Max.</p>\r\n\r\n<p dir=\"ltr\"><a href=\"https://www.thegioididong.com/images/42/200533/iphone-11-pro-max-7.jpg\" onclick=\"return false;\"><img alt=\"Điện thoại iPhone 11 Pro Max 64GB | Thời lượng pin tốt\" src=\"https://cdn.tgdd.vn/Products/Images/42/200533/iphone-11-pro-max-7.jpg\" title=\"Điện thoại iPhone 11 Pro Max 64GB | Thời lượng pin tốt\" /></a></p>\r\n\r\n<p dir=\"ltr\">V&agrave; nếu bạn chưa biết th&igrave; iPhone 11 Pro Max l&agrave; chiếc iPhone c&oacute; dung lượng pin lớn nhất từ trước tới nay m&agrave; Apple từng sản xuất.</p>\r\n\r\n<p dir=\"ltr\"><a href=\"https://www.thegioididong.com/images/42/200533/iphone-11-pro-max-tgdd9.jpg\" onclick=\"return false;\"><img alt=\"Điện thoại iPhone 11 Pro Max 64GB | Thời lượng sử dụng pin trên iOS 13\" src=\"https://cdn.tgdd.vn/Products/Images/42/200533/iphone-11-pro-max-tgdd9.jpg\" title=\"Điện thoại iPhone 11 Pro Max 64GB | Thời lượng sử dụng pin trên iOS 13\" /></a></p>\r\n\r\n<p dir=\"ltr\">Bạn c&oacute; thể sử dụng m&aacute;y thoải m&aacute;i từ s&aacute;ng tới tối m&agrave; kh&ocirc;ng cần phải bận t&acirc;m về việc nạp năng lượng cho m&aacute;y giữa chừng.</p>\r\n\r\n<p dir=\"ltr\">Tin vui l&agrave; năm nay Apple đ&atilde; trang bị củ&nbsp;<a href=\"https://www.thegioididong.com/dtdd?f=sac-pin-nhanh\" target=\"_blank\" title=\"Tham khảo giá điện thoại smartphone sạc pin nhanh\">sạc nhanh</a>&nbsp;18W đi k&egrave;m b&ecirc;n trong hộp của chiếc iPhone mới n&agrave;y.</p>\r\n\r\n<p dir=\"ltr\"><a href=\"https://www.thegioididong.com/images/42/200533/iphone-11-pro-max-tgdd1-2.jpg\" onclick=\"return false;\"><img alt=\"Điện thoại iPhone 11 Pro Max 64GB | Cổng sạc trên máy\" src=\"https://cdn.tgdd.vn/Products/Images/42/200533/iphone-11-pro-max-tgdd1-2.jpg\" title=\"Điện thoại iPhone 11 Pro Max 64GB | Cổng sạc trên máy\" /></a></p>\r\n\r\n<p dir=\"ltr\">Tất nhi&ecirc;n bạn vẫn sẽ c&oacute; c&ocirc;ng nghệ sạc kh&ocirc;ng d&acirc;y v&agrave; thậm ch&iacute; l&agrave; sạc nhanh kh&ocirc;ng d&acirc;y để bạn c&oacute; thể sử dụng h&agrave;ng ng&agrave;y.</p>\r\n\r\n<h3 dir=\"ltr\">Những thay đổi về thiết kế v&agrave; m&agrave;n h&igrave;nh</h3>\r\n\r\n<p dir=\"ltr\">Để ph&acirc;n biệt iPhone 11 Pro Max v&agrave; iPhone Xs Max th&igrave; bạn bắt buộc phải nh&igrave;n v&agrave;o mặt lưng nơi sẽ c&oacute; cụm camera to bản hơn cũng như phần k&iacute;nh được ho&agrave;n thiện k&iacute;nh mờ thay v&igrave; b&oacute;ng như tr&ecirc;n thế trước.</p>\r\n\r\n<p dir=\"ltr\"><a href=\"https://www.thegioididong.com/images/42/200533/iphone-11-pro-max-17.jpg\" onclick=\"return false;\"><img alt=\"Điện thoại iPhone 11 Pro Max 64GB | Thiết kế mặt lưng nổi bật cụm camera sau\" src=\"https://cdn.tgdd.vn/Products/Images/42/200533/iphone-11-pro-max-17.jpg\" title=\"Điện thoại iPhone 11 Pro Max 64GB | Thiết kế mặt lưng nổi bật cụm camera sau\" /></a></p>\r\n\r\n<p dir=\"ltr\">Thiết kế mới n&agrave;y của Apple gi&uacute;p hạn chế mồ h&ocirc;i v&agrave; bụi bẩn b&aacute;m lại sau qu&aacute; tr&igrave;nh sử dụng, gi&uacute;p thiết bị lu&ocirc;n lu&ocirc;n c&oacute; được sự sang trọng v&agrave; b&oacute;ng bẩy.</p>\r\n\r\n<p dir=\"ltr\"><a href=\"https://www.thegioididong.com/images/42/200533/iphone-11-pro-max-tgdd4-1.jpg\" onclick=\"return false;\"><img alt=\"Điện thoại iPhone 11 Pro Max 64GB | Khay sim\" src=\"https://cdn.tgdd.vn/Products/Images/42/200533/iphone-11-pro-max-tgdd4-1.jpg\" title=\"Điện thoại iPhone 11 Pro Max 64GB | Khay sim\" /></a></p>\r\n\r\n<p dir=\"ltr\">Ngo&agrave;i ra logo Apple quen thuộc năm nay đ&atilde; được đặt ở ch&iacute;nh giữa mặt lưng thay v&igrave; đặt lệch về ph&iacute;a cạnh tr&ecirc;n như những chiếc iPhone trước đ&oacute;.</p>\r\n\r\n<p dir=\"ltr\"><a href=\"https://www.thegioididong.com/images/42/200533/iphone-11-pro-max-tgdd3-1.jpg\" onclick=\"return false;\"><img alt=\"Điện thoại iPhone 11 Pro Max 64GB | Thiết kế viền màn hình\" src=\"https://cdn.tgdd.vn/Products/Images/42/200533/iphone-11-pro-max-tgdd3-1.jpg\" title=\"Điện thoại iPhone 11 Pro Max 64GB | Thiết kế viền màn hình\" /></a></p>\r\n\r\n<p dir=\"ltr\">Một trong những điểm quan trọng được n&acirc;ng cấp trong m&agrave;n h&igrave;nh của iPhone mới đ&oacute; l&agrave; khả năng ph&aacute;t nội dung Dolby Vision.</p>\r\n\r\n<p dir=\"ltr\"><a href=\"https://www.thegioididong.com/images/42/200533/iphone-11-pro-max-tgdd5-1.jpg\" onclick=\"return false;\"><img alt=\"Điện thoại iPhone 11 Pro Max 64GB | Trải nghiệm xem phim\" src=\"https://cdn.tgdd.vn/Products/Images/42/200533/iphone-11-pro-max-tgdd5-1.jpg\" title=\"Điện thoại iPhone 11 Pro Max 64GB | Trải nghiệm xem phim\" /></a></p>\r\n\r\n<p dir=\"ltr\">Nhờ đ&oacute;, trải nghiệm xem phim sẽ cho h&igrave;nh ảnh chi tiết hơn v&agrave; mang đến những thước phim điện ảnh hơn nhiều.</p>\r\n\r\n<p dir=\"ltr\"><a href=\"https://www.thegioididong.com/images/42/200533/iphone-11-pro-max-tgdd12-1.jpg\" onclick=\"return false;\"><img alt=\"Điện thoại iPhone 11 Pro Max 64GB | Màn hình\" src=\"https://cdn.tgdd.vn/Products/Images/42/200533/iphone-11-pro-max-tgdd12-1.jpg\" title=\"Điện thoại iPhone 11 Pro Max 64GB | Màn hình\" /></a></p>\r\n\r\n<p dir=\"ltr\">iPhone thường đạt được độ s&aacute;ng 800 nits, nhưng với Dolby Vision mọi thứ thậm ch&iacute; c&ograve;n ấn tượng hơn (l&ecirc;n tới 1200 nits, theo Apple).</p>\r\n\r\n<p dir=\"ltr\"><a href=\"https://www.thegioididong.com/images/42/200533/iphone-11-pro-max-16.jpg\" onclick=\"return false;\"><img alt=\"Điện thoại iPhone 11 Pro Max 64GB | Khả năng hiển thị màn hình\" src=\"https://cdn.tgdd.vn/Products/Images/42/200533/iphone-11-pro-max-16.jpg\" title=\"Điện thoại iPhone 11 Pro Max 64GB | Khả năng hiển thị màn hình\" /></a></p>\r\n\r\n<p dir=\"ltr\">Với những n&acirc;ng cấp kh&aacute; nhiều đặc biệt l&agrave; về mặt camera v&agrave; hiệu năng th&igrave; iPhone 11 Pro Max năm nay hứa hẹn sẽ lại đem về th&agrave;nh c&ocirc;ng lớn cho Apple.</p>', 0, 0, 74, 20),
(7, 'Điện thoại Samsung Galaxy A51', 'dien-thoai-samsung-galaxy-a51', 1, 18490000.000, 100, 1, 0, 1, 0, 'Samsung đã ra mắt điện thoại Samsung Galaxy A51 mở đầu cho thế hệ Galaxy A 2020 hướng tới giới trẻ', '2020-02-29__oppo-a1k-do-600x600-1-400x400.jpg', 'Samsung đã ra mắt điện thoại Samsung Galaxy A51 mở đầu cho thế hệ Galaxy A 2020 hướng tới giới trẻ', NULL, '2020-02-28 19:37:06', '2020-03-14 13:30:25', 'Samsung đã ra mắt điện thoại Samsung Galaxy A51 mở đầu cho thế hệ Galaxy A 2020 hướng tới giới trẻ', '<p>Samsung đ&atilde; ra mắt điện thoại Samsung Galaxy A51 mở đầu cho thế hệ Galaxy A 2020 hướng tới giới trẻ hiện đại, thời thượng. M&aacute;y sở hữu cụm 4 camera, bao gồm camera macro chụp cận cảnh lần đầu xuất hiện tr&ecirc;n smartphone Galaxy, m&agrave;n h&igrave;nh tr&agrave;n viền v&ocirc; cực c&ugrave;ng mặt lưng họa tiết kim cương nổi bật.</p>', 3, 23, 22, 5),
(8, 'Điện thoại Samsung Galaxy A7 (2018) 64GB', 'dien-thoai-samsung-galaxy-a7-2018-64gb', 2, 18490000.000, 90, 1, 0, 1, 0, 'Được nâng cấp cả RAM và bộ nhớ trong, Samsung Galaxy A7 (2018) 128GB đem lại khả năng đa nhiệm, lưu trữ tốt hơn. Đồng thời đây cũng là chiếc smartphone đầu tiên của Samsung được trang bị tới 3 camera ở mặt sau và cảm biến vân tay cạnh bên.', '2020-03-02__samsung-galaxy-a71-silver-600x600-400x400.jpg', 'Điện thoại Samsung Galaxy A7 (2018) 128GB', NULL, '2020-02-28 19:38:32', '2020-03-14 13:30:25', 'Điện thoại Samsung Galaxy A7 (2018) 128GB', '<p>Được n&acirc;ng cấp cả RAM v&agrave; bộ nhớ trong, Samsung Galaxy A7 (2018) 128GB đem lại khả năng đa nhiệm, lưu trữ tốt hơn. Đồng thời đ&acirc;y cũng l&agrave; chiếc smartphone đầu ti&ecirc;n của Samsung được trang bị tới 3 camera ở mặt sau v&agrave; cảm biến v&acirc;n tay cạnh b&ecirc;n.</p>', 4, 92, 0, 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `ratings`
--

CREATE TABLE `ratings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ra_product_id` int(10) UNSIGNED NOT NULL,
  `ra_number` tinyint(4) NOT NULL DEFAULT 0,
  `ra_content` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ra_user_id` int(10) UNSIGNED NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `ratings`
--

INSERT INTO `ratings` (`id`, `ra_product_id`, `ra_number`, `ra_content`, `ra_user_id`, `created_at`, `updated_at`) VALUES
(1, 7, 4, 'Sản phẩm khá tốt', 2, NULL, NULL),
(2, 7, 5, 'tốt', 2, NULL, NULL),
(3, 7, 5, 'tốt', 2, NULL, NULL),
(4, 7, 4, 'asdasd', 2, NULL, NULL),
(5, 5, 1, 'sản phẩm trung quốc bán giá trên trời', 2, '2020-03-05 08:14:32', '2020-03-05 08:14:32'),
(6, 5, 1, 'sản phẩm trung quốc bán giá trên trời', 2, '2020-03-05 08:14:44', '2020-03-05 08:14:44'),
(7, 6, 4, 'Sản phẩm khá tốt', 2, '2020-03-06 06:42:24', '2020-03-06 06:42:24'),
(8, 6, 4, 'Sản phẩm khá tốt', 2, '2020-03-06 06:42:25', '2020-03-06 06:42:25'),
(9, 6, 4, 'Sản phẩm khá tốt', 2, '2020-03-06 06:42:25', '2020-03-06 06:42:25'),
(10, 6, 4, 'Sản phẩm khá tốt', 2, '2020-03-06 06:42:26', '2020-03-06 06:42:26'),
(11, 6, 4, 'Sản phẩm khá tốt', 2, '2020-03-06 06:42:26', '2020-03-06 06:42:26'),
(12, 6, 4, 'Sản phẩm khá tốt', 2, '2020-03-06 06:42:26', '2020-03-06 06:42:26'),
(13, 6, 4, 'Sản phẩm khá tốt', 2, '2020-03-06 06:42:26', '2020-03-06 06:42:26'),
(14, 6, 4, 'Sản phẩm khá tốt', 2, '2020-03-06 06:42:26', '2020-03-06 06:42:26'),
(15, 6, 4, 'Sản phẩm khá tốt', 2, '2020-03-06 06:42:39', '2020-03-06 06:42:39'),
(16, 6, 4, 'Sản phẩm khá tốt', 2, '2020-03-06 06:42:39', '2020-03-06 06:42:39'),
(17, 6, 4, 'Sản phẩm khá tốt', 2, '2020-03-06 06:42:39', '2020-03-06 06:42:39'),
(18, 6, 4, 'Sản phẩm khá tốt', 2, '2020-03-06 06:42:40', '2020-03-06 06:42:40'),
(19, 6, 4, 'Sản phẩm khá tốt', 2, '2020-03-06 06:42:40', '2020-03-06 06:42:40'),
(20, 6, 4, 'Sản phẩm khá tốt', 2, '2020-03-06 06:42:40', '2020-03-06 06:42:40'),
(25, 7, 4, 'ĐÃ MUA HÀNG', 2, '2020-03-11 06:49:22', '2020-03-11 06:49:22'),
(26, 5, 3, 'ĐÃ MUA HÀNG', 2, '2020-03-11 06:50:02', '2020-03-11 06:50:02'),
(27, 5, 4, 'adasdasd', 2, '2020-03-11 06:51:47', '2020-03-11 06:51:47'),
(28, 5, 4, 'adasdasd', 2, '2020-03-11 06:51:48', '2020-03-11 06:51:48'),
(29, 5, 4, 'adasdasd', 2, '2020-03-11 06:51:49', '2020-03-11 06:51:49'),
(30, 5, 4, 'adasdasd', 2, '2020-03-11 06:51:49', '2020-03-11 06:51:49'),
(31, 5, 4, 'adasdasd', 2, '2020-03-11 06:51:49', '2020-03-11 06:51:49'),
(32, 5, 4, 'adasdasd', 2, '2020-03-11 06:51:49', '2020-03-11 06:51:49'),
(33, 5, 4, 'adasdasd', 2, '2020-03-11 06:51:50', '2020-03-11 06:51:50'),
(34, 5, 4, 'adasdasd', 2, '2020-03-11 06:51:50', '2020-03-11 06:51:50'),
(35, 5, 4, 'adasdasd', 2, '2020-03-11 06:51:50', '2020-03-11 06:51:50'),
(36, 5, 4, 'adasdasd', 2, '2020-03-11 06:51:50', '2020-03-11 06:51:50'),
(37, 6, 1, 'quá tệ', 2, '2020-03-15 12:01:59', '2020-03-15 12:01:59'),
(38, 6, 1, 'quá tệ', 2, '2020-03-15 12:02:01', '2020-03-15 12:02:01'),
(39, 5, 1, 'hello', 2, '2020-03-15 13:15:22', '2020-03-15 13:15:22'),
(40, 5, 1, 'hello', 2, '2020-03-15 13:15:22', '2020-03-15 13:15:22'),
(41, 5, 1, 'hello', 2, '2020-03-15 13:15:22', '2020-03-15 13:15:22'),
(42, 5, 1, 'hello', 2, '2020-03-15 13:15:22', '2020-03-15 13:15:22'),
(43, 5, 1, 'hello', 2, '2020-03-15 13:15:22', '2020-03-15 13:15:22'),
(44, 5, 1, 'hello', 2, '2020-03-15 13:15:23', '2020-03-15 13:15:23'),
(45, 5, 1, 'hello', 2, '2020-03-15 13:15:23', '2020-03-15 13:15:23'),
(46, 5, 1, 'hello', 2, '2020-03-15 13:15:23', '2020-03-15 13:15:23'),
(47, 5, 1, 'hello', 2, '2020-03-15 13:15:23', '2020-03-15 13:15:23'),
(48, 5, 1, 'hello', 2, '2020-03-15 13:15:24', '2020-03-15 13:15:24');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `transactions`
--

CREATE TABLE `transactions` (
  `id` int(10) UNSIGNED NOT NULL,
  `tr_user_id` int(10) UNSIGNED NOT NULL DEFAULT 0,
  `tr_total` int(11) NOT NULL DEFAULT 0,
  `tr_note` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tr_address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tr_phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tr_status` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `transactions`
--

INSERT INTO `transactions` (`id`, `tr_user_id`, `tr_total`, `tr_note`, `tr_address`, `tr_phone`, `tr_status`, `created_at`, `updated_at`) VALUES
(3, 2, 18490000, NULL, 'xả hàm chính huyện hàm thuận bắc tỉnh bình thuận', '0936353434', 1, NULL, '2020-03-11 08:46:39'),
(4, 5, 55470000, NULL, 'xả hàm chính huyện hàm thuận bắc tỉnh bình thuận', '31231231', 1, '2020-03-04 07:22:03', '2020-03-14 12:24:47'),
(5, 2, 36980000, 'gửi lẹ nhé', 'xả hàm chính huyện hàm thuận bắc tỉnh bình thuận', '0936353434', 1, '2020-03-11 08:09:01', '2020-03-14 13:30:23'),
(6, 2, 36980000, NULL, 'xả hàm chính huyện hàm thuận bắc tỉnh bình thuận', '0936353434', 1, '2020-03-14 13:30:11', '2020-03-14 13:30:25'),
(7, 2, 18490000, NULL, 'xả hàm chính huyện hàm thuận bắc tỉnh bình thuận', '0936353434', 1, '2020-03-14 13:49:55', '2020-03-14 13:50:07');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` char(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `avatar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `active` tinyint(4) NOT NULL DEFAULT 1,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `total_pay` int(11) NOT NULL DEFAULT 0,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `about` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `time_code` timestamp NULL DEFAULT NULL,
  `code_active` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `time_active` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `phone`, `avatar`, `active`, `password`, `remember_token`, `created_at`, `updated_at`, `total_pay`, `address`, `about`, `code`, `time_code`, `code_active`, `time_active`) VALUES
(2, 'quang', 'neuem113@gmail.com', '0936353434', NULL, 1, '$2y$10$9OCF/e46Uj7EzSz9vYBim.nP/EnleGHWZPoX6ZyBYrpiMmAfOrDPy', NULL, '2020-03-03 03:36:01', '2020-03-22 17:57:06', 4, 'adasda', 'asdas', '$2y$10$h7fGj5kPsCKPqui381bcCu04BXxSfNGn7b42RRXBE6LmXWwyODZLW', '2020-03-22 17:56:04', NULL, NULL),
(3, 'nguyễn văn thành', 'thanh@gmail.com', '031232', NULL, 1, '$2y$10$o4cZ40svRw8SGxKWPKoZ4OAYjMGkRegIc2btVMzKVIikSfX4CBtd2', NULL, '2020-03-03 05:15:17', '2020-03-03 05:15:17', 0, NULL, NULL, NULL, NULL, NULL, NULL),
(5, 'quang03', 'thanh123@gmail.com', '31231231', NULL, 1, '$2y$10$lgwmEs66.W9u5Fv3UNLLMeDPviJ6KWHQpYGp.VQ829xK4D6tV4n5W', NULL, '2020-03-04 07:21:10', '2020-03-04 07:21:10', 1, NULL, NULL, NULL, NULL, NULL, NULL),
(8, 'nguyễn hữu quang', 'nickgyail03@gmail.com', '3424234234234', NULL, 2, '$2y$10$tHAe76KQaFYsrJnYPwK3cuq7oZjkLvU.PhE5XFhif5M5WSW/cjSiW', NULL, '2020-03-22 18:39:22', '2020-03-22 18:39:48', 0, NULL, NULL, NULL, NULL, '$2y$10$.36tiRRO8Ih2IQ2J3PHvYO18Yo4E3Og7sw5T4OURNa9Ls7KXSpKcm', '2020-03-22 18:39:22');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admin_email_unique` (`email`),
  ADD KEY `admin_active_index` (`active`);

--
-- Chỉ mục cho bảng `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `article_a_name_unique` (`a_name`),
  ADD KEY `article_a_slug_index` (`a_slug`),
  ADD KEY `article_a_active_index` (`a_active`),
  ADD KEY `article_a_author_id_index` (`a_author_id`),
  ADD KEY `article_a_hot_index` (`a_hot`);

--
-- Chỉ mục cho bảng `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `catrgories`
--
ALTER TABLE `catrgories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `catrgories_c_name_unique` (`c_name`),
  ADD KEY `catrgories_c_slug_index` (`c_slug`),
  ADD KEY `catrgories_c_active_index` (`c_active`),
  ADD KEY `catrgories_c_home_index` (`c_home`);

--
-- Chỉ mục cho bảng `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `orders_or_transaction_id_index` (`or_transaction_id`),
  ADD KEY `orders_or_product_id_index` (`or_product_id`);

--
-- Chỉ mục cho bảng `page_statics`
--
ALTER TABLE `page_statics`
  ADD PRIMARY KEY (`id`),
  ADD KEY `page_statics_ps_type_index` (`ps_type`);

--
-- Chỉ mục cho bảng `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Chỉ mục cho bảng `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `products_pro_category_id_index` (`pro_category_id`),
  ADD KEY `products_pro_active_index` (`pro_active`),
  ADD KEY `products_pro_author_id_index` (`pro_author_id`);

--
-- Chỉ mục cho bảng `ratings`
--
ALTER TABLE `ratings`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ratings_ra_product_id_index` (`ra_product_id`);

--
-- Chỉ mục cho bảng `transactions`
--
ALTER TABLE `transactions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `transactions_tr_status_index` (`tr_status`),
  ADD KEY `user_id` (`tr_user_id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `users_active_index` (`active`),
  ADD KEY `users_code_index` (`code`),
  ADD KEY `users_code_active_index` (`code_active`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `article`
--
ALTER TABLE `article`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `catrgories`
--
ALTER TABLE `catrgories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT cho bảng `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `messages`
--
ALTER TABLE `messages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT cho bảng `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT cho bảng `page_statics`
--
ALTER TABLE `page_statics`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `ratings`
--
ALTER TABLE `ratings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT cho bảng `transactions`
--
ALTER TABLE `transactions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `product_id` FOREIGN KEY (`or_product_id`) REFERENCES `products` (`id`),
  ADD CONSTRAINT `trangsaction_id` FOREIGN KEY (`or_transaction_id`) REFERENCES `transactions` (`id`);

--
-- Các ràng buộc cho bảng `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_pro_category_id_foreign` FOREIGN KEY (`pro_category_id`) REFERENCES `catrgories` (`id`);

--
-- Các ràng buộc cho bảng `transactions`
--
ALTER TABLE `transactions`
  ADD CONSTRAINT `user_id` FOREIGN KEY (`tr_user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
