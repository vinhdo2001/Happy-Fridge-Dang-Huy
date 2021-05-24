-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 24, 2021 at 07:11 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `food-order`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `id` int(10) UNSIGNED NOT NULL,
  `full_name` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `username` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`id`, `full_name`, `username`, `password`) VALUES
(2, 'Nguyen Quang Huy', 'darkdraken123', 'danghuy0505'),
(11, 'Nguyen Dang Huy', 'darkdraken', 'danghuy0505'),
(14, 'Nguyen Dang Huy', 'darkdraken', 'danghuy0505'),
(15, 'Nguyen Huynh To Tram', 'darkdraken', 'huy@@123');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_category`
--

CREATE TABLE `tbl_category` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `image_name` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `featured` varchar(10) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `active` varchar(10) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_category`
--

INSERT INTO `tbl_category` (`id`, `title`, `image_name`, `featured`, `active`) VALUES
(20, 'Meat', 'Food_Category_862.jpg', 'Yes', 'Yes'),
(21, 'Poultry', 'Food_Category_605.jpg', 'Yes', 'Yes'),
(22, 'Fish', 'Food_Category_604.jpg', 'Yes', 'Yes'),
(23, 'Vegetable', 'Food_Category_647.jpg', 'Yes', 'Yes'),
(28, 'Pre Cook ', 'Food_Category_378.jpg', 'Yes', 'Yes'),
(29, 'Dairy', 'Food_Category_595.jpg', 'Yes', 'Yes'),
(30, 'Fruit', 'Food_Category_965.jpg', 'Yes', 'Yes');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_food`
--

CREATE TABLE `tbl_food` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `description` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `price` decimal(10,0) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp(),
  `image_name` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `category_id` int(10) UNSIGNED NOT NULL,
  `featured` varchar(10) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `active` varchar(10) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_food`
--

