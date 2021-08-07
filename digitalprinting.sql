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

 Date: 07/08/2021 17:02:00
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for tb_barangmasuk
-- ----------------------------
DROP TABLE IF EXISTS `tb_barangmasuk`;
CREATE TABLE `tb_barangmasuk`  (
  `id_barang` int(11) NOT NULL AUTO_INCREMENT,
  `nama_barang` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `panjang` int(11) NOT NULL,
  `lebar` int(11) NOT NULL,
  `satuan` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `jml_barang` int(11) NULL DEFAULT NULL,
  `tgl_diterima` date NULL DEFAULT NULL,
  `supplier` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `username` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id_barang`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 6 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tb_barangmasuk
-- ----------------------------
INSERT INTO `tb_barangmasuk` VALUES (1, 'kertasA', 0, 0, '', 1, '2021-06-21', 'yuan', 'magrid');
INSERT INTO `tb_barangmasuk` VALUES (2, 'kertas', 1, 0, 'botol', 1, '2021-06-24', 'yuan', 'magrid');
INSERT INTO `tb_barangmasuk` VALUES (4, 'Banner merk merpati', 6000, 160, 'cm', 1, '2021-07-05', 'sup a', 'magrid');
INSERT INTO `tb_barangmasuk` VALUES (5, 'Banner 0.5 mm', 1000, 0, 'cm', 1, '2021-07-20', 'pt jaya abadi', 'magrid');

-- ----------------------------
-- Table structure for tb_customer
-- ----------------------------
DROP TABLE IF EXISTS `tb_customer`;
CREATE TABLE `tb_customer`  (
  `id_customer` int(11) NOT NULL AUTO_INCREMENT,
  `nama_customer` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `telp_customer` varchar(13) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `keterangan` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id_customer`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 4 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tb_customer
-- ----------------------------
INSERT INTO `tb_customer` VALUES (1, 'Cus A', '0987654321', '-');
INSERT INTO `tb_customer` VALUES (2, 'Cus B', '0812333312111', 'langganan');
INSERT INTO `tb_customer` VALUES (3, 'Cus C', '0293881221', '-');

-- ----------------------------
-- Table structure for tb_detail
-- ----------------------------
DROP TABLE IF EXISTS `tb_detail`;
CREATE TABLE `tb_detail`  (
  `id_detail` int(11) NOT NULL AUTO_INCREMENT,
  `id_transaksi` int(11) NULL DEFAULT NULL,
  `id_stok` int(11) NULL DEFAULT NULL,
  `harga_detail` int(11) NULL DEFAULT NULL,
  `jasa_design` int(11) NULL DEFAULT NULL,
  `jml_detail` int(11) NULL DEFAULT NULL,
  `total_detail` int(11) NULL DEFAULT NULL,
  `panjang` int(11) NOT NULL,
  `lebar` int(11) NOT NULL,
  PRIMARY KEY (`id_detail`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 16 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tb_detail
-- ----------------------------
INSERT INTO `tb_detail` VALUES (12, 6, 1, 10000, 0, 10, 100000, 0, 0);
INSERT INTO `tb_detail` VALUES (13, 6, 4, 6000, 7000, 5, 37000, 0, 0);
INSERT INTO `tb_detail` VALUES (14, 7, 1, 7000, 10000, 1, 17000, 0, 0);
INSERT INTO `tb_detail` VALUES (15, 7, 3, 10000, 0, 2, 20000, 0, 0);

-- ----------------------------
-- Table structure for tb_gaji
-- ----------------------------
DROP TABLE IF EXISTS `tb_gaji`;
CREATE TABLE `tb_gaji`  (
  `id_gaji` int(11) NOT NULL AUTO_INCREMENT,
  `tahun_gaji` int(4) NULL DEFAULT NULL,
  `bulan_gaji` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `gapok` int(11) NULL DEFAULT NULL,
  `lainlain` int(11) NULL DEFAULT NULL,
  `total_gaji` int(11) NULL DEFAULT NULL,
  `id_karyawan` int(11) NULL DEFAULT NULL,
  PRIMARY KEY (`id_gaji`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for tb_karyawan
-- ----------------------------
DROP TABLE IF EXISTS `tb_karyawan`;
CREATE TABLE `tb_karyawan`  (
  `id_karyawan` int(11) NOT NULL AUTO_INCREMENT,
  `tgl_masuk` date NULL DEFAULT NULL,
  `nama_karyawan` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `nohp_karyawan` varchar(13) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `alamat_karyawan` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `posisi` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `username` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id_karyawan`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for tb_stok
-- ----------------------------
DROP TABLE IF EXISTS `tb_stok`;
CREATE TABLE `tb_stok`  (
  `id_stok` int(11) NOT NULL AUTO_INCREMENT,
  `nama_stok` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `panjang_stok` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `lebar_stok` int(11) NOT NULL,
  `satuan_stok` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `jml_stok` int(11) NULL DEFAULT NULL,
  `harga_stok` int(11) NULL DEFAULT NULL,
  `id_barang` int(11) NULL DEFAULT NULL,
  PRIMARY KEY (`id_stok`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 5 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tb_stok
-- ----------------------------
INSERT INTO `tb_stok` VALUES (1, 'Banner merk merpati', '6000', 160, 'cm', 2, 7000, 4);
INSERT INTO `tb_stok` VALUES (2, 'kertas', '1', 1, 'botol', 1, 7000, 2);
INSERT INTO `tb_stok` VALUES (3, 'Banner 0.5 mm', '1000', 110, 'cm', 1, 7000, 5);
INSERT INTO `tb_stok` VALUES (4, 'Banner 0.5 mm', '1000', 210, 'cm', 1, 10000, 5);

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
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tb_user
-- ----------------------------
INSERT INTO `tb_user` VALUES ('admin', '$2y$10$u0/e3fSCV7ltFHhaLX.0.OE4Wxq86e8fmSqWGEzGYD0UCSx8CDcFq', '1558351506@digitalent2020.id', 'Admin', 'Admin');
INSERT INTO `tb_user` VALUES ('magrid', '$2y$10$yMAp8hcJXDT3Fsu7bXZViezUHEZfFVNxFk4SkQ9NItGNvjl5IMGZO', 'admin@kars.or.id', 'Magrid', 'admin');
INSERT INTO `tb_user` VALUES ('tessssss_', '$2y$10$EdtSc2k.BL0plnz2FRyGf.vB2fdoVUS/.Nz30lZmLCq99zr/jMXAa', 'tes@mail.com', 'tessssss lah', 'Admin');

-- ----------------------------
-- Triggers structure for table tb_detail
-- ----------------------------
DROP TRIGGER IF EXISTS `tambah_detail`;
delimiter ;;
CREATE TRIGGER `tambah_detail` AFTER INSERT ON `tb_detail` FOR EACH ROW BEGIN
UPDATE tb_transaksi set total_transaksi = total_transaksi + NEW.total_detail 
WHERE id_transaksi= NEW.id_transaksi;
END
;;
delimiter ;

-- ----------------------------
-- Triggers structure for table tb_detail
-- ----------------------------
DROP TRIGGER IF EXISTS `edit_detail`;
delimiter ;;
CREATE TRIGGER `edit_detail` BEFORE UPDATE ON `tb_detail` FOR EACH ROW BEGIN
UPDATE tb_transaksi set  total_transaksi= total_transaksi - OLD.total_detail + NEW.total_detail
WHERE id_transaksi= NEW.id_transaksi;
END
;;
delimiter ;

-- ----------------------------
-- Triggers structure for table tb_detail
-- ----------------------------
DROP TRIGGER IF EXISTS `hapus_detail`;
delimiter ;;
CREATE TRIGGER `hapus_detail` BEFORE DELETE ON `tb_detail` FOR EACH ROW BEGIN
UPDATE tb_transaksi set total_transaksi = total_transaksi - OLD.total_detail
WHERE id_transaksi= OLD.id_transaksi;
END
;;
delimiter ;

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
