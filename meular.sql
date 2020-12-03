-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 03-Dez-2020 às 21:51
-- Versão do servidor: 10.4.11-MariaDB
-- versão do PHP: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `meular`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `animais`
--

CREATE TABLE `animais` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_Ongs` int(10) UNSIGNED DEFAULT NULL,
  `nome` varchar(45) NOT NULL,
  `porte` varchar(10) NOT NULL,
  `sexo` varchar(10) NOT NULL,
  `imagem_animal` varchar(345) NOT NULL,
  `dataRegistro` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `animais`
--

INSERT INTO `animais` (`id`, `id_Ongs`, `nome`, `porte`, `sexo`, `imagem_animal`, `dataRegistro`) VALUES
(1, 35, 'lulu', 'baixo', 'macho', 'img.jpg', '2020-11-29 01:42:33'),
(2, 35, 'lulu', 'baixo', 'macho', 'img.jpg', '2020-11-29 01:44:45'),
(3, 35, 'lolo', 'baixo', 'femea', '../../../uploadImg/animals/0.jpg5fc3025a42b51.jpg', '2020-11-29 02:07:22');

-- --------------------------------------------------------

--
-- Estrutura da tabela `lartemporario`
--

CREATE TABLE `lartemporario` (
  `id` int(10) UNSIGNED NOT NULL,
  `nome` varchar(50) NOT NULL,
  `cpf` varchar(11) NOT NULL,
  `email` varchar(25) NOT NULL,
  `senha` varchar(50) DEFAULT NULL,
  `endereco` varchar(50) NOT NULL,
  `bairro` varchar(25) NOT NULL,
  `cidade` varchar(25) NOT NULL,
  `uf` varchar(2) NOT NULL,
  `cep` varchar(10) NOT NULL,
  `contato` varchar(14) NOT NULL,
  `imagem_comproResidencia` varchar(25) NOT NULL,
  `dataRegistro` timestamp NOT NULL DEFAULT current_timestamp(),
  `disponivel` tinyint(1) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `lartemporario`
--

INSERT INTO `lartemporario` (`id`, `nome`, `cpf`, `email`, `senha`, `endereco`, `bairro`, `cidade`, `uf`, `cep`, `contato`, `imagem_comproResidencia`, `dataRegistro`, `disponivel`) VALUES
(5, 'Lll', '98802677026', 'lar@hotmail.com', '1234', 'Rua Clóvis Pessoa de Araújo', 'Parque Capibaribe', 'São Lourenço da Mata', 'PE', '54720-014', '81988888888', '../uploadImg/homer/0.jpg5', '2020-10-25 02:06:07', 1),
(7, 'Marcos', '09281338424', 'marcosjuremao@hotmail.com', '1234', 'Rua Clóvis Pessoa de Araújo', 'Parque Capibaribe', 'São Lourenço da Mata', 'PE', '54720-014', '81983888888', '../uploadImg/homer/0.jpg5', '2020-10-26 00:18:42', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `ongs`
--

CREATE TABLE `ongs` (
  `id` int(10) UNSIGNED NOT NULL,
  `nome` varchar(45) NOT NULL,
  `cnpj` varchar(15) NOT NULL,
  `email` varchar(25) NOT NULL,
  `senha` varchar(50) DEFAULT NULL,
  `endereco` varchar(30) NOT NULL,
  `bairro` varchar(25) NOT NULL,
  `cidade` varchar(25) NOT NULL,
  `uf` varchar(2) NOT NULL,
  `cep` varchar(10) NOT NULL,
  `contato` varchar(14) NOT NULL,
  `imagem_ongs` varchar(255) NOT NULL,
  `dataRegistro` timestamp NOT NULL DEFAULT current_timestamp(),
  `disponivel` tinyint(1) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `ongs`
--

INSERT INTO `ongs` (`id`, `nome`, `cnpj`, `email`, `senha`, `endereco`, `bairro`, `cidade`, `uf`, `cep`, `contato`, `imagem_ongs`, `dataRegistro`, `disponivel`) VALUES
(35, 'Cachorrolouco', '26389931000117', 'marcosjuremao@hotmail.com', '12345', 'Rua Clóvis Pessoa de Araújo', 'Parque Capibaribe', 'São Lourenço da Mata', 'PE', '54720-014', '81988888888', '../uploadImg/ongs/0.jpg5f9613d61086f.jpg', '2020-10-26 00:09:58', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `passwordtemphomer`
--

CREATE TABLE `passwordtemphomer` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_homer` int(10) UNSIGNED NOT NULL,
  `email` varchar(60) NOT NULL,
  `senha` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `passwordtempongs`
--

