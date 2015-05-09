-- phpMyAdmin SQL Dump
-- version 2.10.1
-- http://www.phpmyadmin.net
-- 
-- Servidor: localhost
-- Tempo de Geração: Dez 18, 2012 as 08:56 AM
-- Versão do Servidor: 5.0.45
-- Versão do PHP: 5.2.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

-- 
-- Banco de Dados: `saude`
-- 
CREATE DATABASE `saude` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `saude`;

-- --------------------------------------------------------

-- 
-- Estrutura da tabela `cliente`
-- 

CREATE TABLE `cliente` (
  `idcliente` int(10) unsigned NOT NULL auto_increment,
  `nome` varchar(30) default NULL,
  `data_nasc` date default NULL,
  `mae` varchar(30) default NULL,
  `pai` varchar(30) default NULL,
  `rg` varchar(15) default NULL,
  `exp` varchar(30) default NULL,
  `sexo` varchar(30) default NULL,
  `etnia` varchar(30) default NULL,
  `estado_civil` varchar(30) default NULL,
  `proff_atual` varchar(30) default NULL,
  `proff_anterior` varchar(30) default NULL,
  `endereco_res` varchar(30) default NULL,
  `n_res` int(5) default NULL,
  `bairro_res` varchar(30) default NULL,
  `endereco_pro` varchar(30) default NULL,
  `n_pro` varchar(30) default NULL,
  `bairro_pro` varchar(30) default NULL,
  `tel` varchar(13) default NULL,
  `tel_pro` varchar(13) default NULL,
  `cel` varchar(13) default NULL,
  `contato` varchar(30) default NULL,
  `demanda` varchar(30) default NULL,
  `indicado` varchar(30) default NULL,
  `queixa` text,
  `hist_doenca` text,
  `inter_hosp` text,
  `hist_familia` text,
  `hist_pessoal` text,
  `hist_escolar` text,
  `hist_ocu` text,
  `habitos` text,
  `revisao` text,
  `ecto` text,
  `exame_sis` text,
  `exame_neu` text,
  `aparencia` text,
  `atitude` text,
  `consciencia` text,
  `orientacao` text,
  `atencao` text,
  `memoria` text,
  `senso` text,
  `pensamento` text,
  `linguagem` text,
  `inteligencia` text,
  `do_eu` text,
  `humor` text,
  `afeto` text,
  `volicao` text,
  `psi` text,
  `insight` text,
  `contratrans` text,
  `sumula` text,
  `diagnostico` text,
  `cid` text,
  `dsm` text,
  `exames_compl` text,
  PRIMARY KEY  (`idcliente`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

-- 
-- Extraindo dados da tabela `cliente`
-- 

INSERT INTO `cliente` (`idcliente`, `nome`, `data_nasc`, `mae`, `pai`, `rg`, `exp`, `sexo`, `etnia`, `estado_civil`, `proff_atual`, `proff_anterior`, `endereco_res`, `n_res`, `bairro_res`, `endereco_pro`, `n_pro`, `bairro_pro`, `tel`, `tel_pro`, `cel`, `contato`, `demanda`, `indicado`, `queixa`, `hist_doenca`, `inter_hosp`, `hist_familia`, `hist_pessoal`, `hist_escolar`, `hist_ocu`, `habitos`, `revisao`, `ecto`, `exame_sis`, `exame_neu`, `aparencia`, `atitude`, `consciencia`, `orientacao`, `atencao`, `memoria`, `senso`, `pensamento`, `linguagem`, `inteligencia`, `do_eu`, `humor`, `afeto`, `volicao`, `psi`, `insight`, `contratrans`, `sumula`, `diagnostico`, `cid`, `dsm`, `exames_compl`) VALUES 
(7, 'AAAAAAAAA', '2011-09-14', 'andershkj', 'ssss', 'andershkj', 'andershkj', 'andershkj', 'andershkj', 'andershkj', 'andershkj', 'andershkj', 'andershkj', 45, 'andershkj', 'andershkj', 'andershkj', 'andershkj', '22222222', '3333333333333', '(33)', 'andershkj', 'andershkj', 'andershkj', 'andershkj', 'andershkj', 'andershkj', 'andershkj', 'andershkj', 'andershkj', 'andershkj', 'andershkj', 'andershkj', 'asdasdasd', 'asdasdasdad', 'asdsdsssssss', 'andershkj', 'andershkj', 'andershkj', 'andershkj', 'andershkj', 'andershkj', 'andershkj', 'andershkj', 'andershkj', 'andershkj', 'andershkj', 'andershkj', 'andershkj', 'andershkj', 'andershkj', 'andershkj', 'andershkj', 'andershkj', 'andershkj', 'andershkj', 'andershkj', 'andershkj');

-- --------------------------------------------------------

-- 
-- Estrutura da tabela `texto`
-- 

CREATE TABLE `texto` (
  `idtexto` int(10) unsigned NOT NULL auto_increment,
  `descricao` varchar(20) default NULL,
  `titulo` varchar(45) default NULL,
  `texto` text,
  `pdf` char(1) default '0',
  PRIMARY KEY  (`idtexto`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

-- 
-- Extraindo dados da tabela `texto`
-- 

INSERT INTO `texto` (`idtexto`, `descricao`, `titulo`, `texto`, `pdf`) VALUES 
(1, 'aparencia', 'TESTE', 'asdasdasdasd', '1'),
(2, 'atitude', 'HUSHUSADHsaudh', '\\UASDHUASDHUASD', '1'),
(3, 'consciencia', 'consciencia', 'consciencia', '0'),
(4, 'orientacao', 'orientacao', 'orientacao', '0'),
(5, 'atencao', 'atencao', 'atencao', '0'),
(6, 'memoria', 'Teste de MemÃ³ria', 'Teste 123 ', '0'),
(7, 'senso', 'senso', 'senso', '0'),
(8, 'pensamento', 'pensamento', 'pensamento', '0'),
(9, 'linguagem', 'linguagem', 'linguagem', '0'),
(10, 'inteligencia', 'inteligencia', 'inteligencia', '0'),
(11, 'conciencia_doeu', 'conciencia_do eu', 'conciencia_doeu', '0'),
(12, 'humor', 'humor', 'humor', '0'),
(13, 'afeto', 'afeto', 'afeto', '0'),
(14, 'volicao', 'volicao', 'volicao', '0'),
(15, 'psicomotricidade', 'psicomotricidade', 'psicomotricidade', '0'),
(16, 'insight', 'insight', 'insight', '0'),
(17, 'contratransferencia', 'contratransferencia', 'contratransferencia', '0'),
(18, 'cid', 'teste', 'teste', '0'),
(20, 'dsm', 'teste', 'teste', '0');

-- --------------------------------------------------------

-- 
-- Estrutura da tabela `usuario`
-- 

CREATE TABLE `usuario` (
  `login` varchar(45) NOT NULL,
  `senha` varchar(45) default NULL,
  `nome_user` varchar(50) default NULL,
  `tipo` char(1) default NULL,
  PRIMARY KEY  (`login`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- 
-- Extraindo dados da tabela `usuario`
-- 

INSERT INTO `usuario` (`login`, `senha`, `nome_user`, `tipo`) VALUES 
('admin', '123', 'Matheus', 'A'),
('convidado', '123', 'Matheus', 'C');
