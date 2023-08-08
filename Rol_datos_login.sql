CREATE TABLE Rol_datos_login (
    id_rol_datos INT PRIMARY KEY,
    id_login INT,
    id_rol INT,
    FOREIGN KEY (id_login) REFERENCES Datos_login(id_login),
    FOREIGN KEY (id_rol) REFERENCES Rol(id_rol)
);
