<?php
$dbinit_str['mysql']=<<<'EOT'
START TRANSACTION;
CREATE DATABASE `lab_manage` DEFAULT CHARACTER SET utf8mb4;
USE `lab_manage`;
CREATE TABLE `user` (
  `uid` int(11) NOT NULL AUTO_INCREMENT,
  `user` varchar(45) NOT NULL,
  `password` char(32) NOT NULL,
  `power` char(1) NOT NULL DEFAULT 'D',
  PRIMARY KEY (`uid`),
  UNIQUE KEY `user_UNIQUE` (`user`)
) ENGINE=InnoDB;
CREATE TABLE `user_info` (
  `uid` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `phone` varchar(45) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `lab` varchar(45) DEFAULT NULL,
  `theme` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`uid`),
  CONSTRAINT `uid-user` FOREIGN KEY (`uid`) REFERENCES `user` (`uid`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB;
CREATE TABLE `order` (
  `oid` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  `price` double NOT NULL,
  `submit_time` datetime NOT NULL,
  `check` tinyint(1) unsigned zerofill NOT NULL,
  `check_time` datetime DEFAULT NULL,
  PRIMARY KEY (`oid`),
  KEY `orders-uid_idx` (`uid`),
  CONSTRAINT `orders-uid` FOREIGN KEY (`uid`) REFERENCES `user` (`uid`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB;
CREATE TABLE `order_info` (
  `oid` int(11) NOT NULL,
  `name` varchar(45) NOT NULL,
  `amount` varchar(45) NOT NULL,
  `spec` varchar(45) NOT NULL,
  `provider` varchar(45) NOT NULL,
  PRIMARY KEY (`oid`),
  CONSTRAINT `order_info-oid` FOREIGN KEY (`oid`) REFERENCES `order` (`oid`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB;
COMMIT;
EOT;
?>