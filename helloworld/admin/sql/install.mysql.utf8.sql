DROP TABLE IF EXISTS `#__helloworld`;

CREATE TABLE `#__helloworld` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `greeting` varchar(25) NOT NULL,
   PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=0 DEFAULT CHARSET=utf8;

INSERT INTO `#__helloworld` (`greeting`) VALUES
('Hello World!'),
('Good bye World!');

CREATE TABLE `#__mytest` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `test_msg` varchar(50) NOT NULL,
   PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=0 DEFAULT CHARSET=utf8;

INSERT INTO `#__helloworld` (`greeting`) VALUES
('yo this is test message 1'),
('blah'),
('bloo'),
('bob loblore');