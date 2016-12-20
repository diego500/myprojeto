-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 20-Dez-2016 às 03:23
-- Versão do servidor: 10.1.19-MariaDB
-- PHP Version: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `clinica`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cbo`
--

CREATE TABLE `cbo` (
  `id_cbo` int(50) NOT NULL,
  `nome_cbo` varchar(50) NOT NULL,
  `num_cbo` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `cbo`
--

INSERT INTO `cbo` (`id_cbo`, `nome_cbo`, `num_cbo`) VALUES
(1, 'Médico infectologista', '2251-03'),
(2, 'Médico nefrologista', '2251-09'),
(3, 'Médico neurocirurgião', '2252-60'),
(4, 'Médico neurologista', '2251-12');

-- --------------------------------------------------------

--
-- Estrutura da tabela `clientes`
--

CREATE TABLE `clientes` (
  `id` int(50) NOT NULL,
  `nome` varchar(30) NOT NULL,
  `convenio` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `clientes`
--

INSERT INTO `clientes` (`id`, `nome`, `convenio`) VALUES
(49, 'Diego nunes vieira', 2),
(50, 'Davi miguel nunes vieira ', 3),
(51, 'carlos', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `convenios`
--

CREATE TABLE `convenios` (
  `id_convenios` int(50) NOT NULL,
  `nome_convenio` varchar(50) NOT NULL,
  `logo_convenio` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `convenios`
--

INSERT INTO `convenios` (`id_convenios`, `nome_convenio`, `logo_convenio`) VALUES
(1, 'Amil', 'amil.jpg'),
(2, 'Linha Medial', 'linha.jpg'),
(3, 'Unimed Paulistana', 'unimed.jpg'),
(4, 'Bradesco Saude', 'brades.jpg'),
(5, 'Unimed Paulistana', 'paulis.jpg'),
(6, 'Bradesco Saude', 'saude.jpg');

-- --------------------------------------------------------

--
-- Estrutura da tabela `medicos`
--

CREATE TABLE `medicos` (
  `id_medico` int(50) NOT NULL,
  `crm_medico` int(50) NOT NULL,
  `nome_medico` varchar(50) NOT NULL,
  `conselho_medico` varchar(30) NOT NULL,
  `uf_crm_medico` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `medicos`
--

INSERT INTO `medicos` (`id_medico`, `crm_medico`, `nome_medico`, `conselho_medico`, `uf_crm_medico`) VALUES
(1, 666, 'Satanas do Chavez', '06', 'RJ'),
(4, 799800, 'Diego nunes vieira', '06', 'RJ');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(30) NOT NULL,
  `crm` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `crm`, `password`) VALUES
(1, 'admin', '123456');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cbo`
--
ALTER TABLE `cbo`
  ADD PRIMARY KEY (`id_cbo`);

--
-- Indexes for table `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `convenios`
--
ALTER TABLE `convenios`
  ADD PRIMARY KEY (`id_convenios`);

--
-- Indexes for table `medicos`
--
ALTER TABLE `medicos`
  ADD PRIMARY KEY (`id_medico`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cbo`
--
ALTER TABLE `cbo`
  MODIFY `id_cbo` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;
--
-- AUTO_INCREMENT for table `convenios`
--
ALTER TABLE `convenios`
  MODIFY `id_convenios` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `medicos`
--
ALTER TABLE `medicos`
  MODIFY `id_medico` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
