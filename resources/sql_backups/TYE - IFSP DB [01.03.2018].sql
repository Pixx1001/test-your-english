-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 02-Mar-2018 às 02:47
-- Versão do servidor: 10.1.25-MariaDB
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tye_ifsp`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `alunos_ifsp`
--

CREATE TABLE `alunos_ifsp` (
  `id` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `pront` varchar(11) NOT NULL,
  `campus` varchar(50) NOT NULL,
  `estado` char(2) NOT NULL COMMENT 'Siglas',
  `curso` varchar(15) NOT NULL,
  `modulo` varchar(15) NOT NULL,
  `nasc` varchar(15) NOT NULL,
  `tipo` varchar(15) NOT NULL,
  `nota` int(9) NOT NULL COMMENT 'Nota do Aluno',
  `dif` int(99) NOT NULL COMMENT 'Dificuldade',
  `dia` varchar(15) NOT NULL,
  `hora` varchar(15) NOT NULL,
  `ua` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Apenas alunos do IFSP Aparecem Aqui.';

--
-- Extraindo dados da tabela `alunos_ifsp`
--

INSERT INTO `alunos_ifsp` (`id`, `nome`, `pront`, `campus`, `estado`, `curso`, `modulo`, `nasc`, `tipo`, `nota`, `dif`, `dia`, `hora`, `ua`) VALUES
(1, 'Diego Lopes ', 'a1703293', 'Caraguatatuba', 'sp', 'Informática', '2° Módulo', '1999-02-22', 'Leitura', 1, 0, '2017/10/05', '02:55:13am', 'Mozilla/5.0 (Linux; Android 5.1.1; Moto G 2014 Build/LMY49J) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/39.0.0.0 Mobile Safari/537.36'),
(11, 'Rico Martinez', '', '', 'sp', 'Informática', '2° Módulo', '', 'Leitura', 4, 1, '2018/01/04', '11:04:15pm', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/62.0.3202.75 Safari/537.36'),
(13, 'Chris Redfield', 'a8792342', 'Raccon City', 'ou', 'Informática', '2° Módulo', '1992-02-04', 'Leitura', 1, 2, '2018/02/02', '07:11:27pm', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/62.0.3202.75 Safari/537.36'),
(14, 'Big Boss', 'a438934x', 'Outer Heaven', 'ou', 'Informática', '2° Módulo', '1964-06-24', 'Leitura', 3, 2, '2018/02/02', '07:12:50pm', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/62.0.3202.75 Safari/537.36'),
(15, 'Leon S. Kenneth', 'a8585329', 'Raccon City ', 'ou', 'InformÃ¡tica', '3Â° MÃ³dulo', '1981-02-19', 'Leitura', 4, 2, '2018/02/03', '03:55:04pm', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/62.0.3202.75 Safari/537.36'),
(16, 'Ada Wong', 'a897678', 'Raccoon City', 'ou', 'Outro curso...', '4Â° MÃ³dulo', '1982-01-04', 'Leitura', 8, 2, '2018/02/03', '04:04:58pm', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/62.0.3202.75 Safari/537.36'),
(17, 'DigÃ£o', 'ahahaha', 'Sei LÃ¡', 'sp', 'InformÃ¡tica', '1Â° MÃ³dulo', '2018-02-22', 'Leitura', 0, 1, '2018/02/05', '08:15:47pm', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/62.0.3202.75 Safari/537.36');

-- --------------------------------------------------------

--
-- Estrutura da tabela `noticias`
--

CREATE TABLE `noticias` (
  `id` int(10) UNSIGNED NOT NULL,
  `titulo` varchar(50) NOT NULL,
  `data` varchar(50) NOT NULL,
  `conteudo` varchar(2500) NOT NULL,
  `imagem` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `noticias`
--

INSERT INTO `noticias` (`id`, `titulo`, `data`, `conteudo`, `imagem`) VALUES
(0, 'Correção do teste!', '25/07/2017', 'Agora você pode corrigir o teste! em breve melhoraremos o site para uma avaliação mais detalhada do teste. \r\n', 'img/amflag_gray.png'),
(1, 'Site em manutenção', '22/06/2017', 'Infelizmente o sistema de respostas e acertos deste site ainda não está completo... aguarde para que daqui alguns dias possamos resolver ', 'img/amflag_gray.png'),
(3, 'Novo sistema de Login!', '12/07/2017', 'Agora seu nome é guardado em um Cookie e você poderá ver seu nome. Enquanto você não sair da sessão, seu nome continuará a ficar visível no site. A sessão expira automaticamente em 24 horas. Aguarde para mais novidades sobre o sistema de perguntas e acertos!\r\n\r\n', 'img/amflag_gray.png'),
(4, 'Melhorias no Design!', '08/08/2017', 'Aproveite a nova interface do site com fontes mais legíveis e cores leves. O site agora também é responsivo (Adaptado para celulares e outros aparelhos) A equipe deseja a você uma boa leitura e boa sorte nos testes. Não hesite em mandar um feedback para a equipe. Seu apoio é importante. ', 'img/amflag_gray.png');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(10) UNSIGNED NOT NULL,
  `nome` varchar(50) NOT NULL,
  `senha` varchar(50) NOT NULL,
  `tipo` int(11) NOT NULL COMMENT '[1] = admin [2] = moderador'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome`, `senha`, `tipo`) VALUES
(1, 'admin', 'pass', 1),
(2, 'Diego', 'master', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `visitantes`
--

CREATE TABLE `visitantes` (
  `id` int(10) UNSIGNED NOT NULL,
  `nome` varchar(50) NOT NULL,
  `campus` varchar(50) NOT NULL,
  `estado` varchar(50) NOT NULL,
  `nasc` varchar(50) NOT NULL,
  `tipo` varchar(50) NOT NULL,
  `nota` varchar(2) NOT NULL,
  `dif` varchar(50) NOT NULL,
  `dia` varchar(50) NOT NULL,
  `hora` varchar(50) NOT NULL,
  `ua` varchar(1000) NOT NULL COMMENT 'UA do navegador'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `visitantes`
--

INSERT INTO `visitantes` (`id`, `nome`, `campus`, `estado`, `nasc`, `tipo`, `nota`, `dif`, `dia`, `hora`, `ua`) VALUES
(2, 'Batman', 'Gotham High School', 'sp', '1991-01-24', 'Leitura', '8', '2', '2018/01/07', '07:47:15pm', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/62.0.3202.75 Safari/537.36');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `alunos_ifsp`
--
ALTER TABLE `alunos_ifsp`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `noticias`
--
ALTER TABLE `noticias`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `visitantes`
--
ALTER TABLE `visitantes`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `alunos_ifsp`
--
ALTER TABLE `alunos_ifsp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `noticias`
--
ALTER TABLE `noticias`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `visitantes`
--
ALTER TABLE `visitantes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
