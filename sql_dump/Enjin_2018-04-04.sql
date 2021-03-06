DROP TABLE IF EXISTS `Users`;

CREATE TABLE `Users` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `username` varchar(255) NOT NULL DEFAULT '',
  `email` varchar(255) NOT NULL DEFAULT '',
  `password` varchar(255) NOT NULL DEFAULT '',
   UNIQUE (`username`),
   UNIQUE (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `Users` WRITE;
/*!40000 ALTER TABLE `Users` DISABLE KEYS */;

INSERT INTO `Users` (`id`, `username`, `email`, `password`)
VALUES
	(3,'qwer','qwe@qwer.com','$2y$10$iMR1dt6JajdQRb5lSAjNie25I05xRIvDAlotnFn82po0mf.hg9T.u'),
	(4,'qwer','qwe@qwer.com','$2y$10$VAgnGeLYKByrFDiHxP0mVu0SVDFFoAc9zWC5mgg4DzGZfuTzMJRom'),
	(5,'qwer','qwe@qwer.com','$2y$10$Zb1OywfSu92cgbpaqAaJbucbWhJzp2gneRwpAQKH2uTNr7wFzRyAa'),
	(6,'username','user@login.ca','$2y$10$j3.pyG2TW1ELu8BQLzNKPeNoY800loN3RD4FL4k8ougZHkq5OxmM.');

/*!40000 ALTER TABLE `Users` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
