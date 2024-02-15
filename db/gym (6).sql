-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3308
-- Generation Time: Sep 13, 2023 at 05:31 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gym`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `name`, `email`, `password`) VALUES
(3, 'kishor', 'kishor@gmail.com', 'kishor');

-- --------------------------------------------------------

--
-- Table structure for table `admin_complaint`
--

CREATE TABLE `admin_complaint` (
  `admin_complaint_id` int(11) NOT NULL,
  `customer_name` varchar(100) NOT NULL,
  `customer_email` varchar(100) NOT NULL,
  `customer_phone` varchar(100) NOT NULL,
  `customer_message` varchar(255) NOT NULL,
  `reply` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin_complaint`
--

INSERT INTO `admin_complaint` (`admin_complaint_id`, `customer_name`, `customer_email`, `customer_phone`, `customer_message`, `reply`) VALUES
(1, 'kkk', '123@gmail.com', '2000072133', 'hie i have a suggestion', 'Pending'),
(2, 'user', 'user@gmail.com', '2000072133', 'HIE HOW ARE YOU', 'ok');

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `booking_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `user_email` varchar(100) NOT NULL,
  `trainee_id` int(11) NOT NULL,
  `gym_owner_id` int(11) NOT NULL,
  `gym_owner_email` varchar(100) NOT NULL,
  `booking_status` varchar(100) NOT NULL,
  `payment_status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`booking_id`, `user_id`, `user_email`, `trainee_id`, `gym_owner_id`, `gym_owner_email`, `booking_status`, `payment_status`) VALUES
(1, 1, 'user@gmail.com', 3, 1, 'owner@gmail.com', 'Approved', 'Paid');

-- --------------------------------------------------------

--
-- Table structure for table `complaint`
--

