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

 Date: 04/07/2021 14:21:28
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for tb_stok
-- ----------------------------
DROP TABLE IF EXISTS `tb_stok`;
CREATE TABLE `tb_stok`  (
  `id_stok` int(11) NOT NULL,
  `nama_stok` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `panjang_stok` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `lebar_stok` int(11) NOT NULL,
  `satuan_stok` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `jml_stok` int(11) NULL DEFAULT NULL,
  `harga_stok` int(11) NULL DEFAULT NULL,
  `id_barang` int(11) NULL DEFAULT NULL
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tb_stok
-- ----------------------------
INSERT INTO `tb_stok` VALUES (0, 'tinta', '1', 1, 'm', 1, 5000, 3);
INSERT INTO `tb_stok` VALUES (0, 'tnta', '1', 1, 'botol', 1, 5000, 3);
INSERT INTO `tb_stok` VALUES (0, 'tinta', '1', 1, 'botol', 1, 500, 3);

-- ----------------------------
-- Triggers structure for table tb_stok
-- ----------------------------
DROP TRIGGER IF EXISTS `tambah_stok`;
delimiter ;;
CREATE TRIGGER `tambah_stok` AFTER INSERT ON `tb_stok` FOR EACH ROW BEGIN
UPDATE tb_barangmasuk set lebar = lebar - NEW.lebar_stok 
WHERE id_barang= NEW.id_barang;
END
;;
delimiter ;

-- ----------------------------
-- Triggers structure for table tb_stok
-- ----------------------------
DROP TRIGGER IF EXISTS `edit_stok`;
delimiter ;;
CREATE TRIGGER `edit_stok` AFTER UPDATE ON `tb_stok` FOR EACH ROW BEGIN
UPDATE tb_barangmasuk set lebar = lebar + OLD.lebar_stok - NEW.lebar_stok
WHERE id_barang= NEW.id_barang;
END
;;
delimiter ;

-- ----------------------------
-- Triggers structure for table tb_stok
-- ----------------------------
DROP TRIGGER IF EXISTS `delete_stok`;
delimiter ;;
CREATE TRIGGER `delete_stok` BEFORE DELETE ON `tb_stok` FOR EACH ROW BEGIN
UPDATE tb_barangmasuk set lebar = lebar + OLD.lebar_stok
WHERE id_barang= OLD.id_barang;
END
;;
delimiter ;

SET FOREIGN_KEY_CHECKS = 1;
