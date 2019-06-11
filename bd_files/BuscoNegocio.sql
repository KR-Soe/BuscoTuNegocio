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
  email_usuario VARCHAR(50) NOT NULL
);