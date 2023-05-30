CREATE DATABASE Academia;

USE Academia;

CREATE TABLE Estudiantes(
    id_estudiante INT PRIMARY KEY AUTO_INCREMENT,
    nombre VARCHAR(50),
    apellido VARCHAR(50),
    edad INT
);

CREATE TABLE Notas(
    id_notas INT PRIMARY KEY AUTO_INCREMENT,
    id_estudiante INT,
    asignatura VARCHAR(50),
    calificacion INT,
    Foreign Key (id_estudiante) REFERENCES Estudiantes(id_estudiante)
);

-- COMANDOS DDL (DATA DEFINITION LANGUAGE)

INSERT INTO Estudiantes(nombre,apellido,edad)
VALUES("sebastian","bernal",20),
("ceistian","luna",21),
("carlos","florez",17),
("santiago","lopez",19);
INSERT INTO Notas ( id_estudiante, asignatura, calificacion)
VALUES(1,"Matematicas",45),
(2,"Matematicas",45),
(3,"Matematicas",45),
(4,"Matematicas",45);

INSERT INTO Notas ( id_estudiante, asignatura, calificacion)
VALUES (1,"Ciencias",50);



SELECT Estudiantes.nombre, Estudiantes.apellido,Estudiantes.id_estudiante, Notas.asignatura, Notas.calificacion
FROM `Estudiantes`
INNER JOIN `Notas`
ON Estudiantes.id_estudiante = Notas.id_estudiante;
