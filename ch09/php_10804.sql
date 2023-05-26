-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 2019 年 11 月 15 日 08:50
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
-- 資料庫： `php_10804`
--

-- --------------------------------------------------------

--
-- 資料表結構 `ch6_crud`
--

CREATE TABLE `ch6_crud` (
  `id` int(10) UNSIGNED NOT NULL COMMENT '流水號',
  `student` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '姓名',
  `chi` int(3) NOT NULL DEFAULT '0' COMMENT '國文',
  `eng` int(11) NOT NULL,
  `mat` int(3) NOT NULL COMMENT '數學'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `ch6_crud`
--

INSERT INTO `ch6_crud` (`id`, `student`, `chi`, `eng`, `mat`) VALUES
(1, '小明', 55, 80, 72),
(3, '阿福', 57, 80, 89),
(4, '技安', 80, 80, 17),
(12, '大熊', 9, 80, 10),
(14, '阿泰', 60, 80, 70),
(18, '黃宏成台灣阿成世界偉人財神總統', 50, 80, 60),
(19, 'Tommy', 30, 80, 60),
(22, '小梅', 0, 80, 99),
(23, '銘弟', 70, 80, 99),
(26, '小志', 55, 80, 53),
(27, '阿文', 81, 80, 78),
(29, '鳳梨', 50, 0, 99),
(30, '檸檬', 43, 0, 60),
(31, 'HOWHOW', 80, 90, 75);

-- --------------------------------------------------------

--
-- 資料表結構 `ch7_customer`
--

CREATE TABLE `ch7_customer` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `acc` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `pwd` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `ch7_customer`
--

INSERT INTO `ch7_customer` (`id`, `name`, `acc`, `pwd`) VALUES
(1, 'mr.A', 'user1', 'pwd1'),
(2, 'mr.B', 'user2', 'pwd2'),
(3, 'mr.C', 'user3', 'pwd3'),
(4, 'mr.D', 'user4', 'pwd4');

-- --------------------------------------------------------

--
-- 資料表結構 `ch7_order`
--

CREATE TABLE `ch7_order` (
  `id` int(10) UNSIGNED NOT NULL,
  `product_sn` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `order_num` int(11) NOT NULL,
  `customer_sn` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `order_time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `ch7_order`
--

INSERT INTO `ch7_order` (`id`, `product_sn`, `order_num`, `customer_sn`, `order_time`) VALUES
(1, '2', 3, '3', '2019-10-31 10:44:23'),
(2, '1', 10, '4', '2019-10-31 10:44:23');

-- --------------------------------------------------------

--
-- 資料表結構 `ch7_product`
--

CREATE TABLE `ch7_product` (
  `id` int(10) UNSIGNED NOT NULL,
  `product_name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_price` int(11) NOT NULL,
  `product_desc` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `ch7_product`
--

INSERT INTO `ch7_product` (`id`, `product_name`, `product_price`, `product_desc`) VALUES
(1, 'product1', 100, 'it\'s 100 dollors'),
(2, 'product2', 200, 'it\'s 200 dollors'),
(3, 'product3', 300, 'it\'s 300 dollors'),
(4, 'product4', 400, 'it\'s 400 dollors');

-- --------------------------------------------------------

--
-- 資料表結構 `ch7_weather`
--

CREATE TABLE `ch7_weather` (
  `id` int(10) UNSIGNED NOT NULL,
  `feel` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `mydate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `ch7_weather`
--

INSERT INTO `ch7_weather` (`id`, `feel`, `mydate`) VALUES
(1, '毛毛雨', '2019-10-31'),
(2, '陰天', '2019-10-30'),
(3, '晴天', '2019-10-29'),
(4, '可能會下雨', '2019-10-31');

-- --------------------------------------------------------

--
-- 資料表結構 `ch8_animal`
--

CREATE TABLE `ch8_animal` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `weight` int(11) NOT NULL,
  `info` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `ch8_animal`
--

INSERT INTO `ch8_animal` (`id`, `name`, `weight`, `info`, `date`) VALUES
(3, '大浣熊', 800, '食肉', '2019-11-07 09:13:19'),
(4, '耳廓狐', 17, '食肉目 犬科 狐屬', '2019-11-07 08:52:06'),
(5, '河馬', 120, '鯨偶蹄目 河馬科 河馬屬', '2019-11-07 08:52:06'),
(7, '印度象', 1258, '印度的大象，很重很肥很有力。', '2019-11-07 08:52:06'),
(10, '小石虎1', 30, '嘉義的生態保護動物，台灣製造十分稀少請友善愛護，十分可愛', '2019-11-07 09:13:58'),
(11, '馬來模', 53, '馬來模跟馬來西亞有啥關係？', '2019-11-07 08:52:06'),
(12, '石虎', 32, '嘉義的生態保護動物，台灣製造十分稀少請友善愛護。', '2019-11-07 08:52:06'),
(13, '石虎', 32, '嘉義的生態保護動物，台灣製造十分稀少請友善愛護。', '2019-11-07 08:52:06'),
(15, '石虎', 32, '嘉義的生態保護動物，台灣製造十分稀少請友善愛護。', '2019-11-07 08:52:06'),
(17, '酷斯拉', 999999, '吼~~~~~~~~~~~~~~~~~~~~~~~~~~~~~!!', '2019-11-07 08:52:06'),
(19, '哥吉拉', 999999999, '真正的正宗大怪獸', '2019-11-07 08:52:06'),
(25, '小浣熊', 80, '超食肉目 浣熊科 浣熊屬', '2019-11-07 09:13:33'),
(26, '耳廓狐', 17, '食肉目 犬科 狐屬', '2019-11-07 08:52:06'),
(27, '河馬', 120, '鯨偶蹄目 河馬科 河馬屬', '2019-11-07 08:52:06'),
(28, '印度象', 1258, '印度的大象，很重很肥很有力。', '2019-11-07 08:52:06'),
(29, '小石虎2', 40, '嘉義的生態保護動物，台灣製造十分稀少請友善愛護，十分可愛', '2019-11-07 09:13:58'),
(30, '馬來模2', 532, '馬來模跟馬來西亞有啥關係？', '2019-11-07 10:54:58'),
(31, '石虎2222', 32, '嘉義的生態保護動物，台灣製造十分稀少請友善愛護。', '2019-11-07 10:55:05'),
(32, '長頸鹿3333', 555, '233', '2019-11-07 10:55:26'),
(33, '石虎', 32, '嘉義的生態保護動物，台灣製造十分稀少請友善愛護。', '2019-11-07 08:52:06'),
(34, '酷斯拉', 999999, '吼~~~~~~~~~~~~~~~~~~~~~~~~~~~~~!!', '2019-11-07 08:52:06'),
(35, '哥吉拉', 999999999, '真正的正宗大怪獸', '2019-11-07 08:52:06'),
(36, '小花', 55, '喵', '2019-11-07 09:22:04'),
(37, '小白', 55, '汪', '2019-11-07 09:24:31'),
(38, '哥吉拉', 999999999, '真正的正宗大怪獸', '2019-11-07 08:52:06'),
(39, '小花貓', 55, '喵', '2019-11-07 10:55:34');

-- --------------------------------------------------------

--
-- 資料表結構 `q1t3_title`
--

CREATE TABLE `q1t3_title` (
  `id` int(10) UNSIGNED NOT NULL,
  `img` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `dpy` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `q1t3_title`
--

INSERT INTO `q1t3_title` (`id`, `img`, `text`, `dpy`) VALUES
(1, '1573190432_01B01.jpg', '轉知臺北教育大學與臺灣師大合辦第11屆麋研齋全國硬筆書法比賽活動', 1),
(2, '01B02.jpg', '轉知:法務部辦理「第五屆法規知識王網路闖關競賽辦法', 1),
(3, '1573190449_01B03.jpg', '轉知2012年全國青年水墨創作大賽活動', 1),
(4, '01B04.jpg', '欣榮圖書館101年悅讀達人徵文比賽，歡迎全校師生踴躍投稿參加', 1);

-- --------------------------------------------------------

--
-- 資料表結構 `q1t4_maqe`
--

CREATE TABLE `q1t4_maqe` (
  `id` int(10) UNSIGNED NOT NULL,
  `text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `dpy` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `q1t4_maqe`
--

INSERT INTO `q1t4_maqe` (`id`, `text`, `dpy`) VALUES
(1, '轉知臺北教育大學與臺灣師大合辦第11屆麋研齋全國硬筆書法比賽活動', 1),
(2, '轉知:法務部辦理「第五屆法規知識王網路闖關競賽辦法', 1),
(3, '轉知2012年全國青年水墨創作大賽活動', 0),
(4, '欣榮圖書館101年悅讀達人徵文比賽，歡迎全校師生踴躍投稿參加', 1),
(5, '轉知:教育是人類升沉的樞紐-2013教師生命成長營', 1);

-- --------------------------------------------------------

--
-- 資料表結構 `q1t5_mvim`
--

CREATE TABLE `q1t5_mvim` (
  `id` int(10) UNSIGNED NOT NULL,
  `text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `dpy` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `q1t5_mvim`
--

INSERT INTO `q1t5_mvim` (`id`, `text`, `dpy`) VALUES
(1, '01C01.swf	', 1),
(2, '01C02.swf	', 0),
(3, '01C03.swf	', 0),
(4, '01C04.swf	', 1);

-- --------------------------------------------------------

--
-- 資料表結構 `q1t6_img`
--

CREATE TABLE `q1t6_img` (
  `id` int(10) UNSIGNED NOT NULL,
  `text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `dpy` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `q1t6_img`
--

INSERT INTO `q1t6_img` (`id`, `text`, `dpy`) VALUES
(1, '01D01.jpg', 1),
(2, '01D02.jpg', 1),
(3, '01D03.jpg', 1),
(4, '01D04.jpg', 1),
(8, '01D05.jpg', 1),
(9, '01D06.jpg', 1),
(10, '01D07.jpg', 1),
(11, '01D08.jpg', 1);

-- --------------------------------------------------------

--
-- 資料表結構 `q1t7_total`
--

CREATE TABLE `q1t7_total` (
  `id` int(10) UNSIGNED NOT NULL,
  `num` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `q1t7_total`
--

INSERT INTO `q1t7_total` (`id`, `num`) VALUES
(1, 5573);

-- --------------------------------------------------------

--
-- 資料表結構 `q1t8_footer`
--

CREATE TABLE `q1t8_footer` (
  `id` int(10) UNSIGNED NOT NULL,
  `num` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `q1t8_footer`
--

INSERT INTO `q1t8_footer` (`id`, `num`) VALUES
(1, '©2019 Verizon Media. All Rights Reserved.');

-- --------------------------------------------------------

--
-- 資料表結構 `q1t9_news`
--

CREATE TABLE `q1t9_news` (
  `id` int(10) UNSIGNED NOT NULL,
  `text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `dpy` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `q1t9_news`
--

INSERT INTO `q1t9_news` (`id`, `text`, `dpy`) VALUES
(1, '教師研習「世界公民生命園丁國內研習會」\r\n1.主辦單位：世界展望會\r\n2.研習日期：101年11月14日（三）～15日（四）\r\n3.詳情請參考：\r\nhttp://gc.worldvision.org.tw/seed.html。\r\n請線上報名。\r\n', 1),
(2, '公告綜合高中一年級英數補救教學時間\r\n上課日期:10/27.11/3.11/10.11/24共計四次\r\n上課時間:早上8:00~11:50半天\r\n費用:全程免費\r\n參加同學:綜合科一年級第一次段考成績需加強者\r\n已將名單送交各班及導師\r\n參加同學請帶紙筆.課本.第一次段考考卷\r\n並將家長通知單給家長\r\n若有任何疑問\r\n請洽綜合高中學程主任', 1),
(3, '102年全國大專校院運動會\r\n「主題標語及吉祥物命名」\r\n網路票選活動\r\n一、活動期間：自10月25日起至11月4日止。\r\n二、相關訊息請上宜蘭大學首頁連結「102全大運在宜大」\r\n活動網址：http://102niag.niu.edu.tw/', 1),
(4, '台灣亞洲藝術文化教育交流學會第一屆年會國際研討會\r\n活動日期：101年3月3～4日(六、日)\r\n活動主題：創造力、文化、全人教育\r\n有意參加者請至http://www.caaetaiwan.org下載報名表', 1),
(5, '11月23日(星期五)將於彰化縣田尾鄉菁芳園休閒農場\r\n舉辦「高中職生涯輔導知能研習」\r\n中區學校每校至多2名\r\n以普通科、專業類科教師優先報名參加\r\n生涯規劃教師次之，參加人員公差假\r\n並核實派代課\r\n當天還有專車接送(8:35前在員林火車站集合)\r\n如此好康的機會，怎能錯過？！\r\n熱烈邀請師長們向輔導室(分機234)報名\r\n名額有限，動作要快！！\r\n報名截止日期：本周四 10月25日17:00前！', 1),
(6, '台視百萬大明星節目辦理海選活動\r\n時間:101年10月27日下午13時\r\n地點:彰化', 1);

-- --------------------------------------------------------

--
-- 資料表結構 `q1t10_admin`
--

CREATE TABLE `q1t10_admin` (
  `id` int(10) UNSIGNED NOT NULL,
  `acc` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `pwd` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `q1t10_admin`
--

INSERT INTO `q1t10_admin` (`id`, `acc`, `pwd`) VALUES
(1, 'admin', '1234'),
(4, 'loki', '123');

-- --------------------------------------------------------

--
-- 資料表結構 `q1t12_menu`
--

CREATE TABLE `q1t12_menu` (
  `id` int(10) UNSIGNED NOT NULL,
  `text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `parent` int(11) NOT NULL,
  `dpy` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `q1t12_menu`
--

INSERT INTO `q1t12_menu` (`id`, `text`, `link`, `parent`, `dpy`) VALUES
(1, '管理登入', 'login.php', 0, 1),
(2, '網站首頁', 'index.php', 0, 1),
(3, '更多內容', 'news.php', 2, 1),
(4, 'Yahoo', 'https://tw.yahoo.com/', 2, 1),
(5, 'TEST', '54321', 0, 0),
(10, 'AA', '11', 5, 0),
(13, 'EE', '55', 5, 0),
(14, 'FF', '66', 5, 0);

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `ch6_crud`
--
ALTER TABLE `ch6_crud`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `ch7_customer`
--
ALTER TABLE `ch7_customer`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `ch7_order`
--
ALTER TABLE `ch7_order`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `ch7_product`
--
ALTER TABLE `ch7_product`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `ch7_weather`
--
ALTER TABLE `ch7_weather`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `ch8_animal`
--
ALTER TABLE `ch8_animal`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `q1t3_title`
--
ALTER TABLE `q1t3_title`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `q1t4_maqe`
--
ALTER TABLE `q1t4_maqe`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `q1t5_mvim`
--
ALTER TABLE `q1t5_mvim`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `q1t6_img`
--
ALTER TABLE `q1t6_img`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `q1t7_total`
--
ALTER TABLE `q1t7_total`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `q1t8_footer`
--
ALTER TABLE `q1t8_footer`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `q1t9_news`
--
ALTER TABLE `q1t9_news`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `q1t10_admin`
--
ALTER TABLE `q1t10_admin`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `q1t12_menu`
--
ALTER TABLE `q1t12_menu`
  ADD PRIMARY KEY (`id`);

--
-- 在傾印的資料表使用自動增長(AUTO_INCREMENT)
--

--
-- 使用資料表自動增長(AUTO_INCREMENT) `ch6_crud`
--
ALTER TABLE `ch6_crud`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT '流水號', AUTO_INCREMENT=32;

--
-- 使用資料表自動增長(AUTO_INCREMENT) `ch7_customer`
--
ALTER TABLE `ch7_customer`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- 使用資料表自動增長(AUTO_INCREMENT) `ch7_order`
--
ALTER TABLE `ch7_order`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- 使用資料表自動增長(AUTO_INCREMENT) `ch7_product`
--
ALTER TABLE `ch7_product`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- 使用資料表自動增長(AUTO_INCREMENT) `ch7_weather`
--
ALTER TABLE `ch7_weather`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- 使用資料表自動增長(AUTO_INCREMENT) `ch8_animal`
--
ALTER TABLE `ch8_animal`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- 使用資料表自動增長(AUTO_INCREMENT) `q1t3_title`
--
ALTER TABLE `q1t3_title`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- 使用資料表自動增長(AUTO_INCREMENT) `q1t4_maqe`
--
ALTER TABLE `q1t4_maqe`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- 使用資料表自動增長(AUTO_INCREMENT) `q1t5_mvim`
--
ALTER TABLE `q1t5_mvim`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- 使用資料表自動增長(AUTO_INCREMENT) `q1t6_img`
--
ALTER TABLE `q1t6_img`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- 使用資料表自動增長(AUTO_INCREMENT) `q1t7_total`
--
ALTER TABLE `q1t7_total`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- 使用資料表自動增長(AUTO_INCREMENT) `q1t8_footer`
--
ALTER TABLE `q1t8_footer`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- 使用資料表自動增長(AUTO_INCREMENT) `q1t9_news`
--
ALTER TABLE `q1t9_news`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- 使用資料表自動增長(AUTO_INCREMENT) `q1t10_admin`
--
ALTER TABLE `q1t10_admin`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- 使用資料表自動增長(AUTO_INCREMENT) `q1t12_menu`
--
ALTER TABLE `q1t12_menu`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
