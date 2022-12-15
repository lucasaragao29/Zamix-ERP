
create DATABASE If not EXISTS zamix_erp;
use zamix_erp;
CREATE TABLE IF NOT EXISTS estoque (
	id int AUTO_INCREMENT PRIMARY KEY,
	categoria Varchar(50) NOT NULL,
    	data_entrada DATE NOT NULL,
	data_retirada DATE NOT NULL,
    	quantidade integer NOT NULL,
    	id_requisicao integer NOT NULL,
    	id_produto integer
);

CREATE TABLE IF NOT EXISTS produtos (
	id int AUTO_INCREMENT PRIMARY KEY,
	categoria Varchar(50) NOT NULL,
    	preco_compra int,
    	preco_venda int
);
CREATE TABLE IF NOT EXISTS produtos_compostos (
	id int AUTO_INCREMENT PRIMARY KEY,
   	nome_prod_comp varchar(255),
	categoria Varchar(50) NOT NULL,
    	preco_compra integer,
    	preco_venda integer,
    	preco_total integer,
    	id_produto integer
);

CREATE TABLE IF NOT EXISTS requisicao (
	id int AUTO_INCREMENT PRIMARY KEY,
	categoria Varchar(50) NOT NULL,
  	id_requisitante integer,
    	id_produto integer NOT NUll,
    	id_produto_comp integer NOT NULL
);

CREATE TABLE IF NOT EXISTS users (
	id int AUTO_INCREMENT PRIMARY KEY,
	email Varchar(50) UNIQUE,
   	name varchar(255),
    	senha varchar
);

use zamir_erp;
ALTER TABLE `produtos_compostos` ADD CONSTRAINT `fk_ComSim` FOREIGN KEY (`id_produto`) REFERENCES `produtos`(`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;
ALTER TABLE `estoque` ADD CONSTRAINT `fk_EstProd` FOREIGN KEY (`id`) REFERENCES `produtos_compostos`(`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;
ALTER TABLE `estoque` ADD CONSTRAINT `fk_EstReq` FOREIGN KEY (`id_`) REFERENCES `requisicao`(`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;
ALTER TABLE `produtos` ADD CONSTRAINT `fk_UserReq` FOREIGN KEY (`id_produtos`) REFERENCES `estoque`(`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;
