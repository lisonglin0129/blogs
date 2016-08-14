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
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `l_admin` */

insert  into `l_admin`(`id`,`username`,`name`,`email`,`password`,`remember_token`,`created_at`,`updated_at`) values (1,'lisonglin','李松林','lisonglin@sina.cn','4600648ddf7b53aee02bbb3508a1fd45','l45Jdp9MkI0rnN4sGGnrYC0ihqCUiiYxUNXJRo91',NULL,'2016-08-04 00:49:45'),(2,'lisonglinds','的撒','lisonglin@sina.com','4600648ddf7b53aee02bbb3508a1fd45',NULL,NULL,NULL);

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
  `cat_id` int(11) DEFAULT NULL COMMENT '分类id',
  `type_id` int(1) DEFAULT NULL,
  `click_id` int(11) NOT NULL DEFAULT '0',
  `course_name` varchar(40) CHARACTER SET utf8 COLLATE utf8_german2_ci DEFAULT NULL COMMENT '课程名称',
  `course_type` varchar(20) CHARACTER SET utf8 COLLATE utf8_german2_ci DEFAULT NULL COMMENT '课程类型',
  `course_type_seo_title` varchar(40) COLLATE utf8_bin DEFAULT NULL COMMENT 'SEO标题',
  `course_price` decimal(9,2) NOT NULL DEFAULT '0.00' COMMENT '课程的价格',
  `course_picture` varchar(255) CHARACTER SET utf8 COLLATE utf8_german2_ci DEFAULT NULL COMMENT '课程图片',
  `course_mins` datetime DEFAULT NULL COMMENT '课程时间',
  `sourse_knob` int(11) NOT NULL DEFAULT '0' COMMENT '课程节',
  `c_url` varchar(255) CHARACTER SET utf8 COLLATE utf8_german2_ci DEFAULT NULL COMMENT '生成的url',
  `course_type_info` text CHARACTER SET utf8 COLLATE utf8_german2_ci COMMENT '课程描述',
  `up_time` datetime DEFAULT NULL,
  `click` bigint(20) DEFAULT '0' COMMENT '点击率',
  `order` int(11) NOT NULL DEFAULT '0',
  `vid` int(11) DEFAULT NULL,
  `vedio_url` varchar(255) COLLATE utf8_bin DEFAULT NULL COMMENT '视频地址',
  `is_del` int(1) DEFAULT '0' COMMENT '是否删除',
  `vedio_name` varchar(255) COLLATE utf8_bin DEFAULT NULL COMMENT '视频地址',
  PRIMARY KEY (`id`,`course_price`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

/*Data for the table `l_course` */

insert  into `l_course`(`id`,`uid`,`cat_id`,`type_id`,`click_id`,`course_name`,`course_type`,`course_type_seo_title`,`course_price`,`course_picture`,`course_mins`,`sourse_knob`,`c_url`,`course_type_info`,`up_time`,`click`,`order`,`vid`,`vedio_url`,`is_del`,`vedio_name`) values (1,1,1,1,2,'攀枝花实验小学数学','数学','攀枝花实验小学数学','12.00','/home/images/14673665481539.png','2016-07-27 05:00:00',9,NULL,'<img src=\"images/1468507179_3834.jpg\" alt=\"\" /> ',NULL,0,1,1,'http://www.baidu.com',0,'测试课程'),(2,1,2,1,5,'小学语文','语文','攀枝花实验小学语文','48.80','/home/images/14673665481539.png','2016-07-13 08:54:35',4,NULL,'<img src=\"images/1468507179_3834.jpg\" alt=\"\" /> ',NULL,0,2,2,'http://www.baidu.com',0,'语文视屏'),(3,1,3,1,11,'上海教育版 数学','数学','上海教育版 数学','0.00','/home/images/14625104188353.jpg',NULL,2,NULL,'<img src=\"images/1468507179_3834.jpg\" alt=\"\" /> ',NULL,0,0,0,'http://www.baidu.com',0,'数学视屏'),(4,1,4,3,1,'三年级下学期外研社 一年级起英语','英语','三年级下学期外研社 一年级起英语','0.00','/home/images/14673665481539.png',NULL,0,NULL,'<img src=\"images/1468507179_3834.jpg\" alt=\"\" /> ',NULL,0,0,0,'http://www.baidu.com',0,'英语视屏'),(5,1,5,3,1,'五年级下学期牛津译林版英语','英语','五年级下学期牛津译林版英语','0.00','/home/images/210.jpg',NULL,0,NULL,'<img src=\"images/1468507179_3834.jpg\" alt=\"\" /> ',NULL,0,0,0,'http://www.baidu.com',0,'英语视屏'),(6,1,6,3,0,'六年级下学期人教新版英语','英语','六年级下学期人教新版英语','0.00','/home/images/209.jpg',NULL,0,NULL,'<img src=\"images/1468507179_3834.jpg\" alt=\"\" /> ',NULL,0,0,0,'http://www.baidu.com',0,'英语视屏'),(7,1,7,4,0,'初中物理实验系列（一）','物理','初中物理实验系列（一）','0.00','/home/images/collection90.jpg',NULL,0,NULL,'<img src=\"images/1468507179_3834.jpg\" alt=\"\" /> ',NULL,0,0,0,'http://www.baidu.com',0,'物理视屏'),(8,1,8,4,0,'初中物理实验系列（二','物理','初中物理实验系列（二','0.00','/home/images/collection90.jpg',NULL,0,NULL,'<img src=\"images/1468507179_3834.jpg\" alt=\"\" /> ',NULL,0,0,0,'http://www.baidu.com',0,'数学视屏'),(9,1,9,5,0,'初中化学实验系列（一）','化学','初中化学实验系列（一）','0.00','/home/images/collection110.jpg',NULL,0,NULL,'<img src=\"images/1468507179_3834.jpg\" alt=\"\" /> ',NULL,0,0,0,'http://www.baidu.com',0,'化学视屏'),(10,1,10,2,0,'初中化学实验系列（一）','化学','初中化学实验系列（一）','0.00','/home/images/collection110.jpg',NULL,0,NULL,'<img src=\"images/1468507179_3834.jpg\" alt=\"\" /> ',NULL,0,0,0,'http://www.baidu.com',0,'化学视屏'),(11,1,11,6,0,'初中语法专项突破（一）','化学','初中语法专项突破（一）','0.00','/home/images/355131.jpg',NULL,0,NULL,'<img src=\"images/1468507179_3834.jpg\" alt=\"\" /> ',NULL,0,0,0,'http://www.baidu.com',0,'化学视屏'),(12,1,12,7,0,'初中语法专项突破（一）','英语','初中语法专项突破（一）','0.00','/home/images/350454.jpg',NULL,0,NULL,'<img src=\"images/1468507179_3834.jpg\" alt=\"\" /> ',NULL,0,0,0,'http://www.baidu.com',0,'数学视屏');

/*Table structure for table `l_course_move` */

DROP TABLE IF EXISTS `l_course_move`;

CREATE TABLE `l_course_move` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type_id` int(11) DEFAULT NULL,
  `uid` int(11) DEFAULT NULL,
  `cid` int(11) DEFAULT NULL,
  `info` text CHARACTER SET utf8,
  `course_name` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `course_type` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `course_title` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `play_url` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `size` int(11) DEFAULT '0',
  `click` int(10) unsigned DEFAULT '0',
  `create_time` datetime DEFAULT NULL,
  `end_time` datetime DEFAULT NULL,
  `update_time` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

/*Data for the table `l_course_move` */

insert  into `l_course_move`(`id`,`type_id`,`uid`,`cid`,`info`,`course_name`,`course_type`,`course_title`,`play_url`,`size`,`click`,`create_time`,`end_time`,`update_time`) values (1,1,1,1,'<img src=\"images/1468507179_3834.jpg\" alt=\"\" /> ','测试','数学','攀枝花实验小学数学 第一节课',NULL,13332132,0,'2016-07-20 16:24:14','2016-07-28 16:25:36','2016-07-30 16:24:20'),(2,1,1,1,'<img src=\"images/1468507179_3834.jpg\" alt=\"\" /> ','测试2','数学','攀枝花实验小学数学 第二节课',NULL,13332132,0,'2016-07-20 16:24:29','2016-07-28 16:25:40','2016-07-20 16:24:26'),(3,2,1,2,'<img src=\"images/1468507179_3834.jpg\" alt=\"\" /> ','语文','语文','攀枝花实验小学语文 第三节课',NULL,333333,0,'2016-07-25 10:27:22','2016-07-26 10:27:16','2016-07-26 10:27:19');

/*Table structure for table `l_coursetype` */

DROP TABLE IF EXISTS `l_coursetype`;

CREATE TABLE `l_coursetype` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type_id` int(11) DEFAULT NULL,
  `mid` int(11) DEFAULT NULL,
  `course_type` varchar(40) CHARACTER SET utf8 DEFAULT NULL COMMENT '栏目的名称',
  `course_type_title` varchar(40) CHARACTER SET utf8 DEFAULT NULL COMMENT '栏目的标题',
  `course_type_picture` text CHARACTER SET utf8 COMMENT '栏目图片的路径',
  `type_click` bigint(20) DEFAULT '0' COMMENT '栏目的点击率',
  `type_url` varchar(255) CHARACTER SET utf8 DEFAULT NULL COMMENT '栏目的url',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

/*Data for the table `l_coursetype` */

insert  into `l_coursetype`(`id`,`type_id`,`mid`,`course_type`,`course_type_title`,`course_type_picture`,`type_click`,`type_url`) values (1,1,1,'数学','攀枝花实验小学数学','/home/images/14673665481539.png',2,NULL),(2,2,1,'语文','攀枝花实验小学语文','/home/images/14673665481539.png',0,NULL),(3,1,1,'数学','上海教育版 数学','/home/images/14625104188353.jpg',3213,NULL),(4,3,1,'英语','三年级下学期外研社 一年级起英语','/home/images/211.jpg',0,NULL),(5,3,1,'英语','五年级下学期牛津译林版英语','/home/images/210.jpg',0,NULL),(6,3,1,'英语','六年级下学期人教新版英语','/home/images/209.jpg',2,NULL),(7,4,1,'物理','初中物理实验系列（一）','/home/images/collection90.jpg',24,NULL),(8,4,1,'物理','初中物理实验系列（二）','/home/images/collection91.jpg',0,NULL),(9,5,1,'化学','初中化学实验系列（一）','/home/images/collection110.jpg',4,NULL),(10,2,1,'语文','中考必备：初中古诗词详解','/home/images/360495.jpg',33,NULL),(11,6,1,'初中语法','初中语法专项突破（一）','/home/images/355131.jpg',44,NULL),(12,3,1,'英语','中考英语考点各个击破系列二---满分完型','/home/images/350454.jpg',2,NULL);

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
  `pid` int(11) DEFAULT NULL,
  `child` int(11) DEFAULT NULL,
  `recommend` int(10) DEFAULT '0',
  `order` int(11) NOT NULL DEFAULT '0',
  `del` int(1) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

/*Data for the table `l_nature_type` */

insert  into `l_nature_type`(`id`,`type_id`,`nature_type`,`pid`,`child`,`recommend`,`order`,`del`) values (1,1,'数学',0,0,0,0,0),(2,2,'语文',2,0,0,0,0),(3,3,'英语',0,0,0,0,0),(4,4,'物理',0,0,0,0,0),(5,5,'化学',0,0,0,0,0),(6,6,'初中语法',2,2,0,0,0),(7,7,'初中物理',4,2,0,0,0),(8,8,'其他',7,3,0,0,0),(10,10,'测试',2,2,0,0,0);

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
