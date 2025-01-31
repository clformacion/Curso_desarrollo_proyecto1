CREATE DATABASE proyecto1;

USE proyecto1;


CREATE TABLE inscripciones(
   fecha date,
   nombre VARCHAR(20),
   identificacion VARCHAR(20),
   direccion VARCHAR(100),
   telefono VARCHAR(20),
   grado varchar(20)
);

CREATE Table notas(
   participante VARCHAR(50),
   identificacion VARCHAR(10),
   nota VARCHAR(10)
)
