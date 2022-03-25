-- SQLite


CREATE TABLE `users` (
  `user_id` INTEGER PRIMARY KEY AUTOINCREMENT,
  `full_names` varchar(255),
  `username` varchar(255),
  `email` varchar(255),
  `password` varchar(255),
  `role` varchar(255),
  `created_at` datetime,
  `updated_at` datetime
);

--@block

INSERT INTO users (
full_names, username, email, password, role, created_at, updated_at)
VALUES(	
  'Admin', 'admin', 'admin@clive.com', '81dc9bdb52d04dc20036dbd8313ed055', 'admin', '2022-03-24 09:33:40', '2022-03-24 09:33:40'
),
(	'Mary Wanjiru', 'mary', 'mary@clive.com', '81dc9bdb52d04dc20036dbd8313ed055', 'user' , '2022-03-24 09:33:40', '2022-03-24 09:33:40'
),
(	'Peter Munene', 'peter', 'peter@clive.com', '81dc9bdb52d04dc20036dbd8313ed055', 'user', '2022-03-24 09:33:40', '2022-03-24 09:33:40'
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

UPDATE users SET 
            'full_names' = 'Mary Wanjiru',
            'email' = 'mary@clive.com',
            'password' = '81dc9bdb52d04dc20036dbd8313ed055',
            'username' = 'mary2',
            'role' = 'user',
            'updated_at' = '2022-03-25 06:27:12'
             WHERE id = 2;