-- Criação da tabela de Funcionários
CREATE TABLE funcionarios (
    id INT PRIMARY KEY AUTO_INCREMENT,  -- Identificador único do funcionário
    nome VARCHAR(100) NOT NULL,         -- Nome do funcionário
    salario DECIMAL(10, 2) NOT NULL,    -- Salário do funcionário
    departamento VARCHAR(50) NOT NULL   -- Departamento do funcionário
);

-- Criação da tabela de Vendas
CREATE TABLE vendas (
    id INT PRIMARY KEY AUTO_INCREMENT,  -- Identificador único da venda
    produto VARCHAR(100) NOT NULL,      -- Nome do produto vendido
    quantidade INT NOT NULL,            -- Quantidade vendida
    funcionario_id INT NOT NULL,        -- ID do funcionário que realizou a venda
    regiao VARCHAR(50) NOT NULL,        -- Região onde a venda foi realizada
    FOREIGN KEY (funcionario_id) REFERENCES funcionarios(id)  -- Chave estrangeira para a tabela de funcionários
);

-- Criação da tabela de Produtos
CREATE TABLE produtos (
    id INT PRIMARY KEY AUTO_INCREMENT,  -- Identificador único do produto
    nome VARCHAR(100) NOT NULL,         -- Nome do produto
    categoria VARCHAR(50) NOT NULL      -- Categoria do produto
);

-- Criação da tabela de Detalhes das Vendas
CREATE TABLE vendas_detalhes (
    id INT PRIMARY KEY AUTO_INCREMENT,  -- Identificador único do detalhe da venda
    venda_id INT NOT NULL,              -- ID da venda associada
    data_venda DATE NOT NULL,           -- Data da venda
    valor_total DECIMAL(10, 2) NOT NULL, -- Valor total da venda
    FOREIGN KEY (venda_id) REFERENCES vendas(id)  -- Chave estrangeira para a tabela de vendas
);