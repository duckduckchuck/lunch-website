CREATE TABLE IF NOT EXISTS `venue` (
   `venue_name`      VARCHAR(20) NOT NULL,
   `street_address` VARCHAR(100) NOT NULL,
   `city`  VARCHAR(20) NOT NULL,
   `state` CHAR(2) NOT NULL,
   `zip`    CHAR(5) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
