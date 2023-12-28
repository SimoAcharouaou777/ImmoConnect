Active: 1700211668325@@127.0.0.1@3306@immoconnect
CREATE DATABASE ImmoConnect ;


CREATE TABLE roles (
    id int PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(50)
);

CREATE TABLE users (
    id int PRIMARY KEY AUTO_INCREMENT,
    firstname varchar(255),
    lastname varchar(255),
    email VARCHAR(255) UNIQUE,
    password VARCHAR(255),
    phone varchar(255),
    profile VARCHAR(255),
    role_id int,
    FOREIGN KEY (role_id) REFERENCES roles(id) ON DELETE CASCADE ON UPDATE CASCADE
)

CREATE TABLE cities (
    id int PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(255)
);

CREATE TABLE categories (
     id int PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(255)
);

CREATE TABLE location (
    id int PRIMARY KEY AUTO_INCREMENT,
    address VARCHAR (255),
    imageA VARCHAR(255),
    imageB VARCHAR(255),
    imageC VARCHAR(255),
    imageD VARCHAR(255),
    imageE VARCHAR(255),
    description VARCHAR (255),
    bathroom int,
    room int , 
    garage int ,
    size int , 
    city_id int  ,
    category_id int , 
    Foreign Key (city_id) REFERENCES cities(id) ON DELETE CASCADE ON UPDATE CASCADE,
    Foreign Key (category_id) REFERENCES categories(id) ON DELETE CASCADE ON UPDATE CASCADE
)


CREATE TABLE annonces(
    id int PRIMARY KEY AUTO_INCREMENT,
    title VARCHAR(255),
    description varchar(255),
    status VARCHAR(255),
    price FLOAT,
    date date  DEFAULT CURRENT_DATE,
    seller_id int,
    location_id int,
    Foreign Key (seller_id) REFERENCES  users(id) ON DELETE CASCADE ON UPDATE CASCADE ,
    Foreign Key (location_id) REFERENCES location(id) ON DELETE CASCADE ON UPDATE CASCADE
)


CREATE TABLE types(
    id int PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(255)
)


CREATE TABLE reservations(
    id int PRIMARY KEY AUTO_INCREMENT,
    date date  DEFAULT CURRENT_DATE,
    status VARCHAR(255),
    type_id int,
    annonce_id int,
    user_id int,
    Foreign Key (type_id) REFERENCES  types(id) ON DELETE CASCADE ON UPDATE CASCADE ,
    Foreign Key (annonce_id) REFERENCES annonces(id) ON DELETE CASCADE ON UPDATE CASCADE,
    Foreign Key (user_id) REFERENCES users(id) ON DELETE CASCADE ON UPDATE CASCADE
)


CREATE TABLE comments(
    id int PRIMARY KEY AUTO_INCREMENT,
    comment VARCHAR(255),
    annonce_id int,
    user_id int,
    Foreign Key (annonce_id) REFERENCES annonces(id) ON DELETE CASCADE ON UPDATE CASCADE,
    Foreign Key (user_id) REFERENCES users(id) ON DELETE CASCADE ON UPDATE CASCADE
)


CREATE TABLE messages(
    id int PRIMARY KEY AUTO_INCREMENT,
    message VARCHAR(255),
    reciver_id int,
    transmitter_id int,
    Foreign Key (reciver_id) REFERENCES users(id) ON DELETE CASCADE ON UPDATE CASCADE,
    Foreign Key (transmitter_id) REFERENCES users(id) ON DELETE CASCADE ON UPDATE CASCADE
)