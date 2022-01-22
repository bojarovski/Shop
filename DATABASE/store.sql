-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 22, 2022 at 09:07 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `store`
--

-- --------------------------------------------------------

--
-- Table structure for table `brand`
--

CREATE TABLE `brand` (
  `BrandId` int(11) NOT NULL,
  `brandName` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `brand`
--

INSERT INTO `brand` (`BrandId`, `brandName`) VALUES
(1, 'Nike');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `CategoryId` int(11) NOT NULL,
  `categoryName` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`CategoryId`, `categoryName`) VALUES
(1, 'Casual');

-- --------------------------------------------------------

--
-- Table structure for table `informations`
--

CREATE TABLE `informations` (
  `informationId` int(11) NOT NULL,
  `UserId` varchar(30) NOT NULL,
  `FirstName` varchar(30) NOT NULL,
  `LastName` varchar(30) NOT NULL,
  `Country` varchar(50) NOT NULL,
  `Addres1` varchar(50) NOT NULL,
  `Addres2` varchar(50) NOT NULL,
  `City` varchar(50) NOT NULL,
  `Phone` int(11) NOT NULL,
  `Zip` int(11) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `informations`
--

INSERT INTO `informations` (`informationId`, `UserId`, `FirstName`, `LastName`, `Country`, `Addres1`, `Addres2`, `City`, `Phone`, `Zip`, `email`) VALUES
(1, 'admin', 'mmmmmm', 'fcvctghvyu      ', 'Albania', 'Neue Amberger Straße', '44', 'Grafenwöhr', 2147483647, 92655, 'mariobojarovski1407@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `orderId` int(11) NOT NULL,
  `orderinfoId` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `SneakersId` int(11) NOT NULL,
  `Status` varchar(20) NOT NULL DEFAULT 'To Be Shipped'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`orderId`, `orderinfoId`, `username`, `date`, `SneakersId`, `Status`) VALUES
(162, 32, 'admin', '2022-01-22', 3, 'To Be Shipped'),
(163, 32, 'admin', '2022-01-22', 3, 'To Be Shipped'),
(164, 32, 'admin', '2022-01-22', 3, 'To Be Shipped'),
(165, 32, 'admin', '2022-01-22', 3, 'To Be Shipped');

-- --------------------------------------------------------

--
-- Table structure for table `ordersinfo`
--

CREATE TABLE `ordersinfo` (
  `ordersinfoId` int(11) NOT NULL,
  `informationId` int(11) NOT NULL,
  `UserId` varchar(50) NOT NULL,
  `FirstName` varchar(50) NOT NULL,
  `LastName` varchar(50) NOT NULL,
  `Country` varchar(50) NOT NULL,
  `Addres1` varchar(50) NOT NULL,
  `Addres2` varchar(50) NOT NULL,
  `City` varchar(30) NOT NULL,
  `Phone` int(11) NOT NULL,
  `Zip` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ordersinfo`
--

INSERT INTO `ordersinfo` (`ordersinfoId`, `informationId`, `UserId`, `FirstName`, `LastName`, `Country`, `Addres1`, `Addres2`, `City`, `Phone`, `Zip`, `email`, `message`) VALUES
(32, 1, 'admin', 'mmmmmm', 'fcvctghvyu       ', 'Albania', 'Neue Amberger Straße', '44', 'Grafenwöhr', 2147483647, 92655, 'mariobojarovski1407@gmail.com', '');

-- --------------------------------------------------------

--
-- Table structure for table `sneakers`
--

CREATE TABLE `sneakers` (
  `SneakersId` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Price` float NOT NULL,
  `Description` text NOT NULL,
  `Quantity` int(11) NOT NULL,
  `Photo` varchar(50) NOT NULL,
  `Photo2` varchar(50) NOT NULL,
  `Photo3` varchar(50) NOT NULL,
  `CategoryId` int(11) NOT NULL,
  `BrandId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sneakers`
--

INSERT INTO `sneakers` (`SneakersId`, `Name`, `Price`, `Description`, `Quantity`, `Photo`, `Photo2`, `Photo3`, `CategoryId`, `BrandId`) VALUES
(1, 'Air Force', 101.99, '\r\nLorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque rhoncus ultrices sem sit amet tincidunt. Nam ultricies eu urna quis varius. Suspendisse arcu urna, gravida in laoreet in, ullamcorper et arcu. Suspendisse lectus tortor, mollis eu odio sit amet, fermentum porttitor eros. Vivamus blandit pulvinar mauris. Sed dignissim, nisl vel tristique scelerisque, urna dolor egestas lectus, non imperdiet mi est at dolor. Nunc sed ligula eu lacus maximus varius. Morbi fermentum finibus neque id egestas. Curabitur posuere tristique condimentum. Ut ac erat vel nibh ornare pharetra sed id nibh. Fusce ac tempus dolor. In quis dapibus turpis. Vivamus posuere nunc et justo ornare, a tincidunt ex porta. Sed dapibus, augue et aliquet vestibulum, erat ante ullamcorper sapien, eget eleifend massa eros non ante. Fusce nec ex id dui dapibus dignissim eu posuere sem.', 10, 'img/product/air-force-1.png', 'img/product/air-force-1.2.png', 'img/product/air-force-1.3.png', 1, 1),
(3, 'Air Max 97', 175, 'dadasdasdasd', 100, 'img/product/air-max-97.png', 'img/product/air-max-97.1.png', 'img/product/air-max-97.2.png', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `temporder`
--

CREATE TABLE `temporder` (
  `tid` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `sneakerid` int(11) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `ID` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(40) NOT NULL,
  `email` varchar(100) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`ID`, `username`, `password`, `email`, `date`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin@admin.com', '2022-01-21');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `brand`
--
ALTER TABLE `brand`
  ADD PRIMARY KEY (`BrandId`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`CategoryId`);

--
-- Indexes for table `informations`
--
ALTER TABLE `informations`
  ADD PRIMARY KEY (`informationId`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`orderId`);

--
-- Indexes for table `ordersinfo`
--
ALTER TABLE `ordersinfo`
  ADD PRIMARY KEY (`ordersinfoId`);

--
-- Indexes for table `sneakers`
--
ALTER TABLE `sneakers`
  ADD PRIMARY KEY (`SneakersId`);

--
-- Indexes for table `temporder`
--
ALTER TABLE `temporder`
  ADD PRIMARY KEY (`tid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `brand`
--
ALTER TABLE `brand`
  MODIFY `BrandId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `informations`
--
ALTER TABLE `informations`
  MODIFY `informationId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `orderId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=169;

--
-- AUTO_INCREMENT for table `ordersinfo`
--
ALTER TABLE `ordersinfo`
  MODIFY `ordersinfoId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `sneakers`
--
ALTER TABLE `sneakers`
  MODIFY `SneakersId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `temporder`
--
ALTER TABLE `temporder`
  MODIFY `tid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
