-- 05/01/2021 23:10


CREATE TABLE `Empresa` (
	`Id` INT(11) NOT NULL AUTO_INCREMENT,
	`Nome` VARCHAR(250) NULL DEFAULT NULL COLLATE 'latin1_swedish_ci',
	`Segmento` VARCHAR(250) NULL DEFAULT NULL COLLATE 'latin1_swedish_ci',
	`Logradouro` VARCHAR(250) NULL DEFAULT NULL COLLATE 'latin1_swedish_ci',
	`Bairro` VARCHAR(250) NULL DEFAULT NULL COLLATE 'latin1_swedish_ci',
	`Cidade` VARCHAR(250) NULL DEFAULT NULL COLLATE 'latin1_swedish_ci',
	`Estado` VARCHAR(250) NULL DEFAULT NULL COLLATE 'latin1_swedish_ci',
	`Observacoes` VARCHAR(250) NULL DEFAULT NULL COLLATE 'latin1_swedish_ci',
	PRIMARY KEY (`Id`) USING BTREE
)
COLLATE='latin1_swedish_ci'
ENGINE=InnoDB
AUTO_INCREMENT=1;


INSERT INTO `Empresa` (`Id`, `Nome`, `Segmento`, `Logradouro`, `Bairro`, `Cidade`, `Estado`, `Observacoes`) VALUES (1, 'Panificadora Nova Europa', 'Padaria', 'Avenida Santa Barbara do Rio Pardo, 690', 'Jardim Nova Europa', 'Campinas', 'SP', '');
INSERT INTO `Empresa` (`Id`, `Nome`, `Segmento`, `Logradouro`, `Bairro`, `Cidade`, `Estado`, `Observacoes`) VALUES (3, 'Casa de Frango e Rotisseria Barao', 'Rotisseria', 'Avenida Albino J. B. de Oliveira, 1164', 'Barao Geraldo', 'Campinas', 'SP', '');
INSERT INTO `Empresa` (`Id`, `Nome`, `Segmento`, `Logradouro`, `Bairro`, `Cidade`, `Estado`, `Observacoes`) VALUES (4, 'Shake Shake', 'Sorveteria', 'Praca Americo Buffo, 3', 'Jardim Nova Europa', 'Campinas', 'SP', '');
INSERT INTO `Empresa` (`Id`, `Nome`, `Segmento`, `Logradouro`, `Bairro`, `Cidade`, `Estado`, `Observacoes`) VALUES (5, 'O Recanto da Costela', 'Restaurante', 'Avenida Baden Powell, 1206', 'Jardim Nova Europa', 'Campinas', 'SP', '');
INSERT INTO `Empresa` (`Id`, `Nome`, `Segmento`, `Logradouro`, `Bairro`, `Cidade`, `Estado`, `Observacoes`) VALUES (6, 'Belo Fruto Hortifruti', 'Mercado', 'Avenida Baden Powell, 1188', 'Jardim Nova Europa', 'Campinas', 'SP', '');
INSERT INTO `Empresa` (`Id`, `Nome`, `Segmento`, `Logradouro`, `Bairro`, `Cidade`, `Estado`, `Observacoes`) VALUES (7, 'McDonalds', 'Restaurante', 'Avenida Brasil, 750', 'Jardim Brasil', 'Campinas', 'SP', '');
INSERT INTO `Empresa` (`Id`, `Nome`, `Segmento`, `Logradouro`, `Bairro`, `Cidade`, `Estado`, `Observacoes`) VALUES (8, 'Costelaria Carro de Boi', 'Restaurante', 'Avenida Aquidaba, 662', 'Bosque', 'Campinas', 'SP', '');
INSERT INTO `Empresa` (`Id`, `Nome`, `Segmento`, `Logradouro`, `Bairro`, `Cidade`, `Estado`, `Observacoes`) VALUES (9, 'Padaria Santo Expedito', 'Padaria', 'Evaristo da Veiga, 138', 'Jardim Santa Genebra', 'Campinas', 'SP', '');
INSERT INTO `Empresa` (`Id`, `Nome`, `Segmento`, `Logradouro`, `Bairro`, `Cidade`, `Estado`, `Observacoes`) VALUES (10, 'Auto Posto Sao Tomaz', 'Posto de Combustivel', 'Avenida Baden Powell, 718', 'Jardim Nova Europa', 'Campinas', 'SP', '');
INSERT INTO `Empresa` (`Id`, `Nome`, `Segmento`, `Logradouro`, `Bairro`, `Cidade`, `Estado`, `Observacoes`) VALUES (11, 'Guilherme', 'Head Shop', 'Rua Evaristo da Veiga', 'Jardim Santa Genebra', 'Campinas', 'SP', '');