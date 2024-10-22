-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 14, 2024 at 09:21 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nagrath_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE `patient` (
  `p_id` int(11) NOT NULL,
  `p_name` varchar(25) NOT NULL,
  `p_dob` date NOT NULL,
  `p_address` varchar(40) NOT NULL,
  `p_state` varchar(20) NOT NULL,
  `p_city` varchar(20) NOT NULL,
  `p_email` varchar(25) NOT NULL,
  `p_mobile` bigint(10) NOT NULL,
  `p_hemoglobin` varchar(25) NOT NULL,
  `p_blood_pressure` varchar(20) NOT NULL,
  `p_blood_group` varchar(20) NOT NULL,
  `p_heart_rate` varchar(20) NOT NULL,
  `p_weight` int(10) NOT NULL,
  `p_fasting_blood` varchar(20) NOT NULL,
  `p_blood_cbc` varchar(20) NOT NULL,
  `p_urin` varchar(25) NOT NULL,
  `p_serum` varchar(20) NOT NULL,
  `p_lipid_profit` varchar(20) NOT NULL,
  `p_tsh` varchar(20) NOT NULL,
  `p_sgpt` varchar(20) NOT NULL,
  `p_platelet` varchar(20) NOT NULL,
  `p_hiv` varchar(20) NOT NULL,
  `p_chronic_disease` varchar(20) NOT NULL,
  `p_gender` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`p_id`, `p_name`, `p_dob`, `p_address`, `p_state`, `p_city`, `p_email`, `p_mobile`, `p_hemoglobin`, `p_blood_pressure`, `p_blood_group`, `p_heart_rate`, `p_weight`, `p_fasting_blood`, `p_blood_cbc`, `p_urin`, `p_serum`, `p_lipid_profit`, `p_tsh`, `p_sgpt`, `p_platelet`, `p_hiv`, `p_chronic_disease`, `p_gender`) VALUES
(10, 'Shubham Verma', '2024-07-09', 'Khalghat', 'Madhya Pradesh', 'Dhar', 'shubham666verma@gmail.com', 7697682666, ' saa', 'sdas', 'AB +ve', 'aas', 50, 'dsdsas', 'xzx', '', 'sdsdsd', 'qwer', 'sjasl', 'kds;d', 'fekle', 'sjals', 'ghhghg', 'male'),
(11, 'Shubham Verma', '2024-07-17', 'Khalghat', 'Madhya Pradesh', 'Dhar', 'shubham666verma@gmail.com', 7697682666, ' kqjwlql', 'dasdasdas', 'A -ve', 'sdasdas', 60, 'sjdasda', 'asdasjak', '', 'hk s ashads', 'sasnsn', 'asasda', 'sklasl', 'wipqwiepqw', 'sjals', 'ghhghg', 'male');

-- --------------------------------------------------------

--
-- Table structure for table `user_table`
--

CREATE TABLE `user_table` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `confirm_password` varchar(255) NOT NULL,
  `updated_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_table`
--

INSERT INTO `user_table` (`id`, `name`, `email`, `password`, `confirm_password`, `updated_at`) VALUES
(1, 'admin', 'admin', 'admin', 'admin', '2024-07-12');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `user_table`
--
ALTER TABLE `user_table`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `patient`
--
ALTER TABLE `patient`
  MODIFY `p_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `user_table`
--
ALTER TABLE `user_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
