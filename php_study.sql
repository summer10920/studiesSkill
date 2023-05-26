-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 2019 年 06 月 26 日 03:56
-- 伺服器版本： 10.1.40-MariaDB
-- PHP 版本： 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `php_study`
--

-- --------------------------------------------------------

--
-- 資料表結構 `ch6_crud`
--

CREATE TABLE `ch6_crud` (
  `id` int(10) UNSIGNED NOT NULL COMMENT '索引 ID',
  `student` varchar(5) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '學生名稱',
  `chi` int(11) NOT NULL COMMENT '國文分數',
  `mat` int(3) NOT NULL COMMENT '數學分數',
  `eng` int(3) DEFAULT '0' COMMENT '英文成績'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `ch6_crud`
--

INSERT INTO `ch6_crud` (`id`, `student`, `chi`, `mat`, `eng`) VALUES
(1, '小陳', 85, 85, 60),
(2, '老王', 55, 75, 60),
(3, '阿明', 75, 70, 60),
(4, '小美', 99, 99, 60),
(7, '陳之漢', 100, 65, 60),
(8, '晨之美', 88, 70, 60),
(9, '城之內', 77, 60, 60),
(10, '金城武', 66, 90, 60),
(11, '王聰明', 99, 100, 60),
(12, '陳宜靜', 100, 99, 60),
(13, '蘋果', 100, 100, 0),
(14, '鳳梨', 99, 60, 0),
(15, '檸檬', 50, 53, 0);

-- --------------------------------------------------------

--
-- 資料表結構 `ch6_customer`
--

CREATE TABLE `ch6_customer` (
  `id` int(11) NOT NULL,
  `acc` varchar(300) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pwd` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `ch6_customer`
--

INSERT INTO `ch6_customer` (`id`, `acc`, `pwd`, `name`) VALUES
(1, 'user1', 'pwd1', 'mr.A'),
(2, 'user2', 'pwd2', 'mr.B'),
(3, 'user3', 'pwd3', 'mr.C'),
(4, 'user4', 'pwd4', 'mr.D');

-- --------------------------------------------------------

--
-- 資料表結構 `ch6_order`
--

CREATE TABLE `ch6_order` (
  `id` int(10) UNSIGNED NOT NULL,
  `product_sn` int(11) NOT NULL,
  `order_num` int(11) NOT NULL,
  `customer_sn` int(11) NOT NULL,
  `order_time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `ch6_order`
--

INSERT INTO `ch6_order` (`id`, `product_sn`, `order_num`, `customer_sn`, `order_time`) VALUES
(1, 3, 2, 2, '2019-06-24 20:28:51'),
(2, 5, 10, 3, '2019-06-25 11:28:51');

-- --------------------------------------------------------

--
-- 資料表結構 `ch6_product`
--

CREATE TABLE `ch6_product` (
  `id` int(10) UNSIGNED NOT NULL,
  `product_name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_price` int(11) NOT NULL,
  `product_desc` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `ch6_product`
--

INSERT INTO `ch6_product` (`id`, `product_name`, `product_price`, `product_desc`) VALUES
(1, 'product1', 100, 'it\'s 100 dollors'),
(2, 'product2', 200, 'it\'s 200 dollors'),
(3, 'product3', 300, 'it\'s 300 dollors'),
(4, 'product4', 400, 'it\'s 400 dollors'),
(5, 'product5', 500, 'it\'s 500 dollors');

-- --------------------------------------------------------

--
-- 資料表結構 `ch6_test`
--

CREATE TABLE `ch6_test` (
  `id` int(10) UNSIGNED NOT NULL,
  `store` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `ch6_test`
--

INSERT INTO `ch6_test` (`id`, `store`, `price`) VALUES
(1, '小明', 100),
(2, '小美', 200),
(3, '小明', 300),
(4, '小華', 50);

-- --------------------------------------------------------

--
-- 資料表結構 `ch6_weather`
--

CREATE TABLE `ch6_weather` (
  `id` int(10) UNSIGNED NOT NULL,
  `feel` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `mydate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `ch6_weather`
--

INSERT INTO `ch6_weather` (`id`, `feel`, `mydate`) VALUES
(1, '晴天', '2019-05-22 00:00:00'),
(2, '雨天', '2019-06-20 00:00:00'),
(3, '毛毛雨', '2019-07-11 00:00:00'),
(4, '陰天', '2019-06-25 00:00:00'),
(5, '陰天', '2019-06-25 08:49:39');

-- --------------------------------------------------------

--
-- 資料表結構 `ch7_animal`
--

CREATE TABLE `ch7_animal` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `weight` int(11) DEFAULT NULL,
  `info` text COLLATE utf8mb4_unicode_ci,
  `date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `ch7_animal`
--

INSERT INTO `ch7_animal` (`id`, `name`, `weight`, `info`, `date`) VALUES
(1, '藪貓', 53, '會追擊小動物，擅長說好厲害的動物朋友', '2019-06-25 14:33:45'),
(2, '浣熊', 37, '會有洗東西的手勢，會偷取人類食物，所以浣熊常常影射小偷這名詞', '2019-06-25 14:33:45'),
(4, '美洲豹', 73, '地表上最快的動物，行動速度可達到80km/hour的閃電朋友', '2019-06-25 14:33:45'),
(5, '馬來貘', 53, '一般路過貘，登場時吃著動畫第一次出現的傑帕力饅頭', '2019-06-25 15:19:35'),
(6, '印度象', 930, '背包走路的時候不小心撞到，她卻說是因為自己在跳舞才撞到背包', '2019-06-25 15:19:35'),
(7, '河馬', 315, '嘴巴很大瞬間咬合力可以粉碎任何物體，容易爆氣不要輕易靠近', '2019-06-25 14:33:45');

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `ch6_crud`
--
ALTER TABLE `ch6_crud`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `ch6_customer`
--
ALTER TABLE `ch6_customer`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `ch6_order`
--
ALTER TABLE `ch6_order`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `ch6_product`
--
ALTER TABLE `ch6_product`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `ch6_test`
--
ALTER TABLE `ch6_test`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `ch6_weather`
--
ALTER TABLE `ch6_weather`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `ch7_animal`
--
ALTER TABLE `ch7_animal`
  ADD PRIMARY KEY (`id`);

--
-- 在傾印的資料表使用自動增長(AUTO_INCREMENT)
--

--
-- 使用資料表自動增長(AUTO_INCREMENT) `ch6_crud`
--
ALTER TABLE `ch6_crud`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT '索引 ID', AUTO_INCREMENT=16;

--
-- 使用資料表自動增長(AUTO_INCREMENT) `ch6_customer`
--
ALTER TABLE `ch6_customer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- 使用資料表自動增長(AUTO_INCREMENT) `ch6_order`
--
ALTER TABLE `ch6_order`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- 使用資料表自動增長(AUTO_INCREMENT) `ch6_product`
--
ALTER TABLE `ch6_product`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- 使用資料表自動增長(AUTO_INCREMENT) `ch6_test`
--
ALTER TABLE `ch6_test`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- 使用資料表自動增長(AUTO_INCREMENT) `ch6_weather`
--
ALTER TABLE `ch6_weather`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- 使用資料表自動增長(AUTO_INCREMENT) `ch7_animal`
--
ALTER TABLE `ch7_animal`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
