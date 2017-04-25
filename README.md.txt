CREATE DATABASE `testdb`;
USE `testdb`;
CREATE TABLE`users`(
  `id` int(8) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `name` varchar(40) NOT NULL,
  `nationality` varchar(40) NOT NULL,
  `medical_id_number` int(40) NULL,
  `age` int(40) NOT NULL,
  `phoneNumber` int(40) NOT NULL,
  `email` varchar(40) NOT NULL,
  `password` varchar(24) NOT NULL) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;
