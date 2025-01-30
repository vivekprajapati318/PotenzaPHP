-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 30, 2025 at 10:52 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.1.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vivek`
--
CREATE DATABASE IF NOT EXISTS `vivek` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `vivek`;

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `CId` int(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `customer_name` varchar(255) NOT NULL,
  `proid` int(116) DEFAULT 0,
  `Title` varchar(255),
  `image` varchar(255),
  `price` int(255),
  `quantity` int(116) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`CId`, `Email`, `customer_name`, `proid`, `Title`, `image`, `price`, `quantity`) VALUES
(42, 'vivekprajapati120304@gmail.com', 'yuvraj lad', 57, 'Stylish Backpack', 'https://m.media-amazon.com/images/I/41zJYUyM1kL._SX300_SY300_QL70_FMwebp_.jpg https://m.media-amazon.com/images/I/71Qotmgg8PL._SX679_.jpg https://m.media-amazon.com/images/I/61UxeaWwiTL._SX679_.jpg', 50, 1),
(51, 'vivekprajapati120304@gmail.com', 'yuvraj lad', 68, 'Soft Cotton T-Shirt', 'https://m.media-amazon.com/images/I/61Q1xE7IskL._SX679_.jpg https://m.media-amazon.com/images/I/61wcw-6ID5L._SX679_.jpg https://m.media-amazon.com/images/I/61SUHoFUUqL._SX679_.jpg https://m.media-amazon.com/images/I/81L8cc9q78L._SX679_.jpg', 15, 1),
(56, 'vivekprajapati120304@gmail.com', 'yuvraj lad', 83, 'Soft Woolen Sweater', 'https://m.media-amazon.com/images/I/31Ij0GQZuuL.jpg https://m.media-amazon.com/images/I/615n8Z2i5iL._SX569_.jpg https://m.media-amazon.com/images/I/51RjoiJvEFL.jpg', 60, 1),
(57, 'vivekprajapati120304@gmail.com', 'yuvraj lad', 80, 'Foldable Sunglasses', 'https://m.media-amazon.com/images/I/61dfmXvXrhL._SX679_.jpg https://m.media-amazon.com/images/I/51iqXLUEEsL._SX569_.jpg https://m.media-amazon.com/images/I/61IEihsN0IL._SX569_.jpg', 22, 1),
(58, 'vivekprajapati120304@gmail.com', 'yuvraj lad', 54, 'Soft Cotton T-Shirt', 'https://m.media-amazon.com/images/I/61mu3IO+CwL._SY741_.jpg https://m.media-amazon.com/images/I/61ohrT6NnrL._SY741_.jpg https://m.media-amazon.com/images/I/61ywppzx6wL._SY741_.jpg', 15, 1);

-- --------------------------------------------------------

--
-- Table structure for table `ciyastore`
--

CREATE TABLE `ciyastore` (
  `CId` int(255) NOT NULL,
  `customer_name` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `DOB` varchar(255) NOT NULL,
  `password` varchar(116) NOT NULL,
  `Usertype` varchar(116) NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ciyastore`
--

INSERT INTO `ciyastore` (`CId`, `customer_name`, `Email`, `phone`, `DOB`, `password`, `Usertype`) VALUES
(22, 'vivek prajapati', 'vivekprajapati318@gmail.com', '+919173133627', '1989', 'Vivek000@', 'user'),
(23, 'yuvraj makwana', 'yuvraj.makwana.77@gmail.com', '+919723339761', '1998', 'Yuvraj777', 'user'),
(24, 'parth lad', 'parth.lad69@gmail.com', '+911234567890', '4', 'Parth@123', 'user'),
(34, 'yuvraj lad', 'vivekprajapati120304@gmail.com', '+11234567890', '1989', 'Vivek000@', 'user');

-- --------------------------------------------------------

--
-- Table structure for table `ciyastoreadmin`
--

