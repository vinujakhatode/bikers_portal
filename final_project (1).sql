-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 11, 2020 at 10:53 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `final_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `bikes_info`
--

CREATE TABLE `bikes_info` (
  `model_id` varchar(20) NOT NULL,
  `brand_name` varchar(20) NOT NULL,
  `model_name` varchar(50) NOT NULL,
  `category_id` varchar(20) NOT NULL,
  `image` varchar(100) NOT NULL,
  `mileage` varchar(10) NOT NULL,
  `model_year` year(4) NOT NULL,
  `power` varchar(20) NOT NULL,
  `type_of_fuel` varchar(20) NOT NULL,
  `gear_count` int(11) NOT NULL,
  `engine` varchar(20) NOT NULL,
  `price_per_hr` varchar(10) NOT NULL,
  `price_per_day` varchar(10) NOT NULL,
  `count` int(5) NOT NULL,
  `bike_status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bikes_info`
--

INSERT INTO `bikes_info` (`model_id`, `brand_name`, `model_name`, `category_id`, `image`, `mileage`, `model_year`, `power`, `type_of_fuel`, `gear_count`, `engine`, `price_per_hr`, `price_per_day`, `count`, `bike_status`) VALUES
('A001', 'Aprilia', 'Aprilia SR 160', 'Scooter', 'bike image/aprilia sr160 img.jpg', '50 kmpl', 2020, '10.8 ps', 'petrol', 0, '160 cc', '12 ', ' 255', 2, 'Verified'),
('A002', 'Aprilia', 'Aprilia Mana 850 GT', 'Sports Bike', 'bike image/aprilia mana 850 gt.jpg\r\n', '21 kmpl', 2013, '76 ps', 'petrol', 7, '839.3 cc', '45', '999 ', 4, 'Verified'),
('B001', 'Bajaj', 'Bajaj Pulsar', 'Normal Bike', 'bike image/bajaj pulsar img.jpg', '36 kmpl', 2012, '23.5 ps', 'petrol', 5, '199.5 cc', '12', '255', 3, 'Verified'),
('B002', 'Bajaj', 'Bajaj Platina', 'Normal Bike', 'bike image/platina.png', '90 kmpl', 2006, '7.9 ps', 'petrol', 4, '102 cc', '10', '210', 5, 'Verified'),
('B003', 'Bajaj', 'Bajaj Chetak', 'Scooter', 'bike image/bajaj chetak img.jpg', '95 km/full', 2020, '250 bhp', 'Battery', 0, '3 kW', '12', '255', 2, 'Verified'),
('B004', 'Bajaj', 'Bajaj Dominar 250', 'Sports Bike', 'bike image/bajaj-dominar-250.jpg', '27 kmpl', 2020, '25 ps', 'petrol', 6, '248 cc', '12', '255', 1, 'Verified'),
('B005', 'Bajaj', 'Bajaj Avenger Cruise 220', 'Normal Bike', 'bike image/avenger 220.jpg', '40 kmpl', 2015, '18.76 ps', 'petrol', 5, '220 cc', '34', '799', 3, 'Verified'),
('BW001', 'BMW', 'BMW S 1000XR', 'Sports Bike', 'bike image/BMW-S-1000-XR.jpg', '20 kmpl', 2017, '165 ps', 'petrol', 6, '999 cc', '45', '999', 4, 'Verified'),
('BW002', 'BMW', 'BMW G310GS', 'Sports Bike', 'bike image/bmw-g-310.png', '27 kmpl', 2018, '33 ps', 'petrol', 6, '313 cc', '34', '799', 3, 'Verified'),
('BW003', 'BMW', 'BMW G 310 R', 'Sports Bike', 'bike image/BMW G310R.jpg', '30 kmpl', 2018, '33 ps', 'petrol', 6, '313 cc', '34', '799', 2, 'Verified'),
('G001', 'Gemopai', 'Gemopai Astrid Lite', 'Scooter', 'bike image/gemopai astrid lite-1.jpg', '80 km/full', 2019, '250 bhp', 'Battery', 0, '250 W', '12', '255', 4, 'Verified'),
('H001', 'Honda', 'Honda shine', 'Normal Bike', 'bike image/Honda shine img.jpg', '60 kmpl', 2006, '10.7 ps', 'petrol', 5, '124cc', '10', '210', 4, 'Verified'),
('H002', 'Honda', 'Honda Activa 5g ', 'Scooter', 'bike image/honda-activa-5g.jpg', '60 kmpl', 2018, '7.96 ps', 'petrol', 0, '109.19 cc', '10', '210', 3, 'Verified'),
('H003', 'Honda', 'Honda CB hornet', 'Normal Bike', 'bike image/honda-cb-hornet.jpg', '42 kmpl', 2018, '15.09 ps', 'petrol', 5, '162.78 cc', '12', '255', 1, 'Verified'),
('H004', 'Honda', 'Honda SP 125', 'Normal Bike', 'bike image/honda-sp-125.jpg', '65 kmpl', 2020, '10.8 ps', 'petrol', 5, '124 cc', '10', '210', 2, 'Verified'),
('H005', 'Honda', 'Honda Dio', 'Scooter', 'bike image/honda-dio.jpg', '55 kmpl', 2012, '8.37 ps', 'petrol', 0, '109.2 cc', '10', '210', 3, 'Verified'),
('H006', 'Honda', 'Honda CBR 650 R', 'Sports Bike', 'bike image/Honda cbr 650 r.jpg', '25 kmpl', 2019, '85.9 ps', 'petrol', 6, '648.72 cc', '45', '999', 3, 'Verified'),
('HR001', 'Hero', 'Hero Glamour ', 'Normal Bike', 'bike image/hero-glamour.jpg', '83 kmpl', 2017, '10.87 ps', 'petrol', 5, '125 cc', '10', '210', 3, 'Verified'),
('HR002', 'Hero', 'Hero Passion pro', 'Normal Bike', 'bike image/passion-pro.jpg', '84 kmpl', 2012, '8.37 ps', 'petrol', 4, '97.2 cc', '10', '210', 1, 'Verified'),
('HR003', 'Hero', 'Hero Electric NYX', 'Scooter', 'bike image/hero-electric-nyx.jpg', '65 km/full', 2020, '250 bhp', 'Battery', 0, '48 V battery', '9', '199', 3, 'Verified'),
('HR004', 'Hero', 'Hero Xpulse 200', 'Normal Bike', 'bike image/hero-xpulse-200.jpg', '40 kmpl', 2019, '18.1 bhp', 'petrol', 5, '199.5 cc', '12', '255', 0, 'Verified'),
('K001', 'KTM', 'KTM 200 Duke', 'Sports Bike', 'bike image/ktm-duke-200.jpg', '35 kmpl', 2015, '25 ps', 'petrol', 6, '199.5 cc', '34', '799', 2, 'Verified'),
('K002', 'KTM', 'KTM 125 Duke', 'Sports Bike', 'bike image/ktm-125-duke.jpg', '34.59 kmpl', 2019, '20.8 ps', 'petrol', 6, '124.7 cc', '34', '799', 2, 'Verified'),
('K003', 'KTM', 'KTM 390 Adventure', 'Sports Bike', 'bike image/390-adventure.jpg', '25 kmpl', 2019, '42.3 ps', 'petrol', 6, '373 cc', '34', '799', 2, 'Verified'),
('KW001', 'Kawasaki', 'Kawasaki Ninja 300', 'Sports Bike', 'bike image/kawasaki-ninja-300.jpg', '25 kmpl', 2020, '39 ps', 'petrol', 6, '296 cc', '45', '999', 1, 'Verified'),
('KW002', 'Kawasaki', 'Kawasaki Ninja 400', 'Sports Bike', 'bike image/kawasaki-ninja-400.jpg', '25 kmpl', 2018, '47.5 ps', 'petrol', 6, '399 cc', '45', '999', 3, 'Verified'),
('M001', 'Mahindra', 'Mahindra Mojo', 'Sports Bike', 'bike image/mahindra-mojo.jpg', '25 kmpl', 2015, '22.7 ps', 'petrol', 6, '295 cc', '34', '799', 4, 'Verified'),
('M002', 'Mahindra', 'Mahindra Gusto', 'Scooter', 'bike image/mahindra-gusto.jpg', '63.7 kmpl', 2014, '8.15 ps', 'petrol', 0, '109.6', '10', '210', 2, 'Verified'),
('R001', 'Royal Enfield', 'Royal Enfield Classic 350', 'Sports Bike', 'bike image/royal-enfield-classic-350.jpg', '40 kmpl', 2020, '20.07 ps', 'petrol', 5, '346 cc', '34', '799', 2, 'Verified'),
('R002', 'Royal Enfield', 'Royal Enfield Himalayan', 'Sports Bike', 'bike image/Royal-enfield-himalayan.jpg', '30 kmpl', 2016, '24.3 ps', 'petrol', 5, '411 cc', '34', '799', 3, 'Verified'),
('S001', 'Suzuki', 'Suzuki Access 125', 'Scooter', 'bike image/suzuki-access-125.jpg', '64 kmpl', 2012, '8.7 ps', 'petrol', 0, '124 cc', '10', '210', 4, 'Verified'),
('S002', 'Suzuki', 'Suzuki Gixxer 155', 'Sports Bike', 'bike image/suzuki-gixxer-155.jpg', '50 kmpl', 2019, '14.1 ps', 'petrol', 5, '155 cc', '12', '255', 2, 'Verified'),
('S003', 'Suzuki', 'Suzuki Intruder', 'Sports Bike', 'bike image/suzuki-intruder.jpg', '44 kmpl', 2019, '14.59 ps', 'petrol', 5, '154.9 cc', '34', '799', 3, 'Verified'),
('S004', 'Suzuki', 'Suzuki VStrom', 'Sports Bike', 'bike image/suzuki-VStrom.jpg', '66 kmpl', 2014, '99 ps', 'petrol', 6, '103.7 cc', '45', '999', 4, 'Verified'),
('S005', 'Suzuki', 'Suzuki GSX S750', 'Sports Bike', 'bike image/suzuki-gsx-s750.jpg', '20 kmpl', 2019, '113 ps', 'petrol', 6, '749 cc', '45', '999', 2, 'Verified'),
('T001', 'TVS', 'TVS sport', 'Scooter', 'bike image/tvs-sport.jpg', '95 kmpl', 2007, '7.4 ps', 'petrol', 4, '99.7cc', '10', '210', 3, 'Verified'),
('T002', 'TVS', 'TVS jupiter', 'Normal Bike', 'bike image/tvs-jupiter.jpg', '49 kmpl', 2013, '7.99 ps', 'petrol', 0, '109.7 cc', '10', '210', 3, 'Verified'),
('T003', 'TVS', 'TVS Apache RTR 160', 'Sports Bike', 'bike image/rtr-160.jpg', '50.94 kmpl', 2019, '16.7 ps', 'petrol', 5, '159.7 cc', '12', '255', 2, 'Verified'),
('V001', 'Vespa', 'Vespa SXL 125', 'Scooter', 'bike image/vespa-sxl-125.jpg', '50 kmpl', 2015, '9.63 ps', 'petrol', 0, '125 cc', '12', '255', 2, 'Verified'),
('Y001', 'Yamaha', 'Yamaha FZ', 'Sports Bike', 'bike image/yamaha-fz-s-v3.jpg', '45.6 kmpl', 2020, '20.8 ps', 'petrol', 5, '249 cc', '12', '255', 4, 'Verified'),
('Y002', 'Yamaha', 'Yamaha R15 V3', 'Sports Bike', 'bike image/yamaha-yzf-r15.jpg', '30 kmpl', 2019, '19.3 ps', 'petrol', 6, '155 cc', '34', '799', 5, 'Verified'),
('Y003', 'Yamaha', 'Yamaha Fascino', 'Scooter', 'bike image/yamaha-fascino.jpg', '66 kmpl', 2019, '7 ps', 'petrol', 0, '113 cc', '10', '210', 1, 'Verified'),
('Y004', 'Yamaha', 'Yamaha Ray Z ', 'Scooter', 'bike image/yamaha-ray-z.jpg', '43 kmpl', 2019, '7.2 ps', 'petrol', 0, '113 cc', '9', '199', 2, 'Verified'),
('Y005', 'Yamaha', 'Yamaha YZF R1', 'Sports Bike', 'bike image/yamaha-yzf-r1.jpg', '20 kmpl', 2009, '200 ps', 'petrol', 6, '998 cc', '34', '799', 3, 'Verified'),
('Y006', 'Yamaha', 'Yamaha MT 15', 'Sports Bike', 'bike image/yamaha-mt-15.jpg', '48 kmpl', 2020, '19.3 ps', 'petrol', 6, '155 cc', '34', '799 ', 2, 'Verified');

-- --------------------------------------------------------

--
-- Table structure for table `billing`
--

CREATE TABLE `billing` (
  `booking_id` varchar(10) NOT NULL,
  `bill_id` varchar(10) NOT NULL,
  `amount` int(10) NOT NULL,
  `tax_amount` int(10) NOT NULL,
  `discount_amount` int(10) NOT NULL,
  `late_fee` int(10) NOT NULL,
  `cancellation_charge` int(11) NOT NULL,
  `total_amount` int(10) NOT NULL,
  `payment_method` varchar(20) NOT NULL,
  `bill_status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `booking_id` varchar(10) NOT NULL,
  `bikes_id` varchar(10) NOT NULL,
  `start_date` date NOT NULL,
  `start_date_time` time NOT NULL,
  `end_date` date NOT NULL,
  `booking_status` varchar(10) NOT NULL,
  `amount` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `c_id` int(10) NOT NULL,
  `user` varchar(255) DEFAULT NULL,
  `model` varchar(255) NOT NULL,
  `model_name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `pickup_date` datetime NOT NULL,
  `dropoff_date` datetime NOT NULL,
  `total_days` varchar(255) NOT NULL,
  `total_hours` varchar(255) NOT NULL,
  `price_per_hr` int(10) NOT NULL,
  `price_per_day` int(10) NOT NULL,
  `created_on` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(10) NOT NULL,
  `user` varchar(255) NOT NULL,
  `model_id` varchar(255) NOT NULL,
  `model_name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `pickup_date` datetime NOT NULL,
  `dropoff_date` datetime NOT NULL,
  `total_days` varchar(255) NOT NULL,
  `total_hours` varchar(255) NOT NULL,
  `total_time` int(10) NOT NULL,
  `total_amount` int(20) NOT NULL,
  `created_on` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `payment_method` varchar(255) DEFAULT NULL,
  `payment_status` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `recommend`