INSERT INTO `tbl_food` (`id`, `title`, `description`, `price`, `timestamp`, `image_name`, `category_id`, `featured`, `active`) VALUES
(5, 'Beef', 'Beef, flesh of mature cattle, as distinguished from veal, the flesh of calves. The best beef is obtained from early maturing, special beef breeds. High-quality beef has firm, velvety, fine-grained lean, bright red in color and well-marbled. The fat is smooth, creamy white, and well distributed.', '20', '2021-05-18 16:06:10', 'Food-Name-794.jpg', 20, 'Yes', 'Yes'),
(6, 'Pork', 'The most desirable pork is grayish pink in colour, firm and fine-grained, well-marbled, and covered with an outer layer of firm white fat. ... About 30 percent of the meat is consumed as cooked fresh meat; the remainder is cured or smoked for bacon and ham, used in sausage, and rendered to produce lard.', '10', '2021-05-18 16:06:10', 'Food-Name-3009.jpg', 20, 'Yes', 'Yes'),
(7, 'Chicken', 'The chicken is split in half lengthwise through the breast and back, leaving fairly equal halves consisting of the same parts. … Both halves consist of white and dark meat.', '10', '2021-05-18 16:06:10', 'Food-Name-9217.jpg', 21, 'Yes', 'Yes'),
(20, 'Turkey', 'Almost all of the meat is \"dark\" (including the breast) with a more intense flavor. The flavor can also vary seasonally with changes in available forage, often leaving wild turkey meat with a gamier flavor in late summer, due to the greater number of insects in its diet over the preceding months.', '10', '2021-05-22 17:30:58', 'Food-Name-3588.jpg', 21, 'Yes', 'Yes'),
(21, 'Salmon', 'The meat is moderately firm and oily, though not as fatty as that of the wild chinook, or king, salmon. ', '3', '2021-05-22 17:31:59', 'Food-Name-8864.jpg', 22, 'Yes', 'Yes'),
(22, 'Tuna', 'Tuna is a steak of the sea', '2', '2021-05-22 17:32:52', 'Food-Name-4404.jpg', 22, 'Yes', 'Yes'),
(23, 'Egg', 'Eggs have a hard shell of calcium carbonate enclosing a liquid white, a single yolk (or an occasional double yolk)and an air cell. The white or albumen is a clear liquid that turns to an opaque white when cooked or beaten. The yolk is orange to yellow in color, and becomes pale yellow when cooked to a solid form.', '2', '2021-05-22 17:34:47', 'Food-Name-8762.jpg', 29, 'Yes', 'Yes'),
(24, 'Salad', 'High in protein with lots of good carbs', '4', '2021-05-22 17:38:11', 'Food-Name-3892.jpg', 28, 'Yes', 'Yes'),
(26, 'Carrot', 'Carrot, Daucus carota, is an edible, biennial herb in the family Apiaceae grown for its edible root. The carrot plant produces a rosette of 8–12 leaves above ground and a fleshy conical taproot below ground. The plant produces small (2 mm) flowers which are white, red or purple in color.', '3', '2021-05-22 17:41:37', 'Food-Name-445.jpg', 23, 'Yes', 'Yes'),
(27, 'Avocado', 'Avocado, also called alligator pear, fruit of Persea americana of the family Lauraceae, a tree native to the Western Hemisphere from Mexico south to the Andean regions. Avocado fruits have greenish or yellowish flesh with a buttery consistency and a rich, nutty flavour.', '3', '2021-05-22 17:42:17', 'Food-Name-586.jpg', 23, 'Yes', 'Yes'),
(29, 'Broccoli', 'Broccoli, Brassica oleracea, is an herbaceous annual or biennial grown for its edible flower heads which are used as a vegetable. The broccoli plant has a thick green stalk, or stem, which gives rise to thick, leathery, oblong leaves which are gray-blue to green in color.', '3', '2021-05-22 17:44:13', 'Food-Name-2386.jpg', 23, 'Yes', 'Yes'),
(30, 'Milk', 'A whitish liquid containing proteins, fats, lactose, and various vitamins and minerals that is produced by the mammary glands of all mature female mammals after they have given birth and serves as nourishment for their young.', '6', '2021-05-22 17:45:25', 'Food-Name-9958.jpg', 29, 'Yes', 'Yes'),
(31, 'Apple', 'An apple is an edible fruit produced by an apple tree. Apple trees are cultivated worldwide and are the most widely grown species in the genus Malus. The tree originated in Central Asia, where its wild ancestor, Malus sieversii, is still found today.', '4', '2021-05-22 17:48:06', 'Food-Name-4926.jpg', 30, 'Yes', 'Yes'),
(32, 'Banana', 'The banana is a lengthy yellow fruit, found in the market in groups of three to twenty fruits, similar to a triangular cucumber, oblong and normally yellow. Its flavour is more or less sweet, depending on the variety. Nutrition and eating. The banana is rich in fibre, potassium and some beneficial vitamins for health.', '7', '2021-05-22 17:48:41', 'Food-Name-6103.jpg', 30, 'Yes', 'Yes'),
(33, 'Lemon', 'The lemon is a round, slightly elongated fruit, it has a strong and resistant skin, with an intense bright yellow color when it is totally ripe, giving off a special aroma when it is cut. The pulp is pale yellow, juicy and acid, divided in gores.', '5', '2021-05-22 17:49:32', 'Food-Name-63.jpg', 30, 'Yes', 'Yes'),
(34, 'Strawberry', 'A strawberry is both a low-growing, flowering plant and also the name of the fruit that it produces. Strawberries are soft, sweet, bright red berries. ', '4', '2021-05-22 17:51:03', 'Food-Name-1542.jpg', 30, 'Yes', 'Yes'),
(35, 'zucchini', 'The zucchini is a long, cylindrical vegetable, slightly smaller at the stem end, usually dark green in color. The flesh is a pale greenish-white and has a delicate, almost sweet flavor. ', '3', '2021-05-22 17:51:58', 'Food-Name-3330.jpg', 23, 'Yes', 'Yes'),
(36, 'Watermelon', 'The watermelon is a large fruit of a more or less spherical shape. … It has an oval or spherical shape and a dark green and smooth rind.', '3', '2021-05-22 17:53:04', 'Food-Name-6356.jpg', 30, 'Yes', 'Yes');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_order`
--

CREATE TABLE `tbl_order` (
  `id` int(10) UNSIGNED NOT NULL,
  `food` varchar(150) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `price` decimal(10,0) NOT NULL,
  `qty` int(11) NOT NULL,
  `total` decimal(10,0) NOT NULL,
  `order_date` int(11) NOT NULL,
  `status` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `customer_name` varchar(150) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `customer_contact` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `customer_email` varchar(150) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `customer_address` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_order`
--

INSERT INTO `tbl_order` (`id`, `food`, `price`, `qty`, `total`, `order_date`, `status`, `customer_name`, `customer_contact`, `customer_email`, `customer_address`) VALUES
(1, 'Hu tieu nam vang', '3123', 1, '3123', 2021, 'Ordered', 'Nguyen Dang Huy', '3123412131', 'S3741303@RMIT.EDU.VN', '34 district'),
(2, 'Com tam', '10', 1, '10', 2021, 'Ordered', 'hguygg', '5151151', 'juhujh@gmail.com', 'uhuuh');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_category`
--
ALTER TABLE `tbl_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_food`
--
ALTER TABLE `tbl_food`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_order`
--
ALTER TABLE `tbl_order`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `tbl_category`
--
ALTER TABLE `tbl_category`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `tbl_food`
--
ALTER TABLE `tbl_food`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `tbl_order`
--
ALTER TABLE `tbl_order`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
