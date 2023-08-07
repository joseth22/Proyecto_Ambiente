CREATE TABLE Tiquete (
    id_tiquete INT AUTO_INCREMENT PRIMARY KEY,
    id_tipo INT,
    id_ruta INT,
    id_horario INT,
    FOREIGN KEY (id_tipo) REFERENCES Tipo(id_tipo),
    FOREIGN KEY (id_ruta) REFERENCES Ruta(id_ruta),
    FOREIGN KEY (id_horario) REFERENCES Horario(id_horario)
);
