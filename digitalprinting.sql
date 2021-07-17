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

 Date: 15/07/2021 13:24:37
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for tb_barangmasuk
-- ----------------------------
DROP TABLE IF EXISTS `tb_barangmasuk`;
CREATE TABLE `tb_barangmasuk`  (
  `id_barang` int NOT NULL AUTO_INCREMENT,
  `nama_barang` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `panjang` int NOT NULL,
  `lebar` int NOT NULL,
  `satuan` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `jml_barang` int NULL DEFAULT NULL,
  `tgl_diterima` date NULL DEFAULT NULL,
  `supplier` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `username` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id_barang`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 7 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of tb_barangmasuk
-- ----------------------------
INSERT INTO `tb_barangmasuk` VALUES (1, 'kertasA', 0, 0, '', 1, '2021-06-21', 'yuan', 'magrid');
INSERT INTO `tb_barangmasuk` VALUES (2, 'kertas', 1, 1, 'botol', 1, '2021-06-24', 'yuan', 'magrid');
INSERT INTO `tb_barangmasuk` VALUES (3, 'tinta', 1, 1, 'botol', 1, '2021-06-25', 'yuan', 'magrid');
INSERT INTO `tb_barangmasuk` VALUES (5, 'banner', 120, 0, 'cm', 1, '2021-07-04', 'yuan', 'magrid');
INSERT INTO `tb_barangmasuk` VALUES (6, 'banner A', 120, 120, 'cm', 1, '2021-07-11', 'magrid', 'magrid');

-- ----------------------------
-- Table structure for tb_customer
-- ----------------------------
DROP TABLE IF EXISTS `tb_customer`;
CREATE TABLE `tb_customer`  (
  `id_customer` int NOT NULL AUTO_INCREMENT,
  `nama_customer` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `telp_customer` varchar(13) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `keterangan` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id_customer`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of tb_customer
-- ----------------------------
INSERT INTO `tb_customer` VALUES (1, 'hendra', '1234', 'abc');

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
  PRIMARY KEY (`id_detail`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of tb_detail
-- ----------------------------
INSERT INTO `tb_detail` VALUES (1, 1, 3, 6000, 5000, 1, 11000);
INSERT INTO `tb_detail` VALUES (2, 3, 3, 6000, 0, 1, 6000);

-- ----------------------------
-- Table structure for tb_gaji
-- ----------------------------
DROP TABLE IF EXISTS `tb_gaji`;
CREATE TABLE `tb_gaji`  (
  `id_gaji` int NOT NULL AUTO_INCREMENT,
  `tahun_gaji` int NULL DEFAULT NULL,
  `bulan_gaji` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `gapok` int NULL DEFAULT NULL,
  `lainlain` int NULL DEFAULT NULL,
  `total_gaji` int NULL DEFAULT NULL,
  `id_karyawan` int NULL DEFAULT NULL,
  PRIMARY KEY (`id_gaji`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of tb_gaji
-- ----------------------------

-- ----------------------------
-- Table structure for tb_karyawan
-- ----------------------------
DROP TABLE IF EXISTS `tb_karyawan`;
CREATE TABLE `tb_karyawan`  (
  `id_karyawan` int NOT NULL AUTO_INCREMENT,
  `tgl_masuk` date NULL DEFAULT NULL,
  `nama_karyawan` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `nohp_karyawan` varchar(13) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `alamat_karyawan` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `posisi` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `username` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id_karyawan`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of tb_karyawan
-- ----------------------------
INSERT INTO `tb_karyawan` VALUES (1, '2021-06-17', 'yuanita', '123456', 'malang', 'kasir', 'magrid');

-- ----------------------------
-- Table structure for tb_stok
-- ----------------------------
DROP TABLE IF EXISTS `tb_stok`;
CREATE TABLE `tb_stok`  (
  `id_stok` int NOT NULL AUTO_INCREMENT,
  `nama_stok` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `panjang_stok` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `lebar_stok` int NOT NULL,
  `satuan_stok` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `jml_stok` int NULL DEFAULT NULL,
  `harga_stok` int NULL DEFAULT NULL,
  `id_barang` int NULL DEFAULT NULL,
  PRIMARY KEY (`id_stok`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 4 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of tb_stok
-- ----------------------------
INSERT INTO `tb_stok` VALUES (3, 'banner', '120', 60, 'cm', 2, 6000, 5);

-- ----------------------------
-- Table structure for tb_transaksi
-- ----------------------------
DROP TABLE IF EXISTS `tb_transaksi`;
CREATE TABLE `tb_transaksi`  (
  `id_transaksi` int NOT NULL AUTO_INCREMENT,
  `username` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `id_customer` int NULL DEFAULT NULL,
  `tgl_transaksi` date NULL DEFAULT NULL,
  `total_transaksi` int NULL DEFAULT NULL,
  `dibayar` int NULL DEFAULT 0,
  `tgl_bayar` datetime NULL DEFAULT NULL,
  `ket_bayar` tinyint(1) NULL DEFAULT 0,
  PRIMARY KEY (`id_transaksi`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 4 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of tb_transaksi
-- ----------------------------
INSERT INTO `tb_transaksi` VALUES (1, 'magrid', 1, '2021-05-22', 0, 0, '2021-07-11 15:53:47', 0);
INSERT INTO `tb_transaksi` VALUES (2, 'magrid', 1, '2021-07-05', NULL, NULL, NULL, NULL);
INSERT INTO `tb_transaksi` VALUES (3, 'magrid', 1, '2021-07-11', NULL, NULL, NULL, NULL);

-- ----------------------------
-- Table structure for tb_user
-- ----------------------------
DROP TABLE IF EXISTS `tb_user`;
CREATE TABLE `tb_user`  (
  `username` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `password` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `email` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `nama_lengkap` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `level` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`username`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of tb_user
-- ----------------------------
INSERT INTO `tb_user` VALUES ('magrid', '$2y$10$yMAp8hcJXDT3Fsu7bXZViezUHEZfFVNxFk4SkQ9NItGNvjl5IMGZO', 'admin@kars.or.id', 'magrid', 'admin');
INSERT INTO `tb_user` VALUES ('yuanitahendra', '$2y$10$u1baOZ9eQGA0fSt3rI/y/uTAefZcsFF6RNdXLWMMjS21AJnkqoham', 'yuanitahc@gmail.com', 'yuanitahc', 'User');

-- ----------------------------
-- Triggers structure for table tb_stok
-- ----------------------------
DROP TRIGGER IF EXISTS `tambah_stok`;
delimiter ;;
CREATE TRIGGER `tambah_stok` AFTER INSERT ON `tb_stok` FOR EACH ROW BEGIN
UPDATE tb_barangmasuk set lebar = lebar - (NEW.lebar_stok * NEW.jml_stok)
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
UPDATE tb_barangmasuk set lebar = lebar + (OLD.lebar_stok* OLD.jml_stok) - (NEW.lebar_stok* NEW.jml_stok)
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
UPDATE tb_barangmasuk set lebar = lebar + (OLD.lebar_stok * OLD.jml_stok)
WHERE id_barang= OLD.id_barang;
END
;;
delimiter ;

SET FOREIGN_KEY_CHECKS = 1;
