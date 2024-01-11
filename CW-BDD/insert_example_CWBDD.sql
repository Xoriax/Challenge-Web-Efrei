INSERT INTO restaurant (name, address, image) VALUES ('Restaurant A', 'Adresse A', 'image_a.jpg');
INSERT INTO restaurant (name, address, image) VALUES ('Restaurant B', 'Adresse B', 'image_b.jpg');
INSERT INTO restaurant (name, address, image) VALUES ('Restaurant C', 'Adresse C', 'image_c.jpg');
SELECT * from restaurant
INSERT INTO plat (name, restaurant_id) VALUES ('Plat 1', 1);
INSERT INTO plat (name, restaurant_id) VALUES ('Plat 2', 1);
INSERT INTO plat (name, restaurant_id) VALUES ('Plat 3', 2);
SELECT * FROM plat
INSERT INTO users (name, firstname, email, password) VALUES ('Doe', 'John', 'john.doe@example.com', 'password123');
INSERT INTO users (name, firstname, email, password) VALUES ('Smith', 'Jane', 'jane.smith@example.com', 'securepass');
SELECT * FROM users
INSERT INTO reservation (restaurant_id, users_id) VALUES (1, 1);
INSERT INTO reservation (restaurant_id, users_id) VALUES (2, 2);
SELECT * FROM reservation
INSERT INTO favoris (restaurant_id, users_id, plat_id) VALUES (1, 1, 1);
INSERT INTO favoris (restaurant_id, users_id, plat_id) VALUES (2, 2, 3);
SELECT * FROM favoris
INSERT INTO avis (content,restaurant_id, users_id) VALUES ('contenus avis 1',1, 1);
INSERT INTO avis (content,restaurant_id, users_id) VALUES ('contenus avis 2',2, 2);
SELECT * FROM avis
