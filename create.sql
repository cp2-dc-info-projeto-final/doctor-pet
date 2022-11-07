CREATE DATABASE doctor_pet;
USE doctor_pet;

CREATE USER 'gerente'@'localhost' IDENTIFIED BY '123'; 
GRANT ALL PRIVILEGES ON doctor_pet.* TO 'gerente'@'localhost';

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

CREATE TABLE funcionario ( 
    id_funcionario int NOT NULL AUTO_INCREMENT,
    cpf varchar(14) NOT NULL,
    nome varchar(45) NOT NULL, 
    email varchar(45) NOT NULL, 
    nascimento datetime NOT NULL,
    telefone varchar(20) NOT NULL,
    senha varchar (255) NOT NULL,
    primary key(id_funcionario)
);

CREATE TABLE administrador ( 
    id_administrador int NOT NULL AUTO_INCREMENT,
    cpf varchar(14) NOT NULL,
    nome varchar(45) NOT NULL, 
    email varchar(45) NOT NULL, 
    nascimento datetime NOT NULL,
    telefone varchar(20) NOT NULL,
    senha varchar (255) NOT NULL,
    primary key(id_administrador)
);

    /Senha do administrador: 11235813/

INSERT INTO `administrador` (
    `id_administrador`, `cpf`, `nome`, `email`, `nascimento`, `telefone`, `senha`)
VALUES (
    NULL, '111.111.111-11', 'Administrador Teste da Silva', 'admin.admin@gmail.com', '2022-09-29 00:00:00', '777777777', '$2y$10$qIHZ.sNSwcfds5Z9eTL8iO5YTTYfapkknh1s9.zTCyDDiBGijaOBC'
    );

CREATE TABLE servico (
    id_servico int NOT NULL AUTO_INCREMENT,
    nome varchar(45) NOT NULL,
    primary key(id_servico)
);