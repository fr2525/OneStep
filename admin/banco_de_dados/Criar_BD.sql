CREATE DATABASE if not exists db_europa default character set utf8 default collate utf8_general_ci;
USE db_europa;
CREATE TABLE if not exists tb_countries (
  id int NOT NULL AUTO_INCREMENT PRIMARY KEY,
  name   varchar(150) NOT NULL, 
  population bigint NOT NULL, 
  subregion varchar(100) NOT NULL,
  DDD CHAR(3), 
  req_imi varchar(255) ,
  benef  varchar(255) ,
  life_quality varchar(255) ,
  life_cost varchar(255) ,
  process  varchar(255) ,
  dateUpdate TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP) 
  default character set utf8 default collate utf8_general_ci
  ;

INSERT INTO tb_countries VALUES
 (default,'Russia',144820423,'Eastern Europe',0,'Requests for immigration','Benefits','Life quality','Life cost','Process',CURRENT_DATE),
 (default,'Germany',84552242,'Western Europe',0,'Requests for immigration','Benefits','Life quality','Life cost','Process',CURRENT_DATE),
 (default,'United Kingdom',69138192,'Nothern Europe',0,'Requests for immigration','Benefits','Life quality','Life cost','Process',CURRENT_DATE),
 (default,'France',66548530,'Western Europe',0,'Requests for immigration','Benefits','Life quality','Life cost','Process',CURRENT_DATE),
 (default,'Italy',59342867,'Southern Europe',0,'Requests for immigration','Benefits','Life quality','Life cost','Process',CURRENT_DATE),
 (default,'Germany',47910526,'Southern Europe',0,'Requests for immigration','Benefits','Life quality','Life cost','Process',CURRENT_DATE),
 (default,'Spain',144820423,'Eastern Europe',0,'Requests for immigration','Benefits','Life quality','Life cost','Process',CURRENT_DATE),
 (default,'Poland',38539201,'Eastern Europe',0,'Requests for immigration','Benefits','Life quality','Life cost','Process',CURRENT_DATE),
 (default,'Ukraine',37860221,'Eastern Europe',0,'Requests for immigration','Benefits','Life quality','Life cost','Process',CURRENT_DATE),
 (default,'Romania',19015088,'Eastern Europe',0,'Requests for immigration','Benefits','Life quality','Life cost','Process',CURRENT_DATE),
 (default,'Netherlands',18228742,'Western Europe',0,'Requests for immigration','Benefits','Life quality','Life cost','Process',CURRENT_DATE),
 (default,'Belgium',11738763,'Western Europe',0,'Requests for immigration','Benefits','Life quality','Life cost','Process',CURRENT_DATE),
 (default,'Czech Republic (Czechia)',10735859,'Eastern Europe',0,'Requests for immigration','Benefits','Life quality','Life cost','Process',CURRENT_DATE),
 (default,'Sweden',10606999,'Northern Europe',0,'Requests for immigration','Benefits','Life quality','Life cost','Process',CURRENT_DATE),
 (default,'Portugal',10425292,'Southern Europe',0,'Requests for immigration','Benefits','Life quality','Life cost','Process',CURRENT_DATE),
 (default,'Greece',10047817,'Southern Europe',0,'Requests for immigration','Benefits','Life quality','Life cost','Process',CURRENT_DATE),
 (default,'Hungary',9676135,'Eastern Europe',0,'Requests for immigration','Benefits','Life quality','Life cost','Process',CURRENT_DATE),
 (default,'Austria',9120813,'Western Europe',0,'Requests for immigration','Benefits','Life quality','Life cost','Process',CURRENT_DATE),
 (default,'Belarus',9056696,'Eastern Europe',0,'Requests for immigration','Benefits','Life quality','Life cost','Process',CURRENT_DATE),
 (default,'Switzerland',8921981,'Western Europe',0,'Requests for immigration','Benefits','Life quality','Life cost','Process',CURRENT_DATE),
 (default,'Bulgaria',6757689,'Eastern Europe',0,'Requests for immigration','Benefits','Life quality','Life cost','Process',CURRENT_DATE),
 (default,'Serbia',6736216,'Southern Europe',0,'Requests for immigration','Benefits','Life quality','Life cost','Process',CURRENT_DATE),
 (default,'Denmark',5977412,'Northern Europe',0,'Requests for immigration','Benefits','Life quality','Life cost','Process',CURRENT_DATE),
 (default,'Finland',5617310,'Northern Europe',0,'Requests for immigration','Benefits','Life quality','Life cost','Process',CURRENT_DATE),
 (default,'Norway',5576660,'Northern Europe',0,'Requests for immigration','Benefits','Life quality','Life cost','Process',CURRENT_DATE),
 (default,'Slovakia',5506760,'Eastern Europe',0,'Requests for immigration','Benefits','Life quality','Life cost','Process',CURRENT_DATE),
 (default,'Ireland',5255017,'Northern Europe',0,'Requests for immigration','Benefits','Life quality','Life cost','Process',CURRENT_DATE),
 (default,'Croatia',3875325,'Southern Europe',0,'Requests for immigration','Benefits','Life quality','Life cost','Process',CURRENT_DATE),
 (default,'Bosnia and Herzegovina',3164253,'Southern Europe',0,'Requests for immigration','Benefits','Life quality','Life cost','Process',CURRENT_DATE),
 (default,'Moldova',3034961,'Eastern Europe',0,'Requests for immigration','Benefits','Life quality','Life cost','Process',CURRENT_DATE),
 (default,'Lithuania',2859110,'Northern Europe',0,'Requests for immigration','Benefits','Life quality','Life cost','Process',CURRENT_DATE),
 (default,'Albania',2791765,'Southern Europe',0,'Requests for immigration','Benefits','Life quality','Life cost','Process',CURRENT_DATE),
 (default,'Slovenia',2118697,'Southern Europe',0,'Requests for immigration','Benefits','Life quality','Life cost','Process',CURRENT_DATE),
 (default,'Latvia',1871871,'Northern Europe',0,'Requests for immigration','Benefits','Life quality','Life cost','Process',CURRENT_DATE),
 (default,'North Macedonia',1823009,'Southern Europe',0,'Requests for immigration','Benefits','Life quality','Life cost','Process',CURRENT_DATE),
 (default,'Estonia',1360546,'Northern Europe',0,'Requests for immigration','Benefits','Life quality','Life cost','Process',CURRENT_DATE),
 (default,'Luxembourg',673036,'Western Europe',0,'Requests for immigration','Benefits','Life quality','Life cost','Process',CURRENT_DATE),
 (default,'Montenegro',638479,'Southern Europe',0,'Requests for immigration','Benefits','Life quality','Life cost','Process',CURRENT_DATE),
 (default,'Malta',539607,'Southern Europe',0,'Requests for immigration','Benefits','Life quality','Life cost','Process',CURRENT_DATE),
 (default,'Iceland',393396,'Northern Europe',0,'Requests for immigration','Benefits','Life quality','Life cost','Process',CURRENT_DATE),
 (default,'Andorra',81938,'Southern Europe',0,'Requests for immigration','Benefits','Life quality','Life cost','Process',CURRENT_DATE),
 (default,'Liechtenstein',39870,'Western Europe',0,'Requests for immigration','Benefits','Life quality','Life cost','Process',CURRENT_DATE),
 (default,'Monaco',38631,'Western Europe',0,'Requests for immigration','Benefits','Life quality','Life cost','Process',CURRENT_DATE),
 (default,'San Marino',33581,'Southern Europe',0,'Requests for immigration','Benefits','Life quality','Life cost','Process',CURRENT_DATE),
 (default,'Holy See',496,'Southern Europe',0,'Requests for immigration','Benefits','Life quality','Life cost','Process',CURRENT_DATE),
 (default,'Isle of Man',84160,'U.K.',0,'Requests for immigration','Benefits','Life quality','Life cost','Process',CURRENT_DATE),
 (default,'Gibraltar',39329,'U.K.',0,'Requests for immigration','Benefits','Life quality','Life cost','Process',CURRENT_DATE);

DROP TABLE IF EXISTS users;
CREATE TABLE IF NOT EXISTS users (
id int(10) unsigned NOT NULL AUTO_INCREMENT,
nome varchar(100) NOT NULL,
user varchar(50) NOT NULL,
password varchar(50) NOT NULL,
PRIMARY KEY (id),
UNIQUE KEY user (user)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

INSERT INTO users VALUES
(default,'admin','admin','123456');
