USE coalize;

DROP TABLE IF EXISTS tbl_user;
DROP TABLE IF EXISTS tbl_produto;
DROP TABLE IF EXISTS tbl_cliente;

CREATE TABLE `tbl_user` (
  `id` int NOT NULL AUTO_INCREMENT,
  `username` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO tbl_user VALUES
(null, 'test1', '$2y$13$UycYhvnp6wqbCRF40Y3SfutfT0dBs7wQaLMKcCQ96iiGLeBGhBMxO', 'test1@example.com'),
(null, 'test2', '$2y$13$O9/BNoi.8WuQEG9EQV1OouvRg1ViC.5BPHTsAguwZbYloDfkwNPbi', 'test2@example.com');


CREATE TABLE `tbl_cliente` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cpf` varchar(14) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cep` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `logradouro` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `numero` int NOT NULL,
  `cidade` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `estado` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `complemento` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `foto` longblob,
  `sexo` enum('Masculino','Feminino','Outro') COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO tbl_cliente VALUES
	(null,'Cliente 1','11111111111','14810000','logradouro1','111','cidade1','sp','','','Masculino'),
	(null,'Cliente 2','22222222222','14820000','logradouro2','222','cidade2','rj','','','Masculino'),
	(null,'Cliente 3','33333333333','14830000','logradouro3','333','cidade3','sp','','','Masculino'),
	(null,'Cliente 4','44444444444','14840000','logradouro4','444','cidade4','pi','','','Masculino'),
	(null,'Cliente 5','55555555555','14850000','logradouro5','555','cidade5','sp','','','Masculino'),
	(null,'Cliente 6','66666666666','14860000','logradouro6','666','cidade6','sp','','','Masculino'),
	(null,'Cliente 7','77777777777','14870000','logradouro7','777','cidade7','rs','','','Masculino'),
	(null,'Cliente 8','88888888888','14880000','logradouro8','888','cidade8','mt','','','Masculino'),
	(null,'Cliente 9','99999999999','14890000','logradouro9','999','cidade9','sp','','','Masculino'),
	(null,'Cliente 10','10101010101','14811000','logradouro10','101','cidade10','sp','','','Masculino'),
	(null,'Cliente 11','11111111112','14810000','logradouro1','111','cidade1','sp','','','Masculino'),
	(null,'Cliente 12','121212121','14820000','logradouro2','222','cidade2','sp','','','Masculino'),
	(null,'Cliente 13','13131313131','14830000','logradouro3','333','cidade3','sp','','','Masculino'),
	(null,'Cliente 14','14141414141','14840000','logradouro4','444','cidade4','sp','','','Masculino'),
	(null,'Cliente 15','15151515151','14850000','logradouro5','555','cidade5','sp','','','Masculino'),
	(null,'Cliente 16','16161616161','14860000','logradouro6','666','cidade6','sp','','','Masculino'),
	(null,'Cliente 17','17171717171','14870000','logradouro7','777','cidade7','sp','','','Masculino'),
	(null,'Cliente 18','18181818181','14880000','logradouro8','888','cidade8','sp','','','Masculino'),
	(null,'Cliente 19','19191919191','14890000','logradouro9','999','cidade9','sp','','','Masculino'),
	(null,'Cliente 20','20202020202','14811000','logradouro10','101','cidade10','sp','','','Masculino'),
	(null,'Cliente 21','21212121212','14811000','logradouro10','101','cidade10','sp','','','Masculino');

CREATE TABLE `tbl_produto` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `preco` decimal(10,2) NOT NULL,
  `cliente_id` int NOT NULL,
  `foto` longblob,
  PRIMARY KEY (`id`),
  KEY `cliente_id` (`cliente_id`),
  CONSTRAINT `tbl_produto_ibfk_1` FOREIGN KEY (`cliente_id`) REFERENCES `tbl_cliente` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO tbl_produto VALUES
	(null,'produto1','10.00',1,null),
	(null,'produto2','12.00',2,null),
	(null,'produto3','13.00','3',null),
	(null,'produto4','10.40','4',null),
	(null,'produto5','13.00','5',null),
	(null,'produto6','30.00','6',null),
	(null,'produto7','10.00','7',null),
	(null,'produto8','15.00','8',null),
	(null,'produto9','3.00','9',null),
	(null,'produto10','4.00','10',null),
	(null,'produto11','14.00','11',null),
	(null,'produto12','13.00','12',null),
	(null,'produto13','14.00','13',null),
	(null,'produto14','14.00','14',null),
	(null,'produto15','120.00','15',null),
	(null,'produto16','12.00','16',null),
	(null,'produto17','110.00','17',null),
	(null,'produto18','144.00','18',null),
	(null,'produto19','102.00','19',null),
	(null,'produto20','120.00','20',null),
	(null,'produto21','120.00','21',null),
	(null,'produto22','123.00','2',null),
	(null,'produto23','123.00','1',null),
	(null,'produto24','123.00','2',null),
	(null,'produto25','123.00','3',null),
	(null,'produto26','123.00','4',null),
	(null,'produto27','123.00','5',null),
	(null,'produto28','123.00','7',null),
	(null,'produto29','123.00','7',null),
	(null,'produto30','123.00','8',null),
	(null,'produto31','123.00','9',null),
	(null,'produto32','123.00','10',null),
	(null,'produto33','123.00','12',null);