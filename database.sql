CREATE TABLE users(
 id INT AUTO_INCREMENT PRIMARY KEY,
 name VARCHAR(100),
 email VARCHAR(100) UNIQUE,
 password VARCHAR(255)
);

CREATE TABLE workers(
 id INT AUTO_INCREMENT PRIMARY KEY,
 name VARCHAR(100),
 role VARCHAR(100),
 salary FLOAT
);

CREATE TABLE expenses(
 id INT AUTO_INCREMENT PRIMARY KEY,
 worker_id INT,
 title VARCHAR(100),
 amount FLOAT,
 category VARCHAR(50),
 date DATE
);

CREATE TABLE income(
 id INT AUTO_INCREMENT PRIMARY KEY,
 source VARCHAR(100),
 amount FLOAT,
 date DATE
);
