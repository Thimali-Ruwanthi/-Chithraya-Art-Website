-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Dec 14, 2023 at 05:27 AM
-- Server version: 5.7.23
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `art_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

DROP TABLE IF EXISTS `admins`;
CREATE TABLE IF NOT EXISTS `admins` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `password`) VALUES
(1, 'admin', '111');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

DROP TABLE IF EXISTS `cart`;
CREATE TABLE IF NOT EXISTS `cart` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `user_id` int(100) NOT NULL,
  `pid` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `price` int(10) NOT NULL,
  `quantity` int(10) NOT NULL,
  `image` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=53 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `user_id`, `pid`, `name`, `price`, `quantity`, `image`) VALUES
(52, 11, 6, 'Kandyan art', 1000, 1, '21(1).png'),
(47, 10, 17, 'dhamma Sermony', 100, 1, 'FrameArt_20231012134124904.jpg'),
(39, 1, 12, 'Carpenter', 150, 1, '10.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `custom`
--

DROP TABLE IF EXISTS `custom`;
CREATE TABLE IF NOT EXISTS `custom` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `user_id` int(100) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL,
  `number` varchar(12) NOT NULL,
  `comment` varchar(255) NOT NULL,
  `img_dir` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `custom`
--

INSERT INTO `custom` (`id`, `user_id`, `name`, `email`, `number`, `comment`, `img_dir`) VALUES
(1, 1, 'IMG-20210117-WA0027', 'thimali@gmail.com', '0776995723', '', 'web/IMG-20210117-WA0027.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `image`
--

DROP TABLE IF EXISTS `image`;
CREATE TABLE IF NOT EXISTS `image` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `number` varchar(12) NOT NULL,
  `details` varchar(500) NOT NULL,
  `image_01` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `image`
--

INSERT INTO `image` (`id`, `name`, `email`, `number`, `details`, `image_01`) VALUES
(4, 'shalani rathnayake', 'shalani@gmail.com', '0715698521', 'I want to draw the image attached above. It should be 10&#34;* 12&#34; in size and colored.', 'IMG_0800.JPG'),
(3, 'charuni ', 'charuni@gmail.com', '0778659354', 'I want this', '10.jpg'),
(5, 'kumari ', 'thimali@gmail.com', '0758965748', 'i want this as a pencil sketch', '32.JPG'),
(6, 'test', 'test@test.com', '0776995842', 'i want this image as a pencil sketch. 12*14. watercolor', '33.JPG'),
(11, 'prasad ramanayake', 'prasad@gmail.com', '0715698521', 'i want to draw that image. 18*14 size', 'NIKN2174.JPG'),
(12, 'malintha bandara', 'malintha@gmail.com', '0776995723', 'I want to draw the image attached above. It should be 10&#34;* 12&#34; in size and colored.', 'NIKN2174.JPG');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

DROP TABLE IF EXISTS `messages`;
CREATE TABLE IF NOT EXISTS `messages` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `user_id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `number` varchar(12) NOT NULL,
  `message` varchar(500) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `user_id`, `name`, `email`, `number`, `message`) VALUES
(1, 1, 'thimali ruwanthika', 'thimali@gmail.com', '123456789', 'your paintings are very beautiful'),
(2, 1, 'malintha vidusara', 'malintha@gmail.com', '0772587862', 'I appreciate your drawing skill and I love your arts.'),
(3, 1, 'thimali', 'thimali@gmail.com', '0776995723', ''),
(4, 1, 'sachiru', 'sachiru@gmail.com', '1234567892', 'aajcjj'),
(5, 1, 'chandani paris', 'sachi@gmail.com', '0750239865', 'Thank you dedunu for a beautiful painting that transports me. The painting\r\narrived in great shape and was accompanied by a short-handwritten note from the artist wishing me a happy birthday. It was a truly joyful moment when I unpacked the painting. It was also a pleasure to communicate with the very professional, warm and friendly Art Advisor from &#34;Chithraya art&#34;. Many thanks!'),
(6, 1, 'thimali bandara', 'thimali@gmail.com', '0761702791', 'hi how are you'),
(8, 1, 'gayathri', 'thimali@gmail.com', '0761702791', 'I appreciate your work.'),
(9, 1, 'ruwanthika', 'thimali@gmail.com', '0761702791', 'hellooo. how are you'),
(10, 11, 'prasad ramanayake', 'prasad@gmail.com', '0715698521', 'i like your paintings');

-- --------------------------------------------------------

--
-- Table structure for table `ordering`
--

