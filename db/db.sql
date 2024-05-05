/*
SQLyog Community v13.1.8 (64 bit)
MySQL - 10.4.22-MariaDB : Database - gym
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`gym` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;

USE `gym`;

/*Table structure for table `admin` */

DROP TABLE IF EXISTS `admin`;

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  PRIMARY KEY (`admin_id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4;

/*Data for the table `admin` */

insert  into `admin`(`admin_id`,`name`,`email`,`password`) values 
(3,'kishor','kishor@gmail.com','kishor');

/*Table structure for table `admin_complaint` */

DROP TABLE IF EXISTS `admin_complaint`;

CREATE TABLE `admin_complaint` (
  `admin_complaint_id` int(11) NOT NULL AUTO_INCREMENT,
  `customer_name` varchar(100) NOT NULL,
  `customer_email` varchar(100) NOT NULL,
  `customer_phone` varchar(100) NOT NULL,
  `customer_message` varchar(255) NOT NULL,
  `reply` varchar(100) NOT NULL,
  PRIMARY KEY (`admin_complaint_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

/*Data for the table `admin_complaint` */

insert  into `admin_complaint`(`admin_complaint_id`,`customer_name`,`customer_email`,`customer_phone`,`customer_message`,`reply`) values 
(1,'kkk','123@gmail.com','2000072133','hie i have a suggestion','Pending'),
(2,'user','user@gmail.com','2000072133','HIE HOW ARE YOU','ok');

/*Table structure for table `booking` */

DROP TABLE IF EXISTS `booking`;

CREATE TABLE `booking` (
  `booking_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `user_email` varchar(100) NOT NULL,
  `trainee_id` int(11) NOT NULL,
  `gym_owner_id` int(11) NOT NULL,
  `gym_owner_email` varchar(100) NOT NULL,
  `booking_status` varchar(100) NOT NULL,
  `payment_status` varchar(100) NOT NULL,
  PRIMARY KEY (`booking_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

/*Data for the table `booking` */

insert  into `booking`(`booking_id`,`user_id`,`user_email`,`trainee_id`,`gym_owner_id`,`gym_owner_email`,`booking_status`,`payment_status`) values 
(1,1,'user@gmail.com',3,1,'owner@gmail.com','Approved','Paid');

/*Table structure for table `complaint` */

DROP TABLE IF EXISTS `complaint`;

CREATE TABLE `complaint` (
  `complaint_id` int(11) NOT NULL AUTO_INCREMENT,
  `owner_id` int(11) NOT NULL,
  `c_name` varchar(100) NOT NULL,
  `c_email` varchar(100) NOT NULL,
  `gym_email` varchar(100) NOT NULL,
  `c_phone` varchar(100) NOT NULL,
  `message` varchar(100) NOT NULL,
  `reply` varchar(100) NOT NULL,
  PRIMARY KEY (`complaint_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `complaint` */

/*Table structure for table `gym_details` */

DROP TABLE IF EXISTS `gym_details`;

CREATE TABLE `gym_details` (
  `details_id` int(11) NOT NULL AUTO_INCREMENT,
  `gym_id` int(100) NOT NULL,
  `gym_email` varchar(100) NOT NULL,
  `recent_photo` varchar(100) NOT NULL,
  `recent_details` varchar(100) NOT NULL,
  `recent_details_date` varchar(100) NOT NULL,
  `gallery1` varchar(100) NOT NULL,
  `gallery1_detail` varchar(100) NOT NULL,
  `gallery2` varchar(100) NOT NULL,
  `gallery2_detail` varchar(100) NOT NULL,
  `gallery3` varchar(100) NOT NULL,
  `gallery3_detail` varchar(100) NOT NULL,
  `trainee_logo` varchar(100) NOT NULL,
  `trainee_detail` varchar(100) NOT NULL,
  PRIMARY KEY (`details_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4;

/*Data for the table `gym_details` */

insert  into `gym_details`(`details_id`,`gym_id`,`gym_email`,`recent_photo`,`recent_details`,`recent_details_date`,`gallery1`,`gallery1_detail`,`gallery2`,`gallery2_detail`,`gallery3`,`gallery3_detail`,`trainee_logo`,`trainee_detail`) values 
(2,2,'owner2@gmail.com','1694693928.jpeg','We have recently added tread mills','2-Sept-2023','1694693928.jpeg','Monthly Plan is best for begineers','1694693928.jpeg','Monthly Plan is best for begineers','1694693928.jpeg','Monthly Plan is best for begineers','1694693928.png','Experienced Trainers...'),
(3,3,'owner3@gmail.com','1694604545.jpeg','Started New Yoga classes too..','13-Sep-2023','1694604545.jpeg','Monthly Plan is best for begineers','1694604545.jpeg','Monthly Plan is best for begineers','1694604545.jpeg','Monthly Plan is best for begineers','1694604545.png','Experienced Trainers'),
(4,4,'owner1@gmail.com','1694694567.jpeg','All New Sets of Dumbells','14-Sept-2023','1694694567.jpeg','Monthly Plan is best for begineers','1694694567.jpeg','if You are commited then you should go for annual plan','1694694567.jpeg','if you got any queries regarding anything feel free to call us...','1694694567.jpeg','Experienced Trainers'),
(5,0,'$email','$photo','$recent_details','$date','$photo1','$gallery1details','$photo2','$gallery2details','$photo3','$gallery3details','$photo4','$trainee_details'),
(6,5,'owner4@gmail.com','1694695382.jpeg','Got new Treadmills','13-Sept-2023','1694695382.jpeg','Monthly Plan is best for begineers','1694695382.jpeg','if You are commited tehn you should go for annual plan','1694695382.jpeg','24/7 call service available','1694695382.png','We have best trainers');

/*Table structure for table `gym_registration` */

DROP TABLE IF EXISTS `gym_registration`;

CREATE TABLE `gym_registration` (
  `gym_id` int(11) NOT NULL AUTO_INCREMENT,
  `owner_name` varchar(100) NOT NULL,
  `gym_name` varchar(100) NOT NULL,
  `location` varchar(100) NOT NULL,
  `gym_email` varchar(100) NOT NULL,
  `website` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `mobile` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `monthly_price` varchar(100) NOT NULL,
  `annual_price` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `gym_img` varchar(100) NOT NULL,
  `license` varchar(100) NOT NULL,
  `owner_type` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  PRIMARY KEY (`gym_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4;

/*Data for the table `gym_registration` */

insert  into `gym_registration`(`gym_id`,`owner_name`,`gym_name`,`location`,`gym_email`,`website`,`gender`,`mobile`,`address`,`description`,`monthly_price`,`annual_price`,`password`,`gym_img`,`license`,`owner_type`,`status`) values 
(2,'owner2','One More','Thrissur','owner2@gmail.com','www.owner2.com','Women','123456789','Thrissur,Mg Kavu,opp KILA Kerala -680581','Gymshark is a British fitness apparel and accessories manufacturer and retailer headquartered in Solihull, England. Founded in June 2012, Gymshark creates and distributes its own range of fitness wear.','700','8400','owner2','1694693787.jpeg','1694693787.jpeg','Owner','Approved'),
(3,'owner3','Gold Gym','thrissur','owner3@gmail.com','www.owner3.com','Both','1234567890','Thrissur,Mg Kavu,opp KILA Kerala -680581','A health club (also known as a fitness club, fitness center, health spa, weight room and commonly referred to as a gym) is a place that houses exercise equipment for the purpose of physical exercise. In recent years, the number of fitness and health services have increased, expanding the interest among the population. Today, health clubs and fitness centers are a reference of health services','500','6000','owner3','1694604086.jpeg','1694604086.jpeg','Owner','Approved'),
(4,'owner1','Silver Gym','Kerala','owner1@gmail.com','www.silvergym.com','Both','1234567890','Thrissur,Mg Kavu,opp KILA Kerala -680581','A Silver Gym (also known as a fitness club, fitness center, health spa, weight room and commonly referred to as a gym) is a place that houses exercise equipment for the purpose of physical exercise. In recent years, the number of fitness and health services have increased, expanding the interest among the population. Today, health clubs and fitness centers are a reference of health services','600','6600','owner1','1694693524.jpeg','1694693524.jpeg','Admin','Approved'),
(5,'owner4','Platinum Gym','Kerala','owner4@gmail.com','www.owner4.com','Men','1234567890','Thrissur,Mg Kavu,opp KILA Kerala -680581','Is it good to join gym? Going to a gym often results in you working harder and longer than if you were to exercise at home, where the sofa, TV and a nice cup of tea beckons. Additionally, having access to quality equipment and being around dedicated people gives you a more significant push to hit your own fitness goals','700','7000','owner4','1694693708.jpeg','1694693708.jpg','Admin','Approved');

/*Table structure for table `payment` */

DROP TABLE IF EXISTS `payment`;

CREATE TABLE `payment` (
  `payment_id` int(11) NOT NULL AUTO_INCREMENT,
  `owner_id` int(100) NOT NULL,
  `user_email` varchar(100) NOT NULL,
  `holder_name` varchar(100) NOT NULL,
  `card_no` varchar(100) NOT NULL,
  `exp_month` varchar(100) NOT NULL,
  `exp_year` varchar(100) NOT NULL,
  `cvv` varchar(100) NOT NULL,
  `amount` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  `plan` varchar(100) NOT NULL,
  PRIMARY KEY (`payment_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

/*Data for the table `payment` */

insert  into `payment`(`payment_id`,`owner_id`,`user_email`,`holder_name`,`card_no`,`exp_month`,`exp_year`,`cvv`,`amount`,`status`,`plan`) values 
(1,1,'user@gmail.com','user','123246897879','Jan','2024','252','500','Paid','Monthly');

/*Table structure for table `trainees` */

DROP TABLE IF EXISTS `trainees`;

CREATE TABLE `trainees` (
  `trainee_id` int(11) NOT NULL AUTO_INCREMENT,
  `gym_owner_id` int(11) NOT NULL,
  `trainee_name` varchar(100) NOT NULL,
  `qualification` varchar(100) NOT NULL,
  `experience` varchar(100) NOT NULL,
  `specialties` varchar(100) NOT NULL,
  `trainee_image` varchar(100) NOT NULL,
  `owner_email` varchar(100) NOT NULL,
  PRIMARY KEY (`trainee_id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4;

/*Data for the table `trainees` */

insert  into `trainees`(`trainee_id`,`gym_owner_id`,`trainee_name`,`qualification`,`experience`,`specialties`,`trainee_image`,`owner_email`) values 
(4,4,'trainee 1','diploma in fitness','8 years','body building','1694694358.jpeg','owner1@gmail.com'),
(5,4,'trainee 2','diploma in body building','10 years','yoga','1694694379.jpeg','owner1@gmail.com'),
(6,5,'trainee 33','diploma in body building','3 years','Fat Loss','1694695462.jpeg','owner4@gmail.com'),
(7,5,'trainee 4','diploma in fitness','5 years','cardiac,boxing','1694695490.jpeg','owner4@gmail.com'),
(8,2,'trainee 4','diploma in body building','2 years','body building','1694695610.jpeg','owner2@gmail.com'),
(9,2,'trainee 5','diploma in fitness','7years','cardiac,boxing','1694695634.jpeg','owner2@gmail.com'),
(10,3,'trainee 5','diploma in fitness','8 years','body building','1694695766.jpeg','owner3@gmail.com'),
(11,3,'trainee 6','diploma in body building','8 years','body building','1694695749.jpeg','owner3@gmail.com');

/*Table structure for table `user` */

DROP TABLE IF EXISTS `user`;

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4;

/*Data for the table `user` */

insert  into `user`(`user_id`,`username`,`email`,`phone`,`password`) values 
(1,'user','user@gmail.com','2000072133','123'),
(3,'user1','user1@gmail.com','2000072133','123'),
(4,'user2','user2@gmail.com','123456789','123'),
(5,'user3','user3@gmail.com','123456789','123');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
