
 

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
CREATE TABLE `clients` (
  `id` INTEGER PRIMARY KEY AUTOINCREMENT,
  `full_names` varchar(255),
  `email` varchar(255),
  `national_id` varchar(255),
  `kra_pin` varchar(255),
  `phone_number` varchar(255),
  `address` varchar(255),
  `created_at` datetime,
  `updated_at` datetime
);
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
CREATE TABLE `insurers` (
  `id` INTEGER PRIMARY KEY AUTOINCREMENT,
  `name` varchar(255),
  `email` varchar(255),
  `business_no` varchar(255),
  `created_at` datetime,
  `updated_at` datetime
);
CREATE TABLE `cars` (
  `id` INTEGER PRIMARY KEY AUTOINCREMENT,
  `model` varchar(255),
  `regno` varchar(255),
  `make` varchar(255),
  `chasis_no` varchar(255),
  `owner` int,
  `policy_no` int,
  `created_at` datetime,
  `updated_at` datetime
);
CREATE TABLE `invoices` (
  `id` INTEGER PRIMARY KEY AUTOINCREMENT,
  `amount` varchar(255),
  `owner` int,
  `created_at` datetime,
  `updated_at` datetime
);
CREATE TABLE `blogs` (
  `id` INTEGER PRIMARY KEY AUTOINCREMENT,
  `title` mediumtext,
  `slug` varchar(255),
  `body` text,
  `owner` int,
  `created_at` datetime,
  `updated_at` datetime
);
ALTER TABLE `cars`
ADD FOREIGN KEY (`owner`) REFERENCES `clients` (`id`);
ALTER TABLE `policies`
ADD FOREIGN KEY (`insurer`) REFERENCES `insurers` (`id`);
ALTER TABLE `cars`
ADD FOREIGN KEY (`policy_no`) REFERENCES `policies` (`id`);
ALTER TABLE `policies`
ADD FOREIGN KEY (`owner`) REFERENCES `clients` (`national_id`);
ALTER TABLE `invoices`
ADD FOREIGN KEY (`owner`) REFERENCES `clients` (`id`);
ALTER TABLE `blogs`
ADD FOREIGN KEY (`owner`) REFERENCES `users` (`user_id`);