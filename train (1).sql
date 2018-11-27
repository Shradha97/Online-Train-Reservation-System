CREATE DATABASE train;
USE train;
CREATE TABLE user (
  username VARCHAR(10) PRIMARY KEY,
  pwd VARCHAR(10),
  amount INT,
  adhar_no CHAR(10),
  ac_no CHAR(10)
);


INSERT INTO user
VALUES('Angela', 'usr5', '500', '1023467891', '1023467891');
INSERT INTO user
VALUES('Link', 'usr7', '5600', '1023457891', '1023457891');
INSERT INTO user
VALUES('Marshall', 'usr4', '1500', '1073467891', '1073467891');


CREATE TABLE admin (
  username VARCHAR(10) PRIMARY KEY,
  pwd VARCHAR(10)
);


INSERT INTO admin
VALUES('Maya', 'user5');
INSERT INTO admin
VALUES('Sam', 'user7');
INSERT INTO admin
VALUES('Jason', 'user4');


CREATE TABLE train_table (
  train_no INT NOT NULL,
  train_name VARCHAR(40),
  fare INT NOT NULL,
  mon	CHAR(10),
  tue	CHAR(10),
  wed	CHAR(10),
  thu	CHAR(10),
  fri	CHAR(10),
  sat	CHAR(10),
  sun	CHAR(10),
  status VARCHAR(40),
  PRIMARY KEY(train_no)
);



INSERT INTO train_table
VALUES(1, 'shatabdi exp', 1500,'T', 'F', 'F', 'F', 'F','F', 'F', 'Running' );
INSERT INTO train_table
VALUES(2, 'mumbai exp', 1800,'T', 'T', 'F', 'F', 'F','F', 'F', 'Cancelled' );
INSERT INTO train_table
VALUES(3, 'bangalore exp',2000, 'T', 'F', 'F', 'T', 'F','F', 'F', 'Running' );
INSERT INTO train_table
VALUES(4, 'aurangabad exp',2500, 'T', 'F', 'F', 'F', 'F','F', 'T', 'Running' );

CREATE TABLE user_hist (
  train_no INT NOT NULL,
  ticket   INT NOT NULL,
  username VARCHAR(40),
  date_of_journey DATE,
  status VARCHAR(40),
  PRIMARY KEY(train_no, username),
  FOREIGN KEY (username) REFERENCES user(username)
);


CREATE TABLE station_list (
  train_no INT,
  station VARCHAR(40) NOT NULL,
  PRIMARY KEY(train_no, station),
  FOREIGN KEY (train_no) REFERENCES train_table(train_no)
);


INSERT INTO station_list
VALUES(2, 'pune');
INSERT INTO station_list
VALUES(2, 'mumbai');
INSERT INTO station_list
VALUES(2, 'solapur');

/*

*/


