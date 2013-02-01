DROP TABLE IF EXISTS `projects`;

#
# Table structure for table 'projects'
#

CREATE TABLE IF NOT EXISTS `projects` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `site` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

#
# Dumping data for table 'projects'
#

INSERT INTO `projects` (`id`, `name`, `site`, `description`) VALUES
(1, 'CodeIgniter', 'http://ellislab.com/codeigniter', 'CodeIgniter is a proven, agile & open PHP web application framework with a small footprint. It is powering the next generation of web apps.'),
(2, 'AngularJS', 'http://angularjs.org/', 'AngularJS lets you extend HTML vocabulary for your application. The resulting environment is extraordinarily expressive, readable, and quick to develop.');