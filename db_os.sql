-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 26-Abr-2019 às 19:12
-- Versão do servidor: 10.1.36-MariaDB
-- versão do PHP: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_os`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `caixa`
--

CREATE TABLE `caixa` (
  `id` int(11) NOT NULL,
  `categoria` varchar(10) NOT NULL,
  `valor` float NOT NULL,
  `descricao` varchar(50) NOT NULL,
  `dia` int(11) NOT NULL,
  `mes` int(11) NOT NULL,
  `ano` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `caixa`
--

INSERT INTO `caixa` (`id`, `categoria`, `valor`, `descricao`, `dia`, `mes`, `ano`) VALUES
(1, 'Entrada', 120, 'FormataÃ§Ã£o e Limpeza', 26, 4, 2019),
(2, 'Saida', 6, 'CafÃ©', 26, 4, 2019),
(8, 'Entrada', 70, 'Atendimento 2', 23, 4, 2019),
(14, 'Saida', 50, 'Gasolina', 1, 1, 2019),
(15, 'Entrada', 100, 'Atendimento Rede', 1, 2, 2019),
(16, 'Entrada', 10, 'Outros', 1, 3, 2019),
(17, 'Saida', 350.95, 'Aluguel', 1, 5, 2019),
(27, 'Entrada', 100, 'teste', 26, 4, 2019),
(28, 'Saida', 50, 'teste2', 26, 4, 2019),
(29, 'Entrada', 30, 'teste3', 26, 4, 2019),
(30, 'Entrada', 70, 'mais teste', 26, 4, 2019),
(31, 'Saida', 10, 'mais um teste', 26, 4, 2019);

-- --------------------------------------------------------

--
-- Estrutura da tabela `cliente`
--

CREATE TABLE `cliente` (
  `id` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `cpf` varchar(11) NOT NULL,
  `data_nasc` date NOT NULL,
  `cep` varchar(15) NOT NULL,
  `endereco` varchar(150) NOT NULL,
  `telefone` varchar(15) NOT NULL,
  `email` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `cliente`
--

INSERT INTO `cliente` (`id`, `nome`, `cpf`, `data_nasc`, `cep`, `endereco`, `telefone`, `email`) VALUES
(2, 'Fabio Chinotzzo', '98765432100', '2019-04-10', '32400000', 'Rua Teste 2 N teste 2 Bairro Teste 2 Cidade Teste2', '31988887755', 'fabio@chinotzzo.com'),
(3, 'Diego PaixÃ£o Sousa', '12345678900', '1992-08-14', '32415292', 'Rua: Rua Doutor JosÃ© de Alencar Rogedo Bairro: Ja', '31313113131', 'diegohpsousa@gmail.com'),
(4, 'Jhonata Tanguinha', '12345678999', '1992-04-04', '32415295', 'Rua: Rua AdÃ£o JoÃ£o Batista Bairro: JaÃ§anÃ£ Ibir', '31313113131', 'Jhonata@tanguinha.com'),
(5, 'NIck Mylows', '12356489600', '2019-04-18', '32415292', 'Rua: das Jamprucas Bairro: Jagunceiros', '3198789878', 'teste@teste.com'),
(7, 'Dava Jones', '6549732166', '2000-01-01', '32415200', 'Rua: Rua Caramuru Bairro: Campos Filho IbiritÃ© - MG', '3155887744', 'dava@jones.com'),
(9, 'Diego Henrique da PaixÃ£o Sousa', '10955039606', '2019-04-03', '34774', '2530 Michigan Ave, Suite F 282439', '5404190683', 'diegohpsousa@gmail.com'),
(10, 'ANA MARIA P C SOUSA', '10955039606', '1965-12-15', '32415292', '11407 SWE Amu St, Suite ', '3189392005', 'diegohpsousa@gmail.com'),
(14, 'Teste', '11111111111', '2019-01-01', '32415220', 'Rua: Avenida Prefeito JoÃ£o de Deus Campos Bairro: Vila Nunes IbiritÃ© - MG', '31333333333', 'dddd@ddd.com'),
(15, 'undefined', '12744480690', '2019-04-11', '32655016', 'Rua Maria Joana de Jesus, 104', '97457193', 'undefined'),
(16, 'fabio', '12744480690', '2019-04-02', '32655016', 'Rua maria', '37872930', 'undefined'),
(17, 'SebastiÃ£o Almeida Pinto', '12345678900', '2019-04-24', '32641598', 'Rua: Rua Bonfim Bairro: CitrolÃ¢ndia Betim - MG', '31991902577', 'undefined');

-- --------------------------------------------------------

--
-- Estrutura da tabela `funcionario`
--

CREATE TABLE `funcionario` (
  `id` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `cpf` varchar(11) NOT NULL,
  `cep` varchar(10) NOT NULL,
  `endereco` varchar(100) NOT NULL,
  `telefone` varchar(15) NOT NULL,
  `email` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `senha` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `funcionario`
--

INSERT INTO `funcionario` (`id`, `nome`, `cpf`, `cep`, `endereco`, `telefone`, `email`, `username`, `senha`) VALUES
(1, 'Jhonata Tanguinha', '65498732100', '32165478', 'Rua Tanguinha N 234 Bairro Tanguinha Cidade dos Ta', '3198766789', 'tanguinha@tanguinha.com', 'tanga', '12345'),
(2, 'Nick Mylows', '99988877755', '30333000', 'Rua Alguma N 01 Bairro Algum Cidade Alguma', '31988776655', 'nickbrix@mylows.com', 'nick', '12345'),
(17, 'Gabrielli da PaixÃ£o Silva Pavione', '15460180694', '32415292', 'Rua: Rua Doutor JosÃ© de Alencar Rogedo Bairro: JaÃ§anÃ£ IbiritÃ© - MG', '31989485755', 'diegohpsousa@gmail.com', 'Cabrita', 'AZEDO25'),
(18, 'Novo Usuario', '12321', '32415220', 'Rua: Avenida Prefeito JoÃ£o de Deus Campos Bairro: Vila Nunes IbiritÃ© - MG', '3199995566', 'teste', 'teste', '3214'),
(19, 'Teste ValidaÃ§Ã£o', '12313221895', '32415220', 'Rua: Avenida Prefeito JoÃ£o de Deus Campos Bairro: Vila Nunes IbiritÃ© - MG', '3155556566', 'teste@teste.com', 'teste1', '123456'),
(20, 'Jacobino da Silva', '12345678900', 'undefined', 'undefined', '31991902577', 'jacoba@gmail.com', 'jacob', '123456'),
(21, 'Salamander da Silva', '12345678900', 'undefined', 'undefined', '3135334455', 'salamander@yahoo.com.br', 'salam', '785523'),
(22, 'Firmino de Souza Neto', '12345678900', 'undefined', 'undefined', '31991902577', 'firmino_neto@yahoo.com.br', 'firminus', '1234'),
(23, 'NIkolas Ribeiro', '12345678900', '32641598', 'Rua: Rua Bonfim Bairro: CitrolÃ¢ndia Betim - MG', '31991902577', 'nickmylows@gmail.com', 'nick', '1234');

-- --------------------------------------------------------

--
-- Estrutura da tabela `ordem`
--

CREATE TABLE `ordem` (
  `id` int(11) NOT NULL,
  `id_cliente` int(11) NOT NULL,
  `cliente` varchar(50) NOT NULL,
  `aparelho` varchar(200) NOT NULL,
  `defeito` varchar(200) NOT NULL,
  `situacao` varchar(25) NOT NULL,
  `relatorio` text NOT NULL,
  `valor` float NOT NULL,
  `data_aber` varchar(10) NOT NULL,
  `data_concl` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `ordem`
--

INSERT INTO `ordem` (`id`, `id_cliente`, `cliente`, `aparelho`, `defeito`, `situacao`, `relatorio`, `valor`, `data_aber`, `data_concl`) VALUES
(5, 2, 'Fabio Chinotzzo', 'Gabinete Preto N3  com adesivo PCyes i3, 8gb Ram, 1tb HD, vga 1050ti ', 'Muito sujo por dentro. ', 'Em Aberto', '', 0, '23/4/2019', ''),
(6, 9, 'Diego Henrique da PaixÃ£o Sousa', 'Gabinete Preto ads Riotoro. Dual Core G3430 12gb ram ssd 240gb VGA 1060ti 6gb', 'Upgrade', 'Em Aberto', '', 0, '23/4/2019', ''),
(7, 7, 'Dava Jones', 'Notebook Dell', 'FormataÃ§Ã£o', 'Aprovado', '', 0, '23/4/2019', ''),
(8, 5, 'NIck Mylows', 'Notebook HP pavilion. Carregador paraguaio', 'bateria nÃ£o carrega. ', 'Aprovado', '', 100, '26/4/2019', ''),
(9, 4, 'Jhonata Tanguinha', 'Notebook Acer', 'NÃ£o roda The Witcher em full HD com tudo no talo. ', 'Concluido', '', 100, '26/4/2019', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `caixa`
--
ALTER TABLE `caixa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `funcionario`
--
ALTER TABLE `funcionario`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ordem`
--
ALTER TABLE `ordem`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_id_cliente_cliente_id` (`id_cliente`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `caixa`
--
ALTER TABLE `caixa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `cliente`
--
ALTER TABLE `cliente`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `funcionario`
--
ALTER TABLE `funcionario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `ordem`
--
ALTER TABLE `ordem`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `ordem`
--
ALTER TABLE `ordem`
  ADD CONSTRAINT `fk_id_cliente_cliente_id` FOREIGN KEY (`id_cliente`) REFERENCES `cliente` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
