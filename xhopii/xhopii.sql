-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 06/06/2026 às 00:07
-- Versão do servidor: 10.4.32-MariaDB
-- Versão do PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `xhopii`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `clientes`
--

CREATE TABLE `clientes` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `sobrenome` varchar(100) NOT NULL,
  `cpf` varchar(14) NOT NULL,
  `data_nascimento` date NOT NULL,
  `telefone` varchar(20) DEFAULT NULL,
  `email` varchar(150) NOT NULL,
  `senha` varchar(255) NOT NULL,
  `foto_perfil` varchar(255) DEFAULT NULL,
  `criado_em` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `cupons`
--

CREATE TABLE `cupons` (
  `id` int(11) NOT NULL,
  `codigo` varchar(50) NOT NULL,
  `desconto` varchar(50) NOT NULL,
  `tipo_desconto` enum('percentual','fixo','frete') NOT NULL,
  `validade` date NOT NULL,
  `quantidade_usos` int(11) NOT NULL DEFAULT 0,
  `valor_minimo_pedido` decimal(10,2) DEFAULT 0.00,
  `descricao` text DEFAULT NULL,
  `criado_em` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Despejando dados para a tabela `cupons`
--

INSERT INTO `cupons` (`id`, `codigo`, `desconto`, `tipo_desconto`, `validade`, `quantidade_usos`, `valor_minimo_pedido`, `descricao`, `criado_em`) VALUES
(1, '19025-650', '10', 'percentual', '2026-06-30', 50, 30.00, '', '2026-06-04 19:22:32');

-- --------------------------------------------------------

--
-- Estrutura para tabela `funcionarios`
--

CREATE TABLE `funcionarios` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `sobrenome` varchar(100) NOT NULL,
  `cpf` varchar(14) NOT NULL,
  `cargo` varchar(100) NOT NULL,
  `salario` decimal(10,2) NOT NULL,
  `telefone` varchar(20) DEFAULT NULL,
  `email` varchar(150) NOT NULL,
  `senha` varchar(255) NOT NULL,
  `foto_funcionario` varchar(255) DEFAULT NULL,
  `criado_em` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `lojas`
--

CREATE TABLE `lojas` (
  `id` int(11) NOT NULL,
  `nome` varchar(150) NOT NULL,
  `cnpj` varchar(18) NOT NULL,
  `categoria` varchar(100) NOT NULL,
  `endereco` varchar(255) NOT NULL,
  `telefone` varchar(20) DEFAULT NULL,
  `email` varchar(150) NOT NULL,
  `descricao` text DEFAULT NULL,
  `logo_loja` varchar(255) DEFAULT NULL,
  `criado_em` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `produtos`
--

CREATE TABLE `produtos` (
  `id` int(11) NOT NULL,
  `nome` varchar(150) NOT NULL,
  `fabricante` varchar(100) NOT NULL,
  `descricao` text NOT NULL,
  `valor` decimal(10,2) NOT NULL,
  `quantidade` int(11) NOT NULL DEFAULT 0,
  `foto_produto` varchar(255) DEFAULT NULL,
  `criado_em` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Despejando dados para a tabela `produtos`
--

INSERT INTO `produtos` (`id`, `nome`, `fabricante`, `descricao`, `valor`, `quantidade`, `foto_produto`, `criado_em`) VALUES
(4, 'Mouse Gamer Redragon Cobra', 'Redragon', 'Mouse gamer ergonômico com iluminação RGB, sensor de alta precisão, 7 botões programáveis e design confortável para longas sessões de uso.', 149.90, 34, '../img/produtos/1780694900_Mouse.png', '2026-06-05 21:28:20'),
(5, 'Teclado Mecânico Redragon Kumara', 'Redragon', 'Teclado mecânico compacto com switches de alta durabilidade, iluminação LED vermelha e estrutura resistente para jogos e trabalho.', 249.90, 15, '../img/produtos/1780694942_teclado.png', '2026-06-05 21:29:02'),
(6, 'Samsung Galaxy A56 5G', 'Samsung', 'Smartphone com tela Super AMOLED de 6.7\", câmera tripla de alta resolução, processador Octa-Core e conectividade 5G.', 2000.00, 21, '../img/produtos/1780695019_A56.png', '2026-06-05 21:30:19'),
(7, 'Notebook Lenovo IdeaPad 3', 'Lenovo', 'Notebook ideal para estudos, trabalho e entretenimento, equipado com processador Intel Core i5, SSD de 512GB e tela Full HD.', 3000.00, 12, '../img/produtos/1780695055_Notebook.png', '2026-06-05 21:30:55'),
(8, 'Perfume Malbec Eau de Parfum', 'O Boticário', 'Fragrância masculina sofisticada com notas amadeiradas intensas, excelente fixação e aroma marcante para qualquer ocasião.', 229.90, 7, '../img/produtos/1780695098_Malbec.png', '2026-06-05 21:31:38'),
(9, 'Camiseta Oversized Preta', 'Xhopii Fashion', 'Camiseta confeccionada em algodão premium, modelagem oversized, confortável e versátil para uso casual.', 79.90, 53, '../img/produtos/1780695143_Camisa.png', '2026-06-05 21:32:23'),
(10, 'Camiseta Code Style', 'Xhopii Fashion', 'Camiseta preta confeccionada em algodão premium com estampa inspirada em programação. Ideal para desenvolvedores, estudantes de tecnologia e apaixonados por código.', 69.90, 43, '../img/produtos/1780695296_produto1.png', '2026-06-05 21:34:56'),
(11, 'Camiseta Code Style Rosa', 'Xhopii Fashion', 'Camiseta Rosa confeccionada em algodão premium com estampa inspirada em programação. Ideal para desenvolvedores, estudantes de tecnologia e apaixonados por código.', 69.00, 32, '../img/produtos/1780695326_produto5.png', '2026-06-05 21:35:26');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `cpf` (`cpf`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Índices de tabela `cupons`
--
ALTER TABLE `cupons`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `codigo` (`codigo`);

--
-- Índices de tabela `funcionarios`
--
ALTER TABLE `funcionarios`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `cpf` (`cpf`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Índices de tabela `lojas`
--
ALTER TABLE `lojas`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `cnpj` (`cnpj`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Índices de tabela `produtos`
--
ALTER TABLE `produtos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT de tabela `cupons`
--
ALTER TABLE `cupons`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `funcionarios`
--
ALTER TABLE `funcionarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `lojas`
--
ALTER TABLE `lojas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `produtos`
--
ALTER TABLE `produtos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
