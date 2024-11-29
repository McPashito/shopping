CREATE DATABASE shopping_cart;
USE shopping_cart;
CREATE TABLE products (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    price DECIMAL(10, 2) NOT NULL,
    description TEXT,
    image VARCHAR(255)
);
INSERT INTO products (name, price, description, image) VALUES
('Product 1', 19.99, 'Cargador de bateria', 'product1.jpg'),
('Product 2', 29.99, 'Power bank', 'product2.jpg'),
('Product 3', 39.99, 'Estacion de carga', 'product3.jpg');
