CREATE DATABASE consultorio;

use consultorio;

create table cliente(
	id int not null auto_increment primary key,
    nome varchar(70),
    telefone varchar(14),
    endereco varchar(150)
);

create table animal(
	id int not null auto_increment primary key,
    id_cliente int,
    nome varchar(50),
    especie varchar(50),
    idade int,
    foreign key (id_cliente) references cliente(id)
);

create table consultas(
	id int not null auto_increment primary key,
    id_animal int,
    con_data varchar(10),
    con_hora varchar(5),
    foreign key (id_animal) references animal(id)
);

create table tratamento(
	id int not null auto_increment primary key,
    id_consulta int,
    nome varchar(50),
    custo double,
    foreign key (id_consulta) references consultas(id)
);