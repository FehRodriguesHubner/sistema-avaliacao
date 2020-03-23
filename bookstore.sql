-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 17-Mar-2020 às 20:49
-- Versão do servidor: 10.1.37-MariaDB
-- versão do PHP: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bookstore`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `adms`
--

CREATE TABLE `adms` (
  `cpf` int(11) NOT NULL,
  `senha` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `adms`
--

INSERT INTO `adms` (`cpf`, `senha`) VALUES
(4002, 'admin');

-- --------------------------------------------------------

--
-- Estrutura da tabela `encomendas`
--

CREATE TABLE `encomendas` (
  `codigo` int(11) NOT NULL,
  `nome` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `endereco` varchar(50) NOT NULL,
  `cod_livro` int(11) NOT NULL,
  `cidade` varchar(20) NOT NULL,
  `estado` varchar(20) NOT NULL,
  `cep` int(11) NOT NULL,
  `nome_livro` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `livros`
--

CREATE TABLE `livros` (
  `codigo` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `valor` double NOT NULL,
  `ref` text NOT NULL,
  `imgRef` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `livros`
--

INSERT INTO `livros` (`codigo`, `nome`, `valor`, `ref`, `imgRef`) VALUES
(1, 'Revolução bixana', 29.99, 'paginas/livro1.php', 'img/revo.jpg'),
(2, 'Como saber se seu gato está planejando matar você', 15.99, 'paginas/livro2.php', 'img/gato.png'),
(4, 'A Sociedade do espetÃ¡culo', 16.99, 'paginas/livro3.php', 'img/debord.jpg'),
(5, 'O Mundo de PlatÃ£o', 43.99, 'paginas/livro4.php', 'img/platon.jpg'),
(6, 'Amor Para Corajosos', 3.99, 'paginas/livro5.php', 'img/AmorParaCorajosos.jfif'),
(7, 'Como eu era antes de vocÃª', 4.99, 'paginas/livro6.php', 'img/ComoEuEraAntesDeVoce.jfif'),
(8, 'O Diario da Nossa PaixÃ£o', 6.99, 'paginas/livro7.php', 'img/oDiarioDaNossaPaixao.jfif');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adms`
--
ALTER TABLE `adms`
  ADD PRIMARY KEY (`cpf`);

--
-- Indexes for table `encomendas`
--
ALTER TABLE `encomendas`
  ADD PRIMARY KEY (`codigo`),
  ADD KEY `fk_book` (`cod_livro`);

--
-- Indexes for table `livros`
--
ALTER TABLE `livros`
  ADD PRIMARY KEY (`codigo`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `encomendas`
--
ALTER TABLE `encomendas`
  MODIFY `codigo` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `livros`
--
ALTER TABLE `livros`
  MODIFY `codigo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `encomendas`
--
ALTER TABLE `encomendas`
  ADD CONSTRAINT `fk_book` FOREIGN KEY (`cod_livro`) REFERENCES `livros` (`codigo`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
