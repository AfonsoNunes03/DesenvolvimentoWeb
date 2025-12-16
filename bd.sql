-- --------------------------------------------------------
-- Anfitrião:                    127.0.0.1
-- Versão do servidor:           8.4.3 - MySQL Community Server - GPL
-- SO do servidor:               Win64
-- HeidiSQL Versão:              12.8.0.6908
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

-- A despejar estrutura para tabela zenith_fit_db.contactos
CREATE TABLE IF NOT EXISTS `contactos` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telefone` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `assunto` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mensagem` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `data_envio` datetime DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- A despejar dados para tabela zenith_fit_db.contactos: ~1 rows (aproximadamente)
INSERT INTO `contactos` (`id`, `nome`, `email`, `telefone`, `assunto`, `mensagem`, `data_envio`) VALUES
	(1, 'João', 'joao@gmail.com', '213243243', 'Informações Gerais', 'teste', '2025-12-15 22:26:16');

-- A despejar estrutura para tabela zenith_fit_db.reservas
CREATE TABLE IF NOT EXISTS `reservas` (
  `id` int NOT NULL AUTO_INCREMENT,
  `user_id` int NOT NULL,
  `aula_id` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nome_aula` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dia` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hora` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `instrutor` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `data_aula` date DEFAULT NULL,
  `data_reserva` datetime DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `unique_booking` (`user_id`,`aula_id`,`data_aula`),
  CONSTRAINT `reservas_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- A despejar dados para tabela zenith_fit_db.reservas: ~4 rows (aproximadamente)
INSERT INTO `reservas` (`id`, `user_id`, `aula_id`, `nome_aula`, `dia`, `hora`, `instrutor`, `data_aula`, `data_reserva`) VALUES
	(6, 3, 'seg-07-cycling', 'Cycling', 'Segunda', '07:00', 'Ana', '2025-12-22', '2025-12-15 21:22:00'),
	(8, 3, 'ter-09-pump', 'Body Pump', 'Terça', '09:00', 'Bruno', '2025-12-16', '2025-12-15 21:22:14'),
	(9, 3, 'ter-18-cross', 'Cross Training', 'Terça', '18:00', 'Pedro', '2025-12-16', '2025-12-15 21:22:16'),
	(10, 3, 'qua-17-yoga', 'Yoga', 'Quarta', '17:00', 'Maria', '2025-12-17', '2025-12-15 21:22:18');

-- A despejar estrutura para tabela zenith_fit_db.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- A despejar dados para tabela zenith_fit_db.users: ~1 rows (aproximadamente)
--       Login ->  email:teste@zenith.pt  Password: 123   
INSERT INTO `users` (`id`, `nome`, `email`, `password`, `created_at`) VALUES
	(3, 'Admin', 'teste@zenith.pt', '$2y$10$uWCj0nnKVuDuPT1sLkF7PevJ//logKIbXrspK/QbDyAK10pTwyBPS', '2025-12-15 21:21:37');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
