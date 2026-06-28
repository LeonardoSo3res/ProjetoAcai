CREATE DATABASE projeto_acai
DEFAULT CHARACTER SET utf8mb4
COLLATE utf8mb4_general_ci;

USE projeto_acai;

CREATE TABLE acai (

    codigo INT AUTO_INCREMENT,
    nome_cliente VARCHAR(100) NOT NULL,
    sabor VARCHAR(50) NOT NULL,
    tamanho VARCHAR (20),
    complemento VARCHAR(20),
    data_cadastro DATE,

    PRIMARY KEY (codigo)




) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;