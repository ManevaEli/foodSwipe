# Creation du db 'food_app1' et utilisation de celle ci
CREATE DATABASE IF NOT EXISTS `food_app1` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;

# Creation de l'utilisateur 'food-user' avec mot de passe 'password' et attribution des droits
CREATE USER IF NOT EXISTS 'food-user'@'localhost' IDENTIFIED BY '1234';
GRANT ALL PRIVILEGES ON `food_app1`.* TO 'food-user'@'localhost';
FLUSH PRIVILEGES;

USE `food_app1`;

# Tables
-- foods
CREATE TABLE IF NOT EXISTS `foods` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `categorie_id` INT(11) NOT NULL,
  `nom` VARCHAR(255) NOT NULL,
  `emoji` VARCHAR(10),
  `description` TEXT,
  `temps` DECIMAL(10,2) NOT NULL, -- en minutes
  `calorie` DECIMAL(10,2) NOT NULL, -- en kcal
  `image_url` VARCHAR(255),
  PRIMARY KEY (`id`),
  FOREIGN KEY (`categorie_id`) REFERENCES `categories`(`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- categories 
CREATE TABLE IF NOT EXISTS `categories` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `nom` VARCHAR(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--- user
CREATE TABLE IF NOT EXISTS `user` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `nom` VARCHAR(255) NOT NULL,
  `email` VARCHAR(255) NOT NULL UNIQUE,
  `mdp` VARCHAR(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- food swipes (Pas interresse, super like, like)
CREATE TABLE IF NOT EXISTS `food_swipes` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `utilisateur_id` INT(11) NOT NULL,
  `food_id` INT(11) NOT NULL,
  `swipe_type` ENUM('pas_interesse', 'super_like', 'like') NOT NULL,
  PRIMARY KEY (`id`),
  FOREIGN KEY (`utilisateur_id`) REFERENCES `user`(`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  FOREIGN KEY (`food_id`) REFERENCES `foods`(`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;