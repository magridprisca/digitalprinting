/*
 Navicat Premium Data Transfer

 Source Server         : server E
 Source Server Type    : MySQL
 Source Server Version : 100406
 Source Host           : localhost:3306
 Source Schema         : digitalprinting

 Target Server Type    : MySQL
 Target Server Version : 100406
 File Encoding         : 65001

 Date: 11/07/2021 15:55:18
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for tb_transaksi
-- ----------------------------
DROP TABLE IF EXISTS `tb_transaksi`;
CREATE TABLE `tb_transaksi`  (
  `id_transaksi` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `id_customer` int(11) NULL DEFAULT NULL,
  `tgl_transaksi` date NULL DEFAULT NULL,
  `total_transaksi` int(11) NULL DEFAULT NULL,
  `dibayar` int(11) NULL DEFAULT 0,
  `tgl_bayar` datetime(0) NULL DEFAULT NULL,
  `ket_bayar` tinyint(1) NULL DEFAULT 0,
  PRIMARY KEY (`id_transaksi`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 4 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tb_transaksi
-- ----------------------------
INSERT INTO `tb_transaksi` VALUES (1, 'magrid', 1, '2021-05-22', 0, 0, '2021-07-11 15:53:47', 0);
INSERT INTO `tb_transaksi` VALUES (2, 'magrid', 1, '2021-07-05', NULL, NULL, NULL, NULL);
INSERT INTO `tb_transaksi` VALUES (3, 'magrid', 1, '2021-07-11', NULL, NULL, NULL, NULL);

SET FOREIGN_KEY_CHECKS = 1;
