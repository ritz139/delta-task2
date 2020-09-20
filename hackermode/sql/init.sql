CREATE DATABASE complaints;
USE complaints;
CREATE TABLE q (id INT NOT NULL PRIMARY KEY AUTO_INCREMENT ,
  username VARCHAR(30) NOT NULL,
  complaint VARCHAR(70) ,
  complainttime TIMESTAMP);
