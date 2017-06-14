-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- 主機: 127.0.0.1
-- 產生時間： 2017-06-14 17:03:58
-- 伺服器版本: 10.1.13-MariaDB
-- PHP 版本： 5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `finaltheater`
--
CREATE DATABASE IF NOT EXISTS `finaltheater` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `finaltheater`;

-- --------------------------------------------------------

--
-- 資料表結構 `booker`
--

CREATE TABLE `booker` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `phonenumber` varchar(10) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `session` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `seat` int(11) NOT NULL,
  `movieid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 資料表的匯出資料 `booker`
--

INSERT INTO `booker` (`id`, `name`, `phonenumber`, `Email`, `session`, `date`, `seat`, `movieid`) VALUES
(1, '黃偉傑', '0978270090', 'b10217002@gmail.com', 'C', 'B', 7, 2),
(2, '任賢齊', '0917802228', 'B10217002@yuntech.edu.tw', 'D', 'A', 18, 2),
(3, '金城武', '0960006008', 'b10217005@yuntech.edu.tw', 'C', 'C', 33, 2);

-- --------------------------------------------------------

--
-- 資料表結構 `movielist`
--

CREATE TABLE `movielist` (
  `id` int(10) NOT NULL,
  `mname` varchar(50) NOT NULL,
  `mlength` varchar(10) NOT NULL,
  `mpublish` varchar(50) NOT NULL,
  `mlanguage` varchar(5) NOT NULL,
  `mdegree` varchar(5) NOT NULL,
  `mdirector` varchar(50) NOT NULL,
  `mactor` varchar(20) NOT NULL,
  `mcontent` text NOT NULL,
  `mimgpath` varchar(50) NOT NULL,
  `mvideopath` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 資料表的匯出資料 `movielist`
--

INSERT INTO `movielist` (`id`, `mname`, `mlength`, `mpublish`, `mlanguage`, `mdegree`, `mdirector`, `mactor`, `mcontent`, `mimgpath`, `mvideopath`) VALUES
(1, '飢餓遊戲3：自由幻夢I', '2小時3分鐘', '2014年11月21日', '英語', '輔15級', '芙蘭西斯・路易斯', '珍妮佛・勞倫斯，喬許・哈契遜', '<p>故事承接上一集，敘述凱妮絲在遊戲中獲救後將與普魯塔克和黑密契對都城展開革命....。</p>\r\n\r\n<p>「燃燒的女孩」凱妮絲艾佛丁在大旬祭上被反抗軍救走，比德卻不幸落入都城手裡。</p>\r\n\r\n<p>凱妮絲被帶到傳說中已成廢墟的第13區，在反抗軍領袖柯茵和戰友支持下，銜命成為革命的象徵，領導施惠國各區叛變，對抗專制又腐敗的都城，同時也心繫比德安危，傾力籌劃營救行動。</p>\r\n\r\n<p>隨著這場決定施惠國命運的戰爭愈演愈烈，凱妮絲也漸漸察覺，遊戲根本從未結束，她必須先確定該信任誰，以免危及所愛的一切！</p>', 'images/Alaycikus.jpg', '<iframe width=''854'' height=''480'' src=''https://www.youtube.com/embed/xrIckmZdFyo'' frameborder=''0'' allowfullscreen></iframe>'),
(2, '再見，在也不見', '1小時48分鐘', '2016年5月20日', '中文', '保護級', 'Sivaroj Kongsakul， Yukun Xin， Shijie Tan', '陳柏霖、蔣雯麗、楊祐寧、秦沛', '<p>情感糾結的經理出差時遇見了似曾相識的老人，展開內心的一場搜索；</p>\r\n\r\n<p>初為人父的青年收到挂號信遠赴異鄉，深埋多年的情感一觸即發；</p>\r\n\r\n<p>客座異鄉教授意外撥動了女學生心弦，他卻執著於過去放不下的一段情。</p>\r\n\r\n<p>三段時空，不同的角色，不同的關係，相同的人性探索，再見之後，各自在迷失中找尋方向。</p>', 'images/distance.jpg', '<iframe width=''854'' height=''480'' src=''https://www.youtube.com/embed/OQYEraG5BxQ'' frameborder=''0'' allowfullscreen></iframe>'),
(3, '暮光之城：蝕', '2小時11分鐘', '2016年4月15日', '英語', '保護級', 'David Slade', '羅伯・派汀森，克莉絲汀・史都華', '<p>電影一開場西雅圖便發生連串的吸血鬼噬人殺戮事件，</p>\r\n<p>原來是首集就出現的流浪吸血鬼維多利亞回來展開復仇計畫。</p>\r\n<p>她為了替被庫倫家族殺死的男友詹姆斯報仇，組成一支危險凶殘的「新生吸血鬼軍團」大開殺戒，</p>\r\n<p>但最終的目標就是愛德華的最愛──身為人類的貝拉。</p>\r\n<p>雅各為保護身陷險境的貝拉，決定帶領狼族與吸血鬼庫倫家族合作，</p>\r\n<p>力抗維多利亞的吸血鬼大軍，風聲鶴唳中，血戰一觸即發！</p>', 'images/eclipse.jpg', '<iframe width=''854'' height=''480'' src=''https://www.youtube.com/embed/03ea0TFETK8'' frameborder=''0'' allowfullscreen></iframe>'),
(4, '失控謊言', '1小時34分鐘', '2016年4月15日', '中文', '保護級', 'Lou Yi-An', '許瑋甯，陳庭妮', '<p>一宗命案，三個偶然重疊的生命，萬千謎團與深陷泥淖的真相。</p>\r\n<p>彩虹法藝老闆娘意外遇害，頸部被利刃深深劃開，老闆蘇俊傑（王柏傑 飾）離奇失蹤，</p>\r\n<p>陪同逃亡的竟是初戀情人周曉晨（許瑋甯 飾），</p>\r\n<p>沸沸揚揚的新聞事件，更引來周刊記者美玉（陳庭妮 飾）的密切關注，</p>\r\n<p>身為兩人國中同學的她，以協助澄清為由，取得獨家專訪機會，</p>\r\n<p>卻也意外抖出多年前另一起草草了結的命案。靈感取自70年代轟動台灣的真實社會案件，</p>\r\n<p>撲朔迷離的男女關係、懸疑難辨的兇殺真相，直指人性最深層的黑暗角落。</p>', 'images/lier.jpg', '<iframe width=''854'' height=''480'' src=''https://www.youtube.com/embed/vaNd2Iy7B54'' frameborder=''0'' allowfullscreen></iframe>'),
(5, '黑魔女', '1小時37分鐘', '2014年5月30日', '英語', '保護級', '勞勃・史東柏格', '安潔莉娜・裘莉', '<p>由經典童話《睡美人》改編，故事細述在《睡美人》中的反派-梅菲瑟如何轉變成這個內心極度黑暗的女巫。</p>\r\n<p>梅菲瑟從小生長在如仙境般與世隔絕的森林王國，兒時的她清秀亮麗，更有著一顆善良純真的心。</p>\r\n<p>直到有一天，這片森林受到外界武力的威脅，梅菲瑟只好武裝自己，捍衛這片土地，</p>\r\n<p>但在這過程中卻經歷無法承受的背叛，</p>\r\n<p>導致她成為一個鐵石心腸的女巫。為了復仇，梅菲瑟更對仍還是襁褓中嬰兒的奧蘿拉公主施予毒咒…但隨著時間的流逝，</p>\r\n<p>梅菲瑟漸漸了解，奧蘿拉公主也許是維持王國和平更是她打開心房的關鍵…</p>', 'images/Maleficent.jpg', '<iframe width=''854'' height=''480'' src=''https://www.youtube.com/embed/H6FoTn-fYDI'' frameborder=''0'' allowfullscreen></iframe>'),
(6, '007：空降危機', '2小時23分鐘', '2012年11月2日', '英語', '保護級', '山姆・曼德斯', '丹尼爾・克雷格', '<p>詹姆士龐德(丹尼爾克雷格飾)在伊斯坦堡的任務失敗後而失去蹤影，外界推測他已身亡，</p>\r\n<p>北約臥底探員資料竟因而外洩，身為龐德上司的M夫人(茱蒂丹契飾)因此受到情報安全</p>委員會新主席馬洛利(雷夫范恩斯飾)的強烈質疑，</p>\r\n<p>遂成為政府調查的對象。</p>', 'images/spy.jpg', '<iframe width=''854'' height=''480'' src=''https://www.youtube.com/embed/n_SapDJT2-I'' frameborder=''0'' allowfullscreen></iframe>'),
(7, '陣頭', '2小時4分鐘', '2012年1月20日', '中文', '普遍級', '馮凱', '黃鴻升、柯有綸、林雨宣、廖峻 ', '<p>阿泰出生自台中知名陣頭世家，</p>\r\n<p>小時調皮的他總拿家中陣頭神明搗蛋，是爸爸眼中不成才的兒子。</p>\r\n<p>而父子關係也因為他的叛逆持續緊張，但一次意外，</p>\r\n<p>阿泰竟陰錯陽差接下團長位置。不僅手下這一群由中輟生組成的陣頭團員，</p>\r\n<p>對這個血氣方剛的少爺充滿懷疑，另一個陣頭世家也等著看他好戲。</p>\r\n<p>上有長輩傳統，下有團員的質疑眼光，阿泰決定要用自己的方式證明，背起鼓、扛起神明，</p>\r\n<p>帶著一幫年輕團員跋山涉水，踏上環島之路，</p>\r\n<p>為台灣的陣頭文化闖出一番新氣息！</p>', 'images/dinto.jpg', '<iframe width=''854'' height=''480'' src=''https://www.youtube.com/embed/ZEPJQzVSveE'' frameborder=''0'' allowfullscreen></iframe>'),
(8, '破風', '2小時5分鐘', '2015年8月6日', '國語', '保護級', '林超賢', '彭于晏、崔始源、竇驍、王珞丹', '<p>炫光隊的韓籍車手鄭知元（崔始源飾），</p>\r\n<p>新人王仇銘（彭于晏飾）與邱田（竇驍飾）為他製造衝線機會。</p>\r\n<p>三人的完美配合，終戰勝強敵幽靈隊。</p>\r\n<p>然而，當鄭以勝利者姿態領獎時，兩人明白到王者，</p>\r\n<p>破風手始終只是破風手。</p>\r\n<p>各人被勝敗心魔所困，三人默契十足卻同時被利益薰心，漸漸喪失團隊精神。</p>\r\n<p>其後三人各散東西，各自有著不同經歷。</p>', 'images/tothefore.jpg', '<iframe width="854" height="480" src="https://www.youtube.com/embed/9pzolgpsbrM" frameborder="0" allowfullscreen></iframe>'),
(9, '黃飛鴻之英雄有夢', '2小時11分鐘', '2014年11月27日', '國語', '保護級', '周顯揚', '彭于晏、洪金寶', '<p>故事背景設定在1886年的清末，當時滿清腐敗，天下大亂，</p>\r\n<p>廣州黃埔有兩大惡勢力橫行霸道，黑虎幫和北海幫，</p>\r\n<p>並以暴力威脅統治港口的窮人，讓他們生活在水深火熱之中，民不聊生，</p>\r\n<p>武師黃麒英帶著兒子黃飛鴻（阿飛）行走江湖，設法打擊惡勢力，救濟貧苦......。</p>', 'images/riceofthelegend.jpg', '<iframe width="854" height="480" src="https://www.youtube.com/embed/sIlr6kmAovE" frameborder="0" allowfullscreen></iframe>'),
(10, '危城', '2小時', '2016年8月25日', '國語', '保護級', '陳木勝', '彭于晏', '<p>民國初年，一個叫普城的偏遠城鎮裡，時值中國內戰、軍閥割據亂世時代，</p>\r\n<p>普城的治安由普城保衛團暫管，普城保衛團團長楊克難（劉青雲 飾）由於軍閥少帥曹少璘（古天樂 飾）殺害三條人命，</p>\r\n<p>於是將曹少帥繩之於法，可是曹軍財雄勢大，以強權震懾居民，</p>\r\n<p>曹軍上校張亦（吳京 飾）得悉事件後，趕來普城取人，</p>\r\n<p>遇上多年不見師弟馬鋒（彭于晏 飾），馬鋒是位武功高強的浪人，</p>\r\n<p>路見不平欲拔刀相助，可是卻面臨正義與兄弟情之抉擇。</p>', 'images/callofhero.jpg', '<iframe width="845" height="480" src="https://www.youtube.com/embed/UHvl0w_Kleo" frameborder="0" allowfullscreen></iframe>');

--
-- 已匯出資料表的索引
--

--
-- 資料表索引 `booker`
--
ALTER TABLE `booker`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `movielist`
--
ALTER TABLE `movielist`
  ADD PRIMARY KEY (`id`);

--
-- 在匯出的資料表使用 AUTO_INCREMENT
--

--
-- 使用資料表 AUTO_INCREMENT `booker`
--
ALTER TABLE `booker`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- 使用資料表 AUTO_INCREMENT `movielist`
--
ALTER TABLE `movielist`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
