CREATE DATABASE ap_21_5;

CREATE TABLE ap_21_5.roles (
	id int AUTO_INCREMENT PRIMARY KEY,
    name varchar(50)
);

SELECT * FROM ap_21_5.roles;

INSERT INTO ap_21_5.roles (name)
VALUES ('admin'), ('user'), ('guest');

CREATE TABLE ap_21_5.users (
	id int AUTO_INCREMENT PRIMARY KEY,
    email varchar(255) UNIQUE,
    password varchar(20),
    role_id int
);

SELECT * FROM ap_21_5.users;