CREATE DATABASE Yulianto_Arca;

 

CREATE TABLE Category (

                id int not null PRIMARY KEY,

    nama varchar(30)

);

 

 

CREATE TABLE Cashier (

                id int PRIMARY KEY,

    nama varchar(30)

);

 

CREATE TABLE Product

(

                id int not null PRIMARY KEY,

    nama varchar(50),

    price int,

    id_category int NOT null ,

    id_cashier int not null,

    FOREIGN KEY (id_category) REFERENCES Category(id),

    FOREIGN KEY (id_cashier) REFERENCES cashier(id)

   

);

 

 

INSERT INTO Category (id,nama)

VALUES

(1,'food'),

(2,'Drink');

 

INSERT INTO Cashier (id,nama)

VALUES

(1,'Pevita pearce'),

(2,'Raisa Andriana'),

(3,'Tri Yulianto');

 

 

INSERT INTO Product (id,nama,price,id_category,id_cashier)

VALUES

(1,'Latte',10000,2,1),

(2,'Cake',20000,1,2),

(3,'Soto',45000,1,3);

 

 

 

SELECT

cash.nama as Cashier,

prod.nama as Product,

cat.nama as Category,

prod.price

from Product prod

JOIN Category cat ON prod.id_category = cat.id

JOIN cashier cash ON prod.id_cashier = cash.id