--

CREATE TABLE `recommend` (
  `col1` varchar(2) DEFAULT NULL,
  `model_id` varchar(8) NOT NULL,
  `model_name` varchar(23) DEFAULT NULL,
  `bike1` varchar(5) DEFAULT NULL,
  `bike2` varchar(5) DEFAULT NULL,
  `bike3` varchar(5) DEFAULT NULL,
  `bike4` varchar(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `recommend`
--

INSERT INTO `recommend` (`col1`, `model_id`, `model_name`, `bike1`, `bike2`, `bike3`, `bike4`) VALUES
('0', 'A001', 'aprilia sr ', 'HR002', 'HR003', 'H001', 'A002'),
('1', 'A002', 'aprilia mana gt', 'HR002', 'HR003', 'H001', 'A001'),
('2', 'B001', 'bajaj pulsar', 'B005', 'B004', 'B003', 'B002'),
('3', 'B002', 'bajaj platina', 'B005', 'B004', 'B003', 'B001'),
('4', 'B003', 'bajaj chetak', 'B005', 'B004', 'B002', 'B001'),
('5', 'B004', 'bajaj dominar ', 'B005', 'B003', 'B002', 'B001'),
('6', 'B005', 'bajaj avenger cruise ', 'B004', 'B003', 'B002', 'B001'),
('7', 'BW001', 'bmw s xr', 'H002', 'Y006', 'BW002', 'BW003'),
('8', 'BW002', 'bmw g gs', 'H002', 'Y006', 'BW001', 'BW003'),
('9', 'BW003', 'bmw g r', 'H002', 'Y006', 'BW002', 'BW001'),
('10', 'G001', 'gemopai astrid lite', 'HR001', 'HR002', 'HR003', 'K001'),
('11', 'H001', 'honda shine', 'H002', 'H004', 'H005', 'H006'),
('12', 'H002', 'honda activa g ', 'H001', 'H004', 'H005', 'H006'),
('13', 'H003', 'honda cb hornet', 'H002', 'H004', 'H005', 'H006'),
('14', 'H004', 'honda sp ', 'H001', 'H002', 'H005', 'H006'),
('15', 'H005', 'honda dio', 'H001', 'H002', 'H004', 'H006'),
('16', 'H006', 'honda cbr r', 'H001', 'H002', 'H004', 'H005'),
('17', 'HR001', 'hero glamour ', 'K001', 'HR002', 'HR003', 'HR004'),
('18', 'HR002', 'hero passion pro', 'K001', 'HR003', 'HR001', 'HR004'),
('19', 'HR003', 'hero electric nyx', 'K001', 'HR002', 'HR001', 'HR004'),
('20', 'HR004', 'hero xpulse ', 'K001', 'HR002', 'HR003', 'HR001'),
('21', 'K001', 'ktm duke', 'HR003', 'H001', 'K003', 'K001'),
('22', 'K002', 'ktm duke', 'HR003', 'H001', 'K003', 'K001'),
('23', 'K003', 'ktm adventure', 'HR003', 'H001', 'K001', 'K002'),
('24', 'KW001', 'kawasaki ninja ', 'HR002', 'H001', 'Y006', 'KW002'),
('25', 'KW002', 'kawasaki ninja ', 'HR002', 'H001', 'Y006', 'KW002'),
('26', 'M001', 'mahindra mojo', 'HR002', 'H001', 'Y006', 'M002'),
('27', 'M002', 'mahindra gusto', 'HR002', 'H001', 'Y006', 'M001'),
('28', 'R001', 'royal enfield classic ', 'HR002', 'H001', 'Y006', 'R002'),
('29', 'R002', 'royal enfield himalayan', 'HR002', 'H001', 'Y006', 'R001'),
('30', 'S001', 'suzuki access ', 'S002', 'S004', 'S005', 'S003'),
('31', 'S002', 'suzuki gixxer ', 'S004', 'S005', 'S001', 'S003'),
('32', 'S003', 'suzuki intruder', 'S002', 'S004', 'S005', 'S001'),
('33', 'S004', 'suzuki vstrom', 'S002', 'S005', 'S001', 'S003'),
('34', 'S005', 'suzuki gsx s ', 'S002', 'S004', 'S001', 'S003'),
('35', 'T001', 'tvs sport', 'G001', 'Y006', 'T003', 'T002'),
('36', 'T002', 'tvs jupiter', 'G001', 'Y006', 'T003', 'T001'),
('37', 'T003', 'tvs apache rtr ', 'G001', 'Y006', 'T001', 'T002'),
('38', 'V001', 'vespa sxl ', 'HR002', 'HR003', 'G001', 'Y006'),
('39', 'Y001', 'yamaha fz', 'Y003', 'Y004', 'Y006', 'Y002'),
('40', 'Y002', 'yamaha r v ', 'Y001', 'Y003', 'Y004', 'Y006'),
('41', 'Y003', 'yamaha fascino', 'Y001', 'Y004', 'Y006', 'Y002'),
('42', 'Y004', 'yamaha ray z ', 'Y001', 'Y003', 'Y006', 'Y002'),
('43', 'Y005', 'yamaha yzf r ', 'Y003', 'Y004', 'Y006', 'Y002'),
('44', 'Y006', 'yamaha mt ', 'Y001', 'Y003', 'Y004', 'Y002');

-- --------------------------------------------------------

--
-- Table structure for table `users_bike`
--

CREATE TABLE `users_bike` (
  `Email` varchar(255) NOT NULL,
  `brand_name` varchar(20) NOT NULL,
  `model_name` varchar(50) NOT NULL,
  `category` varchar(20) NOT NULL,
  `image` varchar(100) NOT NULL,
  `mileage` varchar(10) NOT NULL,
  `model_year` year(4) NOT NULL,
  `power` varchar(20) NOT NULL,
  `type_of_fuel` varchar(20) NOT NULL,
  `gear_count` int(11) NOT NULL,
  `engine` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users_bike`
--

INSERT INTO `users_bike` (`Email`, `brand_name`, `model_name`, `category`, `image`, `mileage`, `model_year`, `power`, `type_of_fuel`, `gear_count`, `engine`) VALUES
('nityamhatre36@gmail.com', '', '', '', '', '', 0000, '', '', 0, ''),
('nityamhatre36@gmail.com', '', '', '', '', '', 0000, '', '', 0, ''),
('nityamhatre36@gmail.com', '', '', '', '', '', 0000, '', '', 0, ''),
('nityamhatre36@gmail.com', '', '', '', '', '', 0000, '', '', 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `user_info`
--

CREATE TABLE `user_info` (
  `u_id` int(255) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Contact_no` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `C_password` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `DOB` date NOT NULL,
  `Address` varchar(255) NOT NULL,
  `Pincode` int(255) NOT NULL,
  `City` varchar(255) NOT NULL,
  `State` varchar(255) NOT NULL,
  `Country` varchar(255) NOT NULL,
  `Profile_pic` varchar(255) NOT NULL,
  `Adhar_no` int(20) NOT NULL,
  `Adhar_image` varchar(100) NOT NULL,
  `Licences_image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_info`
--

INSERT INTO `user_info` (`u_id`, `Name`, `Email`, `Contact_no`, `Password`, `C_password`, `token`, `status`, `DOB`, `Address`, `Pincode`, `City`, `State`, `Country`, `Profile_pic`, `Adhar_no`, `Adhar_image`, `Licences_image`) VALUES
(1, 'Admin', 'admin@gmail.com', '8754634246', '$2y$10$EdCi1CFxYc6E8blxX.d0Cu/0v3QQr01BBk3uS//xM9.DDQtS8Wlee', '$2y$10$WO3IXCfIPvtll8tpjCL//uMY9c5YiOjFP4A7VzHv0kMVyUHcMm92m', '989c6d9fff6ec466865652edc6e6bb5210a4cfa8', 'Active', '1994-05-15', '', 0, '', '', '', '', 0, '', ''),
(2, 'User', 'user@gmail.com', '8532109765', '$2y$10$9mWRHHP2L4QtRII7woI2UOLr8i2r1cTz/b0KI4StwL/4R8U4GlDwS', '$2y$10$7r7fa1yRnH0J2X1E.U4Lh.cjiL0Eimg3bk6h4TFJ758iaIsJUlyIS', '0b3dc33adb19eb97d48d5782b0d42bc4bfd3f5f3', 'Active', '1996-04-04', '', 0, '', '', '', '', 0, '', ''),
(28, 'Nitya Mhatre', 'nityamhatre36@gmail.com', '07977293461', '$2y$10$misalHPqlZV6wtltoPSJM.hNNLpLc/zQ8o8L55j1IPEfZNCMbfhqC', '$2y$10$.KwFSr7Kn.8pFX.zAldFa.0iFefDCV6ESgmrMR0RrhmO8VL/OlQvC', 'ad62a341d0fc4ddb1a8ce13294f33118d0e304c4', 'Active', '1999-02-01', '', 0, '', '', '', '', 0, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `wishlist`
--

CREATE TABLE `wishlist` (
  `id` int(10) NOT NULL,
  `user` varchar(255) NOT NULL,
  `model_id` varchar(255) NOT NULL,
  `action` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bikes_info`
--
ALTER TABLE `bikes_info`
  ADD PRIMARY KEY (`model_id`);

--
-- Indexes for table `billing`
--
ALTER TABLE `billing`
  ADD PRIMARY KEY (`bill_id`);

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`booking_id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `recommend`
--
ALTER TABLE `recommend`
  ADD PRIMARY KEY (`model_id`);

--
-- Indexes for table `user_info`
--
ALTER TABLE `user_info`
  ADD PRIMARY KEY (`u_id`);

--
-- Indexes for table `wishlist`
--
ALTER TABLE `wishlist`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `c_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `user_info`
--
ALTER TABLE `user_info`
  MODIFY `u_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `wishlist`
--
ALTER TABLE `wishlist`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
