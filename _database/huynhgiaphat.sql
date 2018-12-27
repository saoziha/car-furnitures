/*
 Navicat Premium Data Transfer

 Source Server         : localhost
 Source Server Type    : MySQL
 Source Server Version : 50721
 Source Host           : localhost:3306
 Source Schema         : huynhgiaphat

 Target Server Type    : MySQL
 Target Server Version : 50721
 File Encoding         : 65001

 Date: 13/08/2018 10:44:04
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for comp_product
-- ----------------------------
DROP TABLE IF EXISTS `comp_product`;
CREATE TABLE `comp_product`  (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `cat_id` bigint(20) NOT NULL,
  `name` varchar(200) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `price` double NULL DEFAULT NULL,
  `cover_image_url` varchar(200) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `description` varchar(500) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `is_privateprice` tinyint(4) NOT NULL DEFAULT 0,
  `update_timestamp` timestamp(0) NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `is_hot` tinyint(255) NOT NULL DEFAULT 0,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `IXFK_comp_product_comp_product_cat`(`cat_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 17 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of comp_product
-- ----------------------------
INSERT INTO `comp_product` VALUES (1, 1, 'Phủ bóng Ceramic 9H', NULL, '\"public/upload/product/phu-ceramic.jpg\"', 'Với công thức cải tiến mới nhất, dung dịch đậm đặc, tăng độ cứng tối đa, kéo dài tuổi thọ lớp phủ, đồng thời tăng độ bóng lớp sơn,có tác dụng bảo vệ lâu dài trên bề mặt sơn.Sản phẩm này là sự lựa chọn vô cùng sáng suốt cho xe ô tô của bạn', 1, '2018-08-09 13:52:49', 1);
INSERT INTO `comp_product` VALUES (2, 1, 'Film cách nhiệt Ntech', NULL, '\"public/upload/product/film-cach-nhiet.jpg\"', 'Phim cách nhiệt khi dán cho xe ô tô có tác dụng giữ mát cho xe - tiết kiệm nhiên liệu, bảo bệ sức khỏe cho người sử dụng và tăng độ bền nội thất xe, giảm tải cho điều hòa và không ảnh hưởng đến tầm nhìn bên ngoài', 1, '2018-08-09 13:53:49', 1);
INSERT INTO `comp_product` VALUES (3, 1, 'Bọc ghế da', NULL, '\"public/upload/product/boc-ghe-da.jpg\"', 'Bọc ghế da ô tô giúp chiếc xế yêu của bạn trở nên sang trọng – thoải mái cho người ngồi trên xe - Áo bọc ghế ô tô sạch sẽ và không tạo môi trường cho vi khuẩn xuất hiện.', 1, '2018-08-09 13:54:49', 1);
INSERT INTO `comp_product` VALUES (4, 1, 'Bọc trần da 5D - 6D', NULL, '\"public/upload/product/boc-tran-da.jpg\"', 'Độ lại toàn bộ phần trần và các cột phía dưới trần, quy trình khâu tay hoàn hảo. Độc đáo, sang trọng, lạ lẫm, được những thợ có tay nghề cao trong việc tháo lắp trần của tất cả các dòng xe thực hiện.', 1, '2018-08-09 13:51:49', 0);
INSERT INTO `comp_product` VALUES (5, 3, 'Độ đèn led cho xe', NULL, '\"public/upload/product/do-den.jpg\"', 'Đèn pha led cao cấp cho ô tô, xe máy sáng nhất và hoàn thiện. Đèn cho khả năng gom sáng tốt nhất.', 1, '2018-08-09 13:55:49', 1);
INSERT INTO `comp_product` VALUES (6, 3, 'Lắp đặt loa', NULL, '\"public/upload/product/do-am-thanh.jpg\"', 'Amplifier được xem như là một bệ đỡ vững chắc để đưa công suất của loa lên hiệu quả tối ưu nhất. Với hệ thống phân chia từ Class A đến Class D, amplifier giúp tăng mức tín hiệu, độ hiệu quả và công suất đầu ra của hệ thống loa trong xe.', 1, '2018-08-09 13:51:49', 1);
INSERT INTO `comp_product` VALUES (7, 2, 'Dọn nội thất', NULL, '\"public/upload/product/don-noi-that.jpg\"', 'Dọn nội thất là công việc nên làm thường xuyên để giữ cho bên trong xe luôn được sạch đẹp như mới, đồng thời mang lại không gian bên trong sự trong lành và bảo vệ tốt nhất cho các vật dụng nội thất của xe ô tô.', 1, '2018-08-09 13:51:49', 0);
INSERT INTO `comp_product` VALUES (8, 2, 'Đánh bóng xe', NULL, '\"public/upload/product/danh-bong-xe.jpg\"', 'Đánh bóng cho xe ô tô là việc làm hết sức cần thiết để các bạn gia cố và bảo dưỡng cho phần lớp vỏ của xe thêm bền đẹp. Dưới tác động của thời tiết, môi trường cũng như tác động vật lý ngoại lực chiếc xe ô tô của bạn khó có thể giữ được vẻ đẹp như ban đầu.dịch vụ đánh bóng xe ô tô sẽ giúp các bạn tút tát lại chiếc xe của mình bóng đẹp như mới.', 1, '2018-08-09 13:56:49', 1);
INSERT INTO `comp_product` VALUES (9, 3, 'Đồ chơi xe', NULL, '\"public/upload/product/do-choi-xe.jpg\"', 'Đồ chơi cho xe ô tô giúp nội thất trong xe bạn trở nên sang trọng, quý phái hơn. Đồng thời còn giúp thư giãn và tiện lợi hơn trong nhu cầu đi lại và làm việc của bạn', 1, '2018-08-09 13:51:49', 0);
INSERT INTO `comp_product` VALUES (10, 2, 'Rửa xe', NULL, '\"public/upload/product/rua-xe.jpg\"', 'Rửa xe giúp ô tô của bạn trông như mới, sạch sẽ hơn sau thời gian chịu khói bụi, thời tiết', 1, '2018-08-09 13:51:49', 0);
INSERT INTO `comp_product` VALUES (11, 1, 'Trải sàn da', NULL, '\"public/upload/product/trai-san-da.jpg\"', 'Thảm lót sàn được sản xuất từ nguyên liệu da cao cấp, chống mài mòn, chống nước, không mùi, bền màu. Thảm sạch, dễ vệ sinh,có tính thẩm mỹ cao, chất liệu da sang trọng, tôn thêm vẻ sang trọng cho chiếc xe.', 1, '2018-08-13 10:36:58', 0);
INSERT INTO `comp_product` VALUES (12, 3, 'Màn hình DVD android', NULL, '\"public/upload/product/man-hinh-dvd.jpg\"', 'Màn hình DVD được ứng dụng công nghệ cảm ứng, tích hợp đầy đủ các tính năng trong xe, tích hợp với Camera các loại, GPS bản đồ dẫn đường và chỉ dẫn đường bằng giọng nói.', 1, '2018-08-13 10:36:58', 0);
INSERT INTO `comp_product` VALUES (13, 3, 'Camera Hành Trình W8 Wifi 4K', NULL, '\"public/upload/product/camera-hanh-trinh.jpg\"', 'Camera hành trình với cảm ứng đa điểm cộng với việc sử dụng hệ điều hành Android thông dụng giúp bạn dễ dàng quan sát cũng như điều khiển trong quá trình lái xe. Có khả năng ghi lại toàn cảnh phía trước và phía sau xe giúp bạn có thể quan sát tại những điểm mà mắt thường không thể nhìn thấy.', 1, '2018-08-13 10:36:58', 0);
INSERT INTO `comp_product` VALUES (14, 4, 'Lắp nắp thùng xe bán tải', NULL, '\"public/upload/product/lap-nap-thung.jpg\"', 'Mang phong cách hiện đại cùng những đường cong tao nhã, với hệ thống đèn LED phía sau đầy tinh tế. Hệ thống khóa 2 tầng cho sự an toàn và chắc chắn tuyệt đối.Hệ thống khóa 2 tầng cho sự an toàn và chắc chắn tuyệt đối.', 1, '2018-08-13 10:36:58', 0);
INSERT INTO `comp_product` VALUES (15, 3, 'Thiết Bị Định Vị ô Tô S06W', NULL, '\"public/upload/product/dinh-vi.jpg\"', 'Thiết bị vô cùng bền bỉ, có cấu tạo nhỏ gọn nhưng  chắc chắn, giúp định vị các loại xe ô tô , xe máy mà sản phẩm còn hướng đến việc nâng cao khả năng quản lý, giám sát, dẫn đường dành cho cá nhân như  người già, trẻ em, người đi du lịch, lái xe..', 1, '2018-08-13 10:36:59', 0);
INSERT INTO `comp_product` VALUES (16, 4, 'Cản sau xe ford ranger', NULL, '\"public/upload/product/can-sau-xe.jpg\"', 'Cản sau xe tăng sự hầm hố, khỏe khoắn, tiện dụng cho dân chơi Pickup thực thụ. Cản sau cho xe bán tải bởi công dụng vô cùng lớn mà nó đem lại như chống va đập, kéo được trọng tải lớn, tránh khỏi những thiệt hại nặng khi xảy ra va chạm.', 0, '2018-08-13 10:36:59', 0);

-- ----------------------------
-- Table structure for comp_product_cat
-- ----------------------------
DROP TABLE IF EXISTS `comp_product_cat`;
CREATE TABLE `comp_product_cat`  (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `parent_id` bigint(20) NULL DEFAULT NULL,
  `name` varchar(200) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `IXFK_comp_product_cat_comp_product_cat`(`parent_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 5 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of comp_product_cat
-- ----------------------------
INSERT INTO `comp_product_cat` VALUES (1, NULL, 'Bọc - dán');
INSERT INTO `comp_product_cat` VALUES (2, NULL, 'Vệ sinh');
INSERT INTO `comp_product_cat` VALUES (3, NULL, 'Phụ kiện');
INSERT INTO `comp_product_cat` VALUES (4, NULL, 'Khác');

-- ----------------------------
-- Table structure for comp_product_hit
-- ----------------------------
DROP TABLE IF EXISTS `comp_product_hit`;
CREATE TABLE `comp_product_hit`  (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `product_id` bigint(20) NULL DEFAULT NULL,
  `hit` bigint(20) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `IXFK_comp_product_hit_comp_product`(`product_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 11 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of comp_product_hit
-- ----------------------------
INSERT INTO `comp_product_hit` VALUES (1, 9, 3);
INSERT INTO `comp_product_hit` VALUES (2, 4, 2);
INSERT INTO `comp_product_hit` VALUES (3, 1, 3);
INSERT INTO `comp_product_hit` VALUES (4, 2, 11);
INSERT INTO `comp_product_hit` VALUES (5, 3, 4);
INSERT INTO `comp_product_hit` VALUES (6, 7, 1);
INSERT INTO `comp_product_hit` VALUES (7, 10, 2);
INSERT INTO `comp_product_hit` VALUES (8, 8, 4);
INSERT INTO `comp_product_hit` VALUES (9, 6, 4);
INSERT INTO `comp_product_hit` VALUES (10, 5, 2);

-- ----------------------------
-- Table structure for core_menu
-- ----------------------------
DROP TABLE IF EXISTS `core_menu`;
CREATE TABLE `core_menu`  (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `parent_id` bigint(20) NULL DEFAULT NULL,
  `name` varchar(200) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `url` varchar(500) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `sorted` int(255) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `IXFK_core_menu_core_menu`(`parent_id`) USING BTREE,
  CONSTRAINT `core_menu_ibfk_1` FOREIGN KEY (`parent_id`) REFERENCES `core_menu` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE = InnoDB AUTO_INCREMENT = 5 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of core_menu
-- ----------------------------
INSERT INTO `core_menu` VALUES (1, NULL, 'Trang chủ', 'index.html', 1);
INSERT INTO `core_menu` VALUES (2, NULL, 'Sản phẩm', 'shop.html', 2);
INSERT INTO `core_menu` VALUES (3, NULL, 'Giới thiệu', 'about.html', 3);
INSERT INTO `core_menu` VALUES (4, NULL, 'Liên hệ', 'contact.html', 4);

SET FOREIGN_KEY_CHECKS = 1;
