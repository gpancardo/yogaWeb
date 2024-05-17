DROP SCHEMA IF EXISTS `YogaWeb`;
CREATE SCHEMA IF NOT EXISTS `YogaWeb` DEFAULT CHARACTER SET utf8 COLLATE utf8_spanish_ci;

USE `YogaWeb`;

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_usuario` varchar(50) NOT NULL,
  `telefono` int(10) NOT NULL,
  `edad` int(2) NOT NULL,
  `progreso` int(3) NOT NULL,
  `password` varchar(20) NOT NULL,
  `fecha_registro` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `usuarios` (`id`, `nombre_usuario`,`telefono`,`edad`,`progreso`,`password`)  VALUES (1, 'Ale','5542235175','20','0', '123456');
INSERT INTO `usuarios` (`id`, `nombre_usuario`,`telefono`,`edad`,`progreso`,`password`)  VALUES (2, 'Angel','5576725652','19','0', '123456');
INSERT INTO `usuarios` (`id`, `nombre_usuario`,`telefono`,`edad`,`progreso`,`password`)  VALUES (3, 'Marco','5577382511','28','0', '123456');
INSERT INTO `usuarios` (`id`, `nombre_usuario`,`telefono`,`edad`,`progreso`,`password`)  VALUES (4, 'David','5586615412','35','0', '123456');
INSERT INTO `usuarios` (`id`, `nombre_usuario`,`telefono`,`edad`,`progreso`,`password`)  VALUES (5, 'Adriana','5574884276','19','0', '123456');
INSERT INTO `usuarios` (`id`, `nombre_usuario`,`telefono`,`edad`,`progreso`,`password`)  VALUES (6, 'Felipe','5542235177','51','0', '123456');
INSERT INTO `usuarios` (`id`, `nombre_usuario`,`telefono`,`edad`,`progreso`,`password`)  VALUES (7, 'Eduardo','5542235178','15','0', '123456');
INSERT INTO `usuarios` (`id`, `nombre_usuario`,`telefono`,`edad`,`progreso`,`password`)  VALUES (8, 'Coyo','5542235485','16','0', '123456');
INSERT INTO `usuarios` (`id`, `nombre_usuario`,`telefono`,`edad`,`progreso`,`password`)  VALUES (9, 'Pepe','5542538643','16','0', '123456');
INSERT INTO `usuarios` (`id`, `nombre_usuario`,`telefono`,`edad`,`progreso`,`password`)  VALUES (10, 'Antonio','5542275175','61','0', '123456');
INSERT INTO `usuarios` (`id`, `nombre_usuario`,`telefono`,`edad`,`progreso`,`password`)  VALUES (11, 'Eugenia','5587645175','25','0', '123456');
INSERT INTO `usuarios` (`id`, `nombre_usuario`,`telefono`,`edad`,`progreso`,`password`)  VALUES (12, 'Orion','5542756413','21','0', '123456');
INSERT INTO `usuarios` (`id`, `nombre_usuario`,`telefono`,`edad`,`progreso`,`password`)  VALUES (13, 'Joaquin','5598764175','23','0', '123456');
INSERT INTO `usuarios` (`id`, `nombre_usuario`,`telefono`,`edad`,`progreso`,`password`)  VALUES (14, 'Amanda','5542865375','17','0', '123456');
INSERT INTO `usuarios` (`id`, `nombre_usuario`,`telefono`,`edad`,`progreso`,`password`)  VALUES (15, 'Samantha','5598655175','19','0', '123456');
INSERT INTO `usuarios` (`id`, `nombre_usuario`,`telefono`,`edad`,`progreso`,`password`)  VALUES (16, 'Carlos','5542237539','19','0', '123456');
INSERT INTO `usuarios` (`id`, `nombre_usuario`,`telefono`,`edad`,`progreso`,`password`)  VALUES (17, 'Wiliam','5542235174','18','0', '123456');
INSERT INTO `usuarios` (`id`, `nombre_usuario`,`telefono`,`edad`,`progreso`,`password`)  VALUES (18, 'Ernesto','5542756475','18','0', '123456');
INSERT INTO `usuarios` (`id`, `nombre_usuario`,`telefono`,`edad`,`progreso`,`password`)  VALUES (19, 'Felix','5674279064','18','0', '123456');
INSERT INTO `usuarios` (`id`, `nombre_usuario`,`telefono`,`edad`,`progreso`,`password`)  VALUES (20, 'Ximena','5542235195','16','0', '123456');


