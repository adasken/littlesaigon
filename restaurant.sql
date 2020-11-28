
DROP TABLE IF EXISTS ORDERS;

CREATE TABLE ORDERS
(
ORDERID INTEGER PRIMARY KEY,
FNAME varchar(64),
LNAME varchar(64),
PHONE varchar(64),
DISHES varchar(255),
PRICE FLOAT,
PICKUP varchar(64)
);

INSERT INTO ORDERS (FNAME, LNAME, PHONE, DISHES, PRICE, PICKUP)
VALUES ('John', 'Smith', '(07) 1122 3344', '1 Pho 3 Beef Stew',  60.8, '2020-15-01 at 14:02'),
('Sam', 'Kista', '(07) 4547 4521', '3 Pho 2 Beef Stew', 30.6, '2020-12-12 at 09:02'),
('Bob', 'Bee', '(07) 4584 8481', '3 Pho',  70, '2020-10-09 at 09:02');
