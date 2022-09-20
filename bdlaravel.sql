drop DATABASE bdlaravel;
CREATE DATABASE bdlaravel;
use bdlaravel;

CREATE TABLE tbCliente(
idCliente int NOT NULL AUTO_INCREMENT,
nome varchar(255), 
dtNasc int (255),
estadoCivil varchar(255),
endereco varchar(255), 
numero int (255),
complemento varchar(255), 
cep int (255),
cidade varchar(255),
estado varchar(255), 
Rg int (255),
cpf int (255),
email varchar(255), 
fone int (255),
celular varchar(255),
 PRIMARY KEY (idCliente)
);

CREATE TABLE tbCategoria(
idCategoria int NOT NULL AUTO_INCREMENT,
categoria varchar (255),
PRIMARY KEY (idCategoria)
);
CREATE TABLE tbProduto(
idProduto int NOT NULL AUTO_INCREMENT,
idCategoria int (255),
produto varchar (255),
valor int(255),
PRIMARY KEY (idProduto)
);

CREATE TABLE tbPedido(
idPedido INT NOT NULL AUTO_INCREMENT,
idProduto int (255) ,
idCategoria int (255)
);
INSERT INTO tbCliente
VALUES ('01','Andrew','0605','solteiro','rua','12','ada','31231','Sp','sp','312313','31241','a@gmail.com','919239','1313445');

INSERT INTO tbCategoria 
VALUES ('01','bolachas');

INSERT INTO tbProduto (idProduto, idCategoria, produto, valor)
VALUES ('01','01','Bolachas de maizena','12');

INSERT INTO tbPedido(idCategoria,idProduto)
Values('01','01');