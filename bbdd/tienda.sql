CREATE DATABASE tienda;

USE tienda;
CREATE TABLE libros (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(255) NOT NULL,
    descripcion TEXT,
    precio DECIMAL(10, 2) NOT NULL,
    stock INT NOT NULL,
    npaginas INT NOT NULL
);

INSERT INTO libros (nombre, descripcion, precio, stock, npaginas) VALUES
('Libro de Lavanda', 'Libro artesanal de lavanda', 5.99, 50, 100),
('Libro de Rosas', 'Libro suavizante de rosas', 6.49, 40, 200),
('Libro de Menta', 'Libro refrescante de menta', 5.89, 60, 300),
('Libro de Avena', 'Libro exfoliante de avena', 5.49, 35, 250),
('Libro de Cítricos', 'Libro energizante de cítricos', 6.99, 45, 170),
('Libro de Caléndula', 'Libro calmante de caléndula', 6.79, 25, 1000),
('Libro de Chocolate', 'Libro nutritivo de chocolate', 7.49, 30, 400),
('Libro de Café', 'Libro rejuvenecedor de café', 7.89, 20, 300),
('Libro de Almendras', 'Libro hidratante de almendras', 6.19, 40, 270),
('Libro de Karité', 'Libro suavizante de manteca de karité', 8.49, 15, 400);
