CREATE TABLE carros (
    id INT PRIMARY KEY AUTO_INCREMENT,
    marca VARCHAR(50) NOT NULL,
    modelo VARCHAR(50) NOT NULL,
    preco DECIMAL(8, 2) NOT NULL,
    placa VARCHAR(20) NOT NULL,
    peso INT NOT NULL,
    renavan INT NOT NULL,
    km_rodado INT NOT NULL,
    cor VARCHAR(50) NOT NULL,
    link_imagem TEXT NOT NULL,
    combustivel VARCHAR(20) NOT NULL,
    media DECIMAL(5, 2) NOT NULL,
    transmissao VARCHAR(20) NOT NULL,
    
)