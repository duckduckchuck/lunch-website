CREATE TABLE IF NOT EXISTS `user` (
   `user_id`      MEDIUMINT NOT NULL AUTO_INCREMENT PRIMARY KEY,
   `email`        VARCHAR(254) NOT NULL,
   `password`     CHAR(32) NOT NULL,
   `salt`         CHAR(8) NOT NULL,
   `firstname`    VARCHAR(254) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
