CREATE TABLE IF NOT EXISTS `user` (
   `email`        VARCHAR(254) NOT NULL PRIMARY KEY,
   `password`     CHAR(32) NOT NULL,
   `salt`         CHAR(8) NOT NULL,
   `firstname`    VARCHAR(254) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
