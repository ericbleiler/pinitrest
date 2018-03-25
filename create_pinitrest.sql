/*****************************************
* Create the database
*****************************************/
DROP DATABASE IF EXISTS pinitrest;
CREATE DATABASE pinitrest;
USE pinitrest;  -- MySQL command

-- create the tables
CREATE TABLE Boards (
  BoardID      INT(11)        NOT NULL   AUTO_INCREMENT,
  BoardName     VARCHAR(255)   NOT NULL,
  BoardDesc     VARCHAR(255)   NOT NULL,
  PRIMARY KEY (BoardID)
);
CREATE TABLE Pins (
  PinID      INT(11)        NOT NULL   AUTO_INCREMENT,
  PinName     VARCHAR(255)   NOT NULL,
  PinDesc     VARCHAR(255)   NOT NULL,
  TagID     INT(11)   NOT NULL,
  UserID     INT(11)   NOT NULL,
  Image      VARCHAR(255)   NOT NULL,
  PRIMARY KEY (PinID)
);


CREATE TABLE Users (
  UserID      INT(11)        NOT NULL   AUTO_INCREMENT,
  Username      VARCHAR(255)   NOT NULL,
  Password     VARCHAR(255)   NOT NULL,
  Bio     VARCHAR(255)   NOT NULL,
  PRIMARY KEY (UserID)
);
CREATE TABLE Tag (
  TagID      INT(11)        NOT NULL   AUTO_INCREMENT,
  TagName     VARCHAR(255)   NOT NULL,
  PRIMARY KEY (TagID)
);
CREATE TABLE BoardDetail (
  BoardDetailID      INT(11)        NOT NULL   AUTO_INCREMENT,
  BoardID     INT(11)   NOT NULL,
  PinID     INT(11)   NOT NULL,
  PRIMARY KEY (BoardDetailID)
);
CREATE TABLE FollowBoard (
  FollowBoardID      INT(11)        NOT NULL   AUTO_INCREMENT,
  UserID      INT(11)   NOT NULL,
  BoardID     INT(11)  NOT NULL,
  PRIMARY KEY (FollowBoardID)
);
CREATE TABLE UserBoard (
  UserBoardID      INT(11)        NOT NULL   AUTO_INCREMENT,
  UserID      INT(11)   NOT NULL,
  BoardID     INT(11)   NOT NULL,
  PRIMARY KEY (UserBoardID)
);
CREATE TABLE Comment (
  CommentID      INT(11)        NOT NULL   AUTO_INCREMENT,
  Body    VARCHAR(255)   NOT NULL,
  UserID      INT(11)   NOT NULL,
  PRIMARY KEY (CommentID)
);
CREATE TABLE PinComments (
  PinCommentID      INT(11)        NOT NULL   AUTO_INCREMENT,
  PinID     INT(11)   NOT NULL,
  PRIMARY KEY (PinCommentID)
);


INSERT INTO Pins VALUES
(1, 'The Greatest Professor', 'Burke', 1, 1, 'John Burke.jpg'),
(2, 'Younger Enke', 'Enke', 1, 1, 'YoungEnke.jpg'),
(3, 'PasstheHash', 'Desc', 2, 1, 'PasstheHash.jpg'),
(4, 'alec', 'alec', 1, 1, 'alec.jpg'),
(5, 'Enke', 'Evan Enke', 1, 1, 'Evan.jpg'),
(6, 'Bumblebear', 'alec', 1, 1, 'Bumblebear.jpg');

INSERT INTO Boards VALUES
(1, 'BoardName1', 'BoardDesc1'),
(2, 'BoardName2', 'BoardDesc2');


-- insert data into the database

INSERT INTO Users VALUES
(1, 'Eric', 'password', 'bio');

INSERT INTO Tag VALUES
(1, 'Professors'),
(2, 'Tech');

INSERT INTO BoardDetail VALUES
(1, 1, 1),
(2, 1, 2),
(3, 1, 3);

INSERT INTO FollowBoard VALUES
(1, 1, 1),
(2, 1, 2),
(3, 1, 3);

INSERT INTO UserBoard VALUES
(1, 1, 1),
(2, 1, 2),
(3, 1, 3);

INSERT INTO Comment VALUES
(1, 'body', 1),
(2, 'body', 1),
(3, 'body', 1);


INSERT INTO PinComments VALUES
(1, 1),
(2, 1),
(3, 2);

-- create the users and grant priveleges to those users
GRANT SELECT, INSERT, DELETE, UPDATE
ON pinitrest.*
TO mgs_user@localhost
IDENTIFIED BY 'pa55word';


