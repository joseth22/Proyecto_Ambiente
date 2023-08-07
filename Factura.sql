CREATE TABLE Factura (
    id_factura INT AUTO_INCREMENT PRIMARY KEY,
    descripcion VARCHAR,
    id_carrito INT,
    id_tiquete INT,
    FOREIGN KEY (id_carrito) REFERENCES Carrito(id_carrito),
    FOREIGN KEY (id_tiquete) REFERENCES Tiquete(id_tiquete)
);
