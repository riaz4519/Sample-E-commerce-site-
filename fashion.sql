-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 06, 2016 at 02:14 AM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fashion`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `cat_name` varchar(250) NOT NULL,
  `image` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `cat_name`, `image`) VALUES
(1, 'shoe', 'shoe.png'),
(2, 'handbag', 'bag.jpg'),
(3, 'watch', 'watch.jpg'),
(5, 't-shirt', 'banner1.png'),
(6, 'wallet', 'Levis_bag1.jpg'),
(7, 'pant', 'category_pant.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE `company` (
  `id` int(11) NOT NULL,
  `com_name` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`id`, `com_name`) VALUES
(1, 'levis'),
(2, 'motor'),
(3, 'omega'),
(4, 'adidas'),
(5, 'gucci');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `category` varchar(250) NOT NULL,
  `company` varchar(250) NOT NULL,
  `title` varchar(300) NOT NULL,
  `details` varchar(600) NOT NULL,
  `image` varchar(500) NOT NULL,
  `price` decimal(11,0) NOT NULL,
  `sale` varchar(20) NOT NULL,
  `percent` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `gender`, `category`, `company`, `title`, `details`, `image`, `price`, `sale`, `percent`) VALUES
(1, 'male', 't-shirt', 'levis', 'COWHIDE\r\nSTANDARD CREW', 'White coloured, short-sleeved, printed T-shirt for men by Levi''s. This crew-neck T-shirt is made of organic cotton and comes in a regular fit', 'banner1.png', '20', 'on', 30),
(2, 'male', 't-shirt', 'motor', 'RIDE LIKE LAST', 'Black coloured, full-sleeved, printed T-shirt for men by MOTOR. This crew-neck T-shirt is made of organic cotton and comes in a regular fit', 'hello.jpeg', '20', 'off', 0),
(3, 'male', 'watch', 'omega', 'Omega Speedmaster Professional', 'this is a great watch .this is a great watch .this is a great watch .', 'watch_omega01.jpg', '200', 'off', 0),
(5, 'male', 'shoe', 'levis', 'Mens Levis Wesley', 'Mens Levis Wesley Casual Shoe.Mens Levis Wesley Casual Shoe', 'levis_shoe.JPG', '90', 'on', 30),
(6, 'male', 'wallet', 'levis', 'LevisMan Wallet', 'Levis Various Advanced Material Man Wallet Moneybag', 'Levis_bag1.jpg', '50', 'on', 10),
(7, 'male', 'watch', 'levis', 'Levi''s Double Vision', 'Levi''s Double Vision Leather Band Men''s Watch', 'watch_levis1.jpg', '60', 'off', 0),
(8, 'male', 'shoe', 'adidas', 'ADIDAS BUSENITZ', 'ADIDAS BUSENITZ VULC ADV 10 YEAR ANNIVERSARY/Navy', 'addidas_shoe1.jpg', '75', 'off', 0),
(9, 'male', 'handbag', 'gucci', 'Gucci Handbags', 'n this review we will tell you about the Gucci Handbags, which are manufactured by GUCCI. Read, see photos of the Gucci Handbags which differ in shape and size, design and color schemes. Share with your friends!', 'handbag_women01.png', '70', 'off', 0),
(10, 'male', 'wallet', 'gucci', 'Gucci Mens wallet', 'Get a Price In this review we will tell you about the Gucci Mens Handbags, which are manufactured by GUCCI. Read, see photos of the Gucci Mens Handbags which differ in shape and size, design and color schemes. Share with your friends!', 'wallet_men02.jpg', '50', 'off', 0),
(11, 'female', 'handbag', 'gucci', 'Black Gucci Bag', 'Get a Price In this review we will tell you about the Black Gucci Bag, which are manufactured by GUCCI. Read, see photos of the Black Gucci Bag which differ in shape and size, design and color schemes. Share with your friends!', 'handbag_women02.jpg', '60', 'off', 0),
(12, 'male', 'handbag', 'levis', 'Gucci Mens Handbag', 'In this review we will tell you about the Gucci Mens Handbags Photo â€“ 5, which are manufactured by . Read, see photos of the Gucci Mens Handbags Photo â€“ 5 which differ in shape and size, design and color schemes. Share with your friends!', 'handbag_man01.jpg', '80', 'off', 0);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(35) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `image` varchar(250) NOT NULL,
  `address` varchar(500) NOT NULL,
  `gender` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `company`
--
ALTER TABLE `company`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
