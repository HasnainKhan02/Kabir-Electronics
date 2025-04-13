CREATE DATABASE IF NOT EXISTS users_db;

USE users_db;

CREATE TABLE IF NOT EXISTS users (
  id INT AUTO_INCREMENT PRIMARY KEY,
  first_name VARCHAR(50),
  last_name VARCHAR(50),
  password VARCHAR(255),
  gender VARCHAR(10)
);