DROP TABLE IF EXISTS `ordering`;
CREATE TABLE IF NOT EXISTS `ordering` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `number` varchar(12) NOT NULL,
  `email` varchar(255) NOT NULL,
  `method` varchar(100) NOT NULL,
  `flat` varchar(100) NOT NULL,
  `street` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  `state` varchar(100) NOT NULL,
  `country` varchar(100) NOT NULL,
  `pin_code` int(10) NOT NULL,
  `total_products` varchar(255) NOT NULL,
  `total_price` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ordering`
--

INSERT INTO `ordering` (`id`, `name`, `number`, `email`, `method`, `flat`, `street`, `city`, `state`, `country`, `pin_code`, `total_products`, `total_price`) VALUES
(1, 'madu', '15875698', 'madu@gmail.com', 'cash on delivery', 'no 85', 'thabilikotuwa road', 'beragala', 'gampaha', ' sri lanka', 123456, 'Kandyan art (1000 x 1) - Stone Workplace (600 x 1) - Fishermans (30 x 1) - ', '1630'),
(2, 'abiru', '0223698745', 'abhiri@gmail.com', 'cash on delivery', '86', 'keerthibandarapura', 'deke kanuwa', 'badulla', 'sri lanka', 123698, 'Paddy Field (50 x 1) - Carpenter (150 x 1) - ', '200'),
(3, 'iresh', '022145986', 'iresh@gmail.com', 'cash on delivery', '58', 'kumara road', 'colombo', 'colombo', ' sri lanka', 159875, 'Kandyan art (1000 x 1) - Happy night time (1000 x 1) - ', '2000'),
(4, 'gayathri', '0779663589', 'gaya@gmail.com', 'cash on delivery', '56', 'leemagahakotuwa', 'watadeniya', 'kandy', ' sri lanka', 123456, 'Carpenter (150 x 1) - Fishermans (30 x 1) - ', '180'),
(5, 'prasad ramanayake', '0718569853', 'prasad@gmail.com', 'cash on delivery', '38', 'kahalla road', 'katugastota', 'kandy', ' sri lanka', 123658, 'Carpenter (150 x 1) - worshiping (1000 x 1) - Happy night time (50 x 1) - ', '1200');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

DROP TABLE IF EXISTS `orders`;
CREATE TABLE IF NOT EXISTS `orders` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `user_id` int(100) NOT NULL,
  `name` varchar(20) NOT NULL,
  `number` varchar(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `method` varchar(50) NOT NULL,
  `address` varchar(500) NOT NULL,
  `total_products` varchar(1000) NOT NULL,
  `total_price` int(100) NOT NULL,
  `placed_on` date NOT NULL,
  `payment_status` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `name`, `number`, `email`, `method`, `address`, `total_products`, `total_price`, `placed_on`, `payment_status`) VALUES
(2, 1, 'thimali ruwanthika', '123456789', 'thimali@gmail.com', 'credit card', '258, Hulangamuwa Road, Matale', 'happy night time (1)- lotus lake (1)', 2750, '2023-08-09', 'pending'),
(3, 6, 'iresh', '123456712', 'iresh@gmail.com', 'cash on delivery', '18, kumara Road, awissawella', 'Paddy Field (1)', 50, '2023-11-20', 'pending'),
(4, 6, 'iresh', '0776995478', 'iresh@gmail.com', 'cash on delivery', '18, kumara Road, awissawella', 'Fishermans (1)- Paddy Field (1)- Accident(1)', 130, '2023-11-22', 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `details` varchar(500) NOT NULL,
  `price` int(10) NOT NULL,
  `image_01` varchar(100) NOT NULL,
  `image_02` varchar(100) NOT NULL,
  `image_03` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=24 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `details`, `price`, `image_01`, `image_02`, `image_03`) VALUES
(12, 'Carpenter', 'A thick ledger paper. This paper is archival and its surface replicates the look and feel of watercolor paper. Size is 18&#34;*14&#34;. Frames are not included. 100% Handmade. Materials are Watercolor, Drawing Paper.', 150, '10.jpg', 'FrameArt_20231014020383081.jpg', 'GWJ9SME6JHZHI5.jpg'),
(7, 'Lotus lake', 'Unique original watercolor painting. size is 18&#34;* 14&#34;. It is a drawing paper painting.  The image is unframed. 100% handmade.', 200, 'MR2479T97YVACM.jpg', 'FrameArt_2023103023543841.jpg', '23(1).jpg'),
(6, 'Kandyan art', 'Unique original Acralic painting. size is 16&#34;* 18&#34;. It is a drawing paper traditional painting. The image is unframed. 100% handmade. ', 1000, '21(1).png', 'FrameArt_20231030235516674.jpg', '21(1).png'),
(8, 'Happy night time', 'A thick, textured, and heavy duty paper. This paper is archival and its surface replicates the look and feel of watercolor paper. (White / 300gsm). Size is 18&#34;*14&#34;. Prints are designed to fit into standard sized frames. Frames are not included. Depending on your monitor settings colors may appear slightly different on screen than on the actual print. ', 50, '109.jpg', 'wallapp-16102023-143137.jpg', 'YLAH1KQB8N18VL.jpg'),
(9, 'worshiping', 'Painted on artist quality watercolor paper. Professional quality artists watercolor paints. Size is 18&#34; x 14&#34;. FRAME NOT INCLUDED. ', 1000, '5.jpg', 'FrameArt_2023103023500503.jpg', 'wallapp-16102023-142206.jpg'),
(11, 'Dancing Women ', 'Colorful Abstract Creyon Painting Print, Large Modern Wall Art. Size is 20&#34;*24&#34;. Medium: Print on Fine Art 230g Matte Paper. Unframed.  ', 750, 'dfddd.png', 'dfdd.png', '18.png'),
(10, 'Stone Workplace', 'A thick drawing paper. This paper is archival and its surface replicates the look and feel of watercolor paper. Size is 18&#34;*14&#34;. Frames are not included. Depending on your monitor settings colors may appear slightly different on screen than on the actual print.', 600, '7.jpg', '7.1.jpg', '52.jpg'),
(14, 'Fishermans', 'Handmade\r\nMaterials: Warm Pastel, Drawing Paper \r\nSize: 18*14\r\nNot framed', 30, '86.jpg', '88.jpg', '90.jpg'),
(15, 'Customized Portrait', 'A classic personalized crayon based on favourite photograph. Drawn with pencil and pastel in a freehand.  flowing line and reproduced to provide our customers with a digital file. The drawing is colored with pastel to pick out a few highlight colours. 100% Handmade. Size is 10*12.\r\nNot framed', 200, 'FrameArt_202310311121209 (1).jpg', '70 (1).jpg', '70(2).jpg'),
(16, 'Accident', 'A thick ledger paper. This paper is archival and its surface replicates the look and feel of watercolor paper. Size is 18&#34;*14&#34;. Frames are not included. 100% Handmade. Materials are Watercolor, Drawing Paper.', 50, '110.jpg', 'K3GUSUGBC8V285.jpg', '12.jpg'),
(17, 'dhamma Sermony', 'Painted on artist quality watercolor paper. Professional quality artists watercolor paints. Size is 18&#34; x 14&#34;. FRAME NOT INCLUDED. ', 100, 'FrameArt_20231012134124904.jpg', '3.jpg', 'wallapp-16102023-141826.jpg'),
(18, 'Sri Lankan Devil Dance', '100% Handmade.\r\nMaterials are Watercolor, thick Drawing Paper. This paper is archival and its surface replicates the look and feel of watercolor paper. Size is 18*14.\r\nFrames are not included. Depending on your monitor settings colors may appear slightly different on screen than on the actual print.', 40, 'f6.jpg', 'FrameArt_2023101402154392.jpg', 'Grey and Green Modern Wall Art Mockup Instagram Post.jpg'),
(19, 'Paddy Field', '100% Handmade. Materials are Watercolor, thick Drawing Paper. This paper is archival, and its surface replicates the look and feel of watercolor paper.  The drawing is colored with watercolor brushes to pick out a few highlight colours. Size is 18*14. Frames are not included. \r\n', 50, '43.jpg', 'FrameArt_2023101401642629.jpg', 'wallapp-16102023-151509.jpg'),
(23, 'bathing with a water paddle', 'ledger paper. professional quality artistic watercolor paints. size is 18&#34;*14&#34;. ', 100, '11.jpg', '102.jpg', '11(3).jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`) VALUES
(1, 'Thimali Ruwanthika', 'thimali@gmail.com', '6b72c70b653f54081a0a8762d93c1fd2cb746efa'),
(2, 'admin', 'admin@admin.gmail', '40bd001563085fc35165329ea1ff5c5ecbdbbeef'),
(11, 'prasad ramanayake', 'prasad@gmail.com', 'bd01f2f15f417a7768f6ab61a8b484d408b57d1f'),
(8, 'gayathri wijekoon', 'gayathri@gmail.com', '112c83f0247d319bc5daa95ce94e34253d3af917'),
(5, 'Malintha Vidusara', 'malintha@gmail.com', '0f7e4f9bc4909ebd1a869d7001a88ee0eb337923'),
(6, 'Iresh Rathnayake', 'iresh@gmail.com', '790a4010f56419e7c1cf695405a55b22a85bbdcb'),
(9, 'madu', 'madu@gmail.com', 'fa2430e652ed80547d17cb5fca133db8cba715f1'),
(10, 'gayathri', 'gaya@gmail.com', '8723fb268edace01f4cbc3e59fc6ed3777bef9c5');

-- --------------------------------------------------------

--
-- Table structure for table `wishlist`
--

DROP TABLE IF EXISTS `wishlist`;
CREATE TABLE IF NOT EXISTS `wishlist` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `user_id` int(100) NOT NULL,
  `pid` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `price` int(100) NOT NULL,
  `image` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `wishlist`
--

INSERT INTO `wishlist` (`id`, `user_id`, `pid`, `name`, `price`, `image`) VALUES
(5, 1, 8, 'happy night time', 1000, '14.JPG'),
(10, 1, 7, 'Lotus lake', 200, '23.png');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
