CREATE TABLE IF NOT EXISTS `event` (
   `name`          VARCHAR(100) NOT NULL,
   `id`            MEDIUMINT NOT NULL AUTO_INCREMENT PRIMARY KEY,
   `restaurant_name`     VARCHAR(100) NOT NULL,
   `date_time`           DATETIME NOT NULL,
   `address`           VARCHAR(100)  NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
