CREATE DATABASE `laravel-todomvc` CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
CREATE USER 'laravel-todomvc'@'localhost' IDENTIFIED BY 'laravel-todomvc';
GRANT ALL PRIVILEGES ON `laravel-todomvc`.* TO 'laravel-todomvc'@'localhost' WITH GRANT OPTION;
FLUSH PRIVILEGES;
