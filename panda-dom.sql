create database panda_dom;

use panda_dom;

create table pandas(
id int not null auto_increment primary key,
nome varchar(50) not null,
email varchar(50) not null,
senha varchar(50) not null,
pais varchar(50) not null
);