CREATE TABLE `passwordtempongs` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_ongs` int(10) UNSIGNED NOT NULL,
  `email` varchar(60) NOT NULL,
  `senha` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `passwordtemppessoa`
--

CREATE TABLE `passwordtemppessoa` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_pessoa` int(10) UNSIGNED NOT NULL,
  `email` varchar(60) NOT NULL,
  `senha` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `passwordtemppessoa`
--

INSERT INTO `passwordtemppessoa` (`id`, `id_pessoa`, `email`, `senha`) VALUES
(12, 20, 'marcosjuremao@hotmail.com', '540597'),
(13, 20, 'marcosjuremao@hotmail.com', '888040'),
(14, 20, 'marcosjuremao@hotmail.com', '898168');

-- --------------------------------------------------------

--
-- Estrutura da tabela `pessoa`
--

CREATE TABLE `pessoa` (
  `id` int(10) UNSIGNED NOT NULL,
  `nome` varchar(50) NOT NULL,
  `cpf` varchar(11) NOT NULL,
  `email` varchar(45) NOT NULL,
  `senha` varchar(50) DEFAULT NULL,
  `endereco` varchar(60) NOT NULL,
  `bairro` varchar(45) NOT NULL,
  `cidade` varchar(45) NOT NULL,
  `uf` varchar(2) NOT NULL,
  `cep` varchar(10) NOT NULL,
  `contato` varchar(13) NOT NULL,
  `dataRegistro` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `pessoa`
--

INSERT INTO `pessoa` (`id`, `nome`, `cpf`, `email`, `senha`, `endereco`, `bairro`, `cidade`, `uf`, `cep`, `contato`, `dataRegistro`) VALUES
(8, 'Teste', '24898347037', 'teste@email.com', '1234', 'teste rua', 'portugal', 'lisboa', 'PA', '54720-123', '81988888888', '2020-10-25 22:24:23'),
(20, 'Marcos Simao de Andrade Silva', '09281338424', 'marcosjuremao@hotmail.com', '1234', 'Rua Clóvis Pessoa de Araújo', 'Parque Capibaribe', 'São Lourenço da Mata', 'PE', '54720-014', '81988888888', '2020-10-25 23:37:37'),
(21, 'Marco Simao de Andrade Silva', '48652755094', 'marcojuremao@hotmail.com', '1234', 'Rua Clóvis Pessoa de Araújo', 'Parque Capibaribe', 'São Lourenço da Mata', 'PE', '54720-014', '81983888888', '2020-10-25 23:43:34');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `animais`
--
ALTER TABLE `animais`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_animais_ongs` (`id_Ongs`);

--
-- Índices para tabela `lartemporario`
--
ALTER TABLE `lartemporario`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `cpf` (`cpf`);

--
-- Índices para tabela `ongs`
--
ALTER TABLE `ongs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `cnpj` (`cnpj`);

--
-- Índices para tabela `passwordtemphomer`
--
ALTER TABLE `passwordtemphomer`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_Pass_homer` (`id_homer`);

--
-- Índices para tabela `passwordtempongs`
--
ALTER TABLE `passwordtempongs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_Pass_ongs` (`id_ongs`);

--
-- Índices para tabela `passwordtemppessoa`
--
ALTER TABLE `passwordtemppessoa`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_Pass_pessoa` (`id_pessoa`);

--
-- Índices para tabela `pessoa`
--
ALTER TABLE `pessoa`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `cpf` (`cpf`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `animais`
--
ALTER TABLE `animais`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `lartemporario`
--
ALTER TABLE `lartemporario`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de tabela `ongs`
--
ALTER TABLE `ongs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT de tabela `passwordtemphomer`
--
ALTER TABLE `passwordtemphomer`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `passwordtempongs`
--
ALTER TABLE `passwordtempongs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `passwordtemppessoa`
--
ALTER TABLE `passwordtemppessoa`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de tabela `pessoa`
--
ALTER TABLE `pessoa`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `animais`
--
ALTER TABLE `animais`
  ADD CONSTRAINT `FK_animais_ongs` FOREIGN KEY (`id_Ongs`) REFERENCES `ongs` (`id`);

--
-- Limitadores para a tabela `passwordtemphomer`
--
ALTER TABLE `passwordtemphomer`
  ADD CONSTRAINT `FK_Pass_homer` FOREIGN KEY (`id_homer`) REFERENCES `lartemporario` (`id`);

--
-- Limitadores para a tabela `passwordtempongs`
--
ALTER TABLE `passwordtempongs`
  ADD CONSTRAINT `FK_Pass_ongs` FOREIGN KEY (`id_ongs`) REFERENCES `ongs` (`id`);

--
-- Limitadores para a tabela `passwordtemppessoa`
--
ALTER TABLE `passwordtemppessoa`
  ADD CONSTRAINT `FK_Pass_pessoa` FOREIGN KEY (`id_pessoa`) REFERENCES `pessoa` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
