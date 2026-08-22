CREATE DATABASE test_server;

USE test_server;

CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    user_name VARCHAR(100) NOT NULL,
    password VARCHAR(255) NOT NULL
);

INSERT INTO users (user_name, password)
VALUES ('ahm12', '12345');

SELECT * FROM users;

**php:**
$sql = "SELECT * FROM users WHERE user_name='$uname' AND password='$password'";
