-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 08-Maio-2017 às 21:18
-- Versão do servidor: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `avaliacaonutricional`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `adequacao`
--

CREATE TABLE `adequacao` (
  `ID` int(10) NOT NULL,
  `Alimento` varchar(255) NOT NULL,
  `Descricao` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `adequacao`
--

INSERT INTO `adequacao` (`ID`, `Alimento`, `Descricao`) VALUES
(1, 'Arroz integral', 'Arroz integral para pacientes que necessitam de uma maior quantidade de fibras.'),
(2, 'Feijão', 'Feijão para pacientes que necessitam de ferro.'),
(3, 'Frango grelhado', 'Proteína');

-- --------------------------------------------------------

--
-- Estrutura da tabela `avaliacaoantropometrica`
--

CREATE TABLE `avaliacaoantropometrica` (
  `ID` int(10) NOT NULL,
  `PacienteID` int(10) NOT NULL,
  `Altura` double NOT NULL,
  `LarguraPanturrilha` double DEFAULT NULL,
  `Peso` double NOT NULL,
  `AlturaJoelho` double DEFAULT NULL,
  `Acamado` tinyint(1) NOT NULL,
  `Amputado` tinyint(1) NOT NULL,
  `CbAferida` double DEFAULT NULL,
  `CbClas` varchar(255) DEFAULT NULL,
  `Data` date NOT NULL,
  `circunferenciaBraco` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `avaliacaoantropometrica`
--

INSERT INTO `avaliacaoantropometrica` (`ID`, `PacienteID`, `Altura`, `LarguraPanturrilha`, `Peso`, `AlturaJoelho`, `Acamado`, `Amputado`, `CbAferida`, `CbClas`, `Data`, `circunferenciaBraco`) VALUES
(1, 1, 1.7, NULL, 70, NULL, 0, 0, NULL, NULL, '2017-04-28', NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `corpele`
--

CREATE TABLE `corpele` (
  `ID` int(10) NOT NULL,
  `Cor` varchar(255) NOT NULL,
  `Descricao` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `corpele`
--

INSERT INTO `corpele` (`ID`, `Cor`, `Descricao`) VALUES
(1, 'Branco', ''),
(2, 'Negro', ''),
(3, 'Pardo', '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `dieta`
--

CREATE TABLE `dieta` (
  `ID` int(10) NOT NULL,
  `TipoDieta` varchar(255) DEFAULT NULL,
  `Descricao` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `dieta`
--

INSERT INTO `dieta` (`ID`, `TipoDieta`, `Descricao`) VALUES
(1, 'Dieta normal', 'Dietas dedicadas a pacientes que conseguem comer.');

-- --------------------------------------------------------

--
-- Estrutura da tabela `endereco`
--

CREATE TABLE `endereco` (
  `ID` int(10) NOT NULL,
  `Rua` varchar(255) NOT NULL,
  `CEP` varchar(255) NOT NULL,
  `Numero` int(10) NOT NULL,
  `Complemento` varchar(255) DEFAULT NULL,
  `Cidade` varchar(255) NOT NULL,
  `Bairro` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `endereco`
--

INSERT INTO `endereco` (`ID`, `Rua`, `CEP`, `Numero`, `Complemento`, `Cidade`, `Bairro`) VALUES
(1, 'Rua professora cesarina fortarel gonçalves dias', '13214150', 50, NULL, 'Jundiai', 'Cidade Luiza');

-- --------------------------------------------------------

--
-- Estrutura da tabela `estadonutricional`
--

CREATE TABLE `estadonutricional` (
  `ID` int(10) NOT NULL,
  `FormularioTriagemID` int(10) NOT NULL,
  `Nome` varchar(255) NOT NULL,
  `Descricao` varchar(255) NOT NULL,
  `Pontuacao` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `estadonutricional`
--

INSERT INTO `estadonutricional` (`ID`, `FormularioTriagemID`, `Nome`, `Descricao`, `Pontuacao`) VALUES
(1, 1, 'Ausente', 'Estado nutricional normal', 0),
(2, 1, 'Leve', 'Perda de peso > 5% em 3 meses ou\r\nIngestão alimentar abaixo de 50% da necessidade normal da semana anterior.', 1),
(3, 1, 'Moderado', 'Perda de peso > 5% em 2 meses ou IMC 18 - 20 + condição geral comprometida.', 2),
(4, 1, 'Grave', 'Perda de peso > 5% em 1 mês e/ou IMC  < 18', 3);

-- --------------------------------------------------------

--
-- Estrutura da tabela `formulariotriagem`
--

CREATE TABLE `formulariotriagem` (
  `ID` int(10) NOT NULL,
  `NutricionistaID` int(10) NOT NULL,
  `FaixaEtaria` int(10) NOT NULL,
  `Inativo` tinyint(1) DEFAULT NULL,
  `Nome` varchar(255) NOT NULL,
  `DataCriacao` date NOT NULL,
  `Descricao` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `formulariotriagem`
--

INSERT INTO `formulariotriagem` (`ID`, `NutricionistaID`, `FaixaEtaria`, `Inativo`, `Nome`, `DataCriacao`, `Descricao`) VALUES
(1, 1, 20, NULL, 'Formulário de triagem da Fabi', '2017-04-28', 'Este formulário esta sendo criado para simulação.');

-- --------------------------------------------------------

--
-- Estrutura da tabela `gravidadedoenca`
--

CREATE TABLE `gravidadedoenca` (
  `ID` int(10) NOT NULL,
  `FormularioTriagemID` int(10) NOT NULL,
  `Nome` varchar(255) NOT NULL,
  `Descricao` varchar(255) NOT NULL,
  `Pontuacao` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `gravidadedoenca`
--

INSERT INTO `gravidadedoenca` (`ID`, `FormularioTriagemID`, `Nome`, `Descricao`, `Pontuacao`) VALUES
(1, 1, 'Ausente', 'Necessidades nutricionais normais.', 0),
(2, 1, 'Leve', 'Fratura de quadril;\r\nPacientes crônicos com complicações agudas;\r\nCirrose, doença pulmonar obstrutiva;\r\nDiabetes, câncer e hemodiálise crônica.', 1),
(3, 1, 'Moderado', 'Cirurgia abdominal de grande porte;\r\nAVC;\r\nPneumonia grave;\r\nDoenças malignas.', 2),
(4, 1, 'Grave', 'Trauma craniano;\r\nTransplante de medula óssea;\r\nPacientes em cuidados intensivos (APACHE > 10).', 3);

-- --------------------------------------------------------

--
-- Estrutura da tabela `membroamputado`
--

CREATE TABLE `membroamputado` (
  `ID` int(10) NOT NULL,
  `Nome` varchar(255) NOT NULL,
  `Percentual` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

--
-- Extraindo dados da tabela `membroamputado`
--

INSERT INTO `membroamputado` (`ID`, `Nome`, `Percentual`) VALUES
(1, 'Mão', 0.8),
(2, 'Antebraço', 2.3),
(3, 'Braço até ombro', 6.6),
(4, 'Pé', 1.7),
(5, 'Perna abaixo do joelho', 7),
(6, 'Perna acima do joelho', 11),
(7, 'Perna inteira', 18.6),
(8, 'Mão', 0.8),
(9, 'Antebraço', 2.3),
(10, 'Braço até ombro', 6.6),
(11, 'Pé', 1.7),
(12, 'Perna abaixo do joelho', 7),
(13, 'Perna acima do joelho', 11),
(14, 'Perna inteira', 18.6);

-- --------------------------------------------------------

--
-- Estrutura da tabela `membroamputado_avaliacaoantropometrica`
--

CREATE TABLE `membroamputado_avaliacaoantropometrica` (
  `MembroAputadoID` int(10) NOT NULL,
  `AvaliacaoAntropometricaID` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

-- --------------------------------------------------------

--
-- Estrutura da tabela `nivelassistencia`
--

CREATE TABLE `nivelassistencia` (
  `ID` int(10) NOT NULL,
  `FormularioTriagemID` int(10) NOT NULL,
  `Nome` varchar(255) NOT NULL,
  `Descricao` varchar(255) NOT NULL,
  `Pontuacao` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `nivelassistencia`
--

INSERT INTO `nivelassistencia` (`ID`, `FormularioTriagemID`, `Nome`, `Descricao`, `Pontuacao`) VALUES
(1, 1, 'Nível primário', 'Risco nutricional negativo', 1),
(2, 1, 'Nível secundário', 'Risco nutricional positivo', 2),
(3, 1, 'Nível nutricional terceário', 'Nutrição parenteral, enteral ou suplementação oral.', 3);

-- --------------------------------------------------------

--
-- Estrutura da tabela `nutricionista`
--

CREATE TABLE `nutricionista` (
  `ID` int(10) NOT NULL,
  `CRN` varchar(255) NOT NULL,
  `Coordenador` tinyint(1) DEFAULT NULL,
  `Senha` varchar(255) NOT NULL,
  `TelefoneCelular` varchar(255) DEFAULT NULL,
  `Nome` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Sexo` tinyint(255) NOT NULL,
  `TelefoneFixo` varchar(255) DEFAULT NULL,
  `DataNasc` date NOT NULL,
  `CPF` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `nutricionista`
--

INSERT INTO `nutricionista` (`ID`, `CRN`, `Coordenador`, `Senha`, `TelefoneCelular`, `Nome`, `Email`, `Sexo`, `TelefoneFixo`, `DataNasc`, `CPF`) VALUES
(1, '123456789FABI', 1, 'fabi123', '998994200', 'Fabi Corsi', 'fabi.corsi@hotmail.com', 1, NULL, '1990-04-09', '42294634802');

-- --------------------------------------------------------

--
-- Estrutura da tabela `nutricionista_paciente`
--

CREATE TABLE `nutricionista_paciente` (
  `NutricionistaID` int(10) NOT NULL,
  `PacienteID` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `nutricionista_paciente`
--

INSERT INTO `nutricionista_paciente` (`NutricionistaID`, `PacienteID`) VALUES
(1, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `orientacoesnutricionais`
--

CREATE TABLE `orientacoesnutricionais` (
  `ID` int(10) NOT NULL,
  `NutricionistaID` int(10) NOT NULL,
  `Nome` varchar(255) NOT NULL,
  `Orientacao` varchar(255) NOT NULL,
  `Data` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `orientacoesnutricionais`
--

INSERT INTO `orientacoesnutricionais` (`ID`, `NutricionistaID`, `Nome`, `Orientacao`, `Data`) VALUES
(1, 1, 'Perda de peso', 'Orientação para perda de peso....', '2017-04-04');

-- --------------------------------------------------------

--
-- Estrutura da tabela `paciente`
--

CREATE TABLE `paciente` (
  `ID` int(10) NOT NULL,
  `CorPeleID` int(10) NOT NULL,
  `Inativo` tinyint(1) NOT NULL,
  `Arquivado` tinyint(1) NOT NULL,
  `Nome` varchar(255) NOT NULL,
  `DataNasc` date NOT NULL,
  `TelefoneFixo` varchar(255) DEFAULT NULL,
  `TelefoneCelular` varchar(255) DEFAULT NULL,
  `CPF` varchar(255) NOT NULL,
  `Email` varchar(255) DEFAULT NULL,
  `Sexo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `paciente`
--

INSERT INTO `paciente` (`ID`, `CorPeleID`, `Inativo`, `Arquivado`, `Nome`, `DataNasc`, `TelefoneFixo`, `TelefoneCelular`, `CPF`, `Email`, `Sexo`) VALUES
(1, 1, 0, 0, 'Wesley Ferreti', '1994-12-11', '27092222', '998994200', '42294634802', 'wesley.ferreti18@hotmail.com', '0');

-- --------------------------------------------------------

--
-- Estrutura da tabela `paciente_endereco`
--

CREATE TABLE `paciente_endereco` (
  `PacienteID` int(10) NOT NULL,
  `EnderecoID` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `paciente_endereco`
--

INSERT INTO `paciente_endereco` (`PacienteID`, `EnderecoID`) VALUES
(1, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `paciente_formulariotriagem`
--

CREATE TABLE `paciente_formulariotriagem` (
  `PacienteID` int(10) NOT NULL,
  `FormularioTriagemID` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `paciente_formulariotriagem`
--

INSERT INTO `paciente_formulariotriagem` (`PacienteID`, `FormularioTriagemID`) VALUES
(1, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `paciente_orientacoesnutricionais`
--

CREATE TABLE `paciente_orientacoesnutricionais` (
  `PacienteID` int(10) NOT NULL,
  `OrientacoesNutricionaisID` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `paciente_orientacoesnutricionais`
--

INSERT INTO `paciente_orientacoesnutricionais` (`PacienteID`, `OrientacoesNutricionaisID`) VALUES
(1, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `prescricaodietetica`
--

CREATE TABLE `prescricaodietetica` (
  `ID` int(10) NOT NULL,
  `PacienteID` int(10) NOT NULL,
  `Data` date NOT NULL,
  `MetaCalorica` varchar(255) NOT NULL,
  `MetaProteica` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `prescricaodietetica`
--

INSERT INTO `prescricaodietetica` (`ID`, `PacienteID`, `Data`, `MetaCalorica`, `MetaProteica`) VALUES
(1, 1, '2017-04-28', '444', '232');

-- --------------------------------------------------------

--
-- Estrutura da tabela `prescricaodietetica_dieta`
--

CREATE TABLE `prescricaodietetica_dieta` (
  `PrescricaoDieteticaID` int(10) NOT NULL,
  `DietaID` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `prescricaodietetica_dieta`
--

INSERT INTO `prescricaodietetica_dieta` (`PrescricaoDieteticaID`, `DietaID`) VALUES
(1, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `prescricaodietetica_refeicao`
--

CREATE TABLE `prescricaodietetica_refeicao` (
  `PrescricaoDieteticaID` int(10) NOT NULL,
  `RefeicaoID` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `prescricaodietetica_refeicao`
--

INSERT INTO `prescricaodietetica_refeicao` (`PrescricaoDieteticaID`, `RefeicaoID`) VALUES
(1, 1),
(1, 2);

-- --------------------------------------------------------

--
-- Estrutura da tabela `prescricaodietetica_viaalimentacao`
--

CREATE TABLE `prescricaodietetica_viaalimentacao` (
  `PrescricaoDieteticaID` int(10) NOT NULL,
  `ViaAlimentacaoID` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `prescricaodietetica_viaalimentacao`
--

INSERT INTO `prescricaodietetica_viaalimentacao` (`PrescricaoDieteticaID`, `ViaAlimentacaoID`) VALUES
(1, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `refeicao`
--

CREATE TABLE `refeicao` (
  `ID` int(10) NOT NULL,
  `Refeicao` varchar(255) NOT NULL,
  `Descricao` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `refeicao`
--

INSERT INTO `refeicao` (`ID`, `Refeicao`, `Descricao`) VALUES
(1, 'Café da manhã', 'Refeição entre 7hrs e 10hrs da manhã'),
(2, 'Almoço', 'Refeição entre 10hrs e 13hrs');

-- --------------------------------------------------------

--
-- Estrutura da tabela `refeicao_adequacao`
--

CREATE TABLE `refeicao_adequacao` (
  `RefeicaoID` int(10) NOT NULL,
  `AdequacaoID` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `refeicao_adequacao`
--

INSERT INTO `refeicao_adequacao` (`RefeicaoID`, `AdequacaoID`) VALUES
(2, 1),
(2, 2);

-- --------------------------------------------------------

--
-- Estrutura da tabela `refeicao_suplementacao`
--

CREATE TABLE `refeicao_suplementacao` (
  `RefeicaoID` int(10) NOT NULL,
  `SuplementacaoID` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `refeicao_suplementacao`
--

INSERT INTO `refeicao_suplementacao` (`RefeicaoID`, `SuplementacaoID`) VALUES
(2, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `suplementacao`
--

CREATE TABLE `suplementacao` (
  `ID` int(10) NOT NULL,
  `NomeSuplemento` varchar(255) NOT NULL,
  `Sabor` varchar(255) NOT NULL,
  `Quantidade` varchar(255) NOT NULL,
  `Descricao` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `suplementacao`
--

INSERT INTO `suplementacao` (`ID`, `NomeSuplemento`, `Sabor`, `Quantidade`, `Descricao`) VALUES
(1, 'Whey', 'Chocolate', '20g', '20 gramas de whey protein ');

-- --------------------------------------------------------

--
-- Estrutura da tabela `viaalimentacao`
--

CREATE TABLE `viaalimentacao` (
  `ID` int(10) NOT NULL,
  `TipoVia` varchar(255) NOT NULL,
  `Descricao` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `viaalimentacao`
--

INSERT INTO `viaalimentacao` (`ID`, `TipoVia`, `Descricao`) VALUES
(1, 'Oral', 'Paciente esta apto a receber alimentação oral.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adequacao`
--
ALTER TABLE `adequacao`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `avaliacaoantropometrica`
--
ALTER TABLE `avaliacaoantropometrica`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `Possui14` (`PacienteID`);

--
-- Indexes for table `corpele`
--
ALTER TABLE `corpele`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `dieta`
--
ALTER TABLE `dieta`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `endereco`
--
ALTER TABLE `endereco`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `estadonutricional`
--
ALTER TABLE `estadonutricional`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `Compõe2` (`FormularioTriagemID`);

--
-- Indexes for table `formulariotriagem`
--
ALTER TABLE `formulariotriagem`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `Pertence` (`NutricionistaID`);

--
-- Indexes for table `gravidadedoenca`
--
ALTER TABLE `gravidadedoenca`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `Compõe3` (`FormularioTriagemID`);

--
-- Indexes for table `membroamputado`
--
ALTER TABLE `membroamputado`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `membroamputado_avaliacaoantropometrica`
--
ALTER TABLE `membroamputado_avaliacaoantropometrica`
  ADD PRIMARY KEY (`MembroAputadoID`,`AvaliacaoAntropometricaID`),
  ADD KEY `Compõe5` (`AvaliacaoAntropometricaID`),
  ADD KEY `Compõe4` (`MembroAputadoID`);

--
-- Indexes for table `nivelassistencia`
--
ALTER TABLE `nivelassistencia`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `Compõe` (`FormularioTriagemID`);

--
-- Indexes for table `nutricionista`
--
ALTER TABLE `nutricionista`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `CRN` (`CRN`),
  ADD UNIQUE KEY `CPF` (`CPF`);

--
-- Indexes for table `nutricionista_paciente`
--
ALTER TABLE `nutricionista_paciente`
  ADD PRIMARY KEY (`NutricionistaID`,`PacienteID`),
  ADD KEY `Tem2` (`PacienteID`),
  ADD KEY `Tem` (`NutricionistaID`);

--
-- Indexes for table `orientacoesnutricionais`
--
ALTER TABLE `orientacoesnutricionais`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `Faz` (`NutricionistaID`);

--
-- Indexes for table `paciente`
--
ALTER TABLE `paciente`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `CPF` (`CPF`),
  ADD KEY `Tem7` (`CorPeleID`);

--
-- Indexes for table `paciente_endereco`
--
ALTER TABLE `paciente_endereco`
  ADD PRIMARY KEY (`PacienteID`,`EnderecoID`),
  ADD KEY `Possui2` (`EnderecoID`),
  ADD KEY `Possui` (`PacienteID`);

--
-- Indexes for table `paciente_formulariotriagem`
--
ALTER TABLE `paciente_formulariotriagem`
  ADD PRIMARY KEY (`PacienteID`,`FormularioTriagemID`),
  ADD KEY `Possui4` (`FormularioTriagemID`),
  ADD KEY `Possui3` (`PacienteID`);

--
-- Indexes for table `paciente_orientacoesnutricionais`
--
ALTER TABLE `paciente_orientacoesnutricionais`
  ADD PRIMARY KEY (`PacienteID`,`OrientacoesNutricionaisID`),
  ADD KEY `Possui7` (`OrientacoesNutricionaisID`),
  ADD KEY `Possui6` (`PacienteID`);

--
-- Indexes for table `prescricaodietetica`
--
ALTER TABLE `prescricaodietetica`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `Possui5` (`PacienteID`);

--
-- Indexes for table `prescricaodietetica_dieta`
--
ALTER TABLE `prescricaodietetica_dieta`
  ADD PRIMARY KEY (`PrescricaoDieteticaID`,`DietaID`),
  ADD KEY `Tem4` (`DietaID`),
  ADD KEY `Tem3` (`PrescricaoDieteticaID`);

--
-- Indexes for table `prescricaodietetica_refeicao`
--
ALTER TABLE `prescricaodietetica_refeicao`
  ADD PRIMARY KEY (`PrescricaoDieteticaID`,`RefeicaoID`),
  ADD KEY `Possui8` (`PrescricaoDieteticaID`),
  ADD KEY `Possui9` (`RefeicaoID`);

--
-- Indexes for table `prescricaodietetica_viaalimentacao`
--
ALTER TABLE `prescricaodietetica_viaalimentacao`
  ADD PRIMARY KEY (`PrescricaoDieteticaID`,`ViaAlimentacaoID`),
  ADD KEY `Tem5` (`PrescricaoDieteticaID`),
  ADD KEY `Tem6` (`ViaAlimentacaoID`);

--
-- Indexes for table `refeicao`
--
ALTER TABLE `refeicao`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `refeicao_adequacao`
--
ALTER TABLE `refeicao_adequacao`
  ADD PRIMARY KEY (`RefeicaoID`,`AdequacaoID`),
  ADD KEY `Possui11` (`AdequacaoID`),
  ADD KEY `Possui10` (`RefeicaoID`);

--
-- Indexes for table `refeicao_suplementacao`
--
ALTER TABLE `refeicao_suplementacao`
  ADD PRIMARY KEY (`RefeicaoID`,`SuplementacaoID`),
  ADD KEY `Possui13` (`SuplementacaoID`),
  ADD KEY `Possui12` (`RefeicaoID`);

--
-- Indexes for table `suplementacao`
--
ALTER TABLE `suplementacao`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `viaalimentacao`
--
ALTER TABLE `viaalimentacao`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adequacao`
--
ALTER TABLE `adequacao`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `avaliacaoantropometrica`
--
ALTER TABLE `avaliacaoantropometrica`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `corpele`
--
ALTER TABLE `corpele`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `dieta`
--
ALTER TABLE `dieta`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `endereco`
--
ALTER TABLE `endereco`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `estadonutricional`
--
ALTER TABLE `estadonutricional`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `formulariotriagem`
--
ALTER TABLE `formulariotriagem`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `gravidadedoenca`
--
ALTER TABLE `gravidadedoenca`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `membroamputado`
--
ALTER TABLE `membroamputado`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `nivelassistencia`
--
ALTER TABLE `nivelassistencia`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `nutricionista`
--
ALTER TABLE `nutricionista`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `orientacoesnutricionais`
--
ALTER TABLE `orientacoesnutricionais`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `paciente`
--
ALTER TABLE `paciente`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `prescricaodietetica`
--
ALTER TABLE `prescricaodietetica`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `refeicao`
--
ALTER TABLE `refeicao`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `suplementacao`
--
ALTER TABLE `suplementacao`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `viaalimentacao`
--
ALTER TABLE `viaalimentacao`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `avaliacaoantropometrica`
--
ALTER TABLE `avaliacaoantropometrica`
  ADD CONSTRAINT `Possui14` FOREIGN KEY (`PacienteID`) REFERENCES `paciente` (`ID`);

--
-- Limitadores para a tabela `estadonutricional`
--
ALTER TABLE `estadonutricional`
  ADD CONSTRAINT `Compõe2` FOREIGN KEY (`FormularioTriagemID`) REFERENCES `formulariotriagem` (`ID`);

--
-- Limitadores para a tabela `formulariotriagem`
--
ALTER TABLE `formulariotriagem`
  ADD CONSTRAINT `Pertence` FOREIGN KEY (`NutricionistaID`) REFERENCES `nutricionista` (`ID`);

--
-- Limitadores para a tabela `gravidadedoenca`
--
ALTER TABLE `gravidadedoenca`
  ADD CONSTRAINT `Compõe3` FOREIGN KEY (`FormularioTriagemID`) REFERENCES `formulariotriagem` (`ID`);

--
-- Limitadores para a tabela `membroamputado_avaliacaoantropometrica`
--
ALTER TABLE `membroamputado_avaliacaoantropometrica`
  ADD CONSTRAINT `Compõe4` FOREIGN KEY (`MembroAputadoID`) REFERENCES `membroamputado` (`ID`),
  ADD CONSTRAINT `Compõe5` FOREIGN KEY (`AvaliacaoAntropometricaID`) REFERENCES `avaliacaoantropometrica` (`ID`);

--
-- Limitadores para a tabela `nivelassistencia`
--
ALTER TABLE `nivelassistencia`
  ADD CONSTRAINT `Compõe` FOREIGN KEY (`FormularioTriagemID`) REFERENCES `formulariotriagem` (`ID`);

--
-- Limitadores para a tabela `nutricionista_paciente`
--
ALTER TABLE `nutricionista_paciente`
  ADD CONSTRAINT `Tem` FOREIGN KEY (`NutricionistaID`) REFERENCES `nutricionista` (`ID`),
  ADD CONSTRAINT `Tem2` FOREIGN KEY (`PacienteID`) REFERENCES `paciente` (`ID`);

--
-- Limitadores para a tabela `orientacoesnutricionais`
--
ALTER TABLE `orientacoesnutricionais`
  ADD CONSTRAINT `Faz` FOREIGN KEY (`NutricionistaID`) REFERENCES `nutricionista` (`ID`);

--
-- Limitadores para a tabela `paciente`
--
ALTER TABLE `paciente`
  ADD CONSTRAINT `Tem7` FOREIGN KEY (`CorPeleID`) REFERENCES `corpele` (`ID`);

--
-- Limitadores para a tabela `paciente_endereco`
--
ALTER TABLE `paciente_endereco`
  ADD CONSTRAINT `Possui` FOREIGN KEY (`PacienteID`) REFERENCES `paciente` (`ID`),
  ADD CONSTRAINT `Possui2` FOREIGN KEY (`EnderecoID`) REFERENCES `endereco` (`ID`);

--
-- Limitadores para a tabela `paciente_formulariotriagem`
--
ALTER TABLE `paciente_formulariotriagem`
  ADD CONSTRAINT `Possui3` FOREIGN KEY (`PacienteID`) REFERENCES `paciente` (`ID`),
  ADD CONSTRAINT `Possui4` FOREIGN KEY (`FormularioTriagemID`) REFERENCES `formulariotriagem` (`ID`);

--
-- Limitadores para a tabela `paciente_orientacoesnutricionais`
--
ALTER TABLE `paciente_orientacoesnutricionais`
  ADD CONSTRAINT `Possui6` FOREIGN KEY (`PacienteID`) REFERENCES `paciente` (`ID`),
  ADD CONSTRAINT `Possui7` FOREIGN KEY (`OrientacoesNutricionaisID`) REFERENCES `orientacoesnutricionais` (`ID`);

--
-- Limitadores para a tabela `prescricaodietetica`
--
ALTER TABLE `prescricaodietetica`
  ADD CONSTRAINT `Possui5` FOREIGN KEY (`PacienteID`) REFERENCES `paciente` (`ID`);

--
-- Limitadores para a tabela `prescricaodietetica_dieta`
--
ALTER TABLE `prescricaodietetica_dieta`
  ADD CONSTRAINT `Tem3` FOREIGN KEY (`PrescricaoDieteticaID`) REFERENCES `prescricaodietetica` (`ID`),
  ADD CONSTRAINT `Tem4` FOREIGN KEY (`DietaID`) REFERENCES `dieta` (`ID`);

--
-- Limitadores para a tabela `prescricaodietetica_refeicao`
--
ALTER TABLE `prescricaodietetica_refeicao`
  ADD CONSTRAINT `Possui8` FOREIGN KEY (`PrescricaoDieteticaID`) REFERENCES `prescricaodietetica` (`ID`),
  ADD CONSTRAINT `Possui9` FOREIGN KEY (`RefeicaoID`) REFERENCES `refeicao` (`ID`);

--
-- Limitadores para a tabela `prescricaodietetica_viaalimentacao`
--
ALTER TABLE `prescricaodietetica_viaalimentacao`
  ADD CONSTRAINT `Tem5` FOREIGN KEY (`PrescricaoDieteticaID`) REFERENCES `prescricaodietetica` (`ID`),
  ADD CONSTRAINT `Tem6` FOREIGN KEY (`ViaAlimentacaoID`) REFERENCES `viaalimentacao` (`ID`);

--
-- Limitadores para a tabela `refeicao_adequacao`
--
ALTER TABLE `refeicao_adequacao`
  ADD CONSTRAINT `Possui10` FOREIGN KEY (`RefeicaoID`) REFERENCES `refeicao` (`ID`),
  ADD CONSTRAINT `Possui11` FOREIGN KEY (`AdequacaoID`) REFERENCES `adequacao` (`ID`);

--
-- Limitadores para a tabela `refeicao_suplementacao`
--
ALTER TABLE `refeicao_suplementacao`
  ADD CONSTRAINT `Possui12` FOREIGN KEY (`RefeicaoID`) REFERENCES `refeicao` (`ID`),
  ADD CONSTRAINT `Possui13` FOREIGN KEY (`SuplementacaoID`) REFERENCES `suplementacao` (`ID`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
