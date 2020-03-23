-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 23, 2020 at 08:02 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ceh`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `ProductID` int(123) NOT NULL,
  `Name` varchar(123) NOT NULL,
  `Category` varchar(123) NOT NULL,
  `Brand` varchar(123) NOT NULL,
  `Price` int(255) NOT NULL,
  `Quantity` int(255) NOT NULL,
  `Pic` varchar(255) NOT NULL,
  `deskripsi` varchar(255) NOT NULL,
  `size` int(123) NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`ProductID`, `Name`, `Category`, `Brand`, `Price`, `Quantity`, `Pic`, `deskripsi`, `size`, `status`) VALUES
(1, 'Yeezy', 'Lifestyle', 'Adidas', 11000000, 0, 'Adidas Yeezy Boost 350 V2 Zebra.jpg', 'Black shoes for running', 40, 1),
(2, 'Alphaboost Shoes', 'Running', 'Adidas', 1123123, 24, 'adidas-chaussures-alphaboost-parley-noir-vert-pale-blanc-11ce-600.jpg', 'Comfortable black shoes for running', 42, 1),
(3, 'Nike Men\'s Mercurial Veloce III Dynamic Fit FG Electric Green Lime Soccer Shoes', 'Football', 'Nike', 123123, 4, 'Nike Mens Mercurial.jpg', 'Football shoes', 39, 1),
(4, 'Chessboard Slip-On Vans', 'Lifestyle', 'Vans', 15000000, 121, 'EYEBWW-HERO.jpg', 'A slip-on Vans with chessboard motif', 40, 1),
(5, 'Yeezy', 'Lifestyle', 'Adidas', 11000000, 0, 'Adidas Yeezy Boost 350 V2 Zebra.jpg', 'Sneakers for running', 34, 1),
(6, 'Vans Authentic Black and White Canvas Skate Shoes', 'Lifestyle', 'Vans', 22467000, 1000, 'Vans-Authentic-Black-and-White-Canvas-Skate-Shoes-_108346-front-US.jpg', 'Just a cool pure black sneakers', 42, 1),
(7, 'Old Skool Vans', 'Lifestyle', 'Vans', 954000000, 1200, 'D3HY28-HERO.jpg', 'Sneakers for old school sneaker lovers', 44, 1),
(8, 'Converse Chuck Taylor All Star Hi Top Red', 'Lifestyle', 'Converse', 1560002000, 12345, 'Converse Chuck Taylor All Star Hi Top Red.jpg', 'Red Converse sneakers', 41, 1),
(9, 'Converse Chuck Taylor Static Red/Blue', 'Lifestyle', 'Converse', 85000000, 160, '71VJun+bPzL._UX395_.jpg', 'Red and blue converse sneakers', 41, 1),
(10, 'Adidas ZX Flux Ocean', 'Lifestyle', 'Adidas', 2499000, 50, 'Adidas ZX Flux Ocean.jpg', 'Running shoes with colors resembling the oceans', 43, 1),
(11, 'Nike Flyknit Trainer Oreo', 'Lifestyle', 'Nike', 1499000, 100, 'Nike Flyknit Trainer Oreo.jpg', 'Running shoes with colors resembling Oreo cookies', 40, 1),
(12, 'Adidas NMD R1 CS1 CS2', 'Lifestyle', 'Adidas', 1399000, 97, 'Adidas NMD R1 CS1 CS2.jpg', 'Another shoes from Adidas', 44, 1),
(13, 'Converse Chuck Taylor All-Stars 70s Hi Comme des Garcons', 'Lifestyle', 'Converse', 2999000, 20, 'Converse Chuck Taylor All-Stars 70s Hi Comme des Garcons.jpg', 'A street style Converse shoes with a heart', 50, 1),
(14, 'Nike Classic Cortez Stranger Things Hawkins High School', 'Lifestyle', 'Nike', 1299000, 100, 'Nike Classic Cortez Stranger Things Hawkins High School.jpg', 'Green and white Nike sneakers for lifestyle', 44, 1),
(15, 'Nike Dunk High Mesa Orange', 'Running', 'Nike', 3000000, 50, 'Nike Dunk High Mesa Orange.jpg', 'Nike running shoes with the orange colors of fire', 43, 1),
(16, 'Nike Kyrie Flytrap II', 'Running', 'Nike', 2000000, 100, 'Nike Kyrie Flytrap II.jpg', 'Running shoes, what else?', 42, 1),
(17, 'Nike Air Max 97 NBA All-Stars', 'Lifestyle', 'Nike', 3000000, 50, 'Nike Air Max 97 NBA All Star.jpg', 'Sneakers with the blue, red, and white colors of America', 40, 1),
(18, 'Adidas Ultra Boost', 'Running', 'Adidas', 1500000, 60, 'Adidas Ultra Boost.jpg', 'Black and white sneakers with super boost', 45, 1),
(19, 'Adidas Superstar', 'Lifestyle', 'Adidas', 999000, 97, 'Adidas Superstar.jpg', 'Monochromatic white Adidas', 43, 1),
(20, 'Converse Chuck Taylor All-Star 70s Hi Fear of God Black', 'Lifestyle', 'Converse', 2000000, 20, 'Converse Chuck Taylor All-Star 70s Hi Fear of God Black.jpg', 'Classic black and white Converse', 44, 1),
(21, 'Converse Chuck Taylor All-Stars 70s Hi Comme des Garcons', '2', '1', 1200000, 1000, '8c489-converse-chuck-taylor-all-stars-70s-hi-comme-des-garcons.jpg', 'It\'s a cool shoes, that a trend right now!!', 40, 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `sid` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`name`, `email`, `password`, `sid`) VALUES
('a', 'a@a', 'a', 'Q0VIVVRTO2FAYQ=='),
('asd', 'asd@asd', 'asd', 'Q0VIVVRTO2FzZEBhc2Q='),
('CEHUTS{W3bs1t3Ny4_Vu1N3ra8L3}', 'flag', 'ajwlkjdaolihfkuesghnmsdlhtiuneskjmhfn3u24ijkt23h892u3r89iuk2oorufj483w90iokeufjf8093oi24hjn32i1r87uf4fhjen', 'Q0VIVVRTO2ZsYWc=');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`ProductID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `ProductID` int(123) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
