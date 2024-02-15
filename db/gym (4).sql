-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 22, 2023 at 05:34 PM
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
(3, 'kishor', 'kishor@gmail.com', 'kishor'),
(7, 'user', 'user@gmail.com', '123');

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
  `gallery3_detail` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `gym_details`
--

INSERT INTO `gym_details` (`details_id`, `gym_id`, `gym_email`, `recent_photo`, `recent_details`, `recent_details_date`, `gallery1`, `gallery1_detail`, `gallery2`, `gallery2_detail`, `gallery3`, `gallery3_detail`) VALUES
(1, 2, 'owner2@gmail.com', '1692023220.jpeg', 'Got new Treadmills', '12-jan-2023', '1692023220.jpeg', 'Monthly Plan is best for begineers', '1692023220.jpeg', 'if You are commited then you should go for annual plan', '1692023220.jpeg', 'if you got any queries regarding anything feel free to call us...'),
(2, 1, 'owner@gmail.com', '1692620941.jpeg', 'We have recently added swimming pool too for Annual Plan..', '12-Aug-2023', '1692620941.jpeg', 'Now monthly plan is cheapest from ever.', '1692620941.jpeg', 'Now monthly plan is cheapest from ever.', '1692620941.jpeg', 'Now monthly plan is cheapest from ever.');

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
(2, 'owner2 active', 'Owner 2', 'Thrissur', 'owner2@gmail.com', 'www.owner2.com', 'Women', '123456789', 'Thrissur,Mg Kavu,opp KILA Kerala -680581', 'Gymshark is a British fitness apparel and accessories manufacturer and retailer headquartered in Solihull, England. Founded in June 2012, Gymshark creates and distributes its own range of fitness wear.', '700', '8400', 'owner2', '1691936542.jpeg', '1692020617.jpeg', 'Owner', 'Approved');

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
(7, 1, 'user@gmail.com', 'user', '123456789', 'Jan', '2023', '123', '500', 'Paid', 'Monthly');

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
(2, 'user', 'user@gmail.com', '2000072133', '456');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

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
-- AUTO_INCREMENT for table `gym_details`
--
ALTER TABLE `gym_details`
  MODIFY `details_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `gym_registration`
--
ALTER TABLE `gym_registration`
  MODIFY `gym_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `payment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
