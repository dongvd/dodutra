/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50532
Source Host           : localhost:3306
Source Database       : thietbiso

Target Server Type    : MYSQL
Target Server Version : 50532
File Encoding         : 65001

Date: 2015-06-13 16:05:06
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for categories
-- ----------------------------
DROP TABLE IF EXISTS `categories`;
CREATE TABLE `categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `CategoryName` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of categories
-- ----------------------------
INSERT INTO `categories` VALUES ('1', 'Thiết bị di động');
INSERT INTO `categories` VALUES ('2', 'Máy tính bảng');
INSERT INTO `categories` VALUES ('3', 'Laptop');
INSERT INTO `categories` VALUES ('4', 'Phụ kiện');

-- ----------------------------
-- Table structure for contact
-- ----------------------------
DROP TABLE IF EXISTS `contact`;
CREATE TABLE `contact` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `NameUserPost` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Phone` varchar(11) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Address` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Content` text COLLATE utf8_unicode_ci,
  `DatePost` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of contact
-- ----------------------------

-- ----------------------------
-- Table structure for invoice
-- ----------------------------
DROP TABLE IF EXISTS `invoice`;
CREATE TABLE `invoice` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Name_Customer` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Address` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Phone` varchar(11) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Order_id` int(11) DEFAULT NULL,
  `Quantify` int(11) DEFAULT NULL,
  `Total` int(11) DEFAULT NULL COMMENT 'Tổng tiền',
  `DateBuy` datetime DEFAULT NULL,
  `Status` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Tình trạng thanh toán',
  `Created` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of invoice
-- ----------------------------

-- ----------------------------
-- Table structure for order
-- ----------------------------
DROP TABLE IF EXISTS `order`;
CREATE TABLE `order` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `User_id` int(11) NOT NULL,
  `DateOrder` datetime NOT NULL,
  `Status` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of order
-- ----------------------------

