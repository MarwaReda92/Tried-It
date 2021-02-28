CREATE TABLE `users` (
  `user_id` int(10) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(20) NOT NULL,
  `last_name` varchar (20) NOT NULL,
  `email` varchar (100) NOT NULL,
  `birthday` date NOT NULL,
  `profession` varchar(100) NOT NULL,
  `username` varchar (15) NOT NULL,
  PRIMARY KEY (user_id)
);