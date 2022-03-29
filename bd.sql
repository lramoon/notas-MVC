CREATE DATABASE notas_master;
use notas_master;

CREATE TABLE usuario (
    id int(255) auto_increment not NULL,
    nombre varchar(100) NOT NULL,
    apellidos varchar(100) NOT NULL,
    email varchar(255) NOT NULL,
    password varchar(255) NOT NULL,
    fecha date not NULL,
    CONSTRAINT pk_usuario PRIMARY KEY(id),
    CONSTRAINT uq_email UNIQUE(email)

)ENGINE=InnoDb;

CREATE TABLE notas(
    id int(255) auto_increment not NULL,
    usuario_id int(255) not NULL,
    titulo varchar(255) not NULL,
    descripcion MEDIUMTEXT,
    fecha date not NULL,
    CONSTRAINT pk_notas PRIMARY KEY(id),
    CONSTRAINT fk_notas_usuario FOREIGN KEY(usuario_id) REFERENCES usuario(id)

)ENGINE=InnoDb;