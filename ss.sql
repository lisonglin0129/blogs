/*
SQLyog Ultimate v11.27 (32 bit)
MySQL - 10.1.13-MariaDB : Database - educate
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`educate` /*!40100 DEFAULT CHARACTER SET utf8 COLLATE utf8_bin */;

USE `educate`;

/*Table structure for table `l_admin` */

DROP TABLE IF EXISTS `l_admin`;

CREATE TABLE `l_admin` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `l_admin` */

insert  into `l_admin`(`id`,`username`,`name`,`email`,`password`,`remember_token`,`created_at`,`updated_at`) values (1,'lisonglin','李松林','lisonglin@sina.cn','d41d8cd98f00b204e9800998ecf8427e','fiK3zjaJiuP8JGToXVNBU7jFK1rMPNpMF6vKDg2u',NULL,'2016-07-18 10:04:33'),(2,'lisonglinds','的撒','lisonglin@sina.com','4600648ddf7b53aee02bbb3508a1fd45',NULL,NULL,NULL);

/*Table structure for table `l_admin_password_resets` */

DROP TABLE IF EXISTS `l_admin_password_resets`;

CREATE TABLE `l_admin_password_resets` (
  `id` int(11) NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `password_resets_email_index` (`email`),
  KEY `password_resets_token_index` (`token`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `l_admin_password_resets` */

/*Table structure for table `l_course` */

DROP TABLE IF EXISTS `l_course`;

CREATE TABLE `l_course` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uid` int(11) DEFAULT NULL COMMENT '用户的id',
  `type_id` int(1) DEFAULT NULL,
  `click_id` int(11) DEFAULT NULL,
  `course_name` varchar(40) CHARACTER SET utf8 COLLATE utf8_german2_ci DEFAULT NULL COMMENT '课程名称',
  `course_type` varchar(20) CHARACTER SET utf8 COLLATE utf8_german2_ci DEFAULT NULL COMMENT '课程类型',
  `course_type_title` varchar(40) COLLATE utf8_bin DEFAULT NULL,
  `course_price` decimal(9,2) NOT NULL DEFAULT '0.00' COMMENT '课程的价格',
  `course_picture` varchar(255) CHARACTER SET utf8 COLLATE utf8_german2_ci DEFAULT NULL COMMENT '课程图片',
  `course_mins` time DEFAULT NULL COMMENT '课程时间',
  `c_url` varchar(255) CHARACTER SET utf8 COLLATE utf8_german2_ci DEFAULT NULL COMMENT '生成的url',
  `course_type_info` text CHARACTER SET utf8 COLLATE utf8_german2_ci COMMENT '课程描述',
  `up_time` datetime DEFAULT NULL,
  `click` bigint(20) DEFAULT '0' COMMENT '点击率',
  `order` int(11) DEFAULT NULL,
  `is_del` int(1) DEFAULT '0' COMMENT '是否删除',
  PRIMARY KEY (`id`,`course_price`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

/*Data for the table `l_course` */

/*Table structure for table `l_coursetype` */

DROP TABLE IF EXISTS `l_coursetype`;

CREATE TABLE `l_coursetype` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type_id` int(11) DEFAULT NULL,
  `course_type` varchar(40) CHARACTER SET utf8 DEFAULT NULL COMMENT '栏目的名称',
  `course_type_title` varchar(40) CHARACTER SET utf8 DEFAULT NULL COMMENT '栏目的标题',
  `course_type_picture` text CHARACTER SET utf8 COMMENT '栏目图片的路径',
  `type_click` bigint(20) DEFAULT '0' COMMENT '栏目的点击率',
  `type_url` varchar(255) CHARACTER SET utf8 DEFAULT NULL COMMENT '栏目的url',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

/*Data for the table `l_coursetype` */

insert  into `l_coursetype`(`id`,`type_id`,`course_type`,`course_type_title`,`course_type_picture`,`type_click`,`type_url`) values (1,1,'数学','攀枝花实验小学数学','/home/images/14673665481539.png',0,NULL),(2,2,'语文','攀枝花实验小学语文','/home/images/14673665481539.png',0,NULL),(3,1,'数学','上海教育版 数学','/home/images/14625104188353.jpg',0,NULL),(4,3,'英语','三年级下学期外研社（一年级起）英语','/home/images/211.jpg',0,NULL),(5,3,'英语','五年级下学期牛津译林版英语','/home/images/210.jpg',0,NULL),(6,3,'英语','六年级下学期人教新版英语','/home/images/209.jpg',0,NULL),(7,4,'物理','初中物理实验系列（一）','/home/images/collection90.jpg',0,NULL),(8,4,'物理','初中物理实验系列（二）','/home/images/collection91.jpg',0,NULL),(9,5,'化学','初中化学实验系列（一）','/home/images/collection110.jpg',0,NULL),(10,2,'语文','中考必备：初中古诗词详解','/home/images/360495.jpg',0,NULL),(11,6,'初中语法','初中语法专项突破（一）','/home/images/355131.jpg',0,NULL),(12,3,'英语','中考英语考点各个击破系列二---满分完型','/home/images/350454.jpg',0,NULL);

/*Table structure for table `l_migrations` */

DROP TABLE IF EXISTS `l_migrations`;

CREATE TABLE `l_migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `l_migrations` */

insert  into `l_migrations`(`migration`,`batch`) values ('2016_07_18_090510_create_sessions_table',1);

/*Table structure for table `l_nature_type` */

DROP TABLE IF EXISTS `l_nature_type`;

CREATE TABLE `l_nature_type` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type_id` int(11) DEFAULT NULL,
  `nature_type` varchar(300) CHARACTER SET utf8 COLLATE utf8_german2_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

/*Data for the table `l_nature_type` */

insert  into `l_nature_type`(`id`,`type_id`,`nature_type`) values (1,1,'数学'),(2,2,'语文'),(3,3,'英语'),(4,4,'物理'),(5,5,'化学'),(6,6,'初中语法'),(7,7,'初中物理');

/*Table structure for table `l_password_resets` */

DROP TABLE IF EXISTS `l_password_resets`;

CREATE TABLE `l_password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  KEY `password_resets_email_index` (`email`),
  KEY `password_resets_token_index` (`token`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `l_password_resets` */

/*Table structure for table `l_sessions` */

DROP TABLE IF EXISTS `l_sessions`;

CREATE TABLE `l_sessions` (
  `id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8_unicode_ci,
  `payload` text COLLATE utf8_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL,
  UNIQUE KEY `sessions_id_unique` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `l_sessions` */

/*Table structure for table `l_users` */

DROP TABLE IF EXISTS `l_users`;

CREATE TABLE `l_users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `l_users` */

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
