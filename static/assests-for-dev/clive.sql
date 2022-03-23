/*
 Link to the builder -- https://dbdiagram.io/d/6221dff954f9ad109a5bcc82
 Code used

 // Creating tables
Table users  {
  id int [pk, increment] // auto-increment
  full_names varchar
  username varchar
  email varchar
  password varchar
  role varchar
  created_at timestamp
  updated_at timestamp
}

Table clients {
  id int [pk, increment]
  full_names varchar
  email varchar
  national_id varchar
  phone_number varchar
  policy int
  created_at timestamp
  updated_at timestamp
 }

Table policies {
  id int [pk, increment]
  policy_name varchar
  policy_no varchar
  policy_type varchar
  policy_price varchar
  status varchar
  insurer int
  owner int
  created_at timestamp
  updated_at timestamp
 }

Table insurers {
  id int [pk, increment]
  name varchar
  business_no varchar
  email varchar
  policies text
  created_at timestamp
  updated_at timestamp
 }
 
 Table cars {
  id int [pk, increment]
  model varchar
  regno varchar
  make varchar
  chasis_no varchar
  owner int
  policy_no int
  created_at timestamp
  updated_at timestamp
 }
 
 Table invoices {
   id int [pk, increment]
   amount varchar
   owner int
   created_at timestamp
   updated_at timestamp
 }
 
 Table blogs {
   id int [pk, increment]
   title mediumtext
   slug varchar
   body text
   owner int
   created_at timestamp
   updated_at timestamp
 }
 
// Creating references
// You can also define relaionship separately
// > many-to-one; < one-to-many; - one-to-one
Ref: cars.owner > clients.id
Ref: policies.insurer > insurers.id
Ref: cars.policy_no > policies.id
Ref: policies.owner > clients.id
Ref: invoices.owner > clients.id
Ref: blogs.owner > users.id




*/


CREATE TABLE `users` (
  `id` int PRIMARY KEY AUTO_INCREMENT,
  `full_names` varchar(255),
  `username` varchar(255),
  `email` varchar(255),
  `password` varchar(255),
  `role` varchar(255),
  `created_at` timestamp,
  `updated_at` timestamp
);

CREATE TABLE `clients` (
  `id` int PRIMARY KEY AUTO_INCREMENT,
  `full_names` varchar(255),
  `email` varchar(255),
  `national_id` varchar(255),
  `kra_pin` varchar(255),
  `phone_number` varchar(255),
  `policy` int,
  `created_at` timestamp,
  `updated_at` timestamp
);

CREATE TABLE `policies` (
  `id` int PRIMARY KEY AUTO_INCREMENT,
  `policy_name` varchar(255),
  `policy_no` varchar(255),
  `policy_type` varchar(255),
  `policy_price` varchar(255),
  `status` varchar(255),
  `insurer` int,
  `owner` int,
  `created_at` timestamp,
  `updated_at` timestamp
);

CREATE TABLE `insurers` (
  `id` int PRIMARY KEY AUTO_INCREMENT,
  `name` varchar(255),
  `email` varchar(255),
  `business_no` varchar(255),
  `policies` text,
  `created_at` timestamp,
  `updated_at` timestamp
);

CREATE TABLE `cars` (
  `id` int PRIMARY KEY AUTO_INCREMENT,
  `model` varchar(255),
  `regno` varchar(255),
  `make` varchar(255),
  `chasis_no` varchar(255),
  `owner` int,
  `policy_no` int,
  `created_at` timestamp,
  `updated_at` timestamp
);

CREATE TABLE `invoices` (
  `id` int PRIMARY KEY AUTO_INCREMENT,
  `amount` varchar(255),
  `owner` int,
  `created_at` timestamp,
  `updated_at` timestamp
);

CREATE TABLE `blogs` (
  `id` int PRIMARY KEY AUTO_INCREMENT,
  `title` mediumtext,
  `slug` varchar(255),
  `body` text,
  `owner` int,
  `created_at` timestamp,
  `updated_at` timestamp
);

ALTER TABLE `cars` ADD FOREIGN KEY (`owner`) REFERENCES `clients` (`id`);

ALTER TABLE `policies` ADD FOREIGN KEY (`insurer`) REFERENCES `insurers` (`id`);

ALTER TABLE `cars` ADD FOREIGN KEY (`policy_no`) REFERENCES `policies` (`id`);

ALTER TABLE `policies` ADD FOREIGN KEY (`owner`) REFERENCES `clients` (`id`);

ALTER TABLE `invoices` ADD FOREIGN KEY (`owner`) REFERENCES `clients` (`id`);

ALTER TABLE `blogs` ADD FOREIGN KEY (`owner`) REFERENCES `users` (`id`);
