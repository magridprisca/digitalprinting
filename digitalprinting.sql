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

 Date: 17/10/2021 09:52:04
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
  `jenis_barang` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `panjang` int NOT NULL,
  `lebar` int NOT NULL,
  `jml_beli` int NOT NULL,
  `jml_barang` int NULL DEFAULT NULL,
  `satuan` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `tgl_diterima` date NULL DEFAULT NULL,
  `supplier` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `username` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `date_create` datetime NULL DEFAULT NULL,
  `last_update` datetime NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_barang`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 7 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of tb_barangmasuk
-- ----------------------------
INSERT INTO `tb_barangmasuk` VALUES (2, 'kertas', 'Banner', 1, 0, 0, NULL, 'botol', '2021-06-24', 'yuan', 'magrid', NULL, '2021-10-17 09:36:52');
INSERT INTO `tb_barangmasuk` VALUES (4, 'Banner merk merpati', NULL, 6000, 160, 0, NULL, 'cm', '2021-07-05', 'sup a', 'magrid', NULL, '2021-10-17 09:31:15');
INSERT INTO `tb_barangmasuk` VALUES (5, 'Kertas Foto F4', 'Kertas', 33, 22, 0, 3, 'rim', '2021-07-20', 'pt jaya abadi', 'magrid', '2021-10-07 20:58:26', '2021-10-09 21:12:41');
INSERT INTO `tb_barangmasuk` VALUES (6, 'Banner merk ABC', 'Banner', 7000, 320, 0, 3, 'roll', '2021-10-07', 'PT. XYZz', 'magrid', '2021-10-07 19:55:51', '2021-10-07 21:49:27');

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
) ENGINE = InnoDB AUTO_INCREMENT = 4 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of tb_customer
-- ----------------------------
INSERT INTO `tb_customer` VALUES (1, 'Cus A', '0987654321', NULL);
INSERT INTO `tb_customer` VALUES (2, 'Cus B', '0812333312111', NULL);
INSERT INTO `tb_customer` VALUES (3, 'Cus C', '0293881221', NULL);

-- ----------------------------
-- Table structure for tb_detail
-- ----------------------------
DROP TABLE IF EXISTS `tb_detail`;
CREATE TABLE `tb_detail`  (
  `id_detail` int NOT NULL AUTO_INCREMENT,
  `id_transaksi` int NULL DEFAULT NULL,
  `nama_file` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `id_stok` int NULL DEFAULT NULL,
  `harga_detail` int NULL DEFAULT NULL,
  `jasa_design` int NULL DEFAULT NULL,
  `jml_detail` int NULL DEFAULT NULL,
  `total_detail` int NULL DEFAULT NULL,
  `panjang` int NOT NULL,
  `lebar` int NOT NULL,
  `jenis_brg` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `date_created` datetime NULL DEFAULT NULL,
  `last_update` datetime NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `lain_lain` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `biaya_lain` int NULL DEFAULT NULL,
  PRIMARY KEY (`id_detail`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 28 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of tb_detail
-- ----------------------------
INSERT INTO `tb_detail` VALUES (12, 6, NULL, 1, 10000, 0, 10, 100000, 0, 0, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `tb_detail` VALUES (13, 6, NULL, 4, 6000, 7000, 5, 37000, 0, 0, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `tb_detail` VALUES (14, 7, NULL, 1, 7000, 10000, 1, 17000, 0, 0, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `tb_detail` VALUES (15, 7, NULL, 3, 10000, 0, 2, 20000, 0, 0, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `tb_detail` VALUES (19, 8, NULL, 1, 10000, 7000, 4, 47000, 1000, 320, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `tb_detail` VALUES (20, 9, NULL, 1, 7000, 0, 1, 7000, 0, 0, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `tb_detail` VALUES (21, 9, NULL, 4, 20000, 10000, 1, 30000, 0, 0, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `tb_detail` VALUES (22, 10, NULL, 6, 7000, 1, 5, 35001, 1000, 500, NULL, '2021-10-09 10:51:59', NULL, NULL, NULL);
INSERT INTO `tb_detail` VALUES (23, 10, 'abca', 6, 15000, 0, 3, 45000, 1000, 500, NULL, '2021-10-09 10:57:30', NULL, NULL, NULL);
INSERT INTO `tb_detail` VALUES (24, 10, 'abca2', 6, 10000, 0, 3, 45000, 150, 100, 'Banner', '2021-10-09 11:06:05', NULL, NULL, NULL);
INSERT INTO `tb_detail` VALUES (25, 6, 'abc', 1, 9999, 1111, 1, 13332, 120, 160, 'banner', '2021-10-17 09:31:15', NULL, 'mata ikan', 2222);
INSERT INTO `tb_detail` VALUES (27, 11, 'foto', 6, 1000, 2000, 1, 4500, 30, 40, 'kertas', '2021-10-17 09:37:41', NULL, 'laminating', 1500);

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
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of tb_karyawan
-- ----------------------------

-- ----------------------------
-- Table structure for tb_stok
-- ----------------------------
DROP TABLE IF EXISTS `tb_stok`;
CREATE TABLE `tb_stok`  (
  `id_stok` int NOT NULL AUTO_INCREMENT,
  `nama_stok` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `jenis_stok` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `panjang_stok` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `lebar_stok` int NOT NULL,
  `jml_stok` int NULL DEFAULT NULL,
  `satuan_stok` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `harga_stok` int NULL DEFAULT NULL,
  `id_barang` int NULL DEFAULT NULL,
  `potong` int NULL DEFAULT NULL,
  `jml_barang` int NULL DEFAULT NULL,
  `satuan_barang` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `date_created` datetime NULL DEFAULT NULL,
  `last_update` datetime NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_stok`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 7 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of tb_stok
