-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Tempo de geração: 22-Dez-2019 às 00:40
-- Versão do servidor: 10.3.16-MariaDB
-- versão do PHP: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `id11976582_app`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `dados`
--

CREATE TABLE `dados` (
  `id_user` int(11) NOT NULL,
  `nome` text NOT NULL,
  `turma` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `dados`
--

INSERT INTO `dados` (`id_user`, `nome`, `turma`) VALUES
(1, 'Artur Jesus', '3002'),
(2, 'Larissa', '3002'),
(3, 'Leonardo', '3002'),
(4, 'Vanessa flores ', '3006'),
(5, 'Luiz Filipe', '3004'),
(6, 'Randerson', '3002'),
(7, 'Tallita', '3002'),
(8, 'Silézia Amaral', '3002'),
(9, 'Estefânia', '3006'),
(10, 'Luis Filipe', '3002'),
(11, 'Druega ', '3005'),
(12, 'Mayara', '3001'),
(13, 'Thaís Ferreira', '3005'),
(14, 'Ayrton', '3005'),
(15, 'Shazam', '3006'),
(16, 'Caroline Barcellos', '3001'),
(17, 'Abel Freire', '3005'),
(18, 'atari', '2001 (?)'),
(19, 'Felipe Nunes', '3004'),
(20, 'Marselle Veiga', '3006'),
(21, 'Felipe Barbosa', '3004'),
(22, 'Wallace Peixoto ', '2002 '),
(23, 'Bruno dirk', '3005'),
(24, 'Célio ', '3004'),
(25, 'Tayná Duarte', '2003'),
(26, 'Izabella ', '3005'),
(27, 'Pedro Henrique', '3004'),
(28, 'Brunna ', '3001'),
(29, 'Everton Goulart', '3004'),
(30, 'Jéssica ', '3004'),
(31, 'Tinhomeireles', '3003'),
(32, 'Karem', '3004'),
(33, 'Andreia Menezes ', '3004'),
(36, 'Felipe Quintes', '3003'),
(37, 'Loraine', '1005');

-- --------------------------------------------------------

--
-- Estrutura da tabela `votos`
--

CREATE TABLE `votos` (
  `id` int(12) NOT NULL,
  `id_v` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `nome` text COLLATE utf8_unicode_ci NOT NULL,
  `turma` text COLLATE utf8_unicode_ci NOT NULL,
  `vt` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `votos`
--

INSERT INTO `votos` (`id`, `id_v`, `nome`, `turma`, `vt`) VALUES
(1, '1', 'Artur Jesus', '3002', 'Encontro no Barzinho'),
(2, '2', 'Larissa', '3002', 'Encontro no Barzinho'),
(3, '4', 'Vanessa flores ', '3006', 'Festa de Reencontro'),
(4, '5', 'Luiz Filipe', '3004', 'Churrasco'),
(5, '3', 'Leonardo', '3002', 'Encontrar no  Shopping'),
(6, '6', 'Randerson', '3002', 'Encontrar no  Shopping'),
(7, '7', 'Tallita', '3002', 'Encontrar no  Shopping'),
(8, '8', 'Silézia Amaral', '3002', 'Encontrar no  Shopping'),
(9, '9', 'Estefânia', '3006', 'Encontro no Barzinho'),
(10, '10', 'Luis Filipe', '3002', 'Encontro no Barzinho'),
(11, '11', 'Druega ', '3005', 'Festa de Reencontro'),
(12, '12', 'Mayara', '3001', 'Encontro no Barzinho'),
(13, '13', 'Thaís Ferreira', '3005', 'Encontro no Barzinho'),
(14, '14', 'Ayrton', '3005', 'Encontro no Barzinho'),
(15, '15', 'Shazam', '3006', 'Encontro no Barzinho'),
(16, '16', 'Caroline Barcellos', '3001', 'Encontro no Barzinho'),
(17, '17', 'Abel Freire', '3005', 'Encontro no Barzinho'),
(18, '18', 'atari', '2001 (?)', 'Encontro no Barzinho'),
(19, '19', 'Felipe Nunes', '3004', 'Encontro no Barzinho'),
(20, '20', 'Marselle Veiga', '3006', 'Encontro no Barzinho'),
(21, '21', 'Felipe Barbosa', '3004', 'Festa de Reencontro'),
(22, '22', 'Wallace Peixoto ', '2002 ', 'Festa de Reencontro'),
(23, '23', 'Bruno dirk', '3005', 'Churrasco'),
(24, '24', 'celio ', '3004', 'Encontro no Barzinho'),
(25, '25', 'Tayná Duarte', '2003', 'Encontro no Barzinho'),
(26, '26', 'Izabella', '3005', 'Encontro no Barzinho'),
(27, '27', 'Pedro Henrique', '3004', 'Encontro no Barzinho'),
(28, '28', 'Brunna', '3001', 'Encontro no Barzinho'),
(29, '29', 'Everton Goulart', '3004', 'Encontro no Barzinho'),
(30, '31', 'tinhomeireles', '3003', 'Encontro no Barzinho'),
(31, '32', 'Karem', '3004', 'Encontro no Barzinho'),
(32, '33', 'Andreia Menezes', '3004', 'Churrasco'),
(33, '30', 'Jéssica ', '3004', 'Encontro no Barzinho ');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `dados`
--
ALTER TABLE `dados`
  ADD PRIMARY KEY (`id_user`);

--
-- Índices para tabela `votos`
--
ALTER TABLE `votos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `dados`
--
ALTER TABLE `dados`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT de tabela `votos`
--
ALTER TABLE `votos`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
