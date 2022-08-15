CREATE DATABASE `desafio` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;


CREATE TABLE `clientes` (
  `idCliente` int NOT NULL AUTO_INCREMENT,
  `nome` text,
  `documento` text,
  `cep` text,
  `endereco` text,
  `bairro` text,
  `cidade` text,
  `uf` text,
  `telefone` text,
  `email` text,
  `ativo` text,
  PRIMARY KEY (`idCliente`)
) ENGINE=InnoDB AUTO_INCREMENT=1977 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;