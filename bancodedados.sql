create database db_curso;

use db_curso;

create table tb_usuario(
	cd_user int primary key auto_increment,
    nm_user varchar(60) not null,
    nm_email varchar(60) not null,
    cd_password varchar(256) not null
);

select * from tb_usuario;