-- ----------------------------
-- Table structure for order_detail
-- ----------------------------
DROP TABLE IF EXISTS `order_detail`;
CREATE TABLE `order_detail` (
  `id` int(11) NOT NULL DEFAULT '0',
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `Quantity` int(5) NOT NULL,
  `Total` int(5) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of order_detail
-- ----------------------------

-- ----------------------------
-- Table structure for products
-- ----------------------------
DROP TABLE IF EXISTS `products`;
CREATE TABLE `products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ProductName` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `CategoryId` int(11) DEFAULT NULL,
  `Quantify` int(11) DEFAULT NULL,
  `Description` text COLLATE utf8_unicode_ci NOT NULL,
  `Image` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Status` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Supplier_id` int(11) DEFAULT NULL,
  `Price` int(11) DEFAULT NULL,
  `Ram` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `OS` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `CPU` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Screen` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Camera` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Memory` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Pin` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Info_Other` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Guaranty` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of products
-- ----------------------------
INSERT INTO `products` VALUES ('1', 'iphone 5s 32gb', '1', '10', '', null, null, '1', '10000000', '1 GB', ' 	iOS 7.0', 'Apple A7, 2 nhân, 1.3 GHz', 'DVGA, 4.0\", 640 x 1136 pixels', 'Camera chính: 8.0 MP, Quay phim FullHD 1080p@30fps ; Camera phụ: 1.2 MP ', 'Bộ nhớ trong: 32 GB', '1560 mAh', 'Ngôn ngữ: tiếng việt, tiếng anh', '36');
INSERT INTO `products` VALUES ('2', 'iphone 5s 64gb', '1', '10', '', null, null, '1', '12000000', '1 GB', 'iOS 7.0', ' 	Apple A7, 2 nhân, 1.3 GHz', 'DVGA, 4.0\", 640 x 1136 pixels', 'Camera chính:  	8.0 MP, Quay phim FullHD 1080p@30fps ; Camera phụ : 1.2MP;', 'Bộ nhớ trong: 64GB', 'Dung lượng pin : 1560 mAh', 'Ngôn ngữ: tiếng việt, tiếng anh', '36');
INSERT INTO `products` VALUES ('3', 'iphone 4s 8gb', '1', '10', 'Được thiết kế không khác gì mấy so với người anh em tiền nhiệm iPhone 4, iPhone 4S với những nâng cấp đáng giá như CPU A5 mạnh mẽ hơn, camera 8.0 MP sắc nét hơn, hệ thống ăng ten được cải tiến cùng cô nàng trợ lý ảo Siri cực kỳ thông minh và hữu ích trên nền tảng iOS.', null, null, '1', '8000000', '', '', '', '', '', '', '', '', '36');
INSERT INTO `products` VALUES ('4', 'Samsung Galaxy Trend Lite S7392', '1', '10', '', null, null, '2', '2200000', '512 MB', 'Android 4.1.2 (Jelly Bean)', 'Qualcomm MSM7227, 1 nhân, 1 GHz', 'WVGA, 4.0\", 480 x 800 pixels', 'Camera chính:3.0 MP, Quay phim VGA ; ', 'Bộ nhớ trong:4 GB', 'Dung lượng pin:1500 mAh', '', '36');
INSERT INTO `products` VALUES ('5', 'Samsung Galaxy Grand 2 G7102', '1', '10', '', null, null, '2', '2000000', '1.5 GB', 'Android 4.3 (Jelly Bean)', 'Qualcomm Snapdragon 400, 4 nhân, 1.2 GHz', 'HD, 5.25\", 720 x 1280 pixels', 'Camera chính:8.0 MP, Quay phim FullHD 1080p@30fps;  Camera phụ:1.9 MP ', 'Bộ nhớ trong:8 GB', 'Dung lượng pin:2600 mAh', '', '36');
INSERT INTO `products` VALUES ('6', 'Nokia E7', '1', '10', '', null, null, '3', '1500000', ' 	256 MB, ROM 1 GB', 'Symbian ^3', 'ARM 11 680 MHz processor', 'Loại màn hình: AMOLED 16 triệu màu ; Độ phân giải: 360 x 640 pixels; Kích thước :  	4.0 inches; ', '8 MP với Flash kép', 'Bộ nhớ trong:  16 GB', '	1200 mAh ', '', '36');
INSERT INTO `products` VALUES ('7', 'Nokia C7', '1', '10', '', null, null, '3', '1250000', ' 	256 MB', 'Symbian', 'ARM 11 680 MHz processor', 'Loại màn hình: AMOLED 16 triệu màu; Độ phân giải: \r\n360 x 640 pixels ;  Kích thước\r\n: 3.5 inches', 'Máy ảnh 8 MP với Flash kép', ' 	Bộ nhớ trong : 8 GB', ' 	Loại pin : Pin Nokia BL-5K; Dung lượng pin\r\n: 1200 mAh ', '', '36');
INSERT INTO `products` VALUES ('8', 'iPad 2 Wifi 3G 64GB', '2', '10', '', null, null, '4', '11000000', '', 'iOS', 'Apple Dual-core processor A5', '9.7 inch TFT LCD. Cảm ứng', 'Camera phụ : 0.3 MP', 'Bộ nhớ trong: 64 GB', 'Pin Lithium Polymer, thời gian sử dụng: 10 giờ', 'Ngôn ngữ tiếng anh', '36');
INSERT INTO `products` VALUES ('9', 'iPad 2 Wifi 64GB ', '2', '10', '', null, null, '4', '12500000', '', 'iOS', 'Apple Dual-core processor A5', '9.7 inch TFT LCD. Cảm ứng: Đa điểm', 'Camera phụ : 0.3 MP', 'Bộ nhớ trong: 64 GB', 'Pin Lithium Polymer', 'Ngôn ngữ tiếng anh', '36');
INSERT INTO `products` VALUES ('10', 'Samsung Galaxy Tab 8.9 3G', '2', '10', '', null, null, '2', '8000000', '', 'Android 3.0 (Honeycomb)', 'Dual-core, tốc độ xử lý 1 Ghz', ' 	Loại:  TFT LCD;  Kích thước\r\n: 8.9 inch; Cảm ứng\r\n: Đa điểm; ', ' 	Camera chính : 3 MP;  Camera phụ\r\n: 2 MP', 'Bộ nhớ máy tuỳ chọn 16/32/64 GB', 'Loại pin:  	Pin Lithium Polymer', '', '36');
INSERT INTO `products` VALUES ('11', 'Samsung P7100 Galaxy Tab 10.1', '2', '10', '', null, null, '2', '9000000', '', '', '', '', '', '', '', '', null);

-- ----------------------------
-- Table structure for suppliers
-- ----------------------------
DROP TABLE IF EXISTS `suppliers`;
CREATE TABLE `suppliers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `SupplierName` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of suppliers
-- ----------------------------
INSERT INTO `suppliers` VALUES ('0', 'Lenovo');
INSERT INTO `suppliers` VALUES ('1', 'Iphone');
INSERT INTO `suppliers` VALUES ('2', 'Samsung');
INSERT INTO `suppliers` VALUES ('4', 'Ipad');
INSERT INTO `suppliers` VALUES ('5', 'Lenovo');
INSERT INTO `suppliers` VALUES ('6', 'Acer');
INSERT INTO `suppliers` VALUES ('7', 'Vaio');
INSERT INTO `suppliers` VALUES ('8', 'Phụ kiện điện thoại');
INSERT INTO `suppliers` VALUES ('9', 'Phụ kiện máy tính');

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Password` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `FirstName` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `LastName` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Phone` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Address` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Authorities` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of users
-- ----------------------------
