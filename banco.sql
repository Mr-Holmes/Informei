CREATE DATABASE informei2;
USE informei2;

CREATE TABLE  users(
id INT NOT NULL AUTO_INCREMENT,
email VARCHAR(100) UNIQUE NOT NULL,
password VARCHAR(200) NOT NULL,
username VARCHAR(100) NOT NULL,
CONSTRAINT user_pk PRIMARY KEY (id)
);
CREATE TABLE business(
id INT NOT NULL AUTO_INCREMENT,
name VARCHAR(100) NOT NULL,
user_id INT NOT NULL,
CONSTRAINT business_pk PRIMARY KEY(id),
CONSTRAINT users_business_fk FOREIGN KEY (user_id) REFERENCES users(id) on delete cascade
);
CREATE TABLE expenses(
id INT NOT NULL AUTO_INCREMENT,
description VARCHAR(100) UNIQUE NOT NULL,
valor DECIMAL(6,2) NOT NULL,
user_id INT NOT NULL,
CONSTRAINT expenses_pk PRIMARY KEY(id),
CONSTRAINT users_expenses_fk FOREIGN KEY(user_id) REFERENCES users(id) on delete cascade
);

CREATE TABLE day_expenses(
id INT NOT NULL AUTO_INCREMENT,
date DATETIME NOT NULL,
expenses_id INT NOT NULL,
quantity INT NOT NULL,
business_id INT NOT NULL,
CONSTRAINT day_pk PRIMARY KEY(id),
CONSTRAINT expenses_fk FOREIGN KEY(expenses_id) REFERENCES expenses(id) on delete cascade,
CONSTRAINT business_expenses_fk FOREIGN KEY (business_id) REFERENCES business(id) on delete cascade
);

CREATE TABLE products(
id INT NOT NULL AUTO_INCREMENT,
description VARCHAR(100) UNIQUE NOT NULL,
valor DECIMAL(6,2) NOT NULL, 
user_id INT NOT NULL,
CONSTRAINT products_pk PRIMARY KEY(id),
CONSTRAINT users_products_fk FOREIGN KEY(user_id) REFERENCES users(id) on delete cascade
);

CREATE TABLE day_products(
id INT NOT NULL AUTO_INCREMENT,
date DATETIME NOT NULL,
quantity INT NOT NULL,
products_id INT NOT NULL,
business_id INT NOT NULL,
CONSTRAINT day_pk PRIMARY KEY(id),
CONSTRAINT products_fk FOREIGN KEY (products_id) REFERENCES products(id) on delete cascade,
CONSTRAINT business_products_fk FOREIGN KEY (business_id) REFERENCES business(id) on delete cascade
);
