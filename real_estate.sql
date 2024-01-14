-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Jan 14, 2024 at 11:32 PM
-- Server version: 5.7.39
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `real_estate`
--

-- --------------------------------------------------------

--
-- Table structure for table `agents`
--

CREATE TABLE `agents` (
  `id` int(20) NOT NULL,
  `agent_id` int(20) NOT NULL,
  `name` varchar(50) NOT NULL,
  `image` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `agents`
--

INSERT INTO `agents` (`id`, `agent_id`, `name`, `image`) VALUES
(1, 1, 'Barry Nichols', 'image_1.jpg'),
(2, 2, 'Ralph Nader', 'image_2.jpg'),
(3, 3, 'Karrie Sullivan', 'image_3.jpg'),
(4, 4, 'Bob Saget', 'image_4.jpg'),
(5, 5, 'Bob Hamilton', ''),
(6, 6, 'Ross Monroe', '');

-- --------------------------------------------------------

--
-- Table structure for table `homes`
--

CREATE TABLE `homes` (
  `id` int(20) NOT NULL,
  `agent_id` int(20) NOT NULL,
  `address` varchar(100) NOT NULL,
  `description` longtext NOT NULL,
  `cost` decimal(10,2) NOT NULL,
  `date_posted` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `homes`
--

INSERT INTO `homes` (`id`, `agent_id`, `address`, `description`, `cost`, `date_posted`) VALUES
(1, 1, '5510 Capital Lane', 'Lorem ipsum and stuff', '25000.00', '2024-01-09'),
(2, 2, '10001 Boston Avenue', 'Lorem ipsum is for real ', '500000.00', '2023-11-14'),
(3, 2, '20 Jack Nicholson Street', 'It\'s a gasssss', '70000.00', '2024-01-11'),
(4, 2, '3000 Taco Truffle Street', 'Basingas', '52500.00', '2024-01-08'),
(5, 3, '10200 Capital Sandwich Street', 'This is a charmed house on August Terrace', '125000.00', '2024-01-03'),
(6, 4, '5500 Calabassas Avenue', 'Trash', '350000.00', '2023-09-03'),
(7, 4, '3000 Sagetville Street', 'Street is empty', '10000000.00', '2024-01-02'),
(8, 3, '5100 Kaneda Boulevard', 'Akiraaaaaaa!!!!!', '75000.00', '2024-01-22');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `agents`
--
ALTER TABLE `agents`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `homes`
--
ALTER TABLE `homes`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `agents`
--
ALTER TABLE `agents`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `homes`
--
ALTER TABLE `homes`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
