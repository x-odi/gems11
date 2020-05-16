-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 16, 2020 at 10:29 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gems11`
--

-- --------------------------------------------------------

--
-- Table structure for table `reg`
--

CREATE TABLE `reg` (
  `UserName` varchar(20) NOT NULL,
  `Email` varchar(35) NOT NULL,
  `CompanyName` varchar(40) NOT NULL,
  `Mobile` int(10) NOT NULL,
  `pass1` varchar(20) NOT NULL,
  `ID` int(5) NOT NULL,
  `vKey` varchar(50) NOT NULL,
  `CvKey` enum('0','1') NOT NULL,
  `CrateDate` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `reg`
--

INSERT INTO `reg` (`UserName`, `Email`, `CompanyName`, `Mobile`, `pass1`, `ID`, `vKey`, `CvKey`, `CrateDate`) VALUES
('emad', 'x-odi@hotmail.com', 'الدكتور.', 559515110, '', 9, '', '0', '2020-05-16 07:13:07'),
('ww', 'emad.faisal@gems-ksa.com', 'Mr', 2147483647, '', 10, '', '0', '2020-05-16 07:13:07'),
('2qad', 'al@ems-ksa.com', 'Mhrxd', 951310, '', 11, '', '0', '2020-05-16 07:13:07'),
('wqf', '2@g.b', 'ewds', 2342, '', 12, '', '0', '2020-05-16 07:13:07'),
('wqf', '2@g.b', 'ewds', 2342, '', 13, '', '0', '2020-05-16 07:13:07'),
('asx', 'x-odi@hotmail.com', 'KAU/GEMS', 2147483647, '', 14, '', '0', '2020-05-16 07:13:07'),
('asx', 'x-odi@hotmail.com', 'KAU/GEMS', 2147483647, '', 15, '', '0', '2020-05-16 07:13:07'),
('wqfew', 'emad.faisal@gems-ksa.com', 'Mr', 2147483647, '', 16, '', '0', '2020-05-16 07:13:07'),
('emad', 'emad.faisal@gems-ksa.com', 'Mr', 2147483647, '', 17, '', '0', '2020-05-16 07:13:07'),
('emad', 'emad.faisal@gems-ksa.com', 'Mr', 2147483647, '', 18, '', '0', '2020-05-16 07:13:07'),
('emad', 'emad.faisal@gems-ksa.com', 'Mr', 2147483647, '', 19, '', '0', '2020-05-16 07:13:07'),
('emad', 'emad.faisal@gems-ksa.com', 'Mr', 2147483647, '', 20, '', '0', '2020-05-16 07:13:07'),
('emad', 'emad.faisal@gems-ksa.com', 'Mr', 2147483647, '', 21, '', '0', '2020-05-16 07:13:07'),
('emadas', 'a@Q.j', 'qwsa', 559515110, 'wsaz', 22, '', '0', '2020-05-16 07:13:07'),
('ahmad', 'a@a.a', 'AAA', 122333, '1qaz', 23, '', '0', '2020-05-16 07:13:07'),
('', '', '', 0, '', 24, '', '0', '2020-05-16 07:13:07'),
('q', 'q@q.q', 'q', 0, 'q', 25, '', '0', '2020-05-16 07:13:07'),
('shadi', 'shadifaisal.sf1@gmail.com', 'shadi', 552446490, 'zxc', 26, '', '0', '2020-05-16 07:13:07'),
('z', 'z@z.z', 'z', 1, 'z', 27, '', '0', '2020-05-16 07:13:07'),
('z', 'z@z.z', 'z', 1, 'z', 28, '', '0', '2020-05-16 07:13:07'),
('z', 'z@z.z', 'z', 534, '000', 29, '', '0', '2020-05-16 07:13:07'),
('z1', 'z1@z.z', 'z1', 5341, 'z1', 30, '', '0', '2020-05-16 07:13:07'),
('omar', 'O@O.O', 'O', 0, 'O', 31, '', '0', '2020-05-16 07:13:07'),
('e', 'e@Qa.A', 'wqs', 213, '1qaz', 32, '', '0', '2020-05-16 07:13:07'),
('kkk', 'k@k.k', 'k', 6, '1qaz2wsx', 33, '', '0', '2020-05-16 07:13:07'),
('fff', 'f@f.f', 'ff', 222, '1qaz', 34, '', '0', '2020-05-16 07:18:54'),
('mon', 'm@o.n', 'mon', 1111, 'mon', 35, '', '0', '2020-05-16 07:20:20'),
('nnn', 'n@n.n', '21qw', 2121, '202cb962ac59075b964b', 36, '', '0', '2020-05-16 07:26:24'),
('vvvv', 'x-odi@hotmail.com', 'الدكتور.', 559515110, '202cb962ac59075b964b', 37, '', '0', '2020-05-16 07:29:43'),
('husin', 'x-odi@hotmail.com', 'الدكتور.', 559515110, 'a3aca2964e72000eea4c', 38, '07cc694b9b3fc636710fa08b6922c42bhusin', '0', '2020-05-16 07:39:04'),
('B', 'x.odi.110@gmail.com', 'Bbb', 5454, '202cb962ac59075b964b', 39, '07cc694b9b3fc636710fa08b6922c42bB', '0', '2020-05-16 07:42:01'),
('hhh', 'x-odi@hotmail.com', 'الدكتور.', 559515110, '123', 40, '', '0', '2020-05-16 07:47:13'),
('dd', '1@d.d', 'ddd', 55, 'dd', 41, '', '', '2020-05-16 07:58:13'),
('dd', '1@d.d', 'ddd', 55, 'dd', 42, '', '', '2020-05-16 07:58:33');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `reg`
--
ALTER TABLE `reg`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `reg`
--
ALTER TABLE `reg`
  MODIFY `ID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
