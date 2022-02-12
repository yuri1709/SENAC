# Chamar o SGBD

> mysql -u root
> show databases; /*lista as bases de dados existentes*/

#Criar uma base de dados
create database aula4;

#Selecionar um banco para trabalhar
use aula04;

#vamos criar uma tabela para armazenar os campos
create table cliente(
    idcliente int primary key auto_increment, //quem vai incrementar ele é o sistema
    nome varchar(50) not null,
    email varchar (50) not null,
    idade int not null,
    estado varchar(50) not null
);

#visualizar a tabela
show tables;

#descrever os dados de uma tabela
desc cliente

# inserir registro na tabela de cliente /*a ordem das colunas importam*/
insert into cliente values(null,'yuri','yuri@gmail.com',23,'solteiro');

#visualizar os registros de uma tabela
select * from cliente;

/*No gravar php é onde vamos pegar os dados da tela validando com o banco de dados*/