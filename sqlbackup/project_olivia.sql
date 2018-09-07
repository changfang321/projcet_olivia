-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- 主機: 127.0.0.1
-- 產生時間： 2018-09-07 03:22:12
-- 伺服器版本: 10.1.34-MariaDB
-- PHP 版本： 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `project_olivia`
--

-- --------------------------------------------------------

--
-- 資料表結構 `customer_orders`
--

DROP TABLE IF EXISTS `customer_orders`;
CREATE TABLE `customer_orders` (
  `customer_orders_id` int(11) NOT NULL,
  `status` int(11) DEFAULT NULL COMMENT '0:未付款 1:已付款 2:已出貨 3:已送達(交易完成) 99:取消訂單',
  `order_no` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `order_date` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `members_id` int(11) NOT NULL,
  `total_price` int(11) NOT NULL,
  `shipping` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `mobile` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `zipcode` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `county` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `district` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `memo` text COLLATE utf8_unicode_ci NOT NULL,
  `payment` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `delivery` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `updated_at` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- 資料表結構 `members`
--

DROP TABLE IF EXISTS `members`;
CREATE TABLE `members` (
  `members_id` int(11) NOT NULL,
  `account` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `birthday` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mobile` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `gender` int(11) DEFAULT NULL COMMENT '0:女 1:男',
  `email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `zipcode` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `county` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `district` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `vip` int(11) DEFAULT NULL COMMENT '0:一般會員 1:vip會員',
  `money` int(11) DEFAULT NULL COMMENT '購物金',
  `created_at` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `updated_at` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 資料表的匯出資料 `members`
--

INSERT INTO `members` (`members_id`, `account`, `password`, `name`, `birthday`, `phone`, `mobile`, `gender`, `email`, `zipcode`, `county`, `district`, `address`, `vip`, `money`, `created_at`, `updated_at`) VALUES
(1, 'ad5566', 'ad5566', '陳先生', '2018-55-66', '', '', 0, '', '', '', '', '', 0, 0, '', ' 2018-08-31 15:52:43 '),
(2, 'majojo', 'majojo', '羅大明', NULL, '', '', 0, '', '', '', '', '', 0, 0, NULL, NULL),
(9, 'xxxx', 'xxxxxx', 'xxxxx', '', '', 'xxxxxxx', 0, 'xxxxxxxxxx', '', '', '', '', 0, 0, NULL, NULL);

-- --------------------------------------------------------

--
-- 資料表結構 `news`
--

DROP TABLE IF EXISTS `news`;
CREATE TABLE `news` (
  `news_id` int(11) NOT NULL,
  `published_date` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `content` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `updated_at` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 資料表的匯出資料 `news`
--

INSERT INTO `news` (`news_id`, `published_date`, `title`, `content`, `created_at`, `updated_at`) VALUES
(1, '2018-08-22', '中元節特賣會', '<p>&nbsp;<img src=\"../../images/images.jpg\" alt=\"\" /></p>\r\n<p>*特賣會活動日期：2018/08/09(四)~2018/08/26(日)</p>\r\n<p>*特賣商品每日限量供應,限門市取貨</p>\r\n<p>*優惠活動恕無法合併使用,須獨立訂購</p>\r\n<p>&nbsp;</p>\r\n<p>*此商品僅有提供門市取貨</p>\r\n<p>*結帳畫面,因系統關係會顯示\"宅配到府-免運費\"所屬正常唷,</p>\r\n<p>取貨方式一樣為門市自取唷!!</p>', '2018-08-22 19:00:01', '2018-08-31 10:47:03'),
(2, '2018-08-22', '麵包酵母都是天然的 ', '<p>如果說麵包是一座舞台、麵粉配料是演員，「酵母」形容作靈魂則一點都不為過，酵母在麵包麵團中為了傳承自己的生命，會吃掉小麥的糖並排出二氧化碳與酒精，漸漸產出的氣泡，則能使麵包產生膨大的效果，它不如麵粉帶給麵包扎實麥香，也不如配料吸睛，只是身扮穿針引線的角色，靠著一呼一吸留下麵包每一口令人享受的蓬鬆質地。</p>\r\n<p>自然界發酵菌種約有1500種之多，可用於麵包發酵的僅約350餘種，這些酵母菌在摻入麵團後，以醣類作為養分，利用醣類產生能量，最後呼出代謝產物二氧化碳，在麵包師的巧手下，麵粉中的蛋白質在搓揉中漸漸形成麵筋結構，將氣泡細密包覆，烘烤過程氣體逸散留下了麵包氣孔。針對使用特性的不同，酵母選用也可再作細分，該如何混合靈活運用，那就是麵包師傅的KNOW HOW了。</p>\r\n<p><strong>酵母配方是麵包師傅寶貴的鎮店「KNOW HOW」！</strong></p>\r\n<p>所謂的自養野生酵母，是利用空氣中或附著在蔬果或香草等食材上的野生酵母菌增殖而來，而野生酵母除了含有較多元的酵母菌種之外，尚有乳酸菌、醋酸菌、米根霉菌等存在，因此在培育酵母的過程中不僅有乙醇、多元醇等，甚至會有各種酸類來合成風味豐富的酯類，這也是為什麼天然酵母麵包受到歡迎的原因，因為它的滋味比商用酵母所製成的麵包更深厚。</p>\r\n<p>然而，世界上之所以會出現商用酵母也不是沒有原因，商用酵母可經廠商挑選出適合麵包製作的菌種，意指選用出芽增殖速度較為適中的優勢菌種，剔除容易在短時間內大量生長進而導致養分不足而死亡，或是生長速度較慢而發酵力不足等弱勢菌種，由於菌種種類單純而平均，讓烘焙初學者更能夠掌控變因，在製作過程中提高穩定性以及發酵成功的機率。</p>\r\n<p>商用酵母經低溫或冷凍乾燥處理的速發酵母，因為含水量較低，所以在運輸以及存放上會比較方便，有效時間也更長，但在製程中所導致的死滅程度較高，但這不打緊，據日正食品工業股份有限公司執行副總李采慧表示，每份速發酵母中含有一定的活菌量，因此在使用過程中，可依靠這些存活菌再度出芽增殖至麵包發酵所需要的用量。</p>\r\n<p>李采慧表示，擁有自養酵母技術的麵包師傅，大多會開始脫離商用酵母而著手開發自己的酵母配方，哪些菌適合用作哪些口感的麵包種類，雖然有特定商業模式可以參考，但仍需要有豐富烘培經驗的師傅才可了解其中的奧妙，進而做出不同風味口感的產品，大多師傅會利用自養酵母再加入部分商用酵母的方式烘焙，如此便能同時保有商用酵母的烘焙效率，以及自養酵母多層次的風味底蘊，比例拿捏、搭配天氣溫濕環境的掌控，都是門經驗藝術。</p>', '2018-08-22 19:03:10', NULL);

-- --------------------------------------------------------

--
-- 資料表結構 `order_details`
--

DROP TABLE IF EXISTS `order_details`;
CREATE TABLE `order_details` (
  `order_details_id` int(11) NOT NULL,
  `products_id` int(11) NOT NULL,
  `customer_orders_id` int(11) NOT NULL,
  `picture` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `price` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `created_at` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `updated_at` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- 資料表結構 `pages`
--

DROP TABLE IF EXISTS `pages`;
CREATE TABLE `pages` (
  `pages_id` int(11) NOT NULL,
  `page_pic` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `content` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `updated_at` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 資料表的匯出資料 `pages`
--

INSERT INTO `pages` (`pages_id`, `page_pic`, `title`, `content`, `created_at`, `updated_at`) VALUES
(1, NULL, '企業精神', '<p>歐買尬立食品股份有限公司於一九八五年九月於台北建立，並以聖瑪莉「SUNMERRY」為名，於信義路永康街開設第一家麵包屋，多年來已成為永康街的地標，將嶄新的商品與日式服務帶進台灣，打開烘焙市場邁入另一新紀元，至今門市已達23家，分布大台北地區。</p>\r\n<p>聖瑪莉著重於麵包、蛋糕事業方向發展，整個企業精神正如「SUNMERRY」象徵著永遠「明亮」、「溫暖」、「健康」、「快樂」。</p>\r\n<p>聖瑪莉亦善盡企業對社會的責任。我們贊助正當的社會公益活動，長期協助「食物銀行」幫助弱勢族群；支持環境保育觀念；提供殘障朋友及二度就業婦女工作機會：協助青年學生的學習研究，提供餐飲科系學生建教合作環境。我們希望能藉著對社會的回饋，將「明亮、溫暖、健康、歡樂」傳播到每一個角落。</p>\r\n<p>聖瑪莉秉持著創業精神研發及創新，為每位消費者健康嚴格把關，將幸福的滋味帶入每個家庭。</p>\r\n<p>2012年聖瑪莉為了帶給顧客全新印象，進行企業重新定位，也以新LOGO示人。</p>\r\n<p>聖瑪莉以烘焙主業出發，標誌以基本烘焙形體麵包形狀作為元素，重疊的形體營造出聖瑪莉的對於烘焙及對於大眾的用心；上方的星形則象徵成果的加冕，意味著聖瑪莉在專業上的成就。</p>\r\n<p>整體以&rdquo;用聖瑪莉的心，觸動美好的味覺饗宴＂，象徵聖瑪莉以最好的味覺，觸動大眾你我的心。</p>', '2018-08-14 09:40:35', '2018-08-29 12:35:37'),
(2, NULL, '企業精神', '<p>因為夢想而投入 堅持幸福的口味 秉持所學的專業 創造不凡的價值 聖瑪莉固守傳統美味的堅持,也安排進修至各地學習新手藝，更積極參與各項烘焙競賽，捷報及獲獎不斷。 堅持食材的新鮮安全及用料的實在。 聖瑪莉得獎記錄 2006年 冠軍美國乳酪母親節創意蛋糕比賽 2006年 優選獎台北伴手禮鳳梨酥大賞 2006年 創意獎菠蘿狂想曲品鑑會 2006年 創意銅獎吐司比賽「紅麴蔓越莓吐司」 2006年 人氣銅獎吐司比賽「甜心吐司」 2007年 金選獎台北市創意鳳梨酥 2007年 評審團最佳人氣獎菠蘿狂想曲比賽 2007年 優選獎歡樂聖誕派對 創意乳酪蛋糕 2007年 優選獎歡樂聖誕派對 聖誕水果蛋糕 2008年 創意蛋糕銅鑽獎母親節創意蛋糕大賽 2009年 蛋糕人氣王台北市美國黃豆烘焙競賽 2010年 優勝第二屆加州葡萄乾創意烘焙大賽 2011年 台式軟麵包四大天王烘焙競賽最佳人氣獎 2011年 母親節蛋糕芋泥類組報章評比第二名 2013年加州葡萄乾暨加州乳酪烘焙爭霸賽西點組冠軍S</p>', '2018-08-14 09:44:49', '2018-08-28 18:05:59'),
(3, NULL, '管理風格', '<p>聖瑪莉以顧客為首要, 作業人員維持優良且標準的生產銷售作業，以二十坪即可設立「現烤麵包、西點、現調飲品」複合店，坪效高、功能性強，後勤組織強大，舉凡會議餐盒、外燴點心，都能合乎標準供應。 近年聖瑪莉完整導入產銷POS系統及ERP管理系統全程電腦化，讓公司營運管理更加準確完善 ,從商品的開發,設計方向,消費者權益,我們不斷再檢討,如何才能更好. 2008年起，結合咖啡茶飲的複合店陸續成立，嶄新的形象讓顧客選擇更多樣化。二ＯＯ九年起跨足大型網路購物平台，讓美食零時差，提供全省各地顧客便捷的購物方式。二Ｏ一Ｏ年為止，我們在台北擁有近八百坪的中央工廠、三家分工廠、十九間麵包屋，分別位於台北精華區域、捷運站、各大教學醫院等。 生產管理技術之海外合作 一九九四年，我們在美國紐約的第一家店也已成立。並陸續將成熟的生產及管理技術輸出至海外華人社會。 2002年 與美國大華超市(99 RAMCH)簽訂麵包店技術合作契約。 2003年 與印尼華商簽訂技術合作，協助在雅加達設立麵包連鎖店 2011年 與加拿大大統華超市簽訂麵包店正式合作</p>', '2018-08-14 09:45:04', '2018-08-28 18:05:09');

-- --------------------------------------------------------

--
-- 資料表結構 `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE `products` (
  `products_id` int(11) NOT NULL,
  `product_categories_id` int(11) NOT NULL,
  `type` int(11) DEFAULT NULL COMMENT '1:new  2:sell',
  `picture` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `price` int(11) NOT NULL,
  `created_at` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `updated_at` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 資料表的匯出資料 `products`
--

INSERT INTO `products` (`products_id`, `product_categories_id`, `type`, `picture`, `name`, `description`, `price`, `created_at`, `updated_at`) VALUES
(35, 9, NULL, 'Chrysanthemum.jpg', '菊花', '<p>香蕉</p>', 500, '2018-08-30 16:42:33', '2018-09-05 15:20:01'),
(36, 10, NULL, 'ballcactus.jpg', '球型仙人掌', '有盆友叫它草球，又名長盛球，為仙人科多年生多肉草本植物，它是雙子葉仙人掌科。狹義是指仙人掌科，而廣義上的仙人球則泛指所有球狀或近似於球狀的仙人掌類植物。\r\n', 100, '2018-09-05 11:45:29', NULL),
(37, 10, NULL, 'whitep.jpg', '白鳳', '多肉界的貴妃「白鳳」，為什麼稱她為貴妃？看到他的外型你就知道，粉粉嫩嫩又白白胖胖的，整片葉子裹著細緻的白粉，顏色牛奶綠裡透著海綿蛋糕的柔和黃色、葉緣如輕拍上粉色腮紅妖嬌動人，讓人不多看他幾眼都難！\r\n\r\n這麼漂亮的白鳳，春夏秋冬都可以活得很好，唯一要注意的是夏天超過 35 度 C 時，顏色會退成青綠色，葉形扁而細長，這是休眠的表徵，並不是死亡的前兆唷！若種植超過一年以上，每一片葉子都像是手掌般的大，越種越有成就ㄚ感！建議入手時間是每年的春秋二季，正是白鳳的生長季節，在這兩個季節入手，通常也可以觀賞到他慢慢變色過程。而剛剛提到的「白粉」可不要以為是髒髒的粉塵而將他洗掉喔，白粉是多肉植物的防曬乳，不僅好看也好用，許多多肉玩家更將保存植物上的白粉為職志，具有重要的觀賞價值，是不容侵擾的喔！若想要他越來越大可以每年秋天幫他換盆，他可是多肉界的乖寶寶呢！', 80, '2018-09-05 11:51:45', NULL),
(38, 10, NULL, 'twelve.jpg', '十二之卷', '相信許多人都對「十二之卷」這品多肉植物不陌生，不論在花市或在送禮盆栽組上都很常見，他跟一般大家所習慣的花型多肉樣貌不太一樣，沒有像剛剛介紹的白鳳一樣有肥厚的葉子，看他的樣子：尾端尖尖的，看起來很扎人，實際上不刺不會傷人，摸起來反而硬硬 QQ 的，有另一種扎實的療癒感。\r\n\r\n十二之卷是相當能耐蔭的多肉植物，換句話說他對於陽光需求度沒有這麼高，把他種在散光處即可，陽光直射處（太陽照到有影子的地方）就給那些需要很多陽光、容易徒長的多肉，辦公室內、陽台的邊邊角角、木架的第二層，就交給十二之卷了！\r\n\r\n如果想要找一種多肉植物擁有以下其他的優點：可安放於室內，長大型態不易變形走鐘，強韌生命力，那十二之卷正是你的首選啦！', 100, '2018-09-05 11:52:28', NULL),
(39, 10, NULL, 'whitehat.jpg', '白烏帽子', '喜歡多肉植物的你，這品多肉你一定認識（ 你知道仙人掌也是多肉植物家族成員嗎？）， 很多人來有肉店裡都要指定找他呢！扁平的外型， 若是上頭長了兩個小側芽，就像米老鼠般可愛；若是長了 4-5 片小側芽，還有人覺得像腳丫子一樣，是不是很逗趣呢？\r\n\r\n日本又稱白烏帽子為「白桃扇」、台灣會叫他米老鼠， 之前到日本旅遊時，幸運看到開花的白烏帽子，因為他的花期很短， 盛開時只有一天，所以能看到他真正開花的模樣真是太開心啦！ 不過呢，別因為他全身長滿白色毛毛的萌樣就輕忽大意， 仔細一看這些其實是一團一團的「刺」呢， 一根一根密密麻麻的刺同時長在一個刺座上，如果要動手摸摸他， 一定要注意施力的力道，因為刺很細小又尖銳， 被扎到的感覺真的不太好呀。\r\n\r\n白烏帽子不是這麼適合野放，長時間的淋雨容易造成底部接觸土的那段軟軟爛爛的，但是偶爾為之的淋雨沒問題喔！在夏天的生長速度也很快，一團一團的往上長，若要繁殖他可以戴上手套將 2-3 段的部分摘除，再插進多肉植物專用介質裡即可繁殖喔！', 80, '2018-09-05 11:54:13', NULL),
(40, 10, 2, 'butterfly.jpg', '蝴蝶之舞錦', '蝴蝶的美，可是大家有目共睹的呀！「蝴蝶之舞錦」有趣的地方不只是這些線條與斑塊間的色彩變化。他的葉子本身就帶點粉紅色，經過低溫後，你會發現葉片的粉紅色更加深了，在太陽照射下看起來真的是十分嬌艷可愛。除此之外，如果下雨或是水分充足的時候，兩兩相對的葉子會開展成幾乎一直線，出太陽或是乾旱的時候又都會全部向內併攏。這些變化也增添他的觀賞價值。\r\n\r\n不過想要他有如此美麗的色澤變化，必定要種植在戶外，讓他天天行光合作用！曾經有網友傳他自己種的蝴蝶照片給我們看，詢問為什麼他的蝴蝶翅膀都塌塌的看起來沒什麼精神，摸起來也不如之前有彈性，這就是他缺光的表徵喔！此時就要將他多多曬太陽，尤其是在秋天到春天這三個季節，正常行光合作用就像是強健他的植株健康，身體健康了也會活得更久喔！', 120, '2018-09-05 11:55:06', NULL),
(41, 10, 1, 'silverbon.jpg', '銀之太鼓', '銀之太鼓的顏色是否顛覆你對於植物的想像？摸起來的觸感有點粗粗的，不像是葉子的滑面質感，看起來一點都不綠，長得慢慢的，很多人會懷疑這到底是真的植物嗎？不用懷疑，他是真的多肉，而且還非常好照顧！\r\n\r\n大多數的伽藍菜屬都沒有渡夏問題，除了銀之太鼓，兔耳、虎斑伽藍葉都很推薦新手種植，不需因應季節而改變澆水頻率與水量，在半日照的戶外種植，都會長得滿好的喔！想知道怎麼繁殖他？點這裡繼續閱讀！', 120, '2018-09-05 12:35:22', '2018-09-05 12:36:32'),
(42, 10, NULL, 'greend.jpg', '綠鑽', '這片綠油油的小草地，他也是多肉植物喔！而且也是超級好種讓人非常有成就感的小品，其實他就是火龍果的小時候喔，別懷疑，就是我們很愛吃的水果火龍果的莖，而我們食用的是果實。他還是小小芽的時候有個特別的稱號，他叫「綠鑽」，像綠色的鑽石一點一點的在發亮！看起來是不是特別療癒，你也可以在辦公室種上一盆，看他長大的模樣真是太療癒了呀～', 100, '2018-09-05 12:37:13', NULL),
(43, 10, 1, 'carresun.jpg', '加州夕陽', '加州夕陽是這篇介紹裡唯一一款澄黃色的多肉植物，因為有交種到風車草屬，所以變成老欉時，莖也會像蛇一樣亂竄，葉子比較細長、葉面上有稜角，這兩張圖片顏色會差比較多的原因是：陽光的多寡。想要多肉植物有顏色明顯的變化，陽光與低溫是兩種不可或缺的條件！第一張是夏天時的加州夕陽，顏色偏青綠。而第二張是冬天時的加州夕陽，黃中帶橘，在更冷的時候甚至於橘色部分會變更多，簡直像電影 LA LA LAND 裡美麗的橘黃色夕陽。所以別怕他曬太陽、他也沒有渡夏的問題，現在開始入手，到接下來的夏天繼續種植也沒有問題喔！', 150, '2018-09-05 12:42:57', NULL),
(44, 10, 2, 'rabbitear.jpg', '千兔耳', '千兔耳是兔耳家族系列的多肉喔，葉色為灰綠色，無星點，表面鋪著一層短短的絨毛質感，在所有兔耳裡葉型是最特別的，方而短，邊緣微鋸齒。雖說是春秋季生多肉，不過在夏天也會長得很好唷！這兩張照片都是在戶外生長的樣子，若是室內種植，葉子看起來軟塌而偏枯黃，有時候動手捏一捏觸摸一下多肉的觸感，也是檢查多肉是否健康的好方法唷！\r\n\r\n這篇介紹到很多「伽藍菜屬」的多肉植物，蝴蝶之舞錦、銀之太鼓亦是同科屬，為什麼要大力推薦他們呢？因為在台灣伽藍菜屬幾乎等於「多肉界好寶寶」的代表，好照顧又沒有渡夏問題！\r\n\r\n而春天是兔子們（千兔耳、仙女之舞家族、月兔耳家族）適合砍頭的好時光，接下來也是他們發根發芽爆盆的季節，家裡有千兔耳的朋友們，跟著我們的步驟教學，準備～越種越多啦！', 70, '2018-09-05 12:43:08', NULL);

-- --------------------------------------------------------

--
-- 資料表結構 `product_categories`
--

DROP TABLE IF EXISTS `product_categories`;
CREATE TABLE `product_categories` (
  `product_categories_id` int(11) NOT NULL,
  `category` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `picture` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `updated_at` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `order` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 資料表的匯出資料 `product_categories`
--

INSERT INTO `product_categories` (`product_categories_id`, `category`, `picture`, `created_at`, `updated_at`, `order`) VALUES
(9, '花澤類', 'Hydrangeas.jpg', ' 2018-08-30 14:35:23 ', '2018-09-05 16:25:49', 0),
(10, '多肉植物類', 'plant-v.jpg', ' 2018-09-05 11:44:19 ', '2018-09-05 16:29:06', 0);

-- --------------------------------------------------------

--
-- 資料表結構 `staff`
--

DROP TABLE IF EXISTS `staff`;
CREATE TABLE `staff` (
  `staff_id` int(11) NOT NULL,
  `staff_pic` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `position` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `self_description` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- 資料表結構 `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `users_id` int(1) NOT NULL,
  `account` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `level` int(11) NOT NULL COMMENT '"0:一般使用者  1:總管理者 2:經銷商"',
  `created_at` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `updated_at` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 資料表的匯出資料 `users`
--

INSERT INTO `users` (`users_id`, `account`, `password`, `level`, `created_at`, `updated_at`) VALUES
(1, 'admin5566', 'admin5566', 1, NULL, NULL),
(2, 'ad56', 'ad56', 1, NULL, NULL);

--
-- 已匯出資料表的索引
--

--
-- 資料表索引 `customer_orders`
--
ALTER TABLE `customer_orders`
  ADD PRIMARY KEY (`customer_orders_id`);

--
-- 資料表索引 `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`members_id`);

--
-- 資料表索引 `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`news_id`);

--
-- 資料表索引 `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`order_details_id`);

--
-- 資料表索引 `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`pages_id`);

--
-- 資料表索引 `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`products_id`);

--
-- 資料表索引 `product_categories`
--
ALTER TABLE `product_categories`
  ADD PRIMARY KEY (`product_categories_id`);

--
-- 資料表索引 `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`staff_id`);

--
-- 資料表索引 `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`users_id`);

--
-- 在匯出的資料表使用 AUTO_INCREMENT
--

--
-- 使用資料表 AUTO_INCREMENT `customer_orders`
--
ALTER TABLE `customer_orders`
  MODIFY `customer_orders_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- 使用資料表 AUTO_INCREMENT `members`
--
ALTER TABLE `members`
  MODIFY `members_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- 使用資料表 AUTO_INCREMENT `news`
--
ALTER TABLE `news`
  MODIFY `news_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- 使用資料表 AUTO_INCREMENT `order_details`
--
ALTER TABLE `order_details`
  MODIFY `order_details_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- 使用資料表 AUTO_INCREMENT `pages`
--
ALTER TABLE `pages`
  MODIFY `pages_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- 使用資料表 AUTO_INCREMENT `products`
--
ALTER TABLE `products`
  MODIFY `products_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- 使用資料表 AUTO_INCREMENT `product_categories`
--
ALTER TABLE `product_categories`
  MODIFY `product_categories_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- 使用資料表 AUTO_INCREMENT `staff`
--
ALTER TABLE `staff`
  MODIFY `staff_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- 使用資料表 AUTO_INCREMENT `users`
--
ALTER TABLE `users`
  MODIFY `users_id` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