-- ----------------------------
INSERT INTO `tb_stok` VALUES (1, 'Banner merk merpati', NULL, '6000', 160, -118, 'cm', 7000, 4, NULL, NULL, NULL, NULL, '2021-10-17 09:31:15');
INSERT INTO `tb_stok` VALUES (2, 'kertas', NULL, '1', 1, 1, 'botol', 7000, 2, NULL, NULL, NULL, NULL, '2021-10-17 09:37:01');
INSERT INTO `tb_stok` VALUES (3, 'Banner 0.5 mm', NULL, '1000', 110, 1, 'cm', 7000, 5, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `tb_stok` VALUES (4, 'Banner 0.5 mm', NULL, '1000', 210, 1, 'cm', 10000, 5, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `tb_stok` VALUES (6, 'Kertas Foto F4', NULL, '33', 22, 849, 'lembar', 10000, 5, NULL, 2, 'rim', '2021-10-09 09:12:41', '2021-10-17 09:37:41');

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
  PRIMARY KEY (`id_transaksi`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 12 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of tb_transaksi
-- ----------------------------
INSERT INTO `tb_transaksi` VALUES (6, 'magrid', 1, '2021-07-25', 'Umum', 150332, NULL, '', 137000, '2021-10-16 09:06:42', 1, NULL, NULL);
INSERT INTO `tb_transaksi` VALUES (7, 'magrid', 3, '2021-08-07', 'Instansi', 37000, NULL, '2000', 35000, '2021-08-07 11:19:16', 1, NULL, NULL);
INSERT INTO `tb_transaksi` VALUES (8, 'magrid', 2, '2021-08-07', NULL, 47000, NULL, NULL, 0, NULL, 0, NULL, NULL);
INSERT INTO `tb_transaksi` VALUES (9, 'magrid', 2, '2021-10-05', 'Reseler', 37000, NULL, '10000', 27000, '2021-10-05 04:27:15', 0, NULL, NULL);
INSERT INTO `tb_transaksi` VALUES (10, 'magrid', 1, '2021-10-05', NULL, 125001, NULL, NULL, 0, NULL, 1, NULL, NULL);
INSERT INTO `tb_transaksi` VALUES (11, 'magrid', 1, '2021-10-17', 'Umum', 4500, NULL, '', 4500, '2021-10-17 09:39:50', 0, '2021-10-17 09:35:51', NULL);

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
INSERT INTO `tb_user` VALUES ('admin', '$2y$10$u0/e3fSCV7ltFHhaLX.0.OE4Wxq86e8fmSqWGEzGYD0UCSx8CDcFq', '1558351506@digitalent2020.id', 'Admin', 'Admin');
INSERT INTO `tb_user` VALUES ('magrid', '$2y$10$yMAp8hcJXDT3Fsu7bXZViezUHEZfFVNxFk4SkQ9NItGNvjl5IMGZO', 'admin@kars.or.id', 'Magrid', 'admin');
INSERT INTO `tb_user` VALUES ('tessssss_', '$2y$10$EdtSc2k.BL0plnz2FRyGf.vB2fdoVUS/.Nz30lZmLCq99zr/jMXAa', 'tes@mail.com', 'tessssss lah', 'Admin');

-- ----------------------------
-- Triggers structure for table tb_detail
-- ----------------------------
DROP TRIGGER IF EXISTS `tambah_detail`;
delimiter ;;
CREATE TRIGGER `tambah_detail` AFTER INSERT ON `tb_detail` FOR EACH ROW BEGIN
UPDATE tb_transaksi set total_transaksi = total_transaksi + NEW.total_detail WHERE id_transaksi= NEW.id_transaksi;

	IF NEW.jenis_brg = "Banner" THEN 
    UPDATE tb_stok SET jml_stok = jml_stok - NEW.panjang WHERE id_stok = NEW.id_stok;
	ELSEIF NEW.jenis_brg = "Kertas" THEN 
    UPDATE tb_stok SET jml_stok = jml_stok - NEW.jml_detail WHERE id_stok = NEW.id_stok;
  END IF;
END
;;
delimiter ;

-- ----------------------------
-- Triggers structure for table tb_detail
-- ----------------------------
DROP TRIGGER IF EXISTS `edit_detail`;
delimiter ;;
CREATE TRIGGER `edit_detail` BEFORE UPDATE ON `tb_detail` FOR EACH ROW BEGIN
UPDATE tb_transaksi set  total_transaksi= total_transaksi - OLD.total_detail + NEW.total_detail WHERE id_transaksi= NEW.id_transaksi;

	IF NEW.jenis_brg = "Banner" THEN 
    UPDATE tb_stok SET jml_stok = jml_stok + OLD.panjang - NEW.panjang WHERE id_stok = NEW.id_stok;
	ELSEIF NEW.jenis_brg = "Kertas" THEN 
    UPDATE tb_stok SET jml_stok = jml_stok + OLD.jml_detail - NEW.jml_detail WHERE id_stok = NEW.id_stok;
  END IF;
END
;;
delimiter ;

-- ----------------------------
-- Triggers structure for table tb_detail
-- ----------------------------
DROP TRIGGER IF EXISTS `hapus_detail`;
delimiter ;;
CREATE TRIGGER `hapus_detail` BEFORE DELETE ON `tb_detail` FOR EACH ROW BEGIN
UPDATE tb_transaksi set total_transaksi = total_transaksi - OLD.total_detail WHERE id_transaksi= OLD.id_transaksi;

	IF OLD.jenis_brg = "Banner" THEN 
    UPDATE tb_stok SET jml_stok = jml_stok + OLD.panjang WHERE id_stok = OLD.id_stok;
	ELSEIF OLD.jenis_brg = "Kertas" THEN 
    UPDATE tb_stok SET jml_stok = jml_stok + OLD.jml_detail WHERE id_stok = OLD.id_stok;
  END IF;
END
;;
delimiter ;

-- ----------------------------
-- Triggers structure for table tb_stok
-- ----------------------------
DROP TRIGGER IF EXISTS `tambah_stok`;
delimiter ;;
CREATE TRIGGER `tambah_stok` AFTER INSERT ON `tb_stok` FOR EACH ROW BEGIN
UPDATE tb_barangmasuk set jml_barang = jml_barang - NEW.jml_barang 
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
UPDATE tb_barangmasuk set jml_barang = jml_barang + OLD.jml_barang - NEW.jml_barang
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
UPDATE tb_barangmasuk set jml_barang = jml_barang + OLD.jml_barang
WHERE id_barang= OLD.id_barang;
END
;;
delimiter ;

SET FOREIGN_KEY_CHECKS = 1;
