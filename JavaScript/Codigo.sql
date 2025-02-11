CREATE TABLE Categorias (
    CategoriaID INT PRIMARY KEY AUTO_INCREMENT,
    Nome VARCHAR(100) NOT NULL
);

insert into Categorias(Nome) values("Romance");
insert into Categorias(Nome) values("Terror");
insert into Categorias(Nome) values("Ficção");
insert into Categorias(Nome) values("Comedia");
 
-- Tabela de Editoras
CREATE TABLE Editoras(
    ID INT PRIMARY KEY AUTO_INCREMENT,
    Nome VARCHAR(150) NOT NULL
);

INSERT INTO Editoras(Nome) values("Abril Cultura");
INSERT INTO Editoras(Nome) values("Cultura Euro");

-- Tabela de Livros
CREATE TABLE Livros (
    LivroID INT PRIMARY KEY AUTO_INCREMENT,
    Titulo VARCHAR(255) NOT NULL,
    Autor VARCHAR(150) NOT NULL,
    AnoPublicacao INT,
    Npaginas INT NOT NULL,
    ISBN VARCHAR(20) UNIQUE,
    CategoriaID INT,
    editoraID INT,
    FOREIGN KEY (CategoriaID) REFERENCES Categorias(CategoriaID),
    FOREIGN KEY (editoraID) REFERENCES Editoras(ID)
);

INSERT INTO Livros (Titulo, Autor, AnoPublicacao, Npaginas, ISBN,  CategoriaID, editoraID) values ("O Pequeno Príncipe","Antoine de Saint-Exupery",2010,200,"1234",1,1);
INSERT INTO Livros (Titulo, Autor, AnoPublicacao, Npaginas, ISBN,  CategoriaID, editoraID) values ("Diário de um Banana","Jeff Kinney",2010,"3432",300,1,2);
INSERT INTO Livros (Titulo, Autor, AnoPublicacao, Npaginas, ISBN,  CategoriaID, editoraID) values ("Harry Potter","J. K. Rowling",2010,"5643",400,2,2);
INSERT INTO Livros (Titulo, Autor, AnoPublicacao, Npaginas, ISBN,  CategoriaID, editoraID) values ("A Cabana","William P.",2010,"6754",500,3,1);
INSERT INTO Livros (Titulo, Autor, AnoPublicacao, Npaginas, ISBN,  CategoriaID, editoraID) values ("A Culpa é das Estrelas","John Green",2010,"4547",600,3,2);
INSERT INTO Livros (Titulo, Autor, AnoPublicacao, Npaginas, ISBN,  CategoriaID, editoraID) values ("Dom Casmurro","Machado de Assis",2010,"4356",700,4,2);
 
 CREATE TABLE cidade (
    id INT PRIMARY KEY AUTO_INCREMENT,
    nome VARCHAR(100) NOT NULL
 );
 insert into cidade (Nome) values ("Salvador");
 insert into cidade (Nome) values ("São Paulo");
 insert into cidade (Nome) values ("Rio de Janeiro");
 insert into cidade (Nome) values ("Minas Gerais");

 -- Tabela de Endereço
 CREATE TABLE endereco (
    id INT PRIMARY KEY AUTO_INCREMENT,
    rua VARCHAR(255) NOT NULL,
    cep VARCHAR (9),
    idcidade INT,
    FOREIGN KEY (idcidade) REFERENCES cidade(id)
 );
 INSERT INTO  endereco (rua, cep, idcidade) values ("Rua A", "40000-001",1 );  
 INSERT INTO  endereco (rua, cep, idcidade) values ("Rua B", "40000-002",2 );  
 INSERT INTO  endereco (rua, cep, idcidade) values ("Rua C", "40000-003",3 );  
 INSERT INTO  endereco (rua, cep, idcidade) values ("Rua D", "40000-004",4 );  
 

 -- Tabela de Estado
 CREATE TABLE estado (
    id INT PRIMARY KEY AUTO_INCREMENT,
    nome VARCHAR(2) NOT NULL,
    idcidade INT NOT NULL,
    FOREIGN KEY (idcidade) REFERENCES cidade(id)
 );
 insert into estado (nome, idcidade) values ("BA", 1);
 insert into estado (nome, idcidade) values ("SP", 2);
 insert into estado (nome, idcidade) values ("RJ", 3);
 insert into estado (nome, idcidade) values ("MG", 4);


-- Tabela de Usuários
CREATE TABLE Usuarios (
    UsuarioID INT PRIMARY KEY AUTO_INCREMENT,
    Nome VARCHAR(150) NOT NULL,
    idendereco INT NOT NULL,
    FOREIGN KEY (idendereco) REFERENCES endereco (id)
);
 
insert into Usuarios (nome, idendereco) values ("Lindinalva", 1);
insert into Usuarios (nome, idendereco) values ("Diogo", 2);
insert into Usuarios (nome, idendereco) values ("Tonho", 3);
insert into Usuarios (nome, idendereco) values ("Leandro", 4);

-- Tabela de Empréstimos
CREATE TABLE Emprestimos (
    EmprestimoID INT PRIMARY KEY AUTO_INCREMENT,
    UsuarioID INT NOT NULL,
    LivroID INT NOT NULL,
    DataEmprestimo DATE NOT NULL,
    DataDevolucao DATE,
    FOREIGN KEY (UsuarioID) REFERENCES Usuarios(UsuarioID),
    FOREIGN KEY (LivroID) REFERENCES Livros(LivroID)
);

insert into emprestimos (LivroID, UsuarioID, DataEmprestimo, DataDevolucao) values (1,1, "2025-01-28","2025-01-29");
insert into emprestimos (LivroID, UsuarioID, DataEmprestimo, DataDevolucao) values (4,2, "2025-01-28","2025-01-29");
insert into emprestimos (LivroID, UsuarioID, DataEmprestimo, DataDevolucao) values (3,3, "2025-01-28","2025-01-29");
insert into emprestimos (LivroID, UsuarioID, DataEmprestimo, DataDevolucao) values (2,4, "2025-01-28","2025-01-29");