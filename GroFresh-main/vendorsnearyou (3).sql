-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 10, 2022 at 01:08 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vendorsnearyou`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `adminid` varchar(15) NOT NULL,
  `email` varchar(30) DEFAULT NULL,
  `password` varchar(18) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`adminid`, `email`, `password`) VALUES
('Shailen@883', 'shailendra883@gmail.com', 'Shailen@883');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `messageid` int(30) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `subject` varchar(50) NOT NULL,
  `message` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`messageid`, `name`, `email`, `subject`, `message`) VALUES
(4, 'Bhavya', 'bhavyasharma@gmail.com', 'Grocery complain', 'The packet was not sealed'),
(7, 'Bhavya', 'bhavyasharma@gmail.com', 'Grocery complain', 'hbhkbjlk');

-- --------------------------------------------------------

--
-- Table structure for table `customerregister`
--

CREATE TABLE `customerregister` (
  `Sno` int(100) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phonenumber` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customerregister`
--

INSERT INTO `customerregister` (`Sno`, `firstname`, `lastname`, `email`, `phonenumber`, `password`) VALUES
(4, 'Deepanshi', 'Dixit', 'Deepanshidixit@gmail.com', '9438164725', 'DD@427'),
(8, 'Shailendra', 'Mukati', 'shailendramukati11@gmail.com', '8480197324', 'Shailen@123'),
(11, 'Kiran', 'sharma', 'kiran12@gmail.com', '912343232323', '1234abc'),
(12, 'Suresh', 'Mishra', 'suresh123@gmail.com', '6370312910', '123abc'),
(13, 'Pratikshya', 'Panigrahi', 'pratikshyapanigrahi66@gmail.com', '6370312910', 'Poppy123');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `orderid` int(20) NOT NULL,
  `orderdate` date NOT NULL,
  `amount` varchar(20) NOT NULL,
  `username` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`orderid`, `orderdate`, `amount`, `username`) VALUES
(1, '2022-06-07', '230', 'pratikshyapanigrahi6'),
(2, '2022-06-07', '55', 'pratikshyapanigrahi6'),
(3, '2022-06-09', '55', 'pratikshyapanigrahi66@gmail.com'),
(4, '2022-06-09', '100', 'pratikshyapanigrahi66@gmail.com'),
(5, '2022-06-10', '40', 'pratikshyapanigrahi66@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `p_id` bigint(20) NOT NULL,
  `p_name` varchar(30) NOT NULL,
  `pcategory` varchar(100) NOT NULL,
  `p_desc` varchar(100) NOT NULL,
  `price` int(10) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`p_id`, `p_name`, `pcategory`, `p_desc`, `price`, `image`) VALUES
(63, 'Orange', 'fruitsveggies', 'Fine Quality Fruits', 80, 'orange_342874121.jpg'),
(67, 'Potato', 'fruitsveggies', 'Fine Quality Vegetables', 40, '61yXL70-RaL._SX679_.jpg'),
(68, 'Cauliflower', 'fruitsveggies', 'Fine Quality Vegetables', 60, 'istockphoto-511868689-612x612.jpg'),
(69, 'Tomato', 'fruitsveggies', 'Fine Quality Vegetables', 30, 'download.jfif'),
(73, 'Apple', 'fruitsveggies', 'Fine Quality Fruits', 100, 'apple-500x500.jpg'),
(74, 'Mango', 'fruitsveggies', 'Fine Quality Fruits', 150, '1256.750@2x.jpg'),
(75, 'Tata Salt', 'grocery', 'iodised salt', 15, 'tata-iodised-salt-1-kg-product-images-o490000073-p490000073-0-202203170554.jpg'),
(76, '50-50 Biscuit Combo', 'grocery', 'pack of 2', 40, '50 50 set of 2-800x800.jpg'),
(77, 'Paneer', 'dairyproducts', 'cow milk paneer', 50, 'fresh-paneer-500x500.jpg'),
(78, 'Butter', 'dairyproducts', '', 70, 'butter_137866427.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `seller`
--

CREATE TABLE `seller` (
  `sellerid` int(100) NOT NULL,
  `sfname` varchar(100) NOT NULL,
  `slname` varchar(100) NOT NULL,
  `susername` varchar(100) NOT NULL,
  `semail` varchar(100) NOT NULL,
  `sphone` varchar(100) NOT NULL,
  `sshopname` varchar(100) NOT NULL,
  `sshopcategory` varchar(100) NOT NULL,
  `sstreet` varchar(100) NOT NULL,
  `scity` varchar(100) NOT NULL,
  `sstate` varchar(100) NOT NULL,
  `scountry` varchar(100) NOT NULL,
  `spincode` int(12) NOT NULL,
  `spassword` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `seller`
--

INSERT INTO `seller` (`sellerid`, `sfname`, `slname`, `susername`, `semail`, `sphone`, `sshopname`, `sshopcategory`, `sstreet`, `scity`, `sstate`, `scountry`, `spincode`, `spassword`) VALUES
(1006, 'Ramesh', 'Mishra', 'Ramesh123', 'Ramesh123@gmail.com', '8875621343', 'Sabji mandi', 'fruitsveggies', 'Vaibhav nagar', 'Vellore', 'Tamil Nadu', 'India', 632014, 'Ramesh123'),
(1007, 'Kavita', 'Singh', 'Kavita123', 'kavita123@gmail.com', '9438164725', 'Kavita Kirana store', 'grocery', 'Chittur nagar', 'Vellore', 'Tamil Nadu', 'India', 632016, 'Kavita123'),
(1008, 'Mahesh', 'Babu', 'Mahesh123', 'Mahesh123@gmail.com', '8876459011', 'Mahesh Grocery', 'grocery', 'Vaibhav nagar', 'Vellore', 'Tamil Nadu', 'India', 632245, 'Mahesh123'),
(1009, 'Suresh', 'Nath', 'Suresh123', 'suresh@gmail.com', '7768432590', 'Dairyday', 'dairyproducts', 'Laxminagar', 'Vellore', 'Tamil Nadu', 'India', 675434, 'Suresh123'),
(1010, 'Kiran', 'Chand', 'Kiran56', 'Kiranchand56@gmail.com', '8876905467', 'natural farm', 'dairyproducts', 'Gouri street', 'Chennai', 'Tamil Nadu', 'India', 765012, 'Kiran123'),
(1011, 'Rajan', 'Das', 'Rajan23', 'Rajan23@gmail.com', '7765334590', 'Groceurs', 'grocery', 'Sahid nagar', 'Chennai', 'Tamil Nadu', 'India', 765123, 'Rajan123'),
(1014, 'Deepti', 'Roula', 'Deepti33', 'Deepti@gmail.com', '6523459900', 'Daily Dairy', 'dairyproducts', 'Gouri street', 'Chennai', 'Tamil Nadu', 'India', 760213, 'Deepti@23'),
(1015, 'Shanti', 'Priya', 'Shanti45', 'shantipriya@gmail.com', '9436722340', 'Tasty Green', 'fruitsveggies', 'Ramnagar', 'Chennai', 'Tamil Nadu', 'India', 761234, 'Shanti@123'),
(1016, 'Rishi', 'Kumar', 'Rishi99', 'Rishi99@gmail.com', '9437955610', 'Grand stores', 'grocery', 'Gandhi lane', 'Bengaluru', 'Karnataka', 'India', 662314, 'Rishi123'),
(1018, 'Suman', 'mandal', 'Suman33', 'Suman33@gmail.com', '7656124350', 'Fresh For you', 'fruitsveggies', 'gokul street', 'Bengaluru', 'Bengaluru', 'India', 632200, 'Suman@123'),
(1022, 'Shakti', 'Singh', 'Shakti123', 'Shakti123@gmail.com', '6370312910', 'shaktistore', 'dairyproducts', 'new street', 'Vellore', 'Tamil Nadu', 'India', 313001, 'shakti123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`adminid`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`messageid`);

--
-- Indexes for table `customerregister`
--
ALTER TABLE `customerregister`
  ADD PRIMARY KEY (`Sno`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`orderid`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `seller`
--
ALTER TABLE `seller`
  ADD PRIMARY KEY (`sellerid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `messageid` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `customerregister`
--
ALTER TABLE `customerregister`
  MODIFY `Sno` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `orderid` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `p_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;

--
-- AUTO_INCREMENT for table `seller`
--
ALTER TABLE `seller`
  MODIFY `sellerid` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1023;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
