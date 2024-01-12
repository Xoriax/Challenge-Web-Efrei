CREATE TABLE restaurant (
    id SERIAL PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    address VARCHAR(255) NOT NULL,
    image VARCHAR(255)
);

CREATE TABLE plat (
    id SERIAL PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    restaurant_id INT REFERENCES restaurant(id),
    image VARCHAR(255) NOT NULL
);

CREATE TABLE reservation (
    id SERIAL PRIMARY KEY,
    restaurant_id INT REFERENCES restaurant(id),
    mail VARCHAR(255) NOT NULL,
    date TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
