-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 20-Maio-2020 às 02:17
-- Versão do servidor: 5.7.17
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `aavinil`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cliente`
--

CREATE TABLE `cliente` (
  `id_cli` int(11) NOT NULL,
  `nome_cli` text NOT NULL,
  `cpf_cli` text NOT NULL,
  `email_cli` text NOT NULL,
  `rua_cli` text NOT NULL,
  `numero_cli` text NOT NULL,
  `telefone_cli` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `faixascd`
--

CREATE TABLE `faixascd` (
  `id_faixa` int(11) NOT NULL,
  `nome_faixa` text NOT NULL,
  `link_faixa` text NOT NULL,
  `autor_faixa` text NOT NULL,
  `id_produto` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `faixascd`
--

INSERT INTO `faixascd` (`id_faixa`, `nome_faixa`, `link_faixa`, `autor_faixa`, `id_produto`) VALUES
(15, 'Beautiful', 'https://www.youtube.com/watch?v=aJn3QJYYBr0', 'Carole King', 31),
(14, 'Home Again', 'youtube.com/watch?v=1KVoCaqX4SM', 'Carole King', 31),
(13, 'Its Too Late', 'https://www.youtube.com/watch?v=VkKxmnrRVHo', 'Carole King', 31),
(11, 'I Feel the Earth Move', 'https://www.youtube.com/watch?v=6913KnbMpHM', 'Carole King', 31),
(12, 'So Far Away', 'https://www.youtube.com/watch?v=UofYl3dataU', 'Carole King', 31),
(16, 'Way Over Yonder', 'https://www.youtube.com/watch?v=M2alP70O_Gw', 'Carole King', 31),
(17, 'You ve Got a Friend', 'https://www.youtube.com/watch?v=eAR_Ff5A8Rk', 'Carole King', 31),
(18, 'Where You Lead', 'https://www.youtube.com/watch?v=jtxeDpNoR8I', 'Carole King', 31),
(19, 'Will You Love Me Tomorrow?', 'https://www.youtube.com/watch?v=GLA7sanwnN8', 'Carole King', 31),
(20, 'Smackwater Jack', 'https://www.youtube.com/watch?v=ANsKjjyfeOo', 'Carole King', 31),
(21, 'Tapestry', 'https://www.youtube.com/watch?v=JM07lUytXA0&list=PLkLimRXN6NKyvtIxiC7Y-p1b9FcQLCwFP&index=11', 'Carole King', 31),
(22, ' A Natural Woman', 'https://www.youtube.com/watch?v=KQXY8zwQgmc', 'Carole King', 31),
(23, 'Stairway To Heaven', 'https://www.youtube.com/watch?v=xbhCPt6PZIU', 'Led Zeppelin', 32),
(24, 'All Of My Love', 'https://www.youtube.com/watch?v=z0DAnu5Sq6k', 'Led Zeppelin', 32),
(25, 'Whole Lotta Love', 'https://www.youtube.com/watch?v=HQmmM_qwG4k', 'Led Zeppelin', 32),
(26, 'Pedro Pedreiro', 'https://www.youtube.com/watch?v=NUkil69L6-0', 'Chico Buarque', 33),
(27, 'Sonho de Carnaval', 'https://www.youtube.com/watch?v=lhLn4w0S2M8', 'Chico Buarque', 33),
(28, 'Tutti Frutti', 'https://www.youtube.com/watch?v=hJ8mCwfUNq4', 'Elvis Presley', 34),
(29, 'Money Honey', 'https://www.youtube.com/watch?v=R-4KROtI1yM', 'Elvis Presley', 34),
(30, 'My Baby Left Me', ' https://www.youtube.com/watch?v=WTSJVyrkp-c', 'Elvis Presley', 34),
(31, 'Hound Dog', 'https://www.youtube.com/watch?v=-eHJ12Vhpyc', 'Elvis Presley', 34),
(32, 'Blue Suede Shoes', 'https://www.youtube.com/watch?v=HeXnFx7aPOE', 'Elvis Presley', 34),
(33, 'Blue Moon', 'https://www.youtube.com/watch?v=MiY5auB3OWg', 'Elvis Presley', 34),
(34, 'I Got A Woman', 'https://www.youtube.com/watch?v=q1jHfts9UhE', 'Elvis Presley', 34),
(35, 'Lawdy Miss Clawdy', 'https://www.youtube.com/watch?v=i5t_wsw2Xow', 'Elvis Presley', 34),
(36, 'Just Because', 'https://www.youtube.com/watch?v=ULLG80Rup1g', 'Elvis Presley', 34),
(37, 'Ready Teddy', 'https://www.youtube.com/watch?v=lQ0x9qKJBNI', 'Elvis Presley', 34),
(38, 'Trying To Get To You', 'https://www.youtube.com/watch?v=ZIW9txvivCs', 'Elvis Presley', 34),
(39, 'I Love You Because', 'https://www.youtube.com/watch?v=JjoGeD_lDMQ', 'Elvis Presley', 34),
(40, 'Brighton Rock', 'https://www.youtube.com/watch?v=BUt_7TQCWtU', 'Queen', 35),
(41, 'Killer Queen', 'https://www.youtube.com/watch?v=2ZBtPf7FOoM', 'Queen', 35),
(42, 'Tenement Funster', 'https://www.youtube.com/watch?v=0E2mjJvBKs8', 'Queen', 35),
(43, 'Flick Of The Wrist', 'https://www.youtube.com/watch?v=mrApaXj5QmA', 'Queen', 35),
(44, 'Lily Of The Valley', 'https://www.youtube.com/watch?v=o7K1_g31H0s', 'Queen', 35),
(45, 'Now Im Here', 'https://www.youtube.com/watch?v=HPHTKePwzUw', 'Queen', 35),
(46, 'In The Lap Of The Gods', 'https://www.youtube.com/watch?v=ieXcPZC0MJk', 'Queen', 35),
(47, 'Stone Cold Crazy', 'https://www.youtube.com/watch?v=AgeiiKkbDBg', 'Queen', 35),
(48, 'Eraser', 'https://www.youtube.com/watch?v=OjGrcJ4lZCc', 'Ed Sheeran', 36),
(49, 'Castle On The Hill', 'https://www.youtube.com/watch?v=K0ibBPhiaG0', 'Ed Sheeran', 36),
(50, 'Dive', 'https://www.youtube.com/watch?v=Wv2rLZmbPMA', 'Ed Sheeran', 36),
(51, 'Shape Of You', 'https://www.youtube.com/watch?v=JGwWNGJdvx8', 'Ed Sheeran', 36),
(52, 'Perfect', 'https://www.youtube.com/watch?v=2Vv-BfVoq4g', 'Ed Sheeran', 36);

-- --------------------------------------------------------

--
-- Estrutura da tabela `produto`
--

CREATE TABLE `produto` (
  `id_prod` int(11) NOT NULL,
  `nome_prod` text NOT NULL,
  `preco_prod` double NOT NULL,
  `quantidade_prod` int(11) NOT NULL,
  `produtora_prod` text NOT NULL,
  `seguimento_prod` text NOT NULL,
  `arquivo_prod` varchar(40) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `produto`
--

INSERT INTO `produto` (`id_prod`, `nome_prod`, `preco_prod`, `quantidade_prod`, `produtora_prod`, `seguimento_prod`, `arquivo_prod`) VALUES
(31, 'Tapestry', 125.5, 3, 'Carole King', 'anos70', 'Carole_King_-_Tapestry.jpg'),
(36, 'Divide', 180, 10, 'Ed Sheeran', 'atualidade', 'Divide.jpg'),
(34, 'Tutti Frutti', 150, 2, 'Elvis Presley', 'classicos', 'Tutti Frutti.jpg'),
(35, 'Sheer Heart Attack ', 200, 1, 'Queen', 'classicos', 'Sheer Heart Attack.jpg'),
(33, 'Hollanda', 70, 1, 'Chico Buarque', 'classicos', 'Chico Buarque.jpg'),
(32, 'Led Zeppelin IV', 55, 1, 'Led Zeppelin', 'anos70', 'LedZeppelinIV.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`id_cli`);

--
-- Indexes for table `faixascd`
--
ALTER TABLE `faixascd`
  ADD PRIMARY KEY (`id_faixa`);

--
-- Indexes for table `produto`
--
ALTER TABLE `produto`
  ADD PRIMARY KEY (`id_prod`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cliente`
--
ALTER TABLE `cliente`
  MODIFY `id_cli` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `faixascd`
--
ALTER TABLE `faixascd`
  MODIFY `id_faixa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;
--
-- AUTO_INCREMENT for table `produto`
--
ALTER TABLE `produto`
  MODIFY `id_prod` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
