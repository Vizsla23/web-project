CREATE DATABASE `bkonyv`
CHARACTER SET utf8 COLLATE utf8_general_ci;

USE `bkonyv`;

CREATE TABLE `felhasznalok` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `csalad_nev` varchar(45) NOT NULL default '',
  `uto_nev` varchar(45) NOT NULL default '',
  `bejelentkezes` varchar(12) NOT NULL default '',
  `jelszo` varchar(40) NOT NULL default '',
  PRIMARY KEY  (`id`)
)
ENGINE = MYISAM
CHARACTER SET utf8 COLLATE utf8_general_ci;

INSERT INTO `felhasznalok` (`id`,`csalad_nev`,`uto_nev`,`bejelentkezes`,`jelszo`) VALUES 
 (1,'Csalad_1','Uto_1','Ferenc1',sha1('ferenc1')),
 (2,'Csalad_2','Uto_2','Ferenc2',sha1('ferenc2')),
