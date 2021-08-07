/*
 Navicat Premium Data Transfer

 Source Server         : LaptopHP
 Source Server Type    : MySQL
 Source Server Version : 100121
 Source Host           : localhost:3306
 Source Schema         : digitalprinting

 Target Server Type    : MySQL
 Target Server Version : 100121
 File Encoding         : 65001

 Date: 07/08/2021 15:28:46
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for tb_detail
-- ----------------------------
DROP TABLE IF EXISTS `tb_detail`;
CREATE TABLE `tb_detail`  (
  `id_detail` int NOT NULL AUTO_INCREMENT,
  `id_transaksi` int NULL DEFAULT NULL,
  `id_stok` int NULL DEFAULT NULL,
  `harga_detail` int NULL DEFAULT NULL,
  `jasa_design` int NULL DEFAULT NULL,
  `jml_detail` int NULL DEFAULT NULL,
  `total_detail` int NOT NULL,
  `panjang` int NOT NULL,
  `lebar` int NOT NULL,
  PRIMARY KEY (`id_detail`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 12 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of tb_detail
-- ----------------------------
INSERT INTO `tb_detail` VALUES (1, 1, 3, 6000, 5000, 1, 11000, 0, 0);
INSERT INTO `tb_detail` VALUES (2, 3, 3, 6000, 0, 1, 6000, 0, 0);
INSERT INTO `tb_detail` VALUES (3, 4, 3, 15000, 5000, 1, 20000, 0, 0);
INSERT INTO `tb_detail` VALUES (4, 4, 3, 15000, 5000, 1, 20000, 0, 0);
INSERT INTO `tb_detail` VALUES (5, 6, 3, 1, 2, 1, 3, 0, 0);
INSERT INTO `tb_detail` VALUES (6, 7, 3, 2, 2, 1, 4, 0, 0);
INSERT INTO `tb_detail` VALUES (7, 8, 3, 1000, 5000, 1, 6000, 0, 0);
INSERT INTO `tb_detail` VALUES (8, 9, 3, 5000, 1000, 1, 6000, 0, 0);
INSERT INTO `tb_detail` VALUES (9, 10, 3, 1000, 1000, 1, 2000, 120, 120);
INSERT INTO `tb_detail` VALUES (10, 11, 3, 2, 1, 1, 3, 120, 120);
INSERT INTO `tb_detail` VALUES (11, 12, 3, 2, 1, 1, 3, 120, 1);

SET FOREIGN_KEY_CHECKS = 1;
