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

INSERT INTO `usuarios` (`id`, `nombre_usuario`,`telefono`,`edad`,`progreso`,`password`)  VALUES (1, 'Ana María Rodríguez López','5542235175','20','0', '123456');
INSERT INTO `usuarios` (`id`, `nombre_usuario`,`telefono`,`edad`,`progreso`,`password`)  VALUES (2, 'Juan Carlos Pérez González','5576725652','19','0', '123456');
INSERT INTO `usuarios` (`id`, `nombre_usuario`,`telefono`,`edad`,`progreso`,`password`)  VALUES (3, 'María Isabel Fernández Martínez','5577382511','28','0', '123456');
INSERT INTO `usuarios` (`id`, `nombre_usuario`,`telefono`,`edad`,`progreso`,`password`)  VALUES (4, 'José Luis García Hernández','5586615412','35','0', '123456');
INSERT INTO `usuarios` (`id`, `nombre_usuario`,`telefono`,`edad`,`progreso`,`password`)  VALUES (5, 'Carmen Teresa López Sánchez','5574884276','19','0', '123456');
INSERT INTO `usuarios` (`id`, `nombre_usuario`,`telefono`,`edad`,`progreso`,`password`)  VALUES (6, 'Miguel Ángel Torres Ruiz','5542235177','51','0', '123456');
INSERT INTO `usuarios` (`id`, `nombre_usuario`,`telefono`,`edad`,`progreso`,`password`)  VALUES (7, 'Laura Beatriz Morales Gómez','5542235178','15','0', '123456');
INSERT INTO `usuarios` (`id`, `nombre_usuario`,`telefono`,`edad`,`progreso`,`password`)  VALUES (8, 'Francisco Javier Ortiz Ramírez','5542235485','16','0', '123456');
INSERT INTO `usuarios` (`id`, `nombre_usuario`,`telefono`,`edad`,`progreso`,`password`)  VALUES (9, 'Elena Patricia Vargas Jiménez','5542538643','16','0', '123456');
INSERT INTO `usuarios` (`id`, `nombre_usuario`,`telefono`,`edad`,`progreso`,`password`)  VALUES (10, 'Roberto Carlos Díaz Castillo','5542275175','61','0', '123456');
INSERT INTO `usuarios` (`id`, `nombre_usuario`,`telefono`,`edad`,`progreso`,`password`)  VALUES (11, 'Natalia Sofía Romero Méndez','5587645175','25','0', '123456');
INSERT INTO `usuarios` (`id`, `nombre_usuario`,`telefono`,`edad`,`progreso`,`password`)  VALUES (12, 'Luis Alberto Castillo Flores','5542756413','21','0', '123456');
INSERT INTO `usuarios` (`id`, `nombre_usuario`,`telefono`,`edad`,`progreso`,`password`)  VALUES (13, 'Paula Andrea Soto Mendoza','5598764175','23','0', '123456');
INSERT INTO `usuarios` (`id`, `nombre_usuario`,`telefono`,`edad`,`progreso`,`password`)  VALUES (14, 'Ricardo Emilio Herrera Vargas','5542865375','17','0', '123456');
INSERT INTO `usuarios` (`id`, `nombre_usuario`,`telefono`,`edad`,`progreso`,`password`)  VALUES (15, 'Silvia Adriana Ríos Guzmán','5598655175','19','0', '123456');
INSERT INTO `usuarios` (`id`, `nombre_usuario`,`telefono`,`edad`,`progreso`,`password`)  VALUES (16, 'Daniel Alejandro Martínez Rojas','5542237539','19','0', '123456');
INSERT INTO `usuarios` (`id`, `nombre_usuario`,`telefono`,`edad`,`progreso`,`password`)  VALUES (17, 'Verónica Carolina Núñez Torres','5542235174','18','0', '123456');
INSERT INTO `usuarios` (`id`, `nombre_usuario`,`telefono`,`edad`,`progreso`,`password`)  VALUES (18, 'Sergio Antonio Medina Paredes','5542756475','18','0', '123456');
INSERT INTO `usuarios` (`id`, `nombre_usuario`,`telefono`,`edad`,`progreso`,`password`)  VALUES (19, 'Andrea Margarita Campos León','5674279064','18','0', '123456');
INSERT INTO `usuarios` (`id`, `nombre_usuario`,`telefono`,`edad`,`progreso`,`password`)  VALUES (20, 'Juan Pablo Ramírez Morales','5542235195','16','0', '123456');