-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 14, 2023 at 07:48 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_jobboard`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_apply`
--

CREATE TABLE `tbl_apply` (
  `id` int(100) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `message` varchar(50) NOT NULL,
  `file` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL,
  `userid` int(50) NOT NULL,
  `jobid` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_apply`
--

INSERT INTO `tbl_apply` (`id`, `name`, `email`, `date`, `message`, `file`, `status`, `userid`, `jobid`) VALUES
(1, 'Joyal', 'joyal@gmail.com', '2023-12-14', 'I am excellent for this job', '../Admin/images/pexels-sam-kolder-2387873.png', '1', 4, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_cmpreg`
--

CREATE TABLE `tbl_cmpreg` (
  `id` int(100) NOT NULL,
  `cmpname` varchar(110) NOT NULL,
  `cmpemail` varchar(50) NOT NULL,
  `cmpheadq` varchar(50) NOT NULL,
  `cmppass` varchar(200) NOT NULL,
  `status` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_cmpreg`
--

INSERT INTO `tbl_cmpreg` (`id`, `cmpname`, `cmpemail`, `cmpheadq`, `cmppass`, `status`) VALUES
(1, 'Crudop', 'crudops@gmail.com', 'Mumbai', '123', 1),
(2, 'Bighead', 'bigheads@gmail.com', 'Hyderabad ', '456', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_login`
--

CREATE TABLE `tbl_login` (
  `id` int(100) NOT NULL,
  `uname` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `category` varchar(100) NOT NULL,
  `cmp_id` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_login`
--

INSERT INTO `tbl_login` (`id`, `uname`, `password`, `category`, `cmp_id`) VALUES
(1, 'admin', 'admin12', 'admin', 0),
(2, 'Crudop', '123', 'company', 1),
(3, 'Bighead', '456', 'company', 2),
(4, 'Joyal ', '741', 'user', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_post`
--

CREATE TABLE `tbl_post` (
  `id` int(100) NOT NULL,
  `jobtitle` varchar(50) NOT NULL,
  `jobreg` varchar(50) NOT NULL,
  `jobtype` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `jobdes` varchar(500) NOT NULL,
  `cmp_id` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_post`
--

INSERT INTO `tbl_post` (`id`, `jobtitle`, `jobreg`, `jobtype`, `date`, `jobdes`, `cmp_id`) VALUES
(1, 'Android Developer', 'Andorra', 'Full Time', '2024-01-02', ' An Android Developer is a Software Developer who specializes in designing applications for the Android marketplace. The Android marketplace is the direct competitor to Apples app store. This means most of an Android Developers job revolves around creating the apps we use on our smartphones and tablets.', 2),
(2, 'Mobile Developers', 'Antigua and Barbuda', 'Full Time', '2023-12-21', '  A mobile developer is a professional software engineer who specialises in designing, building, and maintaining applications for mobile devices. They leverage their expertise in programming languages such as Java, Swift, or Flutter to code and create apps for your Android or iPhone (more on this later)', 3);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_reg`
--

CREATE TABLE `tbl_reg` (
  `id` int(100) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_reg`
--

INSERT INTO `tbl_reg` (`id`, `name`, `email`, `password`) VALUES
(1, 'Joyal ', 'joyal@gmail.com', '741');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_apply`
--
ALTER TABLE `tbl_apply`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_cmpreg`
--
ALTER TABLE `tbl_cmpreg`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_login`
--
ALTER TABLE `tbl_login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_post`
--
ALTER TABLE `tbl_post`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_reg`
--
ALTER TABLE `tbl_reg`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_apply`
--
ALTER TABLE `tbl_apply`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_cmpreg`
--
ALTER TABLE `tbl_cmpreg`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_login`
--
ALTER TABLE `tbl_login`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_post`
--
ALTER TABLE `tbl_post`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_reg`
--
ALTER TABLE `tbl_reg`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
