create database pruebas;
use pruebas;

create table user(
 idUser int(10) NOT NULL AUTO_INCREMENT,
 user varchar(50),
 password varchar(200),
 type varchar(100),
 PRIMARY KEY(iduser)
);

create table task(
idTask int(10) NOT NULL AUTO_INCREMENT,
name varchar(200),
state varchar(100),
userId int(10),
PRIMARY KEY(idtask)

);
