-- SQLite
CREATE TABLE users (
	user_id INTEGER PRIMARY KEY AUTOINCREMENT,
	first_name varchar(100) NOT NULL,
	last_name varchar(100) NOT NULL,
    username varchar(100) NOT NULL UNIQUE,
	email varchar(100) NOT NULL UNIQUE,
	password TEXT NOT NULL,
	role varchar(100) NOT NULL
);

--@block

INSERT INTO users (
first_name, last_name, username, email, password, role)
VALUES(	'Admin', 'Admin', 'admin', 'admin@clive.com', '81dc9bdb52d04dc20036dbd8313ed055', 'admin' 
),
(	'Test', 'Test', 'test', 'test@clive.com', '81dc9bdb52d04dc20036dbd8313ed055', 'user' 
),
(	'Peter', 'Munene', 'peter', 'peter@clive.com', '81dc9bdb52d04dc20036dbd8313ed055', 'user' 
),
(	'Guest', 'Guest', 'guest', 'guest@clive.com', '81dc9bdb52d04dc20036dbd8313ed055', 'guest' 
);

--@block
drop table users;

--@block
SELECT * from users;
--@block

select first_name, last_name, email, username, password, email  from users where username = "admin"

--@block

CREATE TABLE `insurers` (
  `id` INTEGER PRIMARY KEY AUTOINCREMENT,
  `name` varchar(255),
  `email` varchar(255),
  `business_no` varchar(255),
  `created_at` datetime,
  `updated_at` datetime
);
--@block

drop table insurers;

--@block
CREATE TABLE `policies` (
  `id` INTEGER PRIMARY KEY AUTOINCREMENT,
  `policy_no` varchar(255),
  `policy_type` varchar(255),
  `policy_price` varchar(255),
  `policy_status` varchar(255),
  `insurer` varchar(255),
  `client_nat_id` int,
  `created_at` datetime,
  `updated_at` datetime
);

drop table policies;


--@block


CREATE TABLE `clients` (
  `id` INTEGER PRIMARY KEY AUTOINCREMENT,
  `full_names` varchar(255),
  `email` varchar(255),
  `national_id` varchar(255),
  `kra_pin` varchar(255),
  `phone_number` varchar(255),
  `home_address` varchar(255),
  `created_at` datetime,
  `updated_at` datetime
);

drop table clients;

delete from insurers where `email` = "sudob@mailinator.com";

UPDATE clients SET 'names' = 'Peter Munene','email' = 'peternjega7@gmail.com','national_id' = '38260010','kra_pin' = 'A014002976N', 'phone_number' = '+254798055244','home_address' = 'Nairobi','updated_at' = '2022-03-25 05:43:09' WHERE id = 1