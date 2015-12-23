CREATE TABLE IF NOT EXISTS `display` (
   `user_id`            VARCHAR(3) NOT NULL,
   `event_id`           VARCHAR(3) NOT NULL,
   `venue_id`           VARCHAR(3) NOT NULL,
   `rsvp`               VARCHAR(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
