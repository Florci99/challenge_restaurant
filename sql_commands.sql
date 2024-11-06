CREATE TABLE dishes (
    id INT PRIMARY KEY AUTO_INCREMENT,
    img VARCHAR(30),
    name VARCHAR(30),
    price DECIMAL(10,2),
    description VARCHAR(255)
);


INSERT INTO dishes (img, name, price, description) 
VALUES ('dish1.jpg', 'Spaghetti Carbonara', 12.99, 'Classic Italian pasta with creamy sauce, pancetta, and Parmesan.');

INSERT INTO dishes (img, name, price, description) 
VALUES ('dish2.jpg', 'Margherita Pizza', 10.50, 'Traditional pizza topped with fresh tomatoes, mozzarella, and basil.');

INSERT INTO dishes (img, name, price, description) 
VALUES ('dish3.jpg', 'Caesar Salad', 8.25, 'Crisp romaine lettuce, croutons, Parmesan, and Caesar dressing.');

INSERT INTO dishes (img, name, price, description) 
VALUES ('dish4.jpg', 'Grilled Salmon', 15.75, 'Salmon fillet grilled to perfection, served with a side of vegetables.');

INSERT INTO dishes (img, name, price, description) 
VALUES ('dish5.jpg', 'Beef Tacos', 9.50, 'Three tacos filled with seasoned beef, lettuce, cheese, and salsa.');