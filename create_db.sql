/*****************************************
* Create the database
*****************************************/
DROP DATABASE IF EXISTS pin;
CREATE DATABASE pin;
USE pin;  -- MySQL command

-- create the tables
CREATE TABLE pins (
  pinID      INT(11)        NOT NULL   AUTO_INCREMENT,
  pinName     VARCHAR(255)   NOT NULL,
  pinDesc     VARCHAR(255)   NOT NULL,
  userID     INT(11)   NOT NULL,
  boardID     INT(11)   NOT NULL,
  image     VARCHAR(255)   NOT NULL,

  PRIMARY KEY (pinID)
);
CREATE TABLE Boards (
  boardID      INT(11)        NOT NULL   AUTO_INCREMENT,
  boardName     VARCHAR(255)   NOT NULL,
  boardDesc     VARCHAR(255)   NOT NULL,
  userID     INT(11)   NOT NULL,

  PRIMARY KEY (boardID)
);
CREATE TABLE ratings (
  ratingID      INT(11)        NOT NULL   AUTO_INCREMENT,
  user     VARCHAR(255)   NOT NULL,
  comment     VARCHAR(255)   NOT NULL,
  pinID     INT(11)   NOT NULL,
  rating     INT(11)   NOT NULL,
  PRIMARY KEY (ratingID)
);
CREATE TABLE users (
  userID      INT(11)        NOT NULL   AUTO_INCREMENT,
  username      VARCHAR(255)   NOT NULL,
  password     VARCHAR(255)   NOT NULL,
  email     VARCHAR(255)   NOT NULL,

  PRIMARY KEY (userID)
);


INSERT INTO users VALUES
(1, 'Eric', 'password', 'e@email.com');


INSERT INTO pins VALUES
(1, 'The Greatest Professor', 'Burke', 1, 1, 'John Burke.jpg'),
(2, 'Younger Enke', 'Enke', 1, 1,'YoungEnke.jpg'),
(3, 'PasstheHash', 'Desc', 1, 1,'PasstheHash.jpg'),
(4, 'alec', 'alec', 1, 1,'alec.jpg'),
(5, 'Enke', 'Evan Enke', 1, 1,'Evan.jpg'),
(6, 'Bumblebear', 'alec', 1, 1,'Bumblebear.jpg');

INSERT INTO Boards VALUES
(1, 'BoardName1', 'BoardDesc1', 1),
(2, 'BoardName2', 'BoardDesc2', 1);


INSERT INTO ratings VALUES
(1, 'Eric', 'Great', 1, 5);


-- create the users and grant priveleges to those users
GRANT SELECT, INSERT, DELETE, UPDATE
ON phplab.*
TO mgs_user@localhost
IDENTIFIED BY 'pa55word';

