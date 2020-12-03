CREATE TABLE `archivos`  (
  `id_archivo` int NOT NULL AUTO_INCREMENT,
  `id_documento` int NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `ruta` varchar(255) NOT NULL,
  `flg_tipo` int NOT NULL,
  `estado` int NOT NULL,
  PRIMARY KEY (`id_archivo`)
);

CREATE TABLE `areas`  (
  `id_area` int NOT NULL AUTO_INCREMENT,
  `nombre` varchar(200) NOT NULL,
  PRIMARY KEY (`id_area`)
);

CREATE TABLE `auth_item`  (
  `name` varchar(64) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `type` smallint NOT NULL,
  `description` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL,
  `rule_name` varchar(64) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `data` blob NULL,
  `created_at` int NULL DEFAULT NULL,
  `updated_at` int NULL DEFAULT NULL,
  PRIMARY KEY (`name`) USING BTREE,
  INDEX `rule_name`(`rule_name`) USING BTREE,
  INDEX `idx-auth_item-type`(`type`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8 COLLATE = utf8_unicode_ci ROW_FORMAT = DYNAMIC;

CREATE TABLE `auth_item_child`  (
  `parent` varchar(64) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `child` varchar(64) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`parent`, `child`) USING BTREE,
  INDEX `child`(`child`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8 COLLATE = utf8_unicode_ci ROW_FORMAT = DYNAMIC;

CREATE TABLE `auth_rule`  (
  `name` varchar(64) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `data` blob NULL,
  `created_at` int NULL DEFAULT NULL,
  `updated_at` int NULL DEFAULT NULL,
  PRIMARY KEY (`name`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8 COLLATE = utf8_unicode_ci ROW_FORMAT = DYNAMIC;

CREATE TABLE `documentos`  (
  `id_documento` int NOT NULL AUTO_INCREMENT,
  `numero` varchar(10) NOT NULL,
  `asunto` varchar(255) NOT NULL,
  `descripcion` varchar(255) NULL,
  PRIMARY KEY (`id_documento`)
);

CREATE TABLE `empresas`  (
  `id_empresa` int NOT NULL AUTO_INCREMENT,
  `id_tipo_empresa` int NOT NULL,
  `cod_empresa` varchar(10) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `ruc_empresa` varchar(11) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `nombre_empresa` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `razon_social_empresa` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `lat` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `log` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `id_usuario_reg` int NOT NULL,
  `fecha_reg` datetime(0) NOT NULL,
  `ipmaq_reg` varchar(15) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `id_usuario_act` int NULL DEFAULT NULL,
  `fecha_act` datetime(0) NULL DEFAULT NULL,
  `ipmaq_act` varchar(15) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `id_usuario_del` int NULL DEFAULT NULL,
  `fecha_del` datetime(0) NULL DEFAULT NULL,
  `ipmaq_del` varchar(15) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id_empresa`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8 COLLATE = utf8_unicode_ci ROW_FORMAT = Dynamic;

CREATE TABLE `estados`  (
  `id_estado` int NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) NOT NULL,
  PRIMARY KEY (`id_estado`)
);

CREATE TABLE `hoja_ruta`  (
  `id_hoja_ruta` int NOT NULL AUTO_INCREMENT,
  `id_documento` int NOT NULL,
  `id_area_origen` int NOT NULL,
  `id_area_destino` int NOT NULL,
  `id_estado` int NOT NULL,
  `fecha` datetime NOT NULL,
  `id_usuario_reg` int NOT NULL,
  PRIMARY KEY (`id_hoja_ruta`)
);

CREATE TABLE `personas`  (
  `id_persona` int NOT NULL AUTO_INCREMENT,
  `dni` varchar(8) NOT NULL,
  `nombres` varchar(100) NOT NULL,
  `apellido_paterno` varchar(100) NOT NULL,
  `apellido_materno` varchar(100) NOT NULL,
  PRIMARY KEY (`id_persona`)
);

CREATE TABLE `prueba`  (
  `id_alumno` int NOT NULL AUTO_INCREMENT,
  `nombre_alumno` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id_alumno`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8 COLLATE = utf8_unicode_ci ROW_FORMAT = Dynamic;

CREATE TABLE `pruebas`  (
  `id_prueba` int NOT NULL AUTO_INCREMENT,
  `descripcion_prueba` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `id_opcion` int NOT NULL,
  `id_usuario_reg` int NULL DEFAULT NULL,
  `fecha_reg` datetime(0) NULL DEFAULT NULL,
  `ipmaq_reg` varchar(15) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `id_usuario_act` int NULL DEFAULT NULL,
  `fecha_act` datetime(0) NULL DEFAULT NULL,
  `ipmaq_act` varchar(15) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `id_usuario_del` int NULL DEFAULT NULL,
  `fecha_del` datetime(0) NULL DEFAULT NULL,
  `ipmaq_del` varchar(15) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id_prueba`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8 COLLATE = utf8_unicode_ci ROW_FORMAT = Dynamic;

CREATE TABLE `tipos_empresas`  (
  `id_tipo_empresa` int NOT NULL AUTO_INCREMENT,
  `descripcion_tipo` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `id_usuario_reg` int NOT NULL,
  `fecha_reg` datetime(0) NOT NULL,
  `ipmaq_reg` varchar(15) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `id_usuario_act` int NULL DEFAULT NULL,
  `fecha_act` datetime(0) NULL DEFAULT NULL,
  `ipmaq_act` varchar(15) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `id_usuario_del` int NULL DEFAULT NULL,
  `fecha_del` datetime(0) NULL DEFAULT NULL,
  `ipmaq_del` varchar(15) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id_tipo_empresa`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 14 CHARACTER SET = utf8 COLLATE = utf8_unicode_ci ROW_FORMAT = Dynamic;

CREATE TABLE `user`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `username` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `auth_key` varchar(32) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `password_hash` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `password_reset_token` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `email` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `status` smallint NOT NULL DEFAULT 10,
  `created_at` int NOT NULL,
  `updated_at` int NOT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `username`(`username`) USING BTREE,
  UNIQUE INDEX `email`(`email`) USING BTREE,
  UNIQUE INDEX `password_reset_token`(`password_reset_token`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8 COLLATE = utf8_unicode_ci ROW_FORMAT = Dynamic;

CREATE TABLE `usuarios`  (
  `id_usuario` int NOT NULL AUTO_INCREMENT,
  `usuario` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `rol` varchar(20) NOT NULL,
  `id_persona` int NOT NULL,
  `id_area` int NULL DEFAULT NULL,
  `correo` varchar(255) NOT NULL,
  `tipo_usuario` varchar(20) NOT NULL,
  `estado` int NOT NULL,
  PRIMARY KEY (`id_usuario`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8 COLLATE = utf8_unicode_ci ROW_FORMAT = Dynamic;

ALTER TABLE `areas` ADD CONSTRAINT `fk_areas_usuarios_1` FOREIGN KEY (`id_area`) REFERENCES `usuarios` (`id_area`);
ALTER TABLE `areas` ADD CONSTRAINT `fk_areas_hoja_ruta_1` FOREIGN KEY (`id_area`) REFERENCES `hoja_ruta` (`id_area_origen`);
ALTER TABLE `areas` ADD CONSTRAINT `fk_areas_hoja_ruta_2` FOREIGN KEY (`id_area`) REFERENCES `hoja_ruta` (`id_area_destino`);
ALTER TABLE `auth_item` ADD CONSTRAINT `auth_item_ibfk_1` FOREIGN KEY (`rule_name`) REFERENCES `auth_rule` (`name`) ON DELETE SET NULL ON UPDATE CASCADE;
ALTER TABLE `auth_item_child` ADD CONSTRAINT `auth_item_child_ibfk_1` FOREIGN KEY (`parent`) REFERENCES `auth_item` (`name`) ON DELETE CASCADE ON UPDATE CASCADE;
ALTER TABLE `auth_item_child` ADD CONSTRAINT `auth_item_child_ibfk_2` FOREIGN KEY (`child`) REFERENCES `auth_item` (`name`) ON DELETE CASCADE ON UPDATE CASCADE;
ALTER TABLE `documentos` ADD CONSTRAINT `fk_documentos_archivos_1` FOREIGN KEY (`id_documento`) REFERENCES `archivos` (`id_documento`);
ALTER TABLE `documentos` ADD CONSTRAINT `fk_documentos_hoja_ruta_1` FOREIGN KEY (`id_documento`) REFERENCES `hoja_ruta` (`id_documento`);
ALTER TABLE `estados` ADD CONSTRAINT `fk_estados_hoja_ruta_1` FOREIGN KEY (`id_estado`) REFERENCES `hoja_ruta` (`id_estado`);
ALTER TABLE `personas` ADD CONSTRAINT `fk_personas_usuarios_1` FOREIGN KEY (`id_persona`) REFERENCES `usuarios` (`id_persona`);
ALTER TABLE `usuarios` ADD CONSTRAINT `fk_usuarios_hoja_ruta_1` FOREIGN KEY (`id_usuario`) REFERENCES `hoja_ruta` (`id_usuario_reg`);