CREATE TABLE `ciyastoreadmin` (
  `AId` int(123) NOT NULL,
  `AdminName` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `Usertype` varchar(116) NOT NULL DEFAULT 'admin'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ciyastoreadmin`
--

INSERT INTO `ciyastoreadmin` (`AId`, `AdminName`, `Email`, `password`, `Usertype`) VALUES
(1, 'vivek', 'vivekprajapti318@gmail.com', 'Vivek000@', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `crud`
--

CREATE TABLE `crud` (
  `ID` int(10) UNSIGNED NOT NULL,
  `UserName` varchar(256) DEFAULT NULL,
  `age` varchar(100) DEFAULT NULL,
  `phone` varchar(200) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `crud`
--

INSERT INTO `crud` (`ID`, `UserName`, `age`, `phone`, `password`) VALUES
(318, 'yuvraj', '20', '9723339761', 'hjuiohu4533'),
(319, 'tanvi', '18', '999655656', '8454u4256'),
(320, 'KALU', '25', '652655656', '6655'),
(321, 'vivek', '15', '655656', 'hbigu'),
(323, 'yuvraj', '20', '9999956565', 'ujhubk'),
(324, 'LAk', '115', '51655656', '252hbigu'),
(325, 'vivek', '20', '655656', 'hbigu'),
(326, 'vivek', '15', '655656', 'hbigu'),
(366, 'John Doe', '98', '66', '656565'),
(437, 'yuvraj', '20', '9723339761', 'hjuiohu4533'),
(438, 'jeet pardeshi', '23', '6546512465', '456456'),
(439, 'John Doe', '23', '2342354144', 'fgzstrgeszr'),
(440, 'parth ', '20', '6576532135', 'huhkjh'),
(441, 'vinit ', '20', '4254978643', 'jkhbkuh978'),
(442, 'deep pethani', '20', '8100989898', 'JKB 222'),
(443, 'NIRAV ', '20', '787643456', 'xbc'),
(445, 'bhagyesh ', '21', '2345609876', 'jh78h'),
(446, 'yash ', '23', '09876542345', 'kjh78'),
(448, 'admin23', '34', '44', '444467'),
(449, 'vivek kumar', '12', '3334', '234565432'),
(452, 'admin', '343', '34', '3443'),
(461, 'John Doe', '34', '43', '34'),
(467, 'admin', '23', '32', '32'),
(474, 'admin', '23', '765432134567', '23adsa'),
(475, 'John Doe', '12', '234', '243'),
(476, 'admin', '23', '233', '123'),
(477, 'John Doe', '23', '2332', '4232'),
(479, 'Johny Doeff', '45', '8985467855', '32+56'),
(481, 'adam', '45', '97845', '433'),
(482, 'jeet', '23', '6754418756', '55618'),
(483, 'neha prajapati', '24', '8236595872', 'sdg455'),
(489, 'vivek', '564', '564', '6+5'),
(497, 'yuvraj', '475', '5873476885', '7868787'),
(499, 'nirav', '20', '5454696566', '0525'),
(500, 'vinit', '09', '56', 'jkl;'),
(503, 'John Doe', '23', '23123443254455', '665565');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `proid` int(116) NOT NULL,
  `Title` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `SKU` varchar(255) NOT NULL,
  `catagory` varchar(255) NOT NULL,
  `price` int(255) NOT NULL,
  `ProCount` int(116) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`proid`, `Title`, `description`, `image`, `SKU`, `catagory`, `price`, `ProCount`) VALUES
(49, 'Elegant Silk Scarf', 'A luxurious silk scarf available in various colors.', 'https://m.media-amazon.com/images/I/613y52S4l5L._SX679_.jpg https://m.media-amazon.com/images/I/61LDWMAg7TL._SX679_.jpghttps://m.media-amazon.com/images/I/71-SKpq9b0L._SX679_.jpg https://m.media-amazon.com/images/I/81MDQ8-qecL._SX679_.jpg', '999900001', 'Accessories, woman, scarf', 46, 2),
(54, 'Soft Cotton T-Shirt', 'A soft and breathable cotton T-shirt in various sizes.', 'https://m.media-amazon.com/images/I/61mu3IO+CwL._SY741_.jpg https://m.media-amazon.com/images/I/61ohrT6NnrL._SY741_.jpg https://m.media-amazon.com/images/I/61ywppzx6wL._SY741_.jpg', '999900006', 'Clothing,man,woman,tshirt', 15, 5),
(57, 'Stylish Backpack', 'A lightweight and stylish backpack with multiple compartments.', 'https://m.media-amazon.com/images/I/41zJYUyM1kL._SX300_SY300_QL70_FMwebp_.jpg https://m.media-amazon.com/images/I/71Qotmgg8PL._SX679_.jpg https://m.media-amazon.com/images/I/61UxeaWwiTL._SX679_.jpg', '999900009', 'Bags,man,woman,school,bag', 50, 6),
(63, 'Elegant Silk Scarf', 'A luxurious silk scarf available in various colors.', 'https://m.media-amazon.com/images/I/81zNdn94qWL._SY741_.jpg https://m.media-amazon.com/images/I/71zzDFdgwvL._SY741_.jpg https://m.media-amazon.com/images/I/71A7T2dxhtL._SY741_.jpg', '999900001', 'Accessories,scarf,woman,cloths', 46, 8),
(68, 'Soft Cotton T-Shirt', 'A soft and breathable cotton T-shirt in various sizes.', 'https://m.media-amazon.com/images/I/61Q1xE7IskL._SX679_.jpg https://m.media-amazon.com/images/I/61wcw-6ID5L._SX679_.jpg https://m.media-amazon.com/images/I/61SUHoFUUqL._SX679_.jpg https://m.media-amazon.com/images/I/81L8cc9q78L._SX679_.jpg', '999900006', 'Clothing', 15, 7),
(72, 'Decorative Wall Clock', 'A decorative wall clock to enhance your room\'s style.', 'https://m.media-amazon.com/images/I/618ywGusJdL._SX300_SY300_QL70_FMwebp_.jpg https://m.media-amazon.com/images/I/71HbppeTsvL._SX569_.jpg https://m.media-amazon.com/images/I/61DNnKHN7OL._SX569_.jpg', '999900010', 'Home Decor, clock ,time', 32, 5),
(78, 'Premium Leather Jacket', 'A stylish, high-quality leather jacket for men and women.', 'https://m.media-amazon.com/images/I/51QBQF2lqkL._SX679_.jpg https://m.media-amazon.com/images/I/41zp2HqlG8L._SX679_.jpg https://m.media-amazon.com/images/I/41V-wZsm78L._SX38_SY50_CR,0,0,38,50_.jpg', '999900016', 'Clothing,jacket, man,winter cloths', 200, 3),
(80, 'Foldable Sunglasses', 'Compact and durable foldable sunglasses for sunny days.', 'https://m.media-amazon.com/images/I/61dfmXvXrhL._SX679_.jpg https://m.media-amazon.com/images/I/51iqXLUEEsL._SX569_.jpg https://m.media-amazon.com/images/I/61IEihsN0IL._SX569_.jpg', '999900018', 'Accessories,glasses,man,woman', 22, 1),
(82, 'Decorative Throw Pillows', 'A set of decorative throw pillows to complement your home decor.', 'https://m.media-amazon.com/images/I/510ihPLa-bL._SX300_SY300_QL70_FMwebp_.jpg https://m.media-amazon.com/images/I/51KXTIzhduL._SX569_.jpg https://m.media-amazon.com/images/I/513t-HOYZeL.jpg', '999900020', 'Home Decor,pillow', 25, 9),
(83, 'Soft Woolen Sweater', 'A soft woolen sweater to keep you warm in cold weather.', 'https://m.media-amazon.com/images/I/31Ij0GQZuuL.jpg https://m.media-amazon.com/images/I/615n8Z2i5iL._SX569_.jpg https://m.media-amazon.com/images/I/51RjoiJvEFL.jpg', '999900021', 'Clothing,sweater,man', 60, 5),
(89, 'Pet-Friendly Sofa Cover', 'A sofa cover made specifically for pet owners to protect your furniture.', 'https://m.media-amazon.com/images/I/41I1duvzWLL._SX300_SY300_QL70_FMwebp_.jpg https://m.media-amazon.com/images/I/71QC6VEAcaL._SX569_.jpg https://m.media-amazon.com/images/I/71fiqwKMBGL._SL1500_.jpg\n', '999900027', 'Home Decor,sofa,home accessory', 50, 56),
(91, 'Anti-Slip Yoga Socks', 'Comfortable anti-slip yoga socks for better grip during practice.', 'https://m.media-amazon.com/images/I/413cQal0kdL._SY300_SX300_QL70_FMwebp_.jpg https://m.media-amazon.com/images/I/81CL0Z1muoL._SX569_.jpg https://m.media-amazon.com/images/I/81Kn4sxXOJL._SX569_.jpg', '999900029', 'Fitness,socks,sports', 12, 4),
(94, 'Casual Denim Jacket', 'A casual denim jacket for everyday wear.', 'https://m.media-amazon.com/images/I/51yRlSM2lTL._SX679_.jpg https://m.media-amazon.com/images/I/61-Y4qfAIUL._SX679_.jpg https://m.media-amazon.com/images/I/61Fomqn9raL._SX679_.jpg https://m.media-amazon.com/images/I/71EnMcDVQPL._SX679_.jpg', '999900032', 'Clothing,man,jacket', 70, 9),
(101, 'Travel Backpack', 'A spacious travel backpack for all your essentials.', 'https://m.media-amazon.com/images/I/81Su5N9j74L._SX679_.jpg https://m.media-amazon.com/images/I/81DQnSqQRzL._SX679_.jpg https://m.media-amazon.com/images/I/817j0WY8EWL._SX679_.jpg', '999900039', 'Bags,travel', 85, 2),
(105, 'Men\'s Shirt', 'Stylish blue shirt for men', 'https://m.media-amazon.com/images/I/61BB89gHYsL._SY741_.jpg https://m.media-amazon.com/images/I/614DYAwnToL._SY741_.jpg https://m.media-amazon.com/images/I/31OgUcovXbL._SX38_SY50_CR003850_.jpg', '12345', 'Men\'s Apparel,man,shirt', 30, 6),
(106, 'Women\'s Jacket', 'Warm jacket for women', 'https://m.media-amazon.com/images/I/71H2mRs8MWL._SX569_.jpg https://m.media-amazon.com/images/I/81ozwL0En1L._SX569_.jpg https://m.media-amazon.com/images/I/71cFrjYW6RL._SX569_.jpg', '12346', 'Women\'s Apparel,woman,jacket,winter cloths', 50, 65),
(107, 'Men\'s Jeans', 'Comfortable blue jeans for men', 'https://m.media-amazon.com/images/I/61lg3ufEX8L._SY550_.jpg https://m.media-amazon.com/images/I/619piEpXH7L._SY550_.jpg https://m.media-amazon.com/images/I/31IyeESifuL._SX38_SY50_CR,0,0,38,50_.jpg', '12347', 'Men\'s Apparel,man,pents', 40, 2),
(108, 'Women\'s Dress', 'Elegant floral dress for women', 'https://m.media-amazon.com/images/I/31RjxDqClSL._SX38_SY50_CR,0,0,38,50_.jpg https://m.media-amazon.com/images/I/41bGmlWVFdL._SX38_SY50_CR,0,0,38,50_.jpg https://m.media-amazon.com/images/I/41rJp+4AKPL._SX38_SY50_CR,0,0,38,50_.jpg', '12348', 'Women\'s Apparel,woman,dress', 60, 4),
(109, 'Men\'s Hoodie', 'Casual hoodie for men', 'https://m.media-amazon.com/images/I/41KeNECL1aL._SX38_SY50_CR,0,0,38,50_.jpg https://m.media-amazon.com/images/I/61VsmCqSKeL._SX38_SY50_CR,0,0,38,50_.jpg', '12349', 'Men\'s Apparel,man,winter cloths', 35, 6),
(110, 'Women\'s Skirt', 'Stylish skirt for women', 'https://m.media-amazon.com/images/I/91gnE8JdR1L._SY550_.jpg https://m.media-amazon.com/images/I/51XoHdtYMwL._SX38_SY50_CR003850_.jpg https://m.media-amazon.com/images/I/61fVlEPDBmL._SX38_SY50_CR003850_.jpg', '12350', 'Women\'s Apparel,woman,skirt,cloths', 25, 3),
(111, 'Men\'s T-shirt', 'Comfortable cotton t-shirt for men', 'https://m.media-amazon.com/images/I/41udMYr8k3L._SX38_SY50_CR,0,0,38,50_.jpg https://m.media-amazon.com/images/I/41jY2kLuw2L._SX38_SY50_CR,0,0,38,50_.jpg https://m.media-amazon.com/images/I/31dLBHPzufL._SX38_SY50_CR,0,0,38,50_.jpg https://m.media-amazon.c', '12351', 'Men\'s Apparel,man,shirt,cloths', 20, 4),
(112, 'Women\'s Sweater', 'Cozy knitted sweater for women', 'https://m.media-amazon.com/images/I/61Gtf3r7wQL._SY550_.jpg https://m.media-amazon.com/images/I/41q1Afy0yCL._SX38_SY50_CR003850_.jpg https://m.media-amazon.com/images/I/31bOCm9p8rL._SX38_SY50_CR003850_.jpg', '12352', 'Women\'s Apparel,woman,winter cloths,sweater', 40, 8),
(113, 'Men\'s Shorts', 'Casual shorts for men', 'https://m.media-amazon.com/images/I/31AuS5XItkL._SX38_SY50_CR,0,0,38,50_.jpg https://m.media-amazon.com/images/I/316ND9g7aXL._SX38_SY50_CR,0,0,38,50_.jpg https://m.media-amazon.com/images/I/31mPf5qzd5L._SX38_SY50_CR,0,0,38,50_.jpg', '12353', 'Men\'s Apparel,man,shorts,summer cloths', 30, 0),
(114, 'Women\'s Blouse', 'Elegant blouse for women', 'https://m.media-amazon.com/images/I/41BB2coQ5UL._SX38_SY50_CR003850_.jpg https://m.media-amazon.com/images/I/31ZIO4UaGJL._SX38_SY50_CR003850_.jpg https://m.media-amazon.com/images/I/41FqE1PlheL._SX38_SY50_CR003850_.jpg', '', 'Women\'s Apparel,woman,blouse,cloths', 35, 0),
(115, 'Men\'s Shirt', 'Stylish blue shirt for men', 'https://m.media-amazon.com/images/I/51j2mBT8iiL._SX425_.jpg https://m.media-amazon.com/images/I/41vXlRRddPL._SX38_SY50_CR003850_.jpg https://m.media-amazon.com/images/I/51nnaWNj+oL._SX38_SY50_CR003850_.jpg', '12345', 'Men\'s Apparel,shirt,man,cloths', 30, 0),
(116, 'Women\'s Jacket', 'Warm jacket for women', 'https://m.media-amazon.com/images/I/41zQ9UNKLnL._SX425_.jpg https://m.media-amazon.com/images/I/51hf1FyTUkL._SX38_SY50_CR_.jpg https://m.media-amazon.com/images/I/51tzLSM8HSL._SX38_SY50_CR_.jpg', '12346', 'Women\'s Apparel,woman,sweater,winter cloths', 50, 0),
(117, 'Men\'s Jeans', 'Comfortable blue jeans for men', 'https://m.media-amazon.com/images/I/313nDaMg+5L._SX38_SY50_CR,0,0,38,50_.jpg https://m.media-amazon.com/images/I/31dplovME+L._SX38_SY50_CR,0,0,38,50_.jpg https://m.media-amazon.com/images/I/31HPd9e0XiL._SX38_SY50_CR,0,0,38,50_.jpg', '12347', 'Men\'s Apparel,man,jeans,cloths', 40, 0),
(118, 'Women\'s Dress', 'Elegant floral dress for women', 'https://m.media-amazon.com/images/I/71Xvagl5gsL._SX425_.jpg https://m.media-amazon.com/images/I/51q1KlfMyYL._SX38_SY50_CR_.jpg https://m.media-amazon.com/images/I/51IG91ftkmL._SX38_SY50_CR_.jpg', '12348', 'Women\'s Apparel,dress,woman,cloths', 60, 0),
(119, 'Casual hoodie', 'Casual hoodie for men', 'https://m.media-amazon.com/images/I/61qa4bkpJKL._SX522_.jpg https://m.media-amazon.com/images/I/41YAM63VwcL._SX38_SY50_CR_.jpg https://m.media-amazon.com/images/I/41hGZOw4+DL._SX38_SY50_CR_.jpg', '12349', 'Men\'s Apparel,hoody,man', 35, 0),
(120, 'Women\'s Skirt', 'Stylish skirt for women', 'https://m.media-amazon.com/images/I/71J0KrK7leL._SY550_.jpg https://m.media-amazon.com/images/I/417XZ6EZUIL._SX38_SY50_CR,0,0,38,50_.jpg https://m.media-amazon.com/images/I/41orSgamRCL._SX38_SY50_CR,0,0,38,50_.jpg', '12350', 'skirt,woman,woman\'s apearl', 25, 0),
(121, 'Men\'s T-shirt', 'Comfortable cotton t-shirt for men', 'https://m.media-amazon.com/images/I/41ZGYd1BNrL._SY500_.jpg https://m.media-amazon.com/images/I/41gAdccW11L._SX38_SY50_CR,0,0,38,50_.jpg https://m.media-amazon.com/images/I/4187J2+dpML._SX38_SY50_CR,0,0,38,50_.jpg', '12351', 'Men\'s Apparel,man,shirt,cloths', 20, 0),
(122, 'Women\'s Sweater', 'Cozy knitted sweater for women', 'https://m.media-amazon.com/images/I/71Zwim1WVXL._SX522_.jpg https://m.media-amazon.com/images/I/41DSuUHEd8L._SX38_SY50_CR_.jpg https://m.media-amazon.com/images/I/51VBnFh7HkL._SX38_SY50_CR_.jpg', '12352', 'Women\'s Apparel,sweater, woman,winter cloths', 40, 0),
(123, 'Men\'s Shorts', 'Casual shorts for men', 'https://m.media-amazon.com/images/I/51cGT48Jr0L._SY550_.jpg https://m.media-amazon.com/images/I/31ZNa4zX+-L._SX38_SY50_CR_.jpg https://m.media-amazon.com/images/I/41coXq8WQBL._SX38_SY50_CR_.jpg', '12353', 'Men\'s Apparel,shorts,man,cloths', 30, 0),
(124, 'Women\'s Blouse', 'Elegant blouse for women', 'https://m.media-amazon.com/images/I/61UiHY97WwL._SX522_.jpg https://m.media-amazon.com/images/I/41h2p1CZ45L._SX38_SY50_CR_.jpg https://m.media-amazon.com/images/I/41eoMhCKXbL._SX38_SY50_CR_.jpg\n', '12354', 'Women\'s Apparel,woman,blouse,cloths', 35, 0),
(125, 'Men\'s Formal Suit', 'High-quality formal suit for men', 'https://m.media-amazon.com/images/I/51Xst3uKaRL._SY550_.jpg https://m.media-amazon.com/images/I/21TfSULVZdL._SX38_SY50_CR,0,0,38,50_.jpg https://m.media-amazon.com/images/I/21LYNhWnevL._SX38_SY50_CR,0,0,38,50_.jpg https://m.media-amazon.com/images/I/31Dpd', '12355', 'Men\'s Apparel,man,formal,suit,cloths', 200, 0),
(126, 'Women\'s Cardigan', 'Comfortable cardigan for women', 'https://m.media-amazon.com/images/I/81L3sDa7zHL._SY550_.jpg https://m.media-amazon.com/images/I/41s-n4JpY0L._SX38_SY50_CR,0,0,38,50_.jpg https://m.media-amazon.com/images/I/315NhtBT2jL._SX38_SY50_CR,0,0,38,50_.jpg', '12356', 'Women\'s Apparel,woman,sweater,cloths', 50, 0),
(127, 'Men\'s Winter Coat', 'Warm winter coat for men', 'https://m.media-amazon.com/images/I/61Hu2rA7yDL._SY550_.jpg https://m.media-amazon.com/images/I/31pP++L6sTL._SX38_SY50_CR,0,0,38,50_.jpg https://m.media-amazon.com/images/I/316XQAffEqL._SX38_SY50_CR,0,0,38,50_.jpg https://m.media-amazon.com/images/I/31WNC', '12357', 'Men\'s Apparel,man,wintercloth,suit,sweater,winter suit', 90, 0),
(128, 'Women\'s Skinny Jeans', 'Stylish skinny jeans for women', 'https://m.media-amazon.com/images/I/713LVwwVcSL._SY550_.jpg https://m.media-amazon.com/images/I/81j1tCub59L._SY550_.jpg https://m.media-amazon.com/images/I/41SG5aaOuML._SX38_SY50_CR,0,0,38,50_.jpg https://m.media-amazon.com/images/I/41nQrH2ugRL._SX38_SY50', '12358', 'Women\'s Apparel,woman,jeans,cloths', 60, 0),
(129, 'Men\'s Leather Jacket', 'Premium leather jacket for men', 'https://m.media-amazon.com/images/I/71l49F9DEvL._SX522_.jpg https://m.media-amazon.com/images/I/41PmIviUpnL._SX38_SY50_CR,0,0,38,50_.jpg', '12359', 'Men\'s Apparel,winter cloths,cloths,man,sweater', 150, 0),
(130, 'Women\'s Tank Top', 'Casual tank top for women', 'https://m.media-amazon.com/images/I/71trOgbAtoL._SY550_.jpg https://m.media-amazon.com/images/I/31pCv+Erf9L._SX38_SY50_CR,0,0,38,50_.jpg https://m.media-amazon.com/images/I/31WTXOTCQtL._SX38_SY50_CR,0,0,38,50_.jpg  https://m.media-amazon.com/images/I/31+b', '12360', 'Women\'s Apparel,woman,tank,cloths', 20, 0),
(131, 'Men\'s Casual Shoes', 'Comfortable casual shoes for men', 'https://m.media-amazon.com/images/I/61e+l2QdyVL._SX500_.jpg https://m.media-amazon.com/images/I/51eDZa-i5nL._SX500_.jpg https://m.media-amazon.com/images/I/31lbWn0IIdL._SS40_.jpg https://m.media-amazon.com/images/I/31HWnPXZCxL._SS40_.jpg', '12361', 'Men\'s Footwear,man,shoe', 40, 0),
(132, 'Women\'s Sandals', 'Stylish sandals for women', 'https://m.media-amazon.com/images/I/61yZsOC22AL._SY500_.jpg https://m.media-amazon.com/images/I/31shXcfirsL._SS40_.jpg https://m.media-amazon.com/images/I/41IblyuCPVL._SS40_.jpg  https://m.media-amazon.com/images/I/41oSXv8L+5L._SS40_.jpg', '12362', 'Women\'s Footwear,woman,footwear', 30, 0),
(133, 'Trendy sneakers for men', 'Trendy sneakers for men', 'https://m.media-amazon.com/images/I/612e+ka83AL._SY500_.jpg\r\n https://m.media-amazon.com/images/I/41vnjK93VdL._SS40_.jpg https://m.media-amazon.com/images/I/41vnjK93VdL._SS40_.jpg', '12363', 'Men\'s Footwear,man,footwear,shoe', 50, 0),
(134, 'Women\'s High Heels', 'Elegant high heels for women', 'https://m.media-amazon.com/images/I/41kIwhO4M7L._SS40_.jpg https://m.media-amazon.com/images/I/31d1UP-TKsL._SS40_.jpg https://m.media-amazon.com/images/I/31iuD7goO2L._SS40_.jpg https://m.media-amazon.com/images/I/41mChpyiQlL._SS40_.jpg ', '12364', 'Women\'s Footwear,woman,footwear', 60, 0),
(135, 'Men\'s Leather Belt', 'Stylish leather belt for men', 'https://m.media-amazon.com/images/I/61xVfz7KhBL._SX522_.jpg https://m.media-amazon.com/images/I/31wSLuTyalL._SX38_SY50_CR,0,0,38,50_.jpg https://m.media-amazon.com/images/I/41K6uYH8JYL._SX38_SY50_CR,0,0,38,50_.jpg https://m.media-amazon.com/images/I/41Axn', '12367', 'Men\'s Accessories,belt,man,cloths', 20, 0),
(136, 'Women\'s Sunglasses', 'Trendy sunglasses for women', 'https://m.media-amazon.com/images/I/215M2NTMCqL._SX38_SY50_CR,0,0,38,50_.jpg https://m.media-amazon.com/images/I/21dYudZLbPL._SX38_SY50_CR,0,0,38,50_.jpg https://m.media-amazon.com/images/I/41K14q6Ix2L._SX38_SY50_CR,0,0,38,50_.jpg https://m.media-amazon.c', '12368', 'Women\'s Accessories,glasses,woman', 30, 0),
(137, 'Men\'s Hat', 'Casual hat for men', 'https://m.media-amazon.com/images/I/31Itgu9XHpL._SX300_SY300_QL70_FMwebp_.jpg https://m.media-amazon.com/images/I/41T7uRoGOEL._SS100_.jpg https://m.media-amazon.com/images/I/41qm9txgReL._SS100_.jpg', '12369', 'Men\'s Accessories,man.hat,cloth', 25, 0),
(138, 'Women\'s Scarf', 'Elegant scarf for women', 'https://m.media-amazon.com/images/I/81ef5U0s9VL._SY550_.jpg https://m.media-amazon.com/images/I/51by40p9+WL._SX38_SY50_CR,0,0,38,50_.jpg https://m.media-amazon.com/images/I/41VgMdN9K7L._SX38_SY50_CR,0,0,38,50_.jpg https://m.media-amazon.com/images/I/41nU6', '12370', 'Women\'s Accessories,woma,cloths,scarf', 20, 0),
(140, 'Women\'s Earrings', 'Stylish earrings for women', 'https://m.media-amazon.com/images/I/61wPgTzyWfL._SY395_.jpg https://m.media-amazon.com/images/I/410YLDdAQ1L._SS40_.jpg https://m.media-amazon.com/images/I/41+jljdZeLL._SS40_.jpg', '12372', 'Women\'s Accessories,woman,earing', 40, 0),
(141, 'Men\'s Wallet', 'Sleek leather wallet for men', 'https://m.media-amazon.com/images/I/4159IdUPPTL._SY300_SX300_.jpg https://m.media-amazon.com/images/I/41kLUgnpN3L._SS40_.jpg https://m.media-amazon.com/images/I/41gBrmBZg9L._SS40_.jpg', '12373', 'Men\'s Accessories,man,wallates', 30, 0),
(142, 'Women\'s Handbag', 'Fashionable handbag for women', 'https://m.media-amazon.com/images/I/71erP2sZb6L._SY500_.jpg https://m.media-amazon.com/images/I/41cnPmOBF0L._SS40_.jpg https://m.media-amazon.com/images/I/21n0jEm94UL._SS40_.jpg ', '12374', 'Women\'s Accessories,woman,bag,cloths', 80, 0),
(143, 'Men\'s Cufflinks', 'Elegant cufflinks for men', 'https://m.media-amazon.com/images/I/41g4Ifh1vDL._SY395_.jpg https://m.media-amazon.com/images/I/41aRb2hNqBL._SS40_.jpg', '12375', 'Men\'s Accessories,man,cloths', 50, 0),
(147, 'Men\'s Gloves', 'Warm leather gloves for men', 'https://m.media-amazon.com/images/I/41rtx-Bw9NL._SX300_SY300_QL70_FMwebp_.jpg https://m.media-amazon.com/images/I/51-C2fBRY8L._SS100_.jpg https://m.media-amazon.com/images/I/51kHjCItWgL._SS100_.jpg', '12379', 'Men\'s Accessories,man,gloves,cloths', 20, 0),
(149, 'Men\'s Ties', 'Premium necktie for men', 'https://m.media-amazon.com/images/I/51xowc-MhEL._SY500_.jpg https://m.media-amazon.com/images/I/515P8cD+uaL._SX38_SY50_CR,0,0,38,50_.jpg https://m.media-amazon.com/images/I/51M5JqJKCUL._SX38_SY50_CR,0,0,38,50_.jpg', '12381', 'Men\'s Accessories,man,tie,cloths', 25, 0),
(151, 'Men\'s Belt', 'Leather belt for men', 'https://m.media-amazon.com/images/I/612TIYB295S._SX522_.jpg https://m.media-amazon.com/images/I/41cJFXQcRHL._SX38_SY50_CR,0,0,38,50_.jpg https://m.media-amazon.com/images/I/41s4nq0xevL._SX38_SY50_CR,0,0,38,50_.jpg', '12383', 'Men\'s Accessories,man,belt,cloths', 23, 0),
(153, 'Men\'s Socks', 'Comfortable socks for men', 'https://m.media-amazon.com/images/I/8184hh7jlJL._SX522_.jpg https://m.media-amazon.com/images/I/51dDUoQNyCL._SX38_SY50_CR,0,0,38,50_.jpg https://m.media-amazon.com/images/I/41Wh6ZrY7BL._SX38_SY50_CR,0,0,38,50_.jpg', '12385', 'Men\'s Apparel,shocks,man,cloths', 10, 0),
(154, 'Women\'s Socks', 'Cozy socks for women', 'https://m.media-amazon.com/images/I/81hnS3Ye7jL._SX679_.jpg https://m.media-amazon.com/images/I/51GwOUuh5RL._SX38_SY50_CR,0,0,38,50_.jpg https://m.media-amazon.com/images/I/41+X69uifvL._SX38_SY50_CR,0,0,38,50_.jpg', '12386', 'Women\'s Apparel,woman,clothts,shocks', 10, 0),
(155, 'Men\'s Casual T-shirt', 'Comfortable and stylish casual T-shirt for men', 'https://m.media-amazon.com/images/I/81q11JIaNWL._SY550_.jpg https://m.media-amazon.com/images/I/41BYWpNe59L._SX38_SY50_CR,0,0,38,50_.jpg https://m.media-amazon.com/images/I/41tUrplJh+L._SX38_SY50_CR,0,0,38,50_.jpg', '12387', 'Men\'s Apparel,cloth,shirt,man', 16, 0),
(156, 'Women\'s Summer Dress', 'Light and breezy summer dress for women', 'https://m.media-amazon.com/images/I/41W01hBt6yL._SY445_SX342_.jpg https://m.media-amazon.com/images/I/51HJf2Y9fEL._SX38_SY50_CR,0,0,38,50_.jpg https://m.media-amazon.com/images/I/41gaL8oduIL._SX38_SY50_CR,0,0,38,50_.jpg', '12388', 'Women\'s Apparel,woman,cloths,skirt,dress', 40, 0),
(157, 'Men\'s Jogger Pants', 'Comfortable jogger pants for men, perfect for casual wear', 'https://m.media-amazon.com/images/I/51HcGta9EuL._SY550_.jpg https://m.media-amazon.com/images/I/41tzSgadXKL._SX38_SY50_CR,0,0,38,50_.jpg https://m.media-amazon.com/images/I/41WF5jQc8TL._SX38_SY50_CR,0,0,38,50_.jpg', '12389', 'Men\'s Apparel.pent,man,cloths', 30, 0),
(158, 'Women\'s Leather Jacket', 'Chic leather jacket for women', 'https://m.media-amazon.com/images/I/41eAo-VoC7L._SY500_.jpg https://m.media-amazon.com/images/I/518hhHoF4mL._SX38_SY50_CR,0,0,38,50_.jpg https://m.media-amazon.com/images/I/41kQzASTiuL._SX38_SY50_CR,0,0,38,50_.jpg', '12390', 'Women\'s Apparel,woman,cloths,jacket', 80, 5),
(159, 'Men\'s Slim Fit Jeans', 'Slim-fit jeans for a trendy look', 'https://m.media-amazon.com/images/I/61zYTL6iyhL._SY550_.jpg https://m.media-amazon.com/images/I/417InL8nc0L._SX38_SY50_CR,0,0,38,50_.jpg https://m.media-amazon.com/images/I/41DPT43DQyL._SX38_SY50_CR,0,0,38,50_.jpg https://m.media-amazon.com/images/I/41yML', '12391', 'Men\'s Apparel,man,jeans,pent,cloths', 50, 5),
(173, 'sd', 'sd', 'http://localhost/vivek/Ciyastore/admin/uploaded_files/679369bcbcb218.70600641.jpg ', 'sd', 'sd', 23, 23),
(174, 'sd', 'sd', 'http://localhost/vivek/Ciyastore/admin/uploaded_files/67936a70baa383.46713966.png http://localhost/vivek/Ciyastore/admin/uploaded_files/67936a70bb64e4.33130821.png http://localhost/vivek/Ciyastore/admin/uploaded_files/67936a70bbf194.60034537.jpg http://lo', 'sd', 'sdsdd', 3, 3);

-- --------------------------------------------------------

--
-- Table structure for table `vivek`
--

CREATE TABLE `vivek` (
  `ID` int(25) UNSIGNED NOT NULL,
  `FIRSTNAME` varchar(100) DEFAULT NULL,
  `LASTNAME` varchar(100) DEFAULT NULL,
  `Address` varchar(100) DEFAULT NULL,
  `phone` char(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `vivek`
--

INSERT INTO `vivek` (`ID`, `FIRSTNAME`, `LASTNAME`, `Address`, `phone`) VALUES
(1, 'vivek', 'prajapati', 'gujarat', '9173133627');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`CId`);

--
-- Indexes for table `ciyastore`
--
ALTER TABLE `ciyastore`
  ADD PRIMARY KEY (`CId`);

--
-- Indexes for table `ciyastoreadmin`
--
ALTER TABLE `ciyastoreadmin`
  ADD PRIMARY KEY (`AId`);

--
-- Indexes for table `crud`
--
ALTER TABLE `crud`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`proid`);

--
-- Indexes for table `vivek`
--
ALTER TABLE `vivek`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `CId` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT for table `ciyastore`
--
ALTER TABLE `ciyastore`
  MODIFY `CId` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `crud`
--
ALTER TABLE `crud`
  MODIFY `ID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=504;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `proid` int(116) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=175;

--
-- AUTO_INCREMENT for table `vivek`
--
ALTER TABLE `vivek`
  MODIFY `ID` int(25) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
