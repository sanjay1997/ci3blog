-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 15, 2022 at 09:10 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ci3blog`
--

-- --------------------------------------------------------

--
-- Table structure for table `article`
--

CREATE TABLE `article` (
  `id` int(11) NOT NULL,
  `article_title` varchar(150) NOT NULL,
  `article_body` longtext NOT NULL,
  `user_id` int(11) NOT NULL,
  `image_path` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `status` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `article`
--

INSERT INTO `article` (`id`, `article_title`, `article_body`, `user_id`, `image_path`, `created_at`, `status`) VALUES
(1, 'Rohit Sharma wishes fans on Ganesh Chaturthi in new Instagram post. See here', 'On Ganesh Chaturthi, Australian cricketer David Warner wished his fans and friends in India with a heartfelt note. The cricketer shared an edited picture of himself standing with his hands folded in front of Lord Ganesha idol. Fans and followers in India were elated that the cricketer wished them on this occasion.', 1, 'http://[::1]/ci3/upload/6b3f00f1a22e6d8499b867cf38c364b6.png', '2022-08-31 15:18:35', 1),
(2, 'Yuvraj Singh wishes fans on Ganesh Chaturthi in new Instagram post. See here', 'On Ganesh Chaturthi, Australian cricketer David Warner wished his fans and friends in India with a heartfelt note. The cricketer shared an edited picture of himself standing with his hands folded in front of Lord Ganesha idol. Fans and followers in India were elated that the cricketer wished them on this occasion.', 1, 'http://[::1]/ci3/upload/6b3f00f1a22e6d8499b867cf38c364b6.png', '2022-08-31 15:18:35', 1),
(9, 'iPhone 14 to Redmi 11 Prime: Phones launching in India in September 2022', 'We are about to witness one of the biggest tech launches of the year - iPhone 14 event. Apple will announce its new iPhones on September 7. While iPhone 14 series will likely grab all the eyeballs in the first week of September, there are other phones too that will be launching in the upcoming days. The Redmi 11 Prime and Poco M5 are also on the way. We might also see the launch of the iQOO Z6 Lite. Here’s everything you need to know.', 1, 'http://[::1]/ci3/upload/6b3f00f1a22e6d8499b867cf38c364b6.png', '2022-09-02 11:25:42', 1),
(10, 'Asia Cup: Pakistan face Hong Kong in knock-out match after Afghanistan, India and Sri Lanka reach Super 4', 'Pakistan lost their campaign opener against India and given the recent form of Hong Kong, it will not be a walk in the park for the Pakistani team. Hong Kong has recently been in a rich vein of form, winning the qualifying tournament and remaining unbeaten. Also, there are at least five Pakistan-born players in the Hong Kong squad. If Pakistan win their knock-out match against Hong Kong, they will again face India on September 4.\r\n\r\nThey ran India close in the previous edition of the tournament, and the last thing Pakistan would want to do is write them off. Hong Kong will also be aware of the fact that Pakistan is yet to register a T20I win this year. Pakistan has played two T20Is this year, facing defeat in both of them. The first came against Australia while the second defeat was handed to them by the men in blue in their first match of the Asia Cup.', 1, 'http://[::1]/ci3/upload/6b3f00f1a22e6d8499b867cf38c364b6.png', '2022-09-02 11:26:32', 1),
(11, 'International Space Station is dangerous and unfit, says Russia', 'Nearly a month after it announced plans to quit the International Space Station (ISS), Russia has called the flying laboratory dangerous and unfit for purpose.\r\n\r\n\r\nRussian space agency, Roscosmos, chief Yuri Borisov said that mass equipment failures and ageing parts on the flying laboratory are endangering crew safety onboard. The latest statement comes just a month after Russia announced plans to go ahead with its own space station, the same as China in zero-gravity.\r\n\r\nRussian-American relations have been on downfall ever since President Vladimir Putin announced the invasion of Ukraine that has led to a brutal war and complete breakdown in diplomatic relations. While the trade relation went kaput, space cooperation continued and is still going on as the two nations depend on each other to run the Space Station.', 1, 'http://[::1]/ci3/upload/6b3f00f1a22e6d8499b867cf38c364b6.png', '2022-09-02 11:27:22', 1),
(12, 'Price of commercial LPG cylinder slashed | Check rates for your city', 'The oil marketing companies (OMCs) have slashed the prices of liquefied petroleum gas (LPG) cylinders for commercial use. OMCs have reduced the commercial price of the 19-kg LPG cylinder for commercial use by Rs 91.50, effective from today, September 1, 2022.\r\n\r\n\r\nAccording to the notification, a 19 kg commercial gas cylinder will now cost Rs 1,885 in Delhi. The price of commercial LPG cylinders has decreased in three important cities: Chennai, Kolkata, and Mumbai.\r\n\r\nIn Kolkata, the cost of a commercial cylinder has dropped from Rs 2,095.50 to Rs 1,995.50. Similar to Mumbai, a commercial cylinder will cost Rs 1,844 instead of Rs 1,936.50 and Rs 2,045 instead of Rs 2,141 in Chennai.\r\n\r\nThe cost of the gas cylinder dropped to Rs 2,219 on June 1 from its peak of Rs 2,354 on May 19. After a month, the cylinder cost Rs 2,021, a decrease of Rs 98. On July 6, the oil companies reduced the cost of this cylinder to Rs 2,012.50. The price of the cylinder was Rs 1976.50 as of August.', 1, 'http://[::1]/ci3/upload/6b3f00f1a22e6d8499b867cf38c364b6.png', '2022-09-02 11:27:56', 1),
(13, 'Cuttputlli Movie Review: Akshay Kumar is now simply a South cinema puppet', 'When two characters in a film - a thriller, no less - discuss a hearing aid that has a recording feature, you know to focus tightly on that piece of machine, for that, is what will drive the thriller home. If this &#039;clue&#039; looks too obvious, in-your-face, blame not Akshay Kumar&#039;s Cuttputlli, now streaming on Disney+ Hotstar. It is simply a faithful, scene-by-scene copy of the 2018-released Ratsasan, Akshay&#039;s third South remake in recent times, second for the OTT giant itself. Are these stats making you go &#039;tch tch tch, does Bollywood have nothing new to offer anymore&#039;? Well, you are not alone.\r\n\r\nAkshay&#039;s Arjan Sethi, a 36-year-old aspiring thriller filmmaker turn reluctant cop with Himachal Police, joins the force with his well-researched knowledge of psychopaths and serial killers. Just then, a potential serial killer, with absolutely no motive the cops can establish, rampantly abducting and killing teenage school girls, emerges in the quaint Kasauli. His seniors in the force, of course, do not entertain his insights. His brother-in-law, Narinder (Chandrachur Singh), has just one piece of advice - keep your head down and work, say yes, and don&#039;t try to be a &#039;hero&#039;. A piece of advice that soon proves to be redundant, and not just because it is an Akshay Kumar film and he ought to emerge as the hero.', 1, 'http://[::1]/ci3/upload/a99e0dce25213fdd34f01be304c1d4da.jpeg', '2022-09-02 11:28:39', 1),
(14, 'Samsung Galaxy Z Flip 4 review: Worth your attention', 'Samsung is back with two new foldable phones. I got the Samsung Galaxy Z Flip 4 for review and I loved using this mini smartphone. This is more of a style statement which will appeal to those who would want to experience the new cutting-edge technology and even show off in front of friends. Foldable phones are not ubiquitous for two reasons - they are still pretty expensive and are not as refined as traditional smartphones.\r\n\r\n\r\nThis doesn’t mean that the Samsung Galaxy Z Flip 4 is any less. It is a great smartphone that can fit in your pocket and never fall. It has Qualcomm’s top-notch Snapdragon 8+ Gen 1 SoC, and most of the features that one might be looking for in a typical flagship phone. However, it is not the best in its segment when compared with traditional phones.\r\n\r\nThe Galaxy Z Flip 4 is an incremental upgrade over its predecessor, but Samsung has made significant changes that were required to make it a better performing device and to justify the premium price tag. It now has a bigger battery, faster-charging support, improved cameras and more. If you&#039;re on the fence about whether you should buy this Samsung Galaxy Flip phone or not, read our detailed review to find your answer.', 1, 'http://[::1]/ci3/upload/07c5b4ec44a13245302c01a5e6cb2411.jpeg', '2022-09-02 11:29:14', 1),
(15, 'Climate change: Zimbabwe moves 2,500 wild animals to save them from drought', 'A helicopter herds thousands of impalas into an enclosure. A crane hoists sedated upside-down elephants into trailers. Hordes of rangers drive other animals into metal cages and a convoy of trucks starts a journey of about 700 kilometers (435 miles) to take the animals to their new home.\r\n\r\n\r\nZimbabwe has begun moving more than 2,500 wild animals from a southern reserve to one in the country’s north to rescue them from drought, as the ravages of climate change replace poaching as the biggest threat to wildlife.\r\n\r\nAbout 400 elephants, 2,000 impalas, 70 giraffes, 50 buffaloes, 50 wildebeest, 50 zebras, 50 elands, 10 lions and a pack of 10 wild dogs are among the animals being moved from Zimbabwe’s Save Valley Conservancy to three conservancies in the north — Sapi, Matusadonha and Chizarira — in one of southern Africa’s biggest live animal capture and translocation exercises.', 1, 'http://[::1]/ci3/upload/7756bf28ef5e28e907dcd9caefc645df.png', '2022-09-02 11:29:46', 1),
(16, '4 करोड़ रुपये की ज्वेलरी लूटी लेकिन नहीं थे 40 रुपये, एक ट्रांजैक्शन से पकड़े गए लुटेरे ', 'चार करोड़ की ज्वेलरी लूटने वालों के पास नहीं था चालीस रुपए कैश, ऑनलाइन ट्रांजैक्शन की वजह से पकड़े गए आरोपी. किसी ने सही कहा है कि अपराधी कितना भी होश.', 1, 'http://[::1]/ci3/upload/6b3f00f1a22e6d8499b867cf38c364b6.png', '2022-09-02 11:31:18', 1),
(18, 'Ms Dhoni wishes fans on Ganesh Chaturthi in new Instagram post. See here', 'On Ganesh Chaturthi, Australian cricketer David Warner wished his fans and friends in India with a heartfelt note. The cricketer shared an edited picture of himself standing with his hands folded in front of Lord Ganesha idol. Fans and followers in India were elated that the cricketer wished them on this occasion.', 1, 'http://[::1]/ci3/upload/05b1d69495a583f0bdd8959f76bcf6f0.png', '2022-09-02 11:33:12', 1);

-- --------------------------------------------------------

--
-- Table structure for table `city`
--

CREATE TABLE `city` (
  `city_id` int(11) NOT NULL,
  `state_id` int(11) NOT NULL,
  `city_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `city`
