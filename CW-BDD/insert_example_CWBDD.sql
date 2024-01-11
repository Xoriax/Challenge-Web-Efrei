INSERT INTO restaurant (name, address, image) VALUES 
('Restaurant A', 'Adresse A', 'image_a.jpg'),
('Restaurant B', 'Adresse B', 'image_b.jpg'),
('Restaurant C', 'Adresse C', 'image_c.jpg'),
('Restaurant D', 'Adresse D', 'image_d.jpg'),
('Restaurant E', 'Adresse E', 'image_e.jpg'),
('Restaurant F', 'Adresse F', 'image_f.jpg'),
('Restaurant G', 'Adresse G', 'image_g.jpg'),
('Restaurant H', 'Adresse H', 'image_h.jpg'),
('Restaurant I', 'Adresse I', 'image_i.jpg'),
('Restaurant J', 'Adresse J', 'image_j.jpg'),
('Restaurant K', 'Adresse K', 'image_k.jpg'),
('Restaurant L', 'Adresse L', 'image_l.jpg'),
('Restaurant M', 'Adresse M', 'image_m.jpg');
SELECT * from restaurant
INSERT INTO plat (name, restaurant_id, image) VALUES ('Plat 1', 1, 'imageplat1');
INSERT INTO plat (name, restaurant_id, image) VALUES ('Plat 2', 1, 'imageplat2');
INSERT INTO plat (name, restaurant_id, image) VALUES ('Plat 3', 2, 'imageplat3');
INSERT INTO plat (name, restaurant_id, image) VALUES ('Plat 4', 3, 'imageplat4');
INSERT INTO plat (name, restaurant_id, image) VALUES ('Plat 5', 4, 'imageplat5');
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
