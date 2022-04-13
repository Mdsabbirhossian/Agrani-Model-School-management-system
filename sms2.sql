-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 24, 2018 at 10:42 AM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sms3`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(128) NOT NULL,
  `fname` varchar(128) CHARACTER SET latin1 NOT NULL,
  `lname` varchar(128) CHARACTER SET latin1 NOT NULL,
  `username` varchar(128) CHARACTER SET latin1 NOT NULL,
  `password` varchar(128) CHARACTER SET latin1 NOT NULL,
  `email` varchar(100) CHARACTER SET latin1 NOT NULL,
  `role` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `fname`, `lname`, `username`, `password`, `email`, `role`) VALUES
(1, 'john', 'john', 'john', 'john', '', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `alumni`
--

CREATE TABLE `alumni` (
  `student_id` int(11) NOT NULL,
  `sirname` varchar(50) CHARACTER SET latin1 NOT NULL,
  `firstname` varchar(50) CHARACTER SET latin1 NOT NULL,
  `lastname` varchar(50) CHARACTER SET latin1 NOT NULL,
  `idno` varchar(50) CHARACTER SET latin1 NOT NULL,
  `dateofbirth` varchar(50) CHARACTER SET latin1 NOT NULL,
  `gender` varchar(10) CHARACTER SET latin1 NOT NULL,
  `country_id` int(20) NOT NULL,
  `county_id` int(50) NOT NULL,
  `constituency_id` int(50) NOT NULL,
  `mobile` varchar(50) CHARACTER SET latin1 NOT NULL,
  `email` varchar(50) CHARACTER SET latin1 NOT NULL,
  `address` varchar(50) CHARACTER SET latin1 NOT NULL,
  `zipcode` varchar(50) CHARACTER SET latin1 NOT NULL,
  `course_id` int(50) NOT NULL,
  `intake_id` int(10) NOT NULL,
  `reg_date` varchar(50) CHARACTER SET latin1 NOT NULL,
  `feepayable` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `border`
--

CREATE TABLE `border` (
  `status_id` varchar(20) NOT NULL,
  `stutus_name` varchar(20) NOT NULL,
  `amount` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `cert`
--

CREATE TABLE `cert` (
  `cert_id` int(11) NOT NULL,
  `admission_number` int(11) NOT NULL,
  `description` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `companyinfo`
--

CREATE TABLE `companyinfo` (
  `auto` int(11) NOT NULL,
  `cname` varchar(50) CHARACTER SET latin1 NOT NULL,
  `cbox` varchar(50) NOT NULL,
  `cemail` varchar(50) CHARACTER SET latin1 NOT NULL,
  `ccontact` varchar(50) CHARACTER SET latin1 NOT NULL,
  `clocation` varchar(50) CHARACTER SET latin1 NOT NULL,
  `clogo` longblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `constituency`
--

CREATE TABLE `constituency` (
  `constituency_id` int(11) NOT NULL,
  `county_id` int(11) NOT NULL,
  `constituencyname` varchar(100) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `counties`
--

CREATE TABLE `counties` (
  `county_id` int(11) NOT NULL,
  `countyname` varchar(50) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

CREATE TABLE `countries` (
  `country_id` int(11) NOT NULL,
  `countryname` varchar(50) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `course_id` int(50) NOT NULL,
  `department_id` int(50) NOT NULL,
  `coursename` varchar(50) CHARACTER SET latin1 NOT NULL,
  `exambody` varchar(50) CHARACTER SET latin1 NOT NULL,
  `duration` varchar(50) CHARACTER SET latin1 NOT NULL,
  `feepayable` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `deletedstudents`
--

CREATE TABLE `deletedstudents` (
  `student_id` int(11) NOT NULL,
  `sirname` varchar(50) CHARACTER SET latin1 NOT NULL,
  `firstname` varchar(50) CHARACTER SET latin1 NOT NULL,
  `lastname` varchar(50) CHARACTER SET latin1 NOT NULL,
  `idno` varchar(50) CHARACTER SET latin1 NOT NULL,
  `dateofbirth` varchar(50) CHARACTER SET latin1 NOT NULL,
  `gender` varchar(10) CHARACTER SET latin1 NOT NULL,
  `country_id` varchar(20) CHARACTER SET latin1 NOT NULL,
  `county_id` varchar(50) CHARACTER SET latin1 NOT NULL,
  `constituency_id` varchar(50) CHARACTER SET latin1 NOT NULL,
  `mobile` varchar(50) CHARACTER SET latin1 NOT NULL,
  `email` varchar(50) CHARACTER SET latin1 NOT NULL,
  `address` varchar(50) CHARACTER SET latin1 NOT NULL,
  `zipcode` varchar(50) CHARACTER SET latin1 NOT NULL,
  `course_id` varchar(50) CHARACTER SET latin1 NOT NULL,
  `intake_id` varchar(10) CHARACTER SET latin1 NOT NULL,
  `reg_date` varchar(50) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE `departments` (
  `department_id` int(11) NOT NULL,
  `departmentname` varchar(50) CHARACTER SET latin1 NOT NULL,
  `hod` varchar(50) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `discount`
--

CREATE TABLE `discount` (
  `dis_id` int(11) NOT NULL,
  `dis_prc` text CHARACTER SET latin1 NOT NULL,
  `dis_val` text CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `displinary_case`
--

CREATE TABLE `displinary_case` (
  `displine_id` int(11) NOT NULL,
  `admission_number` varchar(20) NOT NULL,
  `date_c` varchar(20) NOT NULL,
  `displine_case` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `expence`
--

CREATE TABLE `expence` (
  `expence_id` int(11) NOT NULL,
  `expence_date` varchar(50) CHARACTER SET latin1 NOT NULL,
  `description` varchar(200) CHARACTER SET latin1 NOT NULL,
  `expence_amount` varchar(50) CHARACTER SET latin1 NOT NULL,
  `captured_by` varchar(50) CHARACTER SET latin1 NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `fee`
--

CREATE TABLE `fee` (
  `reciept` int(11) NOT NULL,
  `method` varchar(50) CHARACTER SET latin1 NOT NULL,
  `refno` varchar(50) CHARACTER SET latin1 NOT NULL,
  `admission_number` varchar(50) NOT NULL,
  `tdate` varchar(50) CHARACTER SET latin1 NOT NULL,
  `course_id` varchar(50) NOT NULL,
  `term_id` varchar(50) NOT NULL,
  `amount` int(50) NOT NULL,
  `captured_by` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `genderset`
--

CREATE TABLE `genderset` (
  `gender_id` int(11) NOT NULL,
  `gendername` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `inventory`
--

CREATE TABLE `inventory` (
  `asset_id` int(11) NOT NULL,
  `asset_code` varchar(100) CHARACTER SET latin1 NOT NULL,
  `date_purchased` varchar(100) CHARACTER SET latin1 NOT NULL,
  `estimated_value` varchar(50) NOT NULL,
  `location` varchar(100) CHARACTER SET latin1 NOT NULL,
  `mode_make` varchar(100) CHARACTER SET latin1 NOT NULL,
  `purchase_price` varchar(50) NOT NULL,
  `serial_number` varchar(100) CHARACTER SET latin1 NOT NULL,
  `asset_condition` varchar(50) CHARACTER SET latin1 NOT NULL,
  `quantity` varchar(50) NOT NULL,
  `order_number` varchar(50) NOT NULL,
  `active` varchar(50) CHARACTER SET latin1 NOT NULL,
  `reason_for_disposing` varchar(100) NOT NULL,
  `updated_by` varchar(100) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `manage_termly_fee`
--

CREATE TABLE `manage_termly_fee` (
  `course_id` int(11) NOT NULL,
  `term_id` int(11) NOT NULL,
  `amount` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `marks`
--

CREATE TABLE `marks` (
  `admission_number` varchar(20) NOT NULL,
  `course_id` int(11) NOT NULL,
  `term` varchar(50) CHARACTER SET latin1 NOT NULL,
  `year` int(11) NOT NULL,
  `exam_series` varchar(50) CHARACTER SET latin1 NOT NULL,
  `FBM` int(11) NOT NULL,
  `R_SERVICE` int(11) NOT NULL,
  `CT_PB` int(11) NOT NULL,
  `FOOD_SCIENCE` int(11) NOT NULL,
  `FUNDAMENTALS` int(11) NOT NULL,
  `FRONT_OFFICE` int(11) NOT NULL,
  `COMUNICATION_SKILLS` int(11) NOT NULL,
  `COSTING` int(11) NOT NULL,
  `HOUSEKEEPING` int(11) NOT NULL,
  `FB_PRACTICAL` int(11) NOT NULL,
  `average` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `packages_marks`
--

CREATE TABLE `packages_marks` (
  `admission_number` varchar(20) NOT NULL,
  `course_id` int(11) NOT NULL,
  `term` varchar(50) CHARACTER SET latin1 NOT NULL,
  `year` int(11) NOT NULL,
  `INTRODUCTION_TO_COMPUTERS` int(11) NOT NULL,
  `MS_WINDOWS` int(11) NOT NULL,
  `MS_EXCEL` int(11) NOT NULL,
  `MS_ACCESS` int(11) NOT NULL,
  `MS_PUBLISHER` int(11) NOT NULL,
  `MS_POWERPOINT` int(11) NOT NULL,
  `MS_WORD` int(11) NOT NULL,
  `INTERNET_AND_EMAIL` int(11) NOT NULL,
  `average` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `parents`
--

CREATE TABLE `parents` (
  `parent_id` int(11) NOT NULL,
  `admission_number` varchar(50) NOT NULL,
  `psirname` varchar(50) CHARACTER SET latin1 NOT NULL,
  `pfirstname` varchar(50) CHARACTER SET latin1 NOT NULL,
  `plastname` varchar(50) CHARACTER SET latin1 NOT NULL,
  `pmobile` varchar(20) CHARACTER SET latin1 NOT NULL,
  `prelationship` varchar(50) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `staff_id` int(11) NOT NULL,
  `sirname` varchar(50) CHARACTER SET latin1 NOT NULL,
  `firstname` varchar(50) CHARACTER SET latin1 NOT NULL,
  `lastname` varchar(50) CHARACTER SET latin1 NOT NULL,
  `idno` varchar(50) CHARACTER SET latin1 NOT NULL,
  `dateofbirth` varchar(50) CHARACTER SET latin1 NOT NULL,
  `gender` varchar(10) CHARACTER SET latin1 NOT NULL,
  `country_id` int(20) NOT NULL,
  `county_id` int(50) NOT NULL,
  `constituency_id` int(50) NOT NULL,
  `mobile` varchar(50) CHARACTER SET latin1 NOT NULL,
  `email` varchar(50) CHARACTER SET latin1 NOT NULL,
  `address` varchar(50) CHARACTER SET latin1 NOT NULL,
  `zipcode` varchar(50) CHARACTER SET latin1 NOT NULL,
  `doa` varchar(50) NOT NULL,
  `kra` varchar(50) NOT NULL,
  `nssf` varchar(50) CHARACTER SET latin1 NOT NULL,
  `nhif` varchar(11) NOT NULL,
  `roles` varchar(100) NOT NULL,
  `tsc` varchar(50) NOT NULL,
  `department_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `studentstable`
