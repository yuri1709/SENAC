#criar base
create database aula11;

use aula11

#criar tabela
create table usuario(
    idusuario int primary key auto_increment,
    nome varchar(50),
    login varchar(20) unique,
    senha varchar(50),
    perfil enum('adm', 'user')
);

#inserir dado na tabela
insert into usuario values(null,'yuri','admin','123','adm');
insert into usuario values(null,'bruna','bruna',md5('123'),'adm');


select * from usuario;