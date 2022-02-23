
#chamar o SGBD
mysql -u root

create database aula7;

#selecionar um banco para trabalhar
use aula7;

create table produto(
    idproduto int auto_increment primary key,
    nome varchar(20),
    estoque int,
    valor double,
    categoria varchar(20)

);
# visualizar a tabela
show tables;

#descrever os dados de uma tabela
desc produto;

# inserir registro na tabela de cliente
insert into produto values(null,'tablet',100,700.,'eletronico');



#visualizar as bases existentes
show databases;

# deletar uma coluna
delete from produto where idproduto = "";


#visualizar os registros de uma tabela
select*from produto;


