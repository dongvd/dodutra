/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50532
Source Host           : localhost:3306
Source Database       : thietbiso

Target Server Type    : MYSQL
Target Server Version : 50532
File Encoding         : 65001

Date: 2015-08-03 11:09:54
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
-- Table structure for contacts
-- ----------------------------
DROP TABLE IF EXISTS `contacts`;
CREATE TABLE `contacts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `NameUserPost` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Phone` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `Address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Content` text COLLATE utf8_unicode_ci NOT NULL,
  `DatePost` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of contacts
-- ----------------------------
INSERT INTO `contacts` VALUES ('7', 'Trang', 'trangkieu3041994@gmail.com', '0989654543', 'ha noi', 'day la tieu de cua email', 'sadsd', '2015-06-21 05:47:43');
INSERT INTO `contacts` VALUES ('8', '', '', '', '', '', '', '2015-07-07 16:30:23');

-- ----------------------------
-- Table structure for log
-- ----------------------------
DROP TABLE IF EXISTS `log`;
CREATE TABLE `log` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `Action` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `DateAct` datetime NOT NULL,
  `Link` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of log
-- ----------------------------

-- ----------------------------
-- Table structure for orders
-- ----------------------------
DROP TABLE IF EXISTS `orders`;
CREATE TABLE `orders` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `User_id` int(11) NOT NULL,
  `DateOrder` datetime NOT NULL,
  `Status` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Total_order` int(11) NOT NULL COMMENT 'tổng tiền của đơn đặt hàng',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=58 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of orders
-- ----------------------------
INSERT INTO `orders` VALUES ('55', '1', '2015-07-23 17:11:51', 'Chua thanh toan', '103200000');
INSERT INTO `orders` VALUES ('56', '1', '2015-07-23 17:12:22', 'Chua thanh toan', '103200000');
INSERT INTO `orders` VALUES ('57', '1', '2015-07-23 17:12:43', 'Chua thanh toan', '103200000');

-- ----------------------------
-- Table structure for order_detail
-- ----------------------------
DROP TABLE IF EXISTS `order_detail`;
CREATE TABLE `order_detail` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `Quantity` int(5) NOT NULL,
  `Total_product` int(5) NOT NULL COMMENT 'tổng tiền của mỗi sản phẩm',
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
  `ProductName` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `categories_id` int(11) NOT NULL,
  `Quantify` int(11) NOT NULL,
  `Description` text COLLATE utf8_unicode_ci,
  `Image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Status` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `suppliers_id` int(11) NOT NULL,
  `Price` int(11) NOT NULL,
  `Ram` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `OS` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `CPU` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Screen` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Camera` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Memory` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Pin` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Info_Other` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Guaranty` int(11) NOT NULL,
  `Created` date NOT NULL,
  `SaleOff` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Info_SaleOff` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=124 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of products
