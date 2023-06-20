-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 11, 2021 at 06:14 AM
-- Server version: 5.7.23-23
-- PHP Version: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `avykewmy_shri_krishna_admin_panel`
--

-- --------------------------------------------------------

--
-- Table structure for table `account_master`
--

CREATE TABLE `account_master` (
  `entity_id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `account_no` varchar(255) DEFAULT NULL,
  `account_head_name` varchar(255) DEFAULT NULL,
  `ladger_group` varchar(255) DEFAULT NULL,
  `inventory_effected` int(11) DEFAULT NULL,
  `gst_applicable` int(11) DEFAULT NULL,
  `account_created_date` varchar(255) DEFAULT NULL,
  `account_created_by` varchar(255) DEFAULT NULL,
  `status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `product_master`
--

CREATE TABLE `product_master` (
  `entity_id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `gold_18_c_price` varchar(255) DEFAULT NULL,
  `gold_22_c_price` varchar(255) DEFAULT NULL,
  `gold_24_c_price` varchar(255) DEFAULT NULL,
  `silver_ornaments` varchar(255) DEFAULT NULL,
  `date` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_master`
--

INSERT INTO `product_master` (`entity_id`, `user_id`, `gold_18_c_price`, `gold_22_c_price`, `gold_24_c_price`, `silver_ornaments`, `date`) VALUES
(1, 6, '37320', '45170', '48360', '630.00.', '2021-10-10');

-- --------------------------------------------------------

--
-- Table structure for table `user_login`
--

CREATE TABLE `user_login` (
  `entity_id` int(11) NOT NULL,
  `first_name` varchar(255) DEFAULT NULL,
  `middle_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `full_name` varchar(255) DEFAULT NULL,
  `company_name` varchar(255) DEFAULT NULL,
  `company_logo` varchar(255) DEFAULT NULL,
  `contact_number` varchar(55) DEFAULT NULL,
  `alternate_contact_number` varchar(55) DEFAULT NULL,
  `email_id` varchar(255) DEFAULT NULL,
  `address` text,
  `gst_applicable` int(11) DEFAULT NULL,
  `gst_number` varchar(255) DEFAULT NULL,
  `user_name` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `caesar_cypher_password` varchar(255) DEFAULT NULL,
  `user_id` varchar(255) DEFAULT NULL,
  `activation_start_date` varchar(55) DEFAULT NULL,
  `activation_end_date` varchar(55) DEFAULT NULL,
  `account_holder_name` text,
  `user_bank_name` varchar(500) DEFAULT NULL,
  `user_bank_address` text,
  `user_account_number` varchar(255) DEFAULT NULL,
  `user_bank_ifsc_code` varchar(255) DEFAULT NULL,
  `user_digital_sign` varchar(255) DEFAULT NULL,
  `user_digital_stamp` varchar(255) DEFAULT NULL,
  `financial_year_start_date` varchar(255) DEFAULT NULL,
  `activation_status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_login`
--

INSERT INTO `user_login` (`entity_id`, `first_name`, `middle_name`, `last_name`, `full_name`, `company_name`, `company_logo`, `contact_number`, `alternate_contact_number`, `email_id`, `address`, `gst_applicable`, `gst_number`, `user_name`, `password`, `caesar_cypher_password`, `user_id`, `activation_start_date`, `activation_end_date`, `account_holder_name`, `user_bank_name`, `user_bank_address`, `user_account_number`, `user_bank_ifsc_code`, `user_digital_sign`, `user_digital_stamp`, `financial_year_start_date`, `activation_status`) VALUES
(6, 'Deepak', '.', 'Patil', 'Shri Krishna Jewellers', 'Shri Krishna Jewellers', NULL, '9890199339', NULL, 'sales@safety-world.in', NULL, 1, NULL, 'admin', '7c4a8d09ca3762af61e59520943dc26494f8941b', '123456', 'VB/2020-21/0006', '2021-04-16', '2021-06-15', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account_master`
--
ALTER TABLE `account_master`
  ADD PRIMARY KEY (`entity_id`);

--
-- Indexes for table `product_master`
--
ALTER TABLE `product_master`
  ADD PRIMARY KEY (`entity_id`);

--
-- Indexes for table `user_login`
--
ALTER TABLE `user_login`
  ADD PRIMARY KEY (`entity_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `account_master`
--
ALTER TABLE `account_master`
  MODIFY `entity_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product_master`
--
ALTER TABLE `product_master`
  MODIFY `entity_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user_login`
--
ALTER TABLE `user_login`
  MODIFY `entity_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
