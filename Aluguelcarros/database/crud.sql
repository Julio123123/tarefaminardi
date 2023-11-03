CREATE SCHEMA aluguel;

USE aluguel;

CREATE TABLE usuario (
    id INT NOT NULL AUTO_INCREMENT,
    nome VARCHAR(15) NOT NULL,
    cpf VARCHAR(30) NOT NULL,
    email VARCHAR(70) NOT NULL,
    celular VARCHAR(14) NOT NULL,
    senha VARCHAR(255) NOT NULL,
    PRIMARY KEY (id)
);

select * from usuario;
SELECT * FROM usuario WHERE email = 'z@gmail.com' AND senha='z' LIMIT 1