create database sposite;
use sposite;

CREATE TABLE IF NOT EXISTS `Customer`(
  `IdCustomer` int(11) NOT NULL AUTO_INCREMENT,
  `Nama` varchar(20) NOT NULL,
  `Alamat` varchar(40) NOT NULL,
  `Nomor_Telepon` varchar(35) NOT NULL,
  PRIMARY KEY (`idCustomer`),
);