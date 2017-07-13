DROP DATABASE IF EXISTS bdingenieria;
CREATE DATABASE bdingenieria;
use bdingenieria;

CREATE TABLE personal(
idPersonal int not null auto_increment primary key,
primerNombre varchar(25) not null,
segundoNombre varchar(25) null,
apellidoPaterno varchar(25) not null,
apellidoMaterno varchar(25) null,
gradoEstudios varchar(35) not null,
cargo varchar(45) null,
telefono int unique null
);

CREATE TABLE tipoUsuario(
idTipoUsuario int not null auto_increment primary key,
nombreTipoUser varchar(30) not null
);

CREATE TABLE usuarios(
idUsuarios int not null auto_increment primary key,
idTipoUsuario int not null,
idPersonal int not null,
user varchar(20) unique not null,
email varchar(30) null,
password varchar(60) unique not null,
estado bool not null,
FOREIGN KEY (idTipoUsuario) REFERENCES tipoUsuario (idTipoUsuario) ON UPDATE CASCADE ON DELETE CASCADE
);
-- Docente
create table docente (
idDocente int not null auto_increment primary key,
idPersonal int null,
FOREIGN KEY (idPersonal) REFERENCES personal (idPersonal) ON UPDATE CASCADE ON DELETE CASCADE
);


-- 2 Carrera

CREATE TABLE carrera(

idCarrera int(10) not null auto_increment primary key,

nomCarrera varchar(40) not null,

yearDisenio date  not null,

resolucion varchar(15) not null,

vigencia date not null,
	estado boolean not null
);

-- 1 materia

CREATE TABLE materia (

idMateria int(10) not null auto_increment primary key,

idDocente int(10) not null,

idCarrera int(10) not null,

semestre varchar(25) not null,

codMateria varchar(25) not null,

nomMateria varchar(25) not null,

horasTericas time not null,

horasPracticas time not null,

totalHoras time not null,

preRequisito varchar(25) not null,

FOREIGN KEY(idDocente) REFERENCES docente (idDocente) ON UPDATE CASCADE ON DELETE CASCADE,

FOREIGN KEY(idCarrera) REFERENCES carrera (idCarrera) ON UPDATE CASCADE ON DELETE CASCADE
);



-- Tipo Noticia
create table tipoNoticia(
idTipoNoticia int not null auto_increment primary key,
nombreTipo varchar(50) not null);

-- Noticia
create table noticia(
idNoticias int not null auto_increment primary key,
titulo varchar(50) not null,
autor varchar(50) not null,
fechaPublicacion date not null,
descripcion text not null,
idTipoNoticia int not null,
FOREIGN KEY (idTipoNoticia) REFERENCES tipoNoticia (idTipoNoticia) ON UPDATE CASCADE ON DELETE CASCADE
);


-- Tipo Trabajo
create table tipoTrabajo(
idTipoTrabajo int not null auto_increment primary key,
tipoTrabajo int not null
);
-- Trabajo
create table trabajo(
idTrabajo int not null auto_increment primary key,
idDocente int not null,
titulo varchar(100) not null,
idTipoTrabajo int not null,
fecha date not null,
detalle text not null,
FOREIGN KEY (idDocente) REFERENCES docente (idDocente) ON UPDATE CASCADE ON DELETE CASCADE,
FOREIGN KEY (idTipoTrabajo) REFERENCES tipoTrabajo (idTipoTrabajo) ON UPDATE CASCADE ON DELETE CASCADE
);
