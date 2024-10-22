-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 13, 2024 at 06:16 PM
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
  `p_id` int(255) NOT NULL,
  `p_aadhar` int(255) NOT NULL,
  `p_name` varchar(255) NOT NULL,
  `p_dob` varchar(100) NOT NULL,
  `p_address` varchar(255) NOT NULL,
  `p_state` varchar(255) NOT NULL,
  `p_city` varchar(255) NOT NULL,
  `p_email` varchar(255) NOT NULL,
  `p_mobile` int(255) NOT NULL,
  `p_gender` varchar(255) NOT NULL,
  `p_hemoglobin_value` varchar(100) NOT NULL,
  `p_hemoglobin_unit` varchar(100) NOT NULL,
  `p_hemoglobin_range` varchar(100) NOT NULL,
  `p_blood_group_value` varchar(100) NOT NULL,
  `p_blood_group_unit` varchar(100) NOT NULL,
  `p_blood_group_range` varchar(100) NOT NULL,
  `p_blood_pressure_value` varchar(100) NOT NULL,
  `p_blood_pressure_unit` varchar(100) NOT NULL,
  `p_blood_pressure_range` varchar(100) NOT NULL,
  `p_heart_rate_value` varchar(100) NOT NULL,
  `p_heart_rate_unit` varchar(100) NOT NULL,
  `p_heart_rate_range` varchar(100) NOT NULL,
  `p_weight_value` varchar(100) NOT NULL,
  `p_weight_unit` varchar(100) NOT NULL,
  `p_weight_range` varchar(100) NOT NULL,
  `p_fasting_blood_value` varchar(100) NOT NULL,
  `p_fasting_blood_unit` varchar(100) NOT NULL,
  `p_fasting_blood_range` varchar(100) NOT NULL,
  `p_blood_cbc_value` varchar(100) NOT NULL,
  `p_blood_cbc_unit` varchar(100) NOT NULL,
  `p_blood_cbc_range` varchar(100) NOT NULL,
  `p_urin_value` varchar(100) NOT NULL,
  `p_urin_unit` varchar(100) NOT NULL,
  `p_urin_range` varchar(100) NOT NULL,
  `p_serum_value` varchar(100) NOT NULL,
  `p_serum_unit` varchar(100) NOT NULL,
  `p_serum_range` varchar(100) NOT NULL,
  `p_lipid_profit_value` varchar(100) NOT NULL,
  `p_lipid_profit_unit` varchar(100) NOT NULL,
  `p_lipid_profit_range` varchar(100) NOT NULL,
  `p_tsh_value` varchar(100) NOT NULL,
  `p_tsh_unit` varchar(100) NOT NULL,
  `p_tsh_range` varchar(100) NOT NULL,
  `p_sgpt_value` varchar(100) NOT NULL,
  `p_sgpt_unit` varchar(100) NOT NULL,
  `p_sgpt_range` varchar(100) NOT NULL,
  `p_platelet_value` varchar(100) NOT NULL,
  `p_platelet_unit` varchar(100) NOT NULL,
  `p_platelet_range` varchar(100) NOT NULL,
  `p_hiv_value` varchar(100) NOT NULL,
  `p_hiv_unit` varchar(100) NOT NULL,
  `p_hiv_range` varchar(100) NOT NULL,
  `p_chronic_disease_value` varchar(100) NOT NULL,
  `p_chronic_disease_unit` varchar(100) NOT NULL,
  `p_chronic_disease_range` varchar(100) NOT NULL,
  `p_history_previous_value` varchar(100) NOT NULL,
  `p_history_previous_unit` varchar(100) NOT NULL,
  `p_history_previous_range` varchar(100) NOT NULL,
  `p_vaccination_value` varchar(100) NOT NULL,
  `p_vaccination_unit` varchar(100) NOT NULL,
  `p_vaccination_range` varchar(100) NOT NULL,
  `p_present_medication_value` varchar(100) NOT NULL,
  `p_present_medication_unit` varchar(100) NOT NULL,
  `p_present_medication_range` varchar(100) NOT NULL,
  `d_file` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`p_id`, `p_aadhar`, `p_name`, `p_dob`, `p_address`, `p_state`, `p_city`, `p_email`, `p_mobile`, `p_gender`, `p_hemoglobin_value`, `p_hemoglobin_unit`, `p_hemoglobin_range`, `p_blood_group_value`, `p_blood_group_unit`, `p_blood_group_range`, `p_blood_pressure_value`, `p_blood_pressure_unit`, `p_blood_pressure_range`, `p_heart_rate_value`, `p_heart_rate_unit`, `p_heart_rate_range`, `p_weight_value`, `p_weight_unit`, `p_weight_range`, `p_fasting_blood_value`, `p_fasting_blood_unit`, `p_fasting_blood_range`, `p_blood_cbc_value`, `p_blood_cbc_unit`, `p_blood_cbc_range`, `p_urin_value`, `p_urin_unit`, `p_urin_range`, `p_serum_value`, `p_serum_unit`, `p_serum_range`, `p_lipid_profit_value`, `p_lipid_profit_unit`, `p_lipid_profit_range`, `p_tsh_value`, `p_tsh_unit`, `p_tsh_range`, `p_sgpt_value`, `p_sgpt_unit`, `p_sgpt_range`, `p_platelet_value`, `p_platelet_unit`, `p_platelet_range`, `p_hiv_value`, `p_hiv_unit`, `p_hiv_range`, `p_chronic_disease_value`, `p_chronic_disease_unit`, `p_chronic_disease_range`, `p_history_previous_value`, `p_history_previous_unit`, `p_history_previous_range`, `p_vaccination_value`, `p_vaccination_unit`, `p_vaccination_range`, `p_present_medication_value`, `p_present_medication_unit`, `p_present_medication_range`, `d_file`) VALUES
(41, 89899, 'Shubham Verma ', '2024-10-26', 'Khalghat', 'Madhya Pradesh', 'Dhar', 'shubham666verma@gmail.com', 2147483647, '', '5', 'md', '6565', 'O -ve', '2', '-3', '865', '-3', '3', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'uploads/qrcode/Shubham Verma.png'),
(46, 343, 'Shubham Verma', '2024-10-22', 'Khalghat', 'Madhya Pradesh', 'Dhar', 'shubham666verma@gmail.com', 2147483647, 'Male', '1', '%', '33-51', 'O -ve', '22', '', '2', 'mmHg', '', '3', 'BPM', '', '4', 'kg', '', '5', ' mmol/L', '', '6', 'fL', '', '7', 'mOsm/kg', '', '8', 'mg/dL', '', '9', 'mg/dL', '', '10', 'mg/dL', '', '11', 'U/L', '', '12', 'fl', '6.5-12.0', '13', 'copies/mL', '', '14', '-2', '', '15', '51', '', '16', '12', '', '17', 'cc', '', 'uploads/qrcode/Shubham Verma.png');

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
  MODIFY `p_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `user_table`
--
ALTER TABLE `user_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
