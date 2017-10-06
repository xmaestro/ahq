CREATE TABLE IF NOT EXISTS `PREFIXiqit_elementor_landing` (
  `id_page` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `id_shop` int(10) unsigned DEFAULT NULL,
  `title` varchar(255) NOT NULL ,
  PRIMARY KEY (`id_page`)
) ENGINE=ENGINE_TYPE  DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `PREFIXiqit_elementor_landing_lang` (
  `id_page` INT UNSIGNED NOT NULL,
  `id_lang` int(10) unsigned NOT NULL ,
  `data` longtext default NULL,
  PRIMARY KEY (`id_page`, `id_lang`)
) ENGINE=ENGINE_TYPE  DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `PREFIXiqit_elementor_template` (
  `id_template` int(10) unsigned NOT NULL auto_increment,
  `title` varchar(255) NOT NULL ,
  `data` longtext default NULL,
  PRIMARY KEY (`id_template`)
) ENGINE=ENGINE_TYPE  DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `PREFIXiqit_elementor_product` (
  `id_elementor` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `id_product` int(10) UNSIGNED NOT NULL,
  PRIMARY KEY (`id_elementor`, `id_product`)
) ENGINE=ENGINE_TYPE  DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `PREFIXiqit_elementor_product_lang` (
  `id_elementor` int(10) UNSIGNED NOT NULL,
  `id_lang` int(10) UNSIGNED NOT NULL,
  `data` longtext default NULL,
  PRIMARY KEY (`id_elementor`, `id_lang`)
) ENGINE=ENGINE_TYPE  DEFAULT CHARSET=utf8;

