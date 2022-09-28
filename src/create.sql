CREATE USER 'gerente'@'localhost' IDENTIFIED BY '123'; 
GRANT ALL PRIVILEGES ON ds302.* TO 'gerente'@'localhost';

CREATE TABLE cliente ( 
    id_cliente int NOT NULL AUTO_INCREMENT,
    cpf varchar(14) NOT NULL,
    nome varchar(45) NOT NULL, 
    email varchar(45) NOT NULL, 
    nascimento datetime NOT NULL,
    telefone varchar(20) NOT NULL,
    senha varchar (255) NOT NULL,
    primary key(id_cliente)
);
