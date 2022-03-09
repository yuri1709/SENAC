# mysql -u root

show databases;

create database aula14;

create table artigo(
    idartigo int auto_increment primary key,
    titulo varchar(40) not null,
    artigo TEXT, 
    image varchar(100) not null,
    data_artigo DATE,
    categoria varchar(30)
);

insert into artigo values(null, 'teste nome','teste texto artigo','teste img','2022-03-09','moveis');