--

INSERT INTO `city` (`city_id`, `state_id`, `city_name`) VALUES
(1, 1, 'New York City'),
(2, 1, 'Buffalo'),
(3, 1, 'Albany'),
(4, 2, 'Barmingham'),
(5, 2, 'Montogimery'),
(6, 2, 'Huntsville'),
(7, 3, 'Los Angeles'),
(8, 3, 'San Francisco'),
(9, 3, 'San Diego'),
(10, 4, 'Toronto'),
(11, 4, 'Ottawa'),
(12, 5, 'Vancouver'),
(13, 5, 'Victoria'),
(14, 6, 'Sydney'),
(15, 6, 'Newcastie'),
(16, 7, 'City of Brisbane'),
(17, 7, 'Gold Coast'),
(18, 8, 'Bangalore'),
(19, 8, 'Mysore'),
(20, 9, 'Hyderabad'),
(21, 9, 'Nizamabad');

-- --------------------------------------------------------

--
-- Table structure for table `country`
--

CREATE TABLE `country` (
  `country_id` int(11) NOT NULL,
  `country_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `country`
--

INSERT INTO `country` (`country_id`, `country_name`) VALUES
(1, 'USA'),
(2, 'Canada'),
(3, 'Australia'),
(4, 'India');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `user_id` int(15) NOT NULL,
  `buyer_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `buyer_email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `qty` int(15) NOT NULL,
  `paid_amount` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `txn_id` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `payment_status` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `created` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `product_id`, `user_id`, `buyer_name`, `buyer_email`, `qty`, `paid_amount`, `txn_id`, `payment_status`, `created`) VALUES
(1, 9, 1, 'Sanjay', 'sanjay.vishwakarma@darwinpgc.com', 2, '1998', 'pay_KEwtvuqbdOHRRb', 'success', '2022-09-07 14:15:27');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `mrp` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `sprice` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1 COMMENT '1=Active | 0=Inactive'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `image`, `mrp`, `sprice`, `status`) VALUES
(1, 'White Black Plain Tshirt', 'http://[::1]/ci3/upload/3ecdc4e4277a4f685106817c82da50cc.png', '1299', '799', 1),
(2, 'Yellow Plain Tshirt', 'http://[::1]/ci3/upload/3ecdc4e4277a4f685106817c82da50cc.png', '999', '699', 1),
(3, 'Green Plain Tshirt', 'http://[::1]/ci3/upload/3ecdc4e4277a4f685106817c82da50cc.png', '1299', '999', 1),
(4, 'Red Plain Tshirt', 'http://[::1]/ci3/upload/3ecdc4e4277a4f685106817c82da50cc.png', '999', '699', 1),
(5, 'Grey Plain Tshirt', 'http://[::1]/ci3/upload/3ecdc4e4277a4f685106817c82da50cc.png', '1299', '499', 1),
(6, 'White Plain Tshirt', 'http://[::1]/ci3/upload/3ecdc4e4277a4f685106817c82da50cc.png', '999', '699', 1),
(7, 'Black Plain Tshirt', 'http://[::1]/ci3/upload/3ecdc4e4277a4f685106817c82da50cc.png', '1299', '999', 1),
(8, 'Pink Plain Tshirt', 'http://[::1]/ci3/upload/3ecdc4e4277a4f685106817c82da50cc.png', '999', '699', 1),
(9, 'Purple Plain Tshirt', 'http://[::1]/ci3/upload/3ecdc4e4277a4f685106817c82da50cc.png', '1299', '999', 1),
(10, 'Orange Plain Tshirt', 'http://[::1]/ci3/upload/3ecdc4e4277a4f685106817c82da50cc.png', '999', '399', 1),
(11, 'Blue Plain Tshirt', 'http://[::1]/ci3/upload/3ecdc4e4277a4f685106817c82da50cc.png', '1299', '999', 1),
(12, 'Fine Plain Tshirt', 'http://[::1]/ci3/upload/3ecdc4e4277a4f685106817c82da50cc.png', '999', '699', 1),
(13, 'Fine Grey Plain Tshirt', 'http://[::1]/ci3/upload/3ecdc4e4277a4f685106817c82da50cc.png', '1299', '999', 1),
(14, 'Yellow Green Plain Tshirt', 'http://[::1]/ci3/upload/3ecdc4e4277a4f685106817c82da50cc.png', '999', '699', 1),
(15, 'Red Pink Plain Tshirt', 'http://[::1]/ci3/upload/3ecdc4e4277a4f685106817c82da50cc.png', '1299', '999', 1),
(16, 'Orange Blue Plain Tshirt', 'http://[::1]/ci3/upload/3ecdc4e4277a4f685106817c82da50cc.png', '999', '299', 1);

-- --------------------------------------------------------

--
-- Table structure for table `state`
--

CREATE TABLE `state` (
  `state_id` int(11) NOT NULL,
  `country_id` int(11) DEFAULT NULL,
  `state_name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `state`
--

INSERT INTO `state` (`state_id`, `country_id`, `state_name`) VALUES
(1, 1, 'New York'),
(2, 1, 'Alabama'),
(3, 1, 'California'),
(4, 2, 'Ontario'),
(5, 2, 'British Columbia'),
(6, 3, 'New South Wales'),
(7, 3, 'Queensland'),
(8, 4, 'Karnataka'),
(9, 4, 'Telangana');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `username` varchar(150) NOT NULL,
  `password` varchar(150) NOT NULL,
  `firstname` varchar(150) NOT NULL,
  `lastname` varchar(150) NOT NULL,
  `email` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `status` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `username`, `password`, `firstname`, `lastname`, `email`, `created_at`, `status`) VALUES
(1, 'admin', '12345', 'Sanjay', 'Vishwakarma', 'sanjay.vishwakarma@darwinpgc.com', '2022-08-31 11:11:20', 1),
(2, 'amritpal', '12345', 'Amritpal', 'Singh', 'amritpal.singh@darwinpgc.com', '2022-09-01 18:17:20', 1),
(3, 'rohit', '12345678', 'Rohit', 'Vishwakarma', 'rohit.vishwakarma@darwinpgc.com', '2022-09-02 10:55:04', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `city`
--
ALTER TABLE `city`
  ADD PRIMARY KEY (`city_id`);

--
-- Indexes for table `country`
--
ALTER TABLE `country`
  ADD PRIMARY KEY (`country_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `state`
--
ALTER TABLE `state`
  ADD PRIMARY KEY (`state_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `article`
--
ALTER TABLE `article`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `city`
--
ALTER TABLE `city`
  MODIFY `city_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `country`
--
ALTER TABLE `country`
  MODIFY `country_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `state`
--
ALTER TABLE `state`
  MODIFY `state_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
