/*
 Navicat Premium Data Transfer

 Source Server         : localhost
 Source Server Type    : MySQL
 Source Server Version : 100427
 Source Host           : localhost:3306
 Source Schema         : wargatcr

 Target Server Type    : MySQL
 Target Server Version : 100427
 File Encoding         : 65001

 Date: 02/11/2023 17:15:53
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for blogs
-- ----------------------------
DROP TABLE IF EXISTS `blogs`;
CREATE TABLE `blogs`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `blog_title` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `category` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `blog_image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `article` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_input` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of blogs
-- ----------------------------
INSERT INTO `blogs` VALUES (1, 'Pemilihan Pengurus Paguyuban', 'pemilihan-pengurus-paguyuban', 'Kegiatan Warga', '20231026-070007.png', '<p>Perumahan Tenjo City Residence 3 terletak di tengah-tengah lingkungan yang ramah, dengan potensi besar untuk menjadi komunitas yang kuat dan solid. Untuk mencapai tujuan tersebut, penduduk Perumahan Tenjo City Residence 3 telah sepakat untuk membentuk sebuah paguyuban perumahan yang akan bertanggung jawab untuk mengelola berbagai aspek kehidupan komunitas. Artikel ini akan membahas proses pembentukan pengurus paguyuban perumahan tersebut dan tujuan utama yang ingin dicapai.</p><p><strong>1. Pembentukan Pengurus Paguyuban</strong></p><p>Pembentukan pengurus paguyuban perumahan adalah langkah penting dalam membangun komunitas yang berkualitas di Perumahan Tenjo City Residence 3. Berikut adalah tahap-tahap pembentukan pengurus paguyuban:</p><p><strong>a. Musyawarah Pendirian</strong></p><p>Langkah pertama dalam pembentukan paguyuban adalah mengadakan musyawarah pendirian. Semua penduduk Perumahan Tenjo City Residence 3 diundang untuk hadir dan berpartisipasi dalam musyawarah ini. Pada musyawarah tersebut, dibahas rencana pembentukan paguyuban, tujuan utama, dan peran masing-masing anggota dalam paguyuban.</p><p><strong>b. Pemilihan Pengurus</strong></p><p>Setelah kesepakatan awal tercapai dalam musyawarah pendirian, dilakukan pemilihan pengurus paguyuban. Pengurus terdiri dari ketua, sekretaris, bendahara, dan beberapa anggota. Pengurus ini akan memainkan peran penting dalam mengelola kegiatan dan aspek-aspek komunitas.</p><p><strong>c. Penetapan Anggaran Dasar dan Anggaran Rumah Tangga</strong></p><p>Pengurus paguyuban kemudian bekerja sama dengan anggota lain untuk menetapkan anggaran dasar dan anggaran rumah tangga paguyuban. Dokumen ini akan mengatur aturan dan prosedur operasional paguyuban serta pengelolaan dana.</p><p><strong>2. Tujuan Pembentukan Paguyuban</strong></p><p>Pembentukan paguyuban perumahan di Perumahan Tenjo City Residence 3 memiliki beberapa tujuan utama:</p><p><strong>a. Meningkatkan Keamanan dan Kebersihan</strong></p><p>Salah satu tujuan utama paguyuban adalah untuk meningkatkan tingkat keamanan dan kebersihan di lingkungan perumahan. Pengurus paguyuban akan berkoordinasi dengan warga untuk memastikan lingkungan tetap aman dan bersih.</p><p><strong>b. Meningkatkan Kualitas Hidup</strong></p><p>Paguyuban juga bertujuan untuk meningkatkan kualitas hidup penduduk Perumahan Tenjo City Residence 3. Hal ini dapat mencakup penyelenggaraan kegiatan sosial, acara-acara kebersamaan, serta pengelolaan fasilitas umum.</p><p><strong>c. Mewakili Penduduk</strong></p><p>Paguyuban akan berfungsi sebagai perwakilan penduduk dalam berbagai hal, termasuk berkomunikasi dengan pihak pengembang perumahan dan pemerintah setempat.</p><p><strong>d. Pengelolaan Dana Bersama</strong></p><p>Saluran keuangan yang dikelola dengan baik akan digunakan untuk membiayai berbagai proyek dan kegiatan yang bermanfaat bagi komunitas, seperti perawatan infrastruktur, perbaikan fasilitas, dan inisiatif sosial.</p><p><strong>3. Partisipasi Aktif Warga</strong></p><p>Keberhasilan paguyuban sangat tergantung pada partisipasi aktif warga. Semua penduduk diundang untuk menjadi anggota paguyuban, berpartisipasi dalam kegiatan, dan memberikan masukan yang berguna.</p><p>Dengan pembentukan paguyuban perumahan, diharapkan Perumahan Tenjo City Residence 3 akan menjadi tempat yang lebih baik untuk tinggal. Semua warga diundang untuk bergabung dan berkontribusi dalam membangun komunitas yang lebih baik dan lebih kuat. Dengan kerja sama dan komitmen bersama, Perumahan Tenjo City Residence 3 dapat menjadi tempat yang nyaman dan harmonis bagi semua penduduknya.</p>', 'Irawan', '2023-10-26 07:00:07', '2023-10-26 07:00:07');

-- ----------------------------
-- Table structure for failed_jobs
-- ----------------------------
DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE `failed_jobs`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `failed_jobs_uuid_unique`(`uuid` ASC) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of failed_jobs
-- ----------------------------

-- ----------------------------
-- Table structure for galleries
-- ----------------------------
DROP TABLE IF EXISTS `galleries`;
CREATE TABLE `galleries`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `image_id` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `image_name` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_input` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 13 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of galleries
-- ----------------------------
INSERT INTO `galleries` VALUES (1, 'Gal20231020-082357', '20231020-082357.jpeg', 'Irawan', '2023-10-20 08:23:57', '2023-10-20 08:23:57');
INSERT INTO `galleries` VALUES (2, 'Gal20231020-082644', '20231020-082644.jpeg', 'Irawan', '2023-10-20 08:26:44', '2023-10-20 08:26:44');
INSERT INTO `galleries` VALUES (3, 'Gal20231020-100358', '20231020-100358.jpeg', 'Irawan', '2023-10-20 10:03:58', '2023-10-20 10:03:58');
INSERT INTO `galleries` VALUES (4, 'Gal20231020-100405', '20231020-100405.jpeg', 'Irawan', '2023-10-20 10:04:05', '2023-10-20 10:04:05');
INSERT INTO `galleries` VALUES (5, 'Gal20231020-100412', '20231020-100412.jpeg', 'Irawan', '2023-10-20 10:04:12', '2023-10-20 10:04:12');
INSERT INTO `galleries` VALUES (6, 'Gal20231020-100423', '20231020-100423.jpeg', 'Irawan', '2023-10-20 10:04:23', '2023-10-20 10:04:23');
INSERT INTO `galleries` VALUES (7, 'Gal20231020-100442', '20231020-100442.jpeg', 'Irawan', '2023-10-20 10:04:42', '2023-10-20 10:04:42');
INSERT INTO `galleries` VALUES (8, 'Gal20231020-100450', '20231020-100450.jpeg', 'Irawan', '2023-10-20 10:04:50', '2023-10-20 10:04:50');
INSERT INTO `galleries` VALUES (9, 'Gal20231020-100514', '20231020-100514.jpeg', 'Irawan', '2023-10-20 10:05:14', '2023-10-20 10:05:14');
INSERT INTO `galleries` VALUES (10, 'Gal20231020-100523', '20231020-100523.jpeg', 'Irawan', '2023-10-20 10:05:23', '2023-10-20 10:05:23');
INSERT INTO `galleries` VALUES (11, 'Gal20231020-100530', '20231020-100530.jpeg', 'Irawan', '2023-10-20 10:05:30', '2023-10-20 10:05:30');
INSERT INTO `galleries` VALUES (12, 'Gal20231020-100538', '20231020-100538.jpeg', 'Irawan', '2023-10-20 10:05:38', '2023-10-20 10:05:38');

-- ----------------------------
-- Table structure for migrations
-- ----------------------------
DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations`  (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 7 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of migrations
-- ----------------------------
INSERT INTO `migrations` VALUES (1, '2014_10_12_000000_create_users_table', 1);
INSERT INTO `migrations` VALUES (2, '2014_10_12_100000_create_password_resets_table', 1);
INSERT INTO `migrations` VALUES (3, '2019_08_19_000000_create_failed_jobs_table', 1);
INSERT INTO `migrations` VALUES (4, '2019_12_14_000001_create_personal_access_tokens_table', 1);
INSERT INTO `migrations` VALUES (5, '2022_09_30_153633_create_blogs_table', 1);
INSERT INTO `migrations` VALUES (6, '2023_10_20_073809_galleries_table', 2);

-- ----------------------------
-- Table structure for password_resets
-- ----------------------------
DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE `password_resets`  (
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  INDEX `password_resets_email_index`(`email` ASC) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of password_resets
-- ----------------------------

-- ----------------------------
-- Table structure for personal_access_tokens
-- ----------------------------
DROP TABLE IF EXISTS `personal_access_tokens`;
CREATE TABLE `personal_access_tokens`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `personal_access_tokens_token_unique`(`token` ASC) USING BTREE,
  INDEX `personal_access_tokens_tokenable_type_tokenable_id_index`(`tokenable_type` ASC, `tokenable_id` ASC) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of personal_access_tokens
-- ----------------------------

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `users_email_unique`(`email` ASC) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES (1, 'Irawan', 'irawanbellamy@gmail.com', NULL, '$2y$10$AyjrHJnWwwapQgFMkA.JeO5PAOYOCNJb8hhLLaIEY3blI2WnqE2xy', NULL, NULL, NULL);

SET FOREIGN_KEY_CHECKS = 1;
