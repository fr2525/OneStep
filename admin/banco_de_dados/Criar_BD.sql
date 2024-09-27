
CREATE DATABASE if not exists db_europa default character set utf8 default collate utf8_general_ci;
USE db_europa;
//drop table tb_countries;
CREATE TABLE if not exists tb_countries (
  id     int NOT NULL AUTO_INCREMENT PRIMARY KEY,
  name   varchar(150) NOT NULL, 
  population bigint NOT NULL, 
  subregion varchar(100) NOT NULL,
  req_imi varchar(255) NOT NULL,
  benef  varchar(255) NOT NULL,
  life_quality varchar(255) NOT NULL,
  life_cost varchar(255) NOT NULL,
  process  varchar(255) NOT NULL
) default character set utf8 default collate utf8_general_ci;

INSERT INTO tb_countries VALUES
 (default,'Russia',144820423,'Eastern Europe','Requests for immigration','Benefits','Life quality','Life cost','Process'),
 (default,'Germany',84552242,'Western Europe','Requests for immigration','Benefits','Life quality','Life cost','Process'),
 (default,'United Kingdom',69138192,'Nothern Europe','Requests for immigration','Benefits','Life quality','Life cost','Process'),
 (default,'France',66548530,'Western Europe','Requests for immigration','Benefits','Life quality','Life cost','Process'),
 (default,'Italy',59342867,'Southern Europe','Requests for immigration','Benefits','Life quality','Life cost','Process'),
 (default,'Germany',47910526,'Southern Europe','Requests for immigration','Benefits','Life quality','Life cost','Process'),
 (default,'Spain',144820423,'Eastern Europe','Requests for immigration','Benefits','Life quality','Life cost','Process'),
 (default,'Poland',38539201,'Eastern Europe','Requests for immigration','Benefits','Life quality','Life cost','Process');
 (default,'Poland,38539201,Eastern Europe','Requests for immigration','Benefits','Life quality','Life cost','Process');
 (default,'Ukraine,37860221,Eastern Europe','Requests for immigration','Benefits','Life quality','Life cost','Process');
 (default,'Romania,19015088,Eastern Europe','Requests for immigration','Benefits','Life quality','Life cost','Process');
 (default,'Netherlands,18228742,Western Europe','Requests for immigration','Benefits','Life quality','Life cost','Process');
 (default,'Belgium,11738763,Western Europe','Requests for immigration','Benefits','Life quality','Life cost','Process');
 (default,'Czech Republic (Czechia),10735859,Eastern Europe','Requests for immigration','Benefits','Life quality','Life cost','Process');
 (default,'Sweden,10606999,Northern Europe','Requests for immigration','Benefits','Life quality','Life cost','Process');
 (default,'Portugal,10425292,Southern Europe','Requests for immigration','Benefits','Life quality','Life cost','Process');
 (default,'Greece,10047817,Southern Europe','Requests for immigration','Benefits','Life quality','Life cost','Process');
 (default,'Hungary,9676135,Eastern Europe','Requests for immigration','Benefits','Life quality','Life cost','Process');
 (default,'Austria,9120813,Western Europe','Requests for immigration','Benefits','Life quality','Life cost','Process');
 (default,'Belarus,9056,696,Eastern Europe','Requests for immigration','Benefits','Life quality','Life cost','Process');
 (default,'Switzerland,8921981,Western Europe','Requests for immigration','Benefits','Life quality','Life cost','Process');
 (default,'Bulgaria,6757689,Eastern Europe','Requests for immigration','Benefits','Life quality','Life cost','Process');
 (default,'Serbia,6736216,Southern Europe','Requests for immigration','Benefits','Life quality','Life cost','Process');
 (default,'Denmark,5977412,Northern Europe','Requests for immigration','Benefits','Life quality','Life cost','Process');
 (default,'Finland,5617310,Northern Europe','Requests for immigration','Benefits','Life quality','Life cost','Process');
 (default,'Norway,5576660,Northern Europe','Requests for immigration','Benefits','Life quality','Life cost','Process');
 (default,'Slovakia,5506760,Eastern Europe','Requests for immigration','Benefits','Life quality','Life cost','Process');
 (default,'Ireland,5255017,Northern Europe','Requests for immigration','Benefits','Life quality','Life cost','Process');
 (default,'Croatia,3875325,Southern Europe','Requests for immigration','Benefits','Life quality','Life cost','Process');
 (default,'Bosnia and Herzegovina,3164253,Southern Europe','Requests for immigration','Benefits','Life quality','Life cost','Process');
 (default,'Moldova,3034961,Eastern Europe','Requests for immigration','Benefits','Life quality','Life cost','Process');
 (default,'Lithuania,2859110,Northern Europe','Requests for immigration','Benefits','Life quality','Life cost','Process');
 (default,'Albania,2791765,Southern Europe','Requests for immigration','Benefits','Life quality','Life cost','Process');
 (default,'Slovenia,2118697,Southern Europe','Requests for immigration','Benefits','Life quality','Life cost','Process');
 (default,'Latvia,1871871,Northern Europe','Requests for immigration','Benefits','Life quality','Life cost','Process');
 (default,'North Macedonia,1823009,Southern Europe','Requests for immigration','Benefits','Life quality','Life cost','Process');
 (default,'Estonia,1360546,Northern Europe','Requests for immigration','Benefits','Life quality','Life cost','Process');
 (default,'Luxembourg,673036,Western Europe','Requests for immigration','Benefits','Life quality','Life cost','Process');
 (default,'Montenegro,638479,Southern Europe','Requests for immigration','Benefits','Life quality','Life cost','Process');
 (default,'Malta,539607,Southern Europe','Requests for immigration','Benefits','Life quality','Life cost','Process');
 (default,'Iceland,393396,Northern Europe','Requests for immigration','Benefits','Life quality','Life cost','Process');
 (default,'Andorra,81938Southern Europe','Requests for immigration','Benefits','Life quality','Life cost','Process');
 (default,'Liechtenstein,39870,Western Europe','Requests for immigration','Benefits','Life quality','Life cost','Process');
 (default,'Monaco,38631Western Europe','Requests for immigration','Benefits','Life quality','Life cost','Process');
 (default,'San Marino,33581Southern Europe','Requests for immigration','Benefits','Life quality','Life cost','Process');
 (default,'Holy See,496,Southern Europe','Requests for immigration','Benefits','Life quality','Life cost','Process');
 (default,'Isle of Man,84160,U.K.','Requests for immigration','Benefits','Life quality','Life cost','Process');
 (default,'Gibraltar,39329,U.K.','Requests for immigration','Benefits','Life quality','Life cost','Process');
