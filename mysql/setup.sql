-- This entire database can be constructed by running “source setup.sql” from mysql.
CREATE DATABASE `lunch` DEFAULT CHARACTER SET utf8 COLLATE utf8_bin;

USE `lunch`;

GRANT ALL PRIVILEGES ON lunch.* TO 'the_user'@'localhost' IDENTIFIED BY 'the_password';

source event.sql;
source user.sql;
source venue.sql;

