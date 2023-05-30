CREATE DATABASE campus;

USE campus;


CREATE TABLE camper(
    id INT primary key AUTO_INCREMENT,
    NOMBRES VARCHAR (50) NOT NULL,
    direccion VARCHAR (50),
    logros VARCHAR (60),
    especialida VARCHAR (60),
    skills FLOAT (60),
    ingles VARCHAR (60),
    ser FLOAT (60),
    review VARCHAR (60),
);


CREATE TABLE users(
    id INT PRIMARY KEY AUTO_INCREMENT,
    idCamper INT NOT NULL,
    email VARCHAR(80) NOT NULL,
    username VARCHAR(64) NOT NULL,
    password VARCHAR(72) NOT NULL,
    Foreign Key (idCamper) REFERENCES camper(id)
);



