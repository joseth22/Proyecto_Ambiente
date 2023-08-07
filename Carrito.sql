CREATE TABLE Carrito (
    id_carrito INT AUTO_INCREMENT PRIMARY KEY,
    fecha DATE,
    cantidad INT,
    id_tiquete INT,
    FOREIGN KEY (id_tiquete) REFERENCES Tiquete(id_tiquete)
);
