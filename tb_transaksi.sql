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

 Date: 07/08/2021 16:53:27
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
  `jenis_customer` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `total_transaksi` int(11) NULL DEFAULT 0,
  `diskon` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `dibayar` int(11) NULL DEFAULT 0,
  `tgl_bayar` datetime(0) NULL DEFAULT NULL,
  `ket_bayar` tinyint(1) NULL DEFAULT 0,
  PRIMARY KEY (`id_transaksi`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 8 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tb_transaksi
-- ----------------------------
INSERT INTO `tb_transaksi` VALUES (6, 'magrid', 1, '2021-07-25', NULL, 137000, NULL, 0, NULL, 0);
INSERT INTO `tb_transaksi` VALUES (7, 'magrid', 3, '2021-08-07', 'Instansi', 37000, '2000', 35000, '2021-08-07 11:19:16', 1);

SET FOREIGN_KEY_CHECKS = 1;
