 <?php
 CREATE DATABASE test;
CREATE TABLE `user_information` (
  `id` int(11) NOT NULL auto_increment,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `add_date` datetime NOT NULL default CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=1 DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;
 
INSERT INTO `user_information` VALUES (1, 'PHP', 'php@demo.com', '2015-08-17 11:04:36');
INSERT INTO `user_information` VALUES (2, 'MYSQL', 'mysql@demo.com', '2015-08-18 11:04:36');
INSERT INTO `user_information` VALUES (3, 'JQUERY', 'jquery@demo.com', '2015-08-19 11:04:36');
INSERT INTO `user_information` VALUES (4, 'AJAX', 'ajax@demo.com', '2015-08-20 11:04:36');
INSERT INTO `user_information` VALUES (4, 'PHP5', 'php5@demo.com', '2015-08-21 11:04:36');
INSERT INTO `user_information` VALUES (4, 'HTML5', 'html5@demo.com', '2015-08-22 11:04:36');
?>

	
<?php
    $conn = mysql_connect('localhost','test','root', '') or die(mysql_error());
    $dbname = mysql_select_db('user_information') or die(mysql_error());
?>