CREATE TABLE IF NOT EXISTS `address` (
   `street_address` VARCHAR(100),
   `apt_number` VARCHAR(10),
   `city`  VARCHAR(20) NOT NULL,
   `state` CHAR(2) NOT NULL,
   `zip`    CHAR(5) NOT NULL,

) ENGINE=MyISAM DEFAULT CHARSET=utf8;
