-- 05/01/2021 23:10


CREATE TABLE `Produto` (
	`Id` INT(11) NOT NULL AUTO_INCREMENT,
	`Nome` VARCHAR(250) NULL DEFAULT NULL COLLATE 'latin1_swedish_ci',
	`Tipo` VARCHAR(250) NULL DEFAULT NULL COLLATE 'latin1_swedish_ci',
	`Marca` VARCHAR(250) NULL DEFAULT NULL COLLATE 'latin1_swedish_ci',
	`Descricao` VARCHAR(250) NULL DEFAULT NULL COLLATE 'latin1_swedish_ci',
	PRIMARY KEY (`Id`) USING BTREE
)
COLLATE='latin1_swedish_ci'
ENGINE=InnoDB
AUTO_INCREMENT=1;


INSERT INTO `Produto` (`Id`, `Nome`, `Tipo`, `Marca`, `Descricao`) VALUES (1, 'Biscoito de Polvilho', 'Alimentacao', 'Cassini', '100g');
INSERT INTO `Produto` (`Id`, `Nome`, `Tipo`, `Marca`, `Descricao`) VALUES (2, 'Cerveja', 'Bebida', 'Heineken', '330ml');
INSERT INTO `Produto` (`Id`, `Nome`, `Tipo`, `Marca`, `Descricao`) VALUES (3, 'Pizza', 'Alimentacao', 'Panificadora Nova Europa', '');
INSERT INTO `Produto` (`Id`, `Nome`, `Tipo`, `Marca`, `Descricao`) VALUES (4, 'Frango Assado', 'Alimentacao', 'Casa de Frango e Rotisseria Barao', '');
INSERT INTO `Produto` (`Id`, `Nome`, `Tipo`, `Marca`, `Descricao`) VALUES (5, 'Farofa Pronta', 'Alimentacao', 'Casa de Frango e Rotisseria Barao', '');
INSERT INTO `Produto` (`Id`, `Nome`, `Tipo`, `Marca`, `Descricao`) VALUES (6, 'Pao Frances', 'Alimentacao', 'Panificadora Nova Europa', '');
INSERT INTO `Produto` (`Id`, `Nome`, `Tipo`, `Marca`, `Descricao`) VALUES (8, 'Salgadinho Cheetos', 'Alimentacao', 'Elma Chips', '37 g');
INSERT INTO `Produto` (`Id`, `Nome`, `Tipo`, `Marca`, `Descricao`) VALUES (9, 'Salgadinho Cebolitos', 'Alimentacao', 'Elma Chips', '31 g');
INSERT INTO `Produto` (`Id`, `Nome`, `Tipo`, `Marca`, `Descricao`) VALUES (10, 'Sorvete', 'Alimentacao', 'Sergel', '250ml');
INSERT INTO `Produto` (`Id`, `Nome`, `Tipo`, `Marca`, `Descricao`) VALUES (11, 'Marmitex', 'Alimentacao', '', '');
INSERT INTO `Produto` (`Id`, `Nome`, `Tipo`, `Marca`, `Descricao`) VALUES (12, 'Salgadinho Bacon', 'Alimentacao', 'Fabitos', '90g');
INSERT INTO `Produto` (`Id`, `Nome`, `Tipo`, `Marca`, `Descricao`) VALUES (13, 'Agua Sem Gas', 'Bebida', 'Bonafont', '1.5 L');
INSERT INTO `Produto` (`Id`, `Nome`, `Tipo`, `Marca`, `Descricao`) VALUES (16, 'Lanche', 'Alimentacao', 'Mc Donalds', 'Cheeseburger');
INSERT INTO `Produto` (`Id`, `Nome`, `Tipo`, `Marca`, `Descricao`) VALUES (17, 'Lanche', 'Alimentacao', 'Mc Donalds', 'Extra Chicken');
INSERT INTO `Produto` (`Id`, `Nome`, `Tipo`, `Marca`, `Descricao`) VALUES (18, 'Milk Shake', 'Bebida', 'Mc Donalds', 'Morango');
INSERT INTO `Produto` (`Id`, `Nome`, `Tipo`, `Marca`, `Descricao`) VALUES (19, 'Agua Sem Gas', 'Bebida', 'Clarissima', '510 ml');
INSERT INTO `Produto` (`Id`, `Nome`, `Tipo`, `Marca`, `Descricao`) VALUES (20, 'Sorvete', 'Alimentacao', 'Sergel', '90 g');
INSERT INTO `Produto` (`Id`, `Nome`, `Tipo`, `Marca`, `Descricao`) VALUES (21, 'Etanol Comum', 'Combustivel', '', '');
INSERT INTO `Produto` (`Id`, `Nome`, `Tipo`, `Marca`, `Descricao`) VALUES (22, 'Mortadela', 'Alimentacao', 'Perdigao', '');
INSERT INTO `Produto` (`Id`, `Nome`, `Tipo`, `Marca`, `Descricao`) VALUES (23, 'Agua Sem Gas', 'Bebida', 'Crystal', '5 L');
INSERT INTO `Produto` (`Id`, `Nome`, `Tipo`, `Marca`, `Descricao`) VALUES (24, 'Cannabis', 'Planta', '', '');
INSERT INTO `Produto` (`Id`, `Nome`, `Tipo`, `Marca`, `Descricao`) VALUES (25, 'Papel Higienico', 'Material de Limpeza', 'Neve', '4 Rolos');
INSERT INTO `Produto` (`Id`, `Nome`, `Tipo`, `Marca`, `Descricao`) VALUES (26, 'Refrigerante', 'Bebida', 'Fanta Uva', '350 ml');
INSERT INTO `Produto` (`Id`, `Nome`, `Tipo`, `Marca`, `Descricao`) VALUES (27, 'Limpador Multiuso', 'Material de Limpeza', 'Veja', '500 ml');
INSERT INTO `Produto` (`Id`, `Nome`, `Tipo`, `Marca`, `Descricao`) VALUES (28, 'Detergente Liquido', 'Material de Limpeza', 'Ype', '500 ml');