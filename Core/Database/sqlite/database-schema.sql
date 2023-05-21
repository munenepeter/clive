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
  `insurer` int,
  `client_nat_id` int,
  `created_at` datetime,
  `updated_at` datetime,
     FOREIGN KEY (insurer) REFERENCES insurers(id),
     FOREIGN KEY (client_nat_id) REFERENCES clients(national_id)
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




   

INSERT INTO insurers (name,email,business_no,created_at,updated_at)
VALUES
    ('APA Insurance', 'info@apainsurance.org', 'A730552770', datetime('now','localtime'), datetime('now','localtime')),
    ('Britam General Insurance', 'info@britam.com', 'B811688975', datetime('now','localtime'), datetime('now','localtime')),
    ('Gateway Insurance', 'info@gateway-insurance.', 'G535438769', datetime('now','localtime'), datetime('now','localtime')),
    ('GA Insurance', 'atyourservice@gakenya.com', 'G609553727', datetime('now','localtime'), datetime('now','localtime')),
    ('First Assurance', 'hoinfo@firstassurance.co.ke', 'F560597724', datetime('now','localtime'), datetime('now','localtime')),
    ('Directline Assurance', 'bimatap@directline.co.ke', 'D828906959', datetime('now','localtime'), datetime('now','localtime')),
    ('Monarch Insurance', 'info@monarchinsurance.co.ke', 'M703915272', datetime('now','localtime'), datetime('now','localtime')),
    ('Kenya Orient Insurance', 'contactme@korient.co.ke', 'K926482909', datetime('now','localtime'), datetime('now','localtime')),
    ('Cannon Assurance', 'info@metcannon.co.ke ', 'C885349080', datetime('now','localtime'), datetime('now','localtime')),
    ('CIC Group Kenya', 'info@cic.co.ke', 'C483462709', datetime('now','localtime'), datetime('now','localtime')),
    ('Fidelity Shield Insurance', 'info@fidelityshield.com', 'F345564836', datetime('now','localtime'), datetime('now','localtime')),
    ('AIG Kenya Insurance ', 'kenyaclaims@aig.com', 'A381816261', datetime('now','localtime'), datetime('now','localtime')),
    ('AAR Insurance', 'info@aar.co.ke', 'A509028925', datetime('now','localtime'), datetime('now','localtime')),
    ('Geminia Insurance ', 'info@geminia.co.ke', 'G569583851', datetime('now','localtime'), datetime('now','localtime')),
    ('ICEA Lion', 'contactcentre@icealion.com', 'I639375911', datetime('now','localtime'), datetime('now','localtime'));