CREATE TABLE `complaint` (
  `complaint_id` int(11) NOT NULL,
  `owner_id` int(11) NOT NULL,
  `c_name` varchar(100) NOT NULL,
  `c_email` varchar(100) NOT NULL,
  `gym_email` varchar(100) NOT NULL,
  `c_phone` varchar(100) NOT NULL,
  `message` varchar(100) NOT NULL,
  `reply` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `gym_details`
--

CREATE TABLE `gym_details` (
  `details_id` int(11) NOT NULL,
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
  `trainee_detail` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `gym_details`
--

INSERT INTO `gym_details` (`details_id`, `gym_id`, `gym_email`, `recent_photo`, `recent_details`, `recent_details_date`, `gallery1`, `gallery1_detail`, `gallery2`, `gallery2_detail`, `gallery3`, `gallery3_detail`, `trainee_logo`, `trainee_detail`) VALUES
(1, 1, 'owner@gmail.com', '1693551001.jpeg', 'Got new Treadmills', '1-Sept-2023', '1693551001.jpeg', 'Monthly Plan is best for begineers', '1693551001.jpeg', 'Monthly Plan is best for begineers', '1693551001.jpeg', 'Monthly Plan is best for begineers', '1694437244.png', 'We have best trainers'),
(2, 2, 'owner2@gmail.com', '1693551166.jpeg', 'We have recently added swimming pool too for Annual Plan', '2-Sept-2023', '1693551166.jpeg', 'Monthly Plan is best for begineers', '1693551166.jpeg', 'Monthly Plan is best for begineers', '1693551166.jpeg', 'Monthly Plan is best for begineers', '1693556037.jpeg', 'Experienced Trainers...'),
(3, 3, 'owner3@gmail.com', '1694604545.jpeg', 'Started New Yoga classes too..', '13-Sep-2023', '1694604545.jpeg', 'Monthly Plan is best for begineers', '1694604545.jpeg', 'Monthly Plan is best for begineers', '1694604545.jpeg', 'Monthly Plan is best for begineers', '1694604545.png', 'Experienced Trainers');

-- --------------------------------------------------------

--
-- Table structure for table `gym_registration`
--

CREATE TABLE `gym_registration` (
  `gym_id` int(11) NOT NULL,
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
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `gym_registration`
--

INSERT INTO `gym_registration` (`gym_id`, `owner_name`, `gym_name`, `location`, `gym_email`, `website`, `gender`, `mobile`, `address`, `description`, `monthly_price`, `annual_price`, `password`, `gym_img`, `license`, `owner_type`, `status`) VALUES
(1, 'owner', 'Gold Gym', 'Thrissur', 'owner@gmail.com', 'www.goldgym.com', 'Women', '1234567890', 'Thrissur,Mg Kavu,opp KILA Kerala -680581', 'A health club (also known as a fitness club, fitness center, health spa, weight room and commonly referred to as a gym) is a place that houses exercise equipment for the purpose of physical exercise. In recent years, the number of fitness and health services have increased, expanding the interest among the population. Today, health clubs and fitness centers are a reference of health services', '500', '6000', 'owner', '1692283738.jpeg', '1691411916.jpg', 'Admin', 'Approved'),
(2, 'owner2', 'Owner 2', 'Thrissur', 'owner2@gmail.com', 'www.owner2.com', 'Women', '123456789', 'Thrissur,Mg Kavu,opp KILA Kerala -680581', 'Gymshark is a British fitness apparel and accessories manufacturer and retailer headquartered in Solihull, England. Founded in June 2012, Gymshark creates and distributes its own range of fitness wear.', '700', '8400', 'owner2', '1691936542.jpeg', '1692020617.jpeg', 'Owner', 'Approved'),
(3, 'owner3', 'Gold Gym', 'thrissur', 'owner3@gmail.com', 'www.owner3.com', 'Both', '1234567890', 'Thrissur,Mg Kavu,opp KILA Kerala -680581', 'A health club (also known as a fitness club, fitness center, health spa, weight room and commonly referred to as a gym) is a place that houses exercise equipment for the purpose of physical exercise. In recent years, the number of fitness and health services have increased, expanding the interest among the population. Today, health clubs and fitness centers are a reference of health services', '500', '6000', 'owner3', '1694604086.jpeg', '1694604086.jpeg', 'Owner', 'Approved');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `payment_id` int(11) NOT NULL,
  `owner_id` int(100) NOT NULL,
  `user_email` varchar(100) NOT NULL,
  `holder_name` varchar(100) NOT NULL,
  `card_no` varchar(100) NOT NULL,
  `exp_month` varchar(100) NOT NULL,
  `exp_year` varchar(100) NOT NULL,
  `cvv` varchar(100) NOT NULL,
  `amount` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  `plan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`payment_id`, `owner_id`, `user_email`, `holder_name`, `card_no`, `exp_month`, `exp_year`, `cvv`, `amount`, `status`, `plan`) VALUES
(1, 1, 'user@gmail.com', 'user', '123246897879', 'Jan', '2024', '252', '500', 'Paid', 'Monthly');

-- --------------------------------------------------------

--
-- Table structure for table `trainees`
--

CREATE TABLE `trainees` (
  `trainee_id` int(11) NOT NULL,
  `gym_owner_id` int(11) NOT NULL,
  `trainee_name` varchar(100) NOT NULL,
  `qualification` varchar(100) NOT NULL,
  `experience` varchar(100) NOT NULL,
  `specialties` varchar(100) NOT NULL,
  `trainee_image` varchar(100) NOT NULL,
  `owner_email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `trainees`
--

INSERT INTO `trainees` (`trainee_id`, `gym_owner_id`, `trainee_name`, `qualification`, `experience`, `specialties`, `trainee_image`, `owner_email`) VALUES
(1, 1, 'trainee 1', 'diploma in fitness', '8 years', 'body building', '1694618644.jpeg', 'owner@gmail.com'),
(2, 1, 'trainee 2', 'diploma in body building', '10 years', 'yoga', '1694618681.jpeg', 'owner@gmail.com'),
(3, 1, 'trainee 3', 'diploma in body building..', '3 years', 'cardiac,boxing', '1694618710.jpeg', 'owner@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `username`, `email`, `phone`, `password`) VALUES
(1, 'user', 'user@gmail.com', '2000072133', '123'),
(3, 'user1', 'user1@gmail.com', '2000072133', '123'),
(4, 'user2', 'user2@gmail.com', '123456789', '123'),
(5, 'user3', 'user3@gmail.com', '123456789', '123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `admin_complaint`
--
ALTER TABLE `admin_complaint`
  ADD PRIMARY KEY (`admin_complaint_id`);

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`booking_id`);

--
-- Indexes for table `complaint`
--
ALTER TABLE `complaint`
  ADD PRIMARY KEY (`complaint_id`);

--
-- Indexes for table `gym_details`
--
ALTER TABLE `gym_details`
  ADD PRIMARY KEY (`details_id`);

--
-- Indexes for table `gym_registration`
--
ALTER TABLE `gym_registration`
  ADD PRIMARY KEY (`gym_id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`payment_id`);

--
-- Indexes for table `trainees`
--
ALTER TABLE `trainees`
  ADD PRIMARY KEY (`trainee_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `admin_complaint`
--
ALTER TABLE `admin_complaint`
  MODIFY `admin_complaint_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `booking_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `complaint`
--
ALTER TABLE `complaint`
  MODIFY `complaint_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `gym_details`
--
ALTER TABLE `gym_details`
  MODIFY `details_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `gym_registration`
--
ALTER TABLE `gym_registration`
  MODIFY `gym_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `payment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `trainees`
--
ALTER TABLE `trainees`
  MODIFY `trainee_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
