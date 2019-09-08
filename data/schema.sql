CREATE TABLE post (
	id INTEGER PRIMARY KEY AUTOINCREMENT, 
	nombre varchar(20) NOT NULL, 
	raza varchar(50) NOT NULL,
	sexo char(1),
	caracteristicas varchar(100) NOT NULL);

INSERT INTO post (nombre, raza, sexo, caracteristicas) VALUES ('Cori', 'Cruza de husky con labarador', 'F', 'color cafe y mancha en el ojo izquierdo');

INSERT INTO post (nombre, raza, sexo, fecha_de_nacimiento, caracteristicas) VALUES ('Jeanayne', 'Maltes', 'F', 'Blanca, con la nariz decolorida');