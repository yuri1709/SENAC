/*Lembre-se que a sua tabela esta diferente da professora
tabela da professora: produto != produtos*/
 mysql -u root
> show databases; /*lista as bases de dados existentes*/

#Criar uma base de dados
create database loja1;

#Selecionar um banco para trabalhar
use loja1;

#vamos criar uma tabela para armazenar os campos
create table produtos(
    cod_produto int primary key auto_increment,
    nome varchar(20),
    estoque int,
    valor double,
    categoria varchar(20)
);

#visualizar a tabela
show tables;

#descrever os dados de uma tabela
desc produtos

# inserir registro na tabela de cliente /*a ordem das colunas importam*/
insert into produtos values(null,'tablet',100,700.,'eletronico');

#visualizar os registros de uma tabela
select * from produtos;