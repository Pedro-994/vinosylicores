CREATE DATABASE vinosylicores;
use vinosylicores;

CREATE TABLE cliente(
    idcliente int PRIMARY KEY,
    nombre varchar(25),
    apellido varchar(25),

);

CREATE TABLE producto(
    idproducto int PRIMARY KEY,
    nombrep varchar(25),
    comentario text,
    idcliente int,
    FOREIGN KEY(idcliente) REFERENCES cliente(idcliente)
);
