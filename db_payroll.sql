/*
SQLyog Community v13.1.2 (64 bit)
MySQL - 10.1.36-MariaDB : Database - db_payroll
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`db_payroll` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `db_payroll`;

/*Table structure for table `tbl_jabatan` */

DROP TABLE IF EXISTS `tbl_jabatan`;

CREATE TABLE `tbl_jabatan` (
  `id_jabatan` int(11) NOT NULL AUTO_INCREMENT,
  `nama_jabatan` varchar(100) DEFAULT NULL,
  `gaji_pokok` varchar(30) DEFAULT NULL,
  `tunjangan_kesehatan` varchar(30) DEFAULT NULL,
  `dana_pensiun` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`id_jabatan`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_jabatan` */

insert  into `tbl_jabatan`(`id_jabatan`,`nama_jabatan`,`gaji_pokok`,`tunjangan_kesehatan`,`dana_pensiun`) values 
(1,'Manager','7000000',NULL,NULL),
(2,'Supervisor','6500000',NULL,NULL),
(3,'HRD','6000000',NULL,NULL),
(4,'Admin','5500000',NULL,NULL),
(5,'Staff','4000000',NULL,NULL),
(6,'CS','3500000',NULL,NULL),
(7,'Satpam','4500000',NULL,NULL),
(8,'Marketing','3570000',NULL,NULL),
(9,'Accounting','4570000',NULL,NULL),
(10,'IT','8000000',NULL,NULL),
(11,'Resepsionis','3500000','100000','10000');

/*Table structure for table `tbl_karyawan` */

DROP TABLE IF EXISTS `tbl_karyawan`;

CREATE TABLE `tbl_karyawan` (
  `id_karyawan` int(11) NOT NULL AUTO_INCREMENT,
  `nama_karyawan` varchar(100) DEFAULT NULL,
  `nik` varchar(20) DEFAULT NULL,
  `jenis_kelamin` varchar(20) DEFAULT NULL,
  `tempat_lahir` varchar(50) DEFAULT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `jabatan` int(11) DEFAULT NULL,
  `no_telpon` varchar(13) DEFAULT NULL,
  `email` varchar(40) DEFAULT NULL,
  `agama` varbinary(50) DEFAULT NULL,
  `pendidikan` varchar(50) DEFAULT NULL,
  `asal_sekolah` varchar(100) DEFAULT NULL,
  `gol_darah` varchar(2) DEFAULT NULL,
  `alamat` text,
  `foto` text,
  `data_record` datetime DEFAULT NULL,
  PRIMARY KEY (`id_karyawan`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_karyawan` */

insert  into `tbl_karyawan`(`id_karyawan`,`nama_karyawan`,`nik`,`jenis_kelamin`,`tempat_lahir`,`tgl_lahir`,`jabatan`,`no_telpon`,`email`,`agama`,`pendidikan`,`asal_sekolah`,`gol_darah`,`alamat`,`foto`,`data_record`) values 
(3,'Wahyu Aziz Prastiyo','13214325346','laki-laki','Wiyung','1996-12-12',4,'08983436346','ajis@gmail.com','islam','SMK','MRT','a','Wiyung Surabaya','PEGAWAI_14092019141139.png','2019-09-14 14:00:10'),
(4,'Moch. Firman Firdaus','21325326','laki-laki','Sidoarjo','1998-12-09',1,'089666515952','firman.firdaus90@yahoo.com','islam','S1','Universitas Bhayangkara Surabaya','a','Jl. Brigjen Katamso No. 23 RT 01 RW 01 Desa Janti ','','2019-09-19 16:34:39');

/*Table structure for table `tbl_user` */

DROP TABLE IF EXISTS `tbl_user`;

CREATE TABLE `tbl_user` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(100) DEFAULT NULL,
  `username` varchar(100) DEFAULT NULL,
  `password` text,
  `level` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_user` */

insert  into `tbl_user`(`id_user`,`nama`,`username`,`password`,`level`) values 
(1,'Moch. Firman Firdaus','admin','b34b40ca8771c48c204e55f927376885',1);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