-- ----------------------------
INSERT INTO `products` VALUES ('1', 'iphone 5s 32gb', '1', '10', '', 'Thumbnail.jpg', null, '1', '10000000', '1', ' 	iOS 7.0', 'Apple A7, 2 nhân, 1.3 GHz', '4.0', 'Camera chính: 8.0 MP, Quay phim FullHD 1080p@30fps ; Camera phụ: 1.2 MP ', 'Bộ nhớ trong: 32 GB', '1560', 'Ngôn ngữ: tiếng việt, tiếng anh', '36', '2015-06-01', null, null);
INSERT INTO `products` VALUES ('2', 'iphone 5s 64gb', '1', '10', '', '3329182i.220.132.jpg', null, '1', '12000000', '1', 'iOS 7.0', ' 	Apple A7, 2 nhân, 1.3 GHz', '4.0', 'Camera chính:  	8.0 MP, Quay phim FullHD 1080p@30fps ; Camera phụ : 1.2MP;', 'Bộ nhớ trong: 64GB', ' 1560', 'Ngôn ngữ: tiếng việt, tiếng anh', '36', '2015-06-01', null, null);
INSERT INTO `products` VALUES ('3', 'iphone 4s 8gb', '1', '10', 'Được thiết kế không khác gì mấy so với người anh em tiền nhiệm iPhone 4, iPhone 4S với những nâng cấp đáng giá như CPU A5 mạnh mẽ hơn, camera 8.0 MP sắc nét hơn, hệ thống ăng ten được cải tiến cùng cô nàng trợ lý ảo Siri cực kỳ thông minh và hữu ích trên nền tảng iOS.', 'Thumbnail (1).jpg', null, '1', '8000000', '0.512', 'iOS 8.0', 'Apple A5, 2 nhân, 1 GHz', '3.5', 'Camera chính: 8.0 MP, Quay phim FullHD 1080p@30fps ; Camera phụ: VGA (0.3 Mpx)', 'Bộ nhớ trong: 8GB', '1420', '', '36', '2015-06-01', null, null);
INSERT INTO `products` VALUES ('4', 'Galaxy Trend Lite S7392', '1', '10', '', '4344359samsung5.jpg', null, '2', '2200000', '0.512', 'Android 4.1.2 (Jelly Bean)', 'Qualcomm MSM7227, 1 nhân, 1 GHz', '4.0', 'Camera chính:3.0 MP, Quay phim VGA ; ', 'Bộ nhớ trong:4 GB', '1500', '', '36', '2015-06-01', null, null);
INSERT INTO `products` VALUES ('5', 'SS Galaxy Grand 2', '1', '10', '', '59383621.jpg', null, '2', '2000000', '1.5', 'Android 4.3 (Jelly Bean)', 'Qualcomm Snapdragon 400, 4 nhân, 1.2 GHz', '5.25', 'Camera chính:8.0 MP, Quay phim FullHD 1080p@30fps;  Camera phụ:1.9 MP ', 'Bộ nhớ trong:8 GB', '2600', '', '36', '2015-06-01', null, null);
INSERT INTO `products` VALUES ('6', 'Nokia E7', '1', '10', '', '33541861.jpg', null, '3', '1500000', '0.256', 'Symbian ^3', 'ARM 11 680 MHz processor', '4.0', '8 MP với Flash kép', 'Bộ nhớ trong:  16 GB', '1200', '', '36', '2015-06-01', null, null);
INSERT INTO `products` VALUES ('7', 'Nokia C7', '1', '10', '', '38435221.jpg', null, '3', '1250000', '0.256', 'Symbian', 'ARM 11 680 MHz processor', '3.5', 'Máy ảnh 8 MP với Flash kép', ' 	Bộ nhớ trong : 8 GB', '1200', '', '36', '2015-06-01', null, null);
INSERT INTO `products` VALUES ('8', 'iPad 2 Wifi 3G 64GB', '2', '10', '', '3153131apple-ipad-2-wifi-450-1.220.132.jpg', null, '4', '11000000', '2', 'iOS', 'Apple Dual-core processor A5', '9.7', 'Camera phụ : 0.3 MP', 'Bộ nhớ trong: 64 GB', '1200', 'Ngôn ngữ tiếng anh', '36', '2015-06-02', null, null);
INSERT INTO `products` VALUES ('9', 'iPad 2 Wifi 64GB ', '2', '10', '', '2818678apple-ipad-2-wifi-450-2.220.132.jpg', null, '4', '12500000', '2', 'iOS', 'Apple Dual-core processor A5', '9.7', 'Camera phụ : 0.3 MP', 'Bộ nhớ trong: 64 GB', '1200', 'Ngôn ngữ tiếng anh', '36', '2015-06-02', null, null);
INSERT INTO `products` VALUES ('10', 'Galaxy Tab 8.9 3G', '2', '10', '', '17051331.220.132.jpg', null, '2', '8000000', '1', 'Android 3.0 (Honeycomb)', 'Dual-core, tốc độ xử lý 1 Ghz', '8.9', 'Camera chính : 3 MP;  Camera phụ\r\n: 2 MP', 'Bộ nhớ máy tuỳ chọn 16/32/64 GB', '1200', '', '36', '2015-06-02', null, null);
INSERT INTO `products` VALUES ('11', 'P7100 Galaxy Tab 10.1', '2', '10', '', '4716053P7100_1.220.132.jpg', null, '2', '9000000', '2', 'Android 3.0', 'Dual-core 1 GHz Cortex-A9', '10.1', 'Camera chính : 8 MP, 3264 x 2448 pixels, autofocus, LED flash', 'Bộ nhớ máy tuỳ chọn 16/32 GB', '6860', '', '36', '2015-06-02', null, null);
INSERT INTO `products` VALUES ('12', 'Sony Xperia C4 Dual', '1', '15', null, 'sony-xperia-c4-dual-detail-400x500.png', null, '8', '7600000', '2', 'Android 5.0 (Lollipop)', 'MTK 6752, 8 nhân, 1.7 GHz', '5.5', 'Camera chính : 13 MP, Quay phim FullHD 1080p@30fps', 'Bộ nhớ trong: 16 GB', '2600', null, '36', '2015-06-02', null, null);
INSERT INTO `products` VALUES ('13', 'Sony Xperia M4 Aqua', '1', '24', null, 'sony-xperia-m4-aqua-dual-sim-400x534.png', null, '8', '6490000', '2', 'Android 5.0 (Lollipop)', 'Snapdragon 615, 8 nhân, Quad-core 1.5GHz + Quad-core 1.0GHz', '5', 'Camera chính : 13 MP, Quay phim FullHD 1080p@30fps', 'Bộ nhớ trong: 8 GB', '2400', null, '36', '2015-06-02', null, null);
INSERT INTO `products` VALUES ('14', 'Nokia Lumia 930', '1', '30', null, 'nokia-lumia-930-lumia-icon-png.png', null, '3', '10990000', '2', 'Windows Phone 8.1', 'Qualcomm Snapdragon 800, 4 nhân, 2.2 GHz', '5', 'Camera chính : 20 MP, Quay phim FullHD 1080p@30fps', 'Bộ nhớ trong: 32 GB', '2420', null, '36', '2015-06-02', null, null);
INSERT INTO `products` VALUES ('15', 'Nokia Lumia 640 XL', '1', '15', null, 'microsoft-lumia-640-xl-game-400x533.png', null, '3', '4590000', '1', 'Windows Phone 8.1', 'Qualcomm Snapdragon 400, 4 nhân, 1.2 GHz', '5.7', 'Camera chính : 13 MP, Quay phim FullHD 1080p@30fps', 'Bộ nhớ trong: 8 GB', '3000', null, '36', '2015-06-02', null, null);
INSERT INTO `products` VALUES ('16', 'Nokia X2', '1', '23', null, 'nokia-x2.png', null, '3', '1990000', '1', 'Nokia X flatform 2.0 (Android 4.3)', 'Qualcomm Snapdragon 200, 2 nhân, 1.2 GHz', '4.3', 'Camera chính: 5.0 MP, Quay phim HD 720p', 'Bộ nhớ trong: 4 GB', '1800', null, '36', '2015-06-02', null, null);
INSERT INTO `products` VALUES ('17', 'LG Magna', '1', '25', null, 'lg-magna-533-400x533.png', null, '9', '3990000', '1', 'Android 5.0 (Lollipop)', 'MTK 6582, 4 nhân, 1.3 GHz', '5', 'Camera chính: 8.0 MP', 'Bộ nhớ trong: 8 GB', '2540', null, '36', '2015-06-02', null, null);
INSERT INTO `products` VALUES ('18', 'LG L Fino (L70 Plus)', '1', '12', null, 'lg-l-fino.png', null, '9', '2490000', '1', 'Android 4.4 (KitKat)', 'Qualcomm Snapdragon 200, 4 nhân, 1.2 GHz', '4.5', 'Camera chính: 8.0 MP', 'Bộ nhớ trong: 4 GB', '1900', null, '36', '2015-06-02', null, null);
INSERT INTO `products` VALUES ('19', 'LG L70 Dual D325', '1', '21', null, 'lg-l70-dual.png', null, '9', '2690000', '1', 'Android 4.4 (KitKat)', 'Qualcomm Snapdragon 200, 4 nhân, 1.2 GHz', '4.5', 'Camera chính: 5.0 MP', 'Bộ nhớ trong: 4 GB', '2100', null, '36', '2015-06-02', null, null);
INSERT INTO `products` VALUES ('20', 'LG L60', '1', '16', null, 'lg-l60-dual-sim.png', null, '9', '2090000', '1', 'Android 4.4 (KitKat)', 'MTK 6572, 2 nhân, 1.3 GHz', '4.3', 'Camera chính: 5.0 MP, Quay phim 480p@30fps', 'Bộ nhớ trong: 4 GB', '1540', null, '36', '2015-06-02', null, null);
INSERT INTO `products` VALUES ('21', 'LG G4 Metallic/Ceramic', '1', '23', null, 'lg-g4-metalic-ceramic2-400x534 (1).png', null, '9', '2990000', '1', 'Android 4.4 (KitKat)', 'Qualcomm Snapdragon 200, 4 nhân, 1.2 GHz', '5', 'Camera chính: 5.0 MP', 'Bộ nhớ trong: 4 GB', '2540', null, '36', '2015-06-02', null, null);
INSERT INTO `products` VALUES ('22', 'HTC Desire 826', '1', '15', null, 'htc-desire-826-400-533-400x533.png', null, '10', '8690000', '2', 'Android 5.0 (Lollipop)', 'Snapdragon 615, 8 nhân, 4 nhân 1.7 GHz Cortex-A53 & 4 nhân 1.0 GHz Cortex-A53', '5.5', 'Camera chính: 13 MP, Quay phim FullHD 1080p@30fps; Camera phụ: 4 Ultra pixel', 'Bộ nhớ trong: 16 GB', '2600', null, '36', '2015-06-02', null, null);
INSERT INTO `products` VALUES ('23', 'HTC Desire 820Q', '1', '18', null, 'htc-desire-820q-1-400x533.png', null, '10', '6390000', '1', 'Android 4.4 (KitKat)', 'Qualcomm Snapdragon 410, 4 nhân, 1.2 GHz', '5.5', 'Camera chính: 13 MP, Quay phim FullHD 1080p@30fps', 'Bộ nhớ trong: 16 GB', '2600', null, '36', '2015-06-02', null, null);
INSERT INTO `products` VALUES ('24', 'HTC Desire 816G', '1', '25', null, 'htc-desire-816g-400x533.png', null, '10', '6090000', '1', 'Android 4.4 (KitKat)', 'MT6592, 8 nhân, 1.7 GHz', '5.5', 'Camera chính: 13 MP, Quay phim FullHD 1080p@30fps', 'Bộ nhớ trong: 8 GB', '2600', null, '36', '2015-06-02', null, null);
INSERT INTO `products` VALUES ('25', 'HTC Desire 626G', '1', '30', null, 'htc-desire-626g-1-400x533.png', null, '10', '5390000', '1', 'Android 4.4 (KitKat)', 'MT6592, 8 nhân, 1.7 GHz', '5', 'Camera chính: 13 MP, Quay phim FullHD 1080p@30fps', 'Bộ nhớ trong: 8 GB', '2000', null, '36', '2015-06-02', null, null);
INSERT INTO `products` VALUES ('26', 'HTC Desire 320', '1', '25', null, 'htc-desire-320-icon-400x400.png', null, '10', '2390000', '1', 'TFT, 4.5\", 480 x 854 Pixels', '4 nhân, Quad-core 1.3 GHz', '4.5', 'Camera chính: 5 MP, Quay phim FullHD 1080p@30fps', 'Bộ nhớ trong: 8 GB', '2100', null, '36', '2015-06-02', null, null);
INSERT INTO `products` VALUES ('27', 'HTC Desire Eye', '1', '37', null, 'htc-desire-eye-icon.png', null, '10', '9990000', '2', 'Android 4.4 (KitKat)', 'Qualcomm Snapdragon 801, 4 nhân, 2.26 GHz', '5.2', 'Camera chính: 13 MP, Quay phim FullHD 1080p@30fps', 'Bộ nhớ trong: 16 GB', '2400', null, '36', '2015-06-02', null, null);
INSERT INTO `products` VALUES ('28', 'HTC One E8 Dual', '1', '20', null, 'htc-one-e8-dual-2-400x533.png', null, '10', '6590000', '2', 'Android 4.4 (KitKat)', 'Qualcomm Snapdragon 801, 4 nhân, 2.5 GHz', '5', 'Camera chính: 13 MP, Quay phim FullHD 1080p@30fps; Camera phụ: 5 MP', 'Bộ nhớ trong: 16 GB', '2600', null, '36', '2015-06-02', null, null);
INSERT INTO `products` VALUES ('29', 'HTC DESIRE 616', '1', '40', null, 'htc-desire-616-1-400x533.png', null, '10', '3990000', '1', 'Android 4.2 (Jelly Bean)', 'MT6592, 8 nhân, 1.4 GHz', '5', 'Camera chính: 8 MP, Quay phim FullHD 1080p@30fps; Camera phụ: 2 MP', 'Bộ nhớ trong: 4 GB', '2000', null, '36', '2015-06-02', null, null);
INSERT INTO `products` VALUES ('30', 'HTC Desire 326G', '1', '10', null, 'htc-desire-326g-400x533.png', null, '10', '2690000', '1', 'Android 4.4 (KitKat)', 'Spreadtrum, 4 nhân, 1.2 GHz', '4.5', 'Camera chính: 8.0 MP, Quay phim FullHD 1080p@30fps', 'Bộ nhớ trong: 8 GB', '2000', null, '36', '2015-06-02', null, null);
INSERT INTO `products` VALUES ('31', 'iPhone 6 Plus 64GB', '1', '30', null, 'iphone-6-plus-64gb-128gb-copy.png', null, '1', '22190000', '1', 'iOS 8.0', 'Apple A8, 2 nhân, 1.4 GHz', '5.5', 'Camera chính: 8 MP, Quay phim FullHD 1080p@30fps; Camera phụ: 1.2 MP', 'Bộ nhớ trong: 64 GB', '2915', null, '36', '2015-06-02', null, null);
INSERT INTO `products` VALUES ('32', 'iPhone 6 64GB', '1', '20', null, 'iphone-6-64gb.png', null, '1', '19590000', '1', 'iOS 8.0', 'Apple A8, 2 nhân, 1.4 GHz', '4.7', 'Camera chính: 8 MP, Quay phim FullHD 1080p@30fps; Camera phụ: 1.2 MP', 'Bộ nhớ trong: 64 GB', '1810', null, '36', '2015-06-02', null, null);
INSERT INTO `products` VALUES ('33', 'iPhone 5S 16GB', '1', '25', null, 'iphone-5s-16gb-1-400x533.png', null, '1', '12990000', '1', 'iOS 8.0', 'Apple A7, 2 nhân, 1.3 GHz', '4', 'Camera chính: 8 MP, Quay phim FullHD 1080p@30fps; Camera phụ: 1.2 MP', 'Bộ nhớ trong: 16 GB', '1560', null, '36', '2015-06-02', null, null);
INSERT INTO `products` VALUES ('34', 'Galaxy S6 32GB', '1', '12', null, 'samsung-galaxy-s6-edge-tra-gop-400x534.png', null, '2', '16590000', '3', 'Android 5.0 (Lollipop)', 'Exynos 7420, 8 nhân, 4x1.5GHz Cortex-A53 & 4x2.1 GHz Cortex-A57', '5.1', 'Camera chính: 16 MP, Quay phim 4K 2160p@30fps; Camera phụ: 5 MP', 'Bộ nhớ trong: 32 GB', '2550', null, '36', '2015-06-02', null, null);
INSERT INTO `products` VALUES ('35', 'Galaxy A7', '1', '20', null, 'samsung-galaxy-a7-icon-2-400x500.png', null, '2', '9990000', '2', 'Android 4.4 (KitKat)', 'Snapdragon 615, 8 nhân, Quad-core 1.5GHz + Quad-core 1.0GHz', '5.5', 'Camera chính: 13 MP, Quay phim FullHD 1080p@30fps', 'Bộ nhớ trong: 16 GB', '2600', null, '36', '2015-06-02', null, null);
INSERT INTO `products` VALUES ('36', 'Galaxy S6 Edge 64GB', '1', '30', null, 'samsung-galaxy-s6-edge-64gb-tra-gop-400x533.png', null, '2', '20990000', '3', 'Android 5.0 (Lollipop)', 'Exynos 7420, 8 nhân, 4x1.5GHz Cortex-A53 & 4x2.1 GHz Cortex-A57', '5.1', 'Camera chính: 16 MP, Quay phim 4K 2160p@30fps; Camera phụ: 5 MP', 'Bộ nhớ trong: 64 GB', '2600', null, '36', '2015-06-02', null, null);
INSERT INTO `products` VALUES ('37', 'Galaxy A5', '1', '20', null, 'samsung-galaxy-a500-400x533-400x533.png', null, '2', '7990000', '2', 'Android 4.4 (KitKat)', 'Qualcomm Snapdragon 410, 4 nhân, 1.2 GHz', '5', 'Camera chính: 13 MP, Quay phim FullHD 1080p@30fps;  Camera phụ: 5 MP', 'Bộ nhớ trong: 16 GB', '2300', null, '36', '2015-06-02', null, null);
INSERT INTO `products` VALUES ('38', 'Galaxy E5', '1', '10', null, 'samsung-galaxy-e5-400x533.png', null, '2', '4990000', '1.5', 'Android 4.4 (KitKat)', 'Qualcomm Snapdragon 410, 4 nhân, 1.2 GHz', '5', 'Camera chính: 13 MP, Quay phim FullHD 1080p@30fps;', 'Bộ nhớ trong: 16 GB', '2400', null, '36', '2015-06-02', null, null);
INSERT INTO `products` VALUES ('39', 'Galaxy Grand Prime G530', '1', '20', null, 'samsung-galaxy-grand-prime-g530-1-400x533.png', null, '2', '3790000', '1', 'Android 4.4 (KitKat)', 'Qualcomm Snapdragon 410, 4 nhân, 1.2 GHz', '5', 'Camera chính: 8 MP, Quay phim FullHD 1080p@30fps; Camera phụ: 5', 'Bộ nhớ trong:8 GB', '2600', null, '36', '2015-06-02', null, null);
INSERT INTO `products` VALUES ('40', 'Samsung Galaxy Core Prime', '1', '30', null, 'samsung-galaxy-core-prime-1-400x533.png', null, '2', '2990000', '1', 'Android 4.4 (KitKat)', 'Spreadtrum, 4 nhân, 1.2 GHz', '4.5', 'Camera chính: 5.0 MP, Quay phim HD 720p@30fps', 'Bộ nhớ trong:8 GB', '2000', null, '36', '2015-06-02', null, null);
INSERT INTO `products` VALUES ('41', 'Nokia 225', '1', '40', null, 'nokia-225.png', null, '3', '1300000', null, null, null, '2.8', 'Camera chính: 2 MP', '', '1200', null, '12', '2015-06-02', null, null);
INSERT INTO `products` VALUES ('42', 'Nokia Lumia 530', '1', '20', null, 'nokia-lumia-530.png', null, '3', '1990000', '0.512', 'Windows Phone 8.1', 'Qualcomm Snapdragon 200, 4 nhân, 1.2 GHz', '4', 'Camera chính: 5.0 MP, Quay phim WVGA@30fps', 'Bộ nhớ trong:4 GB', '1430', null, '36', '2015-06-06', null, null);
INSERT INTO `products` VALUES ('43', 'Microsoft Lumia 435', '1', '30', null, 'microsoft-lumia-435-400x533.png', null, '3', '1790000', '1', 'Windows Phone 8.1', 'Qualcomm Snapdragon 200, 2 nhân, 1.2 GHz', '4', 'Camera chính: 2.0 MP, Quay phim WVGA@30fps', 'Bộ nhớ trong:8 GB', '1560', null, '36', '2015-06-06', null, null);
INSERT INTO `products` VALUES ('44', 'Microsoft Lumia 430', '1', '20', null, 'microsoft-lumia-430-533-400x533.png', null, '3', '1590000', '1', 'Windows Phone 8.1', 'Qualcomm Snapdragon 200, 2 nhân, 1.2 GHz', '4', 'Camera chính: 2.0 MP, Quay phim WVGA@30fps; Camera phụ: VGA (0.3 Mpx)', 'Bộ nhớ trong:8 GB', '1500', null, '36', '2015-06-06', null, null);
INSERT INTO `products` VALUES ('45', 'Nokia XL', '1', '30', null, 'nokia-xl-2-400x533.png', null, '3', '2590000', '0.768', 'Nokia X software platform (trên nền Android 4.1)', 'Qualcomm Snapdragon S4, 2 nhân, 1 GHz', '5', 'Camera chính: 5.0 MP, Quay phim 480@30fps', 'Bộ nhớ trong:4 GB', '2000', null, '36', '2015-06-06', null, null);
INSERT INTO `products` VALUES ('46', 'Nokia Lumia 730 Dual SIM', '1', '15', null, 'nokia-lumia-730-dual-sim.png', null, '3', '3990000', '1', 'Windows Phone 8.1', 'Qualcomm Snapdragon 400, 4 nhân, Quad-core 1.2 ', '4.7', 'Camera chính: 6.7 MP, Quay phim 1080@30fps', 'Bộ nhớ trong:8 GB', '2220', null, '36', '2015-06-06', null, null);
INSERT INTO `products` VALUES ('47', 'Nokia Lumia 830', '1', '30', null, 'nokia-lumia-830-png-1.png', null, '3', '7990000', '1', 'Windows Phone 8.1', 'Qualcomm Snapdragon 400, 4 nhân, Quad-core 1.2 ', '5', 'Camera chính: 10 MP, Quay phim FullHD 1080p@30fps; Camera phụ: 1 MP', 'Bộ nhớ trong:16 GB', '2200', null, '36', '2015-06-06', null, null);
INSERT INTO `products` VALUES ('48', 'Sony Xperia Z3 Plus', '1', '20', null, 'sony-xperia-z3-plus-png-364x400 (1).png', null, '8', '17990000', '3', 'Android 5.0 (Lollipop)', 'Snapdragon 810, 8 nhân, Quad-core 1.5 GHz Cortex-A53 & Quad-core 2 GHz Cortex-A57', '5.2', 'Camera chính: 20.7 MP, Quay phim 4K 2160p@30fps; Camera phụ: 5 MP', 'Bộ nhớ trong:32 GB', '2930', null, '36', '2015-06-06', null, null);
INSERT INTO `products` VALUES ('49', 'Sony Xperia Z3 Compact', '1', '15', null, 'sony-xperia-z3-compact-png (1).png', null, '8', '11990000', '2', 'Android 4.4 (KitKat)', 'Qualcomm Snapdragon 801, 4 nhân, 2.5 GHz', '4.6', 'Camera chính: 20.7 MP, Quay phim 4K 2160p@30fps; Camera phụ: 2.2 MP', 'Bộ nhớ trong:16 GB', '2600', null, '36', '2015-06-06', null, null);
INSERT INTO `products` VALUES ('50', 'Sony Xperia C3', '1', '20', null, 'sony-xperia-c3 (1).png', null, '8', '5990000', '1', 'Android 5.0 (Lollipop)', 'Qualcomm Snapdragon 400, 4 nhân, 1.2 GHz', '5.5', 'Camera chính: 8.0 MP, Quay phim FullHD 1080p@30fps; Camera phụ: 5 MP', 'Bộ nhớ trong:8 GB', '2500', null, '36', '2015-06-06', null, null);
INSERT INTO `products` VALUES ('51', 'SONY XPERIA E4 DUAL', '1', '30', null, 'sony-xperia-e4-400x533 (1).png', null, '8', '3290000', '1', 'Android 5.0 (Lollipop)', 'MTK 6582, 4 nhân, 1.3 GHz', '5', 'Camera chính: 5.0 MP, Quay phim FullHD 1080p@30fps', 'Bộ nhớ trong:8 GB', '2300', null, '36', '2015-06-06', null, null);
INSERT INTO `products` VALUES ('52', 'Sony Xperia Z3', '1', '15', null, 'sony-xperia-z3-png (1).png', null, '8', '14990000', '1', 'Android 4.4 (KitKat)', 'Qualcomm Snapdragon 801, 4 nhân, 2.5 GHz', '5.2', 'Camera chính: 20.7 MP, Quay phim 4K 2160p@30fps; Camera phụ: 2.2 MP', 'Bộ nhớ trong:16 GB', '3100', null, '36', '2015-06-06', null, null);
INSERT INTO `products` VALUES ('53', 'Sony Xperia Z2', '1', '30', null, 'sony-xperia-z2-png (1).png', null, '8', '10990000', '1', 'Android 4.4 (KitKat)', 'Qualcomm MSM8974AB, 4 nhân, 2.3 GHz', '5.2', 'Camera chính: 20.7 MP, Quay phim 4K 2160p@30fps; Camera phụ: 2.2 MP', 'Bộ nhớ trong:16 GB', '3200', null, '36', '2015-06-06', null, null);
INSERT INTO `products` VALUES ('54', 'Galaxy Tab A Plus 9.7', '2', '10', null, 'samsung-galaxy-tab-a-plus-97-sm-p555-533but-3-400x533 (1).png', null, '2', '8990000', '2', 'Android 5.0', 'Quad-core, 1.2 GHz', '9.7', 'Camera chính: 5 MP(2592 x 1944 pixels)', 'Bộ nhớ trong:16 GB', '6000', null, '36', '2015-06-06', null, null);
INSERT INTO `products` VALUES ('55', 'Galaxy Tab 4 7.0', '2', '20', null, 'samsung-galaxy-tab-4-70-sm-t231-1-400x533 (1).png', null, '2', '4990000', '2', 'Android 4.4', 'Quad-core, 1.2 GHz', '7', 'Camera chính: 3.2 MP(2048x1536 pixels)', 'Bộ nhớ trong:8 GB', '4000', null, '36', '2015-06-06', null, null);
INSERT INTO `products` VALUES ('56', 'Galaxy Tab A 8.0', '2', '25', null, 'samsung-galaxy-tab-a-80-sm-p355-co-but-533but-2-400x533 (1).png', null, '2', '7990000', '2', 'Android 5.0', 'Quad-core, 1.2 GHz', '8', 'Camera chính: 5 MP(2592x1944 pixels)', 'Bộ nhớ trong:16 GB', '4200', null, '36', '2015-06-06', null, null);
INSERT INTO `products` VALUES ('57', 'Galaxy Tab 3V T116', '2', '15', null, 'samsung-galaxy-tab-3-lite-t116-533-400x533 (1).png', null, '2', '3490000', '1', 'Android 4.4', 'Quad-core, 1.3 GHz', '7', 'Camera chính: 2 MP(1600 x 1200 pixels)', 'Bộ nhớ trong:8 GB', '3600', null, '36', '2015-06-06', null, null);
INSERT INTO `products` VALUES ('58', 'iPad Mini 3 Retina Cellular 16GB', '2', '10', null, 'ipad-mini-3-cellular-tra-gop-400x533 (1).png', null, '1', '13590000', '1', 'iOS 8', 'Dual - Core, 1.3 GHz', '7.9', 'Camera chính: 5 MP(2592 x 1944 pixels)', 'Bộ nhớ trong:16 GB', '6471', null, '36', '2015-06-06', null, null);
INSERT INTO `products` VALUES ('59', 'iPad Air Cellular 16GB', '2', '15', null, 'ipad-air-cellular-16gb-tra-gop-400x533.png', null, '1', '12790000', '1', 'iOS 8', 'Dual - Core, 1.3 GHz', '9.7', 'Camera chính: 5 MP(2592 x 1944 pixels)', 'Bộ nhớ trong:16 GB', '8820', null, '36', '2015-06-06', null, null);
INSERT INTO `products` VALUES ('60', 'iPad Mini 2 Retina Cellular 16GB', '2', '20', null, 'ipad-mini-2-retina-cellular-16gb-1 (1).png', null, '1', '10590000', '1', 'iOS 8', 'Dual - Core, 1.3 GHz', '7.9', 'Camera chính: 5 MP(2592 x 1944 pixels)', 'Bộ nhớ trong:16 GB', '6471', null, '36', '2015-06-06', null, null);
INSERT INTO `products` VALUES ('61', 'iPad Mini Cellular 16GB', '2', '10', null, 'ipad-mini-wifi-cellular-16gb-1 (1).png', null, '1', '8990000', '0.512', 'iOS 8', 'Dual - Core, 1 GHz', '7.9', 'Camera chính: 5 MP(2592 x 1944 pixels)', 'Bộ nhớ trong:16 GB', '4490', null, '36', '2015-06-06', null, null);
INSERT INTO `products` VALUES ('62', 'iPad Air 2 Cellular 64GB', '2', '20', null, 'ipad-air-2-cellular-16g-tra-gop-400x533.png', null, '1', '17990000', '2', 'iOS 8', '3 nhân, 1.5 GHz', '9.7', 'Camera chính: 8 MP', 'Bộ nhớ trong:64 GB', '7430', null, '36', '2015-06-06', null, null);
INSERT INTO `products` VALUES ('63', 'Huawei MediaPad T1-A21L', '2', '10', null, 'huawei-mediapad-t1-a21l-533b-400x533 (1).png', null, '11', '5490000', '1', 'Android 4.4', 'Quad-core, 1.2 GHz\r\n', '9.6', 'Camera chính: 5 MP(2560 x 1920 pixels)', 'Bộ nhớ trong:16 GB', '4800', null, '36', '2015-06-06', null, null);
INSERT INTO `products` VALUES ('64', 'Huawei MediaPad T1 8.0', '2', '15', null, 'huawei-mediapad-t1-80-400-533-400x533-400x533 (1).png', null, '11', '3490000', '1', 'Android 4.3', 'Quad-core, 1.2 GHz', '8', 'Camera chính: 5 MP(2560 x 1920 pixels)', 'Bộ nhớ trong:8 GB', '4800', null, '36', '2015-06-06', null, null);
INSERT INTO `products` VALUES ('65', 'Huawei MediaPad 7 Youth 2 8G', '2', '20', null, 'huawei-mediapad-7-youth-2-8g-400 (1).png', null, '11', '2290000', '1', 'Android 4.3', 'Quad-core, 1.2 GHz', '7', 'Camera chính: 3.2 MP(2048x1536 pixels)', 'Bộ nhớ trong:8 GB', '4100', null, '36', '2015-06-06', null, null);
INSERT INTO `products` VALUES ('66', 'Huawei MediaPad T1-701u', '2', '15', null, 'huawei-mediapad-t1-701u-533-2-400x533-400x533 (1).png', null, '11', '2290000', '1', 'Android 4.3', 'Quad-core, 1.2 GHz', '7', 'Camera chính: 2 MP(1600 x 1200 pixels)', 'Bộ nhớ trong:8 GB', '4100', null, '36', '2015-06-06', null, null);
INSERT INTO `products` VALUES ('67', 'Dell 3551 Celeron', '3', '30', null, 'dell-inspiron-3551-celeron-n2840-2gb-500gb-win81-2-400x533 (1).png', null, '16', '7090000', '2', 'Window 8.1', 'Intel, Celeron, N2840, 2.16 GHz', '15.6', 'Webcam: HD 0.9MP', 'Ổ cứng: HDD 500GB', 'Li-on 4 cell', null, '36', '2015-06-06', null, null);
INSERT INTO `products` VALUES ('68', 'Dell Inspiron N3540', '3', '20', null, 'dell-inspiron-3551-pentium-n3540-2g-500g-win81-400x533 (1).png', null, '16', '8090000', '2', 'Window 8.1', 'Intel, Pentium, N3540, 2.16 GHz', '15.6', 'Webcam: HD 0.9MP', 'Ổ cứng: HDD 500GB', 'Li-on 4 cell', null, '36', '2015-06-06', null, null);
INSERT INTO `products` VALUES ('69', 'Dell Inspiron 3542 i3 ', '3', '50', null, 'dell-inspiron-3542-p40f001-430x533 (1).png', null, '16', '10190000', '2', 'Window 8.1', 'Intel, Core i3 Haswell, 4005U, 1.70 GHz', '15.6', 'Webcam: HD 0.9MP', 'Ổ cứng: HDD 500GB', 'Li-on 4 cell', null, '36', '2015-06-06', null, null);
INSERT INTO `products` VALUES ('70', 'Dell Inspiron 3442 i3 ', '3', '40', null, 'dell-inspiron-3442-i3-4005u-2g-500g-win81-office36-400x533 (1).png', null, '16', '10190000', '2', 'Window 8.1', 'Intel, Core i3 Haswell, 4005U, 1.70 GHz', '14', 'Webcam: HD 0.9MP', 'Ổ cứng: HDD 500GB', 'Li-on 4 cell', null, '36', '2015-06-06', null, null);
INSERT INTO `products` VALUES ('71', 'Dell Inspiron 3442 i3 ', '3', '30', null, 'dell-inspiron-3442-062gw5-1-400x533 (1).png', null, '16', '11490000', '2', 'Window 8.1', 'Intel, Core i3 Haswell, 4005U, 1.70 GHz', '14', 'Webcam: HD 0.9MP', 'Ổ cứng: HDD 500GB', 'Li-on 4 cell', null, '36', '2015-06-06', null, null);
INSERT INTO `products` VALUES ('72', 'Dell Inspiron 3543 i3 ', '3', '50', null, 'dell-inspiron-3543-i3-5005u-4gb-500gb-win81x533-400x533 (1).png', null, '16', '12190000', '4', 'Window 8.1', 'Intel, Core i3 Broadwell, 5005U, 2.00 GHz', '15.6', 'Webcam: HD 0.9MP', 'Ổ cứng: HDD 500GB', 'Li-on 4 cell', null, '36', '2015-06-06', null, null);
INSERT INTO `products` VALUES ('73', 'Dell Inspiron 3148 i3 ', '3', '40', null, 'dell-inspiron-3148-400x533 (1).png', null, '16', '14790000', '4', 'Window 8.1', 'Intel, Core i3 Haswell, 4030U, 1.90 GHz', '11.6', 'Webcam: HD 0.9MP', 'Ổ cứng: HDD 500GB', 'Li-on3 cell', null, '36', '2015-06-06', null, null);
INSERT INTO `products` VALUES ('74', 'Dell Inspiron 3543 i5 ', '3', '30', null, 'dell-inspiron-3543-70055066-533a-430x533 (1).png', null, '16', '15590000', '4', 'Window 8.1', 'Intel, Core i5 Broadwell, 5200U, 2.20 GHz', '15.6', 'Webcam: HD 0.9MP', 'Ổ cứng: HDD 500GB', 'Li-on 4 cell', null, '36', '2015-06-06', null, null);
INSERT INTO `products` VALUES ('75', 'Acer Aspire Z1401 ', '3', '30', null, 'acer-aspire-z1401-n2940-4gb-500gb-win81-1-400x533 (1).png', null, '6', '7290000', '4', 'Window 8.1', 'Intel, Celeron, N2940, 1.83 GHz', '14', 'Webcam: VGA 0.3MP', 'Ổ cứng: HDD 500GB', 'Li-on 4 cell', null, '36', '2015-06-06', null, null);
INSERT INTO `products` VALUES ('76', 'Acer Aspire ES1 411 ', '3', '40', null, 'acer-aspire-es1-411-004-1 (1).png', null, '6', '7890000', '4', 'Window 8.1', 'Intel, Pentium, N3540, 2.16 GHz', '14', 'Webcam: VGA 0.3MP', 'Ổ cứng: HDD 500GB', 'Li-on 4 cell', null, '36', '2015-06-06', null, null);
INSERT INTO `products` VALUES ('77', 'Acer Aspire E5 471 ', '3', '50', null, 'acer-aspire-e5-471-i3-dn-430x533 (1).png', null, '6', '9290000', '4', 'Window 8.1', 'Intel, Core i3 Haswell, 4005U, 1.70 GHz', '14', 'Webcam: VGA 0.3MP', 'Ổ cứng: HDD 500GB', 'Li-on 6 cell', null, '36', '2015-06-06', null, null);
INSERT INTO `products` VALUES ('78', 'Acer Z1401 C283', '3', '30', null, 'acer-aspire-e5-571-i5-5200u-4gb-500gb-win81-1-400x533 (1).png', null, '6', '4990000', '4', 'Window 8.1', 'Intel Celeron QuadCore 2840U', '14', 'Webcam: VGA 0.3MP', 'Ổ cứng: HDD 500GB', 'Li-on 4 cell', null, '36', '2015-06-06', null, null);
INSERT INTO `products` VALUES ('79', 'Acer Aspire E5 571 ', '3', '40', null, 'acer-aspire-z1401-n2940-4gb-500gb-win81-1-400x533 (1).png', null, '6', '13090000', '4', 'Window 8.1', 'Intel, Core i5 Broadwell, 5200U, 2.20 GHz', '15.6', 'Webcam: VGA 0.3MP', 'Ổ cứng: HDD 500GB', 'Li-on 6 cell', null, '36', '2015-06-06', null, null);
INSERT INTO `products` VALUES ('80', 'Asus X453MA', '3', '20', null, 'asus-x453ma-wx180b-1-400x533 (1).png', null, '12', '7090000', '2', 'Window 8.1', 'Intel, Celeron, N2830, 2.16 GHz', '14', 'Webcam: VGA 0.3MP', 'Ổ cứng: HDD 500GB', 'Li-on 2 cell', null, '36', '2015-06-06', null, null);
INSERT INTO `products` VALUES ('81', 'Asus X553MA ', '3', '15', null, 'asus-x553ma-sx707b-400-430x533-430x533 (1).png', null, '12', '7290000', '2', 'Window 8.1', 'Intel, Celeron, N2840, 2.16 GHz', '15.6', 'Webcam: VGA 0.3MP', 'Ổ cứng: HDD 500GB', 'Li-on 2 cell', null, '36', '2015-06-06', null, null);
INSERT INTO `products` VALUES ('82', 'Asus X453MA ', '3', '20', null, 'asus-x453ma-celeron-n3540-win8-1-400x533 (1).png', null, '12', '8090000', '2', 'Window 8.1', 'Intel, Pentium, N3540, 2.16 GHz', '14', 'Webcam: VGA 0.3MP', 'Ổ cứng: HDD 500GB', 'Li-on 2 cell', null, '36', '2015-06-06', null, null);
INSERT INTO `products` VALUES ('83', 'Asus X553MA ', '3', '30', null, 'asus-x553ma-sx684b-430x533 (1).png', null, '12', '8290000', '2', 'Window 8.1', 'Intel, Pentium, N3540, 2.16 GHz', '15.6', 'Webcam: VGA 0.3MP', 'Ổ cứng: HDD 500GB', 'Li-on 2 cell', null, '36', '2015-06-06', null, null);
INSERT INTO `products` VALUES ('84', 'Asus X452LAV ', '3', '40', null, 'asus-x452lav-vx250b-3-430x533 (1).png', null, '12', '9590000', '2', 'Window 8.1', 'Intel, Core i3 Haswell, 4030U, 1.90 GHz', '14', 'Webcam: VGA 0.3MP', 'Ổ cứng: HDD 500GB', 'Li-on 4 cell', null, '36', '2015-06-06', null, null);
INSERT INTO `products` VALUES ('85', 'Asus TP550LA ', '3', '20', null, 'asus-tp550la-cj040h-400x533 (1).png', null, '12', '11190000', '4', 'Window 8.1', 'Intel, Core i3 Haswell, 4030U, 1.90 GHz', '15.6', 'Webcam: VGA 0.3MP', 'Ổ cứng: HDD 500GB', '2 cell Li - Polymer', null, '36', '2015-06-06', null, null);
INSERT INTO `products` VALUES ('86', 'Asus TP550LA ', '3', '15', null, 'asus-tp550ld-cj090h-icon (1).png', null, '12', '11590000', '4', 'Window 8.1', 'Intel, Core i3 Haswell, 4030U, 1.90 GHz', '15.6', 'Webcam: VGA 0.3MP', 'Ổ cứng: HDD 500GB', '2 cell Li - Polymer', null, '36', '2015-06-06', null, null);
INSERT INTO `products` VALUES ('87', 'Asus TP550LD ', '3', '20', null, 'asus-tp550ld-cj084h-icon (1).png', null, '12', '12290000', '4', 'Window 8.1', 'Intel, Core i3 Haswell, 4030U, 1.90 GHz', '15.6', 'Webcam: VGA 0.3MP', 'Ổ cứng: HDD 500GB', '2 cell Li - Polymer', null, '36', '2015-06-06', null, null);
INSERT INTO `products` VALUES ('88', 'Asus TP550LD ', '3', '40', null, 'asus-tp550ld-cj083h-icon (1).png', null, '12', '12490000', '4', 'Window 8.1', 'Intel, Core i3 Haswell, 4030U, 1.90 GHz', '15.6', 'Webcam: VGA 0.3MP', 'Ổ cứng: HDD 500GB', '2 cell Li - Polymer', null, '36', '2015-06-06', null, null);
INSERT INTO `products` VALUES ('89', 'Asus TP300LA ', '3', '20', null, 'asus-tp300la-dw060h400x533-400x533 (1).png', null, '12', '12690000', '4', 'Window 8.1', 'Intel, Core i3 Haswell, 4030U, 1.90 GHz', '13.3', 'Webcam: VGA 0.3MP', 'Ổ cứng: HDD 500GB', 'Li-Ion 3 cell', null, '36', '2015-06-06', null, null);
INSERT INTO `products` VALUES ('90', 'HP Stream 11-d001TU', '3', '15', null, 'hp-stream-11-d001tu-1-400x533 (1).png', null, '13', '4990000', '2', 'Window 8.1', 'Intel, Celeron, N2840, 2.16 GHz', '11.6', 'Webcam: HD webcam 0.9 MP(16:9)', 'Ổ cứng: HDD 500GB', 'Li-Ion 3 cell', null, '36', '2015-06-06', null, null);
INSERT INTO `products` VALUES ('91', 'HP 14 r251TU N3540/2GB/500GB/Win8.1', '3', '25', null, 'hp-14-r251tu-n3540-2gb-500gb-win81-400x533 (1).png', null, '13', '7590000', '2', 'Window 8.1', 'Intel, Pentium, N3540, 2.16 GHz', '14', 'Webcam: HD webcam 0.9 MP(16:9)', 'Ổ cứng: HDD 500GB', 'Li-Ion 4 cell', null, '36', '2015-06-06', null, null);
INSERT INTO `products` VALUES ('92', 'HP 14 r251TU', '3', '30', null, 'hp-14-r068tu-400x533 (1).png', null, '13', '10490000', '4', 'Window 8.1', 'Intel, Core i3 Haswell, 4030U, 1.90 GHz', '14', 'Webcam: HD webcam 0.9 MP(16:9)', 'Ổ cứng: HDD 500GB', 'Li-Ion 4 cell', null, '36', '2015-06-06', null, null);
INSERT INTO `products` VALUES ('93', 'HP Pavilion ', '3', '14', null, 'hp-pavilion-15-p047tu-400-430x533 (1).png', null, '13', '11490000', '4', 'Window 8.1', 'Intel, Core i3 Haswell, 4030U, 1.90 GHz', '15.6', 'Webcam: HD webcam 0.9 MP(16:9)', 'Ổ cứng: HDD 500GB', 'Li-Ion 4 cell', null, '36', '2015-06-06', null, null);
INSERT INTO `products` VALUES ('94', 'HP Stoli Pavilion X2', '3', '20', null, 'hp-pavilion-x2-2.jpg', null, '13', '16000000', '2', 'Window 8.1', 'Intel Atom Z3745D', '10.1', 'Webcam: HD webcam 0.9 MP(16:9)', 'Ổ cứng: HDD 500GB', 'Li-Ion 4 cell', null, '36', '2015-06-06', null, null);
INSERT INTO `products` VALUES ('95', 'HP Probook 450 G2', '3', '15', null, 'hp-probook-450-g2-2.jpg', null, '13', '10000000', '4', 'Window 8.1', 'Intel Core i5 4210U', '15.6', 'Webcam: HD webcam 0.9 MP(16:9)', 'Ổ cứng: HDD 500GB', 'Li-Ion 6 cell', null, '36', '2015-06-06', null, null);
INSERT INTO `products` VALUES ('96', 'HP-248', '3', '20', null, 'hp-14-r251tu-n3540-2gb-500gb-win81-400x533 (1).png', null, '13', '8490000', '4', 'Window 8.1', 'Intel Core i5-4210U', '14', 'Webcam: HD webcam 0.9 MP(16:9)', 'Ổ cứng: HDD 500GB', 'Li-Ion 6 cell', null, '36', '2015-06-06', null, null);
INSERT INTO `products` VALUES ('97', 'Lenovo G4030 ', '3', '30', null, 'lenovo-g4030-w8-1-400x533 (1).png', null, '5', '1890000', '2', 'Window 8.1', 'Intel, Pentium, N3540, 2.16 GHz', '14', 'Webcam: VGA 0.3MP', 'Ổ cứng: HDD 500GB', 'Li-Ion 4 cell', null, '36', '2015-06-06', null, null);
INSERT INTO `products` VALUES ('98', 'Lenovo G4070 ', '3', '20', null, 'lenovo-g4070-59438273-400x533 (1).png', null, '5', '9590000', '2', 'Window 8.1', 'Intel, Core i3 Haswell, 4005U, 1.70 GHz', '14', 'Webcam: VGA 0.3MP', 'Ổ cứng: HDD 500GB', 'Li-Ion 4 cell', null, '36', '2015-06-06', null, null);
INSERT INTO `products` VALUES ('99', 'Lenovo Z5070 ', '3', '15', null, 'lenovo-z5070-59439197-1-400x533 (1).png', null, '5', '12890000', '4', 'Window 8.1', 'Intel, Core i3 Haswell, 4005U, 1.70 GHz', '15.6', 'Webcam: VGA 0.3MP', 'Ổ cứng: HDD 500GB', 'Li-Ion 4 cell', null, '36', '2015-06-06', null, null);
INSERT INTO `products` VALUES ('100', 'Lenovo IdeaPad S410P-59409051 Black', '3', '30', null, 'LAPTOP_LENOVO_IdeaPad_S410P-59409051_Black-300x300.jpg', null, '5', '5490000', '2', 'Window 8.1', 'Intel Pentium 3556U', '14', 'Webcam: VGA 0.3MP', 'Ổ cứng: HDD 500GB', '2800', null, '36', '2015-06-06', null, null);
INSERT INTO `products` VALUES ('101', 'Lenovo G40-30-80FY00B1VN', '3', '17', null, 'lenovo-g40-30-80fy00b1vn-1.jpg', null, '5', '6690000', '2', 'Window 8.1', 'Intel Pentium N3540 2.16Ghz', '14', 'Webcam: VGA 0.3MP', 'Ổ cứng: HDD 500GB', '4 cell', null, '36', '2015-06-06', null, null);
INSERT INTO `products` VALUES ('102', 'Lenovo G40-30-80FY009CVN', '3', '10', null, 'lenovo-g40-30-80fy009cvn-2.jpg', null, '5', '6690000', '2', 'Window 8.1', 'Intel Pentium N3540 2.16Ghz', '14', 'Webcam: VGA 0.3MP', 'Ổ cứng: HDD 500GB', '4 cell', null, '36', '2015-06-06', null, null);
INSERT INTO `products` VALUES ('103', 'Macbook Air MJVM2 ZP/A', '3', '10', null, 'may-tinh-xach-tay-apple-macbook-air-3.jpg', null, '1', '20990000', '8', 'X Yosemite', '1.6 GHz Intel Core i5 (Broadwell)', '11.6', null, 'Ổ cứng: SSD 128GB', '9 cell', null, '36', '2015-06-06', null, null);
INSERT INTO `products` VALUES ('104', 'Macbook Air MJVE2 ZP/A', '3', '10', null, 'may-tinh-xach-tay-apple-macbook-air-mjvm2-zp-a_1_1.jpg', null, '1', '23599000', '4', 'X Yosemite', '1.6 GHz Intel Core i5 (Broadwell)', '13.3', null, 'Ổ cứng: SSD 128GB', '9 cell', null, '36', '2015-06-06', null, null);
INSERT INTO `products` VALUES ('105', 'Macbook Air MD712 ZP/B', '3', '10', null, 'laptop_apple_macbook_air_md712_zp_b.jpg', null, '1', '24990000', '4', 'X Yosemite', '1.6 GHz Intel Core i5 (Broadwell)', '11.6', null, 'Ổ cứng: SSD 256GB', '9 cell', null, '36', '2015-06-06', null, null);
INSERT INTO `products` VALUES ('106', 'Macbook Air MD760 ZP/B', '3', '10', null, 'macbook-air-13-3inch-md760zp-b-2014.jpg', null, '1', '22900000', '4', 'X Yosemite', 'Core i5 1.4Ghz ', '13.3', null, 'Ổ cứng: SSD 128GB', '9 cell', null, '36', '2015-06-06', null, null);
INSERT INTO `products` VALUES ('107', 'Macbook Air MD761 ZP/B', '3', '10', null, 'may-tinh-xach-tay-apple-macbook-air-md761-zp-b-a.jpg', null, '1', '26990000', '4', 'X Yosemite', 'Core i5 1.4Ghz ', '13.3', null, 'Ổ cứng: SSD 256GB', '9 cell', null, '36', '2015-06-06', null, null);
INSERT INTO `products` VALUES ('108', 'Sony Vaio SVF14N16SGS', '3', '10', null, '51843_svf14n16sgs.png', null, '8', '19800000', '4', 'Window 8.1', 'Core i5 4200U', '14', null, 'Ổ cứng: HDD 500GB', '4 cell', null, '36', '2015-06-06', null, null);
INSERT INTO `products` VALUES ('109', 'Sony Vaio SVF14328SG', '3', '10', null, '51838_sony_svf14328sg.jpg', null, '8', '16800000', '4', 'Window 8.1', 'Core™ i5-4200U 1.60 GHz', '14', null, 'Ổ cứng: HDD 500GB', '4 cell', null, '36', '2015-06-06', null, null);
INSERT INTO `products` VALUES ('110', 'Sony Vaio SVF1421BSGW', '3', '10', null, '51837_svf1421bsgw.jpg', null, '8', '16500000', '4', 'Window 8.1', 'core i5 Ivy Bridge', '14', null, 'Ổ cứng: HDD 500GB', '4 cell', null, '36', '2015-06-06', null, null);
INSERT INTO `products` VALUES ('111', 'Sony Vaio SVE1511FXB', '3', '10', null, '51849_g1.jpg', null, '8', '15500000', '4', 'Window 8.1', 'Intel Core_i5_3210M Processor 2.5GHz', '15.5', null, 'Ổ cứng: HDD 500GB', '4 cell', null, '36', '2015-06-06', null, null);
INSERT INTO `products` VALUES ('112', 'Sony Vaio SVF1521ECX', '3', '10', null, '51851_f1.jpg', null, '8', '20000000', '4', 'Window 8.1', 'Core™ i7-3537U', '15.5', null, 'Ổ cứng: HDD 500GB', '4 cell', null, '36', '2015-06-06', null, null);
INSERT INTO `products` VALUES ('113', 'USB JetFlash 8GB', '4', '20', null, '33464650076055781729_500x500.220.132.jpg', null, '14', '345000', null, null, null, null, null, null, null, null, '36', '2015-06-06', null, null);
INSERT INTO `products` VALUES ('114', 'Fast Connect MF190 ezCom Vina', '4', '20', null, '4023176fast_connect_mf190_ezcom_vin_300_nowatermark_300x300.jpg', null, '14', '798000', null, null, null, null, null, null, null, null, '36', '2015-06-06', null, null);
INSERT INTO `products` VALUES ('115', 'Chuột Sony VGP-BMS20/P', '4', '20', null, '47350_0_1.jpg', null, '14', '470000', null, null, null, null, null, null, null, null, '36', '2015-06-06', null, null);
INSERT INTO `products` VALUES ('116', 'Chuột Sony VGP-BMS16/L', '4', '20', null, '47348_0_1.jpg', null, '14', '315000', null, null, null, null, null, null, null, null, '36', '2015-06-06', null, null);
INSERT INTO `products` VALUES ('117', 'Chuột Sony VGP-BMS21/W', '4', '20', null, '47351_0_1.jpg', null, '14', '315000', null, null, null, null, null, null, null, null, '36', '2015-06-06', null, null);
INSERT INTO `products` VALUES ('118', 'Ốp lưng da nắp gập Ipad Air Lab-C', '4', '30', null, '5409870oplungdanapgapipadairlab_c_2.220.132 (1).jpg', null, '15', '143000', null, null, null, null, null, null, null, null, '36', '2015-06-06', null, null);
INSERT INTO `products` VALUES ('119', 'Miếng dán màn hình iPad 3', '4', '30', null, 'Thumbnail (2).jpg', null, '15', '143000', null, null, null, null, null, null, null, null, '36', '2015-06-06', null, null);
INSERT INTO `products` VALUES ('120', 'Ốp lưng da Lumia 1320 SS3 Zenus', '4', '30', null, '2311219op_lung_da_nap_glx_win_xanhla_300.jpg', null, '15', '76000', null, null, null, null, null, null, null, null, '36', '2015-06-06', null, null);
INSERT INTO `products` VALUES ('121', 'Miếng dán màn hình Nokia Lumia 1320', '4', '30', null, '33198111.jpg', null, '15', '45000', null, null, null, null, null, null, null, null, '36', '2015-06-06', null, null);
INSERT INTO `products` VALUES ('122', 'Ốp lưng nhựa cứng iphone 5/5S WD Gra', '4', '30', null, '5519883op_lung_iphone5_hong_300.jpg', null, '15', '100000', null, null, null, null, null, null, null, null, '36', '2015-06-06', null, null);
INSERT INTO `products` VALUES ('123', 'Miếng dán iPad Mini', '4', '30', null, '4838312ipadmini.jpg', null, '15', '127000', null, null, null, null, null, null, null, null, '36', '2015-06-06', null, null);

