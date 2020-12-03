/*
 Navicat Premium Data Transfer

 Source Server         : local
 Source Server Type    : MySQL
 Source Server Version : 80017
 Source Host           : localhost:3306
 Source Schema         : mesa

 Target Server Type    : MySQL
 Target Server Version : 80017
 File Encoding         : 65001

 Date: 24/11/2020 23:23:51
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for archivos
-- ----------------------------
DROP TABLE IF EXISTS `archivos`;
CREATE TABLE `archivos`  (
  `id_archivo` int(11) NOT NULL AUTO_INCREMENT,
  `id_documento` int(11) NOT NULL,
  `nombre` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `ruta` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `flg_tipo` int(11) NOT NULL,
  `estado` int(11) NOT NULL,
  PRIMARY KEY (`id_archivo`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 24 CHARACTER SET = utf8 COLLATE = utf8_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of archivos
-- ----------------------------
INSERT INTO `archivos` VALUES (1, 36, '0003(3).pdf', '/mesapartes/web/modules/registro/documentos/0003(3).pdf', 0, 1);
INSERT INTO `archivos` VALUES (2, 36, '0003(3).pdf', '/mesapartes/web/modules/registro/documentos/0003(3).pdf', 0, 1);
INSERT INTO `archivos` VALUES (3, 10, '0003(3).pdf', 'http://localhost/mesapartes/modules/registro/documentos/0003(3).pdf', 0, 1);
INSERT INTO `archivos` VALUES (4, 11, '0003(3).pdf', 'http://localhost/mesapartes/modules/registro/documentos/0003(3).pdf', 0, 1);
INSERT INTO `archivos` VALUES (5, 18, '0003(3).pdf', 'http://localhost/mesapartes/modules/registro/documentos/0003(3).pdf', 0, 1);
INSERT INTO `archivos` VALUES (6, 23, '0003(3).pdf', 'http://localhost/mesapartes/modules/registro/documentos/0003(3).pdf', 0, 1);
INSERT INTO `archivos` VALUES (7, 36, '0003(3).pdf', 'http://localhost/mesapartes/modules/registro/documentos/0003(3).pdf', 1, 1);
INSERT INTO `archivos` VALUES (8, 27, '0003(3).pdf', 'http://localhost/mesapartes/modules/registro/documentos/0003(3).pdf', 1, 1);
INSERT INTO `archivos` VALUES (9, 27, '0003(3).pdf', 'http://localhost/mesapartes/modules/registro/documentos/0003(3).pdf', 0, 1);
INSERT INTO `archivos` VALUES (10, 29, '0003(3).pdf', 'http://localhost/mesapartes/modules/registro/documentos/0003(3).pdf', 0, 1);
INSERT INTO `archivos` VALUES (11, 30, '0003(3).pdf', 'http://localhost/mesapartes/modules/registro/documentos/0003(3).pdf', 0, 1);
INSERT INTO `archivos` VALUES (12, 34, 'Lineamientos generales para escribir un paper DOC 27.pdf', 'http://localhost/mesapartes/modules/registro/documentos/Lineamientos generales para escribir un paper DOC 27.pdf', 1, 1);
INSERT INTO `archivos` VALUES (13, 35, '002-000353.pdf', '/mesapartes/web/modules/registro/documentos/002-000353.pdf', 1, 1);
INSERT INTO `archivos` VALUES (14, 37, 'Lineamientos generales para escribir un paper DOC 27.pdf', '/mesapartes/web/modules/registro/documentos/Lineamientos generales para escribir un paper DOC 27.pdf', 1, 1);
INSERT INTO `archivos` VALUES (15, 37, 'muestras.xlsx', '/mesapartes/web/modules/registro/documentos/muestras.xlsx', 0, 1);
INSERT INTO `archivos` VALUES (16, 40, 'Analytics Todos los datos de sitios web Ubicación 20200401-20200825.pdf', '/mesapartes/web/modules/registro/documentos/file.pdf', 1, 1);
INSERT INTO `archivos` VALUES (17, 40, 'AVANCE 2 TRABAJO FINAL_ Grupo 66.docx', '/mesapartes/web/modules/registro/documentos/AVANCE 2 TRABAJO FINAL_ Grupo 66.docx', 0, 1);
INSERT INTO `archivos` VALUES (18, 39, 'download.pdf', '/mesapartes/web/modules/registro/documentos/download.pdf', 1, 1);
INSERT INTO `archivos` VALUES (19, 39, 'Excel.xls', '/mesapartes/web/modules/registro/documentos/Excel.xls', 0, 1);
INSERT INTO `archivos` VALUES (20, 42, '017-2020[R][R].pdf', '/mesapartes/web/modules/registro/documentos/017-2020[R][R].pdf', 1, 1);
INSERT INTO `archivos` VALUES (21, 42, 'Excel.xls', '/mesapartes/web/modules/registro/documentos/Excel.xls', 0, 1);
INSERT INTO `archivos` VALUES (22, 43, 'Base de Datos Sem 01.pdf', '/mesapartes/web/modules/registro/documentos/Base de Datos Sem 01.pdf', 1, 1);
INSERT INTO `archivos` VALUES (23, 44, 'mozilla12-pdf.pdf', '/mesapartes/web/modules/registro/documentos/mozilla12-pdf.pdf', 1, 1);

-- ----------------------------
-- Table structure for areas
-- ----------------------------
DROP TABLE IF EXISTS `areas`;
CREATE TABLE `areas`  (
  `id_area` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id_area`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 6 CHARACTER SET = utf8 COLLATE = utf8_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of areas
-- ----------------------------
INSERT INTO `areas` VALUES (1, 'EXTERNO');
INSERT INTO `areas` VALUES (2, 'MESA DE PARTES');
INSERT INTO `areas` VALUES (3, 'ADMINISTRACION');
INSERT INTO `areas` VALUES (4, 'RECURSOS HUMANOS');
INSERT INTO `areas` VALUES (5, 'CONTABILIDAD');

-- ----------------------------
-- Table structure for documentos
-- ----------------------------
DROP TABLE IF EXISTS `documentos`;
CREATE TABLE `documentos`  (
  `id_documento` int(11) NOT NULL AUTO_INCREMENT,
  `numero` varchar(10) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `asunto` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `descripcion` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `estado` int(11) NULL DEFAULT NULL,
  `id_area` int(11) NOT NULL DEFAULT 2,
  PRIMARY KEY (`id_documento`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 45 CHARACTER SET = utf8 COLLATE = utf8_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of documentos
-- ----------------------------
INSERT INTO `documentos` VALUES (1, '0001', 'sfs', 'sgfsdgrdg', 1, 2);
INSERT INTO `documentos` VALUES (2, '0002', 'sdfsdfsdf', 'sdfsfsdf', 1, 2);
INSERT INTO `documentos` VALUES (3, '0003', 'prueba', 'nuevo', 1, 2);
INSERT INTO `documentos` VALUES (4, '0004', 'sdfsdfsdf', 'sdertert', 1, 2);
INSERT INTO `documentos` VALUES (5, '0005-2020', 'prueba', 'dfgdgdf', 1, 2);
INSERT INTO `documentos` VALUES (6, '0006-2020', 'sdfsdfsdf', 'zfsdfsd', 1, 2);
INSERT INTO `documentos` VALUES (9, '0007-2020', 'multiple', 'Pruebas', 1, 2);
INSERT INTO `documentos` VALUES (10, '0008-2020', 'cvcvb', 'cvbcvb', 1, 2);
INSERT INTO `documentos` VALUES (11, '0009-2020', 'final', 'pruebas', 1, 2);
INSERT INTO `documentos` VALUES (12, '0010-2020', 'sdfsdfsdf', 'sdfsdf', 1, 2);
INSERT INTO `documentos` VALUES (13, '0011-2020', 'dsfgdf', 'gdgdgf', 1, 2);
INSERT INTO `documentos` VALUES (14, '0012-2020', 'sdf', 'dgdfgdg', 1, 2);
INSERT INTO `documentos` VALUES (15, '0013-2020', 'wer', 'wrwer', 1, 2);
INSERT INTO `documentos` VALUES (16, '0014-2020', 'sdf', 'sdfsdf', 1, 2);
INSERT INTO `documentos` VALUES (17, '0015-2020', 'sdfd', 'dgdg', 1, 2);
INSERT INTO `documentos` VALUES (18, '0016-2020', 'sdfsdf', 'sfsf', 1, 2);
INSERT INTO `documentos` VALUES (19, '0017-2020', 'xcf', 'dfgdfg', 1, 2);
INSERT INTO `documentos` VALUES (20, '0018-2020', 'dgedr', 'ertet', 1, 2);
INSERT INTO `documentos` VALUES (21, '0019-2020', 'wswer', 'werwer', 1, 2);
INSERT INTO `documentos` VALUES (22, '0020-2020', 'sdfgsd', 'etert', 1, 2);
INSERT INTO `documentos` VALUES (23, '0021-2020', 'prueba', 'asdfsdf', 1, 2);
INSERT INTO `documentos` VALUES (24, '0022-2020', 'dfsdf', 'sfsdf', 1, 2);
INSERT INTO `documentos` VALUES (25, '0023-2020', 'fsdfs', 'werewrw', 1, 2);
INSERT INTO `documentos` VALUES (26, '0024-2020', 'dyr', 'rtyrtyr', 1, 2);
INSERT INTO `documentos` VALUES (27, '0025-2020', 'sfsf', 'sdfsf', 1, 2);
INSERT INTO `documentos` VALUES (28, '0026-2020', 'df', 'sfs', 1, 2);
INSERT INTO `documentos` VALUES (29, '0027-2020', 'Prueba de registro de documento', 'Prueba de registro de documento de envió de solicitud de constancia de trabajo', 1, 2);
INSERT INTO `documentos` VALUES (30, '0028-2020', 'sdfsdfsdf', 'asdfadasd', 1, 2);
INSERT INTO `documentos` VALUES (34, '0029-2020', 'Solicitud de constancia de trabajo ', 'Solicito mi constancia de trabaja por todos los meses y años que estuve laborando en la empres', 2, 2);
INSERT INTO `documentos` VALUES (35, '0030-2020', 'dfgdfg', 'dgdg', 2, 2);
INSERT INTO `documentos` VALUES (36, '0031-2020', 'Prueba de registro de documento externo', 'prueba con usuario nuevo', 1, 2);
INSERT INTO `documentos` VALUES (37, '0032-2020', 'prueba usuario externo', 'nuevo', 2, 2);
INSERT INTO `documentos` VALUES (38, '0033-2020', 'prueba domingo', 'pruiebassssss', 1, 2);
INSERT INTO `documentos` VALUES (39, '0034-2020', 'dfgdfg', 'dfgdgdgd', 2, 2);
INSERT INTO `documentos` VALUES (40, '0035-2020', 'lunes', 'sdfsdf', 2, 2);
INSERT INTO `documentos` VALUES (41, '0036-2020', 'lunes2', 'pruebas', 1, 3);
INSERT INTO `documentos` VALUES (42, '0037-2020', 'firma', 'sdfsfsdf', 2, 3);
INSERT INTO `documentos` VALUES (43, '0038-2020', 'firma2', 'asdfsfsf', 2, 3);
INSERT INTO `documentos` VALUES (44, '0039-2020', 'prueba martes', 'pruebas', 1, 3);

-- ----------------------------
-- Table structure for estados
-- ----------------------------
DROP TABLE IF EXISTS `estados`;
CREATE TABLE `estados`  (
  `id_estado` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id_estado`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 6 CHARACTER SET = utf8 COLLATE = utf8_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of estados
-- ----------------------------
INSERT INTO `estados` VALUES (1, 'Pendiente');
INSERT INTO `estados` VALUES (2, 'Recepcionado');
INSERT INTO `estados` VALUES (3, 'Derivado');
INSERT INTO `estados` VALUES (4, 'Finalizado');
INSERT INTO `estados` VALUES (5, 'Archivado');

-- ----------------------------
-- Table structure for hoja_ruta
-- ----------------------------
DROP TABLE IF EXISTS `hoja_ruta`;
CREATE TABLE `hoja_ruta`  (
  `id_hoja_ruta` int(11) NOT NULL AUTO_INCREMENT,
  `id_documento` int(11) NOT NULL,
  `id_area_origen` int(11) NOT NULL,
  `id_area_destino` int(11) NOT NULL,
  `id_estado` int(11) NOT NULL,
  `fecha` datetime(0) NOT NULL,
  `id_usuario_reg` int(11) NOT NULL,
  `observacion` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `flg_activo` int(11) NULL DEFAULT 1,
  PRIMARY KEY (`id_hoja_ruta`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 43 CHARACTER SET = utf8 COLLATE = utf8_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of hoja_ruta
-- ----------------------------
INSERT INTO `hoja_ruta` VALUES (1, 29, 1, 2, 1, '2020-11-19 00:00:00', 1, NULL, 0);
INSERT INTO `hoja_ruta` VALUES (2, 30, 1, 2, 1, '2020-11-19 00:00:00', 1, NULL, 0);
INSERT INTO `hoja_ruta` VALUES (3, 30, 1, 2, 2, '2020-11-21 00:00:00', 1, NULL, 0);
INSERT INTO `hoja_ruta` VALUES (4, 30, 2, 3, 3, '2020-11-21 00:00:00', 1, NULL, 1);
INSERT INTO `hoja_ruta` VALUES (5, 29, 1, 2, 2, '2020-11-21 00:00:00', 2, NULL, 0);
INSERT INTO `hoja_ruta` VALUES (6, 29, 2, 3, 3, '2020-11-21 00:00:00', 2, NULL, 1);
INSERT INTO `hoja_ruta` VALUES (7, 34, 1, 2, 1, '2020-11-21 00:43:53', 1, NULL, 0);
INSERT INTO `hoja_ruta` VALUES (8, 34, 1, 2, 2, '2020-11-21 00:46:14', 2, NULL, 0);
INSERT INTO `hoja_ruta` VALUES (9, 34, 2, 3, 3, '2020-11-21 00:46:40', 2, NULL, 0);
INSERT INTO `hoja_ruta` VALUES (10, 34, 2, 3, 2, '2020-11-21 00:50:13', 3, NULL, 1);
INSERT INTO `hoja_ruta` VALUES (11, 35, 1, 2, 1, '2020-11-21 00:53:24', 2, NULL, 0);
INSERT INTO `hoja_ruta` VALUES (12, 36, 1, 2, 1, '2020-11-21 12:27:39', 4, NULL, 0);
INSERT INTO `hoja_ruta` VALUES (13, 37, 1, 2, 1, '2020-11-21 12:31:10', 4, NULL, 0);
INSERT INTO `hoja_ruta` VALUES (14, 37, 1, 2, 2, '2020-11-21 12:38:58', 2, NULL, 0);
INSERT INTO `hoja_ruta` VALUES (15, 37, 2, 3, 3, '2020-11-21 12:39:05', 2, NULL, 0);
INSERT INTO `hoja_ruta` VALUES (16, 37, 2, 3, 2, '2020-11-21 12:39:38', 3, NULL, 1);
INSERT INTO `hoja_ruta` VALUES (17, 38, 1, 2, 1, '2020-11-22 19:20:00', 5, NULL, 1);
INSERT INTO `hoja_ruta` VALUES (18, 39, 1, 2, 1, '2020-11-22 19:22:48', 5, NULL, 0);
INSERT INTO `hoja_ruta` VALUES (19, 35, 1, 2, 2, '2020-11-22 19:24:50', 2, NULL, 0);
INSERT INTO `hoja_ruta` VALUES (20, 35, 2, 3, 3, '2020-11-22 19:25:09', 2, NULL, 0);
INSERT INTO `hoja_ruta` VALUES (21, 35, 2, 3, 2, '2020-11-22 19:25:41', 3, NULL, 1);
INSERT INTO `hoja_ruta` VALUES (22, 36, 1, 2, 2, '2020-11-22 19:51:00', 2, NULL, 0);
INSERT INTO `hoja_ruta` VALUES (23, 36, 2, 3, 3, '2020-11-22 19:51:28', 2, NULL, 0);
INSERT INTO `hoja_ruta` VALUES (24, 36, 2, 3, 2, '2020-11-22 19:52:25', 3, NULL, 0);
INSERT INTO `hoja_ruta` VALUES (25, 36, 3, 5, 3, '2020-11-22 19:52:32', 3, NULL, 1);
INSERT INTO `hoja_ruta` VALUES (26, 40, 1, 3, 1, '2020-11-23 21:56:39', 5, NULL, 0);
INSERT INTO `hoja_ruta` VALUES (27, 40, 1, 3, 2, '2020-11-23 22:25:33', 2, NULL, 1);
INSERT INTO `hoja_ruta` VALUES (28, 41, 1, 2, 1, '2020-11-23 22:31:15', 5, NULL, 0);
INSERT INTO `hoja_ruta` VALUES (29, 41, 1, 2, 2, '2020-11-23 22:31:51', 2, NULL, 0);
INSERT INTO `hoja_ruta` VALUES (30, 41, 2, 3, 3, '2020-11-23 22:33:45', 2, NULL, 1);
INSERT INTO `hoja_ruta` VALUES (34, 39, 1, 2, 2, '2020-11-24 00:46:51', 2, NULL, 0);
INSERT INTO `hoja_ruta` VALUES (36, 39, 1, 2, 2, '2020-11-24 00:50:40', 2, NULL, 1);
INSERT INTO `hoja_ruta` VALUES (37, 42, 1, 2, 1, '2020-11-24 00:54:05', 5, NULL, 0);
INSERT INTO `hoja_ruta` VALUES (38, 42, 1, 2, 2, '2020-11-24 00:54:28', 2, NULL, 1);
INSERT INTO `hoja_ruta` VALUES (39, 43, 1, 2, 1, '2020-11-24 00:55:38', 5, NULL, 0);
INSERT INTO `hoja_ruta` VALUES (40, 43, 1, 2, 2, '2020-11-24 00:55:57', 2, NULL, 1);
INSERT INTO `hoja_ruta` VALUES (41, 44, 1, 2, 1, '2020-11-24 22:11:03', 5, NULL, 0);
INSERT INTO `hoja_ruta` VALUES (42, 44, 1, 2, 2, '2020-11-24 22:12:08', 2, NULL, 0);
INSERT INTO `hoja_ruta` VALUES (43, 44, 1, 2, 2, '2020-11-24 22:45:19', 2, NULL, 0);
INSERT INTO `hoja_ruta` VALUES (45, 44, 1, 2, 2, '2020-11-24 22:54:01', 2, NULL, 0);
INSERT INTO `hoja_ruta` VALUES (46, 44, 2, 3, 3, '2020-11-24 22:56:16', 2, NULL, 0);
INSERT INTO `hoja_ruta` VALUES (47, 44, 3, 3, 3, '2020-11-24 22:56:21', 2, NULL, 1);

-- ----------------------------
-- Table structure for personas
-- ----------------------------
DROP TABLE IF EXISTS `personas`;
CREATE TABLE `personas`  (
  `id_persona` int(11) NOT NULL AUTO_INCREMENT,
  `dni` varchar(8) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `nombres` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `apellido_paterno` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `apellido_materno` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id_persona`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 5 CHARACTER SET = utf8 COLLATE = utf8_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of personas
-- ----------------------------
INSERT INTO `personas` VALUES (3, '72669187', 'Franklin Ruiz', 'Asto', 'Leon');
INSERT INTO `personas` VALUES (4, '72669188', 'Franklin Ruiz', 'Asto', 'Leon');
INSERT INTO `personas` VALUES (5, '72669188', 'Franklin Ruiz', 'Asto', 'Leon');

-- ----------------------------
-- Table structure for usuarios
-- ----------------------------
DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE `usuarios`  (
  `id_usuario` int(11) NOT NULL AUTO_INCREMENT,
  `usuario` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `rol` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `id_persona` int(11) NOT NULL,
  `id_area` int(11) NULL DEFAULT NULL,
  `correo` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `tipo_usuario` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `estado` int(11) NOT NULL,
  PRIMARY KEY (`id_usuario`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 7 CHARACTER SET = utf8 COLLATE = utf8_unicode_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of usuarios
-- ----------------------------
INSERT INTO `usuarios` VALUES (1, 'externo', '$2y$13$AzSu7ICHHQQo7durNWiSju29o9CNOKhynuXmp1RnAE2thoZppAQiW', 'usuario', 1, 1, 'franklin.asto.leon@gmail.com', 'externo', 1);
INSERT INTO `usuarios` VALUES (2, 'interno', '$2y$13$AzSu7ICHHQQo7durNWiSju29o9CNOKhynuXmp1RnAE2thoZppAQiW', 'recepcion', 1, 2, 'franklin.asto.leon@gmail.com', 'interno', 1);
INSERT INTO `usuarios` VALUES (3, 'admin', '$2y$13$AzSu7ICHHQQo7durNWiSju29o9CNOKhynuXmp1RnAE2thoZppAQiW', 'admin', 1, 3, 'franklin.asto.leon@gmail.com', 'interno', 1);
INSERT INTO `usuarios` VALUES (4, '72669187', '$2y$13$IzSpHy/iOkInNbjfHiWe6essfCVnAOwI/WJvUKo7VxxPnaJPXwOtm', 'usuario', 3, 1, 'franklin.asto.leon@gmail.com', 'externo', 1);
INSERT INTO `usuarios` VALUES (5, '72669188', '$2y$13$rKTA8mVsSoCcABwhBF7HfuwphNdfhtatHU7/APtfE2UYu/ull72P6', 'usuario', 4, 1, 'franklin.asto.leon@gmail.com', 'externo', 1);
INSERT INTO `usuarios` VALUES (6, '72669188', '$2y$13$K1HbZEJPcE50XtOOUgT8EevFU.9c2y9vDQ6i7jcfDlSQedPU3niD.', 'usuario', 5, 1, 'franklin.asto.leon@gmail.com', 'externo', 1);

SET FOREIGN_KEY_CHECKS = 1;
