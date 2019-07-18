CREATE TABLE comuna(
  id SERIAL PRIMARY KEY,
  comuna VARCHAR(45) NOT NULL
);

CREATE TABLE tipo_usuario(
  id SERIAL PRIMARY KEY,
  tipo VARCHAR(10) NOT NULL
);

CREATE TABLE tag_negocio(
  id SERIAL PRIMARY KEY,
  tag VARCHAR(45) NOT NULL
);

CREATE TABLE rubro_negocio(
  id SERIAL PRIMARY KEY,
  rubro VARCHAR(15) UNIQUE NOT NULL
);

CREATE TABLE usuario(
  id SERIAL PRIMARY KEY,
  email VARCHAR(50) UNIQUE NOT NULL,
  clave VARCHAR(15) NOT NULL,
  nombre VARCHAR(20) NOT NULL,
  apellido VARCHAR(25) NOT NULL,
  fono INT NOT NULL,
  id_comuna INT REFERENCES comuna(id),
  id_tipo_usuario INT REFERENCES tipo_usuario(id)
);

CREATE TABLE negocio(
  id SERIAL PRIMARY KEY,
  rut VARCHAR(12) UNIQUE NOT NULL,
  nombre VARCHAR(45) NOT NULL,
  direccion VARCHAR(255) NOT NULL,
  foto VARCHAR(255) NOT NULL,
  estado INT NOT NULL,
  id_rubro INT REFERENCES rubro_negocio(id),
  id_comuna INT REFERENCES comuna(id),
  id_usuario INT REFERENCES usuario(id),
  id_tag_negocio INT REFERENCES tag_negocio(id),
  email_usuario VARCHAR(50) NOT NULL,
  lat VARCHAR(200) NOT NULL,
  longitud VARCHAR(200) NOT NULL
);

INSERT INTO comuna (id,comuna) VALUES (1,"Cerrillos");
INSERT INTO comuna (id,comuna) VALUES (2,"Cerro Navia");
INSERT INTO comuna (id,comuna) VALUES (3,"Conchalí");
INSERT INTO comuna (id,comuna) VALUES (4,"El Bosque");
INSERT INTO comuna (id,comuna) VALUES (5,"Estacion Central");
INSERT INTO comuna (id,comuna) VALUES (6,"Huechuraba");
INSERT INTO comuna (id,comuna) VALUES (7,"Independencia");
INSERT INTO comuna (id,comuna) VALUES (8,"La Cisterna");
INSERT INTO comuna (id,comuna) VALUES (9,"La Florida");
INSERT INTO comuna (id,comuna) VALUES (10,"La Granja");
INSERT INTO comuna (id,comuna) VALUES (11,"La Pintana");
INSERT INTO comuna (id,comuna) VALUES (12,"La Reina");
INSERT INTO comuna (id,comuna) VALUES (13,"Las Condes");
INSERT INTO comuna (id,comuna) VALUES (14,"Lo Barnechea");
INSERT INTO comuna (id,comuna) VALUES (15,"Lo Espejo");
INSERT INTO comuna (id,comuna) VALUES (16,"Lo Prado");
INSERT INTO comuna (id,comuna) VALUES (17,"Macúl");
INSERT INTO comuna (id,comuna) VALUES (18,"Maipu");
INSERT INTO comuna (id,comuna) VALUES (19,"Pedro Aguirres Cerda");
INSERT INTO comuna (id,comuna) VALUES (20,"Penalolen");
INSERT INTO comuna (id,comuna) VALUES (21,"Providencia");
INSERT INTO comuna (id,comuna) VALUES (22,"Pudahuel");
INSERT INTO comuna (id,comuna) VALUES (23,"Puente Alto");
INSERT INTO comuna (id,comuna) VALUES (24,"Quilicura");
INSERT INTO comuna (id,comuna) VALUES (25,"Quinta Normal");
INSERT INTO comuna (id,comuna) VALUES (26,"Recoleta");
INSERT INTO comuna (id,comuna) VALUES (27,"Renca");
INSERT INTO comuna (id,comuna) VALUES (28,"San Joaquín");
INSERT INTO comuna (id,comuna) VALUES (29,"San Miguel");
INSERT INTO comuna (id,comuna) VALUES (30,"San Ramón");
INSERT INTO comuna (id,comuna) VALUES (31,"Santiago");
INSERT INTO comuna (id,comuna) VALUES (32,"Vitacura");
INSERT INTO comuna (id,comuna) VALUES (33,"Nunoa");



INSERT INTO rubro_negocio (rubro) VALUES ('Peluqueria');
INSERT INTO rubro_negocio (rubro) VALUES ('Hogar');
INSERT INTO rubro_negocio (rubro) VALUES ('Verdureria');
INSERT INTO rubro_negocio (rubro) VALUES ('Electronica');
INSERT INTO rubro_negocio (rubro) VALUES ('Almacen');
INSERT INTO rubro_negocio (rubro) VALUES ('Ropa');
INSERT INTO rubro_negocio (rubro) VALUES ('Arte');
INSERT INTO rubro_negocio (rubro) VALUES ('Mascota');
INSERT INTO rubro_negocio (rubro) VALUES ('Futura Madre');
INSERT INTO rubro_negocio (rubro) VALUES ('Biblioteca');
INSERT INTO rubro_negocio (rubro) VALUES ('Herramientas');
INSERT INTO rubro_negocio (rubro) VALUES ('Otros');



INSERT INTO tipo_usuario (tipo) VALUES ('Admin');
INSERT INTO tipo_usuario (tipo) VALUES ('Normal');



INSERT INTO tag_negocio (tag) VALUES ('Nocturnas');
INSERT INTO tag_negocio (tag) VALUES ('Delivery');
INSERT INTO tag_negocio (tag) VALUES ('A Domicilio');
INSERT INTO tag_negocio (tag) VALUES ('Amor');
INSERT INTO tag_negocio (tag) VALUES ('Comodidad');
INSERT INTO tag_negocio (tag) VALUES ('Buen Tiempo');
INSERT INTO tag_negocio (tag) VALUES ('Exotico');
INSERT INTO tag_negocio (tag) VALUES ('Cercano');
INSERT INTO tag_negocio (tag) VALUES ('Compromiso');
INSERT INTO tag_negocio (tag) VALUES ('Orden');
INSERT INTO tag_negocio (tag) VALUES ('Respeto');
INSERT INTO tag_negocio (tag) VALUES ('Hombres');
INSERT INTO tag_negocio (tag) VALUES ('Mujeres');