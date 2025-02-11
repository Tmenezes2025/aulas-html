CREATE TABLE departamentos (
    id INT PRIMARY KEY AUTO_INCREMENT,
    nome VARCHAR(255) UNIQUE NOT NULL,
    orcamento DECIMAL(10,2),
    quantidade_funcionarios INT
);

CREATE TABLE funcionarios (
    id INT PRIMARY KEY AUTO_INCREMENT,
    nome VARCHAR(255) NOT NULL,
    departamento VARCHAR(255) NOT NULL,
    salario DECIMAL(10,2) NOT NULL,
    data_contratacao DATE NOT NULL,
    status VARCHAR(50) NOT NULL,
    id_gerente INT,
    FOREIGN KEY (departamento) REFERENCES departamentos(nome),
    FOREIGN KEY (id_gerente) REFERENCES funcionarios(id) ON DELETE SET NULL
);

