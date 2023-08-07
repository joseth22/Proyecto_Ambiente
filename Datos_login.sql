CREATE TABLE Datos_login (
    id_login INT AUTO_INCREMENT PRIMARY KEY,
    correo VARCHAR(100),
    contraseña VARCHAR(100),
    id_usuario INT,
    id_rol INT,
    FOREIGN KEY (id_usuario) REFERENCES usuarios(id_usuario),
    FOREIGN KEY (id_rol) REFERENCES roles(id_rol)
);
