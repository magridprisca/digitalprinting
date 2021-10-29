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

 Date: 17/10/2021 14:19:27
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for tb_transaksi
-- ----------------------------
DROP TABLE IF EXISTS `tb_transaksi`;
CREATE TABLE `tb_transaksi`  (
  `id_transaksi` int NOT NULL AUTO_INCREMENT,
  `username` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `id_customer` int NULL DEFAULT NULL,
  `tgl_transaksi` date NULL DEFAULT NULL,
  `jenis_customer` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `total_transaksi` int NULL DEFAULT 0,
  `no_nota` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `diskon` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `dibayar` int NULL DEFAULT 0,
  `tgl_bayar` datetime NULL DEFAULT NULL,
  `ket_bayar` tinyint(1) NULL DEFAULT 0,
  `date_created` datetime NULL DEFAULT NULL,
  `last_update` datetime NULL DEFAULT NULL,
  `kembali` int NULL DEFAULT NULL,
  `nota` int NOT NULL,
  PRIMARY KEY (`id_transaksi`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 12 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of tb_transaksi
-- ----------------------------
INSERT INTO `tb_transaksi` VALUES (6, 'magrid', 1, '2021-07-25', 'Umum', 150332, NULL, '', 137000, '2021-10-16 09:06:42', 1, NULL, NULL, NULL, 0);
INSERT INTO `tb_transaksi` VALUES (7, 'magrid', 3, '2021-08-07', 'Instansi', 37000, NULL, '2000', 35000, '2021-08-07 11:19:16', 1, NULL, NULL, NULL, 0);
INSERT INTO `tb_transaksi` VALUES (8, 'magrid', 2, '2021-08-07', NULL, 47000, NULL, NULL, 0, NULL, 0, NULL, NULL, NULL, 0);
INSERT INTO `tb_transaksi` VALUES (9, 'magrid', 2, '2021-10-05', 'Reseler', 37000, NULL, '10000', 27000, '2021-10-05 04:27:15', 0, NULL, NULL, NULL, 0);
INSERT INTO `tb_transaksi` VALUES (10, 'magrid', 1, '2021-10-05', NULL, 125001, NULL, NULL, 0, NULL, 1, NULL, NULL, NULL, 0);
INSERT INTO `tb_transaksi` VALUES (11, 'magrid', 1, '2021-10-17', 'Umum', 4500, NULL, NULL, 5000, '2021-10-17 01:36:40', 0, '2021-10-17 09:35:51', NULL, 500, 1234);

SET FOREIGN_KEY_CHECKS = 1;
