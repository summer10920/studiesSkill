-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 2019-07-22 04:50:49
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
-- 資料庫： `db01`
--

-- --------------------------------------------------------

--
-- 資料表結構 `t3_title`
--

CREATE TABLE `t3_title` (
  `id` int(10) UNSIGNED NOT NULL,
  `img` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `dpy` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `t3_title`
--

INSERT INTO `t3_title` (`id`, `img`, `text`, `dpy`) VALUES
(1, '01B01.jpg', '卓越科技大學校園資訊系統', 0),
(2, '1563176045_01B02.jpg', '卓越科技大學校園資訊系統', 1),
(3, '01B03.jpg', '卓越科技大學校園資訊系統', 0),
(4, '01B04.jpg', '卓越科技大學校園資訊系統', 0);

-- --------------------------------------------------------

--
-- 資料表結構 `t4_maqe`
--

CREATE TABLE `t4_maqe` (
  `id` int(10) UNSIGNED NOT NULL,
  `text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `dpy` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `t4_maqe`
--

INSERT INTO `t4_maqe` (`id`, `text`, `dpy`) VALUES
(1, '轉知臺北教育大學與臺灣師大合辦第11屆麋研齋全國硬筆書法比賽活動', 1),
(2, '轉知:法務部辦理「第五屆法規知識王網路闖關競賽辦法', 1),
(3, '轉知2012年全國青年水墨創作大賽活動', 1),
(4, '欣榮圖書館101年悅讀達人徵文比賽，歡迎全校師生踴躍投稿參加', 1),
(5, '轉知:教育是人類升沉的樞紐-2013教師生命成長營', 1);

-- --------------------------------------------------------

--
-- 資料表結構 `t5_mvim`
--

CREATE TABLE `t5_mvim` (
  `id` int(10) UNSIGNED NOT NULL,
  `img` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `dpy` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `t5_mvim`
--

INSERT INTO `t5_mvim` (`id`, `img`, `dpy`) VALUES
(1, '1563237935_01C01.swf', 1),
(2, '01C02.swf', 1),
(3, '01C03.swf', 1),
(4, '01C04.swf', 1);

-- --------------------------------------------------------

--
-- 資料表結構 `t6_img`
--

CREATE TABLE `t6_img` (
  `id` int(10) UNSIGNED NOT NULL,
  `img` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `dpy` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `t6_img`
--

INSERT INTO `t6_img` (`id`, `img`, `dpy`) VALUES
(1, '01D01.jpg', 1),
(2, '01D02.jpg', 1),
(3, '01D03.jpg', 1),
(11, '01D04.jpg', 1),
(12, '01D05.jpg', 0),
(13, '01D06.jpg', 1);

-- --------------------------------------------------------

--
-- 資料表結構 `t7_total`
--

CREATE TABLE `t7_total` (
  `id` int(10) UNSIGNED NOT NULL,
  `num` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `t7_total`
--

INSERT INTO `t7_total` (`id`, `num`) VALUES
(1, 5573);

-- --------------------------------------------------------

--
-- 資料表結構 `t8_footer`
--

CREATE TABLE `t8_footer` (
  `id` int(10) UNSIGNED NOT NULL,
  `text` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `t8_footer`
--

INSERT INTO `t8_footer` (`id`, `text`) VALUES
(1, '頁尾版權宣告文字');

-- --------------------------------------------------------

--
-- 資料表結構 `t9_news`
--

CREATE TABLE `t9_news` (
  `id` int(10) UNSIGNED NOT NULL,
  `text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `dpy` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `t9_news`
--

INSERT INTO `t9_news` (`id`, `text`, `dpy`) VALUES
(1, '教師研習「世界公民生命園丁國內研習會」\r\n1.主辦單位：世界展望會\r\n2.研習日期：101年11月14日（三）～15日（四）\r\n3.詳情請參考：\r\nhttp://gc.worldvision.org.tw/seed.html。\r\n請線上報名。', 1),
(2, '公告綜合高中一年級英數補救教學時間\r\n上課日期:10/27.11/3.11/10.11/24共計四次\r\n上課時間:早上8:00~11:50半天\r\n費用:全程免費\r\n參加同學:綜合科一年級第一次段考成績需加強者\r\n已將名單送交各班及導師\r\n參加同學請帶紙筆.課本.第一次段考考卷\r\n並將家長通知單給家長\r\n若有任何疑問\r\n請洽綜合高中學程主任', 1),
(3, '102年全國大專校院運動會\r\n「主題標語及吉祥物命名」\r\n網路票選活動\r\n一、活動期間：自10月25日起至11月4日止。\r\n二、相關訊息請上宜蘭大學首頁連結「102全大運在宜大」\r\n活動網址：http://102niag.niu.edu.tw/', 1),
(4, '台灣亞洲藝術文化教育交流學會第一屆年會國際研討會\r\n活動日期：101年3月3～4日(六、日)\r\n活動主題：創造力、文化、全人教育\r\n有意參加者請至http://www.caaetaiwan.org下載報名表', 1),
(5, '11月23日(星期五)將於彰化縣田尾鄉菁芳園休閒農場\r\n舉辦「高中職生涯輔導知能研習」\r\n中區學校每校至多2名\r\n以普通科、專業類科教師優先報名參加\r\n生涯規劃教師次之，參加人員公差假\r\n並核實派代課\r\n當天還有專車接送(8:35前在員林火車站集合)\r\n如此好康的機會，怎能錯過？！\r\n熱烈邀請師長們向輔導室(分機234)報名\r\n名額有限，動作要快！！\r\n報名截止日期：本周四 10月25日17:00前！', 1),
(6, '台視百萬大明星節目辦理海選活動\r\n時間:101年10月27日下午13時\r\n地點:彰化', 1);

-- --------------------------------------------------------

--
-- 資料表結構 `t10_admin`
--

CREATE TABLE `t10_admin` (
  `id` int(10) UNSIGNED NOT NULL,
  `acc` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `pwd` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `t10_admin`
--

INSERT INTO `t10_admin` (`id`, `acc`, `pwd`) VALUES
(1, 'admin', '1234'),
(2, '11', '33'),
(3, '22', '22');

-- --------------------------------------------------------

--
-- 資料表結構 `t12_menu`
--

CREATE TABLE `t12_menu` (
  `id` int(10) UNSIGNED NOT NULL,
  `text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `parent` int(11) NOT NULL,
  `dpy` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `t12_menu`
--

INSERT INTO `t12_menu` (`id`, `text`, `link`, `parent`, `dpy`) VALUES
(1, '管理登入', 'login.php', 0, 1),
(2, '網站首頁', 'index.php', 0, 1),
(3, '更多內容', 'news.php', 2, 1),
(4, 'DEMO測試', 'http://www.google.com/', 0, 1),
(6, 'AA', '11', 4, 0),
(10, 'EE', '55', 4, 0);

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `t3_title`
--
ALTER TABLE `t3_title`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `t4_maqe`
--
ALTER TABLE `t4_maqe`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `t5_mvim`
--
ALTER TABLE `t5_mvim`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `t6_img`
--
ALTER TABLE `t6_img`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `t7_total`
--
ALTER TABLE `t7_total`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `t8_footer`
--
ALTER TABLE `t8_footer`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `t9_news`
--
ALTER TABLE `t9_news`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `t10_admin`
--
ALTER TABLE `t10_admin`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `t12_menu`
--
ALTER TABLE `t12_menu`
  ADD PRIMARY KEY (`id`);

--
-- 在傾印的資料表使用自動增長(AUTO_INCREMENT)
--

--
-- 使用資料表自動增長(AUTO_INCREMENT) `t3_title`
--
ALTER TABLE `t3_title`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- 使用資料表自動增長(AUTO_INCREMENT) `t4_maqe`
--
ALTER TABLE `t4_maqe`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- 使用資料表自動增長(AUTO_INCREMENT) `t5_mvim`
--
ALTER TABLE `t5_mvim`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- 使用資料表自動增長(AUTO_INCREMENT) `t6_img`
--
ALTER TABLE `t6_img`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- 使用資料表自動增長(AUTO_INCREMENT) `t7_total`
--
ALTER TABLE `t7_total`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- 使用資料表自動增長(AUTO_INCREMENT) `t8_footer`
--
ALTER TABLE `t8_footer`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- 使用資料表自動增長(AUTO_INCREMENT) `t9_news`
--
ALTER TABLE `t9_news`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- 使用資料表自動增長(AUTO_INCREMENT) `t10_admin`
--
ALTER TABLE `t10_admin`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- 使用資料表自動增長(AUTO_INCREMENT) `t12_menu`
--
ALTER TABLE `t12_menu`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
