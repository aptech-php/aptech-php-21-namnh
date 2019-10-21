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

INSERT INTO ap_21_5.users 
(email, password, role_id)
VALUES
('a@gmail.com','123456',1);

SELECT * FROM ap_21_5.users AS a
JOIN ap_21_5.roles as b
ON a.role_id = b.id;


INSERT INTO ap_21_5.users 
(email, password, role_id)
VALUES
('b@gmail.com','123456',3),
('c@gmail.com','123',2);

SELECT * FROM ap_21_5.users AS a
JOIN ap_21_5.roles as b
ON a.role_id = b.id;
