-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 14-Jun-2022 às 02:07
-- Versão do servidor: 10.4.24-MariaDB
-- versão do PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `db_loja`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_estoque`
--

CREATE TABLE `tb_estoque` (
  `cod_prod` int(8) NOT NULL,
  `loj_prod` int(8) NOT NULL,
  `qtd_prod` decimal(15,3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tb_estoque`
--

INSERT INTO `tb_estoque` (`cod_prod`, `loj_prod`, `qtd_prod`) VALUES
(144, 1, '4.000'),
(170, 2, '30.000'),
(345, 1, '14.000'),
(588, 2, '10.000'),
(656, 1, '3.000'),
(1012, 2, '2.000'),
(2022, 1, '9.000'),
(3535, 1, '4.000'),
(8735, 1, '6.000');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_lojas`
--

CREATE TABLE `tb_lojas` (
  `loj_prod` int(8) NOT NULL,
  `desc_loj` char(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tb_lojas`
--

INSERT INTO `tb_lojas` (`loj_prod`, `desc_loj`) VALUES
(1, 'LOJA CENTRO CURITIBA'),
(2, 'LOJA CENTRO COLOMBO');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_produtos`
--

CREATE TABLE `tb_produtos` (
  `cod_prod` int(8) NOT NULL,
  `loj_prod` int(8) NOT NULL,
  `desc_prod` char(40) NOT NULL,
  `cor_prod` char(20) NOT NULL,
  `preco_prod` decimal(8,2) NOT NULL,
  `dt_inclu_prod` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tb_produtos`
--

INSERT INTO `tb_produtos` (`cod_prod`, `loj_prod`, `desc_prod`, `cor_prod`, `preco_prod`, `dt_inclu_prod`) VALUES
(123, 1, 'COLEIRA PARA GATO', 'AMARELO', '39.50', '2022-06-02'),
(144, 1, 'NOTEBOOK POSITIVO', 'VERMELHO', '4200.00', '2021-07-24'),
(170, 2, 'LEITE CONDENSADO MOCOCA', 'N/A', '95.40', '2010-12-30'),
(588, 2, 'CALÇA JEANS', 'AZUL', '199.00', '2021-08-14'),
(656, 1, 'SMARTPHONE SAMSUNG 8GB', 'AZUL', '2299.00', '2022-01-03'),
(777, 2, 'MODEM 5GHZ', 'BRANCO', '400.00', '2022-06-12'),
(1012, 2, 'ÓCULOS REALIDADE VIRTUAL', 'AMARELO', '1790.00', '2020-04-02'),
(1118, 1, 'XICARA PROGRAMADOR', 'AMARELO', '119.90', '2022-01-01'),
(2022, 2, 'CAMISETA \"EU AMO DEV. JUNIOR\"', 'VERMELHO', '119.90', '2022-06-10'),
(2974, 2, 'TESOURA CORTE FINO', 'AMARELO', '2.99', '2022-06-06'),
(8735, 1, 'SMARTWATCH APPLE SERIES 3', 'PRETO', '4599.90', '2021-06-05'),
(93754, 2, 'TELEFONE SEM FIO MOTOROLA', 'PRETO', '89.90', '2022-03-10'),
(97802, 2, 'IPHONE APPLE 13 256GB', 'VERMELHO', '9199.90', '2022-06-01'),
(993844, 1, 'CAMISETA BATMAN P', 'PRETO', '59.00', '2022-06-12');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `tb_estoque`
--
ALTER TABLE `tb_estoque`
  ADD KEY `cod_prod` (`cod_prod`),
  ADD KEY `loj_prod` (`loj_prod`);

--
-- Índices para tabela `tb_lojas`
--
ALTER TABLE `tb_lojas`
  ADD PRIMARY KEY (`loj_prod`);

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `tb_estoque`
--
ALTER TABLE `tb_estoque`
  ADD CONSTRAINT `tb_estoque_ibfk_1` FOREIGN KEY (`cod_prod`) REFERENCES `tb_produtos` (`cod_prod`),
  ADD CONSTRAINT `tb_estoque_ibfk_2` FOREIGN KEY (`loj_prod`) REFERENCES `tb_lojas` (`loj_prod`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
