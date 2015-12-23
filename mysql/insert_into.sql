INSERT INTO event (name)
VALUES("Thanksgiving Dinner"),
("Jao’s Birthday Bash"),
("Dinner with Joey & Rebekah");

INSERT INTO user (email, password, salt, firstname)
VALUES
("1@gmail.com","f07d45d2e4f9e2dfbbec1613b4ef7b51", "5fde4054","Chuck"),("2@gmail.com","dc807bf0e8138b3858f57b32ef713cb7", "c5aa6594","Jane"),("3@gmail.com","0362c4792eef1e1f1ff6b483837edc6a", "df8a6aa9","Chao"),("4@gmail.com","db7e8ab944ae256f6e82599b773ef67c", "28e2ec06","Andrew"),("5@gmail.com","c4f639b80569a5b1841d2db3f2ce2cb3", "e64b5017","Joey"),("6@gmail.com","aff3208696b4b29ba50ab182199b8d8f", "28ed66f9","Dan");

INSERT INTO venue (venue_name, street_address, city, state)
VALUES
("Empire State Bldg","350 5th Ave", "New York", "NY"),
("B&H", "127 2nd Ave", "New York", "NY"),
("Dan's Place", "368 Eastern Pkwy #4D", "Brooklyn", "NY");


INSERT INTO display (user_id, venue_id, event_id, rsvp)
VALUES
("1","1","3","1"),("2","1","3","2"),("3","1","3","2"),("4","1","3","2"),("5","1","3","1"),("6","1","3","1"),
("1","3","2","1"),("2","3","2","2"),("3","3","2","2"),("4","3","2","1"),("5","3","2","1"),("6","3","2","2"),
("1","2","1","2"),("2","2","1","1"),("3","2","1","1"),("4","2","1","1"),("5","2","1","1"),("6","2","1","1");
