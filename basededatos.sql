drop database if exists vitavie;
create database vitavie;
use vitavie;


drop table if exists categoria;
create table categoria(
id int auto_increment,
nombre varchar (50),
primary key(id)
)engine=innodb;

drop table if exists administrador;
create table administrador(
id int auto_increment,
nombre varchar(50),
correo varchar(50),
clave varchar(15),
primary key(id)
) engine=innodb;

drop table if exists usuario;
create table usuario(
id int auto_increment,
nombre varchar (50),
correo varchar (50),
clave varchar (15),
primary key(id)
)engine=innodb;

drop table if exists institucion;
create table institucion(
noRegistro varchar(30),
nombre varchar(50),
ubicacion varchar(100),
correo varchar(50),
clave varchar(15),
idAdmin int,
idCategoria int,
primary key(nombre),
FOREIGN KEY (idAdmin) REFERENCES administrador(id) ON UPDATE CASCADE,
FOREIGN KEY (idCategoria) REFERENCES categoria(id)  ON UPDATE CASCADE
) engine=innodb;


drop table if exists publicacion;
create table publicacion(
id int auto_increment,
titulo varchar (20),
descr varchar (200),
img varchar (255),
fecha date,
noInst varchar(50),
idCategoria int,
primary key(id),
FOREIGN KEY (noInst) REFERENCES institucion(nombre) ON UPDATE CASCADE,
FOREIGN KEY (idCategoria) REFERENCES categoria(id) ON UPDATE CASCADE
) engine = INNODB;


drop table if exists subcategoria;
create table subcategoria(
id int auto_increment,
nombre varchar (50),
idCategoria int,
primary key (id),
FOREIGN KEY (idCategoria) REFERENCES categoria(id) ON UPDATE CASCADE
)engine=innodb;



drop table if exists guardados;
create table guardados(
id int,
idUsuario int,
idSubcat int,
FOREIGN KEY (idUsuario) REFERENCES usuario(id) ON UPDATE CASCADE,
FOREIGN KEY (idSubcat) REFERENCES subcategoria(id) ON UPDATE CASCADE
)engine=innodb;


