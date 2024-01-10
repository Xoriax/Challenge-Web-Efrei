CREATE TABLE restaurant (
    id SERIAL PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    address VARCHAR(255) NOT NULL,
    image VARCHAR(255)
);

CREATE TABLE plat (
    id SERIAL PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    restaurant_id INT REFERENCES restaurant(id)
);

CREATE TABLE users (
    id SERIAL PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    firstname VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    password VARCHAR(255) NOT NULL
);

CREATE TABLE reservation (
    id SERIAL PRIMARY KEY,
    restaurant_id INT REFERENCES restaurant(id),
    users_id INT REFERENCES users(id),
    date TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE favoris (
    id SERIAL PRIMARY KEY,
    restaurant_id INT REFERENCES restaurant(id),
    users_id INT REFERENCES users(id),
    plat_id INT REFERENCES plat(id)
);

CREATE TABLE avis (
    id SERIAL PRIMARY KEY,
    content VARCHAR(255) NOT NULL,
    restaurant_id INT REFERENCES restaurant(id),
    users_id INT REFERENCES users(id),
    date TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
