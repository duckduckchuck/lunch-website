CREATE TABLE IF NOT EXISTS `venue` (
   `venue_id`                 MEDIUMINT NOT NULL AUTO_INCREMENT PRIMARY KEY,
   `venue_name`               VARCHAR(20) NOT NULL,
   `street_address`           VARCHAR(100) NOT NULL,
   `city`                     VARCHAR(20) NOT NULL,
   `state`                    CHAR(2) NOT NULL
   ) ENGINE=MyISAM DEFAULT CHARSET=utf8;
