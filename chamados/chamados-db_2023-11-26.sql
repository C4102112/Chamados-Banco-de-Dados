-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 26-Nov-2023 às 23:35
-- Versão do servidor: 8.0.31
-- versão do PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `chamados`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `chamados`
--

CREATE TABLE `chamados` (
  `RA` int NOT NULL,
  `NOME` varchar(45) NOT NULL,
  `PROBLEMA_ID` int NOT NULL,
  `DESCRICAO` varchar(100) NOT NULL,
  `SALA` int NOT NULL,
  `RESOLVIDO` tinyint(1) NOT NULL,
  `id` int NOT NULL,
  `DATECAD` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `DATERESOL` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Extraindo dados da tabela `chamados`
--

INSERT INTO `chamados` (`RA`, `NOME`, `PROBLEMA_ID`, `DESCRICAO`, `SALA`, `RESOLVIDO`, `id`, `DATECAD`, `DATERESOL`) VALUES
(1234567, 'caio', 1, 'nõ sei ', 427, 0, 9, '2023-11-22 19:57:42', NULL),
(1960042, 'Felipe ', 4, 'quero morrer o valdir vai parar de dar aula!!!!!!!!!!😥😥😥😥😥', 1, 0, 10, '2023-11-22 20:25:26', NULL),
(1960042, 'Felipe ', 4, 'quero morrer o valdir vai parar de dar aula!!!!!!!!!!😥😥😥😥😥', 1, 0, 11, '2023-11-22 20:25:32', NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `problemas`
--

CREATE TABLE `problemas` (
  `PROBLEMA` varchar(45) NOT NULL,
  `PROBLEMA_ID` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Extraindo dados da tabela `problemas`
--

INSERT INTO `problemas` (`PROBLEMA`, `PROBLEMA_ID`) VALUES
('SOFTWARE', 1),
('HARDWARE', 2),
('REDE', 3),
('ENERGIA', 4);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `chamados`
--
ALTER TABLE `chamados`
  ADD PRIMARY KEY (`id`),
  ADD KEY `PROBLEMA_ID` (`PROBLEMA_ID`);

--
-- Índices para tabela `problemas`
--
ALTER TABLE `problemas`
  ADD PRIMARY KEY (`PROBLEMA_ID`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `chamados`
--
ALTER TABLE `chamados`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de tabela `problemas`
--
ALTER TABLE `problemas`
  MODIFY `PROBLEMA_ID` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `chamados`
--
ALTER TABLE `chamados`
  ADD CONSTRAINT `chamados_ibfk_1` FOREIGN KEY (`PROBLEMA_ID`) REFERENCES `problemas` (`PROBLEMA_ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
