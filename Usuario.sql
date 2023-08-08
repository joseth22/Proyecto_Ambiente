CREATE TABLE Usuario (
    id_usuario INT PRIMARY KEY,
    id_login INT,
    cedula VARCHAR(15),
    nombre VARCHAR(50),
    apellido1 VARCHAR(50),
    apellido2 VARCHAR(50),
    edad INT,
    FOREIGN KEY (id_login) REFERENCES tabla_login(id_login)
);