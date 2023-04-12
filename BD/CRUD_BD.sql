/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

CREATE DATABASE IF NOT EXISTS `academico` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `academico`;

CREATE TABLE IF NOT EXISTS `alunos` (
  `codigo` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(250) DEFAULT NULL,
  `cidade` varchar(250) DEFAULT NULL,
  `sexo` varchar(1) DEFAULT NULL,
  PRIMARY KEY (`codigo`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

/*!40000 ALTER TABLE `alunos` DISABLE KEYS */;
INSERT INTO `alunos` (`codigo`, `nome`, `cidade`, `sexo`) VALUES
	(1, 'João', 'Registro', 'm'),
	(2, 'Joana', 'Sete Barras', 'f'),
	(3, 'Pedro', 'Cajati', 'm'),
	(4, 'Maria', 'Registro', 'f'),
	(6, 'Diego', 'Cajatii', 'm'),
	(7, 'Pauloo', 'Rio de ', 'm'),
	(16, 'Baltazar', 'Claudio', 'm'),
	(17, 'claudia', 'raia', 'f'),
	(18, 'henrique', 'Miracatu', 'm');
/*!40000 ALTER TABLE `alunos` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
