CREATE TABLE IF NOT EXISTS `event` (
   `name`                VARCHAR(100) NOT NULL,
   `event_id`            MEDIUMINT NOT NULL AUTO_INCREMENT PRIMARY KEY,
   `venue_name`          VARCHAR(100) NOT NULL,
   `going`               VARCHAR(100),
   `not_going`           VARCHAR(100)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
