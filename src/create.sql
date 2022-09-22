CREATE USER 'estudante'@'localhost' IDENTIFIED BY '123'; 
GRANT ALL PRIVILEGES ON ds302.* TO 'estudante'@'localhost';

CREATE TABLE cliente ( 
    cod_cliente int NOT NULL AUTO_INCREMENT, 
    nome varchar(30) NOT NULL, 
    email varchar(30) NOT NULL, 
    data_nasc varchar(10) NOT NULL, 
    cartao varchar(30) NOT NULL, 
    primary key(cod_cliente) 
);