-- ----------------------------
-- Table structure for suppliers
-- ----------------------------
DROP TABLE IF EXISTS `suppliers`;
CREATE TABLE `suppliers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `SupplierName` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of suppliers
-- ----------------------------
INSERT INTO `suppliers` VALUES ('1', 'Apple');
INSERT INTO `suppliers` VALUES ('2', 'Samsung');
INSERT INTO `suppliers` VALUES ('3', 'Nokia');
INSERT INTO `suppliers` VALUES ('4', 'Ipad');
INSERT INTO `suppliers` VALUES ('5', 'Lenovo');
INSERT INTO `suppliers` VALUES ('6', 'Acer');
INSERT INTO `suppliers` VALUES ('7', 'Vaio');
INSERT INTO `suppliers` VALUES ('8', 'Sony');
INSERT INTO `suppliers` VALUES ('9', 'LG');
INSERT INTO `suppliers` VALUES ('10', 'HTC');
INSERT INTO `suppliers` VALUES ('11', 'Huawei');
INSERT INTO `suppliers` VALUES ('12', 'Asus');
INSERT INTO `suppliers` VALUES ('13', 'HP');
INSERT INTO `suppliers` VALUES ('14', 'Phụ kiện máy tính');
INSERT INTO `suppliers` VALUES ('15', 'Phụ kiện điện thoại');
INSERT INTO `suppliers` VALUES ('16', 'Dell');

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Password` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `FirstName` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `LastName` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Phone` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Authorities` int(11) NOT NULL COMMENT 'Phân quyền: 1 là admin 2 là khách hàng',
  `Created` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES ('1', 'trang3041994@gmail.com', 'trang', 'Trang', 'Kieu', '102839128309', 'ha noi', '1', '2015-06-25');
