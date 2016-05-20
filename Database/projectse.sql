-- phpMyAdmin SQL Dump
-- version 4.5.0.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 20, 2016 at 10:02 AM
-- Server version: 10.0.17-MariaDB
-- PHP Version: 5.6.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `projectse`
--

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `ProductID` int(10) NOT NULL,
  `ProductName` varchar(20) NOT NULL,
  `Price` varchar(10) NOT NULL,
  `Quantity` varchar(5) NOT NULL,
  `ProductType` varchar(30) NOT NULL,
  `PictureURL` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`ProductID`, `ProductName`, `Price`, `Quantity`, `ProductType`, `PictureURL`) VALUES
(1, ' Winny Collagen ', ' 19.99 ', ' 5 ', 'DietarySupplement', ' http://s19.postimg.org/u9y1wxcvn/winny1.png '),
(2, 'ARITAUM STYLE POP BR', '15', '20', 'Cosmetics_Eye&EyeBrow', 'http://s19.postimg.org/o6l2qrbzn/ARITAUM_STYLE_POP_BROW_MASCARA_6_05.jpg'),
(4, 'DINOPLATZ HIGH LINE ', '10', '10', 'Cosmetics_Eye&EyeBrow', 'http://s19.postimg.org/8mdp081v7/DINOPLATZ_HIGH_LINE_Eye_liner_14_65.png'),
(5, 'ETUDE HOUSE BLING ME', '8', '10', 'Cosmetics_Eye&EyeBrow', 'http://s19.postimg.org/rz4l6hrhv/ETUDE_HOUSE_BLING_ME_PRISM_EYES_EYE_LINER_EYE_S.jpg'),
(6, 'ETUDE HOUSE BLING ME', '7', '5', 'Cosmetics_Eye&EyeBrow', 'http://s19.postimg.org/lmu1aedtf/ETUDE_HOUSE_BLING_ME_PRISM_LOOK_AT_MY_EYES_JEWEL.jpg'),
(7, 'ETUDE_LASH_PERM_3_ST', '10', '10', 'Cosmetics_Eye&EyeBrow', 'http://s19.postimg.org/dilx5nreb/ETUDE_LASH_PERM_3_STEP_VOLUMCARA_MASCARA_11_75.jpg'),
(8, '3D_VOLUME_FACE_SECRE', '10', '20', 'Cosmetics_Faces', 'http://s19.postimg.org/3mku60lmb/3_D_VOLUME_FACE_SECRET_MULTI_STICK_16_70.jpg'),
(9, 'ARITAUM_FULL_COVER_B', '15', '20', 'Cosmetics_Faces', 'http://s19.postimg.org/c6483rtyr/ARITAUM_FULL_COVER_BB_CREAM_15_06.jpg'),
(10, 'ESPOIR_PRO_TAILOR_LI', '42', '12', 'Cosmetics_Faces', 'http://s19.postimg.org/gye1f7omr/ESPOIR_PRO_TAILOR_LIQUID_FOUNDATION_EX_42_61.png'),
(11, 'A PIEU PURE TINT LIP', '25', '10', 'Cosmetics_Lips&Cheek', 'http://s19.postimg.org/3vievxyer/A_PIEU_PURE_TINT_LIPGLOSS_TINT.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `Email` varchar(30) NOT NULL,
  `Password` varchar(30) NOT NULL,
  `TitleName` varchar(30) NOT NULL,
  `FirstName` varchar(30) NOT NULL,
  `LastName` varchar(30) NOT NULL,
  `DOB` date NOT NULL,
  `Address` varchar(50) NOT NULL,
  `Phone` varchar(10) NOT NULL,
  `Type` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`Email`, `Password`, `TitleName`, `FirstName`, `LastName`, `DOB`, `Address`, `Phone`, `Type`) VALUES
('amit2506@hotmail.com', 'amit2506', 'Mr.', 'Nopanan', 'Pongitthidej', '1994-06-25', '8/39', '0851579559', 'admin'),
('goodboy_nook@hotmail.co.th', ' nookzaa55+ ', ' Mr. ', ' Pongsapak ', ' Naewpanich', '1994-11-21', ' KMUTT ', ' 081854116', 'customer'),
('iigd@hotmail.co.th', 'prae1812', 'Ms.', 'Chawannuch', 'Maitrikul', '1994-12-18', 'Yala', '0836520839', 'customer'),
('pingpong__jia@hotmail.com', ' pingpong ', ' Ms. ', ' Oratai ', ' Jiarasiripinyo', '1995-06-23', ' Jai House ', ' 087343399', 'customer');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`ProductID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`Email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `ProductID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
