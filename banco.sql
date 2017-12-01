CREATE DATABASE informei;
USE informei;

CREATE TABLE  users(
id INT NOT NULL AUTO_INCREMENT,
email VARCHAR(100) UNIQUE NOT NULL,
password VARCHAR(200) NOT NULL,
username VARCHAR(100) NOT NULL,
CONSTRAINT user_pk PRIMARY KEY (id)
);

CREATE TABLE expenses(
id INT NOT NULL AUTO_INCREMENT,
description VARCHAR(100) UNIQUE NOT NULL,
valor DECIMAL(6,2) NOT NULL,
user_id INT NOT NULL,
CONSTRAINT expenses_pk PRIMARY KEY(id),
CONSTRAINT user_fk FOREIGN KEY(user_id) REFERENCES users(id) on delete cascade
);

CREATE TABLE day_expenses(
id INT NOT NULL AUTO_INCREMENT,
date DATETIME NOT NULL,
expenses_id INT NOT NULL,
quantity INT NOT NULL,
CONSTRAINT day_pk PRIMARY KEY(id),
CONSTRAINT expenses_fk FOREIGN KEY(expenses_id) REFERENCES expenses(id) on delete cascade
);

CREATE TABLE products(
id INT NOT NULL AUTO_INCREMENT,
description VARCHAR(100) UNIQUE NOT NULL,
valor DECIMAL(6,2) NOT NULL, 
user_id INT NOT NULL,
CONSTRAINT products_pk PRIMARY KEY(id),
CONSTRAINT users_fk FOREIGN KEY(user_id) REFERENCES users(id) on delete cascade
);

CREATE TABLE day_products(
id INT NOT NULL AUTO_INCREMENT,
date DATETIME NOT NULL,
quantity INT NOT NULL,
products_id INT NOT NULL,
CONSTRAINT day_pk PRIMARY KEY(id),
CONSTRAINT products_fk FOREIGN KEY (products_id) REFERENCES products(id) on delete cascade
);
