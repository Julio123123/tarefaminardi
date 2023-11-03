CREATE SCHEMA adm;

USE adm;

CREATE TABLE adm (
    id INT NOT NULL AUTO_INCREMENT,
    nome VARCHAR(15) NOT NULL,
    email VARCHAR(70) NOT NULL,
    senha VARCHAR(255) NOT NULL,
    PRIMARY KEY (id)
);

INSERT INTO adm (nome, email, senha)
VALUES ('Julio', 'admjulio@gmail.com', 'julio');

INSERT INTO adm (nome, email, senha)
VALUES ('Lucas', 'admlucas@gmail.com', 'lucas');

INSERT INTO adm (nome, email, senha)
VALUES ('Joao', 'admjoaoo@gmail.com', 'joao');

INSERT INTO adm (nome, email, senha)
VALUES ('Matheus', 'admmatheus@gmail.com', 'matheus');

SELECT * FROM adm;