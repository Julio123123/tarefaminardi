CREATE TABLE alugueis (
    id INT PRIMARY KEY AUTO_INCREMENT,
    id_cliente INT NOT NULL,
    id_carro INT NOT NULL,
    dias_aluguel INT NOT NULL,
    valor_total DECIMAL(8, 2) NOT NULL,
    data_aluguel TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (id_cliente) REFERENCES clientes(id),
    FOREIGN KEY (id_carro) REFERENCES carros(id)
);