--

CREATE TABLE `studentstable` (
  `student_id` int(11) NOT NULL,
  `admission_number` varchar(100) NOT NULL,
  `sirname` varchar(50) CHARACTER SET latin1 NOT NULL,
  `firstname` varchar(50) CHARACTER SET latin1 NOT NULL,
  `lastname` varchar(50) CHARACTER SET latin1 NOT NULL,
  `idno` varchar(50) CHARACTER SET latin1 NOT NULL,
  `dateofbirth` varchar(50) CHARACTER SET latin1 NOT NULL,
  `gender` varchar(10) CHARACTER SET latin1 NOT NULL,
  `country_id` int(20) NOT NULL,
  `county_id` int(50) NOT NULL,
  `constituency_id` int(50) NOT NULL,
  `mobile` varchar(50) CHARACTER SET latin1 NOT NULL,
  `email` varchar(50) CHARACTER SET latin1 NOT NULL,
  `address` varchar(50) CHARACTER SET latin1 NOT NULL,
  `zipcode` varchar(50) CHARACTER SET latin1 NOT NULL,
  `course_id` int(50) NOT NULL,
  `reg_date` varchar(50) CHARACTER SET latin1 NOT NULL,
  `border` varchar(20) NOT NULL,
  `feepayable` int(11) NOT NULL,
  `emergency_contact` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `term`
--

CREATE TABLE `term` (
  `term_id` int(11) NOT NULL,
  `termname` varchar(50) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `trial`
--

CREATE TABLE `trial` (
  `idno` int(50) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `salary` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `alumni`
--
ALTER TABLE `alumni`
  ADD PRIMARY KEY (`student_id`),
  ADD UNIQUE KEY `mobile` (`mobile`) USING BTREE,
  ADD UNIQUE KEY `email_2` (`email`),
  ADD KEY `email` (`email`),
  ADD KEY `course_id` (`course_id`) USING BTREE,
  ADD KEY `course_id_2` (`course_id`),
  ADD KEY `county_id` (`county_id`),
  ADD KEY `constituency_id` (`constituency_id`),
  ADD KEY `intake_id` (`intake_id`);

--
-- Indexes for table `border`
--
ALTER TABLE `border`
  ADD PRIMARY KEY (`status_id`);

--
-- Indexes for table `cert`
--
ALTER TABLE `cert`
  ADD PRIMARY KEY (`cert_id`);

--
-- Indexes for table `companyinfo`
--
ALTER TABLE `companyinfo`
  ADD PRIMARY KEY (`auto`);

--
-- Indexes for table `constituency`
--
ALTER TABLE `constituency`
  ADD PRIMARY KEY (`constituency_id`),
  ADD KEY `county_id` (`county_id`);

--
-- Indexes for table `counties`
--
ALTER TABLE `counties`
  ADD PRIMARY KEY (`county_id`);

--
-- Indexes for table `countries`
--
ALTER TABLE `countries`
  ADD PRIMARY KEY (`country_id`);

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`course_id`),
  ADD UNIQUE KEY `coursename` (`coursename`),
  ADD KEY `department_id` (`department_id`);

--
-- Indexes for table `deletedstudents`
--
ALTER TABLE `deletedstudents`
  ADD PRIMARY KEY (`student_id`);

--
-- Indexes for table `departments`
--
ALTER TABLE `departments`
  ADD PRIMARY KEY (`department_id`),
  ADD UNIQUE KEY `departmentname` (`departmentname`);

--
-- Indexes for table `discount`
--
ALTER TABLE `discount`
  ADD PRIMARY KEY (`dis_id`);

--
-- Indexes for table `displinary_case`
--
ALTER TABLE `displinary_case`
  ADD PRIMARY KEY (`displine_id`);

--
-- Indexes for table `expence`
--
ALTER TABLE `expence`
  ADD PRIMARY KEY (`expence_id`);

--
-- Indexes for table `fee`
--
ALTER TABLE `fee`
  ADD PRIMARY KEY (`reciept`),
  ADD UNIQUE KEY `refno` (`refno`),
  ADD KEY `student_id` (`admission_number`),
  ADD KEY `course_id` (`course_id`),
  ADD KEY `term_id` (`term_id`);

--
-- Indexes for table `genderset`
--
ALTER TABLE `genderset`
  ADD PRIMARY KEY (`gender_id`);

--
-- Indexes for table `inventory`
--
ALTER TABLE `inventory`
  ADD PRIMARY KEY (`asset_id`,`asset_code`);

--
-- Indexes for table `manage_termly_fee`
--
ALTER TABLE `manage_termly_fee`
  ADD PRIMARY KEY (`course_id`,`term_id`),
  ADD KEY `course_id` (`course_id`),
  ADD KEY `term_id` (`term_id`);

--
-- Indexes for table `marks`
--
ALTER TABLE `marks`
  ADD UNIQUE KEY `student_id_2` (`admission_number`,`course_id`,`term`,`year`,`exam_series`),
  ADD KEY `course_id` (`course_id`),
  ADD KEY `student_id` (`admission_number`);

--
-- Indexes for table `packages_marks`
--
ALTER TABLE `packages_marks`
  ADD UNIQUE KEY `student_id_2` (`admission_number`,`course_id`,`term`,`year`),
  ADD KEY `course_id` (`course_id`),
  ADD KEY `student_id` (`admission_number`);

--
-- Indexes for table `parents`
--
ALTER TABLE `parents`
  ADD PRIMARY KEY (`parent_id`),
  ADD UNIQUE KEY `student_id` (`admission_number`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`staff_id`),
  ADD KEY `county_id` (`county_id`),
  ADD KEY `constituency_id` (`constituency_id`),
  ADD KEY `intake_id` (`kra`),
  ADD KEY `department_id` (`department_id`);

--
-- Indexes for table `studentstable`
--
ALTER TABLE `studentstable`
  ADD PRIMARY KEY (`student_id`),
  ADD UNIQUE KEY `admission_number` (`admission_number`),
  ADD KEY `course_id` (`course_id`) USING BTREE,
  ADD KEY `course_id_2` (`course_id`),
  ADD KEY `county_id` (`county_id`),
  ADD KEY `constituency_id` (`constituency_id`);

--
-- Indexes for table `term`
--
ALTER TABLE `term`
  ADD PRIMARY KEY (`term_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(128) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `alumni`
--
ALTER TABLE `alumni`
  MODIFY `student_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `cert`
--
ALTER TABLE `cert`
  MODIFY `cert_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `companyinfo`
--
ALTER TABLE `companyinfo`
  MODIFY `auto` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `constituency`
--
ALTER TABLE `constituency`
  MODIFY `constituency_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `counties`
--
ALTER TABLE `counties`
  MODIFY `county_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `countries`
--
ALTER TABLE `countries`
  MODIFY `country_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `course_id` int(50) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `deletedstudents`
--
ALTER TABLE `deletedstudents`
  MODIFY `student_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `departments`
--
ALTER TABLE `departments`
  MODIFY `department_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `discount`
--
ALTER TABLE `discount`
  MODIFY `dis_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `displinary_case`
--
ALTER TABLE `displinary_case`
  MODIFY `displine_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `expence`
--
ALTER TABLE `expence`
  MODIFY `expence_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;
--
-- AUTO_INCREMENT for table `fee`
--
ALTER TABLE `fee`
  MODIFY `reciept` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `genderset`
--
ALTER TABLE `genderset`
  MODIFY `gender_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `inventory`
--
ALTER TABLE `inventory`
  MODIFY `asset_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `parents`
--
ALTER TABLE `parents`
  MODIFY `parent_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `staff_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `studentstable`
--
ALTER TABLE `studentstable`
  MODIFY `student_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `term`
--
ALTER TABLE `term`
  MODIFY `term_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `constituency`
--
ALTER TABLE `constituency`
  ADD CONSTRAINT `constituency_ibfk_1` FOREIGN KEY (`county_id`) REFERENCES `counties` (`county_id`) ON UPDATE CASCADE;

--
-- Constraints for table `course`
--
ALTER TABLE `course`
  ADD CONSTRAINT `course_ibfk_1` FOREIGN KEY (`department_id`) REFERENCES `departments` (`department_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `fee`
--
ALTER TABLE `fee`
  ADD CONSTRAINT `fee_ibfk_1` FOREIGN KEY (`admission_number`) REFERENCES `studentstable` (`admission_number`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `manage_termly_fee`
--
ALTER TABLE `manage_termly_fee`
  ADD CONSTRAINT `manage_termly_fee_ibfk_1` FOREIGN KEY (`course_id`) REFERENCES `course` (`course_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `manage_termly_fee_ibfk_2` FOREIGN KEY (`term_id`) REFERENCES `term` (`term_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `marks`
--
ALTER TABLE `marks`
  ADD CONSTRAINT `marks_ibfk_3` FOREIGN KEY (`admission_number`) REFERENCES `studentstable` (`admission_number`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `parents`
--
ALTER TABLE `parents`
  ADD CONSTRAINT `parents_ibfk_1` FOREIGN KEY (`admission_number`) REFERENCES `studentstable` (`admission_number`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `staff`
--
ALTER TABLE `staff`
  ADD CONSTRAINT `staff_ibfk_1` FOREIGN KEY (`department_id`) REFERENCES `departments` (`department_id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `staff_ibfk_2` FOREIGN KEY (`constituency_id`) REFERENCES `constituency` (`constituency_id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `staff_ibfk_3` FOREIGN KEY (`county_id`) REFERENCES `counties` (`county_id`) ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
