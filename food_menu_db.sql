phpMyAdmin SQL Dump
version 5.2.1
https://www.phpmyadmin.net/
--
Host: 127.0.0.1
Generation Time: Jan 10, 2024 at 09:03 AM
Server version: 10.4.28-MariaDB
PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

-- --------------------------------------------------------

--
-- Table structure for table `tbl_menu`
--

CREATE TABLE `tbl_menu` (
  `tbl_menu_id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `menu_name` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_menu`
--

INSERT INTO `tbl_menu` (`tbl_menu_id`, `image`, `menu_name`, `price`, `description`) VALUES
(1, 'images/s-l1200.jpg', 'Fruit Tea', 25, 'Fruit'),
(2, 'images/__opt__aboutcom__coeus__resources__content_migration__serious_eats__seriouseats.com__2018__04__20180309-french-fries-vicky-wasik-15-5a9844742c2446c7a7be9fbd41b6e27d.jpg', 'Fries', 49, 'Potato\r\n'),
(3, 'images/images (1).jpg', 'Chicken Fillet', 50, 'Chicken'),
(4, 'images/tapa.jpg', 'Tapa', 50, 'Pork');

--
-- Indexes for table `tbl_menu`
--
ALTER TABLE `tbl_menu`
  ADD PRIMARY KEY (`tbl_menu_id`);


--
-- AUTO_INCREMENT for table `tbl_menu`
--
ALTER TABLE `tbl_menu`
  MODIFY `tbl_menu_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;
