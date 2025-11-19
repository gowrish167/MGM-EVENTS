CREATE TABLE admin_login (
  id INT AUTO_INCREMENT PRIMARY KEY,
  email VARCHAR(100) NOT NULL,
  password VARCHAR(255) NOT NULL
);

-- Inserting a default admin user (note: MD5 is insecure for passwords)
INSERT INTO admin_login (email, password)
VALUES ('admin@gmail.com', MD5('admin123'));
