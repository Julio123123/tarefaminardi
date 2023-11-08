CREATE SCHEMA alugados;

USE carros;

CREATE TABLE carros (
    id INT NOT NULL AUTO_INCREMENT,
    nome VARCHAR(15) NOT NULL,
    placa VARCHAR(8) NOT NULL,
    data_fabricacao DATE NOT NULL,
    peso DECIMAL (9,3) NOT NULL,
    descricao VARCHAR (255) NOT NULL,
    cor VARCHAR (20),
    documento VARCHAR(40) NOT NULL,
    marca VARCHAR(20) NOT NULL,
    modelo VARCHAR(20) NOT NULL,
    km_rodado DECIMAL(9,3) NOT NULL,
    cor VARCHAR(20) NOT NULL,
    link VARCHAR(255) NOT NULL,
    combustivel VARCHAR(20) NOT NULL,
    media DECIMAL(5,3) NOT NULL,
    transmissao VARCHAR(20) NOT NULL,

    PRIMARY KEY (id)
);