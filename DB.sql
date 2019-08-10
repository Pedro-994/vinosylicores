CREATE DATABASE vinosylicores;
use vinosylicores;

CREATE TABLE cliente(
    idcliente int PRIMARY KEY AUTO_INCREMENT,
    nombre varchar(25),
    apellido varchar(25)
);

CREATE TABLE producto(
    idproducto int PRIMARY KEY AUTO_INCREMENT,
    nombrep varchar(25),
    precio int,
    imagen text
);

CREATE TABLE detpedido(
    iddetalle int PRIMARY KEY AUTO_INCREMENT,
    idproducto int,
	idcliente int,
	cantidad int,
    comentario text,
    FOREIGN KEY(idproducto) REFERENCES producto(idproducto),
	FOREIGN KEY(idcliente) REFERENCES cliente(idcliente)
);

INSERT INTO producto(nombrep,precio,imagen) values ("Vino blanco",1500,"vinoblanco.png");
INSERT INTO producto(nombrep,precio,imagen) values ("Vino tinto",789,"vinotinto.jpg");
INSERT INTO producto(nombrep,precio,imagen) values ("Vino rosado",951,"vinorosado.jpg");
INSERT INTO producto(nombrep,precio,imagen) values ("Rio Mezcal",852,"riomexcalmain.jpg");
INSERT INTO producto(nombrep,precio,imagen) values ("Tequila 916",654,"Tequila 916.jpg");
INSERT INTO producto(nombrep,precio,imagen) values ("Vodka",300,"vodka.jpg");
INSERT INTO producto(nombrep,precio,imagen) values ("Tequila 1800",950,"1800.jpg");
INSERT INTO producto(nombrep,precio,imagen) values ("Rancho escondido",51,"rancho.jpg");
INSERT INTO producto(nombrep,precio,imagen) values ("Cerveza tecate",200,"tecate.jpg");
INSERT INTO producto(nombrep,precio,imagen) values ("Cerveza corona",250,"corona.jpg");

INSERT INTO cliente(nombre,apellido) values ("pedro","gomez");

SELECT idcliente FROM cliente where nombre="pedro" AND apellido='gomez';

